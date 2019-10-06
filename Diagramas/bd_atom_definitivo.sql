-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06-Out-2019 às 21:09
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
  `imgAluno` varchar(180) DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `curso` varchar(180) DEFAULT NULL,
  `email` varchar(180) NOT NULL,
  `senha` varchar(180) NOT NULL,
  `anoLetivo` varchar(180) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`codAluno`, `nomeAluno`, `imgAluno`, `dataNasc`, `curso`, `email`, `senha`, `anoLetivo`) VALUES
(5, 'Andre', NULL, '2019-10-03', 'Agropecuária', 'andre@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Segundo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
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
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`codArtigo`, `dataArtigo`, `titulo`, `imgArtigo`, `uploadArtigo`, `disciplina_codDisciplina`, `professores_codProfessor`, `alunos_codAluno`, `corpo`, `resumo`) VALUES
(25, '2019-10-04', 'Quiz redes de computadores', NULL, 'Quiz_redes_de_computadores_2019-10-04.pdf', 13, NULL, 5, '<p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\"><br></p><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">1. Explique a diferença entre topologias Físicas e Lógicas?</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: A diferença entre a topologias Físicas e Lógicas são: a topologia lógica trabalha com o layout da rede, como as redes estão conectadas e o meio de conexão entre os dispositivos de rede. A topologia lógica descreve o fluxo dos dados como eles vão ser transmitidos  através da rede a partir de um dispositivo para o outro sem ter conta a interligação física dos dispositivos.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">2. O que é modelo de referência OSI?</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: O modelo de referência OSI é um modelo que tem como objetivo decompor as comunicações  de rede em partes menores e mais simples. Com esse modelo a uma padronização nos componentes de rede, assim garantindo a comunicação entre sistemas com tecnologias diferentes.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">3. Porque a ISO criou o modelo OSI?</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: A ISO criou o modelo OSI pela necessidade de criar um padrão de comunicação entre as redes de computadores para que elas pudessem trabalhar juntas.  </span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">4. Como as redes de computadores podem ser classificadas, quanto à distância ou distribuição geográfica? </span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: As redes podem ser classificadas como:</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span class=\"Apple-tab-span\" style=\"white-space:pre;\">	</span></span><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">LAN </span><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">(Local Area Network): é uma rede local, onde os dispositivos estão ligados entre si através de um </span><span style=\"font-size:12pt;font-family:Arial;color:#222222;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">roteador.</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span class=\"Apple-tab-span\" style=\"white-space:pre;\">	</span></span><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">WAN</span><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> (Wide Area Network): é uma rede de computadores que abrange uma grande área geográfica, normalmente um país ou um continente.</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span class=\"Apple-tab-span\" style=\"white-space:pre;\">	</span></span><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">MAN</span><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> (Metropolitan Area Network) : é uma rede de computadores de área metropolitana, abrange cidades e pequenas regiões.</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span class=\"Apple-tab-span\" style=\"white-space:pre;\">	</span></span><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">RAN</span><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> (Regional Area Network): é uma rede de computadores com uma conexão de alta velocidade utilizando cabos de fibra ótica. As RANs abrange uma região geográfica específica, sendo esta maior que uma LAN e uma MAM e menor que uma WAN. </span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span class=\"Apple-tab-span\" style=\"white-space:pre;\">	</span></span><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">PAN</span><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> (Personal Area Network): é uma rede doméstica que liga recursos diversos ao longo de uma residência. Essa rede usa tecnologias de rede sem fios para interligar os mais variados dispositivos.</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span class=\"Apple-tab-span\" style=\"white-space:pre;\">	</span></span><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">WWAN</span><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> (Wireless Wide Area Network):  é uma rede de longa distância sem fio, é usado por operadoras de celular para criar uma rede de transmissão.</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">SAN</span><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> (Storage Area Network): é uma rede com objetivo exclusivo de armazenar dados. Possuem uma infraestrutura projetada especialmente para comportar  grandes tráfegos de dados.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">5. O que é PDU em protocolos de comunicação e quais são as PDUs descritas no modelo OSI.</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#333333;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R</span><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">: O Protocol Data Unit, em português Unidade de Dados de Protocolo,  é a unidade mínima transmitida em uma determinada  camada  de uma rede de computadores. No modelo OSI cada camada  recebe a PDU da camada superior como um bloco de dados, adicionando o seu cabeçalho de controle, assim criando sua própria PDU, esse processo é chamado de encapsulamento.</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">No modelo OSI as PDUs descritas são:</span></p><ul style=\"margin-top:0;margin-bottom:0;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Camada Física (camada 1): Bit;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Camada de enlace (camada 2): Quadro(Frame);</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Camada de rede (camada 3): Pacote (Packet);</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Camada de transporte (camada 4): Segmento;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Demais camadas (camadas 5, 6 e 7): Dados.</span></p></li></ul><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">6. Na sua concepção, quais as vantagens e desvantagens da utilização de padrões para redes de computadores?</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: Na minha concepção as vantagens de utilizar os padrões  para redes de computadores são: conexão entre computadores de fornecedores distintos, conexão entre sistemas distintos e facilidade na implantação e implementação das redes. As desvantagens são:  custo para a atualização da tecnologia quando ficam ultrapassadas.</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">7. Quantas camadas existem no modelo OSI e quais os seus nomes? </span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: No modelo de referência OSI possui 7 camadas e os seu nomes são: Física, Enlace, Rede, Transporte, Sessão, Apresentação e Aplicação.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">8. Qual a camada do modelo OSI é responsável pelo roteamento dos pacotes na rede? </span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: A camada do modelo OSI que é responsável pelo roteamento dos pacotes é a camada de rede.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">9. Quais as funções das camadas de enlace, transporte e Sessão.</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: As funções das camadas de enlace, transporte e sessão são:</span></p><ul style=\"margin-top:0;margin-bottom:0;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Enlace:  É a camada que controla o fluxo de dados de modo que um host mais rápido não sobrecarregue um mais lento. Nessa camada dois computadores estão ligados fisicamente por um canal de comunicação.</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Transporte: É a camada que implementa uma comunicação fim a fim transparente e confiável. Nessa camada faz o sequenciamento, controle de erros e o controle de fluxo.</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Sessão: É a camada que permite o estabelecimento de sessões entre usuários . </span></p></li></ul><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">10.Qual a função de um equipamento bridge(ponte) e por que podemos caracterizar um Access Point como possuindo esta funcionalidade. Em qual camada do modelo OSI este equipamento trabalha?</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: A função do equipamento bridge é de interconectar duas ou mais redes de informática que usam protocolos distintos. Podemos caracterizar um Access Point como possuindo esta funcionalidade porque ele trabalha de forma parecida com um repetidor WI-FI, porém funciona conectado a um roteador ou a um switch, assim conectando a rede WI-FI e a rede cabeada. Esse equipamento trabalha na camadas físicas e de enlace.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">11. Explique a diferença entre os equipamentos HUB e SWITCH, exemplificando seu modo de funcionamento? </span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: A diferença entre o HUB e o SWITCH é que o HUB recebe os sinais transmitidos pelas estações e os retransmite para todas as demais, já o SWITCH  filtra esses sinal e retransmite só para o endereço de destino.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">12.Quais métodos de encaminhamento são utilizados pelos Switches. Dos métodos descritos qual o melhor? Justifique. </span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: Os métodos de  encaminhamento que são utilizados pelo Switches são: Cut-through, Fragment Free e o Store-and-forward. Dos métodos descritos o melhor é o Store-and-forward porque ele recebe e analisa o quadro inteiro antes de encaminhá-lo para a porta de saída, assim permitindo detectar erros, evitando que se propagar pela rede.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">13.Explique qual a diferença entre quadro e pacotes?</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: A diferença entre quadros e pacotes é que os quadros trabalham na camada de enlace e os pacotes trabalham na camada de rede.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">14.Qual o tamanho dos quadros ethernet(IEEE 802.3) e wifi(IEEE 802.11)?</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: O tamanho do quadro ethernet (IEEE 802.3) é de no mínimo 64 bytes e no máximo 1518 bytes e o tamanho do quadro wi-fi(IEEE 802.11) é de no mínimo de 34 bytes e no máximo de 2346 bytes.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">15.Nos quadros Ethernet, o que significam os campos: DA, SA e FCS? Em quadro ethernet qual destes campos aparece por primeiro e qual o motivo? </span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: Nos quadros Ethernet os significados dos campos DA, SA e FCS são: DA (destiny address) é o campo que contém o destino do pacote, SA (source address) contém a origem do pacote e FCS (Frame Check Sequence) é o campo de verificação de erros no pacote. Destes campos o que aparece primeiro é o campo DA, pois ele é o primeiro a ser verificado pelo sistema porque ele contém o campo de origem. </span></p><p><b style=\"font-weight:normal;\"><br><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">16.Mostre em quais camadas do modelo OSI são realizadas as seguintes tarefas:</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">1. Divisão de fluxo de bits transmitidos em quadros</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">2. Roteamento de pacotes</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 36pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">3. Sincronização de serviços</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: A camada que realiza a tarefa de divisão de bits transmitidos em quadros é a camada física. A camada que realiza a tarefa de rotear pacotes é a  camada de rede. E a camada que realiza a tarefa de sincronização de serviços é a camada de sessão.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">*</span><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">17. Defina protocolo de comunicação e exemplifique fazendo alusão a comunicação humana.</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: Segundo</span><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> Forouzanf(2007</span><span style=\"font-size:12pt;font-family:Arial;color:#3c4043;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">) os </span><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">protocolos de comunicação são: “um conjunto de regras que governa a comunicação entre os dados.” Fazendo uma alusão a comunicação humana, os protocolos seriam as regras de etiqueta em uma conversa, para começar uma conversa é preciso que haja um comprimento, como um “bom dia” ou um “oi”.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">18. Explique com suas palavras o funcionamento das comunicações em broadcast. Dê um exemplo utilizando a comunicação humana como referência.</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: Uma comunicação em broadcast identifica todas as máquinas de uma rede, se um computador ligado a essa  rede enviar um pacote  será recebido por todas as máquinas conectadas à rede. Um exemplo utilizando a comunicação humana seria: um professor explicando o conteúdo para uma turma, o professor é a máquina que está enviando um pacote( o conteúdo da matéria) em uma comunicação broadcast onde todos os alunos recebem o conteúdo simultaneamente.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">19. Explique com suas palavras o funcionamento das comunicações em unicast. Dê um exemplo utilizando a comunicação humana como referência.</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: Uma comunicação unicast  são usados para a comunicação máquina-a-máquina, os endereços de uma máquina são únicos nesse tipo de rede. Assim uma máquina pode enviar um pacote apenas para uma determinada máquina na rede. Um exemplo utilizando a comunicação humana seria: um professor chamando a atenção de um aluno o chamando pelo nome, o professor ao chamar o nome do alunos está estabelecendo uma comunicação unicast.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">20. Conceitue endereço IP. Qual a diferença entre endereço IP e endereço MAC(físico). De um exemplo de cada um destes endereços.</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: O endereço IP é um rótulo numérico a qual cada dispositivo que está conectado a uma rede de computadores e usa o protocolo  internet para comunicação. A diferença entre endereço IP e endereço MAC(físico) são: o endereço IP é atribuído pela placa de rede e é mutável enquanto o endereço MAC também é atribuído pela placa de rede, mas é imutável. Um exemplo de um endereço IP é 192.168.0.10 e um exemplo de endereço MAC é 5c:c9:d3:1e:f9:f4.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">21. Defina o que é uma máscara de subrede?</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: Uma máscara de sub-rede é um número de 32-bit usado para mascarar o endereço IP e separar a parte correspondente à rede pública e o hosts. A máscara de rede é formada apenas por dois valores: 0 e 255, por exemplo: 255.0.255.255. O número 255 é a parte que indica o IP referente a rede e o 0 é o valor que indica a parte do endereço de IP referente ao host.</span></p><p><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">22.Quando configuramos uma interface de rede com o protocolo IP, o que significa o campo gateway e qual a função deste para a rede?</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">R: O campo gateway( ou portal) é um caminho de saída para outra rede distinta, sendo essa rede a internet, sendo ele responsável por tratar e analisar as informações que circulam por esse caminho. A função deste para rede é organizar o tráfego de dados entre uma máquina final e a internet, a tradução de informações entre redes diferentes permitindo a comunicação entre diferentes arquiteturas, e o controle das informações que entram e saem da rede.   </span></p><p><br></p>', 'Lista de exercício sobre as  questões básicas das redes de computadores'),
(26, '2019-10-06', 'Teste', NULL, NULL, 1, NULL, 5, '<p>Apenas um teste</p>', 'Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `codComentario` int(11) NOT NULL,
  `dataComentario` date DEFAULT NULL,
  `comentario` varchar(240) DEFAULT NULL,
  `com_alunos_codAluno` int(5) DEFAULT NULL,
  `com_professores_codProfessor` int(5) DEFAULT NULL,
  `artigo_codArtigo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
-- Estrutura da tabela `professores_has_disciplinas`
--

CREATE TABLE `professores_has_disciplinas` (
  `professores_codProfessor` int(5) NOT NULL,
  `disciplina_codDisiciplina` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`professores_codProfessor`,`disciplina_codDisiciplina`),
  ADD KEY `fk_professores_has_disciplina_disciplina1_idx` (`disciplina_codDisiciplina`),
  ADD KEY `fk_professores_has_disciplina_professores1_idx` (`professores_codProfessor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `codAluno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `artigos`
--
ALTER TABLE `artigos`
  MODIFY `codArtigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `codComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
  ADD CONSTRAINT `fk_professores_has_disciplina_disciplina1` FOREIGN KEY (`disciplina_codDisiciplina`) REFERENCES `disciplinas` (`codDisciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_professores_has_disciplina_professores1` FOREIGN KEY (`professores_codProfessor`) REFERENCES `professores` (`codProfessor`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
