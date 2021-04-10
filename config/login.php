<?php
session_start();

include 'connect.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$ql = $connect->query("SELECT * FROM user WHERE username = '$user' and password = '$pass'");
$check = mysqli_num_rows($ql);

if ($check > 0) {
    $data = mysqli_fetch_assoc($ql);

    if ($data['access'] == 1) {
        $_SESSION['username'] = $user;
        $_SESSION['status'] = "login";
        header("location:../admin/dashboard.php");
    } else if ($data['access'] == "2") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:../nonadmin/home.php");
    } else {
        header("location:../login.php?pesan=gagal");
    }
} else {
    header("location:../login.php?pesan=gagal");
}

?>