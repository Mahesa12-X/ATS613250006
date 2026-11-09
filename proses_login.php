<?php
session_start();
include "config/koneksi.php";

// Mengambil data dari form login
$email = $_POST['email'];
$password = $_POST['password'];

// Mencari email di database
$query = mysqli_query($conn, "SELECT * FROM member_006 WHERE email='$email'");

$data = mysqli_fetch_assoc($query);

// Memeriksa email, password dan status akun
if ($data && $password == $data['password'] && $data['aktive'] == '1') {

    $_SESSION['id'] = $data['id'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['nama'] = $data['nama'];

    header("Location: index.php");
    exit;

} else {
    echo "Email atau password salah!";
    echo "<br><a href='login.php'>Kembali ke Login</a>";
}
?>
