-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/10/2024 às 02:03
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbsam`
--
CREATE DATABASE IF NOT EXISTS `dbsam` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbsam`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblenfermeiros`
--

CREATE TABLE `tblenfermeiros` (
  `id` int(11) NOT NULL,
  `nome` varchar(256) NOT NULL,
  `COREN` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblenfermeiros`
--

INSERT INTO `tblenfermeiros` (`id`, `nome`, `COREN`, `usuario`, `senha`) VALUES
(1, 'Matheus Brito Sampaio', 'Coren-SP 071.023-ENF', 'matheusbrito', 'amoabianca123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblmedicos`
--

CREATE TABLE `tblmedicos` (
  `id` int(11) NOT NULL,
  `nome` varchar(256) NOT NULL,
  `especialidade` varchar(256) NOT NULL,
  `CRM` varchar(16) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblmedicos`
--

INSERT INTO `tblmedicos` (`id`, `nome`, `especialidade`, `CRM`, `usuario`, `senha`) VALUES
(1, 'Leonardo Yuri Gomes', 'Cardiologista', 'CRM/SP 300722', 'leonardoyur', 'euamoacamilla123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblpacientes`
--

CREATE TABLE `tblpacientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(256) NOT NULL,
  `leito` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblpacientes`
--

INSERT INTO `tblpacientes` (`id`, `nome`, `leito`) VALUES
(1, 'Mateus dos Santos', 'A04');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblreceitas`
--

CREATE TABLE `tblreceitas` (
  `id` int(11) NOT NULL,
  `nomePaciente` varchar(256) NOT NULL,
  `nomeMedicamento` varchar(256) NOT NULL,
  `dataAdmin` date NOT NULL,
  `horaAdmin` date NOT NULL,
  `dose` varchar(50) NOT NULL,
  `dataAtual` timestamp NOT NULL DEFAULT curdate(),
  `horaAtual` timestamp NOT NULL DEFAULT curtime(),
  `nomeMedico` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tblenfermeiros`
--
ALTER TABLE `tblenfermeiros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tblmedicos`
--
ALTER TABLE `tblmedicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tblpacientes`
--
ALTER TABLE `tblpacientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tblreceitas`
--
ALTER TABLE `tblreceitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblenfermeiros`
--
ALTER TABLE `tblenfermeiros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblmedicos`
--
ALTER TABLE `tblmedicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblpacientes`
--
ALTER TABLE `tblpacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblreceitas`
--
ALTER TABLE `tblreceitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
