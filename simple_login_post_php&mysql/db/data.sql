-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 02:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `id`
--

CREATE TABLE `id` (
  `id` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `id`
--

INSERT INTO `id` (`id`) VALUES
(''),
('music');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('stephen', '12345'),
('raj', '12345'),
('men', '12345'),
('stephenraj', 'raj'),
('stephen', '12222'),
('qqqq', '12334'),
('qqqq', '12334'),
('adda', '11111'),
('aaaaa', '111111'),
('nissi', '12345'),
('jeyaraj', '12345'),
('stephen123', 'jeyaraj11'),
('steven', 'steven'),
('steven', 'steven'),
('steven', 'steven'),
('steven', 'steven'),
('stevenraj', 'raj'),
('music', '12345'),
('steven', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `content` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`content`) VALUES
('hi stephen raj'),
('hi Stephen HOw are you'),
('hi stephen raj dakldasllllllllllllllllllllllllllk]\r\nss\r\nass'),
('Some text...'),
('0'),
('0'),
('HI STE'),
('root'),
('root'),
('Some text...'),
('root'),
('root'),
('username'),
('username'),
('stephen'),
('hi steven'),
('ssss'),
('Some text...'),
('Some text...'),
('Some text...aaaa'),
('AAAA'),
('Some text...'),
('Some text...'),
('Some text...'),
('aaa'),
('aaaaaaaaaaa'),
('Some text...'),
('Some text...'),
('hhhhh'),
('Some text...'),
('Some text...'),
('Some text...'),
('Some text...'),
('ste eugvjgavccaa'),
('Some text...');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `id`
--
ALTER TABLE `id`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
