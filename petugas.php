<?php
session_start();
if ($_SESSION['level'] != "petugas") {
  echo "<script>alert('Maaf Anda Bukan Pada Sesi Petugas'); window.location.assign('index2.php');</script>";
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Aplikasi Pengaduan Masyarakat Desa Worawari</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <style>
  /* Latar belakang halaman */
  body.bg-gradient-primary {
    background: linear-gradient(to right, #036DA4, #5EA3C0); /* Blue Blue dan Air Superiority Blue */
  }

  /* Sidebar */
  .sidebar {
    background: linear-gradient(to right, #036DA4, #5EA3C0); /* Kombinasi warna sama dengan background */
  }

  /* Tombol login */
  .btn-primary {
    background-color: #5EA3C0; /* Air Superiority Blue */
    border-color: #5EA3C0;
  }

  .btn-primary:hover {
    background-color: #B9D9DC; /* Light Blue */
    border-color: #B9D9DC;
  }

  /* Tombol lainnya */
  .btn-succes {
    background-color: #B9D9DC; /* Light Blue */
    border-color: #B9D9DC;
  }

  .btn-succes:hover {
    background-color: #DBEBE2; /* Honeydew */
    border-color: #DBEBE2;
  }
</style>
<style>
  /* Padding untuk mengatur posisi teks aplikasi */
  h1 {
    padding-top: 10px; /* Memberikan jarak atas pada judul */
  }

  /* Memberikan jarak pada sidebar */
  .sidebar {
    padding-top: 20px; /* Memberikan jarak atas pada sidebar */
  }
</style>
</head>

<body id="page-top">

  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <div class="sidebar-brand d-flex align-items-center justify-content-center">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-th-large"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Aplikasi Pengaduan Masyarakat</div>
</div>

      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="petugas.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Interface
      </div>

      <li class="nav-item">
        <a class="nav-link" href="?url=tanggapan-pengaduan">
          <i class="fas fa-fw fa-edit"></i>
          <span>Tanggapi Pengaduan</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <h1>Aplikasi Pengaduan Masyarakat - Petugas</h1>
        </nav>

        <div class="container-fluid">
          <h1 class="h4 mb-4 text-gray-800"><?php include 'halaman-petugas.php'; ?></h1>
        </div>
      </div>

      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Aplikasi Pengaduan Masyarakat&copy2024</span>
          </div>
        </div>
      </footer>

    </div>
  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="js/demo/datatables-demo.js"></script>
</body>

</html>
