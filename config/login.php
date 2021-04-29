<?php
session_start();

include_once('connect.php');

$user = $_POST['username'];
$pass = $_POST['password'];

$ql = $connect->query("SELECT * FROM user JOIN poli USING(kd_poli) WHERE username = '$user' and password = '$pass'");

if ($ql->num_rows > 0) {
    $data = $ql->fetch_assoc();

    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['akses'] = $data['access'];
    $_SESSION['karyawan'] = $data['id_karyawan'];
    $_SESSION['poli'] = $data['kd_poli'];
    $_SESSION['namapoli'] = $data['nm_poli'];
    if ($_SESSION['akses'] = $data['access'] == 1 && $_SESSION['namapoli'] = $data['nm_poli'] == "klinik" || $_SESSION['akses'] = $data['access'] == 1 && $_SESSION['namapoli'] = $data['nm_poli'] == "Klinik" ) {
        $_SESSION['status'] = "login";
        header("location:../admin/dashboard.php");
        die;
    } else if ($_SESSION['akses'] = $data['access'] == "2") {
        $_SESSION['status'] = "login";
        header("location:../nonadmin/dashboard.php");
        die;
    } else {
        header("location:../login.php?pesan=gagal");
    }
} else {
    header("location:../login.php?pesan=gagal");
}

?>