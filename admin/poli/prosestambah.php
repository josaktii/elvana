<?php

include_once('../../config/connect.php');

if (isset($_POST['psubmit'])) {
    $kdp = $_POST['kdp'];
    $nmpoli = $_POST['nmpoli'];

    $qp=$connect->query("INSERT INTO poli VALUES ('$kdp', '$nmpoli')");

    if ($qp) {
        echo "<script>alert('Data poli berhasil ditambahkan'); window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data poli gagal ditambahkan'); window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
?>