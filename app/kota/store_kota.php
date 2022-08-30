<?php
//session_start();
//if (!isset($_SESSION['user'])) {
  // jika user belum login
  //header('Location: ../login');
 // exit();


include('../../config/koneksi.php');

// ambil data dari form
$kota           = $_POST['kota'];
$propinsi       = $_POST['propinsi'];
$negara         = $_POST['negara'];
$kode_pos       = $_POST['kode_pos'];


// masukkan ke database
$query = "INSERT INTO kota (kota, propinsi, negara, kode_pos  )  VALUES ('$kota ', '$propinsi', '$negara', '$kode_pos',  CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah user berhasil'); window.location.href='../kota'</script>";
} else {
  echo "<script>window.alert('Tambah user gagal!'); window.location.href='../user/data_index_kota.php'</script>";
}

?>