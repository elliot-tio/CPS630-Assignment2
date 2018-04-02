// Function that populates windows with selection from drop-down lists.
// Minor bug - when selecting between lists, desired output will not show
// if item had already been selected.

var modal = document.getElementById('mModal');
var close = document.getElementsByClassName("close")[0];
var modalBody = document.getElementById("modal-body");
var list = document.getElementsByClassName("nItems")[0];
var artName = "Did not pick artwork";
var artPrice = "Did not pick artwork";
var shipM = "Did not pick shipping method";
var quantityP = 'Did not select quantity';
var tax = 1.13;
var shipping = 0;

function toggleBar() {

  var sbar = document.getElementById('bar');

  if (sbar.style.display === "none"){
    sbar.style.display = "block";
  } else {
    sbar.style.display = "none";
  }

}

function myModal() {

  var opt = document.getElementById("amodal");

  opt.onclick = function() {
    modal.style.display = "block";
  }

  close.onclick = function() {
    modal.style.display = "none";
    modalBody.innerHTML = "";
    list.style.display = "block";
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
      modalBody.innerHTML = '';
      list.style.display = "block";
    }
  }
}

function invoice() {

  if (typeof quantityP == 'string') {
    quantityP = 0;
  }
  var fullPrice = quantityP * artPrice * tax + shipping;
  var curTax = artPrice * (0.13);
  var stringArtPrice, stringCurTax, stringFullPrice;

  if (typeof artPrice == 'number') {
    stringArtPrice = "$" + artPrice.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    stringCurTax = "$" + curTax.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    stringFullPrice = "$" + fullPrice.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
  } else {
    stringArtPrice = artPrice;
    stringCurTax = "$0";
    stringFullPrice = "$0";
  }

  if (list.style.display == "none") {
    list.style.display = "block";
  } else {
    list.style.display = "none";
  }
  modalBody.innerHTML = "<p>Title: " + artName + "</p><br>" +
    "<p>Price: " + stringArtPrice + "</p><br>" +
    "<p>Tax: " + stringCurTax + "</p><br>" +
    "<p>Quantity: " + quantityP + "</p><br>" +
    "<p>Shipping Method: " + shipM + "</p><br>" +
    "<p>Total: " + stringFullPrice + "</p>";
}

function artworkSelect(artworkName) {

  switch (artworkName.value) {
    case 'Mona Lisa':
      {
        artName = "Mona Lisa";
        artPrice = 1000000000;
        break;
      }
    case 'De Matteis Triumph of the Immaculate Anagoria':
      {
        artName = "De Matteis Triumph of the Immaculate Anagoria";
        artPrice = 200000000;
        break;
      }
    case 'The Delivery of the Keys to Saint Peter':
      {
        artName = "The Delivery of the Keys to Saint Peter";
        artPrice = 999999;
        break;
      }
    case 'The Starry Night':
      {
        artName = "The Starry Night";
        artPrice = 300000000;
        break;
      }
    case 'The Creation of Adam':
      {
        artName = "The Creation of Adam";
        artPrice = 300000;
        break;
      }
    case 'pick':
      {
        artName="Did not pick artwork";
        artPrice=0;
      }
  }
}

function artQuantity(quantity) {

  switch (quantity.value) {
    case '1':
      {
        quantityP = 1;
        break;
      }
    case '2':
      {
        quantityP = 2;
        break;
      }
    case '3':
      {
        quantityP = 3;
        break;
      }
    case '4':
      {
        quantityP = 4;
        break;
      }
    case '5':
      {
        quantityP = 5;
        break;
      }
    case 'SQ':
      {
        quantityP = 0;
        break;
      }
  }
}

function shipMethod(method) {

  switch (method.value) {
    case 'express':
      {
        shipM = "Express ($19.95)";
        shipping = 19.95;
        break;
      }
    case '2DS':
      {
        shipM = "2-Day Shipping ($14.95)";
        shipping = 14.95;
        break;
      }
    case 'standard':
      {
        shipM = "Standard ($10.95)";
        shipping = 10.95;
        break;
      }
    case 'ssm':
      {
        shipM = "Did not pick shipping method"
        shipping = 0;
      }
  }
}

function purchase() {

}

var htmlContentRight = '';
var htmlContentMiddle = '';

// Variable used to name selection for populateWindow2 in function populateWindow()
var a = '';

function populateWindow2(aName) {

  var newLeftWindow = document.getElementById('left-window');
  var newRightWindow = document.getElementById('right-window');
  var newMiddleWindow = document.getElementById('middle-window');
  var newartists = document.getElementById('artists');

  switch (aName) {
    case 'LDV':
      {
        htmlContentMiddle = '<img src="images/leonardo-da-vinci.jpg" alt="Leonardo da Vinci">';
        htmlContentRight = '<a class="name">Leonardo da Vinci</a>' +
        "<p>Leonardo-da-vinci was an Italian Renaissance polymath whose fields of interests included: invention, painting architecture, science, math and many more.</p>\
        <p>He is also known as the father of palaeontology, ichnology, and architecture. Leonardo-da-vinci is also widely known as one of the greatest painters of all time and epitomizes the Renaissance humanist ideal.</p>\
        <p>Date of birth/death: April 15, 1452 - May 2, 1519</p>\
        <p>Place of living: Italy</p>\
        <p>Genre: Renaissance</p>\
        <p>Famous artworks: Mona Lisa, The Last Supper</p>";
        break;
      }
    case 'VVG':
      {
        htmlContentMiddle = '<img src="images/van-gogh.jpg" alt="Vincent van Gogh">';
        htmlContentRight = '<a class="name">Vincent van Gogh</a>' +
        "<p>Vincent William van Gogh is one of the most influential and famous figures in the history of western art. He has created about 2,100 artworks just barely over a decade and are characterised by bold colors, dramatic, impulsive, and expressive brushworks that serve as the foundation of modern art.</p>\
      <p>Van Gogh has also suffered from mental instability as he had pyschotic episodes and delusions.</p>\
      <p>Date of birth/death: March 30, 1853 - July 29, 1890</p>\
      <p>Place of living: Netherlands/France</p>\
      <p>Genre: Post-Impressionism</p>\
      <p>Famous artworks: The Starry Night, Sunflowers</p>";
        break;
      }
    case 'M':
      {
        htmlContentMiddle = '<img src="images/michelangelo.jpg" alt="Michelangelo">';
        htmlContentRight = '<a class="name">Michelangelo</a>' +
        "<p>Michelangelo di Lodovico Buonarroti Simoni was born in the Republic of Florence, and exterted an unparalleled influence on the development of Western art.</p>\
      <p>He is considered by some as the greatest artist of all time. Despite creating artworks outside of his field, it was of such high quality that he is often cosidered a contender for the title of archetypal Renaissance man.</p>\
      <p>Date of birth/death: March 6, 1475 - February 18, 1564</p>\
      <p>Place of living: Italy</p>\
      <p>Genre:Renaissance </p>\
      <p>Famous artworks: David, Sistine Chapel ceiling</p>";
        break;
      }
    case 'CM':
      {
        htmlContentMiddle = '<img src="images/monet.jpg" alt="Claude Monet">';
        htmlContentRight = '<a class="name">Claude Monet</a>' +
        "<p>Oscar Claude Monet was a famous French impressionist artist. The term 'impressionalism' was derived from the title of his painting 'impression'.</p>\
      <p>Monet's ambition for documenting French countryside led to the formation of him painting the same scene many times under several conditions</p>\
      <p>Date of birth/death: November 14, 1840 - December 5, 1926</p>\
      <p>Place of living: France</p>\
      <p>Genre: Impressionism</p>\
      <p>Famous artworks: 'Impression, Sunrise', Water Lilies</p>";
        break;
      }
    case 'PP':
      {
        htmlContentMiddle = '<img src="images/picasso.jpg" alt="Pablo Picasso">';
        htmlContentRight = '<a class="name">Pablo Picasso</a>' +
        "<p>Pablo Picasso was regarded as one of the most influential artists of the 20th century. Picasso demonstrated his extraordinary artistic talent during his childhood to adolescence. The artworks created by Picasso are often categorized into periods.</p>\
      <p>Date of birth/death: October 25, 1881 - April 8, 1973</p>\
      <p>Place of living: Spain/France</p>\
      <p>Genre: Cubism, Surrealism</p>\
      <p>Famous artworks: The Old Guitarist, La Vie</p>";
        break;
      }
    case 'ML':
      {
        htmlContentMiddle = '<img src="images/realism2.jpg" alt="Mona Lisa">';
        htmlContentRight = '<a class="name">Mona Lisa</a>' +
        "<p>The Mona Lisa is widely reknowned around the world. It is one of the most valuable paintings in the world. The painting is assumed to be the portrait of Lisa Gherardini the wife of Francesco del Giocondo.</p>\
      <p>The expression of Mona Lisa is often described as enigmatic, as the atmospheric illusionism, subtle modelling of the forms contribute to continuing fascination to this day.</p>\
      <p>Date of production: c. 1503 - 1506</p>\
      <p>Type of painting: Oil on Poplar Panel</p>\
      <p>Dimensions of painting: 77cm x 53cm</p>\
      <p>Current Location: Musee du Louvre, Paris</p>\
      <p>Artist: Leonardo da Vinci</p>\
      <p>Price: $1,000,000,000</p>\
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
      <p>Price: $200,000,000</p>\
      <p>Genre: Baroque</p>";
        break;
      }
    case 'TDKSP':
      {
        htmlContentMiddle = '<img src="images/renaissance.jpg" alt="The Delivery of the Keys to Saint Peter">';
        htmlContentRight = '<a class="name">The Delivery of the Keys to Saint Peter</a>' +
        "<p>The work originated from when Perugino was decorating a chapel in Rome and the pope; Pope Sixtus IV was pleased by his work. The pope comissioned Perugino and other artists in the formation of this artwork to be used as a decoration of a new chapel build in the Vatican.</p>\
      <p>Date of production: c. 1481 - 1482</p>\
      <p>Type of painting: Fresco</p>\
      <p>Dimensions of painting: 330cm x 550cm</p>\
      <p>Current Location: Sistine Chapel</p>\
      <p>Artist: Perugino</p>\
      <p>Price: $999,999</p>\
      <p>Genre: Renaissance</p>";
        break;
      }
    case 'TSN':
      {
        htmlContentMiddle = '<img src="images/starry-night.jpg" alt="The Starry Night">';
        htmlContentRight = '<a class="name">The Starry Night</a>' +
        "<p>The painting depicts the view from the east-facing window of the asylum room at Saint-Remy-De-Provence, just before sunrise with the image of an idealized village.</p>\
      <p>Date of production: 1889</p>\
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
        "<p>Illustrates the the biblical creation narrative from the bible where God gives life to the first man, Adam. The near touching hands of God and Adam becomes the iconic of humanity.</p>\
      <p>Date of production: c. 1512</p>\
      <p>Type of painting: Fresco</p>\
      <p>Dimensions of painting: 280cm x 570cm</p>\
      <p>Current Location: Sistine Chapel's ceiling</p>\
      <p>Artist: Michelangelo</p>\
      <p>Price: $300,000 </p>\
      <p>Genre: Renaissance</p>";
        break;
      }
    case 'Stoa of Attalos':
      {
        htmlContentRight = '<img src=https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Attica_06-13_Athens_22_View_from_Acropolis_Hill_-_Museum_of_Ancient_Agora.jpg/220px-Attica_06-13_Athens_22_View_from_Acropolis_Hill_-_Museum_of_Ancient_Agora.jpg alt= "Stoa of Attalos">';
        htmlContentMiddle = '<a class="name" href="">Stoa of Attalos</a>';
        break;
      }
    case 'Louvre':
      {
        htmlContentRight = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Louvre_Museum_Wikimedia_Commons.jpg/800px-Louvre_Museum_Wikimedia_Commons.jpg" alt="Louvre">';
        htmlContentMiddle = '<a class="name" href="">Louvre</a>';
        break;
      }
    case 'Royal Ontario Museum':
      {
        htmlContentRight = '<img src="https://ims.utoronto.ca/wp-content/uploads/2016/04/rom-2280x1564.jpg" alt="ROM">';
        htmlContentMiddle = '<a class="name" href="">Royal Ontario Museum</a>';
        break;
      }
    case 'Miyanomori Art Museum':
      {
        htmlContentRight = '<img src = https://media-cdn.tripadvisor.com/media/photo-o/11/79/83/20/sapporo-miyanomori-art.jpg alt="MAM">';
        htmlContentMiddle = '<a class="name" href="">Miyanomori Art Museum</a>';
        break;
      }
    case 'Benaki Museum':
      {
        htmlContentRight = '<img src = https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Benaki_Museum_Athens.JPG/1024px-Benaki_Museum_Athens.JPG alt="BM">';
        htmlContentMiddle = '<a class="name" href="">Benaki Museum</a>';
        break;
      }
    case 'pick':
      {
        htmlContentRight = "Pick an Artwork or Artist from the lists above.";
        htmlContentMiddle = "Pick an Artwork or Artist from the lists above.";
      }
  }
  newRightWindow.innerHTML = htmlContentRight;
  newMiddleWindow.innerHTML = htmlContentMiddle;
  newLeftWindow.innerHTML = '';
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
        "<p> Leonardo di ser Piero da Vinci or commonly know as Leonardo. He is an italian Renaissance artist, and an inventor. He painted the Mona Lisa and is world famous for it.</p>";
        break;
      }
    case 'Vincent van Gogh':
      {
        a = "VVG";
        htmlContentMiddle = '<img src="images/van-gogh.jpg" alt="Vincent van Gogh">';
        htmlContentRight = '<a class="name" id="2" href="#" onclick="populateWindow2(a)">Vincent van Gogh</a>' +
        "<p>Vincent Willem van Gogh, a Dutch Post-Impressionlist painter. The life of Vincent van Gogh was rough and traumatizing. Learn more in his wiki - he painted lots of artworks including Sunflowers and Starry Night.</p>" +
        "<p>He cut off his own ear.</p>";
        break;
      }
    case 'Michelangelo':
      {
        a = "M";
        htmlContentMiddle = '<img src="images/michelangelo.jpg" alt="Michelangelo">';
        htmlContentRight = '<a class="name" id="3" href="#" onclick="populateWindow2(a)">Michelangelo</a>' +
        "<p>Michelangelo di Lodovico Buonarroti Simoni or commonly known as Michelangelo. He is a man of culture, a man of sculpture, and a man of Christian artwork. He painted and sculpted during the High Renaissance, and is largely considered one of the greatest artists of all time. See: The Creation of Adam and other works.</p>";
        break;
      }
    case 'Claude Monet':
      {
        a = "CM"
        htmlContentMiddle = '<img src="images/monet.jpg" alt="Claude Monet">';
        htmlContentRight = '<a class="name" id="4" href="#" onclick="populateWindow2(a)">Claude Monet</a>' +
        "<p>Oscar Claude Monet left his impression on this world as the founder of French Impressionist painting, creating works based on nature and of everyday life. One of the greatest 19th century painters to have graced the Earth.</p>";
        break;
      }
    case 'Pablo Picasso':
      {
        a = "PP";
        htmlContentMiddle = '<img src="images/picasso.jpg" alt="Pablo Picasso">';
        htmlContentRight = '<a class="name" id="5" href="#" onclick="populateWindow2(a)">Pablo Picasso</a>' +
        "<p>Pablo Picasso of modern fame was a prominent late 19th early 20th century painter whose work on Surrealism and abstract art drew crowds from around the world. Famous paintings such as The Old Guitarist along with his drawings and sculptures are timeless. He was a Spanish painter, sculptor, printmaker, ceramicist, stage designer, poet, and playwright that spent most of his adult life in France.</p>";
        break;
      }
    case 'Mona Lisa':
      {
        a = "ML";
        htmlContentMiddle = '<img src="images/realism2.jpg" alt="Mona Lisa">';
        htmlContentRight = '<a class="name" id="6" href="#" onclick="populateWindow2(a)">Mona Lisa</a>' +
        "<p>Renowned for her smile, this is the famous Mona Lisa. The Mona Lisa is a half-length portrait painting by the Italian Renaissance artist Leonardo da Vinci.</p>" +
        "<p>Price: $1,000,000,000 CAD</p>";
        break;
      }
    case 'De Matteis Triumph of the Immaculate Anagoria':
      {
        a = "DMTIA";
        htmlContentMiddle = '<img src="images/baroque1.jpg" alt="De Matteis Triumph of the Immaculate Anagoria">';
        htmlContentRight = '<a class="name" id="7" href="#" onclick="populateWindow2(a)">De Matteis Triumph of the Immaculate Anagoria</a>' +
        "<p>A baroque era painting by Paolo De Matteis, it is currently unkown what the price is.</p>" +
        "<p>Price: $200,000,000 CAD</p>";
        break;
      }
    case 'The Delivery of the Keys to Saint Peter':
      {
        a = "TDKSP";
        htmlContentMiddle = '<img src="images/renaissance.jpg" alt="The Delivery of the Keys to Saint Peter">';
        htmlContentRight = '<a class="name" id="8" href="#" onclick="populateWindow2(a)">The Delivery of the Keys to Saint Peter</a>' +
        "<p>From the classical Italian Renaissance era painter Pietro Perugino comes a masterpiece of epic proportions. Part of the world famous Sistine Chapel next to the more famous painting by Michelangelo, The Delivery of the Keys to Saint Peter is a magnificent piece of art to add to any collection.</p>" +
        "<p>Price: $999,999 CAD</p>";
        break;
      }
    case 'The Starry Night':
      {
        a = "TSN";
        htmlContentMiddle = '<img src="images/starry-night.jpg" alt="The Starry Night">';
        htmlContentRight = '<a class="name" id="9" href="#" onclick="populateWindow2(a)">The Starry Night</a>' +
        "<p>The art of art - the Starry Night is an oil on canvas created by the Dutch post-impressionist by Vincent van Gogh, it is the art work that all art thieves want to thief. No collection of art is complete without this art of all arts.</p>" +
        "<p>Price: $300,000,000 CAD";
        break;
      }
    case 'The Creation of Adam':
      {
        a = "TCA";
        htmlContentMiddle = '<img src="images/creation-of-adam.jpg" alt="The Creation of Adam">';
        htmlContentRight = '<a class="name" id="10" href="#" onclick="populateWindow2(a)">The Creation of Adam</a>' +
        "<p>Pretty thirsty for knowledge, The Creation of Adam by Michelangelo is a fresco painting any ceiling enthusiast will want in their collection. Price does not include extraction.</p>" +
        "<p>Price: $300,000 CAD</p>";
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
