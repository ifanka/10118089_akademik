<!DOCTYPE html>
<html>
<head>
	<title> Register Data Mahasiswa menggunakan CRUD PHP dan MySQLi</title>
	
</head>
<body>

	<h2>CRUD ADMIN</h2>
	<br/>
	<a href="index1.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH ADMIN</h3>
	<form method="post" action="tambah_admin.php">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<tr><td><input type="submit" value="SIMPAN"></td>
				<td><input type="reset" value="RESET"></td>
			</tr>
		</table>
	</form>
</body>
</html>
