<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "cps630assignment2";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// TODO: Create a list of images to enter into database - but only once

$sql = "REPLACE INTO Image_s(image_s) VALUES ('images/leonardo-da-vinci.jpg')";

if ($conn->query($sql) === TRUE) {
  echo "Success!";
} else {
  echo "Error inserting: " . $conn->error;
}

$sql = "SELECT image_s FROM Image_s WHERE images_id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>" . "Image: " . $row["image_s"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>
