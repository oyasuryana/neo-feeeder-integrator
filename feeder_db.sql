-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2022 at 06:53 PM
-- Server version: 5.7.33-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feeder_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kontak`
--

CREATE TABLE `data_kontak` (
  `id_kontak` int(11) NOT NULL,
  `id_mahasiswa` char(36) NOT NULL,
  `email` varchar(75) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `handphone` varchar(20) NOT NULL,
  `tgl_pengajuan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_disetujui` datetime DEFAULT NULL,
  `disetujui` enum('Y','T') NOT NULL DEFAULT 'T'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kontak`
--

INSERT INTO `data_kontak` (`id_kontak`, `id_mahasiswa`, `email`, `telepon`, `handphone`, `tgl_pengajuan`, `tgl_disetujui`, `disetujui`) VALUES
(1, '5c406d1e-ceda-4b6f-b5e6-3d34730f2f26', 'oyasuryana@yahoo.com', '', '085224191648', '2021-12-16 22:11:50', NULL, 'T'),
(2, '5c406d1e-ceda-4b6f-b5e6-3d34730f2f26', 'oya@uniku.ac.id', '', '085295592558', '2021-12-16 22:30:20', NULL, 'T'),
(3, 'fd216541-5ec3-41ce-96ea-aaf40763ab8c', '20180610050@uniku.ac.id', '089664741042', '089664741042', '2021-12-17 15:27:18', NULL, 'T'),
(5, 'fd216541-5ec3-41ce-96ea-aaf40763ab8c', '20180610050@uniku.ac.id', '0232874888', '089664741042', '2021-12-17 21:19:46', NULL, 'T'),
(6, 'fae1141c-cbb4-4e45-9a03-286dbf1ac9aa', '20180520158@uniku.ac.id', '0232-888123', '08974500359', '2022-02-12 10:41:33', NULL, 'T');

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id_ajuan_mahasiswa` int(11) NOT NULL,
  `id_mahasiswa` char(36) NOT NULL,
  `nama_mahasiswa` varchar(150) NOT NULL,
  `tempat_lahir` varchar(75) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `id_agama` varchar(3) NOT NULL,
  `id_jenis_tinggal` varchar(3) NOT NULL,
  `id_alat_transportasi` varchar(3) NOT NULL,
  `kewarganegaraan` varchar(3) NOT NULL,
  `nik` char(16) NOT NULL,
  `nisn` varchar(25) NOT NULL,
  `nama_negara` varchar(100) NOT NULL,
  `tgl_pengajuan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_persetujuan` datetime DEFAULT NULL,
  `status_ajuan` enum('Y','T') NOT NULL DEFAULT 'T'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id_ajuan_mahasiswa`, `id_mahasiswa`, `nama_mahasiswa`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `id_agama`, `id_jenis_tinggal`, `id_alat_transportasi`, `kewarganegaraan`, `nik`, `nisn`, `nama_negara`, `tgl_pengajuan`, `tgl_persetujuan`, `status_ajuan`) VALUES
(1, '5c406d1e-ceda-4b6f-b5e6-3d34730f2f26', 'OYA SURYANA', 'KUNINGAN', '1980-03-19', 'L', '', '1', '3', '', '320809190380001', '123456', 'ID', '2021-12-17 15:21:39', NULL, 'T'),
(2, 'fd216541-5ec3-41ce-96ea-aaf40763ab8c', 'RIFKY ANGGANI', 'Kuningan', '2000-10-18', 'L', '', '1', '13', '', '3208011810000001', '', 'ID', '2021-12-17 22:06:23', NULL, 'T'),
(3, 'fd216541-5ec3-41ce-96ea-aaf40763ab8c', 'RIFKY ANGGANI', 'Kuningan', '2000-10-18', 'L', '1', '1', '13', '', '3208011810000001', '', 'ID', '2022-02-10 19:41:12', NULL, 'T'),
(4, 'fae1141c-cbb4-4e45-9a03-286dbf1ac9aa', 'EGGI PRATAMA', 'Kuningan', '1995-01-27', 'L', '1', '3', '13', '', '3208162701950002', '', 'ID', '2022-02-12 10:41:05', NULL, 'T');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kontak`
--
ALTER TABLE `data_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id_ajuan_mahasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kontak`
--
ALTER TABLE `data_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id_ajuan_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
