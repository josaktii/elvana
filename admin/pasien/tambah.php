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
    <link rel="stylesheet" href="../../style/bootstrap.min.css">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="../../style/bootstrap-extend.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../../style/master_style.css">

    <!-- Fab Admin skins -->
    <link rel="stylesheet" href="../../style/_all-skins.css">

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
                    <li class="">
                        <a href="../dashboard.php">
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
                            <li><a href="../poli/data.php"><i class="fa fa-circle-thin"></i>Tabel data</a></li>
                            <li><a href="../poli/tambah.php"><i class="fa fa-circle-thin"></i>Tambah</a></li>
                        </ul>
                    </li>
                    <li class="treeview active">
                        <a href="#">
                            <i class="fa fa-wheelchair"></i>
                            <span>Pasien</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="data.php"><i class="fa fa-circle-thin"></i>Tabel data</a></li>
                            <li><a href="tambah.php"><i class="fa fa-circle-thin"></i>Tambah</a></li>
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
                            <li><a href="../karyawan/data.php"><i class="fa fa-circle-thin"></i>Tabel data</a></li>
                            <li><a href="../karyawan/tambah.php"><i class="fa fa-circle-thin"></i>Tambah</a></li>
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
                            <li><a href="../user/data.php"><i class="fa fa-circle-thin"></i>Tabel data</a></li>
                            <li><a href="../user/tambah.php"><i class="fa fa-circle-thin"></i>Tambah</a></li>
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
                            <li><a href="../dokter/data.php"><i class="fa fa-circle-thin"></i>Tabel data</a></li>
                            <li><a href="../dokter/tambah.php"><i class="fa fa-circle-thin"></i>Tambah</a></li>
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
                            <li><a href="../rm/data.php"><i class="fa fa-circle-thin"></i>Tabel data</a></li>
                            <li><a href="../rm/tambah.php"><i class="fa fa-circle-thin"></i>Tambah</a></li>
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
                            <li><a href="../kb/data.php"><i class="fa fa-circle-thin"></i>Tabel data</a></li>
                            <li><a href="../kb/tambah.php"><i class="fa fa-circle-thin"></i>Tambah</a></li>
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
                    Pasien
                    <small>Data</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="breadcrumb-item">Pasien</li>
                    <li class="breadcrumb-item active">Tambah</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form tambah data poli</h3>
                        <h6 class="box-subtitle">Form yang digunakan untuk menambah data poli di Rumah Sakit XXX</h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="POST" action="prosestambah.php">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <h5>Nama Pasien <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="nmpasien" placeholder="Nama pasien" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Tempat Lahir <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="tmptpasien" placeholder="Tempat lahir pasien" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Jalur Pendaftaran <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select class="form-control" name="jalur" required>
                                                        <option value="" hidden>Pilih jalur</option>
                                                        <option value="1">Mandiri</option>
                                                        <option value="2">BPJS</option>
                                                        <option value="3">Inhealth</option>
                                                        <option value="4">Buma</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <h5>Contact <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="notlpp" placeholder="Nomor telepon pasien">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Tanggal Lahir <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="date" class="form-control" name="tglpasien">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Jenis Kelamin <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select class="form-control" name="jkel">
                                                        <option hidden>Jenis Kelamin</option>
                                                        <option value="1">Perempuan</option>
                                                        <option value="2">Laki-laki</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h5>Alamat <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea type="text" name="alamat" class="form-control" required data-validation-required-message="This field is required"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-info" name="pasubmit">Submit</button>
                                    </div>
                                </form>

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
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

    <script src="../../js/jquery.min.js"></script>

    <!-- popper -->
    <script src="../../js/popper.min.js"></script>

    <!-- Bootstrap 4.0-->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- FastClick -->
    <script src="../../js/fastclick.js"></script>

    <!-- Fab Admin App -->
    <script src="../../js/template.js"></script>
    <script src="../../js/validation.js"></script>
    <script>
        ! function(window, document, $) {
            "use strict";
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
        }(window, document, jQuery);
    </script>

</body>

</html>