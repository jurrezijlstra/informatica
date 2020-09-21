-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 08 sep 2020 om 12:38
-- Serverversie: 5.6.15-log
-- PHP-versie: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `top50`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `top50`
--

CREATE TABLE IF NOT EXISTS `top50` (
  `Name` tinytext NOT NULL,
  `BoxArt` text NOT NULL,
  `Publisher` tinytext NOT NULL,
  `ReleaseDate` date NOT NULL,
  `Sales` int(9) NOT NULL,
  `Genre` tinytext NOT NULL,
  `Platforms` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `top50`
--

INSERT INTO `top50` (`Name`, `BoxArt`, `Publisher`, `ReleaseDate`, `Sales`, `Genre`, `Platforms`) VALUES
('Minecraft', 'minecraft', 'Mojang Studios', '2011-11-18', 200000000, 'Sandbox', 'Windows, Xbox 360, Xbox One, PlayStation 3, PlayStation 4, Wii U, 3DS, Nintendo Switch, Android, iOS'),
('Grand Theft Auto V', 'gta_v', 'Rockstar Games', '2013-09-17', 135000000, 'Action-adventure', 'Windows, Xbox 360, Xbox One, PlayStation 3, PlayStation 4'),
('Tetris (EA)', 'tetris_ea', 'Electronic Arts', '2006-09-12', 100000000, 'Puzzle', 'Mobile, Android, iOS, PlayStation 3, PlayStation Portable'),
('Wii Sports', 'wii_sports', 'Nintendo', '2006-11-19', 82900000, 'Sports', 'Wii'),
('Player Unknown\'s Battlegrounds', 'pubg', 'PUBG Corporation', '2017-12-20', 70000000, 'Battle Royale', 'Windows, Xbox One, PS4, Android, iOS'),
('Super Mario Bros.', 'super_mario_bros', 'Nintendo', '1985-9-13', 47520000, 'Platformer', 'NES'),
('Pokémon Red / Green / Blue / Yellow', 'pokemon_red', 'Game Freak', '1996-2-27', 43800000, 'RPG', 'Game Boy'),
('Wii Fit', 'wii_fit', 'Nintendo', '2007-12-1', 43000000, 'Fitness', 'Wii'),
('Tetris (Nintendo)', 'tetris_nintendo', 'Nintendo', '1989-6-14', 3909800, 'Puzzle', 'Game Boy, NES');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
