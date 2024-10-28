<?php
require_once '../classes/Siswa.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $siswa = new Siswa();
    $siswa->nama = $_POST['nama'];
    $siswa->alamat = $_POST['alamat'];
    $siswa->kelas = $_POST['kelas'];
    $siswa->tanggal_lahir = $_POST['tanggal_lahir'];
    if ($siswa->create()) {
        header("Location: ../index.php");
    } else {
        echo "Gagal menambahkan data siswa.";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Siswa</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Siswa</h2>
        <form method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <button type="submit" class="btn btn-success">Tambah</button>
            <a href="../index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
