<?php
//session_start();
//if (!isset($_SESSION['user'])) {
  // jika user belum login
  //header('Location: ../login');
 // exit();


include('../../config/koneksi.php');

// ambil data dari form
$kode_departemen  = $_POST['kode_departemen'];
$nama_departemen  = $_POST['nama_departemen'];
$kode_divisi      = $_POST['kode_divisi'];

// masukkan ke database
$query = "INSERT INTO departemen(kode_departemen,nama_departemen,kode_divisi) VALUES ('$kode_departemen', '$nama_departemen', '$kode_divisi', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah user berhasil'); window.location.href='../departemen'</script>";
} else {
  echo "<script>window.alert('Tambah user gagal!'); window.location.href='../departemen/data-index.php'</script>";
}

?>