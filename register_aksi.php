<?php 
	include "koneksi.php";
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id_level = $_POST['id_level'];
	$query = mysql_query("INSERT INTO user VALUES('','$nik','$nama','$username','$password','$id_level')") or die(mysql_error());
	// header('Location:index.php');
	if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}	
?>