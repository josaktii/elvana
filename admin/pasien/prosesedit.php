<?php

include_once('../../config/connect.php');

if (isset($_POST['pasubmit'])) {
    $idpa = $_POST['idpa'];
    $nmpas = $_POST['nmpasien'];
    $tmpas = $_POST['tmptpasien'];
    $tgpas = $_POST['tglpasien'];
    $tgdaf = $_POST['tgldaftar'];
    $nopas = $_POST['notlpp'];
    $jk = $_POST['jkel'];
    $jalur = $_POST['jalur'];
    $almt = $_POST['alamat'];

    $tglSekarang  = new DateTime();
    $interlahir = date_diff(new DateTime($tgpas), $tglSekarang);
    $interdaftar = date_diff(new DateTime($tgdaf), $tglSekarang);

    $lahir = $interlahir->format("%R%a");
    $daftar = $interdaftar->format("%R%a");

    if ($lahir >= 1 && $daftar >= 1) {
        if ($lahir >= $daftar) {
            $qpa = $connect->query("UPDATE pasien SET nm_pasien = '$nmpas', jen_kelamin = '$jk', jalur = '$jalur', alamatp = '$almt', tempat_lahirp = '$tmpas', tgl_lahirp = '$tgpas', telp_pasien = '$nopas', tgl_daftar = '$tgdaf' WHERE id_pasien = '$idpa'");

            if ($qpa) {
                echo "<script>alert('Data pasien berhasil diubah'); window.location.href='data.php'</script>";
            } else {
                echo "<script>alert('Data pasien gagal diubah'); window.location.href='data.php'</script>";
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
