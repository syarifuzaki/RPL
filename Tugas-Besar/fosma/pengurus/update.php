
<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nim_mahasiswa   = $_POST['nim'];
$nama           = $_POST['nama'];
$fakultas        = $_POST['fakultas'];
$jabatan        = $_POST['jabatan'];
// query SQL untuk update data
$query="UPDATE pengurus SET nim='$nim_mahasiswa',nama='$nama',fakultas='$fakultas',jabatan='$jabatan' where nim='$nim_mahasiswa'";
mysql_query($query);
// mengalihkan ke halaman index.php
header("location:tampil pengurus.php");
?>