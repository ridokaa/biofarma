<?php
//session_start();
//if (!isset($_SESSION['user'])) {
  // jika user belum login
  //header('Location: ../login');
 // exit();


include('../../config/koneksi.php');

// ambil data dari form
$kode_supplier    = $_POST['kode_supplier'];
$nama_supplier    = $_POST['nama_supplier'];
$alamat         = $_POST['alamat'];
$kota           = $_POST['kota'];
$telepon        = $_POST['telepon'];
$kode_kontak    = $_POST['kode_kontak'];
$catatan        = $_POST['catatan'];




// masukkan ke database
$query = "INSERT INTO supplier (kode_supplier, nama_supplier,alamat,kota,telepon,kode_kontak,catatan)  VALUES ('$kode_supplier', '$nama_supplier', '$alamat', '$kota, $telepon,'$kode_kontak','$catatan', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";


$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah user berhasil'); window.location.href='../supplier'</script>";
} else {
  echo "<script>window.alert('Tambah user gagal!'); window.location.href='../supplier/data_index_supplier.php'</script>";
}

?>