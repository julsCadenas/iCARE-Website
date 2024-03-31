-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 10:52 AM
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
-- Database: `icare`
--
CREATE DATABASE IF NOT EXISTS `icare` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `icare`;

-- --------------------------------------------------------

--
-- Table structure for table `consult`
--
-- Creation: Mar 18, 2024 at 02:09 PM
-- Last update: Mar 19, 2024 at 09:47 AM
--

DROP TABLE IF EXISTS `consult`;
CREATE TABLE `consult` (
  `stud_id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `descript` varchar(99) NOT NULL,
  `stud_nm` varchar(40) NOT NULL,
  `dept_id` int(10) NOT NULL,
  `subj_id` int(10) NOT NULL,
  `prof_id` int(10) NOT NULL,
  `time` varchar(40) NOT NULL,
  `remarks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `consult`:
--   `dept_id`
--       `departments` -> `dept_id`
--   `email`
--       `student_accounts` -> `stud_id`
--   `prof_id`
--       `professors` -> `prof_id`
--   `stud_id`
--       `student_accounts` -> `stud_id`
--   `stud_nm`
--       `student_accounts` -> `stud_id`
--   `subj_id`
--       `subjects` -> `subj_id`
--   `stud_id`
--       `student_accounts` -> `stud_id`
--

--
-- Dumping data for table `consult`
--

INSERT INTO `consult` (`stud_id`, `email`, `descript`, `stud_nm`, `dept_id`, `subj_id`, `prof_id`, `time`, `remarks`) VALUES
(202111535, '202111535@fit.edu.ph', 'Special SA', 'Julian Cadenas', 1, 2, 1, '2024-03-19T17:43', ''),
(202110150, '202110150@fit.edu.ph', 'Consultation', 'JB Vitasa', 3, 9, 14, '2024-03-19T17:47', '');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--
-- Creation: Mar 18, 2024 at 02:09 PM
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `dept_id` int(11) NOT NULL,
  `dept_nm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `departments`:
--

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `dept_nm`) VALUES
(1, 'CPE'),
(2, 'EEE'),
(3, 'ME'),
(4, 'CE'),
(5, 'HSC'),
(6, 'MPS'),
(7, 'IT'),
(8, 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--
-- Creation: Mar 18, 2024 at 02:09 PM
-- Last update: Mar 19, 2024 at 09:51 AM
--

DROP TABLE IF EXISTS `professors`;
CREATE TABLE `professors` (
  `prof_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `prof_nm` varchar(40) NOT NULL,
  `onoff` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `professors`:
--   `prof_id`
--       `departments` -> `dept_id`
--   `dept_id`
--       `departments` -> `dept_id`
--

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`prof_id`, `dept_id`, `prof_nm`, `onoff`) VALUES
(1, 1, 'Ethel Manansala', 'OFFLINE'),
(2, 1, 'Christian Javier', 'ONLINE'),
(3, 3, 'JB Vitasa', 'OFFLINE'),
(4, 2, 'Daryl Guerzon', 'OFFLINE'),
(5, 2, 'Joshua Cormier', 'OFFLINE'),
(6, 4, 'Jyke Gapasin', 'OFFLINE'),
(7, 1, 'Jethro De Guzman', 'OFFLINE'),
(8, 5, 'Aizen Calilan', 'OFFLINE'),
(9, 6, 'Sean Bongansiso', 'OFFLINE'),
(10, 2, 'Chad Jalban', 'OFFLINE'),
(11, 6, 'Allen Flores', 'OFFLINE'),
(12, 6, 'Monrich Miranda', 'OFFLINE'),
(13, 3, 'Carl Naval', 'OFFLINE'),
(14, 3, 'James Magbanua', 'OFFLINE'),
(15, 7, 'David Razon', 'OFFLINE'),
(16, 7, 'Bon Leonor', 'OFFLINE'),
(17, 4, 'John Dela Cruz', 'OFFLINE'),
(18, 4, 'John Balatico', 'OFFLINE'),
(19, 5, 'Kent Gonzales', 'OFFLINE'),
(20, 5, 'Lance Urquico', 'OFFLINE'),
(21, 7, 'Matt Rodriguez', 'OFFLINE'),
(22, 8, 'Steve Fajilan', 'OFFLINE'),
(23, 8, 'Rovie Regio', 'OFFLINE'),
(24, 8, 'Kenneth Dela Cruz', 'OFFLINE');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--
-- Creation: Mar 18, 2024 at 02:09 PM
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE `schedule` (
  `sched_id` int(10) NOT NULL,
  `prof_id` int(10) NOT NULL,
  `d_of_week` varchar(20) NOT NULL,
  `start` varchar(20) NOT NULL,
  `end` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `schedule`:
--   `prof_id`
--       `professors` -> `prof_id`
--   `prof_id`
--       `professors` -> `prof_id`
--

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sched_id`, `prof_id`, `d_of_week`, `start`, `end`) VALUES
(1001, 1, 'Wednesday', '14:00:00', '17:00:00'),
(1002, 1, 'Monday', '09:30:00', '12:00:00'),
(1003, 1, 'Thursday', '11:00:00', '16:30:00'),
(1004, 1, 'Thursday', '17:00:00', '18:30:00'),
(1005, 1, 'Tuesday', '14:00:00', '15:30:00'),
(1006, 2, 'Wednesday', '09:00:00', '13:00:00'),
(1007, 2, 'Wednesday', '13:30:00', '15:00:00'),
(1008, 2, 'Monday', '09:00:00', '14:00:00'),
(1009, 2, 'Tuesday', '09:00:00', '11:30:00'),
(1010, 2, 'Tuesday', '17:00:00', '19:30:00'),
(1011, 3, 'Thursday', '10:00:00', '14:30:00'),
(1012, 3, 'Wednesday', '14:30:00', '16:00:00'),
(1013, 3, 'Thursday', '16:00:00', '19:30:00'),
(1014, 3, 'Tuesday', '11:00:00', '14:30:00'),
(1015, 3, 'Tuesday', '15:00:00', '15:30:00'),
(1016, 4, 'Wednesday', '07:00:00', '09:00:00'),
(1017, 4, 'Wednesday', '10:30:00', '12:00:00'),
(1018, 4, 'Wednesday', '13:00:00', '15:00:00'),
(1019, 4, 'Wednesday', '15:30:00', '17:30:00'),
(1020, 4, 'Wednesday', '19:00:00', '19:30:00'),
(1021, 5, 'Monday', '10:30:00', '14:30:00'),
(1022, 5, 'Wednesday', '14:30:00', '16:30:00'),
(1023, 5, 'Thursday', '16:30:00', '19:30:00'),
(1024, 5, 'Tuesday', '11:30:00', '14:30:00'),
(1025, 5, 'Tuesday', '16:00:00', '17:30:00'),
(1026, 6, 'Tuesday', '06:30:00', '09:30:00'),
(1027, 6, 'Wednesday', '10:30:00', '12:00:00'),
(1028, 6, 'Thursday', '13:00:00', '15:00:00'),
(1029, 6, 'Monday', '15:30:00', '17:30:00'),
(1030, 6, 'Wednesday', '14:00:00', '17:30:00'),
(1031, 7, 'Monday', '10:00:00', '14:30:00'),
(1032, 8, 'Wednesday', '14:30:00', '16:00:00'),
(1033, 9, 'Thursday', '16:00:00', '19:30:00'),
(1034, 10, 'Tuesday', '11:00:00', '14:30:00'),
(1035, 11, 'Tuesday', '15:00:00', '15:30:00'),
(1036, 12, 'Monday', '07:30:00', '09:00:00'),
(1037, 13, 'Wednesday', '10:30:00', '12:00:00'),
(1038, 14, 'Tuesday', '13:30:00', '15:00:00'),
(1039, 15, 'Wednesday', '15:30:00', '17:30:00'),
(1040, 16, 'Thursday', '12:00:00', '19:30:00'),
(1041, 17, 'Wednesday', '11:00:00', '17:00:00'),
(1042, 18, 'Monday', '09:30:00', '14:00:00'),
(1043, 19, 'Thursday', '10:00:00', '16:30:00'),
(1044, 20, 'Thursday', '14:00:00', '18:30:00'),
(1045, 21, 'Tuesday', '14:00:00', '17:30:00'),
(1046, 22, 'Wednesday', '09:30:00', '13:00:00'),
(1047, 23, 'Wednesday', '13:30:00', '18:00:00'),
(1048, 24, 'Monday', '09:00:00', '14:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `staff_accounts`
--
-- Creation: Mar 18, 2024 at 05:37 PM
--

DROP TABLE IF EXISTS `staff_accounts`;
CREATE TABLE `staff_accounts` (
  `staff_id` int(11) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `staff_accounts`:
--   `staff_id`
--       `professors` -> `prof_id`
--   `staff_id`
--       `professors` -> `prof_id`
--

--
-- Dumping data for table `staff_accounts`
--

INSERT INTO `staff_accounts` (`staff_id`, `pass`) VALUES
(1, '0b14d501a594442a01c6859541bcb3e8164d183d32937b851835442f69d5c94e'),
(2, '6cf615d5bcaac778352a8f1f3360d23f02f34ec182e259897fd6ce485d7870d4'),
(3, '5906ac361a137e2d286465cd6588ebb5ac3f5ae955001100bc41577c3d751764'),
(4, 'b97873a40f73abedd8d685a7cd5e5f85e4a9cfb83eac26886640a0813850122b'),
(5, '8b2c86ea9cf2ea4eb517fd1e06b74f399e7fec0fef92e3b482a6cf2e2b092023'),
(6, '598a1a400c1dfdf36974e69d7e1bc98593f2e15015eed8e9b7e47a83b31693d5'),
(7, '5860836e8f13fc9837539a597d4086bfc0299e54ad92148d54538b5c3feefb7c'),
(8, '57f3ebab63f156fd8f776ba645a55d96360a15eeffc8b0e4afe4c05fa88219aa'),
(9, '9323dd6786ebcbf3ac87357cc78ba1abfda6cf5e55cd01097b90d4a286cac90e'),
(10, 'aa4a9ea03fcac15b5fc63c949ac34e7b0fd17906716ac3b8e58c599cdc5a52f0'),
(11, '53d453b0c08b6b38ae91515dc88d25fbecdd1d6001f022419629df844f8ba433'),
(12, 'b3d17ebbe4f2b75d27b6309cfaae1487b667301a73951e7d523a039cd2dfe110'),
(13, '48caafb68583936afd0d78a7bfd7046d2492fad94f3c485915f74bb60128620d'),
(14, 'c6863e1db9b396ed31a36988639513a1c73a065fab83681f4b77adb648fac3d6'),
(15, 'c63c2d34ebe84032ad47b87af194fedd17dacf8222b2ea7f4ebfee3dd6db2dfb'),
(16, '17a3379984b560dc311bb921b7a46b28aa5cb495667382f887a44a7fdbca7a7a'),
(17, '69bfb918de05145fba9dcee9688dfb23f6115845885e48fa39945eebb99d8527'),
(18, 'd2042d75a67922194c045da2600e1c92ff6d87e8fb6e0208606665f2d1dfa892'),
(19, '5790ac3d0b8ae8afc72c2c6fb97654f2b73651c328de0a3b74854ade562dd17a'),
(20, '7535d8f2d8c35d958995610f971287288ab5e8c82a3c4fdc2b6fb5d757a5b9f8'),
(21, '91a9ef3563010ea1af916083f9fb03a117d4d0d2a697f82368da1f737629f717'),
(22, 'd23c1038532dc71d0a60a7fb3d330d7606b7520e9e5ee0ddcdb27ee1bd5bc0cd'),
(23, '8b807aa0505a00b3ef49e26a2ade8e31fcd6c700d1a3aeee971b49d73da8e8ff'),
(24, 'fc8a9296208a0b281f84690423c5d77785e493f435e6292cc322840f543729d3');

-- --------------------------------------------------------

--
-- Table structure for table `student_accounts`
--
-- Creation: Mar 18, 2024 at 05:46 PM
--

DROP TABLE IF EXISTS `student_accounts`;
CREATE TABLE `student_accounts` (
  `stud_id` int(11) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `stud_nm` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `student_accounts`:
--

--
-- Dumping data for table `student_accounts`
--

INSERT INTO `student_accounts` (`stud_id`, `pass`, `stud_nm`, `email`) VALUES
(202110150, '2329c9d78f88044088aa1e559422b3dd6e958204637f1ed8017c390f0a8706ec', 'JB Vitasa', '202110150@fit.edu.ph'),
(202110729, 'fff8a317dcfebf4bb219797f2cde79983cbc60534a7c43d09ce5807900354143', 'Christian Javier', '202110729@fit.edu.ph'),
(202110778, '4c1d466a8f77913f43d6b3cdbbe035f233e5582980b4368a1a73aace896dbad1', 'Joshua Cormier', '202110778@fit.edu.ph'),
(202111406, 'abebf13c6399ce16e497724f1ca5e430d49ec6ff5c365553b0e11e8e4f9b8c3d', 'Daryl Guerzon', '202111406@fit.edu.ph'),
(202111535, 'a1448eb1c4c7bc0808bd307215ea01231b49276bf92eade5ae69a6e7fa46ef03', 'Julian Cadenas', '202111535@fit.edu.ph');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--
-- Creation: Mar 18, 2024 at 02:09 PM
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE `subjects` (
  `subj_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `subj_nm` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `subjects`:
--   `dept_id`
--       `departments` -> `dept_id`
--   `dept_id`
--       `departments` -> `dept_id`
--

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subj_id`, `dept_id`, `subj_nm`) VALUES
(1, 1, 'Embedded Systems'),
(2, 1, 'Operating Systems'),
(3, 7, 'C++'),
(4, 7, 'Python'),
(5, 2, 'Electronics 1'),
(6, 2, 'Electronics 2'),
(7, 5, 'Mental Health'),
(8, 5, 'NSTP'),
(9, 3, 'Pulley Motors'),
(10, 3, 'Engines'),
(11, 4, 'Hydrophysics'),
(12, 4, 'Strength of Materials'),
(13, 6, 'Differential Equations'),
(14, 6, 'Calculus'),
(15, 8, 'Game Development'),
(16, 8, 'Game Physics');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--
-- Creation: Mar 18, 2024 at 02:09 PM
-- Last update: Mar 19, 2024 at 09:47 AM
--

DROP TABLE IF EXISTS `tutorial`;
CREATE TABLE `tutorial` (
  `name` varchar(40) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `time` varchar(40) NOT NULL,
  `topic` varchar(40) NOT NULL,
  `dept_id` int(10) NOT NULL,
  `subj_id` int(10) NOT NULL,
  `prof_id` int(10) NOT NULL,
  `remarks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `tutorial`:
--   `dept_id`
--       `departments` -> `dept_id`
--   `email`
--       `student_accounts` -> `stud_id`
--   `name`
--       `student_accounts` -> `stud_id`
--   `prof_id`
--       `professors` -> `prof_id`
--   `stud_id`
--       `student_accounts` -> `stud_id`
--   `subj_id`
--       `subjects` -> `subj_id`
--   `stud_id`
--       `student_accounts` -> `stud_id`
--

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`name`, `stud_id`, `email`, `time`, `topic`, `dept_id`, `subj_id`, `prof_id`, `remarks`) VALUES
('Julian Cadenas', 202111535, '202111535@fit.edu.ph', '2024-03-19T17:43', 'Software Design M1', 7, 4, 21, ''),
('JB Vitasa', 202110150, '202110150@fit.edu.ph', '2024-03-19T17:47', 'For Loops', 7, 3, 16, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consult`
--
ALTER TABLE `consult`
  ADD KEY `stud_id` (`stud_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`prof_id`),
  ADD KEY `professors_ibfk_1` (`dept_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sched_id`),
  ADD KEY `prof_id` (`prof_id`);

--
-- Indexes for table `staff_accounts`
--
ALTER TABLE `staff_accounts`
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `student_accounts`
--
ALTER TABLE `student_accounts`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subj_id`),
  ADD KEY `subjects_ibfk_1` (`dept_id`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD KEY `stud_id` (`stud_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `consult`
--
ALTER TABLE `consult`
  ADD CONSTRAINT `consult_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `student_accounts` (`stud_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `professors`
--
ALTER TABLE `professors`
  ADD CONSTRAINT `professors_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`prof_id`) REFERENCES `professors` (`prof_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff_accounts`
--
ALTER TABLE `staff_accounts`
  ADD CONSTRAINT `staff_accounts_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `professors` (`prof_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD CONSTRAINT `tutorial_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `student_accounts` (`stud_id`);


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table consult
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'icare', 'consult', '[]', '2024-03-15 12:34:42');

--
-- Metadata for table departments
--

--
-- Metadata for table professors
--

--
-- Metadata for table schedule
--

--
-- Metadata for table staff_accounts
--

--
-- Metadata for table student_accounts
--

--
-- Metadata for table subjects
--

--
-- Metadata for table tutorial
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'icare', 'tutorial', '{\"sorted_col\":\"`tutorial`.`time` ASC\"}', '2024-03-15 13:00:29');

--
-- Metadata for database icare
--

--
-- Dumping data for table `pma__relation`
--

INSERT INTO `pma__relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('icare', 'consult', 'dept_id', 'icare', 'departments', 'dept_id'),
('icare', 'consult', 'email', 'icare', 'student_accounts', 'stud_id'),
('icare', 'consult', 'prof_id', 'icare', 'professors', 'prof_id'),
('icare', 'consult', 'stud_id', 'icare', 'student_accounts', 'stud_id'),
('icare', 'consult', 'stud_nm', 'icare', 'student_accounts', 'stud_id'),
('icare', 'consult', 'subj_id', 'icare', 'subjects', 'subj_id'),
('icare', 'professors', 'prof_id', 'icare', 'departments', 'dept_id'),
('icare', 'schedule', 'prof_id', 'icare', 'professors', 'prof_id'),
('icare', 'staff_accounts', 'staff_id', 'icare', 'professors', 'prof_id'),
('icare', 'subjects', 'dept_id', 'icare', 'departments', 'dept_id'),
('icare', 'tutorial', 'dept_id', 'icare', 'departments', 'dept_id'),
('icare', 'tutorial', 'email', 'icare', 'student_accounts', 'stud_id'),
('icare', 'tutorial', 'name', 'icare', 'student_accounts', 'stud_id'),
('icare', 'tutorial', 'prof_id', 'icare', 'professors', 'prof_id'),
('icare', 'tutorial', 'stud_id', 'icare', 'student_accounts', 'stud_id'),
('icare', 'tutorial', 'subj_id', 'icare', 'subjects', 'subj_id');

--
-- Dumping data for table `pma__pdf_pages`
--

INSERT INTO `pma__pdf_pages` (`db_name`, `page_descr`) VALUES
('icare', 'database schema');

SET @LAST_PAGE = LAST_INSERT_ID();

--
-- Dumping data for table `pma__table_coords`
--

INSERT INTO `pma__table_coords` (`db_name`, `table_name`, `pdf_page_number`, `x`, `y`) VALUES
('icare', 'consult', @LAST_PAGE, 1122, 453),
('icare', 'departments', @LAST_PAGE, 466, 396),
('icare', 'professors', @LAST_PAGE, 474, 603),
('icare', 'schedule', @LAST_PAGE, 195, 372),
('icare', 'staff_accounts', @LAST_PAGE, 196, 530),
('icare', 'student_accounts', @LAST_PAGE, 437, 255),
('icare', 'subjects', @LAST_PAGE, 472, 495),
('icare', 'tutorial', @LAST_PAGE, 1116, 203);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
