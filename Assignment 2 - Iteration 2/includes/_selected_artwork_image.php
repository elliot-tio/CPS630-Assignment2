<?php
$value = $_POST['selected_artwork'];

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "artstore";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT image_s.image_s FROM artworks INNER JOIN image_s ON image_s.images_id=artworks.images_id WHERE artwork_name='" . $value . "'";

$result = $conn->query($sql)->fetch_assoc();

echo "<img src=" . $result['image_s'] . ">";

$conn->close();

?>
