<?php include('../../config/connect.php'); ?>

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

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="../../style/bootstrap.min.css">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="../../style/bootstrap-extend.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../../style/master_style.css">

    <!-- Fab Admin skins -->
    <link rel="stylesheet" href="../../style/_all-skins.css">
    <link rel="stylesheet" href="../../assets/datatable/datatables.min.css">

</head>

<body class="hold-transition skin-green sidebar-mini">
    <div class="container">
        <div class="form-panel" id="form1">
            <div class="row">
                <h4 class="mb"><i class="fa fa-angle-right"></i>Pointage des salaries monsuel</h4>
                <div class=" col-md-10 col-md-offset-1">
                    <div class="form-group col-md-3">
                        <label for="titre">year</label>
                    </div>
                    <div class="form-group col-md-5">
                        <select name="datep" id="annee" class="form-control">
                            <option>Pilih Tahun</option>
                                <option value="2021">2021</option>
                                <option value="2002">2002</option>
                        </select>
                    </div>
                </div>
                <div class=" col-md-10 col-md-offset-1">
                    <div class="form-group col-md-3">
                        <label for="titre">month</label>
                    </div>
                    <div class="form-group col-md-5">
                        <select name="datep" id="mois" class="form-control">
                            <option>Pilih Tahun</option>

                            <?php
                            $tglSekarang = new DateTime();
                            $monthnow = date('m');
                            $lowm = 1;
                            while ($lowm <= 12) {
                            ?>
                                <option value="<?= $lowm ?>"><?= $lowm ?></option>
                            <?php
                                $lowm++;
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-panel" id="form2">
            <div class="row">
                <table id="example6" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>ID Pasien</th>
                            <th>Nama Pasien</th>
                            <th>Poli</th>
                            <th>Tahun Kunjungan</th>
                            <th>Bulan Kunjungan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>ID Pasien</th>
                            <th>Nama Pasien</th>
                            <th>Poli</th>
                            <th>Tanggal Kunjungan</th>
                            <th>Tanggal Kunjungan</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $q = $connect->query("SELECT id_pasien, nm_pasien, nm_poli, status, MONTH(tgl_kunjungan) as bulan, YEAR(tgl_kunjungan) as tahun FROM kb JOIN pasien USING(id_pasien) JOIN poli USING(kd_poli)");
                        $no = 1;
                        foreach ($q as $d) :
                            $id = $d['id_pasien'];
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $d['id_pasien']; ?></td>
                                <td><?= $d['nm_pasien'] ?></td>
                                <td><?= $d['nm_poli'] ?></td>
                                <td><?= $d['tahun'] ?></td>
                                <td><?= $d['bulan'] ?></td>
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
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../assets/datatable/datatables.min.js"></script>
    <script src="../../js/data-table.js"></script>

    <!-- <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <script>
        $(document).ready(function() {
            var table = $('#example6').DataTable();

            // Event listener to the two range filtering inputs to redraw on input
            $('#mois, #annee').change(function() {
                table.draw();
            });

            $.fn.dataTable.ext.search.push(
                function(settings, data, dataIndex) {
                    var month = parseInt($('#mois').val(), 10);
                    var year = parseInt($('#annee').val(), 10);
                    var date = data[1].split('-');
                    if ((isNaN(year) && isNaN(month)) ||
                        (isNaN(month) && year == date[0]) ||
                        (date[1] == month && isNaN(year)) ||
                        (date[1] == month && year == date[0])
                    ) {
                        return true;
                    }
                    return false;
                }
            );
        });
    </script>
</body>

</html>