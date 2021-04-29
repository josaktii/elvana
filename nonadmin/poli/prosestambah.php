<?php

include_once('../../config/connect.php');

if (isset($_POST['psubmit'])) {
    $kdp = rand(99, 1000);
    $nmpoli = $_POST['nmpoli'];

    $qp=$connect->query("INSERT INTO poli VALUES ('$kdp', '$nmpoli')");

    if ($qp) {
        echo "<script>window.location.href='data.php'</script>";
    } else {
        echo "<script>window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
?>