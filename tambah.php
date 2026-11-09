
<?php
session_start();
include "config/koneksi.php";

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['simpan'])) {

    $nomor = $_POST['nomor_kendaraan'];
    $jenis = $_POST['jenis_kendaraan'];
    $pemilik = $_POST['pemilik'];
    $tahun = $_POST['tahun_pembuatan'];

    $query = mysqli_query($conn, "INSERT INTO mobil006
    (nomor_kendaraan, jenis_kendaraan, pemilik, tahun_pembuatan)
    VALUES ('$nomor', '$jenis', '$pemilik', '$tahun')");

    if ($query) {
        header("Location: mobil.php");
        exit;
    } else {
        echo "Gagal menambahkan kendaraan!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kendaraan - MANCA GARAGE.ID</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav class="navbar navbar-dark">
    <span class="navbar-brand">MANCA GARAGE.ID</span>

    <a href="mobil.php" class="btn btn-light">
        Kembali
    </a>
</nav>

<div class="container form-container">

    <div class="form-card">

        <div class="form-title">
            <h3>Tambah Kendaraan</h3>
            <p class="text-secondary mb-0">
                Masukkan informasi kendaraan baru.
            </p>
        </div>

        <form method="POST">

            <div class="mb-3">
                <label class="form-label">Nomor Kendaraan</label>
                <input type="text" name="nomor_kendaraan"
                       class="form-control"
                       placeholder="Contoh: D 1234 ABC" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kendaraan</label>

                <select name="jenis_kendaraan" class="form-select" required>
                    <option value="">Pilih jenis kendaraan</option>
                    <option value="Sedan">Sedan</option>
                    <option value="Pickup">Pickup</option>
                    <option value="Truk">Truk</option>
                    <option value="Bemo">Bemo</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Pemilik</label>
                <input type="text" name="pemilik"
                       class="form-control"
                       placeholder="Nama pemilik kendaraan" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Tahun Pembuatan</label>
                <input type="text" name="tahun_pembuatan"
                       maxlength="4"
                       class="form-control"
                       placeholder="Contoh: 2022"
                       required>
            </div>

            <button type="submit" name="simpan"
                    class="btn btn-success w-100">
                Simpan Kendaraan
            </button>

            <a href="mobil.php"
               class="btn btn-outline-secondary w-100 mt-2">
                Batal
            </a>

        </form>

    </div>

</div>

<div class="vehicle-footer">
    <strong>MANCA GARAGE.ID</strong>
    <p class="mb-0">Rent • Drive • Experience | © 2026</p>
</div>

</body>
</html>
