<?php
require_once '../classes/Siswa.php';

$siswa = new Siswa();
$siswa->id = $_GET['id'];

if ($siswa->delete()) {
    header("Location: ../index.php");
} else {
    echo "Gagal menghapus data siswa.";
}
