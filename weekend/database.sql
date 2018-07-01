-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2018 at 03:18 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0
--
-- practice
--

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `weekend`
--

CREATE TABLE IF NOT EXISTS `weekend` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `weekend`
--

INSERT INTO `weekend` (`id`, `name`, `fname`, `mobileno`, `email`, `pass`, `dob`, `address`, `gender`, `photo`) VALUES
(2, 'harsh', 'santosh kumar agrawal', '8456321112', 'tanu1389agrawal@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-07-27', 'male', '7a mathura', 'Ashutosh Sirji 20171016_043246.jpg'),
(5, 'tanu_agrawal', 'santosh kumar agrawal', '', 'tanu1389agrawal@gmail.com', 'd81f9c1be2e08964bf9f24b15f0e4900', '2018-07-24', 'female', 'ff', 'Ashutosh Sirji 20171016_043246.jpg'),
(8, 'tanuagrawal', 'santosh kumar agrawal', '98765432', 'queenanky2204@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2018-07-27', 'female', '7a vishwa', 'Ashutosh Sirji 20171016_043246.jpg');
