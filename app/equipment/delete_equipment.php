<?php
include('../../config/koneksi.php');

// ambil dari url


// ambil data dari form
$kode_equipment = $_GET['kode_equipment'];

// masukkan ke database
$query = mysqli_query($koneksi,"DELETE FROM equipment WHERE kode_equipment ='$kode_equipment'");
header('location:../index.php?page=equipment');

?>