-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 07:21 AM
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
-- Database: `A_V_projekti
--

-- --------------------------------------------------------

--
-- Table structure for table `tblprdlog`
--

CREATE TABLE IF NOT EXISTS `tblprdlog` (
  `id` int(11) NOT NULL,
  `prdId` int(11) NOT NULL,
  `prdEmail` varchar(255) NOT NULL,
  `prdIp` varbinary(16) NOT NULL,
  `vendi` varchar(255) NOT NULL,
  `komuna` varchar(255) NOT NULL,
  `kohaGjate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprdlog`
--

INSERT INTO `tblprdlog` (`id`, `prdId`, `prdEmail`, `prdIp`, `vendi`, `komuna`, `kohaGjate`) VALUES
(1, 10, 'test@gmail.com', '', '', '', '2016-06-22 04:16:42'),
(2, 10, 'test@gmail.com', '', '', '', '2016-06-24 09:20:28'),
(4, 10, 'a@hotmail.com', 0x3a3a31, '', '', '2016-06-24 09:22:47');

--
-- Indekset për tabelat e hedhura
--

--
-- Indekset për tryezën `tblprdlog`
--
ALTER TABLE `tblprdlog`
  ADD PRIMARY KEY (`id`);

--
--AUTO_INCREMENT për tabelat e hedhura
--

--
-- AUTO_INCREMENT për tryezën `tblprdlog`
--
ALTER TABLE `tblprdlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
