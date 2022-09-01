<?php
    $host ="localhost";
    $user ="root";
    $pass ="";
    $database ="radifutsal";

    $koneksi = mysqli_connect($host,$user,$pass,$database);
    if(!$koneksi){
        echo ("gagal");
    }
    
?>