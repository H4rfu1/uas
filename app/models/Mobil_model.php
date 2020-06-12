<?php

class Mobil_model {
    private $table = 'mobil';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMobil()
    {
        $this->db->query('SELECT * FROM mobil m join tipe_mobil tm on m.tipe = tm.id_tipe');
        return $this->db->resultSet();
    }

    public function getMobilById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMobil($data,$image)
    {
        $query = "INSERT INTO mobil
                    VALUES
                  ('', :tipe, :lokasi, :harga_sewa, :plat_nomor, :tahun, :keterangan, :image)";

        $this->db->query($query);
        $this->db->bind('tipe', $data['tipe']);
        $this->db->bind('lokasi', $data['lokasi']);
        $this->db->bind('harga_sewa', $data['harga_sewa']);
        $this->db->bind('plat_nomor', $data['plat_nomor']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('image', $image);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMobil($id)
    {
        $query = "DELETE FROM mobil WHERE id = :id";

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
    public function blockAkun($id)
    {
      try {
        $query = "UPDATE akun SET
                    status = 'terblokir'
                  WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
      } catch (\Exception $e) {
        var_dump($e); die;
      }

    }
    public function unblockAkun($id)
    {
      $query = "UPDATE akun SET
                  status = 'aktif'
                WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);
      $this->db->execute();

      return $this->db->rowCount();
    }

}
