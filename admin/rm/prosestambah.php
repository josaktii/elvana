<?php

include_once('../../config/connect.php');

if (isset($_POST['rmsubmit'])) {
    $idp = $_POST['idpasien'];
    $idd = $_POST['iddokter'];
    $tb = $_POST['tb'];
    $bb = $_POST['bb'];
    $tensi = $_POST['tensi'];
    $anam = $_POST['anamnesa'];
    $diag = $_POST['diagnose'];
    $tindak = $_POST['tindak'];
    $terapi = $_POST['terapi'];
    $idk = $_POST['idkarya'];

    if ($tb > 0 && $bb > 0) {
        $qd = $connect->query("INSERT INTO rm VALUES (NULL, '$idp', '$idd', '$tb', '$bb', '$tensi','$anam', '$diag', '$tindak','$terapi', '$idk')");

        if ($qd) {
            echo "<script>alert('Data rekam medis berhasil ditambahkan'); window.location.href='data.php'</script>";
        } else {
            echo "<script>alert('Data rekam medis gagal ditambahkan'); window.location.href='data.php'</script>";
            // echo "Error :".$qd."<br>".mysqli_error($connect);
        }
    } else {
        echo "<script>alert('Input data tidak valid'); window.location.href='tambah.php'</script>";
    }
} else {
    header('Location : data.php');
}
