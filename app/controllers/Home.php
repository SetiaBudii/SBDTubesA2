<?php

class Home extends Controller{
    public function index(){
        $data['judul'] = 'Login';
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
      $role = $this->model('Home_model')->getRole($_POST);
      $name = $this->model('Home_model')->getnama($_POST);

      if ($this->model('Home_model')->loginUser($_POST) > 0 ){
        $_SESSION["username"] = $_POST['Username'];
        $_SESSION["role"] = $role['ROLE'];
        $_SESSION["name"] = $name['NAME'];

            if($role['ROLE'] == 'ADMIN'){
              header('Location:'. BASEURL .'/admin/dashboard');
              exit;
            }else if($role['ROLE'] == 'PANITIA'){
              header('Location:'. BASEURL .'/panitia/dashboard');
              exit;
            }else{
              header('Location:'. BASEURL .'/pendaftar/dashboard');
              exit;
            }
      }else{
            Flasher::setFlash('gagal','login, mohon periksa ulang apa yang anda inputkan!','danger');
            header('Location:'. BASEURL .'/home/index');
            exit;
      }
    }

    public function logOut(){
      unset($_SESSION['username']);
      unset($_SESSION['role']);
      unset($_SESSION['name']);
      header('Location:'. BASEURL .'/home/index');
      exit;
    }
}