-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 09:30 AM
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
(3, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_alternatif`
--

CREATE TABLE `tabel_alternatif` (
  `id` int(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `id_lokasi` int(128) DEFAULT NULL,
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
(70, 'yan', 27, 27, 900, 88, 'Baik', 'Kasar', 17, 6.9),
(71, 'marianus', 27, 27, 900, 88, 'Baik', 'Kasar', 16, 6.8),
(72, 'markus', 1, 27, 500, 88, 'Baik', 'Kasar', 30, 6.7),
(73, 'gerson', 7, 27, 600, 88, 'Baik', 'Kasar', 16, 6.8),
(74, 'marzen', 1, 26, 500, 88, 'Baik', 'Kasar', 30, 6.9),
(75, 'Yosis Kleing', 7, 26, 500, 88, 'Baik', 'Kasar', 30, 6.8),
(76, 'piter', 27, 21, 530, 88, 'Baik', 'Kasar', 30, 6.8),
(77, 'Tote Albertus', 19, 27, 530, 88, 'Baik', 'Kasar', 30, 6.6),
(78, 'martha', 19, 27, 540, 88, 'Baik', 'Kasar', 30, 6.7),
(79, 'berti', 22, 27, 520, 88, 'Baik', 'Kasar', 16, 6.8),
(80, 'Dominggus', 18, 27, 510, 88, 'Baik', 'Kasar', 17, 6.8),
(81, 'mensen tsael', 8, 27, 500, 88, 'Baik', 'Kasar', 30, 6.6),
(82, 'isak bengkiuk', 20, 27, 540, 88, 'Baik', 'Kasar', 30, 6.9),
(83, 'melkior tnunay', 19, 27, 530, 88, 'Baik', 'Kasar', 30, 6.8),
(84, 'Regina labalu', 21, 27, 500, 88, 'Baik', 'Kasar', 30, 6.8),
(85, 'Samson Sereh', 25, 27, 500, 88, 'Baik', 'Kasar', 30, 6.8),
(86, 'melkianus e koa', 1, 27, 500, 88, 'Baik', 'Kasar', 30, 6.9),
(87, 'Chistovel Ullu', 24, 27, 505, 88, 'Baik', 'Agak Kasar-Kasar', 30, 6.8),
(88, 'simon pion', 24, 27, 505, 88, 'Baik', 'Agak Kasar-Kasar', 30, 6.8),
(89, 'yohanis m sereh', 25, 27, 500, 88, 'Baik', 'Halus', 30, 6.7),
(90, 'marthen tameno', 1, 27, 500, 88, 'Agak Cepat', 'Agak Kasar-Kasar', 30, 6.9),
(91, 'Ananian Ndaumanu', 18, 27, 500, 88, 'Baik', 'Kasar', 30, 6.8),
(92, 'Eddi Marcus', 23, 27, 500, 88, 'Baik', 'Kasar', 30, 6.9),
(93, 'stefanus ludji', 8, 27, 500, 88, 'Baik', 'Kasar', 30, 6.7),
(94, 'oktavianus kapitam', 8, 27, 540, 88, 'Baik', 'Kasar', 30, 6.8),
(95, 'Arifin kortiba', 23, 27, 500, 88, 'Baik', 'Kasar', 30, 6.7),
(96, 'Marthen Benyamin', 23, 26, 500, 88, 'Baik', 'Kasar', 30, 6.7),
(97, 'Jorgen Aluman', 20, 27, 560, 88, 'Baik', 'Kasar', 30, 6.8),
(98, 'Bibit Lestari', 26, 27, 560, 88, 'Baik', 'Kasar', 17, 6.7),
(99, 'Agusthen Meok', 7, 27, 500, 88, 'Baik', 'Halus', 30, 6.7),
(100, 'Oktovianus Kapitan', 21, 27, 500, 88, 'Baik', 'Kasar', 30, 6.7),
(101, 'Benja O. Markus', 22, 27, 520, 88, 'Baik', 'Kasar', 30, 6.9),
(102, 'maklon kapitan', 1, 27, 500, 88, 'Baik', 'Kasar', 30, 6.8),
(103, 'Sukardi', 26, 27, 500, 88, 'Baik', 'Halus', 30, 6.9),
(104, 'Marthen Tuka', 21, 27, 500, 88, 'Baik', 'Kasar', 30, 6.9),
(105, 'Adhy Kapitan', 18, 27, 500, 88, 'Baik', 'Kasar', 16, 6.9),
(106, 'Yonathan Mplur', 25, 27, 500, 88, 'Baik', 'Kasar', 17, 6.8),
(107, 'Ferdy A. Benyamin', 23, 27, 500, 88, 'Baik', 'Kasar', 30, 6.8),
(108, 'Alfa Edison Ullu', 7, 27, 500, 88, 'Baik', 'Halus', 30, 6.9),
(109, 'Marianus Kapitan', 23, 27, 500, 88, 'Baik', 'Kasar', 18, 6.7),
(110, 'Yan David Katang', 20, 27, 540, 88, 'Baik', 'Kasar', 16, 6.9),
(111, 'Anthon Therik', 20, 27, 560, 88, 'Baik', 'Kasar', 30, 6.8),
(112, 'Aswin Therik', 7, 27, 540, 88, 'Baik', 'Halus', 30, 6.8),
(113, 'Yuni Atollo Nabat', 8, 27, 530, 88, 'Baik', 'Agak Kasar-Kasar', 18, 6.7),
(114, 'Mesker Kapitan', 20, 27, 560, 88, 'Baik', 'Kasar', 30, 6.9),
(115, 'Darwin Lusi', 22, 27, 520, 88, 'Baik', 'Kasar', 30, 6.9),
(116, 'Franjal Kiah', 24, 27, 510, 88, 'Baik', 'Agak Kasar-Kasar', 30, 6.9),
(117, 'Isteten Kiah', 8, 27, 520, 88, 'Baik', 'Agak Kasar-Kasar', 30, 6.9),
(118, 'Karel tefi', 27, 27, 530, 88, 'Agak Cepat', 'Halus', 30, 6.9),
(119, 'Alex Batuk', 18, 27, 500, 88, 'Baik', 'Kasar', 30, 6.9),
(120, 'Welhemus Haga', 25, 27, 500, 88, 'Baik', 'Kasar', 30, 6.9),
(121, 'Filmon Pello', 7, 27, 540, 88, 'Baik', 'Halus', 30, 6.9),
(122, 'Abdon Kiuk', 8, 27, 510, 88, 'Baik', 'Agak Kasar-Kasar', 30, 6.6),
(123, 'Kunrad Ullu', 24, 28, 510, 88, 'Baik', 'Agak Kasar-Kasar', 30, 6.8),
(124, 'Defi Dafa', 18, 27, 510, 88, 'Baik', 'Kasar', 19, 6.7),
(125, 'Anton Ullu', 22, 27, 510, 88, 'Baik', 'Kasar', 17, 6.7),
(126, 'Oldi Elias Ullu', 21, 28, 500, 88, 'Baik', 'Kasar', 30, 6.7),
(127, 'Nikolas Seran', 20, 27, 540, 88, 'Baik', 'Kasar', 30, 6.6),
(128, 'Kanisius Yoseph', 19, 27, 530, 88, 'Baik', 'Kasar', 30, 6.8),
(129, 'Ivony Patola', 26, 28, 540, 89, 'Baik', 'Kasar', 30, 6.8),
(132, 'huhuhu', 1, 7, 7, 7, 'Agak Cepat', 'Agak Kasar-Kasar', 7, 7);

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
  `id_lokasi` int(128) DEFAULT NULL,
  `C1N` double NOT NULL,
  `C2N` double NOT NULL,
  `C3N` double NOT NULL,
  `C4N` double NOT NULL,
  `C5N` varchar(128) NOT NULL,
  `C6N` varchar(128) NOT NULL,
  `C7N` double NOT NULL,
  `ranking` double NOT NULL,
  `nama_lokasi` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_perankingan_sementara`
--

INSERT INTO `tabel_perankingan_sementara` (`id`, `nama`, `id_lokasi`, `C1N`, `C2N`, `C3N`, `C4N`, `C5N`, `C6N`, `C7N`, `ranking`, `nama_lokasi`) VALUES
(16924, 'Chistovel Ullu', 24, 1, 0.98, 1, 1, '1', '1', 1, 0.996, 'Desa Oesao'),
(16925, 'simon pion', 24, 1, 0.98, 1, 1, '1', '1', 1, 0.996, 'Desa Oesao'),
(16926, 'Franjal Kiah', 24, 1, 0.96, 1, 1, '1', '1', 1, 0.992, 'Desa Oesao'),
(16927, 'Abdon Kiuk', 8, 1, 0.96, 1, 1, '1', '1', 1, 0.992, 'Kelurahan Oesao'),
(16928, 'Kunrad Ullu', 24, 1, 0.96, 1, 1, '1', '1', 1, 0.992, 'Desa Oesao'),
(16929, 'Isteten Kiah', 8, 1, 0.92, 1, 1, '1', '1', 1, 0.984, 'Kelurahan Oesao'),
(16930, 'Yuni Atollo Nabat', 8, 1, 0.88, 1, 1, '1', '1', 1, 0.976, 'Kelurahan Oesao'),
(16931, 'markus', 1, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Kelurahan Bau-bau'),
(16932, 'marzen', 1, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Kelurahan Bau-bau'),
(16933, 'Yosis Kleing', 7, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Kelurahan Merdeka'),
(16934, 'mensen tsael', 8, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Kelurahan Oesao'),
(16935, 'Regina labalu', 21, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Desa Nunkurus'),
(16936, 'Samson Sereh', 25, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Desa Pukdale'),
(16937, 'melkianus e koa', 1, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Kelurahan Bau-bau'),
(16938, 'marthen tameno', 1, 1, 1, 1, 0.75, '1', '1', 1, 0.9675, 'Kelurahan Bau-bau'),
(16939, 'Ananian Ndaumanu', 18, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Kelurahan Naibonat'),
(16940, 'Eddi Marcus', 23, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Desa Oelatimo'),
(16941, 'stefanus ludji', 8, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Kelurahan Oesao'),
(16942, 'Arifin kortiba', 23, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Desa Oelatimo'),
(16943, 'Marthen Benyamin', 23, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Desa Oelatimo'),
(16944, 'Oktovianus Kapitan', 21, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Desa Nunkurus'),
(16945, 'maklon kapitan', 1, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Kelurahan Bau-bau'),
(16946, 'Marthen Tuka', 21, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Desa Nunkurus'),
(16947, 'Adhy Kapitan', 18, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Kelurahan Naibonat'),
(16948, 'Yonathan Mplur', 25, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Desa Pukdale'),
(16949, 'Ferdy A. Benyamin', 23, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Desa Oelatimo'),
(16950, 'Marianus Kapitan', 23, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Desa Oelatimo'),
(16951, 'Alex Batuk', 18, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Kelurahan Naibonat'),
(16952, 'Welhemus Haga', 25, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Desa Pukdale'),
(16953, 'Oldi Elias Ullu', 21, 1, 1, 1, 1, '0.75', '1', 1, 0.9675, 'Desa Nunkurus'),
(16954, 'Dominggus', 18, 1, 0.96, 1, 1, '0.75', '1', 1, 0.9595, 'Kelurahan Naibonat'),
(16955, 'Defi Dafa', 18, 1, 0.96, 1, 1, '0.75', '1', 1, 0.9595, 'Kelurahan Naibonat'),
(16956, 'Anton Ullu', 22, 1, 0.96, 1, 1, '0.75', '1', 1, 0.9595, 'Desa Oefafi'),
(16957, 'berti', 22, 1, 0.92, 1, 1, '0.75', '1', 1, 0.9515, 'Desa Oefafi'),
(16958, 'Benja O. Markus', 22, 1, 0.92, 1, 1, '0.75', '1', 1, 0.9515, 'Desa Oefafi'),
(16959, 'Darwin Lusi', 22, 1, 0.92, 1, 1, '0.75', '1', 1, 0.9515, 'Desa Oefafi'),
(16960, 'Tote Albertus', 19, 1, 0.88, 1, 1, '0.75', '1', 1, 0.9435, 'Kelurahan Tuatuka'),
(16961, 'melkior tnunay', 19, 1, 0.88, 1, 1, '0.75', '1', 1, 0.9435, 'Kelurahan Tuatuka'),
(16962, 'Kanisius Yoseph', 19, 1, 0.88, 1, 1, '0.75', '1', 1, 0.9435, 'Kelurahan Tuatuka'),
(16963, 'martha', 19, 1, 0.84, 1, 1, '0.75', '1', 1, 0.9355, 'Kelurahan Tuatuka'),
(16964, 'isak bengkiuk', 20, 1, 0.84, 1, 1, '0.75', '1', 1, 0.9355, 'Desa Manusak'),
(16965, 'oktavianus kapitam', 8, 1, 0.84, 1, 1, '0.75', '1', 1, 0.9355, 'Kelurahan Oesao'),
(16966, 'Yan David Katang', 20, 1, 0.84, 1, 1, '0.75', '1', 1, 0.9355, 'Desa Manusak'),
(16967, 'Nikolas Seran', 20, 1, 0.84, 1, 1, '0.75', '1', 1, 0.9355, 'Desa Manusak'),
(16968, 'Jorgen Aluman', 20, 1, 0.76, 1, 1, '0.75', '1', 1, 0.9195, 'Desa Manusak'),
(16969, 'Bibit Lestari', 26, 1, 0.76, 1, 1, '0.75', '1', 1, 0.9195, 'Desa Tanah Putih'),
(16970, 'Anthon Therik', 20, 1, 0.76, 1, 1, '0.75', '1', 1, 0.9195, 'Desa Manusak'),
(16971, 'Mesker Kapitan', 20, 1, 0.76, 1, 1, '0.75', '1', 1, 0.9195, 'Desa Manusak'),
(16972, 'Ivony Patola', 26, 1, 0.84, 0.85714285714286, 1, '0.75', '1', 1, 0.90692857142857, 'Desa Tanah Putih'),
(16973, 'yohanis m sereh', 25, 1, 1, 1, 1, '0.25', '1', 1, 0.9025, 'Desa Pukdale'),
(16974, 'Agusthen Meok', 7, 1, 1, 1, 1, '0.25', '1', 1, 0.9025, 'Kelurahan Merdeka'),
(16975, 'Sukardi', 26, 1, 1, 1, 1, '0.25', '1', 1, 0.9025, 'Desa Tanah Putih'),
(16976, 'Alfa Edison Ullu', 7, 1, 1, 1, 1, '0.25', '1', 1, 0.9025, 'Kelurahan Merdeka'),
(16977, 'gerson', 7, 1, 0.6, 1, 1, '0.75', '1', 1, 0.8875, 'Kelurahan Merdeka'),
(16978, 'Aswin Therik', 7, 1, 0.84, 1, 1, '0.25', '1', 1, 0.8705, 'Kelurahan Merdeka'),
(16979, 'Filmon Pello', 7, 1, 0.84, 1, 1, '0.25', '1', 1, 0.8705, 'Kelurahan Merdeka'),
(16980, 'Karel tefi', 27, 1, 0.88, 1, 0.75, '0.25', '1', 1, 0.846, 'Desa Tuapuka'),
(16981, 'piter', 27, 0.5, 0.88, 1, 1, '0.75', '1', 1, 0.8435, 'Desa Tuapuka'),
(16982, 'yan', 27, 1, 0, 1, 1, '0.75', '1', 1, 0.7675, 'Desa Tuapuka'),
(16983, 'marianus', 27, 1, 0, 1, 1, '0.75', '1', 1, 0.7675, 'Desa Tuapuka'),
(16984, 'huhuhu', 1, 0, 0, 0, 0.75, '1', '0', 1, 0.2975, 'Kelurahan Bau-bau');

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
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_alternatif`
--
ALTER TABLE `tabel_alternatif`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `tabel_lokasi`
--
ALTER TABLE `tabel_lokasi`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tabel_perankingan_sementara`
--
ALTER TABLE `tabel_perankingan_sementara`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16985;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_alternatif`
--
ALTER TABLE `tabel_alternatif`
  ADD CONSTRAINT `tabel_alternatif_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `tabel_lokasi` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
