<?php
//session_start();
//if (!isset($_SESSION['user'])) {
  // jika user belum login
  //header('Location: ../login');
 // exit();


include('../../config/koneksi.php');

// ambil data dari form
$nik                = $_POST['nik'];
$nama_personel      = $_POST['nama_personel'];
$kode_departemen    = $_POST['kode_departemen'];


// masukkan ke database
$query = "INSERT INTO personel (nik, nama_personel, kode_departemen)  VALUES ('$nik', '$nama_personel ', '$kode_departemen', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah user berhasil'); window.location.href='../user'</script>";
} else {
  echo "<script>window.alert('Tambah user gagal!'); window.location.href='../user/data_index_gedung.php'</script>";
}

?>