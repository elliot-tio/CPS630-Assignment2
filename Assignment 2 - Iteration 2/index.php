<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Art Gallery</title>
  <link rel="stylesheet" href="Assignment2-team20.css">


</head>

<body>

  <h1>Art Gallery Home</h1>
  <div id="nav">
    <?php include "includes/_navbar.php";?>
  </div>

  <div id="shopping_cart">
    <?php include "includes/_shopping_cart.php";?>
  </div>

  <div class="window-container">
    <div class="left-window" id="left-window">
      <ul class="nav-bar">
        <label for="artworks">Artworks:</label>
        <li><select id="artworks" onchange="populateWindow(this)">
            <option value="pick">Pick an Artwork</option>
            <option value="Mona Lisa">Mona Lisa</option>
            <option value="De Matteis Triumph of the Immaculate Anagoria">De Matteis Triumph of the Immaculate Anagoria</option>
            <option value="The Delivery of the Keys to Saint Peter">The Delivery of the Keys to Saint Peter</option>
            <option value="The Starry Night">The Starry Night</option>
            <option value="The Creation of Adam">The Creation of Adam</option>
          </select></li>
        <label for="artists">Artists:</label>
        <li><select id="artists" onchange="populateWindow(this)">
            <option value="pick">Pick an Artist</option>
            <option value="Leonardo da Vinci" id="1">Leonardo da Vinci</option>
            <option value="Vincent van Gogh">Vincent van Gogh</option>
            <option value="Michelangelo">Michelangelo</option>
            <option value="Claude Monet">Claude Monet</option>
            <option value="Pablo Picasso">Pablo Picasso</option>
          </select></li>
        <label for="museums">Museums:</label>
        <li><select id="museums" onchange="populateWindow(this)">
          <option value="pick">Pick an Museum</option>
          <option value="Stoa of Attalos">Stoa of Attalos</option>
          <option value="Louvre">Louvre</option>
          <option value="Royal Ontario Museum">Royal Ontario Museum</option>
          <option value="Miyanomori Art Museum">Miyanomori Art Museum</option>
          <option value="Benaki Museum">Benaki Museum</option>
          </select></li>
      </ul>
    </div>
    <div class="middle-window" id="middle-window"></div>
    <div class="right-window" id="right-window"></div>
  </div>

  <div class="container">
    <?php include "includes/_footer.php";?>
  </div>

  <script type="text/javascript" src="Assignment2-team20.js" charset="utf-8"></script>
</body>

</html>
