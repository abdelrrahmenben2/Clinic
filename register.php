<?php
// Database connection
$host = 'localhost';
$db = 'user_system';
$user = 'root'; // default for XAMPP
$pass = '';     // empty for XAMPP
$conn = new mysqli($host, $user, $pass, $db);

// Check DB connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// When form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $phone = $_POST['phone'] ?? '';
    // Validation
    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if email exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        die("Email already registered.");
    }

    // Insert user
    $stmt = $conn->prepare("INSERT INTO users (username, email, tel, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $phone, $hashed_password);
    

        if ($stmt->execute()) {
            echo "<script>
                alert('Registration successful!');
                window.location.href = 'login.html';
            </script>";
        }


    } else {
        echo "Something went wrong: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

?>
