<?php

include_once('../../config/connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $qu = $connect->query("DELETE FROM user WHERE id_user = '$id'");
    if ($qu) {
        echo "<script>alert('Data user berhasil dihapus'); window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data user gagal dihapus'); window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
?>


<!-- <!doctype html>
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

    </?php include_once('../navbar.php'); ?>

    <div class="container-fluid">
        <div class="row">
            </?php include_once('../sidebar.php'); ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a href="tambah.php" class="btn btn-lg btn-primary">Tambah</a>
                    </div>
                </div>


                
            </main>
        </div>
    </div>
</body>

</html> -->