<?php
// session_start();
// if (!isset($_SESSION['user'])) {
//   // jika user belum login
//   header('Location: ../login');
//   exit();
// }


 //include('../../config/koneksi.php');

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
$id_divisi          = $_GET['id_divisi'];
$kode_divisi        = $_GET['kode_divisi'];
$nama_divisi        = $_GET['nama_divisi'];
$kode_direktorat    = $_GET['kode_direktorat'];

//var_dump($kode_departemen,$nama_departemen, $kode_divisi ); die;

// masukkan ke database
$query = "UPDATE divisi SET kode_divisi='$kode_divisi',nama_divisi='$nama_divisi',kode_direktorat='$kode_direktorat' WHERE id_divisi='$id_divisi'";

$hasil = mysqli_query($koneksi, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
     echo "Edit data berhasil";
    header('location:../index.php?page=divisi');
} else {
    echo "Edit data gagal!". mysqli_connect_error($koneksi);
    header('location:../index.php?page=divisi');
}
?>