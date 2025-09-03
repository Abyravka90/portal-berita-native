<?php
include('../../config/database.php');
$id_user = $_GET['id'];
$query = "DELETE from tbl_users WHERE id_user = '$id_user'";
$q = mysqli_query($koneksi, $query);
if($q){
        echo "<script>window.location.href = 'index.php';</script>";
    }