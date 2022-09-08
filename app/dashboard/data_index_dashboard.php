<?php
    //Koneksikan dengan database
    // include('../config/koneksi.php');
    $host       = "localhost";
    $user       = "root";
    $pass       = "";
    $database   = "softwarealat";

    $koneksi = mysqli_connect($host, $user, $pass, $database) or die("gagal koneksi ke database");

    $query_software = "SELECT COUNT(*) AS total FROM software";
    $hasil_software = mysqli_query($koneksi, $query_software);
    $jumlah_software = mysqli_fetch_assoc($hasil_software);

    $query_equipment = "SELECT COUNT(*) AS total FROM equipment";
    $hasil_equipment = mysqli_query($koneksi, $query_equipment);
    $jumlah_equipment = mysqli_fetch_assoc($hasil_equipment);



?>