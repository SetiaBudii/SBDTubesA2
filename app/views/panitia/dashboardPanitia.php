<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Selamat Datang di Dashboard Panitia PPDB Tahun Ajaran 2021/2022</h1>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-sm-2 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                            Zonasi</div>
                        <div class="h6 mb-0 font-weight-bold text-gray-800"><?= $data['Zonasi']?> Pendaftar</div>
                        <hr class="sidebar-divider my-0"></hr><!--buat bikin biar ada kuota--></div>
                    <div class="col-auto">
                        <i class="fas fa-map-marked-alt fa-2x text-gray-900"></i> <!--buat ganti gambar-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-sm-2 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-success text-uppercase mb-1">
                            Prestasi</div>
                        <div class="h6 mb-0 font-weight-bold text-gray-800"><?= $data['Afirmasi'] ?> Pendaftar</div>
                        <hr class="sidebar-divider my-0">
                        
                    </div>
                    <div class="col-auto">
                        <i class="  fas fa-user-graduate fa-2x text-gray-900"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-2 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-success text-uppercase mb-1">
                            Afirmasi</div>
                        <div class="h6 mb-0 font-weight-bold text-gray-800"><?= $data['Prestasi'] ?> Pendaftar</div>
                        <hr class="sidebar-divider my-0">
                        
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-id-card fa-2x text-gray-900"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-sm-2 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-success text-uppercase mb-1">
                            Total</div>
                        <div class="h6 mb-0 font-weight-bold text-gray-800"><?= $data['semua']['TOTAL'] ?> Pendaftar</div>
                        <hr class="sidebar-divider my-0">
                        
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-900"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-2 mb-4"></div>
    <div class="col-xl-3 col-sm-2 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-success text-uppercase mb-1">
                            Pendaftar sudah diverifikasi</div>
                        <div class="h6 mb-0 font-weight-bold text-gray-800">Jumlah : <?= $data['Verif']['TOTAL'] ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-user-check fa-2x text-gray-900"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-2 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-success text-uppercase mb-1">
                            Berkas kurang/tidak sesuai</div>
                        <div class="h6 mb-0 font-weight-bold text-gray-800">Jumlah : <?= $data['NonVerif']['TOTAL']?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-file-excel fa-2x text-gray-900"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- Content Row -->
<br>
<hr>
<br>
<div class="row">
    <!-- Pie Chart -->
    <div class="col-xl-12 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">STATISTIK JALUR PENDAFTARAN</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myJalur"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Zonasi
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Afirmasi
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Prestasi
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Pie Chart -->
    <div class="col-xl-12 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">STATISTIK STATUS PENDAFTARAN</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myFile"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Pendaftar Sudah Diverifikasi
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-danger"></i> Berkas kurang/tidaksesuai
                    </span>
                </div>
            </div>
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

