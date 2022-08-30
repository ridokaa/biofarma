<?php 
    //Koneksikan dengan database
    // include('../config/koneksi.php');
    $host       = "localhost";
    $user       = "root";
    $pass       = "";
    $database   = "softwarealat";

    $koneksi = mysqli_connect($host, $user, $pass, $database) or die("gagal koneksi ke database");
                                    
    // ambil dari database
    // $query = "SELECT kode_equipment, nama_equipment, software.nama_software, ruangan.nama_ruangan, departemen.nama_departemen FROM equipment, software, ruangan, departemen WHERE equipment.kode_software=software.kode_software, equipment.id_ruangan=ruangan.id_ruangan, equipment.kode_departemen=departemen.kode_departemen";
    // $hasil = mysqli_query($koneksi, $query);

    $query = "SELECT equipment.id_equipment, equipment.kode_equipment, equipment.nama_equipment, software.nama_software, ruangan.nama_ruangan, departemen.nama_departemen
              FROM equipment
              JOIN software ON equipment.kode_software=software.kode_software
              JOIN ruangan ON equipment.id_ruaangan=ruangan.id_ruangan
              JOIN departemen ON equipment.kode_departemen=departemen.kode_departemen";
    $hasil = mysqli_query($koneksi, $query);
    
    $data_user = array();

    $Urut  =1;//menambahkan no urut
    while ($row = mysqli_fetch_assoc($hasil)) {
    $data_user[] = $row;
    }                                      
?>                   