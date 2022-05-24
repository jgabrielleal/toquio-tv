-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Maio-2022 às 21:35
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `toquiotv`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `original`
--

DROP TABLE IF EXISTS `original`;
CREATE TABLE IF NOT EXISTS `original` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `endereco` varchar(255) COLLATE utf8_bin NOT NULL,
  `destaque` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `original`
--

INSERT INTO `original` (`id`, `nome`, `endereco`, `destaque`) VALUES
(4, 'teste', 'https://rumble.com/embed/v13cgi5/?pub=4', 'Nao'),
(5, 'teste', 'https://rumble.com/embed/v13cgi5/?pub=4', 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `personalize`
--

DROP TABLE IF EXISTS `personalize`;
CREATE TABLE IF NOT EXISTS `personalize` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personalize_01` varchar(255) COLLATE utf8_bin NOT NULL,
  `personalize_02` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `personalize`
--

INSERT INTO `personalize` (`id`, `personalize_01`, `personalize_02`) VALUES
(1, 'https://i.imgur.com/Fq77ICD.jpg', 'https://i.imgur.com/lFT0QAI.jpg'),
(2, 'https://i.imgur.com/szmUuAV.jpg', ''),
(3, 'https://i.imgur.com/3aJ5eGQ.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `programa` varchar(255) COLLATE utf8_bin NOT NULL,
  `banner` varchar(255) COLLATE utf8_bin NOT NULL,
  `horario_site` varchar(255) COLLATE utf8_bin NOT NULL,
  `horario_sistema` varchar(255) COLLATE utf8_bin NOT NULL,
  `periodo` varchar(255) COLLATE utf8_bin NOT NULL,
  `destaque` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `schedule`
--

INSERT INTO `schedule` (`id`, `programa`, `banner`, `horario_site`, `horario_sistema`, `periodo`, `destaque`) VALUES
(5, 'tete', '', '10:00h, 10:00h, 10:00h, 10:00h', '23:49', 'fim de semana', 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) COLLATE utf8_bin NOT NULL,
  `senha` varchar(255) COLLATE utf8_bin NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `apelido` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `senha`, `nome`, `apelido`) VALUES
(7, 'suzuh', 'suzuh', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
