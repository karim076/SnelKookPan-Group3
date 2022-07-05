-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 05 jul 2022 om 13:39
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snelkookpan`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `huisinfo`
--

CREATE TABLE `huisinfo` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `omgeving` varchar(150) NOT NULL,
  `prijs` float NOT NULL,
  `formaat` int(150) NOT NULL,
  `slaapkamers` text NOT NULL,
  `gasten` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `huisinfo`
--

INSERT INTO `huisinfo` (`id`, `img`, `omgeving`, `prijs`, `formaat`, `slaapkamers`, `gasten`) VALUES
(1, 'huis.jpg', 'Breda', 12.55, 40, '3', '2'),
(2, '', 'Breda', 255, 20, '6', '10');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `pass`, `email`, `status`) VALUES
(1, 'Karim', 'Karim076', '$2y$10$6li6tekW0ibrzXfKiqosNewt1f5uAiRq8naTla8kk68/ymhxrxASC', 'D287878@edu.rocwb.nl', 0),
(2, 'Karim', 'Karim076', '$2y$10$FGoh5wNqjYhULbPAyIPMOec0CL6QwMcUZDvh4gKE2bzhZMKWTy1wC', 'D287878@edu.rocwb.nl', 0),
(3, 'Karim', 'user1', '$2y$10$G4URmLlXdZ53wmkcmgQWpeQBZMLgBW2ke0iasSVZR1jCLG1j/2e7a', 'D287878@edu.rocwb.nl', 2),
(4, '123', 'karim', '$2y$10$tPYiMo9ZDO48fbSmjP8UWutqKwfD8dr1cm3SyL.p3fduvbFaf66z2', 'walidkiller8@gmail.com', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservering`
--

CREATE TABLE `reservering` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `datum` text NOT NULL,
  `personen` int(11) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `straatnaam` int(11) NOT NULL,
  `nummer` int(11) NOT NULL,
  `vraag` text NOT NULL,
  `order_number` int(11) NOT NULL,
  `status` varchar(150) NOT NULL DEFAULT 'inbehandeling'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `reservering`
--

INSERT INTO `reservering` (`id`, `email`, `datum`, `personen`, `adress`, `straatnaam`, `nummer`, `vraag`, `order_number`, `status`) VALUES
(2, 'D287878@edu.rocwb.nl', '07/04/2022 - 07/04/2022', 1, 'asdwasd', 0, 1234, '34', 6828, 'inbehandeling'),
(3, 'D287878@edu.rocwb.nl', '07/04/2022 - 07/04/2022', 1, 'asdasd', 0, 123, 'asasda', 7279, 'inbehandeling'),
(4, 'D287878@edu.rocwb.nl', '07/04/2022 - 07/04/2022', 1, 'asdasd', 0, 123, 'asdasd', 5574, 'inbehandeling'),
(5, 'D287878@edu.rocwb.nl', '07/04/2022 - 07/04/2022', 1, 'asdas', 0, 123, 'asdasd', 9244, 'inbehandeling'),
(6, 'D287878@edu.rocwb.nl', '07/04/2022 - 07/04/2022', 1, '123', 123, 0, 'asdasd', 5235, 'inbehandeling'),
(7, 'D287878@edu.rocwb.nl', '07/04/2022 - 07/04/2022', 1, 'asd', 0, 123, '234', 5655, 'inbehandeling'),
(8, 'D287878@edu.rocwb.nl', '07/04/2022 - 07/04/2022', 1, 'd', 0, 0, '12314', 1767, 'inbehandeling'),
(9, 'D287878@edu.rocwb.nl', '07/04/2022 - 07/04/2022', 1, 'sadas', 0, 0, 'asdasd', 3300, 'inbehandeling');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `huisinfo`
--
ALTER TABLE `huisinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `reservering`
--
ALTER TABLE `reservering`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_number` (`order_number`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `huisinfo`
--
ALTER TABLE `huisinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `reservering`
--
ALTER TABLE `reservering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
