-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 08:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmau_ph23939`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` int(50) NOT NULL,
  `bill_email` int(100) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1.thanh toan truc tiep\r\n2.chuyen khoan\r\n3.thanh toan online',
  `total` int(10) NOT NULL,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0. Don hang moi\r\n1. Dang xu ly\r\n3. dang giao\r\n4. da giao',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_tel` varchar(50) DEFAULT NULL,
  `ngaydathang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`, `ngaydathang`) VALUES
(1, 'admin2', 'abc', 0, 0, 0, 22, 0, NULL, NULL, NULL, '09:25:29pm 15/10/2022'),
(2, 'admin2', 'abc', 0, 0, 0, 22, 0, NULL, NULL, NULL, '09:30:13pm 15/10/2022'),
(3, 'admin2', 'abc', 0, 0, 0, 22, 0, NULL, NULL, NULL, '09:32:31pm 15/10/2022'),
(4, 'admin2', 'abc', 0, 0, 0, 22, 0, NULL, NULL, NULL, '07:36:42am 16/10/2022'),
(5, 'admin2', 'abc', 0, 0, 0, 77, 0, NULL, NULL, NULL, '07:56:41am 16/10/2022'),
(6, 'admin2', 'abc', 0, 0, 0, 33, 0, NULL, NULL, NULL, '09:55:32am 16/10/2022'),
(7, 'admin2', 'abc', 0, 0, 0, 33, 0, NULL, NULL, NULL, '10:06:42am 16/10/2022'),
(8, 'admin2', 'aa', 0, 0, 0, 77, 0, NULL, NULL, NULL, '10:07:18am 16/10/2022'),
(9, 'admin2', 'aa', 0, 0, 0, 253, 0, NULL, NULL, NULL, '10:19:31am 16/10/2022'),
(10, 'admin2', 'aa', 0, 0, 0, 253, 0, NULL, NULL, NULL, '10:20:02am 16/10/2022'),
(11, 'admin2', 'abc', 0, 0, 0, 374, 0, NULL, NULL, NULL, '10:23:10am 16/10/2022'),
(12, 'admin2', 'abc', 0, 0, 0, 451, 0, NULL, NULL, NULL, '10:29:34am 16/10/2022'),
(13, 'admin2', 'abc', 0, 0, 0, 451, 0, NULL, NULL, NULL, '10:30:53am 16/10/2022'),
(14, 'admin2', 'abc', 0, 0, 1, 88, 0, NULL, NULL, NULL, '02:33:28pm 17/10/2022'),
(15, 'admin2', 'abc', 0, 0, 1, 88, 0, NULL, NULL, NULL, '02:34:25pm 17/10/2022'),
(16, 'admin2', 'abc', 0, 0, 1, 88, 0, NULL, NULL, NULL, '02:41:03pm 17/10/2022'),
(17, 'admin2', 'abc', 0, 0, 1, 88, 0, NULL, NULL, NULL, '02:45:00pm 17/10/2022'),
(18, 'admin2', 'abc', 0, 0, 1, 88, 0, NULL, NULL, NULL, '02:46:37pm 17/10/2022'),
(19, 'admin2', 'abc', 0, 0, 1, 88, 0, NULL, NULL, NULL, '02:47:04pm 17/10/2022'),
(20, 'admin2', 'abc', 0, 0, 1, 88, 0, NULL, NULL, NULL, '02:47:51pm 17/10/2022'),
(21, 'admin2', 'abc', 0, 0, 1, 88, 0, NULL, NULL, NULL, '02:49:13pm 17/10/2022'),
(22, 'admin2', 'abc', 0, 0, 1, 88, 0, NULL, NULL, NULL, '02:49:32pm 17/10/2022'),
(23, 'admin2', 'abc', 0, 0, 1, 88, 0, NULL, NULL, NULL, '02:52:00pm 17/10/2022'),
(24, 'admin2', 'abc', 0, 0, 1, 88, 0, NULL, NULL, NULL, '02:54:39pm 17/10/2022'),
(25, 'admin2', 'abc', 0, 0, 1, 121, 0, NULL, NULL, NULL, '02:55:11pm 17/10/2022'),
(26, 'admin2', 'abc', 0, 0, 1, 121, 0, NULL, NULL, NULL, '02:57:40pm 17/10/2022'),
(27, 'admin2', 'abc', 0, 0, 1, 121, 0, NULL, NULL, NULL, '03:51:16pm 17/10/2022'),
(28, '2', 'huyenvtnph23939@fpt.edu.vn', 0, 0, 0, 3, 0, NULL, NULL, NULL, '1'),
(29, '2', 'huyenvtnph23939@fpt.edu.vn', 0, 0, 0, 3, 0, NULL, NULL, NULL, '1'),
(30, '', 'huyenvtnph23939@fpt.edu.vn', 0, 0, 0, 3, 0, NULL, NULL, NULL, '1'),
(31, 'admin2', 'abc', 0, 0, 1, 165, 0, NULL, NULL, NULL, '03:56:01pm 17/10/2022'),
(32, 'admin2', 'abc', 0, 0, 1, 165, 0, NULL, NULL, NULL, '03:56:54pm 17/10/2022'),
(33, 'admin2', 'abc', 0, 0, 1, 165, 0, NULL, NULL, NULL, '03:59:49pm 17/10/2022'),
(34, 'admin2', 'abc', 0, 0, 1, 165, 0, NULL, NULL, NULL, '04:01:26pm 17/10/2022'),
(35, 'admin2', 'abc', 0, 0, 1, 165, 0, NULL, NULL, NULL, '04:02:49pm 17/10/2022'),
(36, 'admin2', 'abc', 0, 0, 1, 121, 0, NULL, NULL, NULL, '04:03:14pm 17/10/2022'),
(37, 'admin2', 'abc', 0, 0, 1, 121, 0, NULL, NULL, NULL, '04:07:37pm 17/10/2022'),
(38, 'admin2', 'abc', 0, 0, 1, 121, 0, NULL, NULL, NULL, '04:13:57pm 17/10/2022'),
(39, 'admin2', 'hùyyg', 88687, 0, 1, 12, 0, NULL, NULL, NULL, '06:05:16pm 17/10/2022'),
(40, 'admin2', 'hùyyg', 88687, 0, 1, 12, 0, NULL, NULL, NULL, '06:08:59pm 17/10/2022'),
(41, 'admin2', 'Bắc Từ Liêm', 365039618, 0, 0, 13, 0, NULL, NULL, NULL, '08:01:47pm 17/10/2022'),
(42, 'admin2', 'Bắc Từ Liêm', 365039618, 0, 0, 48, 0, NULL, NULL, NULL, '09:17:03pm 17/10/2022'),
(43, 'admin2', 'Bắc Từ Liêm', 365039618, 0, 0, 48, 0, NULL, NULL, NULL, '09:20:23pm 17/10/2022'),
(44, 'admin2', 'Bắc Từ Liêm', 365039618, 0, 0, 111123, 0, NULL, NULL, NULL, '06:11:48pm 21/10/2022'),
(45, 'admin2', 'Bắc Từ Liêm', 365039618, 0, 0, 111123, 0, NULL, NULL, NULL, '07:27:01pm 21/10/2022'),
(46, 'admin2', 'Bắc Từ Liêm', 365039618, 0, 0, 111123, 0, NULL, NULL, NULL, '07:32:42pm 21/10/2022');

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `noi_dung`, `iduser`, `idpro`, `date`) VALUES
(1, 'hello', 1, 24, '06:24:21am 14/10/2022'),
(2, 'abc', 2, 24, '06:42:35am 14/10/2022'),
(3, 'áo đẹp vc, thề', 2, 1, '05:49:43pm 14/10/2022');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(10) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(3, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 16),
(4, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 16),
(5, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 17),
(6, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 17),
(7, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 18),
(8, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 18),
(9, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 19),
(10, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 19),
(11, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 20),
(12, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 20),
(13, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 21),
(14, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 21),
(15, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 22),
(16, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 22),
(17, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 23),
(18, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 23),
(19, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 24),
(20, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 24),
(21, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 25),
(22, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 25),
(23, 2, 25, 'sm5.jpg', 'Phụ kiện 2', 33, 1, 0, 25),
(24, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 26),
(25, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 26),
(26, 2, 25, 'sm5.jpg', 'Phụ kiện 2', 33, 1, 0, 26),
(33, 2, 25, 'sm5.jpg', 'Phụ kiện 2', 33, 1, 0, 38),
(34, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 38),
(35, 2, 26, 'sm33.jpg', 'PC 2', 44, 1, 0, 38),
(36, 2, 23, 'sm3.jpg', 'Đồng hồ 2', 12, 1, 0, 39),
(37, 2, 23, 'sm3.jpg', 'Đồng hồ 2', 12, 1, 0, 40),
(38, 2, 24, 'sm4.jpg', 'Máy tính bảng 2', 13, 1, 0, 41),
(39, 2, 24, 'sm4.jpg', 'Máy tính bảng 2', 13, 1, 0, 42),
(40, 2, 22, 'sm2.jpg', 'Điện thoại 2', 22, 1, 0, 42),
(41, 2, 24, 'sm4.jpg', 'Máy tính bảng 2', 13, 1, 0, 42),
(42, 2, 24, 'sm4.jpg', 'Máy tính bảng 2', 13, 1, 0, 43),
(43, 2, 22, 'sm2.jpg', 'Điện thoại 2', 22, 1, 0, 43),
(44, 2, 24, 'sm4.jpg', 'Máy tính bảng 2', 13, 1, 0, 43),
(45, 2, 24, 'sm444.jpg', 'Máy tính bảng 234', 111123, 1, 0, 44),
(46, 2, 24, 'sm444.jpg', 'Máy tính bảng 234', 111123, 1, 0, 45),
(47, 2, 24, 'sm444.jpg', 'Máy tính bảng 234', 111123, 1, 0, 46);

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `name`) VALUES
(1, 'Laptop'),
(2, 'Điện thoại'),
(3, 'Đồng hồ'),
(4, 'Máy tính bảng'),
(5, 'Phụ kiện'),
(6, 'PC');

-- --------------------------------------------------------

--
-- Table structure for table `phan_quyen`
--

CREATE TABLE `phan_quyen` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phan_quyen`
--

INSERT INTO `phan_quyen` (`id`, `name`) VALUES
(0, 'Khách hàng'),
(1, 'Quản trị viên');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `image` varchar(255) DEFAULT NULL,
  `mo_ta` text DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id`, `name`, `price`, `image`, `mo_ta`, `view`, `iddm`) VALUES
(1, 'Máy tính bảng', 126.00, 'sm5.jpg', 'None', 0, 3),
(2, 'Điện thoại', 40.00, 'sm222.jpg', 'None', 0, 2),
(3, 'Đồng hồ', 56.00, 'sm55.jpg', 'None', 0, 3),
(4, 'Máy tính bảng', 126.00, 'sm22.jpg', 'None', 0, 4),
(5, 'Phụ kiện', 123.00, 'sm2.jpg', 'None', 0, 5),
(20, 'PC', 111.00, 'sm444.jpg', 'None', 0, 6),
(21, 'Laptop2', 11.00, 'sm1.jpg', 'None', 0, 1),
(22, 'Điện thoại 2', 22.00, 'sm2.jpg', 'None', 0, 2),
(23, 'Đồng hồ 2', 12.00, 'sm3.jpg', 'None', 0, 3),
(27, 'Blalalal', 123456.00, '1.jpg', 'abccbcbcb', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL COMMENT 'tên đăng nhập',
  `password` varchar(55) NOT NULL COMMENT 'mật khẩu',
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL COMMENT 'Địa chỉ',
  `phone` varchar(20) DEFAULT NULL COMMENT 'Số điện thoại',
  `role` int(11) NOT NULL DEFAULT 0 COMMENT 'Vai trò: quản trị hoặc khách hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `username`, `password`, `email`, `address`, `phone`, `role`) VALUES
(1, 'admin', '123456', 'huyenvtnph23939@fpt.edu.vn', 'Hà Nội', '0365039618', 0),
(2, 'admin2', '123456', 'huyenvtnph23939@fpt.edu.vn', 'Bắc Từ Liêm', '0365039618', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_bill` (`idbill`),
  ADD KEY `cart_user` (`iduser`),
  ADD KEY `cart_sanpham` (`idpro`);

--
-- Indexes for table `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phan_quyen`
--
ALTER TABLE `phan_quyen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danh_muc` (`id`);

--
-- Constraints for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD CONSTRAINT `tai_khoan_ibfk_1` FOREIGN KEY (`role`) REFERENCES `phan_quyen` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
