<?php
$servername = "localhost";
$username = "root";
$password = "";
$sqlFile = 'creat_db.sql'; 


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sqlCommands = file_get_contents($sqlFile);

if ($sqlCommands === false) {
    die("Failed to read SQL file.");
}


if ($conn->multi_query($sqlCommands)) {
    do {
        if ($result = $conn->store_result()) {
            $result->free();
        }
    } while ($conn->next_result());


    file_put_contents('installed.txt', 'Installation complete on ' . date('Y-m-d H:i:s'));

    echo "<script>
            alert('Database installed successfully!');
            window.location.href = 'login.php';
          </script>";
} else {
    echo "Error during database setup: " . $conn->error;
}

$conn->close();
?>
