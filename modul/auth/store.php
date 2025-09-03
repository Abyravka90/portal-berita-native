<?php 
include '../../config/database.php';

$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if($password1 != $password2){
    echo '
        <script>
            alert("Password tidak cocok, silahkan ulangi");
            window.location.href = "register.php";
        </script>
    ';
} else {
    $password = password_hash($password1, PASSWORD_DEFAULT);
    $query = "INSERT INTO tbl_users(nama_lengkap, username, `password`) VALUES('$nama_lengkap','$username', '$password')";
    $q = mysqli_query($koneksi, $query);
    if($q){
        echo '
        <script>
            alert("Registrasi Berhasil, Silahkan login");
            window.location.href = "index.php";
        </script>
    ';
    }
}