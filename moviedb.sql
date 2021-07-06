-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Cze 2020, 08:19
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `moviedb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comment`
--

CREATE TABLE `comment` (
  `idcomment` int(11) NOT NULL,
  `text` text NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `movie_idmovie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `history`
--

CREATE TABLE `history` (
  `idhistory` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idmovie` int(11) NOT NULL,
  `hdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `history`
--

INSERT INTO `history` (`idhistory`, `iduser`, `idmovie`, `hdate`) VALUES
(1, 4, 4, '2020-06-02 00:00:00'),
(2, 4, 6, '2020-06-29 14:15:42'),
(3, 4, 7, '2020-06-29 14:15:47'),
(4, 4, 2, '2020-06-29 14:15:50'),
(5, 4, 5, '2020-06-29 14:17:06'),
(6, 4, 5, '2020-06-29 14:17:14'),
(7, 4, 3, '2020-06-29 17:55:07'),
(8, 4, 1, '2020-06-29 19:41:38'),
(9, 4, 1, '2020-06-29 19:43:54'),
(10, 4, 2, '2020-06-29 19:46:28'),
(11, 4, 1, '2020-06-29 19:52:31'),
(12, 4, 2, '2020-06-29 19:58:04'),
(13, 4, 2, '2020-06-29 21:18:26'),
(14, 4, 9, '2020-06-29 21:18:51'),
(15, 4, 1, '2020-06-29 21:21:09'),
(16, 18, 13, '2020-06-29 22:19:28'),
(17, 18, 1, '2020-06-29 22:19:36'),
(18, 4, 5, '2020-06-30 08:14:24');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `movie`
--

CREATE TABLE `movie` (
  `idmovie` int(11) NOT NULL,
  `rate` double NOT NULL,
  `popular` tinyint(4) NOT NULL,
  `famous_actors` mediumtext NOT NULL,
  `description` longtext NOT NULL,
  `length` smallint(4) NOT NULL,
  `title` varchar(45) NOT NULL,
  `genre` varchar(45) NOT NULL,
  `checked` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `movie`
--

INSERT INTO `movie` (`idmovie`, `rate`, `popular`, `famous_actors`, `description`, `length`, `title`, `genre`, `checked`) VALUES
(1, 0, 0, ' Robert De Niro,  Al Pacino, Kevin Spacey\r\n\r\n', 'Ta historia zdarzyła się naprawdę. Sparaliżowany na skutek wypadku milioner zatrudnia do pomocy i opieki młodego chłopaka z przedmieścia, który właśnie wyszedł z więzienia. Zderzenie dwóch skrajnie różnych światów daje początek szeregowi niewiarygodnych przygód i przyjaźni, która czyni ich... nietykalnymi.', 127, 'Nietykalni', 'sci-fi', 't'),
(2, 0, 0, 'Morgan Freeman, Tim Robbins', 'Film nakręcony na podstawie książki mistrza horrorów Stephena Kinga. Andy Dufresne (Tim Robbins), dobrze zarabiający bankier z Nowej Anglii, zostaje oskarżony o podwójne zabójstwo - swojej żony i jej kochanka. Uparcie twierdzi, że jest niewinny, ale dzięki niezbitym dowodom zostaje skazany na podwójne dożywocie w więzieniu Shawshank.', 156, 'Skazani na Shawshank', 'przygodowe', 't'),
(3, 0, 0, 'Tom Hanks', 'Rok 1935. Paul Edgecombe (Tom Hanks) jest jednym ze strażników bloku śmierci w więzieniu Cold Mountain. Do jego obowiązków należy odprowadzanie skazańców do celi śmierci długim korytarzem, wyłożonym zieloną wykładziną, zwaną \"Zieloną milą\". ', 345, 'Zielona mila', 'komedia', 't'),
(4, 0, 0, 'Tom Hanks', '\"Forrest Gump\" to romantyczna historia, w której Tom Hanks wcielił się w tytułową postać - nierozgarniętego młodego człowieka o wielkim sercu i zdolności do odnajdywania się w największych wydarzeniach w historii USA, począwszy od swego dzieciństwa w latach 50-tych. ', 147, 'Forrest Gump', 'dramat', 't'),
(5, 0, 0, 'Elijah Wood, Viggo Mortensen', 'Zwieńczenie filmowej trylogii wg powieści Tolkiena. Aragorn jednoczy siły Śródziemia, szykując się do bitwy, która ma odwrócić uwagę Saurona od podążających w kierunku Góry Przeznaczenia hobbitów.', 241, 'Władca Pierścieni: Powrót króla', 'horror', 't'),
(6, 0, 0, 'Joaquin Phoenix', 'Historia jednego z cieszących się najgorszą sławą superprzestępców uniwersum DC — Jokera. Przedstawiony przez Phillipsa obraz śledzi losy kultowego czarnego charakteru, człowieka zepchniętego na margines. To nie tylko kontrowersyjne studium postaci, ale także opowieść ku przestrodze w szerszym kontekście.', 222, 'Joker', 'dramat', 't'),
(7, 0, 0, 'Adrien Brody', 'Ekranizacja wspomnień Władysława Szpilmana. W roli głównej Adrien Brody (\"Cienka czerwona linia\", \"Mordercze lato\").  Władysław Szpilman, wybitny polski pianista żydowskiego pochodzenia żyje w warszawskim getcie. ', 1234, 'Pianista', 'dramat', 't'),
(8, 0, 0, 'Matthew Broderick, Moira Kelly', 'Film opowiada o losach Simby, młodego lwa, który - oskarżony o nieumyślne zabójstwo swojego ojca, króla Lwiej Skały - zostaje skazany na wygnanie. Władzę w królestwie obejmuje Skaza, brat zmarłego władcy. Mija kilka lat. Pewnego dnia Simba spotyka dawną przyjaciółkę, od której dowiaduje się, że królestwo chyli się ku upadkowi. Młody następca tronu postanawia powrócić do dawnej ojczyzny i odzyskać zabrany mu podstępem tron.', 12313, 'Król Lew', 'przyrodnicze', 'u'),
(9, 0, 0, '32131231', '312312312', 312, '1231231231', 'familijny', 't'),
(10, 0, 0, '324523t34', 't234314534gtw3', 323, '342', '', 'u'),
(11, 0, 0, '34rt234512r', 'ergrehywttehg', 652, '5134513tgfr', '', 'u'),
(12, 0, 0, '2341241243', 'ertgwrethaerg', 222, '4563456', '', 'u'),
(13, 0, 0, 'Julia Roberts', 'blabla', 120, 'Pretty woman', '', 'u'),
(14, 0, 0, 'aktor', 'opis', 111, 'tytul', 'akcja', 'n'),
(15, 0, 0, '1234', '1234', 1234, '1234', 'musical', 'n'),
(16, 0, 0, 'kto', 'opis1', 222, 'jakisfilm', 'fantasy', 'n'),
(17, 0, 0, 'yeti', 'byl sobie yeti', 12345, 'yeti', 'sci-fi', 'n'),
(18, 0, 0, 'Tom Hanks', 'była sobie mumia', 555, 'Mumia', 'musical', 'n'),
(19, 0, 0, 'iiiii', 'iiiii', 236, 'iiiii', 'akcja', 'n');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `login` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nick` varchar(45) NOT NULL,
  `rang` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL,
  `stan` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`iduser`, `email`, `login`, `password`, `nick`, `rang`, `role`, `stan`) VALUES
(1, 'adminmail@gmail.com', 'admin', 'admin', 'Administrator', 'Administrator', 'admin', 'a'),
(2, 'moderatormail@gmail.com', 'mod', 'mod', 'Moderator', 'Moderator', 'mod', 'a'),
(3, 'usermail@gmail.com', 'user', 'user', 'User', 'User', 'user', 'a'),
(4, 'wymieniekonto12345@wp.pl', 'adammh', '1234', 'adam23', 'User', 'user', 'a'),
(11, '1243124@214312', 'admin', '412341234', 'kolegaaa', 'User', 'user', 'a'),
(12, '231451254152342@12341243', '3241242', '123412431243', 'supertyp', 'User', 'user', 'a'),
(17, '234112431@231412', '12341234', '412341234123', '12341234124', 'User', 'user', 'a'),
(18, 'kasia@op.pl', 'kasiamh', 'Tomasz24!', 'Kasia', 'User', 'user', 'a');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`),
  ADD KEY `fk_comment_user1_idx` (`user_iduser`),
  ADD KEY `fk_comment_movie1_idx` (`movie_idmovie`);

--
-- Indeksy dla tabeli `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`idhistory`),
  ADD KEY `fk_history_user_idx` (`iduser`),
  ADD KEY `fk_history_movie1_idx` (`idmovie`);

--
-- Indeksy dla tabeli `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`idmovie`),
  ADD KEY `idx_movie_rate` (`rate`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `idx_user_login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `history`
--
ALTER TABLE `history`
  MODIFY `idhistory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT dla tabeli `movie`
--
ALTER TABLE `movie`
  MODIFY `idmovie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_movie1` FOREIGN KEY (`movie_idmovie`) REFERENCES `movie` (`idmovie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comment_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `fk_history_movie1` FOREIGN KEY (`idmovie`) REFERENCES `movie` (`idmovie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_history_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
