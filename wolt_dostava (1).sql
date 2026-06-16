-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 16. jun 2026 ob 09.55
-- Različica strežnika: 10.4.32-MariaDB
-- Različica PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `wolt_dostava`
--

-- --------------------------------------------------------

--
-- Struktura tabele `države`
--

CREATE TABLE `države` (
  `id` int(11) NOT NULL,
  `naziv` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Odloži podatke za tabelo `države`
--

INSERT INTO `države` (`id`, `naziv`) VALUES
(1, 'Slovenija');

-- --------------------------------------------------------

--
-- Struktura tabele `kategorije_restavracij`
--

CREATE TABLE `kategorije_restavracij` (
  `id` int(11) NOT NULL,
  `restavracije_id` int(11) NOT NULL,
  `ime` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Odloži podatke za tabelo `kategorije_restavracij`
--

INSERT INTO `kategorije_restavracij` (`id`, `restavracije_id`, `ime`) VALUES
(1, 1, 'Slovenska kuhinja'),
(2, 1, 'Dnevne malice'),
(3, 1, 'Domače jedi'),
(4, 2, 'Pizza'),
(5, 2, 'Italijanska kuhinja'),
(6, 2, 'Vegetarijansko'),
(7, 3, 'Kava'),
(8, 3, 'Sladice'),
(9, 3, 'Zajtrki'),
(10, 4, 'Bistro'),
(11, 4, 'Zdrava prehrana'),
(12, 4, 'Sladice'),
(13, 5, 'Slovenska kuhinja'),
(14, 5, 'Na žaru'),
(15, 5, 'Tradicionalne jedi'),
(16, 6, 'Azijska kuhinja'),
(17, 6, 'Kitajska hrana'),
(18, 6, 'Pekoče jedi');

-- --------------------------------------------------------

--
-- Struktura tabele `kosarica`
--

CREATE TABLE `kosarica` (
  `id` int(11) NOT NULL,
  `uporabniki_id` int(11) NOT NULL,
  `restavracije_id` int(11) NOT NULL,
  `status` varchar(200) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Odloži podatke za tabelo `kosarica`
--

INSERT INTO `kosarica` (`id`, `uporabniki_id`, `restavracije_id`, `status`, `menu_id`) VALUES
(10, 4, 4, 'oddana', NULL),
(11, 4, 1, 'oddana', NULL);

-- --------------------------------------------------------

--
-- Struktura tabele `kraji`
--

CREATE TABLE `kraji` (
  `id` int(11) NOT NULL,
  `naziv` varchar(100) DEFAULT NULL,
  `postna_st` varchar(100) DEFAULT NULL,
  `države_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Odloži podatke za tabelo `kraji`
--

INSERT INTO `kraji` (`id`, `naziv`, `postna_st`, `države_id`) VALUES
(1, 'Maribor', '2000', 1),
(2, 'Ljubljana', '1000', 1),
(3, '	kranj', '0', 1);

-- --------------------------------------------------------

--
-- Struktura tabele `menu_kategorije`
--

CREATE TABLE `menu_kategorije` (
  `id` int(11) NOT NULL,
  `naziv` varchar(200) NOT NULL,
  `restavracije_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Odloži podatke za tabelo `menu_kategorije`
--

INSERT INTO `menu_kategorije` (`id`, `naziv`, `restavracije_id`) VALUES
(15, 'Dnevne malice', 1),
(16, 'Juhe', 1),
(17, 'Pizze', 1),
(18, 'Solate', 1),
(19, 'Pizze', 2),
(20, 'Burgerji', 2),
(21, 'Testenine', 2),
(22, 'Vegetarijanske jedi', 2),
(23, 'Zajtrki', 3),
(24, 'Bistro jedi', 3),
(25, 'Glavne jedi', 3),
(26, 'Sladice', 3),
(27, 'Kava', 4),
(28, 'Topli napitki', 4),
(29, 'Sladice', 4),
(30, 'Hitri prigrizki', 4),
(31, 'Juhe', 5),
(32, 'Tradicionalne jedi', 5),
(33, 'Na žaru', 5),
(34, 'Priloge', 5),
(35, 'Predjedi', 6),
(36, 'Riževe jedi', 6),
(37, 'Rezanci', 6),
(38, 'Pekoče jedi', 6);

-- --------------------------------------------------------

--
-- Struktura tabele `menu_živil`
--

CREATE TABLE `menu_živil` (
  `id` int(11) NOT NULL,
  `restavracije_id` int(11) NOT NULL,
  `naziv` varchar(200) NOT NULL,
  `menu_kategorije_id` int(11) NOT NULL,
  `opis` varchar(200) NOT NULL,
  `ocena` decimal(10,2) NOT NULL,
  `na_voljo` tinyint(1) NOT NULL,
  `cena` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Odloži podatke za tabelo `menu_živil`
--

INSERT INTO `menu_živil` (`id`, `restavracije_id`, `naziv`, `menu_kategorije_id`, `opis`, `ocena`, `na_voljo`, `cena`) VALUES
(9, 1, 'Dunajski zrezek s krompirjem', 15, '', 0.00, 0, 10.00),
(10, 1, 'Svinjski golaž', 15, '', 0.00, 0, 9.50),
(11, 3, 'Piščančji zrezek s pomfrijem', 25, '', 0.00, 0, 11.00),
(12, 3, 'Rižota z gobami', 25, '', 0.00, 0, 10.50),
(13, 1, 'Goveja juha', 16, '', 0.00, 0, 4.00),
(14, 1, 'Gobova juha', 16, '', 0.00, 0, 4.50),
(16, 1, 'Pizza Margherita', 17, '', 0.00, 0, 8.50),
(17, 1, 'Pizza Šunka', 17, '', 0.00, 0, 9.00),
(20, 1, 'Solata s piščancem', 18, '', 0.00, 0, 7.50),
(21, 1, 'Mešana solata', 18, '', 0.00, 0, 4.50),
(23, 3, 'Francoski zajtrk', 23, '', 0.00, 0, 5.00),
(24, 3, 'Bianca zajtrk', 23, '', 0.00, 0, 7.50),
(25, 3, 'Piščančji wrap', 24, '', 0.00, 0, 8.50),
(26, 3, 'Club sendvič', 24, '', 0.00, 0, 8.00),
(27, 2, 'Cheeseburger', 20, '', 0.00, 0, 11.50),
(29, 2, 'Piščančji burger', 20, '', 0.00, 0, 11.00),
(30, 2, 'Testenine Carbonara', 21, '', 0.00, 0, 10.00),
(31, 2, 'Testenine Bolognese', 21, '', 0.00, 0, 9.50),
(33, 2, 'Vegetarijanska pizza', 22, '', 0.00, 0, 10.00),
(35, 2, 'Rižota z zelenjavo', 22, '', 0.00, 0, 9.50),
(48, 4, 'Espresso', 27, '', 0.00, 0, 2.00),
(49, 4, 'Cappuccino', 27, '', 0.00, 0, 2.80),
(51, 4, 'Vroča čokolada', 28, '', 0.00, 0, 3.50),
(52, 4, 'Čaj', 28, '', 0.00, 0, 2.50),
(54, 4, 'Čokoladna torta', 29, '', 0.00, 0, 4.50),
(55, 4, 'Cheesecake', 29, '', 0.00, 0, 4.80),
(57, 4, 'Toast šunka-sir', 30, '', 0.00, 0, 4.00),
(59, 4, 'Sendvič s piščancem', 30, '', 0.00, 0, 5.50),
(60, 5, 'Goveja juha', 31, '', 0.00, 0, 3.50),
(61, 5, 'Gobova juha', 31, '', 0.00, 0, 4.00),
(63, 5, 'Sarma', 32, '', 0.00, 0, 9.50),
(64, 5, 'Svinjska pečenka', 32, '', 0.00, 0, 10.50),
(66, 5, 'Čevapčiči', 33, '', 0.00, 0, 8.50),
(67, 5, 'Mešano meso na žaru', 33, '', 0.00, 0, 12.00),
(69, 5, 'Pomfrit', 34, '', 0.00, 0, 3.00),
(70, 5, 'Pražen krompir', 34, '', 0.00, 0, 3.50),
(103, 4, 'Bela kava', 27, '', 0.00, 0, 2.80),
(128, 6, 'Pekoča kisla juha', 35, '', 0.00, 0, 3.80),
(129, 6, 'Piščanec v sladko-kisli omaki', 35, '', 0.00, 0, 9.50),
(130, 6, 'Govedina z bambusom', 36, '', 0.00, 0, 10.50),
(131, 6, 'Ocvrti riž s piščancem', 36, '', 0.00, 0, 8.50);

-- --------------------------------------------------------

--
-- Struktura tabele `naročila`
--

CREATE TABLE `naročila` (
  `id` int(11) NOT NULL,
  `uporabniki_id` int(11) NOT NULL,
  `restavracije_id` int(11) NOT NULL,
  `naslovi_id` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `vse_skupaj` decimal(10,2) NOT NULL,
  `cena_dostave` decimal(10,2) NOT NULL,
  `skupna_cena` decimal(10,2) NOT NULL,
  `košarica_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Odloži podatke za tabelo `naročila`
--

INSERT INTO `naročila` (`id`, `uporabniki_id`, `restavracije_id`, `naslovi_id`, `status`, `vse_skupaj`, `cena_dostave`, `skupna_cena`, `košarica_id`) VALUES
(1, 4, 1, 1, 'oddano', 10.00, 2.50, 12.50, 10),
(2, 4, 1, 1, 'oddano', 14.00, 2.50, 16.50, 11);

-- --------------------------------------------------------

--
-- Struktura tabele `naslovi`
--

CREATE TABLE `naslovi` (
  `id` int(11) NOT NULL,
  `ulica` varchar(200) NOT NULL,
  `hisna_stevilka` varchar(200) NOT NULL,
  `kraji_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Odloži podatke za tabelo `naslovi`
--

INSERT INTO `naslovi` (`id`, `ulica`, `hisna_stevilka`, `kraji_id`) VALUES
(1, 'kosovelova', '2D', 1),
(2, '', '', 0),
(3, 'kranjska', '1234', 3),
(4, 'kranjska', '1234', 3);

-- --------------------------------------------------------

--
-- Struktura tabele `plačilo`
--

CREATE TABLE `plačilo` (
  `id` int(11) NOT NULL,
  `vrsta` varchar(200) NOT NULL,
  `znesek` decimal(10,2) NOT NULL,
  `naročila_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `restavracije`
--

CREATE TABLE `restavracije` (
  `id` int(11) NOT NULL,
  `ime` varchar(100) NOT NULL,
  `opis` varchar(200) NOT NULL,
  `slika` varchar(200) DEFAULT NULL,
  `cena_dostave` decimal(10,2) NOT NULL,
  `odprta` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Odloži podatke za tabelo `restavracije`
--

INSERT INTO `restavracije` (`id`, `ime`, `opis`, `slika`, `cena_dostave`, `odprta`) VALUES
(1, 'Kolodvorska restavracija Velenje', 'Restavracija z dnevnimi malicami, kosili in pizzami v centru Velenja.', 'kolodvorska.jpg', 2.50, 1),
(2, 'Pizzerija Basilica', 'Pizzerija z različnimi vrstami pizz, testenin in solat.', 'basilica.jpg', 3.00, 1),
(3, 'Bistro Bianca', 'Priljubljen bistro z zajtrki, kosili, sladicami in kavo.', 'bianca.jpg', 2.00, 1),
(4, 'Carlos Caffe', 'Kavarna z napitki, sladicami in hitrimi prigrizki.', 'carlos.jpg', 1.50, 1),
(5, 'Gostilna Verdelj', 'Tradicionalna slovenska gostilna z domačo hrano in jedmi z žara.', 'verdelj.jpg', 3.50, 1),
(6, 'Kitajska restavracija Pekinško mesto', 'Kitajska restavracija z azijskimi specialitetami in riževimi jedmi.', 'pekinsko_mesto.jpg', 4.00, 1);

-- --------------------------------------------------------

--
-- Struktura tabele `uporabniki`
--

CREATE TABLE `uporabniki` (
  `id` int(11) NOT NULL,
  `uporabniško_ime` varchar(200) NOT NULL,
  `geslo` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `profilna_slika` varchar(200) DEFAULT NULL,
  `naslovi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Odloži podatke za tabelo `uporabniki`
--

INSERT INTO `uporabniki` (`id`, `uporabniško_ime`, `geslo`, `mail`, `profilna_slika`, `naslovi_id`) VALUES
(4, 'lara', 'geslo', 'lara@gmail', NULL, 1),
(6, 'zdravo', 'gr', '', NULL, 2),
(7, 'koren', 'geslo', 'jada@sdf.com', NULL, 3),
(8, 'koren', 'geslo', 'teo.ramsak@gmail', NULL, 4);

-- --------------------------------------------------------

--
-- Struktura tabele `vsebina_kosarice`
--

CREATE TABLE `vsebina_kosarice` (
  `id` int(11) NOT NULL,
  `kosarica_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `kolicina` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Odloži podatke za tabelo `vsebina_kosarice`
--

INSERT INTO `vsebina_kosarice` (`id`, `kosarica_id`, `menu_id`, `kolicina`) VALUES
(7, 10, 9, 1),
(8, 11, 9, 1),
(9, 11, 13, 1);

-- --------------------------------------------------------

--
-- Struktura tabele `vsebina_košarice`
--

CREATE TABLE `vsebina_košarice` (
  `id` int(11) NOT NULL,
  `košarica_id` int(11) NOT NULL,
  `količina` varchar(200) DEFAULT NULL,
  `opombe` varchar(200) DEFAULT NULL,
  `menu_živil_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `države`
--
ALTER TABLE `države`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi tabele `kategorije_restavracij`
--
ALTER TABLE `kategorije_restavracij`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategorije_restavracij_fkey_2` (`restavracije_id`);

--
-- Indeksi tabele `kosarica`
--
ALTER TABLE `kosarica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `košarica_fkey_1` (`uporabniki_id`),
  ADD KEY `košarica_fkey_2` (`restavracije_id`);

--
-- Indeksi tabele `kraji`
--
ALTER TABLE `kraji`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kraji_fkey_1` (`države_id`);

--
-- Indeksi tabele `menu_kategorije`
--
ALTER TABLE `menu_kategorije`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_kategorij_fkey_1` (`restavracije_id`);

--
-- Indeksi tabele `menu_živil`
--
ALTER TABLE `menu_živil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_živil_fkey_1` (`menu_kategorije_id`);

--
-- Indeksi tabele `naročila`
--
ALTER TABLE `naročila`
  ADD PRIMARY KEY (`id`),
  ADD KEY `naročila_fkey_1` (`uporabniki_id`),
  ADD KEY `naročila_fkey_2` (`restavracije_id`),
  ADD KEY `naročila_fkey_3` (`naslovi_id`),
  ADD KEY `naročila_fkey_4` (`košarica_id`);

--
-- Indeksi tabele `naslovi`
--
ALTER TABLE `naslovi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `naslovi_fkey_1` (`kraji_id`);

--
-- Indeksi tabele `plačilo`
--
ALTER TABLE `plačilo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plačilo_fkey_3` (`naročila_id`);

--
-- Indeksi tabele `restavracije`
--
ALTER TABLE `restavracije`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi tabele `uporabniki`
--
ALTER TABLE `uporabniki`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uporabniki_fkey_1` (`naslovi_id`);

--
-- Indeksi tabele `vsebina_kosarice`
--
ALTER TABLE `vsebina_kosarice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kosarica_id` (`kosarica_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeksi tabele `vsebina_košarice`
--
ALTER TABLE `vsebina_košarice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vsebina_košarice_fkey_1` (`košarica_id`),
  ADD KEY `vsebina_košarice_fkey_2` (`menu_živil_id`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `kategorije_restavracij`
--
ALTER TABLE `kategorije_restavracij`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT tabele `kosarica`
--
ALTER TABLE `kosarica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT tabele `kraji`
--
ALTER TABLE `kraji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT tabele `menu_kategorije`
--
ALTER TABLE `menu_kategorije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT tabele `menu_živil`
--
ALTER TABLE `menu_živil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT tabele `naročila`
--
ALTER TABLE `naročila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT tabele `naslovi`
--
ALTER TABLE `naslovi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT tabele `plačilo`
--
ALTER TABLE `plačilo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT tabele `restavracije`
--
ALTER TABLE `restavracije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT tabele `uporabniki`
--
ALTER TABLE `uporabniki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT tabele `vsebina_kosarice`
--
ALTER TABLE `vsebina_kosarice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT tabele `vsebina_košarice`
--
ALTER TABLE `vsebina_košarice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Omejitve tabel za povzetek stanja
--

--
-- Omejitve za tabelo `kategorije_restavracij`
--
ALTER TABLE `kategorije_restavracij`
  ADD CONSTRAINT `kategorije_restavracij_fkey_2` FOREIGN KEY (`restavracije_id`) REFERENCES `restavracije` (`id`);

--
-- Omejitve za tabelo `kosarica`
--
ALTER TABLE `kosarica`
  ADD CONSTRAINT `košarica_fkey_1` FOREIGN KEY (`uporabniki_id`) REFERENCES `uporabniki` (`id`),
  ADD CONSTRAINT `košarica_fkey_2` FOREIGN KEY (`restavracije_id`) REFERENCES `restavracije` (`id`);

--
-- Omejitve za tabelo `kraji`
--
ALTER TABLE `kraji`
  ADD CONSTRAINT `kraji_fkey_1` FOREIGN KEY (`države_id`) REFERENCES `države` (`id`);

--
-- Omejitve za tabelo `menu_kategorije`
--
ALTER TABLE `menu_kategorije`
  ADD CONSTRAINT `menu_kategorij_fkey_1` FOREIGN KEY (`restavracije_id`) REFERENCES `restavracije` (`id`);

--
-- Omejitve za tabelo `menu_živil`
--
ALTER TABLE `menu_živil`
  ADD CONSTRAINT `menu_živil_fkey_1` FOREIGN KEY (`menu_kategorije_id`) REFERENCES `menu_kategorije` (`id`);

--
-- Omejitve za tabelo `naročila`
--
ALTER TABLE `naročila`
  ADD CONSTRAINT `naročila_fkey_1` FOREIGN KEY (`uporabniki_id`) REFERENCES `uporabniki` (`id`),
  ADD CONSTRAINT `naročila_fkey_2` FOREIGN KEY (`restavracije_id`) REFERENCES `restavracije` (`id`),
  ADD CONSTRAINT `naročila_fkey_3` FOREIGN KEY (`naslovi_id`) REFERENCES `naslovi` (`id`),
  ADD CONSTRAINT `naročila_fkey_4` FOREIGN KEY (`košarica_id`) REFERENCES `kosarica` (`id`);

--
-- Omejitve za tabelo `plačilo`
--
ALTER TABLE `plačilo`
  ADD CONSTRAINT `plačilo_fkey_3` FOREIGN KEY (`naročila_id`) REFERENCES `naročila` (`id`);

--
-- Omejitve za tabelo `uporabniki`
--
ALTER TABLE `uporabniki`
  ADD CONSTRAINT `uporabniki_fkey_1` FOREIGN KEY (`naslovi_id`) REFERENCES `naslovi` (`id`);

--
-- Omejitve za tabelo `vsebina_kosarice`
--
ALTER TABLE `vsebina_kosarice`
  ADD CONSTRAINT `vsebina_kosarice_ibfk_1` FOREIGN KEY (`kosarica_id`) REFERENCES `kosarica` (`id`),
  ADD CONSTRAINT `vsebina_kosarice_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menu_živil` (`id`);

--
-- Omejitve za tabelo `vsebina_košarice`
--
ALTER TABLE `vsebina_košarice`
  ADD CONSTRAINT `vsebina_košarice_fkey_1` FOREIGN KEY (`košarica_id`) REFERENCES `kosarica` (`id`),
  ADD CONSTRAINT `vsebina_košarice_fkey_2` FOREIGN KEY (`menu_živil_id`) REFERENCES `menu_živil` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
