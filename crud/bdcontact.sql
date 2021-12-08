-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Dez-2021 às 02:37
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdcontact`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontact`
--

CREATE TABLE `tbcontact` (
  `idContact` int(11) NOT NULL,
  `nomeContact` varchar(30) NOT NULL,
  `emailContact` varchar(100) NOT NULL,
  `telContact` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcontact`
--

INSERT INTO `tbcontact` (`idContact`, `nomeContact`, `emailContact`, `telContact`) VALUES
(2, 'Jackeline Paula', 'jackpaula@gmail.com', '(11) 988229933'),
(4, 'Wesley Lira', 'wesley21@gmail.com', '(11)940028922'),
(5, 'Allan Vidal', 'a.vidal@gmail.com', '(11)988776655');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcontact`
--
ALTER TABLE `tbcontact`
  ADD PRIMARY KEY (`idContact`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcontact`
--
ALTER TABLE `tbcontact`
  MODIFY `idContact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
