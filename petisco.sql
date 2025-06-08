-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost: 3308
-- Tempo de geração: 08-Jun-2025 às 22:10
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
-- Estrutura da tabela `agendamentosconsulta`
--

CREATE TABLE `agendamentosconsulta` (
  `Codigo` int(11) NOT NULL,
  `Pet` varchar(100) NOT NULL,
  `Tutor` varchar(100) NOT NULL,
  `DataHoraConsulta` datetime NOT NULL,
  `MotivoConsulta` text DEFAULT NULL,
  `VeterinarioResponsavel` varchar(100) DEFAULT NULL,
  `Observacoes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `agendamentosconsulta`
--

INSERT INTO `agendamentosconsulta` (`Codigo`, `Pet`, `Tutor`, `DataHoraConsulta`, `MotivoConsulta`, `VeterinarioResponsavel`, `Observacoes`) VALUES
(3, 'Lili', 'Joana Clara', '2025-02-01 13:20:00', 'Check-up', 'Joao Silvério', 'Nao pode demorar porque se nao a Lili endoida'),
(4, 'Pedrão', 'Joao Santos', '2026-01-01 14:50:00', 'Check-up', 'Joao Silvério', 'Nao pode demorar porque se não o Pedrão dá as caras');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamentosvacinacao`
--

CREATE TABLE `agendamentosvacinacao` (
  `Codigo` int(11) NOT NULL,
  `Pet` varchar(100) NOT NULL,
  `Vacina` varchar(100) NOT NULL,
  `DataAplicacao` date NOT NULL,
  `DataProximaDose` date DEFAULT NULL,
  `VeterinarioResponsavel` varchar(100) DEFAULT NULL,
  `LoteVacina` varchar(50) DEFAULT NULL,
  `Tutor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `agendamentosvacinacao`
--

INSERT INTO `agendamentosvacinacao` (`Codigo`, `Pet`, `Vacina`, `DataAplicacao`, `DataProximaDose`, `VeterinarioResponsavel`, `LoteVacina`, `Tutor`) VALUES
(1, 'Pedrão', 'Raiva', '2026-07-01', '2027-07-02', 'Joao Silvério', 'LP0806LP', 'Maria Clara'),
(2, 'Lulu', 'Raiva', '2026-01-01', '2026-02-01', 'Joao Silvério', 'BD0608FA', 'Joao Santos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroanimais`
--

CREATE TABLE `cadastroanimais` (
  `Codigo` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Idade` varchar(20) NOT NULL,
  `Peso` double NOT NULL,
  `Tutor` varchar(150) NOT NULL,
  `Email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastroanimais`
--

INSERT INTO `cadastroanimais` (`Codigo`, `Nome`, `Tipo`, `Idade`, `Peso`, `Tutor`, `Email`) VALUES
(1, 'Lulu', 'Canino', '4 anos', 7, 'Joana Clara', 'joana.clara@fatectalentos.sp.gov.br'),
(2, 'Juju', 'Réptil', '2 meses', 1, 'Joao Santos', 'joao.santos@fatecpp.sp.gov.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrohistorico`
--

CREATE TABLE `cadastrohistorico` (
  `Codigo` int(11) NOT NULL,
  `Pet` varchar(30) NOT NULL,
  `Tutor` varchar(150) NOT NULL,
  `DataRegistro` date NOT NULL,
  `Diagnostico` varchar(300) NOT NULL,
  `TratamentoPrescrito` varchar(300) NOT NULL,
  `Medicamentos` varchar(200) NOT NULL,
  `VeterinarioResponsavel` varchar(200) NOT NULL,
  `AnexarArquivos` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastrohistorico`
--

INSERT INTO `cadastrohistorico` (`Codigo`, `Pet`, `Tutor`, `DataRegistro`, `Diagnostico`, `TratamentoPrescrito`, `Medicamentos`, `VeterinarioResponsavel`, `AnexarArquivos`) VALUES
(15, 'Lili', 'Joana Clara', '0025-02-01', 'Estomatite', 'Tratamento medicamentoso e dieta', 'Omeprazol (1 cprmd a cada 8h (diluído em água))', 'Joao Silvério', NULL),
(16, 'Lili', 'Joana Clara', '0025-02-01', 'Estomatite', 'Tratamento medicamentoso e dieta', 'Omeprazol (1 cprmd a cada 8h (diluído em água))', 'Joao Silvério', 0x4c50342d41756c6131332d42442e706466),
(17, 'Lulu', 'Maria Joao', '2004-02-01', 'Gengivite', 'Dieta e troca de ração por filé mignon', 'Nao é necessário', 'Joao Silvério', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrotalentos`
--

CREATE TABLE `cadastrotalentos` (
  `Codigo` int(11) NOT NULL,
  `NomeCompleto` varchar(100) NOT NULL,
  `CPF` int(11) NOT NULL,
  `AreaInteresse` varchar(150) NOT NULL,
  `Telefone` varchar(50) NOT NULL,
  `Endereco` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastrotalentos`
--

INSERT INTO `cadastrotalentos` (`Codigo`, `NomeCompleto`, `CPF`, `AreaInteresse`, `Telefone`, `Endereco`, `Email`) VALUES
(1, 'Maria Joao', 78753345, 'Veterinária', '(78) 11234-5678', 'Rua das Mangas, 60, Vila Verinha', 'maria.joao@fatectalentos.sp.gov.br'),
(2, 'Maria Clara', 78658345, 'Banho e Tosa', '(54) 18734-5988', 'Rua das Uvas, 70, Vila Local', 'maria.clara@fatectalentos.sp.gov.br'),
(3, 'Joana Clara', 75436345, 'Cuidados Especiais', '(65) 18435-7889', 'Rua das Seringueiras, 43, Bairro Jaguatirica', 'joana.clara@fatectalentos.sp.gov.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrotutores`
--

CREATE TABLE `cadastrotutores` (
  `NomeCompleto` varchar(150) NOT NULL,
  `CPF` int(11) NOT NULL,
  `DataNascimento` date NOT NULL,
  `Telefone` varchar(30) NOT NULL,
  `Endereco` varchar(200) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Senha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastrotutores`
--

INSERT INTO `cadastrotutores` (`NomeCompleto`, `CPF`, `DataNascimento`, `Telefone`, `Endereco`, `Email`, `Senha`) VALUES
('Joao Carlos', 111111111, '2001-01-01', '(11) 11111-1111', 'Rua das Ruas, 111, Bairro dos Bairros', 'joao.carlos@fatecpp.sp.gov.br', '11111111111'),
('Maria de Fatima', 123235678, '2000-07-05', '(18) 97656-3490', 'Rua das Verduras, 200, Bairro Santo Agostinho', 'maria.fatima@fatecpp.sp.gov.br', '76549523'),
('Joao Silveira', 123456712, '2001-06-01', '(18) 98108-9652', 'Rua das Laranjas, 100, Bairro Santa Geneva', 'joao.silveira@fatecpp.sp.gov.br', '856473920'),
('Joao Silva', 123456789, '2000-07-01', '(18) 91234-5678', 'Rua das Flores, 170, Vila Paulo Roberto', 'joao.silva@fatecpp.sp.gov.br', '12345678'),
('Cleide Souza', 132465780, '2000-07-02', '(18) 95678-1234', 'Rua das Árvores, 170, Vila Malaman', 'cleide.souza@fatecpp.sp.gov.br', '87654321'),
('Joao Joao', 222222222, '2002-02-02', '(22) 22222-2222', 'Rua das Ruas, 222, Bairro dos Bairros', 'joao.joao@fatecpp.sp.gov.br', '123567489'),
('Julio Santos', 312456708, '2000-07-03', '(18) 97856-3412', 'Rua das Plantas, 70, Jardim Tropical', 'julio.santos@fatecpp.sp.gov.br', '56473829'),
('Joao Jose', 333333333, '2003-03-03', '(33) 33333-3333', 'Rua das Ruas, 333, Bairro dos Bairros', 'joao.Jose@fatecpp.sp.gov.br', '3333333333'),
('Julio Curitiba', 444444444, '2004-04-04', '(44) 44444-4444', 'Rua das Casas, 44, Vila das Tartarugas', 'julio.curitiba@fatecpp.sp.gov.br', '444444444444'),
('Maria de Lourdes', 456378920, '2000-07-04', '(41)78658-0897', 'Rua das Laranjeiras, 210, Bairro Santo Antônio', 'maria.lourdes@fatecpp.sp.gov.br', '43435687');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamentosconsulta`
--
ALTER TABLE `agendamentosconsulta`
  ADD PRIMARY KEY (`Codigo`);

--
-- Índices para tabela `agendamentosvacinacao`
--
ALTER TABLE `agendamentosvacinacao`
  ADD PRIMARY KEY (`Codigo`);

--
-- Índices para tabela `cadastroanimais`
--
ALTER TABLE `cadastroanimais`
  ADD PRIMARY KEY (`Codigo`);

--
-- Índices para tabela `cadastrohistorico`
--
ALTER TABLE `cadastrohistorico`
  ADD PRIMARY KEY (`Codigo`);

--
-- Índices para tabela `cadastrotalentos`
--
ALTER TABLE `cadastrotalentos`
  ADD PRIMARY KEY (`Codigo`);

--
-- Índices para tabela `cadastrotutores`
--
ALTER TABLE `cadastrotutores`
  ADD PRIMARY KEY (`CPF`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamentosconsulta`
--
ALTER TABLE `agendamentosconsulta`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `agendamentosvacinacao`
--
ALTER TABLE `agendamentosvacinacao`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cadastroanimais`
--
ALTER TABLE `cadastroanimais`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cadastrohistorico`
--
ALTER TABLE `cadastrohistorico`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `cadastrotalentos`
--
ALTER TABLE `cadastrotalentos`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
