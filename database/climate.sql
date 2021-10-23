-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2021 at 01:02 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `climate`
--

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `no` int(11) NOT NULL,
  `uname` text NOT NULL,
  `uviews` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`no`, `uname`, `uviews`) VALUES
(10, 'Rohan Tejas Ukirde', 'Its a very great problem that need to be resolved asap'),
(12, 'Tejas Veer', 'We should avoid deforestration , if we do deforestation then we have to plant same number of trees'),
(13, 'Rohan Chaudhari', 'Change the mindset !! Not the climate'),
(14, 'Omkar Ukirde', 'Climate Change is a Global Crisis and we all should come together to solve it and overcome it !!'),
(15, 'Omkar', 'We should all come together and solve gloabl climate change crisis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
