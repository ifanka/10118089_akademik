<?php
//koneksi database
include'koneksi.php';

//menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$kd_mk = $_POST['kd_mk'];
$nama_mk = $_POST['nama_mk'];
$indeks = $_POST['indeks'];
$alamat = $_POST['alamat'];

//menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$nim','$kelas','$kd_mk','$nama_mk','$indeks','$alamat')");

//mengalihkan halaman kembali ke index.php
header("location:index.php");

?>