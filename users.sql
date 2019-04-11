-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: mysql11-farm76.kinghost.net
-- Tempo de geração: 11/04/2019 às 16:30
-- Versão do servidor: 5.6.36-log
-- Versão do PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `anapps`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `permission` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `permission`, `active`) VALUES
(2, 'mateus', 'mtsbastos', '332b52c8c32006ce6d8a4bcbe40f546bcf392091fc2e6584b97057e7a87769d4f82ce3488f06eecd1013589bc5f119ebc2491af12c0467e44fd676fe5f127549Q+ByTxUPirGqD3shQVYzKiqJZHAHh5qEGzVpkWAD2Rc=', NULL, 1, 1),
(3, 'Alessandra Avila', 'alessandra', 'b14bad7c4ed97a88516038e749ea408c3385def908486f092aa98f35c8db679436406fbe3de7ad38f6505154bd5b5df04f6841e472887367accecf90b693f567sgtPDJSgQIw/kkniZNgpx4tOi1mGOFrpRfzEsDXsirw=', NULL, 1, 1),
(17, 'MATEUS S BASTOS', 'mtsbastos96', 'ab31648afda07dca1c31cc932b0eab83c5c6a73eabc168ac6bb4f5bd4f2d865606b9309422543f6235605c191359eb27f2be9f6f3bd181b66e26f640edfa9c7almrtObqE5Hs1GJ7ATjBbYG5kcnkxCgCcSRkoBkrbdNU=', 'mtsbastos18@gmail.com', 1, 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
