-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13/12/2025 às 02:39
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
  `fb_nome` varchar(100) NOT NULL,
  `fb_email` varchar(150) NOT NULL,
  `fb_mensagem` text NOT NULL,
  `fb_data` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fb_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `feedback`
--

INSERT INTO `feedback` (`fb_id`, `fb_nome`, `fb_email`, `fb_mensagem`, `fb_data`) VALUES
(2, 'acc', 'junczcxzcziorpires8969@gmail.com', 'czc,zxcczcxzc', '2025-12-13 00:33:25'),
(3, 'a', 'juniorpires8969@gmail.com', 'jzjX', '2025-12-13 03:30:12');

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `form_pessoafisica`
--

INSERT INTO `form_pessoafisica` (`pf_id`, `name`, `cpf`, `email`, `tel`, `senha`) VALUES
(17, 'eq', 'wertyujm ', 'juniorpires8969@gmail.com', '19995585892', '$2y$10$vZIpufwHMFcdJ5oVfaFeFeWlIyxJCW8OSB9IHQFGbWCPY6e4AFV0S'),
(18, 'MARCIO PIRES MAURE ', 'wertyujm ', 'juniorpires8969@gmail.com', '19995585892', '$2y$10$OYgimSrcFBuouTknQzQO0ePbpRpNUdFhDvJKR4HOA.CwR4/3mnh/W'),
(19, 'MARCIO PIRES MAURE JUNIOR', '12345678', 'juniorpires8969@gmail.com', '19995585892', '$2y$10$FF0Fe6OPa04wuWGKxrhHFeldaX4y1PV.Q3FBGqzg9pT8ImKpUUmBG');

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
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(19, 'excluirpf', 'cadastros/excluir/pessoafisica/{id}', 'AlunosController', 'excluirpf', 1, '2025-12-07 18:37:37', '2025-12-07 18:45:38', 1, 'cadastros/excluir/pessoafisica/{id}'),
(20, 'Login-listar', 'login/listar', 'AlunosController', 'listarpf', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(21, 'Login-editar', 'login/editar/pessoafisica/{id}', 'AlunosController', 'editarPf', 1, '2025-11-10 23:22:26', '2025-12-08 23:58:22', 1, 'login/editar/pessoafisica/{id}'),
(22, 'Login-alterar', 'login/alterar', 'AlunosController', 'alterarpf', 1, '2025-11-10 23:22:26', '2025-12-10 00:45:15', 0, NULL),
(23, 'Feed-inserir', 'feed/inserir', 'AlunosController', 'inserirfeed', 1, '2025-11-10 23:22:26', '2025-12-12 23:23:10', 0, NULL),
(24, 'feed-listar', 'feed/listar', 'AlunosController', 'listarfeed', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(25, 'Excluirfeed', 'feed/excluir/feedback{id}', 'AlunosController', 'excluirfeed', 1, '2025-12-07 18:37:37', '2025-12-13 02:29:42', 1, 'feed/excluir/feedback/{id}'),
(26, 'feed-editar', 'feed/editar/feedback/{id}', 'AlunosController', 'editarfeed', 1, '2025-11-10 23:22:26', '2025-12-13 00:33:02', 1, 'feed/editar/feedback/{id}'),
(28, 'feed-alterar', 'feed/alterar', 'AlunosController', 'alterarfeed', 1, '2025-11-10 23:22:26', '2025-12-10 00:45:15', 0, NULL),
(29, 'Entrar-inserir', 'entrar/inserir', 'AlunosController', 'inserirUsuario', 1, '2025-11-10 23:22:26', '2025-12-13 01:06:32', 0, NULL),
(30, 'Excluirusuarios', 'entrar/excluir/usuario{id}', 'AlunosController', 'excluirUser', 1, '2025-12-07 18:37:37', '2025-12-13 02:29:34', 1, 'entrar/excluir/usuario/{id}'),
(31, 'user-listar', 'entrar/listar', 'AlunosController', 'listarUser', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(32, 'Entrar-alterar', 'entrar/alterar', 'AlunosController', 'alterarUser', 1, '2025-11-10 23:22:26', '2025-12-10 00:45:15', 0, NULL),
(33, 'Entrar-editar', 'entrar/editar/usuario/{id}', 'AlunosController', 'editarUser', 1, '2025-11-10 23:22:26', '2025-12-13 00:33:02', 1, 'entrar/editar/usuario/{id}');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usu_id` int NOT NULL AUTO_INCREMENT,
  `usu_email` varchar(150) NOT NULL,
  `usu_password` varchar(255) NOT NULL,
  `usu_data` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`usu_id`),
  UNIQUE KEY `usu_email` (`usu_email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`usu_id`, `usu_email`, `usu_password`, `usu_data`) VALUES
(4, 'juniorpires8969@gmail.com', '$2y$10$u1rxIuOpjM6wRv4CeNSAIeMQz70IAq37GHSWH2NnVND0280T8WK6e', '2025-12-13 02:38:19'),
(3, 'juniorpires8969@gmail.aad', '$2y$10$RWOVWGIWlPLB/yy9KHkm..BK6g/oy28WSeUcdKrROG4KtPP0epGye', '2025-12-13 01:54:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
