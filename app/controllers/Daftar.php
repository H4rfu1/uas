<?php

class Daftar extends Controller {
    public function index()
    {
      $data['judul'] = 'Daftar';
      // $data['nama'] = $this->model('User_model')->getUser();
      $this->view('templates/header', $data);
      $this->view('daftar/index', $data);
      $this->view('templates/footer');
    }
    public function tambahAkun()
    {
      if(isset($_POST['daftar'])){
			$nama = $_FILES['image']['name'];
			$ukuran	= $_FILES['image']['size'];
			$image   = addslashes(file_get_contents($_FILES['image']['tmp_name']));
				if($ukuran < 1044070){
					  // move_uploaded_file($file_tmp, 'assets/img/profil/'.$nama);
            if( $this->model('Akun_model')->tambahDataAkun($_POST,$image) > 0 ) {
                  Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                  header('Location: ' . BASEURL . '/daftar');
                  exit;
              } else {
                  Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                  header('Location: ' . BASEURL . '/daftar');
                  exit;
              }
  				}else{
            Flasher::setFlash('ukuran file', 'terlalu besar', 'danger');
            header('Location: ' . BASEURL . '/daftar');
            exit;
  				}
  		}

    }
}
