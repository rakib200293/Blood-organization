-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 11:00 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `phone`, `blood_group`, `message`) VALUES
(14, 'Sojib', 'Islam', 'sojibi814@gmail.com', 1723919818, 'A+', 'Need Immediately...'),
(15, 'Sojib', 'Islam', 'sojibi814@gmail.com', 1723919818, 'A+', 'Need Immediately...'),
(16, 'dsojeroig', 'gdhgskjgh', 'fdgfg@gmail.com', 5233565, 'B+', 'fjhgos'),
(17, 'dsojeroig', 'gdhgskjgh', 'fdgfg@gmail.com', 5233565, 'B+', 'fjhgos'),
(18, 'dsojeroig', 'gdhgskjgh', 'fdgfg@gmail.com', 5233565, 'B+', 'fjhgos'),
(19, 'dsojeroig', 'gdhgskjgh', 'fdgfg@gmail.com', 5233565, 'B+', 'fjhgos'),
(20, 'dsojeroig', 'gdhgskjgh', 'fdgfg@gmail.com', 5233565, 'B+', 'fjhgos'),
(21, 'ktoiklhaflif', 'lkjfalia', 'fdgfg@gmail.com', 5233565, 'A-', 'hfeslihfdrof'),
(22, 'ktoiklhaflif', 'lkjfalia', 'fdgfg@gmail.com', 5233565, 'A-', 'hfeslihfdrof'),
(23, 'Rakib', 'Islam', 'sojibi814@gmail.com', 1723919818, 'A+', 'Need A+ blood...'),
(24, 'Rakib', 'Islam', 'rakib.islam78@gmail.com', 189542358, 'A-', 'There is a  serious patient so need blood immediately.');

-- --------------------------------------------------------

--
-- Table structure for table `donnerlist`
--

CREATE TABLE `donnerlist` (
  `id` int(11) NOT NULL,
  `add_by` int(11) NOT NULL,
  `donner_name` varchar(100) NOT NULL,
  `donner_phone` int(15) NOT NULL,
  `donnet_date` date NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `donner_image` varchar(100) NOT NULL,
  `donner_address` varchar(100) NOT NULL,
  `d_occupation` varchar(100) NOT NULL,
  `donnet_address` varchar(100) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `patient_phone` int(15) NOT NULL,
  `patient_address` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '0=inactive,1=active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donnerlist`
--

INSERT INTO `donnerlist` (`id`, `add_by`, `donner_name`, `donner_phone`, `donnet_date`, `blood_group`, `donner_image`, `donner_address`, `d_occupation`, `donnet_address`, `patient_name`, `patient_phone`, `patient_address`, `status`) VALUES
(7, 1, 'Rakib', 1725941200, '2019-04-20', 'B+', 'rakib6.jpg', 'Panchagarh', 'à¦›à¦¾à¦¤à§à¦°', 'Dhaka', 'Rabbani', 1770179801, 'Mirpur 2', '1'),
(8, 1, 'Alamin', 1751528632, '2019-04-20', 'A+', 'alamin2.jpg', 'Debiganj', 'à¦›à¦¾à¦¤à§à¦°', 'Dhaka', 'Rokeya', 147895322, 'Kurigram', '1'),
(10, 1, 'Goutom Roy', 172330194, '2019-04-10', 'A+', 'goutom2.jpg', 'Panchagarh', 'à¦›à¦¾à¦¤à§à¦°', 'Rangpur', 'Ajijul', 198754230, 'Rajshahi', '1'),
(11, 1, 'Md kawser Alam', 17965826, '2019-04-15', 'B+', 'kawser2.jpg', 'Thakuragaon', 'à¦›à¦¾à¦¤à§à¦°', 'Dhaka', 'Amzad', 1845625478, 'Lalmunurhat', '1'),
(13, 1, 'Sujon Roy', 1785421368, '2019-03-06', 'O+', 'sujon.jpg', 'Nilfamari', 'à¦›à¦¾à¦¤à§à¦°', 'Rangpur', 'kisor', 1754258624, 'Thakurgaon', '1'),
(14, 1, 'Hira Roy', 1785216214, '2019-02-05', 'A+', 'hira.jpg', 'Thakuragaon', 'à¦›à¦¾à¦¤à§à¦°', 'Dhaka', 'Kader', 1785426281, 'Nilfamari', '1'),
(15, 1, 'Moni', 1725864875, '2019-04-02', 'A+', 'moni.jpg', 'Gaibandha', 'à¦›à¦¾à¦¤à§à¦°', 'Gaibandha', 'Kuddus', 2147483647, 'Thakurgaon', '1'),
(16, 1, 'Akhi Moni', 1785426321, '2019-04-02', 'B+', 'akhi.jpg', 'Rangpur', 'à¦›à¦¾à¦¤à§à¦°', 'Rangpur', 'Aziz', 1874523652, 'Thakurgaon', '1'),
(17, 1, 'Jannatun', 1754862130, '2019-01-09', 'O+', 'janu.jpg', 'Dinajpur', 'à¦›à¦¾à¦¤à§à¦°', 'Panchagarh', 'Goutom', 147895322, 'Kurigram', '1'),
(18, 1, 'Nazmul', 1758961421, '2019-04-03', 'A+', 'rakib.jpg', 'Dinajpur', 'à¦›à¦¾à¦¤à§à¦°', 'Gaibandha', 'Kalam', 147895355, 'Lalmunurhat', '1'),
(19, 1, 'Mominur Rahman', 1378541254, '2019-03-31', 'O+', 'sliders333.jpg', 'Panchagarh', 'à¦›à¦¾à¦¤à§à¦°', 'Rangpur', 'Babu', 147895322, 'Malibag', '1'),
(20, 1, 'Erfan Ali', 1782154752, '2019-04-10', 'A+', 'sliders222.jpg', 'Dinajpur', 'à¦›à¦¾à¦¤à§à¦°', 'Rangpur', 'Simran', 1754258582, 'Thakurgaon', '1'),
(21, 1, 'Sabbir Hasan', 2147483647, '1997-05-14', 'O+', 'IMG20190520110747.jpg', 'Vendabari', 'à¦‡à¦žà§à¦œà¦¿à¦¨à¦¿à§Ÿà¦¾à¦°', 'Dhaka', 'Monu', 1755224656, 'Aroyari', '1'),
(22, 1, 'Jamil', 1795222165, '2019-02-06', 'A+', 'nishad.jpg', 'Thakurgaon', 'à¦›à¦¾à¦¤à§à¦°', 'Dhaka', 'Monu', 1755224656, 'Atoyari', '1'),
(23, 1, 'sojib islam', 1723919818, '2019-05-01', 'A+', '', 'debiganj panchagarh', 'à¦¬à§à¦¯à¦¬à¦¸à¦¾à¦¯à¦¼à§€', 'dakha medicale hospital', 'rakib', 1644501298, 'dakha', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone_number`, `user_name`, `password`) VALUES
(1, 'Rakib', 1725941200, 'rakibislam', '56dd2852ee8e0335a0a5c639b428e2f7'),
(2, 'Arif', 1725941244, 'arifbabu', '179747'),
(3, 'Mahfuz', 175331478, 'mahfuzrahman', '278635');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donnerlist`
--
ALTER TABLE `donnerlist`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `donnerlist`
--
ALTER TABLE `donnerlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
