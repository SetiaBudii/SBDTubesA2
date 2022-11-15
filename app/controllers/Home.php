<?php

class Home extends Controller{
    public function index(){
        $data['judul'] = 'Home';
        $dat['Username'] = 'Zaky';
        $dat['Email'] = '1';
        $dat['Password'] = "1";
        $data['uuu'] = $this->model('Home_model')->checkUsername($dat);
        $this->view('templates/header',$data);
        $this->view('home/login',$data);
        $this->view('templates/footer');
    }

    public function registerUser(){
        if ($this->model('Home_model')->tambahAkun($_POST) > 0 ){
          Flasher::setFlash('berhasil','dibuat','success');
          header('Location:'. BASEURL .'/home/login');
          exit;
        }else{
            Flasher::setFlash('gagal','dibuat, mohon periksa ulang apa yang anda inputkan!','danger');
            header('Location:'. BASEURL .'/home/register');
            exit;
        }
      }

      public function register(){
        $data['judul'] = 'Registrasi';
        $data['akun'] = $this->model('Home_model')->getUser();
        $this->view('templates/header',$data);
        $this->view('home/register',$data);
        $this->view('templates/footer');
    }

    public function loginAccount(){
      $data['akun'] = $this->model('Home_model')->getRole($_POST);
      if ($this->model('Home_model')->loginUser($_POST) > 0 ){
            if($data['akun']['ROLE'] == 'ADMIN'){
              Flasher::setFlash('berhasil','login','success');
              header('Location:'. BASEURL .'/admin/dashboard');
              exit;
            }else if($data['akun']['ROLE'] == 'PANITIA'){
              Flasher::setFlash('berhasil','login','success');
              header('Location:'. BASEURL .'/panitia/dashboard');
              exit;
            }else{
              Flasher::setFlash('berhasil','login','success');
              header('Location:'. BASEURL .'/pendaftar/dashboard');
              exit;
            }
      }else{
            Flasher::setFlash('gagal','login, mohon periksa ulang apa yang anda inputkan!','danger');
            header('Location:'. BASEURL .'/home/index');
            exit;
      }
    }
}