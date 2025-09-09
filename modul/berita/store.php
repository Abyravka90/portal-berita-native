<?php
session_start();
include ('../../config/database.php');
$judul = $_POST['judul'];
$id_kategori = $_POST['id_kategori'];
$content = $_POST['content'];
$tanggal = date('Y-m-d H:i:s');
$id_user = $_POST['id_user'];
$image = $_FILES['image']['name'];
$target = "../../assets/img/".basename($image);
move_uploaded_file($_FILES['image']['tmp_name'], $target);  
$query = "INSERT INTO tbl_berita(id_berita, id_kategori, id_user, judul, content, `image`, tanggal) VALUES (NULL, '$id_kategori', '$id_user', '$judul', '$content', '$image', '$tanggal')";
$q = mysqli_query($koneksi, $query);
if($q){
        echo "<script> window.location.href = 'index.php'; </script>";
    }
    else{
        echo "<script> alert('Error'); window.location.href = 'index.php'; </script>";
    }       
?>