-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/06/2023 às 23:32
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `obra`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `empreiteira`
--

CREATE TABLE `empreiteira` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `cnpj` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Despejando dados para a tabela `empreiteira`
--

INSERT INTO `empreiteira` (`id`, `nome`, `endereco`, `telefone`, `cnpj`) VALUES
(21, 'Teste', 'dfsdf', 'dfsf', '46456547687'),
(22, 'OBRASSS', 'Joao Flauzino', '18996953230', '34235435656'),
(24, 'Teste', 'naosei', '34756257463', 'ffffffffffffff'),
(25, 'jj', 'jjjjjjtyufghgfh', 'jghjghjhg', 'jghjg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `obra`
--

CREATE TABLE `obra` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `empreiteira` int(11) NOT NULL,
  `peao` int(11) NOT NULL,
  `peaomestre` int(11) NOT NULL,
  `valorhora` float NOT NULL,
  `estado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Despejando dados para a tabela `obra`
--

INSERT INTO `obra` (`id`, `descricao`, `empreiteira`, `peao`, `peaomestre`, `valorhora`, `estado`) VALUES
(16, 'safddf', 21, 5, 6, 34255, 'q');

-- --------------------------------------------------------

--
-- Estrutura para tabela `peao`
--

CREATE TABLE `peao` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Despejando dados para a tabela `peao`
--

INSERT INTO `peao` (`id`, `nome`) VALUES
(1, 'cleber'),
(5, 'marcos'),
(6, 'fff'),
(7, 'jose');

-- --------------------------------------------------------

--
-- Estrutura para tabela `peaomestre`
--

CREATE TABLE `peaomestre` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Despejando dados para a tabela `peaomestre`
--

INSERT INTO `peaomestre` (`id`, `nome`, `quantidade`) VALUES
(6, 'alex poletto', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(32) NOT NULL,
  `senha` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `senha`, `email`) VALUES
(11, 'felipe', 'd08ae277221ff33c440bd7943eb1266e', 'felipebonilha@gmail.com'),
(12, 'almir', '82537abdea5926c483e42d322154b2e1', 'almir@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `empreiteira`
--
ALTER TABLE `empreiteira`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `obra`
--
ALTER TABLE `obra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `obra_empreiteira` (`empreiteira`),
  ADD KEY `obra_peao` (`peao`),
  ADD KEY `obra_peaomestre` (`peaomestre`);

--
-- Índices de tabela `peao`
--
ALTER TABLE `peao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `peaomestre`
--
ALTER TABLE `peaomestre`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empreiteira`
--
ALTER TABLE `empreiteira`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `obra`
--
ALTER TABLE `obra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `peao`
--
ALTER TABLE `peao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `peaomestre`
--
ALTER TABLE `peaomestre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `obra`
--
ALTER TABLE `obra`
  ADD CONSTRAINT `obra_empreiteira` FOREIGN KEY (`empreiteira`) REFERENCES `empreiteira` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `obra_peao` FOREIGN KEY (`peao`) REFERENCES `peao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `obra_peaomestre` FOREIGN KEY (`peaomestre`) REFERENCES `peaomestre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
