-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 09:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `RegNo` int(5) NOT NULL,
  `Smartcard` int(12) NOT NULL,
  `Class` varchar(5) NOT NULL,
  `rollno` int(5) NOT NULL,
  `phoneCode1` varchar(50) NOT NULL,
  `phoneCode2` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `UserId`, `Fname`, `Lname`, `email`, `Phone`, `gender`, `RegNo`, `Smartcard`, `Class`, `rollno`, `phoneCode1`, `phoneCode2`, `address`) VALUES
(1, 1, 'Om', 'Gadhvi', 'om@gmail.com', 8424098997, 'Male', 16147, 123456789, 'SE5', 31, 'SAD', 'IT', 'sfsdf dsfsdv dsfsd '),
(5, 4, 'Ujval', 'Kavithiya', 'ujjval@gmail.com', 1234567890, 'Male', 12356, 123, 'SE5', 50, 'BE', 'IT', 'Santacruz (East)'),
(8, 7, 'Shravan', 'Gadhvi', 'shravan@gmail.com', 123123123, 'Male', 123123, 12312312, 'SE6', 123, '10+2', 'IT', 'Mahim (East)'),
(10, 9, 'om2', 'oknm', 'om1@gmail.com', 4545454545, '', 16147, 123, 'SE5', 11, '10+2', 'IT', 'khar'),
(11, 10, 'test', 'test', 'shravan2@gmail.com', 1234567890, 'Male', 123123, 123, 'SE5', 50, 'Diploma', 'CYSE', 'Santacruz (East)'),
(12, 11, 'Srushti ', 'Pawar', 'srushti1@gmail.com', 1234567890, 'Female', 16190, 123, 'SE6', 46, 'BE', 'ECS', 'Ghatkopar (East)'),
(15, 12, 'Raj', 'Kadam', 'raj@sakec.ac.in', 123456789, 'Male', 16978, 852369741, 'SE', 28, '10+2', 'IT', 'Malad');

-- --------------------------------------------------------

--
-- Table structure for table `studentresult`
--

CREATE TABLE `studentresult` (
  `Id` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `SubjectId` int(11) NOT NULL,
  `Marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentresult`
--

INSERT INTO `studentresult` (`Id`, `StudentId`, `SubjectId`, `Marks`) VALUES
(1, 1, 1, 11),
(2, 1, 2, 22),
(3, 1, 3, 33),
(4, 1, 4, 44),
(5, 1, 5, 55),
(6, 15, 1, 78),
(7, 15, 2, 65),
(8, 15, 3, 50),
(9, 15, 4, 84),
(10, 15, 5, 65);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Id` int(11) NOT NULL COMMENT 'Id',
  `SubjectName` varchar(100) NOT NULL,
  `Branch` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Id`, `SubjectName`, `Branch`) VALUES
(1, 'Maths', 'IT'),
(2, 'OS', 'IT'),
(3, 'CNND', 'IT'),
(4, 'AT', 'IT'),
(5, 'COA', 'IT'),
(6, 'Maths', 'EXTC'),
(7, 'MC', 'EXTC'),
(8, 'LIC', 'EXTC'),
(9, 'Signal and system', 'EXTC'),
(10, 'PCE', 'EXTC'),
(11, 'Maths', 'ECS'),
(12, 'Control and instrumentation', 'ECS'),
(13, 'Electronic circuit', 'ECS'),
(14, 'Microprocessor and Microcontroller', 'ECS'),
(15, 'DSAT', 'ECS'),
(16, 'Maths', 'AIDS'),
(17, 'DBMS', 'AIDS'),
(18, 'AOA', 'AIDS'),
(19, 'MP', 'AIDS'),
(20, 'OS', 'AIDS'),
(21, 'Maths', 'CS'),
(22, 'AOA', 'CS'),
(23, 'COA', 'CS'),
(24, 'CG', 'CS'),
(25, 'OS', 'CS'),
(26, 'Maths', 'CYSE'),
(27, 'Computer Network', 'CYSE'),
(28, 'OS', 'CYSE'),
(29, 'Management Course', 'CYSE'),
(30, 'DBMS', 'CYSE');

-- --------------------------------------------------------

--
-- Table structure for table `teacherprofil`
--

CREATE TABLE `teacherprofil` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Position` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reg` varchar(20) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Exp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherprofil`
--

INSERT INTO `teacherprofil` (`Id`, `UserId`, `Fname`, `Lname`, `Position`, `email`, `reg`, `Branch`, `Gender`, `Exp`) VALUES
(1, 6, 'Swati', 'Nadkarni', 'HOD', 'teacher@gmail.com', '123456789', 'IT', 'Female', 31);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Email`, `password`) VALUES
(1, 'om@gmail.com', '111'),
(2, 'srushti@gmail.com', '22222'),
(4, 'ujjval@gmail.com', '123'),
(5, 'test@test.com', '123'),
(6, 'teacher@gmail.com', '12345'),
(7, 'shravan@gmail.com', '12345'),
(8, 'om1@gmail.com', '12345'),
(9, 'om2@gmail.com', '1234'),
(10, 'shravan2@gmail.com', '123'),
(11, 'srushti1@gmail.com', '123'),
(12, 'raj@sakec.ac.in', '00000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserIDFK` (`UserId`);

--
-- Indexes for table `studentresult`
--
ALTER TABLE `studentresult`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `StudentIdFK` (`StudentId`),
  ADD KEY `SubjectIdFK` (`SubjectId`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teacherprofil`
--
ALTER TABLE `teacherprofil`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserIDTFK` (`UserId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `studentresult`
--
ALTER TABLE `studentresult`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id', AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `teacherprofil`
--
ALTER TABLE `teacherprofil`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `UserIDFK` FOREIGN KEY (`UserId`) REFERENCES `users` (`Id`);

--
-- Constraints for table `studentresult`
--
ALTER TABLE `studentresult`
  ADD CONSTRAINT `StudentIdFK` FOREIGN KEY (`StudentId`) REFERENCES `student` (`Id`),
  ADD CONSTRAINT `SubjectIdFK` FOREIGN KEY (`SubjectId`) REFERENCES `subject` (`Id`);

--
-- Constraints for table `teacherprofil`
--
ALTER TABLE `teacherprofil`
  ADD CONSTRAINT `UserIDTFK` FOREIGN KEY (`UserId`) REFERENCES `users` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
