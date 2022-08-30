<?php 
    //Koneksikan dengan database
    // include('../../config/koneksi.php');
    $host       = "localhost";
    $user       = "root";
    $pass       = "";
    $database   = "softwarealat";

    $koneksi = mysqli_connect($host, $user, $pass, $database) or die("gagal koneksi ke database");
                                    
    // ambil dari database
    $query = "SELECT supplier.kode_supplier, supplier.nama_supplier, supplier.alamat, kota.kota, supplier. telepon, kontak.nama_kontak, supplier.catatan 
              FROM supplier 
              JOIN kontak ON supplier.kode_kontak=kontak.kode_kontak
              JOIN kota ON supplier.kota=kota.kota ";
    $hasil = mysqli_query($koneksi, $query);

    $data_user = array();

    $Urut  =1;//menambahkan no urut
    while ($row = mysqli_fetch_assoc($hasil)) {
    $data_user[] = $row;
    }                                      
?>            