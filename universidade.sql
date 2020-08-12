-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Nov-2017 às 17:11
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universidade`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `mtr` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(35) NOT NULL,
  `curso` varchar(40) NOT NULL,
  `senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`mtr`, `nome`, `email`, `curso`, `senha`) VALUES
(39, 'Ana maria', 'ana@gmail.com', 'AnÃ¡lise e Desenvolvimento de Sistemas', 'ana123'),
(40, 'Jhonattan Oliveira', 'jhonattanrubens@gmail.com', 'Engenharia da ComputaÃ§Ã£o', '123'),
(41, 'Pedro', 'pedro@gmail.com', 'CiÃªncias da ComputaÃ§Ã£o', '1234'),
(42, 'Tiago', 'tiago@gmail.com', 'AnÃ¡lise e Desenvolvimento de Sistemas', '789'),
(43, 'Mariana', 'mariana@gmail.com', 'Engenharia de Software', '456'),
(44, 'Patricia', 'patricia@gmail.com', 'Sistemas de InformaÃ§Ã£o', '789');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `duracao` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `duracao`) VALUES
(11, 'Engenharia da Computacao', '5'),
(12, 'Ciencia da Computacao', '4'),
(14, 'Sistemas de Informacao', '5'),
(15, 'Redes de Computadores', '2.5'),
(16, 'Engenharia de Software', '5'),
(17, 'Analise e Desenvolvimento de Sistemas', '2.5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`mtr`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `mtr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
