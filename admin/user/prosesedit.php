<?php

include_once('../../config/connect.php');

if (isset($_POST['submit'])) {
    $idu = $_POST['idu'];
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];
    $uaccess = $_POST['uaccess'];
    $idkarya = $_POST['idkarya'];
    $kdpol = $_POST['kdpol'];
    $q = $connect->query("SELECT * FROM user JOIN karyawan USING(id_karyawan) WHERE id_karyawan = '$idkarya'");
    $d = $q->fetch_assoc();
    if ($d['id_karyawan'] == $idkarya) {
        $qu = $connect->query("UPDATE user SET username = '$uname', password = '$upass', access = '$uaccess', id_karyawan = '$idkarya', kd_poli = '$kdpol' WHERE id_user = '$idu'");

        if ($qu) {
            echo "<script>alert('Data user berhasil diubah'); window.location.href='data.php'</script>";
        } else {
            echo "<script>alert('Data user gagal diubah'); window.location.href='data.php'</script>";
            // echo "Error :".$qk."<br>".mysqli_error($connect);
        }
    } else {
        echo "<script>alert('Karyawan sudah memiliki akun'); window.location.href='edit.php?id=$idu'</script>";
    }
} else {
    header('Location : data.php');
}
