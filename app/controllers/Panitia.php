<?php

class Panitia extends Controller{
    public function index(){
        $this->view('templates/headerPanitia');
        $this->view('panitia/index');
        $this->view('templates/footer');
    }

    public function seleksi(){
        $data['judul'] = 'Seleksi';
        $data['seleksiZonasi'] = $this->model('Panitia_model')->seleksiZonasi();
        $data['seleksiAfirmasi'] = $this->model('Panitia_model')->seleksiAfirmasi();
        $data['seleksiPrestasi'] = $this->model('Panitia_model')->seleksiPrestasi();
        $this->view('templates/headerPanitia',$data);
        $this->view('panitia/seleksiPeserta',$data);
        $this->view('templates/footer');
    }

    public function dashboard(){
        $data['judul'] = 'Dashboard';
        $data['Afirmasi'] = $this->model('Panitia_model')->getTotalJalur('2');
        $data['Zonasi'] = $this->model('Panitia_model')->getTotalJalur('1');
        $data['Prestasi'] = $this->model('Panitia_model')->getTotalJalur('3');
        $data['semua'] = $this->model('Admin_model')->getTotalPendaftar();
        $this->view('templates/headerPanitia',$data);
        $this->view('panitia/dashboardPanitia',$data);
        $this->view('templates/footer');
    }

    public function ManajemenData(){
        $data['judul'] = 'Manajaemen Data';
        $data['Zonasi'] = $this->model('Panitia_model')->manajemenZonasi();
        $this->view('templates/headerPanitia');
        $this->view('panitia/ManajemenData',$data);
        $this->view('templates/footer');
    }

    public function listberita(){
        $data['judul'] = 'Berita';
        $data['berita'] = $this->model('Admin_model')->getListBerita();
        $this->view('templates/headerPanitia',$data);
        $this->view('panitia/berita',$data);
        $this->view('templates/footer',$data);
    }

    public function updateTahap(){
        if ($this->model('Panitia_model')->updateSeleksi($_POST) > 0 ){
            Flasher::setFlash('berhasil','diverifikasi','success');
            header('Location:'. BASEURL .'/panitia/ManajemenData');
            exit;
        }else{
            header('Location:'. BASEURL .'/panitia/dashboard');
            exit;
        }
    }
}
