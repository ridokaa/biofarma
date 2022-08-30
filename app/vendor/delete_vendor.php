<?php
include('../../config/koneksi.php');

// ambil dari url


// ambil data dari form
$kode_vendor = $_GET['kode_vendor'];

// masukkan ke database
$query = mysqli_query($koneksi,"DELETE FROM vendor WHERE kode_vendor ='$kode_vendor'");
header('location:../index.php?page=vendor');

?>