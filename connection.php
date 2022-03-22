<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "se_project";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, "utf8");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "Successfully connected to server <br>";
?>