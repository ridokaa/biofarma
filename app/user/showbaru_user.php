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
$id_user            = $_GET['id_user'];
$nama_user          = $_GET['nama_user'];
$username_user      = $_GET['username_user'];
$pasword_user       = $_GET['password_user'];
$keterangan_user    = $_GET['keterangan_user'];
$level_user         = $_GET['level_user'];
$kode_departemen    = $_GET['kode_departemen'];
$created_at    = $_GET['created_at'];
$updated_at    = $_GET['updated_at'];
//var_dump($kode_departemen,$nama_departemen, $kode_divisi ); die;

// masukkan ke database
$query = "SELECT * FROM user WHERE id_user='$id_user'";

$hasil = mysqli_query($koneksi, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
     echo "Edit data berhasil";
    header('location:../index.php?page=user');
} else {
    echo "Edit data gagal!". mysqli_connect_error($koneksi);
    header('location:../index.php?page=user');
}
?>