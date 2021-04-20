<?php

include_once('../../config/connect.php');

if (isset($_POST['ksubmit'])) {
    $idk = $_POST['idk'];
    $nmkarya = $_POST['nmkarya'];
    $tmpt = $_POST['tmptkarya'];
    $tgl = $_POST['tglkarya'];
    $jabat = $_POST['jabat'];

    $tglSekarang  = new DateTime();
    $interval = date_diff(new DateTime($tgl), $tglSekarang);

    $intervalHari = $interval->format("%R%a");

    if ($intervalHari >= 6209) {
        $qk = $connect->query("UPDATE karyawan SET jabatan = '$jabat', nm_karyawan = '$nmkarya', tempat_lahirk = '$tmpt', tgl_lahirk = '$tgl' WHERE id_karyawan = '$idk'");

        if ($qk) {
            echo "<script>alert('Data karyawan berhasil ditambahkan'); window.location.href='data.php'</script>";
        } else {
            echo "<script>alert('Data karyawan gagal ditambahkan'); window.location.href='data.php'</script>";
        }
    } elseif ($intervalHari < 1) {
        echo "<script>alert('Input tanggal tidak valid.'); window.location.href='edit.php?id=$idk'</script>";
    } else {
        echo "<script>alert('Input tanggal tidak valid.'); window.location.href='edit.php?id=$idk'</script>";
    }
} else {
    header('Location : data.php');
}
?>