-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2020 at 12:03 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `wer4you`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_name` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `password`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `ClientID` int(11) NOT NULL AUTO_INCREMENT,
  `ClientName` varchar(150) DEFAULT NULL,
  `CompanyName` varchar(150) DEFAULT NULL,
  `StartDate` datetime DEFAULT NULL,
  `EndDate` datetime DEFAULT NULL,
  `DailyAllowedEmails` int(11) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `emailId` varchar(150) DEFAULT NULL,
  `Password` varchar(150) DEFAULT NULL,
  `ContactNo` int(11) DEFAULT NULL,
  `AuthenticationKey` varchar(150) DEFAULT NULL,
  `DailyAllowedSms` int(11) DEFAULT NULL,
  `TotalEmailLimit` int(11) DEFAULT NULL,
  `TotalSmsLimit` int(11) DEFAULT NULL,
  `SendByEmailId` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`ClientID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ClientID`, `ClientName`, `CompanyName`, `StartDate`, `EndDate`, `DailyAllowedEmails`, `isActive`, `emailId`, `Password`, `ContactNo`, `AuthenticationKey`, `DailyAllowedSms`, `TotalEmailLimit`, `TotalSmsLimit`, `SendByEmailId`) VALUES
(1, 'Mahindra', 'Mahindra', '2020-12-15 13:59:00', '2021-04-24 00:00:00', 20, 1, 'Mahindra@Mahindra.com', 'we@pune', 1234567890, '123456', 50, 20, 20, 'info@midcdirectory.org'),
(3, 'Satish Bachal', 'Assent', '2020-12-15 14:05:00', '2020-11-15 00:00:00', 100, 0, 'sales@midcdirectory.org', '12345', 654321, '654321', 20, 20, 20, 'info@midcdirectory.org');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `SR` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) NOT NULL,
  `Service` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNo` int(10) NOT NULL,
  `State` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `Message` varchar(600) NOT NULL,
  PRIMARY KEY (`SR`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`SR`, `Name`, `Service`, `Email`, `PhoneNo`, `State`, `District`, `Message`) VALUES
(1, 'pankaj sable', 'automation', 'sp@gmail.com', 2010935709, 'maharastra', 'pune', 'hey this is pankaj sable....');

-- --------------------------------------------------------

--
-- Table structure for table `salesexecutive`
--

CREATE TABLE IF NOT EXISTS `salesexecutive` (
  `sr_no` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `city` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`sr_no`,`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `salesexecutive`
--

INSERT INTO `salesexecutive` (`sr_no`, `name`, `email`, `mobile`, `city`, `password`) VALUES
(6, 'akshay', 'akki@gmail.com', '9075390103', 'sangamner', '12345'),
(5, 'pankaj', 'sp@gmail.com', '9075390102', 'pune', '12345'),
(7, 'saurabh', 'smile@gmail.com', '8785421533', 'pune', '12345');
