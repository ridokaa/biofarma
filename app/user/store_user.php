<?php
//session_start();
//if (!isset($_SESSION['user'])) {
  // jika user belum login
  //header('Location: ../login');
 // exit();


include('../../config/koneksi.php');

// ambil data dari form
$nama_user          = $_POST['nama_user'];
$username_user      = $_POST['username_user'];
$password_user      = $_POST['password_user'];
$keterangan_user    = $_GET['keterangan_user'];
$level_user         = $_GET['level_user'];

// masukkan ke database
$query = "INSERT INTO user(nama_user,username_user,password_user,keterangan_user,level_user) VALUES ('$nama_user', '$username_user ', '$password_user', '$keterangan_user', '$level_user', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah user berhasil'); window.location.href='../user'</script>";
} else {
  echo "<script>window.alert('Tambah user gagal!'); window.location.href='../user/index_data_user.php'</script>";
}

?>