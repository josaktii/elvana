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
                    Pasien
                    <small>Data</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="breadcrumb-item active">Pasien</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Tabel data poli</h3>
                                <h6 class="box-subtitle">Tabel berisi data poli di Klinik RH Medika</h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example6" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
                                            <tr>
                                                <th>Number</th>
                                                <th>ID Pasien</th>
                                                <th>Kode Registrasi</th>
                                                <th>Nama Pasien</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Tanggal Daftar</th>
                                                <th>No. Telepon</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Jalur</th>
                                                <th>Alamat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>    
                                        <tbody>
                                            <?php
                                            $q = $connect->query("SELECT * FROM pasien");
                                            $no = 1;
                                            foreach ($q as $dpa) :
                                            ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $dpa['id_pasien'] ?></td>
                                                    <td><?= $dpa['kd_registrasi'] ?></td>
                                                    <td><?= $dpa['nm_pasien'] ?></td>
                                                    <td><?= $dpa['tempat_lahirp'] ?></td>
                                                    <td><?= $dpa['tgl_lahirp'] ?></td>
                                                    <td><?= $dpa['tgl_daftar'] ?></td>
                                                    <td><?= $dpa['telp_pasien'] ?></td>
                                                    <td>
                                                        <?php
                                                        if ($dpa['jen_kelamin'] == '2') {
                                                            echo "Laki-laki";
                                                        } else {
                                                            echo "Perempuan";
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
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
                                                        ?>
                                                    </td>
                                                    <td><?= $dpa['alamatp'] ?></td>
                                                    <td>
                                                        <div class="input-group">
                                                            <a href="edit.php?id=<?= $dpa['id_pasien'] ?>" class="btn btn-success fa fa-edit"></a>
                                                            <a href="hapus.php?id=<?= $dpa['id_pasien'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-danger fa fa-trash"></a>
                                                            <a href="../../config/cetakkartu.php?id=<?= $dpa['id_pasien'] ?>" target="_blank" class="btn btn-info fa fa-print"></a>
                                                        </div>
                                                    </td>
                                                    </td>
                                                </tr>
                                            <?php
                                                $no++;
                                            endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>>
                        </div>
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
