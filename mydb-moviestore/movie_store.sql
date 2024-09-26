-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2024 at 10:06 AM
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
-- Database: `movie_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `ActorID` int(11) NOT NULL,
  `FirstName` varchar(30) DEFAULT NULL,
  `LastName` varchar(30) DEFAULT NULL,
  `BirthDate` date DEFAULT NULL,
  `Nationality` varchar(30) DEFAULT NULL,
  `AwardsCount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`ActorID`, `FirstName`, `LastName`, `BirthDate`, `Nationality`, `AwardsCount`) VALUES
(1, 'napat', 'pitaktum', '2003-01-21', 'thai', 100),
(2, 'somboonn', 'konglimm', '2003-09-19', 'thaii', 11),
(3, 'ok', 'ko', '2024-09-17', 'japan', 32),
(4, 'นิตยา', 'สายราช', '2004-04-18', 'japan', 10000),
(5, 'ole', 'kepa', '2030-01-01', 'thai', 1),
(7, 't', 't', '2024-09-25', 't', 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `MemberID` int(11) NOT NULL,
  `FirstName` varchar(30) DEFAULT NULL,
  `LastName` varchar(30) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `PhoneNumber` varchar(15) DEFAULT NULL,
  `JoinDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`MemberID`, `FirstName`, `LastName`, `Email`, `PhoneNumber`, `JoinDate`) VALUES
(1, 'mumm', 'mumumm', '1234@gmail.com', '0987654331', '2024-09-25'),
(2, 'tinoi', '888', 'tinoi888@gmail.com', '0987654321', '2024-09-25'),
(3, 'สมบิน', 'ไปไหน', '12345@gmail.com', '0989898989', '2024-09-12'),
(4, 'นิตยา', 'สายราช', 'nitaya@mail.com', '0989876542', '2024-09-26'),
(5, 'บัง', 'ลอฟ', 'rof11@mail.com', '0987654567', '2024-09-26'),
(6, 'test', 't', 'nitaya@mail.com', '0989876542', '2024-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `movieactors`
--

CREATE TABLE `movieactors` (
  `MovieID` int(11) NOT NULL,
  `ActorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movieactors`
--

INSERT INTO `movieactors` (`MovieID`, `ActorID`) VALUES
(1, 2),
(1, 3),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `MovieID` int(11) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Genre` varchar(50) DEFAULT NULL,
  `ReleaseYear` year(4) DEFAULT NULL,
  `Price` decimal(5,2) DEFAULT NULL,
  `StockQuantity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`MovieID`, `Title`, `Genre`, `ReleaseYear`, `Price`, `StockQuantity`) VALUES
(1, 'มหาลัยเมืองแร่นะ', 'drama', '2023', 5.00, 10),
(2, 'มุดท่อไปหาเธอเหรอ', 'comedyy', '2022', 19.00, 101),
(3, 'python', 'code', '2011', 100.00, 10),
(4, '407 เที่ยวบินผี', 'ภาพยนตร์สยองขวัญ', '2015', 210.00, 100),
(5, 'Resident Evil 100', 'ภาพยนตร์ไซไฟ', '2023', 999.99, 30),
(6, 't', 'tt', '1975', 100.00, 50);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `PurchaseID` int(11) NOT NULL,
  `MemberID` int(11) DEFAULT NULL,
  `MovieID` int(11) DEFAULT NULL,
  `PurchaseDate` date DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`PurchaseID`, `MemberID`, `MovieID`, `PurchaseDate`, `Quantity`) VALUES
(1, 1, 1, '2024-09-25', 1),
(2, 2, 2, '2024-09-01', 1),
(3, 3, 3, '2024-09-03', 1),
(4, 2, 1, '2024-09-12', 3),
(5, 3, 1, '2024-09-17', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`ActorID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`MemberID`);

--
-- Indexes for table `movieactors`
--
ALTER TABLE `movieactors`
  ADD PRIMARY KEY (`MovieID`,`ActorID`),
  ADD KEY `ActorID` (`ActorID`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`MovieID`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`PurchaseID`),
  ADD KEY `MemberID` (`MemberID`),
  ADD KEY `MovieID` (`MovieID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `ActorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `MemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `MovieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `PurchaseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movieactors`
--
ALTER TABLE `movieactors`
  ADD CONSTRAINT `movieactors_ibfk_1` FOREIGN KEY (`MovieID`) REFERENCES `movies` (`MovieID`),
  ADD CONSTRAINT `movieactors_ibfk_2` FOREIGN KEY (`ActorID`) REFERENCES `actors` (`ActorID`);

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `members` (`MemberID`),
  ADD CONSTRAINT `purchases_ibfk_2` FOREIGN KEY (`MovieID`) REFERENCES `movies` (`MovieID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
