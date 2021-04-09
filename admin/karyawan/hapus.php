<?php

include_once('../../config/connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $qu = $connect->query("DELETE FROM karyawan WHERE id_karyawan = '$id'");
    if ($qu) {
        echo "<script>alert('Data karyawan berhasil dihapus'); window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data karyawan gagal dihapus'); window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
?>