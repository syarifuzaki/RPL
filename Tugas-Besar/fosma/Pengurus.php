<?php
class Pengurus{
public function __construct(){
$this->db = new PDO('mysql:host=localhost;dbname=fosma','root','');
}
public function addPengurus($nim, $nama, $fakultas, $jabatan){
$sql = "INSERT INTO pengurus (nim, nama, fakultas, jabatan) VALUES('$nim', '$nama', '$fakultas', '$jabatan')";
$query = $this->db->query($sql);
if(!$query){
return "Failed";
}
else{
return "Success";
}
}
public function editPengurus($nim){
$sql = "SELECT * FROM pengurus WHERE nim='$nim'";
$query = $this->db->query($sql);
return $query;
}
public function updatePengurus($nim, $nama, $fakultas, $jabatan){
$sql = "UPDATE pengurus SET nim='$nim', nama='$nama', fakultas='$fakultas', jabatan='$jabatan' where nim = '$nim'";
$query = $this->db->query($sql);
if(!$query){
return "Failed";
}
else{
return "Success";
}
}

public function showPengurus(){
$sql = "SELECT * FROM pengurus";
$query = $this->db->query($sql);
return $query;
}
public function deletePengurus($nim){
$sql = "DELETE FROM pengurus WHERE nim='$nim'";
$query = $this->db->query($sql);
return $query;
}
}
?>
