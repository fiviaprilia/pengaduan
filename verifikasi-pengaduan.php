<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Mulai session jika belum ada
}

// Memastikan hanya petugas yang bisa mengakses
if ($_SESSION['level'] != 'admin') {
    echo "<script>alert('Anda tidak memiliki akses'); window.location.assign('index.php');</script>";
    exit();
}

include 'koneksi.php';

// Mengambil data pengaduan dengan status '0' (untuk admin)
$query = "SELECT * FROM pengaduan WHERE status = '0'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggapan Pengaduan - Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan CSS untuk modal -->
    <style>
        .modal-img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
       
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal Pengaduan</th>
                    <th>NIK</th>
                    <th>Isi Laporan</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($result) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?= $row['id_pengaduan']; ?></td>
                            <td><?= $row['tgl_pengaduan']; ?></td>
                            <td><?= $row['nik']; ?></td>
                            <td><?= $row['isi_laporan']; ?></td>
                            <td>
                                <a href="#modal<?= $row['id_pengaduan']; ?>" data-toggle="modal">
                                    <img src="foto/<?= htmlspecialchars($row['foto']); ?>" alt="Foto Pengaduan" width="100">
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modal<?= $row['id_pengaduan']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <img src="foto/<?= htmlspecialchars($row['foto']); ?>" alt="Foto Pengaduan" class="modal-img">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="proses-verifikasi.php?id_pengaduan=<?= $row['id_pengaduan']; ?>" 
                                   class="btn btn-success btn-sm" 
                                   onclick="return confirm('Apakah Anda yakin ingin menyelesaikan pengaduan ini?');">
                                    Verifikasi
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">Tidak ada pengaduan yang dikirim.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Tambahkan pustaka JavaScript Bootstrap -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
