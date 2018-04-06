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

$sql = "CREATE DATABASE artstore";
if ($conn->query($sql)) {
  include 'schema.php';
  include 'populate.php';
}

?>
