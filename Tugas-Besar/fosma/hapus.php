<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($connect,"DELETE FROM galeri WHERE id='$id'")or die(mysql_error());;

header("location:listgaleri.php?pesan=hapus");
?>
