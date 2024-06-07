-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 02:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paris`
--

-- --------------------------------------------------------

--
-- Table structure for table `peta`
--

CREATE TABLE `peta` (
  `id` int(5) NOT NULL,
  `nama` varchar(39) NOT NULL,
  `univ` varchar(500) NOT NULL,
  `lat` varchar(20) NOT NULL,
  `lng` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `peta`
--

INSERT INTO `peta` (`id`, `nama`, `univ`, `lat`, `lng`) VALUES
(9, 'Lola Nashwa Aginza', 'Universitas Syiah Kuala', '5.570050', '95.369729'),
(10, 'Salsabiela Hernawan', 'Universitas Internasional Batam', '1.119534', '104.003035'),
(11, 'Maya Sari', 'Universitas Internasional Batam', '1.119534', '104.003035'),
(12, 'Nicholas Bintang Satria Dewa', 'Universitas Mahasaraswati Denpasar', '-8.653084', '115.224579'),
(13, 'Remus Yosias Natanael Simanjuntak', 'Universitas Negeri Makassar', '-5.174545', '119.445559'),
(14, 'Elsa Evipania Br Sembiring', 'Universitas Negeri Makassar', '-5.174545', '119.445559'),
(3765, 'Muhammad Rafli Alfarisqi', 'Universitas Lancang Kuning', '0.576064', '101.424650');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peta`
--
ALTER TABLE `peta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peta`
--
ALTER TABLE `peta`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8218;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
