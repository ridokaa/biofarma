<?php
// session_start();
// if (!isset($_SESSION['user'])) {
//   // jika user belum login
//   header('Location: ../login');
//   exit();
// }


// include('../../config/koneksi.php');

// if($koneksi){
//      echo "tersambung"; die;
// }
// else{
//     echo "tidak tersambung"; die;
// }

    $host       = "localhost";
    $user       = "root";
    $pass       = "";
    $database   = "softwarealat";

    $koneksi = mysqli_connect($host, $user, $pass, $database) or die("gagal koneksi ke database");


// ambil data dari form
$id_kota        = $_GET['id_kota'];
$kota           = $_GET['kota'];
$propinsi       = $_GET['propinsi'];
$negara         = $_GET['negara'];
$kode_pos       = $_GET['kode_pos'];

// var_dump($kode_departemen,$nama_departemen, $kode_divisi ); die;

// masukkan ke database
$query = "INSERT INTO kota (id_kota, kota, propinsi, negara, kode_pos)  VALUES ('$id_kota', '$kota ', '$propinsi', '$negara', '$kode_pos')";

$hasil = mysqli_query($koneksi, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
     echo "Penambahan data berhasil";
    header('location:../index.php?page=kota');
} else {
    echo "Penambahan data gagal!". mysqli_connect_error($koneksi);
    header('location:../index.php?page=kota');
}
?>