-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 14/11/2023 às 02:40
-- Versão do servidor: 10.4.21-MariaDB
-- Versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_chamado`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_chamado`
--

CREATE TABLE `cadastro_chamado` (
  `ID_CHAMADO` int(11) NOT NULL,
  `RA` int(11) NOT NULL,
  `NOME` varchar(30) NOT NULL,
  `DESCRICAO` text NOT NULL,
  `SALA` int(11) NOT NULL,
  `PROBLEMA` int(11) DEFAULT NULL,
  `STATUS` varchar(15) DEFAULT NULL,
  `DATA_CHAMADO` date DEFAULT NULL,
  `HORARIO` time DEFAULT NULL,
  `HORARIO_RESOLVIDO` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `cadastro_chamado`
--

INSERT INTO `cadastro_chamado` (`ID_CHAMADO`, `RA`, `NOME`, `DESCRICAO`, `SALA`, `PROBLEMA`, `STATUS`, `DATA_CHAMADO`, `HORARIO`, `HORARIO_RESOLVIDO`) VALUES
(1, 12, 'as', 'as', 23, 1, '0', NULL, NULL, NULL),
(2, 1968222, 'Pedro', 'Pc não está ligando', 436, 1, NULL, NULL, NULL, NULL),
(3, 4, 'sdfgfgsd', 'dfsgdf', 3, 1, NULL, '2023-11-12', '02:48:50', NULL),
(4, 87878787, 'lklklk', 'lkjhgfdsa', 98765, 1, '0', '2023-11-12', '04:25:55', NULL),
(5, 756656756, 'dfgfdg', 'sdfgdfg', 34545, 1, 'r', '2023-11-12', '04:28:53', NULL),
(6, 464646654, 'acdsda', 'KJKJHKHKJH', 54, 1, 'RESOLVIDO', '2023-11-12', '04:29:57', NULL),
(7, 34543534, 'DFBVFBDFC', '4536453', 43534, 1, 'RESOLVIDO', '2023-11-12', '04:31:31', NULL),
(8, 111111, 'zzzzzz', 'xxxxxxxxx', 222222222, 1, 'RESOLVIDO', '2023-11-12', '04:35:17', NULL),
(9, 121212, 'rayssa', 'baixar word', 110, 4, 'RESOLVIDO', '2023-11-12', '23:30:11', NULL),
(10, 0, '', '', 0, 1, 'RESOLVIDO', '2023-11-12', '23:36:27', '20:39:04'),
(11, 0, '', '', 0, 1, 'RESOLVIDO', '2023-11-12', '23:36:31', '20:40:14'),
(12, 0, '', '', 0, 1, 'PENDENTE', '2023-11-12', '23:36:49', NULL),
(13, 175193, 'Matheus', 'Tela azul', 450, 3, 'RESOLVIDO', '2023-11-13', '19:37:06', NULL),
(14, 1964556, 'Leo', 'Não mexe o mouse', 427, 3, 'RESOLVIDO', '2023-11-13', '19:46:08', NULL),
(15, 123, 'ASD', 'DSA', 321, 1, 'RESOLVIDO', '2023-11-13', '20:08:24', NULL),
(16, 123456, 'ASDFG', 'ASDFG', 123, 1, 'RESOLVIDO', '2023-11-13', '20:11:22', NULL),
(17, 0, '', '', 0, NULL, NULL, NULL, NULL, '20:12:16'),
(18, 0, '', '', 0, NULL, NULL, NULL, NULL, '20:12:24'),
(19, 99999, 'AAAAA', 'SSSSS', 5, 6, 'RESOLVIDO', '2023-11-13', '20:25:00', NULL),
(20, 0, 'qwert', 'trewq', 9, 1, 'NÃO RESOLVIDO', '2023-11-13', '21:33:28', NULL),
(25, 11111, 'ssss', 'sss', 11, 1, 'NÃO RESOLVIDO', '2023-11-13', '22:05:16', NULL),
(39, 1111, 'pedro', 'Tela azul', 1111, 4, 'RESOLVIDO', '2023-11-13', '22:38:38', '22:39:54');

-- --------------------------------------------------------

--
-- Estrutura para tabela `problemas`
--

CREATE TABLE `problemas` (
  `ID_PROBLEMA` int(11) NOT NULL,
  `NOME_PROBLEMA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `problemas`
--

INSERT INTO `problemas` (`ID_PROBLEMA`, `NOME_PROBLEMA`) VALUES
(1, 'Computador não liga'),
(2, 'Mouse ou teclado não funciona'),
(3, 'PC travado'),
(4, 'Baixar programa'),
(5, 'Não funciona rede'),
(6, 'Outros problemas');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro_chamado`
--
ALTER TABLE `cadastro_chamado`
  ADD PRIMARY KEY (`ID_CHAMADO`),
  ADD KEY `PROBLEMA` (`PROBLEMA`);

--
-- Índices de tabela `problemas`
--
ALTER TABLE `problemas`
  ADD PRIMARY KEY (`ID_PROBLEMA`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_chamado`
--
ALTER TABLE `cadastro_chamado`
  MODIFY `ID_CHAMADO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `problemas`
--
ALTER TABLE `problemas`
  MODIFY `ID_PROBLEMA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `cadastro_chamado`
--
ALTER TABLE `cadastro_chamado`
  ADD CONSTRAINT `PROBLEMA` FOREIGN KEY (`PROBLEMA`) REFERENCES `problemas` (`ID_PROBLEMA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
