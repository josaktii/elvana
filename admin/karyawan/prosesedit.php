<?php

include_once('../../config/connect.php');

if (isset($_POST['ksubmit'])) {
    $idk = $_POST['idk'];
    $nmkarya = $_POST['nmkarya'];
    $tmpt = $_POST['tmptkarya'];
    $tgl = $_POST['tglkarya'];
    $jabat = $_POST['jabat'];

    $qk=$connect->query("UPDATE karyawan SET jabatan = '$jabat', nm_karyawan = '$nmkarya', tempat_lahirk = '$tmpt', tgl_lahirk = '$tgl' WHERE id_karyawan = '$idk'");

    if ($qk) {
        echo "<script>alert('Data karyawan berhasil diubah'); window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data karyawan gagal diubah'); window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
?>