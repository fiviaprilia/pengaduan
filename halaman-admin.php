<?php

if(isset($_GET['url'])){
    switch ($_GET['url']){
        case 'verifikasi-pengaduan': #YANG AKAN DIPANGGIL
        include 'verifikasi-pengaduan.php'; #NAMA FILE YANG DIBUAT
        break;
        
        default:
        echo "Halaman Tidak Ditemukan";
        break;
    }
}else{
    echo "Selamat Datang Di Aplikasi Pengaduan Masyarakat<br>";
    echo "Anda Login Sebagai : ".$_SESSION['nama_petugas'];
}