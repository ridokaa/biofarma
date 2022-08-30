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
// // }
// else{
//     echo "tidak tersambung"; die;
//  }
    $host       = "localhost";
    $user       = "root";
    $pass       = "";
    $database   = "softwarealat";

    $koneksi = mysqli_connect($host, $user, $pass, $database) or die("gagal koneksi ke database");


// ambil data dari form
$id_departemen    = $_GET['id_departemen'];
$kode_departemen  = $_GET['kode_departemen'];
$nama_departemen  = $_GET['nama_departemen'];
$kode_divisi      = $_GET['kode_divisi'];


//var_dump($kode_departemen,$nama_departemen, $kode_divisi ); die;

// masukkan ke database
$query = "INSERT INTO departemen (id_departemen, kode_departemen,nama_departemen,kode_divisi)  VALUES ('$id_departemen', '$kode_departemen', '$nama_departemen', '$kode_divisi')";

$hasil = mysqli_query($koneksi, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
     echo "Penambahan data berhasil";
    header('location:../index.php?page=departemen');
} else {
    echo "Penambahan data gagal!". mysqli_connect_error($koneksi);
    header('location:../index.php?page=departemen');
}
?>