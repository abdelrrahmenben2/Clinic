<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

require_once 'includes/db_connect.php'; // database connection

$user_id = $_SESSION['user_id'];

// Fetch user data
$user_stmt = $conn->prepare("SELECT username, email, phone FROM users WHERE id = ?");
$user_stmt->bind_param("i", $user_id);
$user_stmt->execute();
$user_result = $user_stmt->get_result();
$user = $user_result->fetch_assoc();

// Fetch bookings
$booking_stmt = $conn->prepare("SELECT name, number, email, date FROM bookings WHERE user_id = ?");
$booking_stmt->bind_param("i", $user_id);
$booking_stmt->execute();
$booking_result = $booking_stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fontawesome-free-6.7.2-web/css/all.min.css">
</head>
<body>

<!-- Header (optional) -->
<header class="header">
    <a href="#" class="logo"><i class="fas fa-user"></i> Profile</a>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="logout.php" class="btn">Logout</a>
    </nav>
</header>

<section class="profile" style="padding-top:12rem;">

    <h1 class="heading"><span>User</span> Profile</h1>

    <div class="services">

        <div class="box-container">

            <div class="box">
                <i class="fas fa-user"></i>
                <h3><?= htmlspecialchars($user['username']) ?></h3>
                <p><i class="fas fa-envelope"></i> <?= htmlspecialchars($user['email']) ?></p>
                <p><i class="fas fa-phone"></i> <?= htmlspecialchars($user['phone']) ?></p>
            </div>

        </div>

    </div>

</section>

<section class="bookings">

    <h1 class="heading"><span>Your</span> Bookings</h1>

    <div class="services">

        <div class="box-container">

            <?php if ($booking_result->num_rows > 0): ?>
                <?php while ($booking = $booking_result->fetch_assoc()): ?>
                    <div class="box">
                        <i class="fas fa-calendar-check"></i>
                        <h3><?= htmlspecialchars($booking['name']) ?></h3>
                        <p><i class="fas fa-calendar"></i> Date: <?= htmlspecialchars($booking['date']) ?></p>
                        <p><i class="fas fa-envelope"></i> <?= htmlspecialchars($booking['email']) ?></p>
                        <p><i class="fas fa-phone"></i> <?= htmlspecialchars($booking['number']) ?></p>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="box">
                    <h3>No Bookings Yet</h3>
                    <p>Make your first booking now!</p>
                </div>
            <?php endif; ?>

        </div>

    </div>

</section>

</body>
</html>
