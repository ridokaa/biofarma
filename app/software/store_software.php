<?php
//session_start();
//if (!isset($_SESSION['user'])) {
  // jika user belum login
  //header('Location: ../login');
 // exit();


include('../../config/koneksi.php');

// ambil data dari form
$id_software    = $_POST['id_software'];
$kode_software  = $_POST['kode_software'];
$nama_software  = $_POST['nama_software'];
$kode_vendor    = $_POST['kode_vendor'];
$jenis_software   = $_POST['jenis_software'];

// masukkan ke database
$query = "INSERT INTO software(id_software, kode_software, nama_software, kode_vendor, jenis_software) VALUES ('$id_software', '$kode_software', '$nama_software', '$kode_vendor', '$jenis_software', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah user berhasil'); window.location.href='../software'</script>";
} else {
  echo "<script>window.alert('Tambah user gagal!'); window.location.href='../software/data_index_software.php'</script>";
}

?>