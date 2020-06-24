<?php 
include "koneksi.php";
$id_pegawai = $_GET['id_pegawai'];
$query = mysql_query("DELETE FROM pegawai WHERE id_pegawai = '$id_pegawai'") or die(mysql_error());
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='table.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='table.php';</script>";
}
?>