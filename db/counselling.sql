-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 08:11 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `counselling`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `strength` varchar(256) NOT NULL,
  `personality` varchar(250) NOT NULL,
  `passion` varchar(256) NOT NULL,
  `finance` varchar(256) NOT NULL,
  `notes` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `strength`, `personality`, `passion`, `finance`, `notes`, `options_id`, `user_id`) VALUES
(1, '1', 'Extrovert', 'Love', 'Middle', 0, 0, 1),
(2, '2', 'Extrovert', 'Sex', 'Middle', 0, 0, 2),
(3, '1', 'Intorvert', 'ok', 'Rich', 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `option a` int(11) NOT NULL,
  `option b` int(11) NOT NULL,
  `option c` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `strength`
--

CREATE TABLE `strength` (
  `id` int(11) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `courses` varchar(256) NOT NULL,
  `careers` varchar(256) NOT NULL,
  `advice` varchar(256) NOT NULL,
  `descipline` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strength`
--

INSERT INTO `strength` (`id`, `subject`, `courses`, `careers`, `advice`, `descipline`) VALUES
(1, 'Sciences', 'Maths,physics,Chemistry,Biology', 'Medcine,Pilot, Computer scientist, Engineer', 'You can choose from any of the above mentioned  careers.', ''),
(2, 'Arts', 'literature,history', 'Lawyer,Diplomat,Accountant', 'You can choose from any of the above mentioned  careers', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `strength_id` int(11) NOT NULL,
  `personality` varchar(256) NOT NULL,
  `passion` varchar(256) NOT NULL,
  `finance` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `strength_id`, `personality`, `passion`, `finance`) VALUES
(1, 'user', 'user', 'user@gmail.com', 1, 'Introvert', 'rice', 'Rich'),
(2, 'pass', 'pass', '', 0, '', '', ''),
(3, 'captain', 'captain', '', 2, 'Introvert', 'running', 'Rich'),
(7, 'samson adedayo', 'samson', '', 1, 'Ambivert', 'football', 'Middle');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strength`
--
ALTER TABLE `strength`
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
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `strength`
--
ALTER TABLE `strength`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
