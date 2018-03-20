<?php
echo '<ul class="nav-bar">
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
      </ul>';
?>
