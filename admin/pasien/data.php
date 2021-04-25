<?php require_once '../../config/connect.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
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
                    <h1 class="h1">Pasien</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a href="tambah.php" class="btn btn-lg btn-primary">Tambah</a>
                    </div>
                </div>

                <div class="container-fluid py-5">
                    <div class="row align-items-md-stretch">
                        <div class="col-md-12">
                            <div class="h-100 p-5 bg-light border rounded-3">
                                <div class="table-responsive">
                                    <h2>Data Pasien</h2>
                                    <form action="" method="get">
                                        <input type="search" name="cari" id="">
                                        <button type="submit">Cari</button>
                                    </form>
                                    <?php

                                    if (isset($_GET['cari'])) {
                                        $cari = $_GET['cari'];
                                        echo "<b>Hasil pencarian : " . $cari . "</b>";
                                    }

                                    ?>
                                    <hr class="my-4">
                                    <table class="table table table-m">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID Pasien</th>
                                                <th>Nama Pasien</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Tanggal Daftar</th>
                                                <th>No. Telepon</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Jalur</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if (isset($_GET['cari'])) {
                                            $cari = $_GET['cari'];
                                            $qpa = $connect->query("SELECT * FROM pasien WHERE CONCAT(id_pasien, '', nm_pasien, '', tempat_lahirp, '', tgl_lahirp, '', tgl_daftar, '', telp_pasien, '') LIKE '%".$cari."%'");
                                        } else {
                                            $qpa = $connect->query("SELECT * FROM pasien");
                                        }
                                        $no = 1;
                                        while ($dpa = $qpa->fetch_assoc()) :
                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $dpa['id_pasien'] ?></td>
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
                                                            <a href="edit.php?id=<?= $dpa['id_pasien'] ?>" class="btn btn-sm btn-info">Edit</a>
                                                            <a href="hapus.php?id=<?= $dpa['id_pasien'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-sm btn-danger">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        <?php
                                            $no++;
                                        endwhile; ?>
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