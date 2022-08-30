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
$id_user            = $_GET['id_user'];
$nama_user          = $_GET['nama_user'];
$username_user      = $_GET['username_user'];
$pasword_user       = md5($_GET['password_user']);
$keterangan_user    = $_GET['keterangan_user'];
$level_user         = $_GET['level_user'];
$kode_departemen    = $_GET['kode_departemen'];



// var_dump($kode_departemen,$nama_departemen, $kode_divisi ); die;

// masukkan ke database
$query = "INSERT INTO user (id_user, nama_user, username_user, password_user, keterangan_user, level_user, kode_departemen)  VALUES ('$id_user', '$nama_user', '$username_user', '$pasword_user', '$keterangan_user', '$level_user', '$kode_departemen')";

$hasil = mysqli_query($koneksi, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
     echo "Penambahan data berhasil";
    header('location:../index.php?page=user');
} else {
    echo "Penambahan data gagal!". mysqli_connect_error($koneksi);
    header('location:../index.php?page=user');
}
?>