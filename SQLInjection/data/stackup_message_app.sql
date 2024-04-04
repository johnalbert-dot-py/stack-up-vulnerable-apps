-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 07:14 PM
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
-- Database: `stackup_message_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

CREATE TABLE `conversation` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `sent_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conversation`
--

INSERT INTO `conversation` (`id`, `message`, `receiver_id`, `created_at`, `sent_by`) VALUES
(34, 'hi', 6, '2024-04-05 01:06:48', 'you'),
(35, 'hello!', 6, '2024-04-05 01:06:57', 'student'),
(36, 'hahah kumusta kana?', 6, '2024-04-05 01:07:05', 'student'),
(37, 'eto okay lang hehehe', 6, '2024-04-05 01:07:14', 'you'),
(38, 'ay ganonn?????', 6, '2024-04-05 01:07:38', 'student'),
(39, 'omsim', 6, '2024-04-05 01:07:43', 'you'),
(40, 'wazap felixonearth', 5, '2024-04-05 01:07:56', 'you'),
(41, 'yo!!! wazap mahmen!', 5, '2024-04-05 01:08:06', 'student'),
(42, 'balita ko mayaman ka na raw ah', 5, '2024-04-05 01:08:19', 'you'),
(43, 'dehins pa lods, di pa nabebenta ang secret parapernalya natin ', 5, '2024-04-05 01:08:53', 'student'),
(44, 'benta mo na lods para may pang scatter na tayo hehehe', 5, '2024-04-05 01:09:08', 'you'),
(45, 'clarence ariel gusion pamilarrr', 4, '2024-04-05 01:09:24', 'you'),
(46, 'ano na naman baa?', 4, '2024-04-05 01:09:34', 'student'),
(47, 'tara dota na', 4, '2024-04-05 01:09:40', 'you'),
(48, 'open', 4, '2024-04-05 01:09:43', 'you'),
(49, 'invite kita', 4, '2024-04-05 01:09:45', 'you'),
(50, 'baliw di ako nagdodota hanep ka', 4, '2024-04-05 01:09:57', 'student'),
(51, 'invite ka nang invite', 4, '2024-04-05 01:10:02', 'student'),
(52, 'para kang gagsti', 4, '2024-04-05 01:10:10', 'student'),
(53, ':((((', 4, '2024-04-05 01:10:19', 'you'),
(54, 'lister', 3, '2024-04-05 01:10:34', 'you'),
(55, 'penge naman airdrop mo', 3, '2024-04-05 01:10:39', 'you'),
(56, 'kadamot mo naman pala', 3, '2024-04-05 01:10:45', 'you'),
(57, 'hays', 3, '2024-04-05 01:10:45', 'you'),
(58, 'huuu! edi maghanap ka', 3, '2024-04-05 01:11:07', 'student'),
(59, 'marami non sa twitter', 3, '2024-04-05 01:11:13', 'student'),
(60, 'doon ka maghanap', 3, '2024-04-05 01:11:19', 'student'),
(61, 'hahahaha', 3, '2024-04-05 01:11:21', 'student'),
(62, 'ganyan ka pala boy', 3, '2024-04-05 01:11:29', 'you'),
(63, 'ano par', 2, '2024-04-05 01:11:35', 'you'),
(64, 'gym na par', 2, '2024-04-05 01:11:37', 'you'),
(65, 'lika na palaki na tayo ng maskels natin', 2, '2024-04-05 01:11:57', 'you'),
(66, 'para malakas humatak ng eabas', 2, '2024-04-05 01:12:04', 'you'),
(67, 'eababs*', 2, '2024-04-05 01:12:10', 'you'),
(68, 'HAHAHHAHAHAHAHAHAHAHA', 2, '2024-04-05 01:12:13', 'you'),
(69, 'pass ako dyan sa eababs dol', 2, '2024-04-05 01:12:23', 'student'),
(70, 'loyal tayo dol', 2, '2024-04-05 01:12:26', 'student'),
(71, 'yun lang e', 2, '2024-04-05 01:12:34', 'you'),
(72, 'hoy ikaw', 1, '2024-04-05 01:12:55', 'you'),
(73, 'marami ka bang dyan ano?', 1, '2024-04-05 01:13:03', 'you'),
(74, 'ano na naman yon?', 1, '2024-04-05 01:13:10', 'student'),
(75, 'wala akong tinatagong bato', 1, '2024-04-05 01:13:14', 'student'),
(76, 'pero ano meron :)))', 1, '2024-04-05 01:13:18', 'student'),
(77, 'mwehehehhe', 1, '2024-04-05 01:13:23', 'student'),
(78, 'share mo naman dol', 1, '2024-04-05 01:13:29', 'you'),
(79, 'heheheh', 1, '2024-04-05 01:13:31', 'you'),
(80, 'ayaw pa niyan oh', 1, '2024-04-05 01:13:34', 'you');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_no` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_pic_url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_no`, `first_name`, `middle_name`, `last_name`, `email`, `profile_pic_url`) VALUES
(1, 'SUM2021-204121', 'Clint Zeus', 'Aclera', 'Casil', 'clintzeus0@gmail.com', NULL),
(2, 'SUM2021-52123', 'Ralph Ashley', 'Omana', 'Canlas', 'ralphcanlas@gmail.com', NULL),
(3, 'SUM2021-52123', 'Lexter', 'Mateo', 'Mauricio', 'crypt0g0ds69@gmail.com', NULL),
(4, 'SUM2021-123455', 'Clarence Ariel', 'Gusion', 'Pamilar', 'clarencepamilar123@gmail.com', NULL),
(5, 'SUM2021-45679', 'Felix', 'Genetanio', 'Balmores', 'FelixonEarth@gmail.com', NULL),
(6, 'SUM2021-94871', 'Vayne Hansly', 'Repato', 'Cruz', 'VayneHansly@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `conversation`
--
ALTER TABLE `conversation`
  ADD CONSTRAINT `conversation_ibfk_1` FOREIGN KEY (`receiver_id`) REFERENCES `student` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
