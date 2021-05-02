<?php include_once('../../config/connect.php'); ?>

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
    <link rel="stylesheet" href="../../assets/datatable/datatables.min.css">

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
                    <li class="breadcrumb-item active">Rekam medis</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Tabel data rekam medis</h3>
                                <h6 class="box-subtitle">Tabel berisi data rekam medis di Rumah Sakit XXX</h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <form method="POST">
                                    <div class="input-group input-group-newsletter col-md-10 mx-auto">
                                        <input class="form-control" type="text" name="idrm" placeholder="Masukkan ID.."> &nbsp;
                                        <div class="input-group-append"><input class="btn btn-secondary" id="submit-button" type="submit" name="csubmit"></div>
                                    </div>
                                </form><br>
                                <div class="row">
                                    <div class="table-responsive">
                                        <table id="example2" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama Pasien</th>
                                                    <th>Nama Dokter</th>
                                                    <th>Nama Karyawan</th>
                                                    <th>Tinggi Badan</th>
                                                    <th>Berat Badan</th>
                                                    <th>Tensi</th>
                                                    <th>Anamnesa</th>
                                                    <th>Diagnosa</th>
                                                    <th>Tindak Lanjut</th>
                                                    <th>Terapi</th>
                                                    <th>Tanggal</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($_POST['csubmit']) {
                                                    $data = $_POST['idrm'];

                                                    $q = $connect->query("SELECT * FROM rm JOIN pasien USING(id_pasien) JOIN dokter USING(id_dokter) JOIN karyawan USING(id_karyawan) WHERE id_pasien = '$data'");
                                                    $no = 1;
                                                    if (mysqli_num_rows($q) != NULL) {
                                                        foreach ($q as $d) :
                                                ?>
                                                            <tr>
                                                                <td><?= $no ?></td>
                                                                <td><?= $d['nm_pasien'] ?></td>
                                                                <td><?= $d['nm_dokter'] ?></td>
                                                                <td><?= $d['nm_karyawan'] ?></td>
                                                                <td><?= $d['tinggi_badan'] ?></td>
                                                                <td><?= $d['berat_badan'] ?></td>
                                                                <td><?= $d['tensi'] ?></td>
                                                                <td><?= $d['anamnesa'] ?></td>
                                                                <td><?= $d['diagnose'] ?></td>
                                                                <td>
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
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    if ($d['terapi'] == '1') {
                                                                        echo "Obat";
                                                                    } else {
                                                                        echo "Tindak";
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td><?= $d['tanggal'] ?></td>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <a href="edit.php?id=<?= $d['kd_rekammedis'] ?>" class="btn btn-success fa fa-edit"></a>
                                                                        <a href="hapus.php?id=<?= $d['kd_rekammedis'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-danger fa fa-trash"></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                <?php
                                                            $no++;
                                                        endforeach;
                                                    } else {
                                                        echo "<div class='col-11 h3 mx-auto text-center alert-danger'>Data tidak ditemukan</div>";
                                                    }
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
                <!-- /.row -->
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

    <script src="../../assets/Flot/jquery.flot.js"></script>
    <script src="../../assets/datatable/datatables.min.js"></script>

    <script src="../../js/widget-flot-charts.js"></script>
    <script src="../../js/data-table.js"></script>

</body>

</html>