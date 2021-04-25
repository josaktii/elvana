<?php require_once '../../config/connect.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
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
                    <h1 class="h1">Pengguna<i class="text-muted h2"> (User)</i></h1>
                    <!-- <div class="btn-toolbar mb-2 mb-md-0">
                        <a href="tambah.php" class="btn btn-lg btn-primary">Tambah</a>
                    </div> -->
                </div>

                <div class="container-fluid py-5">
                    <div class="row align-items-md-stretch">
                        <div class="col-md-7">
                            <div class="h-100 p-5 bg-light border rounded-3">
                                <div class="table-responsive">
                                    <h2>Data Pengguna</h2>
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
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Access</th>
                                                <th>Nama Karyawan</th>
                                                <th>Nama Poli</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if (isset($_GET['cari'])) {
                                            $cari = $_GET['cari'];
                                            $qu = $connect->query("SELECT * FROM user JOIN karyawan USING(id_karyawan) JOIN poli USING(kd_poli) WHERE CONCAT(username, '', nm_karyawan, '', nm_poli, '') LIKE '%".$cari."%' ORDER BY id_user ASC");
                                        } else {
                                            $qu = $connect->query("SELECT * FROM user JOIN karyawan USING(id_karyawan) JOIN poli USING(kd_poli) ORDER BY id_user ASC");
                                        }

                                        $no = 1;
                                        while ($du = $qu->fetch_assoc()) :
                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $du['username'] ?></td>
                                                    <td><?= $du['password'] ?></td>
                                                    <td>
                                                        <?php
                                                        if ($du['access'] == 1) {
                                                            echo 'Admin';
                                                        } else {
                                                            echo 'Karyawan';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?= $du['nm_karyawan'] ?></td>
                                                    <td><?= $du['nm_poli'] ?></td>
                                                    <td>
                                                        <div class="input-group">
                                                            <a href="edit.php?id=<?= $du['id_user'] ?>" class="btn btn-sm btn-info">Edit</a>
                                                            <a href="hapus.php?id=<?= $du['id_user'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-sm btn-danger">Delete</a>
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
                        <div class="col-md-5">
                            <div class="p-5 bg-light border rounded-3">
                                <h2>Tambah Pengguna</h2>
                                <hr class="my-4">
                                <?php include 'tambah.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>
</body>

</html>