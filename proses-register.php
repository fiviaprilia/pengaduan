<?php

$nik        = $_POST['nik'];
$nama       = $_POST['nama'];
$username   = $_POST['username'];
$password   = $_POST['password'];
$telepon    = $_POST['telepon'];

include 'koneksi.php';

$sql ="INSERT INTO masyarakat(nik, nama, username, password, telepon) VALUES('$nik','$nama','$username', '$password','$telepon')";

$query = mysqli_query($koneksi, $sql);

if($query){
    echo "<script>alert('Anda Berhasil Registrasi');window.location.assign('index.php');</script>"; 
}else{
    echo "<script>alert('Anda Gagal Registrasi');window.location.assign('register.php');</script>"; 
}
