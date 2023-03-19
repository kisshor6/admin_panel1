-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 06:04 PM
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
-- Database: `nov11`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `sno` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(400) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`sno`, `username`, `password`, `time`) VALUES
(1, 'mecat006', '$2y$10$ijDqO6d7PhWyegwvkdGo3eWLUok5D4cua9RTjzjKvkx3b73U.TPd6', '2022-11-11 21:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `category` varchar(100) NOT NULL,
  `shopname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `pincode` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `web` varchar(30) NOT NULL,
  `gst` varchar(30) NOT NULL,
  `features` text NOT NULL,
  `fields` text NOT NULL,
  `status` text NOT NULL,
  `pic_gst` varchar(100) NOT NULL,
  `pic_pan` varchar(100) NOT NULL,
  `pic_shop` varchar(100) NOT NULL,
  `discovered_by` varchar(100) NOT NULL,
  `distributor` varchar(100) NOT NULL,
  `summary_of_visit` varchar(100) NOT NULL,
  `followup` text NOT NULL,
  `remarks` text NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `isdirty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `mobile`, `category`, `shopname`, `address`, `state`, `city`, `date`, `pincode`, `email`, `phone`, `web`, `gst`, `features`, `fields`, `status`, `pic_gst`, `pic_pan`, `pic_shop`, `discovered_by`, `distributor`, `summary_of_visit`, `followup`, `remarks`, `longitude`, `latitude`, `isdirty`) VALUES
(73, 'Harishndra', '9856231245', 'Customers', 'Singhaniya Enterprises', '     khajura', 'Assam', 'nepalgunj', '2022-12-08 10:49:51', '219045', 'devilevil849@gmail.com', '', '', '', '', '', '', '1670495685.png', '', '', '', '', '', 'Yes', '', 0, 0, 0),
(77, 'Devil', '0056237080', 'Customers', 'Tata steel production', '    Mumbai-10, MH', 'Maharashtra', 'mumbai', '2023-01-02 11:38:35', '', 'mindunits@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', '', 0, 0, 0),
(78, 'kevin', '6671098498', 'CCTV', 'Mahindra shop house', ' surat-57, gujrat', 'Gujarat', 'surat', '2023-01-02 11:38:42', '', 'kevin@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', '', 0, 0, 0),
(79, 'krish', '0021567046', 'GPS', 'Flipcart house', '  banglore-4, karnataka', 'Karnataka', 'banglore', '2023-01-02 11:38:49', '', 'kridh@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', '', 0, 0, 0),
(80, 'Jack', '9868232337', 'CCTV', 'rathey work shop', ' simla-4, HP', 'Himachal Pradesh', 'simla', '2023-01-02 11:38:59', '', 'captaingjack@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sid` int(11) NOT NULL,
  `customer` varchar(10) NOT NULL,
  `head` varchar(100) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `challan_no` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `mode_payment` varchar(50) NOT NULL,
  `tax` text NOT NULL,
  `duration` varchar(30) NOT NULL,
  `commodity` varchar(50) NOT NULL,
  `model` varchar(30) NOT NULL,
  `rate` varchar(30) NOT NULL,
  `qty` varchar(30) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `tax_rate` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sid`, `customer`, `head`, `invoice_no`, `challan_no`, `type`, `mode_payment`, `tax`, `duration`, `commodity`, `model`, `rate`, `qty`, `amount`, `tax_rate`, `total`, `time`) VALUES
(4, 'Admin', 'sale', '', '', 'Nongst', 'cash', '', '3-year', '', '3021', '50', '50', '85209', '', '12608', '2022-12-11 00:19:30'),
(5, 'devilevil8', 'sale', '', '', 'GST', 'cheque', 'Yes', '1-year', '', '', '', '', '', '', '', '2022-12-11 23:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `id` int(8) NOT NULL,
  `client` varchar(100) NOT NULL,
  `status_of_visit` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`id`, `client`, `status_of_visit`, `picture`, `remarks`, `longitude`, `latitude`, `time`) VALUES
(11, 'Nirmal', 'Interested', '1670692717.png', 'admin', '10', '50', '2022-12-10 23:03:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visit`
--
ALTER TABLE `visit`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
