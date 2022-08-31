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
$no_laporan         = $_GET['no_laporan'];
$tanggal_laporan    = $_GET['tanggal_laporan'];
$kode_departemen    = $_GET['kode_departemen'];
$kode_divisi        = $_GET['kode_divisi'];
$kode_direktorat    = $_GET['kode_direktorat'];
$id_personel        = $_GET['id_personel'];



//var_dump($kode_departemen,$nama_departemen, $kode_divisi ); die;

// masukkan ke database
$query = "INSERT INTO laporan_master (no_laporan, tanggal_laporan,kode_departemen,kode_divisi,kode_direktorat,id_personel)  VALUES ('$no_laporan', '$tanggal_laporan', '$kode_departemen', '$kode_divisi','$kode_direktorat','$id_personel')";

$hasil = mysqli_query($koneksi, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
     echo "Penambahan data berhasil";
    header('location:../index.php?page=laporan_master');
} else {
    echo "Penambahan data gagal!". mysqli_connect_error($koneksi);
    header('location:../index.php?page=laporan_master');
}
?>