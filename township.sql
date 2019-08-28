-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 28 aug 2019 om 20:09
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
  `beschrijving` varchar(500) DEFAULT NULL,
  `beschikbaar` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `accountid` int(3) NOT NULL,
  `geaccepteerd` varchar(20) DEFAULT 'NEE'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Tabelstructuur voor tabel `zaal`
--

CREATE TABLE `zaal` (
  `zaalnummer` varchar(5) DEFAULT NULL,
  `beschikbaarheid` varchar(20) DEFAULT NULL,
  `datum` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `zaal`
--

INSERT INTO `zaal` (`zaalnummer`, `beschikbaarheid`, `datum`) VALUES
('A1', 'beschikbaar', ''),
('A2', 'beschikbaar', ''),
('G1', 'beschikbaar', ''),
('G2', 'beschikbaar', ''),
('G3', 'beschikbaar', '');

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
  MODIFY `accountid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
