<?php

include_once('../../config/connect.php');

if (isset($_POST['dsubmit'])) {
    $idd = $_POST['idd'];
    $nmdokter = $_POST['nmdokter'];
    $tmd = $_POST['tmptdokter'];
    $tgdo = new DateTime($_POST['tgldokter']);
    $tgd = $_POST['tgldokter'];
    $kdp = $_POST['kdpoli'];
    $sip = $_POST['sip'];
    $notelp = $_POST['notlpd'];
    $almt = $_POST['alamat'];


    $tglSekarang  = new DateTime();
    $interval = date_diff($tgdo, $tglSekarang);

    $intervalHari = $interval->format("%R%a");

    if ($intervalHari >= 7304) {
        // echo $intervalHari;
        $qd = $connect->query("UPDATE dokter SET kd_poli = '$kdp', nm_dokter = '$nmdokter', sip = '$sip', tempat_lahird = '$tmd', tgl_lahird = '$tgd', telp_dokter = '$notelp', alamatd = '$almt' WHERE id_dokter = '$idd'");

        if ($qd) {
            echo "<script>alert('Data dokter berhasil diubah'); window.location.href='data.php'</script>";
        } else {
            echo "<script>alert('Data dokter gagal diubah'); window.location.href='data.php'</script>";
        }
    } elseif ($intervalHari < 1) {
        echo "<script>alert('Tidak mungkin anda lahir pada tanggal ini'); window.location.href='edit.php?id=$idd'</script>";
    } else {
        echo "<script>alert('Anda terlalu muda untuk menjadi dokter'); window.location.href='edit.php?id=$idd'</script>";
        // echo $intervalHari;
        // echo "Gagal";
    }
} else {
    header('Location : data.php');
}
