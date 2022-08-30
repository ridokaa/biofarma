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
$kode_kontak     = $_GET['kode_kontak'];
$nama_kontak     = $_GET['nama_kontak'];
$alamat          = $_GET['alamat'];
$kota            = $_GET['kota'];
$telepon         = $_GET['telepon'];
$hp              = $_GET['hp'];
$catatan         = $_GET['catatan'];
$email           = $_GET['email'];

// var_dump($kode_departemen,$nama_departemen, $kode_divisi ); die;

// masukkan ke database
$query = "INSERT INTO kontak (kode_kontak, nama_kontak, alamat, kota, telepon, hp, catatan, email)  VALUES ('$kode_kontak', '$nama_kontak ', '$alamat', '$kota', '$telepon', '$hp', '$catatan', '$email')";

$hasil = mysqli_query($koneksi, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
     echo "Penambahan data berhasil";
    header('location:../index.php?page=kontak');
} else {
    echo "Penambahan data gagal!". mysqli_connect_error($koneksi);
    header('location:../index.php?page=kontak');
}
?>