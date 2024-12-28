<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Aplikasi Pengaduan Masyarakat - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
  /* Latar belakang halaman */
  body.bg-gradient-primary {
    background: linear-gradient(to right, #036DA4, #5EA3C0); /* Blue Blue dan Air Superiority Blue */
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
                    <h1 class="h4 text-gray-900 mb-4">Silahkan Daftarkan Data Diri Anda</h1>
                  </div>
                  <form method="post" action="proses-register.php"  class="user"> 
                    <div class="form-group">
                      <input name="nik" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan NIK Anda" required>
                    </div>
                    <div class="form-group">
                      <input name="nama" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Nama Anda" required>
                    </div>
                    <div class="form-group">
                      <input name="username" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username Anda" required>
                    </div>
                    <div class="form-group">
                      <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Password" required>
                    </div>
                    <div class="form-group">
                      <input name="telepon" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Nomor Telepon Anda" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Registrasi
                    </button>
                    <hr>
                    <a href="index.php" class="btn btn-succes btn-user btn-block">
                      <i class="fa fa-laptop fa-fw"></i> Sudah Punya Akun? Silahkan Login!
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

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
