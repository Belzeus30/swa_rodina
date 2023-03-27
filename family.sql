-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pon 27. bře 2023, 11:27
-- Verze serveru: 10.1.31-MariaDB
-- Verze PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `family`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `family`
--

CREATE TABLE `family` (
  `ID` int(11) NOT NULL,
  `plat_1` int(11) NOT NULL,
  `plat_2` int(11) NOT NULL,
  `jedno_prijem` int(11) NOT NULL,
  `investice` int(11) NOT NULL,
  `najem` int(11) NOT NULL,
  `inkaso` int(11) NOT NULL,
  `jidlo` int(11) NOT NULL,
  `telekomunikace` int(11) NOT NULL,
  `konicky` int(11) NOT NULL,
  `vylety` int(11) NOT NULL,
  `vzdelani` int(11) NOT NULL,
  `kcelkem` int(11) NOT NULL,
  `ksplatka` int(11) NOT NULL,
  `hcelkem` int(11) NOT NULL,
  `hsplatka` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
