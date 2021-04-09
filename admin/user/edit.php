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

                    $qu = $connect->query("SELECT * FROM user WHERE id_user = '$id'");

                    foreach ($qu as $du) :
                ?>

                        <div class="px-5 col-lg-8 mx-auto my-5 bg-light rounded-3">
                            <div class="container-fluid py-5">
                                <form method="POST" action="prosesedit.php">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" name="idu" value="<?= $du['id_user'] ?>" hidden>
                                            <input type="text" class="form-control" name="uname" value="<?= $du['username'] ?>">
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="upass" value="<?= $du['password'] ?>">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="access" class="form-label">Access</label>
                                            <select class="form-select" name="uaccess">
                                                <option value="" hidden>
                                                    <?php
                                                    if ($du['access'] == 1) {
                                                        echo 'Admin';
                                                    } else {
                                                        echo 'Karyawan';
                                                    }
                                                    ?>
                                                </option>
                                                <option value="1">Admin</option>
                                                <option value="2">Karyawan</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="idkarya" class="form-label">ID Karyawan</label>
                                            <input type="number" class="form-control" name="idkarya" value="<?= $du['id_karyawan'] ?>">
                                        </div>
                                    </div>

                                    <hr class="my-4">

                                    <button class="w-100 btn btn-primary btn-lg" type="submit" name="usubmit">Update Data Pengguna Baru</button>
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