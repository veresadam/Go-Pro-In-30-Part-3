-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2017 at 10:07 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `id` int(10) NOT NULL,
  `physical` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `physical` int(10) NOT NULL,
  `reg_date` datetime(6) NOT NULL,
  `sport` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `physical`, `reg_date`, `sport`) VALUES
(2, 'Ferencz', 'dwadaw', 5, '2017-04-12 00:00:00.000000', 0),
(3, 'Ferencz', 'dwadaw', 5, '2017-04-12 22:18:21.000000', 0),
(4, 'Ferencz', 'dwadwa', 6, '2017-04-12 22:18:52.000000', 0),
(5, 'Ferencz', 'dwa', 5, '2017-04-12 22:27:00.000000', 0),
(6, 'Ferencz', 'dwa', 5, '2017-04-12 22:27:12.000000', 0),
(7, 'Ferencz', 'dwa', 5, '2017-04-12 22:27:25.000000', 0),
(8, 'Ferencz', 'dwa', 5, '2017-04-12 22:27:57.000000', 0),
(9, 'Ferencz', 'dwa', 5, '2017-04-12 22:28:04.000000', 0),
(10, 'Ferencz', 'dwa', 5, '2017-04-12 22:28:36.000000', 0),
(11, 'Albert Ferencz', 'dwa', 5, '2017-04-12 22:29:02.000000', 1),
(12, 'alphazoner', 'dwadawd', 5, '2017-04-12 22:30:27.000000', 0),
(13, 'janos', '234324', 5, '2017-04-12 22:44:31.000000', 0),
(14, 'Ferenczdawdawadwwadaw', 'dawdawdaw', 5, '2017-04-12 22:44:53.000000', 0),
(15, 'Ferenczdawdawd', 'awdawd', 5, '2017-04-12 23:10:36.000000', 0),
(16, 'Ferenczdawdwadawdawwadd', 'dawd', 5, '2017-04-12 23:12:04.000000', 0),
(17, 'Ferenczdwadawda', 'awdawdawd', 8, '2017-04-12 23:12:55.000000', 0),
(18, 'Janoska', 'dawdawdawwad', 5, '2017-04-10 23:21:30.000000', 1),
(19, 'Andras', 'asd', 9, '2017-04-13 10:55:09.000000', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
