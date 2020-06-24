<?php 
include 'koneksi.php';

$id_pegawai = $_POST['id_pegawai'];
// $nik = $_POST['nik'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl'].'-'.$_POST['bln'].'-'.$_POST['thn'];
// $email = $_POST['email'];
$alamat = $_POST['alamat'];
$pendidikan = $_POST['pendidikan'];
$jurusan = $_POST['jurusan'];
$foto = $_POST['foto'];
$query = mysql_query("UPDATE pegawai SET nama='$nama', tgl_lahir='$tgl_lahir', alamat='$alamat', pendidikan='$pendidikan', jurusan='$jurusan', foto='$foto' WHERE id_pegawai='$id_pegawai'") or die(mysql_error());

if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='table.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}
?>