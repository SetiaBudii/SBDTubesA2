<!-- Begin Page Content -->
            

<?php
// Return current date from the remote server
$date = date("j - n - Y"); 
?>

<div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 text-center">
                            <h6 class="m-0 font-weight-bold text-primary">List Berita</h6>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                        <table class="table table-striped table-bordered small" id="table1" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID BERITA</th>
                                                    <th scope="col">PEMBUAT</th>
                                                    <th scope="col">JUDUL BERITA</th>
                                                    <th scope="col">TANGGAL TERBIT</th>
                                                    <th scope="col">FILE DOKUMEN</th>
                                                    <th scope="col">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach( $data['berita'] as $list) :?>
                                                <tr>
                                                <td><?=$list['ID'];?></td>
                                                <td><?=$list['USERNAME'];?></td>
                                                <td><?=$list['JUDUL'];?></td>
                                                <td><?=$list['TGLUPLOAD'];?></td>
                                                <td><a href=" <?= BASEURL; ?>/File/Berita/<?=$list['ID'] . ".pdf"?>">Download File</a></td>
                                                <th><a href="#deleteBerita" data-toggle="modal" class="btn btn-danger ml-2 RemoveBerita" data-id="<?=$list['ID'];?>"><i class="fas fa-trash"> Delete</i></th>
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

<!-- Delete Modal HTML -->
<div id="deleteBerita" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= BASEURL; ?>/admin/hapusBerita" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Hapus Berita</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
                <div class="form-group">
						<input type="hidden" class="form-control" id="removeNews" name="removeNews">
					</div>							
					<p>Apakah anda yakin akan menghapus berita tersebut?</p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
					<input type="submit" class="btn btn-danger" value="Hapus">
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
