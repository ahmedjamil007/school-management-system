-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2021 at 04:24 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ambia_madrasa_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `Username`, `Pass`) VALUES
(11, 'Md. Gulzar Hossain', '@5676@'),
(13, 'Md. Monir Hasan', '23456789');

-- --------------------------------------------------------

--
-- Table structure for table `committe_table`
--

CREATE TABLE `committe_table` (
  `message_id` int(11) NOT NULL,
  `messenger_name` varchar(50) NOT NULL,
  `messenger_position` varchar(250) NOT NULL,
  `msg` text NOT NULL,
  `messenger_picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `committe_table`
--

INSERT INTO `committe_table` (`message_id`, `messenger_name`, `messenger_position`, `msg`, `messenger_picture`) VALUES
(1, 'Hazi Kawser Ali', 'finance committee', 'kawserali@hmail.com', '612cce3b84bb80.04064021.jpg'),
(2, 'Hazi Mirja Borkot-ulla ', 'finance committee', 'mirja@gmail.com', '612cce2b2f68d3.07368163.jpg'),
(3, 'Hazi Nasir Ali', 'Discipline Committee', 'nasir124@gmail.com', '612cce1acaee56.09240052.jpg'),
(4, 'Hafiz Md.Ali Mortoja', 'Discipline Committee', 'alimurtuza@gmail.com', '612cce09487451.30040578.jpg'),
(5, 'Hazi Ali Mahmud', 'finance committee', 'Ali127@gmail.com', '612ccdf8d2bc99.88023509.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactmsg`
--

CREATE TABLE `contactmsg` (
  `id` int(11) NOT NULL,
  `Email` varchar(111) NOT NULL,
  `Message` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactmsg`
--

INSERT INTO `contactmsg` (`id`, `Email`, `Message`) VALUES
(4, 'ahmedjamil127@gmail.com', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.'),
(7, 'ahmedjamil127@gmail.com', 'hello how are you');

-- --------------------------------------------------------

--
-- Table structure for table `marquee`
--

CREATE TABLE `marquee` (
  `id` int(11) NOT NULL,
  `Message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marquee`
--

INSERT INTO `marquee` (`id`, `Message`) VALUES
(1, 'Covid-19 মোকাবেলায় সবাই মাক্স পরিধান করুন :: No mask No service :: Admission going on 2021');

-- --------------------------------------------------------

--
-- Table structure for table `messages_table`
--

CREATE TABLE `messages_table` (
  `message_id` int(11) NOT NULL,
  `messenger_name` varchar(50) NOT NULL,
  `messenger_position` varchar(250) NOT NULL,
  `msg` text NOT NULL,
  `messenger_picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages_table`
--

INSERT INTO `messages_table` (`message_id`, `messenger_name`, `messenger_position`, `msg`, `messenger_picture`) VALUES
(12, 'Hafiz Md.Ali Mortoja', 'Headmaster', 'alimortuja234@gmail.com', '612ccdbd07b500.50636865.jpg'),
(14, 'Ahamed Jalal Hossan', 'Assistent Headmaster', 'ahamedjalalbd@gmail.cim', '612ccda92c0705.37950304.jpg'),
(17, 'Abu Md. Kader', 'Teacher', 'kader123@gmail.com', '612ccd960104a5.34605364.jpg'),
(18, 'Abdul Halim Khan', 'Teacher', 'abdulhalimbd@gmail.com', '612ccd832424b3.42904124.jpg'),
(19, 'Saidul Islam', 'Teacher', 'saidulisalm34@gmail.com', '612ccd6f1d3146.43913288.jpg'),
(20, 'Hafiz Kamal Hossain', 'Teacher', 'kamalhossain@gmail.com', '612ccd5c9d49a2.46445790.jpg'),
(21, 'Hafiz Delwar hossain', 'Teacher', 'delwar123@gmail.com', '61385fa9922ef9.80955493.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_file`
--

CREATE TABLE `pdf_file` (
  `id` int(22) NOT NULL,
  `pdf` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdf_file`
--

INSERT INTO `pdf_file` (`id`, `pdf`) VALUES
(20, '4আম্বিয়া মাদ্রাসা.pdf'),
(22, 'আম্বিয়া মাদ্রাস122.pdf'),
(29, '12.9.2021 dhakil.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `studant_fee`
--

CREATE TABLE `studant_fee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studant_fee`
--

INSERT INTO `studant_fee` (`id`, `name`, `fee`) VALUES
(1, 'Ibtedaie Branch( Class 1 to 5)', '1000'),
(2, 'Dhakil Branch( Class 6 to 10)', '1500'),
(3, 'Hafiz Branch', '500'),
(4, 'Hostel fee', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `gname` varchar(200) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `class` varchar(10) NOT NULL,
  `shift` int(11) NOT NULL,
  `blgroup` varchar(5) NOT NULL,
  `division` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `sname`, `gname`, `contact`, `email`, `address`, `class`, `shift`, `blgroup`, `division`) VALUES
(75, 'hasan mahmud', 'zafor mai', '01951894007', 'ahamedjamil@gmail.com', 'QWE', '1', 2, 'o+', 1),
(76, 'Ahamed Jamil Bhuiyan', 'ABDUL MATIN', '01951894007', 'ahmedjamil1127@gmail.com', 'kaliajury', '9', 1, 'b+', 2),
(79, 'jowel', 'abul jowel', '01951894007', 'kal1oou@gmail.com', 'kaliajuryD', '9', 1, 'b+', 1),
(80, 'ahamed jubayer bhuiyan', 'matin bhuiyan', '01951894008', '456kaloou@gmail.com', 'kaliajuryDW', '2', 2, 'b+', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committe_table`
--
ALTER TABLE `committe_table`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `contactmsg`
--
ALTER TABLE `contactmsg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marquee`
--
ALTER TABLE `marquee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages_table`
--
ALTER TABLE `messages_table`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `pdf_file`
--
ALTER TABLE `pdf_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studant_fee`
--
ALTER TABLE `studant_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `committe_table`
--
ALTER TABLE `committe_table`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactmsg`
--
ALTER TABLE `contactmsg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `marquee`
--
ALTER TABLE `marquee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages_table`
--
ALTER TABLE `messages_table`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pdf_file`
--
ALTER TABLE `pdf_file`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `studant_fee`
--
ALTER TABLE `studant_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
