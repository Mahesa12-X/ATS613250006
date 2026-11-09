
<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

include "config/koneksi.php";

// Menghitung jumlah mobil
$query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM mobil006");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Manca Garage.id</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav class="navbar navbar-dark">
    <span class="navbar-brand">MANCA GARAGE.ID</span>

    <a href="logout.php" class="btn btn-danger">
        Logout
    </a>
</nav>

<div class="container main-content">

    <div class="welcome">
        <p>RENT • DRIVE • EXPERIENCE</p>

        <h2>Selamat Datang, <?php echo htmlspecialchars($_SESSION['nama']); ?>!</h2>

        <p>Kelola kendaraan rental Anda dengan mudah melalui Manca Garage.id.</p>
    </div>

    <div class="row">

        <div class="col-md-4">
            <div class="stat-card">
                <p>Total Kendaraan</p>

                <h2><?php echo $data['total']; ?></h2>

                <small>Mobil terdaftar</small>
            </div>
        </div>

    </div>

    <div class="menu-card">

        <h4>Pengelolaan Kendaraan</h4>

        <p>Kelola data kendaraan yang tersedia di Manca Garage.id.</p>

        <a href="mobil.php" class="btn btn-primary">
            Lihat Data Mobil
        </a>

        <a href="tambah.php" class="btn btn-success">
            + Tambah Mobil
        </a>

    </div>

</div>

<div class="footer">
    <h5>MANCA GARAGE.ID</h5>
    <small>© 2026 Manca Garage.id. All Rights Reserved.</small>
</div>

</body>
</html>
