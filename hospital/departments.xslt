<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	<xsl:template match="/">
		<html>
			<body>
				<h2>Qualifications of our Doctor</h2>
					<table border="1">
						<tr bgcolor="burgundy">
							<th style="text-align:left">Name</th>
							<th style="text-align:left">Years</th>
							<th style="text-align:left">Patients</th>
						</tr>
						<xsl:for-each select="departments/doctor">
							<tr>
								<td>
									<xsl:value-of select="name"/>
								</td>
								<td>
									<xsl:value-of select="years"/>
								</td>
								<td>
									<xsl:value-of select="patients"/>
								</td>
							</tr>
						</xsl:for-each>
					</table>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>