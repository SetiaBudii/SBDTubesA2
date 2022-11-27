<?php

class Panitia extends Controller{
    public function index(){
        $this->view('templates/headerPanitia');
        $this->view('panitia/index');
        $this->view('templates/footer');
    }

    public function seleksi(){
        $data['seleksiZonasi'] = $this->model('Panitia_model')->seleksiZonasi();
        $data['seleksiAfirmasi'] = $this->model('Panitia_model')->seleksiAfirmasi();
        $data['seleksiPrestasi'] = $this->model('Panitia_model')->seleksiPrestasi();
        $this->view('templates/headerPanitia');
        $this->view('panitia/seleksiPeserta',$data);
        $this->view('templates/footer');
    }

    public function dashboard(){
        $data['Afirmasi'] = $this->model('Panitia_model')->getTotalJalur('2');
        $data['Zonasi'] = $this->model('Panitia_model')->getTotalJalur('1');
        $data['Prestasi'] = $this->model('Panitia_model')->getTotalJalur('3');
        $data['semua'] = $this->model('Admin_model')->getTotalPendaftar();
        $this->view('templates/headerPanitia');
        $this->view('panitia/dashboardPanitia',$data);
        $this->view('templates/footer');
    }

    public function ManajemenData(){
        $this->view('templates/headerPanitia');
        $this->view('panitia/ManajemenData');
        $this->view('templates/footer');
    }

    public function Berita(){
        $this->view('templates/headerPanitia');
        $this->view('panitia/Berita');
        $this->view('templates/footer');
    }
}
