-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2016 at 04:44 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosmo`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `c_id` int(11) NOT NULL COMMENT 'unique ticket number',
  `h_no` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL COMMENT 'type of complaint',
  `description` text NOT NULL COMMENT 'Desciption of the complaint',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0-not checked 1-checked 2-in progress 3-completed',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`c_id`, `h_no`, `type`, `description`, `status`, `date`) VALUES
(1, 'A-101', 'Floor', 'dsjfhgdsfkjghsjkldfhlakjsdfhasdfsdfds', 0, '2016-11-25 15:12:30'),
(2, 'A-101', 'sdkflj', 'jklsdjfas', 1, '2016-11-21 04:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `h_no` varchar(20) NOT NULL COMMENT 'Name of admin who adds/updates from user table',
  `news` text NOT NULL COMMENT 'To be added/updated',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `h_no`, `news`, `date`, `title`, `subject`) VALUES
(1, 'A-101', '', '2016-11-21 12:13:56', 'jkhdfjklhgslkjfdg', ''),
(2, 'A-101', 'are', '2016-11-21 14:12:51', 'Hello', 'asdf'),
(3, 'A-101', 'kjsdhflgj', '2016-11-21 10:48:28', 'sdfjghlsdkj', 'dfsjgldjf'),
(4, 'A-101', 'dskjfg;skdlfj', '2016-11-25 13:46:26', 'djfkgsd;', 'dskfj;sdkfj'),
(5, 'A-101', 'dskjfg;skdlfj', '2016-11-25 13:46:43', 'djfkgsd;', 'dskfj;sdkfj'),
(6, 'A-101', 'dfkjg;sldkfjgl;skdf', '2016-11-25 13:50:29', 'dfklgjsdlk', 'qfdkgj;sdlkj');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `s_id` int(11) NOT NULL COMMENT 'unique ticket number',
  `h_no` varchar(20) NOT NULL COMMENT 'Name of person who add. From user table',
  `type` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`s_id`, `h_no`, `type`, `description`, `status`, `date`) VALUES
(1, 'A-101', 'dskfjas;kl', 'sadkfjl;as', 1, '2016-11-21 05:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(12) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `h_no` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'0' COMMENT '1 if admin, else 0',
  `pno` varchar(10) NOT NULL COMMENT 'Flat no of the user.'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `fname`, `lname`, `email`, `h_no`, `password`, `status`, `pno`) VALUES
(1, 'Sriram', 'Arvind', 'lsriramarvind95@hotmail.com', 'A-101', '5f4dcc3b5aa765d61d8327deb882cf99', b'1', '7023065645');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `v_id` int(11) NOT NULL,
  `h_no` varchar(20) NOT NULL,
  `vname` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'unique ticket number', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'unique ticket number', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
