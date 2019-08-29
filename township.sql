-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 aug 2019 om 13:55
-- Serverversie: 10.1.36-MariaDB
-- PHP-versie: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `township`
--
CREATE DATABASE IF NOT EXISTS `township` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `township`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `aanmelding`
--

CREATE TABLE `aanmelding` (
  `naam` varchar(50) DEFAULT NULL,
  `genre` varchar(30) DEFAULT NULL,
  `leeftijd` int(2) DEFAULT NULL,
  `beschrijving` varchar(5000) DEFAULT NULL,
  `beschikbaar` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `accountid` int(3) NOT NULL,
  `geaccepteerd` varchar(20) DEFAULT 'NEE'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `aanmelding`
--

INSERT INTO `aanmelding` (`naam`, `genre`, `leeftijd`, `beschrijving`, `beschikbaar`, `image`, `email`, `accountid`, `geaccepteerd`) VALUES
('Billy Joel', ' Rock / Soft Rock', 70, 'William Martin (Billy) Joel is een Amerikaanse pianist, singer-songwriter en componist. Vanaf 1972 produceerde hij popmuziekhits (begonnen met de single Nocturne) tot zijn afscheid in 1993. Daarna bleef hij optreden, naast het schrijven en opnemen van klassieke muziek.', 'Midweek', '266px-Billy_Joel_Shankbone_NYC_2009.jpg', 'Billyy420@yahoo.com', 5, 'NEE'),
('Bruce Springsteen', 'Rock', 69, 'Bruce Springsteen is een Amerikaanse rockzanger, gitarist en liedjesschrijver. Zijn bijnaam luidt The Boss.\r\n\r\nSpringsteen brak door met zijn derde album: Born to run (augustus 1975).', 'Donderdagen', 'Bruce_Springsteen.jpg', 'b.springstreen@rock.com', 4, 'NEE'),
('Eric Clapton', 'blues-, rock- en popmuziek.', 74, 'Eric Patrick Clapton is een Britse gitarist, componist en zanger van blues-, rock- en popmuziek.\r\n\r\nVlak na het uitbrengen van I Still Do maakt Clapton bekend aan een afwijking in het zenuwstelsel te lijden. Hierdoor wordt gitaar spelen lastiger en soms pijnlijk voor de gitarist. Clapton geeft aan te lijden aan schokjes van het bovenbeen naar de voeten.', 'Maandag', '640px-Eric_Clapton_live_on_acoustic_guitar.jpg', 'Clapton_official@gmail.com', 6, 'JA');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accounts`
--

CREATE TABLE `accounts` (
  `accountid` int(3) DEFAULT NULL,
  `naam` varchar(50) DEFAULT NULL,
  `wachtwoord` varchar(50) DEFAULT NULL,
  `admin` varchar(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `accounts`
--

INSERT INTO `accounts` (`accountid`, `naam`, `wachtwoord`, `admin`) VALUES
(1, 'Rick', 'wachtwoord', 'YES'),
(2, 'Jason', 'wachtwoord', 'YES'),
(3, 'Ruben', 'wachtwoord', 'YES'),
(4, 'test', 'test', 'NO');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tickets`
--

CREATE TABLE `tickets` (
  `naam` varchar(50) DEFAULT NULL,
  `plaats` varchar(150) DEFAULT NULL,
  `datum` varchar(50) DEFAULT NULL,
  `artiest` text,
  `beschrijving` text,
  `prijs` decimal(4,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tickets`
--

INSERT INTO `tickets` (`naam`, `plaats`, `datum`, `artiest`, `beschrijving`, `prijs`) VALUES
('jibirish naam', 'jibirishstraat 54', 'jibirish augustus', 'jibirish van der jibirish', 'beschrijving van jibirish', '99.99'),
('jebirish naam', 'jebirishstraat 54', 'jebirish augustus', 'jebirish van der jebirish', 'beschrijving van jebirish', '99.99');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `aanmelding`
--
ALTER TABLE `aanmelding`
  ADD PRIMARY KEY (`accountid`),
  ADD KEY `accountid` (`accountid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `aanmelding`
--
ALTER TABLE `aanmelding`
  MODIFY `accountid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
