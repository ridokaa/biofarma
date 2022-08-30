<?php
//session_start();
//if (!isset($_SESSION['user'])) {
  // jika user belum login
  //header('Location: ../login');
 // exit();


include('../../config/koneksi.php');

// ambil data dari form
$nama_kontak     = $_POST['nama_kontak'];
$alamat          = $_POST['alamat'];
$kota            = $_POST['kota'];
$telepon         = $_POST['telepon'];
$hp              = $_POST['hp'];
$catatan         = $_POST['catatan'];
$email           = $_POST['email'];


// masukkan ke database
$query = "INSERT INTO kontak (kode_kontak, nama_kontak, alamat, kota, telepon, hp, catatan, email)  VALUES ('$kode_kontak', '$nama_kontak ', '$alamat', '$kota', '$telepon', '$hp', '$catatan', '$email', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah user berhasil'); window.location.href='../user'</script>";
} else {
  echo "<script>window.alert('Tambah user gagal!'); window.location.href='../user/data_index_gedung.php'</script>";
}

?>