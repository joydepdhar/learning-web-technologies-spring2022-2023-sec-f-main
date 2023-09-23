-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 01:05 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fooddeliverysystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `address` varchar(400) NOT NULL,
  `joiningdate` date NOT NULL,
  `profilepicture` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `name`, `email`, `gender`, `dob`, `phonenumber`, `address`, `joiningdate`, `profilepicture`) VALUES
(2, 'admin', '12345678', 'admin', 'Asif Ahmed', 'asifahmednirob40@gmail.com', 'Male', '2003-01-28', '01389378244', 'kuratoli', '2023-04-05', 'profilepicture.png'),
(4, 'customer', '12345678', 'customer', 'Sajidwafwad', 'aWfd@rgsdg.com', 'Male', '2002-01-08', '34563533535', 'tgretg', '2023-04-05', 'profilepicture.png'),
(5, 'dm', '12345678', 'deliveryman', 'Asif Ahmedawf', 'awfawf@dsrhf', 'Male', '1984-01-30', '342653443', 'wrawraser', '2023-04-05', 'profilepicture.png'),
(6, 'vendor', '12345678', 'vendor', 'warawefeas', 'asifahmednirob43wadda@gmail.com', 'Male', '2004-02-03', '221342355425', 'rtewdfrw', '2023-04-05', 'profilepicture.png'),
(8, 'test', 'aaaaaaaa', 'deliveryman', 'erRdaw', 'awadwr@sgrd', 'Male', '2001-01-01', '013890437855', 'aewrrdawd', '2023-04-05', 'profilepicture.png'),
(9, 'test', 'wwwwwwww', 'vendor', 'erRadwdaw', 'awadadwwr@sgrd', 'Female', '2001-01-01', '0130437855', 'aewrrdawdadwdwa', '2023-04-05', 'profilepicture.png'),
(10, 'testef', 'ffffffff', 'deliveryman', 'erRadfeaswdaw', 'awadafedwwr@sgrd', 'Other', '2001-01-01', '0130433337855', 'aewrrdawdadwdwadwaad', '2023-04-05', 'profilepicture.png'),
(13, 'aafwaf323a', 'aaaaaaaa', 'vendor', 'Sajiddaw', 'asifah3dsmedfwanirob43@gmail.com', 'Male', '2001-01-01', '345645655456', 'warrfaewradawd', '2023-04-05', 'profilepicture.png'),
(14, 'abcd', 'abcdabcd', 'deliveryman', 'abcd', 'abcd@gmail.com', 'Female', '2005-01-06', '3424234', 'frewfwe', '2023-04-05', 'profilepicture.png'),
(15, 'asifa', '12345678', 'deliveryman', 'asifa', 'asifs@gmai.com', 'Female', '2003-01-07', '12345678', 'feasfsaeefeaf', '2023-04-05', 'profilepicture.png'),
(16, 'asifae', '12121212', 'vendor', 'asifae', 'asifs@gmai.com', 'Other', '2003-01-07', '123456783', 'feasfsaeefeaf23d', '2023-04-05', 'profilepicture.png'),
(17, 'asifaea', '12121212', 'deliveryman', 'asifaea', 'asifs@gamai.com', 'Other', '2003-01-07', '1234567383', 'feasfsaeefeaf23ddwsd', '2023-04-05', 'profilepicture.png'),
(18, 'admint', '12345678', 'admin', 'taqdir', 't@gmail.com', 'Male', '2003-01-07', '12313232', 'edwqe', '2023-04-05', 'profilepicture.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;