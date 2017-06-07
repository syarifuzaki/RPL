<?php
class Sejarah{
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=fosma','root','');
    }
    public function addSejarah($title, $deskripsi){
        $sql = "INSERT INTO sejarah (title, deskripsi) VALUES('$title', '$deskripsi')";
        $query = $this->db->query($sql);
        if(!$query){
            return "Failed";
        }
        else{
            return "Success";
        }
    }
    public function editSejarah($title){
        $sql = "SELECT * FROM sejarah WHERE title='$title'";
        $query = $this->db->query($sql);
        return $query;
    }
    public function updateSejarah($title, $deskripsi){
        $sql = "UPDATE sejarah SET title='$title', 
		deskripsi = '$deskripsi' where title = '$title'";
        $query = $this->db->query($sql);
        if(!$query){
            return "Failed";
        }
        else{
            return "Success";
        }
    }

    public function showSejarah(){
        $sql = "SELECT * FROM sejarah";
        $query = $this->db->query($sql);
        return $query;
    }
    public function deleteSejarah($title){
        $sql = "DELETE FROM sejarah WHERE title='$title'";
        $query = $this->db->query($sql);
        return $query;
    }
}
?>