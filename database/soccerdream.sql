-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Kwi 2019, 22:50
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `soccerdream`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `quest`
--

CREATE TABLE `quest` (
  `id` int(11) NOT NULL,
  `nazwa` text NOT NULL,
  `atrybut` text NOT NULL,
  `opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `quest`
--

INSERT INTO `quest` (`id`, `nazwa`, `atrybut`, `opis`) VALUES
(1, 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nick` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `password` text COLLATE utf8_polish_ci NOT NULL,
  `avatar` text COLLATE utf8_polish_ci NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `birth_date` text COLLATE utf8_polish_ci NOT NULL,
  `nationality` text COLLATE utf8_polish_ci NOT NULL,
  `description` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `nick`, `email`, `password`, `avatar`, `name`, `birth_date`, `nationality`, `description`) VALUES
(2, 'kamil', 'kamil@123.pl', '12345678', 'url(\"./image/avatars/avatar2-2-1.png\")', 'sdfgdfg', '2019-03-13', 'Polska', 'sdfsdf'),
(3, 'tomek', 'tomek123@123.pl', '12345678', '1', '', '0000-00-00', '', ''),
(4, 'Damian', 'damian@123.pl', '12345678', 'url(\"./image/avatars/avatar3-2-1.png\")', 'Damian', '2019-03-13', 'Polska', 'Czesc'),
(5, 'Rafon', 'rafon@123.pl', '12345678', 'url(\"./image/avatars/avatar3-1-1.png\")', 'Rafoniks', '2019-03-22', 'Nibber', 'Nibber with n-pass');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `quest`
--
ALTER TABLE `quest`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `quest`
--
ALTER TABLE `quest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
