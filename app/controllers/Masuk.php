<?php

class Masuk extends Controller {
    public function index()
    {
      $data['judul'] = 'Masuk';
      // $data['nama'] = $this->model('User_model')->getUser();
      $this->view('templates/header', $data);
      $this->view('masuk/index', $data);
      $this->view('templates/footer');
    }
    public function auth()
    {
        //Memulai Session Untuk Penggunaan Data Login
        session_start();
        if(isset($_POST['login'])){
        //Inialisasi Kolom
        $masukan = $_POST['username'];
        $pass = $_POST['pass'];
        if($masukan && $pass){
          //Menyamakan Data Input Dengan Database - Inilah Fungsi Login
          $result = $this->model('Akun_model')->getAkunByEmailOrUsername($masukan);
          //Verifikasi Email & Password
          if($masukan == $result['email']){
              if($pass == $result['password']){
                  $_SESSION['nama'] = $result['nama'];
                  $_SESSION['level'] = $result['level'];
                  echo 'login sukses';
                  // header('Location: ' . BASEURL . '/mahasiswa');
              }else{
                Flasher::setFlash('password', 'yang anda masukan salah', 'danger');
                header('Location: ' . BASEURL . '/masuk');
                exit;

              }
          }else if($masukan == $result['username']){
              if($pass == $result['password']){
                  $_SESSION['nama'] = $result['nama'];
                  $_SESSION['level'] = $result['level'];
                  echo 'login sukses';
              }else{
                Flasher::setFlash('password', 'yang anda masukan salah', 'danger');
                header('Location: ' . BASEURL . '/masuk');
                exit;
              }
          }else{
            Flasher::setFlash('username/email', 'tidak ditemukan', 'danger');
            header('Location: ' . BASEURL . '/masuk');
            exit;
            }
          }
      }
    }
}
