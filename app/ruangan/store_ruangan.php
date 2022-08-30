<?php
//session_start();
//if (!isset($_SESSION['user'])) {
  // jika user belum login
  //header('Location: ../login');
 // exit();


include('../../config/koneksi.php');

// ambil data dari form
$no_ruangan             = $_POST['no_ruangan'];
$nama_ruangan           = $_POST['nama_ruangan'];
$no_gedung              = $_POST['no_gedung'];
$no_lantai              = $_POST['no_lantai'];
$catatan                = $_POST['catatan'];


// masukkan ke database
$query = "INSERT INTO ruangan (no_ruangan, nama_ruangan, no_gedung, no_lantai, catatan)  VALUES ('$no_ruangan', '$nama_ruangan ', '$no_gedung', '$no_lantai', '$catatan', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah user berhasil'); window.location.href='../user'</script>";
} else {
  echo "<script>window.alert('Tambah user gagal!'); window.location.href='../user/data_index_gedung.php'</script>";
}

?>