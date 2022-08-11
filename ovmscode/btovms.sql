-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2019 at 06:53 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `btovms`
CREATE DATABASE IF NOT EXISTS `btovms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `btovms`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `username` varchar(49) NOT NULL,
  `password` varchar(45) NOT NULL,
  `status` varchar(5) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_id` int(32) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`account_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `status`, `user_id`, `account_id`) VALUES
('officer', ' 	d31d86d0de8dd34fc535c67e480deaa2', '1', 29, 1),
('Admin', '21232f297a57a5a743894a0e4a801fc3', '1', 27, 13),
('man', ' 	39c63ddb96a31b9610cd976b896ad4f0', '1', 37, 16),
('pass', ' 	1a1dc91c907325c69271ddf0c944bc72', '1', 39, 22),
('we', ' 	ff1ccf57e98c817df1efcd9fe44a8aeb', '1', 40, 23),
('habtie', ' 	3ac9e2b1600eadbc35c139a5d341b84f', '1', 41, 24);

-- --------------------------------------------------------

--
-- Table structure for table `assignvehicle`
--

CREATE TABLE IF NOT EXISTS `assignvehicle` (
  `SID` int(20) NOT NULL AUTO_INCREMENT,
  `User_id` varchar(20) NOT NULL,
  `Plate_no` int(45) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `Starts` varchar(45) NOT NULL,
  `Arrival` varchar(45) NOT NULL,
  `Outgoing` varchar(45) NOT NULL,
  `times` varchar(20) NOT NULL,
  `Entrance` varchar(45) NOT NULL,
  `Reason` varchar(400) NOT NULL,
  `status` varchar(45) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`SID`),
  KEY `user_id` (`User_id`),
  KEY `user_id_2` (`User_id`),
  KEY `user_id_3` (`User_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `assignvehicle`
--

INSERT INTO `assignvehicle` (`SID`, `User_id`, `Plate_no`, `FullName`, `Starts`, `Arrival`, `Outgoing`, `times`, `Entrance`, `Reason`, `status`) VALUES
(109, 'SCIR/156/07', 3803, 'getanehÂ Shibabaw', 'burie town', 'adissababa', '2019-06-20', '4:00pm', '2019-06-12', 'for wedding', 'read'),
(110, 'rt/055/08', 4000, 'getanehÂ Shibabaw', 'burie town', 'DEBRE', '2019-05-31', '2:45pm', '2019-06-06', 'rtfgfhhghj', 'unread'),
(111, '034', 90001, 'getanehÂ Shibabaw', 'burie town', 'aa', '2019-06-05', '3:45pm', '2019-06-05', 'to change th edriving', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `assignvehicles`
--

CREATE TABLE IF NOT EXISTS `assignvehicles` (
  `SID` int(20) NOT NULL AUTO_INCREMENT,
  `User_id` varchar(20) NOT NULL,
  `Plate_no` int(45) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `Starts` varchar(45) NOT NULL,
  `Arrival` varchar(45) NOT NULL,
  `Outgoing` varchar(45) NOT NULL,
  `times` varchar(20) NOT NULL,
  `Entrance` varchar(45) NOT NULL,
  `Reason` varchar(400) NOT NULL,
  `status` varchar(45) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`SID`),
  KEY `user_id` (`User_id`),
  KEY `user_id_2` (`User_id`),
  KEY `user_id_3` (`User_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `assignvehicles`
--

INSERT INTO `assignvehicles` (`SID`, `User_id`, `Plate_no`, `FullName`, `Starts`, `Arrival`, `Outgoing`, `times`, `Entrance`, `Reason`, `status`) VALUES
(4, 'ter/098/45', 59, 'getanehÂ Shibabaw', 'Burei Town', 'Addis Ababa', '2019-06-11', '3:15pm', '2019-06-12', 'wqssscvfgtgtg', 'unread'),
(5, 'SCIR/156/07', 1234, 'getanehÂ Shibabaw', 'burie town', 'bahirdar', '2019-06-12', '3:45pm', '2019-06-19', 'srfgdfdg', 'unread'),
(6, 'SCIR/156/07', 3803, 'getanehÂ Shibabaw', 'burie town', 'adissababa', '2019-06-20', '4:00pm', '2019-06-12', 'for wedding', 'unread'),
(7, 'rt/055/08', 4000, 'getanehÂ Shibabaw', 'burie town', 'DEBRE', '2019-05-31', '2:45pm', '2019-06-06', 'rtfgfhhghj', 'unread'),
(8, '034', 90001, 'getanehÂ Shibabaw', 'burie town', 'aa', '2019-06-05', '3:45pm', '2019-06-05', 'to change th edriving', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `assignvehicless`
--

CREATE TABLE IF NOT EXISTS `assignvehicless` (
  `SID` int(20) NOT NULL AUTO_INCREMENT,
  `User_id` varchar(20) NOT NULL,
  `Plate_no` int(45) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `Starts` varchar(45) NOT NULL,
  `Arrival` varchar(45) NOT NULL,
  `Outgoing` varchar(45) NOT NULL,
  `times` varchar(20) NOT NULL,
  `Entrance` varchar(45) NOT NULL,
  `Reason` varchar(400) NOT NULL,
  `status` varchar(45) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`SID`),
  KEY `user_id` (`User_id`),
  KEY `user_id_2` (`User_id`),
  KEY `user_id_3` (`User_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `assignvehicless`
--

INSERT INTO `assignvehicless` (`SID`, `User_id`, `Plate_no`, `FullName`, `Starts`, `Arrival`, `Outgoing`, `times`, `Entrance`, `Reason`, `status`) VALUES
(57, 'ter/098/45', 59, 'getanehÂ Shibabaw', 'Burei Town', 'bahirdar', '2019-06-11', '3:15pm', '2019-06-12', 'wqssscvfgtgtg', 'unread'),
(58, 'ter/098/45', 59, 'getanehÂ Shibabaw', 'Burei Town', 'Dejen', '2019-06-11', '3:15pm', '2019-06-12', 'wqssscvfgtgtg', 'unread'),
(59, 'SCIR/156/07', 1234, 'getanehÂ Shibabaw', 'burie town', 'bahirdar', '2019-06-12', '3:45pm', '2019-06-19', 'srfgdfdg', 'unread'),
(60, 'SCIR/156/07', 3803, 'getanehÂ Shibabaw', 'burie town', 'adissababa', '2019-06-20', '4:00pm', '2019-06-12', 'for wedding', 'unread'),
(61, 'rt/055/08', 4000, 'getanehÂ Shibabaw', 'burie town', 'DEBRE', '2019-05-31', '2:45pm', '2019-06-06', 'rtfgfhhghj', 'unread'),
(62, '034', 90001, 'getanehÂ Shibabaw', 'burie town', 'aa', '2019-06-05', '3:45pm', '2019-06-05', 'to change th edriving', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `BUS_ID` int(45) NOT NULL AUTO_INCREMENT,
  `PLATE_NUMBER` int(11) NOT NULL,
  `HOLDING_CAPACITY` int(11) NOT NULL,
  `JOURNY_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`BUS_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`BUS_ID`, `PLATE_NUMBER`, `HOLDING_CAPACITY`, `JOURNY_ID`) VALUES
(1, 23004, 44, 5),
(2, 34980, 50, 6),
(3, 78351, 35, 7),
(4, 23456, 60, 8),
(5, 43567, 90, 70);

-- --------------------------------------------------------

--
-- Table structure for table `calculatefuelbalance`
--

CREATE TABLE IF NOT EXISTS `calculatefuelbalance` (
  `fule_id` int(30) NOT NULL AUTO_INCREMENT,
  `user_id` int(30) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `PreviousKMs` float NOT NULL,
  `CurrentKMS` float NOT NULL,
  `DifferenceKms` float NOT NULL,
  `KMperLiter` float NOT NULL,
  `UsedFuel` float NOT NULL,
  `GivenFuel` float NOT NULL,
  `FuelPrice` float NOT NULL,
  `TotalFuelPrice` float NOT NULL,
  `Date` varchar(30) NOT NULL,
  PRIMARY KEY (`fule_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `calculatefuelbalance`
--

INSERT INTO `calculatefuelbalance` (`fule_id`, `user_id`, `FullName`, `PreviousKMs`, `CurrentKMS`, `DifferenceKms`, `KMperLiter`, `UsedFuel`, `GivenFuel`, `FuelPrice`, `TotalFuelPrice`, `Date`) VALUES
(106, 0, 'Gurmissa? mossisa', 30, 87, 57, 4, 14.25, 2, 70, 140, '05/29/18'),
(107, 0, 'Samuel? Yelikal', 10, 20, 10, 2, 5, 23, 10, 230, '06/21/18'),
(108, 0, 'Sadam? Kedir', 45, 454, 409, 4, 102.25, 4, 5, 20, '06/22/18'),
(109, 0, 'Sadam? Kedir', 34, 56, 22, 5, 4.4, 400, 60, 24000, '05/11/19'),
(110, 0, 'Sadam? Kedir', 33, 12423, 12390, 5, 2478, 400, 78, 31200, '05/11/19'),
(111, 0, 'Sadam? Kedir', 2, 56, 54, 5, 10.8, 3000, 78, 234000, '05/11/19'),
(112, 0, 'getaneh? Shibabaw', 45, 90, 45, 5, 9, 300, 120, 36000, '05/13/19'),
(113, 0, 'getanehÂ Shibabaw', 3, 6, 3, 8, 0.375, 567, 89, 50463, '06/03/19'),
(114, 0, 'getanehÂ Shibabaw', 6, 28, 22, 3, 7.33333, 1000, 4, 4000, '06/07/19'),
(115, 0, 'getanehÂ Shibabaw', 388, 400, 12, 10, 1.2, 1234, 34, 41956, '06/20/19'),
(116, 0, 'getanehÂ Shibabaw', 234, 1234, 1000, 2, 500, 6789, 234, 1.58863e+006, '06/21/19');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(160) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` varchar(234) NOT NULL,
  `dates` date NOT NULL,
  `status` varchar(123) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `fname`, `lname`, `email`, `message`, `dates`, `status`) VALUES
(28, 'ereff', 'fdfdfd', 'dsf@gmail.com', 'to reduce the tarif', '2019-06-05', 'unread'),
(29, 'getasew', 'adugna', 'erefy@gmail.com', 'xbhsxbszjhbdjfcdv', '2019-06-11', 'unread'),
(26, 'Mulualem', 'meselu', 'fcf@gmail.com', 'erfdsfdvf', '2019-06-12', 'read'),
(27, 'en', 'be', 'enf@gmail.com', 'frfvrfrsd', '2019-05-29', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `exitpermission`
--

CREATE TABLE IF NOT EXISTS `exitpermission` (
  `exit_id` int(30) NOT NULL AUTO_INCREMENT,
  `permissionLeaderName` varchar(11) NOT NULL,
  `DriverFullName` varchar(30) NOT NULL,
  `Plate_no` varchar(30) NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Purpose` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  PRIMARY KEY (`exit_id`),
  KEY `user_id` (`user_id`),
  KEY `Plate_no` (`Plate_no`),
  KEY `Plate_no_2` (`Plate_no`),
  KEY `user_id_2` (`user_id`),
  KEY `Plate_no_3` (`Plate_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `exitpermission`
--

INSERT INTO `exitpermission` (`exit_id`, `permissionLeaderName`, `DriverFullName`, `Plate_no`, `Date`, `Purpose`, `user_id`) VALUES
(10, 'Mulunesh? b', 'alen bitew', '101tyh', '06/12/15', '4TH YEAR STUDENT TRIP COMPUTIN', 'compr/105/05'),
(11, 'Mulunesh Al', 'Sewalem Wondmeneh', '000432', '05/01/18', 'For student trainning', 'ETR/555/04');

-- --------------------------------------------------------

--
-- Table structure for table `journy`
--

CREATE TABLE IF NOT EXISTS `journy` (
  `JOURNY_ID` int(15) NOT NULL AUTO_INCREMENT,
  `FROM` varchar(15) NOT NULL,
  `TO` varchar(15) NOT NULL,
  `DEPARTURE_TIME` time NOT NULL,
  `ARRIVAL_TIME` time NOT NULL,
  `manager_id` int(11) NOT NULL,
  PRIMARY KEY (`JOURNY_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `journy`
--

INSERT INTO `journy` (`JOURNY_ID`, `FROM`, `TO`, `DEPARTURE_TIME`, `ARRIVAL_TIME`, `manager_id`) VALUES
(5, 'Burie Town', 'Debremarkos', '12:59:00', '01:00:00', 37),
(6, 'Burie Town', 'BahirDar', '11:58:00', '14:01:00', 37),
(7, 'Burie Town', 'Addis Ababa`', '13:00:00', '11:58:00', 37),
(8, 'burie town', 'Debretabor', '12:58:00', '12:00:00', 37);

-- --------------------------------------------------------

--
-- Table structure for table `maintenancerequest`
--

CREATE TABLE IF NOT EXISTS `maintenancerequest` (
  `ReqID` int(20) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(30) NOT NULL,
  `Plate_no` varchar(20) NOT NULL,
  `RequestDate` varchar(30) NOT NULL,
  `RequestReason` varchar(300) NOT NULL,
  `VehicleStatus` varchar(30) NOT NULL,
  PRIMARY KEY (`ReqID`),
  KEY `VehicleID` (`Plate_no`),
  KEY `user_id` (`FullName`),
  KEY `Plate_no` (`Plate_no`),
  KEY `Plate_no_2` (`Plate_no`),
  KEY `FullName` (`FullName`),
  KEY `Plate_no_3` (`Plate_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `maintenancerequest`
--

INSERT INTO `maintenancerequest` (`ReqID`, `FullName`, `Plate_no`, `RequestDate`, `RequestReason`, `VehicleStatus`) VALUES
(60, 'Getasew? Adugnaw', '3803', '05/19/19', 'to repair', 'functional'),
(61, 'AbebeÂ belete', '5678', '2019-06-03', 'to fix', 'Unfunctional'),
(62, 'AbebeÂ belete', '5009', '2019-06-20', 'to wash', 'Unfunctional'),
(63, 'AbebeÂ belete', '4000', '2019-06-14', 'to repair', 'functional'),
(64, 'AbebeÂ belete', '4000', '2019-06-05', 'erdgfvbg\r\ngfgfhgh\r\n', 'functional');

-- --------------------------------------------------------

--
-- Table structure for table `managerequests`
--

CREATE TABLE IF NOT EXISTS `managerequests` (
  `SID` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `Traveller` int(45) NOT NULL,
  `RequestDate` varchar(20) NOT NULL,
  `PlaceStart` varchar(45) NOT NULL,
  `PlaceArrival` varchar(45) NOT NULL,
  `Outgoingdate` varchar(45) NOT NULL,
  `Entrancedate` varchar(45) NOT NULL,
  `OutgoingTime` varchar(20) NOT NULL,
  `RequestReason` varchar(400) NOT NULL,
  `RequestStatus` varchar(40) NOT NULL,
  PRIMARY KEY (`SID`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`),
  KEY `user_id_3` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `managerequests`
--

INSERT INTO `managerequests` (`SID`, `user_id`, `Traveller`, `RequestDate`, `PlaceStart`, `PlaceArrival`, `Outgoingdate`, `Entrancedate`, `OutgoingTime`, `RequestReason`, `RequestStatus`) VALUES
(33, 'ETR/184/04', 78, '04/29/18', 'Burie', 'AA', '2018-04-28', '2018-04-30', '5:15pm', 'For trip ', 'NO'),
(34, 'SCIR/105/09', 89, '04/29/18', 'burie', 'hawassa', '2018-04-06', '2018-04-27', '4:45pm', 'Adis frrr', 'NO'),
(39, 'ETR/555/04', 54, '04/05/18', 'Burie', 'Adiss', '2018-04-06', '2018-04-30', '2:15pm', 'Mzan Tepi university', 'YES'),
(40, 'SCIR/105/09', 54, '05/11/18', 'Burie', 'Jimma', '2018-05-09', '2018-05-11', '5:00pm', '4th year trip', 'YES'),
(41, 'ETR/555/07', 65, '05/12/18', 'Burie', 'Baherdar', '2018-05-12', '2018-05-13', '1:00pm', ' For trainng', 'YES'),
(42, 'ETR/555/07', 54, '04/05/18', 'burie', 'Adiss', '2018-04-06', '2018-04-30', '2:15pm', 'Mzan Tepi university', 'YES'),
(43, 'ETR/555/07', 54, '04/05/18', 'Burie', 'Adiss', '2018-04-06', '2018-04-30', '2:15pm', 'Mzan Tepi university', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `notifcation`
--

CREATE TABLE IF NOT EXISTS `notifcation` (
  `ID` int(40) NOT NULL AUTO_INCREMENT,
  `reservation_id` int(11) NOT NULL,
  `notice_type` varchar(25) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `notifcation`
--

INSERT INTO `notifcation` (`ID`, `reservation_id`, `notice_type`, `date`) VALUES
(2, 14, 'postponed', '2018-05-27 09:16:50'),
(8, 15, 'confirm', '2018-05-27 11:38:25'),
(9, 24, 'confirmed', '2018-05-27 09:16:50'),
(22, 16, 'confirm', '2019-06-17 13:01:32'),
(23, 17, 'confirm', '2019-06-19 02:13:48'),
(24, 14, 'postponed', '2019-06-19 02:45:34'),
(25, 14, 'postponed', '2019-06-20 07:44:46'),
(26, 30, 'confirm', '2019-06-20 07:45:50'),
(27, 30, 'confirm', '2019-06-20 07:46:05'),
(28, 32, 'confirm', '2019-06-20 08:04:15'),
(29, 40, 'postponed', '2019-06-20 23:45:52'),
(30, 40, 'confirm', '2019-06-21 04:45:14'),
(31, 40, 'confirm', '2019-06-21 04:45:18'),
(32, 41, 'postponed', '2019-06-21 05:09:26'),
(33, 40, 'confirm', '2019-06-21 06:32:39'),
(34, 40, 'confirm', '2019-06-21 06:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `Plate_no` int(34) NOT NULL,
  `FullName` varchar(57) NOT NULL,
  `entrance` varchar(123) NOT NULL,
  `Dates` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Plate_no`, `FullName`, `entrance`, `Dates`) VALUES
(59, 'getaneh', '4:30pm', '2019-06-27'),
(1234, 'getaneh', '4:30pm', '2019-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `RESERVATION_ID` int(50) NOT NULL AUTO_INCREMENT,
  `ASSIGNBY_ID` int(15) DEFAULT NULL,
  `SEAT_NO` int(11) NOT NULL,
  `RESERVE_BY` int(11) NOT NULL,
  `JOURNY_ID` int(11) NOT NULL,
  `RESERVATION_DATE` datetime NOT NULL,
  `SUBMITTED_DATE` datetime NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`RESERVATION_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`RESERVATION_ID`, `ASSIGNBY_ID`, `SEAT_NO`, `RESERVE_BY`, `JOURNY_ID`, `RESERVATION_DATE`, `SUBMITTED_DATE`, `status`) VALUES
(40, NULL, 69, 29, 6, '2019-06-18 23:39:29', '2019-06-20 23:39:29', 'Not Reserved'),
(41, NULL, 70, 29, 8, '2019-06-12 04:49:21', '2019-06-21 04:49:21', 'Reserved'),
(42, NULL, 71, 29, 8, '2019-06-21 05:00:47', '2019-06-21 05:00:47', 'Reserved'),
(43, NULL, 72, 29, 5, '2019-06-21 05:04:50', '2019-06-21 05:04:50', 'Reserved'),
(44, NULL, 73, 29, 6, '2019-06-21 05:23:14', '2019-06-21 05:23:14', 'Reserved'),
(45, NULL, 74, 29, 7, '2019-06-21 06:08:50', '2019-06-21 06:08:50', 'Reserved'),
(46, NULL, 75, 29, 5, '2019-06-21 06:10:35', '2019-06-21 06:10:35', 'Reserved'),
(47, NULL, 76, 29, 6, '2019-06-21 06:13:37', '2019-06-21 06:13:37', 'Reserved'),
(48, NULL, 77, 29, 5, '2019-06-21 06:14:18', '2019-06-21 06:14:18', 'Reserved'),
(49, NULL, 78, 29, 5, '2019-06-21 06:25:34', '2019-06-21 06:25:34', 'Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `ROUTE_ID` int(45) NOT NULL AUTO_INCREMENT,
  `departure` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `assignedcar` int(123) NOT NULL,
  `platenumber` int(100) NOT NULL,
  `noofseat` int(111) NOT NULL,
  `cartype` varchar(122) NOT NULL,
  `DISTANCE` varchar(50) NOT NULL,
  `COST` varchar(50) NOT NULL,
  PRIMARY KEY (`ROUTE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`ROUTE_ID`, `departure`, `destination`, `assignedcar`, `platenumber`, `noofseat`, `cartype`, `DISTANCE`, `COST`) VALUES
(66, 'Burie', ' BDar', 2, 12213, 50, 'abaybus', '124', '123'),
(67, 'Btown', ' demarkos', 3, 2, 45, 'level1bus', '123', '60'),
(68, 'buretoen', 'gonder', 2, 23456, 56, 'flatbus', '234', '123'),
(69, 'Btown', 'dejen', 3, 12213, 58, 'cccibus', '123', '123'),
(70, 'Btown', 'wollo', 5, 34567, 60, 'skybus', '444', '233'),
(71, 'Btown', 'Dejen', 3, 1234, 23, 'level1bus', '234', '233'),
(72, 'Burie', 'BDar', 3, 2, 50, 'aby', '12', '60');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE IF NOT EXISTS `seat` (
  `SEAT_ID` int(15) NOT NULL AUTO_INCREMENT,
  `SEAT_NO` int(11) NOT NULL,
  `BUS_ID` int(11) NOT NULL,
  PRIMARY KEY (`SEAT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`SEAT_ID`, `SEAT_NO`, `BUS_ID`) VALUES
(1, 1, 9),
(2, 21, 9),
(3, 2, 9),
(4, 10, 9),
(5, 6, 9),
(6, 7, 9),
(7, 34, 9),
(8, 19, 9),
(9, 2, 8),
(10, 2, 6),
(11, 3, 9),
(12, 4, 9),
(13, 20, 9),
(14, 4, 8),
(15, 28, 9),
(16, 1, 6),
(17, 19, 8),
(18, 23, 8),
(19, 23, 8),
(20, 23, 8),
(21, 23, 8),
(22, 23, 8),
(23, 23, 8),
(24, 12, 8),
(25, 1, 4),
(26, 10, 1),
(27, 10, 1),
(28, 20, 4),
(29, 2, 4),
(30, 1, 1),
(31, 28, 4),
(32, 2, 3),
(33, 8, 1),
(34, 30, 1),
(35, 21, 3),
(36, 9, 3),
(37, 14, 1),
(38, 12, 4),
(39, 18, 3),
(40, 6, 3),
(41, 17, 4),
(42, 8, 4),
(43, 2, 1),
(44, 17, 1),
(45, 13, 4),
(46, 3, 1),
(47, 32, 4),
(48, 24, 1),
(49, 4, 1),
(50, 19, 1),
(51, 6, 1),
(52, 7, 1),
(53, 21, 1),
(54, 18, 1),
(55, 5, 1),
(56, 12, 3),
(57, 23, 3),
(58, 23, 1),
(59, 1, 2),
(60, 35, 3),
(61, 28, 2),
(62, 26, 1),
(63, 50, 2),
(64, 1, 5),
(65, 28, 3),
(66, 3, 4),
(67, 2, 2),
(68, 1, 3),
(69, 5, 2),
(70, 40, 4),
(71, 35, 4),
(72, 36, 1),
(73, 8, 2),
(74, 15, 3),
(75, 25, 1),
(76, 7, 2),
(77, 9, 1),
(78, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `servicerequest`
--

CREATE TABLE IF NOT EXISTS `servicerequest` (
  `SID` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `Traveller` int(45) NOT NULL,
  `RequestDate` varchar(20) NOT NULL,
  `PlaceStart` varchar(45) NOT NULL,
  `PlaceArrival` varchar(45) NOT NULL,
  `Outgoingdate` varchar(45) NOT NULL,
  `Entrancedate` varchar(45) NOT NULL,
  `OutgoingTime` varchar(20) NOT NULL,
  `RequestReason` varchar(400) NOT NULL,
  `RequestStatus` varchar(40) NOT NULL,
  PRIMARY KEY (`SID`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`),
  KEY `user_id_3` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `servicerequest`
--

INSERT INTO `servicerequest` (`SID`, `user_id`, `Traveller`, `RequestDate`, `PlaceStart`, `PlaceArrival`, `Outgoingdate`, `Entrancedate`, `OutgoingTime`, `RequestReason`, `RequestStatus`) VALUES
(10, 'ter/055/08', 120, '06/12/19', 'Burie Town Bus Station', 'wwww', '2019-05-30', '2019-05-30', '4:00pm', 'wesfdvcvc', 'YES'),
(12, '058', 120, '06/12/19', 'Burie Town Bus Station', 'DEBRE TABOR', '2019-07-03', '2019-06-07', '4:45pm', 'wersfrdfgfvhbv', 'YES'),
(13, 'acg/056/2008', 90, '06/14/19', 'Burie Town Bus Station', 'wollo', '2019-06-20', '2019-06-16', '3:45pm', 'tyghvbjh', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `servicerequests`
--

CREATE TABLE IF NOT EXISTS `servicerequests` (
  `SID` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `Traveller` int(45) NOT NULL,
  `RequestDate` varchar(20) NOT NULL,
  `PlaceStart` varchar(45) NOT NULL,
  `PlaceArrival` varchar(45) NOT NULL,
  `Outgoingdate` varchar(45) NOT NULL,
  `Entrancedate` varchar(45) NOT NULL,
  `OutgoingTime` varchar(20) NOT NULL,
  `RequestReason` varchar(400) NOT NULL,
  `RequestStatus` varchar(40) NOT NULL,
  PRIMARY KEY (`SID`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`),
  KEY `user_id_3` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `servicerequests`
--

INSERT INTO `servicerequests` (`SID`, `user_id`, `Traveller`, `RequestDate`, `PlaceStart`, `PlaceArrival`, `Outgoingdate`, `Entrancedate`, `OutgoingTime`, `RequestReason`, `RequestStatus`) VALUES
(64, 'rt/055/08', 90, '06/12/19', 'Burie Town Bus Station', 'wwww', '2019-06-28', '2019-06-27', '3:45pm', 'rfggfgbf', 'YES'),
(65, 'acg/057/2008', 68, '06/12/19', 'Burie Town Bus Station', 'DEBRE TABOR', '2019-06-24', '2019-06-04', '3:45pm', 'edscscxx', 'YES'),
(66, '034', 56, '06/19/19', 'Burie Town Bus Station', 'aa', '2019-06-11', '2019-06-20', '3:15pm', 'to training', 'YES'),
(67, 'abc/056/2008', 90, '06/20/19', 'Burie Town Bus Station', 'fnoteselam', '2019-06-17', '2019-06-06', '12:00pm', 'to transport', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `serviceresponse`
--

CREATE TABLE IF NOT EXISTS `serviceresponse` (
  `SRID` int(29) NOT NULL AUTO_INCREMENT,
  `SID` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `RequestDate` varchar(30) NOT NULL,
  `RequestReason` varchar(70) NOT NULL,
  `RequestStatus` varchar(40) NOT NULL,
  PRIMARY KEY (`SRID`),
  KEY `SID` (`SID`),
  KEY `SID_2` (`SID`),
  KEY `SID_3` (`SID`),
  KEY `SID_4` (`SID`),
  KEY `user_id` (`user_id`),
  KEY `SRID` (`SRID`),
  KEY `SID_5` (`SID`),
  KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `serviceresponse`
--

INSERT INTO `serviceresponse` (`SRID`, `SID`, `user_id`, `RequestDate`, `RequestReason`, `RequestStatus`) VALUES
(25, 30, 'compr/105/05', '06/12/15', 'computer science traing', 'Approve'),
(45, 2, 'ETR/555/07', '05/12/18', ' For trainng', 'Wait'),
(46, 2, 'ETR/555/07', '05/12/18', ' For trainng', 'Approve'),
(47, 4, 'fr/23/12', '06/20/18', 'For exchange info', 'Approve'),
(48, 6, 'SCI/214/07', '06/21/18', 'fffffffffffffffffffffff', 'Approve'),
(49, 10, 'ter/055/08', '06/12/19', 'wesfdvcvc', 'Approved'),
(50, 9, 'aysheshim', '06/09/19', ' to trip', 'Approved'),
(51, 8, 'rt/055/08', '06/07/13', 'for wedding', 'Approved'),
(52, 12, '058', '06/12/19', 'wersfrdfgfvhbv', 'Approved'),
(53, 13, 'acg/056/2008', '06/14/19', 'tyghvbjh', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `serviceresponses`
--

CREATE TABLE IF NOT EXISTS `serviceresponses` (
  `SRID` int(29) NOT NULL AUTO_INCREMENT,
  `SID` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `RequestDate` varchar(30) NOT NULL,
  `RequestReason` varchar(70) NOT NULL,
  `RequestStatus` varchar(40) NOT NULL,
  PRIMARY KEY (`SRID`),
  KEY `SID` (`SID`),
  KEY `SID_2` (`SID`),
  KEY `SID_3` (`SID`),
  KEY `SID_4` (`SID`),
  KEY `user_id` (`user_id`),
  KEY `SRID` (`SRID`),
  KEY `SID_5` (`SID`),
  KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `serviceresponses`
--

INSERT INTO `serviceresponses` (`SRID`, `SID`, `user_id`, `RequestDate`, `RequestReason`, `RequestStatus`) VALUES
(5, 2, 'ETR/555/07', '05/12/18', ' For trainng', 'Approve'),
(47, 44, 'ETR/555/07', '05/12/18', ' For trainng', 'Approved'),
(48, 43, 'ETR/555/07', '05/12/18', ' For trainng', 'Approved'),
(49, 42, 'ETR/555/07', '05/12/18', ' For trainng', 'Approved'),
(50, 41, 'ETR/555/07', '05/12/18', ' For trainng', 'Approved'),
(51, 40, 'SCIR/105/09', '06/15/18', 'Spacial case in health problem', 'Approved'),
(53, 45, 'fr/23/12', '06/20/18', 'For exchange info', 'Approved'),
(54, 47, 'OFR/048/05', '06/20/18', 'Meeting for teachers ', 'Approved'),
(55, 49, 'SCI/214/07', '06/21/18', 'fffffffffffffffffffffff', 'Approved'),
(56, 49, 'SCIR/153/07', '06/22/18', 'There is meeting for class representative.', 'Approved'),
(57, 51, 'SCIR/088/07', '05/11/19', 'weweeweweew', 'Approved'),
(58, 59, 'acg/309/2008', '04/07/19', 'to enjoy', 'Approved'),
(59, 56, 'abc/234/09', '07/29/19', 'to see the datacenter', 'Approved'),
(60, 50, 'SCIR/156/07', '06/22/19', 'There is meeting for class representative.', 'Approved'),
(61, 64, 'rt/055/08', '06/12/19', 'rfggfgbf', 'Approved'),
(62, 63, 'acg/050/2008', '06/12/19', 'rfgfhgfbhg', 'Approved'),
(63, 65, 'acg/057/2008', '06/12/19', 'edscscxx', 'Approved'),
(64, 66, '034', '06/19/19', 'to training', 'Approved'),
(65, 67, 'abc/056/2008', '06/20/19', 'to transport', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `serviceresponsess`
--

CREATE TABLE IF NOT EXISTS `serviceresponsess` (
  `SRID` int(29) NOT NULL AUTO_INCREMENT,
  `Plate_no` int(12) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `RequestDate` varchar(30) NOT NULL,
  `RequestStatus` varchar(40) NOT NULL,
  PRIMARY KEY (`SRID`),
  KEY `Plate_no` (`Plate_no`),
  KEY `SRID` (`SRID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `serviceresponsess`
--

INSERT INTO `serviceresponsess` (`SRID`, `Plate_no`, `FullName`, `RequestDate`, `RequestStatus`) VALUES
(62, 5009, 'AbebeÂ belete', '2019-06-20', 'Approve'),
(63, 4000, 'AbebeÂ belete', '2019-06-05', 'Approve'),
(64, 4000, 'AbebeÂ belete', '2019-06-05', 'Maintained'),
(65, 4000, 'AbebeÂ belete', '2019-06-14', 'Maintained'),
(66, 3803, 'Getasew? Adugnaw', '05/19/19', 'Maintained'),
(67, 3803, 'Getasew? Adugnaw', '05/19/19', 'Approve'),
(68, 3803, 'Getasew? Adugnaw', '05/19/19', 'Maintained');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE IF NOT EXISTS `user1` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `sex` varchar(33) NOT NULL,
  `DOB` date NOT NULL,
  `age` int(23) NOT NULL,
  `city` varchar(100) NOT NULL,
  `role` varchar(122) NOT NULL,
  `phone_no` int(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `last_seen` varchar(210) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`user_id`, `first_name`, `last_name`, `sex`, `DOB`, `age`, `city`, `role`, `phone_no`, `email`, `last_seen`) VALUES
(27, 'Admin', 'Admin', 'm', '2001-09-07', 23, 'BahirDar', 'Admin', 9090909, 'deb@gmail.com', '2018-05-27 12:44:35'),
(29, 'officer', 'kebe', 'F', '2004-12-02', 27, 'Gondar', ' 	Ticket_Officer', 9090909, 'rts@gmail.com', '2015-05-27 10:44:35'),
(37, 'manager', 'Manager', 'F', '2001-09-07', 13, 'hawassa', 'manager', 948154623, 'deb@gmail.com', '2015-05-27 10:44:35'),
(39, 'pass', 'pass', 'F', '2009-12-12', 28, 'Burie Town', 'passenger', 948154623, 'rts@gmail.com', '2018-05-27 12:50:19'),
(40, 'we', 'wewe', 'f', '2001-09-07', 34, 'Burie', 'Passenger', 948154623, 'as@gmail.com', '2013-05-27 12:44:35'),
(41, 'habtie', 'habtie', 'M', '2004-12-02', 27, 'BahirDar', 'passenger', 987654321, 'cd@gmail.com', '2015-05-27 10:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `FNAME` varchar(30) DEFAULT NULL,
  `mNAME` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `user_id` varchar(15) NOT NULL DEFAULT '',
  `sex` varchar(8) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `phone_no` varchar(25) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `status` varchar(5) NOT NULL,
  `statuss` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`FNAME`, `mNAME`, `lname`, `user_id`, `sex`, `level`, `phone_no`, `username`, `password`, `status`, `statuss`) VALUES
('Abebe', 'belete', 'Assefa', 'abc/051/2008', 'Male', '5', '1831894564', 'mechanic', 'mechanic13', '1', '2'),
('andargachew', 'ayalew', 'adane', 'acg/051/2008', 'Male', '3', '511022334', 'staf123', 'stafstaf', '1', '2'),
('girmew', 'belayneh', 'mekuriyaw', 'bcd/070/2008', 'Male', '1', '3532344523', 'administratorr', 'admin12345', '1', '2'),
('masresha', 'Adugnaw', 'simachew', 'ter/057/08', 'Male', '4', '0931894564', 'officer', 'officer123', '1', '2'),
('enkuhane', 'belayneh', 'ebstu', 'ter/098/08', 'Female', '2', '0974832456', 'managerr', '123manman', '1', '2'),
('Amare', 'Misganaw', 'Belsity', 'ter/101/19', 'Male', '3', '0912022334', 'staff', 'staff12345', '1', '2'),
('getaneh', 'Shibabaw', 'Anteneh', 'ter/104/17', 'Male', '6', '0928838475', 'driver', 'driver1234', '1', '3'),
('melese', 'abebe', 'manaye', 'ter/122/18', 'Male', '7', '0912022034', 'passenger', 'passpass12', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `vehicleregister`
--

CREATE TABLE IF NOT EXISTS `vehicleregister` (
  `Plate_no` varchar(30) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Engineno` varchar(30) NOT NULL,
  `Owner` varchar(18) NOT NULL,
  `Capacity` varchar(23) NOT NULL,
  `productiondate` varchar(30) NOT NULL,
  `Insurance` varchar(30) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`Plate_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicleregister`
--

INSERT INTO `vehicleregister` (`Plate_no`, `Type`, `Model`, `Engineno`, `Owner`, `Capacity`, `productiondate`, `Insurance`, `status`) VALUES
('059', 'Nissan pick up', 'HZJ79LTJMRS', '43', 'wert', '34', '2019-06-11', 'Insured', 1),
('098', 'Fiat-mini-bus', 'BE637JLSH', '23', 'enkuhane', '70', '2019-06-13', 'Insured', 1),
('1234', 'Mercedes benz bus', 'KUN25L-PRMDHV', '1a2', 'MTU', '64', '2018-06-12', 'Insured', 1),
('3803', 'Cacciamali bus', 'KB 7TNJNML', '456', 'getaneh', '39', '2019-05-07', 'Insured', 0),
('4000', 'Cacciamali bus', 'BF120', '34', 'getaneh', '45', '2019-05-13', 'Uninsured', 0),
('5009', 'Cacciamali bus', 'BF120', '400', 'burie', '45', '2019-06-17', 'Insured', 1),
('5678', 'Nissan patrol', 'KB 7TNJNML', '500', 'burie town', '56', '2019-06-25', 'Uninsured', 1),
('80093', 'Toyota single cub', 'BE637JLSH', '500', 'getaneh', '60', '2019-05-29', 'Insured', 1),
('90001', 'Nissan pick up', 'BE637JLSH', '2345', 'btown', '80', '2019-05-30', 'Insured', 0);
