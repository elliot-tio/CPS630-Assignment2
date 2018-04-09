<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:output version='1.0' encoding='UTF-8' indent='no' method='html'/>

  <xsl:template match="/">
    <html>
      <head>
        <title>Artstore Database</title>
      </head>
      <body>
        <ul id="nav-list" style="list-style:none;">
          <li>
            <a href="#artists">Artists</a>
          </li>
          <li>
            <a href="#artworks">Artworks</a>
          </li>
          <li>
            <a href="#galleries">Galleries</a>
          </li>
          <li>
            <a href="#genres">Genres</a>
          </li>
          <li>
            <a href="#image-l">Large Images</a>
          </li>
          <li>
            <a href="#image-s">Small Images</a>
          </li>
          <li>
            <a href="#subjects">Subjects</a>
          </li>
        </ul>
        <h2 id="artists">Artists</h2>
        <table border="1">
          <tr bgcolor="#ADD8E6">
            <th style="text-align:left">ID</th>
            <th style="text-align:left">Image</th>
            <th style="text-align:left">Genre</th>
            <th style="text-align:left">Artist Name</th>
            <th style="text-align:left">Date of Birth/Death</th>
            <th style="text-align:left">Place of Living</th>
            <th style="text-align:left">Famous Works</th>
            <th style="text-align:left">Description</th>
            <th style="text-align:left">More Info</th>
          </tr>

          <xsl:for-each select="Artstore/Artists/Artist">
            <tr>
              <td><xsl:value-of select="@ID"/></td>
              <td><xsl:value-of select="images_id"/></td>
              <td><xsl:value-of select="genre_id"/></td>
              <td><xsl:value-of select="artist_name"/></td>
              <td><xsl:value-of select="DOB"/></td>
              <td><xsl:value-of select="POL"/></td>
              <td><xsl:value-of select="famous_works"/></td>
              <td><xsl:value-of select="description"/></td>
              <td><xsl:value-of select="more_info"/></td>
            </tr>
          </xsl:for-each>
        </table>
        <a href="#">Back to Top</a>

        <h2 id="artworks">Artworks</h2>
        <table border="1">
          <tr bgcolor="#ADD8E6">
            <th style="text-align:left">ID</th>
            <th style="text-align:left">Image</th>
            <th style="text-align:left">Artist</th>
            <th style="text-align:left">Genre</th>
            <th style="text-align:left">Subject</th>
            <th style="text-align:left">Artwork Name</th>
            <th style="text-align:left">Dimensions</th>
            <th style="text-align:left">Location</th>
            <th style="text-align:left">Price</th>
            <th style="text-align:left">Date of Production</th>
            <th style="text-align:left">Artwork Type</th>
            <th style="text-align:left">Description</th>
            <th style="text-align:left">More Info</th>
          </tr>

          <xsl:for-each select="Artstore/Artworks/Artwork">
            <tr>
              <td><xsl:value-of select="@ID"/></td>
              <td><xsl:value-of select="imagel_id"/></td>
              <td><xsl:value-of select="artist_id"/></td>
              <td><xsl:value-of select="genre_id"/></td>
              <td><xsl:value-of select="subject_id"/></td>
              <td><xsl:value-of select="artwork_name"/></td>
              <td><xsl:value-of select="dimensions"/></td>
              <td><xsl:value-of select="location"/></td>
              <td><xsl:value-of select="price"/></td>
              <td><xsl:value-of select="artwork_date"/></td>
              <td><xsl:value-of select="artwork_type"/></td>
              <td><xsl:value-of select="description"/></td>
              <td><xsl:value-of select="more_info"/></td>
            </tr>
          </xsl:for-each>
        </table>
        <a href="#">Back to Top</a>

        <h2 id="galleries">Galleries</h2>
        <table border="1">
          <tr bgcolor="#ADD8E6">
            <th style="text-align:left">ID</th>
            <th style="text-align:left">Image</th>
            <th style="text-align:left">Museum Name</th>
            <th style="text-align:left">Famous Works</th>
            <th style="text-align:left">Description</th>
            <th style="text-align:left">More Info</th>
          </tr>

          <xsl:for-each select="Artstore/Galleries/Gallery">
            <tr>
              <td><xsl:value-of select="@ID"/></td>
              <td><xsl:value-of select="imagel_id"/></td>
              <td><xsl:value-of select="gallery_name"/></td>
              <td><xsl:value-of select="famous_works"/></td>
              <td><xsl:value-of select="description"/></td>
              <td><xsl:value-of select="more_info"/></td>
            </tr>
          </xsl:for-each>
        </table>
        <a href="#">Back to Top</a>

        <h2 id="genres">Genres</h2>
        <table border="1">
          <tr bgcolor="#ADD8E6">
            <th style="text-align:left">ID</th>
            <th style="text-align:left">Genre Name</th>
          </tr>

          <xsl:for-each select="Artstore/Genres/Genre">
            <tr>
              <td><xsl:value-of select="@ID"/></td>
              <td><xsl:value-of select="genre_name"/></td>
            </tr>
          </xsl:for-each>
        </table>
        <a href="#">Back to Top</a>

        <h2 id="image-l">Large Images</h2>
        <table border="1">
          <tr bgcolor="#ADD8E6">
            <th style="text-align:left">ID</th>
            <th style="text-align:left">Image Path</th>
          </tr>

          <xsl:for-each select="Artstore/Image_l/Image">
            <tr>
              <td><xsl:value-of select="@ID"/></td>
              <td><xsl:value-of select="image_l"/></td>
            </tr>
          </xsl:for-each>
        </table>
        <a href="#">Back to Top</a>

        <h2 id="image-s">Small Images</h2>
        <table border="1">
          <tr bgcolor="#ADD8E6">
            <th style="text-align:left">ID</th>
            <th style="text-align:left">Image Path</th>
          </tr>

          <xsl:for-each select="Artstore/Image_s/Image_s">
            <tr>
              <td><xsl:value-of select="@ID"/></td>
              <td><xsl:value-of select="image_s"/></td>
            </tr>
          </xsl:for-each>
        </table>
        <a href="#">Back to Top</a>

        <h2 id="subjects">Subjects</h2>
        <table border="1">
          <tr bgcolor="#ADD8E6">
            <th style="text-align:left">ID</th>
            <th style="text-align:left">Subject Name</th>
          </tr>

          <xsl:for-each select="Artstore/Subjects/Subject">
            <tr>
              <td><xsl:value-of select="@ID"/></td>
              <td><xsl:value-of select="subject_name"/></td>
            </tr>
          </xsl:for-each>
        </table>
        <a href="#">Back to Top</a>

      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>