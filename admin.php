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
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Tambahkan tombol Edit pada tabel -->
<td>
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal<?php echo $row['id']; ?>">Edit</button>
    <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?')">Hapus</a>
</td>

<!-- Modal Edit untuk setiap kegiatan -->
<div class="modal fade" id="editModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                // Ambil data kegiatan dari ID
                $editId = $row['id'];
                $editKegiatan = getKegiatanById($koneksi, $editId);

                if ($editKegiatan) {
                ?>
                <form action="proses_edit.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $editKegiatan['id']; ?>">
                    <div class="form-group">
                        <label for="nama_kegiatan">Nama Kegiatan</label>
                        <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="<?php echo $editKegiatan['nama_kegiatan']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $editKegiatan['tanggal']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required><?php echo $editKegiatan['deskripsi']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
                <?php
                } else {
                    echo "Data kegiatan tidak ditemukan.";
                }
                ?>
            </div>
        </div>
    </div>
</div>

    <script src="plugin/js/bootstrap.min.js"></script>
</body>
</html>
