<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:output version='1.0' encoding='UTF-8' indent='no' method='html'/>

  <xsl:template match="/">
    <html>
      <body>
        <h2>Genres</h2>
        <table border="1">
          <tr bgcolor="#ADD8E6">
            <th style="text-align:left">ID</th>
            <th style="text-align:left">Genre Name</th>
          </tr>

          <xsl:for-each select="Genres/Genre">
            <tr>
              <td><xsl:value-of select="@ID"/></td>
              <td><xsl:value-of select="genre_name"/></td>
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>