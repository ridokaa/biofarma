<?php
//session_start();
//if (!isset($_SESSION['user'])) {
  // jika user belum login
  //header('Location: ../login');
 // exit();


include('../../config/koneksi.php');

// ambil data dari form
$no_gedung            = $_POST['no_gedung'];
$nama_gedung          = $_POST['nama_gedung'];


// masukkan ke database
$query = "INSERT INTO gedung (no_gedung, nama_gedung)  VALUES ('$no_gedung ', '$nama_gedung', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah user berhasil'); window.location.href='../user'</script>";
} else {
  echo "<script>window.alert('Tambah user gagal!'); window.location.href='../user/data_index_gedung.php'</script>";
}

?>