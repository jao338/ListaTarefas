-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Tempo de geração: 19-Jun-2023 às 16:35
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `listatarefas`
--
CREATE DATABASE IF NOT EXISTS `listatarefas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `listatarefas`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefa`
--

CREATE TABLE `tarefa` (
  `Titulo` varchar(100) NOT NULL,
  `Descricao` varchar(150) NOT NULL,
  `Data` varchar(10) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tarefa`
--

INSERT INTO `tarefa` (`Titulo`, `Descricao`, `Data`, `Id`) VALUES
('Titulo1', 'Descrição1', '19/06/2023', 1),
('Titulo2', 'Descrição2', '19/06/2023', 1),
('Titulo3', 'Descrição3', '18/06/2023', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Login` varchar(100) NOT NULL,
  `Senha` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`ID`, `Login`, `Senha`) VALUES
(1, 'jao338', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(2, 'Lucas', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(3, 'Pedro', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(4, 'Diego', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(5, 'Luciano', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(6, 'Paulo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(7, 'Paulo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(8, 'Wendel', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tarefa`
--
ALTER TABLE `tarefa`
  ADD PRIMARY KEY (`Titulo`),
  ADD KEY `Id` (`Id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tarefa`
--
ALTER TABLE `tarefa`
  ADD CONSTRAINT `Id` FOREIGN KEY (`Id`) REFERENCES `user` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
