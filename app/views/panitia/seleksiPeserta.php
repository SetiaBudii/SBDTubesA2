<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <?php Flasher::flash();?>
        </div>
    </div>

    <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Status Seleksi Calon Peserta Didik Baru Tahun Ajaran 2022/2023</h1>
</div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 text-center">
            <h6 class="m-0 font-weight-bold text-primary">ZONASI</h6>
        </div>
        <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered small" id="allAccount" width="100%" cellspacing="0">
                    <thead>
                            <tr>
                            <th scope="col">NAMA LENGKAP</th>
                            <th scope="col">NO FORMULIR</th>
                            <th scope="col">NISN</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">KETERANGAN</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach( $data['seleksiZonasi'] as $account) :?>
                        <tr>
                        <td class="fsize"><?=$account['USERNAME'];?></td>
                        <td class="fsize"><?=$account['NOPENDAFTARAN'];?></td>
                        <td class="fsize"><?=$account['NISN'];?></td>
                        <td class="fsize"><?=$account['STATUSSELEKSI'];?></td>
                        <td class="fsize">dokumen masih belum lengkap</td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="card shadow mb-4">
        <div class="card-header py-3 text-center">
            <h6 class="m-0 font-weight-bold text-primary">AFIRMASI</h6>
        </div>
        <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered small" id="tableAdmin" width="100%" cellspacing="0">
                    <thead>
                            <tr>
                            <th scope="col">NAMA LENGKAP</th>
                            <th scope="col">NO FORMULIR</th>
                            <th scope="col">NISN</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">KETERANGAN</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach( $data['seleksiAfirmasi'] as $account) :?>
                        <tr>
                        <td class="fsize"><?=$account['USERNAME'];?></td>
                        <td class="fsize"><?=$account['NOPENDAFTARAN'];?></td>
                        <td class="fsize"><?=$account['NISN'];?></td>
                        <td class="fsize"><?=$account['STATUSSELEKSI'];?></td>
                        <td class="fsize">dokumen masih belum lengkap</td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="card shadow mb-4">
        <div class="card-header py-3 text-center">
            <h6 class="m-0 font-weight-bold text-primary">PRESTASI</h6>
        </div>
        <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered small" id="tablePanitia" width="100%" cellspacing="0">
                    <thead>
                            <tr>
                            <th scope="col">NAMA LENGKAP</th>
                            <th scope="col">NO FORMULIR</th>
                            <th scope="col">NISN</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">KETERANGAN</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach( $data['seleksiPrestasi'] as $account) :?>
                        <tr>
                        <td class="fsize"><?=$account['USERNAME'];?></td>
                        <td class="fsize"><?=$account['NOPENDAFTARAN'];?></td>
                        <td class="fsize"><?=$account['NISN'];?></td>
                        <td class="fsize"><?=$account['STATUSSELEKSI'];?></td>
                        <td class="fsize">dokumen masih belum lengkap</td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <br>
    
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

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= BASEURL; ?>/admin/updateUser" method="post">
                <div class="modal-header">                      
                    <h4 class="modal-title">Update Informasi Akun</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">    
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="userid" name="userid">
                    </div>              
                    <div class="form-group">
                        <input type="text" class="form-control" required placeholder="Nama" id="updateNo" name="updateNo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" required placeholder="No Telepon" id="updateNama" name="updateNama">
                    </div>                  
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                    <input type="submit" class="btn btn-info" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= BASEURL; ?>/admin/hapusUser" method="post">
                <div class="modal-header">                      
                    <h4 class="modal-title">Hapus Akun</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">    
                <div class="form-group">
                        <input type="hidden" class="form-control" id="hapusid" name="hapusid">
                    </div>                          
                    <p>Apakah anda yakin akan menghapus akun tersebut??</p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                    <input type="submit" class="btn btn-danger" value="Hapus">
                </div>
            </form>
        </div>
    </div>
</div>
