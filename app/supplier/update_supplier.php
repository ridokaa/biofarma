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
$kode_supplier    = $_GET['kode_supplier'];
$nama_supplier    = $_GET['nama_supplier'];
$alamat         = $_GET['alamat'];
$kota           = $_GET['kota'];
$telepon        = $_GET['telepon'];
$kode_kontak    = $_GET['kode_kontak'];
$catatan        = $_GET['catatan'];


//var_dump($kode_departemen,$nama_departemen, $kode_divisi ); die;

// masukkan ke database
$query = "UPDATE supplier SET nama_supplier='$nama_supplier',alamat='$alamat', kota='$kota', telepon='$telepon', kode_kontak='$kode_kontak', catatan='$catatan'  WHERE kode_supplier='$kode_supplier'";

$hasil = mysqli_query($koneksi, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
     echo "Edit data berhasil";
    header('location:../index.php?page=supplier');
} else {
    echo "Edit data gagal!". mysqli_connect_error($koneksi);
    header('location:../index.php?page=supplier');
}
?>