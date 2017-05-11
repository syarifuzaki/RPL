<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$fakultas       = $_POST['fakultas'];
$jabatan         = $_POST['jabatan'];
// query SQL untuk insert data
$query="INSERT INTO pengurus SET nim='$nim',nama='$nama',fakultas='$fakultas',jabatan='$jabatan'";
mysql_query($query);
// mengalihkan ke halaman index.php
header("location:tampil pengurus.php");
?>