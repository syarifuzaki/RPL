<?php
class Proker{
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=fosma','root','');
    }


    public function addProker($nama_proker, $tanggal, $deskripsi){
        $sql = "INSERT INTO proker (nama_proker, tanggal, deskripsi) VALUES('$nama_proker','$tanggal','$deskripsi')";
        $query = $this->db->query($sql);
        if(!$query){
            return "Failed";
        }
        else{
            return "Success";
        }
    }
    public function editProker($nama_proker){
        $sql = "SELECT * FROM proker WHERE nama_proker='$nama_proker'";
        $query = $this->db->query($sql);
        return $query;
    }
    public function updateProker($nama_proker, $tanggal, $deskripsi){
        $sql = "UPDATE proker SET nama_proker='$nama_proker', tanggal='$tanggal', deskripsi='$deskripsi'";
        $query = $this->db->query($sql);
        if(!$query){
            return "Failed";
        }
        else{
            return "Success";
        }
    }

    public function showProker(){
        $sql = "SELECT * FROM proker";
        $query = $this->db->query($sql);
        return $query;
    }
    public function deleteProker($nama_proker){
        $sql = "DELETE FROM proker WHERE nama_proker='$nama_proker'";
        $query = $this->db->query($sql);
        return $query;
    }


}
?>