<?php 
	include "koneksi.php";
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl'].'-'.$_POST['bln'].'-'.$_POST['thn'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$pendidikan = $_POST['pendidikan'];
	$jurusan = $_POST['jurusan'];
	$foto = $_POST['foto'];

	$query = mysql_query("INSERT INTO pegawai VALUES('','$nik','$nama','$tgl_lahir','$email','$alamat','$pendidikan','$jurusan','$foto')");
	// header("location:daftar_file.php?pesan=input");
	if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='table.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
 ?>