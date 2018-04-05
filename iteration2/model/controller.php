<?php

$servername = "localhost";
$username = "etio";
$password = "IsfajAig";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create database

$sql = "USE etio";
if ($conn->query($sql)) {
  include 'schema.php';
  include 'populate.php';
} else {
	echo "Error creating: " . $conn->error;
}


?>
