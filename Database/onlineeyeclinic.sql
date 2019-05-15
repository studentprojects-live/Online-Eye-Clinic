-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 05:26 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineeyeclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `branch_id` int(10) NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `login_id` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `branch_id`, `admin_name`, `login_id`, `password`, `email_id`, `lastlogin`) VALUES
(1, 1, 'Vaibhav Nayak S', 'optomate', '123', 'vaibhav@gmail.com', '2019-05-05 02:12:30'),
(2, 2, 'Sanketh', 'optocenter', 'kamath', 'mnr@gmail.com', '0000-00-00 00:00:00'),
(3, 1, 'Vaibhav', 'optomateb', '123', 'optimist@gmail.coma', '0000-00-00 00:00:00'),
(6, 2, 'Kiran', 'peter', 'peter', 'abc@gmsil.com', '0000-00-00 00:00:00'),
(7, 2, 'Raj', 'Suraj', '123456789', 'sfsf@gmail.com', '0000-00-00 00:00:00'),
(8, 1, 'mahesh', 'kumar', '123456', 'mahesh@gmail.om', '2013-03-18 07:30:21'),
(9, 8, 'myadmin', 'myadmin', 'q1w2e3r4/', 'myadmin@gmail.com', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(10) NOT NULL,
  `branch_id` int(10) NOT NULL,
  `pat_id` int(10) NOT NULL,
  `doc_id` int(10) NOT NULL,
  `app_date` date NOT NULL,
  `app_time` time NOT NULL,
  `created_at` datetime NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `branch_id`, `pat_id`, `doc_id`, `app_date`, `app_time`, `created_at`, `status`) VALUES
(2, 1, 15, 3, '2013-02-11', '06:15:00', '0000-00-00 00:00:00', 'Done\r\n'),
(3, 1, 17, 3, '2013-02-11', '06:15:00', '0000-00-00 00:00:00', 'pending'),
(4, 2, 20, 3, '2013-02-11', '06:15:00', '0000-00-00 00:00:00', 'Done\r\n'),
(6, 2, 15, 3, '2013-03-18', '05:00:00', '2013-03-15 07:16:47', 'pending\r\n'),
(8, 2, 31, 3, '2013-03-20', '06:00:00', '2013-03-15 12:49:52', 'Done\r\n'),
(11, 1, 40, 14, '2019-05-06', '05:45:00', '2019-05-05 01:58:56', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(10) NOT NULL,
  `branch_name` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `description`) VALUES
(1, 'Bangalore', 'Main Branch'),
(2, 'Mangalore', 'Sub Branch'),
(7, 'Mysore', 'Sub branch'),
(8, 'Manipal', 'Manipal');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(10) NOT NULL,
  `branch_id` int(10) NOT NULL,
  `doc_name` varchar(25) NOT NULL,
  `clinic_name` varchar(25) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `login_id` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `created_at` date NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `branch_id`, `doc_name`, `clinic_name`, `email_id`, `phone`, `mobile`, `login_id`, `password`, `created_at`, `last_login`) VALUES
(3, 2, 'Sudhindra', 'Sudhindra Clinic', 'sud32@gmail.com', '08242212440', '8050304447', 'doctor', 'doctor', '0000-00-00', '2019-05-05 02:19:46'),
(14, 1, 'Rajesh Kumar', 'raju clinic', 'raj@gmail.com', '987456321234', '98745631134543', 'rajeshkumar', 'rajeshkumar', '2013-03-16', '2013-03-18 06:50:30'),
(15, 1, 'peter kiran', 'peterclinic', 'peter@gmail.com', '', '9876543211', '', 'peter', '2019-05-05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_bill`
--

CREATE TABLE `doctor_bill` (
  `bill_id` int(10) NOT NULL,
  `test_id` int(10) NOT NULL,
  `test_fee` double(10,2) NOT NULL,
  `consultation_fee` double(10,2) NOT NULL,
  `others` double(10,2) NOT NULL,
  `date` date NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_bill`
--

INSERT INTO `doctor_bill` (`bill_id`, `test_id`, `test_fee`, `consultation_fee`, `others`, `date`, `remarks`) VALUES
(1, 9, 125.00, 75.00, 100.00, '2013-03-12', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `test_id` int(10) NOT NULL,
  `prod_id` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `total` double(10,2) NOT NULL,
  `dispatch_date` date NOT NULL,
  `payment` double(10,2) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(39, 1, 12, 1, '2019-05-05', 300.00, '2019-05-06', 250.00, 'Pending'),
(40, 1, 12, 2, '2019-05-05', 200.00, '2019-05-20', 100.00, 'Pending'),
(41, 1, 12, 2, '2019-05-05', 200.00, '2019-05-15', 50.00, 'Pending'),
(42, 1, 12, 2, '2019-05-05', 200.00, '2019-05-05', 200.00, 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pat_id` int(10) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `pat_name` varchar(30) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pat_id`, `admin_id`, `pat_name`, `email_id`, `password`, `dob`, `gender`, `address`, `contact`, `created_at`) VALUES
(15, 0, 'Vaibhav', 'patient@gmail.com', 'patient', '1970-01-01', 'Male', 'Bangalore-03', '8771837236', '0000-00-00'),
(17, 0, 'Ajith', 'nayak@gmail.coma', '4321', '0000-00-00', 'Male', '', '8110304447', '0000-00-00'),
(20, 0, 'Acharya', 'vaibhav@gmail.coma', '4321', '0000-00-00', 'Male', '', '8053404447', '0000-00-00'),
(31, 0, 'Daddhu', 'ajithacharya@ymail.com', '12345', '1992-08-24', 'Male', 'Yeyyadi,Bangalore-04', '1234567890', '0000-00-00'),
(32, 0, 'Ajith Acharya', 'ajith@ymail.com', '1234', '1992-08-24', 'Male', 'Bangalore', '8971457236', '0000-00-00'),
(33, 1, 'Dadhu acharya', 'dadhuacharya@gmail.com', 'dadhuacharya', '1992-08-24', 'Male', 'Bangalore', '8932287236', '0000-00-00'),
(34, 0, 'Roshan Karan', 'roshakaran@gmail.com', 'q1w2e3r4/', '0000-00-00', 'Male', '', '9987689338', '2019-05-05'),
(40, 0, 'Mahesh kiran', 'maheshkiran@gmail.com', '12345678', '1986-05-05', 'Male', '3rd floor, city light building', '9987654332', '2019-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `sl_no` int(10) NOT NULL,
  `test_id` int(10) NOT NULL,
  `no_of_days` text NOT NULL,
  `medicines` text NOT NULL,
  `mg` text NOT NULL,
  `dosage` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`sl_no`, `test_id`, `no_of_days`, `medicines`, `mg`, `dosage`, `remarks`) VALUES
(1, 1, '2', '5', '6', '3', '3'),
(2, 6, 'a:18:{i:0;s:1:\"2\";i:1;s:1:\"2\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:8:\"sadasdas\";i:1;s:8:\"eye drop\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:3:\"500\";i:1;s:3:\"500\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:5:\"1-1-1\";i:1;s:5:\"1-1-1\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'gfg'),
(3, 6, 'a:18:{i:0;s:1:\"2\";i:1;s:1:\"2\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:8:\"sadasdas\";i:1;s:8:\"eye drop\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:3:\"500\";i:1;s:3:\"500\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:5:\"1-1-1\";i:1;s:5:\"1-1-1\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', ''),
(4, 6, 'a:18:{i:0;s:1:\"2\";i:1;s:1:\"2\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:8:\"sadasdas\";i:1;s:8:\"eye drop\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:3:\"500\";i:1;s:3:\"500\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:5:\"1-1-1\";i:1;s:5:\"1-1-1\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', ''),
(5, 6, 'a:18:{i:0;s:1:\"2\";i:1;s:1:\"2\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:8:\"sadasdas\";i:1;s:8:\"eye drop\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:3:\"500\";i:1;s:3:\"500\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:5:\"1-1-1\";i:1;s:5:\"1-1-1\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', ''),
(6, 7, 'a:18:{i:0;s:1:\"2\";i:1;s:1:\"2\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:4:\"swdw\";i:1;s:8:\"eye drop\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:3:\"626\";i:1;s:3:\"500\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:5:\"1-1-1\";i:1;s:5:\"1-1-1\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'wccws'),
(7, 8, 'a:18:{i:0;s:1:\"2\";i:1;s:1:\"5\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:3:\"gfg\";i:1;s:11:\"sadasdasjhu\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:4:\"1515\";i:1;s:2:\"55\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:5:\"1-1-1\";i:1;s:5:\"1-1-1\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'rgrg'),
(8, 9, 'a:18:{i:0;s:2:\"20\";i:1;s:2:\"10\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:5:\"fxgfx\";i:1;s:8:\"eye drop\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:2:\"45\";i:1;s:3:\"500\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:5:\"1-1-1\";i:1;s:5:\"1-1-1\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'hfh'),
(9, 10, 'a:18:{i:0;s:2:\"20\";i:1;s:1:\"2\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:8:\"sadasdas\";i:1;s:5:\"fxgfx\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:4:\"1515\";i:1;s:2:\"45\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:5:\"1-1-1\";i:1;s:5:\"1-1-1\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'wferf'),
(10, 20, 'a:2:{i:0;s:1:\"2\";i:1;s:2:\"44\";}', 'a:2:{i:0;s:3:\"abc\";i:1;s:3:\"xyz\";}', 'a:2:{i:0;s:1:\"3\";i:1;s:1:\"3\";}', 'a:2:{i:0;s:2:\"39\";i:1;s:1:\"9\";}', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(10) NOT NULL,
  `branch_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `sub_type` varchar(25) NOT NULL,
  `image` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL,
  `cost` double(10,2) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `branch_id`, `name`, `product_type`, `sub_type`, `image`, `color`, `cost`, `quantity`) VALUES
(1, 1, 'Clear', 'Contact Lens', 'Regular', 'regular.JPG', 'FFFFFF', 300.00, 100),
(2, 1, 'Clear d', 'Contact Lens', 'Disposable', 'disposable.jpg', 'FFFFFF', 200.00, 100),
(3, 1, 'Clear T', 'Contact Lens', 'Toric', 'toric.jpg', 'FFFFFF', 200.00, 100),
(4, 1, 'KRT', 'Lens', 'Kryptok', 'kryptok1.jpg', 'FFFFFF', 400.00, 100),
(5, 1, 'SV', 'Lens', 'Single Vision', 'Glass_Single_Vision.jpg', 'FCFFF0', 100.00, 100),
(6, 1, 'D B', 'Lens', 'D Bifocal', 'Glass_Bifocal_Lens.jpg', 'FCFFF7', 500.00, 150),
(7, 1, 'Ful ', 'Frames', 'Full', 'full.jpg', '1249FF', 800.00, 150),
(8, 1, 'SF', 'Frames', 'Supra', 'supra.JPG', 'A18348', 750.00, 150),
(9, 1, 'RF', 'Frames', 'Rimless', 'rimless.jpg', 'FFDB78', 950.00, 100),
(10, 2, 'KRPT', 'Lens', 'Kryptok', 'kryptok.jpg', 'FAFFFB', 600.00, 190),
(11, 2, 'SVL', 'Lens', 'Single Vision', 'Single_vision.jpg', 'FBFFF5', 800.00, 100),
(12, 2, 'DBF', 'Lens', 'D Bifocal', 'bifocal.jpg', 'FFFFFA', 800.00, 100),
(13, 2, 'FF', 'Frames', 'Full', 'full.jpg', 'FF3D0D', 800.00, 100),
(14, 2, 'SF', 'Frames', 'Supra', 'supra.jpg', 'F0D946', 950.00, 150);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(10) NOT NULL,
  `app_id` int(10) NOT NULL,
  `sph` varchar(100) NOT NULL,
  `cyl` varchar(100) NOT NULL,
  `axis` varchar(100) NOT NULL,
  `remarks` text NOT NULL,
  `specs_req` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `app_id`, `sph`, `cyl`, `axis`, `remarks`, `specs_req`) VALUES
(10, 2, 'a:2:{i:0;s:4:\"1.50\";i:1;s:4:\"1.20\";}', 'a:2:{i:0;s:4:\"1.10\";i:1;s:4:\"1.20\";}', 'a:2:{i:0;s:2:\"90\";i:1;s:2:\"90\";}', 'sfef', 'Yes'),
(11, 3, 'a:2:{i:0;s:4:\"1.50\";i:1;s:4:\"1.20\";}', 'a:2:{i:0;s:4:\"1.10\";i:1;s:4:\"1.20\";}', 'a:2:{i:0;s:2:\"90\";i:1;s:2:\"90\";}', 'good', ''),
(12, 0, 'a:2:{i:0;s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:0;s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:0;s:0:\"\";i:1;s:0:\"\";}', '', ''),
(13, 4, 'a:2:{i:0;s:4:\"1.50\";i:1;s:4:\"1.20\";}', 'a:2:{i:0;s:4:\"1.10\";i:1;s:4:\"1.20\";}', 'a:2:{i:0;s:2:\"90\";i:1;s:2:\"90\";}', 'good', 'No'),
(14, 4, 'a:2:{i:0;s:4:\"1.50\";i:1;s:4:\"1.20\";}', 'a:2:{i:0;s:4:\"1.10\";i:1;s:4:\"1.20\";}', 'a:2:{i:0;s:2:\"90\";i:1;s:2:\"90\";}', 'good', 'No'),
(15, 5, 'a:2:{i:0;s:3:\"1.0\";i:1;s:3:\"1.0\";}', 'a:2:{i:0;s:3:\"1.0\";i:1;s:3:\"1.0\";}', 'a:2:{i:0;s:3:\"1.0\";i:1;s:3:\"1.0\";}', 'good', 'Yes'),
(16, 0, 'a:2:{i:0;s:3:\"1.0\";i:1;s:3:\"1.0\";}', 'a:2:{i:0;s:3:\"1.0\";i:1;s:3:\"1.0\";}', 'a:2:{i:0;s:3:\"1.0\";i:1;s:3:\"1.0\";}', 'good', 'Yes'),
(17, 6, 'a:2:{i:0;s:3:\"1.0\";i:1;s:3:\"1.0\";}', 'a:2:{i:0;s:3:\"1.0\";i:1;s:3:\"1.0\";}', 'a:2:{i:0;s:3:\"1.0\";i:1;s:3:\"1.0\";}', 'good', 'Yes'),
(18, 4, 'a:2:{i:0;s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:0;s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:0;s:0:\"\";i:1;s:0:\"\";}', '', ''),
(19, 4, 'a:2:{i:0;s:3:\"1.0\";i:1;s:3:\"1.0\";}', 'a:2:{i:0;s:3:\"1.0\";i:1;s:3:\"1.0\";}', 'a:2:{i:0;s:2:\"10\";i:1;s:2:\"10\";}', 'good', 'Yes'),
(20, 8, 'a:2:{i:0;s:2:\"10\";i:1;s:2:\"20\";}', 'a:2:{i:0;s:2:\"30\";i:1;s:2:\"40\";}', 'a:2:{i:0;s:2:\"50\";i:1;s:2:\"60\";}', 'hello', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `doctor_bill`
--
ALTER TABLE `doctor_bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `doctor_bill`
--
ALTER TABLE `doctor_bill`
  MODIFY `bill_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
