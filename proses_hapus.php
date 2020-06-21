<?php 
include 'koneksi.php';
$id = $_GET['id'];
$query = mysql_query("DELETE FROM pegawai WHERE id = '$id'") or die(mysql_error());
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='daftar_file.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='daftar_file.php';</script>";
}
?>