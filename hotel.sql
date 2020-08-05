-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 11:57 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`id`, `username`, `pass`) VALUES
(1, 'Fraz', '9555'),
(3, 'shawal', '5121');

-- --------------------------------------------------------

--
-- Table structure for table `bedding`
--

CREATE TABLE `bedding` (
  `bedding_type` varchar(20) NOT NULL,
  `bedding_price` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bedding`
--

INSERT INTO `bedding` (`bedding_type`, `bedding_price`) VALUES
('Single', 10),
('Double', 20),
('Master', 50);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` text,
  `lname` text,
  `nationality` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `title`, `fname`, `lname`, `nationality`, `email`, `phone`) VALUES
(1, 'Mr.', 'Fraz', 'Nadeem', 'Pakistan', 'test@test.com', '90078601'),
(2, 'Mr.', 'Mumtaz', 'Shah', 'Pakistan', 'ubuntu@linux.com', '71727172'),
(16, 'Miss.', 'Ali', 'Shah', 'Aruba', 'test@test.com', '03001234567'),
(18, 'Prof.', 'Ali', 'Shah', 'French Southern Territories', 'hello@giki.com', '98765412'),
(19, 'Mrs.', 'Khanna', 'Ji', 'India', 'khanna@ambani.com', '03006971721'),
(20, 'Prof.', 'Paresh', 'Kumar', 'Bahrain', 'ali@gmail.com', '03006971721'),
(21, 'Mrs.', 'Anushka', 'Usman', 'Afghanistan', 'email@gmail.com', '555'),
(22, 'Miss.', 'Khalida', 'Ali', 'Pakistan', 'khalid@gmail.com', '03001234679'),
(23, 'Prof.', 'Nadim', 'Baig', 'Belarus', 'baig@ali.com', '2546789'),
(24, 'Miss.', 'Shawal', 'Farooq', 'Belarus', 'test@test.com', '555'),
(25, 'Mrs.', 'Aman', 'Shah', 'Bahrain', 'email@gmail.com', '2546789'),
(26, 'Mr.', 'Rizwan', 'ul Haq', 'Pakistan', 'test@test.com', '98765412');

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `meal_name` varchar(15) NOT NULL,
  `meal_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`meal_name`, `meal_price`) VALUES
('Breakfast', 10),
('Full Board', 40),
('Half Board', 20),
('Room Only', 0);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_no` int(11) NOT NULL,
  `customer` int(11) DEFAULT NULL,
  `bedding_type` varchar(10) DEFAULT NULL,
  `meal_type` varchar(15) DEFAULT NULL,
  `in_date` date DEFAULT NULL,
  `out_date` date DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `no_of_day` int(11) DEFAULT NULL,
  `room_type` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_no`, `customer`, `bedding_type`, `meal_type`, `in_date`, `out_date`, `status`, `no_of_day`, `room_type`) VALUES
(1, 1, 'Single', 'Breakfast', '2018-12-10', '2018-12-13', 'Not Available', 4, 'Standard'),
(2, 2, 'Single', 'Full Board', '2018-12-15', '2018-12-17', 'Not Available', 4, 'Standard'),
(3, NULL, 'Single', NULL, NULL, NULL, 'Available', NULL, 'Luxury'),
(4, 18, 'Single', 'Full Board', '2018-12-21', '2018-12-22', 'Not Available', 4, 'Luxury'),
(5, 26, 'Master', 'Half Board', '2018-12-30', '2019-01-03', 'Not Available', 4, 'Executive'),
(6, 19, 'Double', 'Half Board', '2018-12-23', '2018-12-26', 'Not Available', 4, 'Standard'),
(7, 20, 'Double', 'Half Board', '2018-12-23', '2018-12-27', 'Not Available', 4, 'Standard'),
(9, 22, 'Double', 'Half Board', '2018-12-29', '2019-01-01', 'Not Available', 3, 'Luxury'),
(11, NULL, 'Master', NULL, NULL, NULL, 'Available', NULL, 'Standard'),
(12, 23, 'Double', 'Half Board', '2018-12-05', '2018-12-21', 'Not Available', 16, 'Standard'),
(13, 25, 'Double', 'Room only', '2018-12-20', '2018-12-23', 'Not Available', 3, 'Executive'),
(15, NULL, 'Double', NULL, NULL, NULL, 'Available', NULL, 'Executive');

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

CREATE TABLE `room_category` (
  `room_types` varchar(15) NOT NULL,
  `room_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`room_types`, `room_price`) VALUES
('Executive', 150),
('Luxury', 80),
('Standard', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bedding`
--
ALTER TABLE `bedding`
  ADD PRIMARY KEY (`bedding_type`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `meal`
--
ALTER TABLE `meal`
  ADD PRIMARY KEY (`meal_name`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`room_types`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administration`
--
ALTER TABLE `administration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
