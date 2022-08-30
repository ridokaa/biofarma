<?php
include('../../config/koneksi.php');

// ambil dari url


// ambil data dari form
$kode_supplier = $_GET['kode_supplier'];

// masukkan ke database
$query = mysqli_query($koneksi,"DELETE FROM supplier WHERE kode_supplier ='$kode_supplier'");
header('location:../index.php?page=supplier');

?>