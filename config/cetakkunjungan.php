<?php include('connect.php'); 
session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">

    <title>Data Kunjungan</title>
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
                                            <th>No.</th>
                                            <th>ID Pasien</th>
                                            <th>Nama Pasien</th>
                                            <th>Poli</th>
                                            <th>Tanggal Kunjungan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($_GET['submit'])) {
                                            $thn = $_GET['tahun'];
                                            $bln = $_GET['bulan'];
                                            $polis = $_SESSION['poli'];
                                            // echo $polis;
                                            if ($_SESSION['namapoli'] == 'klinik') {
                                                $q = $connect->query("SELECT * FROM kb JOIN pasien USING(id_pasien) JOIN poli USING(kd_poli) WHERE YEAR(tgl_kunjungan)='$thn' AND MONTH(tgl_kunjungan) = '$bln' ");
                                            } else {
                                                $q = $connect->query("SELECT * FROM kb JOIN pasien USING(id_pasien) JOIN poli USING(kd_poli) WHERE YEAR(tgl_kunjungan)='$thn' AND MONTH(tgl_kunjungan) = '$bln' AND kd_poli = '$polis' ");
                                            }
                                            $no = 1;
                                            foreach ($q as $d) :
                                        ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $d['id_pasien']; ?></td>
                                                    <td><?= $d['nm_pasien'] ?></td>
                                                    <td><?= $d['nm_poli'] ?></td>
                                                    <td><?= $d['tgl_kunjungan'] ?></td>
                                                    <td>
                                                        <?php
                                                        if ($d['status'] == '1') {
                                                            echo "Menunggu";
                                                        } elseif ($d['status'] == '2') {
                                                            echo "Tertangani";
                                                        } else {
                                                            echo "-";
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