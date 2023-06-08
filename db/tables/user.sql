-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2023 at 03:33 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20838311_laravels`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `role_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `name`, `image`, `role`, `role_image`) VALUES
(1, 'i5aledzeid', 'd5667a206565cf65d49dd3dfc4c2118c', 'خالد زيد', '../assets/images/favicon6.ico', 3, '../assets/images/verified_label_badge_checkmark_logo_icon.png'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'محمد مفيد', '../assets/images/profile-images/mofeed_image.png', 1, '../assets/images/store_verified_shopping_ecommerce_cart_icon.png'),
(3, 'mkh', 'e10adc3949ba59abbe56e057f20f883e', 'ماجد خالد الحماد', '../assets/images/profile/avatar_man_muslim_icon.png', 2, '../assets/images/verified_icon.png'),
(5, 'user', 'e10adc3949ba59abbe56e057f20f883e', 'مستخدم', '../assets/images/profile/avatar_male_man_portrait_icon.png', 2, '../assets/images/user_male_icon.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
