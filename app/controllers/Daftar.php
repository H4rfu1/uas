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
			// $nama = $_FILES['image']['name'];
			// $ukuran	= $_FILES['image']['size'];
      // $tipe_gambar	= $_FILES['image']['type'];
			// $image   = addslashes(file_get_contents($_FILES['image']['tmp_name']));

      // Get image name
      $image = $_FILES['image']['name'];

      // image file directory
      $target = "assets/img/profil/".basename($image);
      move_uploaded_file($_FILES['image']['tmp_name'], $target);
				if($ukuran < 1044070){
					  // move_uploaded_file($file_tmp, 'assets/img/profil/'.$nama);
            if( $this->model('Akun_model')->tambahDataAkun($_POST,$image) > 0 ) {
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
  }
}
