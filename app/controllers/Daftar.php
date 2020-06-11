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
}
