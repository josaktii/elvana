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

    <link rel="stylesheet" href="../../style/bootstrap.min.css">

    <link rel="stylesheet" href="../../style/bootstrap-extend.css">

    <link rel="stylesheet" href="../../style/master_style.css">

    <link rel="stylesheet" href="../../style/_all-skins.css">
    <link rel="stylesheet" href="../../assets/datatable/datatables.min.css">

</head>

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

        <?php include_once('navbar.php'); ?>

        <?php include_once('sidebar.php'); ?>

        <div class="content-wrapper">
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
            <section class="content">
                <div class="row">

                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Tabel data karyawan</h3>
                                <h6 class="box-subtitle">Tabel berisi data karyawan di Rumah Sakit XXX</h6>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Jabatan</th>
                                                <th>Nama Karyawan</th>
                                                <th>Tempat Lahir Karyawan</th>
                                                <th>Tanggal Lahir Karyawan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $q = $connect->query("SELECT * FROM karyawan");
                                            $no = 1;
                                            foreach ($q as $du) :
                                            ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td>
                                                        <?php
                                                        if ($du['jabatan'] == 1) {
                                                            echo 'Admin';
                                                        } elseif ($du['jabatan'] == 2) {
                                                            echo 'Medis 1';
                                                        } elseif ($du['jabatan'] == 3) {
                                                            echo 'Auditor BPJS';
                                                        } elseif ($du['jabatan'] == 4) {
                                                            echo 'Auditor Inhealth/Buma';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?= $du['nm_karyawan'] ?></td>
                                                    <td><?= $du['tempat_lahirk'] ?></td>
                                                    <td><?= $du['tgl_lahirk'] ?></td>
                                                    <td>
                                                        <div class="input-group">
                                                            <a href="edit.php?id=<?= $du['id_karyawan'] ?>" class="btn btn-success fa fa-edit"></a>
                                                            <a href="hapus.php?id=<?= $du['id_karyawan'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-danger fa fa-trash"></a>
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
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            &copy; 2021 <a href="">Elvan Firdha Aldianto</a>. All Rights Reserved.
        </footer>
    </div>

    <script src="../../js/jquery.min.js"></script>

    <script src="../../js/popper.min.js"></script>

    <script src="../../js/bootstrap.min.js"></script>

    <script src="../../js/fastclick.js"></script>

    <script src="../../js/template.js"></script>

    <script src="../../assets/Flot/jquery.flot.js"></script>
    <script src="../../assets/datatable/datatables.min.js"></script>

    <script src="../../js/widget-flot-charts.js"></script>
    <script src="../../js/data-table.js"></script>

</body>

</html>