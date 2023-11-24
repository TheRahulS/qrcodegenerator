-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 01:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `CompanyName` varchar(255) DEFAULT NULL,
  `emailicon` varchar(255) DEFAULT NULL,
  `callicon` varchar(255) DEFAULT NULL,
  `messageicon` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `Address1` varchar(255) DEFAULT NULL,
  `Address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `URL` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedln` varchar(255) DEFAULT NULL,
  `Profile` text DEFAULT NULL,
  `Logo` text DEFAULT NULL,
  `imagepost` text DEFAULT NULL,
  `QRCodeImage` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `Designation`, `CompanyName`, `emailicon`, `callicon`, `messageicon`, `Email`, `phone`, `Address1`, `Address2`, `city`, `country`, `state`, `zip`, `action`, `google`, `title`, `URL`, `instagram`, `facebook`, `twitter`, `linkedln`, `Profile`, `Logo`, `imagepost`, `QRCodeImage`, `user_id`) VALUES
(7, 'sdxcas', 'wsdx', 'qsdx', 'rahulsoni7982@gmail.com', '9876543243', '9876543243', 'rahulsoni7982@gmail.com', '9876543233', 'gurgaon', 'GVFCDX', 'DEF', 'India', 'scs', '123456', 'GET DIRECTION', 'https://maps.app.goo.gl/6cvd17zCNzWcMPiS8', 'wsdx', 'http://www.delta.co', '', '', '', '', 'uploads/profile.jpg ', 'uploads/deltaview.png', 'uploads/pro.png', 'qrcodes/user_data_qr_7.jpg', 4),
(8, 'rahul sdc soni', 'wsdxc', 'yuityu', 'rahul@gmail.com', '9888888888', '9898889989', 'rahdddul@gmail.com', '9898888888', 'gurgaon', 'GVFCDX', 'DEF', 'India', 'scswsdx', '123456', 'GET DIRECTION', 'https://maps.app.goo.gl/6cvd17zCNzWcMPiS8', 'sx', 'http://www.delta.co', '', '', '', '', 'uploads/profile.jpg ', 'uploads/deltaview.png', 'uploads/bg-01.jpg', 'qrcodes/user_data_qr_8.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `phone`) VALUES
(1, 'fdsz', 'fdvc', 'abc@gmail.com', '234', '987654'),
(2, 'sdxcas', 'rah', 'rahulsoni7982@gmail.com', '$2y$10$M0JCgSPLpuii/sdQWidgze8If60tuvYC/V0qcVmGo8ffNQJhWY/7C', '98765432'),
(3, 'amit', 'wsdx', 'amit@gmail.com', '$2y$10$lBe7rP6zl9jrawwdyIHHx.ckI1cYfOZehNqjfhXBoewB1XK67Cxhi', '567890'),
(4, 'rahul sdc soni', 'rafg', 'rahul@gmail.com', '$2y$10$B4Oer1eIDq7hbWXpX7Iae.MBtptqTkp0Zo7/xUmXDMijq96vDtSqe', '123432');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
