-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2024 at 04:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id22264266_bd_biblioteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `autor`
--

CREATE TABLE `autor` (
  `autor_id` int(11) NOT NULL,
  `primeiro_nome` varchar(100) NOT NULL,
  `ultimo_nome` varchar(100) NOT NULL,
  `data_aniversario` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `autor`
--

INSERT INTO `autor` (`autor_id`, `primeiro_nome`, `ultimo_nome`, `data_aniversario`) VALUES
(1, 'Guilherme', 'Silva', '2024-07-02'),
(2, 'Lewis', 'Capel', '2024-07-02'),
(4, 'lucas', 'davi', '2024-07-21'),
(5, 'lucas', 'davi', '2024-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `emprestimo`
--

CREATE TABLE `emprestimo` (
  `emprestimo_id` int(11) NOT NULL,
  `livro_id` int(11) DEFAULT NULL,
  `leitor_id` int(11) DEFAULT NULL,
  `data_emp` date NOT NULL,
  `data_vencimento` date NOT NULL,
  `data_entrega` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `emprestimo`
--

INSERT INTO `emprestimo` (`emprestimo_id`, `livro_id`, `leitor_id`, `data_emp`, `data_vencimento`, `data_entrega`) VALUES
(1, 2, 4, '2024-07-17', '2024-07-19', NULL),
(2, 3, 3, '2024-07-17', '2024-07-20', '2024-07-20'),
(4, 2, 4, '2024-07-17', '2024-07-26', NULL),
(6, 4, 1, '2024-07-18', '2024-07-19', NULL),
(7, 2, 3, '2024-09-26', '2024-10-05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leitor`
--

CREATE TABLE `leitor` (
  `leitor_id` int(11) NOT NULL,
  `primeiro_nome` varchar(100) NOT NULL,
  `ultimo_nome` varchar(100) NOT NULL,
  `data_aniversario` date NOT NULL,
  `morada` varchar(255) NOT NULL,
  `telemovel` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tipo_user` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `leitor`
--

INSERT INTO `leitor` (`leitor_id`, `primeiro_nome`, `ultimo_nome`, `data_aniversario`, `morada`, `telemovel`, `email`, `tipo_user`) VALUES
(1, 'Giuliana', 'Avelar', '2005-04-13', 'Rua António Rodrigues da Rocha', '910446789', 'finochio44@gmail.com', 0),
(3, 'Guilherme', 'Silva', '2004-02-21', 'Rua Sei LA 123', '123123456', 'guiguigui@gmail.com', 0),
(4, 'Lewis', 'Capel', '1990-05-10', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `livro`
--

CREATE TABLE `livro` (
  `livro_id` int(11) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL DEFAULT 'autor desconhecido',
  `n_paginas` int(11) NOT NULL,
  `editora` varchar(50) NOT NULL DEFAULT 'editora desconhecida',
  `tamanho` varchar(10) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `livro`
--

INSERT INTO `livro` (`livro_id`, `isbn`, `titulo`, `autor`, `n_paginas`, `editora`, `tamanho`, `foto`) VALUES
(1, 'AB12356789CD', 'Alice no País das Maravilhasa', 'Lewis Carroll', 200, 'Porto Editora', '500kb', '3.jpeg'),
(2, 'BC987654321DE', 'Uma Boa Rapariga', 'Elle Kennedy', 250, 'FNAC', '1mb', '2.jpeg'),
(3, 'DF1232311EE', 'As vantagens de ser invisível', 'autor desconhecido', 141, 'editora desconhecida', '100 kb', 'livro1.jpeg'),
(4, '9789895641987', 'A Troca', 'Beth O Leary', 150, 'Intrínseca', '1 mb', 'livro.jpeg'),
(5, 'teste', 'teste', 'teste', 123, 'teste', '123', '111.png');

-- --------------------------------------------------------

--
-- Table structure for table `livro_autor`
--

CREATE TABLE `livro_autor` (
  `livro_id` int(11) DEFAULT NULL,
  `autor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `livro_autor`
--

INSERT INTO `livro_autor` (`livro_id`, `autor_id`) VALUES
(1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`autor_id`);

--
-- Indexes for table `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`emprestimo_id`),
  ADD KEY `livro_id` (`livro_id`),
  ADD KEY `leitor_id` (`leitor_id`);

--
-- Indexes for table `leitor`
--
ALTER TABLE `leitor`
  ADD PRIMARY KEY (`leitor_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`livro_id`);

--
-- Indexes for table `livro_autor`
--
ALTER TABLE `livro_autor`
  ADD KEY `livro_id` (`livro_id`),
  ADD KEY `autor_id` (`autor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autor`
--
ALTER TABLE `autor`
  MODIFY `autor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `emprestimo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `leitor`
--
ALTER TABLE `leitor`
  MODIFY `leitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `livro`
--
ALTER TABLE `livro`
  MODIFY `livro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD CONSTRAINT `emprestimo_ibfk_1` FOREIGN KEY (`livro_id`) REFERENCES `livro` (`livro_id`),
  ADD CONSTRAINT `emprestimo_ibfk_2` FOREIGN KEY (`leitor_id`) REFERENCES `leitor` (`leitor_id`);

--
-- Constraints for table `livro_autor`
--
ALTER TABLE `livro_autor`
  ADD CONSTRAINT `livro_autor_ibfk_1` FOREIGN KEY (`livro_id`) REFERENCES `livro` (`livro_id`),
  ADD CONSTRAINT `livro_autor_ibfk_2` FOREIGN KEY (`autor_id`) REFERENCES `autor` (`autor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
