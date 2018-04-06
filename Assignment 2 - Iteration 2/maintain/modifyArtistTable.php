<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "artstore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error());
}


$sql = "UPDATE Artists
SET imagel_id = $_POST[modImageLIDAT], genre_id =$_POST[modGenreIDAT],
artist_name= $_POST[modArtistAT], DOB = $_POST[modDOBAT],
POL=$_POST[modPOLAT], famous_works=$_POST[modFamousAT],
description=$_POST[modDescriptionAT], more_info=$_POST[modInfoAT]
WHERE images_id = $_POST[modImageIDAT]";



if ($conn->query($sql) === TRUE) {
    echo "Table has been updated";
}else {
    echo "Error cannot update " . $conn->error;
}

$conn->close();
?>
