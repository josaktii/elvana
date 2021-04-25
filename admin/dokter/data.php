<?php require_once '../../config/connect.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dokter</title>
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
                    <h1 class="h1">Dokter</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a href="tambah.php" class="btn btn-lg btn-primary">Tambah</a>
                    </div>
                </div>

                <div class="container-fluid py-5">
                    <div class="row align-items-md-stretch">
                        <div class="col-md-12">
                            <div class="h-100 p-5 bg-light border rounded-3">
                                <div class="table-responsive">
                                    <h2>Data Dokter</h2>
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
                                                <th>Nama Poli</th>
                                                <th>Nama Dokter</th>
                                                <th>Sip</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>No. Telepon</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if (isset($_GET['cari'])) {
                                            $cari = $_GET['cari'];
                                            $qpa = $connect->query("SELECT * FROM dokter JOIN poli USING(kd_poli) WHERE CONCAT(nm_dokter, '', nm_poli, '', sip, '', tempat_lahird, '', tgl_lahird, '', telp_dokter, '', alamatd, '') LIKE '%" . $cari . "%'");
                                        } else {
                                            $qpa = $connect->query("SELECT * FROM dokter JOIN poli USING(kd_poli)");
                                        }
                                        $no = 1;
                                        while ($dpa = $qpa->fetch_assoc()) :
                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $dpa['nm_poli'] ?></td>
                                                    <td><?= $dpa['nm_dokter'] ?></td>
                                                    <td><?= $dpa['sip'] ?></td>
                                                    <td><?= $dpa['tempat_lahird'] ?></td>
                                                    <td><?= $dpa['tgl_lahird'] ?></td>
                                                    <td><?= $dpa['telp_dokter'] ?></td>
                                                    <td><?= $dpa['alamatd'] ?></td>
                                                    <td>
                                                        <div class="input-group">
                                                            <a href="edit.php?id=<?= $dpa['id_dokter'] ?>" class="btn btn-sm btn-info">Edit</a>
                                                            <a href="hapus.php?id=<?= $dpa['id_dokter'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-sm btn-danger">Delete</a>
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