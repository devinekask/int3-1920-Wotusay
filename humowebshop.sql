-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 22, 2020 at 12:44 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `humowebshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `humo_details`
--

CREATE TABLE `humo_details` (
  `id` int(11) NOT NULL,
  `humoitem_id` int(11) NOT NULL,
  `picturedetail` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `uitgekomen` varchar(255) NOT NULL,
  `samenvatting` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `humo_details`
--

INSERT INTO `humo_details` (`id`, `humoitem_id`, `picturedetail`, `title`, `type`, `uitgekomen`, `samenvatting`) VALUES
(1, 1, 'assets/img/neuromancer-detail.png', 'Neuromancer - William Gibson', 'Roman', '1984', 'The Matrixis a world \"within\" the world, a global consensus- hallucination, the representation of every byte of data in cyberspace...Case had been the sharpest data-thief in the business, until vengeful former employees crippled his nervous system. But now a new and very mysterious employer recruits him for a last-chance run. The target: an unthinkably powerful artificial intelligence orbiting Earth in service of the sinister Tessier-Ashpool business clan. With a dead man riding shotgun and Molly, mirror-eyed street-samurai, to watch his back, Case embarks on an adventure that ups the ante on an entire genre of fiction. Hotwired to the leading edges of art and technology, Neuromancer ranks with 1984 and Brave New World as one of the century\'s most potent visions of the future'),
(2, 2, 'assets/img/agenda-details.png', 'Humo - agenda', '2020-2021', '2020', 'De gloednieuwe agenda van 2020'),
(3, 3, 'assets/img/androids-details.png', 'Do androids dream of electric sheep?', 'Science Fiction', '1986', 'Do Androids Dream of Electric Sheep? is a science fiction novel by American writer Philip K. Dick, first published in 1968. The novel is set in a post-apocalyptic San Francisco, where Earth\'s life has been greatly damaged by a nuclear global war'),
(4, 4, 'assets/img/Boekenstand-details.png', 'Boekenstand - Humo', 'Hout', '2019', 'Houten boeksteun van humo.'),
(5, 5, 'assets/img/bookmark-details.png', 'Bladwijzer - Humo', 'Papier', '2018', 'De bijhorende bladwijzer van de boekenrijks.'),
(6, 6, 'assets/img/endergame-details.png', 'Ender\'s Game - 	Orson Scott Card', 'Sience-fiction', '1985', 'Ender\'s Game is a 1985 military science fiction novel by American author Orson Scott Card. Set at an unspecified date in Earth\'s future, the novel presents an imperiled humankind after two conflicts with the Formics, an insectoid alien species they dub the \"buggers\". In preparation for an anticipated third invasion, children, including the novel\'s protagonist, Andrew \"Ender\" Wiggin, are trained from a very young age by putting them through increasingly difficult games, including some in zero gravity, where Ender\'s tactical genius is revealed.'),
(7, 7, 'assets/img/farenheit-details.png', 'Fahrenheit 451 - Ray Bradbury', 'Novel', '1953', 'Fahrenheit 451 is a dystopian novel by American writer Ray Bradbury, first published in 1953. Often regarded as one of his best works, the novel presents a future American society where books are outlawed and \"firemen\" burn any that are found.'),
(8, 8, 'assets/img/handsmantale-details.png', 'The Handmaid\'s Tale - Margaret Atwood', 'Novel', '1985', 'The Handmaid\'s Tale, originally published in 1985, is a dystopian novel written by Canadian author Margaret Atwood. It is set in a near-future New England, in a totalitarian state resembling a theonomy that overthrows the United States government.'),
(9, 9, 'assets/img/i,robot-details.png', 'I, Robot - Isaac Asimov', 'Novel', '1950', 'I, Robot is a fixup novel of science fiction short stories or essays by American writer Isaac Asimov.'),
(10, 10, 'assets/img/boekenlamp-details.png', 'Leeslichtje - Humo', 'LED', '2015', 'Een boekenlichtje met een vormgeving van vroeger en een gebruiksgemak van nu.  Dit leeslampje kan perfect bevestigd worden op elk boek. De richtbare led lamp zorgt voor optimaal leescomfort.  Als je The Booklamp niet gebruikt, laat je\'m eenvoudigweg achter in de verzwaarde voet. Je leukt er ook nog eens je bureau, tafel of schoorsteenmantel mee op. Wordt geleverd inclusief batterijen.'),
(11, 11, 'assets/img/loop-details.png', 'Loep - Humo', 'Glass x2', '2016', 'Met dit vergrootglas met een diameter van 90 mm, kan je eindelijk die kleine lettertjes wel (weer) lezen.  Deze loep vergroot een tekst tweemaal en in de uitsparing wordt het beeld zelfs 4 keer groter weergegeven! Bovendien ligt deze lichtgewicht loep makkelijk in de hand, dankzij een rubberen frame en beschermlaag die ook bij dagelijks gebruik duurzaamheid garandeert.'),
(12, 12, 'assets/img/leeslichtje-details.png', 'Mini leeslichtje - humo', 'LED', '2019', 'Stoppen met lezen als het licht uitgaat is helemaal niet meer nodig. Bevestig het lichtje op de cover van je boek, richt het uiterst, krachtige ledlampje op je boek en je kan doorlezen tot in de vroege uurtjes.'),
(13, 13, 'assets/img/prof-loep-details.png', 'Proffesionele loep - Humo', 'Glass x4', '2018', 'Van amateur-archeoloog tot professioneel postzegelverzamelaar, deze professionele loupe is dankzij zijn handige formaat perfect voor elke hobbyist. Met  deze loep met een vergroting van 6x worden de allerkleinste details van je verzamelobjecten zichtbaar. '),
(14, 14, 'assets/img/readyplayerone-details.png', 'Ready player one - Ermest Cline', 'Novel', '2011', 'Ready Player One is a 2011 science fiction novel, and the debut novel of American author Ernest Cline. The story, set in a dystopia in 2045, follows protagonist Wade Watts on his search for an Easter egg in a worldwide virtual reality game, the discovery of which would lead him to inherit the game creator\'s fortune.'),
(15, 15, 'assets/img/snowcrah-details.png', 'Snow Crash - Neal Stephenson', 'Humour', '1992', 'Snow Crash is a science fiction novel by American writer Neal Stephenson, published in 1992. Like many of Stephenson\'s other novels, it covers history, linguistics, anthropology, archaeology, religion, computer science, politics, cryptography, memetics and philosophy'),
(16, 16, 'assets/img/theroad-details.png', 'The road - Cormac McCarthy', 'Novel', '2006', 'The Road is a 2006 post-apocalyptic novel by American writer Cormac McCarthy. The book details the journey of a father and his young son over a period of several months, across a landscape blasted by ...'),
(17, 17, 'assets/img/wool-details.png', 'Wool - Hugh Howey', 'Novel', '2011', '#1 Kindle Bestseller on Amazon.com Winner of Kindle Book Review\'s Best Indie Book of 2012 Award Wool as you\'ve never read it before: The New York Times bestselling novel now told in graphic novel format ...'),
(18, 18, 'assets/img/abbonement-detail.png', 'Humo abbonement - Papier & digitaal', 'Papier & digitaal', '2010', 'Dit is de ideaale manier hoe je de humo kan lezen. Je kan hem overal meenemen waar je ook wilt.'),
(19, 19, 'assets/img/boekenreeks-details.png', 'Boekenreeks - Humo', 'Boekenreeks', '2020', 'Dit zijn alle boeken die je op onze pagina kan kopen maar dan samen gebundeld in 1 pakket.'),
(20, 31, 'assets/img/neuromancer-detail.png', 'Neuromancer - William Gibson', 'Roman', '1984', 'The Matrixis a world \"within\" the world, a global consensus- hallucination, the representation of every byte of data in cyberspace...Case had been the sharpest data-thief in the business, until vengeful former employees crippled his nervous system. But now a new and very mysterious employer recruits him for a last-chance run. The target: an unthinkably powerful artificial intelligence orbiting Earth in service of the sinister Tessier-Ashpool business clan. With a dead man riding shotgun and Molly, mirror-eyed street-samurai, to watch his back, Case embarks on an adventure that ups the ante on an entire genre of fiction. Hotwired to the leading edges of art and technology, Neuromancer ranks with 1984 and Brave New World as one of the century\'s most potent visions of the future'),
(21, 32, 'assets/img/androids-details.png', 'Do androids dream of electric sheep?', 'Science Fiction', '1986', 'Do Androids Dream of Electric Sheep? is a science fiction novel by American writer Philip K. Dick, first published in 1968. The novel is set in a post-apocalyptic San Francisco, where Earth\'s life has been greatly damaged by a nuclear global war'),
(22, 33, 'assets/img/endergame-details.png', 'Ender\'s Game - 	Orson Scott Card', 'Sience-fiction', '1985', 'Ender\'s Game is a 1985 military science fiction novel by American author Orson Scott Card. Set at an unspecified date in Earth\'s future, the novel presents an imperiled humankind after two conflicts with the Formics, an insectoid alien species they dub the \"buggers\". In preparation for an anticipated third invasion, children, including the novel\'s protagonist, Andrew \"Ender\" Wiggin, are trained from a very young age by putting them through increasingly difficult games, including some in zero gravity, where Ender\'s tactical genius is revealed.'),
(23, 34, 'assets/img/farenheit-details.png', 'Fahrenheit 451 - Ray Bradbury', 'Novel', '1953', 'Fahrenheit 451 is a dystopian novel by American writer Ray Bradbury, first published in 1953. Often regarded as one of his best works, the novel presents a future American society where books are outlawed and \"firemen\" burn any that are found.'),
(24, 35, 'assets/img/handsmantale-details.png', 'The Handmaid\'s Tale - Margaret Atwood', 'Novel', '1985', 'The Handmaid\'s Tale, originally published in 1985, is a dystopian novel written by Canadian author Margaret Atwood. It is set in a near-future New England, in a totalitarian state resembling a theonomy that overthrows the United States government.'),
(25, 36, 'assets/img/i,robot-details.png', 'I, Robot - Isaac Asimov', 'Novel', '1950', 'I, Robot is a fixup novel of science fiction short stories or essays by American writer Isaac Asimov.'),
(26, 37, 'assets/img/readyplayerone-details.png', 'Ready player one - Ermest Cline', 'Novel', '2011', 'Ready Player One is a 2011 science fiction novel, and the debut novel of American author Ernest Cline. The story, set in a dystopia in 2045, follows protagonist Wade Watts on his search for an Easter egg in a worldwide virtual reality game, the discovery of which would lead him to inherit the game creator\'s fortune.'),
(27, 38, 'assets/img/snowcrah-details.png', 'Snow Crash - Neal Stephenson', 'Humour', '1992', 'Snow Crash is a science fiction novel by American writer Neal Stephenson, published in 1992. Like many of Stephenson\'s other novels, it covers history, linguistics, anthropology, archaeology, religion, computer science, politics, cryptography, memetics and philosophy'),
(28, 39, 'assets/img/theroad-details.png', 'The road - Cormac McCarthy', 'Novel', '2006', 'The Road is a 2006 post-apocalyptic novel by American writer Cormac McCarthy. The book details the journey of a father and his young son over a period of several months, across a landscape blasted by ...'),
(29, 40, 'assets/img/wool-details.png', 'Wool - Hugh Howey', 'Novel', '2011', '#1 Kindle Bestseller on Amazon.com Winner of Kindle Book Review\'s Best Indie Book of 2012 Award Wool as you\'ve never read it before: The New York Times bestselling novel now told in graphic novel format ...'),
(30, 41, 'assets/img/abbonement-detail.png', 'Humo abbonement - Papier & digitaal', 'Papier & digitaal', '2010', 'Dit is de ideaale manier hoe je de humo kan lezen. Je kan hem overal meenemen waar je ook wilt.'),
(31, 42, 'assets/img/abbonement-detail.png', 'Humo abbonement - Papier & digitaal', 'Papier & digitaal', '2010', 'Dit is de ideaale manier hoe je de humo kan lezen. Je kan hem overal meenemen waar je ook wilt.');

-- --------------------------------------------------------

--
-- Table structure for table `humo_guest`
--

CREATE TABLE `humo_guest` (
  `id` int(11) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `aanspreking` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `straatnaam` varchar(255) NOT NULL,
  `huisnummer` varchar(255) NOT NULL,
  `busnr` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `woonplaats` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefoonumber` varchar(255) NOT NULL,
  `Datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `humo_guest`
--

INSERT INTO `humo_guest` (`id`, `voornaam`, `aanspreking`, `achternaam`, `straatnaam`, `huisnummer`, `busnr`, `postcode`, `woonplaats`, `email`, `telefoonumber`, `Datecreated`) VALUES
(3, 'Wout', 'on', 'Salembier', 'Wittemolenstraat 238', '2', '', '8560', 'Moorsele', 'wout.salembier@hotmail.com', '0468474384', '2020-01-20 22:47:44'),
(4, 'Wout', 'on', 'Salembier', 'Wittemolenstraat ', '34234', '', '8560', 'Moorsele', 'wout.3423@hotmail.com', '434242', '2020-01-20 23:01:41'),
(5, 'Wout', 'on', 'Salembier', 'Wittemolenstraat ', '8', '', '8560', 'Moorsele', 'wout.salembier@hotmail.com', '0990000', '2020-01-20 23:05:41'),
(6, 'Wout', 'on', 'Salembier', 'Wittemolenstraat ', '2', '', '8560', 'Moorsele', 'wout.salembier@hotmail.com', '0468474384', '2020-01-21 11:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `humo_items`
--

CREATE TABLE `humo_items` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `filter` int(11) NOT NULL,
  `shop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `humo_items`
--

INSERT INTO `humo_items` (`id`, `picture`, `name`, `price`, `filter`, `shop`) VALUES
(1, 'assets/img/Neuromancer-small.png', 'Neuromancer', 12.99, 1, 'assets/img/neuromancer-shop.png'),
(2, 'assets/img/agenda.png', 'Agenda', 16.95, 3, 'assets/img/agenda-shop.png'),
(3, 'assets/img/Androids.png', 'Do androids dream of electric sheep', 12.99, 1, 'assets/img/androids-shop.png'),
(4, 'assets/img/boekenstand.png', 'Boekensteun', 18.5, 2, 'assets/img/boekenstand-shop.png'),
(5, 'assets/img/bookmark.png', 'Bladwijzer', 4.5, 2, 'assets/img/bookmark-shop.png'),
(6, 'assets/img/endersgame.png', 'Endersgame', 12.99, 1, 'assets/img/endergame-shop.png'),
(7, 'assets/img/farenhet.png', 'Farenheit 451', 12.99, 1, 'assets/img/farenheit-shop.png'),
(8, 'assets/img/handmadetale.png', 'The handsmade tale', 12.99, 1, 'assets/img/handsmantale-shop.png'),
(9, 'assets/img/irobot.png', 'I,robot', 12.99, 1, 'assets/img/i,robot-shop.png'),
(10, 'assets/img/lamps.png', 'Leeslichtje', 18.5, 2, 'assets/img/boekenlamp-shop.png'),
(11, 'assets/img/loop.png', 'Loep', 12.5, 2, 'assets/img/loop-shop.png'),
(12, 'assets/img/Minilamp.png', 'Mini boekenlichtje', 9.9, 2, 'assets/img/leeslichtje-shop.png'),
(13, 'assets/img/prof-loep.png', 'Professioneel loep ', 12.5, 2, 'assets/img/prof-loep-shop.png'),
(14, 'assets/img/readyplayerone.png', 'Ready player one', 12.99, 1, 'assets/img/readyplayerone-shop.png'),
(15, 'assets/img/snowcrash.png', 'Snow crash', 12.99, 1, 'assets/img/snowcrah-shop.png'),
(16, 'assets/img/theroad.png', 'The road', 12.99, 1, 'assets/img/theroad-shop.png'),
(17, 'assets/img/wool.png', 'Wool', 12.99, 1, 'assets/img/wool-shop.png'),
(18, 'assets/img/papierdigitaal.png', 'Papier & Digitaal', 15.96, 0, 'assets/img/abbonement-shop.png'),
(19, 'assets/img/Boekenreeks.png', 'Boekenreeks', 49.5, 1, 'assets/img/boekenreeks-shop.png'),
(31, 'assets/img/Neuromancer-small.png', 'Neuromancer - ebook', 1.99, 4, 'assets/img/neuromancer-shop.png'),
(32, 'assets/img/Androids.png', 'Do androids dream of electric sheep  - ebook', 1.99, 4, 'assets/img/androids-shop.png'),
(33, 'assets/img/endersgame.png', 'Endersgame - ebook', 1.99, 4, 'assets/img/endergame-shop.png'),
(34, 'assets/img/farenhet.png', 'Farenheit 451 - ebook', 1.99, 4, 'assets/img/farenheit-shop.png'),
(35, 'assets/img/handmadetale.png', 'The handsmade tale - ebook', 1.99, 4, 'assets/img/handsmantale-shop.png'),
(36, 'assets/img/irobot.png', 'I,robot - ebook', 1.99, 4, 'assets/img/i,robot-shop.png'),
(37, 'assets/img/readyplayerone.png', 'Ready player one - ebook', 1.99, 4, 'assets/img/readyplayerone-shop.png'),
(38, 'assets/img/snowcrash.png', 'Snow crash - ebook', 1.99, 4, 'assets/img/snowcrah-shop.png'),
(39, 'assets/img/theroad.png', 'The road - ebook', 1.99, 4, 'assets/img/theroad-shop.png'),
(40, 'assets/img/wool.png', 'Wool - ebook', 1.99, 4, 'assets/img/wool-shop.png'),
(41, 'assets/img/papierdigitaal.png', 'Papier & Digitaal - 2 jaar', 14.36, 0, 'assets/img/abbonement-shop.png'),
(42, 'assets/img/papierdigitaal.png', 'Papier & Digitaal - 3 jaar', 12.76, 0, 'assets/img/abbonement-shop.png');

-- --------------------------------------------------------

--
-- Table structure for table `humo_versies`
--

CREATE TABLE `humo_versies` (
  `id` int(11) NOT NULL,
  `details_id` int(11) NOT NULL,
  `optie 1` varchar(255) NOT NULL,
  `optie 2` varchar(255) NOT NULL,
  `optie 3` varchar(255) NOT NULL,
  `optie 4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `humo_versies`
--

INSERT INTO `humo_versies` (`id`, `details_id`, `optie 1`, `optie 2`, `optie 3`, `optie 4`) VALUES
(1, 10, 'Rood', 'Zwart', 'Blauw', 'Wit'),
(2, 12, 'Rood', 'Groen', 'Blauw', '-'),
(3, 31, 'Hardcover', 'E-book', '-', '-'),
(4, 32, 'Hardcover', 'E-book', '-', '-'),
(5, 33, 'Hardcover', 'E-book', '-', '-'),
(6, 34, 'Hardcover', 'E-book', '-', '-'),
(10, 35, 'Hardcover', 'E-book', '-', '-'),
(12, 36, 'Hardcover', 'E-book', '-', '-'),
(13, 37, 'Hardcover', 'E-book', '-', '-'),
(14, 38, 'Hardcover', 'E-book', '-', '-'),
(15, 39, 'Hardcover', 'E-book', '-', '-'),
(16, 40, 'Hardcover', 'E-book', '-', '-'),
(17, 18, '1 jaar', '2 jaar', '3 jaar', '-'),
(18, 1, 'Hardcover', 'E-book', '-', '-'),
(19, 3, 'Hardcover', 'E-book', '-', '-'),
(20, 6, 'Hardcover', 'E-book', '-', '-'),
(21, 7, 'Hardcover', 'E-book', '-', '-'),
(22, 8, 'Hardcover', 'E-book', '-', '-'),
(23, 9, 'Hardcover', 'E-book', '-', '-'),
(24, 16, 'Hardcover', 'E-book', '-', '-'),
(25, 14, 'Hardcover', 'E-book', '-', '-'),
(26, 15, 'Hardcover', 'E-book', '-', '-'),
(27, 17, 'Hardcover', 'E-book', '-', '-'),
(28, 41, '1 jaar', '2 jaar', '3 jaar', '-'),
(29, 42, '1 jaar', '2 jaar', '3 jaar', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `humo_details`
--
ALTER TABLE `humo_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `humo_guest`
--
ALTER TABLE `humo_guest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `humo_items`
--
ALTER TABLE `humo_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `humo_versies`
--
ALTER TABLE `humo_versies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `humo_details`
--
ALTER TABLE `humo_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `humo_guest`
--
ALTER TABLE `humo_guest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `humo_items`
--
ALTER TABLE `humo_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `humo_versies`
--
ALTER TABLE `humo_versies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
