<?php

$serverName = getenv("APP_SERVERNAME");
$username = getenv("APP_USERNAME");
$password = getenv("APP_PASSWORD");
$sql = file_get_contents('./init-database.sql');

// Create connection
$conn = new mysqli($serverName, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    var_dump(mysqli_connect_error());
}



// initialize database
$conn->multi_query($sql);

$conn->close();
