-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 05:51 AM
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
-- Database: `rto`
--

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `d_id` int(4) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `vmaker` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`d_id`, `dname`, `vmaker`, `address`) VALUES
(1, 'Popular', 'Hyundai', 'Kanjirapally'),
(2, 'AVG', 'Maruthi', 'Kunnubhagham P.O\r\nKanjirapally');

-- --------------------------------------------------------

--
-- Table structure for table `drv_license`
--

CREATE TABLE `drv_license` (
  `apno` int(4) NOT NULL,
  `licno` varchar(15) NOT NULL,
  `d_iss` date NOT NULL,
  `p_iss` varchar(50) NOT NULL,
  `valid` date NOT NULL,
  `xld` date NOT NULL,
  `offc` varchar(50) NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` int(4) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `photo` varchar(60) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phn` varchar(15) NOT NULL,
  `des` varchar(50) NOT NULL,
  `salary` varchar(10) NOT NULL,
  `qualify` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `fname`, `gender`, `dob`, `photo`, `address`, `email`, `phn`, `des`, `salary`, `qualify`) VALUES
(1, 'anil', 'male', '1990-03-20', '', 'valayanttu', 'anil@gmail.com', '214784562', 'accountant', '25000', 'Bcom');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `bno` int(4) NOT NULL,
  `bdate` date NOT NULL,
  `vregno` varchar(10) NOT NULL,
  `fine` int(4) NOT NULL,
  `feetype` varchar(20) NOT NULL,
  `tamnt` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `f_id` int(4) NOT NULL,
  `category` varchar(50) NOT NULL,
  `status` int(4) NOT NULL,
  `date` date NOT NULL,
  `fl_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `license_details`
--

CREATE TABLE `license_details` (
  `sno` int(4) NOT NULL,
  `license` varchar(50) NOT NULL,
  `fees` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `u_id` int(4) NOT NULL,
  `u_pass` varchar(10) NOT NULL,
  `u_name` varchar(25) NOT NULL,
  `u_type` int(2) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`u_id`, `u_pass`, `u_name`, `u_type`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', 0, 0),
(2, 'hari', 'hari@gmail.com', 1, 1),
(3, 'ammu', 'ammu@gmail.com', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `new_reg`
--

CREATE TABLE `new_reg` (
  `nrano` int(4) NOT NULL,
  `tempno` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `owname` varchar(50) NOT NULL,
  `sdw` varchar(50) NOT NULL,
  `age` int(4) NOT NULL,
  `padds` varchar(50) NOT NULL,
  `tadds` varchar(50) NOT NULL,
  `pamnt` int(5) NOT NULL,
  `tamnt` int(5) NOT NULL,
  `insceno` varchar(15) NOT NULL,
  `cmpny` varchar(50) NOT NULL,
  `valdty` date NOT NULL,
  `vregno` varchar(15) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `renew` date NOT NULL,
  `regoffcr` varchar(50) NOT NULL,
  `des` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(4) NOT NULL,
  `question` varchar(50) NOT NULL,
  `op1` varchar(50) NOT NULL,
  `op2` varchar(50) NOT NULL,
  `op3` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `op1`, `op2`, `op3`, `ans`) VALUES
(1, 'use of mobile phone is recommended in driving.', 'yes,in certain situations', 'no', 'As the driver intends', '1'),
(2, 'If you are near a pedestrian crossing and there ar', 'Slow down, press horn and proceed.', 'Press horn and proceed.', 'Stop the vehicle, wait until pedestrians cross and', '3');

-- --------------------------------------------------------

--
-- Table structure for table `renewal`
--

CREATE TABLE `renewal` (
  `licno` varchar(15) NOT NULL,
  `llr` int(10) NOT NULL,
  `d_iss` date NOT NULL,
  `d_ren` date NOT NULL,
  `license_type` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `blood` varchar(10) NOT NULL,
  `adds` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `identity` varchar(50) NOT NULL,
  `iden` varchar(50) NOT NULL,
  `vfrom` date NOT NULL,
  `vto` date NOT NULL,
  `amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `uid` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `uphone` varchar(50) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `upass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`uid`, `uname`, `uphone`, `uemail`, `upass`) VALUES
(1, 'Appu', '917561055423', 'appu@gmail.com', 'Abc@123');

-- --------------------------------------------------------

--
-- Table structure for table `temp_reg`
--

CREATE TABLE `temp_reg` (
  `temapno` int(4) NOT NULL,
  `date` date NOT NULL,
  `dname` varchar(50) NOT NULL,
  `daddrs` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `mnthyr` varchar(30) NOT NULL,
  `clsveh` varchar(10) NOT NULL,
  `chsno` varchar(10) NOT NULL,
  `egnno` varchar(10) NOT NULL,
  `tbody` varchar(30) NOT NULL,
  `fuel` varchar(10) NOT NULL,
  `seatcy` varchar(10) NOT NULL,
  `color` varchar(20) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `cbc` varchar(10) NOT NULL,
  `cylinders` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `regfee` int(4) NOT NULL,
  `validty` varchar(10) NOT NULL,
  `tempno` varchar(50) NOT NULL,
  `officer` varchar(50) NOT NULL,
  `des` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `r_id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `veh_cls`
--

CREATE TABLE `veh_cls` (
  `v_id` int(4) NOT NULL,
  `clv` varchar(50) NOT NULL,
  `vname` varchar(50) NOT NULL,
  `cmpny` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `veh_details`
--

CREATE TABLE `veh_details` (
  `vcode` int(4) NOT NULL,
  `clv` varchar(10) NOT NULL,
  `vname` varchar(50) NOT NULL,
  `modreg` varchar(20) NOT NULL,
  `modoper` varchar(20) NOT NULL,
  `tax` float NOT NULL,
  `dur` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `drv_license`
--
ALTER TABLE `drv_license`
  ADD PRIMARY KEY (`apno`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`bno`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `license_details`
--
ALTER TABLE `license_details`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `new_reg`
--
ALTER TABLE `new_reg`
  ADD PRIMARY KEY (`nrano`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `renewal`
--
ALTER TABLE `renewal`
  ADD PRIMARY KEY (`llr`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `temp_reg`
--
ALTER TABLE `temp_reg`
  ADD PRIMARY KEY (`temapno`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`r_id`),
  ADD UNIQUE KEY `cno` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `veh_cls`
--
ALTER TABLE `veh_cls`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `veh_details`
--
ALTER TABLE `veh_details`
  ADD PRIMARY KEY (`vcode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `d_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drv_license`
--
ALTER TABLE `drv_license`
  MODIFY `apno` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `bno` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `f_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `license_details`
--
ALTER TABLE `license_details`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `u_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `new_reg`
--
ALTER TABLE `new_reg`
  MODIFY `nrano` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `renewal`
--
ALTER TABLE `renewal`
  MODIFY `llr` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp_reg`
--
ALTER TABLE `temp_reg`
  MODIFY `temapno` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `r_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `veh_cls`
--
ALTER TABLE `veh_cls`
  MODIFY `v_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `veh_details`
--
ALTER TABLE `veh_details`
  MODIFY `vcode` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
