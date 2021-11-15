-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 03:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapesanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarpesanan`
--

CREATE TABLE `daftarpesanan` (
  `id_tiker` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_handphone` text NOT NULL,
  `no_pesanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftarpesanan`
--

INSERT INTO `daftarpesanan` (`id_tiker`, `nama`, `no_handphone`, `no_pesanan`) VALUES
(4, 'Jake River', '085135246379', 'H5SIV32LS'),
(5, 'Raffi Hidayat', '081222333444', 'H5SIV34LA'),
(6, 'Taufik Ahmad ', '085789765678', 'H5SIV36LI');

-- --------------------------------------------------------

--
-- Table structure for table `daftartiket`
--

CREATE TABLE `daftartiket` (
  `id_pesanan` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_handphone` text NOT NULL,
  `no_pesanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftartiket`
--

INSERT INTO `daftartiket` (`id_pesanan`, `nama`, `tanggal_lahir`, `alamat`, `no_handphone`, `no_pesanan`) VALUES
(4, 'Jake River', '1996-12-12', 'Jl. Sungai Mahakam No.12 Surabaya', '085135246379', 'H5SIV32LS'),
(5, 'Raffi Hidayat', '2000-03-20', 'Jl. Surabaya No. 22 Jakarta Selatan', '081222333444', 'H5SIV34LA'),
(6, 'Taufik Ahmad', '1998-12-31', 'Jl. Katak Putih No. 42 Maluku Utara', '085789765678', 'H5SIV36LI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarpesanan`
--
ALTER TABLE `daftarpesanan`
  ADD PRIMARY KEY (`id_tiker`);

--
-- Indexes for table `daftartiket`
--
ALTER TABLE `daftartiket`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarpesanan`
--
ALTER TABLE `daftarpesanan`
  MODIFY `id_tiker` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `daftartiket`
--
ALTER TABLE `daftartiket`
  MODIFY `id_pesanan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
