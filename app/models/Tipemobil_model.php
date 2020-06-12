<?php

class Tipemobil_model {
    private $table = 'tipe_mobil';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllTipe()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }



}
