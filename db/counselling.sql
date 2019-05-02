-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 01:43 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `phone`) VALUES
(3, 'sade', 'sade@gmail.com', 'fdb04f640d8e936f948fbb1e8ac00696', '0704546555'),
(4, 'admin', 'admintest@gmail.com', 'admin', '234553333'),
(5, 'superadmin', 'superadmin@yahoo.com', 'super', '09844444');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `degree` varchar(256) NOT NULL,
  `key_requirement` text NOT NULL,
  `other_requirements` text NOT NULL,
  `category` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `degree`, `key_requirement`, `other_requirements`, `category`) VALUES
(1, 'Accountancy/Banking\r\nFinance/Insurance', 'Mathematics', 'Maths, Business studies and Economics', 'Arts/Social sciences'),
(2, 'Actuarial Science/Studies', 'Maths', 'Further Maths, Economics, Business studies', 'Arts/Social sciencs'),
(3, 'Aeronautical Engineering', 'Maths and Physics', 'Further Maths, Design Technology', 'Sciences'),
(5, 'French', 'French', 'Another foreign language, English Literature, History, Politics\r\nGeography', 'arts'),
(6, 'Geography', 'Geography', 'Biology, Chemistry', 'Sciences'),
(7, 'Geology/Earth Sciences', 'Usually two from Maths, Physics, Chemistry and Biology', 'Geography, Geology', 'Sciencs'),
(8, 'English\r\n', 'English Literature (some courses will accept English Language)\r\n', 'History, RE, a foreign language.', 'arts'),
(9, 'Electrical/Electrical Engineering', 'Maths, Physics', 'Further Maths, ICT, Design Technology', 'Sciences'),
(11, 'German', 'English', 'Literature,French', 'arts'),
(12, 'German', 'English', 'Literature,French,Swiss German', 'arts'),
(14, 'Software engineering', 'Mathematics,Physics', 'Computer,', 'sciences');

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
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `english` varchar(256) NOT NULL,
  `maths` varchar(256) NOT NULL,
  `chemistry` varchar(256) NOT NULL,
  `biology` varchar(256) NOT NULL,
  `account` varchar(256) NOT NULL,
  `literature` varchar(256) NOT NULL,
  `commerce` varchar(256) NOT NULL,
  `goverment` varchar(256) NOT NULL,
  `food_nutrition` varchar(256) NOT NULL,
  `technical_drawing` varchar(256) NOT NULL,
  `history` varchar(256) NOT NULL,
  `physics` varchar(256) NOT NULL,
  `agriculture` varchar(256) NOT NULL,
  `geography` varchar(256) NOT NULL,
  `further_maths` varchar(256) NOT NULL,
  `economics` varchar(256) NOT NULL,
  `crk` varchar(256) NOT NULL,
  `health_education` varchar(256) NOT NULL,
  `music` varchar(256) NOT NULL,
  `fine_arts` varchar(256) NOT NULL,
  `wood_work` varchar(256) NOT NULL,
  `french` varchar(256) NOT NULL,
  `user_id` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `english`, `maths`, `chemistry`, `biology`, `account`, `literature`, `commerce`, `goverment`, `food_nutrition`, `technical_drawing`, `history`, `physics`, `agriculture`, `geography`, `further_maths`, `economics`, `crk`, `health_education`, `music`, `fine_arts`, `wood_work`, `french`, `user_id`, `username`) VALUES
(0, 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', '', ''),
(0, 'B3', 'C4', 'A1', 'B3', 'B3', 'B3', 'F9', 'C6', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', '', ''),
(0, 'B2', 'A1', 'A1', 'B3', 'C4', 'C4', 'B2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '8', ''),
(0, 'A1', 'A1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '8', ''),
(0, 'B3', 'B2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'B3', '', 'A1', '9', ''),
(0, 'A1', 'A1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '10', ''),
(0, 'A1', 'B2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '11', ''),
(0, 'B2', 'B2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '12', ''),
(0, 'A1', 'A1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 'B3', 'B2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '14', ''),
(0, 'B2', 'C4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '15', ''),
(0, 'B3', 'B2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '17', ''),
(0, 'B2', 'A1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '18', '');

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
(1, 'user', 'user', 'user@gmail.com', 1, 'Introvert', 'food', 'Rich'),
(2, 'pass', 'pass', '', 0, '', '', ''),
(3, 'captain', 'captain', '', 2, 'Introvert', 'running', 'Rich'),
(7, 'samson adedayo', 'samson', '', 1, 'Ambivert', 'football', 'Middle'),
(14, 'salomi', 'salomi', '', 1, 'Introvert', 'food', 'Rich'),
(15, 'smart', 'smart', '', 2, 'Introvert', 'volleyball', 'Rich'),
(16, 'mike', 'mike', '', 0, '', '', ''),
(17, 'maya', 'maya', '', 1, 'Introvert', 'fashion', 'Rich'),
(18, 'sade', 'sade', '', 1, 'Introvert', 'Dancing', 'Rich');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
