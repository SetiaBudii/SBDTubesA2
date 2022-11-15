<?php

class Panitia extends Controller{
    public function index(){
        $data['judul'] = 'Panitia';
        $this->view('templates/header',$data);
        $this->view('panitia/dashboard',$data);
        $this->view('templates/footer');
    }
}