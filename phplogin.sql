-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 06:45 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phplogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `stddata`
--

CREATE TABLE `stddata` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `mno` bigint(10) NOT NULL,
  `mail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stddata`
--

INSERT INTO `stddata` (`id`, `name`, `mname`, `lname`, `mno`, `mail`) VALUES
(1, 'Ashutosh', 'Ishwar', 'Pipriye', 7972854011, 'ashutoshpipriye123@gmail.com'),
(2, 'Ashutosh', 'Ishwaar', 'Pipriye', 7972854011, 'ashutoshpipriye123@gmail.com'),
(3, 'Ashutosh', 'ISHWAR', 'Pipriye', 7972854011, 'ashutoshpipriye123@gmail.com'),
(4, 'Ashutosh', 'ISHWAR', 'Pipriye', 7972854011, 'ashutoshpipriye123@gmail.com'),
(5, 'Ashutosh', 'ISHWAR', 'Pipriye', 7972854011, 'ashutoshpipriye123@gmail.com'),
(6, 'Ashutosh', 'ISHWAR', 'Pipriye', 7972854011, 'ashutoshpipriye123@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stddata`
--
ALTER TABLE `stddata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stddata`
--
ALTER TABLE `stddata`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
