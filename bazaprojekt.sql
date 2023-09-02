-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2023 at 02:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazaprojekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `dnevnaponuda`
--

CREATE TABLE `dnevnaponuda` (
  `ID` int(50) UNSIGNED NOT NULL,
  `Naziv` varchar(255) NOT NULL,
  `Cijena` decimal(5,2) NOT NULL,
  `IDJela` int(50) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategorijemenija`
--

CREATE TABLE `kategorijemenija` (
  `ID` int(11) NOT NULL,
  `Naziv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorijemenija`
--

INSERT INTO `kategorijemenija` (`ID`, `Naziv`) VALUES
(1, 'jelo'),
(2, 'pice');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `ID` int(50) UNSIGNED NOT NULL,
  `KorisnickoIme` varchar(255) NOT NULL,
  `Lozinka` varchar(255) NOT NULL,
  `Uloga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`ID`, `KorisnickoIme`, `Lozinka`, `Uloga`) VALUES
(29, 'admin@sum.ba', '123', 'Administrator'),
(34, 'registracija@sum.ba', '123', 'Administrator'),
(36, 'musterija@sum.ba', '123', 'Musterija'),
(46, 'bla@gmail.com', '123', 'Musterija'),
(47, 'blabla@gmail.com', '123', 'Musterija'),
(48, 'test@sum.ba', '123', 'Musterija'),
(49, 'test2@sum.ba', '123', 'Musterija'),
(50, 'mail@test.ba', '123', 'Musterija');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_01_23_190245_create_administrator_table', 0),
(2, '2021_01_23_190245_create_dnevnaponuda_table', 0),
(3, '2021_01_23_190245_create_jelo_table', 0),
(4, '2021_01_23_190245_create_korisnik_table', 0),
(5, '2021_01_23_190245_create_musterija_table', 0),
(6, '2021_01_23_190245_create_narudzba_table', 0),
(7, '2021_01_23_190245_create_pice_table', 0),
(8, '2021_01_23_190245_create_restoran_table', 0),
(9, '2021_01_23_190246_add_foreign_keys_to_administrator_table', 0),
(10, '2021_01_23_190246_add_foreign_keys_to_dnevnaponuda_table', 0),
(11, '2021_01_23_190246_add_foreign_keys_to_musterija_table', 0),
(12, '2021_01_23_190246_add_foreign_keys_to_narudzba_table', 0),
(13, '2021_01_23_190246_add_foreign_keys_to_restoran_table', 0);

-- --------------------------------------------------------

--
-- Table structure for table `musterija`
--

CREATE TABLE `musterija` (
  `ID` int(50) UNSIGNED NOT NULL,
  `Ime` varchar(255) NOT NULL,
  `Prezime` varchar(255) NOT NULL,
  `BrojTelefona` varchar(50) NOT NULL,
  `Adresa` varchar(255) NOT NULL,
  `IDKorisnika` int(50) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `musterija`
--

INSERT INTO `musterija` (`ID`, `Ime`, `Prezime`, `BrojTelefona`, `Adresa`, `IDKorisnika`) VALUES
(4, 'Mate', 'Matic', '', '', NULL),
(10, '', '', '', '', 29),
(15, 'Marko', 'Markić', '063/123-456', 'Adresa 99', 34),
(20, '', '', '', '', 46),
(21, '', '', '', '', 47),
(22, '', '', '', '', 48),
(23, '', '', '', '', 49),
(24, '', '', '', '', 50);

-- --------------------------------------------------------

--
-- Table structure for table `narudzbastavke`
--

CREATE TABLE `narudzbastavke` (
  `id` int(11) NOT NULL,
  `id_stavke` int(50) UNSIGNED NOT NULL,
  `id_narudzbe` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `narudzbastavke`
--

INSERT INTO `narudzbastavke` (`id`, `id_stavke`, `id_narudzbe`, `quantity`) VALUES
(1, 59, 1, 1),
(2, 61, 1, 1),
(3, 59, 2, 1),
(4, 60, 2, 1),
(5, 63, 3, 1),
(6, 55, 3, 1),
(7, 64, 4, 1),
(8, 64, 4, 1),
(9, 58, 4, 1),
(10, 60, 5, 1),
(11, 58, 6, 1),
(12, 64, 7, 1),
(13, 62, 7, 1),
(14, 58, 7, 1),
(15, 57, 7, 1),
(16, 60, 8, 1),
(17, 59, 8, 1),
(18, 61, 9, 1),
(19, 54, 9, 2),
(20, 61, 10, 1),
(21, 60, 11, 1),
(22, 61, 11, 2),
(23, 54, 12, 1),
(24, 58, 13, 1),
(25, 64, 14, 1),
(26, 54, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `narudzbe`
--

CREATE TABLE `narudzbe` (
  `ID` int(11) NOT NULL,
  `IDkorisnika` int(50) UNSIGNED NOT NULL,
  `vrijeme_narudzbe` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `narudzbe`
--

INSERT INTO `narudzbe` (`ID`, `IDkorisnika`, `vrijeme_narudzbe`) VALUES
(1, 50, '2023-09-01 22:38:26'),
(2, 50, '2023-09-01 22:43:58'),
(3, 50, '2023-09-01 22:47:43'),
(4, 50, '2023-09-01 22:48:42'),
(5, 50, '2023-09-01 22:50:45'),
(6, 50, '2023-09-01 22:51:00'),
(7, 50, '2023-09-01 22:53:17'),
(8, 50, '2023-09-01 22:57:12'),
(9, 50, '2023-09-02 11:30:25'),
(10, 50, '2023-09-02 13:48:02'),
(11, 50, '2023-09-02 13:58:55'),
(12, 29, '2023-09-02 13:59:17'),
(13, 50, '2023-09-02 14:10:04'),
(14, 50, '2023-09-02 14:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `stavkejelovnika`
--

CREATE TABLE `stavkejelovnika` (
  `ID` int(50) UNSIGNED NOT NULL,
  `Naziv` varchar(255) NOT NULL,
  `Cijena` decimal(5,2) NOT NULL,
  `ImageURL` varchar(255) DEFAULT NULL,
  `IDKategorije` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stavkejelovnika`
--

INSERT INTO `stavkejelovnika` (`ID`, `Naziv`, `Cijena`, `ImageURL`, `IDKategorije`) VALUES
(53, 'Sprite', '2.50', 'slike\\sprite1.jpg', 2),
(54, 'Fanta', '2.70', 'slike\\fanta1.jpg', 2),
(55, 'Coca-Cola Zero', '2.80', 'slike\\colazero.png', 2),
(56, 'Coca-Cola', '2.60', 'slike\\cola1.jpg', 2),
(57, 'Cedevita', '2.40', 'slike\\cedevita1.jpg', 2),
(58, '7UP', '2.30', 'slike\\7up.png', 2),
(59, 'Piletina Krilca', '7.50', 'slike\\wings1.jpg', 1),
(60, 'Pizza', '8.50', 'slike\\pizza.jpg', 1),
(61, 'Pileći Nuggetsi', '6.50', 'slike\\nuggets1.jpg', 1),
(62, 'Kebab', '9.00', 'slike\\kebab1.jpg', 1),
(63, 'Hamburger', '7.00', 'slike\\hamb1.jpg', 1),
(64, 'Cheeseburger', '7.50', 'slike\\cheeseburger1.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dnevnaponuda`
--
ALTER TABLE `dnevnaponuda`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDJela` (`IDJela`);

--
-- Indexes for table `kategorijemenija`
--
ALTER TABLE `kategorijemenija`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musterija`
--
ALTER TABLE `musterija`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDKorisnika` (`IDKorisnika`);

--
-- Indexes for table `narudzbastavke`
--
ALTER TABLE `narudzbastavke`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_stavke` (`id_stavke`),
  ADD KEY `id_narudzbe` (`id_narudzbe`);

--
-- Indexes for table `narudzbe`
--
ALTER TABLE `narudzbe`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDkorisnika` (`IDkorisnika`);

--
-- Indexes for table `stavkejelovnika`
--
ALTER TABLE `stavkejelovnika`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_stavke_kategorije` (`IDKategorije`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dnevnaponuda`
--
ALTER TABLE `dnevnaponuda`
  MODIFY `ID` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategorijemenija`
--
ALTER TABLE `kategorijemenija`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `ID` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `musterija`
--
ALTER TABLE `musterija`
  MODIFY `ID` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `narudzbastavke`
--
ALTER TABLE `narudzbastavke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `narudzbe`
--
ALTER TABLE `narudzbe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stavkejelovnika`
--
ALTER TABLE `stavkejelovnika`
  MODIFY `ID` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dnevnaponuda`
--
ALTER TABLE `dnevnaponuda`
  ADD CONSTRAINT `dpJelo` FOREIGN KEY (`IDJela`) REFERENCES `stavkejelovnika` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `musterija`
--
ALTER TABLE `musterija`
  ADD CONSTRAINT `musterijaKorisnikFK` FOREIGN KEY (`IDKorisnika`) REFERENCES `korisnik` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `narudzbastavke`
--
ALTER TABLE `narudzbastavke`
  ADD CONSTRAINT `narudzbastavke_ibfk_1` FOREIGN KEY (`id_stavke`) REFERENCES `stavkejelovnika` (`ID`),
  ADD CONSTRAINT `narudzbastavke_ibfk_2` FOREIGN KEY (`id_narudzbe`) REFERENCES `narudzbe` (`ID`);

--
-- Constraints for table `narudzbe`
--
ALTER TABLE `narudzbe`
  ADD CONSTRAINT `narudzbe_ibfk_1` FOREIGN KEY (`IDkorisnika`) REFERENCES `korisnik` (`ID`);

--
-- Constraints for table `stavkejelovnika`
--
ALTER TABLE `stavkejelovnika`
  ADD CONSTRAINT `fk_stavke_kategorije` FOREIGN KEY (`IDKategorije`) REFERENCES `kategorijemenija` (`ID`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
