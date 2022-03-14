<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "se_project";
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Successfully connected to server <br>";
    // Close connection
    $conn->close();
?>