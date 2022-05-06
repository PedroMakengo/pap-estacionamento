-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Maio-2022 às 20:50
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
(1, 'Francisco Leonardo', 'franciscoleonardo@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', '1648054500392.jpeg'),
(2, 'João Oliveira', 'joaooliveira@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'AirPods-Pro-Review-9to5-Mac-.webp');

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

--
-- Extraindo dados da tabela `tb_carro_cliente`
--

INSERT INTO `tb_carro_cliente` (`id_carro`, `id_cliente`, `marca`, `cor`, `modelo`, `matricula`, `data_registro_carro`) VALUES
(2, 6, 'Teste', 'Vermelho', 'BMW', '2222', '2022-04-28 14:57:46'),
(3, 7, 'BMW', 'Preta', 'Novo', '0000-10', '2022-05-02 16:26:44'),
(4, 8, 'Power', 'Vermelho', 'M12', '929292', '2022-05-04 15:08:47'),
(5, 10, 'Power', 'Vermelho', 'Power', '00000-105', '2022-05-04 15:44:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(50) DEFAULT NULL,
  `email_cliente` varchar(30) NOT NULL,
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
(6, 'Francisco Martins ', 'franciscomartins@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', '8.png', '000000000000000', 921538972, 'M', '24', '2022-04-14 04:57:47'),
(7, 'Francisco', 'francisco@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'Captura de Tela (139).png', '0000000000LA03', 921538999, 'M', '21', '2022-05-02 16:22:34'),
(8, 'Ana Maria', 'anamaria@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'AirPods-3-Feature-Red.jpg', '000000000000LA1', 921401023, 'F', '23', '2022-05-04 14:03:27'),
(9, 'António Gomes', 'antonio@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'AirPods-3-Feature-Red.jpg', '111111111111111', 921538972, 'M', '27', '2022-05-04 15:15:26'),
(10, 'Anabela dos Santos', 'anabela@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'AirPods-3-Feature-Red.jpg', '000000', 922708022, 'F', '20', '2022-05-04 15:42:47'),
(11, 'Otniel João', 'otnieljoao@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'AirPods-Pro-Review-9to5-Mac-.webp', '111111111111111', 900120444, 'M', '19', '2022-05-04 15:43:29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_entrada_saida`
--

CREATE TABLE `tb_entrada_saida` (
  `id_entrada` int(11) NOT NULL,
  `id_carro` int(11) DEFAULT NULL,
  `id_solicitacao_vaga` int(11) DEFAULT NULL,
  `data_entrada` datetime DEFAULT NULL,
  `data_saida` datetime DEFAULT NULL,
  `estado` int(4) DEFAULT NULL,
  `data_registro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_entrada_saida`
--

INSERT INTO `tb_entrada_saida` (`id_entrada`, `id_carro`, `id_solicitacao_vaga`, `data_entrada`, `data_saida`, `estado`, `data_registro`) VALUES
(1, 2, 1, '2022-04-29 12:59:15', '2022-04-29 14:04:05', 1, '2022-04-29 12:59:15'),
(2, 3, 2, '2022-05-04 15:03:01', NULL, 0, '2022-05-04 15:03:01'),
(3, 4, 4, '2022-05-04 15:09:42', NULL, 0, '2022-05-04 15:09:42'),
(4, 5, 5, '2022-05-04 15:46:24', '2022-05-04 15:46:55', 1, '2022-05-04 15:46:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_estacionar_carro`
--

CREATE TABLE `tb_estacionar_carro` (
  `id_estacionar` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `nome_cliente` varchar(50) DEFAULT NULL,
  `bi` varchar(15) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `cor` varchar(50) DEFAULT NULL,
  `matricula` varchar(50) DEFAULT NULL,
  `data_entrada` datetime DEFAULT NULL,
  `data_saida` datetime DEFAULT NULL,
  `estado` int(4) DEFAULT NULL,
  `data_registro_estacionar` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_estacionar_carro`
--

INSERT INTO `tb_estacionar_carro` (`id_estacionar`, `id_admin`, `nome_cliente`, `bi`, `modelo`, `cor`, `matricula`, `data_entrada`, `data_saida`, `estado`, `data_registro_estacionar`) VALUES
(1, 2, 'Pedro Makengo', '111111111111111', 'BMW', 'Vermelho', '22222', '2022-04-24 00:00:00', '2022-04-26 19:13:03', 1, '2022-04-26 18:01:15'),
(2, 2, 'Mauro', '00000000', 'BMW', 'Azul', '00000-202', '2022-05-02 16:32:08', '2022-05-02 16:32:39', 1, '2022-05-02 16:32:08'),
(3, 2, 'Makengo', '000001210999', 'MVL', 'Vermelha', '0000-112', '2022-05-04 15:36:39', '2022-05-04 15:36:58', 1, '2022-05-04 15:36:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_solicitacao_vaga`
--

CREATE TABLE `tb_solicitacao_vaga` (
  `id_solicitacao_vaga` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_vaga` int(11) DEFAULT NULL,
  `mensagem` text DEFAULT NULL,
  `estado_solicitacao` int(2) DEFAULT NULL,
  `data_solicitacao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_solicitacao_vaga`
--

INSERT INTO `tb_solicitacao_vaga` (`id_solicitacao_vaga`, `id_cliente`, `id_vaga`, `mensagem`, `estado_solicitacao`, `data_solicitacao`) VALUES
(1, 6, 1, 'Testa', 1, '2022-04-28 13:15:47'),
(2, 7, 1, 'Textando', 1, '2022-05-02 16:25:35'),
(3, 7, 3, 'Preciso desta vaga', 0, '2022-05-02 16:41:50'),
(4, 8, 3, 'Teste', 1, '2022-05-04 14:43:02'),
(5, 10, 4, 'Testando', 1, '2022-05-04 15:45:33');

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
-- Extraindo dados da tabela `tb_vaga`
--

INSERT INTO `tb_vaga` (`id_vaga`, `id_admin`, `espaco_vago`, `preco`, `descricao`) VALUES
(1, 1, 'PT-1', 100, 'Trabalhando '),
(3, 2, '10A1', 1000, 'FFAFAFA'),
(4, 2, '900', 1000, 'Estamos aberto ');

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
  ADD KEY `id_carro` (`id_carro`),
  ADD KEY `id_solicitacao_vaga` (`id_solicitacao_vaga`);

--
-- Índices para tabela `tb_estacionar_carro`
--
ALTER TABLE `tb_estacionar_carro`
  ADD PRIMARY KEY (`id_estacionar`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Índices para tabela `tb_solicitacao_vaga`
--
ALTER TABLE `tb_solicitacao_vaga`
  ADD PRIMARY KEY (`id_solicitacao_vaga`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_vaga` (`id_vaga`);

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
  MODIFY `id_carro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tb_entrada_saida`
--
ALTER TABLE `tb_entrada_saida`
  MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_estacionar_carro`
--
ALTER TABLE `tb_estacionar_carro`
  MODIFY `id_estacionar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_solicitacao_vaga`
--
ALTER TABLE `tb_solicitacao_vaga`
  MODIFY `id_solicitacao_vaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_vaga`
--
ALTER TABLE `tb_vaga`
  MODIFY `id_vaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  ADD CONSTRAINT `tb_entrada_saida_ibfk_1` FOREIGN KEY (`id_carro`) REFERENCES `tb_carro_cliente` (`id_carro`),
  ADD CONSTRAINT `tb_entrada_saida_ibfk_2` FOREIGN KEY (`id_solicitacao_vaga`) REFERENCES `tb_solicitacao_vaga` (`id_solicitacao_vaga`);

--
-- Limitadores para a tabela `tb_estacionar_carro`
--
ALTER TABLE `tb_estacionar_carro`
  ADD CONSTRAINT `tb_estacionar_carro_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id_admin`);

--
-- Limitadores para a tabela `tb_solicitacao_vaga`
--
ALTER TABLE `tb_solicitacao_vaga`
  ADD CONSTRAINT `tb_solicitacao_vaga_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tb_cliente` (`id_cliente`),
  ADD CONSTRAINT `tb_solicitacao_vaga_ibfk_2` FOREIGN KEY (`id_vaga`) REFERENCES `tb_vaga` (`id_vaga`);

--
-- Limitadores para a tabela `tb_vaga`
--
ALTER TABLE `tb_vaga`
  ADD CONSTRAINT `tb_vaga_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
