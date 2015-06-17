-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2015 at 12:13 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE IF NOT EXISTS `proizvodi` (
  `naziv proizvoda` varchar(120) COLLATE utf8_croatian_ci NOT NULL,
  `tip proizvoda` varchar(120) COLLATE utf8_croatian_ci NOT NULL,
  `opis proizvoda` varchar(120) COLLATE utf8_croatian_ci NOT NULL,
  `vegetarijanski` varchar(120) COLLATE utf8_croatian_ci NOT NULL,
  `halal` varchar(120) COLLATE utf8_croatian_ci NOT NULL,
  `koser` varchar(120) COLLATE utf8_croatian_ci NOT NULL,
  `alergeni` varchar(120) COLLATE utf8_croatian_ci NOT NULL,
  `cijena` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`naziv proizvoda`, `tip proizvoda`, `opis proizvoda`, `vegetarijanski`, `halal`, `koser`, `alergeni`, `cijena`) VALUES
('gibanica', 'ostalo', 'ovo je slani tip kolača, punjena je orasima', 'ne', 'ne', 'ne', 'jaja, orasi', 10),
('sirnica', 'ostalo', 'ovo je slani tip kolača, punjen sirom', 'ne', 'ne', 'ne', 'jaja, mlijeko', 12),
('burek', 'ostalo', 'ovo je slani tip kolača, punjen mesom', 'ne', 'ne', 'ne', 'jaja', 14),
('sacher torta', 'kolač', 'čokoladna torta u više slojeva', 'da', 'da', 'da', '-', 16),
('mađarica', 'kolač', 'čokoladni tip torte u više slojeva, s korama', 'ne', 'ne', 'ne', 'jaja', 10),
('kremšnita', 'kolač', 'torta u slojevima', 'da', 'da', 'da', 'jaja', 15),
('šampita', 'kolač', 'kolač sa čokoladnim vrhom', 'da', 'ne', 'ne', 'jaja', 18),
('piškote', 'kolač', 'sa piškotama', 'da', 'da', 'da', 'jaja', 12),
('čokoladni keksi – čisti', 'keks', 'čokoladni', 'da', 'ne', 'ne', '-', 13),
('čokoladni keksi – brusnice', 'keks', 'čokoladni', 'da', 'ne', 'ne', 'jaja', 14),
('voćni kup', 'kolač', 'puno voća', 'da', 'da', 'ne', 'jaja', 18),
('čokolada s čilijem', 'čokolada', 'čili čokolada', 'da', 'ne', 'ne', '-', 13),
('čokolada s citrusnim aromama', 'čokolada', 'čokolada s citrusnim aromama', 'da', 'ne', 'ne', '-', 15);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
