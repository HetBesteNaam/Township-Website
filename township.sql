-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 aug 2019 om 23:39
-- Serverversie: 10.3.15-MariaDB
-- PHP-versie: 7.3.6

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
('Billy Joel', ' Rock / Soft Rock', 70, 'William Martin (Billy) Joel is een Amerikaanse pianist, singer-songwriter en componist. Vanaf 1972 produceerde hij popmuziekhits (begonnen met de single Nocturne) tot zijn afscheid in 1993. Daarna bleef hij optreden, naast het schrijven en opnemen van klassieke muziek.', 'Midweek', '266px-Billy_Joel_Shankbone_NYC_2009.jpg', 'Billyy420@yahoo.com', 5, 'JA'),
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
(3, 'Ruben', 'wachtwoord', 'YES');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `naam` varchar(50) DEFAULT NULL,
  `plaats` varchar(150) DEFAULT NULL,
  `datum` varchar(50) DEFAULT NULL,
  `tijd` text NOT NULL,
  `artiest` text DEFAULT NULL,
  `beschrijving` text DEFAULT NULL,
  `prijs` decimal(4,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tickets`
--

INSERT INTO `tickets` (`id`, `naam`, `plaats`, `datum`, `tijd`, `artiest`, `beschrijving`, `prijs`) VALUES
(12, 'Billy VS Eric SHOWDOWN', 'Poppodium Township', '2019-10-10', '10:00 - 22:00', 'Billy Joel\r\nEric Clapton', 'Eric slaat toe! deze show zit propvol met nieuwe liedjes van Eric Clapton en Billy Joel, en deze spannende show draait om de strijdt tussen Eric en Billy!\r\n', '70.00'),
(11, 'Eric Clapton Tonight', 'Poppodium Township', '2019-09-01', '20:30 - 22:00', 'Eric Clapton', 'Eric Clapton Tonight zal je geheid verassen! Eric is terug na een aantal jaar stilte, dus bereidt je voor!', '60.50'),
(10, 'Billy Joel show!', 'Poppodium Township', '2019-08-30', '22:30 - 10:00', 'Billy Joel', 'Bereid je voor op de meest spannende show van je leven! Billy Joel neemt je mee op een Once in a lifetime experience!', '40.00');

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
-- Indexen voor tabel `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `aanmelding`
--
ALTER TABLE `aanmelding`
  MODIFY `accountid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
