<?php
include('../../config/koneksi.php');

// ambil dari url


// ambil data dari form
$kode_departemen = $_GET['kode_departemen'];

// masukkan ke database
$query = mysqli_query($koneksi,"DELETE FROM departemen WHERE kode_departemen ='$kode_departemen'");
header('location:../index.php?page=departemen');

?>