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
                    <h1 class="h2">Edit Data Rekam Medis</h1>
                </div>

                <?php
                require_once '../../config/connect.php';

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];

                    $qd = $connect->query("SELECT * FROM rm JOIN pasien USING(id_pasien) JOIN dokter USING(id_dokter) JOIN karyawan USING(id_karyawan) WHERE kd_rekammedis = '$id'");

                    foreach ($qd as $dd) :
                ?>

                        <div class="px-5 col-lg-8 mx-auto my-5 bg-light rounded-3">
                            <div class="container-fluid py-5">
                                <form method="POST" action="prosesedit.php">
                                    <div class="row g-3">
                                        <div class="col-4">
                                            <input type="text" class="form-control" name="kdrm" value="<?= $dd['kd_rekammedis'] ?>" hidden>
                                            <?php
                                            $qpasien = $connect->query("SELECT * FROM pasien"); ?>
                                            <label for="idpasien" class="form-label">Nama Pasien</label>
                                            <select name="idpasien" class="form-select">
                                                <option value="<?= $dd['id_pasien']; ?>" hidden><?= $dd['nm_pasien']; ?></option>
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
                                            <select name="iddokter" class="form-select">
                                                <option hidden value="<?= $dd['id_dokter']; ?>"><?= $dd['nm_dokter']; ?></option>
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
                                            <select name="idkarya" class="form-select">
                                                <option hidden value="<?= $dd['id_karyawan']; ?>"><?= $dd['nm_karyawan']; ?></option>
                                                <?php
                                                while ($dkarya = $qkarya->fetch_assoc()) :
                                                ?>
                                                    <option value="<?= $dkarya['id_karyawan']; ?>"><?= $dkarya['nm_karyawan']; ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>

                                        <div class="col-4">
                                            <label for="tb" class="form-label">Tinggi Badan</label>
                                            <input type="number" class="form-control" name="tb" value="<?= $dd['tinggi_badan']; ?>">
                                        </div>

                                        <div class="col-4">
                                            <label for="bb" class="form-label">Berat Badan</label>
                                            <input type="number" class="form-control" name="bb" value="<?= $dd['berat_badan']; ?>">
                                        </div>

                                        <div class="col-4">
                                            <label for="tensi" class="form-label">Tensi</label>
                                            <input type="text" class="form-control" name="tensi" value="<?= $dd['tensi']; ?>">
                                        </div>

                                        <div class="col-12">
                                            <label for="anamnesa" class="form-label">Anamnesa</label>
                                            <textarea name="anamnesa" class="form-control"><?= $dd['anamnesa']; ?></textarea>
                                        </div>

                                        <div class="col-12">
                                            <label for="diagnose" class="form-label">Diagnosa</label>
                                            <textarea name="diagnose" class="form-control"><?= $dd['diagnose']; ?></textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="tindak" class="form-label">Tindak Lanjut</label>
                                            <select class="form-select" name="tindak">
                                                <option value="<?= $dd['tindak_lanjut']; ?>" hidden>
                                                    <?php
                                                    if ($dd['tindak_lanjut'] == '1') {
                                                        echo "Pulang sehat";
                                                    } elseif ($dd['tindak_lanjut'] == '2') {
                                                        echo "Rawat jalan";
                                                    } elseif ($dd['tindak_lanjut'] == '3') {
                                                        echo "Pemeriksaan berjangka";
                                                    } else {
                                                        echo "Rujukan";
                                                    }
                                                    ?>
                                                </option>
                                                <option value="1">Pulang sehat</option>
                                                <option value="2">Rawat jalan</option>
                                                <option value="3">Pemeriksaan berkala</option>
                                                <option value="4">Rujukan</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="terapi" class="form-label">Terapi</label>
                                            <select class="form-select" name="terapi">
                                                <option value="<?= $dd['terapi']; ?>" hidden>
                                                    <?php
                                                        if ($dd['terapi'] == '1') {
                                                            echo "Obat";
                                                        } else {
                                                            echo "Tindak";
                                                        }
                                                        ?>
                                                </option>
                                                <option value="1">Obat</option>
                                                <option value="2">Tindak</option>
                                            </select>
                                        </div>
                                    </div>

                                    <hr class="my-4">

                                    <button class="w-100 btn btn-primary btn-lg" type="submit" name="rmsubmit">Update Data Rekam Medis</button>
                                </form>
                            </div>
                        </div>
                <?php
                    endforeach;
                }
                ?>
            </main>
        </div>
    </div>
</body>

</html>