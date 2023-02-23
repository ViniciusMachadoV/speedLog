-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 22-Fev-2023 às 17:39
-- Versão do servidor: 5.6.34
-- versão do PHP: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `speedlog`
--
CREATE DATABASE IF NOT EXISTS `speedlog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `speedlog`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `denuncias`
--

DROP TABLE IF EXISTS `denuncias`;
CREATE TABLE `denuncias` (
  `denuncia_id` int(11) NOT NULL,
  `denuncia_apelidoUsuario` varchar(15) NOT NULL,
  `denuncia_descricao` varchar(254) NOT NULL,
  `denuncia_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entregadores`
--

DROP TABLE IF EXISTS `entregadores`;
CREATE TABLE `entregadores` (
  `entregador_id` int(11) NOT NULL,
  `entregador_cpf` varchar(14) NOT NULL,
  `entregador_placaMoto` varchar(7) NOT NULL,
  `entregador_foto` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entregas`
--

DROP TABLE IF EXISTS `entregas`;
CREATE TABLE `entregas` (
  `entrega_id` int(11) NOT NULL,
  `entrega_enderecoOrigem` varchar(254) NOT NULL,
  `entrega_enderecoDestino` varchar(254) NOT NULL,
  `entrega_cpfOrigem` varchar(8) NOT NULL,
  `entrega_cepDestino` int(8) NOT NULL,
  `entrega_peso` float NOT NULL,
  `entrega_status` varchar(9) NOT NULL,
  `entrega_dataPedido` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entrega_dataTransporte` datetime DEFAULT CURRENT_TIMESTAMP,
  `entrega_dataEntrega` datetime DEFAULT CURRENT_TIMESTAMP,
  `entrega_responsavel` varchar(50) DEFAULT NULL,
  `entrega_observacao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `entregas`
--

INSERT INTO `entregas` (`entrega_id`, `entrega_enderecoOrigem`, `entrega_enderecoDestino`, `entrega_cpfOrigem`, `entrega_cepDestino`, `entrega_peso`, `entrega_status`, `entrega_dataPedido`, `entrega_dataTransporte`, `entrega_dataEntrega`, `entrega_responsavel`, `entrega_observacao`) VALUES
(1, 'r. alfineiros n4', '', '', 36035210, 11.2, 'ANDAMENTO', '2023-02-15 21:32:45', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nome` varchar(50) NOT NULL,
  `usuario_email` varchar(254) NOT NULL,
  `usuario_cpf` varchar(14) NOT NULL,
  `usuario_apelido` varchar(15) NOT NULL,
  `usuario_senha` varchar(30) NOT NULL,
  `usuario_tipo` varchar(13) NOT NULL,
  `usuario_telefone` varchar(16) DEFAULT NULL,
  `usuario_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_nome`, `usuario_email`, `usuario_cpf`, `usuario_apelido`, `usuario_senha`, `usuario_tipo`, `usuario_telefone`, `usuario_status`) VALUES
(1, 'ADMINISTRADOR', 'admin@gmail.com', '000.000.000-00', 'admin', '123', 'ADMINISTRADOR', NULL, ''),
(2, 'ROGÉRIO ULISSES', 'rogerinho@mail.com', '123.456.789-10', 'rogerinho', '456', 'ENTREGADOR', '+55(32)9999-9999', ''),
(3, 'a', 'a', 'a', 'a', 'a', 'CLIENTE', 'a', ''),
(4, 'a', 'a', 'a', 'a', 'a', 'CLIENTE', 'a', ''),
(5, 'a', 'a', 'a', 'a', 'a', 'CLIENTE', 'a', ''),
(6, 'a', 'a', 'a', 'a', 'a', 'CLIENTE', 'a', ''),
(7, 'a', 'a', 'a', 'a', 'a', 'CLIENTE', 'a', ''),
(8, 'a', 'a', 'a', 'a', 'a', 'CLIENTE', 'a', ''),
(9, 'a', 'a', 'a', 'a', 'a', 'CLIENTE', 'a', ''),
(10, 'a', 'a', 'a', 'a', 'a', 'CLIENTE', 'a', ''),
(11, 'a', 'a', 'a', 'a', 'a', 'CLIENTE', 'a', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `denuncias`
--
ALTER TABLE `denuncias`
  ADD PRIMARY KEY (`denuncia_id`);

--
-- Índices para tabela `entregadores`
--
ALTER TABLE `entregadores`
  ADD PRIMARY KEY (`entregador_id`);

--
-- Índices para tabela `entregas`
--
ALTER TABLE `entregas`
  ADD PRIMARY KEY (`entrega_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `denuncias`
--
ALTER TABLE `denuncias`
  MODIFY `denuncia_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `entregas`
--
ALTER TABLE `entregas`
  MODIFY `entrega_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
