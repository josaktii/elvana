<?php

include_once('../../config/connect.php');

if (isset($_POST['submit'])) {
    $kdrm = $_POST['kdrm'];
    $idp = $_POST['idpasien'];
    $idd = $_POST['iddokter'];
    $tb = $_POST['tb'];
    $bb = $_POST['bb'];
    $tensi = $_POST['tensi'];
    $anam = $_POST['anamnesa'];
    $diag = $_POST['diagnose'];
    $tindak = $_POST['tindak'];
    $terapi = $_POST['terapi'];
    $idk = $_POST['idkarya'];


    if ($tb > 0 && $bb > 0) {
        $qd = $connect->query("UPDATE rm SET id_pasien = '$idp', id_dokter = '$idd', tinggi_badan = '$tb', berat_badan = '$bb', tensi = '$tensi', anamnesa = '$anam', diagnose = '$diag', tindak_lanjut = '$tindak', terapi = '$terapi', id_karyawan = '$idk' WHERE kd_rekammedis = '$kdrm'");

        if ($qd) {
            echo "<script>alert('Data rekam medis berhasil diubah'); window.location.href='data.php'</script>";
        } else {
            echo "<script>alert('Data rekam medis gagal diubah'); window.location.href='data.php'</script>";
            // echo "Error :".$qd."<br>".mysqli_error($connect);
        }
    } else {
        echo "<script>alert('Input data tidak valid'); window.location.href='edit.php?id=$kdrm'</script>";
    }
} else {
    header('Location : data.php');
}
