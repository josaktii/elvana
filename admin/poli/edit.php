<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Poli</title>
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
                    <h1 class="h2">Edit Data Poli</h1>
                </div>

                <?php
                require_once '../../config/connect.php';

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];

                    $qp = $connect->query("SELECT * FROM poli WHERE kd_poli = '$id'");

                    foreach ($qp as $dp) :
                ?>

                        <div class="px-5 col-lg-8 mx-auto my-5 bg-light rounded-3">
                            <div class="container-fluid py-5">
                                <form method="POST" action="prosesedit.php">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="kdp" class="form-label">Kode Poli</label>
                                            <input type="number" class="form-control" name="kdp" value="<?= $dp['kd_poli'] ?>" require>
                                        </div>
                                        <div class="col-12">
                                            <label for="nmpoli" class="form-label">Nama Poli</label>
                                            <input type="text" class="form-control" name="nmpoli" value="<?= $dp['nm_poli']; ?>" required>
                                        </div>
                                    </div>

                                    <hr class="my-4">

                                    <button class="w-100 btn btn-primary btn-lg" type="submit" name="psubmit">Update Data Poli</button>
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