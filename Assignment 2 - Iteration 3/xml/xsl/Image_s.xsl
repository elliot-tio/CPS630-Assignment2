<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:output version='1.0' encoding='UTF-8' indent='no' method='html'/>

  <xsl:template match="/">
    <html>
      <body>
        <h2>Small Images</h2>
        <table border="1">
          <tr bgcolor="#ADD8E6">
            <th style="text-align:left">ID</th>
            <th style="text-align:left">Image Path</th>
          </tr>

          <xsl:for-each select="Image_s/Image_s">
            <tr>
              <td><xsl:value-of select="@ID"/></td>
              <td><xsl:value-of select="image_s"/></td>
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>