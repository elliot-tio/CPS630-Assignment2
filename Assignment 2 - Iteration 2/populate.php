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

// TODO: Create a list of images to enter into database - but only once

// populate image_s
$image_s = array("images/leonardo-da-vinci-small.jpg",
                "images/michelangelo-small.jpg",
                "images/monet-small.jpg",
                "images/picasso-small.jpg",
                "images/van-gogh-small.jpg",
                "images/baroque1-small.jpg",
                "images/creation-of-adam-small.jpg",
                "images/realism2-small.jpg",
                "images/renaissance-small.jpg",
                "images/starry-night-small.jpg",);

for ($x = 0; $x < sizeof($image_s); $x++) {
  $sql = "INSERT INTO Image_s(image_s) VALUES ('" . $image_s[$x] . "')";
  $conn->query($sql);
  // if ($conn->query($sql) === TRUE) {
  //   echo "Success!";
  // } else {
  //   echo "Error inserting: " . $conn->error;
  // }
}

// populate image_l
$image_l = array("images/leonardo-da-vinci.jpg",
                "images/michelangelo.jpg",
                "images/monet.jpg",
                "images/picasso.jpg",
                "images/van-gogh.jpg",
                "images/baroque1.jpg",
                "images/creation-of-adam.jpg",
                "images/realism2.jpg",
                "images/renaissance.jpg",
                "images/starry-night.jpg",);

for ($x = 0; $x < sizeof($image_l); $x++) {
  $sql = "INSERT INTO Image_l(image_l) VALUES ('" . $image_l[$x] . "')";
  $conn->query($sql);
  // if ($conn->query($sql) === TRUE) {
  //   echo "Success!";
  // } else {
  //   echo "Error inserting: " . $conn->error;
  // }
}

// populate genre
$genres = array("Renaissance",
                "Post-Impressionism",
                "Impressionism",
                "Surrealism",
                "Cubism",
                "Baroque",);

for ($x = 0; $x < sizeof($genres); $x++) {
  $sql = "INSERT INTO genre(genre_name) VALUES ('" . $genres[$x] . "')";
  $conn->query($sql);
  // if ($conn->query($sql) === TRUE) {
  //   echo "Success!";
  // } else {
  //   echo "Error inserting: " . $conn->error;
  // }
}

// populate subject
$subjects = array("Portrait",
                  "Religious Theme",
                  "Landscape",);

for ($x = 0; $x < sizeof($subjects); $x++) {
  $sql = "INSERT INTO subject(subject_name) VALUES ('" . $subjects[$x] . "')";
  $conn->query($sql);
  // if ($conn->query($sql) === TRUE) {
  //   echo "Success!";
  // } else {
  //   echo "Error inserting: " . $conn->error;
  // }
}

$sql = "INSERT INTO Artists(genre_id, artist_name, DOB, POL, description)
                    VALUES(1, 'Leonardo da Vinci', 'April 15, 1452 - May 2, 1519',
                            'Italy', 'Leonardo-da-vinci was an Italian Renaissance polymath whose fields of interests included: invention, painting architecture, science, math and many more.')";
$conn->query($sql);
// if ($conn->query($sql) === TRUE) {
//   echo "Success!";
// } else {
//   echo "Error inserting: " . $conn->error;
// }

$sql = "INSERT INTO Artworks(images_id, imagel_id, artist_id, genre_id,
                          subject_id, artwork_name, price, artwork_date,
                          artwork_type, description)
                          VALUES(8, 8, 1, 1, 1, 'Mona Lisa', 1, '1', 'Painting', 'Painting of Mona Lisa')";
$conn->query($sql);
// if ($conn->query($sql) === TRUE) {
//   echo "Success!";
// } else {
//   echo "Error inserting: " . $conn->error;
// }
$conn->close();

?>
