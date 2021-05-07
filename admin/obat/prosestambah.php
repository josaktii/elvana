<?php

include_once('../../config/connect.php');

if (isset($_POST['psubmit'])) {
    $kdp = rand(99, 1000);
    $nmObat = $_POST['nmobat'];

    $qp=$connect->query("INSERT INTO obat VALUES ('$kdp', '$nmObat')");

    if ($qp) {
        echo "<script>window.location.href='data.php'</script>";
    } else {
        echo "<script>window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
?>