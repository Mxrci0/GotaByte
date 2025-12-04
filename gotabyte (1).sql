-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/12/2025 às 23:25
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

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
-- Estrutura para tabela `entrar`
--

CREATE TABLE `entrar` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `senha` varchar(255) NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `feedback`
--

CREATE TABLE `feedback` (
  `fb_id` int(11) NOT NULL,
  `fb_nome` varchar(150) NOT NULL,
  `fb_email` varchar(150) NOT NULL,
  `fb_rating` int(11) NOT NULL,
  `fb_mensagem` text NOT NULL,
  `fb_data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `form_pf`
--

CREATE TABLE `form_pf` (
  `pf_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `cpf` char(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `passaword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `form_pj`
--

CREATE TABLE `form_pj` (
  `pj_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `razao` varchar(200) NOT NULL,
  `cpf` char(14) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `passaword` varchar(255) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `form_pre`
--

CREATE TABLE `form_pre` (
  `pref_id` int(11) NOT NULL,
  `namepre` varchar(200) NOT NULL,
  `cnpj` char(14) NOT NULL,
  `nomeresp` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `passaword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `necessidades`
--

CREATE TABLE `necessidades` (
  `nec_id` int(11) NOT NULL,
  `nec_titulo` varchar(150) NOT NULL,
  `nec_descricao` text NOT NULL,
  `nec_data` date NOT NULL,
  `nec_prazo` date NOT NULL,
  `nec_status` enum('pendente','andamento','atendida') DEFAULT 'pendente',
  `nec_avaliacao` varchar(50) DEFAULT NULL,
  `nec_avaliacao_coment` text DEFAULT NULL,
  `nec_localizacao` varchar(255) DEFAULT NULL,
  `nec_relatorio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `routes`
--

CREATE TABLE `routes` (
  `id` int(11) NOT NULL,
  `nome_rota` varchar(100) NOT NULL COMMENT 'O Nome da Rota DEVE ser Unico no Sistema!!! Não pode conter espaços no nome!!\r\n',
  `slug` varchar(255) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_dynamic` tinyint(1) DEFAULT 0,
  `pattern` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(16, 'form_Pre', 'form_Pre', 'AlunosController', 'form_Pre', 1, '2025-11-10 23:22:26', '2025-12-03 22:22:20', 0, '0');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios1`
--

CREATE TABLE `usuarios1` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `entrar`
--
ALTER TABLE `entrar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `telefone` (`telefone`);

--
-- Índices de tabela `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Índices de tabela `form_pf`
--
ALTER TABLE `form_pf`
  ADD PRIMARY KEY (`pf_id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `form_pj`
--
ALTER TABLE `form_pj`
  ADD PRIMARY KEY (`pj_id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `form_pre`
--
ALTER TABLE `form_pre`
  ADD PRIMARY KEY (`pref_id`),
  ADD UNIQUE KEY `cnpj` (`cnpj`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `necessidades`
--
ALTER TABLE `necessidades`
  ADD PRIMARY KEY (`nec_id`);

--
-- Índices de tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`(191));

--
-- Índices de tabela `usuarios1`
--
ALTER TABLE `usuarios1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `entrar`
--
ALTER TABLE `entrar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `form_pf`
--
ALTER TABLE `form_pf`
  MODIFY `pf_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `form_pj`
--
ALTER TABLE `form_pj`
  MODIFY `pj_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `form_pre`
--
ALTER TABLE `form_pre`
  MODIFY `pref_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `necessidades`
--
ALTER TABLE `necessidades`
  MODIFY `nec_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `usuarios1`
--
ALTER TABLE `usuarios1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
