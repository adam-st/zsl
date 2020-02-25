-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Lut 2020, 14:49
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `komis`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `color` varchar(11) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `color`
--

INSERT INTO `color` (`id`, `color`) VALUES
(1, 'red'),
(2, 'blue'),
(3, 'green'),
(4, 'red');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `surname` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `birthday` date NOT NULL,
  `color` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `birthday`, `color`) VALUES
(0, 'Janusz', 'Nowak1', '2020-02-12', 0),
(1, 'Janusz', 'Kowalski', '2020-01-01', 1),
(2, 'Anna', 'Nowak', '2020-01-13', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `color` (`color`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
