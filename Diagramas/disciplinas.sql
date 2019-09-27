-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 28-Set-2019 às 01:50
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_atom_definitivo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `codDisciplina` int(5) NOT NULL,
  `nomeDisciplina` varchar(180) DEFAULT NULL,
  `imgDisciplina` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`codDisciplina`, `nomeDisciplina`, `imgDisciplina`) VALUES
(1, 'Biologia', 'bio.png'),
(2, 'Física', 'fisica.png'),
(3, 'Química', 'quimi.png'),
(4, 'Geografia', 'geo.png'),
(5, 'História', 'historia.png'),
(6, 'Pr.Textual', 'pt.png'),
(7, 'Matemática', 'mat.png'),
(8, 'Inglês', 'ing.png'),
(9, 'Espanhol', 'esp.png'),
(10, 'Filosofia', 'filo.png '),
(11, 'Sociologia', 'soci.png'),
(12, 'Agropecuária', 'agro.png'),
(13, 'Informática', 'info.png'),
(14, 'Química(tec)', 'qui.png'),
(15, 'Portugues', 'port.png'),
(16, 'Nenhuma', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`codDisciplina`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `codDisciplina` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
