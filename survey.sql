-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2017 at 02:31 PM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `urcscon3_juneau`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `ID` int(255) NOT NULL,
  `Name` varchar(75) NOT NULL,
  `Email` varchar(75) NOT NULL,
  `Telephone` varchar(75) NOT NULL,
  `CampusStatus` varchar(75) NOT NULL,
  `FoodLocation` varchar(75) NOT NULL,
  `QualityRate` varchar(75) NOT NULL,
  `FoodPurchase` varchar(75) NOT NULL,
  `WhereToGetFood` varchar(75) NOT NULL,
  `DietaryNeeds` varchar(75) NOT NULL,
  `SpecialDietary` varchar(75) NOT NULL,
  `Cafeteria` varchar(75) NOT NULL,
  `Message` varchar(75) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=130 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`ID`, `Name`, `Email`, `Telephone`, `CampusStatus`, `FoodLocation`, `QualityRate`, `FoodPurchase`, `WhereToGetFood`, `DietaryNeeds`, `SpecialDietary`, `Cafeteria`, `Message`) VALUES
(127, 'Lu Nguyen', 'lunguyen94x@gmail.com', '585 474 4989', 'off-campus', 'danforth, douglass, eastman, pit, rocky', 'excellent', 'never', 'take-from-home', 'no', '', '7pm', 'It''s me Lu!'),
(72, 'Robert M Kostin', 'robert@rkostin.com', '5853305035', 'on-campus', 'danforth', 'excellent', 'never', 'take-from-home', 'yes', 'diabetic-diet', '7pm', 'test'),
(75, 'Lu Nguyen', 'lunguyen94x@gmail.com', '585 474 4989', 'off-campus', 'danforth', 'excellent', 'less-than-once-a-month', 'take-from-home', 'no', 'low-cholesterol', '7pm', 'Hello CSC 174!'),
(101, 'No Name', 'noname@ur.rochester.edu', '585 000 0000', 'on-campus', 'd', 'excellent', 'never', 'take-from-home', 'yes', 'diabetic-diet', '7pm', 'Hi'),
(112, 'Jennifer', 'jennifer@mac.com', '703 732 7807', 'off-campus', 'danforth, douglass, eastman, pit, rocky', 'excellent', 'never', 'take-from-home', 'yes', 'diabetic-diet', '7pm', 'Hi'),
(114, 'Jenny', 'jenny123@gmail.com', '123456789', 'on-campus', 'danforth , douglass , eastman , pit , rocky', 'very-good', '1-3-times-a-month', 'restaurants', 'yes', 'other', '7pm', 'test'),
(129, 'James', 'jzl0820@gmail.com', '585 563 6545', 'on-campus', 'danforth, douglass, eastman, pit, rocky', 'excellent', 'less-than-once-a-month', 'take-from-home', 'no', '', '9pm', 'It''s me James'),
(128, 'Phoi Nguyen', 'phoinguyen93x@gmail.com', '585 281 8139', 'off-campus', 'danforth, douglass, eastman, pit, rocky', 'excellent', 'never', 'take-from-home', 'no', 'low-cholesterol', '8pm', 'It''s me Phoi!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=130;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
