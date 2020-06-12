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
    public function kendaraan()
    {
      $data['judul'] = 'kendaraan menu';
      // $data['nama'] = $this->model('User_model')->getUser();
      $this->view('templates/header_admin', $data);
      $this->view('admin/kendaraan', $data);
      $this->view('templates/footer_admin');
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
