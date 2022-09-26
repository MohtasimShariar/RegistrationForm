-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2022 at 07:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrationform`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `age` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `gender`, `address`, `age`, `date`) VALUES
(3, 'Md.Mohtasim', 'onim06@gmail.com', 1777378625, 'male', 'Bashundhora RA, Dhaka, Bangladesh', 26, '2022-09-25'),
(6, 'Md.Mohtasim Shariar', 'onim04@gmail.com', 1754194004, 'male', 'Bashundhora RA, Dhaka', 20, '2022-09-25'),
(10, 'Md.Mohtasim Shariar onim', 'onim05@gmail.com', 1754194004, 'male', 'Bashundhora RA, Dhaka', 22, '2022-09-25'),
(11, 'Md.Mohtasim Shariar', 'onim04@gmail.com', 1754194004, 'male', 'Bausha,Bagha', 27, '2022-09-25'),
(12, 'Md.Mohtasim Shariar', 'onim0995@gmail.com', 1754194004, 'male', 'Bausha,Bagha,Rajshahi', 25, '2022-09-25'),
(13, 'Md.Mohtasim Shariar', 'onim04@gmail.com', 1754194004, 'male', 'Bausha,Bagha,Rajshahi', 25, '2022-09-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
