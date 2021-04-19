<?php

include_once('../../config/connect.php');

if (isset($_POST['dsubmit'])) {
    $nmdokter = $_POST['nmdokter'];
    $tmd = $_POST['tmptdokter'];
    $tgd = $_POST['tgldokter'];
    $kdp = $_POST['kdpoli'];
    $sip = $_POST['sip'];
    $notelp = $_POST['notlpd'];
    $almt = $_POST['alamat'];


    $tglSekarang  = new DateTime();
    $interval = date_diff(new DateTime($tgd), $tglSekarang);

    $intervalHari = $interval->format("%R%a");

    if ($intervalHari >= 7304) {
        // echo $intervalHari;
        $qd=$connect->query("INSERT INTO dokter VALUES (NULL, '$kdp', '$nmdokter', '$sip', '$tmd', '$tgd','$notelp', '$almt')");

        if ($qd) {
            echo "<script>alert('Data dokter berhasil diubah'); window.location.href='data.php'</script>";
        } else {
            echo "<script>alert('Data dokter gagal diubah'); window.location.href='data.php'</script>";
        }
    } elseif ($intervalHari < 1) {
        echo "<script>alert('Tidak mungkin anda lahir pada tanggal ini'); window.location.href='tambah.php'</script>";
    } else {
        echo "<script>alert('Anda terlalu muda untuk menjadi dokter'); window.location.href='tambah.php'</script>";
        // echo $intervalHari;
        // echo "Gagal";
    }
} else {
    header('Location : data.php');
}
?>