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


// ambil data dari form Tabel laporan_master
$no_laporan             = $_POST['no_laporan'];
$tanggal_laporan        = $_POST['tanggal_laporan'];
$kode_departemen        = $_POST['kode_departemen'];
$kode_divisi            = $_POST['kode_divisi'];
$kode_direktorat        = $_POST['kode_direktorat'];
$id_personel            = $_POST['id_personel'];


//Tabel laporan_detail
$id_transaksi           = $_POST['id_transaksi'];
$no_laporan             = $_POST['no_laporan'];
$kode_equipment         = $_POST['kode_equipment'];
$kode_software          = $_POST['kode_software'];
$kode_supplier          = $_POST['kode_supplier'];
$kode_vendor            = $_POST['kode_vendor'];
$val_plan               = $_POST['val_plan'];
$urs_number             = $_POST['urs_number'];
$urs                    = $_POST['urs'];
$protokol_number        = $_POST['protokol_number'];
$protokol               = $_POST['protokol'];
$iq	                    = $_POST['iq	'];
$oq                     = $_POST['oq'];
$pq                     = $_POST['pq'];
$iq_number              = $_POST['iq_number'];
$oq_number              = $_POST['oq_number'];
$val_report             = $_POST['val_report'];
$change_kontrol         = $_POST['change_kontrol'];
$sop                    = $_POST['sop'];
$fda21_cprpart11_comly  = $_POST['fda21_cprpart11_comly'];
$keterangan             = $_POST['keterangan'];



// // masukkan ke database Tabel laporan_master
$query = "INSERT INTO laporan_master ( no_laporan, tanggal_laporan, kode_departemen, kode_divisi, kode_direktorat, id_personel)    
          VALUES ('$no_laporan', '$tanggal_laporan', '$kode_departemen', '$kode_divisi','$kode_direktorat','$id_personel')";
// var_dump($query);
$hasil = mysqli_query($koneksi, $query);

// var_dump(mysqli_affected_rows($koneksi));

//cek keberhasilan pendambahan data
if ($hasil == true) {
    echo "Penambahan data berhasil";
    header('location:../index.php?page=master&no_laporan=' . $no_laporan);
} else {
    echo "Penambahan data gagal!" . mysqli_connect_error($koneksi);
    header('location:../index.php?page=master');
}


//Tabel Laporan_detail
$queryd = "INSERT INTO laporan_detail ( id_transaksi, no_laporan, kode_equipment, kode_software, kode_supplier, kode_vendor, val_plan, urs_number, urs, protokol_number, protokol, iq, oq, pq ,iq_number, oq_number, val_report, change_kontrol, sop, fda21_cprpart11_comly, keterangan
           VALUES ( '$id_transaksi', '$no_laporan', '$kode_departemen', '$kode_equipment', '$kode_software', '$kode_supplier', '$kode_vendor', '$val_plan', '$urs_number', '$urs', '$protokol_number', '$protokol', '$iq', '$oq', '$pq', '$iq_number', '$oq_number', '$val_report', '$change_kontrol', '$sop', '$fda21_cprpart11_comly', '$keterangan' )";

$hasild = mysqli_query($koneksi, $queryd);

if($hasild == true) {
    echo "Penambahan data berhasil";
    header('location:../index.php?page=master');
} else {
    echo "Penambahan data gagal!" . mysqli_connect_error($koneksi);
    header('location:../index.php?page=master');
}



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




