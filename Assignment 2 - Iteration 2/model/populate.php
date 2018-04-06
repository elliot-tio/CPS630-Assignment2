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
                "images/starry-night.jpg",
                "images/stoa-small.jpg",
                "images/louvre-small.jpg",
                "images/rom-small.jpg",
                "images/miyanomori.jpg",
                "images/benaki-small.jpg",);

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
                "images/starry-night.jpg",
                "images/stoa.jpg",
                "images/louvre.jpg",
                "images/rom.jpg",
                "images/miyanomori.jpg",
                "images/benaki.jpg",);

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

$sql = "INSERT INTO Galleries(images_id, imagel_id, gallery_name, famous_works, description, more_info)
                      VALUES(11, 11,
                            'Stoa of Attalos',
                            'Statue of a Goddess (probably Aphrodite),
                            Statuette of a satyr,
                            Bust of the Roman Emperor: Antoninus Pius',
                            '<p>The Stoa of Attalos(also spelled Attalus) is a stoa (walkway/portico) which is commonly for public use.</p>',
                            '<p>The Stoa of Attalos originated in Agora of Athens, Greece. THe structure was built by and named after the King of Atalos II of Permagon who ruled between 159 BC and 138 BC. The time when it was created was considered as the Hellenstic age and the building incoporates a multitude of different architectural orders. The Stoa of Attalos is made up of Pentelic marble and limestone, and is at a size of 115 by 20 meters (377 by 66 ft) Originally the building was created as a gift to the city for the education that Attalos received there. However the Stoa was destroyed by the Heruli in 267, though the building was reconstructed faithfully to the original during mordern times (1952-1956) and was created by the American School of Classical Studies at Athens.</p>')";

$conn->query($sql);

$sql = "INSERT INTO Galleries(images_id, imagel_id, gallery_name, famous_works, description, more_info)
                      VALUES(12, 12,
                            'Louvre',
                            'Mona Lisa,	Winged Victory of Samothrace, Michealangelos Dying Slave',
                            '<p>The worlds largest art museum and a historic monument in Paris, France.</p>',
                            '<p>The Louvre Museum is a central landmark of the city and is located on the right bank of the Seine in the cities 1st district. Approximately 38,000 artworks are on display, and covers over a surface area of 72,735 square meters. The museum is hosted in the Louvre Palace, it was originally supposed to be built as a fortress in the late 12th to 13th century under Phillip II. As time passed, the fortress eventually lost its defensive functions due to urban expansion of the city. The generation of leaders eventually changed it to its current state as a museum after several modifications. The museum official debuted on August 10th 1793 exhibiting 537 displays. However due to structural issues, it was closed and re-opened a few times. THe museum houses 8 curatorial departments: Egyption Antiquities, Near Eastern Antiquities, Greek, Etruscan and Roman Antiquities, Islamic Art, Sculptures, Decorative Arts, Paintings, Prints and Drawings.</p>')";

$conn->query($sql);

$sql = "INSERT INTO Galleries(images_id, imagel_id, gallery_name, famous_works, description, more_info)
                      VALUES(13, 13,
                            'Royal Ontario Museum',
                            'Raphaels Frescoes, Sarcophagus of the Spouses,	Mosaics in Santa Maria in Trastevere',
                            '<p>The Royal Ontario Museum(also known as ROM), is a museum of art, world culture and natural history.</p>',
                            '<p>The ROM is one of the largest museums in North America and considered the largest in Canada; located in Toronto, Ontario, Canada. The ROM was created on April 16th 1912 and officially debuted on March 19th 1914. ROM was originally created by the collaboration of the University of Toronto and the Ontario government, however the University of Toronto directly controlled and managed the museum until 1968, where the ownwership was transferred to the Crown Agency of the Ontario government. The building has underwent a few constructions and expansions throughout the year.</p><p>There are many varieties of artworks from both sides of the worlds. There are 4 types of Galleries: Natural History Gallery, World Culture Gallery, Hands-on Gallery, Institute for Contemporary Cultural Gallery.</p>')";

$conn->query($sql);

$sql = "INSERT INTO Galleries(images_id, imagel_id, gallery_name, famous_works, description, more_info)
                      VALUES(14, 14,
                            'Miyanomori Art Museum',
                            'None',
                            '<p>The Miyanomori Art Museum is the main contemporary art museum in Hokkaido; presents artwork from Japanese Art scenes and contemporary international.</p>',
                            '<p>The Miyanomori Art Museum is located in Sapporo, Hokkaido, Japan. It was created during the modern century in 2006. The museum houses contemporary artworks and Japanese art scenes from 1950 to 1970. There is also a collection of about 3000 photographs taken during the 1950s from several artists such as Lucio Fortana Frank Stella, and many more. In addition to the collection of photographs, the museum also has the largest amount of artwork created by Christo and Jeanne-Claude in both Asia and Oceania.</p>')";

$conn->query($sql);

$sql = "INSERT INTO Galleries(images_id, imagel_id, gallery_name, famous_works, description, more_info)
                      VALUES(15, 15,
                        'Benaki Museum',
                        'Archangel Michael, Four Military Saints, Adoration of the Magi',
                        '<p>The Benaki Museum houses Greek artworks from the prehistorial to modern times with an extensive collection of Asian art. In addition, it hosts periodic exhibitions and maintains modern techniques of restoration and conservation workshops.</p>',
                        '<p>The Benaki Museum was originally created in memory of Atonis Benakis father and was established in 1930. It is located in the Benaki family mansion in Athens, Greece. In 2000, due to satellite museums, the main museum was able to focus on Greek culture. In 1931, the Benakis donated the family house in Athens along with their entire collection of artwork. Many more artworks were later added on. The museum also focuses on the fact that Greek history does not begin and end with specific events but rather exists along a continuum that continues today. In addition, it also focuses and celeberates the foreign influences that affect Greek culture.</p>')";

$conn->query($sql);
// if ($conn->query($sql) === TRUE) {
//   echo "Success!";
// } else {
//   echo "Error inserting: " . $conn->error;
// }
$conn->close();

?>
