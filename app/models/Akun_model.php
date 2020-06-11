<?php

class Akun_model {
    private $table = 'akun';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllAkun()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAkunById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataAkun($data,$image)
    {
        $query = "INSERT INTO akun
                    VALUES
                  ('', 2, :username, :email, :password, :nm_dpan, :nm_blakang, :no_ktp, :image)";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('nm_dpan', $data['nm_dpan']);
        $this->db->bind('nm_blakang', $data['nm_blakang']);
        $this->db->bind('no_ktp', $data['no_ktp']);
        $this->db->bind('image', $image);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataAkun($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataAkun($data)
    {
        $query = "UPDATE mahasiswa SET
                    nama = :nama,
                    nrp = :nrp,
                    email = :email,
                    jurusan = :jurusan
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataAkun()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    public function getAkunByEmailOrUsername($masukan)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email=:masukan or username=:masukan');
        $this->db->bind('masukan', $masukan);
        return $this->db->single();
    }

}
