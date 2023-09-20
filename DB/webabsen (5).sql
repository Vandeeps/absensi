-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2023 at 05:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webabsen`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `NIP` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `hp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`NIP`, `nama`, `alamat`, `hp`) VALUES
('22220', 'Lutfi Alfasha', 'HKSN', '0812749283123'),
('22222', 'Linggar', 'Sungai Andai', '0891214721239'),
('33330', 'Zefanya', 'Sungai Andai', '0895411192902'),
('33331', 'Afdhai Rathomi', 'Sultan Adam', '0892713823912'),
('33332', 'Genezareto', 'Sungai Andai', '0892647123821'),
('33333', 'Zaidan', 'Sungai Miai', '0892712938123'),
('55550', 'Andria Almadani', 'Kampung Melayu', '0812749127381'),
('55551', 'Ferdy', 'Sungai Andai', '0819284712823');

-- --------------------------------------------------------

--
-- Table structure for table `lap_keg`
--

CREATE TABLE `lap_keg` (
  `Id_lap` int(11) NOT NULL,
  `NIP` varchar(100) NOT NULL,
  `laporan` varchar(100) NOT NULL,
  `ket` enum('Selesai','Proses','Belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lap_keg`
--

INSERT INTO `lap_keg` (`Id_lap`, `NIP`, `laporan`, `ket`) VALUES
(1, '22220', 'Mengerjakan Project Client', 'Selesai'),
(2, '22222', 'Sakit', 'Selesai'),
(3, '33330', 'Project Web Kerja', 'Proses'),
(4, '33331', 'Web Banjarmasin Pintar', 'Selesai'),
(5, '33332', 'Izin', 'Selesai'),
(6, '33333', 'Java Project', 'Belum'),
(7, '55550', 'Sakit', 'Selesai'),
(8, '55551', 'Project Android', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `user`, `pass`) VALUES
(1, 'Zeff', 'mamah'),
(2, 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_absen`
--

CREATE TABLE `tb_absen` (
  `No` int(10) NOT NULL,
  `NIP` varchar(16) NOT NULL,
  `absen` enum('Hadir','Sakit','Izin') NOT NULL,
  `tgl` date DEFAULT NULL,
  `Ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_absen`
--

INSERT INTO `tb_absen` (`No`, `NIP`, `absen`, `tgl`, `Ket`) VALUES
(1, '22220', 'Hadir', '2023-09-02', ''),
(2, '22222', 'Sakit', '2023-09-06', 'Demam'),
(3, '33330', 'Hadir', '2023-09-08', ''),
(4, '33331', 'Hadir', '2023-09-09', ''),
(5, '33332', 'Izin', '2023-09-11', 'Nikahan'),
(6, '33333', 'Hadir', '2023-09-13', ''),
(7, '55550', 'Sakit', '2023-09-18', 'Tipes'),
(8, '55551', 'Hadir', '2023-09-20', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `lap_keg`
--
ALTER TABLE `lap_keg`
  ADD PRIMARY KEY (`Id_lap`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`No`),
  ADD KEY `NIP` (`NIP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lap_keg`
--
ALTER TABLE `lap_keg`
  MODIFY `Id_lap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lap_keg`
--
ALTER TABLE `lap_keg`
  ADD CONSTRAINT `lap_keg_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `data_karyawan` (`NIP`);

--
-- Constraints for table `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD CONSTRAINT `tb_absen_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `data_karyawan` (`NIP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
