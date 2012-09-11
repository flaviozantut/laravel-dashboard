-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.16-log
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `cms`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cod` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `cod`, `nome`, `created_at`, `updated_at`) VALUES
(1, 1, 'Categorias - 1', '2012-09-11 00:11:49', '2012-09-11 14:46:30'),
(3, 2, ' Categorias -2', '2012-09-11 14:45:55', '2012-09-11 14:46:17'),
(4, 999, 'Lançamentos', '2012-09-11 14:48:14', '2012-09-11 14:48:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `comentario` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario_produto`
--

CREATE TABLE IF NOT EXISTS `comentario_produto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `id_comentario` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `comentario_produto_id_comentario_unique` (`id_comentario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cores`
--

CREATE TABLE IF NOT EXISTS `cores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cod` int(11) DEFAULT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `rgb` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoques`
--

CREATE TABLE IF NOT EXISTS `estoques` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `id_tamanho` int(11) NOT NULL,
  `id_cor` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `alt` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `legenda` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `laravel_migrations`
--

CREATE TABLE IF NOT EXISTS `laravel_migrations` (
  `bundle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`bundle`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `laravel_migrations`
--

INSERT INTO `laravel_migrations` (`bundle`, `name`, `batch`) VALUES
('application', '2012_08_04_042238_create_session_table', 1),
('application', '2012_09_03_204350_pages', 1),
('application', '2012_09_05_172452_produtos', 2),
('application', '2012_09_06_125645_marcas', 2),
('application', '2012_09_06_125719_categorizacao', 2),
('application', '2012_09_06_125742_fotos', 2),
('application', '2012_09_06_130324_comentarios', 2),
('sentry', '2012_08_03_162320_install', 1),
('sentry', '2012_08_15_001334_database_rules', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcas`
--

CREATE TABLE IF NOT EXISTS `marcas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cod` int(11) NOT NULL,
  `logo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `marcas`
--

INSERT INTO `marcas` (`id`, `cod`, `logo`, `nome`, `created_at`, `updated_at`) VALUES
(1, 1, '05d613182a9cd706e4840a7f944c8f25.jpg', 'sfgfdg', '2012-09-07 20:56:05', '2012-09-10 23:17:15'),
(2, 123123, 'qwe', 'Marca 1', '2012-09-07 21:46:54', '2012-09-07 21:46:54'),
(3, 1, 'a.jpg', 'teste', '2012-09-09 23:42:00', '2012-09-09 23:42:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `others` text COLLATE utf8_unicode_ci,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pages`
--

INSERT INTO `pages` (`slug`, `title`, `text`, `others`, `created_at`, `updated_at`) VALUES
('informacoes-de-entrega', 'asdsdsd - dsf', '<p>u</p>\r\n', NULL, '0000-00-00 00:00:00', '2012-09-07 20:49:53'),
('sobre-a-emresa', 'as', '<p>as</p>', NULL, '0000-00-00 00:00:00', '2012-09-04 23:53:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cod` int(11) NOT NULL,
  `sku` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `especificacoes` text COLLATE utf8_unicode_ci NOT NULL,
  `preco` decimal(5,2) NOT NULL,
  `preco_promocional` decimal(5,2) DEFAULT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `peso` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `cod`, `sku`, `nome`, `descricao`, `especificacoes`, `preco`, `preco_promocional`, `slug`, `peso`, `created_at`, `updated_at`) VALUES
(7, 1111, '999', 'teste', '<p>aaaa</p>', '<p>lalalaa</p>', '0.00', NULL, '', 0, '2012-09-08 21:49:48', '2012-09-11 15:11:57'),
(12, 9991, '01', 'teste', '<p>teste</p>', '<p>teste</p>', '0.00', NULL, '', 0, '2012-09-08 22:07:24', '2012-09-11 02:12:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_cores`
--

CREATE TABLE IF NOT EXISTS `produto_cores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `id_cor` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_fotos`
--

CREATE TABLE IF NOT EXISTS `produto_fotos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_marca`
--

CREATE TABLE IF NOT EXISTS `produto_marca` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `produto_id` int(11) NOT NULL,
  `marca_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `produto_id` (`produto_id`,`marca_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

--
-- Extraindo dados da tabela `produto_marca`
--

INSERT INTO `produto_marca` (`id`, `produto_id`, `marca_id`, `created_at`, `updated_at`) VALUES
(15, 11, 2, '2012-09-08 21:58:05', '2012-09-08 21:58:05'),
(25, 1, 2, '2012-09-09 19:53:02', '2012-09-09 19:53:02'),
(35, 12, 1, '2012-09-11 02:12:14', '2012-09-11 02:12:14'),
(37, 7, 1, '2012-09-11 15:11:57', '2012-09-11 15:11:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_subcategoria`
--

CREATE TABLE IF NOT EXISTS `produto_subcategoria` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `produto_id` int(11) NOT NULL,
  `subcategoria_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `produto_subcategoria`
--

INSERT INTO `produto_subcategoria` (`id`, `produto_id`, `subcategoria_id`, `created_at`, `updated_at`) VALUES
(4, 7, 1, '2012-09-11 15:11:57', '2012-09-11 15:11:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `rules`
--

CREATE TABLE IF NOT EXISTS `rules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rule` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rules_rule_unique` (`rule`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `rules`
--

INSERT INTO `rules` (`id`, `rule`, `description`) VALUES
(1, 'superuser', 'Access to Everything'),
(2, 'is_admin', 'Administrative Privileges');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `subcategorias`
--

CREATE TABLE IF NOT EXISTS `subcategorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cod` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `cod`, `nome`, `created_at`, `updated_at`) VALUES
(1, 1, 'wer', '2012-09-11 00:38:20', '2012-09-11 15:11:45'),
(8, 123, 'lalala', '2012-09-11 15:02:22', '2012-09-11 15:02:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `subcategoria_categoria`
--

CREATE TABLE IF NOT EXISTS `subcategoria_categoria` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) NOT NULL,
  `subcategoria_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `subcategoria_categoria`
--

INSERT INTO `subcategoria_categoria` (`id`, `categoria_id`, `subcategoria_id`, `created_at`, `updated_at`) VALUES
(16, 1, 1, '2012-09-11 02:09:54', '2012-09-11 02:09:54'),
(17, 3, 1, '2012-09-11 14:46:05', '2012-09-11 14:46:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tamanhos`
--

CREATE TABLE IF NOT EXISTS `tamanhos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cod` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_hash` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `temp_password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `remember_me` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `activation_hash` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `activated` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `password_reset_hash`, `temp_password`, `remember_me`, `activation_hash`, `ip_address`, `status`, `activated`, `permissions`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'flavio', 'flaviozantut@gmail.com', 's8wX1nwxdqFUjl1ad529e5c42a25e13b217b7d75a2dfc2bf68609645ffe5309b25d00d3d516b1b32', '', '', 'MC4TGOBwXJwt07eY69d747dd322d22bfd236398de31f330b1bfe7f4ac16ecf2859603e26691d5de0', '', '127.0.0.1', '1', '1', '', '2012-09-09 21:23:31', '2012-09-07 20:49:28', '2012-09-09 21:23:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_metadata`
--

CREATE TABLE IF NOT EXISTS `users_metadata` (
  `user_id` int(10) unsigned NOT NULL,
  `first_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users_metadata`
--

INSERT INTO `users_metadata` (`user_id`, `first_name`, `last_name`) VALUES
(1, 'Flávio', 'Zantut');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_suspended`
--

CREATE TABLE IF NOT EXISTS `users_suspended` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `attempts` int(11) NOT NULL,
  `ip` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `last_attempt_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `suspended_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `unsuspend_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
