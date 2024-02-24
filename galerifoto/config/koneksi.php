<?php
    $hostname = 'localhost';
    $userdb = 'root';
    $passdb = '';
    $namedb = 'galerifoto2';

    $koneksi = mysqli_connect($hostname, $userdb, $passdb, $namedb);

    if ($koneksi) {
        echo '';
    }else{
        echo 'Tidak terhubung';
    }
?>