-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 05:20 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinetime`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `email`, `password`) VALUES
(1, 'navina@gmail.com', '8989');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(10) NOT NULL,
  `r_name` varchar(30) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `r_name`, `city_name`, `image`) VALUES
(1, 'Green-Chilli Retaurent', 'Mumbai', 'images (3).jpg'),
(2, 'Bluespin Restaurent', 'Pune', '24905956.jpg'),
(3, 'Royal Restaurent', 'Jaipur', 'images (6).jpg'),
(4, 'Fodee Restaurent', 'Delhi', 'images (7).jpg'),
(5, 'Grillville Restaurent', 'Ahemdabad', 'images (8).jpg'),
(6, 'Soho Restaurent', 'Jamnagar', 'images (9).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(15) NOT NULL,
  `uid` int(11) NOT NULL,
  `feedback_txt` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `uid`, `feedback_txt`) VALUES
(1, 3, 'The food was good, however I would of expected a better quality of service for the price. The staff were rude and had even forgotton that it was a bir'),
(2, 6, 'great service......'),
(3, 1, 'Had a lovely evening at royal restaurant. Food was amazing and there was a good atmosphere. Worth the money for a special occasion.\r\n'),
(4, 2, 'The place itself is still very nice but the food quality seems to have gone down. Left 50% or more of our steak due to poor quality. Will think twice '),
(5, 2, 'The place itself is still very nice but the food quality seems to have gone down. Left 50% or more of our steak due to poor quality. Will think twice '),
(6, 5, 'great lunch at  Fodee restaurent..'),
(7, 5, 'the best dinner... i ate blue spin restaurant'),
(8, 3, 'we have great dinner at this place....');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `m_id` int(10) NOT NULL,
  `d_type` varchar(20) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `mimage` varchar(30) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`m_id`, `d_type`, `mname`, `mimage`, `price`) VALUES
(1, 'drink', 'Pineapple Juice', 'res_img_5.jpg', 86),
(2, 'drink', 'Green Juice', 'res_img_6.jpg', 90),
(3, 'drink', 'Soft Drinks', 'res_img_7.jpg', 70),
(4, 'drink', 'Carlo Rosee Drinks', 'res_img_5.jpg', 95),
(5, 'dish', 'Tomato with Chicken', 'res_img_4.jpg', 143),
(6, 'dish', 'Sausages from Italy', 'res_img_2.jpg', 178),
(7, 'dish', 'Beef Grilled', 'res_img_8.jpg', 159),
(8, 'dish', 'Beef Steak', 'res_img_3.jpg', 150);

-- --------------------------------------------------------

--
-- Table structure for table `reserve_table`
--

CREATE TABLE `reserve_table` (
  `id` int(5) NOT NULL,
  `uid` int(5) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `city` varchar(20) NOT NULL,
  `people` int(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `cid` int(5) NOT NULL,
  `slide_img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `cid`, `slide_img`) VALUES
(1, 1, 'rest-1(2).jpg'),
(2, 1, 'rest-1(1).jpg'),
(3, 1, 'rest-1(3).jpg'),
(4, 1, 'rest-1(4).jpg'),
(5, 1, 'rest-1(5).jpg'),
(6, 1, 'rest-1(6).jpg'),
(7, 1, 'rest-1(7).jpg'),
(8, 1, 'rest-1(8).jpg'),
(9, 1, 'rest-1(9).jpg'),
(10, 1, 'rest-1(10).jpg'),
(11, 1, 'rest-1(11).jpg'),
(12, 1, 'rest-1(12).jpg'),
(13, 1, 'rest-1(13).jpg'),
(14, 2, 'rest-2(1).jpg'),
(15, 2, 'rest-2(2).jpg'),
(16, 2, 'rest-2(3).jpg'),
(17, 2, 'rest-2(4).jpg'),
(18, 2, 'rest-2(5).jpg'),
(19, 2, 'rest-2(6).jpg'),
(20, 2, 'rest-2(7).jpg'),
(21, 2, 'rest-2(8).jpg'),
(22, 2, 'rest-2(9).jpg'),
(23, 2, 'rest-2(10).jpg'),
(24, 2, 'rest-2(11).jpg'),
(25, 2, 'rest-2(12).jpg'),
(26, 2, 'rest-2(13).jpg'),
(27, 3, 'rest-3(1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `id` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `t_img` varchar(30) NOT NULL,
  `price` int(20) NOT NULL,
  `people` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`id`, `cid`, `t_img`, `price`, `people`) VALUES
(1, 1, 'rest-1(12).jpg', 500, 2),
(2, 1, 'rest-1(8).jpg', 900, 4),
(4, 1, 'rest-1(6).jpg', 1000, 8),
(5, 1, 'rest-1(2).jpg', 1200, 10),
(6, 2, 'rest-2(11).jpg', 900, 2),
(7, 2, 'rest-2(8).jpg', 900, 4),
(8, 2, 'rest-2(13).jpg', 1000, 8),
(9, 2, 'rest-2(10).jpg', 1400, 10),
(10, 3, 'rest-3(2).jpg', 560, 2),
(11, 3, 'rest-3(3).jpg', 900, 4),
(12, 3, 'rest-3(4).jpg', 1000, 8),
(13, 3, 'rest-3(9).jpg', 1300, 10),
(14, 4, 'rest-4(2).jpg', 500, 2),
(15, 4, 'rest-4(4).jpg', 900, 4),
(16, 4, 'rest-4(3).jpg', 1200, 8),
(17, 4, 'rest-4(10).jpg', 1500, 10),
(18, 5, 'rest-5(9).jpg', 400, 2),
(19, 5, 'rest-5(2).jpg', 800, 4),
(20, 5, 'rest-5(3).jpg', 1100, 8),
(21, 5, 'rest-5(6).jpg', 1400, 10),
(22, 6, 'rest-6(6).jpg', 420, 2),
(23, 6, 'rest-6(3).jpg', 720, 4),
(24, 6, 'rest-6(8).jpg', 1000, 8),
(25, 6, 'rest-6(10).jpg', 1500, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `add` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(17) NOT NULL,
  `c_password` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `add`, `email`, `password`, `c_password`) VALUES
(1, 'raj pathak', 'raj park', 'r@gmail.com', '111', '111'),
(2, 'aayush bhatt', 'west mumbai, ketan socity', 'ayu@gmail.com', '1237', '1237'),
(3, 'gita sharma', 'city market,shivkrupa socity', 'n@gmail.com', '123', '123'),
(4, 'anuj kumari', 'pavai area', 'anu@gmail.com', '890', '890'),
(5, 'tiya malik', 'jankee apartment', 'ekta@gmail.com', '123', '123'),
(6, 'anita bhosle', 'near pavai lake', 'anita@gmail.com', '9090', '9090'),
(7, 'anika oberoi', 'near pavai lake', 'anika@gmail.com', '5656', '5656'),
(8, 'bina rajput', 'near kankarya lake', 'bina@gmail.com', '2323', '2323'),
(12, 'ritu', 'joly garden', 'ritu@gmail.com', '5656', '5656'),
(13, 'nirali', 'jamna', 'ladvan756@gmail.com', 'nir', 'nir'),
(14, 'grg', 'tgtg', 'ladvan756@gmail.com', 'nnn', 'nnn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`,`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `reserve_table`
--
ALTER TABLE `reserve_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reserve_table`
--
ALTER TABLE `reserve_table`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sub_cat`
--
ALTER TABLE `sub_cat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
