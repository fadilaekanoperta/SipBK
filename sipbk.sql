-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 04:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipbk`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id_beasiswa` int(11) NOT NULL,
  `nama_beasiswa` varchar(50) NOT NULL,
  `status` enum('buka','tutup') NOT NULL,
  `jangka_beasiswa` varchar(50) NOT NULL,
  `deadline` varchar(100) NOT NULL,
  `deskripsi_singkat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id_beasiswa`, `nama_beasiswa`, `status`, `jangka_beasiswa`, `deadline`, `deskripsi_singkat`) VALUES
(1, 'Beasiswa 1', 'tutup', 'Beasiswa selama 1 semester', 'Deadline pengajuan Jumat, 09 April 2023 Pukul 23:59 WIB', 'Minimal IPK 3.00, Aktif berorganisasi, Lorem ipsum dolor sit amet consectetur, adipisicing elit.'),
(2, 'Beasiswa Akademik A', 'buka', 'Beasiswa 2 semester', 'Deadline pengajuan Rabu, 13 April 2023 Pukul 23:59 WIB', 'Minimal IPK 3.50, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Akademik A'),
(3, 'Beasiswa Non Akademik B', 'buka', 'Beasiswa sampai lulus', 'Deadline pengajuan Senin, 22 April 2023 Pukul 23:59 WIB', 'Minimal IPK 3.15, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non Akademik B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id_beasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id_beasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
