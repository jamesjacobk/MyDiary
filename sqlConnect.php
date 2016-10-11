<?php
    $host = "127.0.0.1";
    $username = "root";
    $password = "root123";
    $conn = new mysqli($host, $username, $password);

    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
?>