-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 02:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `collegeapply`
--

CREATE TABLE `collegeapply` (
  `id` int(150) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `birthday` varchar(100) DEFAULT NULL,
  `nid` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `college_name` varchar(100) DEFAULT NULL,
  `date_time` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collegeapply`
--

INSERT INTO `collegeapply` (`id`, `name`, `fname`, `mname`, `birthday`, `nid`, `gender`, `email`, `password`, `phone`, `college_name`, `date_time`) VALUES
(2, 'saiful', 'a', 'b', '2020-11-20', '12345', 'male', 'saffiful@gmail.com', 'saffiful@gmail.com', '01624075637', 'b', NULL),
(3, 'saiful', 'a', 'b', '2020-11-20', '12345', 'male', 'mdsaiful@gmail.com', 'cpassword', '12345', 'a', NULL),
(4, 'saiful', 'a', 'b', '2020-11-25', '12345', 'male', 'saiful@gmail.com', 'saiful@gmail.com', '999999', 'science', NULL),
(5, 'jami', 'a', 'b', '2020-11-25', '12345', 'female', 'jami@gmail.com', 'jami@gmail.com', '999999', 'science', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(150) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `c_name`, `c_email`, `comments`) VALUES
(1, 'saifulk', 'dg@gmail.com', 'hi how are you'),
(2, 'saiful', 'saiful@gmail.com', 'who are you'),
(17, 'saas', 'd@gmail.com', 'ddd'),
(18, 'fcc', 'fkc@gmail.com', 'sdfd'),
(20, 'saiful', 'saiful@gmail.com', 'kkk'),
(21, '', '', ''),
(22, 'saiful islam', 'saiful17182103353@gmail.com', 'ff'),
(23, 'saiful islam', 'saiful17182103353@gmail.com', 'ff'),
(24, '', '', ''),
(25, '', '', ''),
(26, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `schoolapply`
--

CREATE TABLE `schoolapply` (
  `id` int(150) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `bdate` varchar(100) DEFAULT NULL,
  `nid` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `school` varchar(100) DEFAULT NULL,
  `date_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schoolapply`
--

INSERT INTO `schoolapply` (`id`, `name`, `fname`, `mname`, `bdate`, `nid`, `gender`, `email`, `password`, `phone`, `school`, `date_time`) VALUES
(42, 'saiful', 'adc', 'ddd', '2020-11-26', '345', 'male', 'saiful@gmail.com', 'saiful@gmail.com', '01624075637', 'six', '2020-11-10 11:02:06.284480'),
(46, 'imran', 'm', 'n', '20-10-2000', '1234', 'male', 'imran@gmail.com', '12345678', '1234567', 'seven', '0000-00-00 00:00:00.000000'),
(47, 'jami', 'adc', 'abds', '2020-11-28', '123456', 'male', 'jami@gmail.com', 'jami@gmail.com', '01723444345', 'six', '2020-11-13 13:26:43.765360');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(150) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date_time`) VALUES
(19, 'saiful islam', 'saiful@gmail.com', '12345678', '2020-11-05 16:56:43'),
(20, 'saifulislam@gmail.com', 'saifulislam@gmail.com', 'saifulislam@gmail.com', '2020-11-05 19:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `versityapply`
--

CREATE TABLE `versityapply` (
  `id` int(150) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `bdate` varchar(100) DEFAULT NULL,
  `nid` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `versity` varchar(100) DEFAULT NULL,
  `date_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `versityapply`
--

INSERT INTO `versityapply` (`id`, `name`, `fname`, `mname`, `bdate`, `nid`, `gender`, `email`, `password`, `phone`, `versity`, `date_time`) VALUES
(1, 'saiful', '', 'b', '2020-11-26', '122', 'male', 'saiful@gmail.com', 'saiful@gmail.com', '01624075637', 'cse', '2020-11-08 18:59:49.105687');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collegeapply`
--
ALTER TABLE `collegeapply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoolapply`
--
ALTER TABLE `schoolapply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `versityapply`
--
ALTER TABLE `versityapply`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collegeapply`
--
ALTER TABLE `collegeapply`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `schoolapply`
--
ALTER TABLE `schoolapply`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `versityapply`
--
ALTER TABLE `versityapply`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
