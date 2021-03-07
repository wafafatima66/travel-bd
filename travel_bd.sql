-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 06:37 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(11) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `admin`, `pass`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `user` varchar(100) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `sno` int(11) NOT NULL,
  `rooms` int(11) NOT NULL,
  `room_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`user`, `checkin`, `checkout`, `sno`, `rooms`, `room_category`) VALUES
('wafa', '2021-02-21', '2021-02-24', 1, 2, 'deluxe'),
('wafa', '2021-02-21', '2021-02-24', 2, 8, 'deluxe'),
('wafa', '2021-02-11', '2021-02-13', 3, 8, 'single'),
('sess1234', '2021-02-03', '2021-02-03', 4, 1, 'single'),
('sess1234', '2021-02-05', '2021-02-06', 5, 1, 'double'),
('sess1234', '2021-02-04', '2021-02-06', 6, 2, 'single'),
('sess1234', '2021-02-04', '2021-02-05', 7, 1, 'double'),
('sess1234', '2021-02-08', '2021-02-10', 8, 3, 'deluxe');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` int(11) NOT NULL,
  `Name` tinytext NOT NULL,
  `Age` int(3) NOT NULL,
  `User_name` tinytext NOT NULL,
  `Phone` int(15) NOT NULL,
  `Email` tinytext NOT NULL,
  `Password` longtext NOT NULL,
  `Gender` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `Name`, `Age`, `User_name`, `Phone`, `Email`, `Password`, `Gender`) VALUES
(2, 'wafa', 23, 'sess1234', 34343434, 'erer1@gmail.com', '$2y$10$iT.CEgaV0eUV.zhe2EHYTeWOQd1xynx6xDhzdNxNc4TEV4752uT16', 'female'),
(3, 'fatima wafa', 23, 'wafa1234', 34343434, 'erer12@gmail.com', '$2y$10$wt9oB8r3.tOOKUAXucDt5utIDOAfPnR.zppGct6cuF3ONJBl2/fki', 'female'),
(4, 'miru', 74, 'miru1234', 34343434, 'erer123@gmail.com', '$2y$10$vpBEfQ6wyBuZ5SPSgy2Zr.4hptg0pUQUf9wUlSULpnO9cHOyTMIki', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
