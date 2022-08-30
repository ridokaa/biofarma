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
$id_ruangan      = $_GET['id_ruangan'];
$no_ruangan      = $_GET['no_ruangan'];
$nama_ruangan    = $_GET['nama_ruangan'];
$no_gedung       = $_GET['no_gedung'];
$no_lantai       = $_GET['no_lantai'];
$catatan         = $_GET['catatan'];

//var_dump($kode_departemen,$nama_departemen, $kode_divisi ); die;

// masukkan ke database
$query = "UPDATE ruangan SET no_ruangan='$no_ruangan',nama_ruangan='$nama_ruangan', no_gedung='$no_gedung', no_lantai='$no_lantai', catatan='$catatan' WHERE id_ruangan='$id_ruangan'";

$hasil = mysqli_query($koneksi, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
     echo "Edit data berhasil";
    header('location:../index.php?page=ruangan');
} else {
    echo "Edit data gagal!". mysqli_connect_error($koneksi);
    header('location:../index.php?page=ruangan');
}
?>