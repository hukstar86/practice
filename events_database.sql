-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2015 at 01:35 a.m.
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `events_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `caltbl`
--

CREATE TABLE IF NOT EXISTS `caltbl` (
  `calID` int(11) NOT NULL AUTO_INCREMENT,
  `calName` varchar(65) NOT NULL,
  `calDesc` text NOT NULL,
  `calDate` varchar(11) NOT NULL,
  `calStamp` datetime NOT NULL,
  PRIMARY KEY (`calID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `caltbl`
--

INSERT INTO `caltbl` (`calID`, `calName`, `calDesc`, `calDate`, `calStamp`) VALUES
(1, 'PHP-MySQL Assignment Due Date', 'Due date for PHP-MySQL Assignment.\r\nWebsite has to be demonstrated to tutor.\r\nThe submission of the website to WWW is required. ', '7/2/2015', '2015-06-11 11:43:13'),
(2, 'Start of ASP.NET  ', 'We are starting ASP.NET with C#.\r\nVisual Studio 2012 will be used for the IDE.', '7/27/2015', '2015-06-11 11:58:14');
