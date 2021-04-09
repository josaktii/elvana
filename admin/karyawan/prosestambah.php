<?php

include_once('../../config/connect.php');

if (isset($_POST['usubmit'])) {
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];
    $uaccess = $_POST['uaccess'];
    $idkarya = $_POST['idkarya'];

    $qu=$connect->query("INSERT INTO user VALUES (NULL, '$uname', '$upass', '$uaccess', '$idkarya')");

    if ($qu) {
        echo "<script>alert('Data user berhasil ditambahkan'); window.location.href='data.php'</script>";
    } else {
        echo "<script>alert('Data user gagal ditambahkan'); window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
?>