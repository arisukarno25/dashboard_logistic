<?php
$server = "localhost";
$username = "root";
$password = "ketutpandoyo.123";
$db_name = "logistic_management_updated";

$koneksi = mysqli_connect($server, $username, $password, $db_name);

if(!$koneksi) {
    echo "Koneksi Gagal";
} else {
    //echo "Koneksi Berhasil";
}

?>