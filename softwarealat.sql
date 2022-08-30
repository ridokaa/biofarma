-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 04:00 AM
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
  `kode_departemen` varchar(10) NOT NULL,
  `nama_departemen` varchar(100) NOT NULL,
  `kode_divisi` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`kode_departemen`, `nama_departemen`, `kode_divisi`, `created_at`, `updated_at`) VALUES
('0000', 'Admin aplikasi', '3400', '2022-07-17 06:53:35', '2022-07-18 12:35:14'),
('4378', 'Departemen Tiga', '3200', '2022-07-28 00:57:54', '2022-07-28 00:57:54'),
('4539', 'Departemen Empat', '6100', '2022-07-28 01:01:33', '2022-07-28 01:01:33'),
('5210', 'Test Departemen', '5100', '2022-07-28 00:42:34', '2022-07-28 00:42:34'),
('5220', 'Bagian Produksi Vaksin Campak  ', '5200', '2022-07-17 06:53:35', '2022-07-18 12:32:02'),
('5320', 'Bagian Produksi Vaksin Tetanus   ', '5300', '2022-07-17 07:10:04', '2022-07-18 12:34:01'),
('7540', 'Departemen Satu', '6100', '2022-07-28 00:46:40', '2022-07-28 00:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `direktorat`
--

CREATE TABLE `direktorat` (
  `kode_direktorat` varchar(10) NOT NULL,
  `nama_direktorat` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `direktorat`
--

INSERT INTO `direktorat` (`kode_direktorat`, `nama_direktorat`, `created_at`, `updated_at`) VALUES
('1000', 'Direktorat Utama', '2022-07-17 14:39:24', '2022-07-17 14:57:41'),
('2000', 'SEVP Legal and Compliance', '2022-07-17 14:39:24', '2022-07-17 14:39:24'),
('3000', 'Direktorat Keuangan &amp; Mitra Bisnis', '2022-07-17 14:44:49', '0000-00-00 00:00:00'),
('4000', 'Direktorat Operasi', '2022-07-17 14:45:18', '0000-00-00 00:00:00'),
('5000', 'SEVP Produksi', '2022-07-17 14:45:34', '0000-00-00 00:00:00'),
('6000', 'Direktorat Pemasaran, Penelitian &amp; Pengembangan I', '2022-07-17 14:45:52', '0000-00-00 00:00:00'),
('7000', 'SEVP Litbang', '2022-07-17 14:46:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `kode_divisi` varchar(10) NOT NULL,
  `nama_divisi` varchar(100) NOT NULL,
  `kode_direktorat` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`kode_divisi`, `nama_divisi`, `kode_direktorat`, `created_at`, `updated_at`) VALUES
('1300	', 'Divisi Perencanaan & Strategi Bisnis', '1000', '2022-07-17 15:05:24', '2022-07-17 15:05:24'),
('2100	', 'Divisi Sumber Daya Manusia', '2000', '2022-07-17 15:05:24', '2022-07-17 15:05:24'),
('2200	', 'Divisi Hukum', '2000', '2022-07-17 15:05:24', '2022-07-17 15:05:24'),
('2300	', 'Divisi Pengelolaan Lingkungan & Sosial', '2000', '2022-07-17 15:05:24', '2022-07-17 15:05:24'),
('2400	', 'Divisi Kepatuhan & Manajemen Risiko', '2000', '2022-07-17 15:05:24', '2022-07-17 15:05:24'),
('3100', 'Divisi Anggaran &amp; Akuntansi', '3000', '2022-07-18 12:15:21', '0000-00-00 00:00:00'),
('3200', 'Divisi Tresuri &amp; Pajak', '3000', '2022-07-18 12:15:50', '0000-00-00 00:00:00'),
('3300', 'Divisi Pengadaan', '3000', '2022-07-18 12:16:12', '0000-00-00 00:00:00'),
('3400', 'Divisi Teknologi Informasi', '3000', '2022-07-18 12:16:44', '0000-00-00 00:00:00'),
('4100', 'Divisi Penjamin Mutu &amp; Regulasi', '4000', '2022-07-18 12:17:38', '0000-00-00 00:00:00'),
('4200', 'Divisi Manajemen Proyek', '4000', '2022-07-18 12:18:37', '0000-00-00 00:00:00'),
('4300', 'Divisi Teknik &amp; Pemeliharaan', '4000', '2022-07-18 12:19:21', '0000-00-00 00:00:00'),
('4400', 'Divisi Manajemen Aset &amp; Umum', '4000', '2022-07-18 12:19:59', '0000-00-00 00:00:00'),
('5100', 'Divisi Manajemen Produksi &amp; Persediaan', '5000', '2022-07-18 12:20:38', '0000-00-00 00:00:00'),
('5200', 'Divisi Produksi Vaksin Virus', '5000', '2022-07-18 12:21:12', '0000-00-00 00:00:00'),
('5300', 'Divisi Produksi Vaksin Bakteri', '5000', '2022-07-18 12:21:34', '0000-00-00 00:00:00'),
('5400', 'Divisi Produksi Farmasi', '5000', '2022-07-18 12:22:32', '0000-00-00 00:00:00'),
('6100', 'Divisi Pemasaran &amp; Penjualan Domestik', '6000', '2022-07-18 12:22:56', '0000-00-00 00:00:00'),
('6200', 'Divisi Pemasaran &amp; Penjualan Internasional', '6000', '2022-07-18 12:23:21', '0000-00-00 00:00:00'),
('6300', 'Divisi Komunikasi Pemasaran &amp; Distribusi', '6000', '2022-07-18 12:24:05', '0000-00-00 00:00:00'),
('6400', 'Divisi Unit Klinik &amp; Imunisasi', '6000', '2022-07-18 12:24:31', '0000-00-00 00:00:00'),
('7100', 'Divisi Pengawasan Mutu', '', '2022-07-18 12:25:23', '0000-00-00 00:00:00'),
('7200', 'Divisi Hewan Laboratorium', '7000', '2022-07-18 12:25:48', '0000-00-00 00:00:00'),
('7400', 'Peneliti', '7000', '2022-07-18 12:26:17', '0000-00-00 00:00:00'),
('7500', 'Satuan Pengawasan Intern', '7000', '2022-07-18 12:25:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `kode_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `hp` varchar(10) NOT NULL,
  `catatan` tinytext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `kota` varchar(10) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `negara` varchar(200) NOT NULL,
  `kode_pos` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `no_ruangan` varchar(50) NOT NULL,
  `nama_ruangan` varchar(200) NOT NULL,
  `no_gedung` varchar(10) NOT NULL,
  `no_lantai` varchar(10) NOT NULL,
  `catatan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `kode_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `kode_kontak` varchar(10) NOT NULL,
  `catatan` tinytext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username_user`, `password_user`, `keterangan_user`, `level_user`, `kode_departemen`, `created_at`, `updated_at`) VALUES
(1, 'Miftah Afina', 'miftahafina', '2e5b97a8a84739fecea891201a74bd7e', 'afin123', 'Super Admin', '000', '2022-07-25 08:20:19', '2022-07-25 08:20:19'),
(8, 'Amin B. Kanda', 'Amin', 'fae38bd94701cdf2a9d114425cb40292', 'pass: ayu123', 'Admin User', '000', '2022-07-25 08:20:10', '2022-07-25 08:20:10'),
(9, 'Hilman Pebrian', 'hilman ', '202cb962ac59075b964b07152d234b70', 'pass: 123', 'Super Admin', '115', '2022-07-25 08:20:03', '2022-07-25 08:20:03'),
(10, 'Fitri Adini', 'fitri', '202cb962ac59075b964b07152d234b70', 'pas 123', 'Operator', '114', '2022-07-17 05:53:19', '2022-07-17 05:53:19'),
(13, 'Amin1', 'Amin1', '202cb962ac59075b964b07152d234b70', '123', 'Admin User', '237', '2022-07-25 08:20:27', '2022-07-25 08:20:27');

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
  `kode_kontak` varchar(10) NOT NULL,
  `catatan` tinytext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(50) NOT NULL,
  `web` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`kode_departemen`);

--
-- Indexes for table `direktorat`
--
ALTER TABLE `direktorat`
  ADD PRIMARY KEY (`kode_direktorat`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`kode_divisi`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`kode_kontak`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kota`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

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
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `kode_kontak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `kode_supplier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `kode_vendor` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
