<?php

include_once('../../config/connect.php');

if (isset($_POST['dsubmit'])) {
    $idd = $_POST['idd'];
    $nmdokter = $_POST['nmdokter'];
    $tmd = $_POST['tmptdokter'];
    $tgd = $_POST['tgldokter'];
    $kdp = $_POST['kdpoli'];
    $sip = $_POST['sip'];
    $notelp = $_POST['notlpd'];
    $almt = $_POST['alamat'];

    $qd=$connect->query("UPDATE dokter SET kd_poli = '$kdp', nm_dokter = '$nmdokter', sip = '$sip', tempat_lahird = '$tmd', tgl_lahird = '$tgd', telp_dokter = '$notelp', alamatd = '$almt' WHERE id_dokter = '$idd'");

    if ($qd) {
        echo "<script>alert('Data dokter berhasil diubah'); window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data dokter gagal diubah'); window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
?>