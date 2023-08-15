
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instansi XYZ</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="plugin/css/bootstrap.min.css">
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <style>
        /* Custom styles for the header */
        .custom-header {
            background-color: #2D3876;
            color: white;
            padding: 20px 0;
        }

        /* Custom styles for the navbar */
        .custom-navbar {
            background-color: #306ee8;
        }
        
        .custom-navbar .nav-link:hover {
            color: #306ee8;
        }

        /* Custom styles for the content */
        .custom-content {
            background-color: #F2F2F2;
            padding: 20px;
            min-height: 100vh;
        }

        /* Custom styles for the footer */
        .custom-footer {
            background-color: #2D3876;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/logo-BPSDMP.png" alt="Bpsdmp Surabaya Logo" width="50" class="mr-2">
                Bpsdmp Surabaya
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container mt-5">
        <h1>Halaman Berita</h1>
        <div class="row">
            <?php
            // Include koneksi database
            include_once 'config/koneksi.php';

            // Query untuk mengambil data kegiatan dari tabel
            $query = "SELECT * FROM kegiatan";
            $result = mysqli_query($koneksi, $query);

            // Loop through each row in the result
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo '<img src="assets/' . $row['gambar'] . '" class="card-img-top" alt="' . $row['judul'] . '">';
                echo '<div class="card-header">' . $row['tanggal'] . '</div>'; // Tambahkan card header berdasarkan tanggal
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['judul'] . '</h5>';
                echo '<p class="card-text">' . $row['deskripsi'] . '</p>';
                echo '<a href="#" class="btn btn-primary">Baca Selengkapnya</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>


    <footer class="custom-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="mb-4">About Us</h2>
                    <p><strong> BPSDMP Surabaya</strong></p>
                    <p>Balai Pengembangan Sumber Daya Manusia dan Penelitian Komunikasi dan Informatika Surabaya</p>
                    <p>Badan Penelitian dan Pengembangan Sumber Daya Manusia - Kementerian Komunikasi dan Informatika Republik Indonesia</p>
                    <p>Alamat: Jl. Raya Ketajen No.36, Ketajen, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254</p>
                    <p>Telepon: (031) 8011944</p>
                    <p>Provinsi: Jawa Timur</p>
                    <p>
                        <a href="https://instagram.com/bpsdmp.kominfo.sby" target="_blank" class="btn btn-primary mr-2">
                            <i class="fab fa-instagram"></i> Instagram
                        </a>
                        <a href="https://youtube.com/@bpsdmpkominfosurabaya5369" target="_blank" class="btn btn-danger">
                            <i class="fab fa-youtube"></i> YouTube
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Include Bootstrap JS -->
    <script src="plugin/js/bootstrap.min.js"></script>
</body>
</html>
