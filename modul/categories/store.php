<?php
// var_dump($nama_kategori);
include('../../config/database.php');
$nama_kategori = $_POST['nama_kategori'];
$query = "INSERT INTO tbl_kategori(nama_kategori) VALUES ('$nama_kategori')";
$q = mysqli_query($koneksi, $query);
if($q){
        echo "<script>window.location.href = 'index.php';</script>";
    }