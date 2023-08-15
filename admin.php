<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include_once 'config/koneksi.php';
include_once 'modal/functions.php';

$kegiatan = getAllKegiatan($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="plugin/css/bootstrap.min.css">
    <style>
        /* Gaya kustom untuk bagian header */
        .custom-header {
            background-color: #2D3876;
            color: white;
            padding: 20px 0;
        }

        /* Gaya kustom untuk navbar */
        .custom-navbar {
            background-color: #306ee8;
        }

        /* Gaya kustom untuk konten */
        .custom-content {
            background-color: #F2F2F2;
            padding: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/logo-BPSDMP.png" alt="Logo Bpsdmp Surabaya" width="50" class="mr-2">
                Bpsdmp Surabaya
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="custom-content container mt-5">
        <h2 class="mb-4">Dasbor Admin</h2>
        <a href="tambah.php" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Kegiatan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>judul</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kegiatan as $row) : ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['judul']; ?></td>
                        <td><?php echo $row['deskripsi']; ?></td>
                        <td><?php echo $row['tanggal']; ?></td>
                        <td><img src="assets/<?php echo $row['gambar']; ?>" alt="<?php echo $row['judul']; ?>" width="100"></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?')">Hapus</a>
                    </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <script src="plugin/js/bootstrap.min.js"></script>
    
</body>
</html>
