<!-- Begin Page Content -->
<div class="row">
        <div class="col">
            <?php Flasher::flash();?>
        </div>
    </div>
<!-- Page Heading -->
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">  Manajemen Data Calon Peserta Didik Baru Tahun Ajaran 2022/2023</h1>
</div>
<div class="card shadow mb-4">
                        <div class="card-header py-3 text-center">
                            <h6 class="m-0 font-weight-bold text-primary">MANAJEMEN DATA JALUR ZONASI</h6>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                        <table class="table table-striped table-bordered small" id="table1" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center align-middle">NAMA LENGKAP</th>
                                                    <th scope="col" class="text-center align-middle" style="width: 15%">NISN</th>
                                                    <th scope="col" class="text-left align-middle" style="width: 5%">NILAI UN</th>
                                                    <th scope="col" class="text-left align-middle" style="width: 5%">JENIS KELAMIN</th>
                                                    <th scope="col" class="text-center align-middle" style="width: 10%">JARAK</th>
                                                    <th scope="col" class="text-center align-middle" style="width: 15%">DOKUMEN</th>
                                                    <th scope="col" class="text-center align-middle">VERIFIKASI</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach( $data['Zonasi'] as $formulir) :?>
                                                <tr>
                                                <td class="align-middle"><?=$formulir['USERNAME'];?></td>
                                                <td class="align-middle"><?=$formulir['NISN'];?></td>
                                                <td class="align-middle"><?=$formulir['NILAIUN'];?></td>
                                                <td> L </td>
                                                <td class="align-middle"><?=$formulir['JARAKALAMAT'];?></td>
                                                <td><a href="<?= BASEURL; ?>/File/Berkas/<?="IJAZAH_". $formulir['NISN'] . ".pdf"?>">FILE IJAZAH</a><br>
                                                    <a href="<?= BASEURL; ?>/File/Berkas/<?="KK_". $formulir['NISN'] . ".pdf"?>">FILE KK</a></td>
                                                <th class="text-center align-middle"> <a href="#verifikasiZonasi" data-toggle="modal" class="btn btn-success ml-2 verif" data-id="<?=$formulir['NOPENDAFTARAN'];?>">Verifikasi</i></th>
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
                            <h6 class="m-0 font-weight-bold text-primary">MANAJEMEN DATA JALUR AFIRMASI</h6>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                        <table class="table table-striped table-bordered small" id="table2" cellspacing="0">
                                            <thead>
                                            <tr>
                                                    <th scope="col" class="text-center align-middle">NAMA LENGKAP</th>
                                                    <th scope="col" class="text-center align-middle" style="width: 15%">NISN</th>
                                                    <th scope="col" class="text-left align-middle" style="width: 5%">NILAI UN</th>
                                                    <th scope="col" class="text-left align-middle" style="width: 5%">JENIS KELAMIN</th>
                                                    <th scope="col" class="text-center align-middle" style="width: 10%">JARAK</th>
                                                    <th scope="col" class="text-center align-middle" style="width: 15%">DOKUMEN</th>
                                                    <th scope="col" class="text-center align-middle">VERIFIKASI</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach( $data['Afirmasi'] as $formulir) :?>
                                                <tr>
                                                <td class="align-middle"><?=$formulir['USERNAME'];?></td>
                                                <td class="align-middle"><?=$formulir['NISN'];?></td>
                                                <td class="align-middle"><?=$formulir['NILAIUN'];?></td>
                                                <td>L</td>
                                                <td class="align-middle"><?=$formulir['JARAKALAMAT'];?></td>
                                                <td><a href="<?= BASEURL; ?>/File/Berkas/<?= "IJAZAH_".$formulir['NISN'].".pdf"?>">FILE IJAZAH</a><br>
                                                    <a href="<?= BASEURL; ?>/File/Berkas/<?="KK_".$formulir['NISN'].".pdf"?>">FILE KK</a><br>
                                                    <a href="<?= BASEURL; ?>/File/Berkas/<?="KIP_".$formulir['NISN'].".pdf"?>">FILE KIP</a></td>
                                                <th class="text-center align-middle"> <a href="#verifikasiAfirmasi" data-toggle="modal" class="btn btn-success ml-2 verif" data-id="<?=$formulir['NOPENDAFTARAN'];?>">Verifikasi</i></th>
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
                            <h6 class="m-0 font-weight-bold text-primary">MANAJEMEN DATA JALUR PRESTASI</h6>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                        <table class="table table-striped table-bordered small" id="table3" cellspacing="0">
                                            <thead>
                                            <tr>
                                                    <th scope="col" class="text-center align-middle">NAMA LENGKAP</th>
                                                    <th scope="col" class="text-center align-middle" style="width: 15%">NISN</th>
                                                    <th scope="col" class="text-left align-middle" style="width: 5%">NILAI UN</th>
                                                    <th scope="col" class="text-left align-middle" style="width: 5%">JENIS KELAMIN</th>
                                                    <th scope="col" class="text-center align-middle" style="width: 10%">JARAK</th>
                                                    <th scope="col" class="text-center align-middle" style="width: 15%">DOKUMEN</th>
                                                    <th scope="col" class="text-center align-middle">VERIFIKASI</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach( $data['Prestasi'] as $formulir) :?>
                                                <tr>
                                                <td class="align-middle"><?=$formulir['USERNAME'];?></td>
                                                <td class="align-middle"><?=$formulir['NISN'];?></td>
                                                <td class="align-middle"><?=$formulir['NILAIUN'];?></td>
                                                <td>L</td>
                                                <td class="align-middle"><?=$formulir['JARAKALAMAT'];?></td>
                                                <td><a href="<?= BASEURL; ?>/File/Berkas/<?= "IJAZAH_".$formulir['NISN'].".pdf"?>">FILE IJAZAH</a><br>
                                                    <a href="<?= BASEURL; ?>/File/Berkas/<?="KK_".$formulir['NISN'].".pdf"?>">FILE KK</a><br>
                                                    <a href="<?= BASEURL; ?>/File/Berkas/<?="PRESTASI_".$formulir['NISN'].".pdf"?>">FILE PRESTASI</a></td>
                                                <th class="text-center align-middle"> <a href="#verifikasiAfirmasi" data-toggle="modal" class="btn btn-success ml-2 verif" data-id="<?=$formulir['NOPENDAFTARAN'];?>">Verifikasi</i></th>
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

<div id="verifikasiZonasi" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= BASEURL; ?>/panitia/updateTahap" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Verifikasi Data Pendaftar</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
                    <div class="form-group">
						<input type="hidden" class="form-control" id="noPendaftaran" name="noPendaftaran">
					</div>		
                    <h5>Persyaratan : </h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="KK" name="KK">
                        <label class="form-check-label" for="flexCheckDefault"> Kartu Keluarga</label><br>
                        <input class="form-check-input" type="checkbox" value="1" id="IJ" name="IJ">
                        <label class="form-check-label" for="flexCheckDefault"> Ijazah</label><br>
                        <input class="form-check-input" type="checkbox" value="1" id="JRK" name="JRK">
                        <label class="form-check-label" for="flexCheckDefault"> Jarak</label><br>
                        <input class="form-check-input" type="checkbox" value="1" id="UN" name="UN">
                        <label class="form-check-label" for="flexCheckDefault"> Nilai</label><br>
                    </div>	
                    <br>
                    <h7><i> Catatan : Ceklis jika pendaftar memenuhi persyaratan</i></h7>			
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
					<input type="submit" class="btn btn-info" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>


<div id="verifikasiAfirmasi" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= BASEURL; ?>/panitia/updateTahap" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Verifikasi Data Pendaftar</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
                    <div class="form-group">
						<input type="hidden" class="form-control" id="noPendaftaran" name="noPendaftaran">
					</div>		
                    <h5>Persyaratan : </h5>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="KK" name="KK">
                        <label class="form-check-label" for="flexCheckDefault"> Kartu Keluarga</label><br>
                        <input class="form-check-input" type="checkbox" value="1" id="IJ" name="IJ">
                        <label class="form-check-label" for="flexCheckDefault"> Ijazah</label><br>
                        <input class="form-check-input" type="checkbox" value="1" id="UN" name="UN">
                        <label class="form-check-label" for="flexCheckDefault"> Nilai</label><br>
                        <input class="form-check-input" type="checkbox" value="1" id="KIP" name="KIP">
                        <label class="form-check-label" for="flexCheckDefault"> Kartu Indonesia Pintar</label><br>
                    </div>	
                    <br>
                    <h7><i> Catatan : Ceklis jika pendaftar memenuhi persyaratan</i></h7>			
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
					<input type="submit" class="btn btn-info" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>

<div id="verifikasiPrestasi" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= BASEURL; ?>/panitia/updateTahap" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Verifikasi Data Pendaftar</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
                    <div class="form-group">
						<input type="hidden" class="form-control" id="noPendaftaran" name="noPendaftaran">
					</div>		
                    <h5>Persyaratan : </h5>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="KK" name="KK">
                        <label class="form-check-label" for="flexCheckDefault"> Kartu Keluarga</label><br>
                        <input class="form-check-input" type="checkbox" value="1" id="IJ" name="IJ">
                        <label class="form-check-label" for="flexCheckDefault"> Ijazah</label><br>
                        <input class="form-check-input" type="checkbox" value="1" id="UN" name="UN">
                        <label class="form-check-label" for="flexCheckDefault"> Nilai</label><br>
                        <input class="form-check-input" type="checkbox" value="1" id="PR" name="PR">
                        <label class="form-check-label" for="flexCheckDefault"> Prestasi</label><br>
                    </div>	
                    <br>
                    <h7><i> Catatan : Ceklis jika pendaftar memenuhi persyaratan</i></h7>			
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
					<input type="submit" class="btn btn-info" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>