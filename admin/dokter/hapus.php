<?php

include_once('../../config/connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $qd = $connect->query("DELETE FROM dokter WHERE id_dokter = '$id'");
    if ($qd) {
        echo "<script>alert('Data dokter berhasil dihapus'); window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data dokter gagal dihapus'); window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
?>