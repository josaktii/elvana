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
                    Kunjungan berobat
                    <small>Data</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="breadcrumb-item">Kunjungan berobat</li>
                    <li class="breadcrumb-item active">Tambah</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form tambah data kunjungan berobat</h3>
                        <h6 class="box-subtitle">Form yang digunakan untuk menambah data kunjungan berobat di Rumah Sakit XXX</h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <?php
                                require_once '../../config/connect.php';

                                if (isset($_GET['id'])) {
                                    $id = $_GET['id'];

                                    $q = $connect->query("SELECT * FROM kb JOIN pasien USING(id_pasien) JOIN poli USING(kd_poli) WHERE kd_kunjungan = '$id'");

                                    foreach ($q as $d) :
                                ?>
                                        <form method="POST" action="prosesedit.php">
                                            <div class="row">
                                                <div class="col-lg-12 col-12">
                                                    <div class="form-group">
                                                        <h5>Nama Pasien <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" name="kdkb" value="<?= $d['kd_kunjungan'] ?>" hidden>
                                                            <?php $qpasien = $connect->query("SELECT * FROM pasien"); ?>
                                                            <select name="idpasien" class="form-control">
                                                                <option value="<?= $d['id_pasien']; ?>" hidden><?= $d['nm_pasien']; ?></option>
                                                                <?php while ($dpasien = $qpasien->fetch_assoc()) :                ?>
                                                                    <option value="<?= $dpasien['id_pasien']; ?>"><?= $dpasien['nm_pasien']; ?></option>
                                                                <?php endwhile; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Status Kunjungan <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-control" name="status">
                                                                <option value="<?= $d['status']; ?>" hidden>
                                                                    <?php
                                                                    if ($d['status'] == '1') {
                                                                        echo "Menunggu";
                                                                    } elseif ($d['status'] == '2') {
                                                                        echo "Tertangani";
                                                                    }
                                                                    ?>
                                                                </option>
                                                                <option value="1">Menunggu</option>
                                                                <option value="2">Tertangani</option>
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