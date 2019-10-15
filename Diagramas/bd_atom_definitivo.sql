-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 16-Out-2019 às 00:01
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
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `codAluno` int(5) NOT NULL,
  `nomeAluno` varchar(180) DEFAULT NULL,
  `imgAluno` varchar(540) DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `curso` varchar(180) DEFAULT NULL,
  `email` varchar(180) NOT NULL,
  `senha` varchar(180) NOT NULL,
  `anoLetivo` varchar(180) DEFAULT NULL,
  `tipo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`codAluno`, `nomeAluno`, `imgAluno`, `dataNasc`, `curso`, `email`, `senha`, `anoLetivo`, `tipo`) VALUES
(5, 'Andre', NULL, '2019-10-03', 'Agropecuária', 'andre@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Segundo', 0),
(9, 'Julia', 'ed6a65636f671705aa956f7044e42ef9.jpg', '2019-10-17', 'Agropecuária', 'julia@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Segundo', 0),
(11, 'Edson Roberto Fuck', '', '2019-10-18', 'Agropecuária', 'edson.fuck@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Primeiro', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE `artigos` (
  `codArtigo` int(11) NOT NULL,
  `dataArtigo` date DEFAULT NULL,
  `titulo` varchar(180) NOT NULL,
  `imgArtigo` varchar(45) DEFAULT NULL,
  `uploadArtigo` varchar(540) DEFAULT NULL,
  `disciplina_codDisciplina` int(5) NOT NULL,
  `professores_codProfessor` int(5) DEFAULT NULL,
  `alunos_codAluno` int(5) DEFAULT NULL,
  `corpo` longtext NOT NULL,
  `resumo` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`codArtigo`, `dataArtigo`, `titulo`, `imgArtigo`, `uploadArtigo`, `disciplina_codDisciplina`, `professores_codProfessor`, `alunos_codAluno`, `corpo`, `resumo`) VALUES
(72, '2019-10-14', 'awerawera', NULL, NULL, 1, 3, NULL, '<ol><li>areraraeraeras</li></ol>', 'raerawer'),
(75, '2019-10-15', 'Relatório de aula prática - Estudo das soluções', NULL, 'Relatório_de_aula_prática_-_Estudo_das_soluções_2019-10-15.pdf', 3, NULL, 11, '<ol style=\"margin-top:0;margin-bottom:0;\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Redija um procedimento, passo a passo, de como você prepararia as soluções a seguir: </span></p></li></ol><p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-c33759d9-7fff-db77-6ba0-9438b22eaca4\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Para fazer o preparo destas soluções, primeiramente calculamos a quantidade de soluto necessária para realizar a solução, para isso, usamos como método as contas apresentadas em sala de aula, em seguida, colocamos o vidro de relógio na balança para eliminar a tara a fim de zerar a balança e conseguirmos mais precisão na medida do soluto. Posteriormente, com uma espátula, colocamos cuidadosamente o soluto no vidro de relógio até atingir a quantidade certa para cada solução. Após isso, colocamos o soluto em um becker, adicionamos um pouco de água destilada e mexemos com um bastão de vidro para dissolver completamente o soluto. Depois de dissolvido, colocamos a solução em um balão volumétrico e fomos adicionando água destilada até atingir a quantidade adequada para realizar a solução de maneira mais eficaz. </span></p><p><b style=\"font-weight:normal;\"><br><br></b></p><ol style=\"margin-top:0;margin-bottom:0;\"><li dir=\"ltr\" style=\"list-style-type:lower-alpha;font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">100mL de uma solução de acetato de sódio (CH3COONa) 0,03 mol/L.</span></p></li></ol><p><b style=\"font-weight:normal;\"><br><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">82 g                  1 mol</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">                       ------</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">  x                     0,03 mol</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">1x = 82 * 0,03  →   </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">x = 2,46 g</span></p><p><b style=\"font-weight:normal;\"><br><br><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">2,46 g              1 L</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">             ------</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">  x                     0,1 L</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">1x = 2,46 * 0,1  →   </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">x = 0,246 g</span></p><p><b style=\"font-weight:normal;\"><br><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Na balança: 0,253 g</span></p><p><b style=\"font-weight:normal;\"><br><br></b></p><ol style=\"margin-top:0;margin-bottom:0;\" start=\"2\"><li dir=\"ltr\" style=\"list-style-type:lower-alpha;font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">100mL de uma solução de acetato de sódio 0,5g/L.</span></p></li></ol><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">            </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">1000 ml              5 g</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">                ------</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span class=\"Apple-tab-span\" style=\"white-space:pre;\">	</span></span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">            100 ml                 x</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">            1000x = 5 * 100   →    x = </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">500 </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">    →    </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">x = 0,5 g/L</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span class=\"Apple-tab-span\" style=\"white-space:pre;\">	</span></span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span class=\"Apple-tab-span\" style=\"white-space:pre;\">	</span></span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">                   1000</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> Na balança: 0,5002 g</span></p><p><b style=\"font-weight:normal;\"><br></b></p><ol style=\"margin-top:0;margin-bottom:0;\" start=\"3\"><li dir=\"ltr\" style=\"list-style-type:lower-alpha;font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">50mL de uma solução de acetato de sódio 5% (m/m).</span></p></li></ol><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">50 ml              100 %</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">            ------</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">               x                     5%</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">100x = 50 * 5    →    x = </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">250 </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">  →    </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">x = 2,5 g/L</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span class=\"Apple-tab-span\" style=\"white-space:pre;\">	</span></span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span class=\"Apple-tab-span\" style=\"white-space:pre;\">	</span></span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">                100</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">            Na balança: 2,5006g</span></p><p><b style=\"font-weight:normal;\"><br><br><br></b></p><ol style=\"margin-top:0;margin-bottom:0;\" start=\"2\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Sobre a solução supersaturada, descreva o que foi visto em sala de aula (no vídeo).</span></p></li></ol><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Para a solução apresentada no vídeo foi utilizado aproximadamente 90 g de acetato de sódio (soluto) em 50ml de água destilada. A solução foi aquecida a 100 ºC e podíamos observar apenas uma fase, ao baixar a temperatura e chegar a temperatura ambiente, ao agitar a solução ela se desestabiliza e o soluto aparece sólido com aspecto cristalizado e é possível observarmos mais de uma fase. Ao retirar a água observamos apenas o soluto sólido no becker, indicando que a quantidade de soluto da solução é superior a solubilidade, também podemos notar que no tipo supersaturado a solução é instável a ponto de qualquer movimento que aconteça faça com que soluto se destaque na solução.</span></p><p><b style=\"font-weight:normal;\"><br><br></b></p><ol style=\"margin-top:0;margin-bottom:0;\" start=\"3\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Identifique, na curva de solubilidade para o acetato (gráfico abaixo), qual o ponto (A, B ou C) refere-se à solução supersaturada. </span></p></li></ol><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: center;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span style=\"border: none; display: inline-block; overflow: hidden; width: 570px; height: 252px\"><img src=\"https://lh4.googleusercontent.com/OdtMEbVYIFCFCG35hZ5-fD0EpAI2cLWdXxEk6cRKHzMVqtz30gByqKWKn2cc9bPgX1XEpbVAd30Va75TYsRF4o44JxZ8Qw6-uNTR9tbzcRx6B2ldERPwGKtgQ6ZaOfLH3hGG6x7c\" width=\"570\" height=\"252\" style=\"margin-left: 0px; margin-top: 0px;\"></span></span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">O ponto A se refere a solução supersaturada, pois está acima da curva de solubilidade do acetato.</span></p><ol style=\"margin-top:0;margin-bottom:0;\" start=\"4\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Defina solução insaturada, saturada, saturada com corpo de fundo e supersaturada.</span></p></li></ol><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Solução insaturada: </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Apresenta a quantidade de soluto inferior ao coeficiente de solubilidade.</span></p><p><b style=\"font-weight:normal;\"><br><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Solução saturada: </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Apresenta a quantidade de soluto igual ao coeficiente de solubilidade, assim apresentando uma solução equilibrada.</span></p><p><b style=\"font-weight:normal;\"><br><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Solução saturada com corpo de fundo: </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Soluções que ultrapassaram a quantidade de soluto necessária.</span></p><p><b style=\"font-weight:normal;\"><br><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Solução supersaturada: </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Soluções que a quantidade de soluto dissolvida na solução é maior que o limite de solubilidade, solução instável onde qualquer agitação o soluto pode se sobressair na solução.</span></p><p><b style=\"font-weight:normal;\"><br><br><br><br></b></p><ol style=\"margin-top:0;margin-bottom:0;\" start=\"5\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Quais os coeficientes de solubilidade (curva do gráfico) do acetato de sódio em 20°C e em 100°C?</span></p></li></ol><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">A 20º é possível dissolver no máximo 122 g de acetato em 100 g de água, portanto, o coeficiente de solubilidade é a mesma quantidade do soluto.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">m1</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> = </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">m2</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">  →   Cs = 100 * </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">m1</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">    →   Cs = 100 * </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">122</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Cs    100                            m2                             100</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Cs = </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">12200</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">            →         </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Cs = 122</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">  </span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">          100</span></p><p><b style=\"font-weight:normal;\"><br><br><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">A 100º é possível dissolver no máximo 170 g de acetato em 100 g de água, portanto, o coeficiente de solubilidade é a mesma quantidade do soluto.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">m1</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> = </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">m2</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">  →   Cs = 100 * </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">m1</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">    →   Cs = 100 * </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">170</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Cs    100                            m2                             100</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Cs = </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">17000</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">            →         </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Cs = 170</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">  </span></p><p></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">          100</span></p><div><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span></div>', 'Relatório de aula prática - Estudo das soluções de 2018');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `codComentario` int(11) NOT NULL,
  `dataComentario` datetime DEFAULT NULL,
  `comentario` varchar(240) DEFAULT NULL,
  `com_alunos_codAluno` int(5) DEFAULT NULL,
  `com_professores_codProfessor` int(5) DEFAULT NULL,
  `artigo_codArtigo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`codComentario`, `dataComentario`, `comentario`, `com_alunos_codAluno`, `com_professores_codProfessor`, `artigo_codArtigo`) VALUES
(61, '2019-10-10 00:00:00', 'asfsf', NULL, 3, 33),
(81, '2019-10-10 00:00:00', 'fadfadfdsa', NULL, 3, 36),
(60, '2019-10-10 00:00:00', 'asfdfsdfdsf', NULL, 3, 33),
(82, '2019-10-10 00:00:00', 'Bem vindo ao mundo conectado', NULL, 3, 35),
(64, '2019-10-10 00:00:00', 'Teste', 5, NULL, 34),
(65, '2019-10-10 00:00:00', 'aangjfdngajdfngjadngjdfgikdnjfgjkdnafgjdsnujgaiksg', 5, NULL, 34),
(66, '2019-10-10 00:00:00', 'tetstastsettatesast', 5, NULL, 34),
(78, '2019-10-10 00:00:00', 'ols', 5, NULL, 36),
(80, '2019-10-10 00:00:00', 'Testetesetetseesttestset', NULL, 3, 36),
(72, '2019-10-10 00:00:00', 'Teste', NULL, 3, 34),
(71, '2019-09-03 00:00:00', 'Do passado', 5, NULL, 34),
(86, '2019-10-10 23:09:03', 'teste123', 5, NULL, 42),
(87, '2019-10-13 13:31:42', 'Okayyyy', 5, NULL, 59),
(91, '2019-10-15 20:04:34', 'Que bosta', 5, NULL, 74),
(92, '2019-10-15 20:04:53', 'Que coisa\r\n', 5, NULL, 74),
(93, '2019-10-15 20:05:09', 'Ta mais porque de primeira não pega', 5, NULL, 74),
(94, '2019-10-15 20:10:11', 'Teste', 5, NULL, 72);

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `codProfessor` int(5) NOT NULL,
  `imgProfessor` varchar(540) DEFAULT NULL,
  `email` varchar(180) NOT NULL,
  `miniCurriculo` varchar(240) DEFAULT NULL,
  `instituicao` varchar(180) DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `senha` varchar(180) NOT NULL,
  `nomeProfessor` varchar(180) NOT NULL,
  `tipo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`codProfessor`, `imgProfessor`, `email`, `miniCurriculo`, `instituicao`, `dataNasc`, `senha`, `nomeProfessor`, `tipo`) VALUES
(3, NULL, 'teste@gmail.com', 'fafasfas', NULL, '2019-10-09', '25d55ad283aa400af464c76d713c07ad', 'Teste', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores_has_disciplinas`
--

CREATE TABLE `professores_has_disciplinas` (
  `professores_codProfessor` int(5) NOT NULL,
  `disciplina_codDisciplina` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professores_has_disciplinas`
--

INSERT INTO `professores_has_disciplinas` (`professores_codProfessor`, `disciplina_codDisciplina`) VALUES
(3, 2);

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
  ADD PRIMARY KEY (`codArtigo`),
  ADD KEY `fk_artigo_disciplina1_idx` (`disciplina_codDisciplina`),
  ADD KEY `fk_artigo_professores1_idx` (`professores_codProfessor`),
  ADD KEY `fk_artigo_alunos1_idx` (`alunos_codAluno`);

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`codComentario`),
  ADD KEY `fk_comentario_alunos_idx` (`com_alunos_codAluno`),
  ADD KEY `fk_comentario_professores1_idx` (`com_professores_codProfessor`),
  ADD KEY `fk_comentario_artigo1_idx` (`artigo_codArtigo`);

--
-- Índices para tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`codDisciplina`);

--
-- Índices para tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`codProfessor`);

--
-- Índices para tabela `professores_has_disciplinas`
--
ALTER TABLE `professores_has_disciplinas`
  ADD PRIMARY KEY (`professores_codProfessor`,`disciplina_codDisciplina`),
  ADD KEY `fk_professores_has_disciplina_disciplina1_idx` (`disciplina_codDisciplina`),
  ADD KEY `fk_professores_has_disciplina_professores1_idx` (`professores_codProfessor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `codAluno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `artigos`
--
ALTER TABLE `artigos`
  MODIFY `codArtigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `codComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `codDisciplina` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `codProfessor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `artigos`
--
ALTER TABLE `artigos`
  ADD CONSTRAINT `fk_artigo_alunos1` FOREIGN KEY (`alunos_codAluno`) REFERENCES `alunos` (`codAluno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artigo_disciplina1` FOREIGN KEY (`disciplina_codDisciplina`) REFERENCES `disciplinas` (`codDisciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artigo_professores1` FOREIGN KEY (`professores_codProfessor`) REFERENCES `professores` (`codProfessor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `professores_has_disciplinas`
--
ALTER TABLE `professores_has_disciplinas`
  ADD CONSTRAINT `fk_professores_has_disciplina_disciplina1` FOREIGN KEY (`disciplina_codDisciplina`) REFERENCES `disciplinas` (`codDisciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_professores_has_disciplina_professores1` FOREIGN KEY (`professores_codProfessor`) REFERENCES `professores` (`codProfessor`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
