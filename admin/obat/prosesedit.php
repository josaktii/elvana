<?php

include_once('../../config/connect.php');

if (isset($_POST['psubmit'])) {
    $kdp = $_POST['kdp'];
    $nmObat = $_POST['nmobat'];

    $qp=$connect->query("UPDATE obat SET nm_obat = '$nmObat' WHERE kd_obat = '$kdp'");

    if ($qp) {
        echo "<script>window.location.href='data.php'</script>";
    } else {
        echo "<script>window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
?>