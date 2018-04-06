<?php

$servername = "localhost";
$username = "etio";
$password = "IsfajAig";
$dbname = "etio";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['value_key'])) {
  $value = $_GET['value_key'];

  $sql = "SELECT Image_l.image_l FROM Galleries INNER JOIN Image_l ON Image_l.imagel_id=Galleries.imagel_id WHERE gallery_name='" . $value . "'";

  $result = $conn->query($sql)->fetch_assoc();

  echo "<img src=" . $result['image_l'] . ">";

  $conn->close();

} else {

  $value = $_POST['selected_museum'];

  $sql = "SELECT Image_s.image_s FROM Galleries INNER JOIN Image_s ON Image_s.images_id=Galleries.images_id WHERE gallery_name='" . $value . "'";

  $result = $conn->query($sql)->fetch_assoc();

  echo "<img src=" . $result['image_s'] . ">";

  $conn->close();
}

?>
