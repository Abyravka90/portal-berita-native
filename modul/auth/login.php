<?php
include '../../config/database.php';
$username = trim($_POST['username']);
$password = $_POST['password'];

$username = mysqli_real_escape_string($koneksi, $username);

$query = "SELECT * FROM tbl_users WHERE username = '$username' LIMIT 1";
$q = mysqli_query($koneksi, $query);

if ($data = mysqli_fetch_array($q)) {
    if (password_verify($password, $data['password'])) {
        session_start();
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        echo '<script>window.location.href="/portal-berita/modul/dashboard";</script>';
    } else {
        echo '
        <script>
            alert("Password Salah");
            window.location.href = "base.php";
        </script>
        ';
    }
} else {
    echo '
        <script>
            alert("User tidak ditemukan");
            window.location.href = "index.php";
        </script>
        ';
}
