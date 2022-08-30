<?php
include('../../config/koneksi.php');

// ambil dari url


// ambil data dari form
$id_personel = $_GET['id_personel'];

// masukkan ke database
$query = mysqli_query($koneksi,"DELETE FROM personel WHERE id_personel ='$id_personel'");
header('location:../index.php?page=personel');

?>