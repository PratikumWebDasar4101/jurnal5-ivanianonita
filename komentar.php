<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form action="validasi.php" method="POST">
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="number" maxlength="10" name="nim"></td>	
			</tr>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" maxlength="25" name="nama"></td>
			</tr>

			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email"></td>
			</tr>

			<tr>
				<td>Komentar</td>
				<td>:</td>
				<td><input type="text" name="komentar"></td>
			</tr>		

			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>

		</form>
		</table>


</body>
</html>
