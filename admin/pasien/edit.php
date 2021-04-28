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
                    <li class="breadcrumb-item active">Edit</li>
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

                                <?php
                                require_once '../../config/connect.php';

                                if (isset($_GET['id'])) {
                                    $id = $_GET['id'];

                                    $qpa = $connect->query("SELECT * FROM pasien WHERE id_pasien = '$id'");

                                    foreach ($qpa as $dpa) :
                                ?>

                                        <form method="POST" action="prosesedit.php">
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <h5>Nama Pasien <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" name="idpa" value="<?= $dpa['id_pasien'] ?>" hidden>
                                                            <input type="text" class="form-control" name="nmpasien" value="<?= $dpa['nm_pasien']; ?>">

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Tempat Lahir <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" name="tmptpasien" value="<?= $dpa['tempat_lahirp']; ?>">

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Jalur Pendaftaran <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-control" name="jalur" required>
                                                                <option value="<?= $dpa['jalur']; ?>" hidden>
                                                                    <?php
                                                                    if ($dpa['jalur'] == '1') {
                                                                        echo "Mandiri";
                                                                    } elseif ($dpa['jalur'] == '2') {
                                                                        echo "BPJS";
                                                                    } elseif ($dpa['jalur'] == '3') {
                                                                        echo "Inhealth";
                                                                    } else {
                                                                        echo "Buma";
                                                                    }
                                                                    ?></option>
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
                                                            <input type="text" class="form-control" name="notlpp" value="<?= $dpa['telp_pasien']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Tanggal Lahir <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="date" class="form-control" name="tglpasien" value="<?= $dpa['tgl_lahirp']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Jenis Kelamin <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-control" name="jkel">
                                                                <option value="<?= $dpa['jen_kelamin']; ?>" hidden>
                                                                    <?php
                                                                    if ($dpa['jen_kelamin'] == '2') {
                                                                        echo "Laki-laki";
                                                                    } else {
                                                                        echo "Perempuan";
                                                                    }
                                                                    ?>
                                                                </option>
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
                                                            <textarea name="alamat" class="form-control"><?= $dpa['alamatp']; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-xs-right">
                                                <button type="submit" class="btn btn-info" name="pasubmit">Submit</button>
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