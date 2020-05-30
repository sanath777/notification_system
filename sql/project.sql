-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 30, 2020 at 03:59 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(25) NOT NULL,
  `course_year` int(11) NOT NULL,
  `course_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `phone` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `friends` varchar(10000) NOT NULL,
  `course_completion` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `email`, `password`, `phone`, `city`, `year`, `friends`, `course_completion`) VALUES
(5, 'admin', 'admin@abc.com', 'YWRtaW4xMjM=', 2147483647, 'Chennai', 0, '', ''),
(24, 'student1', 'student1@abc.com', 'MTIz', 900099678, 'Coimbatore', 4, '', ''),
(25, 'student2', 'student2@abc.com', 'MTIz', 2147483647, 'Coimbatore', 3, '', ''),
(26, 'student3', 'student3@abc.com', 'MTIz', 2147483647, 'Coimbatore', 2, '', ''),
(27, 'student4', 'student4@abc.com', 'MTIz', 900099678, 'Coimbatore', 1, '', ''),
(28, 'student5', 'student5@abc.com', 'MTIz', 900099678, 'Coimbatore', 4, '', ''),
(29, 'student6', 'student6@abc.com', 'MTIz', 2147483647, 'Coimbatore', 5, '', ''),
(30, 'student7', 'student7@abc.com', 'MTIz', 2147483647, 'Coimbatore', 3, '', ''),
(31, 'student8', 'student8@abc.com', 'MTIz', 2147483647, 'Coimbatore', 2, '', ''),
(32, 'student9', 'student9@abc.com', 'MTIz', 2147483647, 'Coimbatore', 4, '', ''),
(33, 'student10', 'student10@abc.com', 'MTIz', 2147483647, 'Coimbatore', 3, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student1`
--

CREATE TABLE `student1` (
  `comment_id` int(11) NOT NULL,
  `seen` int(1) DEFAULT '0',
  `comment_subject` varchar(50) DEFAULT NULL,
  `comment_text` text,
  `comment_status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student2`
--

CREATE TABLE `student2` (
  `comment_id` int(11) NOT NULL,
  `seen` int(1) DEFAULT '0',
  `comment_subject` varchar(50) DEFAULT NULL,
  `comment_text` text,
  `comment_status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student3`
--

CREATE TABLE `student3` (
  `comment_id` int(11) NOT NULL,
  `seen` int(1) DEFAULT '0',
  `comment_subject` varchar(50) DEFAULT NULL,
  `comment_text` text,
  `comment_status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student4`
--

CREATE TABLE `student4` (
  `comment_id` int(11) NOT NULL,
  `seen` int(1) DEFAULT '0',
  `comment_subject` varchar(50) DEFAULT NULL,
  `comment_text` text,
  `comment_status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student5`
--

CREATE TABLE `student5` (
  `comment_id` int(11) NOT NULL,
  `seen` int(1) DEFAULT '0',
  `comment_subject` varchar(50) DEFAULT NULL,
  `comment_text` text,
  `comment_status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student6`
--

CREATE TABLE `student6` (
  `comment_id` int(11) NOT NULL,
  `seen` int(1) DEFAULT '0',
  `comment_subject` varchar(50) DEFAULT NULL,
  `comment_text` text,
  `comment_status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student7`
--

CREATE TABLE `student7` (
  `comment_id` int(11) NOT NULL,
  `seen` int(1) DEFAULT '0',
  `comment_subject` varchar(50) DEFAULT NULL,
  `comment_text` text,
  `comment_status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student8`
--

CREATE TABLE `student8` (
  `comment_id` int(11) NOT NULL,
  `seen` int(1) DEFAULT '0',
  `comment_subject` varchar(50) DEFAULT NULL,
  `comment_text` text,
  `comment_status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student9`
--

CREATE TABLE `student9` (
  `comment_id` int(11) NOT NULL,
  `seen` int(1) DEFAULT '0',
  `comment_subject` varchar(50) DEFAULT NULL,
  `comment_text` text,
  `comment_status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student10`
--

CREATE TABLE `student10` (
  `comment_id` int(11) NOT NULL,
  `seen` int(1) DEFAULT '0',
  `comment_subject` varchar(50) DEFAULT NULL,
  `comment_text` text,
  `comment_status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student1`
--
ALTER TABLE `student1`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `student2`
--
ALTER TABLE `student2`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `student3`
--
ALTER TABLE `student3`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `student4`
--
ALTER TABLE `student4`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `student5`
--
ALTER TABLE `student5`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `student6`
--
ALTER TABLE `student6`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `student7`
--
ALTER TABLE `student7`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `student8`
--
ALTER TABLE `student8`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `student9`
--
ALTER TABLE `student9`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `student10`
--
ALTER TABLE `student10`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1435;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `student1`
--
ALTER TABLE `student1`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student2`
--
ALTER TABLE `student2`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student3`
--
ALTER TABLE `student3`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student4`
--
ALTER TABLE `student4`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student5`
--
ALTER TABLE `student5`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student6`
--
ALTER TABLE `student6`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student7`
--
ALTER TABLE `student7`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student8`
--
ALTER TABLE `student8`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student9`
--
ALTER TABLE `student9`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student10`
--
ALTER TABLE `student10`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
