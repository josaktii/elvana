<?php

include_once('../../config/connect.php');

if (isset($_POST['pasubmit'])) {
    $idpa = $_POST['idpa'];
    $nmpas = $_POST['nmpasien'];
    $tmpas = $_POST['tmptpasien'];
    $tgpas = $_POST['tglpasien'];
    $nopas = $_POST['notlpp'];
    $jk = $_POST['jkel'];
    $jalur = $_POST['jalur'];
    $almt = $_POST['alamat'];
    $nik = $_POST['nik'];

    $tglSekarang  = new DateTime();
    $interlahir = date_diff(new DateTime($tgpas), $tglSekarang);

    $lahir = $interlahir->format("%R%a");

    if ($lahir >= 1) {
        $qpa = $connect->query("UPDATE pasien SET nm_pasien = '$nmpas', nik = '$nik', jen_kelamin = '$jk', jalur = '$jalur', alamatp = '$almt', tempat_lahirp = '$tmpas', tgl_lahirp = '$tgpas', telp_pasien = '$nopas' WHERE id_pasien = '$idpa'");

        if ($qpa) {
            echo "<script>window.location.href='data.php'</script>";
        } else {
            echo "<script>alert('Data tidak berhasil di ubah');window.location.href='data.php'</script>";
        }
    } else {
        echo "<script>alert('Input tanggal tidak valid'); window.location.href='edit.php?id=$idpa'</script>";
    }
} else {
    header('Location : data.php');
}
