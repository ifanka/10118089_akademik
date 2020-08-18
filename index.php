<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa Mengunakan CRUD PHP dan MySQLi</title>
</head>

<body>

	<h2>CRUD Data Mahasiswa</h2>
	<br/>
	<a href="tambah.php">+ Tambah Data Mahasiswa</a>
	<br/>
	<br/>
	<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:index1.php?pesan=belum_login");
	}
	?>
	<table border ="1">
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>NIM</th>
			<th>KELAS</th>
			<th>KD_MK</th>
			<th>Nama_MK</th>
			<th>Indeks</th>
			<th>ALAMAT</th>
			<th>OPSI</th>
			</tr>
			<?php
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"SELECT * FROM mahasiswa ");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['nim']; ?></td>
					<td><?php echo $d['kelas']; ?></td>
					<td><?php echo $d['kd_mk']; ?></td>
					<td><?php echo $d['nama_mk']; ?></td>
					<td><?php echo $d['indeks']; ?></td>
					<td><?php echo $d['alamat']; ?></td>
					<td>
						<a href ="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
						<a href ="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
					</td>
				</tr>
				<?php
				}
			?>
			</table>
	<br/>
	<a href="logout.php">LOGOUT</a>
	<br/>
</body>
</html>
