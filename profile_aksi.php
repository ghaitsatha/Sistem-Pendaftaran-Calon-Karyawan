<?php 
include 'koneksi.php';

$id_pegawai = $_POST['id_pegawai'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$query = mysql_query("UPDATE user SET nik='$nik', nama='$nama', username='$username' WHERE id_user='$id_user'") or die(mysql_error());

if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='edit_profile.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}
?>