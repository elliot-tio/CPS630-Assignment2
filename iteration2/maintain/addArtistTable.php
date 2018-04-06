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

$sql="INSERT INTO Artists(images_id, imagel_id, genre_id, artist_name, DOB, POL, famous_works, description, more_info)
VALUES($_POST[addImageIDAT],$_POST[addImageLIDAT],$_POST[addGenreIDAT],
'$_POST[addArtistAT]','$_POST[addDOBAT]','$_POST[addPOLAT]',
'$_POST[addFamousAT]','$_POST[addDescriptionAT]','$_POST[addInfoAT]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
