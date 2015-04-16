-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2015 at 12:05 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ods_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `alergeni`
--

CREATE TABLE IF NOT EXISTS `alergeni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(25) COLLATE cp1250_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `alergeni`
--

INSERT INTO `alergeni` (`id`, `naziv`) VALUES
(1, 'soja'),
(2, 'jaja'),
(3, 'kikiriki'),
(4, 'mlijeko'),
(5, 'rakovi'),
(6, 'školjke'),
(7, 'orašasti plodovi'),
(8, 'jagode'),
(9, 'kivi'),
(10, 'ananas');

-- --------------------------------------------------------

--
-- Table structure for table `sheet1`
--

CREATE TABLE IF NOT EXISTS `sheet1` (
  `NazivProizvoda` varchar(29) DEFAULT NULL,
  `TipProizvoda` varchar(9) DEFAULT NULL,
  `OpisProizvoda` varchar(46) DEFAULT NULL,
  `Vegetarijanski` varchar(2) DEFAULT NULL,
  `Halal` varchar(2) DEFAULT NULL,
  `Košer` varchar(2) DEFAULT NULL,
  `Alergeni` varchar(13) DEFAULT NULL,
  `Cijena` varchar(5) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `sheet1`
--

INSERT INTO `sheet1` (`NazivProizvoda`, `TipProizvoda`, `OpisProizvoda`, `Vegetarijanski`, `Halal`, `Košer`, `Alergeni`, `Cijena`, `id`) VALUES
('Gibanica', 'ostalo', 'Ovo je slani tip kolača, punjena je orasima', 'NE', 'NE', 'NE', 'jaja, orasi', '10 Kn', 1),
('Sirnica', 'ostalo', 'Ovo je slani tip kolača, punjen sirom', 'NE', 'NE', 'NE', 'jaja, mlijeko', '12 Kn', 2),
('Burek', 'ostalo', 'Ovo je slani tip kolača, punjen mesom', 'NE', 'NE', 'NE', 'jaja', '14Kn', 3),
('Sacher torta', 'kolač', 'Čokoladna torta u više slojeva', 'DA', 'DA', 'DA', NULL, '16Kn', 4),
('Mađarica', 'kolač', 'Čokoladni tip torte u više slojeva, s korama', 'NE', 'NE', 'NE', 'jaja', '10 Kn', 5),
('Kremšnita', 'kolač', 'Slatki kolač', 'NE', 'NE', 'NE', 'jaja', '15 Kn', 6),
('Šampita', 'kolač', 'Neam pojma', 'NE', 'NE', 'NE', 'jaja, orasi', '12 Kn', 7),
('Piškote', 'keks', 'valjda keksi', 'NE', 'NE', 'NE', 'jaja, mlijeko', '20 Kn', 8),
('Čokoladni keksi – čisti', 'keks', 'Slatki kolač', 'NE', 'DA', 'DA', 'jaja', '35 Kn', 9),
('Čokoladni keksi – brusnice', 'keks', 'Slatki kolač', 'NE', 'NE', 'NE', NULL, '10 Kn', 10),
('Voćni kup', 'kolač', 'Voćni kolač', 'NE', 'NE', 'NE', 'jaja', '12 Kn', 11),
('Čokolada s čilijem', 'čokolada', 'Neam pojma', 'NE', 'NE', 'NE', 'jaja', '14Kn', 12),
('Čokolada s citrusnim aromama', 'čokolada', 'Nekaj čudno', 'NE', 'NE', 'NE', 'jaja, orasi', '16Kn', 13),
('Belgijske praline', 'čokolada', 'praline', 'NE', 'DA', 'DA', 'jaja, mlijeko', '10 Kn', 14),
('Praline s konjakom', 'čokolada', 'praline', 'NE', 'NE', 'NE', 'jaja', '15 Kn', 15),
('Macarons', 'keks', 'nekakvi keksi', 'NE', 'NE', 'NE', NULL, '12 Kn', 16),
('Croisant', 'ostalo', 'pecivo', 'NE', 'NE', 'NE', 'jaja', '20 Kn', 17),
('Banana split', 'kolač', 'sladoled', 'NE', 'NE', 'NE', 'jaja', '35 Kn', 18),
('Ganache torta', 'torta', 'Čokoladna torta u više slojeva', 'NE', 'DA', 'DA', 'jaja, orasi', '10 Kn', 19),
('ZKD torta', 'torta', 'Čokoladna torta u više slojeva', 'NE', 'NE', 'NE', 'jaja, mlijeko', '12 Kn', 20),
('Voćna torta', 'torta', 'Voćna torta u više slojeva', 'NE', 'NE', 'NE', 'jaja', '14Kn', 21),
('Tiramisu', 'kolač', 'Neam pojma', 'NE', 'NE', 'NE', NULL, '16Kn', 22),
('Crne kocke', 'kolač', 'Neam pojma', 'NE', 'NE', 'NE', 'jaja', '10 Kn', 23),
('Kesten štapić', 'kolač', 'štapi', 'NE', 'DA', 'DA', 'jaja', '15 Kn', 24),
('Kesten šnita', 'kolač', 'šnita', 'NE', 'NE', 'NE', 'jaja, orasi', '12 Kn', 25),
('Kokos štangice', 'keks', 'Pecivo', 'NE', 'NE', 'NE', 'jaja, mlijeko', '20 Kn', 26),
('Palice', 'keks', 'Pendrek', 'NE', 'NE', 'NE', 'jaja', '35 Kn', 27),
('Bananko', 'kolač', 'Čokoladna banana', 'NE', 'NE', 'NE', NULL, '10 Kn', 28),
('Breskvice', 'keks', 'Slatki kolač', 'NE', 'DA', 'DA', 'jaja', '12 Kn', 29),
('Čupavci', 'kolač', 'Slatki kolač', 'NE', 'NE', 'NE', 'jaja', '14Kn', 30),
('Čokoladni mousse', 'kolač', 'Neam pojma', 'NE', 'NE', 'NE', 'jaja, orasi', '16Kn', 31),
('Išler', 'kolač', 'Neam pojma', 'NE', 'NE', 'NE', 'jaja, mlijeko', '10 Kn', 32),
('Lambada', 'kolač', 'Ples', 'NE', 'NE', 'NE', 'jaja', '15 Kn', 33),
('Medenjaci', 'keks', 'Slatki kolač', 'NE', 'DA', 'DA', NULL, '12 Kn', 34),
('Rafaelo kuglice', 'kolač', 'Slatki kolač', 'NE', 'NE', 'NE', 'jaja', '20 Kn', 35),
('Šubare', 'kolač', 'Neam pojma', 'NE', 'NE', 'NE', 'jaja', '35 Kn', 36),
('Iločki Traminac', 'piće', 'Neam pojma', 'NE', 'NE', 'NE', NULL, '29 Kn', 37);

-- --------------------------------------------------------

--
-- Table structure for table `tipovi_podataka`
--

CREATE TABLE IF NOT EXISTS `tipovi_podataka` (
  `TipoviDelicija` varchar(9) NOT NULL,
  `tip_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`tip_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tipovi_podataka`
--

INSERT INTO `tipovi_podataka` (`TipoviDelicija`, `tip_id`) VALUES
('Kolač', 1),
('Torta', 2),
('Keks', 3),
('Čokolada', 4),
('Piće', 5),
('Ostalo', 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
