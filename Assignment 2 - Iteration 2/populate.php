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

// populate artists
$sql = "INSERT INTO Artists(images_id, imagel_id, genre_id, artist_name, DOB, POL, famous_works, description, more_info)
                    VALUES(1, 1, 1,
                      'Leonardo da Vinci',
                      'April 15, 1452 - May 2, 1519',
                      'Italy',
                      'Mona Lisa, The Last Supper',
                      '<p>Leonardo di ser Piero da Vinci or commonly know as Leonardo. He is an italian Renaissance artist, and an inventor. He painted the Mona Lisa and is world famous for it.</p>',
                      '<p>Leonardo-da-vinci was an Italian Renaissance polymath whose fields of interests included: invention, painting architecture, science, math and many more.</p><p>He is also known as the father of palaeontology, ichnology, and architecture. Leonardo-da-vinci is also widely known as one of the greatest painters of all time and epitomizes the Renaissance humanist ideal.</p>')";
$conn->query($sql);

$sql = "INSERT INTO Artists(images_id, imagel_id, genre_id, artist_name, DOB, POL, famous_works, description, more_info)
                    VALUES(2, 2, 3,
                      'Michelangelo',
                      'November 14, 1840 - December 5, 1926',
                      'France',
                      'David, Sistine Chapel ceiling',
                      '<p>Michelangelo di Lodovico Buonarroti Simoni or commonly known as Michelangelo. He is a man of culture, a man of sculpture, and a man of Christian artwork. He painted and sculpted during the High Renaissance, and is largely considered one of the greatest artists of all time. See: The Creation of Adam and other works.</p>',
                      '<p>Michelangelo di Lodovico Buonarroti Simoni was born in the Republic of Florence, and exterted an unparalleled influence on the development of Western art.</p><p>He is considered by some as the greatest artist of all time. Despite creating artworks outside of his field, it was of such high quality that he is often cosidered a contender for the title of archetypal Renaissance man.</p>')";
$conn->query($sql);

$sql = "INSERT INTO Artists(images_id, imagel_id, genre_id, artist_name, DOB, POL, famous_works, description, more_info)
                    VALUES(3, 3, 1,
                      'Claude Monet',
                      'April 15, 1452 - May 2, 1519',
                      'Italy',
                      'Impression - Sunrise, Water Lilies',
                      '<p>Oscar Claude Monet left his impression on this world as the founder of French Impressionist painting, creating works based on nature and of everyday life. One of the greatest 19th century painters to have graced the Earth.</p>',
                      '<p>Oscar Claude Monet was a famous French impressionist artist. The term impressionalism was derived from the title of his painting Impression.</p><p>Monet and his ambition for documenting French countryside led to the formation of him painting the same scene many times under several conditions</p>')";
$conn->query($sql);

$sql = "INSERT INTO Artists(images_id, imagel_id, genre_id, artist_name, DOB, POL, famous_works, description, more_info)
                    VALUES(4, 4, 4,
                      'Pablo Picasso',
                      'October 25, 1881 - April 8, 1973',
                      'Spain/France',
                      'The Old Guitarist, La Vie',
                      '<p>Pablo Picasso of modern fame was a prominent late 19th early 20th century painter whose work on Surrealism and abstract art drew crowds from around the world. Famous paintings such as The Old Guitarist along with his drawings and sculptures are timeless. He was a Spanish painter, sculptor, printmaker, ceramicist, stage designer, poet, and playwright that spent most of his adult life in France.</p>',
                      '<p>Pablo Picasso was regarded as one of the most influential artists of the 20th century. Picasso demonstrated his extraordinary artistic talent during his childhood to adolescence. The artworks created by Picasso are often categorized into periods.</p>')";
$conn->query($sql);

$sql = "INSERT INTO Artists(images_id, imagel_id, genre_id, artist_name, DOB, POL, famous_works, description, more_info)
                    VALUES(5, 5, 2,
                      'Vincent van Gogh',
                      'March 30, 1853 - July 29, 1890',
                      'Netherlands/France',
                      'The Starry Night, Sunflowers',
                      '<p>Vincent Willem van Gogh, a Dutch Post-Impressionlist painter. The life of Vincent van Gogh was rough and traumatizing. Learn more in his wiki - he painted lots of artworks including Sunflowers and Starry Night.</p><p>He cut off his own ear.</p>',
                      '<p>Vincent William van Gogh is one of the most influential and famous figures in the history of western art. He has created about 2,100 artworks just barely over a decade and are characterised by bold colors, dramatic, impulsive, and expressive brushworks that serve as the foundation of modern art.</p><p>Van Gogh has also suffered from mental instability as he had pyschotic episodes and delusions.</p>')";
$conn->query($sql);

$sql = "INSERT INTO Artists(images_id, imagel_id, genre_id, artist_name, DOB, POL, famous_works, description, more_info)
                    VALUES(6, 6, 6,
                      'Paolo De Matteis',
                      'N/A',
                      'N/A',
                      'N/A',
                      'N/A',
                      'N/A')";
$conn->query($sql);

$sql = "INSERT INTO Artists(images_id, imagel_id, genre_id, artist_name, DOB, POL, famous_works, description, more_info)
                    VALUES(7, 7, 1,
                      'Perugino',
                      'N/A',
                      'N/A',
                      'N/A',
                      'N/A',
                      'N/A')";
$conn->query($sql);
// if ($conn->query($sql) === TRUE) {
//   echo "Success!";
// } else {
//   echo "Error inserting: " . $conn->error;
// }

// populate artworks
$sql = "INSERT INTO Artworks(images_id, imagel_id, artist_id, genre_id,
                          subject_id, dimensions, location, artwork_name, price, artwork_date,
                          artwork_type, description, more_info)
                          VALUES(6, 6, 6, 6, 2,
                            'N/A',
                            'N/A',
                            'De Matteis Triumph of the Immaculate Anagoria',
                            200000000,
                            'c. 1710 - 1715',
                            'Fresco',
                            '<p>A baroque era fresco painting by Paolo De Matteis.</p>',
                            '<p>Difficult to extract, but worth the price.</p>')";
$conn->query($sql);

$sql = "INSERT INTO Artworks(images_id, imagel_id, artist_id, genre_id,
                          subject_id, dimensions, location, artwork_name, price, artwork_date,
                          artwork_type, description, more_info)
                          VALUES(7, 7, 2, 3, 2,
                            '280cm x 570cm',
                            'Sistine Chapel Ceiling',
                            'The Creation of Adam',
                            300000,
                            'c. 1512',
                            'Fresco',
                            '<p>Pretty thirsty for knowledge, The Creation of Adam by Michelangelo is a fresco painting any ceiling enthusiast will want in their collection. Price does not include extraction.</p>',
                            '<p>Illustrates the the biblical creation narrative from the bible where God gives life to the first man, Adam. The near touching hands of God and Adam becomes the iconic of humanity.</p>')";
$conn->query($sql);

$sql = "INSERT INTO Artworks(images_id, imagel_id, artist_id, genre_id,
                          subject_id, dimensions, location, artwork_name, price, artwork_date,
                          artwork_type, description, more_info)
                          VALUES(8, 8, 1, 1, 1,
                            '77cm x 53cm',
                            'Musee du Louvre, Paris',
                            'Mona Lisa',
                            1000000000,
                            'c. 1503 - 1506',
                            'Oil on Poplar Panel',
                            '<p>Renowned for her smile, this is the famous Mona Lisa. The Mona Lisa is a half-length portrait painting by the Italian Renaissance artist Leonardo da Vinci.</p>',
                            '<p>The Mona Lisa is widely reknowned around the world. It is one of the most valuable paintings in the world. The painting is assumed to be the portrait of Lisa Gherardini the wife of Francesco del Giocondo.</p><p>The expression of Mona Lisa is often described as enigmatic, as the atmospheric illusionism, subtle modelling of the forms contribute to continuing fascination to this day.</p>')";
$conn->query($sql);

$sql = "INSERT INTO Artworks(images_id, imagel_id, artist_id, genre_id,
                          subject_id, dimensions, location, artwork_name, price, artwork_date,
                          artwork_type, description, more_info)
                          VALUES(9, 9, 7, 1, 2,
                            '330cm x 550cm',
                            'Sistine Chapel',
                            'The Delivery of the Keys to Saint Peter',
                            999999,
                            'c. 1481 - 1482',
                            'Fresco',
                            '<p>From the classical Italian Renaissance era painter Pietro Perugino comes a masterpiece of epic proportions. Part of the world famous Sistine Chapel next to the more famous painting by Michelangelo, The Delivery of the Keys to Saint Peter is a magnificent piece of art to add to any collection.</p>',
                            '<p>The work originated from when Perugino was decorating a chapel in Rome and the pope; Pope Sixtus IV was pleased by his work. The pope comissioned Perugino and other artists in the formation of this artwork to be used as a decoration of a new chapel build in the Vatican.</p>')";
$conn->query($sql);

$sql = "INSERT INTO Artworks(images_id, imagel_id, artist_id, genre_id,
                          subject_id, dimensions, location, artwork_name, price, artwork_date,
                          artwork_type, description, more_info)
                          VALUES(10, 10, 5, 2, 3,
                            '73.7cm x 92.1cm',
                            'Museum of Modern Art, New York City',
                            'The Starry Night',
                            300000000,
                            '1889',
                            'Oil on Canvas',
                            '<p>The art of art - the Starry Night is an oil on canvas created by the Dutch post-impressionist by Vincent van Gogh, it is the art work that all art thieves want to thief. No collection of art is complete without this art of all arts.</p>',
                            '<p>The painting depicts the view from the east-facing window of the asylum room at Saint-Remy-De-Provence, just before sunrise with the image of an idealized village.</p>')";
$conn->query($sql);
// if ($conn->query($sql) === TRUE) {
//   echo "Success!";
// } else {
//   echo "Error inserting: " . $conn->error;
// }
$conn->close();

?>
