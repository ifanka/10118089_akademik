<?php 
$koneksi = mysqli_connect("localhost","root","","10118089_akademik");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>