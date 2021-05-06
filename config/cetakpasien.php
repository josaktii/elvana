<?php include('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">

    <title>Data Pasien Berobat</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
</head>

<body class="hold-transition">
    <div class="wrapper">
        <section class="content">
            <div class="row">

                <div class="col-12">

                    <div class="box">
                        <table class="text-center mx-auto">
                            <tr>
                                <th rowspan="3"><img src="../assets/images/logo.jpg" style="width: 100px;" alt="" srcset=""></th>
                                <th>
                                    <h3>PEMERINTAH KOTA BANJAR BARU</h3>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <h3>DINAS PEMUDA OLAHRAGA KEBUDAYAAN DAN PARIWISATA</h3>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat: Jl. A.Yani Km 33,5 No.28 Kel. Loktabat Selatan Banjarbaru 70712 Telp/Fax. (0511) 4772335</td>
                            </tr>
                        </table>
                        <hr>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example2" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                    <thead>
                                        <tr>
                                            <th>Number</th>
                                            <th>ID Pasien</th>
                                            <th>Kode Registrasi</th>
                                            <th>Nama Pasien</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Tanggal Daftar</th>
                                            <th>No Telepon</th>
                                            <th>Jenis Kelamin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($_GET['submit'])) {
                                            $thn = $_GET['tahun'];
                                            $bln = $_GET['bulan'];
                                            $q = $connect->query("SELECT * FROM pasien WHERE YEAR(tgl_daftar)='$thn' AND MONTH(tgl_daftar) = '$bln'");
                                            $no = 1;
                                            foreach ($q as $dpa) :
                                        ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $dpa['id_pasien'] ?></td>
                                                    <td><?= $dpa['kd_registrasi'] ?></td>
                                                    <td><?= $dpa['nm_pasien'] ?></td>
                                                    <td><?= $dpa['tempat_lahirp'] ?></td>
                                                    <td><?= $dpa['tgl_lahirp'] ?></td>
                                                    <td><?= $dpa['tgl_daftar'] ?></td>
                                                    <td><?= $dpa['telp_pasien'] ?></td>
                                                    <td>
                                                        <?php
                                                        if ($dpa['jen_kelamin'] == '2') {
                                                            echo "Laki-laki";
                                                        } else {
                                                            echo "Perempuan";
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                        <?php
                                                $no++;
                                            endforeach;
                                        } ?>
                                    </tbody>
                                </table>
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