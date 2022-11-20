<!-- Begin Page Content -->
            

<?php
// Return current date from the remote server
$date = date("j - n - Y"); 
?>
<div class="container-fluid">
            <div class="row">
                <div class="d-sm-flex align-items-center justify-content-between mb-4 ml-1 text-center">
                    <h1 class="h3 mb-0 text-gray-800">Upload Berita</h1>
                </div>
                <!-- Content Row -->
                <div class="row container text-dark border ml-2 mr-1 bg-white">
                <div class="col-2"></div>
                    <div class="col-8">
                    <form class="mt-5 mb-4">
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="uname">Username</label>
                                <input type="text" class="form-control" id="uname" value="<?=$_SESSION['username']?>" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tgl">Tanggal Terbit</label>
                                <input type="text" class="form-control" id="tgl" value="<?= $date ?>" disabled>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="judul">Judul Berita</label>
                                <input type="text" class="form-control" id="judul">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi Berita</label>
                            <textarea class="form-control" id="isi" rows="3"></textarea>
                        </div>
                        <div class="text-center">
                        <button type="submit" class="btn btn-primary text-center">Post</button></div>
                        </form>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
                <!-- Content Row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
