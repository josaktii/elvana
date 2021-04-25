<?php
include 'config/connect.php';
$q = $connect->query("SELECT * FROM rm JOIN pasien USING(id_pasien) WHERE id_pasien = '97980281' AND tgl_lahirp = '2013-02-15' ");
foreach ($q as $bla) {
    echo "Yang terdaftar : " . $bla;
}
