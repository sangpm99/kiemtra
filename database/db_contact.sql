-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 02:44 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `user`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'pms', 'pms'),
(3, 'admin2', 'admin2'),
(4, 'admin3', 'admin3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cadres`
--

CREATE TABLE `tbl_cadres` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_num` varchar(20) NOT NULL,
  `id_unit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cadres`
--

INSERT INTO `tbl_cadres` (`id`, `name`, `position`, `email`, `phone_num`, `id_unit`) VALUES
(1, 'Nguyễn Thanh Tùng', 'Trưởng khoa', 'nttung@wru.edu.vn', '0978654546', 1),
(2, 'Đặng Thị Thu Hiền', 'Phó trưởng khoa', 'dtthien@wru.edu.vn', '0988667545', 2),
(3, 'Nguyễn Thị Thu Hương', 'Trợ lý khoa', 'ntthuong@wru.edu.vn', '0987866529', 3),
(4, 'Nguyễn Khánh Linh', 'Trợ lý khoa', 'nklinh@wru.edu.vn', '0897876756', 3),
(5, 'Nguyễn Hữu Thọ', 'Trưởng bộ môn', 'nhtho@wru.edu.vn', '0878675676', 1),
(6, 'Đỗ Lân', 'Phó bộ môn', 'dlan@wru.edu.vn', '0989897878', 2),
(7, 'Nguyễn Đức Hậu', 'Phó bộ môn', 'ndhau@wru.edu.vn', '0987766223', 2),
(8, 'Phạm Xuân Trung', 'Giảng viên', 'pxtrung@wru.edu.vn', '0978989976', 4),
(9, 'Phan Thị Thanh Huyền', 'Giảng viên', 'ptthuyen@wru.edu.vn', '0956233241', 4),
(10, 'Nguyễn Văn Đắc', 'Giảng viên', 'nvdac@wru.edu.vn', '0978656543', 4),
(11, 'Nguyễn Thị Vân', 'Giảng viên', 'ntvan@wru.edu.vn', '0989876221', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit`
--

CREATE TABLE `tbl_unit` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `room_num` varchar(20) DEFAULT NULL,
  `phone_num` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `id_child` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_unit`
--

INSERT INTO `tbl_unit` (`id`, `name`, `room_num`, `phone_num`, `address`, `email`, `website`, `id_child`) VALUES
(1, 'Đơn vị 1', 'P201', '09878676621', 'Tầng 2, Tòa C1', 'vkpcntt@tlu.edu.vn', 'http://cse.tlu.edu.vn', 2),
(2, 'Đơn vị 2', 'P202', '09878756327', 'Tầng 2, Tòa C1', 'vkpcntt@tlu.edu.vn', 'http://cse.tlu.edu.vn', 3),
(3, 'Đơn vị 3', 'P203', '02435632211', 'Tầng 2, Tòa C2', 'vkpcntt@tlu.edu.vn', 'http://cse.tlu.edu.vn', 3),
(4, 'Đơn vị 4', 'P305', '02676555326', 'Tầng 3, Tòa C1', 'vkpcntt@tlu.edu.vn', 'http://cse.tlu.edu.vn', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cadres`
--
ALTER TABLE `tbl_cadres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ID_CADRES` (`id_unit`);

--
-- Indexes for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ID_UNIT` (`id_child`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_cadres`
--
ALTER TABLE `tbl_cadres`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cadres`
--
ALTER TABLE `tbl_cadres`
  ADD CONSTRAINT `FK_ID_CADRES` FOREIGN KEY (`id_unit`) REFERENCES `tbl_unit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  ADD CONSTRAINT `FK_ID_UNIT` FOREIGN KEY (`id_child`) REFERENCES `tbl_unit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
