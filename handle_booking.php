<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

require_once 'includes/db_connect.php';

// Get form data
$name = $_POST['name'] ?? '';
$number = $_POST['number'] ?? '';
$email = $_POST['email'] ?? '';
$date = $_POST['tel'] ?? '';
$user_id = $_SESSION['user_id'];

// Validate
if (!$name || !$number || !$email || !$date) {
    die("All fields are required.");
}

// Insert into database
$stmt = $conn->prepare("INSERT INTO bookings (user_id, name, number, email, date) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("issss", $user_id, $name, $number, $email, $date);

if ($stmt->execute()) {
    header("Location: profile.php?success=1");
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
