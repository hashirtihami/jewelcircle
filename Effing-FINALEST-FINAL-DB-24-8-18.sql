-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2018 at 03:01 PM
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

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`couponId`, `couponCode`, `description`, `discount`, `expiryDate`) VALUES
(1, 'EID18', 'EID MUBARAK', 50, '2018-08-14');

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
  `active` tinyint(1) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zipcode` int(50) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `first_name`, `last_name`, `email`, `password`, `hash`, `contact`, `active`, `address`, `city`, `zipcode`, `country`, `role`) VALUES
(1, 'Hashir', 'Tihami', 'pipi@pipi.pipi', '$2y$10$4Ax.jnTWQOwIJDhdVanbY.9L2ME9mM/iljrrgCJ3SK00O97n0nrJG', 'ac1dd209cbcc5e5d1c6e28598e8cbbe8', '+923158257773', 0, 'H#l87, Sector 5l, north karachi', 'Karachi', 75850, 'Pakistan', ''),
(2, 'Hashir', 'Tihami', 'asdf@jmabil.com', '$2y$10$ivq4si5GrUzZxSDXgV.JwuDo5GwkDc0UZTpkvN4ciLb/tEJBOd9zu', '92262bf907af914b95a0fc33c3f33bf6', '+923158257773', 0, 'H#l87, Sector 5l, north karachi', 'Karachi', 75850, 'Pakistan', ''),
(3, 'Hashir', 'Tihami', 'jimi@msalk.com', '$2y$10$XnGMOyd1BO976jMye//fmuIc.3IwdoB2ekdsSJFW9drNIq17BxeAW', 'b56a18e0eacdf51aa2a5306b0f533204', '+923158257773', 0, 'H#l87, Sector 5l, north karachi', 'Karachi', 75850, 'Pakistan', 'baap'),
(4, 'pipi', 'pipi', 'pipi.pipi@pipi.com', '$2y$10$IPMyribyfmMdmhD6647FB.Hrm1o6FADazTEyCS4PheTo4qWk46XTS', '621461af90cadfdaf0e8d4cc25129f91', 'ashdjkha', 0, 'kljaklsdj', 'klasdjkldj', 0, 'kjdklasjdkl', 'daklsj'),
(8, 'Wahaj', 'Hussain', 'wahajhussain_47@hotmail.com', '$2y$10$KdRC2yUn/AjETLg3hyc3SO1Iezrh50Ron1XfkM49vJ5b725nHJOxq', '86b122d4358357d834a87ce618a55de0', '03242445982', 1, 'b-15 , shoaib plaza , block 1 , gulshan-e-iqbal', 'Karachi', 75300, 'Pakistan', 'customer'),
(9, 'Wahaj', 'Hussain', 'wahajhssn@gmail.com', '$2y$10$2lJRXWmt8r5fYiZSubMEA.QnpdjrlUoGvU6QlwhqBYaCeK7mLg4yC', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '03242445982', 1, 'b-14, shoaib plaza , block 1 , gulshan-e-iqbal', 'Karachi', 75300, 'Pakistan', 'customer'),
(10, 'Wahaj', 'Hussain', 'hah@hotmail.com', '$2y$10$NEzoP8R.t9wslVQjXzZ6qus8SnrlbakzZ9.LBrOZqIUYyIqDtjlwO', 'fa14d4fe2f19414de3ebd9f63d5c0169', '03242445982', 1, 'b-15 , shoaib plaza , block 1 , gulshan-e-iqbal', 'Karachi', 75300, '', 'temprorary'),
(11, 'Hashir', 'Tihami', 'hashirtihamdddipk@gmail.com', '$2y$10$lRR4t2GmNIhFDG4QCsBgJOOhDHXYZKyIuaiVlIy77zmYEPJksVeXK', '33e8075e9970de0cfea955afd4644bb2', '123', 1, 'h#l87,sector5l,northkarachi', 'karachi', 75850, '', 'temprorary'),
(12, 'Hashir', 'Tihami', 'hashirtihamipk@gmail.com', '$2y$10$NIKRpIGHLeS6gl7s7dIzq.iljKaBOfkiut2eE9AwhJKw3mTyDkmse', 'c8c41c4a18675a74e01c8a20e8a0f662', '+923158257773', 1, 'h#l87,sector5l,northkarachi', 'karachi', 75850, 'Pakistan', 'customer');

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
(12322, 12, 1, 2, 3, 2, 2, 122, 123, 122, NULL),
(15111, 15, 1, 5, 1, 1, 1, 151, 151, 151, NULL),
(15112, 15, 1, 5, 1, 1, 2, 151, 151, 152, NULL),
(15121, 15, 1, 5, 1, 2, 1, 152, 151, 151, NULL),
(15122, 15, 1, 5, 1, 2, 2, 152, 151, 152, NULL),
(15211, 15, 1, 5, 2, 1, 1, 151, 152, 151, NULL),
(15212, 15, 1, 5, 2, 1, 2, 151, 152, 152, NULL),
(15221, 15, 1, 5, 2, 2, 1, 152, 152, 151, NULL),
(15222, 15, 1, 5, 2, 2, 2, 152, 152, 152, NULL),
(15311, 15, 1, 5, 3, 1, 1, 151, 153, 151, NULL),
(15312, 15, 1, 5, 3, 1, 2, 151, 153, 152, NULL),
(15321, 15, 1, 5, 3, 2, 1, 152, 153, 151, NULL),
(15322, 15, 1, 5, 3, 2, 2, 152, 153, 152, NULL),
(16111, 16, 1, 6, 1, 1, 1, 161, 161, 161, NULL),
(16112, 16, 1, 6, 1, 1, 2, 161, 161, 162, NULL),
(16121, 16, 1, 6, 1, 2, 1, 162, 161, 161, NULL),
(16122, 16, 1, 6, 1, 2, 2, 162, 161, 162, NULL),
(16211, 16, 1, 6, 2, 1, 1, 161, 162, 161, NULL),
(16212, 16, 1, 6, 2, 1, 2, 161, 162, 162, NULL),
(16221, 16, 1, 6, 2, 2, 1, 162, 162, 161, NULL),
(16222, 16, 1, 6, 2, 2, 2, 162, 162, 162, NULL),
(16311, 16, 1, 6, 3, 1, 1, 161, 163, 161, NULL),
(16312, 16, 1, 6, 3, 1, 2, 161, 163, 162, NULL),
(16321, 16, 1, 6, 3, 2, 1, 162, 163, 161, NULL),
(16322, 16, 1, 6, 3, 2, 2, 162, 163, 162, NULL),
(18111, 18, 1, 8, 1, 1, 1, 181, 181, 181, NULL),
(18112, 18, 1, 8, 1, 1, 2, 181, 181, 182, NULL),
(18121, 18, 1, 8, 1, 2, 1, 182, 181, 181, NULL),
(18122, 18, 1, 8, 1, 2, 2, 182, 181, 182, NULL),
(18211, 18, 1, 8, 2, 1, 1, 181, 182, 181, NULL),
(18212, 18, 1, 8, 2, 1, 2, 181, 182, 182, NULL),
(18221, 18, 1, 8, 2, 2, 1, 182, 182, 181, NULL),
(18222, 18, 1, 8, 2, 2, 2, 182, 182, 182, NULL),
(18311, 18, 1, 8, 3, 1, 1, 181, 183, 181, NULL),
(18312, 18, 1, 8, 3, 1, 2, 181, 183, 182, NULL),
(18321, 18, 1, 8, 3, 2, 1, 182, 183, 181, NULL),
(18322, 18, 1, 8, 3, 2, 2, 182, 183, 182, NULL),
(23111, 23, 2, 3, 1, 1, 1, 231, 231, 231, NULL),
(23112, 23, 2, 3, 1, 1, 2, 231, 231, 232, NULL),
(23121, 23, 2, 3, 1, 2, 1, 232, 231, 231, NULL),
(23122, 23, 2, 3, 1, 2, 2, 232, 231, 232, NULL),
(23211, 23, 2, 3, 2, 1, 1, 231, 232, 231, NULL),
(23212, 23, 2, 3, 2, 1, 2, 231, 232, 232, NULL),
(23221, 23, 2, 3, 2, 2, 1, 232, 232, 231, NULL),
(23222, 23, 2, 3, 2, 2, 2, 232, 232, 232, NULL),
(23311, 23, 2, 3, 3, 1, 1, 231, 233, 231, NULL),
(23312, 23, 2, 3, 3, 1, 2, 231, 233, 232, NULL),
(23321, 23, 2, 3, 3, 2, 1, 232, 233, 231, NULL),
(23322, 23, 2, 3, 3, 2, 2, 232, 233, 232, NULL),
(41111, 41, 4, 1, 1, 1, 1, 411, 411, 411, NULL),
(41112, 41, 4, 1, 1, 1, 2, 411, 411, 412, NULL),
(41211, 41, 4, 1, 2, 1, 1, 411, 412, 411, NULL),
(41212, 41, 4, 1, 2, 1, 2, 411, 412, 412, NULL),
(41311, 41, 4, 1, 3, 1, 1, 411, 413, 411, NULL),
(41312, 41, 4, 1, 3, 1, 2, 411, 413, 412, NULL);

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

--
-- Dumping data for table `giftcard`
--

INSERT INTO `giftcard` (`giftcardId`, `cardName`, `cardCost`, `fileExt`) VALUES
(1, 'Happy Birthday', 100, 'jpg'),
(2, 'Congrats', 100, 'jpg'),
(3, 'Congratulation', 100, 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `imageDestination` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imageID`, `productID`, `imageDestination`) VALUES
(2, 11, '../assets/images/products/1.11-thumb.jpg'),
(3, 11, '../assets/images/products/2.11-thumb.jpg'),
(4, 11, '../assets/images/products/3.11-thumb.jpg'),
(5, 13, '../assets/images/products/1.13-thumb.jpg'),
(6, 13, '../assets/images/products/2.13-thumb.jpg'),
(7, 13, '../assets/images/products/3.13-thumb.jpg'),
(8, 12, '../assets/images/products/1.12-thumb.jpg'),
(9, 12, '../assets/images/products/2.12-thumb.jpg'),
(10, 12, '../assets/images/products/3.12-thumb.jpg'),
(11, 23, '../assets/images/products/1.23-thumb.jpg'),
(12, 23, '../assets/images/products/2.23-thumb.jpg'),
(13, 23, '../assets/images/products/3.23-thumb.jpg'),
(14, 41, '../assets/images/products/1.41-thumb.jpg'),
(15, 41, '../assets/images/products/2.41-thumb.jpg'),
(16, 41, '../assets/images/products/3.41-thumb.jpg'),
(17, 16, '../assets/images/products/1.16-thumb.jpg'),
(18, 15, '../assets/images/products/1.15-thumb.jpg'),
(19, 15, '../assets/images/products/2.15-thumb.jpg'),
(20, 15, '../assets/images/products/3.15-thumb.jpg'),
(21, 18, '../assets/images/products/1.18-thumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `influencer`
--

CREATE TABLE `influencer` (
  `influencer_id` int(200) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `social` varchar(100) NOT NULL,
  `mainsite` varchar(200) NOT NULL,
  `othersite` varchar(200) DEFAULT NULL,
  `fans` varchar(200) NOT NULL,
  `msg` varchar(200) DEFAULT NULL,
  `role` varchar(50) NOT NULL
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
(111, 50),
(112, 100),
(113, 50),
(121, 50),
(122, 100),
(123, 50),
(151, 20),
(152, 25),
(153, 30),
(161, 10),
(162, 20),
(163, 23),
(181, 200),
(182, 300),
(183, 400),
(231, 100),
(232, 100),
(233, 100),
(411, 50),
(412, 100),
(413, 50);

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
(112, 50),
(121, 0),
(122, 100),
(151, 0),
(152, 100),
(161, 0),
(162, 20),
(181, 0),
(182, 800),
(231, 0),
(232, 50),
(411, 0),
(412, 100);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderID` int(11) NOT NULL,
  `orderDate` datetime DEFAULT NULL,
  `totalAmount` int(11) DEFAULT NULL,
  `customerID` int(11) DEFAULT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderID`, `orderDate`, `totalAmount`, `customerID`, `status`) VALUES
(24, '2018-08-23 11:33:33', 200, 9, 'Pending'),
(26, '2018-08-24 03:50:37', 1750, 9, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `no` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `detailsID` int(11) NOT NULL,
  `nameOnProduct` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`no`, `orderID`, `productID`, `detailsID`, `nameOnProduct`, `quantity`, `type`) VALUES
(5, 24, 1, 0, 'NULL', 2, 'giftcard'),
(8, 26, 41, 41312, 'Wahaj', 1, 'product'),
(9, 26, 1, 0, 'NULL', 1, 'giftcard');

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
(111, 1600),
(112, 1800),
(112, 1800),
(111, 1600),
(111, 1600),
(112, 1800),
(112, 1800),
(111, 1600),
(111, 1600),
(112, 1800),
(112, 1800),
(121, 1600),
(121, 1600),
(122, 1800),
(122, 1800),
(121, 1600),
(121, 1600),
(122, 1800),
(122, 1800),
(121, 1600),
(121, 1600),
(122, 1800),
(122, 1800),
(231, 1500),
(231, 1500),
(231, 1500),
(231, 1500),
(231, 1500),
(231, 1500),
(411, 1500),
(411, 1500),
(411, 1500),
(411, 1500),
(411, 1500),
(411, 1500),
(232, 2000),
(161, 100),
(161, 100),
(162, 200),
(162, 200),
(161, 100),
(161, 100),
(162, 200),
(162, 200),
(161, 100),
(161, 100),
(162, 200),
(162, 200),
(151, 200),
(151, 200),
(152, 100),
(152, 100),
(151, 200),
(151, 200),
(152, 100),
(152, 100),
(151, 200),
(151, 200),
(152, 100),
(152, 100),
(181, 500),
(181, 500),
(182, 200),
(182, 200),
(181, 500),
(181, 500),
(182, 200),
(182, 200),
(181, 500),
(181, 500),
(182, 200),
(182, 200);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `no` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `nameLength` int(11) DEFAULT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`no`, `productID`, `picture`, `description`, `date`, `nameLength`, `discount`) VALUES
(15, 11, NULL, 'Simple Bracelet', '2018-08-04 01:03:41', 10, 50),
(17, 12, NULL, 'Heart Bracelet', '2018-08-05 12:19:34', 5, 20),
(21, 15, NULL, 'jkl;kl;kl;kl;kl;k;lk;k;lllllllllllllllllllllllllll', '2018-08-23 11:57:08', 10, 30),
(20, 16, NULL, 'They have a fun and personalized feel to them. In addition, these are versatile enough for everyday wear. Slip them on alone or layer them up for a bolder look. Depending on which style you get, you can customize Jewel Circle pieces with initials, one name, or two names. In addition to getting your own name, other options would be to get the name of a boyfriend, BFF, pet, parent, or even a favorite word that you use for inspiration', '2018-08-23 11:38:01', 11, 20),
(22, 18, NULL, 'They have a fun and personalized feel to them. In addition, these are versatile enough for everyday wear. Slip them on alone or layer them up for a bolder look. Depending on which style you get, you can customize Jewel Circle pieces with initials, one name, or two names. In addition to getting your own name, other options would be to get the name of a boyfriend, BFF, pet, parent, or even a favorite word that you use for inspiration', '2018-08-24 18:00:38', 5, 10),
(18, 23, NULL, 'Infinity Ring', '2018-08-09 20:15:04', 6, 50),
(19, 41, NULL, 'Simple Locket', '2018-08-12 00:04:37', 12, 10);

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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewID` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewID`, `rating`, `productID`, `email`) VALUES
(10, 3, 41, 'wahajhssn@gmail.com'),
(11, 5, 23, 'wahajhssn@gmail.com'),
(12, 5, 12, 'wahajhssn@gmail.com'),
(13, 3, 11, 'wahajhssn@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shippingId` int(11) NOT NULL,
  `country` varchar(15) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shippingId`, `country`, `cost`) VALUES
(0, 'Pakistan', 500),
(0, 'USA', 2000);

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
  ADD KEY `Key` (`first_name`,`last_name`,`email`,`contact`);

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
-- Indexes for table `influencer`
--
ALTER TABLE `influencer`
  ADD PRIMARY KEY (`influencer_id`);

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
  ADD KEY `FK` (`customerID`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`no`);

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
  ADD KEY `Key` (`picture`,`description`(767),`date`,`nameLength`),
  ADD KEY `no` (`no`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`typeID`),
  ADD KEY `Key` (`typeName`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewID`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `couponId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `detailsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41313;

--
-- AUTO_INCREMENT for table `giftcard`
--
ALTER TABLE `giftcard`
  MODIFY `giftcardId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `influencer`
--
ALTER TABLE `influencer`
  MODIFY `influencer_id` int(200) NOT NULL AUTO_INCREMENT;

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
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `plating`
--
ALTER TABLE `plating`
  MODIFY `platingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `typeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `sizeID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
