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
// }
// else{
//     echo "tidak tersambung"; die;
// }

    $host       = "localhost";
    $user       = "root";
    $pass       = "";
    $database   = "softwarealat";

    $koneksi = mysqli_connect($host, $user, $pass, $database) or die("gagal koneksi ke database");


// ambil data dari form
$id_equipment        = $_GET['id_equipment'];
$kode_equipment      = $_GET['kode_equipment'];
$nama_equipment      = $_GET['nama_equipment'];
$kode_software       = $_GET['kode_software'];
$kode_departemen     = $_GET['kode_departemen'];
$id_ruangan          = $_GET['id_ruangan'];


// var_dump($kode_departemen,$nama_departemen, $kode_divisi ); die;

// masukkan ke database
$query = "INSERT INTO equipment (id_equipment, kode_equipment, nama_equipment, kode_software, kode_departemen, id_ruangan)  VALUES ('$id_equipment', '$kode_equipment ', '$nama_equipment', '$kode_software', '$kode_departemen', '$id_ruangan')";

$hasil = mysqli_query($koneksi, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
     echo "Penambahan data berhasil";
    header('location:../index.php?page=equipment');
} else {
    echo "Penambahan data gagal!". mysqli_connect_error($koneksi);
    header('location:../index.php?page=equipment');
}
?>