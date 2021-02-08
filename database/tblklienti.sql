-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 08:00 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;


--
-- Database: `A_V_projekti
--

-- --------------------------------------------------------

--
-- Table structure for table `tblklienti`
--

CREATE TABLE IF NOT EXISTS `tblklienti` (
  `id` int(11) NOT NULL,
  `emriPrdKlienti` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `data_regjistrimi` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_azhurimi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblklienti`
--

INSERT INTO `tblklienti` (`id`, `emriPrdKlienti`, `email`, `password`, `data_regjistrimi`, `data_azhurimi`) VALUES
(1, 'Filan Fisteku', 'arlind@admin.com', '827ccb0eea8a706c4c34a16891f84e7b', '2021-01-12 18:56:42', NULL),
(2, 'Filan2 Fisteku2', 'a@hotmail.com', '202cb962ac59075b964b07152d234b70', '2021-01-12 18:56:42', NULL),
(3, 'Filan2 Fisteku23333', 'ssssssarlind@admin.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-01-12 18:56:42', NULL),
(6, 'Filan2 Fisteku233333', 'sssssssarlind@admin.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-01-12 18:56:42', NULL),
(8, 'rsalihu25', 'rsalihu25@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-01-12 18:56:42', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblklienti`
--
ALTER TABLE `tblklienti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblklienti`
--
ALTER TABLE `tblklienti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
