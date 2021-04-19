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
                                <div class="col-12">
                                    <label for="nmdokter" class="form-label">Nama dokter</label>
                                    <input type="text" class="form-control" name="nmdokter" placeholder="Nama dokter">
                                </div>

                                <div class="col-12">
                                    <label for="tmptdokter" class="form-label">Tempat lahir</label>
                                    <input type="text" class="form-control" name="tmptdokter" placeholder="Tempat lahir">
                                </div>

                                <div class="col-md-4">
                                    <label for="tgldokter" class="form-label">Tanggal lahir</label>
                                    <input type="date" class="form-control" name="tgldokter">
                                </div>

                                <div class="col-4">
                                    <?php
                                    $qkdp = $connect->query("SELECT * FROM poli"); ?>
                                    <label for="kdpoli" class="form-label">Nama Poli</label>
                                    <select name="kdpoli" class="form-select" id="">
                                        <option hidden>Pilih Poli</option>
                                        <?php
                                        while ($dkdp = $qkdp->fetch_assoc()) :
                                        ?>
                                            <option value="<?= $dkdp['kd_poli']; ?>"><?= $dkdp['nm_poli']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>

                                <div class="col-4">
                                    <label for="sip" class="form-label">Sip</label>
                                    <input type="text" class="form-control" name="sip" placeholder="Sip kerja dokter">
                                </div>

                                <div class="col-12">
                                    <label for="notlpd" class="form-label">No. Telepon</label>
                                    <input type="text" class="form-control" name="notlpd" placeholder="Nomor telepon">
                                </div>

                                <div class="col-12">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea name="alamat" class="form-control" placeholder="Alamat dokter"></textarea>
                                </div>

                            </div>

                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit" name="dsubmit">Tambah Data Dokter</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>