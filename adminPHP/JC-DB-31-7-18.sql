-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2018 at 07:59 PM
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `category` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `category`) VALUES
(1, 'Bracelet'),
(3, 'Cufflinks'),
(6, 'Earring'),
(4, 'Locket'),
(2, 'Ring');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `couponId` int(11) NOT NULL,
  `couponCode` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `description` varchar(50) NOT NULL,
  `discount` int(11) NOT NULL,
  `expiryDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `detailsID` int(11) NOT NULL,
  `productID` int(11) DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `typeID` int(11) DEFAULT NULL,
  `languageID` int(11) DEFAULT NULL,
  `platingID` int(11) DEFAULT NULL,
  `nameTypeID` int(11) DEFAULT NULL,
  `platingPriceId` int(11) NOT NULL,
  `languagePriceId` int(11) NOT NULL,
  `nameTypePriceId` int(11) NOT NULL,
  `sizeID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`detailsID`, `productID`, `categoryID`, `typeID`, `languageID`, `platingID`, `nameTypeID`, `platingPriceId`, `languagePriceId`, `nameTypePriceId`, `sizeID`) VALUES
(11111, 11, 1, 1, 1, 1, 1, 111, 111, 111, NULL),
(11112, 11, 1, 1, 1, 1, 2, 111, 111, 112, NULL),
(11121, 11, 1, 1, 1, 2, 1, 112, 111, 111, NULL),
(11122, 11, 1, 1, 1, 2, 2, 112, 111, 112, NULL),
(11211, 11, 1, 1, 2, 1, 1, 111, 112, 111, NULL),
(11212, 11, 1, 1, 2, 1, 2, 111, 112, 112, NULL),
(11221, 11, 1, 1, 2, 2, 1, 112, 112, 111, NULL),
(11222, 11, 1, 1, 2, 2, 2, 112, 112, 112, NULL),
(11311, 11, 1, 1, 3, 1, 1, 111, 113, 111, NULL),
(11312, 11, 1, 1, 3, 1, 2, 111, 113, 112, NULL),
(11321, 11, 1, 1, 3, 2, 1, 112, 113, 111, NULL),
(11322, 11, 1, 1, 3, 2, 2, 112, 113, 112, NULL),
(12111, 12, 1, 2, 1, 1, 1, 121, 121, 121, NULL),
(12112, 12, 1, 2, 1, 1, 2, 121, 121, 122, NULL),
(12121, 12, 1, 2, 1, 2, 1, 122, 121, 121, NULL),
(12122, 12, 1, 2, 1, 2, 2, 122, 121, 122, NULL),
(12211, 12, 1, 2, 2, 1, 1, 121, 122, 121, NULL),
(12212, 12, 1, 2, 2, 1, 2, 121, 122, 122, NULL),
(12221, 12, 1, 2, 2, 2, 1, 122, 122, 121, NULL),
(12222, 12, 1, 2, 2, 2, 2, 122, 122, 122, NULL),
(12311, 12, 1, 2, 3, 1, 1, 121, 123, 121, NULL),
(12312, 12, 1, 2, 3, 1, 2, 121, 123, 122, NULL),
(12321, 12, 1, 2, 3, 2, 1, 122, 123, 121, NULL),
(12322, 12, 1, 2, 3, 2, 2, 122, 123, 122, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `giftcard`
--

CREATE TABLE `giftcard` (
  `giftcardId` int(11) NOT NULL,
  `cardName` varchar(50) NOT NULL,
  `cardCost` int(11) NOT NULL,
  `fileExt` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `imageDestination` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemID` int(11) NOT NULL,
  `productID` int(11) DEFAULT NULL,
  `orderID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `languageID` int(11) NOT NULL,
  `languageName` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`languageID`, `languageName`) VALUES
(3, 'Arabic'),
(2, 'English'),
(1, 'Urdu');

-- --------------------------------------------------------

--
-- Table structure for table `languageprice`
--

CREATE TABLE `languageprice` (
  `languagePriceId` int(11) NOT NULL,
  `languagePrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languageprice`
--

INSERT INTO `languageprice` (`languagePriceId`, `languagePrice`) VALUES
(111, 100),
(112, 50),
(113, 100),
(121, 100),
(122, 50),
(123, 100);

-- --------------------------------------------------------

--
-- Table structure for table `nametype`
--

CREATE TABLE `nametype` (
  `nameTypeID` int(11) NOT NULL,
  `nameTypeValue` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nametype`
--

INSERT INTO `nametype` (`nameTypeID`, `nameTypeValue`) VALUES
(2, 'Double'),
(1, 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `nametypeprice`
--

CREATE TABLE `nametypeprice` (
  `nameTypePriceId` int(11) NOT NULL,
  `nameTypePrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nametypeprice`
--

INSERT INTO `nametypeprice` (`nameTypePriceId`, `nameTypePrice`) VALUES
(111, 0),
(112, 100),
(121, 0),
(122, 50);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plating`
--

CREATE TABLE `plating` (
  `platingID` int(11) NOT NULL,
  `platingType` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plating`
--

INSERT INTO `plating` (`platingID`, `platingType`) VALUES
(2, 'Gold'),
(1, 'Silver');

-- --------------------------------------------------------

--
-- Table structure for table `platingprice`
--

CREATE TABLE `platingprice` (
  `platingPriceId` int(11) NOT NULL,
  `platingPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `platingprice`
--

INSERT INTO `platingprice` (`platingPriceId`, `platingPrice`) VALUES
(111, 1600),
(112, 1800),
(121, 1600),
(122, 1800);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `no` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `nameLength` int(11) DEFAULT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`no`, `productID`, `picture`, `description`, `date`, `nameLength`, `discount`) VALUES
(11, 11, NULL, 'Simple Bracelet', '2018-07-31 18:51:07', 10, 40),
(12, 12, NULL, 'Heart Bracelet', '2018-07-31 22:52:53', 7, 50);

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `typeID` int(11) NOT NULL,
  `typeName` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`typeID`, `typeName`) VALUES
(8, 'Anchor'),
(7, 'Caligraphy'),
(4, 'Fancy'),
(2, 'Heart'),
(3, 'Infinity'),
(5, 'Pearl'),
(1, 'Simple'),
(6, 'Zodiac');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shippingId` int(11) NOT NULL,
  `country` varchar(15) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `sizeID` int(11) NOT NULL,
  `sizeType` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`categoryID`),
  ADD KEY `Key` (`category`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`couponId`);

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
  ADD KEY `FK` (`productID`,`typeID`,`languageID`,`platingID`,`sizeID`,`nameTypeID`,`categoryID`);

--
-- Indexes for table `giftcard`
--
ALTER TABLE `giftcard`
  ADD PRIMARY KEY (`giftcardId`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageID`);

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
  ADD PRIMARY KEY (`languageID`),
  ADD KEY `Key` (`languageName`);

--
-- Indexes for table `languageprice`
--
ALTER TABLE `languageprice`
  ADD PRIMARY KEY (`languagePriceId`);

--
-- Indexes for table `nametype`
--
ALTER TABLE `nametype`
  ADD PRIMARY KEY (`nameTypeID`),
  ADD KEY `Key` (`nameTypeValue`);

--
-- Indexes for table `nametypeprice`
--
ALTER TABLE `nametypeprice`
  ADD PRIMARY KEY (`nameTypePriceId`);

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
  ADD PRIMARY KEY (`platingID`),
  ADD KEY `Key` (`platingType`);

--
-- Indexes for table `platingprice`
--
ALTER TABLE `platingprice`
  ADD PRIMARY KEY (`platingPriceId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `Key` (`picture`,`description`,`date`,`nameLength`),
  ADD KEY `no` (`no`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`typeID`),
  ADD KEY `Key` (`typeName`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shippingId`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`sizeID`),
  ADD KEY `Key` (`sizeType`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `addressID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `couponId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `detailsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16323;

--
-- AUTO_INCREMENT for table `giftcard`
--
ALTER TABLE `giftcard`
  MODIFY `giftcardId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `languageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nametype`
--
ALTER TABLE `nametype`
  MODIFY `nameTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plating`
--
ALTER TABLE `plating`
  MODIFY `platingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `typeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shippingId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `sizeID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
