<?php

class Lokasi_model {
    private $table = 'lokasi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllLokasi()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }



}
