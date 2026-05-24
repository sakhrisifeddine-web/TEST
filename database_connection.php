<?php
    $host = "localhost";
    $user = "root";
    $pw = "";
    $db = "carshop";
    $port = 3307;
    $conn = mysqli_connect($host, $user, $pw, $db, $port);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
?>