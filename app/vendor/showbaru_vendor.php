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
$kode_vendor    = $_GET['kode_vendor'];
$nama_vendor    = $_GET['nama_vendor'];
$alamat         = $_GET['alamat'];
$kota           = $_GET['kota'];
$telepon        = $_GET['telepon'];
$kode_kontak    = $_GET['kode_kontak'];
$catatan        = $_GET['catatan'];
$email          = $_GET['email'];
$web            = $_GET['web'];
$created_at      = $_GET['created_at'];
$updated_at      = $_GET['updated_at'];
//var_dump($kode_departemen,$nama_departemen, $kode_divisi ); die;

// masukkan ke database
$query = "SELECT * FROM vendor WHERE kode_vendor='$kode_vendor'";

$hasil = mysqli_query($koneksi, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
     echo "Edit data berhasil";
    header('location:../index.php?page=vendor');
} else {
    echo "Edit data gagal!". mysqli_connect_error($koneksi);
    header('location:../index.php?page=vendor');
}
?>