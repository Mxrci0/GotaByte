-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/12/2025 às 02:55
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
-- Erro ao ler a estrutura para a tabela gotabyte.entrar: #1932 - Table &#039;gotabyte.entrar&#039; doesn&#039;t exist in engine
-- Erro ao ler dados para tabela gotabyte.entrar: #1064 - Você tem um erro de sintaxe no seu SQL próximo a &#039;FROM `gotabyte`.`entrar`&#039; na linha 1

-- --------------------------------------------------------

--
-- Estrutura para tabela `feedback`
--
-- Erro ao ler a estrutura para a tabela gotabyte.feedback: #1932 - Table &#039;gotabyte.feedback&#039; doesn&#039;t exist in engine
-- Erro ao ler dados para tabela gotabyte.feedback: #1064 - Você tem um erro de sintaxe no seu SQL próximo a &#039;FROM `gotabyte`.`feedback`&#039; na linha 1

-- --------------------------------------------------------

--
-- Estrutura para tabela `form_pessoafisica`
--

CREATE TABLE `form_pessoafisica` (
  `pf_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `senha` varchar(255) NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `form_pf`
--
-- Erro ao ler a estrutura para a tabela gotabyte.form_pf: #1932 - Table &#039;gotabyte.form_pf&#039; doesn&#039;t exist in engine
-- Erro ao ler dados para tabela gotabyte.form_pf: #1064 - Você tem um erro de sintaxe no seu SQL próximo a &#039;FROM `gotabyte`.`form_pf`&#039; na linha 1

-- --------------------------------------------------------

--
-- Estrutura para tabela `form_pj`
--
-- Erro ao ler a estrutura para a tabela gotabyte.form_pj: #1932 - Table &#039;gotabyte.form_pj&#039; doesn&#039;t exist in engine
-- Erro ao ler dados para tabela gotabyte.form_pj: #1064 - Você tem um erro de sintaxe no seu SQL próximo a &#039;FROM `gotabyte`.`form_pj`&#039; na linha 1

-- --------------------------------------------------------

--
-- Estrutura para tabela `form_pre`
--
-- Erro ao ler a estrutura para a tabela gotabyte.form_pre: #1932 - Table &#039;gotabyte.form_pre&#039; doesn&#039;t exist in engine
-- Erro ao ler dados para tabela gotabyte.form_pre: #1064 - Você tem um erro de sintaxe no seu SQL próximo a &#039;FROM `gotabyte`.`form_pre`&#039; na linha 1

-- --------------------------------------------------------

--
-- Estrutura para tabela `necessidades`
--
-- Erro ao ler a estrutura para a tabela gotabyte.necessidades: #1932 - Table &#039;gotabyte.necessidades&#039; doesn&#039;t exist in engine
-- Erro ao ler dados para tabela gotabyte.necessidades: #1064 - Você tem um erro de sintaxe no seu SQL próximo a &#039;FROM `gotabyte`.`necessidades`&#039; na linha 1

-- --------------------------------------------------------

--
-- Estrutura para tabela `perfil`
--
-- Erro ao ler a estrutura para a tabela gotabyte.perfil: #1932 - Table &#039;gotabyte.perfil&#039; doesn&#039;t exist in engine
-- Erro ao ler dados para tabela gotabyte.perfil: #1064 - Você tem um erro de sintaxe no seu SQL próximo a &#039;FROM `gotabyte`.`perfil`&#039; na linha 1

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
(16, 'form_Pre', 'form_Pre', 'AlunosController', 'form_Pre', 1, '2025-11-10 23:22:26', '2025-12-03 22:22:20', 0, '0'),
(17, 'Formularios', 'usuarios', 'AlunosController', 'usuarios', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL),
(18, 'Login-inserir', 'login-inserir', 'AlunosController', 'inserir', 1, '2025-11-10 23:22:26', '2025-11-10 23:22:26', 0, NULL);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `teste`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `teste` (
);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios1`
--
-- Erro ao ler a estrutura para a tabela gotabyte.usuarios1: #1932 - Table &#039;gotabyte.usuarios1&#039; doesn&#039;t exist in engine
-- Erro ao ler dados para tabela gotabyte.usuarios1: #1064 - Você tem um erro de sintaxe no seu SQL próximo a &#039;FROM `gotabyte`.`usuarios1`&#039; na linha 1

-- --------------------------------------------------------

--
-- Estrutura para view `teste`
--
DROP TABLE IF EXISTS `teste`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `teste`  AS SELECT `usuarios`.`id` AS `id`, `usuarios`.`tipo` AS `tipo`, `usuarios`.`nome` AS `nome`, `usuarios`.`cpf` AS `cpf`, `usuarios`.`razao_social` AS `razao_social`, `usuarios`.`cnpj` AS `cnpj`, `usuarios`.`responsavel` AS `responsavel`, `usuarios`.`nome_prefeitura` AS `nome_prefeitura`, `usuarios`.`email` AS `email`, `usuarios`.`telefone` AS `telefone`, `usuarios`.`senha` AS `senha` FROM `usuarios` ;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `form_pessoafisica`
--
ALTER TABLE `form_pessoafisica`
  ADD PRIMARY KEY (`pf_id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`(191));

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `form_pessoafisica`
--
ALTER TABLE `form_pessoafisica`
  MODIFY `pf_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
