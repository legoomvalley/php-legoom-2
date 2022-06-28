-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.28 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for websiteu_hr
DROP DATABASE IF EXISTS `websiteu_hr`;
CREATE DATABASE IF NOT EXISTS `websiteu_hr` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `websiteu_hr`;

-- Dumping structure for table websiteu_hr.applicants
DROP TABLE IF EXISTS `applicants`;
CREATE TABLE IF NOT EXISTS `applicants` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `school` int NOT NULL,
  `edu` varchar(50) DEFAULT '',
  `usertype` int NOT NULL,
  `course` varchar(50) DEFAULT '',
  `intro` varchar(100) DEFAULT NULL,
  `docs` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT '',
  `status` varchar(50) DEFAULT NULL,
   `date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `school` (`school`),
  KEY `usertype` (`usertype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table websiteu_hr.applicants: ~0 rows (approximately)
/*!40000 ALTER TABLE `applicants` DISABLE KEYS */;
/*!40000 ALTER TABLE `applicants` ENABLE KEYS */;

-- Dumping structure for table websiteu_hr.assignment
DROP TABLE IF EXISTS `assignment`;
CREATE TABLE IF NOT EXISTS `assignment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `projectid` int DEFAULT '0',
  `userid` int DEFAULT '0',
  `roleid` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table websiteu_hr.assignment: ~0 rows (approximately)
/*!40000 ALTER TABLE `assignment` DISABLE KEYS */;
INSERT INTO `assignment` (`id`, `projectid`, `userid`, `roleid`) VALUES
	(1, 1, 7, 2),
	(2, 2, 7, 3),
	(3, 1, 8, 2);
/*!40000 ALTER TABLE `assignment` ENABLE KEYS */;

-- Dumping structure for table websiteu_hr.edulevel
DROP TABLE IF EXISTS `edulevel`;
CREATE TABLE IF NOT EXISTS `edulevel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table websiteu_hr.edulevel: ~2 rows (approximately)
/*!40000 ALTER TABLE `edulevel` DISABLE KEYS */;
INSERT INTO `edulevel` (`id`, `name`, `description`) VALUES
	(1, 'DIPLOMA', '-'),
	(2, 'DEGREE', '-');
/*!40000 ALTER TABLE `edulevel` ENABLE KEYS */;

-- Dumping structure for table websiteu_hr.form
DROP TABLE IF EXISTS `form`;
CREATE TABLE IF NOT EXISTS `form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `yesterday_task` varchar(200) DEFAULT NULL,
  `today_task` varchar(200) DEFAULT NULL,
  `obstacle_faced` varchar(200) DEFAULT NULL,
  `intern_id` int DEFAULT NULL,
  `summary` varchar(200) DEFAULT NULL,
  `person_related` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table websiteu_hr.form: ~5 rows (approximately)
/*!40000 ALTER TABLE `form` DISABLE KEYS */;
INSERT INTO `form` (`id`, `yesterday_task`, `today_task`, `obstacle_faced`, `intern_id`, `summary`, `person_related`, `date`, `status`, `comment`) VALUES
	(3, 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxx', 7, 'xxxxxxxxxx', '1', '2022-03-22 11:16:15', NULL, NULL),
	(4, 'ffffffffffffff', 'ffffffffffffffff', 'fffffffffffffffff', 1, 'fffffffffffff', '8', '2022-03-22 11:19:56', NULL, NULL),
	(5, 'dfcsdc', 'dscsd', 'dcsdcsd', 1, 'csd', '1', '2022-03-23 00:22:57', NULL, NULL),
	(6, 'asaa', 'asaasa', 'assasa', 1, 'asas', '7', '2022-04-08 14:50:15', NULL, NULL),
	(8, 'scsacs', 'sdcsd', 'dsccsd', 1, 'dscsd', '7', '2022-04-08 16:44:11', NULL, NULL);
/*!40000 ALTER TABLE `form` ENABLE KEYS */;

-- Dumping structure for table websiteu_hr.position
DROP TABLE IF EXISTS `position`;
CREATE TABLE IF NOT EXISTS `position` (
  `id` int NOT NULL AUTO_INCREMENT,
  `posnames` varchar(200) DEFAULT NULL,
  `descriptions` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='list of position';

-- Dumping data for table websiteu_hr.position: ~0 rows (approximately)
/*!40000 ALTER TABLE `position` DISABLE KEYS */;
INSERT INTO `position` (`id`, `posnames`, `descriptions`) VALUES
	(1, 'Intern Edu Tech Analyst', '1. Do something here\r\n2. Do something here\r\n3. Do something here'),
	(2, 'Support Developer', 'support developer'),
	(3, 'Software Engineer', 'Engineer ');
/*!40000 ALTER TABLE `position` ENABLE KEYS */;

-- Dumping structure for table websiteu_hr.project
DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `framework` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table websiteu_hr.project: ~0 rows (approximately)
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` (`id`, `title`, `type`, `name`, `description`, `framework`, `status`) VALUES
	(1, 'HRMS Intern Report', 'Legoom Project', 'Legoom', 'Display log book for internship students', 'Bookstrap, React', 'In Progress'),
	(2, 'Legoom Circle', 'Legoom Project', 'Legoom', 'Create a new Legoom Academy System', 'Laravel', 'In Progress');
/*!40000 ALTER TABLE `project` ENABLE KEYS */;

-- Dumping structure for table websiteu_hr.school
DROP TABLE IF EXISTS `school`;
CREATE TABLE IF NOT EXISTS `school` (
  `id` int NOT NULL AUTO_INCREMENT,
  `school` varchar(50) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `shortname` varchar(100) DEFAULT NULL,
  `myname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1557 DEFAULT CHARSET=latin1;

-- Dumping data for table websiteu_hr.school: ~21 rows (approximately)
/*!40000 ALTER TABLE `school` DISABLE KEYS */;
INSERT INTO `school` (`id`, `school`, `branch`, `shortname`, `myname`) VALUES
	(1, 'International Islamic University Malaysia', NULL, 'IIUM', 'Universiti Islam Antarabangsa Malaysia'),
	(2, 'Islamic Science University of Malaysia', NULL, 'USIM', 'Universiti Sains Islam Malaysia'),
	(3, 'MARA University of Technology', NULL, 'UiTM', 'Universiti Teknologi MARA'),
	(4, 'National Defence University of Malaysia', NULL, 'UPNM', 'Universiti Pertahanan Nasional Malaysia'),
	(5, 'National University of Malaysia', NULL, 'UKM', 'Universiti Kebangsaan Malaysia'),
	(6, 'Northern University of Malaysia', NULL, 'UUM', 'Universiti Utara Malaysia'),
	(7, 'Putra University of Malaysia', NULL, 'UPM', 'Universiti Putra Malaysia'),
	(8, 'Sultan Idris Education University', NULL, 'UPSI', 'Universiti Pendidikan Sultan Idris'),
	(9, 'Sultan Zainal Abidin University', NULL, 'UniSZA', 'Universiti Sultan Zainal Abidin'),
	(10, 'Technical University of Malaysia', NULL, 'UTEM', 'Universiti Teknikal Malaysia Melaka'),
	(11, 'Tun Hussein Onn University of Malaysia', NULL, 'UTHM', 'Universiti Tun Hussein Onn Malaysia'),
	(12, 'University of Malaya', NULL, 'UM', 'Universiti Malaya'),
	(13, 'University of Malaysia Kelantan', NULL, 'UMK', 'Universiti Malaysia Kelantan'),
	(14, 'University of Malaysia Pahang', NULL, 'UMP', 'Universiti Malaysia Pahang'),
	(15, 'University of Malaysia Perlis', NULL, 'UNIMAP', 'Universiti Malaysia Perlis'),
	(16, 'University of Malaysia Sabah', NULL, 'UMS', 'Universiti Malaysia Sabah'),
	(17, 'University of Malaysia Sarawak', NULL, 'UNIMAS', 'Universiti Malaysia Sarawak'),
	(18, 'University of Malaysia Terengganu', NULL, 'UMT', 'Universiti Malaysia Terengganu'),
	(19, 'University of Science Malaysia', NULL, 'USM', 'Universiti Sains Malaysia'),
	(20, 'University of Technology Malaysia', NULL, 'UTM', 'Universiti Teknologi Malaysia'),
	(1556, 'Kota Wera', NULL, NULL, NULL);
/*!40000 ALTER TABLE `school` ENABLE KEYS */;

-- Dumping structure for table websiteu_hr.status
DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table websiteu_hr.status: ~2 rows (approximately)
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` (`name`) VALUES
	('Approved\r\n'),
	('Not Approved');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;

-- Dumping structure for table websiteu_hr.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `school` int NOT NULL,
  `edu` int NOT NULL,
  `usertype` int NOT NULL,
  `position` varchar(100) NOT NULL,
  `course` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `startdate` varchar(50) DEFAULT NULL,
  `enddate` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `school` (`school`),
  KEY `usertype` (`usertype`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table websiteu_hr.user: ~5 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `school`, `edu`, `usertype`, `position`, `course`, `password`, `avatar`, `startdate`, `enddate`) VALUES
	(1, 'Khairul Anwar', 'Abdah', 'e3thegasent@gmail.com', 1, 1, 2, '', 'asdasd', '12345678', NULL, NULL, NULL),
	(7, 'UITM2', 'ALAM', 'uitm2@gmail.com', 2, 1, 1, 'Intern Edu Tech Analyst', 'asdasd', '12345678', NULL, '2022-03-07', '2022-07-07'),
	(8, 'UITM3', 'ALAM', 'uitm3@gmail.com', 1554, 2, 1, '', 'asdasd', '12345678', NULL, NULL, NULL),
	(9, 'UITM4', 'ALAM', 'uitm4@gmail.com', 1555, 2, 1, '', 'asdasd', '12345678', NULL, NULL, NULL),
	(10, 'UITM5', 'ALAM', 'uitm5@gmail.com', 1556, 2, 1, '', 'asdasd', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for table websiteu_hr.usertype
DROP TABLE IF EXISTS `usertype`;
CREATE TABLE IF NOT EXISTS `usertype` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table websiteu_hr.usertype: ~4 rows (approximately)
/*!40000 ALTER TABLE `usertype` DISABLE KEYS */;
INSERT INTO `usertype` (`id`, `description`) VALUES
	(1, 'Student'),
	(2, 'Teacher'),
	(3, 'Management'),
	(4, 'Public');
/*!40000 ALTER TABLE `usertype` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
