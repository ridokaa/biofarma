<?php
//session_start();
//if (!isset($_SESSION['user'])) {
  // jika user belum login
  //header('Location: ../login');
 // exit();


include('../../config/koneksi.php');

// ambil data dari form
$id_divisi    = $_POST['id_divisi'];
$kode_divisi  = $_POST['kode_divisi'];
$nama_divisi  = $_POST['nama_divisi'];
$kode_direktorat  = $_POST['kode_direktorat'];

// masukkan ke database
$query = "INSERT INTO divisi(id_divisi, kode_divisi,nama_divisi,kode_direktorat) VALUES ('$id_divisi', '$kode_divisi', '$nama_divisi','$kode_direktorat', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah user berhasil'); window.location.href='../divisi'</script>";
} else {
  echo "<script>window.alert('Tambah user gagal!'); window.location.href='../divisi/data_index_divisi.php'</script>";
}

?>