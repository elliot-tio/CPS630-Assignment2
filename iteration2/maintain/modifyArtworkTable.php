<?php
$servername = "localhost";
$username = "etio";
$password = "IsfajAig";
$dbname = "etio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error());
}


$sql = "UPDATE Artworks
SET imagel_id = $_POST[modImageLIDAW], artist_id = $_POST[modArtistAW],
genre_id = $_POST[modGenreIDAW], subject_id = $_POST[modSubjectAW],
dimensions = $_POST[modDimensionsAW], location = $_POST[modLocationAW],
artwork_name = $_POST[modArtworkNameAW], price = $_POST[modPriceAW],
artwork_date = $_POST[modArtworkDateAW], artwork_type = $_POST[modArtworkTypeAW],
description = $_POST[modDescriptionAW], more_info = $_POST[modInfoAW]
WHERE images_id = $_POST[modImageIDAW]";


if ($conn->query($sql) === TRUE) {
    echo "Table has been updated";
}else {
    echo "Error cannot update " . $conn->error;
}

$conn->close();
?>
