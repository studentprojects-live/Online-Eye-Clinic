-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2013 at 06:10 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `optomate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `branch_id` int(10) NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `login_id` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `lastlogin` datetime NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `branch_id`, `admin_name`, `login_id`, `password`, `email_id`, `lastlogin`) VALUES
(1, 1, 'Vaibhav Nayak', 'optomate', '123', 'vaibhava.nayak@gmail.com', '2013-03-19 09:32:12'),
(2, 2, 'Sanketh', 'optocenter', 'kamath', 'mnrkamath@gmail.com', '0000-00-00 00:00:00'),
(3, 1, 'Vaibhav', 'optomateb', '123', 'optimist.nayak@gmail.coma', '0000-00-00 00:00:00'),
(6, 2, 'abcd', 'abcd', '', 'abc@gmsil.com', '0000-00-00 00:00:00'),
(7, 2, 'afs', 'fsf', '123456789', 'sfsf@gmail.com', '0000-00-00 00:00:00'),
(8, 1, 'mahesh', 'kumar', '123456', 'mahesh@gmail.om', '2013-03-18 07:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `app_id` int(10) NOT NULL AUTO_INCREMENT,
  `branch_id` int(10) NOT NULL,
  `pat_id` int(10) NOT NULL,
  `doc_id` int(10) NOT NULL,
  `app_date` date NOT NULL,
  `app_time` time NOT NULL,
  `created_at` datetime NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `branch_id`, `pat_id`, `doc_id`, `app_date`, `app_time`, `created_at`, `status`) VALUES
(2, 1, 15, 3, '2013-02-11', '06:15:00', '0000-00-00 00:00:00', 'Done\r\n'),
(3, 1, 17, 3, '2013-02-11', '06:15:00', '0000-00-00 00:00:00', 'pending'),
(4, 2, 20, 3, '2013-02-11', '06:15:00', '0000-00-00 00:00:00', 'Done\r\n'),
(6, 2, 15, 3, '2013-03-18', '05:00:00', '2013-03-15 07:16:47', 'pending\r\n'),
(8, 2, 31, 3, '2013-03-20', '06:00:00', '2013-03-15 12:49:52', 'pending'),
(10, 1, 15, 14, '2013-03-19', '06:00:00', '2013-03-19 09:16:26', 'pending'),
(11, 2, 15, 3, '2013-03-19', '06:15:00', '2013-03-19 09:17:52', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `branch_id` int(10) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `description`) VALUES
(1, 'KodialBail, Mangalore', 'Main Branch'),
(2, 'Bunts Hostel, Mangalore', 'Sub Branch'),
(7, 'Suratkal,mangalore', 'Sub branch');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `doc_id` int(10) NOT NULL AUTO_INCREMENT,
  `branch_id` int(10) NOT NULL,
  `doc_name` varchar(25) NOT NULL,
  `clinic_name` varchar(25) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `login_id` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `created_at` date NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `branch_id`, `doc_name`, `clinic_name`, `email_id`, `phone`, `mobile`, `login_id`, `password`, `created_at`, `last_login`) VALUES
(3, 2, 'Sudhindra', 'Sudhindra Clinic', 'sud32@gmail.com', '08242212440', '8050304447', 'optimate', '1234', '0000-00-00', '2013-03-18 07:30:01'),
(14, 1, 'Rajesh Kumar', 'raju clinic', 'raj@gmail.com', '987456321234', '98745631134543', 'rajeshkumar', 'technology', '2013-03-16', '2013-03-18 06:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_bill`
--

CREATE TABLE IF NOT EXISTS `doctor_bill` (
  `bill_id` int(10) NOT NULL AUTO_INCREMENT,
  `test_id` int(10) NOT NULL,
  `test_fee` double(10,2) NOT NULL,
  `consultation_fee` double(10,2) NOT NULL,
  `others` double(10,2) NOT NULL,
  `date` date NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `doctor_bill`
--

INSERT INTO `doctor_bill` (`bill_id`, `test_id`, `test_fee`, `consultation_fee`, `others`, `date`, `remarks`) VALUES
(1, 9, 125.00, 75.00, 100.00, '2013-03-12', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_id` int(10) NOT NULL,
  `test_id` int(10) NOT NULL,
  `prod_id` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `total` double(10,2) NOT NULL,
  `dispatch_date` date NOT NULL,
  `payment` double(10,2) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `admin_id`, `test_id`, `prod_id`, `order_date`, `total`, `dispatch_date`, `payment`, `status`) VALUES
(24, 1, 10, 1, '2013-03-18', 401.00, '2013-03-18', 401.00, 'Delivered'),
(25, 1, 10, 2, '2013-03-18', 0.00, '2013-03-18', 0.00, 'Pending'),
(26, 1, 10, 5, '2013-03-18', 0.00, '2013-03-18', 0.00, 'Pending'),
(27, 1, 0, 1, '2013-03-18', 300.00, '1970-01-01', 0.00, 'Pending'),
(28, 1, 0, 2, '2013-03-18', 1.00, '1970-01-01', 200.00, 'Pending'),
(29, 1, 0, 3, '2013-03-18', 2.00, '2013-03-18', 0.00, 'Pending'),
(30, 1, 10, 0, '2013-03-18', 3.00, '2013-03-18', 3.00, 'Delivered'),
(31, 1, 10, 2, '2013-03-18', 0.00, '2013-03-18', 0.00, 'Pending'),
(32, 1, 10, 4, '2013-03-18', 0.00, '2013-03-18', 0.00, 'Pending'),
(33, 1, 13, 1, '2013-03-18', 300.00, '1970-01-01', 0.00, 'Pending'),
(34, 1, 13, 1, '2013-03-18', 300.00, '1970-01-01', 0.00, 'Pending'),
(35, 1, 13, 1, '2013-03-18', 300.00, '1970-01-01', 0.00, 'Pending'),
(36, 1, 13, 1, '2013-03-18', 300.00, '1970-01-01', 0.00, 'Pending'),
(37, 1, 13, 1, '2013-03-18', 300.00, '1970-01-01', 0.00, 'Pending'),
(38, 1, 13, 1, '2013-03-18', 300.00, '1970-01-01', 0.00, 'Pending'),
(39, 1, 10, 1, '2013-03-19', 300.00, '2013-03-11', 0.00, 'Pending'),
(40, 1, 10, 1, '2013-03-19', 300.00, '2013-03-11', 0.00, 'Pending'),
(41, 1, 10, 1, '2013-03-19', 300.00, '2013-03-22', 200.00, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `pat_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_id` int(10) NOT NULL,
  `pat_name` varchar(30) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`pat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pat_id`, `admin_id`, `pat_name`, `email_id`, `password`, `dob`, `gender`, `address`, `contact`, `created_at`) VALUES
(15, 0, 'Vaibhava Nayak S', 'optimist.nayak@gmail.com', '789', '1970-01-01', 'Male', 'Boloor, Mangalore-03', '8050304447', '0000-00-00'),
(17, 0, 'Ajith Acharya', 'vaibhava.nayak@gmail.coma', '4321', '0000-00-00', 'Male', '', '8050304447', '0000-00-00'),
(20, 0, 'Ajith Acharya', 'vaibhava.nayak@gmail.coma', '4321', '0000-00-00', 'Male', '', '8050304447', '0000-00-00'),
(31, 0, 'Daddhu', 'ajithacharya@ymail.com', '12345', '1992-08-24', 'Male', 'Yeyyadi,Mangalore-04', '1234567890', '0000-00-00'),
(32, 0, 'Ajith Acharya', 'ajithacharya@ymail.com', '1234', '1992-08-24', 'Male', 'Yeyyadi, Mangalore', '8971887236', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `sl_no` int(10) NOT NULL AUTO_INCREMENT,
  `test_id` int(10) NOT NULL,
  `no_of_days` text NOT NULL,
  `medicines` text NOT NULL,
  `mg` text NOT NULL,
  `dosage` text NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`sl_no`, `test_id`, `no_of_days`, `medicines`, `mg`, `dosage`, `remarks`) VALUES
(1, 1, '2', '5', '6', '3', '3'),
(2, 6, 'a:18:{i:0;s:1:"2";i:1;s:1:"2";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:8:"sadasdas";i:1;s:8:"eye drop";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:3:"500";i:1;s:3:"500";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:5:"1-1-1";i:1;s:5:"1-1-1";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'gfg'),
(3, 6, 'a:18:{i:0;s:1:"2";i:1;s:1:"2";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:8:"sadasdas";i:1;s:8:"eye drop";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:3:"500";i:1;s:3:"500";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:5:"1-1-1";i:1;s:5:"1-1-1";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', ''),
(4, 6, 'a:18:{i:0;s:1:"2";i:1;s:1:"2";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:8:"sadasdas";i:1;s:8:"eye drop";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:3:"500";i:1;s:3:"500";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:5:"1-1-1";i:1;s:5:"1-1-1";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', ''),
(5, 6, 'a:18:{i:0;s:1:"2";i:1;s:1:"2";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:8:"sadasdas";i:1;s:8:"eye drop";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:3:"500";i:1;s:3:"500";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:5:"1-1-1";i:1;s:5:"1-1-1";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', ''),
(6, 7, 'a:18:{i:0;s:1:"2";i:1;s:1:"2";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:4:"swdw";i:1;s:8:"eye drop";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:3:"626";i:1;s:3:"500";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:5:"1-1-1";i:1;s:5:"1-1-1";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'wccws'),
(7, 8, 'a:18:{i:0;s:1:"2";i:1;s:1:"5";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:3:"gfg";i:1;s:11:"sadasdasjhu";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:4:"1515";i:1;s:2:"55";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:5:"1-1-1";i:1;s:5:"1-1-1";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'rgrg'),
(8, 9, 'a:18:{i:0;s:2:"20";i:1;s:2:"10";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:5:"fxgfx";i:1;s:8:"eye drop";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:2:"45";i:1;s:3:"500";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:5:"1-1-1";i:1;s:5:"1-1-1";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'hfh'),
(9, 10, 'a:18:{i:0;s:2:"20";i:1;s:1:"2";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:8:"sadasdas";i:1;s:5:"fxgfx";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:4:"1515";i:1;s:2:"45";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:5:"1-1-1";i:1;s:5:"1-1-1";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'wferf');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prod_id` int(10) NOT NULL AUTO_INCREMENT,
  `branch_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `sub_type` varchar(25) NOT NULL,
  `image` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL,
  `cost` double(10,2) NOT NULL,
  `quantity` int(10) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `branch_id`, `name`, `product_type`, `sub_type`, `image`, `color`, `cost`, `quantity`) VALUES
(1, 1, 'Contact Lens', 'Contact Lens', 'Regular', '27968351_1.jpg', '66FF00', 300.00, 100),
(2, 1, 'ajith', 'Lens', 'avc', 'DSC_0001.JPG', 'blue', 1.00, 1000),
(3, 1, 'aaadc', 'Frames', 'sxt', 'DSC_0020.JPG', 'blue', 2.00, 1000),
(4, 1, 'aaadc', 'Frames', 'sxt', 'DSC_0020.JPG', 'blue', 2.00, 1000),
(5, 2, 'xyz', 'Frames', 'Supra', 'contact-lenses.jpg', '66FF00', 100.00, 100);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(10) NOT NULL AUTO_INCREMENT,
  `app_id` int(10) NOT NULL,
  `sph` varchar(100) NOT NULL,
  `cyl` varchar(100) NOT NULL,
  `axis` varchar(100) NOT NULL,
  `remarks` text NOT NULL,
  `specs_req` varchar(10) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `app_id`, `sph`, `cyl`, `axis`, `remarks`, `specs_req`) VALUES
(10, 2, 'a:2:{i:0;s:4:"1.50";i:1;s:4:"1.20";}', 'a:2:{i:0;s:4:"1.10";i:1;s:4:"1.20";}', 'a:2:{i:0;s:2:"90";i:1;s:2:"90";}', 'sfef', 'Yes'),
(11, 3, 'a:2:{i:0;s:4:"1.50";i:1;s:4:"1.20";}', 'a:2:{i:0;s:4:"1.10";i:1;s:4:"1.20";}', 'a:2:{i:0;s:2:"90";i:1;s:2:"90";}', 'good', ''),
(12, 0, 'a:2:{i:0;s:0:"";i:1;s:0:"";}', 'a:2:{i:0;s:0:"";i:1;s:0:"";}', 'a:2:{i:0;s:0:"";i:1;s:0:"";}', '', ''),
(13, 4, 'a:2:{i:0;s:4:"1.50";i:1;s:4:"1.20";}', 'a:2:{i:0;s:4:"1.10";i:1;s:4:"1.20";}', 'a:2:{i:0;s:2:"90";i:1;s:2:"90";}', 'good', 'No'),
(14, 4, 'a:2:{i:0;s:4:"1.50";i:1;s:4:"1.20";}', 'a:2:{i:0;s:4:"1.10";i:1;s:4:"1.20";}', 'a:2:{i:0;s:2:"90";i:1;s:2:"90";}', 'good', 'No'),
(15, 5, 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'good', 'Yes'),
(16, 0, 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'good', 'Yes'),
(17, 6, 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'good', 'Yes'),
(18, 4, 'a:2:{i:0;s:0:"";i:1;s:0:"";}', 'a:2:{i:0;s:0:"";i:1;s:0:"";}', 'a:2:{i:0;s:0:"";i:1;s:0:"";}', '', ''),
(19, 4, 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:2:"10";i:1;s:2:"10";}', 'good', 'Yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
