-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 23, 2020 at 02:19 PM
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
-- Database: `acmis_web`
--

DELIMITER $$
--
-- Functions
--
DROP FUNCTION IF EXISTS `budget_variance`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `budget_variance` (`e_title` VARCHAR(30)) RETURNS FLOAT BEGIN
Declare variance float;
Declare actual_budget float;
Declare proposed_budget float;
SELECT total_assigned_price into proposed_budget from budget_plan WHERE e_title=title;
SELECT actual_total_price into actual_budget from budget_plan WHERE e_title=title; 
SELECT proposed_budget - actual_budget into variance;
RETURN variance;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `arduino_and_3d_printing`
--

DROP TABLE IF EXISTS `arduino_and_3d_printing`;
CREATE TABLE IF NOT EXISTS `arduino_and_3d_printing` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` varchar(20) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `result` int(10) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arduino_and_3d_printing`
--

INSERT INTO `arduino_and_3d_printing` (`id`, `Name`, `email`, `contact`, `password`, `status`, `exam_id`, `result`) VALUES
(1, 'hgfgh', 'saduni123@gmail.com', 715584007, 'acmis123', 'New', 0, 0),
(2, 'kamal suriyawardana', 'kamal@gmail.com', 714485521, '', 'Deleted', 0, 0),
(3, 'Saduni Nirmani', 'eshmini@gmail.com', 714558712, '25486', 'New', 0, 0),
(6, 'sathsara sammani', 'sathsarasammani@gmail.com', 719685963, '21590141', 'New', 2, 5),
(7, 'Sahani Nimesha', 'sahaninimesha@gmail.com', 771586452, '6796ca2f0fc2f797c0331e9c99eae448', 'new', 0, 0),
(8, 'Sithara menik', 'sitharamp1996@gmail.com', 771593430, 'f4cdab18f0209d0776c33a4fec8b5553', 'new', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `budget_plan`
--

DROP TABLE IF EXISTS `budget_plan`;
CREATE TABLE IF NOT EXISTS `budget_plan` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `proposed_decoration` double(11,2) NOT NULL,
  `assigned_decoration` double(11,2) NOT NULL,
  `proposed_refreshment` double(11,2) NOT NULL,
  `assigned_refreshment` double(11,2) NOT NULL,
  `proposed_equipment` double(11,2) NOT NULL,
  `assigned_equipment` double(11,2) NOT NULL,
  `proposed_other` double(11,2) NOT NULL,
  `assigned_other` double(11,2) NOT NULL,
  `proposed_total_cost` double(11,2) NOT NULL,
  `assigned_total_budget` double(11,2) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `budget_plan`
--

INSERT INTO `budget_plan` (`event_id`, `title`, `proposed_decoration`, `assigned_decoration`, `proposed_refreshment`, `assigned_refreshment`, `proposed_equipment`, `assigned_equipment`, `proposed_other`, `assigned_other`, `proposed_total_cost`, `assigned_total_budget`) VALUES
(1, 'cristmes', 200.00, 0.00, 100.00, 0.00, 100.00, 0.00, 100.00, 0.00, 500.00, 0.00),
(2, 'new year party', 1000.00, 0.00, 100.00, 0.00, 122.00, 0.00, 122.00, 0.00, 1344.00, 0.00),
(3, 'Aniversary Party-2020', 20000.00, 14000.00, 25000.00, 20000.00, 6000.00, 7500.00, 200.00, 780.00, 51200.00, 42280.00),
(4, 'Aniversary Party-2019', 0.00, 1500.00, 0.00, 1200.00, 0.00, 1410.00, 0.00, 560.00, 16420.00, 0.00),
(5, 'df/klvm', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 7331.00, 0.00),
(6, 'Cristmes Party 2020', 2500.00, 2750.00, 2250.00, 2500.00, 2300.00, 2200.00, 1000.00, 1000.00, 8050.00, 0.00),
(7, 'Sinhala and Tamil New Year', 5000.00, 0.00, 10000.00, 0.00, 1000.00, 0.00, 5000.00, 0.00, 21000.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `business_english`
--

DROP TABLE IF EXISTS `business_english`;
CREATE TABLE IF NOT EXISTS `business_english` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` varchar(20) NOT NULL,
  `result` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_english`
--

INSERT INTO `business_english` (`id`, `Name`, `email`, `contact`, `password`, `status`, `result`) VALUES
(1, 'sathsara sammani', 'sathsara@gmail.com', 775584007, '0c7919635b6a605a8655bb0e2714067c', 'new', NULL),
(2, 'kamal', 'kamal@gmail.com', 215901411, '21590141', 'New', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

DROP TABLE IF EXISTS `chat_messages`;
CREATE TABLE IF NOT EXISTS `chat_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id`, `user_id`, `message`, `timestamp`) VALUES
(31, 'malik', 'Hi', '2020-07-30 18:04:58'),
(32, 'ADMIN', 'Hii', '2020-07-30 18:05:35'),
(33, 'ADMIN', '', '2020-07-30 18:20:17'),
(34, 'malik', 'helloww', '2020-07-30 22:07:36'),
(35, 'ADMIN', 'Hi', '2020-07-30 23:38:18'),
(36, 'malik', 'Hi', '2020-07-30 23:39:25'),
(37, 'malik', 'Hi New Message', '2020-07-31 00:41:50'),
(38, 'ADMIN', 'Hi New message 2', '2020-07-31 00:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

DROP TABLE IF EXISTS `contact_message`;
CREATE TABLE IF NOT EXISTS `contact_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`id`, `name`, `email`, `phone`, `message`, `status`) VALUES
(2, 'sathsara sammani', 'sathsarasammani@gmail.com', 714578452, 'I am sathsara,\r\nI want to know about course content of Arduino and 3d Printing.', 'New'),
(3, 'Sithara menik', 'sitharamp1996@gmail.com', 775969660, 'Please send me course details', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `english_enrichment`
--

DROP TABLE IF EXISTS `english_enrichment`;
CREATE TABLE IF NOT EXISTS `english_enrichment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` varchar(20) NOT NULL,
  `result` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `english_enrichment`
--

INSERT INTO `english_enrichment` (`id`, `Name`, `email`, `contact`, `password`, `status`, `result`) VALUES
(1, 'Saduni Nirmani', 'saduni123@gmail.com', 715858963, '', 'new', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam_details`
--

DROP TABLE IF EXISTS `exam_details`;
CREATE TABLE IF NOT EXISTS `exam_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `exam_name` varchar(100) NOT NULL,
  `duration` int(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_details`
--

INSERT INTO `exam_details` (`id`, `subject`, `exam_name`, `duration`, `status`) VALUES
(1, 'Arduino and 3D Printing', 'Intake Examination-2018 (Arduino and 3D Printing)', 18, 'Deleted'),
(2, 'Arduino and 3D Printing', 'Intake Examination - 2020(Arduino and 3D Printing)', 30, 'Active'),
(3, 'Scratch Programming', 'Intake Examination 2019 - Scratch Programming', 60, 'Deleted'),
(5, 'Business English', 'ss', 30, 'Deleted'),
(6, 'Arduino and 3D Printing', 'Intake exam - 2020', 30, 'Active'),
(7, 'English Enrichment', 'Intake Exam - 2020 English Enrichment', 30, 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `newsfeed`
--

DROP TABLE IF EXISTS `newsfeed`;
CREATE TABLE IF NOT EXISTS `newsfeed` (
  `event_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsfeed`
--

INSERT INTO `newsfeed` (`event_id`, `title`, `description`, `img`) VALUES
(19, 'Christmas', 'We are celebrating chrismas in every year with all the youth forum members , club members and other member in every december', 'c1.jpg'),
(20, 'Thai Pongol', 'We are celebrating thai pongal every year which will be arranged and coordinated by the youth forum members along with the american corner coordinator and other members of american corner matara', 'a1.jpg'),
(23, 'Sinhala and Tamil New year', 'We are celebrating sinhala and tamil new year in every April every year which will be arranged and coordinated by the youth forum members along with the american corner coordinator and other members of american corner matara', 'aa3.jpg'),
(25, 'Aniversary Party', 'Annual party alone with all the members', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `exam_id` int(10) NOT NULL,
  `subject_id` int(5) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option_1` varchar(100) NOT NULL,
  `option_2` varchar(100) NOT NULL,
  `option_3` varchar(100) NOT NULL,
  `option_4` varchar(100) NOT NULL,
  `correct_answer` int(1) NOT NULL,
  `answer` int(2) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `exam_id`, `subject_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_answer`, `answer`, `Status`) VALUES
(1, 2, 0, 'dms', 'dms,', 'dsm', 'md,', 'sdm ', 3, 0, 'Deleted'),
(2, 2, 0, 'Which one is the primsry color?', 'Red', 'Pink', 'Green', 'Black', 1, 0, 'Active'),
(3, 2, 0, 'Which one is the Mammel?', 'Penguine', 'Peacock', 'Snake', 'bear', 4, 0, 'Deleted'),
(4, 2, 0, 'what is meant by 3D', 'Three Dimentional', 'Three Direction', 'Three Determination', 'Three Division', 1, 0, 'Active'),
(5, 3, 0, 'd,f', 'f,dm', ',fd ', 'mrf ', 'm,mrf', 1, 0, 'Deleted'),
(6, 3, 0, '	 For which of the following disciplines is Nobel Prize awarded?', 'Physics and Chemistry', 'Physiology or Medicine', 'Literature, Peace and Economics', 'All of the above', 4, 0, 'Active'),
(7, 3, 0, 'Galileo was an Italian astronomer who', 'developed the telescope', 'discovered four satellites of Jupiter', 'discovered that the movement of pendulum produces a regular time measurement', 'All of the above', 4, 0, 'Active'),
(8, 4, 0, 'dsm', 'dddddd', 'd', 'c', 'e', 2, 0, 'Deleted'),
(9, 2, 0, 'Who is the father of computer?', 'Charls Darvin', 'Albert Ainstain', 'Charls Babbage', 'Ada Ogasta', 3, 0, 'Active'),
(10, 2, 0, '\'OS\' computer abbreviation usually means ?', 'Order of Significance', 'Open Software', 'Operating System', 'Optical Sensor', 3, 0, 'Active'),
(11, 6, 0, 'What are the primary numbers', '1', '3', '5', 'All of the above', 4, 0, 'Deleted'),
(12, 2, 0, 'What are the primary numbers', '1', '3', '5', 'All of the above', 4, 0, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `scratch_programming`
--

DROP TABLE IF EXISTS `scratch_programming`;
CREATE TABLE IF NOT EXISTS `scratch_programming` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scratch_programming`
--

INSERT INTO `scratch_programming` (`id`, `Name`, `email`, `contact`, `password`, `status`) VALUES
(1, 'kamal suriyawardana', 'kamal@gmail.com', 714485522, '123', 'Deleted'),
(2, 'Sewwandi Weerasinghe', 'sewwandiW123@gmail.com', 715698462, 'c363c9a28ffe1c54ca78210de2e00ab0', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `student_answer`
--

DROP TABLE IF EXISTS `student_answer`;
CREATE TABLE IF NOT EXISTS `student_answer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `exam_id` int(10) DEFAULT NULL,
  `subject` varchar(100) NOT NULL,
  `user_id` int(10) NOT NULL,
  `question_id` int(10) NOT NULL,
  `correct_answer` int(10) NOT NULL,
  `answer` int(10) NOT NULL,
  `match_answer` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_answer`
--

INSERT INTO `student_answer` (`id`, `exam_id`, `subject`, `user_id`, `question_id`, `correct_answer`, `answer`, `match_answer`) VALUES
(28, 2, 'Arduino and 3D Printing', 6, 2, 1, 1, 'true');

--
-- Triggers `student_answer`
--
DROP TRIGGER IF EXISTS `after_mark_insert`;
DELIMITER $$
CREATE TRIGGER `after_mark_insert` AFTER INSERT ON `student_answer` FOR EACH ROW BEGIN


IF new.subject="Arduino and 3D Printing" THEN
	IF new.match_answer ="true" THEN
		UPDATE arduino_and_3d_printing SET result=result+1,exam_id = new.exam_id WHERE id=new.user_id;
	END IF;

ELSEIF new.subject="Business English" THEN
	IF new.match_answer ="true" THEN
		UPDATE business_english SET result=result+1,exam_id = new.exam_id WHERE id=new.user_id;
	END IF;
ELSEIF new.subject="English Enrichment" THEN
	IF new.match_answer ="true" THEN
		UPDATE english_enrichment SET result=result+1,exam_id = new.exam_id WHERE id=new.user_id;
	END IF;
END IF;

END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `after_mark_update`;
DELIMITER $$
CREATE TRIGGER `after_mark_update` AFTER UPDATE ON `student_answer` FOR EACH ROW BEGIN


IF new.subject="Arduino and 3D Printing" THEN
	IF new.match_answer ="true" THEN
		UPDATE arduino_and_3d_printing SET result=result+1 WHERE id=new.user_id;

	ELSEIF new.match_answer ="false" THEN
		UPDATE arduino_and_3d_printing SET result=result-1 WHERE id=new.user_id;
	END IF;

ELSEIF new.subject="Business English" THEN
	IF new.match_answer ="true" THEN
		UPDATE business_english SET result=result+1 WHERE id=new.user_id;

	ELSEIF new.match_answer ="false" THEN
		UPDATE business_english SET result=result-1 WHERE id=new.user_id;
	END IF;
ELSEIF new.subject="English Enrichment" THEN
	IF new.match_answer ="true" THEN
		UPDATE english_enrichment SET result=resul+1 WHERE id=new.user_id;
	ELSEIF new.match_answer ="false" THEN
		UPDATE business_english SET result=result-1 WHERE id=new.user_id;
	END IF;
END IF;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `total_marks`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `total_marks`;
CREATE TABLE IF NOT EXISTS `total_marks` (
`Exam_ID` int(10)
,`UserID` int(10)
,`Marks` decimal(23,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `re_pwd` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `uname`, `password`, `re_pwd`) VALUES
(1, 'klmlm', '452552', 'f85454e8279be180185cac7d243c5eb3', '522'),
(2, 'malik', 'ard01', '85976568dc731ba936f628871033eb8f', 'ard01'),
(3, 'mnknk', 'mkmk', '8e296a067a37563370ded05f5a3bf3ec', '8e296a067a37563370ded05f5a3bf3ec'),
(4, 'ADMIN', 'ADMIN', '0192023a7bbd73250516f069df18b500', '0192023a7bbd73250516f069df18b500'),
(5, 'jane', 'YF02', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(6, 'Sihina Mandakini', 'ard07', 'ecc1b19847bfcfabe79a0d69687b3fe3', 'ecc1b19847bfcfabe79a0d69687b3fe3');

-- --------------------------------------------------------

--
-- Structure for view `total_marks`
--
DROP TABLE IF EXISTS `total_marks`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `total_marks`  AS  select `student_answer`.`exam_id` AS `Exam_ID`,`student_answer`.`user_id` AS `UserID`,sum(`student_answer`.`match_answer` = 'true') AS `Marks` from `student_answer` group by `student_answer`.`user_id` ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
