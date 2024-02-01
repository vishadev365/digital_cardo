-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2024 at 07:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalcardo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `service_tbl`
--

CREATE TABLE `service_tbl` (
  `service_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_image` varchar(255) NOT NULL,
  `create_date` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_tbl`
--

INSERT INTO `service_tbl` (`service_id`, `user_id`, `service_name`, `service_image`, `create_date`, `create_time`, `status`) VALUES
(1, '1', 'eeeeeeeee', '1532657616.jpg', '2024-02-01', '00:16:32', 1),
(2, '1', 'wwwwwwwwwww', '1386117261.jpg', '2024-02-01', '00:16:32', 1),
(3, '1', 'yyyyyyyyyyyyyyy', '1199084564.jpg', '2024-02-01', '00:16:32', 1),
(4, '1', 'eeeeeeeee', '1357581126.jpg', '2024-02-01', '00:19:30', 1),
(5, '1', 'wwwwwwwwwww', '573967590.jpg', '2024-02-01', '00:19:30', 1),
(6, '1', 'yyyyyyyyyyyyyyy', '1618066351.jpg', '2024-02-01', '00:19:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_details_tbl`
--

CREATE TABLE `user_details_tbl` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `whatsapp_no` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `google_map_link` varchar(255) NOT NULL,
  `about_business` varchar(255) NOT NULL,
  `radio` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `image6` varchar(255) NOT NULL,
  `create_date` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details_tbl`
--

INSERT INTO `user_details_tbl` (`user_id`, `name`, `email`, `phone_no`, `whatsapp_no`, `website`, `google_map_link`, `about_business`, `radio`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `create_date`, `create_time`, `status`) VALUES
(1, 'Vishadev Bhakta', 'vishadev143@gmail.com', '07980614940', '5345345435', 'retertr', 'retert', 'rgfdfgfdgdfg66666666666666666', 'product', '1392607410.jpg', '163048539.jpg', '1003427334.jpg', '1137630602.jpg', '1712868626.jpg', '1029891670.jpg', '2024-02-01', '00:16:32', 1),
(2, 'Vishadev Bhakta', 'vishadev143@gmail.com', '07980614940', '5345345435', 'retertr', 'retert', 'rgfdfgfdgdfg66666666666666666', 'product', '84001006.jpg', '360194882.jpg', '1450271043.jpg', '1374569215.jpg', '1729298329.jpg', '69932737.jpg', '2024-02-01', '00:19:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `create_date_time` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `email`, `otp`, `create_date_time`, `status`) VALUES
(1, 'vishadev143@gmail.com', '718565', '2024-01-31 23:47:32', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service_tbl`
--
ALTER TABLE `service_tbl`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `user_details_tbl`
--
ALTER TABLE `user_details_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service_tbl`
--
ALTER TABLE `service_tbl`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_details_tbl`
--
ALTER TABLE `user_details_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
