-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 09:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbanksystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_info`
--

CREATE TABLE `add_info` (
  `id` int(255) NOT NULL,
  `hospital_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `bloodgroup` varchar(6) NOT NULL,
  `bagsize` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_info`
--

INSERT INTO `add_info` (`id`, `hospital_id`, `user_id`, `bloodgroup`, `bagsize`, `price`, `status`) VALUES
(1, 1, 3, 'O+', '450ml', 300, 'Requested'),
(2, 1, 3, 'O+', '200ml', 100, 'Requested'),
(5, 1, 3, 'O+', '350ml', 400, 'Requested'),
(6, 1, 0, 'AB+', '100ml', 50, ''),
(7, 1, 0, 'B+', '450ml', 300, ''),
(8, 1, 3, 'O+', '500ml', 450, 'Requested');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_register`
--

CREATE TABLE `hospital_register` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_register`
--

INSERT INTO `hospital_register` (`id`, `name`, `address`, `email`, `password`, `contact`) VALUES
(1, 'city hospital', '301,Manorama Nagar,Near Gavdevi temple', 'city.hospital@gmail.com', '568c3d7923fed403485de675deb67325', 8983403218);

-- --------------------------------------------------------

--
-- Table structure for table `receiver_register`
--

CREATE TABLE `receiver_register` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receiver_register`
--

INSERT INTO `receiver_register` (`id`, `name`, `address`, `age`, `bloodgroup`, `email`, `password`, `contact`) VALUES
(3, 'divyaborse', '3,surya Nagar,Near Badlapur', 22, 'O+', '2017.divya.borse@ves.ac.in', 'cb470f60ac195770c6c031beee867c62', 8459318289);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_info`
--
ALTER TABLE `add_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_register`
--
ALTER TABLE `hospital_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiver_register`
--
ALTER TABLE `receiver_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_info`
--
ALTER TABLE `add_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hospital_register`
--
ALTER TABLE `hospital_register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `receiver_register`
--
ALTER TABLE `receiver_register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
