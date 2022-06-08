-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 11:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `active_user` (OUT `var` INT)  BEGIN
SELECT COUNT(*) into var FROM user WHERE user.active=1;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `NOT_EXACT_PRODUCT` (OUT `var` INT)  BEGIN
SELECT COUNT(*) into var FROM product
INNER JOIN quantity
on product.product_id=quantity.product_id
WHERE quantity.quantity=0;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `number_product` (OUT `var` INT)  BEGIN
SELECT product_id,product.title FROM product
INNER JOIN quantity
on product.product_id=quantity.product_id
WHERE quantity.quantity=0;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `order_count` (INOUT `var` INT)  BEGIN 
SELECT count(*) INTO var FROM order_ WHERE YEAR(created_date)=var ;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `user_order` (IN `var` INT)  BEGIN
SELECT order_.order_id,user.username,order_.adress,product.title,product.sale
FROM order_
INNER JOIN order_details
INNER JOIN product
on product.product_id=order_details.product_id
INNER JOIN user
on order_.user_id=user.user_id
WHERE order_details.order_id=order_.order_id AND order_.user_id=user.user_id AND product.product_id=order_details.product_id;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `userName` varchar(70) NOT NULL,
  `PASSWORD` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `userName`, `PASSWORD`) VALUES
(1, 'dyaadwekat@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `canceled_orders`
--

CREATE TABLE `canceled_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `adress` text NOT NULL,
  `discount` float DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `created_date`) VALUES
(1, 'MEN', '2022-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `delivered_orders`
--

CREATE TABLE `delivered_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `adress` text NOT NULL,
  `discount` float DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_`
--

CREATE TABLE `order_` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `adress` text NOT NULL,
  `Total` float DEFAULT NULL,
  `payMethod` varchar(30) DEFAULT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_`
--

INSERT INTO `order_` (`order_id`, `user_id`, `email`, `phone`, `adress`, `Total`, `payMethod`, `created_date`) VALUES
(9, 16, '', '+905528727395', 'turkey-istanbul', 80, 'cash', '2022-05-23 09:58:31'),
(10, 1, '', '+905528727395', 'turkey-istanbul', 120, 'cash', '2022-05-23 19:45:35');

--
-- Triggers `order_`
--
DELIMITER $$
CREATE TRIGGER `after_update_order` AFTER UPDATE ON `order_` FOR EACH ROW BEGIN
if old.order_id != new.order_id THEN
UPDATE order_details
SET order_id=new.order_id;
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `dilvered_order` AFTER DELETE ON `order_` FOR EACH ROW BEGIN
DELETE FROM order_details
WHERE old.order_id = order_details.order_id;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `order_created_date` BEFORE INSERT ON `order_` FOR EACH ROW set new.created_date = CURRENT_TIMESTAMP()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `quantity`) VALUES
(9, 0, 2),
(10, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text DEFAULT NULL,
  `price` float NOT NULL,
  `week_deal` int(11) DEFAULT 0,
  `avaliable` tinyint(1) DEFAULT NULL,
  `create_date` date NOT NULL,
  `updated_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `title`, `description`, `image`, `price`, `week_deal`, `avaliable`, `create_date`, `updated_date`) VALUES
(1, 1, 'diaa', 'jaket', 'uploads/product-3.jpg', 40, 0, NULL, '0000-00-00', NULL),
(2, 1, 'ffgdfgd', 'gdfgd', 'uploads/product-2.jpg', 22, 1, 1, '2022-03-02', NULL),
(3, 1, 'mont', 'deri mont', 'uploads/product-4.jpg', 400, 0, 1, '0000-00-00', NULL),
(4, 1, 'payMethod', 'jaket', 'uploads/product-1.jpg', 80, 0, NULL, '0000-00-00', NULL),
(5, 1, 'jaket 2', 'jaket', 'uploads/product-9.jpg', 1000, 0, NULL, '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quantity`
--

CREATE TABLE `quantity` (
  `product_id` int(11) NOT NULL,
  `size` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `adress` text NOT NULL,
  `phone` varchar(45) NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_date` date NOT NULL,
  `last_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `adress`, `phone`, `active`, `created_date`, `last_update`) VALUES
(1, 'Diaa', '123456', 'dyaadwekat@gmail.com', 'Istanbul-basaksehir', '1234', 1, '2022-03-16', NULL),
(16, 'omar', '222', 'waleed@gmail.com', 'istanbul', '423423', NULL, '0000-00-00', '2022-05-19 02:42:29'),
(17, 'Abdalarhman', '123', 'abdlarahman@gmail.com', 'istanbul', '54544543', NULL, '0000-00-00', '2022-05-20 13:54:14'),
(18, 'admin@gmail.com', '222', '22@gmail.oom', '54545', '454354', NULL, '0000-00-00', '2022-05-20 23:16:55');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `user_last_update` BEFORE INSERT ON `user` FOR EACH ROW SET NEW.last_update = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `wishlist` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`user_id`, `product_id`, `wishlist`) VALUES
(16, 0, 1),
(16, 2, 1),
(1, 2, 1),
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `canceled_orders`
--
ALTER TABLE `canceled_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `delivered_orders`
--
ALTER TABLE `delivered_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_`
--
ALTER TABLE `order_`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_ORD_USER` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `FK_ORD_DET_ORD` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `FK_PK_CAT` (`category_id`);

--
-- Indexes for table `quantity`
--
ALTER TABLE `quantity`
  ADD KEY `FK_QUAN` (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_`
--
ALTER TABLE `order_`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_`
--
ALTER TABLE `order_`
  ADD CONSTRAINT `FK_ORD_USER` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `FK_ORD_DET_ORD` FOREIGN KEY (`order_id`) REFERENCES `order_` (`order_id`),
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_PK_CAT` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `quantity`
--
ALTER TABLE `quantity`
  ADD CONSTRAINT `FK_QUAN` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
