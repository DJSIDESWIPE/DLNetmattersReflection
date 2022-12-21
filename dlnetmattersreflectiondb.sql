-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 03:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dlnetmattersreflectiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquires`
--

CREATE TABLE `enquires` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `CompanyName` text NOT NULL,
  `Email` text NOT NULL,
  `Telephone` text NOT NULL,
  `Subject` text NOT NULL,
  `Message` text NOT NULL,
  `RecieveMarketingInfo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquires`
--

INSERT INTO `enquires` (`ID`, `Name`, `CompanyName`, `Email`, `Telephone`, `Subject`, `Message`, `RecieveMarketingInfo`) VALUES
(1, 'david', 'Test', 'david@tester.com', '12345 678910', 'This is a test', 'this test is to check that data is being sent to the database by the form', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquirestests`
--

CREATE TABLE `enquirestests` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `CompanyName` text NOT NULL,
  `Email` text NOT NULL,
  `Telephone` text NOT NULL,
  `Subject` text NOT NULL,
  `Message` text NOT NULL,
  `RecieveMarketingInfo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquirestests`
--

INSERT INTO `enquirestests` (`ID`, `Name`, `CompanyName`, `Email`, `Telephone`, `Subject`, `Message`, `RecieveMarketingInfo`) VALUES
(1, 'James', 'Avatar', 'James@avatar.com', '12345678987', 'Testing Database', 'i watched avatar 2 on the weekend, this is a test for the database', 0),
(2, 'david', 'Test', 'david@tester.com', '12345678910', 'This is a test', 'this is a test to check if the form data is being sent to the database', 1),
(3, 'david', 'Test', 'david@tester.com', '12345678910', 'This is a test', 'testing phone number validation', 1),
(4, 'david', 'Test', 'david@tester.com', '12345 678910', 'This is a test', 'this test is to see if phone number keeps the space in it', 1),
(5, 'david', 'Test', 'david@tester.com', '12345 678910', 'This is a test', 'this test is to see if phone number keeps the space in it', 1),
(6, 'david', 'Test', 'david@tester.com', '12345 678910', 'This is a test', 'this test is to see if phone number keeps the space in it', 1),
(7, 'david', 'Test', 'david@tester.com', '12345 678910', 'This is a test', 'this test is to see if phone number keeps the space in it', 1),
(8, 'david', 'Test', 'david@tester.com', '12345 678910', 'This is a test', 'this test is to see if phone number keeps the space in it', 1),
(9, 'david', 'Test', 'david@tester.com', '12345 678910', 'This is a test', 'this test is to see if phone number keeps the space in it', 1),
(10, 'david', 'Test', 'david@tester.com', '12345 678910', 'This is a test', 'this test is to see if phone number keeps the space in it', 1),
(11, 'david', 'dxweewd', 'David@test.com', '12345 678910', 'This is a test', 'testing testing 1 2 3', 1),
(12, 'david', 'dxweewd', 'David@test.com', '12345 678910', 'This is a test', 'testing testing 1 2 3', 1),
(13, 'david', 'dxweewd', 'David@test.com', '12345 678910', 'This is a test', 'testing testing 1 2 3', 1),
(14, 'david', 'dxweewd', 'David@test.com', '12345 678910', 'This is a test', 'testing testing 1 2 3', 1),
(15, 'david', 'Test', 'David@test.com', '12345 678910', 'This is a test', 'kceb3wf,hjbcb3q,f', 1),
(16, 'david', 'Test', 'David@test.com', '12345 678910', 'This is a test', 'kceb3wf,hjbcb3q,f', 1),
(17, 'david', 'Test', 'David@test.com', '12345 678910', 'This is a test', 'kceb3wf,hjbcb3q,f', 1),
(18, 'david', 'Test', 'David@test.com', '12345 678910', 'This is a test', 'kceb3wf,hjbcb3q,f', 1),
(19, 'david', 'Test', 'david@tester.com', '12345 678910', 'This is a test', 'xnw nkhwe', 1),
(20, 'david', 'Test', 'david@tester.com', '12345 678910', 'This is a test', 'xnw nkhwe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsstories`
--

CREATE TABLE `newsstories` (
  `ID` int(11) NOT NULL,
  `Header` text NOT NULL,
  `Img` text NOT NULL,
  `Text` text NOT NULL,
  `PostedOn` date NOT NULL,
  `PostedBy` text NOT NULL,
  `PostedImg` text NOT NULL,
  `Service` text NOT NULL,
  `Tag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsstories`
--

INSERT INTO `newsstories` (`ID`, `Header`, `Img`, `Text`, `PostedOn`, `PostedBy`, `PostedImg`, `Service`, `Tag`) VALUES
(1, 'One Traveller - Web Case Study', 'https://www.netmatters.co.uk/assets/images/thumbnails/thumb/one-traveller-xEYm.png', 'This article showcases how a combined website and software solution can be implemented to create an ', '2022-12-15', 'Netmatters', 'https://www.netmatters.co.uk/assets/images/thumbnails/article_contact_thumb/netmatters-ltd-VXAv.png', 'WebDesign', 'Case Studies'),
(2, 'Senior Web Developer / Systems Architect', 'https://www.netmatters.co.uk/assets/images/thumbnails/thumb/senior-web-developer-8f6n.jpg', 'Salary Range £40-50k DOE + Bonus + Benefits Hours 40 hours per week, Mon – Fri. Flexible working hours', '2022-12-09', 'Simon Wright', 'https://www.netmatters.co.uk/assets/images/thumbnails/article_contact_thumb/simon-wright-3QiX.jpg', 'WebDesign', 'Careers'),
(3, 'Mid-Level Web Developer', 'https://www.netmatters.co.uk/assets/images/thumbnails/thumb/mid-level-web-developer-HAEH.jpg', 'Salary Range 25-37k DOE + Bonus + Benefits Hours 40 hours per week, Mon – Fri. Flexible working hours', '2022-12-08', 'Simon Wright', 'https://www.netmatters.co.uk/assets/images/thumbnails/article_contact_thumb/simon-wright-3QiX.jpg', 'WebDesign', 'Careers'),
(4, 'November Notables 2022', 'https://www.netmatters.co.uk/assets/images/thumbnails/thumb/november-notables-2022-hYCg.jpg', 'Each month, various departments recognise those employees who have excelled in their work and helped ', '2022-12-06', 'Netmatters', 'https://www.netmatters.co.uk/assets/images/thumbnails/article_contact_thumb/netmatters-ltd-VXAv.png', 'WebDesign', 'News');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquires`
--
ALTER TABLE `enquires`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `enquirestests`
--
ALTER TABLE `enquirestests`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `newsstories`
--
ALTER TABLE `newsstories`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquires`
--
ALTER TABLE `enquires`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquirestests`
--
ALTER TABLE `enquirestests`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `newsstories`
--
ALTER TABLE `newsstories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
