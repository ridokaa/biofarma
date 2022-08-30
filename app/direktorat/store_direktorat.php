<?php
//session_start();
//if (!isset($_SESSION['user'])) {
  // jika user belum login
  //header('Location: ../login');
 // exit();


include('../../config/koneksi.php');

// ambil data dari form
$kode_direktorat  = $_POST['kode_direktorat'];
$nama_direktorat  = $_POST['nama_direktorat'];

// masukkan ke database
$query = "INSERT INTO direktorat(kode_direktorat,nama_direktorat) VALUES ('$kode_direktorat', '$nama_direktorat', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah user berhasil'); window.location.href='../direktorat'</script>";
} else {
  echo "<script>window.alert('Tambah user gagal!'); window.location.href='../direktorat/data_index_direktorat.php'</script>";
}

?>