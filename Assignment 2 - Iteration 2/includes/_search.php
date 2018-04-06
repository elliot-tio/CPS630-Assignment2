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

if (isset($_POST['in_search'])) { // checks if the button was clicked and its not empty
  $st = $_POST['in_search']; // gets the value sent over from the search bar

  $st = htmlspecialchars($st); // Prevents possible exploits
  //$st = mysql_real_escape_string($st); // Makes sure SQL Injection will not occur.

  $sql ="SELECT artwork_name FROM Artworks"; // Uses LIKE to find any values that have the value from the search bar in any position.

  $array = array();
  $result = $conn->query($sql);

  if ($result->num_rows > 0 ) { // If there is 1 or more row do the following ...
    while ($row = mysqli_fetch_assoc($result)) {
      $value = $row['artwork_name'];

    	if (stripos($value,$st) !== false) {
        array_push($array, $value);
        echo "<p>" . $value . "</p>";
      }
    }
  } else {
      echo "<p>No results</p>";
  }
}

$conn->close();

?>
