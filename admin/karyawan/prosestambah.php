<?php

include_once('../../config/connect.php');

if (isset($_POST['usubmit'])) {
    $nmkarya = $_POST['nmkarya'];
    $tmpt = $_POST['tmptkarya'];
    $tgl = $_POST['tglkarya'];
    $jabat = $_POST['jabat'];

    $qk=$connect->query("INSERT INTO karyawan VALUES (NULL, '$jabat', '$nmkarya', '$tmpt', '$tgl')");

    if ($qk) {
        echo "<script>alert('Data karyawan berhasil ditambahkan'); window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data karyawan gagal ditambahkan'); window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
?>