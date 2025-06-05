-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost: 3308
-- Tempo de geração: 05-Jun-2025 às 15:47
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `petisco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento-consulta`
--

CREATE TABLE `agendamento-consulta` (
  `Codigo` int(11) NOT NULL,
  `Pet` varchar(150) NOT NULL,
  `Tutor` varchar(200) NOT NULL,
  `dataHora` datetime NOT NULL,
  `Motivo` varchar(200) NOT NULL,
  `VeterinarioResponsavel` varchar(200) NOT NULL,
  `Obervacoes` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento-vacina`
--

CREATE TABLE `agendamento-vacina` (
  `Codigo` int(11) NOT NULL,
  `Pet` varchar(150) NOT NULL,
  `Vacina` varchar(150) NOT NULL,
  `DataAplicacao` date NOT NULL,
  `DataProximaDose` date DEFAULT NULL,
  `VeterinarioResponsavel` varchar(200) NOT NULL,
  `LoteVacina` varchar(150) NOT NULL,
  `Tutor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro-animais`
--

CREATE TABLE `cadastro-animais` (
  `Codigo` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Idade` int(11) NOT NULL,
  `Peso` double NOT NULL,
  `Tutor` varchar(150) NOT NULL,
  `Email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro-historico`
--

CREATE TABLE `cadastro-historico` (
  `Codigo` int(11) NOT NULL,
  `Pet` varchar(30) NOT NULL,
  `Tutor` varchar(150) NOT NULL,
  `DataRegistro` date NOT NULL,
  `Diagnostico` longtext NOT NULL,
  `TratamentoPrescrito` longtext NOT NULL,
  `Medicamentos` varchar(200) NOT NULL,
  `VeterinarioResponsavel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro-talentos`
--

CREATE TABLE `cadastro-talentos` (
  `Codigo` int(11) NOT NULL,
  `NomeCompleto` varchar(100) NOT NULL,
  `CPF` int(11) NOT NULL,
  `AreaInteresse` varchar(150) NOT NULL,
  `Telefone` varchar(50) NOT NULL,
  `Endereco` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro-tutores`
--

CREATE TABLE `cadastro-tutores` (
  `Codigo` int(11) NOT NULL,
  `NomeCompleto` varchar(150) NOT NULL,
  `CPF` int(11) NOT NULL,
  `DataNascimento` date NOT NULL,
  `Telefone` varchar(30) NOT NULL,
  `Endereco` varchar(200) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Senha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamento-consulta`
--
ALTER TABLE `agendamento-consulta`
  ADD PRIMARY KEY (`Codigo`);

--
-- Índices para tabela `agendamento-vacina`
--
ALTER TABLE `agendamento-vacina`
  ADD PRIMARY KEY (`Codigo`);

--
-- Índices para tabela `cadastro-animais`
--
ALTER TABLE `cadastro-animais`
  ADD PRIMARY KEY (`Codigo`);

--
-- Índices para tabela `cadastro-historico`
--
ALTER TABLE `cadastro-historico`
  ADD PRIMARY KEY (`Codigo`);

--
-- Índices para tabela `cadastro-talentos`
--
ALTER TABLE `cadastro-talentos`
  ADD PRIMARY KEY (`Codigo`);

--
-- Índices para tabela `cadastro-tutores`
--
ALTER TABLE `cadastro-tutores`
  ADD PRIMARY KEY (`Codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
