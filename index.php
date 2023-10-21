<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BPSDMP SURABAYA</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="plugin/css/bootstrap.min.css">
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <!-- Add custom CSS for image overlay and caption -->
    <style>
        /* Style for the overlay on the carousel images */
        .carousel-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        /* Style for the title text on the images */
        .carousel-caption h5 {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border-radius: 50%;
            font-size: 30px;
            padding: 15px;
        }

        /* Style for the visually hidden label */
        .visually-hidden {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
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

    <!-- Carousel Section -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-indicators">
            <!-- Dynamic generation of carousel indicators using PHP -->
            <?php
            // Include your database connection and functions here
            include_once 'config/koneksi.php';
            include_once 'modal/functions.php';
            $kegiatan = getAllKegiatan($koneksi);
            $slideNumber = 0;

            foreach ($kegiatan as $row) {
                echo '<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="' . $slideNumber . '"';

                if ($slideNumber === 0) {
                    echo ' class="active"';
                }

                echo ' aria-label="Slide ' . ($slideNumber + 1) . '"></button>';
                $slideNumber++;
            }
            ?>
        </div>
        <div class="carousel-inner">
            <!-- Dynamic generation of carousel slides using PHP -->
            <?php
            // Continue using the database connection and functions
            $isFirstSlide = true;

            foreach ($kegiatan as $row) {
                echo '<div class="carousel-item';
                if ($isFirstSlide) {
                    echo ' active';
                    $isFirstSlide = false;
                }
                echo '">';
                echo '<a href="image_detail.php?id=' . $row['id'] . '">';
                echo '<img src="assets/' . $row['gambar'] . '" class="d-block w-100 img-fluid" alt="' . $row['judul'] . '">';
                echo '<div class="carousel-overlay"></div>';
                echo '<div class="carousel-caption d-none d-md-block">';
                echo '<h5 class="text-white">' . $row['judul'] . '</h5>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
        <!-- Carousel navigation buttons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
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

    <!-- Include jQuery (make sure to include it before Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Bootstrap JS -->
    <script src="plugin/js/bootstrap.min.js"></script>


</body>

</html>