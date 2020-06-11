<?php

class NotFound extends Controller {
    public function index()
    {
      $data['judul'] = '404';
      // $data['nama'] = $this->model('User_model')->getUser();
      $this->view('templates/header', $data);
      $this->view('NotFound/NotFound', $data);
      $this->view('templates/footer');
    }
}
