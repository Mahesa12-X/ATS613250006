
<?php
session_start();
include "config/koneksi.php";

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

$query = mysqli_query($conn, "SELECT * FROM mobil006");

// Menghitung jumlah mobil
$total = mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Kendaraan - MANCA GARAGE.ID</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav class="navbar navbar-dark">
    <span class="navbar-brand">MANCA GARAGE.ID</span>

    <div>
        <a href="index.php" class="btn btn-light">Dashboard</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</nav>

<div class="container main-content">

    <div class="page-header">
        <div>
            <h3>Manajemen Kendaraan</h3>
            <p class="page-subtitle">
                Kelola seluruh kendaraan Manca Garage.id.
            </p>
        </div>

        <a href="tambah.php" class="btn btn-success">
            + Tambah Kendaraan
        </a>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="vehicle-card">
                <p class="text-secondary">Total Kendaraan</p>
                <h2><?php echo $total; ?></h2>
                <small>Unit terdaftar</small>
            </div>
        </div>
    </div>

    <div class="vehicle-card">

        <h5 class="mb-3">Daftar Kendaraan</h5>

        <div class="table-responsive">

            <table class="table table-hover table-bordered">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Kendaraan</th>
                        <th>Jenis Kendaraan</th>
                        <th>Pemilik</th>
                        <th>Tahun</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                <?php
                $no = 1;

                while ($data = mysqli_fetch_assoc($query)) {
                ?>

                    <tr>
                        <td><?php echo $no++; ?></td>

                        <td>
                            <strong><?php echo htmlspecialchars($data['nomor_kendaraan']); ?></strong>
                        </td>

                        <td><?php echo htmlspecialchars($data['jenis_kendaraan']); ?></td>

                        <td><?php echo htmlspecialchars($data['pemilik']); ?></td>

                        <td><?php echo htmlspecialchars($data['tahun_pembuatan']); ?></td>

                        <td>
                            <a href="edit.php?id=<?php echo $data['no_id']; ?>"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="hapus.php?id=<?php echo $data['no_id']; ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Yakin ingin menghapus kendaraan ini?')">
                                Hapus
                            </a>
                        </td>
                    </tr>

                <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<div class="vehicle-footer">
    <strong>MANCA GARAGE.ID</strong>
    <p class="mb-0">Rent • Drive • Experience | © 2026</p>
</div>

</body>
</html>
