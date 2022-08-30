<?php
include('../../config/koneksi.php');

// ambil dari url


// ambil data dari form
$kode_direktorat = $_GET['kode_direktorat'];

// masukkan ke database
$query = mysqli_query($koneksi,"DELETE FROM direktorat WHERE kode_direktorat ='$kode_direktorat'");
header('location:../index.php?page=direktorat');

?>