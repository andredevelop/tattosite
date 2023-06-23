-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jun-2023 às 22:29
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jonastatto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.online`
--

CREATE TABLE `tb_admin.online` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `ultima_acao` datetime NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.online`
--

INSERT INTO `tb_admin.online` (`id`, `ip`, `ultima_acao`, `token`) VALUES
(569, '::1', '2022-09-14 22:17:41', '63226e0594846'),
(570, '::1', '2022-09-14 22:17:52', '63227d3ff2261'),
(571, '::1', '2022-09-14 22:19:39', '63227dab01965'),
(572, '::1', '2022-09-15 10:33:34', '632325a67eaf0'),
(573, '::1', '2022-11-24 16:41:57', '637fc6560a6cf'),
(574, '::1', '2022-11-24 16:54:34', '637fcafc36b39'),
(575, '192.168.18.6', '2022-12-31 21:14:59', '63b0d07c205e3'),
(576, '::1', '2023-01-15 19:00:30', '63c4777d3a8f5'),
(577, '::1', '2023-06-01 17:26:22', '6478fde444686');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.usuarios`
--

CREATE TABLE `tb_admin.usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.usuarios`
--

INSERT INTO `tb_admin.usuarios` (`id`, `user`, `password`, `img`, `nome`, `cargo`) VALUES
(1, 'Felipe', 'senha', '63227d106a3f5.png', 'Felipe', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.visitas`
--

CREATE TABLE `tb_admin.visitas` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `dia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.visitas`
--

INSERT INTO `tb_admin.visitas` (`id`, `ip`, `dia`) VALUES
(422, '::1', '2022-09-14'),
(423, '::1', '2022-09-14'),
(424, '::1', '2022-09-14'),
(425, '::1', '2022-11-24'),
(426, '192.168.18.6', '2022-12-31'),
(427, '::1', '2023-01-15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.config`
--

CREATE TABLE `tb_site.config` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `chamada` text NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `sobre_empresa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.config`
--

INSERT INTO `tb_site.config` (`id`, `titulo`, `chamada`, `imagem`, `sobre_empresa`) VALUES
(1, 'FG PIZZARIA | Pacajus - CE', '<h2>aqui fica titulo branco</h2><h2>aqui titulo vermelho(destaque)</h2><p>aqui descrição do site ou sua</p>', '123151.png', '#');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.depoimentos`
--

CREATE TABLE `tb_site.depoimentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `depoimento` text NOT NULL,
  `data` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.depoimentos`
--

INSERT INTO `tb_site.depoimentos` (`id`, `nome`, `depoimento`, `data`, `order_id`) VALUES
(1, 'Fulano silva', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac commodo felis. Etiam risus velit, venenatis eu nibh sed, mollis molestie erat. Aenean vehicula sollicitudin nisl scelerisque rhoncus. Etia', '05/08/2021', 2),
(2, 'Fulano', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac commodo felis. Etiam risus velit, venenatis eu nibh sed, mollis molestie erat. Aenean vehicula sollicitudin nisl scelerisque rhoncus. Etia', '22/07/2021', 1),
(3, 'Fulano costa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac commodo felis. Etiam risus velit, venenatis eu nibh sed, mollis molestie erat. Aenean vehicula sollicitudin nisl scelerisque rhoncus. Etia', '26/07/2021', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.projetos`
--

CREATE TABLE `tb_site.projetos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `link_site` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.projetos`
--

INSERT INTO `tb_site.projetos` (`id`, `nome`, `link_site`, `imagem`) VALUES
(66, 'teste1', '#', '630ad5f0b7ca6.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.tecnologia`
--

CREATE TABLE `tb_site.tecnologia` (
  `id` int(11) NOT NULL,
  `icone` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `link` text NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.tecnologia`
--

INSERT INTO `tb_site.tecnologia` (`id`, `icone`, `titulo`, `descricao`, `link`, `order_id`) VALUES
(1, 'fa-solid fa-paintbrush', 'nome', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt	text-overflow: clip;\r\n	text-overflow: clip;\r\n	text-overflow: clip;\r\n	text-overflow: clip;\r\n	text-overflow: clip;\r\n	text-overflow: clip;\r\n	text-overflow: clip;\r\n	text-overflow: clip;\r\n	text-overflow: clip;\r\n	text-overflow: clip;\r\n	text-overflow: clip;\r\n	text-overflow: clip;\r\n', 'https://www.hostinger.com.br/tutoriais/o-que-e-html-conceitos-basicos', 1),
(15, 'fab fa-css3-alt', 'sssss', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 's', 15),
(16, 'fab fa-html5', 'html', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 16);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin.online`
--
ALTER TABLE `tb_admin.online`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin.usuarios`
--
ALTER TABLE `tb_admin.usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin.visitas`
--
ALTER TABLE `tb_admin.visitas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.config`
--
ALTER TABLE `tb_site.config`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.depoimentos`
--
ALTER TABLE `tb_site.depoimentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.projetos`
--
ALTER TABLE `tb_site.projetos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.tecnologia`
--
ALTER TABLE `tb_site.tecnologia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin.online`
--
ALTER TABLE `tb_admin.online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=578;

--
-- AUTO_INCREMENT de tabela `tb_admin.usuarios`
--
ALTER TABLE `tb_admin.usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb_admin.visitas`
--
ALTER TABLE `tb_admin.visitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=428;

--
-- AUTO_INCREMENT de tabela `tb_site.config`
--
ALTER TABLE `tb_site.config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT de tabela `tb_site.depoimentos`
--
ALTER TABLE `tb_site.depoimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `tb_site.projetos`
--
ALTER TABLE `tb_site.projetos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de tabela `tb_site.tecnologia`
--
ALTER TABLE `tb_site.tecnologia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
