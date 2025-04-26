-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 02:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shrisr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `pwd` varchar(225) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `identity` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `identity` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE `head` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `pwd` varchar(225) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `identity` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL DEFAULT 'Admin@123',
  `identity` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `roll` int(30) NOT NULL,
  `section` varchar(10) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `phone2` varchar(15) NOT NULL,
  `stu_adhaar` varchar(255) DEFAULT NULL,
  `father_adhaar` varchar(255) DEFAULT NULL,
  `mother_adhaar` varchar(255) DEFAULT NULL,
  `bio` varchar(255) NOT NULL,
  `img` varchar(50) NOT NULL,
  `parent_occtupation` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `joinnig` date NOT NULL DEFAULT current_timestamp(),
  `join_class` varchar(255) NOT NULL,
  `currant_class` varchar(255) NOT NULL,
  `drop_date` date NOT NULL,
  `class_id` varchar(255) NOT NULL,
  `payment` date NOT NULL,
  `amount` int(50) NOT NULL,
  `transport_id` varchar(255) NOT NULL,
  `hostel_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `userid`, `pwd`, `identity`, `fname`, `mname`, `lname`, `dob`, `gender`, `father`, `mother`, `class`, `roll`, `section`, `blood_group`, `religion`, `email`, `phone`, `phone2`, `stu_adhaar`, `father_adhaar`, `mother_adhaar`, `bio`, `img`, `parent_occtupation`, `address`, `city`, `state`, `pincode`, `joinnig`, `join_class`, `currant_class`, `drop_date`, `class_id`, `payment`, `amount`, `transport_id`, `hostel_id`) VALUES
(10001, 'STU_2310001', 'Admin@123', 'student', 'Balmiki', '', 'Kumar', '2000-10-13', 'Male', 'Ayodhya pandit', 'Sitavi devi', 'MCA', 2235548, 'A', 'A+', 'Hindu', 'balmikikumar0786@gmail.com', '7087063168', '7087063168', '1', '2', '3', 'no', 'STU_2300001.png', 'Parivate job', 'Deep nagar', 'Ludhiana', 'Punjab', '141010', '0000-00-00', '', '', '0000-00-00', '', '2023-11-15', 1500, '', ''),
(10002, 'STU_2310002', 'Admin@123', '', 'Chhaya', '', 'Kushwaha', '2003-12-26', 'Female', 'Jagdev kushwaha', 'ramrati kushwaha', 'Ten', 0, 'A', 'A+', 'Hindu', 'chhayakushwaa6@gmail.com', '7087063168', '', '', '', '', '', 'STU_2310002.png', '', NULL, NULL, NULL, NULL, '2023-11-20', '', '', '0000-00-00', '', '0000-00-00', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `pwd` varchar(225) NOT NULL DEFAULT 'Admin@123',
  `img` varchar(255) NOT NULL,
  `identity` varchar(255) NOT NULL,
  `fname` varchar(55) DEFAULT NULL,
  `mname` varchar(55) DEFAULT NULL,
  `lname` varchar(55) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `blood_group` varchar(15) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `phone2` varchar(55) NOT NULL,
  `adhaar` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` int(50) NOT NULL,
  `joining_date` date NOT NULL DEFAULT current_timestamp(),
  `bio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `userid`, `pwd`, `img`, `identity`, `fname`, `mname`, `lname`, `dob`, `gender`, `blood_group`, `religion`, `email`, `phone`, `phone2`, `adhaar`, `address`, `city`, `state`, `pincode`, `joining_date`, `bio`) VALUES
(10001, 'T_2310001', 'Admin@123', 'T_2410001.png', 'teacher', 'Balmiki', '', 'kumar', '2000-10-13', 'Male', 'A+', 'Hindu', 'balmikikumar0786@gmail.com', '7087063168', '9877021724', '212305792889', 'Sherpur kalan', 'Ludhiana', 'PUNJAB', 141010, '2023-12-27', 'nothing'),
(10002, 'T_2410002', 'Admin@123', 'T_2410002.png', 'teacher', 'Arun', '', 'tivari', '1997-07-10', 'Male', 'O+', 'Hindu', 'rampurexam@gmail.com', '7888875713', '', '32165987', 'tazpur road', 'Ludhiana', 'punjab', 141010, '2024-03-28', ''),
(10003, 'T_2410003', 'Admin@123', 'T_2410003.png', 'teacher', 'Chhaya', '', 'Kushwaha', '2003-12-26', 'Female', 'A+', 'Hindu', 'chhayakushwaa6@gmail.com', '7380959362', '', '12346789012', 'ingohata', 'Hamirpur', 'uttarprdesh', 14, '2024-03-29', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `head`
--
ALTER TABLE `head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `head`
--
ALTER TABLE `head`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
