<!-- <!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="../style/bootstrap.css" rel="stylesheet">
    <link href="../style/dashboard.css" rel="stylesheet">
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <//?php
        session_start();

        if ($_SESSION['status'] != "login") {
            header("location:../login.php?pesan=belum_login");
        }
        ?>
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="dashboard.php">Admin</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="btn btn-danger mx-0" href="../config/logout.php">Sign out</a>
            </li>
        </ul>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Menu Admin</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="user/data.php">
                                <span data-feather="home"></span>
                                User
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="poli/data.php">
                                <span data-feather="bar-chart-2"></span>
                                Poli
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pasien/data.php">
                                <span data-feather="users"></span>
                                Pasien
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dokter/data.php">
                                <span data-feather="shopping-cart"></span>
                                Dokter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="karyawan/data.php">
                                <span data-feather="file"></span>
                                Karyawan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rm/data.php">
                                <span data-feather="layers"></span>
                                Rekam Medis
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <?php //include_once '../config/connect.php'; 
                ?>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h1">Dashboard</h1>
                </div>

                <div class="p-5 mb-4 bg-light rounded-3">
                    <div class="container-fluid py-5">
                        <h1 class="display-5 fw-bold">Jumlah pasien</h1>
                        <p class="col-md-8 fs-4">
                            <?php
                            // $qc = $connect->query("SELECT COUNT(*) AS hitung FROM pasien");
                            // $hitung = $qc->fetch_assoc();
                            // echo "Pasien yang terdaftar : ".$hitung['hitung'];
                            ?>
                        </p>
                    </div>
                </div>

                <div class="row align-items-md-stretch">
                    <div class="col-md-6">
                        <div class="h-100 p-5 bg-light border rounded-3">
                            <h2 class="fw-bold">Jumlah karyawan</h2>
                            <p class="col-md-8 fs-4">
                            <?php
                            // $qk = $connect->query("SELECT COUNT(*) AS hitung FROM karyawan");
                            // $hitungk = $qk->fetch_assoc();
                            // echo "Karyawan yang terdaftar : ".$hitungk['hitung'];
                            ?>
                        </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="h-100 p-5 bg-light border rounded-3">
                            <h2 class="fw-bold">Jumlah dokter</h2>
                            <p class="col-md-8 fs-4">
                            <?php
                            //$qd = $connect->query("SELECT COUNT(*) AS hitung FROM dokter");
                            //$hitungd = $qd->fetch_assoc();
                            //echo "Dokter yang terdaftar : ".$hitungd['hitung'];
                            ?>
                        </p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">

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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">USERNAME</a>
                            <ul class="dropdown-menu scale-up">
                                <li class="user-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 text-left">
                                            <a href="#"><i class="fa fa-power-off"></i> Logout</a>
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
                    <div class="col-lg-3 col-md-6">
                        <div class="info-box">
                            <span class="info-box-icon bg-primary rounded"><i class="fa fa-wheelchair"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-number">4,569</span>
                                <span class="info-box-text">Patient</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="info-box">
                            <span class="info-box-icon bg-warning rounded"><i class="fa fa-file"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-number">23,009</span>
                                <span class="info-box-text">Encounters</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="info-box">
                            <span class="info-box-icon bg-info rounded"><i class="fa fa-calendar"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-number">56</span>
                                <span class="info-box-text">Appointments</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="info-box">
                            <span class="info-box-icon bg-success rounded"><i class="fa fa-heartbeat"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-number">12,100</span>
                                <span class="info-box-text">Lab & Radiology</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <i class="fa fa-line-chart"></i>

                                <h3 class="box-title">Line Chart</h3>

                                <ul class="box-controls pull-right">
                                    <li><a class="box-btn-close" href="#"></a></li>
                                    <li><a class="box-btn-slide" href="#"></a></li>
                                    <li><a class="box-btn-fullscreen" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="box-body">
                                <div id="line-chart" style="height: 300px;"></div>
                            </div>
                            <!-- /.box-body-->
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
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

    <script src="../assets/Flot/jquery.flot.js"></script>

    <script src="../js/widget-flot-charts.js"></script>

</body>

</html>