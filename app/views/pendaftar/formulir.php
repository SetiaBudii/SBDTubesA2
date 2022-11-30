<?php
// Return current date from the remote server
$datenow = date("Y-m-d"); 
?>

<!-- START ALERT -->
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Perhatikan!</strong> Masukan Formulir Sesuai Dengan Data Diri !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
</div>

<!-- END ALERT -->

<!-- Page Heading -->
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-0">
    <h1 class="h3 mb-0 text-gray-800">Formulir Siswa</h1><br>                   
    </div>
    <div class="row mb-4"><div class="col-sm-12"><b><h7>Masukan Formulir Sesuai Dengan Data Diri !</h7></b></div>
</div>
<!-- Content Row -->

<!-- START FORMULIR -->
<form action="<?= BASEURL; ?>/pendaftar/insertFormulir" method="post">
    <div class="form-group">
    <div class="row mb-3">
        <div class="col">
            <label for="exampleInputEmail1">Nama Lengkap</label>
            <input type="date" hidden value="<?= $datenow ?>" id="formtanggal" name="formtanggal">
            <input type="text" class="form-control" placeholder="Nama Lengkap" disabled>
        </div>
    <div class="col">
    <label for="exampleInputEmail1">Jurusan</label>
        <select class="form-control form-control-md" id="formjurusan" name="formjurusan">
            <option value="TKJ">Teknik Komputer dan Jaringan</option>
            <option value="TMM">Teknik Elektronika Industri</option>
            <option value="TOI">Teknik Otomasi Industri</option>
            <option value="RPL">Rekayasa Perangkat Lunak</option>
            <option value="TMN">Teknik Mesin</option>
            <option value="TMM">Produksi Film Dan Program Televisi</option>
        </select>
        </div>
        <div class="col">
            <label for="exampleInputEmail1">Jalur Seleksi</label>
            <select class="form-control form-control-md" id="formjalur" name="formjalur">
                <option value="1">Zonasi</option>
                <option value="2">Afirmasi</option>
                <option value="3">Prestasi</option>
            </select>
        </div>
    </div>
    <div class ="row mb-3">
    <div class="col-6"></div>
    <div class="col-6 text-right">
        <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>

    

<!-- END FORMULIR -->



