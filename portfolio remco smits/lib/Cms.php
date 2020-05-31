<?php
class Cms
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function UpdateHomePage($pagenaam, $content, $id)
    {
        $this->db->query('UPDATE cms SET page_name = :page_name, content = :content WHERE id = :id');
        $this->db->bind(':page_name', $pagenaam);
        $this->db->bind(':content', $content);
        $this->db->bind(':id', $id);
        $this->db->execute();
    }
    public function GetHomePageContent()
    {
        $this->db->query('SELECT * FROM homepage_content');
        $result = $this->db->resultSet();
        return $result;
    }

    public function GetHomePage()
    {
        $this->db->query('SELECT content FROM cms WHERE id = :id LIMIT 1');
        $this->db->bind(':id', '1');
        $result = $this->db->single();
        return $result;
    }
    public function GetLandingPage()
    {
        $this->db->query('SELECT content FROM cms WHERE id = :id LIMIT 1');
        $this->db->bind(':id', '2');
        $result = $this->db->single();
        return $result;
    }
}
