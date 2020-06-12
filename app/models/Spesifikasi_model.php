<?php

class Spesifikasi_model {
    private $table = 'spesifikasi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllSpesifikasi()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }



}
