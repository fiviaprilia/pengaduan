<?php
session_start();

// Memastikan hanya petugas yang bisa mengakses
if ($_SESSION['level'] != 'petugas') {
    echo "<script>alert('Anda tidak memiliki akses'); window.location.assign('index.php');</script>";
    exit();
}

include 'koneksi.php';

// Validasi ID pengaduan
if (!isset($_GET['id_pengaduan']) || !is_numeric($_GET['id_pengaduan'])) {
    echo "<script>alert('ID pengaduan tidak valid'); window.location.assign('tanggapan-pengaduan.php');</script>";
    exit();
}

$id_pengaduan = $_GET['id_pengaduan'];

// Cek apakah pengaduan ada di database
$cek = "SELECT * FROM pengaduan WHERE id_pengaduan = '$id_pengaduan' AND status = 'proses'";
$hasil = mysqli_query($koneksi, $cek);
if (mysqli_num_rows($hasil) == 0) {
    echo "<script>alert('Pengaduan tidak ditemukan atau sudah selesai'); window.location.assign('tanggapan-pengaduan.php');</script>";
    exit();
}

// Update status pengaduan menjadi 'selesai'
$query = "UPDATE pengaduan SET status = 'selesai' WHERE id_pengaduan = '$id_pengaduan'";

if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Pengaduan berhasil diselesaikan'); window.location.assign('petugas.php');</script>";
} else {
    echo "<script>alert('Gagal menyelesaikan pengaduan'); window.location.assign('petugas.php');</script>";
}
?>
