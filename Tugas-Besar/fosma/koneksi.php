<?php
$host = "localhost"; // Nama hostnya
$user = "root"; // Username
$pass = ""; // Password (Isi jika menggunakan password)
$connect = mysqli_connect($host, $user, $pass, "fosma") or die('koneksi gagal');; // Koneksi ke MySQL (nanti diubah sesuai nama database nya)

?>