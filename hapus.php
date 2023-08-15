<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include_once 'config/koneksi.php';
include_once 'modal/functions.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data kegiatan berdasarkan ID
    $kegiatan = getKegiatanById($koneksi, $id);
    if (!$kegiatan) {
        echo "Data kegiatan tidak ditemukan.";
        exit();
    }

    // Hapus file gambar terkait (jika ada)
    if (!empty($kegiatan['gambar'])) {
        $gambarPath = "assets/" . $kegiatan['gambar'];
        if (file_exists($gambarPath)) {
            unlink($gambarPath);
        }
    }

    // Hapus kegiatan dari database
    if (hapusDataKegiatan($koneksi, $id)) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Gagal menghapus kegiatan.";
    }
} else {
    echo "ID kegiatan tidak valid.";
}

?>
