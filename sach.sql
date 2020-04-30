-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 02:11 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sach`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `hinhanh` varbinary(255) NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chap`
--

CREATE TABLE `chap` (
  `id_chap` int(11) NOT NULL,
  `ten_chap` varchar(255) NOT NULL,
  `ngay_capnhat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nha_xuatban`
--

CREATE TABLE `nha_xuatban` (
  `id_nhaxb` int(11) NOT NULL,
  `ten_nhaxb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nha_xuatban`
--

INSERT INTO `nha_xuatban` (`id_nhaxb`, `ten_nhaxb`) VALUES
(1, 'NXB Thời Đại'),
(2, 'NXB Thông Tin Và Truyền Thông');

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `id_sach` int(11) NOT NULL,
  `ten_sach` varchar(255) NOT NULL,
  `id_tacgia` int(11) NOT NULL,
  `ngay_capnhat` timestamp NOT NULL DEFAULT current_timestamp(),
  `hinh_anh` varchar(255) NOT NULL,
  `id_nhaxb` int(11) NOT NULL,
  `id_theloai` int(11) NOT NULL,
  `id_chap` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tac_gia`
--

CREATE TABLE `tac_gia` (
  `id_tacgia` int(11) NOT NULL,
  `ten_tacgia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tac_gia`
--

INSERT INTO `tac_gia` (`id_tacgia`, `ten_tacgia`) VALUES
(1, 'Nicolas Darvas'),
(2, 'Jeffrey E. Garten');

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `the_loai`
--

CREATE TABLE `the_loai` (
  `id_theloai` int(11) NOT NULL,
  `ten_theloai` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `the_loai`
--

INSERT INTO `the_loai` (`id_theloai`, `ten_theloai`, `soluong`) VALUES
(0, 'Tâm Lý - Kỹ Năng Sống', 100),
(1, 'Tâm Lý - Kỹ Năng Sống', 100),
(2, 'Kinh Tế - Quản Lý', 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chap`
--
ALTER TABLE `chap`
  ADD PRIMARY KEY (`id_chap`);

--
-- Indexes for table `nha_xuatban`
--
ALTER TABLE `nha_xuatban`
  ADD PRIMARY KEY (`id_nhaxb`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`id_sach`),
  ADD KEY `id_nhaxb` (`id_nhaxb`),
  ADD KEY `id_theloai` (`id_theloai`),
  ADD KEY `id_tacgia` (`id_tacgia`),
  ADD KEY `id_chap` (`id_chap`);

--
-- Indexes for table `tac_gia`
--
ALTER TABLE `tac_gia`
  ADD PRIMARY KEY (`id_tacgia`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `the_loai`
--
ALTER TABLE `the_loai`
  ADD PRIMARY KEY (`id_theloai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chap`
--
ALTER TABLE `chap`
  MODIFY `id_chap` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tac_gia`
--
ALTER TABLE `tac_gia`
  MODIFY `id_tacgia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`id_nhaxb`) REFERENCES `nha_xuatban` (`id_nhaxb`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `sach_ibfk_2` FOREIGN KEY (`id_theloai`) REFERENCES `the_loai` (`id_theloai`),
  ADD CONSTRAINT `sach_ibfk_3` FOREIGN KEY (`id_tacgia`) REFERENCES `tac_gia` (`id_tacgia`),
  ADD CONSTRAINT `sach_ibfk_4` FOREIGN KEY (`id_chap`) REFERENCES `chap` (`id_chap`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
