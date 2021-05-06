<?php

session_start();

include_once('../config/connect.php');

if ($_SESSION['status'] != "login") {
    header("location:../login.php?pesan=belum_login");
}

$tglnow = date('Y-m-d');
$qc = $connect->query("SELECT COUNT(*) AS hitung FROM pasien");
$qk = $connect->query("SELECT COUNT(*) AS hitung FROM poli");
$qd = $connect->query("SELECT COUNT(*) AS hitung FROM dokter");
$qkb = $connect->query("SELECT COUNT(*) AS hitung FROM kb");
$qkbini = $connect->query("SELECT COUNT(*) AS hitung FROM kb WHERE tgl_kunjungan = '$tglnow'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fab Admin - Dashboard Fixed</title>

    <link rel="stylesheet" href="../style/bootstrap.min.css">

    <link rel="stylesheet" href="../style/bootstrap-extend.css">

    <link rel="stylesheet" href="../style/master_style.css">

    <link rel="stylesheet" href="../style/_all-skins.css">
    <link rel="stylesheet" href="../assets/morris.js/morris.css">

</head>

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="index.html" class="logo">
                <!-- mini logo -->
                <b class="logo-mini">
                    <span class="light-logo">Admin</span>
                </b>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div>
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                </div>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Halo, <?= $_SESSION['username'] ?></a>
                            <ul class="dropdown-menu scale-up">
                                <li class="user-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 text-left">
                                            <a href="ubahpassword.php"><i class="fa fa-lock"></i> Ubah Password</a>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-12 text-left">
                                            <a href="../config/logout.php"><i class="fa fa-power-off"></i> Logout</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                            </ul>
                        </li>
                        <li>&nbsp;&nbsp;</li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar">

                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="active">
                        <a href="#">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                    </li>
                    <li class="header nav-small-cap">DATA MASTER</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-heart"></i>
                            <span>Poli</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="poli/data.php"><i class="fa fa-circle-thin"></i>Tabel data</a></li>
                            <li><a href="poli/tambah.php"><i class="fa fa-circle-thin"></i>Tambah</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-wheelchair"></i>
                            <span>Pasien</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pasien/data.php"><i class="fa fa-circle-thin"></i>Tabel data</a></li>
                            <li><a href="pasien/tambah.php"><i class="fa fa-circle-thin"></i>Tambah</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-briefcase"></i> <span>Karyawan</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="karyawan/data.php"><i class="fa fa-circle-thin"></i>Tabel data</a></li>
                            <li><a href="karyawan/tambah.php"><i class="fa fa-circle-thin"></i>Tambah</a></li>
                        </ul>
                    </li>
                    <li class="header nav-small-cap">DATA TURUNAN</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i> <span>User</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="user/data.php"><i class="fa fa-circle-thin"></i>Tabel data</a></li>
                            <li><a href="user/tambah.php"><i class="fa fa-circle-thin"></i>Tambah</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-book"></i> <span>Dokter</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="dokter/data.php"><i class="fa fa-circle-thin"></i>Tabel data</a></li>
                            <li><a href="dokter/tambah.php"><i class="fa fa-circle-thin"></i>Tambah</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder"></i> <span>Rekam Medis</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="rm/data.php"><i class="fa fa-circle-thin"></i>Tabel data</a></li>
                            <li><a href="rm/tambah.php"><i class="fa fa-circle-thin"></i>Tambah</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-calendar"></i> <span>Kunjungan</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="kb/data.php"><i class="fa fa-circle-thin"></i>Tabel data</a></li>
                            <li><a href="kb/tambah.php"><i class="fa fa-circle-thin"></i>Tambah</a></li>
                        </ul>
                    </li>
                    <li class="header nav-small-cap">Data Laporan</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file"></i> <span>Laporan</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="laporan/datakartu.php"><i class="fa fa-circle-thin"></i>Kartu Berobat</a></li>
                            <li><a href="laporan/datakb.php"><i class="fa fa-circle-thin"></i>Kunjungan</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="info-box">
                            <a href="dokter/data.php">
                                <span class="info-box-icon bg-primary rounded"><i class="fa fa-book"></i></span>
                            </a>
                            <div class="info-box-content">
                                <?php $hitungd = $qd->fetch_assoc(); ?>
                                <span class="info-box-number"><?= $hitungd['hitung'] ?></span>
                                <span class="info-box-text">Dokter</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="info-box">
                            <a href="poli/data.php">
                                <span class="info-box-icon bg-warning rounded"><i class="fa fa-heart"></i></span>
                            </a>
                            <div class="info-box-content">
                                <?php $hitungpoli = $qk->fetch_assoc(); ?>
                                <span class="info-box-number"><?= $hitungpoli['hitung'] ?></span>
                                <span class="info-box-text">Poli</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="info-box">
                            <a href="pasien/data.php">
                                <span class="info-box-icon bg-success rounded"><i class="fa fa-wheelchair"></i></span>
                            </a>
                            <div class="info-box-content">
                                <?php $hitungpasien = $qc->fetch_assoc(); ?>
                                <span class="info-box-number"><?= $hitungpasien['hitung'] ?></span>
                                <span class="info-box-text">Pasien</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="info-box">
                            <a href="kb/data.php">
                                <span class="info-box-icon bg-info rounded"><i class="fa fa-calendar"></i></span>
                            </a>
                            <div class="info-box-content">
                                <?php
                                $hitungkb = $qkb->fetch_assoc();
                                $hitungini = $qkbini->fetch_assoc();
                                ?>
                                <span class="info-box-number"><?= $hitungkb['hitung'] ?> | <?= $hitungini['hitung'] ?></span>
                                <span class="info-box-text">Total Kunjungan | Kunjungan hari ini</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="callout callout-info col-12">
                        <h4>Tip!</h4>

                        <p>Gunakan website di komputer untuk pengalaman pengguna yang lebih baik.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- LINE CHART -->
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Analatics</h3>

                                <ul class="box-controls pull-right">
                                </ul>
                            </div>
                            <div class="box-body chart-responsive">
                                <div class="chart" id="line-chart" style="height: 300px;"></div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            &copy; 2021 <a href="">Elvan Firdha Aldianto</a>. All Rights Reserved.
        </footer>
    </div>

    <script src="../js/jquery.min.js"></script>

    <script src="../js/popper.min.js"></script>

    <script src="../js/bootstrap.min.js"></script>

    <script src="../js/template.js"></script>

    <script src="../assets/raphael/raphael.min.js"></script>
    <script src="../assets/morris.js/morris.min.js"></script>
    <script src="../js/widget-morris-charts.js"></script>
</body>

</html>