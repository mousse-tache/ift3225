<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:key name="auteurid" match="auteur" use="id"/>

<xsl:template match="/">
  <html>
    <head>
            <title>Liste des livres</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
  <body>
    <h1>Livres</h1>
    <table>
      <tr>
        <th></th>
        <th>Titre</th>
        <th>Auteurs</th>
        <th>Année</th>
        <th>Prix</th>
        <th>Langue</th>
        <th>Film</th>
        <th>Commentaire</th>
        <th>Personnages</th>
      </tr>

      <xsl:for-each select="bibliotheque/livre">
        <xsl:sort  select="/prix/valeur" order="descending"/> 
        
        <tr>
          <td>

          <xsl:element name="img">
          <xsl:attribute name="src">
            <xsl:value-of select="couverture"/>
          </xsl:attribute>
          </xsl:element>
        </td>
          <td><xsl:value-of select="titre"/></td>
          <td>
          <xsl:for-each select="key('auteurid', @auteurs)">
          <xsl:value-of select="nom"/>,<xsl:value-of select="prenom"/>
          </xsl:for-each>
          </td>
          <td><xsl:value-of select="annee"/></td>
          <td><xsl:value-of select="prix/valeur"/></td>
          <td><xsl:value-of select="langue"/></td>
          <td><xsl:value-of select="film"/></td>
          <td><xsl:value-of select="commentaire"/></td>
          <td><xsl:for-each select="personnage">
          <xsl:value-of select="prenom"/>   
          <xsl:text> </xsl:text>
          <xsl:value-of select="nom"/> 
          <br/>
          </xsl:for-each></td>
        </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>

