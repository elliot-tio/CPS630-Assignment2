<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:output version='1.0' encoding='UTF-8' indent='no' method='html'/>

  <xsl:template match="/">
    <html>
      <body>
        <h2>Artworks</h2>
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

          <xsl:for-each select="Artworks/Artwork">
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
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>