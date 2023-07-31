-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 01:17 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edsa_realstate`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `estates` varchar(150) NOT NULL,
  `properties` varchar(150) NOT NULL,
  `contact_method` varchar(40) NOT NULL,
  `enquiry_date` date NOT NULL,
  `enquiry_time` time(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `full_name`, `email_address`, `phone_number`, `estates`, `properties`, `contact_method`, `enquiry_date`, `enquiry_time`) VALUES
(1, 'full_name', 'email_address', 'phone_number', 'estate', 'properties', 'contact_method', '2023-07-31', '11:00:00.000000'),
(2, 'full_name', 'email_address', 'phone_number', 'estate', 'properties', 'contact_method', '2023-07-31', '11:00:00.000000'),
(3, 'full_name', 'email_address', 'phone_number', 'estate', 'properties', 'contact_method', '2023-07-31', '11:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email_address` varchar(75) NOT NULL,
  `number_of_plot` varchar(6) NOT NULL,
  `payment_plan` varchar(35) NOT NULL,
  `contact_method` varchar(30) NOT NULL,
  `date_registered` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `full_name`, `phone_number`, `email_address`, `number_of_plot`, `payment_plan`, `contact_method`, `date_registered`) VALUES
(3, 'full_name', 'phone_number', 'email_address', 'ten', 'payment_plan', 'contact_method', '2023-07-31 11:05:24'),
(4, 'full_name', 'phone_number', 'email_address', 'ten', 'payment_plan', 'contact_method', '2023-07-31 11:05:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
