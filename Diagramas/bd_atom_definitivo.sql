-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 02/10/2019 às 16:44
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
(3, 'Andre', NULL, '2019-09-05', 'Agropecuária', 'andfufe@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Segundo'),
(4, 'Jose', NULL, '2019-10-03', 'Agropecuária', 'jose@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Terceiro');

-- --------------------------------------------------------

--
-- Estrutura para tabela `artigos`
--

CREATE TABLE `artigos` (
  `codArtigo` int(11) NOT NULL,
  `dataArtigo` date DEFAULT NULL,
  `titulo` varchar(180) NOT NULL,
  `imgArtigo` varchar(45) DEFAULT NULL,
  `uploadArtigo` varchar(45) DEFAULT NULL,
  `disciplina_codDisciplina` int(5) NOT NULL,
  `professores_codProfessor` int(5) DEFAULT NULL,
  `alunos_codAluno` int(5) DEFAULT NULL,
  `corpo` longtext NOT NULL,
  `resumo` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Fazendo dump de dados para tabela `artigos`
--

INSERT INTO `artigos` (`codArtigo`, `dataArtigo`, `titulo`, `imgArtigo`, `uploadArtigo`, `disciplina_codDisciplina`, `professores_codProfessor`, `alunos_codAluno`, `corpo`, `resumo`) VALUES
(16, '2019-09-23', 'AK-47 a arma transforma a guerra', '05e3c1ca02bf05f8c20a84b39c16f568.jpg', NULL, 5, NULL, 3, '<p><span id=\"docs-internal-guid-fe4610c8-7fff-44be-7db7-f295ffb5c57a\"></span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:\'Times New Roman\';color:#00000a;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Resumo: </span><span style=\"font-size:11pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Nosso trabalho tem como objetivo integrar as disciplinas de Geografia e História em cunho de demonstrar a visão da(s): i) a importância histórica da arma como a sua popularização e causa letal dentro da sociedade; ii) as consequências geopolíticas da cultura kalashnikov, e relações comerciais intercontinentais com o tráfico de armas, especialmente a AK-47. Nosso objetivo é demonstrar a importância histórica que o AK possui diante de suas consequências culturais e governamentais em escala global, e como que seu ícone se tornou a base para nós definirmos a aparência de um fuzil mortal. Nesse contexto, o trabalho tem conexão com capítulos recorrentes das matérias básicas selecionadas, como guerras civis que se encaixam na disciplina de história, se aprofundando na alteração das culturas e sociedade; e os fatores geopolíticos que se encaixam com a disciplina de geografia, tratando da instabilidade de nações/governos e o comércio ilegal de armas. Durante o desenvolvimento deste trabalho tivemos o auxílio do livro “AK-47 - A arma que transformou a guerra”, de Larry Kahaner (2010), onde extraímos grande parte das pesquisas, além também de temos consultado diversos artigos, e posters históricos em busca de se aprofundar ainda mais em vários fatores históricos da arma e seus efeitos. Além disso buscamos também em estudar a arma em si, deste modo aprendemos como era o seu funcionamento e o porque ela é considerada tão fácil de ser manuseada, como já era relatado por diversos soldados e guerrilheiros que já a portaram. Para nossa apresentação, inicialmente iremos realizar uma breve introdução sobre nosso tema onde vamos destacar a importância histórica e a fatalidade do AK, em seguida passaremos a aprofundar no assunto mencionando assim sua criação e desenvolvimento após a segunda guerra mundial; a reputação da arma durante os conflitos que ocorreram ao redor do globo como a guerra do vietnã, conflitos civis como a guerra civil em Serra Leoa&nbsp; e em Nicarágua; o reconhecimento da arma diante dos governos e autoridades; o comércio ilegal de armas tendo o AK-47 como principal alvo de desejo, e sua comparação perante outras armas, onde argumentamos sobre sua eficiência. A apresentação será realizada com a presença de cartazes informativos tanto sobre a arma em si quanto suas consequências permitindo assim exemplos para que o espectador possa compreender o assunto de forma simples. Haverá também uma variedade de posters de diferentes períodos históricos no qual representam a AK-47 como elemento em suas figuras, também apresentaremos um mapa no qual vamos discutir em relação às nações e culturas que sofreram efeitos da arma, e também contaremos com uma réplica feita de papel kraft da própria arma feita pela nossa equipe, assim podemos explicar melhor seu funcionamento de forma mais simples. A nossa banca terá como objetivo a atração do público pelas cores fortes, os objetos presentes, incluindo a réplica, que assim despertará uma sensação de curiosidade nas pessoas. Com isso esperamos contribuir para despertar o interesse no público e passar de forma simples a compreensão desse tema histórico que é tão pouco divulgado.</span><span style=\"border: none; display: inline-block; overflow: hidden; width: 793px; height: 177px\"></span></p>', ''),
(17, '2019-09-23', 'Sala de aula invertida', NULL, NULL, 13, NULL, 3, 'O professor é um gestor do conhecimento.', ''),
(18, '2019-09-23', 'Relatório de aula prática - Estudo das soluções', NULL, NULL, 3, NULL, 3, '<ol style=\"margin-top:0;margin-bottom:0;\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Redija um procedimento, passo a passo, de como você prepararia as soluções a seguir:&nbsp;</span></p></li></ol><p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-f32a7a6c-7fff-110d-d665-afc175a44e44\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Para fazer o preparo destas soluções, primeiramente calculamos a quantidade de soluto necessária para realizar a solução, para isso, usamos como método as contas apresentadas em sala de aula, em seguida, colocamos o vidro de relógio na balança para eliminar a tara a fim de zerar a balança e conseguirmos mais precisão na medida do soluto. Posteriormente, com uma espátula, colocamos cuidadosamente o soluto no vidro de relógio até atingir a quantidade certa para cada solução. Após isso, colocamos o soluto em um becker, adicionamos um pouco de água destilada e mexemos com um bastão de vidro para dissolver completamente o soluto. Depois de dissolvido, colocamos a solução em um balão volumétrico e fomos adicionando água destilada até atingir a quantidade adequada para realizar a solução de maneira mais eficaz.&nbsp;</span></p><p><b style=\"font-weight:normal;\"><br><br></b></p><ol style=\"margin-top:0;margin-bottom:0;\"><li dir=\"ltr\" style=\"list-style-type:lower-alpha;font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">100mL de uma solução de acetato de sódio (CH3COONa) 0,03 mol/L.</span></p></li></ol><p><b style=\"font-weight:normal;\"><br><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">82 g&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1 mol</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;------</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;x &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 0,03 mol</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">1x = 82 * 0,03&nbsp; →   </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">x = 2,46 g</span></p><p><b style=\"font-weight:normal;\"><br><br><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">2,46 g&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1 L</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;------</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;x &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 0,1 L</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">1x = 2,46 * 0,1&nbsp; →   </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">x = 0,246 g</span></p><p><b style=\"font-weight:normal;\"><br><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Na balança: 0,253 g</span></p><p><b style=\"font-weight:normal;\"><br><br></b></p><ol style=\"margin-top:0;margin-bottom:0;\" start=\"2\"><li dir=\"ltr\" style=\"list-style-type:lower-alpha;font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">100mL de uma solução de acetato de sódio 0,5g/L.</span></p></li></ol><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">1000 ml&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 5 g</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;------</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span class=\"Apple-tab-span\" style=\"white-space:pre;\">	</span></span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100 ml &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; x</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1000x = 5 * 100 &nbsp; →    x = </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">500 </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;&nbsp;&nbsp;→&nbsp; &nbsp; </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">x = 0,5 g/L</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span class=\"Apple-tab-span\" style=\"white-space:pre;\">	</span></span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span class=\"Apple-tab-span\" style=\"white-space:pre;\">	</span></span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1000</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;Na balança: 0,5002 g</span></p><p><b style=\"font-weight:normal;\"><br></b></p><ol style=\"margin-top:0;margin-bottom:0;\" start=\"3\"><li dir=\"ltr\" style=\"list-style-type:lower-alpha;font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">50mL de uma solução de acetato de sódio 5% (m/m).</span></p></li></ol><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">50 ml&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 100 %</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;------</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 5%</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">100x = 50 * 5&nbsp; &nbsp; →    x = </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">250 </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;→&nbsp; &nbsp; </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">x = 2,5 g/L</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span class=\"Apple-tab-span\" style=\"white-space:pre;\">	</span></span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span class=\"Apple-tab-span\" style=\"white-space:pre;\">	</span></span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 100</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Na balança: 2,5006g</span></p><p><b style=\"font-weight:normal;\"><br><br><br></b></p><ol style=\"margin-top:0;margin-bottom:0;\" start=\"2\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Sobre a solução supersaturada, descreva o que foi visto em sala de aula (no vídeo).</span></p></li></ol><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Para a solução apresentada no vídeo foi utilizado aproximadamente 90 g de acetato de sódio (soluto) em 50ml de água destilada. A solução foi aquecida a 100 ºC e podíamos observar apenas uma fase, ao baixar a temperatura e chegar a temperatura ambiente, ao agitar a solução ela se desestabiliza e o soluto aparece sólido com aspecto cristalizado e é possível observarmos mais de uma fase. Ao retirar a água observamos apenas o soluto sólido no becker, indicando que a quantidade de soluto da solução é superior a solubilidade, também podemos notar que no tipo supersaturado a solução é instável a ponto de qualquer movimento que aconteça faça com que soluto se destaque na solução.</span></p><p><b style=\"font-weight:normal;\"><br><br></b></p><ol style=\"margin-top:0;margin-bottom:0;\" start=\"3\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Identifique, na curva de solubilidade para o acetato (gráfico abaixo), qual o ponto (A, B ou C) refere-se à solução supersaturada.&nbsp;</span></p></li></ol><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: center;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span style=\"border: none; display: inline-block; overflow: hidden; width: 570px; height: 252px\"><img src=\"https://lh4.googleusercontent.com/OdtMEbVYIFCFCG35hZ5-fD0EpAI2cLWdXxEk6cRKHzMVqtz30gByqKWKn2cc9bPgX1XEpbVAd30Va75TYsRF4o44JxZ8Qw6-uNTR9tbzcRx6B2ldERPwGKtgQ6ZaOfLH3hGG6x7c\" width=\"570\" height=\"252\" style=\"margin-left: 0px; margin-top: 0px;\"></span></span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">O ponto A se refere a solução supersaturada, pois está acima da curva de solubilidade do acetato.</span></p><ol style=\"margin-top:0;margin-bottom:0;\" start=\"4\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Defina solução insaturada, saturada, saturada com corpo de fundo e supersaturada.</span></p></li></ol><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Solução insaturada: </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Apresenta a quantidade de soluto inferior ao coeficiente de solubilidade.</span></p><p><b style=\"font-weight:normal;\"><br><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Solução saturada: </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Apresenta a quantidade de soluto igual ao coeficiente de solubilidade, assim apresentando uma solução equilibrada.</span></p><p><b style=\"font-weight:normal;\"><br><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Solução saturada com corpo de fundo: </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Soluções que ultrapassaram a quantidade de soluto necessária.</span></p><p><b style=\"font-weight:normal;\"><br><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Solução supersaturada: </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Soluções que a quantidade de soluto dissolvida na solução é maior que o limite de solubilidade, solução instável onde qualquer agitação o soluto pode se sobressair na solução.</span></p><p><b style=\"font-weight:normal;\"><br><br><br><br></b></p><ol style=\"margin-top:0;margin-bottom:0;\" start=\"5\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Quais os coeficientes de solubilidade (curva do gráfico) do acetato de sódio em 20°C e em 100°C?</span></p></li></ol><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">A 20º é possível dissolver no máximo 122 g de acetato em 100 g de água, portanto, o coeficiente de solubilidade é a mesma quantidade do soluto.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">m1</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> = </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">m2</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp; → &nbsp; Cs = 100 * </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">m1</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp; &nbsp; →   Cs = 100 * </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">122</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Cs&nbsp; &nbsp; 100    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; m2                             100</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Cs = </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">12200</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; →         </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Cs = 122</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100</span></p><p><b style=\"font-weight:normal;\"><br><br><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">A 100º é possível dissolver no máximo 170 g de acetato em 100 g de água, portanto, o coeficiente de solubilidade é a mesma quantidade do soluto.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">m1</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> = </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">m2</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp; → &nbsp; Cs = 100 * </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">m1</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp; &nbsp; →   Cs = 100 * </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">170</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Cs&nbsp; &nbsp; 100    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; m2                             100</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Cs = </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">17000</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; →         </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Cs = 170</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;</span></p><p></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100</span></p><div><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span></div>', ''),
(19, '2019-10-02', 'Bla1', NULL, 'Bla1_2019-10-02.pdf', 16, NULL, 4, '<p>Bla</p>', 'BlaBlaBla'),
(20, '2019-10-02', 'Teste_teste', '221cac3c8de3a2ea89d2b23a4e32b910.jpg', 'Teste_teste_2019-10-02.pdf', 1, NULL, 4, '<p>Teste</p>', 'Teste');

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
(14, 'Química(tec)', 'qui.png'),
(15, 'Portugues', NULL),
(16, 'Nenhuma', NULL);

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
  MODIFY `codAluno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `artigos`
--
ALTER TABLE `artigos`
  MODIFY `codArtigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `codComentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `codDisciplina` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `codProfessor` int(5) NOT NULL AUTO_INCREMENT;
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
