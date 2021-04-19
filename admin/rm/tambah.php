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
                    <h1 class="h2">Tambah Data Pasien</h1>
                </div>

                <div class="px-5 col-lg-8 mx-auto my-5 bg-light rounded-3">
                    <div class="container-fluid py-5">
                        <form method="POST" action="prosestambah.php">
                            <div class="row g-3">
                                <div class="col-4">
                                    <?php
                                    $qpasien = $connect->query("SELECT * FROM pasien"); ?>
                                    <label for="idpasien" class="form-label">Nama Pasien</label>
                                    <select name="idpasien" class="form-select" id="">
                                        <option hidden>Pilih Pasien</option>
                                        <?php
                                        while ($dpasien = $qpasien->fetch_assoc()) :
                                        ?>
                                            <option value="<?= $dpasien['id_pasien']; ?>"><?= $dpasien['nm_pasien']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>

                                <div class="col-4">
                                    <?php
                                    $qdokter = $connect->query("SELECT * FROM dokter"); ?>
                                    <label for="iddokter" class="form-label">Nama Dokter</label>
                                    <select name="iddokter" class="form-select" id="">
                                        <option hidden>Pilih Dokter</option>
                                        <?php
                                        while ($ddokter = $qdokter->fetch_assoc()) :
                                        ?>
                                            <option value="<?= $ddokter['id_dokter']; ?>"><?= $ddokter['nm_dokter']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <?php
                                    $qkarya = $connect->query("SELECT * FROM karyawan"); ?>
                                    <label for="idkarya" class="form-label">Nama Karyawan</label>
                                    <select name="idkarya" class="form-select" id="">
                                        <option hidden>Pilih Dokter</option>
                                        <?php
                                        while ($dkarya = $qkarya->fetch_assoc()) :
                                        ?>
                                            <option value="<?= $dkarya['id_karyawan']; ?>"><?= $dkarya['nm_karyawan']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>

                                <div class="col-4">
                                    <label for="tb" class="form-label">Tinggi Badan</label>
                                    <input type="number" class="form-control" name="tb" placeholder="Tinggi badan">
                                </div>

                                <div class="col-4">
                                    <label for="bb" class="form-label">Berat Badan</label>
                                    <input type="number" class="form-control" name="bb" placeholder="Berat badan">
                                </div>

                                <div class="col-4">
                                    <label for="tensi" class="form-label">Tensi</label>
                                    <input type="text" class="form-control" name="tensi" placeholder="Tensi">
                                </div>

                                <div class="col-12">
                                    <label for="anamnesa" class="form-label">Anamnesa</label>
                                    <textarea name="anamnesa" class="form-control" placeholder="Anamnesa"></textarea>
                                </div>

                                <div class="col-12">
                                    <label for="diagnose" class="form-label">Diagnosa</label>
                                    <textarea name="diagnose" class="form-control" placeholder="Diagnosa"></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label for="tindak" class="form-label">Tindak Lanjut</label>
                                    <select class="form-select" name="tindak">
                                        <option hidden>Tindak lanjut</option>
                                        <option value="1">Pulang sehat</option>
                                        <option value="2">Rawat jalan</option>
                                        <option value="3">Pemeriksaan berkala</option>
                                        <option value="4">Rujukan</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="terapi" class="form-label">Terapi</label>
                                    <select class="form-select" name="terapi">
                                        <option value="" hidden>Terapi</option>
                                        <option value="1">Obat</option>
                                        <option value="2">Tindak</option>
                                    </select>
                                </div>
                            </div>

                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit" name="rmsubmit">Tambah Data Rekam Medis</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>