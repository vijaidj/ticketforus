-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 06:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketforus`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ground_id` int(3) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_by` int(3) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(3) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `ground_id`, `status`, `created_by`, `created_on`, `modified_by`, `modified_on`) VALUES
(1, 'category 1', 1, 1, 1, '2019-05-22 11:57:00', 0, '2019-05-22 15:59:34'),
(2, 'category 2', 1, 1, 1, '2019-05-22 13:10:21', 0, '2019-05-22 15:59:34'),
(3, 'category 1', 2, 1, 1, '2019-05-23 00:58:00', 0, '2019-05-22 16:01:29'),
(4, 'category 2', 2, 1, 1, '2019-05-23 07:08:17', 0, '2019-05-22 16:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `ground_id` int(4) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_by` int(3) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(3) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `ground_id`, `date`, `time`, `status`, `created_by`, `created_on`, `modified_by`, `modified_on`) VALUES
(1, 1, '2019-05-23', '20:00:00', 0, 0, '2019-05-22 03:30:00', 0, '2019-05-22 16:08:32'),
(2, 2, '2019-05-24', '20:00:00', 0, 0, '2019-05-22 05:30:00', 0, '2019-05-22 16:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `ground`
--

CREATE TABLE `ground` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ground`
--

INSERT INTO `ground` (`id`, `name`, `status`, `created_by`, `created_on`, `modified_by`, `modified_on`) VALUES
(1, 'chennai chepauk stadium', 1, 1, '2019-05-22 10:42:36', 0, '2019-05-22 15:56:32'),
(2, 'chinnaswamy stadium', 1, 1, '2019-05-22 12:56:16', 0, '2019-05-22 15:56:32');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `seatrow_id` int(5) NOT NULL,
  `event_id` int(11) NOT NULL,
  `quantity` int(4) NOT NULL,
  `country` varchar(35) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `need_invoice` tinyint(4) NOT NULL DEFAULT '1',
  `product_cost` float(10,2) NOT NULL,
  `order_total` float(10,2) NOT NULL,
  `payment_status` tinyint(4) NOT NULL DEFAULT '0',
  `payment_details` text NOT NULL,
  `created_by` int(3) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(3) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `seatrow_id`, `event_id`, `quantity`, `country`, `first_name`, `last_name`, `address`, `zipcode`, `city`, `province`, `phone_number`, `emailid`, `need_invoice`, `product_cost`, `order_total`, `payment_status`, `payment_details`, `created_by`, `created_on`, `modified_by`, `modified_on`) VALUES
(1, 1, 2, 5, 'india', 'vijai', 'kumar', 'chennai', '600058', 'chennai', '', '9898989898', 'vijaidj@gmail.com', 1, 1000.00, 1200.00, 0, '', 0, '0000-00-00 00:00:00', 0, '2019-05-23 02:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `seatrow`
--

CREATE TABLE `seatrow` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category_id` int(5) NOT NULL,
  `price` float(10,2) NOT NULL,
  `quantity` int(5) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `seat_availability` tinyint(4) NOT NULL,
  `created_by` int(3) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(3) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seatrow`
--

INSERT INTO `seatrow` (`id`, `name`, `category_id`, `price`, `quantity`, `status`, `seat_availability`, `created_by`, `created_on`, `modified_by`, `modified_on`) VALUES
(1, '1', 1, 1000.00, 20, 1, 1, 1, '2019-05-22 05:30:00', 0, '2019-05-22 16:03:45'),
(2, '2', 1, 900.00, 30, 1, 1, 1, '2019-05-21 22:30:00', 0, '2019-05-22 16:03:45'),
(3, '1', 2, 2000.00, 10, 1, 1, 2, '2019-05-22 08:51:00', 0, '2019-05-22 16:04:47'),
(4, '2', 2, 1500.00, 35, 1, 2, 2, '2019-05-22 06:30:00', 0, '2019-05-22 16:04:47'),
(5, '1', 3, 750.00, 50, 1, 1, 1, '2019-05-22 05:30:00', 0, '2019-05-22 16:05:57'),
(6, '2', 3, 500.00, 75, 1, 1, 1, '2019-05-23 03:30:00', 0, '2019-05-22 16:05:57'),
(7, '1', 4, 600.00, 20, 1, 1, 1, '2019-05-23 13:30:00', 0, '2019-05-22 16:07:02'),
(8, '2', 4, 500.00, 30, 1, 2, 1, '2019-05-22 01:30:00', 0, '2019-05-22 16:07:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ground`
--
ALTER TABLE `ground`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seatrow`
--
ALTER TABLE `seatrow`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ground`
--
ALTER TABLE `ground`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `seatrow`
--
ALTER TABLE `seatrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



ALTER TABLE `orders` ADD `paid_amount` FLOAT(10,2) NOT NULL AFTER `order_total`, ADD `processing_fee` FLOAT(10,2) NOT NULL AFTER `paid_amount`;