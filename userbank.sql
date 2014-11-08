-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2014 at 09:09 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `digichq`
--

-- --------------------------------------------------------

--
-- Table structure for table `userbank`
--

CREATE TABLE IF NOT EXISTS `userbank` (
  `email` varchar(50) NOT NULL,
  `string_id` varchar(20) NOT NULL,
  `bname` varchar(20) NOT NULL,
  `accIdTr` varchar(10) NOT NULL,
  PRIMARY KEY (`accIdTr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userbank`
--

INSERT INTO `userbank` (`email`, `string_id`, `bname`, `accIdTr`) VALUES
('nagaravali.t@gmail.com', 'abcabc', 'bank1', '1234'),
('sachintshebbar@gmail.com', 'defdef', 'bank2', '2345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
