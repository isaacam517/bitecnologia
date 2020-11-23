-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Nov-2020 às 14:24
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bitecnologia_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `razao_social` varchar(200) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `razao_social`, `cnpj`, `nome`, `email`, `telefone`, `endereco`) VALUES
(11, 'Placic', '10045654000107', 'augusto', 'augusto@email.com', '81993045044', 'rua azevedo junior, 185, bloco 03 ap 133 Brás'),
(13, 'iam', '1234567890', 'Isaac Augusto Martiniano', 'isaacam517@gmail.com', '81995073317', 'Bela Vista'),
(15, 'kamiga', '121201021020102', 'nine', 'nine@gmail.com', '81999943943', 'bela vista, 355');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome_funcionario` varchar(100) NOT NULL,
  `email_funcionario` varchar(100) NOT NULL,
  `senha_funcionario` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome_funcionario`, `email_funcionario`, `senha_funcionario`) VALUES
(1, 'Isaac Martiniano', 'isaac@email.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE `projetos` (
  `id` int(11) NOT NULL,
  `nome_projeto` varchar(100) NOT NULL,
  `descricao_projeto` text NOT NULL,
  `valor` float NOT NULL,
  `data_registro` datetime NOT NULL DEFAULT current_timestamp(),
  `data_alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `prazo` date NOT NULL,
  `situacao` enum('EM ANALISE','REPROVADO','APROVADO') NOT NULL,
  `cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`id`, `nome_projeto`, `descricao_projeto`, `valor`, `data_registro`, `data_alteracao`, `prazo`, `situacao`, `cliente`) VALUES
(27, 'vitoria moda', 'roupas, e acessórios', 1500, '2020-11-22 22:56:54', '2020-11-23 01:56:54', '2021-01-19', 'APROVADO', 11);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente` (`cliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `projetos`
--
ALTER TABLE `projetos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `projetos`
--
ALTER TABLE `projetos`
  ADD CONSTRAINT `projetos_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
