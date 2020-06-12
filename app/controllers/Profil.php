<?php

class Profil extends Controller {
    public function index()
    {
      $data['judul'] = 'Profile';
      $data['user'] = $this->model('Akun_model')->getAkunById($_SESSION['id']);
      $data['lokasi'] = $this->model('Lokasi_model')->getAllLokasi();
      $data['mobil'] = $this->model('Mobil_model')->getAllMobil();
      $data['transaksi'] = $this->model('Booking_model')->getAllBooking();
      $this->view('templates/header', $data);
      $this->view('profil/index', $data);
      $this->view('templates/footer');
    }
    public function editBooking($id=0)
    {
      $data['judul'] = 'Edit Booking';
      $data['user'] = $this->model('Akun_model')->getAkunById($_SESSION['id']);
      $data['lokasi'] = $this->model('Lokasi_model')->getAllLokasi();
      $data['mobil'] = $this->model('Mobil_model')->getAllMobil();
      $data['transaksi'] = $this->model('Booking_model')->getBookingById($id);
      // var_dump($data); die;
      $this->view('templates/header', $data);
      $this->view('profil/editBooking', $data);
      $this->view('templates/footer');
    }
    public function tambahBooking()
    {
      if(isset($_POST['booking'])){
        // var_dump($_SESSION['id']);
        // var_dump($_POST); die;
        $id = (int)$_SESSION['id'];
        if( $this->model('Booking_model')->tambahDataBooking($id, $_POST) > 0 ) {
                  Flasher::setFlash('berhasil ', 'ditambahkan', 'success');
                  header('Location: ' . BASEURL . '/profil');
                  exit;
  			}else{
            Flasher::setFlash('gagal ', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/profil');
            exit;
  				}
    }
  }
  public function ubahBooking($id)
  {
    if(isset($_POST['ubahBooking'])){
      // var_dump($_SESSION['id']);
      // var_dump($_POST); die;
      if( $this->model('Booking_model')->ubahDataBooking($id, $_POST) > 0 ) {
                Flasher::setFlash('berhasil ', 'diubah', 'success');
                header('Location: ' . BASEURL . '/profil');
                exit;
      }else{
          Flasher::setFlash('gagal', 'diubah', 'danger');
          header('Location: ' . BASEURL . '/profil');
          exit;
        }
  }
}
  public function hapusBooking($id)
  {
      if( $this->model('Booking_model')->hapusDataBooking($id) > 0 ) {
          Flasher::setFlash('berhasil', 'dihapus', 'success');
          header('Location: ' . BASEURL . '/profil');
          exit;
      } else {
          Flasher::setFlash('gagal', 'dihapus', 'danger');
          header('Location: ' . BASEURL . '/profil');
          exit;
      }
  }
  public function logout()
  {
    session_start();
     // menghapus semua session
    session_destroy();
     // mengalihkan halaman ke halaman login
    header('Location: ' . BASEURL . '/');
  }
}
