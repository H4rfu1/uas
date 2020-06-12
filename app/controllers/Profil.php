<?php

class Profil extends Controller {
    public function index()
    {
      $data['judul'] = 'Profile';
      // $data['nama'] = $this->model('User_model')->getUser();
      $this->view('templates/header', $data);
      $this->view('profil/index', $data);
      $this->view('templates/footer');
    }
}
