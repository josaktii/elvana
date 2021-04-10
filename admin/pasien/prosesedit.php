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

    $qpa=$connect->query("UPDATE pasien SET nm_pasien = '$nmpas', jen_kelamin = '$jk', jalur = '$jalur', alamatp = '$almt', tempat_lahirp = '$tmpas', tgl_lahirp = '$tgpas', telp_pasien = '$nopas', tgl_daftar = '$tgdaf' WHERE id_pasien = '$idpa'");

    if ($qpa) {
        echo "<script>alert('Data pasien berhasil diubah'); window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data pasien gagal diubah'); window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
?>