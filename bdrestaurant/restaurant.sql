-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 23, 2017 at 11:09 AM
-- Server version: 5.5.54-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id_menu` int(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` decimal(20,0) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nom`, `prix`, `image`) VALUES
(68, 'Menu1', 15, '4.jpeg'),
(69, 'Menu1', 15, '4.jpeg'),
(70, 'Menu3', 12, '5.jpeg'),
(72, 'nouilles', 15, '4.jpeg'),
(82, 'Menu3', 15, '4.jpeg'),
(83, 'Menu1', 58, '4.jpeg'),
(85, 'Me', 15, '2.jpg'),
(91, 'Menu1', 15, '3.jpeg'),
(93, 'MENU 3', 10, '1.jpg'),
(94, 'Menu', 15, '3.jpeg'),
(95, 'Menu3', 20, '5.jpeg'),
(96, 'uuuuuuuuuuuuuuuuuuuuuuuu', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `menu_plat`
--

CREATE TABLE IF NOT EXISTS `menu_plat` (
  `id_menu` int(11) NOT NULL,
  `id_plat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_plat`
--

INSERT INTO `menu_plat` (`id_menu`, `id_plat`) VALUES
(82, 74),
(82, 77),
(82, 78),
(82, 79),
(83, 74),
(83, 75),
(83, 76),
(83, 77),
(83, 78),
(91, 74),
(91, 86),
(91, 87),
(91, 88),
(93, 86),
(93, 88),
(93, 90),
(94, 74),
(94, 86),
(94, 87),
(95, 88),
(95, 90),
(95, 91);

-- --------------------------------------------------------

--
-- Table structure for table `plat`
--

CREATE TABLE IF NOT EXISTS `plat` (
`id_plat` int(50) NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plat`
--

INSERT INTO `plat` (`id_plat`, `nom`, `prix`, `image`) VALUES
(74, 'plat1', 5.00, '3.jpeg'),
(86, 'plat2', 5.00, '1.jpg'),
(87, 'plat5', 15.00, '3.jpeg'),
(88, 'plat3', 5.00, '2.jpg'),
(90, 'plat4', 6.00, '1.jpg'),
(91, 'plat6', 8.00, '6.jpg'),
(93, 'plat5', 4.00, '2.jpg'),
(94, 'plat6', 8.00, '4.jpeg'),
(95, 'plat2', 5.00, '4.jpeg'),
(96, 'plat1', 4.00, '6.jpg'),
(97, 'plat4', 4.00, '3.jpeg'),
(98, 'plat5', 4.00, '3.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `menu_plat`
--
ALTER TABLE `menu_plat`
 ADD PRIMARY KEY (`id_menu`,`id_plat`);

--
-- Indexes for table `plat`
--
ALTER TABLE `plat`
 ADD PRIMARY KEY (`id_plat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id_menu` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `plat`
--
ALTER TABLE `plat`
MODIFY `id_plat` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=99;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
