-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Mar 2021, 20:09
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `czesci_komp`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `imie` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `login` varchar(20) NOT NULL,
  `haslo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`imie`, `email`, `login`, `haslo`) VALUES
('filip', 'filip@test.pl', 'filip', '1234'),
('filip1', 'filip1@test.pl', 'filip1', '12345'),
('filip2', 'filip2@test.pl', 'filip2', '12345567'),
('Adam', 'adam@jajka.pl', 'blondas', '1234'),
('Adam', 'adam@jajka.pl', 'blondas', '1234');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `kategoria` varchar(15) NOT NULL,
  `nazwa` varchar(20) NOT NULL,
  `cena` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`kategoria`, `nazwa`, `cena`, `ilosc`) VALUES
('monitor', 'lg', 699, 7),
('monitor', 'acer', 678, 6),
('mysz', 'tracer', 19, 19),
('mysz', 'apex', 289, 10),
('procesor', 'intel i7', 1159, 15),
('procesor', 'intel i9', 1379, 12),
('karta_graf', 'geforce gtx', 959, 27),
('karta_graf', 'rtx 6000', 22811, 5),
('głośniki', 'pioneer', 689, 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
