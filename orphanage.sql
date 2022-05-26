-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 12, 2022 at 02:37 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orphanage`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `city_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`city_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `state_id`, `city_name`, `city_status`) VALUES
(16, 9, 'Mehsana', 0),
(15, 10, 'lonavala', 0),
(14, 10, 'pune', 1),
(13, 10, 'MUMBAI', 0),
(12, 9, 'vadodra', 1),
(10, 9, 'Surat', 0),
(11, 9, 'Ahemdabad', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orp_about`
--

DROP TABLE IF EXISTS `orp_about`;
CREATE TABLE IF NOT EXISTS `orp_about` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `orp_id` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`about_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orp_about`
--

INSERT INTO `orp_about` (`about_id`, `orp_id`, `description`, `status`) VALUES
(4, 14, '<p ><span >If a child has no parents because the parents died or lost custody  the child is considered an orphan. Orphans are parentless If a child has no parents because the parents died or lost custody  </span></p>', 0),
(21, 14, '<p>hvvvhvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv</p>', 1),
(20, 14, '<p ><span >If a child has no parents because the parents died or lost custody  the child is considered an orphan. Orphans are parentless If a child has no parents because the parents died or lost custody  </span></p>', 1),
(17, 14, '<p ><span >If a child has no parents because the parents died or lost custody  the child is considered an orphan. Orphans are parentless If a child has no parents because the parents died or lost custody<p ><span >If a child has no parents ', 1),
(18, 14, '<p ><span >If a child has no parents because the parents died or lost custody  the child is considered an orphan. Orphans are parentlessIf a child has no parents because the parents died or lost custody  the child is considered an  </span></p>', 1),
(19, 15, '<p>Here Enter orphan detailk</p>', 1),
(15, 14, '<p ><span >If a child has no parents because the parents died or lost custody  the child is considered an orphan. Orphans are parentless. .</span></p>', 1),
(16, 14, '<p ><span >If a child has no parents because the parents died or lost custody  the child is considered an orphan. Orphans are parentless. .</span></p>', 1),
(22, 14, '<p>hghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>', 1),
(23, 14, '<p>fgggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orp_img`
--

DROP TABLE IF EXISTS `orp_img`;
CREATE TABLE IF NOT EXISTS `orp_img` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `orp_id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orp_img`
--

INSERT INTO `orp_img` (`img_id`, `orp_id`, `img_name`, `status`) VALUES
(30, 16, '165026709210.jpg', 0),
(29, 14, '16502670139.jpg', 0),
(25, 14, '16502669876.jpg', 0),
(26, 14, '16502669932.jpg', 0),
(27, 14, '16502669987.jpg', 0),
(28, 14, '16502670049.jfif', 0),
(24, 14, '16502669835.jpg', 0),
(23, 14, '16502669784.jpg', 0),
(21, 14, '16502669068.jpg', 0),
(19, 14, '16502662197.jpg', 1),
(17, 14, '16502662115.jpg', 1),
(14, 14, '16502661802.jpg', 1),
(15, 14, '16502661923.jpg', 1),
(22, 14, '16502669613.jpg', 0),
(20, 14, '16502667962.jpg', 1),
(18, 14, '16502662156.jpg', 1),
(16, 14, '16502662064.jpg', 1),
(13, 14, '16502661641.jpg', 1),
(31, 16, '165026709811.jpg', 0),
(32, 16, '165026710312.jpg', 0),
(33, 15, '165026715913.jfif', 0),
(34, 15, '165026716815.jpg', 0),
(35, 18, '165026721916.jpg', 0),
(36, 18, '165026722617.jpeg', 0),
(37, 17, '165026726918.jfif', 0),
(38, 17, '165026727519.jpg', 0),
(39, 17, '165026728620.jpg', 0),
(40, 22, '16502673451.jpg', 0),
(41, 22, '16502673492.jpg', 0),
(42, 22, '16502673533.jpg', 0),
(43, 22, '16502673564.jpg', 0),
(44, 22, '16502673615.jpg', 0),
(45, 22, '16502673656.jpg', 0),
(46, 22, '16502673697.jpg', 0),
(47, 22, '16502673728.jpg', 0),
(48, 22, '16502673779.jfif', 0),
(49, 22, '165026738210.jpg', 0),
(50, 21, '165026742511.jpg', 0),
(51, 21, '165026743012.jpg', 0),
(52, 21, '165026743513.jfif', 0),
(53, 21, '165026744015.jpg', 0),
(54, 21, '165026744516.jpg', 0),
(55, 21, '165026745018.jfif', 0),
(56, 20, '165026750319.jpg', 0),
(57, 20, '165026750720.jpg', 0),
(58, 20, '16502675111.jpg', 0),
(59, 20, '16502675152.jpg', 0),
(60, 20, '16502675253.jpg', 0),
(61, 19, '16502675589.jfif', 0),
(62, 19, '165026756210.jpg', 0),
(63, 19, '165026756518.jfif', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orp_register`
--

DROP TABLE IF EXISTS `orp_register`;
CREATE TABLE IF NOT EXISTS `orp_register` (
  `orp_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `orp_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `bank_holder` varchar(255) NOT NULL DEFAULT '0',
  `ifsc_no` varchar(255) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`orp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orp_register`
--

INSERT INTO `orp_register` (`orp_id`, `fname`, `lname`, `email`, `password`, `orp_name`, `gender`, `state`, `city`, `address`, `phone_no`, `document`, `profile`, `bank_holder`, `ifsc_no`, `status`) VALUES
(22, 'rohit', 'charan', 'rc225@gmail.com', 'smit@123', 'Rc Bal ashram', 'Male', 'Gujrat', 'Surat', 'dabholi char rasta', '7984039044', '1650258724Practical 8.pdf', '1650258724g.jfif', '0', '0', 0),
(21, 'vidhya', 'ahuja', 'vidhya607@gmail.com', 'smit@123', 'Shree Sai ', 'Female', 'Gujrat', 'Ahemdabad', 'B-13,SWAMINARAYAN NAGAR-2', '7984039044', '1650258579Practical 8.pdf', '1650258579olbios-768x512-1.jpg', '0', '0', 0),
(20, 'vishal', 'vasoya', 'vishalv768@gmail.com', 'smit@123', 'Ananya', 'Male', 'maharastra', 'lonavala', 'dabholi char rasta', '7984039044', '1650258466Practical 8.pdf', '1650258466f.jfif', '0', '0', 1),
(19, 'priya', 'patel', 'piya1221@gmail.com', 'smit@123', 'Navjivan Trust', 'Female', 'maharastra', 'lonavala', 'dabholi char rasta\r\nàª¡àª­à«‹àª²à«€ àªšàª¾àª° àª°àª¸à«àª¤àª¾', '7984039044', '1650258236Practical 8.pdf', '16502582363655806653_1106.jpg', '0', '0', 1),
(18, 'rushit', 'kalathiya', 'rushitkalathiya256@gmail.com', 'smit@123', 'vishwas trust', 'Male', 'Gujrat', 'Ahemdabad', 'dabholi char rasta\r\nàª¡àª­à«‹àª²à«€ àªšàª¾àª° àª°àª¸à«àª¤àª¾', '7984039044', '1650258074Practical 8.pdf', '165025807402.jpg', '0', '0', 2),
(17, 'jay', 'vaghasia', 'jayhvagh1510@gmail.com', 'smit@123', 'jv trust', 'Male', 'maharastra', 'MUMBAI', 'dabholi char rasta\r\nàª¡àª­à«‹àª²à«€ àªšàª¾àª° àª°àª¸à«àª¤àª¾', '7984039044\r\n', '1650257945Practical 8.pdf', '1650257945rasilo-cocktail-bar-restaurant.jpg', '0', '0', 1),
(16, 'urvil', 'kargathala', 'kurvil2002@gmail.com', 'smit@123', 'Nevil Trust', 'Male', 'Gujrat', 'Surat', 'dabholi char rasta\r\nàª¡àª­à«‹àª²à«€ àªšàª¾àª° àª°àª¸à«àª¤àª¾', '7984039044', '1650257749Practical 8.pdf', '1650257749group-photo.jpg', '0', '0', 1),
(15, 'smit', 'chaklashiya', 'smitchaklashiya2323@gmail.com', 'smit@123', 'Aspire Trust', 'Male', 'maharastra', 'MUMBAI', 'dabholi char rasta\r\nàª¡àª­à«‹àª²à«€ àªšàª¾àª° àª°àª¸à«àª¤àª¾', '7984039044', '1650257535Practical 8.pdf', '1650257535team.jpg', '0', '0', 1),
(14, 'smit', 'Patel', 'smithpatelk5@gmail.com', 'smit@123', 'Mahadev Trust', 'Male', 'Gujrat', 'Surat', 'B-13,SWAMINARAYAN NAGAR-2', '7984039078', '1650252546Practical 8.pdf', '1650252546P6200340.jpg', 'het rajeshbhai singala', '12333333333', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'smit', '123', 'smitchaklashiya1707@gmail.com', '123'),
(14, 'smit', 'chaklashiya', 'smitchaklashiya2323@gmail.com', 'Smit@123');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `s_img1` varchar(255) NOT NULL,
  `status` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sid`, `s_img1`, `status`) VALUES
(1, '1649924443john-thomas-LtE6W_JVTGc-unsplash-scaled.jpg', 1),
(2, '1649924443john-thomas-LtE6W_JVTGc-unsplash-scaled.jpg', 1),
(3, '1649924443john-thomas-LtE6W_JVTGc-unsplash-scaled.jpg', 1),
(4, '1649924443john-thomas-LtE6W_JVTGc-unsplash-scaled.jpg', 1),
(5, '1649924443john-thomas-LtE6W_JVTGc-unsplash-scaled.jpg', 1),
(6, '1649924443john-thomas-LtE6W_JVTGc-unsplash-scaled.jpg', 1),
(7, '1649930481john-thomas-LtE6W_JVTGc-unsplash-scaled.jpg', 1),
(8, '16502676661.jpg', 1),
(9, '16502676742.jpg', 1),
(10, '1650267783shutterstock_1180465816-830x553.jpg', 0),
(11, '1650267792orphanage-Group-photo-1200-1024x598.jpg', 0),
(12, '1650267802202011191513539600_Arun-Vijay-spends-quality-time-with-kids-at-an-orphanage-on_SECVPF.jpg', 0),
(13, '16502982061.jpg', 0),
(14, '1650298740202011191513539600_Arun-Vijay-spends-quality-time-with-kids-at-an-orphanage-on_SECVPF.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_name` varchar(255) NOT NULL,
  `st_status` varchar(255) NOT NULL DEFAULT '0',
  UNIQUE KEY `st_id` (`st_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`st_id`, `st_name`, `st_status`) VALUES
(11, 'uttarakhand', '0'),
(10, 'maharastra', '0'),
(9, 'Gujrat', '0');

-- --------------------------------------------------------

--
-- Table structure for table `trans_history`
--

DROP TABLE IF EXISTS `trans_history`;
CREATE TABLE IF NOT EXISTS `trans_history` (
  `trans_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `orp_name` varchar(255) NOT NULL,
  `ifsc_no` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`trans_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_history`
--

INSERT INTO `trans_history` (`trans_id`, `user_id`, `name`, `email`, `address`, `orp_name`, `ifsc_no`, `amount`, `date`) VALUES
(42, 37, 'shree swaminarayan nagar-2', 'parthdhameliya2109@gmail.com', 'dabholi char rasta', 'Mahadev Trust', '12333333333', 100000, '10/05/2022'),
(41, 37, 'shree swaminarayan nagar-2', 'parthdhameliy2109@gmail.com', 'dabholi char rasta', 'Mahadev Trust', '12333333333', 100000, '10/05/2022'),
(40, 37, 'shree swaminarayan nagar-2', 'smitchaklashiya2323@gmail.com', 'dabholi char rasta', 'Mahadev Trust', '12333333333', 123, '10/05/2022');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

DROP TABLE IF EXISTS `user_reg`;
CREATE TABLE IF NOT EXISTS `user_reg` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`user_id`, `user_name`, `user_email`, `user_pass`) VALUES
(37, 'smit Chaklashiya', 'smitchaklashiya2323@gmail.com', 'smit@123'),
(35, 'user 1', 'Playerid77@Gmail.Com', '123'),
(34, 'smit patel', 'smithpatelk5@gmail.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
