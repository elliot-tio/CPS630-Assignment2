// Function that populates windows with selection from drop-down lists.
// Minor bug - when selecting between lists, desired output will not show
// if item had already been selected.
var htmlContentRight = '';
var htmlContentMiddle = '';

// Variable used to name selection for populateWindow2 in function populateWindow()
var a = '';

function populateWindow2(aName) {

  var newLeftWindow = document.getElementById('left-window');
  var newRightWindow = document.getElementById('right-window');
  var newMiddleWindow = document.getElementById('middle-window');

  switch (aName) {
    case 'LDV':
      {
        htmlContentMiddle = '<img src="images/leonardo-da-vinci.jpg" alt="Leonardo da Vinci">';
        htmlContentRight = '<a class="name">Leonardo da Vinci</a>' +
        '<p>Date of birth/death: April 15, 1452 - May 2, 1519</p>\
      <p>Place of living: Italy</p>\
      <p>Genre: Renaissance</p>\
      <p>Famous artworks: Mona Lisa, The Last Supper</p>';
        break;
      }
    case 'VVG':
      {
        htmlContentMiddle = '<img src="images/van-gogh.jpg" alt="Vincent van Gogh">';
        htmlContentRight = '<a class="name">Vincent van Gogh</a>' +
        "<p>Date of birth/death: March 30, 1853 - July 29, 1890</p>\
      <p>Place of living: Netherlands/France</p>\
      <p>Genre: Post-Impressionism</p>\
      <p>Famous artworks: The Starry Night, Sunflowers</p>";
        break;
      }
    case 'M':
      {
        htmlContentMiddle = '<img src="images/michelangelo.jpg" alt="Michelangelo">';
        htmlContentRight = '<a class="name">Michelangelo</a>' +
        "<p>Date of birth/death: March 6, 1475 - February 18, 1564</p>\
      <p>Place of living: Italy</p>\
      <p>Genre:Renaissance </p>\
      <p>Famous artworks: David, Sistine Chapel ceiling</p>";
        break;
      }
    case 'CM':
      {
        htmlContentMiddle = '<img src="images/monet.jpg" alt="Claude Monet">';
        htmlContentRight = '<a class="name">Claude Monet</a>' +
        "<p>Date of birth/death: November 14, 1840 - December 5, 1926</p>\
      <p>Place of living: France</p>\
      <p>Genre: Impressionism</p>\
      <p>Famous artworks: 'Impression, Sunrise', Water Lilies</p>";
        break;
      }
    case 'PP':
      {
        htmlContentMiddle = '<img src="images/picasso.jpg" alt="Pablo Picasso">';
        htmlContentRight = '<a class="name">Pablo Picasso</a>' +
        "<p>Date of birth/death: October 25, 1881 - April 8, 1973</p>\
      <p>Place of living: Spain/France</p>\
      <p>Genre: Cubism, Surrealism</p>\
      <p>Famous artworks: The Old Guitarist, La Vie</p>";
        break;
      }
    case 'ML':
      {
        htmlContentMiddle = '<img src="images/realism2.jpg" alt="Mona Lisa">';
        htmlContentRight = '<a class="name">Mona Lisa</a>' +
        "<p>Date of production: c. 1503 - 1506</p>\
      <p>Type of painting: Oil on Poplar Panel</p>\
      <p>Dimensions of painting: 77cm x 53cm</p>\
      <p>Current Location: Musee du Louvre, Paris</p>\
      <p>Artist: Leonardo da Vinci</p>\
      <p>Price: Priceless</p>\
      <p>Genre: Renaissance </p>";
        break;
      }
    case 'DMTIA':
      {
        htmlContentMiddle = '<img src="images/baroque1.jpg" alt="De Matteis Triumph of the Immaculate Anagoria">';
        htmlContentRight = '<a class="name">De Matteis Triumph of the Immaculate Anagoria</a>' +
        "<p>Date of production: c. 1710 - 1715</p>\
      <p>Type of painting: N/A</p>\
      <p>Dimensions of painting: N/A</p>\
      <p>Current Location: N/A</p>\
      <p>Artist: Paolo De Matteis</p>\
      <p>Price: ???</p>\
      <p>Genre: Baroque</p>";
        break;
      }
    case 'TDKSP':
      {
        htmlContentMiddle = '<img src="images/renaissance.jpg" alt="The Delivery of the Keys to Saint Peter">';
        htmlContentRight = '<a class="name">The Delivery of the Keys to Saint Peter</a>' +
        "<p>Date of production: c. 1481 - 1482</p>\
      <p>Type of painting: Fresco</p>\
      <p>Dimensions of painting: 330cm x 550cm</p>\
      <p>Current Location: Sistine Chapel</p>\
      <p>Artist: Perugino</p>\
      <p>Price: ???</p>\
      <p>Genre: Renaissance</p>";
        break;
      }
    case 'TSN':
      {
        htmlContentMiddle = '<img src="images/starry-night.jpg" alt="The Starry Night">';
        htmlContentRight = '<a class="name">The Starry Night</a>' +
        "<p>Date of production: 1889</p>\
      <p>Type of painting: Oil on Canvas</p>\
      <p>Dimensions of painting: 73.7cm x 92.1cm</p>\
      <p>Current Location: Museum of Modern Art, New York City</p>\
      <p>Artist: Vincent van Gogh</p>\
      <p>Price: ~$100 - $300 million USD</p>\
      <p>Genre: Post-impressionism</p>";
        break;
      }
    case 'TCA':
      {
        htmlContentMiddle = '<img src="images/creation-of-adam.jpg" alt="The Creation of Adam">';
        htmlContentRight = '<a class="name">The Creation of Adam</a>' +
        "<p>Date of production: c. 1512</p>\
      <p>Type of painting: Fresco</p>\
      <p>Dimensions of painting: 280cm x 570cm</p>\
      <p>Current Location: Sistine Chapel's ceiling</p>\
      <p>Artist: Michelangelo</p>\
      <p>Price: ???</p>\
      <p>Genre: Renaissance</p>";
        break;
      }
    case 'Stoa of Attalos':
      {
        htmlContentMiddle = '<img src=https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Attica_06-13_Athens_22_View_from_Acropolis_Hill_-_Museum_of_Ancient_Agora.jpg/220px-Attica_06-13_Athens_22_View_from_Acropolis_Hill_-_Museum_of_Ancient_Agora.jpg alt= "Stoa of Attalos">';
        htmlContentRight = '<a class="name" href="">Stoa of Attalos</a>';
        break;
      }
    case 'Louvre':
      {
        htmlContentMiddle = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Louvre_Museum_Wikimedia_Commons.jpg/800px-Louvre_Museum_Wikimedia_Commons.jpg" alt="Louvre">';
        htmlContentRight = '<a class="name" href="">Louvre</a>';
        break;
      }
    case 'Royal Ontario Museum':
      {
        htmlContentMiddle = '<img src="https://ims.utoronto.ca/wp-content/uploads/2016/04/rom-2280x1564.jpg" alt="ROM">';
        htmlContentRight = '<a class="name" href="">Royal Ontario Museum</a>';
        break;
      }
    case 'Miyanomori Art Museum':
      {
        htmlContentMiddle = '<img src = https://media-cdn.tripadvisor.com/media/photo-o/11/79/83/20/sapporo-miyanomori-art.jpg alt="MAM">';
        htmlContentRight = '<a class="name" href="">Miyanomori Art Museum</a>';
        break;
      }
    case 'Benaki Museum':
      {
        htmlContentMiddle = '<img src = https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Benaki_Museum_Athens.JPG/1024px-Benaki_Museum_Athens.JPG alt="BM">';
        htmlContentRight = '<a class="name" href="">Benaki Museum</a>';
        break;
      }
    case 'pick':
      {
        htmlContentRight = "";
        htmlContentMiddle = "";
      }
  }
  newLeftWindow.innerHTML = '';
  newRightWindow.innerHTML = htmlContentRight;
  newMiddleWindow.innerHTML = htmlContentMiddle;
}



function populateWindow(sel) {
  var rightWindow = document.getElementById('right-window');
  var middleWindow = document.getElementById('middle-window');

  switch (sel.value) {
    case 'Leonardo da Vinci':
      {
        a = "LDV"
        htmlContentMiddle = '<img src="images/leonardo-da-vinci.jpg" alt="Leonardo da Vinci">';
        htmlContentRight = '<a class="name" href="#" onclick="populateWindow2(a)">Leonardo da Vinci</a>' +
        "<p> An Italian Artist, inventor and a man - he painted the Mona Lisa and is world famous for it.</p>";
        break;
      }
    case 'Vincent van Gogh':
      {
        a = "VVG";
        htmlContentMiddle = '<img src="images/van-gogh.jpg" alt="Vincent van Gogh">';
        htmlContentRight = '<a class="name" id="2" href="#" onclick="populateWindow2(a)">Vincent van Gogh</a>' +
        "<p>The life of Vincent van Gogh was rough and traumatizing. Learn more in his wiki - he painted lots of artworks including Sunflowers and Starry Night.</p>" +
        "<p>He cut off his own ear.</p>";
        break;
      }
    case 'Michelangelo':
      {
        a = "M";
        htmlContentMiddle = '<img src="images/michelangelo.jpg" alt="Michelangelo">';
        htmlContentRight = '<a class="name" id="3" href="#" onclick="populateWindow2(a)">Michelangelo</a>' +
        "<p> He is a man of culture, a man of sculpture, and a man of Christian artwork. He painted and sculpted during the High Renaissance, and is largely considered one of the greatest artists of all time. See: The Creation of Adam and other works.</p>";
        break;
      }
    case 'Claude Monet':
      {
        a = "CM"
        htmlContentMiddle = '<img src="images/monet.jpg" alt="Claude Monet">';
        htmlContentRight = '<a class="name" id="4" href="#" onclick="populateWindow2(a)">Claude Monet</a>' +
        "<p>Monet left his impression on this world as the founder of French Impressionist painting, creating works based on nature and of everyday life. One of the greatest 19th century painters to have graced the Earth.</p>";
        break;
      }
    case 'Pablo Picasso':
      {
        a = "PP";
        htmlContentMiddle = '<img src="images/picasso.jpg" alt="Pablo Picasso">';
        htmlContentRight = '<a class="name" id="5" href="#" onclick="populateWindow2(a)">Pablo Picasso</a>' +
        "<p>Picasso of modern fame was a prominent late 19th early 20th century painter whose work on Surrealism and abstract art drew crowds from around the world. Famous paintings such as The Old Guitarist along with his drawings and sculptures are timeless.</p>";
        break;
      }
    case 'Mona Lisa':
      {
        a = "ML";
        htmlContentMiddle = '<img src="images/realism2.jpg" alt="Mona Lisa">';
        htmlContentRight = '<a class="name" id="6" href="#" onclick="populateWindow2(a)">Mona Lisa</a>' +
        "<p>Renowned for her smile, this is the famous Mona Lisa.</p>" +
        "<p>Price: Priceless</p>";
        break;
      }
    case 'De Matteis Triumph of the Immaculate Anagoria':
      {
        a = "DMTIA";
        htmlContentMiddle = '<img src="images/baroque1.jpg" alt="De Matteis Triumph of the Immaculate Anagoria">';
        htmlContentRight = '<a class="name" id="7" href="#" onclick="populateWindow2(a)">De Matteis Triumph of the Immaculate Anagoria</a>' +
        "<p>A baroque era painting by Paolo De Matteis, it is currently unkown what the price is.</p>" +
        "<p>Price: $22,000,000 CAD</p>";
        break;
      }
    case 'The Delivery of the Keys to Saint Peter':
      {
        a = "TDKSP";
        htmlContentMiddle = '<img src="images/renaissance.jpg" alt="The Delivery of the Keys to Saint Peter">';
        htmlContentRight = '<a class="name" id="8" href="#" onclick="populateWindow2(a)">The Delivery of the Keys to Saint Peter</a>' +
        "<p>From the classical Italian Renaissance era painter Pietro Perugino comes a masterpiece of epic proportions. Part of the world famous Sistine Chapel next to the more famous painting by Michelangelo, The Delivery of the Keys to Saint Peter is a magnificent piece of art to add to any collection.</p>" +
        "<p>Price: $20,500,000 CAD</p>";
        break;
      }
    case 'The Starry Night':
      {
        a = "TSN";
        htmlContentMiddle = '<img src="images/starry-night.jpg" alt="The Starry Night">';
        htmlContentRight = '<a class="name" id="9" href="#" onclick="populateWindow2(a)">The Starry Night</a>' +
        "<p>The art of art - painted by Vincent van Gogh, it is the art work that all art thieves want to thief. No collection of art is complete without this art of all arts.</p>" +
        "<p>Price: $500,000,000 CAD";
        break;
      }
    case 'The Creation of Adam':
      {
        a = "TCA";
        htmlContentMiddle = '<img src="images/creation-of-adam.jpg" alt="The Creation of Adam">';
        htmlContentRight = '<a class="name" id="10" href="#" onclick="populateWindow2(a)">The Creation of Adam</a>' +
        "<p>Pretty thirsty for knowledge, The Creation of Adam by Michelangelo is a fresco painting any ceiling enthusiast will want in their collection. Price does not include extraction.</p>" +
        "<p>Price: $650,000,000 CAD</p>";
        break;
      }
    case 'Stoa of Attalos':
      {
        htmlContentMiddle = '<img src=https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Attica_06-13_Athens_22_View_from_Acropolis_Hill_-_Museum_of_Ancient_Agora.jpg/220px-Attica_06-13_Athens_22_View_from_Acropolis_Hill_-_Museum_of_Ancient_Agora.jpg alt= "Stoa of Attalos">';
        htmlContentRight = '<a class="name" href="">Stoa of Attalos</a>';
        break;
      }
    case 'Louvre':
      {
        htmlContentMiddle = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Louvre_Museum_Wikimedia_Commons.jpg/800px-Louvre_Museum_Wikimedia_Commons.jpg" alt="Louvre">';
        htmlContentRight = '<a class="name" href="">Louvre</a>';
        break;
      }
    case 'Royal Ontario Museum':
      {
        htmlContentMiddle = '<img src="https://ims.utoronto.ca/wp-content/uploads/2016/04/rom-2280x1564.jpg" alt="ROM">';
        htmlContentRight = '<a class="name" href="">Royal Ontario Museum</a>';
        break;
      }
    case 'Miyanomori Art Museum':
      {
        htmlContentMiddle = '<img src = https://media-cdn.tripadvisor.com/media/photo-o/11/79/83/20/sapporo-miyanomori-art.jpg alt="MAM">';
        htmlContentRight = '<a class="name" href="">Miyanomori Art Museum</a>';
        break;
      }
    case 'Benaki Museum':
      {
        htmlContentMiddle = '<img src = https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Benaki_Museum_Athens.JPG/1024px-Benaki_Museum_Athens.JPG alt="BM">';
        htmlContentRight = '<a class="name" href="">Benaki Museum</a>';
        break;
      }
    case 'pick':
      {
        htmlContentRight = "";
        htmlContentMiddle = "";
      }
  }
  rightWindow.innerHTML = htmlContentRight;
  middleWindow.innerHTML = htmlContentMiddle;
}
