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
        Session_destroy();
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
              if(md5($pass) == $result['password']){
                  $_SESSION['id'] = $result['id'];
                  $_SESSION['level'] = $result['role'];
                  echo 'login sukses';
                  // header('Location: ' . BASEURL . '/mahasiswa');
              }else{
                Flasher::setFlash('password', 'yang anda masukan salah', 'danger');
                header('Location: ' . BASEURL . '/masuk');
                exit;

              }
          }else if($masukan == $result['username']){
              if(md5($pass) == $result['password']){
                  $_SESSION['id'] = $result['id'];
                  if($result['role'] == 1){
                    $_SESSION['role'] = 1;
                    header('Location: ' . BASEURL . '/admin');
                    exit;
                  }else{
                    if($result['status'] == 'aktif'){
                      $_SESSION['role'] = 2;
                      header('Location: ' . BASEURL . '/profil');
                      exit;
                    }else{
                      Flasher::setFlash('akun anda', 'terblokir atau tidak aktif, hubungi admin!', 'danger');
                      header('Location: ' . BASEURL . '/masuk');
                      exit;
                    }
                  }
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
