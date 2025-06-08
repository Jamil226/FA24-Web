<?php
    $SERVER_NAME = "localhost";
    $USER_NAME = "root";
    $PASSWORD = "";
    $DB_NAME = "client_university";
    $conn = mysqli_connect($SERVER_NAME, $USER_NAME, $PASSWORD, $DB_NAME);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";
?>