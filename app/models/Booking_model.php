<?php

class Booking_model {
    private $table = 'transaksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBooking()
    {
        $this->db->query('SELECT * FROM transaksi t join mobil m on t.kode_mobil=m.id join tipe_mobil tm on m.tipe = tm.id_tipe join lokasi l on m.lokasi=l.id');
        return $this->db->resultSet();
    }

    public function getBookingById($id)
    {
        $this->db->query('SELECT * FROM transaksi t join mobil m on t.kode_mobil=m.id join tipe_mobil tm on m.tipe = tm.id_tipe join lokasi l on m.lokasi=l.id WHERE t.id_transaksi=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataBooking($id,$data)
    {
        $query = "INSERT INTO transaksi
                    VALUES
                  ('', :penyewa, :tgl_sewa, :tgl_kembali, :kode_mobil)";

        $this->db->query($query);
        $this->db->bind('penyewa', $id);
        $this->db->bind('tgl_sewa', $data['tgl_sewa']);
        $this->db->bind('tgl_kembali', $data['tgl_kembali']);
        $this->db->bind('kode_mobil', $data['kode_mobil']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataBooking($id)
    {
        $query = "DELETE FROM transaksi WHERE id_transaksi = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataBooking($id,$data)
    {
        $query = "UPDATE transaksi SET
                    tgl_sewa = :tgl_sewa,
                    tgl_kembali = :tgl_kembali,
                    kode_mobil = :kode_mobil
                  WHERE id_transaksi = :id";

                  $this->db->query($query);
                  $this->db->bind('tgl_sewa', $data['tgl_sewa']);
                  $this->db->bind('tgl_kembali', $data['tgl_kembali']);
                  $this->db->bind('kode_mobil', $data['kode_mobil']);
                  $this->db->bind('id', $id);

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
