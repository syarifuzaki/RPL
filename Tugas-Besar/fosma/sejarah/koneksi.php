
<?php
// konfigurasi database
$host       =   "localhost";
$user       =   "root";
$password   =   "rawabuaya";
$database   =   "fosma";
// perintah php untuk akses ke database
$koneksi = mysql_connect($host, $user, $password, $database);
mysql_select_db($database);
echo "Yeiy";

?>