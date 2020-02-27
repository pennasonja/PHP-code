-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 25, 2019 at 11:31 AM
-- Server version: 10.3.17-MariaDB-0+deb10u1
-- PHP Version: 7.3.11-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Iot`
--

-- --------------------------------------------------------

--
-- Table structure for table `arvot`
--

CREATE TABLE `arvot` (
  `Id` int(11) NOT NULL,
  `Valo` int(11) NOT NULL,
  `Paine` int(11) NOT NULL,
  `OnOff` varchar(100) NOT NULL,
  `TimeVal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arvot`
--

INSERT INTO `arvot` (`Id`, `Valo`, `Paine`, `OnOff`, `TimeVal`) VALUES
(1, 200, 300, 'On', '2019-11-19 11:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `painearvot`
--

CREATE TABLE `painearvot` (
  `paine_Id` int(11) NOT NULL,
  `Aika` timestamp NOT NULL DEFAULT current_timestamp(),
  `Tila` varchar(11) NOT NULL,
  `Arvot` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `painearvot`
--

INSERT INTO `painearvot` (`paine_Id`, `Aika`, `Tila`, `Arvot`) VALUES
(3, '2019-11-21 07:04:17', 'on', 0);

-- --------------------------------------------------------

--
-- Table structure for table `valoarvot`
--

CREATE TABLE `valoarvot` (
  `valo_Id` int(11) NOT NULL,
  `Aika` timestamp NOT NULL DEFAULT current_timestamp(),
  `Tila` varchar(11) NOT NULL,
  `Arvot` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `valoarvot`
--

INSERT INTO `valoarvot` (`valo_Id`, `Aika`, `Tila`, `Arvot`) VALUES
(8, '2019-11-21 07:48:03', 'ON', 536);

-- --------------------------------------------------------

--
-- Table structure for table `valokytkin`
--

CREATE TABLE `valokytkin` (
  `kytkin_Id` int(11) NOT NULL,
  `Aika` timestamp NOT NULL DEFAULT current_timestamp(),
  `Tila` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `valokytkin`
--

INSERT INTO `valokytkin` (`kytkin_Id`, `Aika`, `Tila`) VALUES
(47, '2019-11-25 09:27:38', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arvot`
--
ALTER TABLE `arvot`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `painearvot`
--
ALTER TABLE `painearvot`
  ADD PRIMARY KEY (`paine_Id`);

--
-- Indexes for table `valoarvot`
--
ALTER TABLE `valoarvot`
  ADD PRIMARY KEY (`valo_Id`);

--
-- Indexes for table `valokytkin`
--
ALTER TABLE `valokytkin`
  ADD PRIMARY KEY (`kytkin_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arvot`
--
ALTER TABLE `arvot`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=535;
--
-- AUTO_INCREMENT for table `painearvot`
--
ALTER TABLE `painearvot`
  MODIFY `paine_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=532;
--
-- AUTO_INCREMENT for table `valoarvot`
--
ALTER TABLE `valoarvot`
  MODIFY `valo_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=517;
--
-- AUTO_INCREMENT for table `valokytkin`
--
ALTER TABLE `valokytkin`
  MODIFY `kytkin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
