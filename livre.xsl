<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<html>
			<head>
				<title>Ma Bibliothèque</title>
			</head>
			<body>
				<h1>Ma bibli</h1>
				<ul>
					<xsl:for-each select="bibliotheque/livres">
					<h5><xsl:value-of select="livre/titre" /></h5>
					<table border="1" width="800px" style="background-color:#FFFFCC">
						<tr>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td colspan="2"></td>
						</tr>
					</table>
					</xsl:for-each>
				</ul>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>