<?php

include_once('../../config/connect.php');

if (isset($_POST['submit'])) {
    $kdk = $_POST['kdkb'];
    $idp = $_POST['idpasien'];
    $kdpoli = $_POST['kdpoli'];

    $qd = $connect->query("UPDATE kb SET id_pasien = '$idp', kd_poli = '$kdpoli' WHERE kd_kunjungan = '$kdk'");

    if ($qd) {
        echo "<script>alert('Data kunjungan berhasil diubah'); window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data kunjungan gagal diubah'); window.location.href='data.php'</script>";
        // echo "Error :".$qd."<br>".mysqli_error($connect);
    }
} else {
    header('Location : data.php');
}
