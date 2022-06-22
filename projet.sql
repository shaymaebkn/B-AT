-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 12:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `clientid` int(10) UNSIGNED NOT NULL,
  `Coachid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Height` double(8,2) NOT NULL,
  `Weight` double(8,2) NOT NULL,
  `weight_goal` double(8,2) NOT NULL,
  `type_coaching` varchar(255) NOT NULL,
  `hours_sleep` varchar(255) NOT NULL,
  `physical_activity` text NOT NULL,
  `picture` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clientid`, `Coachid`, `fname`, `lname`, `username`, `Number`, `email`, `Country`, `City`, `Age`, `Height`, `Weight`, `weight_goal`, `type_coaching`, `hours_sleep`, `physical_activity`, `picture`, `password`) VALUES
(13, 0, 'halima', 'allam', 'halima allam ', '07929899', 'halima@gmail.com', 'morocco', 'tanger', 22, 160.00, 65.00, 50.00, 'personelle', '5', 'foot', '', 'halimab'),
(14, 0, 'rania', 'blq', 'rania blq', '0978667678', 'rania@gmail.com', 'morocco', 'tanger', 19, 160.00, 50.00, 60.00, 'personelle', '7', 'no on ', '', 'raniab'),
(15, 0, 'fatiha', 'slimani', 'slimani fatiha ', '07678926', 'fatiha@gmail.com', 'morocco', 'tanger', 20, 160.00, 56.00, 50.00, 'personelle', '7', 'blabla', 'IMG-20210725-WA0005.jpg', 'fatihab'),
(16, 0, 'chaymae', 'boukhana', 'chaymaeboukhana1', '0772226410', 'chaymaeboukhana.solicode@gmail.com', 'morocco', 'tanger', 20, 160.00, 60.00, 50.00, 'personelle', '7', 'foot', 'Group 4.png', 'chaymae2');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `Coachid` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `Description` text NOT NULL,
  `Speciality` varchar(255) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`Coachid`, `fname`, `Lname`, `email`, `Description`, `Speciality`, `picture`, `Password`) VALUES
(1, 'ncdkl', 'hhhhh', '0', 'nblablablablabl', 'blblblb', '', 'lblblbl'),
(2, 'ncdkl', 'hhhhh', '0', 'nblablablablabl', 'blblblb', '', 'blblbla'),
(3, 'halima', 'allam', '0', 'je suis blablablablalalb', 'coach perssonel ', '', 'halima07'),
(4, 'chaymae', 'boukhana', '0', 'blbllblblblbaablblbabalb', 'coach personell', '', 'chaymaae'),
(5, 'chaymae', 'boukhana', 'chaymae@gma', 'nblablablablabl', 'coach personell', '', 'chaymae'),
(6, 'chaymae', 'boukhana', 'chaymae@gma', 'blbllblblblbaablblbabalb', 'coach personell', 'https://www.boredpanda.com/blog/wp-content/uploads/2014/12/Top-10-photographers-for-travel-portraits27__700.jpg', 'mmmm'),
(7, 'chaymae', 'boukhana', 'chaymae@gmail.com', 'nblablablablabl', 'coach personell', '', 'chaymae');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `commandeid` int(10) UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `Adress` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `clientid` int(11) NOT NULL,
  `paquesid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `dataid` int(250) NOT NULL,
  `coachid` int(200) NOT NULL,
  `username` varchar(250) NOT NULL,
  `weight` double NOT NULL,
  `height` double NOT NULL,
  `blood_presure` double NOT NULL,
  `FCmax` double NOT NULL,
  `diabetes` double NOT NULL,
  `medical_file` double NOT NULL,
  `recovery_time` double NOT NULL,
  `calories` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `contenu` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `Coachid` int(250) NOT NULL,
  `clientid` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paques`
--

CREATE TABLE `paques` (
  `paqueid` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Price` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paques`
--

INSERT INTO `paques` (`paqueid`, `fname`, `Description`, `Category`, `Price`) VALUES
(6, 'chaymae', 'je suis ', 'personell', 600.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`clientid`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`Coachid`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`commandeid`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`dataid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `paques`
--
ALTER TABLE `paques`
  ADD PRIMARY KEY (`paqueid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `clientid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `Coachid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `commandeid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `dataid` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paques`
--
ALTER TABLE `paques`
  MODIFY `paqueid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
