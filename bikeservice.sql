-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2014 at 12:29 AM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bikeservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `Amenities`
--

CREATE TABLE IF NOT EXISTS `Amenities` (
  `S_id` int(100) NOT NULL,
  `amenity` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`S_id`,`amenity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Amenities`
--

INSERT INTO `Amenities` (`S_id`, `amenity`, `description`) VALUES
(1, 'Insurance', 'doorstep'),
(1, 'Pickup/Drop', 'charge basis'),
(1, 'Wifi', 'free');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `area` varchar(255) NOT NULL,
  `lati` float(9,6) NOT NULL,
  `longi` float(9,6) NOT NULL,
  PRIMARY KEY (`area`),
  UNIQUE KEY `area` (`area`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area`, `lati`, `longi`) VALUES
('Corporation Circle', 12.966843, 77.588036),
('Domlur', 12.960986, 77.638733),
('Indiranagar', 12.971891, 77.641151),
('Jayanagar', 12.930140, 77.587730),
('Majestic', 12.976664, 77.571259),
('Marathahalli', 12.959172, 77.697418);

-- --------------------------------------------------------

--
-- Table structure for table `bike`
--

CREATE TABLE IF NOT EXISTS `bike` (
  `Company` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  UNIQUE KEY `Company` (`Company`,`Model`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bike`
--

INSERT INTO `bike` (`Company`, `Model`) VALUES
('Hero', 'Karizma'),
('Hero', 'Maestro');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `S_id` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `dscrption` varchar(100) NOT NULL,
  PRIMARY KEY (`phone`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`S_id`, `phone`, `dscrption`) VALUES
('1', 9191919191, 'Sales'),
('1', 9291919191, 'Service');

-- --------------------------------------------------------

--
-- Table structure for table `order_det`
--

CREATE TABLE IF NOT EXISTS `order_det` (
  `O_id` int(100) NOT NULL,
  `Ven_oid` int(100) NOT NULL,
  `order_cat` varchar(255) NOT NULL,
  `order_desc` varchar(255) NOT NULL,
  `req_det` varchar(255) NOT NULL,
  PRIMARY KEY (`O_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_det`
--

INSERT INTO `order_det` (`O_id`, `Ven_oid`, `order_cat`, `order_desc`, `req_det`) VALUES
(2, 7867, 'Waterwash', 'nothing', 'admksmd kadskl'),
(7, 7667, 'Periodic Servicing', 'paid', 'jfnj jdfndj'),
(23, 1, 'Repair', 'ncsjk', 'dckmdsl'),
(892, 908, 'Repair', 'Engine damage', 'wola !!'),
(8728, 23, 'Insurance', 'dsdsds', 'ddscs');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE IF NOT EXISTS `prices` (
  `S_id` int(100) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  PRIMARY KEY (`S_id`,`item_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `S_id` varchar(255) NOT NULL,
  `rate_1` int(100) NOT NULL,
  `rate_2` int(100) NOT NULL,
  `rate_3` int(100) NOT NULL,
  `rate_4` int(100) NOT NULL,
  `rate_5` int(100) NOT NULL,
  PRIMARY KEY (`S_id`),
  UNIQUE KEY `S_id` (`S_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`S_id`, `rate_1`, `rate_2`, `rate_3`, `rate_4`, `rate_5`) VALUES
('1', 0, 1, 1, 3, 5);

--
-- Triggers `rating`
--
DROP TRIGGER IF EXISTS `ratecheck`;
DELIMITER //
CREATE TRIGGER `ratecheck` AFTER INSERT ON `rating`
 FOR EACH ROW if((NEW.rate_1*1+NEW.rate_2*2+NEW.rate_3*+NEW.rate_4*4+NEW.rate_5*5)/(NEW.rate_1+NEW.rate_2+NEW.rate_3+NEW.rate_4+NEW.rate_5)<1.6) 
   then
Insert into showroom_quality set S_id =New.S_Id,quality='Poor';
elseif((NEW.rate_1*1+NEW.rate_2*2+NEW.rate_3*+New.rate_4*4+NEW.rate_5*5)/(NEW.rate_1+NEW.rate_2+NEW.rate_3+NEW.rate_4+NEW.rate_5)<3.3)
        then
       Insert into showroom_quality set S_id =New.S_Id,quality='Average' ;
else
       Insert into showroom_quality set S_id =New.S_Id,quality='Good';
end if
//
DELIMITER ;
DROP TRIGGER IF EXISTS `rateupdate`;
DELIMITER //
CREATE TRIGGER `rateupdate` AFTER UPDATE ON `rating`
 FOR EACH ROW if((NEW.rate_1*1+NEW.rate_2*2+NEW.rate_3*+NEW.rate_4*4+NEW.rate_5*5)/(NEW.rate_1+NEW.rate_2+NEW.rate_3+NEW.rate_4+NEW.rate_5)<1.6) 
   then
Update showroom_quality set quality='Poor' where S_id =S_Id;
elseif((NEW.rate_1*1+NEW.rate_2*2+NEW.rate_3*+NEW.rate_4*4+NEW.rate_5*5)/(NEW.rate_1+NEW.rate_2+NEW.rate_3+NEW.rate_4+NEW.rate_5)<3.3)
        then
       Update showroom_quality set quality='Average' where S_id =S_Id;
else
       Update showroom_quality set quality='Good' where S_id =S_Id;
end if
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `serv_center`
--

CREATE TABLE IF NOT EXISTS `serv_center` (
  `S_id` int(100) NOT NULL AUTO_INCREMENT,
  `S_name` varchar(255) NOT NULL,
  `company` varchar(100) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `lati` float(9,6) NOT NULL,
  `longi` float(9,6) NOT NULL,
  PRIMARY KEY (`S_id`),
  UNIQUE KEY `S_name` (`S_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `serv_center`
--

INSERT INTO `serv_center` (`S_id`, `S_name`, `company`, `pwd`, `address`, `area`, `lati`, `longi`) VALUES
(1, 'Rakesh Motors', 'Hero', 'pwd', 'Church Gate', 'Domlur', 12.966843, 77.588036),
(2, 'Rajeev Motors', 'Hero', 'pwd', 'India Gate', 'Jayanagar', 12.966843, 77.588036),
(3, 'Ranjan Motors', 'Honda', 'pwd', 'MG road', 'Marathahalli', 12.966843, 77.588036),
(4, 'hero Motors', 'Hero', 'pwd', 'Madgaon bridge', 'Marathahalli', 12.966843, 77.588036),
(5, 'Honda Motors', 'Honda', 'pwd', 'metro Station', 'Corporation Circle', 12.966843, 77.588036),
(6, 'Hero Honda Motors', 'Hero', 'pwd', 'sharda street', 'Majestic', 12.966843, 77.588036),
(7, 'Rishi Motors', 'Hero', 'pwd', 'Thubrahalli', 'Indiranagar', 12.966843, 77.588036),
(8, 'Amitabh Motors', 'Honda', 'pwd', 'kids Park', 'Jayanagar', 12.966843, 77.588036);

-- --------------------------------------------------------

--
-- Table structure for table `showroom_quality`
--

CREATE TABLE IF NOT EXISTS `showroom_quality` (
  `S_id` int(100) NOT NULL DEFAULT '0',
  `quality` varchar(100) NOT NULL,
  PRIMARY KEY (`S_id`),
  UNIQUE KEY `S_id` (`S_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showroom_quality`
--

INSERT INTO `showroom_quality` (`S_id`, `quality`) VALUES
(1, 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `U_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) NOT NULL,
  `phone` bigint(10) DEFAULT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`U_id`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_order`
--

CREATE TABLE IF NOT EXISTS `vendor_order` (
  `U_id` bigint(100) NOT NULL,
  `S_id` bigint(100) NOT NULL,
  `Ven_Oid` bigint(100) NOT NULL AUTO_INCREMENT,
  `order_contact` bigint(10) NOT NULL,
  `Bike` varchar(255) NOT NULL,
  `exp_aapt_dt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `final_aapt_dt` datetime NOT NULL,
  `view_status` tinyint(1) NOT NULL DEFAULT '1',
  `o_stat` varchar(255) NOT NULL DEFAULT 'Decision Pending',
  `email` varchar(255) NOT NULL,
  `serv_adv` varchar(255) DEFAULT 'No Advice!!',
  `inv_url` varchar(100) DEFAULT 'not_uploaded.html',
  `area` varchar(100) NOT NULL,
  `pickup` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Ven_Oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7868 ;

--
-- Dumping data for table `vendor_order`
--

INSERT INTO `vendor_order` (`U_id`, `S_id`, `Ven_Oid`, `order_contact`, `Bike`, `exp_aapt_dt`, `order_time`, `final_aapt_dt`, `view_status`, `o_stat`, `email`, `serv_adv`, `inv_url`, `area`, `pickup`) VALUES
(1, 1, 1, 7373737373, 'Yamaha FZ', '2014-07-25 18:30:00', '2014-07-24 18:40:00', '0000-00-00 00:00:00', 1, 'Decision Pending', 'mss@sd.co', 'No Advice!!', 'not_uploaded.html', 'Majestic', 1),
(23324, 1, 23, 9292920303, 'KTM duke', '2014-07-24 18:30:00', '2014-07-25 05:30:00', '2014-07-30 00:00:00', 1, 'Confirmed', 'anskj@ms.cc', 'No Advice!!', 'not_uploaded.html', '', 1),
(8, 1, 908, 9384758695, 'Hero Enfield', '2014-07-30 18:30:00', '2014-07-28 03:47:33', '0000-00-00 00:00:00', 1, 'Query', '', 'No Advice!!', 'not_uploaded.html', '', 1),
(34, 1, 7667, 32424, 'hero Karizma', '2014-07-24 18:30:00', '2014-07-24 18:30:00', '2014-07-25 05:00:00', 1, 'Delivery Done', 'sadas@mkdfs.cd', 'No Advice!!', 'not_uploaded.html', 'Domlur area', 0),
(89, 1, 7867, 9897979605, 'Hero maestro', '2014-07-25 14:30:00', '2014-07-25 12:30:00', '2014-07-25 20:26:26', 1, 'Allotted', 'sdjk@ks.c', 'No Advice!!', 'not_uploaded.html', 'Marathahalli', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
