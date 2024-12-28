<?php
session_start();

if (empty($_POST['tgl_pengaduan']) || empty($_POST['isi_laporan']) || empty($_FILES['foto']['name'])) {
    echo "<script>alert('Semua kolom harus diisi!'); window.location.assign('masyarakat.php?url=tulis-pengaduan');</script>";
    exit();
}

$tgl_pengaduan = $_POST['tgl_pengaduan'];
$nik           = $_SESSION['nik'];
$isi_laporan   = $_POST['isi_laporan'];
$lokasi_foto   = $_FILES['foto']['tmp_name'];
$nama_foto     = $_FILES['foto']['name'];
$status        = 0;

if (move_uploaded_file($lokasi_foto, 'foto/' . $nama_foto)) {
    include 'koneksi.php';
    $sql = "INSERT INTO pengaduan (tgl_pengaduan, nik, isi_laporan, foto, status)
            VALUES ('$tgl_pengaduan', '$nik', '$isi_laporan', '$nama_foto', '$status')";

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Pengaduan Sudah Tersimpan'); window.location.assign('masyarakat.php');</script>";
    } else {
        echo "<script>alert('Pengaduan Gagal Tersimpan: " . mysqli_error($koneksi) . "'); window.location.assign('masyarakat.php?url=tulis-pengaduan');</script>";
    }
} else {
    echo "<script>alert('Gagal mengunggah foto!'); window.location.assign('masyarakat.php?url=tulis-pengaduan');</script>";
}
?>
