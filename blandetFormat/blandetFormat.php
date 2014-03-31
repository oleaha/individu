<?php

if(isset($_GET['order'])) {


?>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Ordre #<?php echo $_GET['orderId']; ?></title>
	</head>
	<body style="font-family: 'calibri';">
	
		<table width="350">
			<tr>
				<td align="left" valign="top">
					<strong style="font-size: 10px">AVSENDER: </strong><br /><span style="font-size: 12px;"> INDIVIDU.NO AS <br /> BJELLANVEIEN 24, PORT 1<br /> 3172 VEAR<br />t. 90 20 98 93</span>
				</td>
				<td align="right">
					<img src="http://img.individu.no/Franko.jpg" width="90px" height="90px;"><br />
					<img src="http://img.individu.no/A-pri.jpg" width="120px" height="30px;"><br />
				</td>
			</tr>
			<tr>
				<table width="350px;" style="margin-top: 20px;">
					<tr style="outline: 2px solid black;" height="60px;">
						<td align="left" valign="top" style="font-size: 10px;"><strong>NAVN:</strong></td>
						<td align="left" style="font-size: 18px;"><?php echo $_GET['name']; ?></td>
					</tr>
					<tr style="outline: 2px solid black;" height="80px;">
						<td align="left" valign="top" style="font-size: 10px;"><strong>ADRESSE:</strong></td>
						<td align="left"><?php echo $_GET['address']; ?></td>
					</tr>
					<tr style="outline: 2px solid black;" height="40px;">
						<td align="left" valign="top" style="font-size: 10px;"><strong>POSTNR. / STED:</strong></td>
						<td align="left"><?php echo $_GET['city']; ?></td>
					</tr>
					<tr style="outline: 2px solid black;" height="40px;">
						<td align="left" valign="top" style="font-size: 10px;"><strong>TELEFONNUMMER:</strong></td>
						<td align="left"><?php echo $_GET['tlf']; ?></td>
					</tr>
				</table>
			</tr>
			<tr>
				<td align="left" valign="top"><span style="font-size: 10px;">ORDRENUMMER:</span></td>
				<td align="left" valign="top"><strong style="font-size: 10px;"><?php echo $_GET['order']; ?></strong></td>
			</tr>
			<tr>
				<td><br /><br /><img src="http://img.individu.no/data/logo_individu.png" width="350"></td>
			</tr>
		</table>
		
	</body>
	</html>	
<?php
	
}

else {
	echo "<h1> No information </h1>";
}

?>