-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2015 at 04:17 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sarmusmoto`
--

-- --------------------------------------------------------

--
-- Table structure for table `jelo`
--

CREATE TABLE IF NOT EXISTS `jelo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idKategorije` int(11) NOT NULL,
  `opis` varchar(255) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `sastojci` varchar(255) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `cal` decimal(10,0) DEFAULT NULL,
  `naziv` varchar(65) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci NOT NULL,
  `kratkiOpis` varchar(120) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `idJezika` int(11) NOT NULL,
  `cijena` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `secondary` (`idKategorije`),
  KEY `idJezika` (`idJezika`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 COLLATE=latin2_croatian_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `jelo`
--

INSERT INTO `jelo` (`id`, `idKategorije`, `opis`, `sastojci`, `cal`, `naziv`, `kratkiOpis`, `image`, `idJezika`, `cijena`) VALUES
(5, 4, 'Coca-Cola je bezalkoholno piće od biljnih ekstrakata. ', NULL, '130', 'Coca-Cola 0,33L', 'Najpoznatija riječ na svijetu - odmah poslije riječi OK.', 'CocaCola.jpg', 1, '14'),
(6, 4, 'Sprite je popularno gazirano bezalkoholno piće na bazi limuna i limete, koje proizvodi američka tvrtka The Coca-Cola Company.', NULL, '115', 'Sprite 0,33 L', 'Nije jednako poznato piće kao Coca-Cola, ali je jednako dobro.', 'sprite.jpg', 1, '14'),
(7, 4, 'Cedevita je vitaminski instant napitak za svaku priliku, pogodna za sve uzraste, za svako doba dana.', NULL, '95', 'Cedevita 0,33 mL', 'Okusi: naranča, limun, limeta, grejp', 'cedevita_n.jpg', 1, '10'),
(8, 4, 'Svijetlo pivo koje proizvodi Zagrebačka pivovara. Ožujsko pivo proizvodi se od vode, hmelja, ječma i kvasca i sadrži 5,2% alkohola.', NULL, '215', 'Ožujsko pivo 0,5 L', 'Žuja je zakon! :)', 'ozujsko.gif', 1, '12'),
(9, 4, 'Lager pivo s alkoholnim udjelom od 5%, a obilježava ga zlatno žuta boja i osvježavajuće gorak okus. Posebno je po skladnoj aromi slada i punoći okusa', NULL, '215', 'Karlovačko pivo 0,5 L', 'Karlovačko je omiljeno domaće pivo idealno za uživanje u društvu prijatelja', 'karlovacko.jpg', 1, '12'),
(10, 4, 'Radler je idealna, osvježavajuća kombinacija piva i soka od limuna sa samo 2% alkohola!', NULL, '95', 'Karlovačko Limun Natur Radler 0,5 L', 'Kad tražite osvježenje, kratki predah od svakodnevice ili opuštanje nakon sportskih aktivnosti.', 'karlovacko-limun.png', 1, '11'),
(11, 4, 'Fanta je popularno gazirano bezalkoholno piće koje proizvodi američka tvrtka The Coca-Cola Company.', NULL, '130', 'Fatna 0,33 mL', 'Popularno gazirano piće s okusom od naranče ili bazge.', 'fanta.jpg', 1, '14'),
(12, 4, 'Voćni sok proizveden od koncentriranog soka voća. Bez dodatnog šećera. Bez konzervansa. 100% udijela voća.', NULL, '60', 'Juicy 0,33 mL', 'Okusi: jabuka naranča, ananas, brusnica', 'juicy.jpg', 1, '15'),
(13, 4, 'Voćni sok proizveden od koncentriranog soka voća. Bez dodatnog šećera. Bez konzervansa. 100% udijela voća.', NULL, '60', 'Pago', 'Okusi: jabuka naranča, ananas, brusnica', 'pago.jpg', 1, '16'),
(14, 4, 'Graševina Daruvar prepoznatljive je arome, zelenkastožute boje, svježeg i skladnog okusa. Zahvaljujući svom osebujnom bukeu, punoći i ugodnoj svježini, ovo pitko i lagano vino ohlađeno na 10-12 °C izvrsno pristaje uz razna jela od bijelog mesa, salate, tj', NULL, '98', 'Graševina Daruvar 0,33 mL', 'Badel 1892.', 'Grasevina-Daruvar-Kvalitetna.jpg', 1, '22'),
(15, 1, 'Hrskavo fino predjelo sa niskom do umjerenom količinom kaloričnom vrijednošću. ', 'Krumpir, paprika, bosiljak, matovilac, sir.', '120', 'Romanbite', 'Ako tražite nešto hrskavo i fino ovo je za vas!', 'romanbite.jpg', 1, '16'),
(16, 1, 'Mafini su klasični za američki i engleski doručak. Mekani su i slatki, a za one koji od toga pate i simetrični.', 'Pšenično brašno, mlijeko, jaje, vanilin šećer, voće, prašak za pecivo', '240', 'Mafin', 'Mafini od raznih okusa.\r\nOkusi: jagoda, vanilija, čokolada, kava, višnja', 'muffin.jpg', 1, '8'),
(17, 1, 'Svi znamo za guacamole, umak koji je potekao iz Meksika i koristi se najčešće kao umak za čips ili uz burito.\r\nOno što naš čini posebnim je što mi sami radimo čišs što ga čini finijim, zdravijim i svježim.', 'Umak: avokado, rajčica, bosiljak, limunov sok.\r\nČips: lrumpir', '146', 'Guacamole s domaćim čipsom', 'Guacamole umak sa čipsom koji smo mi napravili.', 'guacamole.jpg', 1, '18'),
(18, 1, '"Sendvič" u kojem umjesto kruha imate ploške tikvice a umjesto mesa imate rajčicu i začine. Sir ostaje sir.', 'Tikvica, rajčica, light feta sir.', '38', 'Bruschette tikvice', 'San za svakog tko pazi na kalorije.', 'bruschette.jpg', 1, '12'),
(19, 2, 'Jelo od miješanog mljevenog ili sjeckanog mesa i najčešće riže umotanih u list ukiseljena kupusa.', 'Mljeveno juneće meso, kiseli kupus, krumpir pire', '220', 'Sarma', 'Ne zovemo se bezveze Sarmusmoto. Valjda znamo što je prava sarma.\r\n', 'sarma.jpg', 1, '20'),
(20, 2, 'Paprike koje se napune mljevenim mesom i rižom te se onda kuhaju.', 'paprika, mjleveno juneće meso, krumpir pire.', '220', 'Punjene paprike', 'Kao i za sarmu jako smo uvjereni da je dobra.', 'Paprika.jpg', 1, '20'),
(21, 2, '"Nova" naša verzija punjene paprike za vegetarijance. Jer i njih volimo! Sastojci se pripremaju zasebno te se na kraju spoje.', 'Paprika, riža, mrkva, grašak', '110', 'Vege punjene paprike', 'Punjene paprike za vegetarijance', 'red-bell-peppers-01.jpg', 1, '18'),
(22, 2, 'Odrezak od domaće tune pripremljene na mediteranski način sa prilogom po izboru. Od priloga možete izabrati krumpir pire, rižu ili mix povrća koji se sastoji od graška, mahuna, graha, luka i paprike.', 'Tuna', '160', 'Tuna sa prilogom po izboru', 'Prilozi: krumpir pire, riža, mix povrća', 'tuna.jpg', 1, '45'),
(23, 3, 'Fini desert koji ne treba nešto posebno opisivati u našim krajevima.', 'Jaje, mlijeko, šećer', '115', 'Palačinke', 'Palačine s nadjevom po izboru.\r\nIzbor: rolada od marelica ili šljiva, nutella', 'palacinke.jpg', 1, '11'),
(24, 3, 'Desert torta jako popularna u ovim krajevima. Zagrebačka kremšnita se karakterizira svojim gornjim dijelom koji se preljeva čokoladom. ', 'Jaje, mlijeko, šećer, šlag, čokolada', '160', 'Kremšnita', 'Torta sa kremom od vanilije i šlagom.', 'kremsnita.jpg', 1, '14'),
(25, 3, 'Slasni kolačići od meda.', 'Meda, brašno, šećer, jaje, maslac, čokolada', '140', 'Medenjaci', 'Svi smo ih jeli kod bake', 'medenjaci.jpg', 1, '12'),
(26, 3, 'Njezina su posebnost upravo višnje koje rastu u toj njemačkoj pokrajini, ali i starinski postupak pripreme čokoladnog biskvita, bogate kreme i višanja sa želatinom.', 'Maslac, šećer u prahu, vanilin šećer, jaje, čokolada, bademi, višnje, slatko vrnje', '160', 'Schwarzwald torta', 'Mnogo je torti od višanja, ali samo je jedna ona iz – Schwarzwalda. ', 'Schwarzwald-torta.jpg', 1, '20');

-- --------------------------------------------------------

--
-- Table structure for table `jezik`
--

CREATE TABLE IF NOT EXISTS `jezik` (
  `idJezika` int(11) NOT NULL AUTO_INCREMENT,
  `nazivJezika` varchar(40) COLLATE cp1250_croatian_ci NOT NULL,
  PRIMARY KEY (`idJezika`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jezik`
--

INSERT INTO `jezik` (`idJezika`, `nazivJezika`) VALUES
(1, 'hrvatski'),
(2, 'engleski');

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE IF NOT EXISTS `kategorija` (
  `idKategorije` int(11) NOT NULL AUTO_INCREMENT,
  `imeKategorije` varchar(40) COLLATE cp1250_croatian_ci NOT NULL,
  PRIMARY KEY (`idKategorije`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`idKategorije`, `imeKategorije`) VALUES
(1, 'predjelo'),
(2, 'glavnoJelo'),
(3, 'desert'),
(4, 'pice');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jelo`
--
ALTER TABLE `jelo`
  ADD CONSTRAINT `jelo_ibfk_1` FOREIGN KEY (`idKategorije`) REFERENCES `kategorija` (`idKategorije`),
  ADD CONSTRAINT `jelo_ibfk_2` FOREIGN KEY (`idJezika`) REFERENCES `jezik` (`idJezika`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
