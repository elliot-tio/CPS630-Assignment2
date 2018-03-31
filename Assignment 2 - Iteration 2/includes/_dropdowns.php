<?php
echo '<ul class="nav-bar">
        <label for="artworks">Artworks:</label>
        <li>
          <form action="artworks.php" method="post">
            <select id="artworks" name="selected_artwork">
              <option value="pick">Pick an Artwork</option>
              <option value="Mona Lisa" name="Mona Lisa">Mona Lisa</option>
              <option value="De Matteis Triumph of the Immaculate Anagoria">De Matteis Triumph of the Immaculate Anagoria</option>
              <option value="The Delivery of the Keys to Saint Peter">The Delivery of the Keys to Saint Peter</option>
              <option value="The Starry Night">The Starry Night</option>
              <option value="The Creation of Adam">The Creation of Adam</option>
            </select>
            <input type="submit" value="Submit">
          </form>
        </li>
        <label for="artists">Artists:</label>
        <li>
          <form action="artists.php" method="post">
            <select id="artists" name="selected_artist">
              <option value="pick">Pick an Artist</option>
              <option value="Leonardo da Vinci" id="1">Leonardo da Vinci</option>
              <option value="Vincent van Gogh">Vincent van Gogh</option>
              <option value="Michelangelo">Michelangelo</option>
              <option value="Claude Monet">Claude Monet</option>
              <option value="Pablo Picasso">Pablo Picasso</option>
            </select>
            <input type="submit" value="Submit">
          </form>
        </li>
        <label for="museums">Museums:</label>
        <li>
          <form action="museums.php" method="post">
          <select id="museums" name="selected_museum">
            <option value="pick">Pick an Museum</option>
            <option value="Stoa of Attalos">Stoa of Attalos</option>
            <option value="Louvre">Louvre</option>
            <option value="Royal Ontario Museum">Royal Ontario Museum</option>
            <option value="Miyanomori Art Museum">Miyanomori Art Museum</option>
            <option value="Benaki Museum">Benaki Museum</option>
            </select>
            <input type="submit" value="Submit">
          </form>
        </li>
      </ul>';
?>
