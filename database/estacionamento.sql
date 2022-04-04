-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Mar-2022 às 14:53
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estacionamento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nome`, `email`, `senha`, `foto`) VALUES
(1, 'Dom Chocas', 'domchocas@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'dom.jpg'),
(2, 'Manuel Santos', 'manuelsantos@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'padrao.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_carro_cliente`
--

CREATE TABLE `tb_carro_cliente` (
  `id_carro` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `marca` varchar(20) NOT NULL,
  `cor` varchar(50) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `matricula` varchar(50) DEFAULT NULL,
  `data_registro_carro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(50) DEFAULT NULL,
  `email_cliente` varchar(20) NOT NULL,
  `senha_cliente` varchar(50) DEFAULT NULL,
  `foto_cliente` varchar(250) DEFAULT NULL,
  `num_bi` varchar(20) DEFAULT NULL,
  `tel_cliente` int(9) NOT NULL,
  `genero` varchar(2) DEFAULT NULL,
  `idade` varchar(2) DEFAULT NULL,
  `data_registro_cliente` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`id_cliente`, `nome_cliente`, `email_cliente`, `senha_cliente`, `foto_cliente`, `num_bi`, `tel_cliente`, `genero`, `idade`, `data_registro_cliente`) VALUES
(1, 'Dom Chocas', 'joao123@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'dom.jpg', '1232323', 921538920, 'M', '22', '2022-03-27 08:52:55'),
(2, 'Dom fafafa', 'fafa@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'dom.jpg', '1232323', 921538920, 'M', '22', '2022-03-27 08:53:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_entrada_saida`
--

CREATE TABLE `tb_entrada_saida` (
  `id_entrada` int(11) NOT NULL,
  `id_carro` int(11) DEFAULT NULL,
  `data_entrada` date DEFAULT NULL,
  `data_saida` date DEFAULT NULL,
  `hora_entrada` time DEFAULT NULL,
  `hora_saida` time DEFAULT NULL,
  `estado` int(2) DEFAULT NULL,
  `data_registro_entrada` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_solicitacao_vaga`
--

CREATE TABLE `tb_solicitacao_vaga` (
  `id_solicitacao_vaga` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `mensagem` varchar(50) DEFAULT NULL,
  `estado_solicitacao` int(2) DEFAULT NULL,
  `data_solicitacao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vaga`
--

CREATE TABLE `tb_vaga` (
  `id_vaga` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `espaco_vago` varchar(50) DEFAULT NULL,
  `preco` int(4) DEFAULT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Índices para tabela `tb_carro_cliente`
--
ALTER TABLE `tb_carro_cliente`
  ADD PRIMARY KEY (`id_carro`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Índices para tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `tb_entrada_saida`
--
ALTER TABLE `tb_entrada_saida`
  ADD PRIMARY KEY (`id_entrada`),
  ADD KEY `id_carro` (`id_carro`);

--
-- Índices para tabela `tb_solicitacao_vaga`
--
ALTER TABLE `tb_solicitacao_vaga`
  ADD PRIMARY KEY (`id_solicitacao_vaga`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Índices para tabela `tb_vaga`
--
ALTER TABLE `tb_vaga`
  ADD PRIMARY KEY (`id_vaga`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_carro_cliente`
--
ALTER TABLE `tb_carro_cliente`
  MODIFY `id_carro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_entrada_saida`
--
ALTER TABLE `tb_entrada_saida`
  MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_solicitacao_vaga`
--
ALTER TABLE `tb_solicitacao_vaga`
  MODIFY `id_solicitacao_vaga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_vaga`
--
ALTER TABLE `tb_vaga`
  MODIFY `id_vaga` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_carro_cliente`
--
ALTER TABLE `tb_carro_cliente`
  ADD CONSTRAINT `tb_carro_cliente_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tb_cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_entrada_saida`
--
ALTER TABLE `tb_entrada_saida`
  ADD CONSTRAINT `tb_entrada_saida_ibfk_1` FOREIGN KEY (`id_carro`) REFERENCES `tb_carro_cliente` (`id_carro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_solicitacao_vaga`
--
ALTER TABLE `tb_solicitacao_vaga`
  ADD CONSTRAINT `tb_solicitacao_vaga_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tb_cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_vaga`
--
ALTER TABLE `tb_vaga`
  ADD CONSTRAINT `tb_vaga_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
