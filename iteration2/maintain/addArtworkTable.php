 <?php
$servername = "localhost";
$username = "etio";
$password = "IsfajAig";
$dbname = "etio";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Artworks(images_id, imagel_id, artist_id, genre_id, subject_id, dimensions, location, artwork_name, price, artwork_date,
artwork_type, description, more_info)
VALUES($_POST[addImageIDAW],$_POST[addImageLIDAW],$_POST[addArtistAW],$_POST[addGenreAW],$_POST[addSubjectAW],
'$_POST[addDimensionsAW]','$_POST[addLocationAW]','$_POST[addArtworkAW]','$_POST[addPriceAW]',
'$_POST[addArtworkDateAW]','$_POST[addArtworkTypeAW]','$_POST[addDescriptionAW]',
'$_POST[addInfoAW]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
