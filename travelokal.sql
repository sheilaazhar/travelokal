-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 02:48 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelokal`
--

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `Kode_Paket` varchar(6) NOT NULL,
  `Nama_Paket` varchar(50) NOT NULL,
  `Desc_Paket` varchar(100) NOT NULL,
  `Harga_Paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`Kode_Paket`, `Nama_Paket`, `Desc_Paket`, `Harga_Paket`) VALUES
('P0001', 'Jatinangor - Tasikmalaya', 'Pick Up Point :\r\nJl. Raya Bandung Sumedang, Cikeruh, Kec. Jatinangor (JATOS)', 50000),
('P0002', 'Tasikmalaya - Jatinangor ', 'Pick Up Point :\r\nJl. KHZ Mustofa No.326, Tugujaya (Ruko Plaza Asia)', 50000),
('P0003', 'Jatinangor - Kuningan', 'Pick Up Point :\r\nJl. Raya Bandung Sumedang, Cikeruh, Kec. Jatinangor (JATOS)', 65000),
('P0004', 'Kuningan - Jatinangor', 'Pick Up Point :\r\nJl. Kramat Mulya Kuningan (Ruko depan Pasar)', 65000),
('P0005', 'Jatinangor-Bekasi', 'Pick Up Point :\r\nJl. Raya Bandung Sumedang, Cikeruh, Kec. Jatinangor (JATOS)', 70000),
('P0006', 'Bekasi - Jatinangor', 'Pick Up Point :\r\nJl. Bulevard Ahmad Yani Blok M, Sentra Summarecon Bekasi', 70000),
('P0007', 'Door to Door (TSK )', 'Tasikmalaya-Jatinangor dan Jatinangor-Tasikmalaya (HARAP MENGHUBUNGI CP tertera)', 65000),
('P0008', 'Door to door (KNG)', 'Kuningan - Jatinangor dan Jatinangor - Kuningan (Harap menghubungi CP yang tertera)', 75000),
('P0009', 'Door to door (BKS)', 'Bekasi - Jatinangor dan Jatinangor - Bekasi (Harap mengubungi CP yang tertera)', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `kode_pesan` int(6) NOT NULL,
  `Kode_paket` varchar(6) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_pesan` varchar(20) DEFAULT NULL,
  `no_telp` varchar(14) DEFAULT NULL,
  `tgl_pesan` date DEFAULT NULL,
  `tgl_berangkat` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `jml_pesan` int(2) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`kode_pesan`, `Kode_paket`, `id_user`, `nama_pesan`, `no_telp`, `tgl_pesan`, `tgl_berangkat`, `jam`, `jml_pesan`, `total_harga`) VALUES
(10, 'P0001', 6, 'tati', '0987654', '2019-12-03', '2019-12-31', '12:30:00', 1, 50000),
(11, 'P0002', 1, 'Sheila', '081223728134', '2019-12-03', '2019-12-08', '08:00:00', 2, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `role`) VALUES
(1, 'Sheila Azhar', 'sheila.azhar98@gmail.com', 'sheilaazhar_', '508ab27d161912a92e8b5db3fe8cbdd9', 'user'),
(4, 'Admin Travelokal', 'sheilaazhar59@yahoo.co.id', 'admin', '3f8a23dfc7c581ddf5dde4180619436f', 'admin'),
(5, 'Sarah Navianti', 'ptiaraa10@gmail.com', 'sar', 'ec26202651ed221cf8f993668c459d46', 'user'),
(6, 'raissa', 'raissaamini@gmail.com', 'raissa', '542ca55b8b5122d79fe013c42a981027', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`Kode_Paket`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`kode_pesan`),
  ADD KEY `kode_paket` (`Kode_paket`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `kode_pesan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_3` FOREIGN KEY (`Kode_paket`) REFERENCES `paket` (`Kode_Paket`),
  ADD CONSTRAINT `pesan_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
