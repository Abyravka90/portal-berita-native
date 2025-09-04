<?php
// var_dump($nama_kategori);
include('../../config/database.php');
$nama_kategori = $_POST['nama_kategori'];
$query = "INSERT INTO tbl_kategori(id_kategori, nama_kategori) VALUES (NULL, '$nama_kategori')";
$q = mysqli_query($koneksi, $query);
if($q){
        echo "<script> window.location.href = 'index.php'; </script>";
    }
    else{
        echo "<script> alert('Error'); window.location.href = 'index.php'; </script>";
    }