    <!-- Begin Alert -->
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Perhatikan!</strong> Inputkan File Sesuai Dengan Tempatnya !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
    <!-- End Alert -->

     <!-- Page Heading -->
     <div class="container-fluid">
     <div class="col d-sm-flex align-items-center justify-content-between mb-0">
            <h1 class="h3 mb-0 text-gray-800">Berkas Siswa</h1><br>                   
        </div>
        <div class="col row mb-4"><div class="col-sm-12"><b><h7>Masukan Berkas Sesuai Dengan Berkas Asli !</h7></b></div>
    </div>
    <!-- Content Row -->

    <!-- Begin Input File -->
    <form class="mt-5 mb-4" action="<?= BASEURL; ?>/admin/tambahBerita">
       <div class="row">
                <div class="form-group mt-4">
                    <div class="col">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" lang="in">
                                <label class="custom-file-label" for="customFileLang">Kartu Keluarga (KK) </label>
                            </div>
                    </div><br>
                    <div class="col">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" lang="in">
                                <label class="custom-file-label" for="customFileLang">Ijazah STLA/Sederajat </label>
                            </div>
                    </div><br>
                    <div class="col">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" lang="in">
                                <label class="custom-file-label" for="customFileLang">Kartu Indonesia Pintar (KIP) </label>
                            </div>
                    </div><br>
                    <div class="col">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" lang="in">
                                <label class="custom-file-label" for="customFileLang">Piagam Prestasi/Organisasi </label>
                            </div>
                    </div><br>
                </div>
        </div>
                        <div class="text-center mt-2 row">
                        <div class="col-4"> <button type="submit" class="btn btn-primary text-center">Submit</button></div></div>        
                        </div>
                        </form>
    <!-- End Input File -->
</div>
    
    