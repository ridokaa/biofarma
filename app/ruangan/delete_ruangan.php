<?php
include('../../config/koneksi.php');

// ambil dari url


// ambil data dari form
$id_ruangan = $_GET['id_ruangan'];

// masukkan ke database
$query = mysqli_query($koneksi,"DELETE FROM ruangan WHERE id_ruangan ='$id_ruangan'");
header('location:../index.php?page=personel');

?>