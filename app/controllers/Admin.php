<?php

class Admin extends Controller {
  ///dashboard page
    public function index()
    {
      $data['judul'] = 'Dashboard Admin';
      // $data['nama'] = $this->model('User_model')->getUser();
      $this->view('templates/header_admin', $data);
      $this->view('admin/index', $data);
      $this->view('templates/footer_admin');
    }

    //halaman user page
    public function user($aktif='1')
    {
      $data['judul'] = 'user menu';
      $data['aktif'] = $aktif;
      $data['user'] = $this->model('Akun_model')->getAllAkun();
      $this->view('templates/header_admin', $data);
      $this->view('admin/user', $data);
      $this->view('templates/footer_admin');
    }
    public function block($id=0)
    {
      if( $this->model('Akun_model')->blockAkun($id) > 0 ) {
            Flasher::setFlash('berhasil', 'diblock', 'success');
            header('Location: ' . BASEURL . '/admin/user');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diblock', 'danger');
            header('Location: ' . BASEURL . '/admin/user');
            exit;
        }
    }
    public function unblock($id=0)
    {
      if( $this->model('Akun_model')->unblockAkun($id) > 0 ) {
            Flasher::setFlash('berhasil', 'diunblock', 'success');
            header('Location: ' . BASEURL . '/admin/user');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diunblock', 'danger');
            header('Location: ' . BASEURL . '/admin/user');
            exit;
        }
    }




    //halaman pemesanan
    public function pemesanan()
    {
      $data['judul'] = 'pemesanan menu';
      // $data['nama'] = $this->model('User_model')->getUser();
      $this->view('templates/header_admin', $data);
      $this->view('admin/pemesanan', $data);
      $this->view('templates/footer_admin');
    }



    //halaman kendaraan
    public function getubah()
    {
        echo json_encode($this->model('Mobil_model')->getMobilById($_POST['id']));
    }
    public function hapusMobil($id)
    {
        if( $this->model('Mobil_model')->hapusDataMobil($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/admin/kendaraan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/admin/kendaraan');
            exit;
        }
    }
    public function kendaraan($aktif='1')
    {
      $data['judul'] = 'kendaraan menu';
      $data['lokasi'] = $this->model('Lokasi_model')->getAllLokasi();
      $data['tipe'] = $this->model('Tipemobil_model')->getAllTipe();
      $data['spesifikasi'] = $this->model('Spesifikasi_model')->getAllSpesifikasi();
      $data['mobil'] = $this->model('Mobil_model')->getAllMobil();
      $this->view('templates/header_admin', $data);
      $this->view('admin/kendaraan', $data);
      $this->view('templates/footer_admin');
    }
    public function tambahMobil()
    {
      // var_dump($_POST); die;
      if(isset($_POST['tambah'])){
			// $nama = $_FILES['image']['name'];
			// $ukuran	= $_FILES['image']['size'];
      // $tipe_gambar	= $_FILES['image']['type'];
      $image = $_FILES['image']['name'];

      // image file directory
      $target = "assets/img/car/".basename($image);
			move_uploaded_file($_FILES['image']['tmp_name'], $target);
				if($ukuran < 1044070){
					  // move_uploaded_file($file_tmp, 'assets/img/profil/'.$nama);
            if( $this->model('Mobil_model')->tambahDataMobil($_POST,$image) > 0 ) {
                  Flasher::setFlash('mobil berhasil', 'ditambahkan', 'success');
                  header('Location: ' . BASEURL . '/admin/kendaraan');
                  exit;
              } else {
                  Flasher::setFlash('mobil gagal', 'ditambahkan', 'danger');
                  header('Location: ' . BASEURL . '/admin/kendaraan');
                  exit;
              }
  				}else{
            Flasher::setFlash('ukuran file', 'terlalu besar', 'danger');
            header('Location: ' . BASEURL . '/daftar');
            exit;
  				}
  		}

    }










    ///umum

    public function logout()
    {
      session_start();
       // menghapus semua session
      session_destroy();
       // mengalihkan halaman ke halaman login
      header('Location: ' . BASEURL . '/');
    }



}
