-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2019 at 07:21 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_paw_b_kel6`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(192) NOT NULL,
  `password` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(10) NOT NULL,
  `nama` varchar(192) NOT NULL,
  `email` varchar(192) NOT NULL,
  `password` varchar(192) NOT NULL,
  `nomorHandphone` varchar(15) NOT NULL,
  `activationcode` varchar(192) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `email`, `password`, `nomorHandphone`, `activationcode`, `status`) VALUES
(12, 'saasd', 'felix.asuiwqe@gmail.com', '$2y$10$D22WmmK57QFSjybNm7ghreJAPwkuwKPZLytAHgVnJsvpshcW3p4vm', '2147483647', '5f742640f8a6cfd11f797b487f60c01c', 0),
(35, 'asds', 'akuncm@gmail.com', '$2y$10$U0GtMhOBJq34RqvykWB3BupxA3zpTC9jCxqxjwxLEMTS/X/kzfOVi', '989898989898', 'c900d25cd7a5bca567b549fd80bf87a9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(10) NOT NULL,
  `namaPembeli` varchar(192) NOT NULL,
  `gender` int(10) NOT NULL,
  `alamat` varchar(192) NOT NULL,
  `kota` varchar(192) NOT NULL,
  `nomorTelepon` varchar(15) NOT NULL,
  `merk` int(10) NOT NULL,
  `type` int(10) NOT NULL,
  `warna` int(10) NOT NULL,
  `harga` bigint(30) NOT NULL,
  `cek` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `namaPembeli`, `gender`, `alamat`, `kota`, `nomorTelepon`, `merk`, `type`, `warna`, `harga`, `cek`) VALUES
(21, 'BOERHAN', 0, 'asdasd', 'asdasd', '2147483647', 1, 2, 2, 1111111111, 'akuncm@gmail.com'),
(23, 'asdasd', 0, 'asdasdasd', 'asdasdas', '2147483647', 1, 2, 2, 1111111111, 'akuncm@gmail.com'),
(24, 'asdasd', 0, 'asdasd', 'qawedqwe', '2147483647', 2, 1, 1, 1111111111, 'akuncm@gmail.com'),
(25, 'werqw', 0, 'qweqwe', 'qweqwe', '2147483647', 2, 3, 1, 2147483647, 'akuncm@gmail.com'),
(26, 'asd', 0, 'asdasd', 'weqwe', '2147483647', 1, 2, 2, 1233333333, 'akuncm@gmail.com'),
(27, 'asd', 0, 'asdasd', 'weqwe', '2147483647', 1, 2, 2, 1233333333, 'akuncm@gmail.com'),
(28, 'asdasd', 0, 'asdasd', 'asdasd', '895610801917', 1, 2, 2, 1000000000, 'akuncm@gmail.com'),
(29, 'sdfdsf', 0, 'fsdfsdfsd', 'sdfsdfsd', '087898989898', 2, 2, 2, 9999999999, 'akuncm@gmail.com'),
(30, 'sdfsdfsdf', 0, 'sdfsdfsdf', 'sdfsdf', '087878787878', 2, 3, 2, 9999999999, 'akuncm@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `penjualanm`
--

CREATE TABLE `penjualanm` (
  `id` int(10) NOT NULL,
  `namaPenjual` varchar(192) NOT NULL,
  `merk` int(10) NOT NULL,
  `tahun` int(4) NOT NULL,
  `jarak` int(10) NOT NULL,
  `warna` varchar(192) NOT NULL,
  `harga` bigint(50) NOT NULL,
  `jenis` int(10) NOT NULL,
  `cek` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualanm`
--

INSERT INTO `penjualanm` (`id`, `namaPenjual`, `merk`, `tahun`, `jarak`, `warna`, `harga`, `jenis`, `cek`) VALUES
(1, 'asdasd', 8, 2323, 23, 'merah', 2323, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `id` int(10) NOT NULL,
  `namaPenjual` varchar(192) NOT NULL,
  `namaSparepart` varchar(192) NOT NULL,
  `deskripsi` varchar(192) NOT NULL,
  `harga` bigint(50) NOT NULL,
  `kondisi` varchar(192) NOT NULL,
  `cek` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`id`, `namaPenjual`, `namaSparepart`, `deskripsi`, `harga`, `kondisi`, `cek`) VALUES
(4, 'wqeqw', 'qweqweqwe', 'qweqwe', 4, 'baru', 'akuncm@gmail.com'),
(5, 'wefasdf', 'asdasd', 'asdasd', 500000, 'baru', 'akuncm@gmail.com'),
(11, 'asdasd', 'asdasdas', 'asdasdas', 23, 'baru', 'akuncm@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualanm`
--
ALTER TABLE `penjualanm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `penjualanm`
--
ALTER TABLE `penjualanm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sparepart`
--
ALTER TABLE `sparepart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
