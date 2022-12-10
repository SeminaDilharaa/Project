-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2020 at 04:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pastpapers`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_file`
--

CREATE TABLE `log_file` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `UserType` varchar(20) NOT NULL,
  `DateTime` date NOT NULL,
  `Function` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_file`
--

INSERT INTO `log_file` (`Id`, `UserName`, `UserType`, `DateTime`, `Function`) VALUES
(41, 'admin', 'Librarian', '2020-01-27', 'login'),
(75, 'admin', 'Librarian', '2020-01-27', 'login'),
(77, '000000000V', 'LIBRARIAN', '2020-01-28', 'download'),
(78, '000000000V', 'LIBRARIAN', '2020-01-28', 'download'),
(79, '955940873v', 'Student', '2020-01-28', 'login'),
(80, '955940873v', 'STUDENT', '2020-01-28', 'download'),
(81, 'admin', 'Librarian', '2020-01-28', 'login'),
(82, 'admin', 'Librarian', '2020-01-28', 'login');

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `id` int(11) NOT NULL,
  `course_code` varchar(7) NOT NULL,
  `examination_year` varchar(11) NOT NULL,
  `url` text NOT NULL,
  `uploader` int(11) NOT NULL,
  `uploaded_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`id`, `course_code`, `examination_year`, `url`, `uploader`, `uploaded_on`) VALUES
(116, 'ICT1113', '2017', '../papers/2017_ICT1113.pdf', 1, '2020-01-25'),
(117, 'ICT1122', '2017', '../papers/2017_ICT1122.pdf', 1, '2020-01-25'),
(118, 'ICT1132', '2017', '../papers/2017_ICT1132.pdf', 1, '2020-01-25'),
(119, 'ICT1142', '2017', '../papers/2017_ICT1142.pdf', 1, '2020-01-25'),
(120, 'ICT1152', '2017', '../papers/2017_ICT1152.pdf', 1, '2020-01-25'),
(121, 'ICT1162', '2017', '../papers/2017_ICT1162.pdf', 1, '2020-01-25'),
(122, 'ICT1172', '2017', '../papers/2017_ICT1172.pdf', 1, '2020-01-25'),
(123, 'ICT1113', '2015', '../papers/2015_ICT1113.pdf', 1, '2020-01-25'),
(124, 'ICT1122', '2015', '../papers/2015_ICT1122.pdf', 1, '2020-01-25'),
(125, 'ICT1132', '2015', '../papers/2015_ICT1132.pdf', 1, '2020-01-25'),
(126, 'ICT1142', '2015', '../papers/2015_ICT1142.pdf', 1, '2020-01-25'),
(127, 'ICT1162', '2015', '../papers/2015_ICT1162.pdf', 1, '2020-01-25'),
(128, 'ICT1152', '2015', '../papers/2015_ICT1152.pdf', 1, '2020-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(45) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `status` enum('NEW','VERIFIED','DISABLED') NOT NULL DEFAULT 'NEW',
  `user_type` enum('STUDENT','ACDSTAFF','LIBRARIAN') NOT NULL DEFAULT 'STUDENT',
  `sign_up_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `nic`, `password`, `status`, `user_type`, `sign_up_date`) VALUES
(1, 'Librarian', 'admin', '000000000V', '$2y$10$awdU6Qp1AGPH6yei/sBTXO5u6ENpRmk/pG73T5CtbTsJaxsLnPS9O', 'VERIFIED', 'LIBRARIAN', '2020-01-25'),
(9, 'Chathudya Jayawardene', 'chathudya', '967812048V', '$2y$10$lEOW5ijHEBJPSPy.UAWOw.LQmVUPtROsM0TgV0o84y7wwZ0sTl0DK', 'DISABLED', 'STUDENT', '2020-01-25'),
(10, 'Lakmini Sumathipala', 'lakmini', '967751561v', '$2y$10$zXbqI15vh3T52C.DMfifJ.YrLuqZVMUHEnKDQ3ANUSDNz6EqUULuy', 'NEW', 'STUDENT', '2020-01-25'),
(11, 'Tharika Weerasinghe', 'tharika', '955940873v', '$2y$10$FiqjeIPASXdOkHIJ726zm.W6I18UK2cn3jlZqjuyNY2cqOzfR1bgG', 'VERIFIED', 'STUDENT', '2020-01-25'),
(12, 'Semina Dilhara', 'dilhara', '19953553090V', '$2y$10$9TGorbLAfoW/31ZOgbrX7OViITf4LRUpmnyNIvRvhR6sl4NCBPYrm', 'NEW', 'STUDENT', '2020-01-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_file`
--
ALTER TABLE `log_file`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_papers_user1_idx` (`uploader`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_file`
--
ALTER TABLE `log_file`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `papers`
--
ALTER TABLE `papers`
  ADD CONSTRAINT `fk_papers_user1` FOREIGN KEY (`uploader`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
