<?php

include_once('../../config/connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $qu = $connect->query("DELETE FROM poli WHERE kd_poli = '$id'");
    if ($qu) {
        echo "<script>alert('Data poli berhasil dihapus'); window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data poli gagal dihapus'); window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
?>