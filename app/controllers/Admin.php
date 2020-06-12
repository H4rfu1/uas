<?php

class Admin extends Controller {
    public function index()
    {
      $data['judul'] = 'Dashboard Admin';
      // $data['nama'] = $this->model('User_model')->getUser();
      $this->view('templates/header_admin', $data);
      $this->view('admin/index', $data);
      $this->view('templates/footer_admin');
    }
    public function user()
    {
      $data['judul'] = 'user menu';
      // $data['nama'] = $this->model('User_model')->getUser();
      $this->view('templates/header_admin', $data);
      $this->view('admin/user', $data);
      $this->view('templates/footer_admin');
    }
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
