<?php
$value = $_POST['selected_artist'];

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "artstore";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT description FROM artists WHERE artist_name='" . $value . "'";

$result = $conn->query($sql)->fetch_assoc();

echo $result['description'];

$conn->close();
?>
