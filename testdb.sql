-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2016 at 12:57 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

CREATE TABLE `conversation` (
  `id` int(22) NOT NULL,
  `from_id` varchar(200) NOT NULL,
  `to_id` varchar(200) NOT NULL,
  `timestamp` varchar(200) NOT NULL,
  `con_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conversation`
--

INSERT INTO `conversation` (`id`, `from_id`, `to_id`, `timestamp`, `con_id`) VALUES
(1, '21', '1', '1480375206', 0),
(2, '21', '5', '1480375449', 1);

-- --------------------------------------------------------

--
-- Table structure for table `conversation_reply`
--

CREATE TABLE `conversation_reply` (
  `id` int(255) NOT NULL,
  `reply` text NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `timestamp` varchar(500) NOT NULL,
  `con_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conversation_reply`
--

INSERT INTO `conversation_reply` (`id`, `reply`, `from_id`, `to_id`, `timestamp`, `con_id`) VALUES
(1, 'Here I am ', 21, 1, '1480375206', 0),
(2, 'I am here', 21, 5, '1480375449', 1);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(255) DEFAULT NULL,
  `postcode` varchar(10) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `timestamp` int(255) NOT NULL,
  `online` varchar(2) NOT NULL,
  `p_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `username`, `password`, `email`, `phone`, `postcode`, `address`, `reg_date`, `timestamp`, `online`, `p_photo`) VALUES
(1, 'Julie', '123456', 'julie@123.com', 1234, 'H2X 3R2', 'LA CITE', '2016-12-05 17:44:29', 0, '', ''),
(5, 'Julieli', 'qweasd', 'dcadca@d.da', 2146, 'H2X 3R2', 'dww', '2016-12-05 17:45:50', 0, '', ''),
(10, 'Julielili', 'asdqwe', 'dcadcad@d.da', 5357, 'H2X 3R2', 'dww', '2016-12-05 17:45:37', 0, '', ''),
(21, 'julie1', '123456', 'zihan.li@mail.mcgill.ca', 2147483647, 'H2X 3R2', 'NEW REZ', '2016-12-05 17:45:48', 0, '', ''),
(26, 'mmmmmm', '123asd', 'a@123.com', 9876543210, 'H2X 3R2', 'AAA', '2016-12-05 17:47:30', 0, '', ''),
(27, 'melody1', '123asd', 'm@a.com', NULL, 'H2X 3R2', 'AA', '2016-11-29 19:55:20', 0, '', ''),
(28, 'brown', '1234567', 'j@mail.mcgill.ca', NULL, 'H2X3E3', 'helkjdflkj', '2016-11-30 03:49:55', 0, '', ''),
(29, 'shuranran', '123asd', 'julie@123456.com', 5141567123, 'H2X 3R2', 'lib', '2016-12-05 17:47:35', 0, '', ''),
(30, 'MIA', '123ASD', 'MIA@MCGILL.CA', NULL, 'H2X 3R2', 'LA CITE', '2016-11-30 02:37:24', 0, '', ''),
(31, 'taylor1', '123456', 'taylor@163.com', NULL, 'H2X2J1', 'ABCDEFG', '2016-11-30 14:44:13', 0, '', ''),
(32, 'chuqing', '1234567', 'c@q.com', NULL, 'H2X 3R2', 'A', '2016-12-01 01:06:31', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `userName` varchar(100) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productID` int(255) NOT NULL,
  `image` longblob NOT NULL,
  `price` double NOT NULL,
  `detail` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `interested` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` bigint(255) NOT NULL,
  `postcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`userName`, `productName`, `productID`, `image`, `price`, `detail`, `category`, `time`, `interested`, `status`, `address`, `contact`, `postcode`) VALUES
('julie1', 'sofa', 39, 0x75706c6f6164732f736f66612e6a7067, 100, 'good condition', 'Furniture', '2016-11-28 18:28:34', 0, 1, 'mcgill', 1234567890, 'H3A 0G4'),
('julie1', 'drawer', 40, 0x75706c6f6164732f647261776572312e6a7067, 200, 'good condition', 'Furniture', '2016-11-28 18:34:46', 0, 1, 'mcgill', 1234567890, 'H3A 0G4'),
('julie1', 'table', 41, 0x75706c6f6164732f7461626c65312e6a7067, 50, 'ikea', 'Furniture', '2016-12-05 15:21:10', 0, 0, 'mcgill', 1234567890, 'H3A 0G4'),
('julie1', 'desk', 42, 0x75706c6f6164732f6465736b2e6a7067, 90, 'ikea', 'Furniture', '2016-11-28 18:38:21', 0, 1, 'mcgill', 1234567890, 'H3A 0G4'),
('julie1', 'bed', 43, 0x75706c6f6164732f626564312e6a7067, 90, 'ikea', 'Furniture', '2016-11-28 18:39:28', 0, 1, 'mcgill', 1234567890, 'H3A 0G4'),
('julie1', 'single bed', 44, 0x75706c6f6164732f626564322e6a7067, 90, 'ikea', 'Furniture', '2016-11-28 21:21:20', 0, 0, 'mcgill', 1234567890, 'H3A 0G4'),
('julie1', 'chair', 45, 0x75706c6f6164732f63686169722e6a7067, 90, 'ikea', 'Furniture', '2016-11-28 18:40:22', 0, 1, 'mcgill', 1234567890, 'H3A 0G4'),
('julie1', 'chair', 46, 0x75706c6f6164732f6368616972312e6a7067, 40, 'comfortable', 'Furniture', '2016-11-28 18:41:35', 0, 1, 'mcgill', 1234567890, 'H3A 0G4'),
('julie1', 'printer', 47, 0x75706c6f6164732f7072696e746572312e6a7067, 40, 'good', '3c', '2016-11-29 01:52:26', 0, 1, 'trottier', 9876543210, 'H3A 0G4'),
('julie1', 'printer', 48, 0x75706c6f6164732f7072696e7465722e6a7067, 40, 'good', '3c', '2016-11-29 01:52:26', 0, 1, 'trottier', 9876543210, 'H3A 0G4'),
('julie1', 'watch', 49, 0x75706c6f6164732f736d6172742077617463682e6a7067, 40, 'smart watch', '3c', '2016-11-29 01:52:26', 0, 1, 'trottier', 9876543210, 'H3A 0G4'),
('julie1', 'macbook', 50, 0x75706c6f6164732f6d6163626f6f6b2e6a7067, 1000, 'everything is well', '3c', '2016-11-29 01:52:26', 0, 1, 'redpath', 3456789012, 'H3A 0C4'),
('julie1', 'camera', 51, 0x75706c6f6164732f63616d6572612e6a7067, 300, 'everything is well', '3c', '2016-11-29 01:52:26', 0, 1, 'redpath', 3456789012, 'H3A 0C4'),
('julie1', 'TV', 52, 0x75706c6f6164732f54562e6a7067, 500, 'everything is well', '3c', '2016-11-29 01:52:26', 0, 1, 'redpath', 3456789012, 'H3A 0C4'),
('julie1', 'speaker', 53, 0x75706c6f6164732f737065616b65722e6a7067, 50, 'everything is well', '3c', '2016-11-29 01:52:26', 0, 1, 'redpath', 3456789012, 'H3A 0C4'),
('julie1', 'kindle', 54, 0x75706c6f6164732f6b696e646c652e6a7067, 90, 'amazon', '3c', '2016-11-29 01:52:26', 0, 0, 'redpath', 3456789012, 'H3A 0C4'),
('julie1', 'camera accesories kit', 59, 0x75706c6f6164732f63616d657261206163636573736f72696573206b69742e6a7067, 20, 'good condition', 'Accessories', '2016-11-28 19:07:01', 0, 1, 'redpath', 3456789012, 'H3A 0C4'),
('julie1', 'travel accessories', 61, 0x75706c6f6164732f74726176656c206163636573736f726965732e6a7067, 5, 'good condition', 'Accessories', '2016-11-28 19:07:06', 0, 1, 'redpath', 3456789012, 'H3A 0C4'),
('julie1', 'hair clip', 62, 0x75706c6f6164732f6861697220636c69702e6a7067, 2, 'good condition', 'Accessories', '2016-11-28 19:07:09', 0, 1, 'redpath', 3456789012, 'H3A 0C4'),
('julie1', 'dress', 64, 0x75706c6f6164732f636c6f7468312e6a7067, 20, 'good condition', 'cloth', '2016-11-29 02:15:44', 0, 1, 'new rez', 5141234567, 'H2X 3R2'),
('julie1', 'dress', 65, 0x75706c6f6164732f636c6f7468322e6a7067, 20, 'good condition', 'cloth', '2016-11-29 02:15:52', 0, 1, 'new rez', 5141234567, 'H2X 3R2'),
('julie1', 'dress', 66, 0x75706c6f6164732f636c6f7468332e6a7067, 20, 'good condition', 'cloth', '2016-11-29 23:40:13', 0, 0, 'new rez', 5141234567, 'H2X 3R2'),
('julie1', 'jeans', 67, 0x75706c6f6164732f6a65616e73312e6a7067, 20, 'good condition', 'cloth', '2016-11-29 02:13:56', 0, 1, 'new rez', 5141234567, 'H2X 3R2'),
('julie1', 'jeans', 68, 0x75706c6f6164732f6a65616e73322e6a7067, 20, 'good condition', 'cloth', '2016-11-29 02:14:48', 0, 1, 'new rez', 5141234567, 'H2X 3R2'),
('julie1', 'coats', 69, 0x75706c6f6164732f636f617473312e6a7067, 20, 'good condition', 'cloth', '2016-11-29 02:15:00', 0, 1, 'new rez', 5141234567, 'H2X 3R2'),
('julie1', 'coats', 70, 0x75706c6f6164732f636f617473322e6a7067, 20, 'good condition', 'cloth', '2016-11-29 02:15:10', 0, 1, 'new rez', 5141234567, 'H2X 3R2'),
('julie1', 'coats', 71, 0x75706c6f6164732f636f617473332e6a7067, 20, 'good condition', 'cloth', '2016-11-29 02:15:19', 0, 1, 'new rez', 5141234567, 'H2X 3R2'),
('julie1', 'cs', 72, 0x75706c6f6164732f626f6f6b312e6a7067, 30, 'good condition', 'textbook', '2016-11-29 02:18:56', 0, 1, 'new rez', 5141234567, 'H2X 3R2'),
('julie1', 'economics', 73, 0x75706c6f6164732f362e6a7067, 30, 'good condition', 'textbook', '2016-11-29 02:19:59', 0, 1, 'new rez', 5141234567, 'H2X 3R2'),
('julie1', 'medicine', 74, 0x75706c6f6164732f372e6a7067, 30, 'good condition', 'textbook', '2016-11-29 02:20:10', 0, 1, 'new rez', 5141234567, 'H2X 3R2'),
('julie1', 'anatomy', 75, 0x75706c6f6164732f382e6a7067, 30, 'good condition', 'textbook', '2016-11-29 02:20:42', 0, 1, 'new rez', 5141234567, 'H2X 3R2'),
('julie1', 'cs', 76, 0x75706c6f6164732f322e6a7067, 30, 'good condition', 'textbook', '2016-11-29 02:21:51', 0, 1, 'new rez', 5141234567, 'H2X 3R2'),
('julie1', 'cs', 77, 0x75706c6f6164732f332e6a7067, 30, 'good condition', 'textbook', '2016-11-29 02:22:06', 0, 1, 'new rez', 5141234567, 'H2X 3R2'),
('julie1', 'business', 78, 0x75706c6f6164732f342e6a7067, 30, 'good condition', 'textbook', '2016-11-29 02:22:19', 0, 1, 'new rez', 5141234567, 'H2X 3R2'),
('julie1', 'business', 79, 0x75706c6f6164732f352e6a7067, 30, 'good condition', 'textbook', '2016-11-29 02:22:38', 0, 1, 'new rez', 5141234567, 'H2X 3R2'),
('julie1', 'book', 80, 0x75706c6f6164732f322e7069632e6a7067, 1, 'aaa', 'textbook', '2016-11-29 23:40:45', 0, 1, 'mcgill', 1234567890, 'H2X 3R2'),
('Julie', 'cloth', 83, 0x75706c6f6164732f323031342d30332d3232203139313333342e6a7067, 100, 'good', 'cloth', '2016-11-29 23:20:12', 0, 0, 'new rez', 1234567890, 'H2X 3R2'),
('Julie', 'watch', 84, 0x75706c6f6164732fe98791e69eaae9b1bce59c9fe8b186e6b299e68b892e6a7067, 11, '1', '3c', '2016-11-29 23:40:39', 0, 0, 'mcgil', 1234567890, 'H2X 3R2'),
('Julie', 'phone', 85, 0x75706c6f6164732f363638363639656167773166336269666768726e616a32306a67306a676162632e6a7067, 1000, 'brand new', '3c', '2016-11-29 23:45:20', 0, 0, 'mcgill', 9876543210, 'H2X 3R2'),
('julie1', 'Book', 86, 0x75706c6f6164732f36363836363965616777316633626966673666676e6a32306a673064363735752e6a7067, 100, 'good', 'textbook', '2016-11-30 02:35:34', 0, 0, 'new rez', 1234567890, 'H2X 3R2'),
('MIA', 'BOOK', 87, 0x75706c6f6164732f36363836363965616777316633626966666a7a696a6a32306a6730633661616b2e6a7067, 1000, '123', 'textbook', '2016-11-30 02:38:14', 0, 0, 'LACITE', 1234567890, 'H2X 3R2'),
('Julie', 'ugg', 88, 0x75706c6f6164732f313031363232352d4e4156595f342e6a7067, 100, '', 'other', '2016-12-05 15:23:48', 0, 0, '', 1234567890, 'H2X 3R2'),
('Julie', 'desk', 89, 0x75706c6f6164732f323031342d30332d3232203139313333362e6a7067, 100, 'hi', 'accessory', '2016-12-05 15:23:11', 0, 0, '', 1234567890, 'H2X3R2'),
('shuranran', 'name', 90, 0x75706c6f6164732f323031342d30332d3232203139313335392e6a7067, 100, '', 'other', '2016-12-05 15:25:41', 0, 0, '', 1234567890, 'H2X 3R2'),
('shuranran', 'h', 91, 0x75706c6f6164732f323031342d30332d3232203139313334392e6a7067, 123, '', 'accessory', '2016-12-05 15:28:01', 0, 0, '', 987654321, 'H2X 3R2'),
('julie1', 'book', 92, 0x75706c6f6164732f7567672e6a7067, 122, 'hi', 'textbook', '2016-12-05 16:07:51', 0, 0, '', 1234567890, 'H2X 3R2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversation_reply`
--
ALTER TABLE `conversation_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `conversation_reply`
--
ALTER TABLE `conversation_reply`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
