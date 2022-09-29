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

// var_dump($_POST);
// die();


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
$urs                    = $_POST['urs'];
$protokol               = $_POST['protokol'];
$iq	                    = $_POST['iq	'];
$oq                     = $_POST['oq'];
$pq                     = $_POST['pq'];
$val_report             = $_POST['val_report'];
$change_kontrol         = $_POST['change_kontrol'];
$sop                    = $_POST['sop'];
$fda21_cprpart11_comly  = $_POST['fda21_cprpart11_comly'];
$keterangan             = $_POST['keterangan'];



if(isset($no_laporan)){

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
}



//Tabel Laporan_detail
$queryd = "INSERT INTO laporan_detail ( id_transaksi, no_laporan, kode_equipment, kode_software, kode_supplier, kode_vendor, val_plan, urs, protokol, iq, oq, pq , val_report, change_kontrol, sop, fda21_cprpart11_comly, keterangan)
           VALUES ( '$id_transaksi', '$no_laporan', '$kode_equipment', '$kode_software', '$kode_supplier', '$kode_vendor', '$val_plan', '$urs', '$protokol', '$iq', '$oq', '$pq', '$val_report', '$change_kontrol', '$sop', '$fda21_cprpart11_comly', '$keterangan' )";

$hasild = mysqli_query($koneksi, $queryd);

// if($hasild == true) {
//     echo "Penambahan data berhasil";
//     header('location:../index.php?page=master');
// } else {
//     echo "Penambahan data gagal!" . mysqli_connect_error($koneksi);
//     header('location:../index.php?page=master');
// }



// FILE UPLOAD VAL PLAN
// ambil data file
$namaFileVal_plan = $_FILES['file-val_plan']['name'];
$namaSementaraVal_plan = $_FILES['file-val_plan']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../../uploads/val_plan/";
$url_file_val_plan= "/uploads/val_plan/".$namaFileVal_plan;

// pindahkan file
$terupload = move_uploaded_file($namaSementaraVal_plan, $dirUpload.$namaFileVal_plan);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFileVal_plan."'>".$namaFileVal_plan."</a>";
} else {
    echo "Upload Gagal!";
}

// FILE UPLOAD URS
// ambil data file
$namaFileUrs = $_FILES['file-urs']['name'];
$namaSementaraUrs = $_FILES['file-urs']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../../uploads/urs/";
$url_file_urs= "/uploads/urs/".$namaFileUrs;
// var_dump($url_file_urs);
// die();

// pindahkan file
$terupload = move_uploaded_file($namaSementaraUrs, $dirUpload.$namaFileUrs);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFileUrs."'>".$namaFileUrs."</a>";
} else {
    echo "Upload Gagal!";
}

// FILE UPLOAD PROTOKOL
// ambil data file
$namaFileProtokol = $_FILES['file-protokol']['name'];
$namaSementaraProtokol = $_FILES['file-protokol']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../../uploads/protokol/";
$url_file_protokol= "/uploads/urs/".$namaFileProtokol;

// pindahkan file
$terupload = move_uploaded_file($namaSementaraProtokol, $dirUpload.$namaFileProtokol);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFileProtokol."'>".$namaFileProtokol."</a>";
} else {
    echo "Upload Gagal!";
}

// FILE UPLOAD IQ
// ambil data file
$namaFileiq = $_FILES['file-iq']['name'];
$namaSementaraiq = $_FILES['file-iq']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../../uploads/iq/";
$url_file_iq= "/uploads/iq/".$namaFileiq;

// pindahkan file
$terupload = move_uploaded_file($namaSementaraiq, $dirUpload.$namaFileiq);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFileiq."'>".$namaFileiq."</a>";
} else {
    echo "Upload Gagal!";
}

// FILE UPLOAD OQ
// ambil data file
$namaFileoq = $_FILES['file-oq']['name'];
$namaSementaraoq = $_FILES['file-oq']['tmp_name'];

// tentukan lokasi file akan dipindahkanbb   
$dirUpload = "../../uploads/oq/";
$url_file_oq= "/uploads/oq/".$namaFileoq;

// pindahkan file
$terupload = move_uploaded_file($namaSementaraoq, $dirUpload.$namaFileoq);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFileoq."'>".$namaFileoq."</a>";
} else {
    echo "Upload Gagal!";
}

// FILE UPLOAD PQ
// ambil data file
$namaFilepq = $_FILES['file-pq']['name'];
$namaSementarapq = $_FILES['file-pq']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../../uploads/pq/";
$url_file_pq= "/uploads/pq/".$namaFilepq;

// pindahkan file
$terupload = move_uploaded_file($namaSementarapq, $dirUpload.$namaFilepq);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFilepq."'>".$namaFilepq."</a>";
} else {
    echo "Upload Gagal!";
}

// FILE UPLOAD VAL REPORT
// ambil data file
$namaFileVal_report = $_FILES['file-val_report']['name'];
$namaSementaraVal_report = $_FILES['file-val_report']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../../uploads/val_report/";
$url_file_val_report= "/uploads/val_report/".$namaFileVal_report;

// pindahkan file
$terupload = move_uploaded_file($namaSementaraVal_report, $dirUpload.$namaFileVal_report);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFileVal_report."'>".$namaFileVal_report."</a>";
} else {
    echo "Upload Gagal!";
}

// FILE UPLOAD SOP
// ambil data file
$namaFilesop = $_FILES['file-sop']['name'];
$namaSementarasop = $_FILES['file-sop']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../../uploads/sop/";
$url_file_sop= "/uploads/sop/".$namaFilesop;

// pindahkan file
$terupload = move_uploaded_file($namaSementarasop, $dirUpload.$namaFilesop);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFilesop."'>".$namaFilesop."</a>";
} else {
    echo "Upload Gagal!";
}

// FILE UPLOAD CHANGE KONTROL
// ambil data file
$namaFileChange_kontrol = $_FILES['file-change_kontrol']['name'];
$namaSementaraChange_kontrol = $_FILES['file-change_kontrol']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../../uploads/change_kontrol/";
$url_file_change_kontrol= "/uploads/change_kontrol/".$namaFileChange_kontrol;

// pindahkan file
$terupload = move_uploaded_file($namaSementaraChange_kontrol, $dirUpload.$namaFileChange_kontrol);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFileChange_kontrol."'>".$namaFileChange_kontrol."</a>";
} else {
    echo "Upload Gagal!";
}

// FILE UPLOAD FDA CFR Part 11 Comply
// ambil data file
$namaFilefda21_cprpart11_comly = $_FILES['file-fda21_cprpart11_comly']['name'];
$namaSementarafda21_cprpart11_comly = $_FILES['file-fda21_cprpart11_comly']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../../uploads/fda21_cprpart11_comly/";
$url_file_fda21_cprpart11_comly= "/uploads/fda21_cprpart11_comly/".$namaFilefda21_cprpart11_comly;

// pindahkan file
$terupload = move_uploaded_file($namaSementarafda21_cprpart11_comly, $dirUpload.$namaFilefda21_cprpart11_comly);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFilefda21_cprpart11_comly."'>".$namaFilefda21_cprpart11_comly."</a>";
} else {
    echo "Upload Gagal!";
}




