<?php
include 'config/connect.php';
$quer = $connect->query("SELECT COUNT(kd_kunjungan) AS hitung FROM kb GROUP BY kd_poli");
$hitung = $quer->fetch_assoc();
foreach ($hitung as $bla) {
    echo "Yang terdaftar : " . $bla['hitung'];
}
