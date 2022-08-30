<?php
include('../../config/koneksi.php');

// ambil dari url


// ambil data dari form
$kota = $_GET['kota'];

// masukkan ke database
$query = mysqli_query($koneksi,"DELETE FROM kota WHERE kota ='$kota'");
header('location:../index.php?page=kota');

?>