<?php

class Pendaftar extends Controller{
    public function index(){
        $data['judul'] = 'Home';
        $this->view('templates/header',$data);
        $this->view('pendaftar/dashboard',$data);
        $this->view('templates/footer');
    }
    public function biodata(){
        $this->view('templates/headerPendaftar');
        $this->view('pendaftar/biodata');
        $this->view('templates/footer');
    }

    public function berkas(){
        $this->view('templates/headerPendaftar');
        $this->view('pendaftar/berkas');
        $this->view('templates/footer');
    }

    public function formulir(){
        $this->view('templates/headerPendaftar');
        $this->view('pendaftar/formulir');
        $this->view('templates/footer');
    }

    public function berita(){
        $this->view('templates/headerPendaftar');
        $this->view('pendaftar/berita');
        $this->view('templates/footer');
    }

    public function logOut(){

        header('Location:'. BASEURL .'/home/index');
        exit;
      }
}