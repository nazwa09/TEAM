<?php
require_once '../classes/Siswa.php';

$siswa = new Siswa();
$siswa->id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $siswa->nama = $_POST['nama'];
    $siswa->alamat = $_POST['alamat'];
    $siswa->kelas = $_POST['kelas'];
    $siswa->tanggal_lahir = $_POST['tanggal_lahir'];
    
    if ($siswa->update()) {
        header("Location: ../index.php");
    } else {
        echo "<div class='alert alert-danger'>Gagal mengupdate data siswa.</div>";
    }
} else {
    $stmt = $siswa->readOne(); // Mengambil data siswa berdasarkan ID
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Siswa</h2>
        <form method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= htmlspecialchars($data['nama']); ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= htmlspecialchars($data['alamat']); ?>" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" class="form-control" id="kelas" name="kelas" value="<?= htmlspecialchars($data['kelas']); ?>" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= htmlspecialchars($data['tanggal_lahir']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="views/index.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>