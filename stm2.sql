-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 09:16 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stm2`
--

-- --------------------------------------------------------

--
-- Table structure for table `butiran`
--

CREATE TABLE IF NOT EXISTS `butiran` (
  `id` int(11) NOT NULL,
  `No_Daftar` varchar(30) NOT NULL,
  `Nama` text NOT NULL,
  `Emel` varchar(30) NOT NULL,
  `No_Tel` varchar(30) NOT NULL,
  `Alamat` varchar(70) NOT NULL,
  `majlis` varchar(20) NOT NULL,
  `pakej` varchar(50) NOT NULL,
  `Tarikh_Majlis` date NOT NULL,
  `KategoriLokasiMajlis` text NOT NULL,
  `JumlahTetamu` int(20) NOT NULL,
  `catatan` varchar(20) NOT NULL DEFAULT 'daftar'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `butiran`
--

INSERT INTO `butiran` (`id`, `No_Daftar`, `Nama`, `Emel`, `No_Tel`, `Alamat`, `majlis`, `pakej`, `Tarikh_Majlis`, `KategoriLokasiMajlis`, `JumlahTetamu`, `catatan`) VALUES
(2, '980425-04-5000', 'aisha', 'aisha02@gmail.com', '01121888077', 'Johor', '3', '2', '2017-11-22', 'Rumah', 400, 'Tempahan Baru'),
(4, '900424789073', 'ISMAIL ABDULLAH', 'ISMAIL90@gmail.com', '', '1198 ,KUARTERS MAKTAB PERGURUAN TUANKU BAINUN , MENGKUANG , BUKIT MERT', '2', '6', '2017-11-24', 'Rumah', 400, 'Tempahan Baru'),
(5, '', 'SITI FATIMAH HASHIM', 'SITI FATIMAH', '', '1112 LRG SERAI SETIA 2/5, TMN SERAI SETIA, 09400 PDG SERAI, KEDAH', '', '2', '2017-11-15', 'Rumah', 10001, 'daftar');

-- --------------------------------------------------------

--
-- Table structure for table `majlis`
--

CREATE TABLE IF NOT EXISTS `majlis` (
  `id` int(11) NOT NULL,
  `majlis` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `majlis`
--

INSERT INTO `majlis` (`id`, `majlis`) VALUES
(2, 'Akad Nikah'),
(3, 'Kenduri Kahwin'),
(4, 'Pertunangan');

-- --------------------------------------------------------

--
-- Table structure for table `pakej`
--

CREATE TABLE IF NOT EXISTS `pakej` (
  `id` int(15) NOT NULL,
  `pakej` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakej`
--

INSERT INTO `pakej` (`id`, `pakej`) VALUES
(1, 'PAKEJ MINI PELAMIN (RM9500)'),
(2, 'PAKEJ MINI PELAMIN (RM1200)'),
(3, 'PAKEJ PELAMIN RUMAH (RM2190)'),
(5, 'PAKEJ PELAMIN KHEMAH (RM2570)'),
(6, 'PAKEJ PELAMIN DEWAN (RM3420)'),
(7, 'PAKEJ PELAMIN DEWAN EKSLUSIF (RM5510)'),
(8, 'PAKEJ EXCLUSIVE - DEWAN (RM25,000)'),
(10, 'PAKEJ EXCLUSIVE - KHEMAH (RM18,000)');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `uid` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`uid`, `email`, `password`, `name`, `level`) VALUES
(0, 'aisha02@gmail.com', 'jia862782', 'aisha', 'Pengguna'),
(0, 'ISMAIL90@gmail.com', 'h7w9hn7h', 'ISMAIL ABDULLAH', 'Pengguna'),
(2, 'pentadbiranaset@gmail.com', '123', 'Zulfadhli Khalid', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `butiran`
--
ALTER TABLE `butiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `majlis`
--
ALTER TABLE `majlis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakej`
--
ALTER TABLE `pakej`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `butiran`
--
ALTER TABLE `butiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `majlis`
--
ALTER TABLE `majlis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pakej`
--
ALTER TABLE `pakej`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
