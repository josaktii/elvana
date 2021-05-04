<?php include('../../config/connect.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">

    <title>Data Kunjungan</title>

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
                    kunjungan berobat
                    <small>Data</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="breadcrumb-item active">kunjungan berobat</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Tabel data kunjungan berobat</h3>
                                <h6 class="box-subtitle">Tabel berisi data kunjungan berobat di Rumah Sakit XXX</h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                            <div class="row">
                                <div class="box-label">
                                    <a class="btn btn-info mx-lg-30 mb-15" href="../../config/cetakkunjungan.php" target="_blank"><i class="fa fa-print"></i> Print</a>
                                </div>
                            </div>
                                <div class="table-responsive">
                                    <table id="example2" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID Pasien</th>
                                                <th>Nama Pasien</th>
                                                <th>Poli</th>
                                                <th>Tanggal Kunjungan</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $q = $connect->query("SELECT * FROM kb JOIN pasien USING(id_pasien) JOIN poli USING(kd_poli)");
                                            $no = 1;
                                            foreach ($q as $d) :
                                            $id = $d['id_pasien'];
                                            ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $d['id_pasien']; ?></td>
                                                    <td><?= $d['nm_pasien'] ?></td>
                                                    <td><?= $d['nm_poli'] ?></td>
                                                    <td><?= $d['tgl_kunjungan'] ?></td>
                                                    <td>
                                                        <?php
                                                        if ($d['status'] == '1') {
                                                            echo "Menunggu";
                                                        } elseif ($d['status'] == '2') {
                                                            echo "Tertangani";
                                                        } else {
                                                            echo "-";
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php
                                                $no++;
                                            endforeach; ?>
                                        </tbody>
                                    </table>
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

    <script src="../../assets/datatable/datatables.min.js"></script>

    <script src="../../js/data-table.js"></script>
</body>

</html>