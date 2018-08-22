-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Ago-2018 às 22:01
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefoneCelular` varchar(15) DEFAULT NULL,
  `telefoneFixo` varchar(15) DEFAULT NULL,
  `rua` varchar(30) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` varchar(3) DEFAULT NULL,
  `pais` varchar(30) DEFAULT NULL,
  `cep` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `telefoneCelular`, `telefoneFixo`, `rua`, `bairro`, `cidade`, `estado`, `pais`, `cep`) VALUES
(1, 'TIAGO DE', '991346156', '32224963', 'Av Tenente Atila Ribeiro De Ca', 'Ponte Preta', 'Juiz de Fora', NULL, NULL, NULL),
(2, 'TIAGO DE', '991346156', '32224963', 'Av Tenente Atila Ribeiro De Ca', 'Ponte Preta', 'Juiz de Fora', NULL, NULL, NULL),
(4, 'tiago de souza nogueira', '991346156', '32224963', 'Rua Jovelina 28', 'Ponte Preta', 'Juiz de Fora', '360', 'BRASIL', 'Minas Gerais'),
(5, 'Ricardo Capra', '999999999', '3232323232', 'rua a ', 'Centro', 'Juiz de Fora', '360', 'Brasil', 'Minas Gerais'),
(6, 'Clayton', '888888888888', '333333333', 'rua b', 'Centro', 'Juiz de Fora', '360', 'Brasil', 'Minas Gerais'),
(7, 'jane', '99999999', '444445454', 'rua c', 'Bandeirantes', 'Juiz de Fora', '360', 'Brasil', 'Minas Gerais'),
(8, 'jac', '99999999', '444445454', 'rua c', 'SÃ£o Matheus', 'Juiz de Fora', '360', 'Brasil', 'Minas Gerais'),
(9, 'Fabiana', '99999999', '444445454', 'rua c', 'SÃ£o Matheus', 'Juiz de Fora', '360', 'Brasil', 'Minas Gerais'),
(10, 'Vania', '99999999', '444445454', 'rua c', 'SÃ£o Matheus', 'Juiz de Fora', '360', 'Brasil', 'Minas Gerais'),
(11, 'Marlon', '99999999', '444445454', 'rua c', 'SÃ£o Matheus', 'Juiz de Fora', '360', 'Brasil', 'Minas Gerais'),
(12, 'Sidimara', '99999999', '444445454', 'rua c', 'SÃ£o Matheus', 'Juiz de Fora', '360', 'Brasil', 'Minas Gerais');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `contato` ADD FULLTEXT KEY `buscador` (`nome`,`telefoneCelular`,`telefoneFixo`,`cidade`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
