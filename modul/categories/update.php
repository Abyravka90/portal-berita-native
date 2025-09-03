<?php
include('../../config/database.php');
$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];
$query = "UPDATE tbl_kategori SET nama_kategori = '$nama_kategori' WHERE id_kategori = '$id_kategori'";
$q = mysqli_query($koneksi, $query);
if($q){
        echo "<script>window.location.href = 'index.php';</script>";
    }