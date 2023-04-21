-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 04:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meru_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `type` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `type`) VALUES
(1, 'refill'),
(2, 'new');

-- --------------------------------------------------------

--
-- Table structure for table `earnings_overview`
--

CREATE TABLE `earnings_overview` (
  `id` int(5) NOT NULL,
  `total` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `earnings_overview`
--

INSERT INTO `earnings_overview` (`id`, `total`, `date`) VALUES
(1, 500000000, '2023-04-21 02:08:29'),
(2, 700000000, '2023-04-21 02:08:41'),
(3, 900000000, '2023-04-21 02:08:53'),
(4, 1000000000, '2023-04-21 02:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `sbj` varchar(100) NOT NULL,
  `msg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `user_id`, `sbj`, `msg`) VALUES
(1, 1, 'Database Job', 'database');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Invoice_ID` int(10) NOT NULL,
  `customer_ID` int(10) NOT NULL,
  `Product_NO` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `shipping` varchar(50) NOT NULL,
  `invoice_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `station` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Invoice_ID`, `customer_ID`, `Product_NO`, `quantity`, `category`, `payment_status`, `destination`, `shipping`, `invoice_date`, `station`) VALUES
(1, 2, 1, 45, 'Refill', 'unpaid', 'Biwi', 'customer', '2023-04-10 06:39:45', 'a'),
(4, 5, 2, 1, 'new', 'Unpaid', 'Area 49', 'company', '2023-04-11 11:26:01', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(10) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `payment`) VALUES
(1, 'Credit Card'),
(2, 'Airtel Money'),
(3, 'TNM Mpamba');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `snum` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` double(10,2) NOT NULL,
  `description` varchar(100) NOT NULL,
  `kg` int(10) NOT NULL,
  `quantity` int(50) NOT NULL,
  `station` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `snum`, `image`, `name`, `price`, `description`, `kg`, `quantity`, `station`) VALUES
(1, 'PSN76MMGPS2', 'pic.png', '45KG Gas Cylinder', 43000.00, 'New Cylinders', 45, 9, 'a'),
(2, 'PSN675MMGPS7', 'pic1.png', '9KG Gas Cylinder', 15000.00, 'New Cylinders & Gas Refills', 9, 1, 'b'),
(3, 'PSN40MMGPS1', 'soyola.png', 'Soyola', 9500.00, 'Cooking Oil', 0, 1, 'a'),
(4, 'PSN227MMGPS1', 'gaspipe.png', 'Gas Pipe', 8500.00, 'Gas Accessories', 0, 67, 'a'),
(5, 'PSN631MMGPS7', 'lube.jpg', 'Motor Oil', 7500.00, 'High Performance Motor Oil', 0, 8, 'a'),
(6, 'PSN580MMGPS9', 'shi.png', 'Solar Hybrid Inverter', 99000.00, '330W 24V MONO - Inverter Solution.', 0, 4, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `products_request`
--

CREATE TABLE `products_request` (
  `id` int(6) NOT NULL,
  `user_id` int(10) NOT NULL,
  `station` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `category` varchar(100) NOT NULL,
  `date_purchased` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `station` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `station` varchar(20) NOT NULL,
  `user_type` int(5) NOT NULL COMMENT '0:superuser;\r\n1:administrator;\r\n2:customer',
  `password` varchar(100) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `location`, `station`, `user_type`, `password`, `date_registered`) VALUES
(1, 'william', 'lubaini', 'q@gmail.com', 997654343, 'Area 23', 'b', 2, '123456789100%', '2023-04-12 00:31:17'),
(2, 'Adam', 'Kawondo', 'adam@gmail.com', 999999999, 'biwi', 'a', 0, 'be3aebd4ab2d50888d1e26b307144012', '2023-04-19 16:05:44'),
(3, 'william', 'lubaini', 'uq@gmail.com', 997654343, 'Area 23', 'a', 1, '123456789@w', '2023-04-13 14:07:13'),
(4, 'feelipi', 'Nguyen ', 'fn@gmail.com', 993425165, 'Nchensi', 'b', 2, '21f97d741a0be7c4c8baf04ad88fc874', '2023-04-19 15:18:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `earnings_overview`
--
ALTER TABLE `earnings_overview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Invoice_ID`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_request`
--
ALTER TABLE `products_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `earnings_overview`
--
ALTER TABLE `earnings_overview`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `Invoice_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products_request`
--
ALTER TABLE `products_request`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
