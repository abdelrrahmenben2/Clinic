<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html"); // redirect to login if not logged in
    exit;
}

// Connect to DB
$conn = new mysqli('localhost', 'root', '', 'user_system');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user info
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT username, email, phone, appointment_date FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($username, $email, $phone, $appointment_date);
$stmt->fetch();
$stmt->close();
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile - MedCare</title>
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<header class="header">
    <a href="#" class="logo"><i class="fas fa-heartbeat"></i> MedCare</a>
    <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="profile.html" class="login">Profile</a>
    </nav>
</header>

<section class="profile" style="padding-top: 10rem;">
    <h1 class="heading">Your <span>Profile</span></h1>

    <div class="box" style="max-width: 500px; margin: auto; background: #fff; padding: 2rem; border: var(--border); box-shadow: var(--box-shadow); border-radius: .5rem;">
        <p><strong>Name:</strong> <?php echo htmlspecialchars($username); ?></p>
        <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Appointment Date:</strong> <?php echo htmlspecialchars($appointment_date); ?></p>
    </div>

    <div style="text-align:center; margin-top: 2rem;">
        <a href="index.html" class="btn">Back to Home</a>
    </div>
</section>

</body>
</html>
