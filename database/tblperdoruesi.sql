-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 07:17 AM
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
-- Struktura e tryezës për tryezën `tblperdoruesi`
--

CREATE TABLE IF NOT EXISTS `tblperdoruesi` (
  `id` int(11) NOT NULL,
  `emriPrd` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `data_regjistrimi` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_azhurimi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Të dhënat e hedhjes për tabelën `tblperdoruesi`
--

INSERT INTO `tblperdoruesi` (`id`, `emriPrd`, `email`, `password`, `data_regjistrimi`, `data_azhurimi`) VALUES
(26, 'Ramadan', 'ramadansalihu@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-01-12 18:20:29', '2021-01-12'),
(38, 'admin', 'admin@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-01-12 18:20:29', '2021-01-12'),
(39, 'Arlind', 'a@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-01-12 18:20:29', '2021-01-13');

--
-- Indekset për tabelat e hedhura
--

--
-- Indekset për tryezën `tblperdoruesi`
--
ALTER TABLE `tblperdoruesi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT për tabelat e hedhjes
--

--
-- AUTO_INCREMENT për tryezën `tblperdoruesi`
--
ALTER TABLE `tblperdoruesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
