<?xml version="1.0"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">


<xsl:template name="auteur">
  <xsl:param name="auteur"/>
  <html>
   <body>
    <h2><xsl:value-of select="nom"> <xsl:value-of>
    </h2>
      <ul>
        <li>
          <xsl:value-of select="prenom"> <xsl:value-of>
          <xsl:value-of select="nom"> <xsl:value-of>
        </li>
        <li>
          <xsl:element name="img">
          <xsl:attribute name="src">
            <xsl:value-of select="url"/>
          </xsl:attribute>
          </xsl:element>
          </li>
          <li><xsl:value-of select="commentaire"/></li>
      </ul>
    </body>
  </html>
 
</xsl:template>

<xsl:template match="/">
  <html>
   <body>
    <h2>Auteurs</h2>
    <table>
      <tr>
        <th>Auteur</th>
        <th>Origine</th>
        <th>Photo</th>
        <th>Commentaire</th>
      </tr>
      <xsl:for-each select="bibliotheque/livres/auteurs/auteur">
        <tr>
          <td><xsl:value-of select="nom"/>,<xsl:value-of select="prenom"/></td>
          <td><xsl:value-of select="pays"/></td>
          <td>
          <xsl:element name="img">
          <xsl:attribute name="src">
            <xsl:value-of select="url"/>
          </xsl:attribute>
          </xsl:element>
          </td>
          <td><xsl:value-of select="commentaire"/></td>
        </tr>
      </xsl:for-each>
    </table>
    </body>
  </html>
 
</xsl:template>

</xsl:stylesheet>