-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 26-Ago-2019 às 11:44
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
-- Banco de dados: `bd_atom`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `codAluno` int(5) NOT NULL,
  `nomeCompleto` varchar(180) DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `imgAluno` varchar(180) DEFAULT NULL,
  `anoLetivo` varchar(100) DEFAULT NULL,
  `curso` varchar(180) DEFAULT NULL,
  `email` varchar(500) NOT NULL,
  `senha` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`codAluno`, `nomeCompleto`, `dataNasc`, `imgAluno`, `anoLetivo`, `curso`, `email`, `senha`) VALUES
(7, 'Isabela Silva', '2008-06-02', NULL, '2', 'Quimica', '', ''),
(8, 'Júlia Castro', '2010-10-03', NULL, '2', 'Agropecuaria', '', ''),
(9, 'Laura Melo', '2015-09-01', NULL, '2', 'Agropecuaria', '', ''),
(10, 'Luana Ribeiro', '2002-08-01', NULL, '2', 'Agropecuaria', '', ''),
(11, 'Marcos Souza', '2006-12-01', NULL, '2', 'Informatica', '', ''),
(12, 'Sarah Rocha', '2002-06-03', NULL, '2', 'Informatica', '', ''),
(14, 'Mateus Souza', '2022-03-01', NULL, '2', 'Quimica', '', ''),
(15, 'Kai Barbosa', '2030-04-03', NULL, '2', 'Agropecuaria', '', ''),
(16, 'Eduardo Souza', '2016-02-03', NULL, '2', 'Informatica', '', ''),
(17, 'Marisa Rodrigues', '2018-02-03', NULL, '2', 'Agropecuaria', '', ''),
(18, 'Guilherme Dias', '2015-02-03', NULL, '2', 'Informatica', '', ''),
(19, 'Douglas Barros', '2017-05-02', NULL, '2', 'Informatica', '', ''),
(20, 'Isabelle Carvalho', '2005-02-01', NULL, '2', 'Quimica', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE `artigos` (
  `codArtigo` int(5) NOT NULL,
  `titulo` varchar(180) DEFAULT NULL,
  `corpo` text DEFAULT NULL,
  `imgArtigo` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`codArtigo`, `titulo`, `corpo`, `imgArtigo`) VALUES
(2, 'Como dominar o mundo!', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', ''),
(5, 'Teste 1, 2, 3', '1,2,3', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentar`
--

CREATE TABLE `comentar` (
  `codProfessor` int(5) DEFAULT NULL,
  `codComentario` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `codComentario` int(5) NOT NULL,
  `data` date DEFAULT NULL,
  `comentario` varchar(240) DEFAULT NULL,
  `codVideo` int(5) DEFAULT NULL,
  `codAluno` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `codDisciplina` int(5) NOT NULL,
  `qtdVideos` int(7) DEFAULT NULL,
  `qtdArtigos` int(7) DEFAULT NULL,
  `nome` varchar(180) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`codDisciplina`, `qtdVideos`, `qtdArtigos`, `nome`) VALUES
(1, 10, 20, 'Biologia'),
(2, 11, 21, 'Programacao'),
(3, 12, 22, 'Artes'),
(4, 13, 23, 'Ingles'),
(5, 14, 24, 'Projeto Integrador'),
(6, 15, 25, 'Engenharia de Software'),
(7, 16, 26, 'Fisica'),
(8, 17, 27, 'Educacao Fisica'),
(9, 18, 28, 'Banco de Dados'),
(10, 19, 29, 'Quimica'),
(11, 10, 20, 'Biologia'),
(12, 11, 21, 'Programacao'),
(13, 12, 22, 'Artes'),
(14, 13, 23, 'Ingles'),
(15, 14, 24, 'Projeto Integrador'),
(16, 15, 25, 'Engenharia de Software'),
(17, 16, 26, 'Fisica'),
(18, 17, 27, 'Educacao Fisica'),
(19, 18, 28, 'Banco de Dados'),
(20, 19, 29, 'Quimica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `exercicio`
--

CREATE TABLE `exercicio` (
  `cod_exercicio` int(5) NOT NULL,
  `descricao` varchar(180) DEFAULT NULL,
  `nome` varchar(180) DEFAULT NULL,
  `arquivo` varchar(180) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `exercicio`
--

INSERT INTO `exercicio` (`cod_exercicio`, `descricao`, `nome`, `arquivo`) VALUES
(1, 'descricao2', 'exercicio2', 'arquivo/arquivo2'),
(2, 'descricao1', 'exercicio1', 'arquivo/arquivo1'),
(3, 'descricao2', 'exercicio2', 'arquivo/arquivo2'),
(4, 'descricao3', 'exercicio3', 'arquivo/arquivo3'),
(5, 'descricao4', 'exercicio4', 'arquivo/arquivo4'),
(6, 'descricao5', 'exercicio5', 'arquivo/arquivo5'),
(7, 'descricao6', 'exercicio6', 'arquivo/arquivo6'),
(8, 'descricao7', 'exercicio7', 'arquivo/arquivo7'),
(9, 'descricao8', 'exercicio8', 'arquivo/arquivo8'),
(10, 'descricao9', 'exercicio9', 'arquivo/arquivo9'),
(11, 'descricao10', 'exercicio10', 'arquivo/arquivo10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lecionar`
--

CREATE TABLE `lecionar` (
  `codDisciplina` int(5) DEFAULT NULL,
  `codProfessor` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `postar`
--

CREATE TABLE `postar` (
  `codProfessor` int(5) DEFAULT NULL,
  `codVideo` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `codProfessor` int(5) NOT NULL,
  `imgProfessor` varchar(180) DEFAULT NULL,
  `email` varchar(180) DEFAULT NULL,
  `miniCurriculo` varchar(240) DEFAULT NULL,
  `institucao` varchar(180) DEFAULT NULL,
  `nomeCompleto` varchar(180) DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `cod_exercicio` int(5) DEFAULT NULL,
  `senha` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`codProfessor`, `imgProfessor`, `email`, `miniCurriculo`, `institucao`, `nomeCompleto`, `dataNasc`, `cod_exercicio`, `senha`, `area`) VALUES
(4, NULL, NULL, 'Professor de educação fisica', 'IFC', 'Amanda Becker', '2030-04-03', NULL, '', ''),
(5, NULL, NULL, 'Professor de quimica formado na UFSC', 'UFSC', 'Affonso Soares', '2028-04-03', NULL, '', ''),
(6, NULL, NULL, 'Cientista social, professor de sociologia', 'IFC', 'Herman Bach', '2030-04-03', NULL, '', ''),
(7, NULL, NULL, 'Professor de Irrigação', 'IFC', 'Eduardo Silveira', '2016-04-03', NULL, '', ''),
(8, NULL, NULL, 'Professor de programação', 'IFC', 'Leonardo Souza', '2030-08-03', NULL, '', ''),
(9, NULL, NULL, 'Doutora em SI, professora de redes', 'UFSC', 'Maria Torres', '2017-06-03', NULL, '', ''),
(10, NULL, NULL, 'Mestrado em quimica eletrica e organica', 'UFSC', 'Ana rodrigues', '2005-11-03', NULL, '', ''),
(11, NULL, NULL, 'Professor de agricultura', 'IFC', 'Paulo Bezerra', '2005-12-03', NULL, '', ''),
(12, NULL, NULL, 'Professor de fisica', 'IFSC', 'Ivan Mendes', '2009-08-04', NULL, '', ''),
(13, NULL, NULL, 'Professor de história da IFSC', 'IFSC', 'Mauricio Dias', '2013-08-12', NULL, '', ''),
(14, NULL, NULL, 'Bacharel em Quimica, professora de quimica na IFSC', 'IFSC', 'Victoria Coutte', '2015-08-10', NULL, '', ''),
(15, NULL, NULL, 'Doutor em geografia politica, cientista social', 'UFSC', 'João Vincente', '2025-02-02', NULL, '', ''),
(16, NULL, NULL, 'Doutora em SI, professora de redes', 'UFSC', 'Sara Rochell', '2020-05-09', NULL, '', ''),
(17, NULL, NULL, 'Cientista social, professor de sociologia', 'IFC', 'Mariana Bach', '2005-06-09', NULL, '', ''),
(18, NULL, NULL, 'Professor de Irrigação', 'IFC', 'Carlos Gloria', '2005-08-09', NULL, '', ''),
(19, NULL, NULL, 'Doutor em geografia politica, cientista social', 'UFSC', 'Vinicius Goht', '2001-04-10', NULL, '', ''),
(20, NULL, NULL, 'Mestrado em quimica eletrica e organica', 'UFSC', 'Thales Machado', '2023-05-10', NULL, '', ''),
(21, NULL, NULL, 'Professor de matematica', 'IFC', 'Ryan Cavalcanti', '2002-08-03', NULL, '', ''),
(22, NULL, NULL, 'Diretora de cursos academicos e formada em biologia', 'UFSC', 'Luiz Oliveira', '2005-02-03', NULL, '', ''),
(23, NULL, NULL, 'Doutor em geografia politica, cientista social', 'IFSC', 'Marcio Souza', '2005-01-03', NULL, '', ''),
(24, NULL, NULL, 'Professor de educação fisica', 'IFC', 'Amanda Becker', '2030-04-03', NULL, '', ''),
(25, NULL, NULL, 'Professor de quimica formado na UFSC', 'UFSC', 'Affonso Soares', '2028-04-03', NULL, '', ''),
(26, NULL, NULL, 'Cientista social, professor de sociologia', 'IFC', 'Herman Bach', '2030-04-03', NULL, '', ''),
(27, NULL, NULL, 'Professor de Irrigação', 'IFC', 'Eduardo Silveira', '2016-04-03', NULL, '', ''),
(28, NULL, NULL, 'Professor de programação', 'IFC', 'Leonardo Souza', '2030-08-03', NULL, '', ''),
(29, NULL, NULL, 'Doutora em SI, professora de redes', 'UFSC', 'Maria Torres', '2017-06-03', NULL, '', ''),
(30, NULL, NULL, 'Mestrado em quimica eletrica e organica', 'UFSC', 'Ana rodrigues', '2005-11-03', NULL, '', ''),
(31, NULL, NULL, 'Professor de agricultura', 'IFC', 'Paulo Bezerra', '2005-12-03', NULL, '', ''),
(32, NULL, NULL, 'Professor de fisica', 'IFSC', 'Ivan Mendes', '2009-08-04', NULL, '', ''),
(33, NULL, NULL, 'Professor de história da IFSC', 'IFSC', 'Mauricio Dias', '2013-08-12', NULL, '', ''),
(34, NULL, NULL, 'Bacharel em Quimica, professora de quimica na IFSC', 'IFSC', 'Victoria Coutte', '2015-08-10', NULL, '', ''),
(35, NULL, NULL, 'Doutor em geografia politica, cientista social', 'UFSC', 'João Vincente', '2025-02-02', NULL, '', ''),
(36, NULL, NULL, 'Doutora em SI, professora de redes', 'UFSC', 'Sara Rochell', '2020-05-09', NULL, '', ''),
(37, NULL, NULL, 'Cientista social, professor de sociologia', 'IFC', 'Mariana Bach', '2005-06-09', NULL, '', ''),
(38, NULL, NULL, 'Professor de Irrigação', 'IFC', 'Carlos Gloria', '2005-08-09', NULL, '', ''),
(39, NULL, NULL, 'Doutor em geografia politica, cientista social', 'UFSC', 'Vinicius Goht', '2001-04-10', NULL, '', ''),
(40, NULL, NULL, 'Mestrado em quimica eletrica e organica', 'UFSC', 'Thales Machado', '2023-05-10', NULL, '', ''),
(41, NULL, 'prof@gmail.com', NULL, NULL, 'prof', NULL, NULL, 'prof', ''),
(42, NULL, 'teste@gmail.com', '', NULL, 'teste', '0000-00-00', NULL, 'teste', ''),
(45, NULL, '', NULL, NULL, '', '0000-00-00', NULL, '', ''),
(46, NULL, '', '', NULL, '', '0000-00-00', NULL, '', ''),
(47, NULL, 'andre@gmail.com', 'Olá mundo', NULL, 'Andre Felipe', '2019-08-08', NULL, 'andre', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicar`
--

CREATE TABLE `publicar` (
  `cod_Professor_cod` int(5) DEFAULT NULL,
  `cod_Artigo_cod` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `video`
--

CREATE TABLE `video` (
  `codVideo` int(5) NOT NULL,
  `titulo` varchar(180) DEFAULT NULL,
  `descricao` varchar(240) DEFAULT NULL,
  `arquivo` varchar(180) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `video`
--

INSERT INTO `video` (`codVideo`, `titulo`, `descricao`, `arquivo`) VALUES
(1, 'video1', 'descricao1', 'video/video_nome1'),
(2, 'video2', 'descricao2', 'video/video_nome2'),
(3, 'video3', 'descricao3', 'video/video_nome3'),
(4, 'video4', 'descricao4', 'video/video_nome4'),
(5, 'video5', 'descricao5', 'video/video_nome5'),
(6, 'video6', 'descricao6', 'video/video_nome6'),
(7, 'video7', 'descricao7', 'video/video_nome7'),
(8, 'video8', 'descricao8', 'video/video_nome8'),
(9, 'video9', 'descricao9', 'video/video_nome9'),
(10, 'video10', 'descricao10', 'video/video_nome10'),
(11, 'video1', 'descricao1', 'video/video_nome1'),
(12, 'video2', 'descricao2', 'video/video_nome2'),
(13, 'video3', 'descricao3', 'video/video_nome3'),
(14, 'video4', 'descricao4', 'video/video_nome4'),
(15, 'video5', 'descricao5', 'video/video_nome5'),
(16, 'video6', 'descricao6', 'video/video_nome6'),
(17, 'video7', 'descricao7', 'video/video_nome7'),
(18, 'video8', 'descricao8', 'video/video_nome8'),
(19, 'video9', 'descricao9', 'video/video_nome9'),
(20, 'video10', 'descricao10', 'video/video_nome10');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`codAluno`);

--
-- Índices para tabela `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`codArtigo`);

--
-- Índices para tabela `comentar`
--
ALTER TABLE `comentar`
  ADD KEY `codProfessor` (`codProfessor`),
  ADD KEY `codComentario` (`codComentario`);

--
-- Índices para tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`codComentario`),
  ADD KEY `codVideo` (`codVideo`),
  ADD KEY `codAluno` (`codAluno`);

--
-- Índices para tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`codDisciplina`);

--
-- Índices para tabela `exercicio`
--
ALTER TABLE `exercicio`
  ADD PRIMARY KEY (`cod_exercicio`);

--
-- Índices para tabela `lecionar`
--
ALTER TABLE `lecionar`
  ADD KEY `codDisciplina` (`codDisciplina`),
  ADD KEY `codProfessor` (`codProfessor`);

--
-- Índices para tabela `postar`
--
ALTER TABLE `postar`
  ADD KEY `codProfessor` (`codProfessor`),
  ADD KEY `codVideo` (`codVideo`);

--
-- Índices para tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`codProfessor`),
  ADD KEY `cod_exercicio` (`cod_exercicio`);

--
-- Índices para tabela `publicar`
--
ALTER TABLE `publicar`
  ADD KEY `codProfessor` (`cod_Professor_cod`),
  ADD KEY `codArtigo` (`cod_Artigo_cod`);

--
-- Índices para tabela `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`codVideo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `codAluno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de tabela `artigos`
--
ALTER TABLE `artigos`
  MODIFY `codArtigo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `codComentario` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `codDisciplina` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `exercicio`
--
ALTER TABLE `exercicio`
  MODIFY `cod_exercicio` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `codProfessor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de tabela `video`
--
ALTER TABLE `video`
  MODIFY `codVideo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
