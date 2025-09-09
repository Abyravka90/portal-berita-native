<?php
include('../../config/database.php');
$id_user = $_POST['id_user'];
$id_kategori = $_POST['id_kategori'];
$id_berita = $_POST['id_berita'];
$judul = $_POST['judul'];
$content = $_POST['content'];
$image = $_FILES['image']['name'];

$getOldImage = mysqli_query($koneksi, "SELECT image FROM tbl_berita WHERE id_berita = '$id_berita'");
$oldImageData = mysqli_fetch_array($getOldImage);
$oldImage = $oldImageData['image'];
if (!empty($image)) {
    if (!empty($oldImage) && file_exists("../../assets/img/" . $oldImage)) {
        unlink("../../assets/img/" . $oldImage);
    }
    $target = "../../assets/img/" . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
} else {
    $image = $oldImage;
}

$query = "UPDATE tbl_berita SET judul = '$judul', content = '$content', image = '$image', id_kategori = '$id_kategori' WHERE id_berita = '$id_berita'";
$q = mysqli_query($koneksi, $query);
if($q){
        echo "<script>window.location.href = 'index.php';</script>";
    }