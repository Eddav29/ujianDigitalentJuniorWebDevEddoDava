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

    // Hapus kegiatan berdasarkan ID
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
