<?php

class Admin extends Controller {
    public function index()
    {
      $data['judul'] = 'Home';
      // $data['nama'] = $this->model('User_model')->getUser();
      $this->view('templates/header', $data);
      $this->view('admin/index', $data);
      $this->view('templates/footer');
    }


}