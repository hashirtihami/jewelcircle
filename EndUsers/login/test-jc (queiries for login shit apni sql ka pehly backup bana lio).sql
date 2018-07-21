-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 12:25 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `addressID` int(11) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`addressID`, `address`, `city`, `zipcode`, `country`) VALUES
(1, 'H#l87, Sector 5l, north karachi', 'Karachi', 75850, 'Pakistan'),
(2, 'H#l87, Sector 5l, north karachi', 'Karachi', 75850, 'Pakistan'),
(3, 'H#l87, Sector 5l, north karachi', 'Karachi', 75850, 'Pakistan'),
(4, 'california bitch', 'Karachi', 75850, 'Pakistan'),
(5, 'H#l87, Sector 5l, north karachi', 'Karachi', 75850, 'Pakistan'),
(6, 'amerikano', 'Karachi', 75850, 'Pakistan'),
(7, 'H#l87, Sector 5l, north karachi', 'Karachi', 75850, 'Pakistan'),
(8, 'H#l87, Sector 5l, north karachi', 'Karachi', 75850, 'Pakistan'),
(9, 'H#l87, Sector 5l, north karachi', 'Karachi', 75850, 'Pakistan'),
(10, 'H#l87, Sector 5l, north karachi', 'Karachi', 75850, 'Pakistan'),
(11, 'H#l87, Sector 5l, north karachi', 'Karachi', 75850, 'Pakistan'),
(12, 'H#l87, Sector 5l, north karachi', 'Karachi', 75850, 'Pakistan'),
(13, 'H#l87, Sector 5l, north karachi', 'Karachi', 75850, 'Pakistan'),
(14, 'H#l87, Sector 5l, north karachi', 'Karachi', 75850, 'Pakistan'),
(15, 'H#l87, Sector 5l, north karachi', 'Karachi', 75850, 'Pakistan');

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
(4, 'Locket'),
(2, 'Ring');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `addressID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `first_name`, `last_name`, `email`, `password`, `hash`, `contact`, `addressID`) VALUES
(1, 'Hashir', 'Tihami', 'h@gmail.com', '$2y$10$bpkb/4tX8Auu4uu5ToJEuu5Pn6VKT0fAH16Hg56OP3UzWbAXFe9ea', 'fbd7939d674997cdb4692d34de8633c4', NULL, NULL),
(2, 'Hashir', 'Tihami', 'h2@gmail.com', '$2y$10$Zzh0Zrt5aPXBm0f2hM9Opuji3.Z3cZSX6uD1zeXME/YcvqLre3IZe', '1fc214004c9481e4c8073e85323bfd4b', NULL, NULL),
(3, 'Hashir', 'Tihami', 'h3@gmail.com', '$2y$10$atTGB1O2xEFzOEIpIkAL1e2RsTf3SIR7axKsF0Fnlwv0IpFaZJYbu', '5b8add2a5d98b1a652ea7fd72d942dac', '+923158257773', NULL),
(4, 'Hashir', 'Tihami', 'jh@gmail.com', '$2y$10$tGso8h/8dEnp9KYk8rjQS.WSMidDeNejiI/PiZ4i8dgPtQlPaCSb.', 'e4bb4c5173c2ce17fd8fcd40041c068f', '+923158257773', NULL),
(5, 'Hashir', 'Tihami', 'bla@gmail.com', '$2y$10$d.LbGQpiJNo98dD/K/5hFe5J6d3lp5dfRj0cFhPf6wVMfo8TjdayO', 'bbcbff5c1f1ded46c25d28119a85c6c2', '+923158257773', NULL),
(6, 'Hashir', 'Tihami', 'hashirtihamipk@gmail.com', '$2y$10$nT/OK5W8O9enEQ5bUQiN7uQaWEnMu8Th6798hUQk3KL8F1T7h1rVa', '0aa1883c6411f7873cb83dacb17b0afc', '+923158257773', NULL),
(7, 'Hashir', 'Tihami', 'blakkk@gmail.com', '$2y$10$KWvPSGEnRMJwQOPKr4ywbeGE6hVBrpwx2dmaf6XnoHgBmsCVGVJ.W', '2a084e55c87b1ebcdaad1f62fdbbac8e', '+923158257773', NULL),
(8, 'Hashir', 'Tihami', 'blabla@gmail.com', '$2y$10$ZAUtvMcHdx6ijkIS1RKb/.OA3DvyDEcuRxwcc.SgiJwJO1HdSbkV6', 'e2ef524fbf3d9fe611d5a8e90fefdc9c', '+923158257773', NULL),
(9, 'Hashir', 'Tihami', 'kaddu@gmail.com', '$2y$10$VzHQynakTR3lUXnPqKGKsuQMCvhII0HZJqzKn8vFZPu6ffS7uk2Ti', '9fd81843ad7f202f26c1a174c7357585', '+923158257773', 0),
(10, 'Hashir', 'Tihami', 'chaljaplis@gmail.com', '$2y$10$/8Y9ISTW8I7MoJoU1TlQuO8WEee91xHfnp6EL3yVAYciYAXZwTm8G', '3435c378bb76d4357324dd7e69f3cd18', '+923158257773', NULL),
(11, 'Hashir', 'Tihami', 'chacha@gmail.com', '$2y$10$8HFqiEQkC4XJ84NJP9WOEuFkU2Jfsc5C/FV299TTrj0cOjUgwEZ96', '170c944978496731ba71f34c25826a34', '+923158257773', NULL),
(12, 'Hashir', 'Tihami', 'asdfasdf@gmail.com', '$2y$10$1rz31kHyGJvIm5C9KqgF4enJKruKWb7d0P2cWNTK0p1uPzrHmYQLe', '6c29793a140a811d0c45ce03c1c93a28', '+923158257773', NULL),
(13, 'Hashir', 'Tihami', 'asdasfd@gmail.com', '$2y$10$6fsiNFtZUotbetKbzSmZCeGspo5sklO4jF9U6GBphYbO3HmAiVts6', 'a0a080f42e6f13b3a2df133f073095dd', '+923158257773', NULL),
(14, 'Hashir', 'Tihami', 'kuchbhi@gmail.com', '$2y$10$5mBQy/axrKNsmTQgqpr0O.t6VehHiGxWuP/qnw4YtjY9OAY7wDimC', '7eacb532570ff6858afd2723755ff790', '+923158257773', NULL),
(15, 'Hashir', 'Tihami', 'a@gmail.com', '$2y$10$59T8vvioBkOeyLuFdus8vOpai6.pt3jmRH4iS3DQF5ZseuBOGyAm.', '1700002963a49da13542e0726b7bb758', '+923158257773', NULL),
(16, 'Hashir', 'Tihami', 'b@gmail.com', '$2y$10$q2Iew7Kup2Pr2EZyniY14OtzdiNs3tCDnQsa4sXDpAkSrDjIRZi5O', '217eedd1ba8c592db97d0dbe54c7adfc', '+923158257773', NULL),
(17, 'Hashir', 'Tihami', 'sdafj@gmail.com', '$2y$10$xvQ.ftmUNZF3bhVVDxyHuOUQCQI5hWs3JCowV.T/QlfoBrJBtX4Mi', 'e2c420d928d4bf8ce0ff2ec19b371514', '+923158257773', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `detailsID` int(11) NOT NULL,
  `productID` int(11) DEFAULT NULL,
  `typeID` int(11) DEFAULT NULL,
  `languageID` int(11) DEFAULT NULL,
  `platingID` int(11) DEFAULT NULL,
  `sizeID` int(11) DEFAULT NULL,
  `nameTypeID` int(11) DEFAULT NULL,
  `catetgoryID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(7, 'Caligraphy'),
(4, 'Fancy'),
(2, 'Heart'),
(3, 'Infinity'),
(5, 'Pearl'),
(1, 'Simple'),
(6, 'Zodiac');

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
  ADD KEY `Key` (`city`,`zipcode`,`country`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`),
  ADD KEY `Key` (`category`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`),
  ADD KEY `Key` (`first_name`,`last_name`,`email`,`contact`),
  ADD KEY `FK` (`addressID`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`detailsID`),
  ADD KEY `FK` (`productID`,`typeID`,`languageID`,`platingID`,`sizeID`,`nameTypeID`,`catetgoryID`);

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
-- Indexes for table `nametype`
--
ALTER TABLE `nametype`
  ADD PRIMARY KEY (`nameTypeID`),
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
  ADD PRIMARY KEY (`platingID`),
  ADD KEY `Key` (`platingType`);

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
  ADD PRIMARY KEY (`typeID`),
  ADD KEY `Key` (`typeName`);

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
  MODIFY `addressID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `detailsID` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `typeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `sizeID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
