-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2023 at 11:24 AM
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
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `car_number` int(11) NOT NULL,
  `factory` varchar(255) NOT NULL,
  `car_owner` varchar(255) NOT NULL,
  `driver_name` varchar(255) NOT NULL,
  `trip` decimal(8,2) NOT NULL,
  `trip_value` decimal(8,2) NOT NULL,
  `trip_total` decimal(8,2) NOT NULL,
  `diesel` decimal(8,2) NOT NULL,
  `service_type` text NOT NULL,
  `service_value` decimal(8,2) NOT NULL,
  `payload` decimal(8,2) NOT NULL,
  `payload_price` decimal(8,2) NOT NULL,
  `payload_total` decimal(8,2) NOT NULL,
  `discounts` decimal(8,2) NOT NULL,
  `payments` decimal(8,2) NOT NULL,
  `date` date NOT NULL,
  `month` int(11) NOT NULL,
  `week` int(11) NOT NULL,
  `salary` decimal(8,2) NOT NULL,
  `net_salary` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `car_number`, `factory`, `car_owner`, `driver_name`, `trip`, `trip_value`, `trip_total`, `diesel`, `service_type`, `service_value`, `payload`, `payload_price`, `payload_total`, `discounts`, `payments`, `date`, `month`, `week`, `salary`, `net_salary`) VALUES
(59, 4269, 'ال طاوي', 'المحيميد', 'نصار', 4.00, 175.00, 700.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2023-06-10', 6, 1, 0.00, 0.00),
(60, 4269, 'السويلم', 'المحيميد', 'نصار', 2.00, 175.00, 350.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2023-06-10', 6, 1, 0.00, 0.00),
(61, 4269, 'ال طاوي', 'المحيميد', 'نصار', 5.00, 175.00, 875.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2023-06-10', 6, 1, 0.00, 0.00),
(62, 4269, 'السويلم', 'المحيميد', 'نصار', 1.00, 175.00, 175.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2023-06-10', 6, 1, 0.00, 0.00),
(63, 3837, 'ال طاوي', 'المحيميد', 'علي', 6.00, 175.00, 1050.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2023-06-10', 6, 1, 0.00, 0.00),
(64, 4269, 'النظيم', 'المحيميد', 'علي', 1.00, 100.00, 100.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2023-06-10', 6, 1, 0.00, 0.00),
(65, 9750, 'سياج', 'الحماد', 'نور', 1.00, 135.00, 135.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2023-06-10', 6, 1, 0.00, 0.00),
(66, 9750, 'ال طاوي', 'الحماد', 'نور', 4.00, 175.00, 700.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2023-06-10', 6, 1, 0.00, 0.00),
(67, 9750, 'النظيم', 'الحماد', 'نور', 1.00, 100.00, 100.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2023-06-10', 6, 1, 0.00, 0.00),
(68, 2042, 'ال طاوي', 'الحماد', 'شهباز', 4.00, 175.00, 700.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2023-06-10', 6, 1, 0.00, 0.00),
(69, 2042, 'النظيم', 'الحماد', 'شهباز', 1.00, 100.00, 100.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2023-06-10', 6, 1, 0.00, 0.00),
(70, 5998, 'ال طاوي', 'الحماد', 'سوكا', 4.00, 175.00, 700.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2023-06-10', 6, 1, 0.00, 0.00),
(71, 1, '', 'الحماد', '', 0.00, 0.00, 0.00, 0.00, 'رصيد سابق للأسبوع الماضي في الشهر الخامس', 0.00, 0.00, 0.00, 0.00, 0.00, 521.13, '2023-05-10', 6, 1, 0.00, 0.00),
(72, 1, '', 'الحماد', '', 0.00, 0.00, 0.00, 0.00, 'تحويل من ابو خالد لشهباز ', 0.00, 0.00, 0.00, 0.00, 0.00, 2000.00, '2023-06-03', 6, 1, 0.00, 0.00),
(73, 1, '', 'الحماد', '', 0.00, 0.00, 0.00, 0.00, 'تحويل من ابو خالد لشهباز', 0.00, 0.00, 0.00, 0.00, 0.00, 2500.00, '2023-06-04', 6, 1, 0.00, 0.00),
(74, 1, '', 'الحماد', '', 0.00, 0.00, 0.00, 0.00, 'تحويل من ابو خالد لشهباز', 0.00, 0.00, 0.00, 0.00, 0.00, 3000.00, '2023-06-06', 6, 1, 0.00, 0.00),
(75, 1, '', 'الحماد', '', 0.00, 0.00, 0.00, 0.00, 'تحويل من ابو خالد لشهباز', 0.00, 0.00, 0.00, 0.00, 0.00, 8500.00, '2023-06-09', 6, 2, 0.00, 0.00),
(76, 4269, '', 'المحيميد', 'نصار', 0.00, 0.00, 0.00, 0.00, 'زيت فلتر', 60.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2023-06-09', 6, 1, 0.00, 0.00),
(77, 5998, '', 'الحماد', 'سوكا', 0.00, 0.00, 0.00, 0.00, 'لي هيدروليك', 186.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2023-06-09', 6, 1, 0.00, 0.00),
(78, 5998, '', 'الحماد', 'سوكا', 0.00, 0.00, 0.00, 0.00, 'كفر جديد', 1100.00, 0.00, 0.00, 0.00, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(79, 5998, '', 'الحماد', 'سوكا', 0.00, 0.00, 0.00, 0.00, 'زيت هيدروليك', 150.00, 0.00, 0.00, 0.00, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(80, 5998, '', 'الحماد', 'سوكا', 0.00, 0.00, 0.00, 0.00, 'استيكرات', 160.00, 0.00, 0.00, 0.00, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(81, 5998, '', 'الحماد', 'سوكا', 0.00, 0.00, 0.00, 0.00, 'نقدية من الراتب', 485.00, 0.00, 0.00, 0.00, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(82, 2042, '', 'الحماد', 'شهباز', 0.00, 0.00, 0.00, 0.00, 'زيت دركسيون', 30.00, 0.00, 0.00, 0.00, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(83, 2042, '', 'الحماد', 'شهباز', 0.00, 0.00, 0.00, 0.00, 'بلف غطاس خزان', 465.00, 0.00, 0.00, 0.00, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(84, 2042, '', 'الحماد', 'شهباز', 0.00, 0.00, 0.00, 0.00, 'استيكرات', 90.00, 0.00, 0.00, 0.00, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(85, 2042, '', 'الحماد', 'شهباز', 0.00, 0.00, 0.00, 0.00, 'زيت ماكينه', 140.00, 0.00, 0.00, 0.00, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(86, 2042, '', 'الحماد', 'شهباز', 0.00, 0.00, 0.00, 0.00, 'بنشر', 90.00, 0.00, 0.00, 0.00, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(87, 2042, '', 'الحماد', 'شهباز', 0.00, 0.00, 0.00, 0.00, 'قفل شباك عدد 2', 50.00, 0.00, 0.00, 0.00, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(88, 9750, '', 'الحماد', 'نور', 0.00, 0.00, 0.00, 0.00, 'تركيب بطارية', 25.00, 0.00, 0.00, 0.00, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(89, 9750, '', 'الحماد', 'نور', 0.00, 0.00, 0.00, 0.00, 'دينامو تبديل', 300.00, 0.00, 0.00, 0.00, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(90, 9750, '', 'الحماد', 'نور', 0.00, 0.00, 0.00, 0.00, 'لستك', 130.00, 0.00, 0.00, 0.00, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(91, 9750, '', 'الحماد', 'نور', 0.00, 0.00, 0.00, 0.00, 'زيت', 60.00, 0.00, 0.00, 0.00, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(92, 9750, '', 'الحماد', 'نور', 0.00, 0.00, 0.00, 0.00, 'بطارية', 1495.00, 0.00, 0.00, 0.00, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(93, 9750, '', 'الحماد', 'نور', 0.00, 0.00, 0.00, 50.00, '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(94, 2042, '', 'الحماد', 'شهباز', 0.00, 0.00, 0.00, 175.00, '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(95, 2042, '', 'الحماد', 'شهباز', 0.00, 0.00, 0.00, 100.00, '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(96, 5998, 'ال طاوي', 'الحماد', 'سوكا', 0.00, 0.00, 0.00, 0.00, '', 0.00, 33.72, 19.00, 640.68, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(97, 5998, 'ال طاوي', 'الحماد', 'سوكا', 0.00, 0.00, 0.00, 0.00, '', 0.00, 36.85, 19.00, 700.15, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(98, 5998, 'ال طاوي', 'الحماد', 'سوكا', 0.00, 0.00, 0.00, 0.00, '', 0.00, 35.25, 19.00, 669.75, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(99, 5998, 'ال طاوي', 'الحماد', 'سوكا', 0.00, 0.00, 0.00, 0.00, '', 0.00, 33.97, 19.00, 645.43, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(100, 2042, 'ال طاوي', 'الحماد', 'شهباز', 0.00, 0.00, 0.00, 0.00, '', 0.00, 34.61, 19.00, 657.59, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(101, 2042, 'ال طاوي', 'الحماد', 'شهباز', 0.00, 0.00, 0.00, 0.00, '', 0.00, 36.45, 19.00, 692.55, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(102, 2042, 'ال طاوي', 'الحماد', 'شهباز', 0.00, 0.00, 0.00, 0.00, '', 0.00, 35.85, 19.00, 681.15, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(103, 9750, 'ال طاوي', 'الحماد', 'نور', 0.00, 0.00, 0.00, 0.00, '', 0.00, 39.62, 19.00, 752.78, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(104, 9750, 'ال طاوي', 'الحماد', 'نور', 0.00, 0.00, 0.00, 0.00, '', 0.00, 37.24, 19.00, 707.56, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(105, 9750, 'ال طاوي', 'الحماد', 'نور', 0.00, 0.00, 0.00, 0.00, '', 0.00, 38.99, 19.00, 740.81, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(106, 9750, 'ال طاوي', 'الحماد', 'نور', 0.00, 0.00, 0.00, 0.00, '', 0.00, 39.72, 19.00, 754.68, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(107, 3837, 'ال طاوي', 'المحيميد', 'علي', 0.00, 0.00, 0.00, 0.00, '', 0.00, 31.06, 18.00, 559.08, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(108, 3837, 'ال طاوي', 'المحيميد', 'علي', 0.00, 0.00, 0.00, 0.00, '', 0.00, 34.26, 18.00, 616.68, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(109, 3837, 'ال طاوي', 'المحيميد', 'علي', 0.00, 0.00, 0.00, 0.00, '', 0.00, 31.31, 18.00, 563.58, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(110, 3837, 'ال طاوي', 'المحيميد', 'علي', 0.00, 0.00, 0.00, 0.00, '', 0.00, 31.82, 18.00, 572.76, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(111, 3837, 'ال طاوي', 'المحيميد', 'علي', 0.00, 0.00, 0.00, 0.00, '', 0.00, 33.40, 18.00, 601.20, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(112, 4269, 'ال طاوي', 'المحيميد', 'نصار', 0.00, 0.00, 0.00, 0.00, '', 0.00, 35.57, 18.00, 640.26, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(113, 4269, 'ال طاوي', 'المحيميد', 'نصار', 0.00, 0.00, 0.00, 0.00, '', 0.00, 35.51, 18.00, 639.18, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(114, 4269, 'ال طاوي', 'المحيميد', 'نصار', 0.00, 0.00, 0.00, 0.00, '', 0.00, 35.49, 18.00, 638.82, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(115, 4269, 'ال طاوي', 'المحيميد', 'نصار', 0.00, 0.00, 0.00, 0.00, '', 0.00, 35.97, 18.00, 647.46, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(116, 4269, 'ال طاوي', 'المحيميد', 'نصار', 0.00, 0.00, 0.00, 0.00, '', 0.00, 35.41, 18.00, 637.38, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(117, 4269, 'السويلم', 'المحيميد', 'نصار', 0.00, 0.00, 0.00, 0.00, '', 0.00, 39.31, 18.00, 707.58, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(118, 2042, 'النظيم', 'الحماد', 'شهباز', 0.00, 0.00, 0.00, 0.00, '', 0.00, 36.17, 13.00, 470.21, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(119, 9750, 'النظيم', 'الحماد', 'نور', 0.00, 0.00, 0.00, 0.00, '', 0.00, 39.92, 13.00, 518.96, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(120, 3837, 'النظيم', 'المحيميد', 'علي', 0.00, 0.00, 0.00, 0.00, '', 0.00, 36.67, 13.00, 476.71, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(121, 2042, 'ال طاوي', 'الحماد', 'شهباز', 0.00, 0.00, 0.00, 0.00, '', 0.00, 37.57, 19.00, 713.83, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(122, 3837, 'ال طاوي', 'المحيميد', 'علي', 0.00, 0.00, 0.00, 0.00, '', 0.00, 35.02, 18.00, 630.36, 0.00, 0.00, '1970-01-01', 6, 1, 0.00, 0.00),
(124, 2042, '', 'الحماد', '', 0.00, 0.00, 0.00, 0.00, 'تحويل لشهباز دفعه من الصندوق', 0.00, 0.00, 0.00, 0.00, 0.00, 5000.00, '2023-06-12', 6, 2, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `type` int(11) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `subtitle`, `status`, `type`, `created_by`, `date`) VALUES
(1, 'تنبيه', 'تم إضافة فاتورة جديدة', 0, 3, 'مفيد', '2023-06-12 03:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `profits`
--

CREATE TABLE `profits` (
  `id` int(11) NOT NULL,
  `salary` decimal(8,2) NOT NULL,
  `month` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `discounts` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profits`
--

INSERT INTO `profits` (`id`, `salary`, `month`, `name`, `discounts`) VALUES
(1, 2000.00, 1, 'الحماد', 0.00),
(2, 4000.00, 2, 'الحماد', 0.00),
(3, 6000.00, 3, 'الحماد', 0.00),
(4, 8000.00, 4, 'الحماد', 0.00),
(5, 27056.42, 5, 'الحماد', 0.00),
(6, 6251.18, 6, 'الحماد', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `qrcode`
--

CREATE TABLE `qrcode` (
  `id` int(11) NOT NULL,
  `qrtext` varchar(255) NOT NULL,
  `qrimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `qrcode`
--

INSERT INTO `qrcode` (`id`, `qrtext`, `qrimage`) VALUES
(1, 'https://mkh888.000webhostapp.com/layouts/workshop_invoices/view_workshop_invoice.php?id=2327184', '1686557922.png');

-- --------------------------------------------------------

--
-- Table structure for table `transporters`
--

CREATE TABLE `transporters` (
  `id` int(11) NOT NULL,
  `driver_name` varchar(255) NOT NULL,
  `car_number` int(11) NOT NULL,
  `number` varchar(10) NOT NULL,
  `residency_number` varchar(10) NOT NULL,
  `release_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `birthday` date NOT NULL,
  `religion` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `career` varchar(255) NOT NULL,
  `business_owner` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transporters`
--

INSERT INTO `transporters` (`id`, `driver_name`, `car_number`, `number`, `residency_number`, `release_date`, `expiry_date`, `birthday`, `religion`, `nationality`, `career`, `business_owner`, `image`) VALUES
(1, 'شهباز', 2042, '0580873210', '2388615995', '1440-11-18', '2024-01-01', '1992-08-14', 'مسلم', 'باكستان', 'سائق سيارة عمومي', 'مؤسسة ماجد خالد الحماد لتجنيد الأثاث', '../../assets/images/drivers/2042.jpg'),
(2, 'نور', 9750, '0552183549', '2432697049', '1438-07-22', '2024-01-01', '1980-03-10', 'غير ذلك', 'الهند', 'سائق عموم المركبات', 'فرع شركة عبدالمجيد عبدالرحمن الجريسي للإستقدام', '../../assets/images/drivers/9750.jpg'),
(3, 'سوكا', 5998, '0572348588', '2511945244', '1443-07-20', '2024-01-01', '1979-05-04', 'الإسلام', 'الهند', 'سائق سيارة عمومي', 'فرع مؤسسة صالح حميد المروي للنقل', '../../assets/images/drivers/5998.jpg'),
(4, 'علي', 3837, '0593107631', '', '0000-00-00', '2024-01-01', '0000-00-00', '', '', '', '', '../../assets/images/drivers/3837.jpg'),
(5, 'نصار', 4269, '0592057516', '', '0000-00-00', '2024-01-01', '0000-00-00', '', '', '', '', '../../assets/images/drivers/4269.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `middle` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `role_image` varchar(255) DEFAULT NULL,
  `last_login` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `name`, `middle`, `last`, `image`, `role`, `role_image`, `last_login`) VALUES
(1, 'i5aledzeid', 'd5667a206565cf65d49dd3dfc4c2118c', 'خالد', 'محمد', 'زيد', 'https://raw.githubusercontent.com/i5aledzeid/php/master/assets/images/admin/i5aledzeid.jpg', 3, '../assets/images/verified_label_badge_checkmark_logo_icon.png', 1686502379),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'مفيد', '', 'زيد', '../assets/images/profile-images/mofeed_image.png', 1, '../assets/images/store_verified_shopping_ecommerce_cart_icon.png', 0),
(3, 'mkh', 'e10adc3949ba59abbe56e057f20f883e', 'ماجد خالد الحماد', '', '', '../assets/images/profile/avatar_man_muslim_icon.png', 2, '../assets/images/verified_icon.png', 0),
(5, 'user', 'e10adc3949ba59abbe56e057f20f883e', 'مستخدم', '', '', '../assets/images/profile/avatar_male_man_portrait_icon.png', 2, '../assets/images/user_male_icon.png', 1686504920);

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `invoice_number` int(11) NOT NULL,
  `workshop_title` varchar(255) DEFAULT NULL,
  `workshop_subtitle` varchar(255) DEFAULT NULL,
  `workshop_phone` varchar(10) DEFAULT NULL,
  `workshop_location` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` text DEFAULT NULL,
  `subtitle2` text DEFAULT NULL,
  `subtitle3` text DEFAULT NULL,
  `subtitle4` text DEFAULT NULL,
  `subtitle5` text DEFAULT NULL,
  `subtitle6` text DEFAULT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `price2` decimal(8,2) NOT NULL DEFAULT 0.00,
  `price3` decimal(8,2) NOT NULL DEFAULT 0.00,
  `price4` decimal(8,2) NOT NULL DEFAULT 0.00,
  `price5` decimal(8,2) NOT NULL DEFAULT 0.00,
  `price6` decimal(8,2) NOT NULL DEFAULT 0.00,
  `qty` int(11) NOT NULL DEFAULT 0,
  `qty2` int(11) NOT NULL DEFAULT 0,
  `qty3` int(11) NOT NULL DEFAULT 0,
  `qty4` int(11) NOT NULL DEFAULT 0,
  `qty5` int(11) NOT NULL DEFAULT 0,
  `qty6` int(11) NOT NULL DEFAULT 0,
  `tax` int(11) NOT NULL DEFAULT 0,
  `total` decimal(8,2) NOT NULL DEFAULT 0.00,
  `total2` decimal(8,2) NOT NULL DEFAULT 0.00,
  `total3` decimal(8,2) NOT NULL DEFAULT 0.00,
  `total4` decimal(8,2) NOT NULL DEFAULT 0.00,
  `total5` decimal(8,2) NOT NULL DEFAULT 0.00,
  `total6` decimal(8,2) NOT NULL DEFAULT 0.00,
  `image` varchar(255) DEFAULT NULL,
  `date` date DEFAULT current_timestamp(),
  `hijri_date` varchar(255) DEFAULT current_timestamp(),
  `customer_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `qrtext` varchar(255) NOT NULL,
  `qrimage` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL DEFAULT 'Khaled',
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profits`
--
ALTER TABLE `profits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qrcode`
--
ALTER TABLE `qrcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transporters`
--
ALTER TABLE `transporters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`invoice_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profits`
--
ALTER TABLE `profits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `qrcode`
--
ALTER TABLE `qrcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transporters`
--
ALTER TABLE `transporters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `invoice_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=756756777;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
