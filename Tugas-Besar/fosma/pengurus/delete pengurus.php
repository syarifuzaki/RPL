
<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$nim   = $_GET['nim'];
// query SQL untuk delete data
$query="DELETE from pengurus where nim='$nim'";
mysql_query( $query);
// mengalihkan ke halaman index.php
header("location:tampil pengurus.php");
?>