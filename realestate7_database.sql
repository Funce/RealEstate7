-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2017 at 09:24 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate7_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `i_id` int(11) NOT NULL,
  `i_name` varchar(100) NOT NULL,
  `i_p_id` int(11) NOT NULL COMMENT 'Foreign Key to tbl_property'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`i_id`, `i_name`, `i_p_id`) VALUES
(1, '400x200.gif', 1),
(2, '400x200.gif', 2),
(3, '400x200.gif', 3),
(4, '400x200.gif', 4),
(5, '400x200.gif', 5),
(6, '400x200.gif', 6),
(7, '400x200.gif', 7),
(8, '400x200.gif', 8),
(9, '400x200.gif', 9),
(10, '400x200.gif', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `m_id` int(11) NOT NULL,
  `m_email` varchar(40) NOT NULL,
  `m_password` varchar(50) NOT NULL,
  `m_role` int(11) NOT NULL COMMENT '9 For Admin, 1 for User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`m_id`, `m_email`, `m_password`, `m_role`) VALUES
(1, 'nathan@gmail.com', 'asdf', 9),
(2, 'david@gmail.com', 'asdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property`
--

CREATE TABLE `tbl_property` (
  `p_id` int(11) NOT NULL COMMENT 'Primary Key',
  `p_title` varchar(50) NOT NULL,
  `p_address` varchar(50) NOT NULL,
  `p_city` varchar(50) NOT NULL,
  `p_bed` int(11) NOT NULL,
  `p_bath` int(11) NOT NULL,
  `p_garage` int(11) NOT NULL,
  `p_price` decimal(10,2) NOT NULL,
  `p_type` int(1) NOT NULL COMMENT '1 - Sale, 2 - Rent, 3 - Lease'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_property`
--

INSERT INTO `tbl_property` (`p_id`, `p_title`, `p_address`, `p_city`, `p_bed`, `p_bath`, `p_garage`, `p_price`, `p_type`) VALUES
(1, 'Many Rooms & Spaces for the Money', '57 Masefield Street', 'Nelson', 4, 2, 2, '467000.00', 1),
(2, 'Two Houses, One Wife…. One Must Go!', '364 Nayland Road', 'Nelson', 4, 2, 2, '500000.00', 2),
(3, 'Honest To Goodness Family Living!', '18 Sunningdale Drive', 'Christchurch', 4, 2, 2, '434000.00', 3),
(4, 'A Modern Classic', '1 Sunningdale Drive', 'Christchurch', 4, 2, 2, '422000.00', 1),
(5, 'Ripe for Reno and Below RV', '83 Princes Drive', 'Dunedin', 3, 2, 2, '341200.00', 1),
(6, 'The Work Here Is Done - Move In Ready', '13 Windsor Drive', 'Auckland', 4, 1, 2, '796000.00', 2),
(7, 'Quick, put the bubbly on ice!', '396 Princes Drive', 'Dunedin', 3, 2, 2, '332650.00', 1),
(8, 'Enduring Nelson Icon', '8 Whitby Road', 'Hamilton', 5, 2, 1, '511000.00', 3),
(9, 'Nice N Easy', '35a Vernall Street', 'Nelson', 2, 1, 1, '450000.00', 2),
(10, 'Investors! 4 Bedroom Plus Office', '78a Grandview Road', 'Dunedin', 4, 1, 0, '395204.00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `w_id` int(11) NOT NULL,
  `w_p_id` int(11) NOT NULL COMMENT 'Foreign Key to tbl_property',
  `w_m_id` int(11) NOT NULL COMMENT 'Foreign Key to tbl_member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wishlist`
--

INSERT INTO `tbl_wishlist` (`w_id`, `w_p_id`, `w_m_id`) VALUES
(1, 4, 2),
(2, 6, 2),
(3, 4, 1),
(4, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`i_id`),
  ADD KEY `i_p_id` (`i_p_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_property`
--
ALTER TABLE `tbl_property`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `w_p_id` (`w_p_id`),
  ADD KEY `w_m_id` (`w_m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_property`
--
ALTER TABLE `tbl_property`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD CONSTRAINT `tbl_image_ibfk_1` FOREIGN KEY (`i_p_id`) REFERENCES `tbl_property` (`p_id`);

--
-- Constraints for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD CONSTRAINT `tbl_wishlist_ibfk_1` FOREIGN KEY (`w_m_id`) REFERENCES `tbl_member` (`m_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_wishlist_ibfk_2` FOREIGN KEY (`w_p_id`) REFERENCES `tbl_property` (`p_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
