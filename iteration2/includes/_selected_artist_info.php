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

if(isset($_GET['value_key'])){

  $value = $_GET['value_key'];

  $sql = "SELECT * FROM Artists WHERE artist_name='" . $value ."'";
  $result = $conn ->query($sql)->fetch_assoc();

  $sql = "SELECT Genre.genre_name FROM Genre INNER JOIN Artworks ON Genre.genre_id=Artworks.genre_id WHERE artwork_name='" . $value . "'";
  $genre = $conn->query($sql)->fetch_assoc();

  echo $result['more_info'];
  echo "<p><strong>Date of birth/death:</strong> " . $result['DOB'] . "</p>
        <p><strong>Place of living:</strong> " . $result['POL'] . "</p>
        <p><strong>Genre:</strong> " . $genre['genre_name'] . "</p>
        <p><strong>Famous artworks:</strong> " . $result['famous_works'] . "</p>";

  $conn->close();

} else {
  $value = $_POST['selected_artist'];

  echo "<a class='name' href='more_info.php?value_key=" . urlencode($value) . "'>". $value . "</a>";

  $sql = "SELECT description FROM Artists WHERE artist_name='" . $value . "'";
  $result = $conn->query($sql)->fetch_assoc();

  echo $result['description'];

  $conn->close();
}

?>
