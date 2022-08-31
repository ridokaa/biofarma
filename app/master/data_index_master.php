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

    $query = "SELECT laporan_master.no_laporan, laporan_master.tanggal_laporan, departemen.nama_departemen, divisi.nama_divisi, direktorat.nama_direktorat, personel.nama_personel
              FROM laporan_master
              JOIN departemen ON laporan_master.kode_departemen=departemen.kode_departemen
              JOIN personel ON laporan_master.id_personel=personel.id_personel
              JOIN divisi ON laporan_master.kode_divisi=divisi.kode_divisi
              JOIN direktorat ON laporan_master.kode_direktorat=direktorat.kode_direktorat";
    $hasil = mysqli_query($koneksi, $query);
    
    $data_user = array();

    $Urut  =1;//menambahkan no urut
    while ($row = mysqli_fetch_assoc($hasil)) {
    $data_user[] = $row;
    }                                      
?>                   