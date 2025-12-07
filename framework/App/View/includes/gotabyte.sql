-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 07/12/2025 às 19:26
-- Versão do servidor: 9.1.0
-- Versão do PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gotabyte`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `fb_id` int NOT NULL AUTO_INCREMENT,
  `fb_nome` varchar(150) NOT NULL,
  `fb_email` varchar(150) NOT NULL,
  `fb_rating` tinyint NOT NULL,
  `fb_mensagem` text NOT NULL,
  `fb_data` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fb_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `form_pessoafisica`
--

DROP TABLE IF EXISTS `form_pessoafisica`;
CREATE TABLE IF NOT EXISTS `form_pessoafisica` (
  `pf_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`pf_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `form_pessoafisica`
--

INSERT INTO `form_pessoafisica` (`pf_id`, `name`, `cpf`, `email`, `tel`, `senha`) VALUES
(2, '231', '123456789', 'juniorpires8969@3.c1313om', '19995585892', '$2y$10$VnOp1L6LrCX3Dgw3a5YHBeW4ARR35R42jGxoAWq0dR99a8ULd9Z.G'),
(3, '231', '123456789', 'juniorpires8969@3.c1313om', '19995585892', '$2y$10$yrCX4y4sL0Kkue6m5Rm0IeePLCETO585B79YI1rDQFNk4lxSVd8b2'),
(4, 'MARCIO PIRES MAURE JUNIOR', 'q123456789', 'akdaskdk@hamr.com.br', '19995585892', '$2y$10$bKabmCqoUKJVNXtRmgKhUe5SqfYazFILV0LidixSRCCv9aErBlZdy'),
(5, 'MARCIO PIRES MAURE JUNIOR', '025.032.938-75', 'juniorpires8969@gmail.com', '19995585892', '$2y$10$nJC5NpOdNkIXzY7J1sWq9.jpapPo7iQd2LU.joxKEKSvPLYeBSP4C'),
(6, 'MARCIO PIRES MAURE JUNIOR1234', '123456789', 'juniorpires8969@gmail.com', '19995585892', '$2y$10$8rjVNZwHaEZxyk/cggzGYeRpseXUpTvz0oPGyC2ehlS9m9iA2YXhu'),
(7, '', '', '', '', '$2y$10$tmgIGm/XV9.JatH9jn286uF5hVJw7w0wHI9LbzHlhuPtnfg4wKfUO'),
(8, '', '', '', '', '$2y$10$DHwdEt146/WejM3bAZkpJO0RuToVer/QqHiHoHZCpN4YvzW31zQ3S'),
(9, '', '', '', '', '$2y$10$llS5ei.s1uU5EZZnEOCxIe96/19aXuTp4mgTFpwHX044fYxOEEk6e'),
(10, '', '', '', '', '$2y$10$PQklo54nm.thRlNN8qeCB.KL3iviyO0sOhJ2GblnEQ8Em6xolr2oO'),
(11, 'MARCIO PIRES MAURE JUNIOR', '12345678', 'juniorpires8969@gmail.com', '19995585892', '$2y$10$MTV5TyGei2zHC6/wACGcf.p/XfU4PB4LqwQDrb7A4XAs7SAMQb3hC'),
(12, 'MARCIO PIRES MAURE JUNIOR', '\'12323456ytfd', 'juniorpires8969@gmail.com', '19995585892', '$2y$10$uFy9Pn97MN9R/SugGMtHKeGKH0JWm/yRGdMGG7zBbJtx74pSZqBxu'),
(13, 'MARCIO PIRES MAURE JUNIOR', 'q2w3e4r23456t2', 'juniorpires8969@gmail.com', '19995585892', '$2y$10$5C8ItHi4FV6DY.FZJNwfhu9ZiZG4BxMhDIvF5iIxW7rENMw17QBqm');

-- --------------------------------------------------------

--
-- Estrutura para tabela `routes`
--

DROP TABLE IF EXISTS `routes`;
CREATE TABLE IF NOT EXISTS `routes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_rota` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'O Nome da Rota DEVE ser Unico no Sistema!!! Não pode conter espaços no nome!!\r\n',
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `controller` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_dynamic` tinyint(1) DEFAULT '0',
  `pattern` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `routes`
--

INSERT INTO `routes` (`id`, `nome_rota`, `slug`, `controller`, `action`, `status`, `created_at`, `updated_at`, `is_dynamic`, `pattern`) VALUES
(1, 'index', '', 'AlunosController', 'index', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(2, 'Cadastro', 'cadastro', 'AlunosController', 'cadastro', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(3, 'Ajuda', 'ajuda', 'AlunosController', 'ajuda', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(4, 'dicas', 'dicas', 'AlunosController', 'dicas', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(5, 'Entrar', 'entrar', 'AlunosController', 'Entrar', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(6, 'Feed', 'feed', 'AlunosController', 'feed', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(7, 'Login', 'login', 'AlunosController', 'login', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(8, 'Modo', 'modo', 'AlunosController', 'modo', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(9, 'Paginain', 'paginain', 'AlunosController', 'paginain', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(10, 'Perfil', 'perfil', 'AlunosController', 'perfil', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(11, 'Recup', 'recup', 'AlunosController', 'recup', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(12, 'Relatorio', 'relatorio', 'AlunosController', 'relatorio', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(13, 'Necessidades', 'necessidades', 'AlunosController', 'necessidades', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(14, 'form_pf', 'form_pf', 'AlunosController', 'form_pf', 1, '2025-11-10 23:22:26', '2025-11-26 23:09:02', 0, NULL),
(15, 'form_pj', 'form_pj', 'AlunosController', 'form_pj', 1, '2025-11-10 23:22:26', '2025-11-26 23:09:02', 0, '0'),
(16, 'form_Pre', 'form_Pre', 'AlunosController', 'form_Pre', 1, '2025-11-10 23:22:26', '2025-12-03 22:22:20', 0, '0'),
(17, 'Formularios', 'usuarios', 'AlunosController', 'usuarios', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(18, 'Login-inserir', 'login/inserir', 'AlunosController', 'inserir', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(19, 'excluirpf', 'cadastros/excluir/pessoafisica/{id}', 'AlunosController', 'excluirpf', 1, '2025-12-07 18:37:37', '2025-12-07 18:45:38', 1, 'cadastros/excluir/pessoafisica/{id}');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usu_id` int NOT NULL AUTO_INCREMENT,
  `usu_email` varchar(150) NOT NULL,
  `usu_phone` varchar(20) DEFAULT NULL,
  `usu_password` varchar(255) NOT NULL,
  `usu_data` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`usu_id`),
  UNIQUE KEY `usu_email` (`usu_email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
