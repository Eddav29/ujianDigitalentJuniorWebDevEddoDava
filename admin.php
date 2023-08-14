<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="plugin/css/bootstrap.min.css">
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Custom styles for the header and footer */
        .custom-header,
        .custom-footer {
            background-color: #2D3876;
            color: white;
            padding: 20px 0;
            text-align: center;
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
                        <a class="nav-link" href="admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="custom-content container mt-5">
        <h2 class="mb-4">Kegiatan Terbaru</h2>
        <a href="tambah.php" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Kegiatan</a>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kegiatan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include koneksi.php
                include 'config/koneksi.php';

                // Fetch data from database
                $query = "SELECT * FROM kegiatan";
                $result = mysqli_query($koneksi, $query);

                // Display data in table rows
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td scope="col">' . $row["id"] . '</td>';
                    echo '<td>' . $row["nama_kegiatan"] . '</td>';
                    echo '<td>' . $row["tanggal"] . '</td>';
                    echo '<td>' . $row["deskripsi"] . '</td>';
                    echo '<td>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                          </td>';
                    echo '</tr>';
                }

                // Close connection
                mysqli_close($koneksi);
                ?>
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="plugin/js/bootstrap.min.js"></script>
</body>
</html>
