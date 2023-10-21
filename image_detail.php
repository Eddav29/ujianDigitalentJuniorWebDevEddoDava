<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add your head content here (meta tags, styles, external scripts) -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Image Detail - BPSDMP SURABAYA</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="plugin/css/bootstrap.min.css">
    <!-- Add custom CSS if needed -->

    <!-- You can add additional styles for image details here if necessary -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/old/logo BPSDMP.png" alt="Bpsdmp Surabaya Logo" width="50" class="mr-2 img-fluid">
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
                        <a class="nav-link" href="login.php">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <?php
                // Include your database connection and functions here
                include_once 'config/koneksi.php';
                include_once 'modal/functions.php';
                // Get the image details by ID from the URL parameter
                if (isset($_GET['id'])) {
                    $imageId = $_GET['id'];
                    $image = getKegiatanById($koneksi, $imageId);

                    if ($image) {
                        // Display the image details
                        echo '<h2>' . $image['judul'] . '</h2>';
                        echo '<img src="assets/' . $image['gambar'] . '" class="img-fluid" alt="' . $image['judul'] . '">';
                        echo '<p>' . $image['deskripsi'] . '</p>';
                        echo '<p>Tanggal: ' . $image['tanggal'] . '</p>';
                    } else {
                        echo '<p>Image not found.</p>';
                    }
                } else {
                    echo '<p>Image ID not provided.</p>';
                }
                ?>
            </div>
        </div>
    </div>

    <footer class="bg-primary text-white text-center py-4" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="mb-4">Tentang Kami</h2>
                    <p><strong>BPSDMP Surabaya</strong></p>
                    <p>Balai Pengembangan Sumber Daya Manusia dan Penelitian Komunikasi dan Informatika Surabaya</p>
                    <p>Badan Penelitian dan Pengembangan Sumber Daya Manusia - Kementerian Komunikasi dan Informatika Republik Indonesia</p>
                    <p>Alamat: Jl. Raya Ketajen No.36, Ketajen, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Include Bootstrap JS -->
    <script src="plugin/js/bootstrap.min.js"></script>
</body>

</html>