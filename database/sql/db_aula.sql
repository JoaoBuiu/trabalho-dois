-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_aula
CREATE DATABASE IF NOT EXISTS `db_aula` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_aula`;

-- Copiando estrutura para tabela db_aula.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.categoria: ~0 rows (aproximadamente)
INSERT INTO `categoria` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Regina Suzana Fidalgo Jr.', NULL, NULL),
	(2, 'Srta. Luara Aguiar Neto', NULL, NULL),
	(3, 'Sr. Willian Jonas Alcantara', NULL, NULL),
	(4, 'Dr. Anderson Delatorre Correia Jr.', NULL, NULL),
	(5, 'Sra. Clara Mirela Pedrosa Filho', NULL, NULL);

-- Copiando estrutura para tabela db_aula.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.failed_jobs: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_aula.fornecedor
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contato` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assunto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.fornecedor: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_aula.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.migrations: ~0 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_04_14_165129_create_usuario', 1),
	(6, '2023_04_28_175149_create_categorias_table', 1),
	(7, '2023_05_10_175848_create_produtos_table', 1),
	(8, '2023_05_24_162517_create_fornecedor_table', 1),


-- Copiando estrutura para tabela db_aula.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.password_resets: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_aula.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.personal_access_tokens: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_aula.produto
CREATE TABLE IF NOT EXISTS `produto` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tamanho` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.produto: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_aula.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.users: ~0 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@admin', NULL, '$2y$10$RpwMtMchKvMurCJBEMfauOW93PFn7A6ZViAjAInGEQKnLmVQmyKOW', NULL, '2023-06-01 17:43:34', '2023-06-01 17:43:34');

-- Copiando estrutura para tabela db_aula.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categoria_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_categoria_id_foreign` (`categoria_id`),
  CONSTRAINT `usuario_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.usuario: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_aula._leitura_bejo

-- Copiando dados para a tabela db_aula._leitura_bejo: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_aula._mac_bejo
-- --------------------------------------------------------
--
-- Estrutura da tabela `mac`
--
CREATE TABLE Bejo (
  idLeituraBejo INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  Sensor_idSensor INTEGER UNSIGNED  NOT NULL  ,
  Mac_idMac VARCHAR(17)  NOT NULL  ,
  DataLeitura DATE  NULL  ,
  HoraLeitura TEXT  NULL  ,
  ValorSensor REAL  NULL    ,
PRIMARY KEY(idLeituraBejo)  ,
INDEX Leitura_FKIndex1(Mac_idMac)  ,
INDEX Leitura_FKIndex2(Sensor_idSensor),
  FOREIGN KEY(Mac_idMac)
    REFERENCES Mac(idMac)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Sensor_idSensor)
    REFERENCES Sensor(idSensor)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



-- Estrutura da tabela `leiturabejo`
--

CREATE TABLE `leiturabejo` (
  `idLeituraBeJo` int(10) UNSIGNED NOT NULL,
  `Sensor_idSensor` int(10) UNSIGNED NOT NULL,
  `Mac_idMac` varchar(17) NOT NULL,
  `DataLeitura` date DEFAULT NULL,
  `HoraLeitura` text DEFAULT NULL,
  `ValorSensor` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Acionadores `leiturabejo`
--
DELIMITER $$
CREATE TRIGGER `TgBJDeleteLeitura` AFTER DELETE ON `Bejo` FOR EACH ROW BEGIN
UPDATE mac
SET Contador=Contador-1
WHERE idMac=OLD.mac_idMac;
UPDATE Sensor
SET Contador=Contador-1
WHERE idSensor=OLD.Sensor_idSensor;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TgBJInsertLeitura` AFTER INSERT ON `Bejo` FOR EACH ROW BEGIN
UPDATE mac
SET Contador=Contador+1
WHERE idMac=NEW.mac_idMac;
UPDATE Sensor
SET Contador=Contador+1
WHERE idSensor=NEW.Sensor_idSensor;
END
$$
DELIMITER ;

CREATE TABLE `mac` (
  `idMac` varchar(17) NOT NULL,
  `Nome` varchar(35) DEFAULT NULL,
  `Contador` int(10) UNSIGNED DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sensorbejo`
--

CREATE TABLE `sensor` (
  `idSensor` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(15) DEFAULT NULL,
  `Contador` int(10) UNSIGNED DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariobejo`
--

CREATE TABLE `usuariobejo` (
  `idUsuarioBeJo` int(10) UNSIGNED NOT NULL,
  `Login` varchar(25) DEFAULT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Senha` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `leiturabejo`
--
ALTER TABLE `leiturabejo`
  ADD PRIMARY KEY (`idLeituraBeJo`),
  ADD KEY `LeituraBeJo_FKIndex1` (`Mac_idMac`),
  ADD KEY `LeituraBeJo_FKIndex2` (`Sensor_idSensor`);

--
-- Índices para tabela `mac`
--
ALTER TABLE `mac`
  ADD PRIMARY KEY (`idMac`);

--
-- Índices para tabela `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`idSensor`);

--
-- Índices para tabela `usuariobejo`
--
ALTER TABLE `usuariobejo`
  ADD PRIMARY KEY (`idUsuarioBeJo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `leiturabejo`
--
ALTER TABLE `leiturabejo`
  MODIFY `idLeituraBeJo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sensor`
--
ALTER TABLE `sensor`
  MODIFY `idSensor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarioBeJo`
--
ALTER TABLE `usuariobejo`
  MODIFY `idUsuarioBeJo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `leiturabejo`
--
ALTER TABLE `leiturabejo`
  ADD CONSTRAINT `leiturabejo_ibfk_1` FOREIGN KEY (`Mac_idMac`) REFERENCES `mac` (`idMac`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `leiturabejo_ibfk_2` FOREIGN KEY (`Sensor_idSensor`) REFERENCES `sensor` (`idSensor`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;
