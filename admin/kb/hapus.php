<?php

include_once('../../config/connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $qd = $connect->query("DELETE FROM kb WHERE kd_kunjungan = '$id'");
    if ($qd) {
        echo "<script>alert('Data kunjungan berhasil dihapus'); window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data kunjungan gagal dihapus'); window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
