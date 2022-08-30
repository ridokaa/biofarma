<?php
//session_start();
//if (!isset($_SESSION['user'])) {
  // jika user belum login
  //header('Location: ../login');
 // exit();


include('../../config/koneksi.php');

// ambil data dari form
$kode_equipment      = $_POST['kode_equipment'];
$nama_equipment      = $_POST['nama_equipment'];
$kode_software       = $_POST['kode_software'];
$kode_departemen     = $_POST['kode_departemen'];
$id_ruangan          = $_POST['id_ruangan'];


// masukkan ke database
$query = "INSERT INTO equipment (kode_equipment, nama_equipment, kode_software, kode_departemen, id_ruangan)  VALUES ('$kode_equipment ', '$nama_equipment', '$kode_software', '$kode_departemen', '$id_ruangan', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah user berhasil'); window.location.href='../user'</script>";
} else {
  echo "<script>window.alert('Tambah user gagal!'); window.location.href='../user/data_index_equipment.php'</script>";
}

?>