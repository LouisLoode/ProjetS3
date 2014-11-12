-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 12, 2014 at 04:08 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `blogmmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `Utilisateurs`
--

CREATE TABLE `Utilisateurs` (
`idUser` int(11) NOT NULL,
  `idRole` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`idUser`, `idRole`, `email`, `password`) VALUES
(1, 1, 'louisdebraine@gmail.com', '*63D85DCA15EAFFC58C908FD2FAE50CCBC60C4EA2'),
(10, 1, 'test@test.com', '*94BDCEBE19083CE2A1F959FD02F964C7AF4CFC29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
 ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;