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
          echo $this->model('Home_model')->tambahAkun($_POST);
          exit;
        }else{
            Flasher::setFlash('gagal','dibuat, mohon periksa ulang apa yang anda inputkan!','danger');
            header('Location:'. BASEURL .'/home/register');
            exit;
        }
      }

      public function register(){
        $data['judul'] = 'Registrasi';
        $data['Username'] = 'budi9';
        $data['Email'] = '1';
        $data['number'] = $this->model('Home_model')->checkAccount($data);
        $this->view('templates/header',$data);
        $this->view('home/register',$data);
        $this->view('templates/footer');
    }

    public function loginAccount(){
      $role = $this->model('Home_model')->getRole($_POST);
      $name = $this->model('Home_model')->getnama($_POST);

      // if ($this->model('Home_model')->loginUser($_POST) > 0 ){
      if ($this->model('Home_model')->loginAccount($_POST) > 0 ){
        $_SESSION["username"] = $_POST['Username'];
        $_SESSION["role"] = $role['ROLE'];
        $_SESSION["name"] = $name['NAME'];
        $_SESSION["id"] = $this->model('Home_model')->getIdAccount($_SESSION['username']);

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
      unset($_SESSION['id']);
      header('Location:'. BASEURL .'/home/index');
      exit;
    }


    public function pengumuman(){
      $data['judul'] = 'Pengumuman';
      $data['list'] = $this->model('Home_model')->lulus();
      $this->view('templates/pengumuman',$data);
      $this->view('home/pengumuman',$data);
      $this->view('templates/footer');
  }

}