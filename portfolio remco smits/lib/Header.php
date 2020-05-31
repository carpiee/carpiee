<?php


class Header{
    private $db;
    
    public function __construct(){
        $this->db = new Database();    
    }

    public function GetHeader(){
        $this->db->query("SELECT * FROM header");
        $result = $this->db->single();        
        return $result;
    }


    public function UpdateHeader(){

    }
}
