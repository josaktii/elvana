<?php

include_once('../../config/connect.php');

if (isset($_POST['dsubmit'])) {
    $nmdokter = $_POST['nmdokter'];
    $tmd = $_POST['tmptdokter'];
    $tgd = $_POST['tgldokter'];
    $kdp = $_POST['kdpoli'];
    $sip = $_POST['sip'];
    $notelp = $_POST['notlpd'];
    $almt = $_POST['alamat'];

    $qd=$connect->query("INSERT INTO dokter VALUES (NULL, '$kdp', '$nmdokter', '$sip', '$tmd', '$tgd','$notelp', '$almt')");

    if ($qd) {
        echo "<script>alert('Data pasien berhasil ditambahkan'); window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data pasien gagal ditambahkan'); window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
?>