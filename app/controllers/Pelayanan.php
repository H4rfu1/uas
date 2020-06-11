<?php

class Pelayanan extends Controller {
    public function index()
    {
      $data['judul'] = 'Pelayanan';
      // $data['nama'] = $this->model('User_model')->getUser();
      $this->view('templates/header', $data);
      $this->view('pelayanan/index', $data);
      $this->view('templates/footer');
    }
}
