<?php require_once '../../config/connect.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kunjungan Berobat</title>
    <link href="../../style/bootstrap.css" rel="stylesheet">
    <link href="../../style/dashboard.css" rel="stylesheet">
</head>

<body>
    <!-- <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"> -->
    </ /?php session_start(); if ($_SESSION['status'] !="login" ) { header("location:../login.php?pesan=belum_login"); } ?>
    <?php include_once('../navbar.php'); ?>

    <div class="container-fluid">
        <div class="row">
            <?php include_once('../sidebar.php'); ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h1">Kunjungan Berobat</h1>
                </div>

                <div class="row align-items-md-stretch">
                    <?php
                    $quer = $connect->query("SELECT COUNT(*) AS hitung, nm_poli FROM kb JOIN poli USING(kd_poli) GROUP BY kd_poli");
                    foreach ($quer as $hit) {
                    ?>
                        <div class="col-md-6">
                            <div class="h-100 p-5 bg-light border rounded-3">
                                <h2 class="fw-bold">Jumlah Pengunjung</h2>
                                <p class="col-md-8 fs-4">
                                    <?php
                                    echo "Poli " . $hit['nm_poli'] . " : " . $hit['hitung'];
                                    ?>
                                </p>
                                <p><a href="data.php" class="btn btn-primary">Lihat data</a></p>
                            </div>
                        </div>
                    <?php

                    } ?>

                    <!-- <div class="col-md-6">
                        <div class="h-100 p-5 bg-light border rounded-3">
                            <h2 class="fw-bold">Jumlah dokter</h2>
                            <p class="col-md-8 fs-4">
                            </p>
                        </div>
                    </div> -->
                </div>
            </main>
        </div>
    </div>
</body>

</html>