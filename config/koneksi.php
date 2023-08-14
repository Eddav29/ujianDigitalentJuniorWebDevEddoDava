<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "144_EddoDavaAlfarisi"; 

// Buat koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
