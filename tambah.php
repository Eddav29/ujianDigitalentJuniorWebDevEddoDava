<!-- tambah.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kegiatan</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="plugin/css/bootstrap.min.css">
    <style>
        body{
            background-color: whitesmoke;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg bg-primary ">
                <h2 class="mb-0 text-light">Tambah Kegiatan</h2>
            </div>
            <div class="card-body">
                <form action="modal/proses_tambah.php" method="POST">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Juduln</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Include Bootstrap JS -->
    <script src="plugin/js/bootstrap.min.js"></script>
</body>
</html>
