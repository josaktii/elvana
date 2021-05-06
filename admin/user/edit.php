<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">

    <title>Fab Admin - Dashboard Fixed</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="../../style/bootstrap.min.css">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="../../style/bootstrap-extend.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../../style/master_style.css">

    <!-- Fab Admin skins -->
    <link rel="stylesheet" href="../../style/_all-skins.css">

</head>

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

        <?php include_once('navbar.php'); ?>

        <?php include_once('sidebar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    User
                    <small>Data</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="breadcrumb-item">User</li>
                    <li class="breadcrumb-item active">Tambah</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form tambah data User</h3>
                        <h6 class="box-subtitle">Form yang digunakan untuk menambah data User di Klinik RH Medika</h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <?php
                                require_once '../../config/connect.php';

                                if (isset($_GET['id'])) {
                                    $id = $_GET['id'];

                                    $q = $connect->query("SELECT * FROM user JOIN karyawan USING(id_karyawan) JOIN poli USING(kd_poli) WHERE id_user = '$id'");
                                    $qkp = $connect->query("SELECT * FROM poli");
                                    $qidk = $connect->query("SELECT * FROM karyawan");

                                    foreach ($q as $d) :
                                ?>
                                        <form method="POST" action="prosesedit.php">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <h5>Username <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" name="idu" value="<?= $d['id_user'] ?>" hidden>
                                                            <input type="text" class="form-control" name="uname" value="<?= $d['username'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <h5>Password <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="password" class="form-control" name="upass" value="<?= $d['password'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <h5>Hak Akses <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-control" name="uaccess">
                                                                <option value="<?= $d['access'] ?>" hidden>
                                                                    <?php
                                                                    if ($d['access'] == 1) {
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
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <h5>Karyawan <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="idkarya" class="form-control" id="">
                                                                <option value="<?= $d['id_karyawan']; ?>" hidden><?= $d['nm_karyawan']; ?></option>
                                                                <?php
                                                                while ($didk = $qidk->fetch_assoc()) :
                                                                ?>
                                                                    <option value="<?= $didk['id_karyawan']; ?>"><?= $didk['nm_karyawan']; ?></option>
                                                                <?php endwhile; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <h5>Poli <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="kdpol" class="form-control" id="">
                                                                <option value="<?= $d['kd_poli']; ?>" hidden><?= $d['nm_poli']; ?></option>
                                                                <?php
                                                                while ($dkp = $qkp->fetch_assoc()) :
                                                                ?>
                                                                    <option value="<?= $dkp['kd_poli']; ?>"><?= $dkp['nm_poli']; ?></option>
                                                                <?php endwhile; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-xs-right">
                                                <button type="submit" class="btn btn-info" name="submit">Ubah</button>
                                                <a href="data.php" class="btn btn-danger">Kembali</a>
                                            </div>
                                        </form>
                                <?php
                                    endforeach;
                                }
                                ?>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            &copy; 2021 <a href="">Elvan Firdha Aldianto</a>. All Rights Reserved.
        </footer>
    </div>

    <script src="../../js/jquery.min.js"></script>

    <!-- popper -->
    <script src="../../js/popper.min.js"></script>

    <!-- Bootstrap 4.0-->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- FastClick -->
    <script src="../../js/fastclick.js"></script>

    <!-- Fab Admin App -->
    <script src="../../js/template.js"></script>
    <script src="../../js/validation.js"></script>
    <script>
        ! function(window, document, $) {
            "use strict";
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
        }(window, document, jQuery);
    </script>

</body>

</html>