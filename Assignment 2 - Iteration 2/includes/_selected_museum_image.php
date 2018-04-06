<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "artstore";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['value_key'])) {
  $value = $_GET['value_key'];

  $sql = "SELECT image_l.image_l FROM galleries INNER JOIN image_l ON image_l.imagel_id=galleries.imagel_id WHERE gallery_name='" . $value . "'";

  $result = $conn->query($sql)->fetch_assoc();

  echo "<img src=" . $result['image_l'] . ">";

  $conn->close();

} else {

  $value = $_POST['selected_museum'];

  $sql = "SELECT image_s.image_s FROM galleries INNER JOIN image_s ON image_s.images_id=galleries.images_id WHERE gallery_name='" . $value . "'";

  $result = $conn->query($sql)->fetch_assoc();

  echo "<img src=" . $result['image_s'] . ">";

  $conn->close();
}

?>
