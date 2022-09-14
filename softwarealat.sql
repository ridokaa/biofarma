-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 08:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softwarealat`
--

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id_departemen` int(11) NOT NULL,
  `kode_departemen` varchar(10) NOT NULL,
  `nama_departemen` varchar(100) NOT NULL,
  `kode_divisi` varchar(10) NOT NULL,
  `kode_direktorat` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_update` int(11) NOT NULL,
  `user_edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_departemen`, `kode_departemen`, `nama_departemen`, `kode_divisi`, `kode_direktorat`, `created_at`, `updated_at`, `user_update`, `user_edit`) VALUES
(17, '7564', 'campak', '6400', '', '2022-08-01 04:43:53', '2022-08-01 04:43:53', 0, 0),
(32, '2221', 'Departemen', '3200', '', '2022-09-06 02:19:49', '2022-09-06 02:19:49', 0, 0),
(33, '8892', 'Departemen Dua', '5200', '', '2022-09-06 02:21:22', '2022-09-06 02:21:22', 0, 0),
(36, '5321', 'Departemen Tiga', '5200', '', '2022-09-06 02:23:04', '2022-09-06 02:23:04', 0, 0),
(37, '1356', 'Departemen Empat', '4300', '', '2022-09-06 02:24:37', '2022-09-06 02:24:37', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `direktorat`
--

CREATE TABLE `direktorat` (
  `id_direktorat` int(11) NOT NULL,
  `kode_direktorat` varchar(10) NOT NULL,
  `nama_direktorat` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_update` int(11) NOT NULL,
  `user_edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `direktorat`
--

INSERT INTO `direktorat` (`id_direktorat`, `kode_direktorat`, `nama_direktorat`, `created_at`, `updated_at`, `user_update`, `user_edit`) VALUES
(1, '1000', 'Direktorat Utama', '2022-07-17 14:39:24', '2022-07-17 14:57:41', 0, 0),
(2, '2000', 'SEVP Legal and Compliance', '2022-07-17 14:39:24', '2022-07-17 14:39:24', 0, 0),
(3, '3000', 'Direktorat Keuangan &amp; Mitra Bisnis', '2022-07-17 14:44:49', '0000-00-00 00:00:00', 0, 0),
(4, '4000', 'Direktorat Operasi', '2022-07-17 14:45:18', '0000-00-00 00:00:00', 0, 0),
(5, '5000', 'SEVP Produksi', '2022-07-17 14:45:34', '0000-00-00 00:00:00', 0, 0),
(6, '6000', 'Direktorat Pemasaran, Penelitian &amp; Pengembangan I', '2022-07-17 14:45:52', '0000-00-00 00:00:00', 0, 0),
(7, '7000', 'SEVP Litbang', '2022-07-17 14:46:07', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `kode_divisi` varchar(10) NOT NULL,
  `nama_divisi` varchar(100) NOT NULL,
  `kode_direktorat` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_update` int(11) NOT NULL,
  `user_edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `kode_divisi`, `nama_divisi`, `kode_direktorat`, `created_at`, `updated_at`, `user_update`, `user_edit`) VALUES
(1, '1300	', 'Divisi Perencanaan & Strategi Bisnis', '1000', '2022-07-17 15:05:24', '2022-07-17 15:05:24', 0, 0),
(2, '2100	', 'Divisi Sumber Daya Manusia', '2000', '2022-07-17 15:05:24', '2022-07-17 15:05:24', 0, 0),
(3, '2200	', 'Divisi Hukum', '2000', '2022-07-17 15:05:24', '2022-07-17 15:05:24', 0, 0),
(4, '2300	', 'Divisi Pengelolaan Lingkungan & Sosial', '2000', '2022-07-17 15:05:24', '2022-07-17 15:05:24', 0, 0),
(5, '2400	', 'Divisi Kepatuhan & Manajemen Risiko', '2000', '2022-07-17 15:05:24', '2022-07-17 15:05:24', 0, 0),
(6, '3100', 'Divisi Anggaran &amp; Akuntansi', '3000', '2022-07-18 12:15:21', '0000-00-00 00:00:00', 0, 0),
(7, '3200', 'Divisi Tresuri &amp; Pajak', '3000', '2022-07-18 12:15:50', '0000-00-00 00:00:00', 0, 0),
(8, '3300', 'Divisi Pengadaan', '3000', '2022-07-18 12:16:12', '0000-00-00 00:00:00', 0, 0),
(9, '3400', 'Divisi Teknologi Informasi', '3000', '2022-07-18 12:16:44', '0000-00-00 00:00:00', 0, 0),
(10, '4100', 'Divisi Penjamin Mutu &amp; Regulasi', '4000', '2022-07-18 12:17:38', '0000-00-00 00:00:00', 0, 0),
(11, '4200', 'Divisi Manajemen Proyek', '4000', '2022-07-18 12:18:37', '0000-00-00 00:00:00', 0, 0),
(12, '4300', 'Divisi Teknik &amp; Pemeliharaan', '4000', '2022-07-18 12:19:21', '0000-00-00 00:00:00', 0, 0),
(13, '4400', 'Divisi Manajemen Aset &amp; Umum', '4000', '2022-07-18 12:19:59', '0000-00-00 00:00:00', 0, 0),
(14, '5100', 'Divisi Manajemen Produksi &amp; Persediaan', '5000', '2022-07-18 12:20:38', '0000-00-00 00:00:00', 0, 0),
(15, '5200', 'Divisi Produksi Vaksin Virus', '5000', '2022-07-18 12:21:12', '0000-00-00 00:00:00', 0, 0),
(16, '5300', 'Divisi Produksi Vaksin Bakteri', '5000', '2022-07-18 12:21:34', '0000-00-00 00:00:00', 0, 0),
(17, '5400', 'Divisi Produksi Farmasi', '5000', '2022-07-18 12:22:32', '0000-00-00 00:00:00', 0, 0),
(18, '6100', 'Divisi Pemasaran &amp; Penjualan Domestik', '6000', '2022-07-18 12:22:56', '0000-00-00 00:00:00', 0, 0),
(19, '6200', 'Divisi Pemasaran &amp; Penjualan Internasional', '6000', '2022-07-18 12:23:21', '0000-00-00 00:00:00', 0, 0),
(20, '6300', 'Divisi Komunikasi Pemasaran &amp; Distribusi', '6000', '2022-07-18 12:24:05', '0000-00-00 00:00:00', 0, 0),
(21, '6400', 'Divisi Unit Klinik &amp; Imunisasi', '6000', '2022-07-18 12:24:31', '0000-00-00 00:00:00', 0, 0),
(22, '7100', 'Divisi Pengawasan Mutu', '7000', '2022-07-18 12:25:23', '2022-09-07 08:14:53', 0, 0),
(23, '7200', 'Divisi Hewan Laboratorium', '7000', '2022-07-18 12:25:48', '0000-00-00 00:00:00', 0, 0),
(24, '7400', 'Peneliti', '7000', '2022-07-18 12:26:17', '0000-00-00 00:00:00', 0, 0),
(25, '7500', 'Satuan Pengawasan Intern', '7000', '2022-07-18 12:25:01', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id_equipment` int(11) NOT NULL,
  `kode_equipment` varchar(30) NOT NULL,
  `nama_equipment` varchar(100) NOT NULL,
  `kode_software` varchar(50) NOT NULL,
  `kode_departemen` varchar(10) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_update` int(11) NOT NULL,
  `user_edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id_equipment`, `kode_equipment`, `nama_equipment`, `kode_software`, `kode_departemen`, `id_ruangan`, `created_at`, `updated_at`, `user_update`, `user_edit`) VALUES
(4, '204-ICP-01  ', 'Analisa Logam', '116-Test-10', '5434', 2, '2022-08-24 02:12:49', '2022-08-29 03:20:15', 0, 0),
(6, '204-ICP-01  ', 'ICP', '116-Test-07', '8892', 2, '2022-09-13 02:12:05', '2022-09-13 02:12:05', 0, 0),
(7, '201-TOC-02 ', 'TOC 2', '116-Test-06', '2221', 2, '2022-09-13 02:12:56', '2022-09-13 02:12:56', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `id_gedung` int(11) NOT NULL,
  `no_gedung` int(11) NOT NULL,
  `nama_gedung` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_update` int(11) NOT NULL,
  `user_edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`id_gedung`, `no_gedung`, `nama_gedung`, `created_at`, `updated_at`, `user_update`, `user_edit`) VALUES
(1, 36, 'Gedung ', '2022-08-22 00:54:37', '2022-08-24 02:19:36', 0, 0),
(2, 67, 'Gedung5', '2022-08-22 01:00:55', '2022-08-24 02:19:50', 0, 0),
(4, 14, 'Gedung3', '2022-08-22 06:38:13', '2022-08-22 06:38:13', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `kode_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `hp` varchar(10) NOT NULL,
  `catatan` tinytext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(50) NOT NULL,
  `user_update` int(11) NOT NULL,
  `user_edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`kode_kontak`, `nama_kontak`, `alamat`, `kota`, `telepon`, `hp`, `catatan`, `created_at`, `updated_at`, `email`, `user_update`, `user_edit`) VALUES
(1, 'Kontak1', 'Alamat1', 'Bandung', '1234', '12345678', 'ABCD', '2022-08-23 00:36:06', '2022-08-23 00:36:06', 'kontak1@gmail.com', 0, 0),
(3, 'Kontak2 ', 'Alamat2', 'Semarang', '2345', '23456789', 'EFGH', '2022-08-23 01:20:11', '2022-08-23 01:20:11', 'kontak2@gmail.com', 0, 0),
(4, 'Kontak3 ', 'Alamat3', 'Bontang', '3456', '34567890', 'IJKL', '2022-08-29 00:38:14', '2022-08-29 00:38:45', 'email@email.com ', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `negara` varchar(200) NOT NULL,
  `kode_pos` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_update` int(11) NOT NULL,
  `user_edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `kota`, `propinsi`, `negara`, `kode_pos`, `created_at`, `updated_at`, `user_update`, `user_edit`) VALUES
(1, 'Bandung', 'Jawa Barat', 'Indonesia', '40111', '2022-08-18 04:39:22', '2022-08-18 04:39:22', 0, 0),
(3, 'Semarang ', 'Jawa Tengah ', 'Indonesia ', '50275 ', '2022-08-22 07:22:11', '2022-08-22 07:24:58', 0, 0),
(4, 'Bontang  ', 'Kalimantan timur ', 'Indonesia ', '75324', '2022-08-22 07:32:01', '2022-08-24 02:20:49', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `laporan_detail`
--

CREATE TABLE `laporan_detail` (
  `id_transaksi` int(30) NOT NULL,
  `no_laporan` varchar(30) NOT NULL,
  `kode_equipment` varchar(30) NOT NULL,
  `kode_software` varchar(50) NOT NULL,
  `kode_supplier` int(11) NOT NULL,
  `kode_vendor` int(11) NOT NULL,
  `val_plan` tinyint(1) NOT NULL,
  `urs` tinyint(1) NOT NULL,
  `protokol` tinyint(1) NOT NULL,
  `iq` tinyint(1) NOT NULL,
  `oq` tinyint(1) NOT NULL,
  `pq` tinyint(1) NOT NULL,
  `val_report` tinyint(1) NOT NULL,
  `change_kontrol` tinyint(1) NOT NULL,
  `sop` tinyint(1) NOT NULL,
  `fda21_cprpart11_comly` tinyint(1) NOT NULL,
  `keterangan` varchar(350) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_edit` int(11) NOT NULL,
  `user_update` int(11) NOT NULL,
  `url_file_val_plan` text NOT NULL,
  `url_file_urs` text NOT NULL,
  `url_file_protokol` text NOT NULL,
  `url_file_iq` text NOT NULL,
  `url_file_oq` text NOT NULL,
  `url_file_pq` text NOT NULL,
  `url_file_val_report` text NOT NULL,
  `url_file_change_kontrol` text NOT NULL,
  `url_file_sop` text NOT NULL,
  `url_file_fda21_cprpart11_comly` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan_detail`
--

INSERT INTO `laporan_detail` (`id_transaksi`, `no_laporan`, `kode_equipment`, `kode_software`, `kode_supplier`, `kode_vendor`, `val_plan`, `urs`, `protokol`, `iq`, `oq`, `pq`, `val_report`, `change_kontrol`, `sop`, `fda21_cprpart11_comly`, `keterangan`, `created_at`, `update_at`, `user_edit`, `user_update`, `url_file_val_plan`, `url_file_urs`, `url_file_protokol`, `url_file_iq`, `url_file_oq`, `url_file_pq`, `url_file_val_report`, `url_file_change_kontrol`, `url_file_sop`, `url_file_fda21_cprpart11_comly`) VALUES
(0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2022-09-13 02:38:08', '2022-09-13 02:38:08', 0, 0, '', '', '', '', '', '', '', '', '', ''),
(1, '1/115/II/2022', '204-TOC-02 ', '116-Test-10', 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 'testtttttttttttttttt', '2022-09-05 01:12:47', '2022-09-05 03:36:16', 0, 0, '', '', '', '', '', '', '', '', '', ''),
(3, '2/116/III/2022', '204-ICP-01', '116-Test-10', 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 0, 'ADA', '2022-09-08 00:33:22', '2022-09-08 00:33:22', 0, 0, '', '', '', '', '', '', '', '', '', ''),
(10, '2/116/III/2022', '204-TOC-02 ', '116-Test-10', 2, 4, 1, 1, 1, 0, 0, 0, 1, 1, 1, 1, 'ASD', '2022-09-13 02:15:44', '2022-09-13 02:18:23', 0, 0, '', '', '', '', '', '', '', '', '', ''),
(156, '1/115/II/2022', '3', '16', 111, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 'ygkuhnbjio', '2022-09-05 03:28:19', '2022-09-05 03:28:19', 0, 0, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_master`
--

CREATE TABLE `laporan_master` (
  `no_laporan` varchar(30) NOT NULL,
  `tanggal_laporan` datetime NOT NULL,
  `kode_departemen` varchar(10) NOT NULL,
  `kode_divisi` varchar(10) NOT NULL,
  `kode_direktorat` varchar(10) NOT NULL,
  `id_personel` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_edit` int(11) NOT NULL,
  `user_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan_master`
--

INSERT INTO `laporan_master` (`no_laporan`, `tanggal_laporan`, `kode_departemen`, `kode_divisi`, `kode_direktorat`, `id_personel`, `created_at`, `update_at`, `user_edit`, `user_update`) VALUES
('', '0000-00-00 00:00:00', '', '', '', 0, '2022-09-08 00:44:19', '2022-09-08 00:44:19', 0, 0),
('1/115/II/2022', '0000-00-00 00:00:00', '1111', '2100', '3000', 3, '2022-08-31 04:16:04', '2022-08-31 04:16:04', 0, 0),
('1111', '2022-09-02 00:00:00', '1356', '', '', 1, '2022-09-08 00:35:56', '2022-09-08 00:35:56', 0, 0),
('2/116/III/2022', '2022-09-08 02:30:27', '2221', '2100', '2000', 3, '2022-09-08 00:31:30', '2022-09-08 00:31:30', 0, 0),
('2313', '0000-00-00 00:00:00', '4355', '2300', '3000', 3, '2022-08-31 04:21:10', '2022-08-31 04:21:10', 0, 0),
('3rsfe', '2022-08-11 00:00:00', '9898', '3200', '4000', 3, '2022-08-31 04:24:19', '2022-08-31 04:24:19', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `personel`
--

CREATE TABLE `personel` (
  `id_personel` int(11) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama_personel` varchar(250) NOT NULL,
  `kode_departemen` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_edit` int(11) NOT NULL,
  `user_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personel`
--

INSERT INTO `personel` (`id_personel`, `nik`, `nama_personel`, `kode_departemen`, `created_at`, `updated_at`, `user_edit`, `user_update`) VALUES
(1, 124458, 'Personel1', '4235', '2022-08-23 07:00:14', '2022-08-23 07:11:23', 0, 0),
(3, 143569, 'Personel2', '7564', '2022-08-23 07:13:55', '2022-08-23 07:13:55', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `no_ruangan` int(11) NOT NULL,
  `nama_ruangan` varchar(200) NOT NULL,
  `no_gedung` int(11) NOT NULL,
  `no_lantai` varchar(10) NOT NULL,
  `catatan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_update` int(11) NOT NULL,
  `user_edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `no_ruangan`, `nama_ruangan`, `no_gedung`, `no_lantai`, `catatan`, `created_at`, `updated_at`, `user_update`, `user_edit`) VALUES
(2, 1, 'Ruangan1', 67, '1', 'ABCD', '2022-08-23 02:33:59', '2022-08-23 02:33:59', 0, 0),
(3, 5, 'Ruangan5', 14, '5', 'EFGH 1', '2022-08-23 02:57:35', '2022-08-23 06:42:47', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id_software` int(11) NOT NULL,
  `kode_software` varchar(50) NOT NULL,
  `nama_software` varchar(50) NOT NULL,
  `tahun` int(4) NOT NULL,
  `kode_vendor` varchar(50) NOT NULL,
  `jenis_software` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_update` int(11) NOT NULL,
  `user_edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id_software`, `kode_software`, `nama_software`, `tahun`, `kode_vendor`, `jenis_software`, `created_at`, `updated_at`, `user_update`, `user_edit`) VALUES
(2, '116-Test-10', 'Test Software A', 1990, '1', 'PLC', '2022-08-19 03:06:44', '2022-09-13 02:11:31', 0, 0),
(3, '116-Test-07', 'Mitsubishi Programmable Controller', 2002, '1', 'PLC', '2022-08-24 02:23:08', '2022-09-13 02:05:36', 0, 0),
(4, '116-Test-06', 'Test software', 2000, '2', 'PLC', '2022-09-13 02:05:26', '2022-09-13 02:05:26', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `kode_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `kode_kontak` int(11) NOT NULL,
  `catatan` tinytext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_update` int(11) NOT NULL,
  `user_edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`kode_supplier`, `nama_supplier`, `alamat`, `kota`, `telepon`, `kode_kontak`, `catatan`, `created_at`, `updated_at`, `user_update`, `user_edit`) VALUES
(1, 'Supplier1', 'Alamat1', 'Bandung', '12345', 1, 'Catatan1', '2022-08-25 01:05:33', '2022-08-25 01:05:33', 0, 0),
(2, 'Supplier2 ', 'Alamat2', 'Semarang', '345345 ', 1, 'Catatan ', '2022-08-26 08:17:23', '2022-08-26 08:21:45', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `username_user` varchar(20) NOT NULL,
  `password_user` varchar(32) NOT NULL,
  `keterangan_user` text NOT NULL,
  `level_user` enum('Super Admin','Admin User','Operator') NOT NULL,
  `kode_departemen` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username_user`, `password_user`, `keterangan_user`, `level_user`, `kode_departemen`, `created_at`, `updated_at`) VALUES
(1, 'Miftah Afina', 'miftahafina', '2e5b97a8a84739fecea891201a74bd7e', 'afin123', 'Super Admin', '2221', '2022-07-25 08:20:19', '2022-09-12 01:47:31'),
(8, 'Amin B. Kanda', 'Amin', 'fae38bd94701cdf2a9d114425cb40292', 'pass: ayu123', 'Admin User', '1356', '2022-07-25 08:20:10', '2022-09-12 01:47:24'),
(9, 'Hilman Pebrian', 'hilman ', '202cb962ac59075b964b07152d234b70', 'pass: 123', 'Super Admin', '7564', '2022-07-25 08:20:03', '2022-09-12 01:32:37'),
(10, 'Fitri Adini', 'fitri', '202cb962ac59075b964b07152d234b70', 'pas 123', 'Operator', '5321', '2022-07-17 05:53:19', '2022-09-12 01:47:14'),
(13, 'Amin1', 'Amin1', '202cb962ac59075b964b07152d234b70', '123', 'Admin User', '8892', '2022-07-25 08:20:27', '2022-09-12 01:47:01'),
(15, 'Abigail', 'bigeyl', '81dc9bdb52d04dc20036dbd8313ed055', 'pass', 'Super Admin', '5321', '2022-08-11 00:44:07', '2022-09-12 01:47:49'),
(17, 'San Jaegar', 'jaexxy', '202cb962ac59075b964b07152d234b70', 'sfdfsdffdgg', 'Super Admin', '2221', '2022-08-11 00:47:51', '2022-09-12 01:47:57'),
(18, 'bnmio', 'umnbyug', '7363a0d0604902af7b70b271a0b96480', 'pass', 'Super Admin', '7564', '2022-08-11 00:45:05', '2022-09-12 01:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `kode_vendor` int(11) NOT NULL,
  `nama_vendor` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `kode_kontak` int(11) NOT NULL,
  `catatan` tinytext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(50) NOT NULL,
  `web` varchar(100) NOT NULL,
  `user_update` int(11) NOT NULL,
  `user_edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`kode_vendor`, `nama_vendor`, `alamat`, `kota`, `telepon`, `kode_kontak`, `catatan`, `created_at`, `updated_at`, `email`, `web`, `user_update`, `user_edit`) VALUES
(1, 'Sakura', 'Alamat', 'Kota1', '345345', 0, 'Catatan1', '2022-08-18 03:42:51', '2022-08-26 01:02:07', 'email@email.com', 'www.web.com', 0, 0),
(2, 'FAC', 'Alamat2', 'Kota', '678678', 0, 'Catatan2', '2022-08-18 03:42:51', '2022-08-26 01:02:07', 'email@email.com', 'www.web.com', 0, 0),
(3, 'Vendor3', 'Alamat ', 'Kota ', '2345 ', 3, 'Catatan ', '2022-08-26 01:22:24', '2022-08-26 01:30:18', 'email@email.com ', 'www.web.com ', 0, 0),
(4, 'Vendor4 ', 'Alamat4', 'Kota4', '890890', 1, 'Catatan4', '2022-08-26 01:30:48', '2022-08-26 01:31:02', 'email@email.com ', 'www.web.com', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `direktorat`
--
ALTER TABLE `direktorat`
  ADD PRIMARY KEY (`id_direktorat`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id_equipment`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id_gedung`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`kode_kontak`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `laporan_detail`
--
ALTER TABLE `laporan_detail`
  ADD PRIMARY KEY (`id_transaksi`,`no_laporan`),
  ADD KEY `no laporan` (`no_laporan`);

--
-- Indexes for table `laporan_master`
--
ALTER TABLE `laporan_master`
  ADD PRIMARY KEY (`no_laporan`);

--
-- Indexes for table `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`id_personel`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id_software`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`kode_vendor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `direktorat`
--
ALTER TABLE `direktorat`
  MODIFY `id_direktorat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id_equipment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id_gedung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `kode_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personel`
--
ALTER TABLE `personel`
  MODIFY `id_personel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id_software` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `kode_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `kode_vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan_detail`
--
ALTER TABLE `laporan_detail`
  ADD CONSTRAINT `no laporan` FOREIGN KEY (`no_laporan`) REFERENCES `laporan_master` (`no_laporan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
