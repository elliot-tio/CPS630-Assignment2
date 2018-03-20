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
$sql = "CREATE DATABASE cps630assignment2";
$conn->query($sql);

$conn->close();
// TODO: Get select option values and access databases SELECT
// TODO: In Maintain mode, UPDATE/DROP table values
?>
