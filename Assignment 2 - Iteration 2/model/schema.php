<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "artstore";

// TODO: Create tables

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create Image_s
$sql = "CREATE TABLE Image_s (
	images_id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT,
	image_s VARCHAR(100) NOT NULL UNIQUE,
	PRIMARY KEY(images_id)
)";

$conn->query($sql);
// if ($conn->query($sql) === TRUE) {
//     echo "Table Images created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

// Create Image_l
$sql = "CREATE TABLE Image_l (
  imagel_id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT,
  image_l VARCHAR(100) NOT NULL UNIQUE,
  PRIMARY KEY (imagel_id)
)";

$conn->query($sql);
// if ($conn->query($sql) === TRUE) {
//   echo "Table Image_l created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

// Create Galleries
$sql = "CREATE TABLE Galleries (
	gallery_id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT,
	gallery_name VARCHAR(100) NOT NULL UNIQUE,
	PRIMARY KEY(gallery_id)
)";

$conn->query($sql);
// if ($conn->query($sql) === TRUE) {
//   echo "Table Galleries created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

// Create Genre
$sql = "CREATE TABLE Genre (
	genre_id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT,
	genre_name VARCHAR(100) NOT NULL UNIQUE,
	PRIMARY KEY(genre_id)
)";

$conn->query($sql);
// if ($conn->query($sql) === TRUE) {
//   echo "Table Genre created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

// Create Subject
$sql = "CREATE TABLE Subject (
	subject_id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT,
	subject_name VARCHAR(100) NOT NULL UNIQUE,
	PRIMARY KEY(subject_id)
)";

$conn->query($sql);
// if ($conn->query($sql) === TRUE) {
//   echo "Table Subject created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

// Create Artists
$sql = "CREATE TABLE Artists (
  images_id INT(100) UNSIGNED NOT NULL UNIQUE,
	imagel_id INT(100) UNSIGNED NOT NULL UNIQUE,
	artist_id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT,
	genre_id INT(100) UNSIGNED NOT NULL,
	artist_name VARCHAR(100) NOT NULL UNIQUE,
	DOB VARCHAR(100) NOT NULL,
	POL VARCHAR(100) NOT NULL,
  famous_works VARCHAR(100) NOT NULL,
	description TEXT NOT NULL,
  more_info TEXT NOT NULL,
	PRIMARY KEY(artist_id),
	FOREIGN KEY(genre_id) REFERENCES Genre(genre_id) ON DELETE CASCADE
)";

$conn->query($sql);
// if ($conn->query($sql) === TRUE) {
//   echo "Table Artists created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

// Create Artworks
$sql = "CREATE TABLE Artworks (
	artwork_id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT,
	images_id INT(100) UNSIGNED NOT NULL UNIQUE,
	imagel_id INT(100) UNSIGNED NOT NULL UNIQUE,
	artist_id INT(100) UNSIGNED NOT NULL,
	genre_id INT(100) UNSIGNED NOT NULL,
	subject_id INT(100) UNSIGNED NOT NULL,
  dimensions VARCHAR(100) NOT NULL,
  location VARCHAR(100) NOT NULL,
	artwork_name VARCHAR(100) NOT NULL,
	price INT(100) UNSIGNED NOT NULL,
	artwork_date VARCHAR(100) NOT NULL,
	artwork_type VARCHAR(100) NOT NULL,
	description TEXT NOT NULL,
  more_info TEXT NOT NULL,
	PRIMARY KEY(artwork_id),
	FOREIGN KEY(images_id) REFERENCES Image_s(images_id) ON DELETE CASCADE,
	FOREIGN KEY(imagel_id) REFERENCES Image_l(imagel_id) ON DELETE CASCADE,
	FOREIGN KEY(artist_id) REFERENCES Artists(artist_id) ON DELETE CASCADE,
	FOREIGN KEY(genre_id) REFERENCES Genre(genre_id) ON DELETE CASCADE,
	FOREIGN KEY(subject_id) REFERENCES Subject(subject_id) ON DELETE CASCADE
)";

$conn->query($sql);
// if ($conn->query($sql) === TRUE) {
//   echo "Table Artworks created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

$sql = "CREATE TABLE ShoppingCart (
	SC_id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT,
	artwork_id INT(100) UNSIGNED NOT NULL,
	price INT(100) UNSIGNED NOT NULL,
	Quantity INT(100) UNSIGNED NOT NULL,
	S_method VARCHAR(100) NOT NULL,
	PRIMARY KEY(SC_id),
	FOREIGN KEY(artwork_id) REFERENCES Artworks(artwork_id)
)";

$conn->query($sql);
// if ($conn->query($sql) === TRUE) {
//   echo "Table ShoppingCart created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

$sql = "CREATE TABLE Review (
	review_id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT,
	review_value INT(100) UNSIGNED NOT NULL,
	artwork_id INT(100) UNSIGNED NOT NULL,
	PRIMARY KEY(review_id),
	FOREIGN KEY(artwork_id) REFERENCES Artworks(artwork_id)
)";

$conn->query($sql);
// if ($conn->query($sql) === TRUE) {
//   echo "Table Review created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

$conn->close();

?>
