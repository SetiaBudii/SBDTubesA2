<?php

class Panitia extends Controller{
    public function index(){
        $data['judul'] = 'Home';
        $data['table'] = $this->model('Admin_model')->getAllUser();
        $this->view('templates/header',$data);
        $this->view('admin/index',$data);
        $this->view('templates/footer');
    }

    public function dashboard(){
        $data['judul'] = 'Admin';
        $data['totalAdmin'] = $this->model('Admin_model')->getTotalAdmin();
        $data['totalAccount'] = $this->model('Admin_model')->getTotalAccount();
        $data['totalPanitia'] = $this->model('Admin_model')->getTotalPanitia();
        $data['totalPendaftar'] = $this->model('Admin_model')->getTotalPendaftar();
        $this->view('templates/headerAdmin',$data);
        $this->view('admin/dashboard',$data);
        $this->view('templates/footer',$data);
    }
}