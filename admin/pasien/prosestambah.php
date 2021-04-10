<?php

include_once('../../config/connect.php');

if (isset($_POST['pasubmit'])) {
    $nmpas = $_POST['nmpasien'];
    $tmpas = $_POST['tmptpasien'];
    $tgpas = $_POST['tglpasien'];
    $tgdaf = $_POST['tgldaftar'];
    $nopas = $_POST['notlpp'];
    $jk = $_POST['jkel'];
    $jalur = $_POST['jalur'];
    $almt = $_POST['alamat'];

    $qk=$connect->query("INSERT INTO pasien VALUES (NULL, '$nmpas', '$jk', '$jalur', '$almt', '$tmpas','$tgpas', '$nopas', '$tgdaf')");

    if ($qk) {
        echo "<script>alert('Data pasien berhasil ditambahkan'); window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data pasien gagal ditambahkan'); window.location.href='data.php'</script>";
        // echo "Error :".$qk."<br>".mysqli_error($connect);
    }
} else {
    header('Location : data.php');
}
?>