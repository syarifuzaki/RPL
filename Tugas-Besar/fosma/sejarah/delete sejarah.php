
<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$title   = $_GET['title'];
// query SQL untuk delete data
$query="DELETE from sejarah where title='$title'";
mysql_query($query);
// mengalihkan ke halaman index.php
header("location:tampil sejarah.php?pesan=hapus");
?>