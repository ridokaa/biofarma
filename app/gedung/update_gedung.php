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
$id_gedung            = $_GET['id_gedung'];
$no_gedung            = $_GET['no_gedung'];
$nama_gedung          = $_GET['nama_gedung'];

//var_dump($kode_departemen,$nama_departemen, $kode_divisi ); die;

// masukkan ke database
$query = "UPDATE gedung SET no_gedung='$no_gedung',nama_gedung='$nama_gedung'  WHERE id_gedung='$id_gedung'";

$hasil = mysqli_query($koneksi, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
     echo "Edit data berhasil";
    header('location:../index.php?page=gedung');
} else {
    echo "Edit data gagal!". mysqli_connect_error($koneksi);
    header('location:../index.php?page=gedung');
}
?>