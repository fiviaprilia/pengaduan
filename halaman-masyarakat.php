<?php

if(isset($_GET['url'])){
    switch ($_GET['url']){
        case 'tulis-pengaduan': #YANG AKAN DIPANGGIL
        include 'tulis-pengaduan.php'; #NAMA FILE YANG DIBUAT
        break;

        case 'lihat-pengaduan';
        include 'lihat-pengaduan.php';
        break;
        
        case 'detail-pengaduan';
        include 'detail-pengaduan.php';
        break;
        
        default:
        echo "Halaman Tidak Ditemukan";
        break;

        case 'lihat-tanggapan';
        include 'lihat-tanggapan.php';
        break;
    }
}else{
    echo "Laporkan masalah dan pengaduan Anda demi desa yang lebih baik!<br>";
    echo "Anda Login Sebagai : ".$_SESSION['nama'];
}