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
                    Dokter
                    <small>Data</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="breadcrumb-item">Dokter</li>
                    <li class="breadcrumb-item active">Tambah</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form tambah data dokter</h3>
                        <h6 class="box-subtitle">Form yang digunakan untuk menambah data dokter di Rumah Sakit XXX</h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <?php
                                require_once '../../config/connect.php';

                                if (isset($_GET['id'])) {
                                    $id = $_GET['id'];

                                    $q = $connect->query("SELECT * FROM dokter JOIN poli USING(kd_poli) WHERE id_dokter = '$id'");

                                    foreach ($q as $d) :
                                ?>
                                        <form method="POST" action="prosesedit.php">
                                            <div class="row">
                                                <div class="col-lg-12 col-12">
                                                    <div class="form-group">
                                                        <h5>Nama Dokter <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" name="idd" value="<?= $d['id_dokter'] ?>" hidden>
                                                            <input type="text" class="form-control" name="nmdokter" value="<?= $d['nm_dokter']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Tempat Lahir <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" name="tmptdokter" value="<?= $d['tempat_lahird']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Tanggal Lahir <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="date" class="form-control" name="tgldokter" value="<?= $d['tgl_lahird']; ?>" max="<?php date('Y-m-d'); ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Sip <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" name="sip" value="<?= $d['sip']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Contact <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" name="notlpd" value="<?= $d['telp_dokter']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <?php
                                                        $qp = $connect->query("SELECT * FROM poli"); ?>
                                                        <h5>Poli <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="kdpoli" class="form-control" id="">
                                                                <option value="<?= $d['kd_poli']; ?>" hidden><?= $d['nm_poli']; ?></option>
                                                                <?php
                                                                while ($dp = $qp->fetch_assoc()) :
                                                                ?>
                                                                    <option value="<?= $dp['kd_poli']; ?>"><?= $dp['nm_poli']; ?></option>
                                                                <?php endwhile; ?>
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
                                                            <textarea name="alamat" class="form-control"><?= $d['alamatd']; ?></textarea>
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