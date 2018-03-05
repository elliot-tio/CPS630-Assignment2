
/* function that populates windows with selection from drop-down lists. Minor bug - when selecting between lists, desired output will not show if item had already been selected. */
var htmlContentRight = '';
var htmlContentMiddle = '';

function empty(){

  document.getElementById('right-window').innerHTML='';
  document.getElementById('middle-window').innerHTML='';

}
function populateWindow(sel){
  var rightWindow = document.getElementById('right-window');
  var middleWindow = document.getElementById('middle-window');
  var artists = document.getElementById('artists');

  switch(sel.value){
    case 'Leonardo da Vinci':{
      htmlContentRight = '<img src="images/leonardo-da-vinci.jpg" alt="Leonardo da Vinci">';
      htmlContentMiddle = '<a class="name" href="#">Leonardo da Vinci</a>' +
      "<p>Date of birth/death: April 15, 1452 - May 2, 1519</p>\
      <p>Place of living: Italy</p>\
      <p>Genre: Renaissance</p>\
      <p>Famous artworks: Mona Lisa, The Last Supper</p>";
      break;
    }
    case 'Vincent van Gogh':{
      htmlContentRight = '<img src="images/van-gogh.jpg" alt="Vincent van Gogh">';
      htmlContentMiddle = '<a class="name" href="#">Vincent van Gogh</a>' +
      "<p>Date of birth/death: March 30, 1853 - July 29, 1890</p>\
      <p>Place of living: Netherlands/France</p>\
      <p>Genre: Post-Impressionism</p>\
      <p>Famous artworks: The Starry Night, Sunflowers</p>";
      break;
    }
    case 'Michelangelo':{
      htmlContentRight = '<img src="images/michelangelo.jpg" alt="Michelangelo">';
      htmlContentMiddle = '<a class="name" href="#">Michelangelo</a>' +
      "<p>Date of birth/death: March 6, 1475 - February 18, 1564</p>\
      <p>Place of living: Italy</p>\
      <p>Genre:Renaissance </p>\
      <p>Famous artworks: David, Sistine Chapel ceiling</p>";
      break;
    }
    case 'Claude Monet':{
      htmlContentRight = '<img src="images/monet.jpg" alt="Claude Monet">';
      htmlContentMiddle = '<a class="name" href="#">Claude Monet</a>' +
      "<p>Date of birth/death: November 14, 1840 - December 5, 1926</p>\
      <p>Place of living: France</p>\
      <p>Genre: Impressionism</p>\
      <p>Famous artworks: 'Impression, Sunrise', Water Lilies</p>";
      break;
    }
    case 'Pablo Picasso':{
      htmlContentRight = '<img src="images/picasso.jpg" alt="Pablo Picasso">';
      htmlContentMiddle = '<a class="name" href="#">Pablo Picasso</a>' +
      "<p>Date of birth/death: October 25, 1881 - April 8, 1973</p>\
      <p>Place of living: Spain/France</p>\
      <p>Genre: Cubism, Surrealism</p>\
      <p>Famous artworks: The Old Guitarist, La Vie</p>";
      break;
    }
    case 'Mona Lisa':{
      htmlContentRight = '<img src="images/realism2.jpg" alt="Mona Lisa">';
      htmlContentMiddle = '<a class="name" href="#" onclick="empty()">Mona Lisa</a>' +
      "<p>Date of production: c. 1503 - 1506</p>\
      <p>Type of painting: Oil on Poplar Panel</p>\
      <p>Dimensions of painting: 77cm x 53cm</p>\
      <p>Current Location: Musee du Louvre, Paris</p>\
      <p>Artist: Leonardo da Vinci</p>\
      <p>Price: Priceless</p>\
      <p>Genre: Renaissance </p>";
      break;
    }
    case 'De Matteis Triumph of the Immaculate Anagoria':{
      htmlContentRight = '<img src="images/baroque1.jpg" alt="De Matteis Triumph of the Immaculate Anagoria">';
      htmlContentMiddle = '<a class="name" href="#">De Matteis Triumph of the Immaculate Anagoria</a>' +
      "<p>Date of production: c. 1710 - 1715</p>\
      <p>Type of painting: N/A</p>\
      <p>Dimensions of painting: N/A</p>\
      <p>Current Location: N/A</p>\
      <p>Artist: Paolo De Matteis</p>\
      <p>Price: ???</p>\
      <p>Genre: Baroque</p>";
      break;
    }
    case 'The Delivery of the Keys to Saint Peter':{
      htmlContentRight = '<img src="images/renaissance.jpg" alt="The Delivery of the Keys to Saint Peter">';
      htmlContentMiddle = '<a class="name" href="#">The Delivery of the Keys to Saint Peter</a>' +
      "<p>Date of production: c. 1481 - 1482</p>\
      <p>Type of painting: Fresco</p>\
      <p>Dimensions of painting: 330cm x 550cm</p>\
      <p>Current Location: Sistine Chapel</p>\
      <p>Artist: Perugino</p>\
      <p>Price: ???</p>\
      <p>Genre: Renaissance</p>";
      break;
    }
    case 'The Starry Night':{
      htmlContentRight = '<img src="images/starry-night.jpg" alt="The Starry Night">';
      htmlContentMiddle = '<a class="name" href="#">The Starry Night</a>' +
      "<p>Date of production: 1889</p>\
      <p>Type of painting: Oil on Canvas</p>\
      <p>Dimensions of painting: 73.7cm x 92.1cm</p>\
      <p>Current Location: Museum of Modern Art, New York City</p>\
      <p>Artist: Vincent van Gogh</p>\
      <p>Price: ~$100 - $300 million USD</p>\
      <p>Genre: Post-impressionism</p>";
      break;
    }
    case 'The Creation of Adam':{
      htmlContentRight = '<img src="images/creation-of-adam.jpg" alt="The Creation of Adam">';
      htmlContentMiddle = '<a class="name" href="#">The Creation of Adam</a>' +
      "<p>Date of production: c. 1512</p>\
      <p>Type of painting: Fresco</p>\
      <p>Dimensions of painting: 280cm x 570cm</p>\
      <p>Current Location: Sistine Chapel's ceiling</p>\
      <p>Artist: Michelangelo</p>\
      <p>Price: ???</p>\
      <p>Genre: Renaissance</p>";
      break;
    }
    case 'Stoa of Attalos':{
      htmlContentRight = '<img src=https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Attica_06-13_Athens_22_View_from_Acropolis_Hill_-_Museum_of_Ancient_Agora.jpg/220px-Attica_06-13_Athens_22_View_from_Acropolis_Hill_-_Museum_of_Ancient_Agora.jpg alt= "Stoa of Attalos">';
      htmlContentMiddle = '<a class="name" href="#">Stoa of Attalos</a>';
      break;
    }
    case 'Louvre':{
      htmlContentRight = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Louvre_Museum_Wikimedia_Commons.jpg/800px-Louvre_Museum_Wikimedia_Commons.jpg" alt="Louvre">';
      htmlContentMiddle = '<a class="name" href="#">Louvre</a>';
      break;
    }
    case 'Royal Ontario Museum':{
      htmlContentRight = '<img src="https://ims.utoronto.ca/wp-content/uploads/2016/04/rom-2280x1564.jpg" alt="ROM">';
      htmlContentMiddle = '<a class="name" href="#">Royal Ontario Museum</a>';
      break;
    }
    case 'Miyanomori Art Museum':{
      htmlContentRight = '<img src = https://media-cdn.tripadvisor.com/media/photo-o/11/79/83/20/sapporo-miyanomori-art.jpg alt="MAM">';
      htmlContentMiddle = '<a class="name" href="#">Miyanomori Art Museum</a>';
      break;
    }
    case 'Benaki Museum':{
      htmlContentRight = '<img src = https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Benaki_Museum_Athens.JPG/1024px-Benaki_Museum_Athens.JPG alt="BM">';
      htmlContentMiddle = '<a class="name" href="#">Benaki Museum</a>';
      break;
    }
    case 'pick': {
      htmlContentRight = "Pick an Artwork or Artist from the lists above.";
      htmlContentMiddle = "Pick an Artwork or Artist from the lists above.";
    }
  }
  rightWindow.innerHTML = htmlContentRight;
  middleWindow.innerHTML = htmlContentMiddle;
}
