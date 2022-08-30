<?php
include('../../config/koneksi.php');

// ambil dari url


// ambil data dari form
$kode_software = $_GET['kode_software'];

// masukkan ke database
$query = mysqli_query($koneksi,"DELETE FROM software WHERE kode_software ='$kode_software'");
header('location:../index.php?page=software');

?>