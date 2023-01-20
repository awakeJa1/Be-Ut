-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2022 às 01:47
-- Versão do servidor: 8.0.28
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int NOT NULL,
  `nm_perfil` varchar(30) NOT NULL,
  `ds_idade` int NOT NULL,
  `ds_sexo` varchar(15) NOT NULL,
  `ds_email` varchar(40) NOT NULL,
  `ds_login` varchar(30) NOT NULL,
  `ds_senha` int NOT NULL,
  `ds_cabelo` varchar(15) NOT NULL,
  `ds_pele` varchar(15) NOT NULL,
  `ds_teste` varchar(5) NOT NULL,
  `ds_origem` varchar(5) NOT NULL,
  `ds_quimica` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `nm_perfil`, `ds_idade`, `ds_sexo`, `ds_email`, `ds_login`, `ds_senha`, `ds_cabelo`, `ds_pele`, `ds_teste`, `ds_origem`, `ds_quimica`) VALUES
(1, '', 0, '0', '', '', 0, '0', '0', '0', '0', '0'),
(2, 'isabelle', 3, '1', 'carlasdeadra@hotmail.com', 'isalin', 12345, '1', '1', '2', '1', '1'),
(3, 'isaddd', 10, '1', 'Isadddddd@gmail.com', 'dddd', 1223, '2', '1', '1', '1', '2'),
(4, 'isabelle', 44, '0', 'isa@gmail.com', 'isalin', 12345, '0', '0', '0', '0', '0'),
(5, 'isabelle', 77, '1', 'isssaaa@gmail.com', 'uva', 12345, '1', '2', '2', '1', '2'),
(6, 'isabelle', 222, '0', 'isa@gmail.com', 'uva2', 1234, '1', '2', '1', '2', '1'),
(7, 'tttt', 444, '0', '4444@gmail.com', 'rrerere', 12345, '1', '1', '1', '1', '1'),
(8, 'isabelle', 22, '1', 'isa@gmail.com', 'TESTE', 1234, '1', '1', '1', '1', '1'),
(9, 'isabelle', 23, '+9', 'isa@gmail.com', 'uva5555', 12345, '1', '1', '1', '1', '1'),
(10, 'isabelle', 23, '+9', 'isa@gmail.com', 'uva5555', 1234, '1', '1', '1', '1', '1'),
(11, 'rfgtbth', 34, 'Feminino', '4444@gmail.com', 'rtetewry', 12345, 'Liso', 'Normal', 'Sim', 'Sim', 'Sim');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
