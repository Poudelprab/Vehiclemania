-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2024 at 05:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `alt_text` text DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `rent_vehicle_id` int(11) NOT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `payment_method` varchar(255) NOT NULL DEFAULT 'cash',
  `transaction_code` varchar(255) DEFAULT NULL,
  `paid_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `rent_vehicle_id`, `amount`, `payment_method`, `transaction_code`, `paid_at`, `created_at`, `updated_at`) VALUES
(3, 8, 732, 'Esewa', '0007VXN', '2024-06-30 05:27:31', '2024-06-30 09:12:31', '2024-06-30 09:12:31'),
(5, 9, 580, 'Esewa', '0007VY7', '2024-06-30 05:42:46', '2024-06-30 09:27:46', '2024-06-30 09:27:46');

-- --------------------------------------------------------

--
-- Table structure for table `rent_vehicles`
--

CREATE TABLE `rent_vehicles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rent_vehicles`
--

INSERT INTO `rent_vehicles` (`id`, `user_id`, `vehicle_id`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(8, 9, 4, '2024-06-22 16:45:00', '2024-06-22 17:45:00', 0, '2024-06-22 16:45:56', '2024-06-22 16:45:56'),
(9, 9, 5, '2024-06-30 09:18:00', '2024-06-30 11:18:00', 0, '2024-06-30 09:18:28', '2024-06-30 09:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `license_number` varchar(100) NOT NULL,
  `role` enum('admin','user','vendor') NOT NULL DEFAULT 'user',
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `phone`, `image`, `license_number`, `role`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 'pawan bhatta', 'Pawan Raj Bhatta', 'pawanbhatta.me@gmail.com', '$2y$10$YwJhvGDFD.kKYlnF/xo5zuvSJUnTyLMVLUw6o3Uz9s2YnmzUS.8i2', NULL, NULL, '1234', 'admin', 0, '2024-06-22 12:58:16', '2024-06-22 13:15:33'),
(5, 'dafodu', 'Kathleen Rice', 'zisi@mailinator.com', '$2y$10$HKvUw29Vux1KrEl9.1RLmeN7KOZ2wjyAImOavJtF79PKGFq9akXlq', '+1 (153) 808-2047', NULL, '535', 'admin', 0, '2024-06-22 13:53:59', '2024-06-22 13:53:59'),
(8, 'guryhyhi', 'Dillon Wood', 'sagar@gmail.com', '$2y$10$JcxDKqHqg891/h8LiaEIweHvSHV3AEZuE9DlJGHXWz1KWmsQtYef.', '+1 (175) 427-2951', NULL, '469', 'vendor', 0, '2024-06-22 14:10:19', '2024-06-22 14:10:19'),
(9, 'wufalu', 'Pawan Bhatta', 'tyxemo@mailinator.com', '$2y$10$i9Z6p77NIq6B5y3rf4Wz3eiA8yhNSvMrtKBmVPmcGlJdnT6nARmCK', '+1 (358) 722-4642', NULL, '431', 'user', 0, '2024-06-22 15:34:18', '2024-06-30 08:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `registration_number` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price_per_hour` varchar(20) NOT NULL DEFAULT '0',
  `vendor_id` int(11) NOT NULL,
  `is_available` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `name`, `registration_number`, `image`, `description`, `price_per_hour`, `vendor_id`, `is_available`, `created_at`, `updated_at`) VALUES
(4, 'Imani Nash', '706', '706-1719047659.jpg', 'Rerum quas incidunt', '732', 8, 0, '2024-06-22 14:59:19', '2024-06-30 09:12:31'),
(5, 'Madison Golden', '117', '117-1719047673.png', 'Suscipit fuga Simil', '290', 8, 0, '2024-06-22 14:59:33', '2024-06-30 09:27:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent_vehicles`
--
ALTER TABLE `rent_vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rent_vehicles`
--
ALTER TABLE `rent_vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
