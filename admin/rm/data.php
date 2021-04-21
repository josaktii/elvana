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
                                        <?php
                                        $qpa = $connect->query("SELECT * FROM rm JOIN pasien USING(id_pasien) JOIN dokter USING(id_dokter) JOIN karyawan USING(id_karyawan)");
                                        $no = 1;
                                        while ($dpa = $qpa->fetch_assoc()) :
                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $dpa['nm_pasien'] ?></td>
                                                    <td><?= $dpa['nm_dokter'] ?></td>
                                                    <td><?= $dpa['nm_karyawan'] ?></td>
                                                    <td><?= $dpa['tinggi_badan'] ?></td>
                                                    <td><?= $dpa['berat_badan'] ?></td>
                                                    <td><?= $dpa['tensi'] ?></td>
                                                    <td><?= $dpa['anamnesa'] ?></td>
                                                    <td><?= $dpa['diagnose'] ?></td>
                                                    <td>
                                                        <?php
                                                        if ($dpa['tindak_lanjut'] == '1') {
                                                            echo "Pulang sehat";
                                                        } elseif ($dpa['tindak_lanjut'] == '2') {
                                                            echo "Rawat jalan";
                                                        } elseif ($dpa['tindak_lanjut'] == '3') {
                                                            echo "Pemeriksaan berjangka";
                                                        } else {
                                                            echo "Rujukan";
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($dpa['terapi'] == '1') {
                                                            echo "Obat";
                                                        } else {
                                                            echo "Tindak";
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?= $dpa['tanggal'] ?></td>
                                                    <td>
                                                        <div class="input-group">
                                                            <a href="edit.php?id=<?= $dpa['kd_rekammedis'] ?>" class="btn btn-sm btn-info">Edit</a>
                                                            <a href="hapus.php?id=<?= $dpa['kd_rekammedis'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-sm btn-danger">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        <?php
                                            $no++;
                                        endwhile;
                                        ?>
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