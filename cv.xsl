<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<html>
			<head>
				<title>Mon CV</title>
				<style>
					.image {
					float: right;
					margin: 15px 15px 15px 0;
					}
				</style>
			</head>
			<body>
				<h1 align="center">Curiculum Vitae</h1>
				<table border="2" align="center" width="650px">
					<tr>
						<td>
							<strong><xsl:value-of select="cv/entete/prenom "/><xsl:text>&#x09;</xsl:text><xsl:value-of select="cv/entete/nom" /></strong><br/>
							<xsl:value-of select="cv/entete/ddn" />, <xsl:value-of select="cv/entete/nationalite" /><br/>
							<xsl:value-of select="cv/entete/situationMaritale" />, <xsl:value-of select="cv/entete/permis" /><br/>
							<xsl:value-of select="cv/entete/mail" /><br/>
							<xsl:value-of select="cv/entete/web" /><br/>
								
						</td>
					</tr>
					<tr>
						<td>
							<table border ="1" width="575px" align="center" STYLE="background-color:#CCCCCC">
								<tr>
									<td><strong>Situation acutelle</strong></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<xsl:value-of select="cv/situationActuelle"/><br/><br/>
						</td>
					</tr>
					<tr>
						<td>
							<table border="1" width="575px" align="center" STYLE="background-color:#CCCCCC">
								<tr>
									<td><strong>Diplômes</strong></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
						<xsl:for-each select="cv/diplomes/diplome">
							<strong><xsl:value-of select="annee"/><xsl:text>&#x9;</xsl:text><xsl:value-of select="intitule"/><br/></strong>
    					</xsl:for-each>
    					<br/>
    					</td>
    				</tr>
    				<tr>
    					<td>
    					<table border="1" width="575px" align="center" STYLE="background-color:#CCCCCC">
    						<tr>
    							<td><strong>Stages</strong></td>
    						</tr>
    					</table>
    					</td>
    				</tr>
    				<tr>
    					<td>
    					<xsl:for-each select="cv/stages/stage">
    						<strong><xsl:value-of select="annee"/><xsl:text>&#x9;</xsl:text><xsl:value-of select="titre"/></strong><br/>
    						<xsl:value-of select="description"/><br/>
    					</xsl:for-each>
    					<br/>
    				</td>
    				</tr>
    				<tr>
    					<td>
    					<table border="1" width="575px" align="center" STYLE="background-color:#CCCCCC">
    						<tr>
    							<td><strong>Compétences</strong></td>
    						</tr>
    					</table>
    					</td>
    				</tr>
    				<tr>
    					<td>
    					<xsl:for-each select="cv/competences/competence">
    						<strong><xsl:value-of select="titre"/><xsl:text>&#x9;:&#x9;</xsl:text></strong><xsl:value-of select="description"/><br/>
    					</xsl:for-each>
    					<br/>
    					</td>
    				</tr>
    				<tr>
    					<td>
    					<table border="1" width="575px" align="center" STYLE="background-color:#CCCCCC">
    						<tr>
    							<td><strong>Langues</strong></td>
    						</tr>
    					</table>
    					</td>
    				</tr>
    				<tr>
    					<td>
    					<xsl:for-each select="cv/langues/langue">
    						<strong><xsl:value-of select="intitule"/></strong><xsl:text>&#x9;</xsl:text><xsl:value-of select="niveau"/><br/>
    					</xsl:for-each>
    					</td>
    				</tr>
    				<tr>
    					<td>
    					<table border="1" width="575px" align="center" STYLE="background-color:#CCCCCC">
    						<tr>
    							<td><strong>Loisirs</strong></td>
    						</tr>
    					</table>
    					</td>
    				</tr>
    				<tr>
    					<td>
    					<xsl:for-each select="cv/loisirs/loisir">
    						<xsl:value-of select="."/><xsl:text>&#x9;</xsl:text>
    					</xsl:for-each>
    					</td>
    				</tr>
			</table>

			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>