-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 13/09/2016 às 23:51
-- Versão do servidor: 5.7.13-0ubuntu0.16.04.2
-- Versão do PHP: 7.0.8-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `testes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `menu`
--

CREATE TABLE `menu` (
  `codmenu` int(11) NOT NULL,
  `codpai` int(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `ordem` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `menu`
--

INSERT INTO `menu` (`codmenu`, `codpai`, `nome`, `ordem`) VALUES
(1, NULL, 'pai', 1),
(10, NULL, 'pai2', 0),
(11, NULL, 'pai3', 0),
(12, 1, 'filho', 0),
(13, 1, 'flho2', 0),
(14, 13, 'subfilho', 0),
(15, 14, 'subsubfilho', 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`codmenu`),
  ADD KEY `codpai` (`codpai`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `menu`
--
ALTER TABLE `menu`
  MODIFY `codmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`codpai`) REFERENCES `menu` (`codmenu`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
