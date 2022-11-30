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
