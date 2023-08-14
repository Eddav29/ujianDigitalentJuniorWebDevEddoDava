<?php
// Fungsi untuk memasukkan data kegiatan ke database
function inputDataKegiatan($koneksi, $judul, $deskripsi, $tanggal, $gambar) {
    $query = "INSERT INTO kegiatan (judul, deskripsi, tanggal, gambar) VALUES ('$judul', '$deskripsi', '$tanggal', '$gambar')";
    return mysqli_query($koneksi, $query);
}

// Fungsi untuk mengedit data kegiatan di database
function editDataKegiatan($koneksi, $id, $judul, $deskripsi,$tanggal,  $gambar) {
    $query = "UPDATE kegiatan SET judul='$judul',  deskripsi='$deskripsi',tanggal='$tanggal', gambar='$gambar' WHERE id=$id";
    return mysqli_query($koneksi, $query);
}

// Fungsi untuk menghapus data kegiatan dari database
function hapusDataKegiatan($koneksi, $id) {
    $query = "DELETE FROM kegiatan WHERE id=$id";
    return mysqli_query($koneksi, $query);
}

// Fungsi untuk mengambil semua data kegiatan dari database
function getAllKegiatan($koneksi) {
    $query = "SELECT * FROM kegiatan";
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Fungsi untuk mendapatkan data kegiatan berdasarkan ID
function getKegiatanById($koneksi, $id) {
    $query = "SELECT * FROM kegiatan WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return false; // Jika data tidak ditemukan, mengembalikan false
    }
}

?>
