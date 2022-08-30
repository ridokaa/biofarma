<?php
//session_start();
//if (!isset($_SESSION['user'])) {
  // jika user belum login
  //header('Location: ../login');
 // exit();


include('../../config/koneksi.php');

// ambil data dari form
$kode_vendor    = $_POST['kode_vendor'];
$nama_vendor    = $_POST['nama_vendor'];
$alamat         = $_POST['alamat'];
$kota           = $_POST['kota'];
$telepon        = $_POST['telepon'];
$kode_kontak    = $_POST['kode_kontak'];
$catatan        = $_POST['catatan'];
$email          = $_POST['email'];
$web            = $_POST['web'];



// masukkan ke database
$query = "INSERT INTO vendor (kode_vendor, nama_vendor,alamat,kota,telepon,kode_kontak,catatan,email,web)  VALUES ('$kode_vendor', '$nama_vendor', '$alamat', '$kota, $telepon,'$kode_kontak','$catatan','$email,'$web', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";


$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah user berhasil'); window.location.href='../vendor'</script>";
} else {
  echo "<script>window.alert('Tambah user gagal!'); window.location.href='../vendor/data_index_vendor.php'</script>";
}

?>