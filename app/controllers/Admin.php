<?php

class Admin extends Controller{
    public function index(){
        $data['judul'] = 'Home';
        $data['table'] = $this->model('Admin_model')->getAllUser();
        $this->view('templates/header',$data);
        $this->view('admin/index',$data);
        $this->view('templates/footer');
    }

    public function infoAkun(){
        $data['judul'] = 'Admin';
        $data['table'] = $this->model('Admin_model')->getAllUser();
        $data['admin'] = $this->model('Admin_model')->getAdmin();
        $data['panitia'] = $this->model('Admin_model')->getPanitia();
        $data['pendaftar'] = $this->model('Admin_model')->getPendaftar();
        $this->view('templates/headerAdmin',$data);
        $this->view('admin/infoAkun',$data);
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

    public function tambahUser(){
        if ($this->model('Admin_model')->tambahAkun($_POST) > 0 ){
            Flasher::setFlash('berhasil','dibuat','success');
            header('Location:'. BASEURL .'/admin/infoAkun');
            exit;
        }else{
            Flasher::setFlash('gagal','dibuat','danger');
            header('Location:'. BASEURL .'/admin/infoAkun');
            exit;
        }
    }

    public function updateUser(){
        if ($this->model('Admin_model')->updateInfo($_POST) > 0 ){
            Flasher::setFlash('berhasil','diupdate','success');
            header('Location:'. BASEURL .'/admin/infoAkun');
            exit;
        }
    }

    public function hapusUser(){
        if ($this->model('Admin_model')->hapusAkun($_POST) > 0 ){
            Flasher::setFlash('berhasil','dihapus','success');
            header('Location:'. BASEURL .'/admin/infoAkun');
            exit;
        }else{
            Flasher::setFlash('gagal','dihapus','danger');
            header('Location:'. BASEURL .'/admin/infoAkun');
            exit;
        }
    }
}