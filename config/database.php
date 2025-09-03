<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "db_portal_berita";

$koneksi = mysqli_connect($host, $username, $password, $db_name);
if(!$koneksi){
    echo "<script>console.log('Koneksi gagal: " . mysqli_connect_error() . "');</script>";
}else{
    echo "<script>console.log('Database Terhubung');</script>";
}

