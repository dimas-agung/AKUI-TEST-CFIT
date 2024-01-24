-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 08:23 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cfit2`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `ID` int(12) NOT NULL,
  `namaa` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `pendidikann` varchar(255) NOT NULL,
  `tanggal_testa` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `usia` varchar(255) NOT NULL,
  `sub1` varchar(255) NOT NULL,
  `sub2` varchar(255) NOT NULL,
  `sub3` varchar(255) NOT NULL,
  `sub4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`ID`, `namaa`, `jabatan`, `pendidikann`, `tanggal_testa`, `tanggal_lahir`, `usia`, `sub1`, `sub2`, `sub3`, `sub4`) VALUES
(1, 'aul', 'Bos', 'SMK', '2023-12-05', '2023-12-05', '17', '["D","null","null","null","null","null","null","null","null","null","null","null","C"]', '["BE","null","CE","null","null","null","null","null","null","null","null","null","null","AB"]', '["null","null","null","null","null","null","null","null","null","null","null","C","C"]', '["null","null","null","null","null","null","null","null","null","B","","",""]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
