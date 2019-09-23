-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 23/09/2019 às 12:01
-- Versão do servidor: 5.7.26-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `codAluno` int(5) NOT NULL,
  `nomeAluno` varchar(180) DEFAULT NULL,
  `imgAluno` varchar(180) DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `curso` varchar(180) DEFAULT NULL,
  `email` varchar(180) NOT NULL,
  `senha` varchar(180) NOT NULL,
  `anoLetivo` varchar(180) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Fazendo dump de dados para tabela `alunos`
--

INSERT INTO `alunos` (`codAluno`, `nomeAluno`, `imgAluno`, `dataNasc`, `curso`, `email`, `senha`, `anoLetivo`) VALUES
(3, 'Andre', NULL, '2019-09-05', 'Agropecuária', 'andfufe@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Segundo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `artigos`
--

CREATE TABLE `artigos` (
  `codArtigo` int(11) NOT NULL,
  `dataArtigo` date DEFAULT NULL,
  `titulo` varchar(180) NOT NULL,
  `imgArtigo` varchar(45) DEFAULT NULL,
  `uploadArtigos` varchar(45) DEFAULT NULL,
  `disciplina_codDisciplina` int(5) NOT NULL,
  `professores_codProfessor` int(5) DEFAULT NULL,
  `alunos_codAluno` int(5) DEFAULT NULL,
  `corpo` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Fazendo dump de dados para tabela `artigos`
--

INSERT INTO `artigos` (`codArtigo`, `dataArtigo`, `titulo`, `imgArtigo`, `uploadArtigos`, `disciplina_codDisciplina`, `professores_codProfessor`, `alunos_codAluno`, `corpo`) VALUES
(16, '2019-09-23', 'AK-47 a arma transforma a guerra', '05e3c1ca02bf05f8c20a84b39c16f568.jpg', NULL, 5, NULL, 3, '<p><span id=\"docs-internal-guid-fe4610c8-7fff-44be-7db7-f295ffb5c57a\"></span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:\'Times New Roman\';color:#00000a;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Resumo: </span><span style=\"font-size:11pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Nosso trabalho tem como objetivo integrar as disciplinas de Geografia e História em cunho de demonstrar a visão da(s): i) a importância histórica da arma como a sua popularização e causa letal dentro da sociedade; ii) as consequências geopolíticas da cultura kalashnikov, e relações comerciais intercontinentais com o tráfico de armas, especialmente a AK-47. Nosso objetivo é demonstrar a importância histórica que o AK possui diante de suas consequências culturais e governamentais em escala global, e como que seu ícone se tornou a base para nós definirmos a aparência de um fuzil mortal. Nesse contexto, o trabalho tem conexão com capítulos recorrentes das matérias básicas selecionadas, como guerras civis que se encaixam na disciplina de história, se aprofundando na alteração das culturas e sociedade; e os fatores geopolíticos que se encaixam com a disciplina de geografia, tratando da instabilidade de nações/governos e o comércio ilegal de armas. Durante o desenvolvimento deste trabalho tivemos o auxílio do livro “AK-47 - A arma que transformou a guerra”, de Larry Kahaner (2010), onde extraímos grande parte das pesquisas, além também de temos consultado diversos artigos, e posters históricos em busca de se aprofundar ainda mais em vários fatores históricos da arma e seus efeitos. Além disso buscamos também em estudar a arma em si, deste modo aprendemos como era o seu funcionamento e o porque ela é considerada tão fácil de ser manuseada, como já era relatado por diversos soldados e guerrilheiros que já a portaram. Para nossa apresentação, inicialmente iremos realizar uma breve introdução sobre nosso tema onde vamos destacar a importância histórica e a fatalidade do AK, em seguida passaremos a aprofundar no assunto mencionando assim sua criação e desenvolvimento após a segunda guerra mundial; a reputação da arma durante os conflitos que ocorreram ao redor do globo como a guerra do vietnã, conflitos civis como a guerra civil em Serra Leoa&nbsp; e em Nicarágua; o reconhecimento da arma diante dos governos e autoridades; o comércio ilegal de armas tendo o AK-47 como principal alvo de desejo, e sua comparação perante outras armas, onde argumentamos sobre sua eficiência. A apresentação será realizada com a presença de cartazes informativos tanto sobre a arma em si quanto suas consequências permitindo assim exemplos para que o espectador possa compreender o assunto de forma simples. Haverá também uma variedade de posters de diferentes períodos históricos no qual representam a AK-47 como elemento em suas figuras, também apresentaremos um mapa no qual vamos discutir em relação às nações e culturas que sofreram efeitos da arma, e também contaremos com uma réplica feita de papel kraft da própria arma feita pela nossa equipe, assim podemos explicar melhor seu funcionamento de forma mais simples. A nossa banca terá como objetivo a atração do público pelas cores fortes, os objetos presentes, incluindo a réplica, que assim despertará uma sensação de curiosidade nas pessoas. Com isso esperamos contribuir para despertar o interesse no público e passar de forma simples a compreensão desse tema histórico que é tão pouco divulgado.</span><span style=\"border: none; display: inline-block; overflow: hidden; width: 793px; height: 177px\"></span></p>');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `codComentario` int(11) NOT NULL,
  `dataComentario` date DEFAULT NULL,
  `comentario` varchar(240) DEFAULT NULL,
  `alunos_codAluno` int(5) NOT NULL,
  `professores_codProfessor` int(5) NOT NULL,
  `artigo_codArtigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `codDisciplina` int(5) NOT NULL,
  `nomeDisciplina` varchar(180) DEFAULT NULL,
  `imgDisciplina` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Fazendo dump de dados para tabela `disciplinas`
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
(14, 'Química(tec)', 'qui.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `professores`
--

CREATE TABLE `professores` (
  `codProfessor` int(5) NOT NULL,
  `imgProfessor` varchar(180) DEFAULT NULL,
  `email` varchar(180) NOT NULL,
  `miniCurriculo` varchar(240) DEFAULT NULL,
  `instituicao` varchar(180) DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `senha` varchar(180) NOT NULL,
  `nomeProfessor` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `professores_has_disciplinas`
--

CREATE TABLE `professores_has_disciplinas` (
  `professores_codProfessor` int(5) NOT NULL,
  `disciplina_codDisiciplina` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`codAluno`);

--
-- Índices de tabela `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`codArtigo`),
  ADD KEY `fk_artigo_disciplina1_idx` (`disciplina_codDisciplina`),
  ADD KEY `fk_artigo_professores1_idx` (`professores_codProfessor`),
  ADD KEY `fk_artigo_alunos1_idx` (`alunos_codAluno`);

--
-- Índices de tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`codComentario`),
  ADD KEY `fk_comentario_alunos_idx` (`alunos_codAluno`),
  ADD KEY `fk_comentario_professores1_idx` (`professores_codProfessor`),
  ADD KEY `fk_comentario_artigo1_idx` (`artigo_codArtigo`);

--
-- Índices de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`codDisciplina`);

--
-- Índices de tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`codProfessor`);

--
-- Índices de tabela `professores_has_disciplinas`
--
ALTER TABLE `professores_has_disciplinas`
  ADD PRIMARY KEY (`professores_codProfessor`,`disciplina_codDisiciplina`),
  ADD KEY `fk_professores_has_disciplina_disciplina1_idx` (`disciplina_codDisiciplina`),
  ADD KEY `fk_professores_has_disciplina_professores1_idx` (`professores_codProfessor`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `codAluno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `artigos`
--
ALTER TABLE `artigos`
  MODIFY `codArtigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `codComentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `codDisciplina` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `codProfessor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `artigos`
--
ALTER TABLE `artigos`
  ADD CONSTRAINT `fk_artigo_alunos1` FOREIGN KEY (`alunos_codAluno`) REFERENCES `alunos` (`codAluno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artigo_disciplina1` FOREIGN KEY (`disciplina_codDisciplina`) REFERENCES `disciplinas` (`codDisciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artigo_professores1` FOREIGN KEY (`professores_codProfessor`) REFERENCES `professores` (`codProfessor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_comentario_alunos` FOREIGN KEY (`alunos_codAluno`) REFERENCES `alunos` (`codAluno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comentario_artigo1` FOREIGN KEY (`artigo_codArtigo`) REFERENCES `artigos` (`codArtigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comentario_professores1` FOREIGN KEY (`professores_codProfessor`) REFERENCES `professores` (`codProfessor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `professores_has_disciplinas`
--
ALTER TABLE `professores_has_disciplinas`
  ADD CONSTRAINT `fk_professores_has_disciplina_disciplina1` FOREIGN KEY (`disciplina_codDisiciplina`) REFERENCES `disciplinas` (`codDisciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_professores_has_disciplina_professores1` FOREIGN KEY (`professores_codProfessor`) REFERENCES `professores` (`codProfessor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
