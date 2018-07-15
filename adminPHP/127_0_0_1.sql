-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 02:22 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test-jc`
--
CREATE DATABASE IF NOT EXISTS `test-jc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test-jc`;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `addressID` int(11) NOT NULL,
  `unitNumber` varchar(20) DEFAULT NULL,
  `streetNumber` varchar(20) DEFAULT NULL,
  `streetName` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `postalCode` int(11) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category`) VALUES
('Bracelet'),
('Cufflinks'),
('Locket'),
('Ring');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `addressID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `detailsID` int(11) NOT NULL,
  `productID` int(11) DEFAULT NULL,
  `typeName` varchar(15) DEFAULT NULL,
  `languageName` varchar(15) DEFAULT NULL,
  `platingType` varchar(15) DEFAULT NULL,
  `sizeType` varchar(15) DEFAULT NULL,
  `nameTypeValue` varchar(15) DEFAULT NULL,
  `category` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemID` int(11) NOT NULL,
  `productID` int(11) DEFAULT NULL,
  `orderID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `languageName` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`languageName`) VALUES
('Arabic'),
('English'),
('Urdu');

-- --------------------------------------------------------

--
-- Table structure for table `nametype`
--

CREATE TABLE `nametype` (
  `nameTypeValue` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nametype`
--

INSERT INTO `nametype` (`nameTypeValue`) VALUES
('Double'),
('Single');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderID` int(11) NOT NULL,
  `orderDate` datetime DEFAULT NULL,
  `totalAmount` int(11) DEFAULT NULL,
  `customerID` int(11) DEFAULT NULL,
  `addressID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `plating`
--

CREATE TABLE `plating` (
  `platingType` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plating`
--

INSERT INTO `plating` (`platingType`) VALUES
('Gold'),
('Silver');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `regPrice` int(11) DEFAULT NULL,
  `salesPrice` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `typeName` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`typeName`) VALUES
('Calligraphy'),
('Fancy'),
('Heart'),
('Infinity'),
('Pearl'),
('Simple'),
('Zodiac');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `sizeType` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addressID`),
  ADD KEY `Key` (`unitNumber`,`streetNumber`,`streetName`,`city`,`postalCode`,`country`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`),
  ADD KEY `Key` (`firstName`,`lastName`,`email`,`contact`),
  ADD KEY `FK` (`addressID`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`detailsID`),
  ADD KEY `FK` (`productID`,`typeName`,`languageName`,`platingType`,`sizeType`,`nameTypeValue`,`category`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemID`),
  ADD KEY `FK` (`productID`,`orderID`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`languageName`);

--
-- Indexes for table `nametype`
--
ALTER TABLE `nametype`
  ADD KEY `Key` (`nameTypeValue`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `Key` (`orderDate`,`totalAmount`),
  ADD KEY `FK` (`customerID`,`addressID`);

--
-- Indexes for table `plating`
--
ALTER TABLE `plating`
  ADD PRIMARY KEY (`platingType`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `Key` (`picture`,`description`,`regPrice`,`salesPrice`,`date`,`quantity`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`typeName`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`sizeType`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `addressID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `detailsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
