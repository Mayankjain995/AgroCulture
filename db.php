<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "agroculture";
    $port="3308";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName, $port);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
