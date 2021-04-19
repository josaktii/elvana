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
                    <h1 class="h2">Edit Data Pasien</h1>
                </div>

                <?php
                require_once '../../config/connect.php';

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];

                    $qpa = $connect->query("SELECT * FROM pasien WHERE id_pasien = '$id'");

                    foreach ($qpa as $dpa) :
                ?>

                        <div class="px-5 col-lg-8 mx-auto my-5 bg-light rounded-3">
                            <div class="container-fluid py-5">
                                <form method="POST" action="prosesedit.php">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="idpa" value="<?= $dpa['id_pasien'] ?>" hidden>
                                            <label for="nmpasien" class="form-label">Nama pasien</label>
                                            <input type="text" class="form-control" name="nmpasien" value="<?= $dpa['nm_pasien']; ?>">
                                        </div>

                                        <div class="col-12">
                                            <label for="tmptpasien" class="form-label">Tempat lahir</label>
                                            <input type="text" class="form-control" name="tmptpasien" value="<?= $dpa['tempat_lahirp']; ?>">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="tglpasien" class="form-label">Tanggal lahir</label>
                                            <input type="date" class="form-control" name="tglpasien" value="<?= $dpa['tgl_lahirp']; ?>">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="tgldaftar" class="form-label">Tanggal daftar</label>
                                            <input type="date" class="form-control" name="tgldaftar" value="<?= $dpa['tgl_daftar']; ?>">
                                        </div>

                                        <div class="col-12">
                                            <label for="notlpp" class="form-label">No. Telepon</label>
                                            <input type="text" class="form-control" name="notlpp" value="<?= $dpa['telp_pasien']; ?>">
                                        </div>

                                        <div class="col-6">
                                            <label for="jkel" class="form-label">Jenis Kelamin</label>
                                            <select class="form-select" name="jkel">
                                                <option value="<?= $dpa['jen_kelamin']; ?>" hidden>
                                                    <?php
                                                    if ($dpa['jen_kelamin'] == '2') {
                                                        echo "Laki-laki";
                                                    } else {
                                                        echo "Perempuan";
                                                    }
                                                    ?>
                                                </option>
                                                <option value="1">Perempuan</option>
                                                <option value="2">Laki-laki</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="jalur" class="form-label">Jalur</label>
                                            <select class="form-select" name="jalur">
                                                <option value="<?= $dpa['jalur']; ?>" hidden>
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
                                                </option>
                                                <option value="1">Mandiri</option>
                                                <option value="2">BPJS</option>
                                                <option value="3">Inhealth</option>
                                                <option value="4">Buma</option>
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea name="alamat" class="form-control"><?= $dpa['alamatp']; ?></textarea>
                                        </div>

                                    </div>

                                    <hr class="my-4">

                                    <button class="w-100 btn btn-primary btn-lg" type="submit" name="pasubmit">Update Data Pasien</button>
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