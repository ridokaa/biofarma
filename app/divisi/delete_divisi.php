<?php
include('../../config/koneksi.php');

// ambil dari url


// ambil data dari form
$kode_divisi = $_GET['kode_divisi'];

// masukkan ke database
$query = mysqli_query($koneksi,"DELETE FROM divisi WHERE kode_divisi ='$kode_divisi'");
header('location:../index.php?page=divisi');

?>