<?php

include_once('../../config/connect.php');

if (isset($_POST['pasubmit'])) {
    $nmpas = $_POST['nmpasien'];
    $tmpas = $_POST['tmptpasien'];
    $tgpas = $_POST['tglpasien'];
    $nopas = $_POST['notlpp'];
    $jk = $_POST['jkel'];
    $jalur = $_POST['jalur'];
    $almt = $_POST['alamat'];
    $rand = rand(0, 999999999);

    $tglSekarang = new DateTime();
    $tglnow = date('Y-m-d');
    $interlahir = date_diff(new DateTime($tgpas), $tglSekarang);

    $lahir = $interlahir->format("%R%a");

    if ($lahir >= 1) {
        $qk = $connect->query("INSERT INTO pasien VALUES ('$rand', '$nmpas', '$jk', '$jalur', '$almt', '$tmpas','$tgpas', '$nopas', '$tglnow')");

        if ($qk) {
            echo "<script>alert('Data pasien berhasil ditambah'); window.location.href='data.php'</script>";
        } else {
            echo "<script>alert('Data pasien gagal ditambah'); window.location.href='data.php'</script>";
        }
    } else {
        echo "<script>alert('Input tanggal anda tidak valid'); window.location.href='tambah.php'</script>";
    }
} else {
    header('Location : data.php');
}
