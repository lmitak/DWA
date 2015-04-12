-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2015 at 09:42 PM
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
  `opis` varchar(255) DEFAULT NULL,
  `sastojci` varchar(255) DEFAULT NULL,
  `cal` decimal(10,0) DEFAULT NULL,
  `naziv` varchar(65) NOT NULL,
  `kratkiOpis` varchar(120) DEFAULT NULL,
  `image` varchar(255) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `idJezika` int(11) NOT NULL,
  `cijena` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `secondary` (`idKategorije`),
  KEY `idJezika` (`idJezika`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

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
(14, 4, 'Graševina Daruvar prepoznatljive je arome, zelenkastožute boje, svježeg i skladnog okusa. Zahvaljujući svom osebujnom bukeu, punoći i ugodnoj svježini, ovo pitko i lagano vino ohlađeno na 10-12 °C izvrsno pristaje uz razna jela od bijelog mesa.', NULL, '98', 'Graševina Daruvar 0,33 mL', 'Badel 1892.', 'Grasevina-Daruvar-Kvalitetna.jpg', 1, '22'),
(15, 1, 'Hrskavo fino predjelo sa niskom do umjerenom količinom kaloričnom vrijednošću. ', 'Krumpir, paprika, bosiljak, matovilac, sir.', '120', 'Romanbite', 'Ako tražite nešto hrskavo i fino ovo je obrok za vas!', 'romanbite.jpg', 1, '16'),
(16, 1, 'Mafini su klasični za američki i engleski doručak. Mekani su i slatki, a za one koji od toga pate i simetrični.', 'Pšenično brašno, mlijeko, jaje, vanilin šećer, voće, prašak za pecivo', '240', 'Mafin', 'Mafini od raznih okusa.\r\nOkusi: jagoda, vanilija, čokolada, kava, višnja', 'muffin.jpg', 1, '8'),
(17, 1, 'Svi znamo za guacamole, umak koji je potekao iz Meksika i koristi se najčešće kao umak za čips ili uz burito.\r\nOno što naš čini posebnim je što mi sami radimo čišs što ga čini finijim, zdravijim i svježim.', 'Umak: avokado, rajčica, bosiljak, limunov sok.\r\nČips: krumpir', '146', 'Guacamole s domaćim čipsom', 'Guacamole umak sa čipsom koji smo mi napravili.', 'guacamole.jpg', 1, '18'),
(18, 1, '"Sendvič" u kojem umjesto kruha imate ploške tikvice a umjesto mesa imate rajčicu i začine. Sir ostaje sir.', 'Tikvica, rajčica, light feta sir.', '38', 'Bruschette tikvice', 'San za svakog tko pazi na kalorije.', 'bruschette.jpg', 1, '12'),
(19, 2, 'Jelo od miješanog mljevenog ili sjeckanog mesa i najčešće riže umotanih u list ukiseljena kupusa.', 'Mljeveno juneće meso, kiseli kupus, krumpir pire', '220', 'Sarma', 'Ne zovemo se bezveze Sarmusmoto. Valjda znamo što je prava sarma.\r\n', 'sarma.jpg', 1, '20'),
(20, 2, 'Paprike koje se napune mljevenim mesom i rižom te se onda kuhaju.', 'paprika, mljeveno juneće meso, krumpir pire.', '220', 'Punjene paprike', 'Kao i za sarmu jako smo uvjereni da je dobra.', 'Paprika.jpg', 1, '20'),
(21, 2, '"Nova" naša verzija punjene paprike za vegetarijance. Jer i njih volimo! Sastojci se pripremaju zasebno te se na kraju spoje.', 'Paprika, riža, mrkva, grašak', '110', 'Vege punjene paprike', 'Punjene paprike za vegetarijance', 'red-bell-peppers-01.jpg', 1, '18'),
(22, 2, 'Odrezak od domaće tune pripremljene na mediteranski način sa prilogom po izboru. Od priloga možete izabrati krumpir pire, rižu ili mix povrća koji se sastoji od graška, mahuna, graha, luka i paprike.', 'Tuna', '160', 'Tuna sa prilogom po izboru', 'Prilozi: krumpir pire, riža, mix povrća', 'tuna.jpg', 1, '45'),
(23, 3, 'Fini desert koji ne treba nešto posebno opisivati u našim krajevima.', 'Jaje, mlijeko, šećer', '115', 'Palačinke', 'Palačine s nadjevom po izboru.\r\nIzbor: rolada od marelica ili šljiva, nutella', 'palacinke.jpg', 1, '11'),
(24, 3, 'Desert torta jako popularna u ovim krajevima. Zagrebačka kremšnita se karakterizira svojim gornjim dijelom koji se preljeva čokoladom. ', 'Jaje, mlijeko, šećer, šlag, čokolada', '160', 'Kremšnita', 'Torta sa kremom od vanilije i šlagom.', 'kremsnita.jpg', 1, '14'),
(25, 3, 'Slasni kolačići od meda.', 'Meda, brašno, šećer, jaje, maslac, čokolada', '140', 'Medenjaci', 'Svi smo ih jeli kod bake', 'medenjaci.jpg', 1, '12'),
(26, 3, 'Njezina su posebnost upravo višnje koje rastu u toj njemačkoj pokrajini, ali i starinski postupak pripreme čokoladnog biskvita, bogate kreme i višanja sa želatinom.', 'Maslac, šećer u prahu, vanilin šećer, jaje, čokolada, bademi, višnje, slatko vrnje', '160', 'Schwarzwald torta', 'Mnogo je torti od višanja, ali samo je jedna ona iz – Schwarzwalda. ', 'Schwarzwald-torta.jpg', 1, '20'),
(27, 4, 'Coca-Cola is soft drink from herbal extracts.', NULL, '130', 'Coca-Cola 0,33L', 'The most known word in the world - right after the word OK.', 'CocaCola.jpg', 2, '14'),
(28, 4, 'Sprite is a popular carbonated soft drink based on lemon and lime, produced by US company The Coca-Cola Company.', NULL, '115', 'Sprite 0,33 L', 'It is not known as Coca-Cola, but is just as good.', 'sprite.jpg', 2, '14'),
(29, 4, 'Cedevita vitamin instant drink for any occasion, suitable for all ages, for any time of day.', NULL, '95', 'Cedevita 0,33 mL', 'The flavors: orange, lemon, lime, grapefruit', 'cedevita_n.jpg', 2, '10'),
(30, 4, 'Light beer produced by Zagreb Brewery. Ožujsko beer is produced from water, hops, barley and yeast, and contains 5.2% alcohol.', NULL, '215', 'Ožujsko pivo 0,5 L', 'Žuja rules! :)', 'ozujsko.gif', 2, '12'),
(31, 4, 'Lager beer with an alcohol content of 5%, and is characterized by a golden yellow color and a refreshing bitter taste. Defined by harmonious aroma of malt and fullness of flavor.', NULL, '215', 'Karlovačko beer 0,5 L', 'Karlovačko is a favorite local beer ideal for enjoying the company of friends.', 'karlovacko.jpg', 2, '12'),
(32, 4, 'Radler is ideal, refreshing combination of beer and lemon juice with only 2% alcohol!', NULL, '95', 'Karlovačko Limun Natur Radler 0,5 L', 'When looking for a refreshment, take a short break from everyday life or relax after sports activities.', 'karlovacko-limun.png', 2, '11'),
(33, 4, 'Fanta is a popular carbonated soft drink produced by US company The Coca-Cola Company.', NULL, '130', 'Fatna 0,33 mL', 'Popular soft drink flavored with orange or elder.', 'fanta.jpg', 2, '14'),
(34, 4, 'Fruit juice produced from fruit concentrate juice. No added sugar. No preservatives. 100% of the share of fruit.', NULL, '60', 'Juicy 0,33 mL', 'The flavors: apple orange, pineapple, cranberry', 'juicy.jpg', 2, '15'),
(35, 4, 'Fruit juice produced from fruit concentrate juice. No added sugar. No preservatives. 100% of the share of fruit.', NULL, '60', 'Pago', 'The flavors: apple orange, pineapple, cranberry', 'pago.jpg', 2, '16'),
(36, 4, 'Graševina Daruvar has distinctive aroma, greenish yellow color, fresh and harmonious taste. Thanks to its distinctive bouquet, fullness and pleasant freshness, this smooth and light wine chilled to 10-12 ° C is best served with a variety of white meat.', NULL, '98', 'Graševina Daruvar 0,33 mL', 'Badel 1892.', 'Grasevina-Daruvar-Kvalitetna.jpg', 2, '22'),
(37, 1, 'Crunchy fine appetizer with low to moderate amount of calorific value.', 'Potatoes, peppers, basil, lamb''s lettuce, cheese.', '120', 'Romanbite', 'If you are looking for something crunchy and tasty this is meal for you!', 'romanbite.jpg', 2, '16'),
(38, 1, 'Muffins are a classic for American and English breakfast. They are soft and sweet, and for those who are affected by it, symmetrical.', 'Wheat flour, milk, egg, vanilla sugar, fruit, baking powder', '240', 'Muffin', 'Muffins of various flavors.\r\nThe flavors: strawberry, vanilla, chocolate, coffee, cherry', 'muffin.jpg', 2, '8'),
(39, 1, 'All we know for guacamole, sauce that originated in Mexico and is most often used as a dip for chips or with the burrito.', 'Sauce: avocado, tomato, basil, lemon juice.\r\nChips: potatoes', '146', 'Guacamole with homemade chips', 'Guacamole with chips that we made.', 'guacamole.jpg', 2, '18'),
(40, 1, '"Sandwich" in which instead of bread slices have zucchini and instead of meat have tomatoes and spices. The cheese is still cheese.', 'Zucchini, tomato, light feta cheese.', '38', 'Bruschetti zucchini', 'A dream for anyone who watches over their calories.', 'bruschette.jpg', 2, '12'),
(41, 2, 'A dish of minced or chopped meat and usually rice wrapped in leaf of pickled cabbage.', 'Minced beef, sauerkraut, mashed potatoes', '220', 'Cabbage rolls', 'We do not call ourselves Sarmusmoto for nothing(Croatian roll a cabbage roll). I guess we know what are the real cabbage', 'sarma.jpg', 2, '20'),
(42, 2, 'Peppers that are filled with minced meat and rice and then cooked.', 'pepper, minced beef, mashed potatoes.', '220', 'Stuffed peppers', 'Same as for the cabbage rolls, we are very confident that it is good.', 'Paprika.jpg', 2, '20'),
(43, 2, 'Our "new" version of stuffed peppers for vegetarians. Because we love them too! The ingredients are prepared separately and eventually merged.', 'Pepper, rice, carrots, peas', '110', 'Veggie stuffed peppers', 'Stuffed peppers for vegetarians', 'red-bell-peppers-01.jpg', 2, '18'),
(44, 2, 'Steak of domestic tuna prepared Mediterranean style with a side dish of your choice. Side dishes are: mashed potatoes, rice or vegetable mix consisting of peas, green beans, peas, onions and peppers.', 'Tuna', '160', 'Tuna with a side dish of your choice', 'Side dish: mashed potatoes, rice, mix vegetables', 'tuna.jpg', 2, '45'),
(49, 3, 'Yammy dessert that does not need anything special to describe in our region.', 'Egg, milk, sugar', '115', 'Pancakes', 'Pancakes with filling of choice.\r\nFillings: jam of apricot or plum, nutella', 'palacinke.jpg', 2, '11'),
(50, 3, 'Desert cake very popular in these parts. Zagreb cream cake is characterized by its upper part to the overflow chocolate.', 'Egg, milk, sugar, whipped cream, chocolate', '160', 'Cream Cake', 'Cake with vanilla cream and whipped cream.', 'kremsnita.jpg', 2, '14'),
(51, 3, 'Delicious cookies of honey.', 'Honey, flour, sugar, egg, butter, chocolate', '140', 'Honey cakes', 'All of us ate them at Grandma.', 'medenjaci.jpg', 2, '12'),
(52, 3, 'Her specialty is not just cherries that grow in the German state, but also the old-fashioned process of preparation of chocolate biscuit, rich cream and cherries with gelatin.', 'Butter, powdered sugar, vanilla sugar, egg, chocolate, almonds, cherries, sweet Returned', '160', 'Schwarzwald (Black forest) cake', 'There are many cakes with cherries, but only is - the Schwarzwald cake.', 'Schwarzwald-torta.jpg', 2, '20');

-- --------------------------------------------------------

--
-- Table structure for table `jezik`
--

CREATE TABLE IF NOT EXISTS `jezik` (
  `idJezika` int(11) NOT NULL AUTO_INCREMENT,
  `nazivJezika` varchar(40) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci NOT NULL,
  PRIMARY KEY (`idJezika`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

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
  `imeKategorije` varchar(40) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci NOT NULL,
  PRIMARY KEY (`idKategorije`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

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
