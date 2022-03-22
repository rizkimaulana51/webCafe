-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 09:33 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbcafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `tmenu`
--

CREATE TABLE `tmenu` (
  `idmenu` char(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tmenu`
--

INSERT INTO `tmenu` (`idmenu`, `nama`, `jenis`, `harga`, `stok`) VALUES
('54321', 'Batagor Gorila', 'Makanan', 150000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tpesanan`
--

CREATE TABLE `tpesanan` (
  `idpesan` char(5) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `idmenu` char(5) NOT NULL,
  `jml` int(11) NOT NULL,
  `tuser` char(5) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tpesanan`
--

INSERT INTO `tpesanan` (`idpesan`, `customer`, `idmenu`, `jml`, `tuser`, `tgl`) VALUES
('00001', 'Udin Pecin', '54321', 5, '12345', '2022-03-08 08:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `iduser` char(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`iduser`, `nama`, `status`) VALUES
('12345', 'Administrator', 'Kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tmenu`
--
ALTER TABLE `tmenu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `tpesanan`
--
ALTER TABLE `tpesanan`
  ADD PRIMARY KEY (`idpesan`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
