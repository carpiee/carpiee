<?php


class Menu
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function GetAllMenuContent()
    {
        $this->db->query("SELECT * FROM menu");
        $result = $this->db->resultSet();
        return $result;
    }
}
