<?php

session_start();

include_once('../config/connect.php');

if ($_SESSION['status'] != "login") {
    header("location:../login.php?pesan=belum_login");
}

if ($_POST['submit']) {
    $password_lama    = $_POST['password_lama'];
    $password_baru    = $_POST['password_baru'];
    $konfirmasi_password = $_POST['konfirmasi_password'];

    $cek = $connect->query("SELECT password FROM user WHERE password='$password_lama'");

    if ($cek->num_rows) {
        if (strlen($password_baru) >= 5) {
            if ($password_baru == $konfirmasi_password) {
                $id_user = $_SESSION['id_user'];

                $update = $connect->query("UPDATE user SET password='$password_baru' WHERE id_user='$id_user'");
                if ($update) {
                    echo "<script>alert('Password berhasil diubah');</script>";
                } else {
                    echo "<script>alert('Password gagal diubah');</script>";
                }
            } else {
                echo "<script>alert('Password tidak cocok');</script>";
            }
        } else {
            echo "<script>alert('Password harus lebih dari 5 karakter');</script>";
        }
    } else {
        echo "<script>alert('Password lama tidak ditemukan');</script>";
    }
}
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

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="../style/bootstrap.min.css">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="../style/bootstrap-extend.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../style/master_style.css">

    <!-- Fab Admin skins -->
    <link rel="stylesheet" href="../style/_all-skins.css">

</head>

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo -->
                <b class="logo-mini">
                    <span class="light-logo">MEDIS 1</span>
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
                        <a href="dashboard.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                    </li>
                    <li class="header nav-small-cap">DATA TURUNAN</li>
                    <li class="">
                        <a href="kb/data.php">
                            <i class="fa fa-calendar"></i>
                            <span>Kunjungan</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder"></i> <span>Rekam Medis</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="rm/data.php"><i class="fa fa-circle-thin"></i>Cari data</a></li>
                            <li><a href="rm/tambah.php"><i class="fa fa-circle-thin"></i>Tambah</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file"></i> <span>Laporan</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
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
                    Ubah Password
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="breadcrumb-item active">Ubah Password</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="box col-6 mx-auto">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form ubah password</h3>
                        <h6 class="box-subtitle">Form yang digunakan untuk mengubah password user</h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body px-30 py-20">
                        <div class="row">
                            <div class="col">

                                <form method="POST">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <h5>Password lama<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="password" class="form-control" name="password_lama">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <h5>Password baru<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="password" class="form-control" name="password_baru">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <h5>Konfirmasi password baru<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="password" class="form-control" name="konfirmasi_password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-info" name="submit" value="Submit"></button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            &copy; 2018 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
        </footer>
    </div>

    <script src="../js/jquery.min.js"></script>

    <!-- popper -->
    <script src="../js/popper.min.js"></script>

    <!-- Bootstrap 4.0-->
    <script src="../js/bootstrap.min.js"></script>

    <!-- FastClick -->
    <script src="../js/fastclick.js"></script>

    <!-- Fab Admin App -->
    <script src="../js/template.js"></script>

</body>

</html>