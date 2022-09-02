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
$no_laporan         = $_POST['no_laporan'];
$tanggal_laporan    = $_POST['tanggal_laporan'];
$kode_departemen    = $_POST['kode_departemen'];
$kode_divisi        = $_POST['kode_divisi'];
$kode_direktorat    = $_POST['kode_direktorat'];
$id_personel        = $_POST['id_personel'];




//var_dump($kode_departemen,$nama_departemen, $kode_divisi ); die;

// masukkan ke database
$query = "INSERT INTO laporan_master ( no_laporan, tanggal_laporan, kode_departemen, kode_divisi, kode_direktorat, id_personel)    VALUES ('$no_laporan', '$tanggal_laporan', '$kode_departemen', '$kode_divisi','$kode_direktorat','$id_personel')";
// var_dump($query);
$hasil = mysqli_query($koneksi, $query);

// var_dump(mysqli_affected_rows($koneksi));

//cek keberhasilan pendambahan data
if ($hasil == true) {
    echo "Penambahan data berhasil";
    header('location:../index.php?page=master&no_laporan=' . $no_laporan);
} else {
    echo "Penambahan data gagal!" . mysqli_connect_error($koneksi);
    header('location:../index.php?page=master');
}
