<?xml version="1.0"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
    <h2>Livres</h2>
    <table>
      <tr>
        <th>Titre</th>
        <th>Auteurs</th>
        <th>Année</th>
        <th>Prix</th>
      </tr>
      <xsl:for-each select="bibliotheque/livre">
        <xsl:sort
        select = "/prix/valeur"
        data-type = { "number" }
        order = { "descending" }
        /> 
        <tr>
          <td><xsl:value-of select="titre"/></td>
          <xsl:for-each select="/auteurs/auteur">
          <td><xsl:value-of select="nom"/>,<xsl:value-of select="prenom"/></td>
          </xsl:for-each>
          <td><xsl:value-of select="annee"/></td>
          <td><xsl:value-of select="prix/valeur"/></td>
        </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>