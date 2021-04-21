<?php

include('../../config/connect.php');

if (isset($_POST['usubmit'])) {
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];
    $uaccess = $_POST['uaccess'];
    $idkarya = $_POST['idkarya'];
    $kdpol = $_POST['kdpol'];

    $qu = $connect->query("INSERT INTO user VALUES (NULL, '$uname', '$upass', '$uaccess', '$idkarya', '$kdpol')");

    if ($qu) {
        echo "<script>alert('Data user berhasil ditambahkan'); window.location.href='data.php'</script>";
    } else {
        echo "Error :".$qu."<br>".mysqli_error($connect);
        // echo "<script>alert('Data user gagal ditambahkan'); window.location.href='data.php'</script>";
    }
} else {
    header('Location : data.php');
}
?>