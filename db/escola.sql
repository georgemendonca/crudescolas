-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 21/04/2015 às 19:01
-- Versão do servidor: 5.5.43-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `crudescolas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `escola`
--

CREATE TABLE IF NOT EXISTS `escola` (
  `id` varchar(3) CHARACTER SET utf8 NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `escola`
--

INSERT INTO `escola` (`id`, `name`) VALUES
('CCC', 'Corpus Christi Catholic School'),
('FJK', 'Faculdade JK de Tecnologia SA'),
('HSE', 'Holy Spirit Episcopal School'),
('OLG', 'Our Lady of Guadalupe Catholic School'),
('PLS', 'Pilgrim Lutheran School'),
('SAG', 'Saint Augustine Catholic School'),
('SAN', 'Saint Anne Catholic School'),
('SCC', 'Saint Christopher Catholic School'),
('TST', 'Teste'),
('TWC', 'The Woodlands Christian Academy'),
('UUU', 'OPOPOP');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
