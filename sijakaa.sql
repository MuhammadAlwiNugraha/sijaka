-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 06:35 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sijakaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `kebersihan`
--

CREATE TABLE `kebersihan` (
  `id` int(11) NOT NULL,
  `kode_transaksi` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `patokan` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `kamar` varchar(10) NOT NULL,
  `status_service` enum('Service Selesai','Tunggu sebentar ya','Cancel') NOT NULL,
  `status_pembayaran` enum('Belum Bayar','Lunas') NOT NULL,
  `ulasan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebersihan`
--

INSERT INTO `kebersihan` (`id`, `kode_transaksi`, `nama`, `alamat`, `patokan`, `nohp`, `kamar`, `status_service`, `status_pembayaran`, `ulasan`) VALUES
(4, '04042020-033646', 'diki', 'lamaran', 'bengkel', '08123123123', '1 kamar', 'Service Selesai', 'Lunas', 'aku puas!'),
(5, '02062021-223217', 'ucok', '1', '1', '12312123123', '5 kamar', '', 'Belum Bayar', 'asd'),
(6, '02062021-225701', 'ucok', '1', '1', '12312123123', '3 kamar', '', 'Lunas', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `alamat`, `nohp`, `image`, `password`, `role_id`, `date_created`) VALUES
(1, 'Admin', 'admin@dc.com', '123', '081319893497', 'default.jpg', '$2y$10$2tzYQbaI3UvAIAOikvdAS.0ZckCpU1AH6pSMTfZTdFtm.ao2rTYz2', 1, '25/11/2019'),
(5, 'diki', 'diki@gmail.com', 'lamaran', '08123123123', 'default.jpg', '$2y$10$X8XElkpMR4TttXChUC./tucfwi6Rmj0siERoM3zj8eeGa/G40p0Iq', 2, '04/04/2020'),
(6, 'budi', 'budi@gmail.com', '', '', 'default.jpg', '$2y$10$cF6LQZAHU.kebUSjQDD4RODEIUNOJCEngmhO/cgGN/4BgsaflLLza', 3, '04/04/2020'),
(7, 'ucok', 'ucok@a.com', '', '', 'default.jpg', '$2y$10$vG4vVKtlUYBYEvdSSFXJcuED/FzjycLHR.nZPpRbWiTCUALIU8Hja', 2, '02/06/2021'),
(8, 'mitra', 'mitra@a.com', '', '', 'default.jpg', '$2y$10$.7iiqjMDWGlky7Ne60vUgeIOYsM/aA1rARLny4jWk6gw4gkfoFu0K', 3, '02/06/2021');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Mitra');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member'),
(3, 'Mitra');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(1) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Daftar Pesanan', 'admin/transaksi', 'fas fa-fw fa-shopping-basket', 1),
(2, 1, 'Daftar Users', 'admin', 'fas fa-fw fa-users', 1),
(3, 2, 'My Profile', 'user/profile', 'fas fa-fw fa-users', 1),
(5, 2, 'Form Order', 'user/order', 'fas fa-fw fa-shopping-basket', 1),
(8, 2, 'Riwayat', 'user', 'fas fa-fw fa-history', 1),
(9, 3, 'Daftar Pesanan', 'mitra/transaksi', 'fas fa-fw fa-shopping-basket', 1),
(10, 3, 'My Profile', 'user/profile', 'fas fa-fw fa-users', 1),
(11, 1, 'My Profile', 'user/profile', 'fas fa-fw fa-users', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kebersihan`
--
ALTER TABLE `kebersihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kebersihan`
--
ALTER TABLE `kebersihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
