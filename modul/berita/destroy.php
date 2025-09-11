<?php
include('../../config/database.php');
$id_berita = $_GET['id'];
$query = "DELETE from tbl_berita WHERE id_berita = '$id_berita'";
$q = mysqli_query($koneksi, $query);
if($q){
        echo "<script>window.location.href = 'base.php';</script>";
    }