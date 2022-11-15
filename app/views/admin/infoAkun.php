<!-- Begin Page Content -->
<div class="container-fluid">
    <a href="#addEmployeeModal" data-toggle="modal" class="btn btn-success btn-icon-split mb-4">
          <span class="icon text-white-50"><i class="fas fa-plus-circle"></i></span>
           <span class="text">Tambah Akun</span>
    </a>
        <div class="row">
        <div class="col">
            <?php Flasher::flash();?>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 text-center">
            <h6 class="m-0 font-weight-bold text-primary">SEMUA USER</h6>
        </div>
        <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered small" id="allAccount" width="100%" cellspacing="0">
                    <thead>
                            <tr>
                            <th scope="col">USERID</th>
                            <th scope="col">USERNAME</th>
                            <th scope="col">NAMA LENGKAP</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">KONTAK</th>
                            <th scope="col">ROLE</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach( $data['table'] as $account) :?>
                        <tr>
                        <td class="fsize"><?=$account['USERID'];?></td>
                        <td class="fsize"><?=$account['USERNAME'];?></td>
                        <td class="fsize"><?=$account['NAME'];?></td>
                        <td class="fsize"><?=$account['EMAIL'];?></td>
                        <td class="fsize"><?=$account['NOTELP'];?></td>
                        <td class="fsize"><?=$account['ROLE'];?></td>
                        <th>
                            <a href="#editEmployeeModal" data-toggle="modal" class="btn btn-warning btn-circle mr-2 editAkun"  data-id="<?=$account['USERID'];?>"><i class="far fa-edit"></i>
                            <a href="#deleteEmployeeModal" data-toggle="modal" class="btn btn-danger btn-circle hapusAkun" data-id="<?=$account['USERID'];?>"><i class="fas fa-trash"></i>
                        </th>
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
            <h6 class="m-0 font-weight-bold text-primary">ADMIN</h6>
        </div>
        <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered small" id="tableAdmin" width="100%" cellspacing="0">
                    <thead>
                            <tr>
                            <th scope="col">USERID</th>
                            <th scope="col">USERNAME</th>
                            <th scope="col">NAMA LENGKAP</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">KONTAK</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach( $data['admin'] as $account) :?>
                        <tr>
                        <td class="fsize"><?=$account['USERID'];?></td>
                        <td class="fsize"><?=$account['USERNAME'];?></td>
                        <td class="fsize"><?=$account['NAME'];?></td>
                        <td class="fsize"><?=$account['EMAIL'];?></td>
                        <td class="fsize"><?=$account['NOTELP'];?></td>
                        <th>
                            <a href="#editEmployeeModal" data-toggle="modal" class="btn btn-warning btn-circle mr-2 editAkun" data-id="<?=$account['USERID'];?>"><i class="far fa-edit"></i>
                            <a href="#deleteEmployeeModal" data-toggle="modal" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                        </th>
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
            <h6 class="m-0 font-weight-bold text-primary">PANITIA</h6>
        </div>
        <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered small" id="tablePanitia" width="100%" cellspacing="0">
                    <thead>
                            <tr>
                            <th scope="col">USERID</th>
                            <th scope="col">USERNAME</th>
                            <th scope="col">NAMA LENGKAP</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">KONTAK</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach( $data['panitia'] as $account) :?>
                        <tr>
                        <td class="fsize"><?=$account['USERID'];?></td>
                        <td class="fsize"><?=$account['USERNAME'];?></td>
                        <td class="fsize"><?=$account['NAME'];?></td>
                        <td class="fsize"><?=$account['EMAIL'];?></td>
                        <td class="fsize"><?=$account['NOTELP'];?></td>
                        <th>
                            <a href="#editEmployeeModal" data-toggle="modal" class="btn btn-warning btn-circle mr-2 editAkun" data-id="<?=$account['USERID'];?>"><i class="far fa-edit"></i>
                            <a href="#deleteEmployeeModal" data-toggle="modal" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                        </th>
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
            <h6 class="m-0 font-weight-bold text-primary">PENDAFTAR</h6>
        </div>
        <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered small" id="tablePendaftar" width="100%" cellspacing="0">
                    <thead>
                            <tr>
                            <th scope="col">USERID</th>
                            <th scope="col">USERNAME</th>
                            <th scope="col">NAMA LENGKAP</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">KONTAK</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach( $data['pendaftar'] as $account) :?>
                        <tr>
                        <td class="fsize"><?=$account['USERID'];?></td>
                        <td class="fsize"><?=$account['USERNAME'];?></td>
                        <td class="fsize"><?=$account['NAME'];?></td>
                        <td class="fsize"><?=$account['EMAIL'];?></td>
                        <td class="fsize"><?=$account['NOTELP'];?></td>
                        <th>
                            <a href="#editEmployeeModal" data-toggle="modal" class="btn btn-warning btn-circle mr-2 editAkun" data-id="<?=$account['USERID'];?>"><i class="far fa-edit"></i>
                            <a href="#deleteEmployeeModal" data-toggle="modal" class="btn btn-danger btn-circle hapusAkun" ><i class="fas fa-trash"></i>
                        </th>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
						<input type="text" class="form-control" required placeholder="Nama" id="updateNo" name="updateNo" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" required placeholder="No Telepon" id="updateNama" name="updateNama" required>
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


<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= BASEURL; ?>/admin/tambahUser" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Tambah Akun</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
                    <div class="form-group">
						<input type="text" class="form-control" id="tambahUsername" name="tambahUsername" placeholder="Username" required>
					</div>				
                    <div class="form-group">
						<input type="text" class="form-control" placeholder="Password" id="tambahPassword" name="tambahPassword" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Email" id="tambahEmail" name="tambahEmail" required>
					</div>
                    <div class="form-group">
                        <select class="form-control" id="tambahRole" name="tambahRole">
                            <option>Pilih Role</option>
                            <option value="ADMIN">Admin</option>
                            <option value="PESERTA">Pendaftar</option>
                            <option value="PANITIA">Panitia</option>
                          </select>
					</div>				
                    <div class="form-group">
						<input type="text" class="form-control" placeholder="Nama Lengkap" id="tambahNama" name="tambahNama" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="No Telepon" id="tambahNo" name="tambahNo" required>
					</div>						
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-danger" data-dismiss="modal" value="Batal">
					<input type="submit" class="btn btn-primary" value="Buat Akun">
				</div>
			</form>
		</div>
	</div>
</div>