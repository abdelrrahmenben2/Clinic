<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sqlFile = 'create_db.sql';


$sqlCommands = file_get_contents($sqlFile);

if ($sqlCommands === false) {
    die("Could not read the SQL file.");
}


if ($conn->multi_query($sqlCommands)) {
    do {

        if ($result = $conn->store_result()) {
            $result->free();
        }
    } while ($conn->next_result());

    echo "Database imported successfully!";
} else {
    echo "Error during import: " . $conn->error;
}

$conn->close();
?>
