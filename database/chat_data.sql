-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2024 at 03:59 PM
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
-- Database: `chat_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `sender_id` int(255) NOT NULL,
  `receiver_id` int(255) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `sender_id`, `receiver_id`, `message`, `date`) VALUES
(67, 5233832, 1658351, 'Nice', '2024-12-18 09:48:12'),
(68, 1658351, 5233832, 'Nice one bro', '2024-12-18 10:01:20'),
(69, 4363807, 5233832, 'Hello! Nice to meeting you, John!', '2024-12-18 12:09:51'),
(70, 5233832, 4363807, 'Nice to meet you too, Christian!', '2024-12-18 12:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `first_name`, `last_name`, `username`, `password`, `img`) VALUES
(29, 5233832, 'Christian', 'Rupisan', 'chris12', '$2y$10$BXoMbwcDddBQc5bCrN4U7e9tQxnjtLrXy9SrCUB3VmaMhNG1eFeYe', '1734514867ezio-banner-1.png'),
(30, 4363807, 'John', 'Doe', 'johndoe1', '$2y$10$QqYQPC75q64iZbcJ5wkzV.h4sTSTW1f2RPHJm5cbFU4ccNqXhtAcu', '1734515043photo-251.png'),
(33, 1658351, 'Jenny', 'Deo', 'jenny12', '$2y$10$cjgDEff2LTu19V/q/AxNWODOp6l8RTNxqdCD4tU8yODHlsjw3JTBO', '1734515287photo-124.png'),
(34, 1194032, 'Chloe', 'Morgan', 'chloe12', '$2y$10$IzIGH1ftwg6LbVGRZ2tSXeR6IzgbrQH9o6/aUTPMbxfQ5KF7FSTCe', '1734520066photo-229.png'),
(35, 5479816, 'Chan', 'Chan', 'chan12', '$2y$10$qY3MnSEM1FrhKd5H69UB0.bB3kaLUU2swYPSLEYp.6sSSOJJpn46e', '1734533649photo-123.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
