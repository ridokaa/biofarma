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
$id_software    = $_POST['id_software'];
$kode_software  = $_POST['kode_software'];
$nama_software  = $_POST['nama_software'];
$kode_vendor    = $_POST['kode_vendor'];
$jenis_software   = $_POST['jenis_software'];
$created_at    = $_GET['created_at'];
$updated_at    = $_GET['updated_at'];
//var_dump($kode_departemen,$nama_departemen, $kode_divisi ); die;

// masukkan ke database
$query = "SELECT* FROM software WHERE id_software='$id_software'";

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