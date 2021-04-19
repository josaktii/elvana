<?php

include_once('../../config/connect.php');

if (isset($_POST['pasubmit'])) {
    $nmpas = $_POST['nmpasien'];
    $tmpas = $_POST['tmptpasien'];
    $tgpas = $_POST['tglpasien'];
    $tgdaf = $_POST['tgldaftar'];
    $nopas = $_POST['notlpp'];
    $jk = $_POST['jkel'];
    $jalur = $_POST['jalur'];
    $almt = $_POST['alamat'];
    $rand = rand(0,999999999);


    $tglSekarang  = new DateTime();
    $interlahir = date_diff(new DateTime($tgpas), $tglSekarang);
    $interdaftar = date_diff(new DateTime($tgdaf), $tglSekarang);

    $lahir = $interlahir->format("%R%a");
    $daftar = $interdaftar->format("%R%a");

    if ($lahir >= 1 && $daftar >= 1) {
        if ($lahir >= $daftar) {
            $qk=$connect->query("INSERT INTO pasien VALUES ('$rand', '$nmpas', '$jk', '$jalur', '$almt', '$tmpas','$tgpas', '$nopas', '$tgdaf')");

            if ($qk) {
                echo "<script>alert('Data pasien berhasil ditambah'); window.location.href='data.php'</script>";
            } else {
                echo "<script>alert('Data pasien gagal ditambah'); window.location.href='data.php'</script>";
            }
        } else {
            echo "<script>alert('Input kembali tanggal anda dengan benar'); window.location.href='edit.php?id=$idpa'</script>";
        }
    } else {
        echo "<script>alert('Input kembali tanggal anda dengan benar'); window.location.href='edit.php?id=$idpa'</script>";
    }
} else {
    header('Location : data.php');
}
?>