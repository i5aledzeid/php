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
(1, 'شهباز', 2042, '0580873210', '2388615995', '1440-11-18', '2023-06-08', '1992-08-14', 'مسلم', 'باكستان', 'سائق سيارة عمومي', 'مؤسسة ماجد خالد الحماد لتجنيد الأثاث', '../../assets/images/drivers/2042.jpg'),
(2, 'نور', 9750, '0552183549', '2432697049', '1438-07-22', '0000-00-00', '1980-03-10', 'غير ذلك', 'الهند', 'سائق عموم المركبات', 'فرع شركة عبدالمجيد عبدالرحمن الجريسي للإستقدام', '../../assets/images/drivers/9750.jpg'),
(3, 'سوكا', 5998, '0572348588', '2511945244', '1443-07-20', '0000-00-00', '1979-05-04', 'الإسلام', 'الهند', 'سائق سيارة عمومي', 'فرع مؤسسة صالح حميد المروي للنقل', '../../assets/images/drivers/5998.jpg'),
(4, 'علي', 3837, '0593107631', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '../../assets/images/drivers/3837.jpg'),
(5, 'نصار', 4269, '0592057516', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '../../assets/images/drivers/4269.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transporters`
--
ALTER TABLE `transporters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transporters`
--
ALTER TABLE `transporters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
