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
$id_software    = $_GET['id_software'];
$kode_software  = $_GET['kode_software'];
$nama_software  = $_GET['nama_software'];
$kode_vendor    = $_GET['kode_vendor'];
$jenis_software = $_GET['jenis_software'];
$tahun          = $_GET['tahun'];

//var_dump($kode_departemen,$nama_departemen, $kode_divisi ); die;

// masukkan ke database
$query = "UPDATE software SET kode_software='$kode_software',nama_software='$nama_software',kode_vendor='$kode_vendor', jenis_software='$jenis_software', tahun='$tahun' WHERE id_software='$id_software'";

$hasil = mysqli_query($koneksi, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
     echo "Edit data berhasil";
    header('location:../index.php?page=software');
} else {
    echo "Edit data gagal!". mysqli_connect_error($koneksi);
    header('location:../index.php?page=software');
}
?>