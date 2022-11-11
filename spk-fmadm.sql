-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 09:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-fmadm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_alternatif`
--

CREATE TABLE `tabel_alternatif` (
  `id` int(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `id_lokasi` int(128) NOT NULL,
  `C1` double NOT NULL,
  `C2` double NOT NULL,
  `C3` double NOT NULL,
  `C4` varchar(128) NOT NULL,
  `C5` varchar(128) NOT NULL,
  `C6` double NOT NULL,
  `C7` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_alternatif`
--

INSERT INTO `tabel_alternatif` (`id`, `nama`, `id_lokasi`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `C7`) VALUES
(44, 'A1', 1, 29, 450, 72, 'Agak Cepat', 'Halus', 15, 6.8),
(45, 'A2', 1, 28, 500, 86, 'Baik', 'Halus', 16, 6.9),
(46, 'B1', 7, 26, 780, 85, 'Baik', 'Agak Kasar-Kasar', 16, 6.9),
(47, 'B2', 7, 27, 785, 80, 'Agak Cepat', 'Halus', 17, 6.4),
(48, 'C1', 8, 27, 460, 86, 'Baik', 'Halus', 17, 7.2),
(49, 'C2', 8, 25, 300, 88, 'Agak Cepat', 'Agak Kasar-Kasar', 16, 7.1),
(50, 'D1', 18, 28, 300, 89, 'Baik', 'Agak Kasar-Kasar', 15, 7.3),
(51, 'D2', 18, 26, 450, 78, 'Agak Cepat', 'Halus', 16, 7.2),
(52, 'E1', 19, 26, 580, 89, 'Baik', 'Agak Kasar-Kasar', 14, 6.9),
(53, 'E2', 19, 27, 585, 90, 'Agak Cepat', 'Halus', 14, 6.8),
(54, 'F1', 20, 26, 600, 90, 'Baik', 'Agak Kasar-Kasar', 16, 7.1),
(55, 'F2', 20, 26, 605, 88, 'Agak Cepat', 'Halus', 17, 6.9),
(56, 'G1', 21, 26, 520, 78, 'Baik', 'Halus', 12, 6.6),
(57, 'G2', 21, 27, 515, 80, 'Agak Cepat', 'Agak Kasar-Kasar', 14, 6.5),
(58, 'H1', 22, 26, 620, 80, 'Agak Cepat', 'Halus', 17, 7.1),
(59, 'H2', 22, 25, 600, 90, 'Baik', 'Agak Kasar-Kasar', 16, 6.9),
(60, 'I1', 23, 26, 500, 82, 'Agak Cepat', 'Halus', 17, 6.7),
(61, 'I2', 23, 26, 500, 82, 'Baik', 'Halus', 12, 6.6),
(62, 'J1', 24, 27, 400, 80, 'Baik', 'Halus', 15, 6.6),
(63, 'J2', 24, 27, 500, 74, 'Agak Cepat', 'Agak Kasar-Kasar', 16, 6.9),
(64, 'K1', 25, 26, 540, 74, 'Baik', 'Agak Kasar-Kasar', 12, 6.9),
(65, 'K2', 25, 24, 535, 76, 'Agak Cepat', 'Agak Kasar-Kasar', 15, 7.2),
(66, 'L1', 26, 28, 860, 76, 'Baik', 'Agak Kasar-Kasar', 18, 6.8),
(67, 'L2', 26, 27, 850, 85, 'Agak Cepat', 'Halus', 16, 6.7),
(68, 'M1', 27, 27, 850, 85, 'Agak Cepat', 'Agak Kasar-Kasar', 15, 7.2),
(69, 'M2', 27, 27, 730, 85, 'Baik', 'Halus', 17, 7.1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_lokasi`
--

CREATE TABLE `tabel_lokasi` (
  `id` int(128) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_lokasi`
--

INSERT INTO `tabel_lokasi` (`id`, `nama`) VALUES
(1, 'Kelurahan Bau-bau'),
(7, 'Kelurahan Merdeka'),
(8, 'Kelurahan Oesao'),
(18, 'Kelurahan Naibonat'),
(19, 'Kelurahan Tuatuka'),
(20, 'Desa Manusak'),
(21, 'Desa Nunkurus'),
(22, 'Desa Oefafi'),
(23, 'Desa Oelatimo'),
(24, 'Desa Oesao'),
(25, 'Desa Pukdale'),
(26, 'Desa Tanah Putih'),
(27, 'Desa Tuapuka');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_perankingan_sementara`
--

CREATE TABLE `tabel_perankingan_sementara` (
  `id` int(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `id_lokasi` int(128) NOT NULL,
  `C1N` double NOT NULL,
  `C2N` double NOT NULL,
  `C3N` double NOT NULL,
  `C4N` double NOT NULL,
  `C5N` varchar(128) NOT NULL,
  `C6N` varchar(128) NOT NULL,
  `C7N` double NOT NULL,
  `ranking` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_perankingan_sementara`
--

INSERT INTO `tabel_perankingan_sementara` (`id`, `nama`, `id_lokasi`, `C1N`, `C2N`, `C3N`, `C4N`, `C5N`, `C6N`, `C7N`, `ranking`) VALUES
(287, 'J2', 24, 1, 1, 1, 0.75, '1', '1', 1, 0.9675),
(288, 'J1', 24, 1, 1, 1, 1, '0.75', '1', 1, 0.9675),
(289, 'C1', 8, 1, 1, 0.9, 1, '0.75', '1', 1, 0.9475),
(290, 'A2', 1, 1, 1, 0.9, 1, '0.75', '1', 1, 0.9475),
(291, 'K2', 25, 1, 0.86, 1, 0.75, '1', '1', 1, 0.9395),
(292, 'G2', 21, 1, 0.94, 1, 0.75, '1', '0.75', 1, 0.938),
(293, 'I1', 23, 1, 1, 1, 0.75, '0.75', '1', 1, 0.935),
(294, 'D2', 18, 1, 1, 1, 0.75, '0.75', '1', 1, 0.935),
(295, 'A1', 1, 1, 1, 1, 0.75, '0.75', '1', 1, 0.935),
(296, 'D1', 18, 1, 1, 0.6, 1, '1', '1', 1, 0.92),
(297, 'K1', 25, 1, 0.84, 1, 1, '1', '0.25', 1, 0.9155),
(298, 'I2', 23, 1, 1, 1, 1, '0.75', '0.25', 1, 0.915),
(299, 'C2', 8, 1, 1, 0.7, 0.75, '1', '1', 1, 0.9075),
(300, 'G1', 21, 1, 0.92, 1, 1, '0.75', '0.25', 1, 0.899),
(301, 'H1', 22, 1, 0.52, 1, 0.75, '0.75', '1', 1, 0.839),
(302, 'E1', 19, 1, 0.68, 0.6, 1, '1', '0.75', 1, 0.8385),
(303, 'H2', 22, 1, 0.6, 0.5, 1, '1', '1', 1, 0.82),
(304, 'F1', 20, 1, 0.6, 0.5, 1, '1', '1', 1, 0.82),
(305, 'L1', 26, 1, 0, 1, 1, '1', '1', 1, 0.8),
(306, 'B1', 7, 1, 0, 1, 1, '1', '1', 1, 0.8),
(307, 'F2', 20, 1, 0.58, 0.7, 0.75, '0.75', '1', 1, 0.791),
(308, 'M2', 27, 1, 0.08, 1, 1, '0.75', '1', 1, 0.7835),
(309, 'M1', 27, 1, 0, 1, 0.75, '1', '1', 1, 0.7675),
(310, 'E2', 19, 1, 0.66, 0.5, 0.75, '0.75', '0.75', 1, 0.7495),
(311, 'L2', 26, 1, 0, 1, 0.75, '0.75', '1', 1, 0.735),
(312, 'B2', 7, 1, 0, 1, 0.75, '0.75', '1', 1, 0.735);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_alternatif`
--
ALTER TABLE `tabel_alternatif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indexes for table `tabel_lokasi`
--
ALTER TABLE `tabel_lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_perankingan_sementara`
--
ALTER TABLE `tabel_perankingan_sementara`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_alternatif`
--
ALTER TABLE `tabel_alternatif`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tabel_lokasi`
--
ALTER TABLE `tabel_lokasi`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tabel_perankingan_sementara`
--
ALTER TABLE `tabel_perankingan_sementara`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_alternatif`
--
ALTER TABLE `tabel_alternatif`
  ADD CONSTRAINT `tabel_alternatif_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `tabel_lokasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
