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
$id_personel        = $_GET['id_personel'];
$nik                = $_GET['nik'];
$nama_personel      = $_GET['nama_personel'];
$kode_departemen    = $_GET['kode_departemen'];

//var_dump($kode_departemen,$nama_departemen, $kode_divisi ); die;

// masukkan ke database
$query = "UPDATE personel SET nik='$nik',nama_personel='$nama_personel', kode_departemen='$kode_departemen' WHERE id_personel='$id_personel'";

$hasil = mysqli_query($koneksi, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
     echo "Edit data berhasil";
    header('location:../index.php?page=personel');
} else {
    echo "Edit data gagal!". mysqli_connect_error($koneksi);
    header('location:../index.php?page=personel');
}
?>