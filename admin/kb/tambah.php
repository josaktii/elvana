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
                                <div class="col-12">
                                    <?php
                                    $qpasien = $connect->query("SELECT * FROM pasien"); ?>
                                    <label for="idpasien" class="form-label">Nama Pasien</label>
                                    <select name="idpasien" class="form-select">
                                        <option hidden>Pilih pasien</option>
                                        <?php
                                        while ($dpasien = $qpasien->fetch_assoc()) :
                                        ?>
                                            <option value="<?= $dpasien['id_pasien']; ?>"><?= $dpasien['nm_pasien']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <?php
                                    $qpoli = $connect->query("SELECT * FROM poli"); ?>
                                    <label for="kdpoli" class="form-label">Poli</label>
                                    <select name="kdpoli" class="form-select">
                                        <option hidden>Pilih Poli</option>
                                        <?php
                                        while ($dpoli = $qpoli->fetch_assoc()) :
                                        ?>
                                            <option value="<?= $dpoli['kd_poli']; ?>"><?= $dpoli['nm_poli']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" name="status">
                                        <option hidden>Status pasien</option>
                                        <?php
                                        if ($dd['status'] == '1') {
                                            echo "Menunggu";
                                        } elseif ($dd['tindak_lanjut'] == '2') {
                                            echo "Tertangani";
                                        }
                                        ?>
                                        </option>
                                        <option value="1">Menunggu</option>
                                        <option value="2">Tertangani</option>
                                    </select>
                                </div>
                            </div>

                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit" name="submit">Tambah Data Kunjungan</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>