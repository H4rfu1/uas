<?php

class Profil extends Controller {
    public function index()
    {
      $data['judul'] = 'Profile';
      $data['lokasi'] = $this->model('Lokasi_model')->getAllLokasi();
      $data['mobil'] = $this->model('Mobil_model')->getAllMobil();
      $this->view('templates/header', $data);
      $this->view('profil/index', $data);
      $this->view('templates/footer');
    }
    public function tambahBooking()
    {
      if(isset($_POST['booking'])){
			// $nama = $_FILES['image']['name'];
			// $ukuran	= $_FILES['image']['size'];
      // $tipe_gambar	= $_FILES['image']['type'];
			// $image   = addslashes(file_get_contents($_FILES['image']['tmp_name']));

      // Get image name
      $image = $_FILES['image']['name'];
        if( $this->model('Booking_model')->tambahDataBooking($_SESSION['id'],$_POST) > 0 ) {
                  Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                  header('Location: ' . BASEURL . '/masuk');
                  exit;
  			}else{
            Flasher::setFlash('ukuran file', 'terlalu besar', 'danger');
            header('Location: ' . BASEURL . '/daftar');
            exit;
  				}
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
