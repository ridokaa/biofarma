<?php
include('../../config/koneksi.php');

// ambil dari url


// ambil data dari form
$kode_kontak = $_GET['kode_kontak'];

// masukkan ke database
$query = mysqli_query($koneksi,"DELETE FROM kontak WHERE kode_kontak ='$kode_kontak'");
header('location:../index.php?page=kontak');

?>