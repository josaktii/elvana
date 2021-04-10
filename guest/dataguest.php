<?php require_once '../config/connect.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Rekam Medis</title>
    <link href="../style/bootstrap.css" rel="stylesheet">
    <link href="../style/dashboard.css" rel="stylesheet">
</head>

<body>
    <?php
    if (isset($_POST['csubmit'])) {
        $idcar = $_POST['idpas'];

        $q = $connect->query("SELECT * FROM rm WHERE id_pasien = '$idcar'");
        $data = mysqli_fetch_assoc($q);
        if ($data == TRUE) {
            while ($data) :
    ?>
                <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
                    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="data.php">Guest</a>
                    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <ul class="navbar-nav px-3">
                        <li class="nav-item text-nowrap">
                            <a class="btn btn-danger mx-0" href="../index.php">Kembali</a>
                        </li>
                    </ul>
                </header>
                <div class="container-fluid">
                    <div class="row">
                        <main class="col-md-8 mx-auto col-lg-10 px-md-4">
                            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                <h1 class="h1">Rekam Medis</h1>
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><?= $data['kd_rekammedis'] ?></td>
                                                            <td><?= $data['id_pasien'] ?></td>
                                                            <td><?= $data['id_dokter'] ?></td>
                                                            <td><?= $data['tinggi_badan'] ?></td>
                                                            <td><?= $data['berat_badan'] ?></td>
                                                            <td><?= $data['tensi'] ?></td>
                                                            <td><?= $data['anamnesa'] ?></td>
                                                            <td><?= $data['diagnose'] ?></td>
                                                            <td><?= $data['tindak_lanjut'] ?></td>
                                                            <td><?= $data['terapi'] ?></td>
                                                            <td><?= $data['id_karyawan'] ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </main>
                    </div>
                </div>
    <?php
                break;
            endwhile;
        } else {
            header("location:view.php?pesan=gagal");
        }
    }
    ?>
</body>

</html>