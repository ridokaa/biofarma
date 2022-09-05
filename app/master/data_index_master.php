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

    $queryd = "SELECT laporan_detail.id_transaksi, laporan_master.no_laporan, equipment.kode_equipment, equipment.nama_equipment, software.nama_software, supplier.nama_supplier, vendor.nama_vendor, 
    laporan_detail.val_plan, laporan_detail.urs_number, laporan_detail.urs, laporan_detail.protokol_number, laporan_detail.protokol, laporan_detail.iq, laporan_detail.oq, laporan_detail.pq, laporan_detail.iq_number,
    laporan_detail.oq_number, laporan_detail.val_report, laporan_detail.change_kontrol, laporan_detail.sop, laporan_detail.tda21_cprpart11_comly, laporan_detail.keterangan
    FROM laporan_detail
    JOIN laporan_master ON laporan_master.no_laporan=laporan_detail.no_laporan
    JOIN equipment ON equipment.kode_equipment=laporan_detail.kode_equipment
    JOIN software ON software.kode_software=laporan_detail.kode_software
    JOIN supplier ON supplier.kode_supplier=laporan_detail.kode_supplier
    JOIN vendor ON vendor.kode_vendor=laporan_detail.kode_vendor";
    $hasild = mysqli_query($koneksi, $queryd);


    $data_user = array();
    $data_laporan_detail = array();

    $Urut  =1;//menambahkan no urut
    while ($row = mysqli_fetch_assoc($hasil)) {
    $data_user[] = $row;
    }
    while ($row = mysqli_fetch_assoc($hasild)) {
    $data_laporan_detail[] = $row;
    }
