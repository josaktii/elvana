<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Kunjungan</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/master_style.css">
    
</head>

<body class="hold-transition">
    <div class="wrapper">
        <section class="content">
            <div class="row">

                <div class="col-12">
                    <div class="col-lg-6">
                        <div class="info-box">
                            <div class="info-box-content">
                                <span class="info-box-icon bg-success rounded"><i class="fa fa-wheelchair"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-number">Kartu Berobat</span>
                                    <span class="info-box-text">Pasien</span>
                                </div>
                            </div>
                            <hr>
                            <div class="box-content">
                                <div class="row">
                                    <?php
                                    include_once('connect.php');

                                    $id = $_GET['id'];

                                    $qpa = $connect->query("SELECT * FROM pasien WHERE id_pasien = '$id'");
                                    $dpa = $qpa->fetch_assoc();

                                    $idpas = $dpa['id_pasien'];
                                    $nama = $dpa['nm_pasien'];
                                    $tgl = $dpa['tgl_lahirp'];
                                    ?>
                                    <div class="col-5 mx-auto">
                                        <span class="info-box-number">ID</span>
                                        <span class="info-box-text">
                                            <p class="">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $idpas ?></p>
                                        </span>
                                        <span class="info-box-number">Nama</span>
                                        <span class="info-box-text">
                                            <p class="">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $nama ?></p>
                                        </span>
                                        <span class="info-box-number">Tanggal Lahir</span>
                                        <span class="info-box-text">
                                            <p class="">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tgl ?></p>
                                        </span>
                                    </div>
                                    <div class="col-3 brrah mx-auto">
                                    &nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>