-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Set-2020 às 09:14
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `platform-factory`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `descr` text NOT NULL,
  `technologies` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `projects`
--

INSERT INTO `projects` (`id`, `name`, `descr`, `technologies`, `logo`) VALUES
(1, 'Prato Fit', 'Descrição do aplicativo', 'React JS, React Native, Node.JS', 'capa-prato-fit.png'),
(2, 'Horista', 'Descrição do app horista', 'PHP, MySql', 'capa-horista.png'),
(3, 'Idiomaster', 'Descrição do app idiomaster', 'React Native, Node.JS, Mongodb', 'capa-idiomaster.png'),
(4, 'Busco Sócio', 'Descrição do app busco socio', 'ReactJS, React Native, Node.JS, Mongodb, Firebase', 'capa-busco-socio.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projects_photos`
--

CREATE TABLE `projects_photos` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `descr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `projects_photos`
--

INSERT INTO `projects_photos` (`id`, `project_id`, `photo`, `descr`) VALUES
(1, 1, 'tela-1 prato fit.png', 'Imagem 1'),
(2, 1, 'tela-2 prato fit.png', 'Imagem 2'),
(3, 1, 'tela-3 prato fit.png', 'Tela 3'),
(4, 2, 'tela-1 horista.jpg', ''),
(5, 2, 'tela-2 horista.jpg', ''),
(6, 2, 'tela-3 horista.jpg', ''),
(7, 3, 'login-idiomaster.png', ''),
(8, 3, 'idiomaster 1.png', ''),
(9, 3, 'idiomaster 2.png', ''),
(10, 4, 'tela-1-busco-socio.jpg', ''),
(11, 4, 'tela-2-busco-socio.jpg', ''),
(12, 4, 'tela-3-busco-socio.jpg', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projects_photos`
--
ALTER TABLE `projects_photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `projects_photos`
--
ALTER TABLE `projects_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
