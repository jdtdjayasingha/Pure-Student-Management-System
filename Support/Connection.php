<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dataBase = "student_management_system_db";

    $conn = mysqli_connect($serverName, $userName, $password, $dataBase);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
        echo "Connected successfully";
    }   
?>

