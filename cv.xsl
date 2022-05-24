<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<html>
			<head>
				<title>Mon CV</title>
			</head>
			<body>
				<h1>Curiculum Vitae</h1>
				<ul>
					<xsl:for-each select="cv">
						<p><strong><xsl:value-of select="entete/prenom "/><xsl:text>&#x09;</xsl:text><xsl:value-of select="entete/nom" /></strong><br/>
						<xsl:value-of select="entete/ddn" />, <xsl:value-of select="entete/nationalite" /><br/>
						<xsl:value-of select="entete/situationMaritale" />, <xsl:value-of select="entete/permis" /><br/>
						<xsl:value-of select="entete/mail" /><br/>
						<xsl:value-of select="entete/web" /></p>	
						<table border ="1" width="600px">
							<tr>
								<td><strong>Situation acutelle</strong></td>
							</tr>
						</table>
						<xsl:value-of select="situationActuelle"/><br/><br/>
						<table border="1" width="600px">
							<tr>
								<td><strong>Diplômes</strong></td>
							</tr>
						</table>
						<xsl:for-each select="diplomes/diplome">
							<strong><xsl:value-of select="annee"/><xsl:text>&#x9;</xsl:text><xsl:value-of select="intitule"/><br/></strong>
    						</xsl:for-each>
    					<table border="1" width="600px">
    						<tr>
    							<td><strong>Stages</strong></td>
    						</tr>
    					</table>
    					<xsl:for-each select="stages/stage">
    						<strong><xsl:value-of select="date"/><xsl:text>&#x9;</xsl:text><xsl:value-of select="annee"/><xsl:text>&#x9;</xsl:text><xsl:value-of select="titre"/></strong><br/>
    						<xsl:value-of select="description"/><br/>
    					</xsl:for-each>
    					<br/>
    					<table border="1" width="600px">
    						<tr>
    							<td>Compétences</td>
    						</tr>
    					</table>
    					<xsl:for-each select="competences/competence">
    						<strong><xsl:value-of select="titre"/><xsl:text>&#x9;:&#x9;</xsl:text></strong><xsl:value-of select="description"/><br/>
    					</xsl:for-each>
    					<br/>
    					<table border="1" width="600px">
    						<tr>
    							<td>Langues</td>
    						</tr>
    					</table>
    					<xsl:for-each select="langues/langue">
    						<strong><xsl:value-of select="intitule"/></strong><xsl:text>&#x9;</xsl:text><xsl:value-of select="niveau"/><br/>
    					</xsl:for-each>
    					<table border="1" width="600px">
    						<tr>
    							<td>Loisirs</td>
    						</tr>
    					</table>
    					<xsl:for-each select="loisirs/loisir">
    						<xsl:value-of select="."/><xsl:text>, </xsl:text>
    					</xsl:for-each>

					</xsl:for-each>	
				</ul>


			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>