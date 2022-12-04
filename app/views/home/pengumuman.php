<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center mt-5">
            <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card-body bg-white">
            <div class="card-header py-3 text-center">
                            <h6 class="m-0 font-weight-bold text-primary">PESERTA LULUS SELEKSI</h6>
                        </div>
                                <div class="table-responsive">
                                        <table class="table table-striped table-bordered small text-dark" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">NAMA</th>
                                                    <th scope="col">NISN</th>
                                                    <th scope="col">TANGGAL LAHIR</th>
                                                    <th scope="col">JURUSAN</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach( $data['list'] as $list) :?>
                                                <tr>
                                                <td><?=$list['NAME'];?></td>
                                                <td><?=$list['NISN'];?></td>
                                                <td><?=$list['TANGGALLAHIR'];?></td>
                                                <td><?=$list['JURUSAN'];?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
    </div>