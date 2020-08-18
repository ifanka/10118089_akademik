<!DOCTYPE html>
<html>
<head>
	<title> Data Mahasiswa menggunakan CRUD PHP dan MySQLi</title>
	
</head>
<body>

	<h2>CRUD Data Mahasiwa</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASIWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>KELAS</td>
				<td><input type="text" name="kelas"></td>
			</tr>
			<tr>
				<td>KD_MK</td>
				<td><input type="number" name="kd_mk"></td>
			</tr>
			<tr>
				<td>Nama_MK</td>
				<td><input type="text" name="nama_mk"></td>
			</tr>
			<tr>
				<td>Indeks</td>
				<td><input type="text" name="indeks"></td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td><textarea input type="text" name="alamat"></textarea></td>
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
