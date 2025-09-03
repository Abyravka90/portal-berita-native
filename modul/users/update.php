<?php 
include '../../config/database.php';

$id_user = $_POST['id_user'];
$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
//     $query = "UPDATE  tbl_users SET nama_lengkap = '$nama_lengkap', username = '$username', `password` = '$password1') WHERE id_user = '$id_user'";
// echo $query;
// die();

if($password1 != $password2){
    echo '
        <script>
            alert("Password tidak cocok, silahkan ulangi");
            window.history.back();
        </script>
    ';
} else {
    $password = password_hash($password1, PASSWORD_DEFAULT);
    $query = "UPDATE  tbl_users SET nama_lengkap = '$nama_lengkap', username = '$username', `password` = '$password' WHERE id_user = '$id_user'";
    $q = mysqli_query($koneksi, $query);
    if($q){
        echo '
        <script>
            window.location.href = "index.php";
        </script>
    ';
    }
}