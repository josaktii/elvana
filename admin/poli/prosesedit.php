<?php

include_once('../../config/connect.php');

if (isset($_POST['psubmit'])) {
    $kdp = $_POST['kdp'];
    $nmpoli = $_POST['nmpoli'];

    $qp=$connect->query("UPDATE poli SET nm_poli = '$nmpoli' WHERE kd_poli = '$kdp'");

    if ($qp) {
        echo "<script>alert('Data poli berhasil diubah'); window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data poli gagal diubah'); window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
?>