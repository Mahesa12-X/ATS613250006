
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

// Mengambil data kendaraan
$query = mysqli_query($conn, "SELECT * FROM mobil006 WHERE no_id='$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data kendaraan tidak ditemukan!");
}

// Proses update
if (isset($_POST['update'])) {

    $nomor = $_POST['nomor_kendaraan'];
    $jenis = $_POST['jenis_kendaraan'];
    $pemilik = $_POST['pemilik'];
    $tahun = $_POST['tahun_pembuatan'];

    $query = mysqli_query($conn, "UPDATE mobil006 SET
        nomor_kendaraan='$nomor',
        jenis_kendaraan='$jenis',
        pemilik='$pemilik',
        tahun_pembuatan='$tahun'
        WHERE no_id='$id'");

    if ($query) {
        header("Location: mobil.php");
        exit;
    } else {
        echo "Gagal mengubah kendaraan!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Kendaraan - MANCA GARAGE.ID</title>

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
            <h3>Edit Kendaraan</h3>
            <p class="text-secondary mb-0">
                Perbarui informasi kendaraan yang terdaftar.
            </p>
        </div>

        <form method="POST">

            <div class="mb-3">
                <label class="form-label">Nomor Kendaraan</label>

                <input type="text" name="nomor_kendaraan"
                    class="form-control"
                    value="<?php echo htmlspecialchars($data['nomor_kendaraan']); ?>"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kendaraan</label>

                <select name="jenis_kendaraan" class="form-select" required>

                    <option value="Sedan" <?php if($data['jenis_kendaraan']=="Sedan") echo "selected"; ?>>Sedan</option>

                    <option value="Pickup" <?php if($data['jenis_kendaraan']=="Pickup") echo "selected"; ?>>Pickup</option>

                    <option value="Truk" <?php if($data['jenis_kendaraan']=="Truk") echo "selected"; ?>>Truk</option>

                    <option value="Bemo" <?php if($data['jenis_kendaraan']=="Bemo") echo "selected"; ?>>Bemo</option>

                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Pemilik</label>

                <input type="text" name="pemilik"
                    class="form-control"
                    value="<?php echo htmlspecialchars($data['pemilik']); ?>"
                    required>
            </div>

            <div class="mb-4">
                <label class="form-label">Tahun Pembuatan</label>

                <input type="text" name="tahun_pembuatan"
                    maxlength="4"
                    class="form-control"
                    value="<?php echo htmlspecialchars($data['tahun_pembuatan']); ?>"
                    required>
            </div>

            <button type="submit" name="update"
                class="btn btn-success w-100">
                Update Kendaraan
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
