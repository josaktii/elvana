<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">

    <title>Edit Rekam Medis</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="../../style/bootstrap.min.css">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="../../style/bootstrap-extend.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../../style/master_style.css">

    <!-- Fab Admin skins -->
    <link rel="stylesheet" href="../../style/_all-skins.css">
    <link rel="stylesheet" href="../../assets/bootstrap-select-1.13.14/dist/css/bootstrap-select.css">

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
                    Rekam medis
                    <small>Data</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="breadcrumb-item">Rekam Medis</li>
                    <li class="breadcrumb-item active">Tambah</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form tambah data rekam medis</h3>
                        <h6 class="box-subtitle">Form yang digunakan untuk menambah data rekam medis di klinik RH Medika</h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <?php
                                require_once '../../config/connect.php';

                                if (isset($_GET['id'])) {
                                    $id = $_GET['id'];

                                    $q = $connect->query("SELECT * FROM rm JOIN pasien USING(id_pasien) JOIN dokter USING(id_dokter) JOIN karyawan USING(id_karyawan) JOIN obat USING(kd_obat) WHERE kd_rekammedis = '$id'");

                                    foreach ($q as $d) :
                                ?>
                                        <form method="POST" action="prosesedit.php">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <h5>Pasien <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" hidden name="kdrm" value="<?= $d['kd_rekammedis'] ?>">
                                                            <?php $qpasien = $connect->query("SELECT * FROM pasien"); ?>
                                                            <select name="idpasien" class="form-control selectpicker" data-live-search="true">
                                                                <option value="<?= $d['id_pasien']; ?>"><?= $d['id_pasien']; ?></option>
                                                                <?php while ($pasien = $qpasien->fetch_assoc()) : ?>
                                                                    <option value="<?= $pasien['id_pasien']; ?>"><?= $pasien['nm_pasien']; ?></option>
                                                                <?php endwhile; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <h5>Dokter <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <?php $qdokter = $connect->query("SELECT * FROM dokter"); ?>
                                                            <select name="iddokter" class="form-control selectpicker">
                                                                <option value="<?= $d['id_dokter']; ?>"><?= $d['nm_dokter']; ?></option>
                                                                <?php while ($dokter = $qdokter->fetch_assoc()) : ?>
                                                                    <option value="<?= $dokter['id_dokter']; ?>"><?= $dokter['nm_dokter']; ?></option>
                                                                <?php endwhile; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <h5>Karyawan <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <?php $qkarya = $connect->query("SELECT * FROM karyawan"); ?>
                                                            <select name="idkarya" class="form-control selectpicker">
                                                                <option value="<?= $d['id_karyawan']; ?>"><?= $d['nm_karyawan']; ?></option>
                                                                <?php while ($dkarya = $qkarya->fetch_assoc()) : ?>
                                                                    <option value="<?= $dkarya['id_karyawan']; ?>"><?= $dkarya['nm_karyawan']; ?></option>
                                                                <?php endwhile; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <h5>Tinggi Badan <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="number" class="form-control" name="tb" value="<?= $d['tinggi_badan']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <h5>Berat Badan <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="number" class="form-control" name="bb" value="<?= $d['berat_badan']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <h5>Tensi <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" name="tensi" value="<?= $d['tensi']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <h5>Tindak Lanjut <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-control selectpicker" name="tindak">
                                                                <option value="<?= $d['tindak_lanjut']; ?>">
                                                                    <?php
                                                                    if ($d['tindak_lanjut'] == '1') {
                                                                        echo "Pulang sehat";
                                                                    } elseif ($d['tindak_lanjut'] == '2') {
                                                                        echo "Rawat jalan";
                                                                    } elseif ($d['tindak_lanjut'] == '3') {
                                                                        echo "Pemeriksaan berjangka";
                                                                    } else {
                                                                        echo "Rujukan";
                                                                    }
                                                                    ?>
                                                                </option>
                                                                <option value="1">Pulang sehat</option>
                                                                <option value="2">Rawat jalan</option>
                                                                <option value="3">Pemeriksaan berkala</option>
                                                                <option value="4">Rujukan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <h5>Terapi <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-control selectpicker" name="terapi">
                                                                <option value="<?= $d['terapi']; ?>">
                                                                    <?php
                                                                    if ($d['terapi'] == '1') {
                                                                        echo "Obat";
                                                                    } else {
                                                                        echo "Tindak";
                                                                    }
                                                                    ?>
                                                                </option>
                                                                <option value="1">Obat</option>
                                                                <option value="2">Tindak</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <h5>Obat <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-control selectpicker" name="obat">
                                                                <option value="<?= $d['kd_obat']; ?>"><?= $d['nm_obat']; ?></option>
                                                                <?php
                                                                $qobat = $connect->query("SELECT * FROM obat");
                                                                while ($do = $qobat->fetch_assoc()) {
                                                                ?>
                                                                    <option value="<?= $do['kd_obat'] ?>"><?= $do['nm_obat'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <h5>Anamnesa <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <textarea name="anamnesa" class="form-control"><?= $d['anamnesa']; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <h5>Diagnosa <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <textarea name="diagnose" class="form-control"><?= $d['diagnose']; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-xs-right">
                                                <button type="submit" class="btn btn-info" name="submit">Ubah</button>
                                                <a href="data.php" class="btn btn-danger">Kembali</a>
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
    <script src="../../assets/bootstrap-select-1.13.14/dist/js/bootstrap-select.js"></script>
    <script>
        ! function(window, document, $) {
            "use strict";
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
        }(window, document, jQuery);
    </script>

</body>

</html>