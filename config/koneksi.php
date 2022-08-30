<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$database   = "softwarealat";

$koneksi = mysqli_connect($host, $user, $pass, $database) or die("gagal koneksi ke database");
?>
<!-- //mengecekkoneksi ke database
// if(!$koneksi){
//   die ("Koneksi ke database gagal?". mysqli_connect_error());
//  }
//  else{
//    echo "Koneksi Berhasil";

// } -->
