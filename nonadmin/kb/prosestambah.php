<?php
session_start();
include_once('../../config/connect.php');

if (isset($_POST['submit'])) {
    $kdk = $_POST['kdkb'];
    $idp = $_POST['idpasien'];
    $kdpoli = $_SESSION['poli'];
    $status = $_POST['status'];

    $tglnow = date('Y-m-d');

    $qd = $connect->query("INSERT INTO kb VALUES (NULL, '$idp', '$kdpoli', '$tglnow', '$status')");

    if ($qd) {
        echo "<script>alert('Data kunjungan berhasil ditambahkan'); window.location.href='data.php'</script>";
    } else {
        // echo "<script>alert('Data kunjungan gagal ditambahkan'); window.location.href='data.php'</script>";
        echo "Error :".$qd."<br>".mysqli_error($connect);
    }
} else {
    header('Location : data.php');
}
