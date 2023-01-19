-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 18, 2023 at 04:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `games`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `developer` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `platform` varchar(100) NOT NULL,
  `release_date` date NOT NULL,
  `cover` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `developer`, `publisher`, `genre`, `platform`, `release_date`, `cover`) VALUES
(1, 'Pokemon Platinum', 'Game Freak', 'Nintendo', 'Adventure', 'Nintendo DS', '2009-03-22', 'pokemon.jpg'),
(2, 'Clash of Clans', 'Supercell', 'Supercell', 'Strategy', 'Mobile', '2012-08-02', 'coc.jpeg'),
(3, 'Tekken 7', 'Bandai Namco', 'Bandai Namco', 'Fighting', 'Playstation, PC, Xbox', '2015-03-18', 'tekken.jpg'),
(4, 'Stardew Valley', 'ConcernedApe', 'Chucklefish', 'Simulator', 'PC, Nintendo Switch, Playstation, Xbox, Mobile', '2016-02-25', 'stardew.jpeg'),
(5, 'Resident Evil 4', 'Capcom', 'Ubisoft', 'Survival Horror', 'Playstation, Xbox, PC', '2014-02-28', 're4.jpg'),
(6, 'Kingdom Hearts III', 'Square Enix', 'Square Enix', 'RPG', 'Playstation, Xbox, PC', '2019-01-25', 'kh.jpeg'),
(7, 'The Elder Scroll V : Skyrim', 'Bethesda Game Studio', 'Bethesda Softworks', 'RPG', 'Playstation, Xbox, PC', '2011-11-11', 'skyrim.jpg'),
(8, 'The Last of Us', 'Naughty Dog', 'Sony Computer Entertainment', 'Action', 'Playstation', '2013-06-14', 'tlou.jpg'),
(9, 'Final Fantasy X | X-2 : HD Resmaster', 'Square Enix', 'Square Enix', 'RPG', 'Playstation, PC', '2013-12-26', 'ffx.jpeg'),
(10, 'Alien: Isolation', 'SEGA', 'Feral Interactive', 'Survival Horror', 'Playstation, Xbox, PC', '2014-10-05', 'alien.jpeg'),
(23, 'Dead Space', 'Electronic Arts', 'Electronic Arts', 'Survival Horror', 'Playstation, Xbox, PC', '2008-10-13', 'deadspace.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'yogiealfin', '$2y$10$RlZaj.rdQGFu5agYihF6zuRoPPfDKOI.CjoaqEHxmeertgDqR1Bbi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
