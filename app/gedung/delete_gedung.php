<?php
include('../../config/koneksi.php');

// ambil dari url


// ambil data dari form
$no_gedung = $_GET['no_gedung'];

// masukkan ke database
$query = mysqli_query($koneksi,"DELETE FROM gedung WHERE no_gedung ='$no_gedung'");
header('location:../index.php?page=gedung');

?>