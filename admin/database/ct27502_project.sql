-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 04:49 PM
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
-- Database: `ct275_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `ten`, `email`, `mat_khau`) VALUES
(1, 'admin', 'admin@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(2, 'laithuyleha', 'thuylai@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `id` int(11) NOT NULL,
  `ten_hang_hoa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `so_luong_hang` int(11) NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_loai` int(11) NOT NULL,
  `ngaynhap` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`id`, `ten_hang_hoa`, `gia`, `so_luong_hang`, `hinh`, `mo_ta`, `id_loai`, `ngaynhap`) VALUES
(2, 'Giày đen Miracle', 529000, 96, 'giayden.jpg', 'Màu đen nhung huyền diệu bí ẩn mang đến sự quyến rũ', 1, '2023-11-19 05:10:14'),
(3, 'Giày búp bê Babie ', 200000, 97, 'treem1.jpg', 'Dễ phối đồ', 3, '2023-11-19 05:13:31'),
(4, 'Tất trắng bacsic', 360000, 96, 'votrang.jpg', 'Dễ phối với giày dép quần áo', 5, '2023-11-19 05:13:31'),
(5, 'Tất hoa oải hương', 500000, 97, 'vohoa.jpg', 'Xinh đẹp nhẹ nhàng', 4, '2023-11-19 05:13:31'),
(6, 'Xịt thơm giày Minata', 149000, 99, 'xitgiay.jpg', 'Xịt thơm giày khử mùi hôi', 4, '2023-11-19 05:13:31'),
(7, 'Giày nữ Lumita', 200000, 99, 'giaynu2.jpg', 'Cá tính phong cách', 1, '2023-11-19 05:13:31'),
(8, 'Giày nam Diquila', 200000, 49, 'giaynam6.jpg', 'Mang phẩm chất của quý ông lịch lãm', 2, '2023-11-19 05:13:31'),
(9, 'Boot da ngắn Rimida', 500000, 26, 'bootngan.jpg', 'Boot ngắn cá tính cho cô nàng kiêu kỳ', 3, '2023-11-19 05:13:31'),
(10, 'Giày Densia', 400000, 19, 'giaynu3.jpg', 'Dễ mang, dễ phối đồ', 1, '2023-11-19 05:13:31'),
(11, 'Giày da nam Teqi', 700000, 18, 'giaynam7.jpg', 'Hot trend năm 2023', 2, '2023-11-19 05:13:31'),
(12, 'Giày búp bê Mimita', 250000, 5, 'treem2.jpg', 'Các bé gái đều yêu thích.', 3, '2023-11-19 05:13:31'),
(13, 'Giày donaruma', 200000, 10, 'giaynu5.jpg', 'Đẹp, dễ phối đồ.', 5, '2023-11-19 05:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `kh_co_hang_hoa`
--

CREATE TABLE `kh_co_hang_hoa` (
  `user_id` int(11) NOT NULL,
  `hang_hoa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loai_hang_hoa`
--

CREATE TABLE `loai_hang_hoa` (
  `id` int(11) NOT NULL,
  `ten_loai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loai_hang_hoa`
--

INSERT INTO `loai_hang_hoa` (`id`, `ten_loai`) VALUES
(1, 'Giày của nữ'),
(2, 'Giày của nam'),
(3, 'Giày trẻ em'),
(4, 'Phụ kiện giày'),
(5, 'Bán chạy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_dien_thoai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ten`, `dia_chi`, `so_dien_thoai`, `email`, `mat_khau`) VALUES
(1, 'thuylaiha', 'VinhLong', '0912345687', 'thuylai231002@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(2, 'maidinh', 'HauGiang', '0984568267', 'maidinh@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

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
-- Indexes for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hang_hoa_loai_hang_hoa` (`id_loai`);

--
-- Indexes for table `kh_co_hang_hoa`
--
ALTER TABLE `kh_co_hang_hoa`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `loai_hang_hoa`
--
ALTER TABLE `loai_hang_hoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `loai_hang_hoa`
--
ALTER TABLE `loai_hang_hoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `fk_hang_hoa_loai_hang_hoa` FOREIGN KEY (`id_loai`) REFERENCES `loai_hang_hoa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
