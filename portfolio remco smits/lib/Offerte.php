<?php


class Offerte{
    private $db;
    
    public function __construct(){
        $this->db = new Database();    
    }

    public function MakeNewOfferte($naam, $email, $tel, $bedrijfsnaam, $opmerking){
        $this->db->query("INSERT INTO offerte (klant_naam,klant_email,klant_tel,klant_bedrijfsnaam,opmerking) values (:naam,:email,:tel,:bedrijfsnaam,:opmerking)");
        $this->db->bind(":naam", $naam, PDO::PARAM_STR);
        $this->db->bind(":email", $email, PDO::PARAM_STR);
        $this->db->bind(":tel", $tel, PDO::PARAM_STR);
        $this->db->bind(":bedrijfsnaam", $bedrijfsnaam, PDO::PARAM_STR);
        $this->db->bind(":opmerking", $opmerking, PDO::PARAM_STR);
        $this->db->execute();
    }


    public function SendofferteEmail($naam, $email, $tel, $bedrijfsnaam, $opmerking){

    }
}
