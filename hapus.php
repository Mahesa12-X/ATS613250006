
<?php
session_start();
include "config/koneksi.php";

// Cek login
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

// Mengambil ID kendaraan
$id = $_GET['id'];

// Menghapus kendaraan
$query = mysqli_query($conn, "DELETE FROM mobil006 WHERE no_id='$id'");

if ($query) {
    header("Location: mobil.php");
    exit;
} else {
    echo "Gagal menghapus kendaraan!";
}
?>
