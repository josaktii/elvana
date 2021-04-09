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
                    <h1 class="h2">Edit Data Pengguna</h1>
                </div>

                <?php
                require_once '../../config/connect.php';

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];

                    $qk = $connect->query("SELECT * FROM karyawan WHERE id_karyawan = '$id'");

                    foreach ($qk as $dk) :
                ?>

                        <div class="px-5 col-lg-8 mx-auto my-5 bg-light rounded-3">
                            <div class="container-fluid py-5">
                                <form method="POST" action="prosesedit.php">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="idk" value="<?= $dk['id_karyawan'] ?>" hidden>
                                            <label for="nmkarya" class="form-label">Nama karyawan</label>
                                            <input type="text" class="form-control" name="nmkarya" value="<?= $dk['nm_karyawan']; ?>" required>
                                        </div>

                                        <div class="col-12">
                                            <label for="tmptkarya" class="form-label">Tempat lahir karyawan</label>
                                            <input type="password" class="form-control" name="tmptkarya" value="<?= $dk['tempat_lahirk']; ?>" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="jabat" class="form-label">Jabatan</label>
                                            <select class="form-select" name="jabat" required>
                                                <option value="" hidden><?= $dk['jabatan']; ?></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="tglkarya" class="form-label">Tanggal lahir karyawan</label>
                                            <input type="date" class="form-control" name="tglkarya" value="<?= $dk['tgl_lahirk']; ?>">
                                        </div>
                                    </div>

                                    <hr class="my-4">

                                    <button class="w-100 btn btn-primary btn-lg" type="submit" name="usubmit">Update Data Karyawan</button>
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