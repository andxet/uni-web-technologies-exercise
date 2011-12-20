-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: 20 dic, 2011 at 04:54 PM
-- Versione MySQL: 5.5.9
-- Versione PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `Sito04_718024`
--
CREATE DATABASE `Sito04_718024` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Sito04_718024`;

-- --------------------------------------------------------

--
-- Struttura della tabella `Dischi`
--

CREATE TABLE `Dischi` (
  `Nome` varchar(60) NOT NULL COMMENT 'Nome dell''album',
  `Anno` int(10) unsigned NOT NULL COMMENT 'Anno dell''album'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Dischi`
--

INSERT INTO `Dischi` VALUES('High Voltage', 1975);
INSERT INTO `Dischi` VALUES('T.N.T.', 1975);
INSERT INTO `Dischi` VALUES('High Voltage', 1976);
INSERT INTO `Dischi` VALUES('Dirty Deeds Done Dirt Cheap', 1976);
INSERT INTO `Dischi` VALUES('Let There Be Rock', 1977);
INSERT INTO `Dischi` VALUES('Powerage', 1978);
INSERT INTO `Dischi` VALUES('If You Want Blood You''ve Got It', 1978);
INSERT INTO `Dischi` VALUES('Highway to Hell', 1979);
INSERT INTO `Dischi` VALUES('Back in Black', 1980);
INSERT INTO `Dischi` VALUES('For Those About to Rock We Salute You', 1981);
INSERT INTO `Dischi` VALUES('Flick of the Switch', 1983);
INSERT INTO `Dischi` VALUES('''74 Jailbreak', 1984);
INSERT INTO `Dischi` VALUES('Fly on the Wall', 1985);
INSERT INTO `Dischi` VALUES('Who Made Who', 1986);
INSERT INTO `Dischi` VALUES('Blow Up Your Video', 1988);
INSERT INTO `Dischi` VALUES('The Razors Edge', 1990);
INSERT INTO `Dischi` VALUES('AC/DC Live', 1992);
INSERT INTO `Dischi` VALUES('Ballbreaker', 1995);
INSERT INTO `Dischi` VALUES('Stiff Upper Lip', 2000);
INSERT INTO `Dischi` VALUES('Black Ice', 2008);
INSERT INTO `Dischi` VALUES('AC/DC: Iron Man 2', 2010);

-- --------------------------------------------------------

--
-- Struttura della tabella `Menu`
--

CREATE TABLE `Menu` (
  `posizione` int(10) unsigned NOT NULL,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`posizione`),
  UNIQUE KEY `posizione` (`posizione`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Menu`
--

INSERT INTO `Menu` VALUES(0, 'Menu');
INSERT INTO `Menu` VALUES(1, 'Lineup');

-- --------------------------------------------------------

--
-- Struttura della tabella `Pagine`
--

CREATE TABLE `Pagine` (
  `posizione` int(10) unsigned NOT NULL,
  `nome` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL,
  `menu` int(11) NOT NULL,
  `titolo` varchar(50) NOT NULL,
  PRIMARY KEY (`posizione`),
  UNIQUE KEY `posizione` (`posizione`),
  UNIQUE KEY `link` (`link`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Pagine`
--

INSERT INTO `Pagine` VALUES(0, 'Story', 'index.php', 0, 'AC/DC fan page');
INSERT INTO `Pagine` VALUES(1, 'Albums', 'albums.php', 0, 'Albums');
INSERT INTO `Pagine` VALUES(2, 'Newsletter', 'newsletter.php', 0, 'Newsletter');
INSERT INTO `Pagine` VALUES(3, 'Galleria', 'photo.php', 0, 'Galleria');
INSERT INTO `Pagine` VALUES(4, 'Brian Johnson', 'artisti.php?artista=brian', 1, 'Brian Johnson');
INSERT INTO `Pagine` VALUES(5, 'Angus Young', 'artisti.php?artista=angus', 1, 'Angus Young');
INSERT INTO `Pagine` VALUES(6, 'Malcolm Young', 'artisti.php?artista=malcolm', 1, 'Malcolm Young');
INSERT INTO `Pagine` VALUES(7, 'Phil Rudd', 'artisti.php?artista=phil', 1, 'Phil Rudd');
