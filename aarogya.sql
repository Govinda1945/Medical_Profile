-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 05:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aarogya`
--

-- --------------------------------------------------------

--
-- Table structure for table `allergytab`
--

CREATE TABLE `allergytab` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `allergy` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allergytab`
--

INSERT INTO `allergytab` (`id`, `user_id`, `allergy`, `level`, `remark`) VALUES
(15, 33, 'cancer', 'High', 'very high');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `symptoms` varchar(100) NOT NULL,
  `treatement` varchar(100) NOT NULL,
  `dot` varchar(100) NOT NULL,
  `dname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`id`, `user_id`, `disease`, `symptoms`, `treatement`, `dot`, `dname`) VALUES
(32, 33, 'cancer', 'cold', 'cancer', '2022-03-30', 'govinda');

-- --------------------------------------------------------

--
-- Table structure for table `emergancy`
--

CREATE TABLE `emergancy` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `e_name` varchar(200) NOT NULL,
  `rwp` varchar(100) NOT NULL,
  `e_number` varchar(100) NOT NULL,
  `e_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergancy`
--

INSERT INTO `emergancy` (`id`, `user_id`, `e_name`, `rwp`, `e_number`, `e_address`) VALUES
(7, 33, 'govinda', 'brother', '7057932722', '123st main');

-- --------------------------------------------------------

--
-- Table structure for table `habbits`
--

CREATE TABLE `habbits` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `alcohol` varchar(200) NOT NULL,
  `cigarette` varchar(100) NOT NULL,
  `drug` varchar(100) NOT NULL,
  `anyother` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `habbits`
--

INSERT INTO `habbits` (`id`, `user_id`, `alcohol`, `cigarette`, `drug`, `anyother`) VALUES
(4, 33, 'yes', 'yes', 'no', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `licence` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `adhar` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `name`, `mobile`, `email`, `licence`, `user`, `adhar`, `password`) VALUES
(3, 'Govinda', '7057932722', 'govindachastwe54@gmail.com', '123456', 'hospital', '123412341234', 'Pass123');

-- --------------------------------------------------------

--
-- Table structure for table `patientprofile`
--

CREATE TABLE `patientprofile` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `adhar` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin` int(100) NOT NULL,
  `noofmembers` int(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bloodgroup` varchar(200) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `maritalstatus` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `profilepic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientprofile`
--

INSERT INTO `patientprofile` (`id`, `user_id`, `firstname`, `lastname`, `email`, `adhar`, `address`, `address2`, `city`, `state`, `pin`, `noofmembers`, `phone`, `age`, `gender`, `bloodgroup`, `occupation`, `maritalstatus`, `dob`, `profilepic`) VALUES
(5, 33, 'govinda', 'chastwe', 'govinda@gmail.com', '123123123123', '123st main', 'apartment', 'chandwad', 'Maharashtra', 413704, 10, 2147483647, 21, 'Male', 'B+', 'software engineer', 'Unmarried', '19/07/2001', 'uploadImage/Screenshot (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `adhar` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `birthdate`, `gender`, `user`, `adhar`, `password`) VALUES
(33, 'govinda', '7057932722', 'govinda@gmail.com', '2022-03-29', 'male', 'patient', '123123123123', 'Pass123');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `addprofile` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO patientprofile(user_id)VALUES(NEW.id)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertallergy` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO allergytab(user_id)VALUES(NEW.id)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertemergancy` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO emergancy(user_id)VALUES(NEW.id)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `inserthabbit` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO habbits(user_id)VALUES(NEW.id)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertuser` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO disease(user_id)VALUES(NEW.id)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertvaccine` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO vaccine(user_id)VALUES(NEW.id)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `vaccinename` varchar(200) NOT NULL,
  `vaccinedate` varchar(100) NOT NULL,
  `polio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`id`, `user_id`, `vaccinename`, `vaccinedate`, `polio`) VALUES
(6, 33, 'covishield', '2022-03-30', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allergytab`
--
ALTER TABLE `allergytab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`user_id`);

--
-- Indexes for table `emergancy`
--
ALTER TABLE `emergancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `habbits`
--
ALTER TABLE `habbits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientprofile`
--
ALTER TABLE `patientprofile`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `patientprofile` ADD FULLTEXT KEY `email` (`email`,`adhar`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allergytab`
--
ALTER TABLE `allergytab`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `emergancy`
--
ALTER TABLE `emergancy`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `habbits`
--
ALTER TABLE `habbits`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patientprofile`
--
ALTER TABLE `patientprofile`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
