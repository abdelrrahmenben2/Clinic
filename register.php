<?php
// Database connection
$host = 'localhost';
$db = 'user_system';
$user = 'root'; // default for XAMPP/MAMP, update for your server
$pass = ''; // leave empty for XAMPP/MAMP, update for your server
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hashing the password

    // Check if email already exists
    $check_email = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($check_email);

    if ($result->num_rows > 0) {
        echo "Email already registered.";
    } else {
        // Insert user into the database
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
        if ($conn->query($query) === TRUE) {
            echo "Registration successful.";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>