<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$kd_mk = $_POST['kd_mk'];
$nama_mk = $_POST['nama_mk'];
$indeks = $_POST['indeks'];
$alamat = $_POST['alamat'];

//update data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama', nim='$nim',kd_mk='$kd_mk', nama_mk='$nama_mk', indeks='$indeks', kelas='$kelas', 
alamat='$alamat' where id='$id'");

//mengalihkan halaman kembali ke index.php
header ("location:index.php");

?>