<?php
include_once '../config/koneksi.php';
include_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['judul']) && isset($_POST['tanggal']) && isset($_POST['deskripsi'])) {
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $tanggal = $_POST['tanggal'];

        if (isset($_FILES["gambar"]["name"]) && !empty($_FILES["gambar"]["name"])) {
            $target_dir = "../assets/";
            $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["gambar"]["tmp_name"]);


            if ($check !== false) {
                $uploadOk = 1;
            } else {
                echo "File bukan gambar.";
                $uploadOk = 0;
            }
            if (file_exists($target_file)) {
                echo "Maaf, file sudah ada.";
                $uploadOk = 0;
            }
            if ($_FILES["gambar"]["size"] > 500000) {
                echo "Maaf, ukuran file terlalu besar.";
                $uploadOk = 0;
            }
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Maaf, hanya file JPG, JPEG, PNG, & GIF yang diizinkan.";
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                echo "Maaf, file Anda tidak diunggah.";
            } else {
                if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                    echo "File " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " telah diunggah.";
                } else {
                    echo "Maaf, terjadi kesalahan saat mengunggah file Anda.";
                }
            }
            $gambar = htmlspecialchars(basename($_FILES["gambar"]["name"]));
        } else {
            $gambar = $_POST['gambar_lama']; 
        }

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            if (editDataKegiatan($koneksi, $id, $judul, $deskripsi, $tanggal, $gambar)) {
                echo "<p>Data berhasil diperbarui.</p>";
            } else {
                echo "<p>Error saat memperbarui data: " . mysqli_error($koneksi) . "</p>";
            }
        } else {
            if (inputDataKegiatan($koneksi, $judul, $deskripsi, $tanggal, $gambar)) {
                echo "<p>Data berhasil disimpan.</p>";
            } else {
                echo "<p>Error saat menyimpan data: " . mysqli_error($koneksi) . "</p>";
            }
        }
    } else {
        echo "Data tidak valid.";
    }

    header("Location: ../admin.php");
} else {
    echo "<p>Metode permintaan tidak valid.</p>";
}
?>
