
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Blandet format - MIINTO.NO</title>
	</head>
	<body style="font-family: 'calibri';">
		<form method="get" action="blandetFormat.php">
			<table>
				<tr>
					<td>Ordrenummer:</td>
					<td><input type="text" name="order"></td>
				</tr>
				<tr>
					<td>Navn:</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Adresse:</td>
					<td><input type="text" name="address"></td>
				</tr>
				<tr>
					<td>Postnummer / Sted:</td>
					<td><input type="text" name="city"></td>
				</tr>
				<tr>
					<td>Telefonnummer</td>
					<td><input type="text" name="tlf"></td>
				</tr>
				<tr colspan="2">
					<td><input type="submit" name="addOrder" value="Send!"></td>
				</tr>
			</table>
		</form>
	</body>
</html>