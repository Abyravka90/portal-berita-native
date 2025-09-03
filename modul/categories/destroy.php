<?php
include('../../config/database.php');
$id_kategori = $_GET['id'];
$query = "DELETE from tbl_kategori WHERE id_kategori = '$id_kategori'";
$q = mysqli_query($koneksi, $query);
if($q){
        echo "<script>window.location.href = 'index.php';</script>";
    }