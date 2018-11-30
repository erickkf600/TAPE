-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jun-2018 às 16:28
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tape`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `idcad` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `celular` varchar(30) NOT NULL,
  `email` varchar(70) NOT NULL,
  `cargo` varchar(70) NOT NULL,
  `adm` varchar(5) NOT NULL,
  `senha` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`idcad`, `nome`, `celular`, `email`, `cargo`, `adm`, `senha`) VALUES
(4, 'Carlos', '(21) 96581-9351', 'chmaacedo@gmail.com', 'Programador Back-end', 's', '123'),
(5, 'ADMIN', '(21) 92121-2121', 'admin@gmail.com', 'ADMINISTRADOR', 's', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `colab`
--

CREATE TABLE `colab` (
  `idcolab` int(11) NOT NULL,
  `adm` varchar(1) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `subdescricao` varchar(300) NOT NULL,
  `img` varchar(30) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `github` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `colab`
--

INSERT INTO `colab` (`idcolab`, `adm`, `nome`, `telefone`, `descricao`, `subdescricao`, `img`, `facebook`, `twitter`, `github`) VALUES
(12, 's', 'JoÃ£o Victor', '(21)98475-8547', 'TÃ©cnico de informatica Formado pelo grupo Senac', 'Gerente de Projeto', '12.jpg', 'JoÃ£o Victor', 'JoÃ£o Victor', 'JoÃ£o Victor'),
(13, 's', 'Carlos Henrique', '(21)97641-5430', 'TÃ©cnico de InformÃ¡tica especializado em programaÃ§Ã£o PHP', 'Programador Back-end', '13.png', 'CHmacedo', 'CHmacedo', 'CHmacedo'),
(14, 's', 'Alexandre Junior', '(21)7785-6931', 'TÃ©cnico em informatica certificado pelo grupo Senac, responsÃ¡vel pela virtualizaÃ§Ã£o e configuraÃ§Ã£o remota', 'Virtualizador', '14.png', 'Juninho', 'Juninho', 'Juninho'),
(15, 's', 'Erick Ferreira', '(21)98546-8520', 'Programador Front-End formado pelo grupo Senac', 'Programador Front-End', '15.png', 'Erickkf600', 'Erickkf600', 'Erickkf600');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `idproj` int(11) NOT NULL,
  `site` varchar(100) NOT NULL,
  `img` varchar(30) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `empresa` varchar(70) NOT NULL,
  `descricao` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`idproj`, `site`, `img`, `nome`, `empresa`, `descricao`) VALUES
(33, 'http://10.69.134.237/projeto/projeto9/', '33.png', 'BrasilianStore', 'BrasilianStore', 'Loja Online'),
(34, 'http://10.69.134.238/accio/', '34.png', 'ACCIO', 'ACCIO', 'Loja Online'),
(35, 'http://localhost/livrarialivrenos/', '35.png', 'LivreNÃ³s', 'Livraria', 'Livraria ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

CREATE TABLE `sobre` (
  `idsobre` int(11) NOT NULL,
  `missao` varchar(500) NOT NULL,
  `visao` varchar(500) NOT NULL,
  `valores` varchar(500) NOT NULL,
  `nossahistoria` varchar(700) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sobre`
--

INSERT INTO `sobre` (`idsobre`, `missao`, `visao`, `valores`, `nossahistoria`, `img`) VALUES
(1, 'Desenvolver ambientes virtuais para atender as necessidades de empresas de diversos segmentos com a finalidade de apresentar seus produtos e serviÃ§os para seus futuros clientes afins de cativa-los com interfaces convidativas.  ', 'A  TAPE  foi  criada  em  2018,  com  a  proposta  de  solucionar  problemas  empresariais   com foco em plataformas online, afim de chegar a outras tecnologia com App e etc.', 'Visando a melhor plataforma para sua empresa, nÃ³s entregamos o que sua empresa realmente precisa com plataforma interativa e fÃ¡ceis para seus clientes.', 'A TAPE foi criada em 2018, com a proposta de soslucionar problemas empresariais com foco em aplicaÃ§Ãµes online. Desenvolvida por um grupo de amigos que viram a necessidade do mercado.  A origem da palavra vem do tupi-guarani, e significa CAMINHO trazendo aos nossos clientes a primordial informaÃ§Ã£o, CRIAMOS O MELHOR CAMINHO PARA VOCÃŠ.', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `idvag` int(11) NOT NULL,
  `funcao` varchar(70) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `salario` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`idcad`);

--
-- Indexes for table `colab`
--
ALTER TABLE `colab`
  ADD PRIMARY KEY (`idcolab`);

--
-- Indexes for table `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`idproj`);

--
-- Indexes for table `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`idsobre`);

--
-- Indexes for table `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`idvag`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `idcad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `colab`
--
ALTER TABLE `colab`
  MODIFY `idcolab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `projeto`
--
ALTER TABLE `projeto`
  MODIFY `idproj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sobre`
--
ALTER TABLE `sobre`
  MODIFY `idsobre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vagas`
--
ALTER TABLE `vagas`
  MODIFY `idvag` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
