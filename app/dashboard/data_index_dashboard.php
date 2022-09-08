<?php
    //Koneksikan dengan database
    // include('../config/koneksi.php');
    $host       = "localhost";
    $user       = "root";
    $pass       = "";
    $database   = "softwarealat";

    $koneksi = mysqli_connect($host, $user, $pass, $database) or die("gagal koneksi ke database");

    $query_departemen = "SELECT COUNT(*) AS total FROM departemen";
    $hasil_departemen = mysqli_query($koneksi, $query_departemen);
    $jumlah_departemen = mysqli_fetch_assoc($hasil_departemen);

    $query_divisi = "SELECT COUNT(*) AS total FROM divisi";
    $hasil_divisi = mysqli_query($koneksi, $query_divisi);
    $jumlah_divisi = mysqli_fetch_assoc($hasil_divisi);

    $query_direktorat = "SELECT COUNT(*) AS total FROM direktorat";
    $hasil_direktorat = mysqli_query($koneksi, $query_direktorat);
    $jumlah_direktorat = mysqli_fetch_assoc($hasil_direktorat);


?>