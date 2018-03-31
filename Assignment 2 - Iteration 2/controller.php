<?php

$servername = "localhost";
$username = "root";
$password = "admin";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS artstore";
$conn->query($sql);

$conn->close();

?>
