<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

require_once 'db_connect.php'; // database connection

$user_id = $_SESSION['user_id'];

// Fetch user data
$user_stmt = $conn->prepare("SELECT username, email, tel FROM users WHERE id = ?");
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
        <a href="index.html">Home</a>
        <a href="logout.php" class="btn">Logout</a>
    </nav>
</header>

<section class="profile" style="padding-top:12rem;">

    <h1 class="heading"><span>User</span> Profile</h1>

    <div class="services">

        <div class="box-container">

            <div class="box">
                
                <h3><i class="fas fa-user"></i><?= htmlspecialchars($user['username']) ?></h3>
                <h3><i class="fas fa-envelope"></i> <?= htmlspecialchars($user['email']) ?></h3>
                <h3><i class="fas fa-phone"></i> <?= htmlspecialchars($user['tel']) ?></h3>
            </div>

        </div>

    </div>

</section>

<section class="bookings">

    <h1 class="heading"><span>Your</span> Bookings</h1>

    <div class="services">

        <div class="box-container" style="overflow-x:auto;">

            <?php if ($booking_result->num_rows > 0): ?>
                <table style="width: 100%; border-collapse: collapse; text-align: left; background: #fff; border: var(--border); box-shadow: var(--box-shadow);">
                    <thead style="background: var(--green); color: #fff;">
                        <tr>
                            <th style="padding: 1rem; font-size: 1.8rem;">Name</th>
                            <th style="padding: 1rem; font-size: 1.8rem;">Date</th>
                            <th style="padding: 1rem; font-size: 1.8rem;">Email</th>
                            <th style="padding: 1rem; font-size: 1.8rem;">Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($booking = $booking_result->fetch_assoc()): ?>
                        <tr style="border-top: var(--border);">
                            <td style="padding: 1rem; font-size: 1.6rem;"><?= htmlspecialchars($booking['name']) ?></td>
                            <td style="padding: 1rem; font-size: 1.6rem;"><?= htmlspecialchars($booking['date']) ?></td>
                            <td style="padding: 1rem; font-size: 1.6rem;"><?= htmlspecialchars($booking['email']) ?></td>
                            <td style="padding: 1rem; font-size: 1.6rem;"><?= htmlspecialchars($booking['number']) ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="box" style="text-align:center;">
                    <h3>No Bookings Yet</h3>
                    <p>Make your first booking now!</p>
                </div>
            <?php endif; ?>

        </div>

    </div>

</section>


</body>
</html>
