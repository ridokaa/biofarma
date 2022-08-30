<?php 
    //Koneksikan dengan database
    // include('../config/koneksi.php');
    $host       = "localhost";
    $user       = "root";
    $pass       = "";
    $database   = "softwarealat";

    $koneksi = mysqli_connect($host, $user, $pass, $database) or die("gagal koneksi ke database");
                                    
    // ambil dari database
    $query = "SELECT id_ruangan, no_ruangan, nama_ruangan, gedung.nama_gedung, no_lantai, catatan FROM ruangan, gedung WHERE ruangan.no_gedung=gedung.no_gedung";
    $hasil = mysqli_query($koneksi, $query);

    $data_user = array();

    $Urut  =1;//menambahkan no urut
    while ($row = mysqli_fetch_assoc($hasil)) {
    $data_user[] = $row;
    }                                      
?>                   