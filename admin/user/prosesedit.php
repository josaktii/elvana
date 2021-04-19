<?php

include_once('../../config/connect.php');

if (isset($_POST['usubmit'])) {
    $idu = $_POST['idu'];
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];
    $uaccess = $_POST['uaccess'];
    $idkarya = $_POST['idkarya'];

    $qu=$connect->query("UPDATE user SET username = '$uname', password = '$upass', access = '$uaccess', id_karyawan = '$idkarya' WHERE id_user = '$idu'");

    if ($qu) {
        echo "<script>alert('Data user berhasil diubah'); window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data user gagal diubah'); window.location.href='data.php'</script>";
        // echo "Error :".$qk."<br>".mysqli_error($connect);
    }
} else {
    header('Location : data.php');
}
?>