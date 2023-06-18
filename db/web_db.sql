-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 08:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE `tbl_countries` (
  `country` varchar(255) DEFAULT NULL,
  `code` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`country`, `code`) VALUES
('bangladesh', '10'),
('usa', '3'),
('italy', '5'),
('france', '6'),
('germany', '7'),
('india', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_districts`
--

CREATE TABLE `tbl_districts` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(255) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_districts`
--

INSERT INTO `tbl_districts` (`district_id`, `district_name`, `division_id`) VALUES
(1, 'Dhaka', 1),
(2, 'Gazipur', 1),
(3, 'Narayanganj', 1),
(4, 'Tangail', 1),
(5, 'Chittagong', 2),
(6, 'Cox\'s Bazar', 2),
(7, 'Rangamati', 2),
(8, 'Khagrachari', 2),
(9, 'Rajshahi', 3),
(10, 'Natore', 3),
(11, 'Chapainawabganj', 3),
(12, 'Pabna', 3),
(13, 'Khulna', 4),
(14, 'Jessore', 4),
(15, 'Satkhira', 4),
(16, 'Bagerhat', 4),
(17, 'Barisal', 5),
(18, 'Bhola', 5),
(19, 'Pirojpur', 5),
(20, 'Jhalokati', 5),
(21, 'Sylhet', 6),
(22, 'Moulvibazar', 6),
(23, 'Sunamganj', 6),
(24, 'Habiganj', 6),
(25, 'Rangpur', 7),
(26, 'Dinajpur', 7),
(27, 'Gaibandha', 7),
(28, 'Kurigram', 7),
(29, 'Mymensingh', 8),
(30, 'Jamalpur', 8),
(31, 'Sherpur', 8),
(32, 'Netrokona', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_divisions`
--

CREATE TABLE `tbl_divisions` (
  `division_id` int(11) NOT NULL,
  `division_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_divisions`
--

INSERT INTO `tbl_divisions` (`division_id`, `division_name`) VALUES
(1, 'Dhaka'),
(2, 'Chittagong'),
(3, 'Rajshahi'),
(4, 'Khulna'),
(5, 'Barisal'),
(6, 'Sylhet'),
(7, 'Rangpur'),
(8, 'Mymensingh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ps`
--

CREATE TABLE `tbl_ps` (
  `ps_id` int(11) NOT NULL,
  `ps_name` varchar(100) DEFAULT NULL,
  `district_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(5) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'jhon doe', 'jhondoe@email.com', '12345'),
(2, 'marie', 'mariedoe@email.com', '12345'),
(5, 'dsfsd', 'dsf', 'fsdfsd'),
(555, 'rony', 'rony@mangerpola', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_districts`
--
ALTER TABLE `tbl_districts`
  ADD PRIMARY KEY (`district_id`),
  ADD KEY `division_id` (`division_id`);

--
-- Indexes for table `tbl_divisions`
--
ALTER TABLE `tbl_divisions`
  ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `tbl_ps`
--
ALTER TABLE `tbl_ps`
  ADD PRIMARY KEY (`ps_id`),
  ADD KEY `district_id` (`district_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_districts`
--
ALTER TABLE `tbl_districts`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_divisions`
--
ALTER TABLE `tbl_divisions`
  MODIFY `division_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=556;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_districts`
--
ALTER TABLE `tbl_districts`
  ADD CONSTRAINT `tbl_districts_ibfk_1` FOREIGN KEY (`division_id`) REFERENCES `tbl_divisions` (`division_id`);

--
-- Constraints for table `tbl_ps`
--
ALTER TABLE `tbl_ps`
  ADD CONSTRAINT `tbl_ps_ibfk_1` FOREIGN KEY (`district_id`) REFERENCES `tbl_districts` (`district_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
