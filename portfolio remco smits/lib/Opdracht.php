<?php


class Opdracht{
    private $db;
    
    public function __construct(){
        $this->db = new Database();    
    }

    public function GetOpdrachtInfo($naam){
        $this->db->query("SELECT * FROM opdrachten WHERE naam = :naam");
        $this->db->bind(":naam", $naam, PDO::PARAM_STR);
        $result = $this->db->single();
        return $result;
    }
    public function GetAllProjects(){
        $this->db->query("SELECT * FROM opdrachten ORDER BY id DESC");
        $result = $this->db->resultSet();
        return $result;
    }
}
