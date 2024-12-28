<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Aplikasi Pengaduan Masyarakat</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <style>
    /* Latar belakang halaman */
    body.bg-gradient-primary {
      background: linear-gradient(to right, #036DA4, #5EA3C0); /* Blue Blue dan Air Superiority Blue */
    }

    Header dan teks
    h1, h4, label, .btn {
      font-size: 1.2rem; /* Ukuran font lebih besar */
      font-weight: 500; /* Tambahkan ketebalan font */
      color: #033244; /* Warna biru gelap untuk kontras */
    }

    /* Placeholder input */
    ::placeholder {
      color: #B9D9DC; /* Placeholder Light Blue */
      font-size: 1rem;
      opacity: 1;
    }

    /* Input teks */
    .form-control {
      border: 1px solid #DBEBE2; /* Garis luar Honeydew */
      font-size: 1rem;
      color: #033244; /* Teks biru gelap */
    }

    .form-control:focus {
      border-color: #036DA4; /* Blue Blue */
      box-shadow: 0 0 5px rgba(3, 50, 68, 0.5); /* Biru gelap */
    }

    /* Tombol login */
    .btn-primary {
      background-color: #5EA3C0; /* Air Superiority Blue */
      border-color: #5EA3C0;
      font-size: 1.1rem;
      font-weight: bold;
      color: white;
    }

    .btn-primary:hover {
      background-color: #B9D9DC; /* Light Blue */
      border-color: #B9D9DC;
      color: #033244; /* Teks biru gelap */
    }

    /* Tombol daftar */
    .btn-succes {
      background-color: #B9D9DC; /* Ivory */
      border-color: #B9D9DC;
      font-size: 1rem;
      font-weight: normal; /* Ubah dari bold menjadi normal */
      color: #033244; /* Teks biru gelap */
    }

    .btn-succes:hover {
      background-color: #DBEBE2; /* Honeydew */
      border-color: #DBEBE2;
    }

  </style>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-6 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang Di Aplikasi Pengaduan Masyarakat Desa Worawari!</h1>
                  </div>
                  <form class="user" method="post" action="proses-login.php">
                    <div class="form-group">
                      <input name="nik" type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Masukkan NIK Anda" required>
                    </div>
                    <div class="form-group">
                      <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                    <hr>
                    <a href="register.php" class="btn btn-succes btn-user btn-block" style="font-weight: normal;">
                    <i class="fa fa-laptop fa-fw"></i> Belum Punya Akun? Silahkan Daftar!
                    </a>
                    <a href="index2.php" class="btn btn-succes btn-user btn-block" style="font-weight: normal;">
                    <i class="fa fa-laptop fa-fw"></i> Login Sebagai Admin/Petugas
                    </a>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
</body>

</html>
