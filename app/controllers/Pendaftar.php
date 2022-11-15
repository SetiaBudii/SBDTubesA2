<?php

class Pendaftar extends Controller{
    public function index(){
        $data['judul'] = 'Home';
        $this->view('templates/header',$data);
        $this->view('pendaftar/dashboard',$data);
        $this->view('templates/footer');
    }
}