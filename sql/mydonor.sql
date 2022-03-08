-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 08, 2022 at 06:22 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydonor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `date`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2022-03-02 09:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
CREATE TABLE IF NOT EXISTS `donor` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Contact_no` varchar(200) NOT NULL,
  `Blood_group` varchar(300) NOT NULL,
  `Street` varchar(400) NOT NULL,
  `District` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `Name`, `Email`, `Password`, `Contact_no`, `Blood_group`, `Street`, `District`, `image`, `date`) VALUES
(115, 'junaid', 'junaid4543@gmail.com', 'c2125c4e51cf50bea98fb34fe953eba1', '8765432987', 'O-', 'america', 'a', 'img/621218e3895ecd02175e35157fcfb233-1.jpg', '2022-03-07 14:30:27'),
(109, 'ameera', 'ameerameeran123@gmail.com', '37f91c47dd4f1ae38ad01168e47825ef', '23454678', 'A-', 'china', 'china', '', '2022-02-21 14:29:26'),
(116, 'ashly', 'ewrthfg@gmail.com', '71f1d0b41155a2ab71ffd204068557d5', '0987654443', 'A-', 'america', 'china', '', '2022-03-07 14:31:55'),
(106, 'ashjas', 'ameerameeran123@gmail.com', '4c93af18600bc3a2d61aef246311b258', '87654321', 'A+', 'guruvayoor', 'thrissur', '', '2022-02-21 11:32:00'),
(111, 'ajas', 'ashly1233@gmail.com', 'ea4eb9dfb1b8ac2a985229f6db7ef5cd', '54454656', 'A-', 'banglore', 'banglore', '', '2022-02-21 14:44:22'),
(112, 'ameera', 'ameerameeran123@gmail.com', 'cb50519f37f9ed6293b3d648781e658c', '9983457890', 'A+', 'thrissur', 'thrissur', 'img/3a5e23302e99b9e56120d8eb3f8d5e92-1.jpg', '2022-02-24 14:40:28'),
(113, 'kiran', 'kiran34@gmail.com', 'c9101773fe5fe3ec4aae902b9d09e680', '98765443', 'A+', 'ernakulam', 'ernakulam', 'img/23c8d1ec5eddcf7e7d831a7ce440f4f9.jpg', '2022-02-25 07:10:15'),
(114, 'arif', 'arif23@gmail.com', 'ecab8f3fef93c06582df3049f8937c08', '98765443', 'O-', 'ernakulam', 'ernakulam', 'img/cb315b6cbebd259e1dbef799d571d0a4-1.jpg', '2022-02-28 15:15:04'),
(125, 'ashly', 'ewrthfg@gmail.com', '71f1d0b41155a2ab71ffd204068557d5', '0987654443', 'A-', 'america', 'china', '', '2022-03-07 14:34:18'),
(130, 'rahul', 'rahul345678@gmail.com', '055b0110fa5aabcd40e4d4c6b24fc399', '9876543287', 'AB+', 'kochi', 'ernakulam', '', '2022-03-07 14:47:24'),
(129, 'argun', 'argun456@gmail.com', '09a135f6cdd207dc38e024d07fb74138', '9876543289', 'O-', 'china', 'china', '', '2022-03-07 14:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(400) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact_no` varchar(200) NOT NULL,
  `blood_group` varchar(300) NOT NULL,
  `street` varchar(400) NOT NULL,
  `district` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `email`, `password`, `contact_no`, `blood_group`, `street`, `district`, `date`) VALUES
(67, 'ashjas', 'ashly1233@gmail.com', '8480318b253555b5c97cc4b138415395', '23454678', 'B+', 'kozhikode', 'kozhikode', '2022-02-18 11:07:57'),
(69, 'ashjas', 'ashly1233@gmail.com', 'c6c5306a08383dd740b251da632d0653', '52345678', 'A+', 'china', 'china', '2022-02-18 12:31:58'),
(62, 'ameera', 'ameerameeran123@gmail.com', '1b15ebdbb483c17fbf73e994a5de8fbe', '54454656', 'B+', 'america', 'america', '2022-02-18 10:53:58'),
(60, 'Robert Fox', 'robert6789@gmail.com', 'bcb759b5b8ab63b06295c7434345d7a5', '+91 95425 55632', 'A+', 'china', 'china', '2022-02-16 10:21:36'),
(46, 'ashjaserfq', 'dwqa@gmai;.com', '69011c83eb5035ea42a4e4c4749b623f', '0987654443', 'AB+', 'chennai', 'thrissur', '2022-01-25 07:04:44'),
(73, 'arif', 'arif4567@gmail.com', '781440091ca7009e249d9733b95e55e6', '8765430987', 'AB+', 'america', 'america', '2022-03-07 14:25:02'),
(63, 'ashjas', 'ahjadgyu@gmail.com', 'fdf0b1cc00481a24784aef7524b7194e', '86453423', 'AB+', 'banglore', 'banglore', '2022-02-18 10:55:21'),
(65, 'john', 'john543@gmail.com', '7dd15fa842dfebcc575c4174b2a50021', '87654321', 'A+', 'kozhikode', 'kozhikode', '2022-02-18 11:00:50'),
(71, 'ashjas', 'ahjadgyu@gmail.com', '636ac2ad59a81f7aa96143f9a85ec28b', '86453423', 'B+', 'kozhikode', 'kozhikode', '2022-02-21 14:37:05'),
(72, 'ashir', 'ashir32@gmail.com', '07589890c5dd4adf017fe65cdcb56b3e', '87654321', 'A+', 'malapuram', 'malapuram', '2022-03-02 14:55:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
