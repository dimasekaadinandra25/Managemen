-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 05:16 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbarang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `foto_barang` varchar(255) NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `nama_barang`, `stok`, `harga`, `foto_barang`, `last_update`) VALUES
(12, 'test 2', 16, '22000', '126854.jpg', '2019-11-09'),
(13, 'tes GL', 27, '112233', '1362643919579_.jpg', '2019-11-08'),
(14, 'cpba', 10, '134', 'AMNESIA-chibi-33812382-1920-1200.jpg', '2019-11-09'),
(15, 'cbaq', 12, '12467', 'TlwdUX9.png', '2019-11-09'),
(16, 'cbaqwer', 12, '123456', '429165.jpg', '2019-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `idpembelian` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `date_pembelian` date NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`idpembelian`, `id_barang`, `date_pembelian`, `stock`) VALUES
(1, 12, '2019-11-09', 5),
(2, 12, '2019-11-09', 2),
(3, 13, '2019-11-09', 5),
(4, 12, '2019-11-09', 5),
(5, 14, '2019-11-09', 10),
(6, 12, '2019-11-09', 3),
(7, 14, '2019-11-09', 10),
(8, 13, '2019-11-12', 5);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `idpenjualan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `date_penjualan` date NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`idpenjualan`, `id_barang`, `date_penjualan`, `stock`) VALUES
(1, 12, '2019-11-09', 2),
(2, 12, '2019-11-09', 10),
(3, 12, '2019-11-09', 2),
(4, 14, '2019-11-09', 11),
(5, 13, '2019-11-12', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nama`, `username`, `password`, `gambar`) VALUES
(1, 'camelia', 'camelia', 'ff42e9f585aebc196b14e962d8a10989', 'thumb-1920-860753.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`idpembelian`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`idpenjualan`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `idpembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `idpenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`idbarang`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`idbarang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
