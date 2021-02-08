-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 08:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_v_projekti`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblprodukti`
--

CREATE TABLE IF NOT EXISTS `tblprodukti` (
  `id` int(8) NOT NULL,
  `emriProdukti` varchar(255) NOT NULL,
  `kodi` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `qmimi` double(10,2) NOT NULL,
  `sasia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprodukti`
--

INSERT INTO `tblprodukti` (`id`, `emriProdukti`, `kodi`, `image`, `qmimi`, `sasia`) VALUES
(169, 'kamera', '1', 'camera.jpg', 300.00, 300),
(170, 'aaaaaa', '2', 'laptop.jpg', 300.00, 1),
(171, 'bbbbbbbbbbbb', '3', 'laptop.jpg', 300.00, 111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblprodukti`
--
ALTER TABLE `tblprodukti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `produkt_kodi` (`kodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblprodukti`
--
ALTER TABLE `tblprodukti`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
