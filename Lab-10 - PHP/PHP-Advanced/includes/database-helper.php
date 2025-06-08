<?php
    // DB Connection String
    $DATABASE_SERVER = "localhost";
    $DATABASE_USER = "root";
    $DATABASE_PASSWORD = "";
    $DATABASE_NAME = "cui_bsse";
    
    $conn = mysqli_connect($DATABASE_SERVER, $DATABASE_USER, $DATABASE_PASSWORD, $DATABASE_NAME);

    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    } else{
    //echo "Connected successfully";
}
?>