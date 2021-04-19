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
                                    <label for="nmpasien" class="form-label">Nama pasien</label>
                                    <input type="text" class="form-control" name="nmpasien" placeholder="Nama pasien" required>
                                </div>

                                <div class="col-12">
                                    <label for="tmptpasien" class="form-label">Tempat lahir</label>
                                    <input type="text" class="form-control" name="tmptpasien" placeholder="Tempat lahir pasien" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="tglpasien" class="form-label">Tanggal lahir</label>
                                    <input type="date" class="form-control" name="tglpasien">
                                </div>

                                <div class="col-md-6">
                                    <label for="tgldaftar" class="form-label">Tanggal daftar</label>
                                    <input type="date" class="form-control" name="tgldaftar">
                                </div>

                                <div class="col-12">
                                    <label for="notlpp" class="form-label">No. Telepon</label>
                                    <input type="text" class="form-control" name="notlpp" placeholder="Nomor telepon pasien">
                                </div>

                                <div class="col-6">
                                    <label for="notlpp" class="form-label">Jenis Kelamin</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input type="radio" class="form-check-input mt-0 mx-2" name="jkel" value="1">Laki - laki
                                        </div>
                                        <div class="input-group-text">
                                            <input type="radio" class="form-check-input mt-0 mx-2" name="jkel" value="2">Perempuan
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="jalur" class="form-label">Jalur</label>
                                    <select class="form-select" name="jalur" required>
                                        <option value="" hidden>Pilih jalur</option>
                                        <option value="1">Mandiri</option>
                                        <option value="2">BPJS</option>
                                        <option value="3">Inhealth</option>
                                        <option value="4">Buma</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="notlpp" class="form-label">Alamat</label>
                                    <textarea name="alamat" class="form-control" placeholder="Alamat pasien"></textarea>
                                </div>

                            </div>

                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit" name="pasubmit">Tambah Data Pasien</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>