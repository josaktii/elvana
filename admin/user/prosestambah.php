<?php

include('../../config/connect.php');

if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];
    $uaccess = $_POST['uaccess'];
    $idkarya = $_POST['idkarya'];
    $kdpol = $_POST['kdpol'];

    $q = $connect->query("SELECT * FROM user JOIN karyawan USING(id_karyawan) WHERE id_karyawan = '$idkarya'");
    $d = $q->fetch_assoc();
    if ($d['id_karyawan'] == null) {
        $qu = $connect->query("INSERT INTO user VALUES (NULL, '$uname', '$upass', '$uaccess', '$idkarya', '$kdpol')");
        if ($qu) {
            echo "<script>alert('Data user berhasil ditambahkan'); window.location.href='data.php'</script>";
        } else {
            // echo "Error :" . $qu . "<br>" . mysqli_error($connect);
            echo "<script>alert('Data user gagal ditambahkan'); window.location.href='data.php'</script>";
        }
    } else {
        echo "<script>alert('Karyawan sudah memiliki akun'); window.location.href='tambah.php'</script>";
        // echo "Error :" . $qu . "<br>" . mysqli_error($connect);
    }
} else {
    header('Location : data.php');
}
