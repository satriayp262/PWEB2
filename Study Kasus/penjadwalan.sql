-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2023 at 02:15 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjadwalan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id_bus` int NOT NULL,
  `nama_bus` varchar(20) NOT NULL,
  `nomor_telpon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id_bus`, `nama_bus`, `nomor_telpon`) VALUES
(1, 'Efisiensi', '085682733233'),
(2, 'Murni Jaya', '082362763723'),
(3, 'Sinar Jaya', '085712357645'),
(4, 'Sugeng Rahayu', '087654345678'),
(5, 'Eka', '084321345645'),
(6, 'Damri', '081234543421'),
(7, 'DMI', '089765467987'),
(10, 'Riyan', '086312345643');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int NOT NULL,
  `id_bus` int NOT NULL,
  `tujuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jam_datang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jam_berangkat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_bus`, `tujuan`, `kelas`, `jam_datang`, `jam_berangkat`) VALUES
(11, 10, 'Yogyakarta', 'Eksekutif', '00.00', '00.50'),
(12, 10, 'Solo', 'Eksekutif', '00.00', '00.50'),
(13, 1, 'Yogyakarta', 'Eksekutif', '00.30', '01.00'),
(14, 1, 'Jepara', 'Eksekutif', '00.30', '01.00'),
(15, 10, 'Yogyakarta', 'Eksekutif', '01.00', '01.50'),
(16, 10, 'Solo', 'Eksekutif', '01.00', '01.50'),
(17, 1, 'Yogyakartra', 'Eksekutif', '01.30', '02.00'),
(18, 1, 'Semarang', 'Eksekutif', '02.30', '03.00'),
(19, 1, 'Yogyakarta', 'Eksekutif', '03.30', '04.00'),
(20, 10, 'Solo', 'Eksekutif', '04.00', '04.50'),
(21, 10, 'Yogyakarta', 'Eksekutif', '04.00', '04.50'),
(22, 1, 'Jepara', 'Eksekutif', '04.30', '05.00'),
(23, 1, 'Yogyakarta', 'Eksekutif', '04.30', '05.00'),
(24, 1, 'Semarang', 'Eksekutif', '05.30', '06.00'),
(25, 1, 'Yogyakarta', 'Eksekutif', '05.30', '06.00'),
(33, 3, 'Jakarta', 'Eksekutif', '09:45', '10:30');

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `id_pa` int NOT NULL,
  `id_bus` varchar(10) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `jumlah` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `penumpang`
--

INSERT INTO `penumpang` (`id_pa`, `id_bus`, `bulan`, `tahun`, `jumlah`) VALUES
(7, '1', 'Januari', '2023', '87651'),
(8, '2', 'Januari', '2023', '25164'),
(9, '3', 'Januari', '2023', '32424'),
(10, '5', 'Januari', '2023', '23453');

-- --------------------------------------------------------

--
-- Table structure for table `penumpang2`
--

CREATE TABLE `penumpang2` (
  `id_pnp2` int NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `jumlah` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `penumpang2`
--

INSERT INTO `penumpang2` (`id_pnp2`, `bulan`, `tahun`, `jumlah`) VALUES
(3, 'Januari', '2023', '513372'),
(4, 'Februari', '2023', '324243'),
(5, 'Maret', '2023', '344223'),
(6, 'April', '2023', '324823'),
(7, 'Mei', '2023', '243523'),
(8, 'Juni', '2023', '124324'),
(9, 'Juli', '2023', '324322'),
(10, 'Agustus', '2023', '234532'),
(12, 'September', '2023', '234532'),
(13, 'Oktober', '2023', '534222');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(3, 'agenbus', '12345', 'user'),
(5, 'admin123', '54321', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id_bus`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_bus` (`id_bus`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id_pa`),
  ADD UNIQUE KEY `FOREIGN` (`id_bus`);

--
-- Indexes for table `penumpang2`
--
ALTER TABLE `penumpang2`
  ADD PRIMARY KEY (`id_pnp2`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id_bus` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `penumpang`
--
ALTER TABLE `penumpang`
  MODIFY `id_pa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `penumpang2`
--
ALTER TABLE `penumpang2`
  MODIFY `id_pnp2` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_bus`) REFERENCES `bus` (`id_bus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
