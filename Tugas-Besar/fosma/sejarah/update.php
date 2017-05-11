
<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$title  = $_POST['title'];
$deskripsi = $_POST['deskripsi'];

// query SQL untuk insert data
$query="UPDATE sejarah SET title='$title', deskripsi='$deskripsi'";
mysql_query($query);
// mengalihkan ke halaman index.php
header("location:tampil sejarah.php");
?>