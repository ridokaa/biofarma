<?php
include('../../config/koneksi.php');

// ambil dari url


// ambil data dari form
$id_user = $_GET['id_user'];

// masukkan ke database
$query = mysqli_query($koneksi,"DELETE FROM user WHERE id_user ='$id_user'");
header('location:../index.php?page=user');

?>