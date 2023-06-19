-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 05:52 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinemarriage`
--

-- --------------------------------------------------------

--
-- Table structure for table `couple`
--

CREATE TABLE `couple` (
  `id` int(11) NOT NULL,
  `RegID` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `couple`
--

INSERT INTO `couple` (`id`, `RegID`, `email`, `password`) VALUES
(1, '22074074', 'nahian15-5137@diu.edu.bd', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
(2, '36668962', 'dfdsfkm@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
(3, '96011176', 'c@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4');

-- --------------------------------------------------------

--
-- Table structure for table `divorce`
--

CREATE TABLE `divorce` (
  `id` int(11) NOT NULL,
  `bridegroom_name` varchar(255) NOT NULL,
  `bride_name` varchar(255) NOT NULL,
  `mdate` date NOT NULL,
  `mrid` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divorce`
--

INSERT INTO `divorce` (`id`, `bridegroom_name`, `bride_name`, `mdate`, `mrid`, `caddress`) VALUES
(1, 'Monsur Ahmed Shafifq', 'p[p][', '2018-12-13', 'Shafifq', '30/1,sukrabad,dhanmondi,dhaka, charpara,karimgonj,kishoregonj'),
(2, 'abdul kalam', 'naima kalam', '2018-12-11', '457', '30/1,sukrabad,dhanmondi,dhaka,'),
(3, 'Saidul Arefin', 'Fahmida Afrin', '2018-12-01', '96011176', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `marriagelist`
--

CREATE TABLE `marriagelist` (
  `id` int(11) NOT NULL,
  `date` varchar(15) DEFAULT NULL,
  `RegNo` varchar(15) DEFAULT NULL,
  `d1` text NOT NULL,
  `d2` text NOT NULL,
  `f1` varchar(15) DEFAULT NULL,
  `a1` varchar(15) DEFAULT NULL,
  `d3` text NOT NULL,
  `d4` text NOT NULL,
  `f2` varchar(15) DEFAULT NULL,
  `a2` varchar(15) DEFAULT NULL,
  `d5` text NOT NULL,
  `d6` text NOT NULL,
  `d7` text NOT NULL,
  `d8` text NOT NULL,
  `d9` text NOT NULL,
  `d10` text NOT NULL,
  `d11` text NOT NULL,
  `d12` text NOT NULL,
  `d13` text NOT NULL,
  `d14` text NOT NULL,
  `d15` text NOT NULL,
  `d16` text NOT NULL,
  `d17` text NOT NULL,
  `d18` text NOT NULL,
  `d19` text NOT NULL,
  `d20` text NOT NULL,
  `d21` text NOT NULL,
  `d22` text NOT NULL,
  `d23` text NOT NULL,
  `d24` text NOT NULL,
  `d25` text NOT NULL,
  `d26` text NOT NULL,
  `sign` varchar(150) DEFAULT NULL,
  `photoW` varchar(150) DEFAULT NULL,
  `photoH` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marriagelist`
--

INSERT INTO `marriagelist` (`id`, `date`, `RegNo`, `d1`, `d2`, `f1`, `a1`, `d3`, `d4`, `f2`, `a2`, `d5`, `d6`, `d7`, `d8`, `d9`, `d10`, `d11`, `d12`, `d13`, `d14`, `d15`, `d16`, `d17`, `d18`, `d19`, `d20`, `d21`, `d22`, `d23`, `d24`, `d25`, `d26`, `sign`, `photoW`, `photoH`) VALUES
(10, '2018/11/30', '36668962', 'wwwwwww', 'wwwwwwww', 'wwwwwwwwww', 'wwwwwwwwwww', 'wwwwwwwwwww', 'wwwwwwwww', 'wwwwwwwwww', 'wwwwwwwwwwww', 'wwwwwwwwwwwww', 'wwwwwwwwwwwwww', 'wwwwwwwwwwwwww', 'wwwwwwwwwwww', 'wwwwwwwwwwwww', 'wwwwwwwwwwwwwww', 'wwwwwwwwwwwwwwww', 'wwwwwwwwwwwwwwww', 'wwwwwwwwwwwwww', 'wwwwwwwwwwwwwww', 'wwwwwwwwwwwwww', 'wwwwwwwwwwwwwww', 'wwwwwwwwwwwwwwwww', 'wwwwwwwwwww', 'wwwwwwwwwwwwwwww', 'wwwwwwwwwwwwwwww', 'wwwwwwwwwwwwwwwwww', 'wwwwwwwwwww', 'wwwwwwwwwww', 'wwwwwwwwwwww', 'wwwwwwwwwwwwwww', '5137', 'uploads/Capture.PNG', 'uploads/Capture - Copy.PNG', 'uploads/Capture - Copy (2).PNG'),
(11, '2018/12/01', '96011176', 'Dhaka', 'Saidul Arefin', 'Abul Hasan', 'Dhaka', '30', 'Fahmida Afrin', 'Zamal Hasan', 'Pabna', 'Maiden', '28', 'kamal,jamal,etc', 'Witness Name', 'wakil', 'Witness Name', 'Witness Name', '12/11/2018', '2,00,000', '2000', 'Unkonwn', 'Unkonon', 'Nothing', 'Unkonwn', 'Unkonwn', 'NOt compolsery', 'NOt compolsery', 'NOt compolsery', 'Unkonwn', '12/10/2018', '3000', '1234', 'uploads/001 == (94).jpg', 'uploads/001 == (102).jpg', 'uploads/_20170105_222537.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `registrationOfficer`
--

CREATE TABLE `registrationOfficer` (
  `id` int(11) NOT NULL,
  `RegID` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qazi`
--

INSERT INTO `registrationOfficer` (`id`, `RegID`, `email`) VALUES
(1, '5137', 'nahian15-5137@diu.edu.bd'),
(2, '1234', 'a@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `qazilist`
--

CREATE TABLE `qazilist` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `RegID` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qazilist`
--

INSERT INTO `qazilist` (`id`, `name`, `email`, `RegID`, `password`) VALUES
(2, 'Nahian', 'nahian15-5137@diu.edu.bd', '5137', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
(3, 'Kazi Abdur Razzak', 'a@gmail.com', '1234', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `name`, `email`, `subject`, `message`) VALUES
(13, 'Nahian', 'nahian@gamil.com', 'Testing A', 'testing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `couple`
--
ALTER TABLE `couple`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divorce`
--
ALTER TABLE `divorce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marriagelist`
--
ALTER TABLE `marriagelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrationOfficer`
--
ALTER TABLE `registrationOfficer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qazilist`
--
ALTER TABLE `qazilist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `couple`
--
ALTER TABLE `couple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `divorce`
--
ALTER TABLE `divorce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marriagelist`
--
ALTER TABLE `marriagelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `qazi`
--
ALTER TABLE `registrationOfficer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `qazilist`
--
ALTER TABLE `qazilist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
