<?php

class Pendaftar extends Controller{
    public function index(){
        $data['judul'] = 'Home';
        $this->view('templates/headerPendaftar',$data);
        $this->view('pendaftar/dashboard',$data);
        $this->view('templates/footer');
    }
    public function biodata(){
        $data['button'] = $this->model('Pendaftar_model')->buttonFormulir($_SESSION['id']);
        $data['judul'] = 'Biodata';
        $this->view('templates/headerPendaftar',$data);
        $this->view('pendaftar/biodata',$data);
        $this->view('templates/footer');
    }

    public function berkas(){
        $data['judul'] = 'Berkas';
        $this->view('templates/headerPendaftar',$data);
        $this->view('pendaftar/berkas',$data);
        $this->view('templates/footer');
    }

    public function formulir(){
        $data['judul'] = 'Formulir';
        $this->view('templates/headerPendaftar',$data);
        $this->view('pendaftar/formulir',$data);
        $this->view('templates/footer');
    }
    
    public function berita(){
        $data['judul'] = 'Berita';
        $data['berita'] = $this->model('Admin_model')->getListBerita();
        $this->view('templates/headerPendaftar',$data);
        $this->view('pendaftar/berita',$data);
        $this->view('templates/footer',$data);
    }

    public function logOut(){
        unset($_SESSION['username']);
        unset($_SESSION['role']);
        unset($_SESSION['name']);
        unset($_SESSION['id']);
        header('Location:'. BASEURL .'/home/index');
        exit;
      }

    public function updateBiodata(){
        if ($this->model('Pendaftar_model')->updateBiodataPendaftar($_POST) > 0 ){
            header('Location:'. BASEURL .'/pendaftar/biodata');
            exit;
        }
    }

    public function insertFormulir(){
        if ($this->model('Pendaftar_model')->tambahFormulir($_POST) > 0 ){
            Flasher::setFlash('berhasil','dibuat','success');
            header('Location:'. BASEURL .'/pendaftar/formulir');
            exit;
        }else{
            Flasher::setFlash('gagal','dibuat','danger');
            header('Location:'. BASEURL .'/pendaftar/formulir');
            exit;
        }
    }

    public function tambahBerkas(){
        // echo var_dump($_FILES['files']);

        if ($this->model('Pendaftar_model')->uploadBerkas($_FILES) > 0 ){
            header('Location:'. BASEURL .'/pendaftar/berkas');
            unset($_FILES);
            exit;
        }else{
            header('Location:'. BASEURL .'/pendaftar/berkas');
            unset($_FILES);
            exit;
        }
    }
}