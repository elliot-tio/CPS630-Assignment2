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

if (isset($_POST['in_search'])) { // checks if the button was clicked and its not empty
  $st = $_POST['in_search']; // gets the value sent over from the search bar

  $st = htmlspecialchars($st); // Prevents possible exploits
  
  $sql = "SELECT * FROM Artworks WHERE artwork_name='" . $st ."'"; // Selects the Artwork name that matches the user input

  $result = $conn->query($sql);

   $sql = "SELECT Artists.artist_name FROM Artists INNER JOIN Artworks ON Artists.artist_id=Artworks.artist_id WHERE artwork_name='" . $st . "'"; // selects artist that matches the artwork

   $artist = $conn->query($sql)->fetch_assoc();

   $sql = "SELECT Genre.genre_name FROM Genre INNER JOIN Artworks ON Genre.genre_id=Artworks.genre_id WHERE artwork_name='" . $st . "'"; //selects genre that matches the artwork.

   $genre = $conn->query($sql)->fetch_assoc();

   $array = array();

  if ($result->num_rows > 0 ) { // If there is 1 or more row do the following ...
    while ($row = mysqli_fetch_assoc($result)) {
      
          	
            echo "<p><strong>Artwork Name:</strong> " . $row['artwork_name'] . "</p>
          <p><strong>Date of production:</strong> " . $row['artwork_date'] . "</p>
          <p><strong>Type of painting:</strong> " . $row['artwork_type'] . "</p>
          <p><strong>Dimensions of painting:</strong> " . $row['dimensions'] . "</p>
          <p><strong>Current Location:</strong> " . $row['location'] . "</p>
          <p><strong>Artist</strong>: " . $artist['artist_name'] . "</p>
          <p><strong>Price:</strong> " . "$" . $row['price'] . "</p>
          <p><strong>Genre:</strong> " . $genre['genre_name'] . "</p>";
		  	
      	
    }
  } else {
      echo "<p>No results</p>";
  }
}


$conn->close();

?>
