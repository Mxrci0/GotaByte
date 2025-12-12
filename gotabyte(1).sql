-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11/12/2025 às 23:55
-- Versão do servidor: 8.4.7
-- Versão do PHP: 8.3.28

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
  `fb_nome` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_rating` tinyint(1) NOT NULL,
  `fb_mensagem` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_data` datetime NOT NULL,
  PRIMARY KEY (`fb_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `form_pessoafisica`
--

INSERT INTO `form_pessoafisica` (`pf_id`, `name`, `cpf`, `email`, `tel`, `senha`) VALUES
(3, '231112', '123456789', 'juniorpires8969@3.c1313omaa', '19995585892', '$2y$10$yrCX4y4sL0Kkue6m5Rm0IeePLCETO585B79YI1rDQFNk4lxSVd8b2');

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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(23, 'Feedback-Inserir', 'feedback/inserir', 'AlunosController', 'inserirFeedback', 1, '2025-12-11 17:33:43', '2025-12-11 17:37:11', 0, NULL),
(24, 'Feedback-Consultar', 'feedback/consultar/{id}', 'AlunosController', 'buscarFeedbackPorId', 1, '2025-12-11 17:33:43', '2025-12-11 17:37:11', 1, 'feedback/consultar/{id}'),
(25, 'Feedback-Excluir', 'feedback/excluir/{id}', 'AlunosController', 'excluirFeedback', 1, '2025-12-11 17:33:43', '2025-12-11 17:37:12', 1, 'feedback/excluir/{id}'),
(26, 'Feedback-Listar', 'feedback/listar', 'AlunosController', 'listarFeedback', 1, '2025-12-11 17:37:12', '2025-12-11 17:37:12', 0, NULL),
(27, 'Feedback-Listar', 'feedback/listar', 'AlunosController', 'listarFeedback', 1, '2025-12-11 17:37:59', '2025-12-11 17:37:59', 0, NULL),
(28, 'Feedback-Form', 'feedback/novo', 'AlunosController', 'formFeedback', 1, '2025-12-11 18:00:06', '2025-12-11 18:00:06', 0, NULL),
(29, 'Feedback-Form', 'feedback/novo', 'AlunosController', 'formFeedback', 1, '2025-12-11 18:02:09', '2025-12-11 18:02:09', 0, NULL);

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
