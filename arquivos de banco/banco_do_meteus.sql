-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jun-2023 às 00:47
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
-- Banco de dados: `bando do meteus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(4) NOT NULL,
  `id_produtos` int(4) DEFAULT NULL,
  `id_usuario` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedora`
--

CREATE TABLE `fornecedora` (
  `id_fornecedora` int(4) NOT NULL,
  `nm_fornecedora` varchar(30) NOT NULL,
  `id_produtos` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(4) NOT NULL,
  `nm_perfil` varchar(30) NOT NULL,
  `ds_idade` int(3) DEFAULT NULL,
  `ds_sexo` varchar(15) DEFAULT NULL,
  `id_usuario` int(4) DEFAULT NULL,
  `id_caracteristicas` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produtos` int(4) NOT NULL,
  `nm_produto` varchar(30) NOT NULL,
  `vl_produto` float NOT NULL,
  `ds_oanimal` varchar(3) NOT NULL,
  `ds_test` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produtos`, `nm_produto`, `vl_produto`, `ds_oanimal`, `ds_test`) VALUES
(1, 'shampoo', 12, 'nao', 'sim'),
(2, 'perfume', 50, 'nao', 'sim'),
(3, 'desodorante', 8, 'nao', 'nao'),
(4, 'creme', 28, 'sim', 'nao'),
(5, 'condicionador', 16, 'sim', 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(4) NOT NULL,
  `ds_senha` varchar(40) NOT NULL,
  `ds_email` varchar(30) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Idade` int(11) DEFAULT NULL,
  `Sexo` varchar(10) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `ds_senha`, `ds_email`, `Nome`, `Idade`, `Sexo`, `TipoDeCabelo`, `CabeloComQuimica`, `TipoDePele`) VALUES
(12, 'joaoielen@gmail.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL),
(13, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'leeodm@hotmail.com', '121213', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'leeodm@hotmail.com', '121213', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'leeloodm@hotmail.com', '121213', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `compra_fk_1` (`id_produtos`),
  ADD KEY `compra_fk_2` (`id_usuario`);

--
-- Índices para tabela `fornecedora`
--
ALTER TABLE `fornecedora`
  ADD PRIMARY KEY (`id_fornecedora`),
  ADD KEY `fornecedora_fk_2` (`id_produtos`);

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`),
  ADD KEY `perfil_fk_1` (`id_usuario`),
  ADD KEY `perfil_fk_2` (`id_caracteristicas`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produtos`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
