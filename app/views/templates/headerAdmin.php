<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="<?= BASEURL; ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= BASEURL; ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/css/sbadmin2-sidebar-toggle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

<!-- Cek apakah User sudah login atau belum -->
<?php 
    if (!isset($_SESSION['username']) && !isset($_SESSION['role'])) {
        header('Location:'. BASEURL .'/home/index');
        exit;
    }else if(isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role'] != "ADMIN"){
        header('Location:'. BASEURL .'/home/index');
        exit;
    }
?>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon">
                <i class="fa fa-home"></i>
            </div>
            <div class="sidebar-brand-text mx-3">ADMIN</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>/admin/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>/admin/infoAkun">
                <i class="fa fa-database"></i>
                <span>Informasi Akun</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>/admin/berita">
                <i class="fa fa-upload"></i>
                <span>Upload Berita</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>/admin/listberita">
                <i class="far fa-newspaper"></i>
                <span>List Berita</span></a>
        </li>
    </ul>
    <!-- End of Sidebar -->

       <!-- Content Wrapper -->
       <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">
            <div class="text-center">
                <button type="button" class="btn-circle bg-transparent btn-outline-light" id="sidebarToggle"><i class="fas fa-grip-horizontal"></i></button>
            </div>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
        
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-100 small"><?php echo $_SESSION['name']?></span>
                    <img class="img-profile rounded-circle"
                        src="<?= BASEURL; ?>/img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?= BASEURL;?>/home" data-toggle="modal" data-target="#logoutModal1">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>
    </nav>
    <!-- End of Topbar -->

    <!-- Modal Buat LogOut Akun -->
    <div id="logoutModal1" class="modal fade">
	    <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= BASEURL; ?>/home/logOut">
                    <div class="modal-header">						
                        <h4 class="modal-title">Logout Akun</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">						
                        <p>Apakah anda yakin akan Log Out dari akun ini??</p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-danger" value="Yakin">
                    </div>
                </form>
            </div>
	    </div>
    </div>

