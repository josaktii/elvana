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

        <?php include_once('navbar.php'); ?>

        <?php include_once('sidebar.php'); ?>

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
                        <h3 class="box-title">Form tambah data karyawan</h3>
                        <h6 class="box-subtitle">Form yang digunakan untuk menambah data karyawan di Rumah Sakit XXX</h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <?php
                                require_once '../../config/connect.php';

                                if (isset($_GET['id'])) {
                                    $id = $_GET['id'];

                                    $qk = $connect->query("SELECT * FROM karyawan WHERE id_karyawan = '$id'");

                                    foreach ($qk as $dk) :
                                ?>
                                        <form method="POST" action="prosesedit.php">
                                            <div class="row">
                                                <div class="col-lg-12 col-12">
                                                    <div class="form-group">
                                                        <h5>Nama Karyawan <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" name="idk" value="<?= $dk['id_karyawan'] ?>" hidden>
                                                            <input type="text" class="form-control" name="nmkarya" value="<?= $dk['nm_karyawan'] ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Tempat Lahir <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" name="tmptkarya" value="<?= $dk['tempat_lahirk'] ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Tanggal Lahir <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="date" class="form-control" name="tglkarya" value="<?= $dk['tgl_lahirk'] ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Jabatan <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-control" name="jabat" required>
                                                                <option value="<?= $dk['jabatan'] ?>" hidden>
                                                                    <?php
                                                                        if ($dk['jabatan']==1) {
                                                                            echo 'Admin';
                                                                        } elseif ($dk['jabatan']==2) {
                                                                            echo 'Medis 1';
                                                                        } elseif ($dk['jabatan']==3) {
                                                                            echo 'Auditor BPJS';
                                                                        } elseif ($dk['jabatan']==4) {
                                                                            echo 'Auditor Inhealth/Buma';
                                                                        }
                                                                    ?>
                                                                </option>
                                                                <option value="1">Admin</option>
                                                                <option value="2">Medis 1</option>
                                                                <option value="3">Auditor BPJS</option>
                                                                <option value="4">Auditor Inhealth/Buma</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-xs-right">
                                                <button type="submit" class="btn btn-info" name="submit">Submit</button>
                                            </div>
                                        </form>

                                <?php
                                    endforeach;
                                }
                                ?>
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
            &copy; 2021 <a href="">Elvan Firdha Aldianto</a>. All Rights Reserved.
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