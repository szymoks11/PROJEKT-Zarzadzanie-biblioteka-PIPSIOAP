-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Gru 2022, 23:52
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `biblioteka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `id` int(11) NOT NULL,
  `tytul` varchar(256) NOT NULL,
  `data_wydania` datetime NOT NULL,
  `data_dodania` datetime NOT NULL DEFAULT current_timestamp(),
  `autor` varchar(256) NOT NULL,
  `numer_isbn` varchar(13) NOT NULL,
  `wypozyczona` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`id`, `tytul`, `data_wydania`, `data_dodania`, `autor`, `numer_isbn`, `wypozyczona`) VALUES
(1, 'Wesele', '2021-02-02 10:11:12', '2021-12-10 13:14:15', 'Stanisław Wyspiański', '1233211233', 0),
(2, 'Antygona', '2021-01-01 11:11:11', '2021-12-10 13:14:15', 'Sofokles', '1233211233', 0),
(3, 'Makbet', '2022-02-02 01:01:01', '2022-10-12 13:14:15', 'Wiliam Szekspir', '1233211233', 0),
(4, 'Katarynka', '2021-01-01 11:11:11', '2021-12-10 13:14:15', 'Bolesław Prus', '1233211233', 0),
(5, 'Hamlet', '2021-01-01 11:11:11', '2021-12-10 13:14:15', 'Wiliam Szekspir', '1233211233', 0),
(6, 'Dziady', '2021-01-01 11:11:11', '2021-12-10 13:14:15', 'Adam Mickiewicz', '1233211233', 0),
(7, 'Przedwiośnie', '2021-01-01 11:11:11', '2021-12-10 13:14:15', 'Stefan Żeromski', '1233211233', 0),
(8, 'Latarnik', '2021-01-01 11:11:11', '2021-12-10 13:14:15', 'Henryk Sienkiewicz', '1233211233', 0),
(9, 'Romeo i Julia', '2021-01-01 11:11:11', '2021-12-10 13:14:15', 'Wiliam Szekspir', '1233211233', 0),
(10, 'Lalka', '2022-12-12 12:12:12', '2022-12-12 12:12:12', 'Bolesław Prus', '1233211233', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
