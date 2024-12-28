<?php
session_start();

// Memastikan hanya admin yang bisa mengakses
if ($_SESSION['level'] != 'admin') {
    echo "<script>alert('Anda tidak memiliki akses'); window.location.assign('index.php');</script>";
    exit();
}

include 'koneksi.php';

// Validasi ID pengaduan
if (!isset($_GET['id_pengaduan']) || !is_numeric($_GET['id_pengaduan'])) {
    echo "<script>alert('ID pengaduan tidak valid'); window.location.assign('verifikasi-pengaduan.php');</script>";
    exit();
}

$id_pengaduan = $_GET['id_pengaduan'];

// Cek apakah pengaduan ada di database
$cek = "SELECT * FROM pengaduan WHERE id_pengaduan = '$id_pengaduan'";
$hasil = mysqli_query($koneksi, $cek);
if (mysqli_num_rows($hasil) == 0) {
    echo "<script>alert('Pengaduan tidak ditemukan'); window.location.assign('verifikasi-pengaduan.php');</script>";
    exit();
}

// Update status pengaduan menjadi 'proses' (verifikasi selesai)
$query = "UPDATE pengaduan SET status = 'proses' WHERE id_pengaduan = '$id_pengaduan'";

if (mysqli_query($koneksi, $query)) {
    // Menampilkan pesan sukses dan redirect ke halaman verifikasi
    echo "<script>alert('Pengaduan berhasil diverifikasi'); window.location.assign('admin.php');</script>";
} else {
    // Menampilkan pesan error dan redirect ke halaman verifikasi
    echo "<script>alert('Gagal memverifikasi pengaduan'); window.location.assign('admin.php');</script>";
}
?>
