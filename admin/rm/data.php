<?php require_once '../../config/connect.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Rekam Medis</title>
    <link href="../../style/bootstrap.css" rel="stylesheet">
    <link href="../../style/dashboard.css" rel="stylesheet">
</head>

<body>

    <?php include_once('../navbar.php'); ?>

    <div class="container-fluid">
        <div class="row">
            <?php include_once('../sidebar.php'); ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h1">Rekam Medis</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a href="tambah.php" class="btn btn-lg btn-primary">Tambah</a>
                    </div>
                </div>

                <div class="container-fluid py-5">
                    <div class="row align-items-md-stretch">
                        <div class="col-md-12">
                            <div class="h-100 p-5 bg-light border rounded-3">
                                <div class="table-responsive">
                                    <h2>Data Rekam Medis</h2>

                                    <hr class="my-4">
                                    <table class="table table table-m">
                                        <thead>
                                            <tr>
                                                <th>Kode Rekam Medis</th>
                                                <th>ID Pasien</th>
                                                <th>ID Dokter</th>
                                                <th>Tinggi Badan</th>
                                                <th>Berat Badan</th>
                                                <th>Tensi</th>
                                                <th>Anamnesa</th>
                                                <th>Diagnosa</th>
                                                <th>Tindak Lanjut</th>
                                                <th>Terapi</th>
                                                <th>ID Karyawan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $qpa = $connect->query("SELECT * FROM rm");
                                        while ($dpa = $qpa->fetch_assoc()) :
                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td><?= $dpa['kd_rekammedis'] ?></td>
                                                    <td><?= $dpa['id_pasien'] ?></td>
                                                    <td><?= $dpa['id_dokter'] ?></td>
                                                    <td><?= $dpa['tinggi_badan'] ?></td>
                                                    <td><?= $dpa['berat_badan'] ?></td>
                                                    <td><?= $dpa['tensi'] ?></td>
                                                    <td><?= $dpa['anamnesa'] ?></td>
                                                    <td><?= $dpa['diagnose'] ?></td>
                                                    <td><?= $dpa['tindak_lanjut'] ?></td>
                                                    <td><?= $dpa['terapi'] ?></td>
                                                    <td><?= $dpa['id_karyawan'] ?></td>
                                                    <td>
                                                        <div class="input-group">
                                                            <a href="edit.php?id=<?= $dpa['kd_rekammedis'] ?>" class="btn btn-sm btn-info">Edit</a>
                                                            <a href="hapus.php?id=<?= $dpa['kd_rekammedis'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-sm btn-danger">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        <?php endwhile; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>
</body>

</html>