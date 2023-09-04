-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 04, 2023 at 11:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reciclatche`
--

-- --------------------------------------------------------

--
-- Table structure for table `bairros`
--

CREATE TABLE `bairros` (
  `id_bairro` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bairros`
--

INSERT INTO `bairros` (`id_bairro`, `nome`, `id_usuario`) VALUES
(1, 'Bettim', 1),
(2, 'BAIRRO 2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `horarios_coleta`
--

CREATE TABLE `horarios_coleta` (
  `id_horarios_coleta` int(11) NOT NULL,
  `dia` varchar(70) NOT NULL,
  `hora_inicio` varchar(70) NOT NULL,
  `hora_fim` varchar(70) NOT NULL,
  `id_ponto_coleta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `horarios_coleta`
--

INSERT INTO `horarios_coleta` (`id_horarios_coleta`, `dia`, `hora_inicio`, `hora_fim`, `id_ponto_coleta`) VALUES
(11, 'terca', '12:31', '1', 6),
(12, 'Terca', '03:33', 'Lata - Teste', 6),
(13, 'Segunda', '12:03', 'Lata - Teste', 6),
(14, 'Segunda', '03:23', 'Lata - Teste', 6),
(15, 'Terca', '03:21', 'Lata - Teste', 6),
(16, 'terca', '22:22', '1', 7),
(17, 'Terca', '22:22', 'Lata - Teste', 7),
(18, 'Terca', '22:22', 'Lata - Teste', 7),
(19, 'Terca', '22:22', 'Lata - Teste', 7),
(20, 'Terca', '22:22', 'Papel', 8),
(21, 'segunda', '12:12', 'Lata', 8),
(22, 'sabado', '12:12', '1', 9),
(23, 'Terca', '03:33', 'Lata - Teste', 9),
(24, 'domingo', '12:12', '1', 10),
(25, 'Segunda', '03:23', 'Lata - Teste', 10),
(26, 'domingo', '03:34', '1', 11),
(27, 'Terca', '03:32', 'Lata - Teste', 11),
(28, 'domingo', '15:12', '2', 1),
(29, 'Segunda', '12:21', 'Lata - Teste', 1),
(30, 'domingo', '14:14', '1', 2),
(31, 'Segunda', '12:13', 'Papel', 2),
(32, 'segunda', '21:12', '1', 3),
(33, 'segunda', '13:13', '4', 4),
(34, 'Terca', '14:23', 'Papel', 4),
(35, 'Segunda', '12:12', 'teste 2', 4),
(36, 'segunda', '13:23', '1', 5),
(37, 'segunda', '13:23', '1', 6);

-- --------------------------------------------------------

--
-- Table structure for table `ponto_coleta`
--

CREATE TABLE `ponto_coleta` (
  `id_ponto_coleta` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `bairro` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ponto_coleta`
--

INSERT INTO `ponto_coleta` (`id_ponto_coleta`, `nome`, `endereco`, `bairro`, `id_usuario`, `status`, `latitude`, `longitude`) VALUES
(2, 'Instituto Federal', 'Federal Institute Farroupilha - Campus São Borja - Bettin, São Borja - RS, Brazil', 1, 1, 'Ativo', '-28.667051', '-55.9947931'),
(3, 'thiago', 'Rua Joaquim Nabuco, 629 - Passo, São Borja - RS, Brazil', 1, 1, 'Inativo', '-28.630323', '-56.02967959999999'),
(4, 'teste giovanna ', 'Rua Mario Cortês - Várzea, São Borja - RS, Brazil', 1, 1, 'Ativo', '-28.634893', '-56.0262437'),
(5, 'dasdsa', 'IFFarroupilha - Av. Cel. Bráulio de Oliveira - Central, Santa Rosa - RS, Brazil', 1, 1, 'Ativo', '-27.848716', '-54.454567'),
(6, 'dasdsa1231', 'IFFarroupilha - Av. Cel. Bráulio de Oliveira - Central, Santa Rosa - RS, Brazil', 1, 1, 'Inativo', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `residuos`
--

CREATE TABLE `residuos` (
  `id_residuo` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `tipo_residuo` varchar(250) NOT NULL,
  `categoria` varchar(250) NOT NULL,
  `tecnologia_tratamento` varchar(250) NOT NULL,
  `classe` varchar(250) NOT NULL,
  `unidade_medida` varchar(250) NOT NULL,
  `classe_risco_principal` varchar(250) NOT NULL,
  `classe_risco_sub` varchar(250) NOT NULL,
  `numero_risco` varchar(250) NOT NULL,
  `grupo_embalagem` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `residuos`
--

INSERT INTO `residuos` (`id_residuo`, `nome`, `tipo_residuo`, `categoria`, `tecnologia_tratamento`, `classe`, `unidade_medida`, `classe_risco_principal`, `classe_risco_sub`, `numero_risco`, `grupo_embalagem`, `status`, `id_usuario`) VALUES
(1, 'Lata - Teste dasdas', 'Reciclaveis', 'Não Reciclavel', 'Reciclagem', 'Classe I', '', '1.1A - Substancias e Artigos com Risco de Explosao em Massa', 'Open this select menu', '2 - Desprendimento de Gás devido a pressao ou reacao quimica', 'I - Substancias que apresentam auto risco', 'Inativo', 1),
(2, 'Papel', 'Reciclaveis', 'Não Reciclavel', 'Reciclagem', 'Classe I', '', '1.1A - Substancias e Artigos com Risco de Explosao em Massa', 'Open this select menu', '2 - Desprendimento de Gás devido a pressao ou reacao quimica', 'I - Substancias que apresentam auto risco', 'Inativo', 1),
(3, 'teste 2', 'Reciclaveis', 'Não Reciclavel', 'Reciclagem', 'Classe I', '', '1.1A - Substancias e Artigos com Risco de Explosao em Massa', 'Open this select menu', '2 - Desprendimento de Gás devido a pressao ou reacao quimica', 'I - Substancias que apresentam auto risco', 'Ativo', 1),
(4, 'teste giovanna 2', 'Reciclaveis', 'Não Reciclavel', '1', 'Classe I', '', '2', '1', '2 - Desprendimento de Gás devido a pressao ou reacao quimica', 'I - Substancias que apresentam auto risco', 'Ativo', 1),
(5, 'bancodasd', 'Reciclaveis', 'Não Reciclavel', 'Reciclagem', 'Classe I', '', '1.1A - Substancias e Artigos com Risco de Explosao em Massa', 'Open this select menu', '2 - Desprendimento de Gás devido a pressao ou reacao quimica', 'I - Substancias que apresentam auto risco', 'Inativo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `residuo_coletado`
--

CREATE TABLE `residuo_coletado` (
  `id_residuo_coletado` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_ponto_coleta` int(11) NOT NULL,
  `residuo` varchar(100) NOT NULL,
  `horario` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `peso` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `residuo_coletado`
--

INSERT INTO `residuo_coletado` (`id_residuo_coletado`, `id_usuario`, `id_ponto_coleta`, `residuo`, `horario`, `foto`, `peso`) VALUES
(1, 1, 2, 'plastico', ' 18:19', 'uploads/1692739200_image.jpg', ' 44'),
(2, 1, 4, 'plastico', ' 19:48', 'uploads/1693259243_ReciclaTchê (4).jpeg', ' 312');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `nivel` varchar(50) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `cargo` varchar(250) NOT NULL,
  `cidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `senha`, `nivel`, `foto`, `cargo`, `cidade`) VALUES
(1, 'Rafael', 'rafael.degomes@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', '', 'CTO', 1),
(2, 'Thiago Stoll', 'thiago.stoll@reciclatche.com.br', '202cb962ac59075b964b07152d234b70', 'admin', '', 'CEO', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bairros`
--
ALTER TABLE `bairros`
  ADD PRIMARY KEY (`id_bairro`);

--
-- Indexes for table `horarios_coleta`
--
ALTER TABLE `horarios_coleta`
  ADD PRIMARY KEY (`id_horarios_coleta`);

--
-- Indexes for table `ponto_coleta`
--
ALTER TABLE `ponto_coleta`
  ADD PRIMARY KEY (`id_ponto_coleta`);

--
-- Indexes for table `residuos`
--
ALTER TABLE `residuos`
  ADD PRIMARY KEY (`id_residuo`);

--
-- Indexes for table `residuo_coletado`
--
ALTER TABLE `residuo_coletado`
  ADD PRIMARY KEY (`id_residuo_coletado`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bairros`
--
ALTER TABLE `bairros`
  MODIFY `id_bairro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `horarios_coleta`
--
ALTER TABLE `horarios_coleta`
  MODIFY `id_horarios_coleta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `ponto_coleta`
--
ALTER TABLE `ponto_coleta`
  MODIFY `id_ponto_coleta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `residuos`
--
ALTER TABLE `residuos`
  MODIFY `id_residuo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `residuo_coletado`
--
ALTER TABLE `residuo_coletado`
  MODIFY `id_residuo_coletado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
