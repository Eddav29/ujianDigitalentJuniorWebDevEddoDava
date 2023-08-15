<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include_once 'config/koneksi.php';
include_once 'modal/functions.php';

$kegiatan = getAllKegiatan($koneksi);

// Ambil ID dari URL
if (isset($_GET['id'])) {
    $editId = $_GET['id'];
    $editKegiatan = getKegiatanById($koneksi, $editId);
    if (!$editKegiatan) {
        echo "Data kegiatan tidak ditemukan.";
        exit;
    }
} else {
    echo "ID kegiatan tidak valid.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kegiatan</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="plugin/css/bootstrap.min.css">
    <style>
        body {
            background-color: whitesmoke;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg bg-primary ">
                <h2 class="mb-0 text-light">Edit Kegiatan</h2>
            </div>
            <div class="card-body">
                <form action="modal/proses.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $editKegiatan['id']; ?>">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $editKegiatan['judul']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required><?php echo $editKegiatan['deskripsi']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $editKegiatan['tanggal']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                        <img src="assets/<?php echo $editKegiatan['gambar']; ?>" alt="<?php echo $editKegiatan['judul']; ?>" width="100">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Include Bootstrap JS -->
    <script src="plugin/js/bootstrap.min.js"></script>
</body>
</html>
