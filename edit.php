<!DOCTYPE html>
<html>
<head>
	<title> Data Mahasiswa menggunakan CRUD PHP dan MySQLi</title>
</head>

<body>
	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="index.php"> KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
	
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method = "post" action="update.php">
			<table>
				<tr>
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="nim" value="<?php echo $d['nim']; ?>">
					</td>
				</tr>
				<tr>
					<td>KELAS</td>
					<td><input type="text" name="kelas" value="<?php echo $d['kelas']; ?>">
					</td>
				</tr>
				<tr>
					<td>KD_MK</td>
					<td><input type="number" name="kd_mk" value="<?php echo $d['kd_mk']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama_MK</td>
					<td><input type="text" name="nama_mk" value="<?php echo $d['nama_mk']; ?>">
					</td>
				</tr>
				<tr>
					<td>Indeks</td>
					<td><input type="text" name="indeks" value="<?php echo $d['indeks']; ?>">
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><textarea type = "text" name="alamat" value="<?php echo $d['alamat']; ?>">
					</textarea></td>
				</tr>
				<tr>
					<td></td>
					<tr><td><input type="submit" value="SIMPAN"></td>
					<td><input type="reset" value="RESET"></td>
			</tr>
		</table>
		</form>
		<?php
	}
	?>
</body>

</html>
