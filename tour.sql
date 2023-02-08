-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2022 at 12:14 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tour`
--
CREATE DATABASE IF NOT EXISTS `tour` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `tour`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `u_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `u_email`, `password`) VALUES
('a1', 'angel786@gmail.com', 'toursT5%');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `cname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cemail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cont` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sub` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `msg` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cemail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cname`, `cemail`, `cont`, `sub`, `msg`) VALUES
('Angel', 'angel7865@gmail.com', '9431234234', 'Package info.', 'Please tell me more info about package of punjab!'),
('Sherlock', 'sherlock7865@gmail.com', '9231234234', 'Hotel Facility', 'I want to know that what all u provide services in booking hotels!');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `expierence` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `feedback_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `msg` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`contact_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`expierence`, `name`, `contact_no`, `feedback_type`, `msg`) VALUES
('Excellent', 'Rishi', '7234343212', 'comment', 'Very good facilities, I really appriciate your work and services.'),
('Good', 'Sherlock', '912345321', 'comment', ' Have Great time !'),
('average', 'Ruhi', '9123453212', 'comment', 'Good services');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `room_no` int(11) NOT NULL,
  `start_date` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `u_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`room_no`, `start_date`, `u_email`, `type`) VALUES
(2, '2021-05-20', 'krati@yahoo.com', '3200'),
(3, '2021-05-13', 'krati@yahoo.com', '2200'),
(3, '2021-05-20', 'krati@yahoo.com', '3200'),
(3, '2021-05-27', 'krati@yahoo.com', '1200'),
(3, '2021-05-27', 'krati@yahoo.com', '1200'),
(3, '2021-05-27', 'krati@yahoo.com', '3200'),
(3, '2021-05-27', 'krati@yahoo.com', '3200'),
(3, '2021-05-21', 'krati@yahoo.com', '2200'),
(2, '2021-05-27', 'krati@yahoo.com', '3200'),
(2, '2021-05-27', 'krati@yahoo.com', '3200'),
(3, '2021-05-27', 'krati@yahoo.com', '3200'),
(4, '2021-05-28', 'krati@yahoo.com', '3200'),
(4, '2021-05-28', 'krati@yahoo.com', '3200'),
(4, '2021-05-28', 'krati@yahoo.com', '1200'),
(4, '2021-05-26', 'krati@yahoo.com', '2200'),
(4, '2021-05-28', 'krati@yahoo.com', '2200'),
(4, '2022-01-14', 'krati@yahoo.com', '3200'),
(4, '2022-07-02', 'krati@yahoo.com', '3200');

-- --------------------------------------------------------

--
-- Table structure for table `make`
--

CREATE TABLE IF NOT EXISTS `make` (
  `p_code` int(11) NOT NULL,
  `u_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  KEY `fkeydey` (`u_email`),
  KEY `p_code` (`p_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `make`
--

INSERT INTO `make` (`p_code`, `u_email`) VALUES
(103, 'rishi786@gmail.com'),
(107, 'rishi786@gmail.com'),
(107, 'rishi786@gmail.com'),
(105, 'rishi786@gmail.com'),
(103, 'rishi786@gmail.com'),
(103, 'rishi786@gmail.com'),
(103, 'rishi786@gmail.com'),
(103, 'rishi786@gmail.com'),
(105, 'rishi786@gmail.com'),
(105, 'rishi786@gmail.com'),
(106, 'sherlock58@gmail.com'),
(215, 'rishi786@gmail.com'),
(215, 'rishi786@gmail.com'),
(215, 'rishi786@gmail.com'),
(215, 'rishi786@gmail.com'),
(172, 'rishi786@gmail.com'),
(141, 'shivin234@gmail.com'),
(151, 'sherlock558@gmail.com'),
(172, 'sherlock558@gmail.com'),
(172, 'sherlock558@gmail.com'),
(172, 'sherlock558@gmail.com'),
(200, 'sherlock558@gmail.com'),
(229, 'rishi786@gmail.com'),
(101, 'krati@yahoo.com'),
(101, 'krati@yahoo.com'),
(150, 'krati@yahoo.com'),
(150, 'krati@yahoo.com'),
(150, 'krati@yahoo.com'),
(152, 'krati@yahoo.com'),
(152, 'krati@yahoo.com'),
(152, 'krati@yahoo.com'),
(152, 'krati@yahoo.com'),
(152, 'krati@yahoo.com'),
(152, 'krati@yahoo.com'),
(152, 'krati@yahoo.com'),
(152, 'krati@yahoo.com'),
(152, 'krati@yahoo.com'),
(152, 'krati@yahoo.com'),
(102, 'krati@yahoo.com'),
(102, 'krati@yahoo.com'),
(101, 'krati@yahoo.com'),
(103, 'krati@yahoo.com'),
(103, 'krati@yahoo.com'),
(103, 'krati@yahoo.com'),
(101, 'krati@yahoo.com'),
(109, 'krati@yahoo.com'),
(213, 'krati@yahoo.com'),
(203, 'krati@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `p_code` int(30) NOT NULL,
  `pname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(20) NOT NULL,
  `duration` int(11) NOT NULL,
  PRIMARY KEY (`p_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`p_code`, `pname`, `state`, `price`, `duration`) VALUES
(101, 'Munshi Ghat', 'Uttar Pradesh', 3500, 2),
(102, 'Tso Moriri', 'Ladakh', 4000, 3),
(103, 'Golden Temple', 'Punjab', 2000, 1),
(104, 'Elephanta Caves', 'Maharastra', 3000, 1),
(105, 'Mysore Palace', 'Karnataka', 3500, 2),
(106, 'Brihadeeswarar Temple', 'Tamil Nadukh', 2000, 1),
(107, 'Khajuraho templ', 'Madhya Pradesh', 3000, 2),
(108, 'Kailasa Temple', 'Madhya Pradesh', 2000, 1),
(109, 'Dudhwa National Park', 'Uttar Pradesh', 3000, 2),
(110, 'Katarniaghat Wildlife', 'Uttar Pradesh', 2500, 2),
(111, 'Agra', 'Uttar Pradesh', 3500, 2),
(112, 'Sarnath', 'Uttar Pradesh', 2500, 2),
(113, 'Jhansi', 'Uttar Pradesh', 4000, 2),
(114, 'Vanaras-Prayagraj', 'Uttar Pradesh', 5000, 4),
(115, 'Agra', 'Uttar Pradesh', 4000, 2),
(116, 'Mathura-Vrindavan', 'Uttar Pradesh', 4500, 4),
(117, 'Ayodya', 'Uttar Pradesh', 4500, 3),
(118, 'Full Up Tour', 'Uttar Pradesh', 4000, 3),
(119, 'Bandhavgarh National Park', 'Madhya Pradesh', 3500, 2),
(120, 'Kanha National Park', 'Madhya Pradesh', 3500, 2),
(121, 'All Forts Together', 'Madhya Pradesh', 6000, 5),
(122, 'Bandhavgarh Fort', 'Madhya Pradesh', 4000, 2),
(123, 'Gwalior Fort', 'Madhya Pradesh', 4000, 2),
(124, 'Gwalior Palaces', 'Madhya Pradesh', 5500, 4),
(125, 'Orchha Palaces', 'Madhya Pradesh', 5500, 4),
(126, 'Omkareshwar-Mamaleshwar Temple', 'Madhya Pradesh', 2500, 2),
(127, 'Mahakal-Kal Bhairav-Harsiddhi ', 'Madhya Pradesh', 4000, 3),
(128, 'Raja Ram Temple', 'Madhya Pradesh', 2500, 1),
(129, 'Orchha-Bhopal Tour', 'Madhya Pradesh', 4500, 4),
(130, 'Indore-Bhopal Tour', 'Madhya Pradesh', 4500, 4),
(131, 'Gwalior', 'Madhya Pradesh', 3500, 2),
(132, 'Whole Mp Tour', 'Madhya Pradesh', 7500, 7),
(133, 'Golden Temple', 'Punjab', 2500, 2),
(134, 'Tara Taran Sahib', 'Punjab', 2500, 2),
(135, 'Anandpur Sahib', 'Punjab', 2500, 2),
(136, 'Punjab Tour', 'Punjab', 6500, 5),
(137, 'Amritsar', 'Punjab', 4000, 3),
(138, 'Jalandhar', 'Punjab', 3500, 2),
(139, 'Great Himalayan National Park', 'Himanchal Pradesh', 3500, 2),
(140, 'Pin Valley National Park', 'Himanchal Pradesh', 3500, 2),
(141, 'Renuka Wildlife Santuary', 'Himanchal Pradesh', 3500, 2),
(142, 'Hidimba Devi', 'Himanchal Pradesh', 1500, 1),
(143, 'Temples of all Goddess', 'Himanchal Pradesh', 4500, 5),
(144, 'Lakshmi-Narayan Temple', 'Himanchal Pradesh', 1500, 2),
(145, 'Kullu-Manali Tour', 'Himanchal Pradesh', 3500, 3),
(146, 'Shimla', 'Himanchal Pradesh', 3000, 3),
(147, 'Himanchal-A Golden Tour', 'Himanchal Pradesh', 6500, 5),
(148, 'Bandipur National Park', 'Karnataka', 3000, 2),
(149, 'Dandeli Wildlife', 'Karnataka', 2500, 2),
(150, 'Bhadra Wildlife', 'Karnataka', 3000, 2),
(151, 'Chitradurg Fort', 'Karnataka', 3000, 2),
(152, 'Mysore Palace', 'Karnataka', 4500, 2),
(153, 'LakshmiDevi Temple', 'Karnataka', 2000, 2),
(154, 'Brahmeshvara Temple', 'Karnataka', 2000, 2),
(155, 'Lakshmi Narayan Temple', 'Karnataka', 2200, 2),
(156, 'Karnataka Tour', 'Karnataka', 8000, 6),
(157, 'Bangalore', 'Karnataka', 6500, 3),
(158, 'Chikmagalur', 'Karnataka', 5500, 3),
(159, 'Mysore', 'Karnataka', 5500, 3),
(160, 'Periyar Wildlife Santuary', 'Kerala', 3500, 2),
(161, 'Neyyar Wildlife Santuary', 'Kerala', 3500, 2),
(162, 'All Forts Together', 'Kerala', 5000, 3),
(163, 'Bekal Fort', 'Kerala', 4000, 2),
(164, 'Palakkad Fort', 'Kerala', 4000, 2),
(165, 'All temples Together', 'Kerala', 6500, 5),
(166, 'Sabrimala Lord Ayyappa Temple', 'Kerala', 2000, 2),
(167, 'Guruvayoor', 'Kerala', 2000, 2),
(168, 'Sri Padmanabhaswamy Temple', 'Kerala', 2500, 2),
(169, 'Munnar', 'Kerala', 4500, 3),
(170, 'Kochi', 'Kerala', 4500, 3),
(171, 'Whole Kerala Tour', 'Kerala', 7500, 6),
(172, 'Mudumalai Santuary', 'Tamil Nadu', 3000, 2),
(173, 'Vallanadu Santuary', 'Tamil Nadu', 3000, 2),
(174, 'Viralimalai Santuary', 'Tamil Nadu', 3000, 2),
(175, 'Murugan Temple', 'Tamil Nadu', 2500, 2),
(176, 'Meenakshi Temple', 'Tamil Nadu', 2500, 2),
(177, 'Rameshwaram Temple', 'Tamil Nadu', 2500, 5),
(178, 'Madurai', 'Tamil Nadu', 4500, 3),
(179, 'Kanyakumari', 'Tamil Nadu', 4000, 3),
(180, 'Chennai', 'Tamil Nadu', 4000, 3),
(181, 'Tamil Nadu-Full Tour', 'Tamil Nadu', 7500, 7),
(182, 'Kaziranga National Park', 'Assam', 4000, 2),
(183, 'Chakrashila Wildlife Sanctuary', 'Assam', 4000, 2),
(184, 'Kamakhya Temple', 'Assam', 3000, 2),
(185, 'Nabagraha Temple', 'Assam', 3000, 2),
(186, 'Basisthashram', 'Assam', 3000, 2),
(187, 'Assam Tour', 'Assam', 6000, 5),
(188, 'Guwahati', 'Assam', 5500, 3),
(189, 'Dibang Wildlife Sanctuary', 'Arunanchal Pradesh', 3000, 2),
(190, 'Kamlang Wildlife Sanctuary', 'Arunanchal Pradesh', 3000, 2),
(191, 'Pakke Tiger Reserve', 'Arunanchal Pradesh', 3000, 2),
(192, 'Jaswant Garh', 'Arunanchal Pradesh', 3000, 2),
(193, 'Tawang War Memorial', 'Arunanchal Pradesh', 3500, 2),
(194, 'Parashuram Kund', 'Arunanchal Pradesh', 3000, 2),
(195, 'Akashiganga Temple', 'Arunanchal Pradesh', 3000, 2),
(196, 'Kalachakra Gompa', 'Arunanchal Pradesh', 3000, 2),
(197, 'Itanagar', 'Arunanchal Pradesh', 4500, 3),
(198, 'Dirang', 'Arunanchal Pradesh', 4500, 3),
(199, 'Whole Arunanchal Tour', 'Arunanchal Pradesh', 7500, 6),
(200, 'Raiganj Bird Sanctuary', 'West Bengal', 2500, 2),
(201, 'Chapramari Wildlife forest', 'West Bengal', 3000, 2),
(202, 'Mahananda Wildlife Sanctuary', 'West Bengal', 3000, 2),
(203, 'Kurumbera Fort', 'West Bengal', 3000, 2),
(204, 'Buxa Fort', 'West Bengal', 3500, 2),
(205, 'Fort William', 'West Bengal', 2500, 2),
(206, 'Dakshineshwar Kali Temple', 'West Bengal', 2000, 2),
(207, 'Iskon Temple', 'West Bengal', 3000, 2),
(208, 'Kalighat Kali Temple', 'West Bengal', 3000, 2),
(209, 'Kolkata', 'West Bengal', 5500, 3),
(210, 'Darjeeling', 'West Bengal', 5500, 3),
(211, 'Hooghly', 'West Bengal', 4500, 3),
(212, 'Whole Bengal Tour', 'West Bengal', 7500, 6),
(213, 'Ranthambore National Park', 'Rajasthan', 4000, 2),
(214, 'Mount Abu Wildlife Santuary', 'Rajasthan', 4500, 2),
(215, 'Nahargarh Wildlife Sanctuary', 'Rajasthan', 3000, 2),
(216, 'Jaigarh Fort', 'Rajasthan', 4000, 2),
(217, 'Amber Fort', 'Rajasthan', 4000, 2),
(218, 'Bhangarh Fort', 'Rajasthan', 4000, 2),
(219, 'Karni Ma Temple', 'Rajasthan', 2500, 2),
(220, 'Brahma Temple', 'Rajasthan', 2500, 2),
(221, 'Ambika Mata Temple', 'Rajasthan', 2500, 2),
(222, 'Rajasthan Tour', 'Rajasthan', 8000, 8),
(223, 'Jaipur', 'Rajasthan', 5500, 3),
(224, 'Jaisalmer', 'Rajasthan', 5500, 3),
(225, 'Udaipur', 'Rajasthan', 5500, 3),
(226, 'Gir National Park', 'Gujarat', 4000, 2),
(227, 'Shoolpaneshwar Wildlife Sanctu', 'Gujarat', 4000, 2),
(228, 'All Forts Together', 'Gujarat', 6000, 5),
(229, 'Uparkot Fort', 'Gujarat', 3500, 2),
(230, 'Taranga Fort', 'Gujarat', 3500, 2),
(231, 'All temples Together', 'Gujarat', 6500, 6),
(232, 'Shree Somnath Jyotirlinga Temp', 'Gujarat', 4000, 2),
(233, 'Mahakali Mata Mandir', 'Gujarat', 3000, 2),
(234, 'Dwarkadhish Temple', 'Gujarat', 3000, 2),
(235, 'Surat', 'Gujarat', 4500, 3),
(236, 'Ahmedabad', 'Gujarat', 4500, 3),
(237, 'Whole Gujarat Tour', 'Gujarat', 7500, 6);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `p_amt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `exp_date` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `card_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ctype` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `u_email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pid`),
  KEY `fkeyd` (`u_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=61 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `p_amt`, `exp_date`, `card_no`, `ctype`, `u_email`) VALUES
(34, '9000', '2021-05-27', '324', 'Credit', 'krati@yahoo.com'),
(35, '9000', '2021-05-27', '324', 'Credit', 'krati@yahoo.com'),
(36, '9000', '2021-05-30', '324', 'Credit', 'krati@yahoo.com'),
(37, '9000', '2021-05-30', '324', 'Credit', 'krati@yahoo.com'),
(38, '9000', '2021-05-22', '324', 'Debit', 'krati@yahoo.com'),
(39, '9000', '2021-05-30', '123', 'Debit', 'krati@yahoo.com'),
(40, '9000', '2021-05-30', '123', 'Debit', 'krati@yahoo.com'),
(41, '9000', '2021-05-16', '324', 'Debit', 'krati@yahoo.com'),
(42, '9000', '2021-05-16', '324', 'Debit', 'krati@yahoo.com'),
(43, '9000', '2021-05-16', '324', 'Debit', 'krati@yahoo.com'),
(44, '9000', '2021-05-16', '324', 'Debit', 'krati@yahoo.com'),
(45, '9000', '2021-05-29', '896', 'Credit', 'krati@yahoo.com'),
(46, '9000', '2021-05-30', '324', 'Credit', 'krati@yahoo.com'),
(47, '9000', '2021-05-30', '123', 'Credit', 'krati@yahoo.com'),
(48, '9000', '2021-05-21', '324', 'Credit', 'krati@yahoo.com'),
(49, '9000', '2021-05-21', '324', 'Credit', 'krati@yahoo.com'),
(50, '9000', '2021-05-23', '324', 'Credit', 'krati@yahoo.com'),
(51, '9000', '2021-05-28', '324', 'Credit', 'krati@yahoo.com'),
(52, '9000', '2021-05-28', '324', 'Credit', 'krati@yahoo.com'),
(53, '9000', '2021-05-28', '324', 'Credit', 'krati@yahoo.com'),
(54, '9000', '2021-05-28', '324', 'Credit', 'krati@yahoo.com'),
(55, '9000', '2021-05-28', '324', 'Credit', 'krati@yahoo.com'),
(56, '9000', '2021-05-28', '324', 'Credit', 'krati@yahoo.com'),
(57, '19300', '2021-05-29', '324', 'Credit', 'krati@yahoo.com'),
(58, '29800', '2021-05-28', '324 567 879', 'Debit', 'krati@yahoo.com'),
(59, '32800', '2022-01-30', '324', 'Debit', 'krati@yahoo.com'),
(60, '33800', '2022-07-03', '324', 'Debit', 'krati@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `upwd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `u_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'customer',
  `u_contact_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`u_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `upwd`, `u_email`, `gender`, `role`, `u_contact_no`) VALUES
('Angel', 'toursT5%', 'angel786@gmail.com', 'Female', 'admin', '9564321234'),
('Gargi garg', 'Gargi@123', 'gargi@yahoo.com', 'Female', 'admin', '8978976754'),
('Krati Singh', 'Krati@123', 'krati@yahoo.com', 'Female', 'customer', '9876789567'),
('Rishi', 'Aqqqqq1!', 'rishi786@gmail.com', 'Male', 'customer', '9123456734'),
('Sherlock', 'Asssss2@', 'sherlock558@gmail.com', 'Male', 'customer', '9123423541');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `make`
--
ALTER TABLE `make`
  ADD CONSTRAINT `make_ibfk_1` FOREIGN KEY (`p_code`) REFERENCES `package` (`p_code`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fkeyd` FOREIGN KEY (`u_email`) REFERENCES `users` (`u_email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
