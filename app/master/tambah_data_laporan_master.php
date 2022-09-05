<?php
// session_start();
// if (!isset($_SESSION['user'])) {
//   // jika user belum login
//   header('Location: ../login');
//   exit();
// }


// include('../../config/koneksi.php');

// if($koneksi){
//      echo "tersambung"; die;
// // }
// else{
//     echo "tidak tersambung"; die;
//  }
$host       = "localhost";
$user       = "root";
$pass       = "";
$database   = "softwarealat";

$koneksi = mysqli_connect($host, $user, $pass, $database) or die("gagal koneksi ke database");


// ambil data dari form
$no_laporan         = $_POST['no_laporan'];
$tanggal_laporan    = $_POST['tanggal_laporan'];
$kode_departemen    = $_POST['kode_departemen'];
$kode_divisi        = $_POST['kode_divisi'];
$kode_direktorat    = $_POST['kode_direktorat'];
$id_personel        = $_POST['id_personel'];


// FILE UPLOAD VAL PLAN
// ambil data file
$namaFile = $_FILES['file-val_plan']['name'];
$namaSementara = $_FILES['file-val_plan']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../../uploads/val_plan/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}

// FILE UPLOAD URS
// ambil data file
$namaFile = $_FILES['file-urs']['name'];
$namaSementara = $_FILES['file-urs']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../../uploads/urs/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}

// FILE UPLOAD PROTOKOL
// ambil data file
$namaFile = $_FILES['file-protokol']['name'];
$namaSementara = $_FILES['file-protokol']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../../uploads/protokol/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}

// FILE UPLOAD IQ
// ambil data file
$namaFile = $_FILES['file-iq']['name'];
$namaSementara = $_FILES['file-iq']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../../uploads/iq/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}

// FILE UPLOAD OQ
// ambil data file
$namaFile = $_FILES['file-oq']['name'];
$namaSementara = $_FILES['file-oq']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../../uploads/oq/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}

// FILE UPLOAD PQ
// ambil data file
$namaFile = $_FILES['file-pq']['name'];
$namaSementara = $_FILES['file-pq']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../../uploads/pq/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}

// FILE UPLOAD VAL REPORT
// ambil data file
$namaFile = $_FILES['file-val_report']['name'];
$namaSementara = $_FILES['file-val_report']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../../uploads/val_report/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}

// FILE UPLOAD SOP
// ambil data file
$namaFile = $_FILES['file-sop']['name'];
$namaSementara = $_FILES['file-sop']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../../uploads/sop/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}

// FILE UPLOAD FDA CFR Part 11 Comply
// ambil data file
$namaFile = $_FILES['file-fda21_cprpart11_comly']['name'];
$namaSementara = $_FILES['file-fda21_cprpart11_comly']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../../uploads/fda21_cprpart11_comly/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}


//var_dump($kode_departemen,$nama_departemen, $kode_divisi ); die;

// // masukkan ke database
// $query = "INSERT INTO laporan_master ( no_laporan, tanggal_laporan, kode_departemen, kode_divisi, kode_direktorat, id_personel)    VALUES ('$no_laporan', '$tanggal_laporan', '$kode_departemen', '$kode_divisi','$kode_direktorat','$id_personel')";
// // var_dump($query);
// $hasil = mysqli_query($koneksi, $query);

// // var_dump(mysqli_affected_rows($koneksi));

//cek keberhasilan pendambahan data
// if ($hasil == true) {
//     echo "Penambahan data berhasil";
//     header('location:../index.php?page=master&no_laporan=' . $no_laporan);
// } else {
//     echo "Penambahan data gagal!" . mysqli_connect_error($koneksi);
//     header('location:../index.php?page=master');
// }
