-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 06, 2019 at 08:37 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AVANISH`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pass`) VALUES
('admin', 'a123');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `name` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `donation` varchar(100) NOT NULL,
  `facility` varchar(20) NOT NULL,
  `pickdate` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `mno` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `received` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`name`, `fname`, `address`, `city`, `age`, `donation`, `facility`, `pickdate`, `email`, `mno`, `gender`, `received`) VALUES
('dfg', 'sdfgh', 'asdfg', 'dfg', 21, 'gshj', 'pick', '2019-03-31', 'qsghjcch', 1234567890, 'Male', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `newuser`
--

CREATE TABLE `newuser` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mno` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newuser`
--

INSERT INTO `newuser` (`name`, `email`, `mno`, `username`, `password`) VALUES
('avanish', 'snkjd', 15772369, 'asjdjksbfjk', 'daddaksdmkl'),
('avanish', 'avanisg@jklns.com', 1234567890, 'asdgfsfg', 'asjkgkdj'),
('AVANISH', 'avanishkumarr8@gmaui', 2147483647, 'Avanish@1998', 'Ak@2000'),
('AVANISH KUMAR', 'avanishkumarr8@gmail', 2147483647, 'Avanish@2001', 'Ak@2001'),
('dsafz', 'sdfagszd', 1234567890, 'asda', '1234'),
('surya', 'ashkjhkdk', 2147483647, 'DKSKDK', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uname`, `pass`) VALUES
('surya', 's123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `newuser`
--
ALTER TABLE `newuser`
  ADD PRIMARY KEY (`name`,`mno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
