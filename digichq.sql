-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2014 at 01:23 AM
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
-- Table structure for table `bank1`
--

CREATE TABLE IF NOT EXISTS `bank1` (
  `acc_no` varchar(10) NOT NULL,
  `string_id` varchar(20) NOT NULL,
  `balance` float NOT NULL,
  `branch_id` varchar(20) NOT NULL,
  PRIMARY KEY (`acc_no`),
  UNIQUE KEY `string_id` (`string_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank1`
--

INSERT INTO `bank1` (`acc_no`, `string_id`, `balance`, `branch_id`) VALUES
('123456789', 'abcabc', 1200000, '1111'),
('234567890', 'defdef', 50000, '2222');

-- --------------------------------------------------------

--
-- Table structure for table `bank2`
--

CREATE TABLE IF NOT EXISTS `bank2` (
  `acc_no` varchar(10) NOT NULL,
  `string_id` varchar(20) NOT NULL,
  `balance` float NOT NULL,
  `branch_id` varchar(20) NOT NULL,
  PRIMARY KEY (`acc_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank2`
--

INSERT INTO `bank2` (`acc_no`, `string_id`, `balance`, `branch_id`) VALUES
('123456789', 'wert', 456789, 'fdgjwH'),
('876543219', 'ghighi', 908766, '4444'),
('987654321', 'xyzxyz', 66000, '3333'),
('jh564', 'ghty', 456879, 'hjdskqio');

-- --------------------------------------------------------

--
-- Table structure for table `bank3`
--

CREATE TABLE IF NOT EXISTS `bank3` (
  `acc_no` varchar(10) NOT NULL,
  `string_id` varchar(20) NOT NULL,
  `balance` float NOT NULL,
  `branch_id` varchar(20) NOT NULL,
  PRIMARY KEY (`acc_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank3`
--

INSERT INTO `bank3` (`acc_no`, `string_id`, `balance`, `branch_id`) VALUES
('987654300', 'jkljkl', 56000, '5555'),
('987654312', 'tytyty', 987231, '6666');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `accIdTr` varchar(10) NOT NULL,
  `TId` varchar(10) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `remail` varchar(50) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`TId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`accIdTr`, `TId`, `amount`, `semail`, `remail`, `pin`, `date`) VALUES
('1234', '1', '560000', 'nagaravali.t@gmail.com', 'sachintshebbar@gmail.com', '123', '2014-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `Tstatus`
--

CREATE TABLE IF NOT EXISTS `Tstatus` (
  `TId` varchar(10) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`TId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Tstatus`
--

INSERT INTO `Tstatus` (`TId`, `status`) VALUES
('1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `passwd` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `place` varchar(25) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`passwd`, `email`, `contact`, `name`, `place`) VALUES
('deft', 'abc', '', '', ''),
('abc123', 'nagaravali.t@gmail.com', '9731915482', 'Ravali', 'Bangalore'),
('890sachhi', 'prasannasaraf1800@hathway.com', '', '', ''),
('890sachhi', 'prasannasaraf1801@hathway.com', '', '', ''),
('890sachhi', 'prasannasaraf180@hathway.com', '', '', ''),
('890sachhi', 'prasannasaraf18@hathway.com', '', '', ''),
('abc123', 'sachinjbms@gmail.com', '8904044057', 'Sachinj', 'Bangalore'),
('abc123', 'sachintshebbar@gmail.com', '8904044058', 'Sachin', 'Bangalore');

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
('nagaravali.t@gmail.com', 'wert', 'bank2', '12345'),
('sachintshebbar@gmail.com', 'defdef', 'bank2', '2345'),
('sachintshebbar@gmail.com', 'kjiu', 'bank1', 'asdfg'),
('nagaravali.t@gmail.com', 'ghty', 'bank3', 'hfsjka'),
('sachintshebbar@gmail.com', 'ghjj', 'bank3', 'hjkl');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
