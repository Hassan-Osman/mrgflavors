-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2018 at 08:12 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6535372_mrg`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `item` varchar(500) COLLATE utf8_bin NOT NULL,
  `size` varchar(50) COLLATE utf8_bin NOT NULL,
  `total` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `shipping` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_bin NOT NULL,
  `company` varchar(500) COLLATE utf8_bin NOT NULL,
  `address` varchar(500) COLLATE utf8_bin NOT NULL,
  `state` varchar(500) COLLATE utf8_bin NOT NULL,
  `phone` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(500) COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1 - new, 2 - processing, 3 - closed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `item`, `size`, `total`, `quantity`, `shipping`, `name`, `company`, `address`, `state`, `phone`, `email`, `status`) VALUES
(4, 'test1', 'S500ML', 10, 2, 5, 'test1', 's', 'asd', 'asd', '1228759010', 'mostafasalem95@gmail.com', 1),
(5, 'test1', 'S15ML', 1, 1, 5, 'test1', 's', 'asd', 'asd', '1228759010', 'ss@asds', 1),
(6, 'test2', 'S125ML', 15, 5, 5, 'test1', 's', 'asd', 'asd', '1228759010', 'mostafasalem95@gmail.com', 1),
(7, 'test2', 'S250ML', 20, 5, 5, 'test1', 's', 'asd', 'asd', '324234', 'mostafasalem95@gmail.com', 1),
(8, 'test2', 'S250ML', 20, 5, 5, 'test1', 's', 'asd', 'asd', '324234', 'mostafasalem95@gmail.com', 1),
(9, 'Banana Cream Flavor', 'S15ML', 75, 1, 5, 'Mostafa', 'Mousa', '156 faissal st', 'Gi,a ', '01091999369', 'mmousavic@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `url_key` varchar(500) COLLATE utf8_bin NOT NULL,
  `image` varchar(500) COLLATE utf8_bin NOT NULL,
  `description` varchar(500) COLLATE utf8_bin NOT NULL,
  `S15ML` int(11) NOT NULL,
  `S60ML` int(11) NOT NULL,
  `S125ML` int(11) NOT NULL,
  `S250ML` int(11) NOT NULL,
  `S500ML` int(11) NOT NULL,
  `S1Gallon` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `is_featured` int(11) NOT NULL,
  `is_new` int(11) NOT NULL,
  `is_popular` int(11) NOT NULL,
  `is_top` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `url_key`, `image`, `description`, `S15ML`, `S60ML`, `S125ML`, `S250ML`, `S500ML`, `S1Gallon`, `quantity`, `is_featured`, `is_new`, `is_popular`, `is_top`) VALUES
(1, 'Apricot Flavor', 'apricot-flavor', 'apricot-flavor.jpg', 'A light, refreshing apricot taste.\n<br />\nIngredients: Natural and Artificial Flavors, Propylene Glycol, Water.', 75, 250, 375, 650, 1250, 9000, 0, 1, 0, 0, 0),
(2, 'Banana Cream Flavor', 'banana-cream-flavor', 'banana-cream-flavor.jpg', '٢A smooth flavor with a fresh, natural banana taste.<br />\n*** Note: This flavor contains ‘custard’ ingredients: Acetoin.<br />\n\nThe following link explains the frequent questions & concerns involving custard notes.<br />\nhttp://shop.perfumersapprentice.com/flavorsworkshop/custard.html<br />\nIngredients: Natural and Artificial Flavors, Propylene Glycol.', 75, 250, 375, 650, 1250, 9000, 0, 0, 1, 0, 0),
(3, 'Bananas Foster Flavor', 'bananas-foster-flavor', 'bananas-foster-flavor.jpg', 'Banana ice cream with hints of cinnamon and nutmeg with notes of caramel and brown sugar.<br />\n*** Note: This flavor contains ‘custard’ ingredients: Acetoin (not a Diketone).<br />\n\nThe following link explains the frequent questions & concerns involving custard notes. http://shop.perfumersapprentice.com/flavorsworkshop/custard.html\nIngredients: Natural and Artificial Flavors,Propylene Glycol', 75, 250, 375, 650, 1250, 9000, 0, 0, 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
