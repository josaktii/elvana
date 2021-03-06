<?php require_once '../../config/connect.php'; ?>

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
                    Dokter
                    <small>Data</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="breadcrumb-item active">Dokter</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Tabel data dokter</h3>
                                <h6 class="box-subtitle">Tabel berisi data dokter di Klinik RH Medika</h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example6" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Poli</th>
                                                <th>Nama Dokter</th>
                                                <th>Sip</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>No. Telepon</th>
                                                <th>Alamat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $q = $connect->query("SELECT * FROM dokter JOIN poli USING(kd_poli)");
                                            $no = 1;
                                            foreach ($q as $du) :
                                            ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $du['nm_poli'] ?></td>
                                                    <td><?= $du['nm_dokter'] ?></td>
                                                    <td><?= $du['sip'] ?></td>
                                                    <td><?= $du['tempat_lahird'] ?></td>
                                                    <td><?= $du['tgl_lahird'] ?></td>
                                                    <td><?= $du['telp_dokter'] ?></td>
                                                    <td><?= $du['alamatd'] ?></td>
                                                    <td>
                                                        <div class="input-group">
                                                            <a href="edit.php?id=<?= $du['id_dokter'] ?>" class="btn btn-success fa fa-edit"></a>
                                                            <a href="hapus.php?id=<?= $du['id_dokter'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-danger fa fa-trash"></a>
                                                        </div>
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