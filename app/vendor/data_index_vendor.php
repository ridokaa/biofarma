<?php 
    //Koneksikan dengan database
    // include('../../config/koneksi.php');
    $host       = "localhost";
    $user       = "root";
    $pass       = "";
    $database   = "softwarealat";

    $koneksi = mysqli_connect($host, $user, $pass, $database) or die("gagal koneksi ke database");
                                    
    // ambil dari database
    $query = "SELECT vendor.kode_vendor, vendor.nama_vendor, vendor.alamat, vendor.kota, vendor. telepon, kontak.nama_kontak, vendor.catatan, vendor. email, vendor.web 
              FROM vendor 
              JOIN kontak ON vendor.kode_kontak=kontak.kode_kontak ";
    $hasil = mysqli_query($koneksi, $query);

    $data_user = array();

    $Urut  =1;//menambahkan no urut
    while ($row = mysqli_fetch_assoc($hasil)) {
    $data_user[] = $row;
    }                                      
?>            