<?php

include_once('../../config/connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $qd = $connect->query("DELETE FROM rm WHERE kd_rekammedis = '$id'");
    if ($qd) {
        echo "<script>alert('Data rekam medis berhasil dihapus'); window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data rekam medis gagal dihapus'); window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
?>