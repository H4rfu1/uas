<?php

class ListCar extends Controller {
    public function index()
    {
      $data['judul'] = 'Daftar Mobil';
      // $data['nama'] = $this->model('User_model')->getUser();
      $this->view('templates/header', $data);
      $this->view('listCar/index', $data);
      $this->view('templates/footer');
    }
    public function page($num=1)
    {
      echo $num;
    }
}
