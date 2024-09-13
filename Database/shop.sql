-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 07:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(50) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'men'),
(2, 'women'),
(5, 'Kid'),
(6, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(50) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_desc` varchar(255) NOT NULL,
  `pro_price` int(255) NOT NULL,
  `pro_catfk` int(255) NOT NULL,
  `pro_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_desc`, `pro_price`, `pro_catfk`, `pro_img`) VALUES
(1, 'Green Jacket', 'Winters Jacket for women', 2300, 2, 'women-01.jpg'),
(2, 'Black Sweat Shirt', 'Black Sweat Shirt for winters', 5000, 1, 'men-03.jpg'),
(3, 'Winter Coat', 'Winter Coat for baby girl', 5000, 5, 'kid-01.jpg'),
(4, 'Pant Shirt', 'Pant Shirt for baby boy', 2000, 5, 'kid-03.jpg'),
(6, 'Denim Jacket', 'Denim Jacket for boys', 6000, 1, 'men-02.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `productdetail`
-- (See below for the actual view)
--
CREATE TABLE `productdetail` (
`pro_id` int(50)
,`pro_name` varchar(255)
,`pro_desc` varchar(255)
,`pro_price` int(255)
,`pro_catfk` int(255)
,`pro_img` varchar(255)
,`cat_name` varchar(255)
,`cat_id` int(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(50) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phno` varchar(255) NOT NULL,
  `user_add` varchar(255) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_zip` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_phno`, `user_add`, `user_city`, `user_zip`) VALUES
(1, 'sara', 'sara@gmail.com', '1235', 'north', 'karachi', 124);

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `order_id` int(50) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `order_price` int(255) NOT NULL,
  `order_qty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`order_id`, `order_name`, `order_price`, `order_qty`) VALUES
(2, 'Black Sweat Shirt', 5000, 4),
(1, 'Green Jacket', 2300, 2),
(6, 'Denim Jacket', 6000, 1);

-- --------------------------------------------------------

--
-- Structure for view `productdetail`
--
DROP TABLE IF EXISTS `productdetail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `productdetail`  AS SELECT `product`.`pro_id` AS `pro_id`, `product`.`pro_name` AS `pro_name`, `product`.`pro_desc` AS `pro_desc`, `product`.`pro_price` AS `pro_price`, `product`.`pro_catfk` AS `pro_catfk`, `product`.`pro_img` AS `pro_img`, `category`.`cat_name` AS `cat_name`, `category`.`cat_id` AS `cat_id` FROM (`product` join `category` on(`product`.`pro_catfk` = `category`.`cat_id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `pro_catfk` (`pro_catfk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`pro_catfk`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
