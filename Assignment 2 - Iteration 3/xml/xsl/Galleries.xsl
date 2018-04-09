<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:output version='1.0' encoding='UTF-8' indent='no' method='html'/>

  <xsl:template match="/">
    <html>
      <body>
        <h2>Galleries</h2>
        <table border="1">
          <tr bgcolor="#ADD8E6">
            <th style="text-align:left">ID</th>
            <th style="text-align:left">Image</th>
            <th style="text-align:left">Museum Name</th>
            <th style="text-align:left">Famous Works</th>
            <th style="text-align:left">Description</th>
            <th style="text-align:left">More Info</th>
          </tr>

          <xsl:for-each select="Galleries/Gallery">
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
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>