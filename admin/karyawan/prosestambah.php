<?php

include_once('../../config/connect.php');

if (isset($_POST['submit'])) {
    $nmkarya = $_POST['nmkarya'];
    $tmpt = $_POST['tmptkarya'];
    $tgl = $_POST['tglkarya'];
    $jabat = $_POST['jabat'];

    $tglSekarang  = new DateTime();
    $interval = date_diff(new DateTime($tgl), $tglSekarang);

    $intervalHari = $interval->format("%R%a");

    if ($intervalHari >= 6209) {
        $qk = $connect->query("INSERT INTO karyawan VALUES (NULL, '$jabat', '$nmkarya', '$tmpt', '$tgl')");

        if ($qk) {
            echo "<script>window.location.href='data.php'</script>";
        } else {
            echo "<script>window.location.href='data.php'</script>";
        }
    } elseif ($intervalHari < 1) {
        echo "<script>window.location.href='data.php'</script>";
    } else {
        echo "<script>window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
?>