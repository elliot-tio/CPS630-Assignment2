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

if(isset($_GET['value_key'])){

  $value = $_GET['value_key'];

  $sql = "SELECT more_info FROM galleries WHERE gallery_name='" . $value ."'";
  $result = $conn ->query($sql)->fetch_assoc();

  echo $result['more_info'];

  $conn->close();

} else {
  $value = $_POST['selected_museum'];

  echo "<a class='name' href='more_info.php?value_key=" . urlencode($value) . "'>". $value . "</a>";

  $sql = "SELECT description FROM galleries WHERE gallery_name='" . $value . "'";
  $result = $conn->query($sql)->fetch_assoc();

  echo $result['description'];

  $conn->close();
}

?>
