<?php

function asDollars($value) {
  return '$CAD ' . number_format($value, 2);
}

$servername = "localhost";
$username = "etio";
$password = "IsfajAig";
$dbname = "etio";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// TODO: fix this to make more_info work
if(isset($_GET['value_key'])){
  $value = $_GET['value_key'];

    $sql = "SELECT * FROM Artworks WHERE artwork_name='" . $value ."'";

    $result = $conn->query($sql)->fetch_assoc();

    $sql = "SELECT Artists.artist_name FROM Artists INNER JOIN Artworks ON Artists.artist_id=Artworks.artist_id WHERE artwork_name='" . $value . "'";

    $artist = $conn->query($sql)->fetch_assoc();

    $sql = "SELECT Genre.genre_name FROM Genre INNER JOIN Artworks ON Genre.genre_id=Artworks.genre_id WHERE artwork_name='" . $value . "'";

    $genre = $conn->query($sql)->fetch_assoc();

    echo $result['more_info'];
    echo "<p><strong>Date of production:</strong> " . $result['artwork_date'] . "</p>
          <p><strong>Type of painting:</strong> " . $result['artwork_type'] . "</p>
          <p><strong>Dimensions of painting:</strong> " . $result['dimensions'] . "</p>
          <p><strong>Current Location:</strong> " . $result['location'] . "</p>
          <p><strong>Artist</strong>: " . $artist['artist_name'] . "</p>
          <p><strong>Price:</strong> " . asDollars($result['price']) . "</p>
          <p><strong>Genre:</strong> " . $genre['genre_name'] . "</p>";

    $conn->close();

} else {
  $value = $_POST['selected_artwork'];

  echo "<a class='name' href='more_info.php?value_key=" . urlencode($value) . "'>". $value . "</a>";

  $sql = "SELECT description FROM Artworks WHERE artwork_name='" . $value . "'";

  $result = $conn->query($sql)->fetch_assoc();

  echo $result['description'];

  $conn->close();
}

?>
