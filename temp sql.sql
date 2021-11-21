<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1e90afbd0fb92f8dd6490fd6dae476ff16e32dd8
-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for lacura
CREATE DATABASE IF NOT EXISTS `lacura` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `lacura`;

-- Dumping structure for table lacura.about_mes
CREATE TABLE IF NOT EXISTS `about_mes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filetype` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.about_mes: ~21 rows (approximately)
/*!40000 ALTER TABLE `about_mes` DISABLE KEYS */;
REPLACE INTO `about_mes` (`id`, `title`, `detail`, `filename`, `filetype`, `created_at`, `updated_at`) VALUES
	(39, NULL, 'Elisson Tadao Kushioyada nasceu em 30 de Julho de 1979 na cidade de Guaíra, estado do Paraná.', NULL, 0, '2019-08-28 13:48:23', '2019-08-28 13:48:23'),
	(40, NULL, 'Descendente de okinawa e israelense,', NULL, 0, '2019-08-28 13:48:39', '2019-08-28 13:48:39'),
	(41, NULL, 'passou a sua infância no sítio em contato com a natureza e ajudando os pais no trabalho rural.', NULL, 0, '2019-08-28 13:49:04', '2019-08-28 13:49:04'),
	(42, NULL, NULL, '5d6704fa295591567032570.jpg', 1, '2019-08-28 13:49:30', '2019-08-28 13:49:30'),
	(43, NULL, 'Aos 14 anos deixou o Brasil por motivos sociais e mudou-se para o Japão em 1994,', NULL, 0, '2019-08-28 13:55:48', '2019-08-28 13:55:48'),
	(44, NULL, 'no ano de 2006 aumentam as suas percepções e a transformação mental começou a acontecer no seu dia a dia  ficando cada vez mais forte,', NULL, 0, '2019-08-28 13:55:58', '2019-08-28 13:55:58'),
	(45, NULL, 'descobrindo então o Dom espiritual.', NULL, 0, '2019-08-28 13:56:06', '2019-08-28 13:56:06'),
	(46, NULL, NULL, '5d67073c0dcd21567033148.jpg', 1, '2019-08-28 13:59:08', '2019-08-28 13:59:08'),
	(47, NULL, 'Controlando a natureza e tudo que há vida,', NULL, 0, '2019-08-28 13:59:41', '2019-08-28 13:59:41'),
	(48, NULL, 'ordenando profecias e acontecimentos.', NULL, 0, '2019-08-28 14:00:20', '2019-08-28 14:00:20'),
	(49, NULL, 'Sempre em contato com a natureza,', NULL, 0, '2019-08-28 14:00:27', '2019-08-28 14:00:27'),
	(50, NULL, 'costumava ir às montanhas para se reunir com as luzes celestes.', NULL, 0, '2019-08-28 14:00:41', '2019-08-28 14:00:41'),
	(51, NULL, 'Nesses encontros ele obteve muitas experiências com a Luz da consistência da vida,', NULL, 0, '2019-08-28 14:00:51', '2019-08-28 14:00:51'),
	(52, NULL, 'onde se comunicava com as luzes divinas através de codificação espiritual “idioma inexistente”.', NULL, 0, '2019-08-28 14:00:59', '2019-08-28 14:00:59'),
	(53, NULL, 'E conseguiu se encontrar com os 4 Deuses mais importantes da natureza, Deus do fogo, Deus do vento, Deus da terra e o Deus da água.', NULL, 0, '2019-08-28 14:01:06', '2019-08-28 14:01:06'),
	(56, NULL, NULL, '5d67084e8ed831567033422.jpg', 1, '2019-08-28 14:03:42', '2019-08-28 14:03:42'),
	(57, NULL, 'Reconhecendo seu poder paranormal começou a exercer,', NULL, 0, '2019-08-28 14:03:55', '2019-08-28 14:03:55'),
	(58, NULL, 'ajudando a melhorar as condições de vida e saúde das pessoas, feita através do milagre da Alma.', NULL, 0, '2019-08-28 14:04:10', '2019-08-28 14:04:10'),
	(61, NULL, NULL, '5d6716426ea3f1567036994.jpg', 1, '2019-08-28 15:03:14', '2019-08-28 15:03:14'),
	(62, NULL, NULL, '5d671e9055ef31567039120.jpg', 1, '2019-08-28 15:38:40', '2019-08-28 15:38:40'),
	(63, NULL, NULL, '5d671ecc9454f1567039180.jpg', 1, '2019-08-28 15:39:40', '2019-08-28 15:39:40');
/*!40000 ALTER TABLE `about_mes` ENABLE KEYS */;

-- Dumping structure for table lacura.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `admins_email_unique` (`email`) USING BTREE,
  UNIQUE KEY `username` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.admins: ~2 rows (approximately)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
REPLACE INTO `admins` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `mobile`, `image`, `lang`) VALUES
	(1, 'La Cura', 'admin', 'asimrafique11@yahoo.com', '$2y$10$fIqiVxBxLZy8e9wKhye/1exR9yloGAjlLodO3Eky.9n1GBnTqKWQi', 'sGdPCIc5dJjbgMweGCSc5EIp7jiA0ai5WtJU2lV3kXzshYBUUBihzp6zIAir', NULL, '2021-01-05 10:39:26', '+5598985495156', 'admin_1609799966.jpg', 'en'),
	(2, 'admin', 'admin2', 'asimrafique11@yahoo.com1', '$2y$10$fIqiVxBxLZy8e9wKhye/1exR9yloGAjlLodO3Eky.9n1GBnTqKWQi', 'gRlN3uMIqB70s7HlhRChJbGZN1ZtCpOQjO3fHpkplgxQYc6IWjaFgtUwIpex', '2021-02-25 00:20:24', '2021-02-25 00:20:26', '1111', NULL, 'en');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table lacura.admin_features
CREATE TABLE IF NOT EXISTS `admin_features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.admin_features: 18 rows
/*!40000 ALTER TABLE `admin_features` DISABLE KEYS */;
REPLACE INTO `admin_features` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Dashboard', '2020-04-05 17:14:54', '2020-04-05 17:14:54'),
	(2, 'Affiliate', '2020-04-05 17:14:54', '2020-04-05 17:14:54'),
	(3, 'Schedules', '2020-04-05 17:17:57', '2020-04-05 17:17:57'),
	(4, 'Deposit Methods', '2020-04-05 17:17:57', '2020-04-05 17:17:57'),
	(5, 'Manage E PIN', '2020-04-05 17:19:55', '2020-04-05 17:19:55'),
	(6, 'Plan Management', '2020-04-05 17:19:55', '2020-04-05 17:19:55'),
	(7, 'News Blog', '2020-04-05 17:21:13', '2020-04-05 17:21:13'),
	(8, 'Mini Blog', '2020-04-05 17:21:13', '2020-04-05 17:21:13'),
	(9, 'Manage Terms', '2020-04-05 17:22:08', '2020-04-05 17:22:08'),
	(10, 'Manage Users', '2020-04-05 17:22:08', '2020-04-05 17:22:08'),
	(11, 'Manage Admins', '2020-04-05 17:23:33', '2020-04-05 17:23:33'),
	(12, 'Withdraw System', '2020-04-05 17:23:33', '2020-04-05 17:23:33'),
	(13, 'Manage Gallery', '2020-04-05 17:24:15', '2020-04-05 17:24:15'),
	(14, 'Support Tickets', '2020-04-05 17:24:15', '2020-04-05 17:24:15'),
	(15, 'Pages', '2020-04-05 17:24:56', '2020-04-05 17:24:56'),
	(16, 'Web Settings', '2020-04-05 17:24:56', '2020-04-05 17:24:56'),
	(17, 'Subscriber', '2020-04-05 17:25:29', '2020-04-05 17:25:29'),
	(18, 'Settings', '2020-04-05 17:25:29', '2020-04-05 17:25:29');
/*!40000 ALTER TABLE `admin_features` ENABLE KEYS */;

-- Dumping structure for table lacura.admin_password_resets
CREATE TABLE IF NOT EXISTS `admin_password_resets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `token` (`token`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.admin_password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin_password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_password_resets` ENABLE KEYS */;

-- Dumping structure for table lacura.admin_roles
CREATE TABLE IF NOT EXISTS `admin_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `admin_feature_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

-- Dumping data for table lacura.admin_roles: 3 rows
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
REPLACE INTO `admin_roles` (`id`, `admin_id`, `admin_feature_id`, `created_at`, `updated_at`) VALUES
	(16, 2, 13, '2021-03-16 01:26:41', '2021-03-16 01:26:41'),
	(15, 2, 8, '2021-03-16 01:26:41', '2021-03-16 01:26:41'),
	(14, 2, 1, '2021-03-16 01:26:41', '2021-03-16 01:26:41');
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;

-- Dumping structure for table lacura.albums
CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `comment` text COLLATE utf8mb4_unicode_ci,
  `uploader_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploader_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `public` tinyint(4) NOT NULL DEFAULT '1',
  `temp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_about` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0: dont show in about page, 1: show',
  `show_method` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'random',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `albums_uploader_type_uploader_id_index` (`uploader_type`,`uploader_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.albums: ~4 rows (approximately)
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;
REPLACE INTO `albums` (`id`, `title`, `rating`, `comment`, `uploader_type`, `uploader_id`, `created_at`, `updated_at`, `public`, `temp`, `show_about`, `show_method`) VALUES
	(94, 'Sobre Deus', '0', NULL, 'App\\Admin', 1, '2020-05-23 20:29:11', '2020-06-29 19:46:05', 1, NULL, 1, 'random'),
	(95, 'Sobre Deus', '0', NULL, 'App\\Admin', 1, '2020-06-22 13:44:00', '2020-06-22 13:44:35', 1, NULL, 1, 'random'),
	(97, 'Album de teste 2', '0', NULL, 'App\\Admin', 1, '2020-12-12 11:13:10', '2020-12-12 12:53:37', 1, NULL, 1, 'random'),
	(98, 'Novíssimo album', '0', NULL, 'App\\Admin', 1, '2020-12-12 12:51:54', '2021-03-03 21:54:58', 0, NULL, 1, 'random');
/*!40000 ALTER TABLE `albums` ENABLE KEYS */;

-- Dumping structure for table lacura.album_items
CREATE TABLE IF NOT EXISTS `album_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filetype` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1 : Photo, 2: Video',
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `comment` text COLLATE utf8mb4_unicode_ci,
  `uploader_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploader_id` bigint(20) unsigned NOT NULL,
  `album_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating_count` int(11) NOT NULL DEFAULT '0',
  `show_about` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `album_items_uploader_type_uploader_id_index` (`uploader_type`,`uploader_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1382 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.album_items: ~49 rows (approximately)
/*!40000 ALTER TABLE `album_items` DISABLE KEYS */;
REPLACE INTO `album_items` (`id`, `filetype`, `filename`, `rating`, `comment`, `uploader_type`, `uploader_id`, `album_id`, `created_at`, `updated_at`, `rating_count`, `show_about`) VALUES
	(1322, 1, '5eca06261024d1590298150.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:29:11', '2020-05-23 20:29:11', 0, 1),
	(1323, 1, '5eca062a0fe861590298154.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:29:15', '2020-05-23 20:29:15', 0, 1),
	(1326, 1, '5eca0675908861590298229.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:30:30', '2020-05-23 20:30:30', 0, 1),
	(1327, 1, '5eca06918b4fd1590298257.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:30:58', '2020-05-23 20:30:58', 0, 1),
	(1330, 1, '5eca06f7698d21590298359.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:32:40', '2020-05-23 20:32:40', 0, 1),
	(1331, 1, '5eca0710129d01590298384.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:33:04', '2020-05-23 20:33:04', 0, 1),
	(1332, 1, '5eca0740130981590298432.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:33:52', '2020-05-23 20:33:52', 0, 1),
	(1333, 1, '5eca075b3cc4b1590298459.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:34:20', '2020-05-23 20:34:20', 0, 1),
	(1334, 1, '5eca0786833ec1590298502.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:35:03', '2020-05-23 20:35:03', 0, 1),
	(1335, 1, '5eca07ace3a2e1590298540.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:35:41', '2020-05-23 20:35:41', 0, 1),
	(1336, 1, '5eca07e58d98f1590298597.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:36:38', '2020-05-23 20:36:38', 0, 1),
	(1337, 1, '5eca07f0a498b1590298608.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:36:49', '2020-05-23 20:36:49', 0, 1),
	(1338, 1, '5eca081b1673b1590298651.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:37:31', '2020-05-23 20:37:31', 0, 1),
	(1339, 1, '5eca081d6908d1590298653.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:37:34', '2020-05-23 20:37:34', 0, 1),
	(1340, 1, '5eca08293078c1590298665.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:37:46', '2020-05-23 20:37:46', 0, 1),
	(1341, 1, '5eca0847ebfd01590298695.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:38:16', '2020-05-23 20:38:16', 0, 1),
	(1342, 1, '5eca0849edbf71590298697.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:38:18', '2020-05-23 20:38:18', 0, 1),
	(1343, 1, '5eca0854470f71590298708.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:38:29', '2020-05-23 20:38:29', 0, 1),
	(1344, 1, '5eca0862b8dde1590298722.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:38:43', '2020-05-23 20:38:43', 0, 1),
	(1345, 1, '5eca087b212a41590298747.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:39:08', '2020-05-23 20:39:08', 0, 1),
	(1348, 1, '5eca08cd31d3b1590298829.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:40:30', '2020-05-23 20:40:30', 0, 1),
	(1349, 1, '5eca08d2a1d721590298834.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:40:35', '2020-05-23 20:40:35', 0, 1),
	(1350, 1, '5eca08e22914e1590298850.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:40:51', '2020-05-23 20:40:51', 0, 1),
	(1351, 1, '5eca08f8dd6771590298872.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:41:13', '2020-05-23 20:41:13', 0, 1),
	(1352, 1, '5eca09175a1771590298903.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:41:44', '2020-05-23 20:41:44', 0, 1),
	(1353, 1, '5eca091a81c281590298906.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:41:47', '2020-05-23 20:41:47', 0, 1),
	(1354, 1, '5eca091e94d4a1590298910.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:41:51', '2020-05-23 20:41:51', 0, 1),
	(1355, 1, '5eca09407eb1e1590298944.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:42:25', '2020-05-23 20:42:25', 0, 1),
	(1356, 1, '5eca095262e481590298962.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:42:43', '2020-05-23 20:42:43', 0, 1),
	(1357, 1, '5eca095b5fdc21590298971.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:42:52', '2020-05-23 20:42:52', 0, 1),
	(1358, 1, '5eca0964ac9101590298980.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:43:01', '2020-05-23 20:43:01', 0, 1),
	(1359, 1, '5eca097066aba1590298992.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:43:13', '2020-05-23 20:43:13', 0, 1),
	(1360, 1, '5eca097369add1590298995.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:43:16', '2020-05-23 20:43:16', 0, 1),
	(1365, 1, '5ef08b7414e801592822644.JPG', '0', NULL, 'App\\Admin', 1, 95, '2020-06-22 13:44:06', '2020-06-22 13:44:06', 0, 1),
	(1366, 1, '5ef08b76a5ffc1592822646.JPG', '0', NULL, 'App\\Admin', 1, 95, '2020-06-22 13:44:08', '2020-06-22 13:44:08', 0, 1),
	(1367, 1, '5ef08b78ebf551592822648.JPG', '0', NULL, 'App\\Admin', 1, 95, '2020-06-22 13:44:12', '2020-06-22 13:44:12', 0, 1),
	(1368, 1, '5ef08b7abee9a1592822650.JPG', '0', NULL, 'App\\Admin', 1, 95, '2020-06-22 13:44:13', '2020-06-22 13:44:13', 0, 1),
	(1372, 1, '5fd3fd06179e61607728390.jpg', '0', NULL, 'App\\Admin', 1, 97, '2020-12-12 11:13:10', '2020-12-12 11:13:10', 0, 1),
	(1373, 1, '5fd3fd06c6aae1607728390.jpg', '0', NULL, 'App\\Admin', 1, 97, '2020-12-12 11:13:11', '2020-12-12 11:13:11', 0, 1),
	(1374, 1, '5fd3fd07c09421607728391.jpg', '0', NULL, 'App\\Admin', 1, 97, '2020-12-12 11:13:12', '2020-12-12 11:13:12', 0, 1),
	(1375, 1, '5fd3fd08a32ec1607728392.jpg', '0', NULL, 'App\\Admin', 1, 97, '2020-12-12 11:13:14', '2020-12-12 11:13:14', 0, 1),
	(1376, 1, '5fd3fd0aa77ec1607728394.jpg', '0', NULL, 'App\\Admin', 1, 97, '2020-12-12 11:13:15', '2020-12-12 11:13:15', 0, 1),
	(1377, 1, '5fd41427799d91607734311.jpg', '0', NULL, 'App\\Admin', 1, 98, '2020-12-12 12:51:54', '2020-12-12 12:51:54', 0, 1),
	(1378, 1, '5fd4142b4385f1607734315.jpg', '0', NULL, 'App\\Admin', 1, 98, '2020-12-12 12:52:00', '2021-03-03 21:56:32', 0, 0),
	(1379, 1, '5fd414309e4f01607734320.jpg', '0', NULL, 'App\\Admin', 1, 98, '2020-12-12 12:52:02', '2021-03-03 21:56:32', 0, 0),
	(1380, 1, '5fd41432479951607734322.jpg', '0', NULL, 'App\\Admin', 1, 98, '2020-12-12 12:52:02', '2021-03-03 21:56:32', 0, 0),
	(1381, 1, '5fd41433016671607734323.jpg', '0', NULL, 'App\\Admin', 1, 98, '2020-12-12 12:52:06', '2021-03-03 21:56:32', 0, 0);
/*!40000 ALTER TABLE `album_items` ENABLE KEYS */;

-- Dumping structure for table lacura.basic_settings
CREATE TABLE IF NOT EXISTS `basic_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sitename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_two` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_sym` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_notification` tinyint(1) DEFAULT NULL,
  `sms_notification` tinyint(4) DEFAULT NULL,
  `emailver` int(11) DEFAULT '0',
  `smsver` int(11) DEFAULT '0',
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `esender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emessage` longtext COLLATE utf8mb4_unicode_ci,
  `smsapi` mediumtext COLLATE utf8mb4_unicode_ci,
  `banner_title` text COLLATE utf8mb4_unicode_ci,
  `banner_sub_title` text COLLATE utf8mb4_unicode_ci,
  `service_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_sub_title` text COLLATE utf8mb4_unicode_ci,
  `test_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_sub_title` text COLLATE utf8mb4_unicode_ci,
  `blog_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_sub_title` text COLLATE utf8mb4_unicode_ci,
  `footer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` text COLLATE utf8mb4_unicode_ci,
  `team_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_sub_title` text COLLATE utf8mb4_unicode_ci,
  `fb_client_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_client_secret` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_client_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_client_secret` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_login` int(11) NOT NULL DEFAULT '0',
  `faq_title` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq_sub_title` text COLLATE utf8mb4_unicode_ci,
  `static_title_1` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_number_1` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_icon_1` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_title_2` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_number_2` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_icon_2` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_title_3` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_number_3` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_icon_3` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_title` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_detail` longtext COLLATE utf8mb4_unicode_ci,
  `plan_title` text COLLATE utf8mb4_unicode_ci,
  `plan_subtitle` text COLLATE utf8mb4_unicode_ci,
  `deposit_wallet_name` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interest_wallet_name` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bal_trans_fixed_charge` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bal_trans_per_charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_active` int(11) NOT NULL DEFAULT '1',
  `video_url` text COLLATE utf8mb4_unicode_ci,
  `how_it_work_title` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_it_work_sub_title` text COLLATE utf8mb4_unicode_ci,
  `referral_title` text COLLATE utf8mb4_unicode_ci,
  `referral_sub_title` text COLLATE utf8mb4_unicode_ci,
  `transaction_title` text COLLATE utf8mb4_unicode_ci,
  `transaction_sub_title` text COLLATE utf8mb4_unicode_ci,
  `payment_title` text COLLATE utf8mb4_unicode_ci,
  `payment_sub_title` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gallery_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_show_method` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'random',
  `new_user_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_user_sub_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affiliate_withdraw_day` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affiliate_withdraw_person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affiliate_withdraw_deadline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `schedule_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_speed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_text` text COLLATE utf8mb4_unicode_ci,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `schedule_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nominee` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nominee_error` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_ja_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_pt_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ja_seo_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ja_seo_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptbr_seo_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptbr_seo_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_textpt` text COLLATE utf8mb4_unicode_ci,
  `about_map` text COLLATE utf8mb4_unicode_ci,
  `schedule_cities` text COLLATE utf8mb4_unicode_ci,
  `slider_show_method` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'random',
  `slider_number` int(10) DEFAULT '2',
  `space_between_slids` int(11) DEFAULT '10',
  `slider_loop` int(11) DEFAULT '1',
  `autoplay_delay` int(11) DEFAULT '400',
  `slidesPerView` int(11) DEFAULT '2',
  `footer_jp` text COLLATE utf8mb4_unicode_ci,
  `footer_message_p` text COLLATE utf8mb4_unicode_ci,
  `footer_message_jp` text COLLATE utf8mb4_unicode_ci,
  `footer_text_jp` text COLLATE utf8mb4_unicode_ci,
  `in_slider_text` text COLLATE utf8mb4_unicode_ci,
  `in_slider_textpt` text COLLATE utf8mb4_unicode_ci,
  `in_slider_speed` int(11) DEFAULT '800',
  `in_slider_loop` int(11) DEFAULT '1',
  `in_autoplay_delay` int(11) DEFAULT '500',
  `in_slidesPerView` int(11) DEFAULT '1',
  `footer_slider_enable` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mission_enable` int(11) DEFAULT '1',
  `in_slider_number` int(11) DEFAULT '5',
  `in_slider_show_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'random',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.basic_settings: ~0 rows (approximately)
/*!40000 ALTER TABLE `basic_settings` DISABLE KEYS */;
REPLACE INTO `basic_settings` (`id`, `sitename`, `color`, `color_two`, `currency`, `currency_sym`, `email_notification`, `sms_notification`, `emailver`, `smsver`, `phone`, `email`, `address`, `esender`, `emobile`, `emessage`, `smsapi`, `banner_title`, `banner_sub_title`, `service_title`, `service_sub_title`, `test_title`, `test_sub_title`, `blog_title`, `blog_sub_title`, `footer`, `footer_text`, `team_title`, `team_sub_title`, `fb_client_id`, `fb_client_secret`, `google_client_id`, `google_client_secret`, `social_login`, `faq_title`, `faq_sub_title`, `static_title_1`, `static_number_1`, `static_icon_1`, `static_title_2`, `static_number_2`, `static_icon_2`, `static_title_3`, `static_number_3`, `static_icon_3`, `about_title`, `about_detail`, `plan_title`, `plan_subtitle`, `deposit_wallet_name`, `interest_wallet_name`, `bal_trans_fixed_charge`, `bal_trans_per_charge`, `template_active`, `video_url`, `how_it_work_title`, `how_it_work_sub_title`, `referral_title`, `referral_sub_title`, `transaction_title`, `transaction_sub_title`, `payment_title`, `payment_sub_title`, `created_at`, `updated_at`, `gallery_title`, `gallery_detail`, `gallery_show_method`, `new_user_title`, `new_user_sub_title`, `affiliate_withdraw_day`, `affiliate_withdraw_person`, `affiliate_withdraw_deadline`, `schedule_price`, `schedule_title`, `registration_logo`, `slider_speed`, `slider_text`, `lang`, `schedule_email`, `nominee`, `nominee_error`, `news_ja_image`, `news_pt_image`, `ja_seo_desc`, `ja_seo_key`, `ptbr_seo_desc`, `ptbr_seo_key`, `slider_textpt`, `about_map`, `schedule_cities`, `slider_show_method`, `slider_number`, `space_between_slids`, `slider_loop`, `autoplay_delay`, `slidesPerView`, `footer_jp`, `footer_message_p`, `footer_message_jp`, `footer_text_jp`, `in_slider_text`, `in_slider_textpt`, `in_slider_speed`, `in_slider_loop`, `in_autoplay_delay`, `in_slidesPerView`, `footer_slider_enable`, `mission_enable`, `in_slider_number`, `in_slider_show_method`) VALUES
	(1, 'Lacura - Donate', '052157', '7eacff', 'JPY', '¥', 1, 0, 1, 0, '050-5534-1117', 'donate@lacura.me', 'Tokyo, Japan', 'donate@lacura.me', NULL, '<br><br>\r\n	<div class="contents" style="max-width: 600px; margin: 0 auto; border: 2px solid #000036;"><div class="header" style="background-color: #000036; padding: 15px; text-align: center;"><div class="logo" style="width: 240px;text-align: center; margin: 0 auto;"><img src="https://lacura.me/img/AAvRUHL.png" style="font-size: 0.875rem;"></div></div></div><div class="contents" style="max-width: 600px; margin: 0 auto; border: 2px solid #000036;">\r\n\r\n<div class="header" style="background-color: #000036; padding: 15px; text-align: center;">\r\n	<div class="logo" style="width: 260px;text-align: center; margin: 0 auto;">\r\n	</div>\r\n</div>\r\n\r\n<div class="mailtext" style="padding: 30px 15px; background-color: #f0f8ff; font-family: \'Open Sans\', sans-serif; font-size: 16px; line-height: 26px;">Hi {{name}},&nbsp;<br>\r\n{{message}}\r\n<br><br>\r\n<br>\r\n</div>\r\n\r\n<div class="footer" style="background-color: #000036; padding: 15px; text-align: center;">&nbsp;&nbsp;<b style="color: rgb(255, 255, 255); font-size: 0.875rem;">Copyright (©) 2014 - 2019 La Cura All Rights Reserved</b></div><div class="footer" style="background-color: #000036; padding: 15px; text-align: center; border-top: 1px solid rgba(255, 255, 255, 0.2);"><p style="color: #ddd;">La Cura is not partnered with any other \r\ncompany or person. We work as a team and do not have any reseller, \r\ndistributor or partner!</p>\r\n\r\n\r\n</div>\r\n\r\n	</div>\r\n<br><br>', 'https://api.infobip.com/api/v3/sendsms/plain?user=****&password=****&sender=Sender&SMSText={{message}}&GSM={{number}}&type=longSMS', 'Psychic Power, Supernatural Strength, Quantum Power!', 'The portal of the miracle and when these portals open up unexpected things happen and inexplicable in our lives', 'Our Treatments', 'Forget everything and learn to deal with hatred, suffering, resentment and envy, and mold a dreamed destiny as you choose. Not to anything more glorious than the judgment of a pardon.', 'What Users Say!', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections', 'GET LATEST BLOG', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections', 'Copyright (©) 2014 - 2020 La Cura Todos os direitos reservados', 'Mental ・ Trauma ・ Envenenamento ・ Doença ・ Expiação pela alma ・ Dependência ・ Purificação ・ Boa sorte ・ Purificação', 'Our Team Members', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections', '605201123219121', '1d44ed0b34c59e50da8834baffa75b96', '659666262615-dc94jkt5c8tohmhc5u96ib4al1fto22p.apps.googleusercontent.com', 'SHcEaLSfLh4Z4-MI49FRODuh', 0, 'Saiba todas as informações necessárias', 'Descrição do investimento com plano de tratamento até a participação', 'Users', '50K+', 'users', 'Deposit', '$106K+', 'money', 'Withdraw', '$38K+', 'download', 'About Us', 'Our scripts are developed by our in-house Developers. We always produce secure, reliable, efficient and scalable script. We are doing continuous improvements to make it more stable in long run. We are using the latest and advanced technology Where Security is our Primary concern. We always provide our best in customer support. Our Script supports the 16+ Automated online payment processors. We offer customization at very reasonable cost.', 'Choose a donation option', 'Below you know our donation options and help us.', 'Deposit Wallet', 'Interest Wallet', '0', '11', 1, 'https://www.youtube.com/watch?v=GT6-H4BRyqQ', 'How It\'s Work', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Referral Commission Section', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Transactions  Section', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Payment Section', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', NULL, '2021-03-16 04:09:55', 'ギャラリー', NULL, 'random', 'フォロワー', '', '1', '7', '180', '0', 'pkGet a Schedule', '15765076215df798e5cef3c.png', '1000', '<p data-speechify-sentence="">怒りや、苦しみ、恨み、妬みなどすべてを癒して忘れて、ただ消し去ることです。<br />\r\nそれは価値ある物でもなく、審判することもありません、許しなのです。</p>', 'ja', 'uketsuke@lacura.me', '3', 'You are not eligible for withdrawal, need more nominee', '15682919185d7a3c4ee6f57.jpg', '15682919265d7a3c56df451.jpg', '怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。', '精神的, トラウマ, 中毒, 病気, 魂の償い, 依存, 浄化, 開運, お祓い', 'Esqueça tudo e aprenda a lidar com o ódio, sofrimento, ressentimento e inveja, e molde um destino sonhado como você escolher.', 'Problemas Psicológicos, Traumas de Infância , Livramento de Vícios, Cura de Doenças, Purificação da alma, Perturbação Espiritual, Libertação e Proteção Espiritual, Motivação de Vida', '<p data-speechify-sentence="">Esque&ccedil;a tudo e aprenda a lidar com o &oacute;dio, sofrimento, ressentimento e inveja, e molde um destino sonhado como voc&ecirc; escolher.<br />\r\nN&atilde;o h&aacute; nada mais glorioso que o ju&iacute;zo de um perd&atilde;o.</p>', '{"app_key":"AIzaSyBqFuLx8S7A8eianoUhkYMeXpGPvsXp1NM","long":"-25.344","lat":"131.036"}', '{"\\u6771\\u4eac\\u90fd\\u4e2d\\u592e\\u533a":"\\u6771\\u4eac\\u90fd\\u4e2d\\u592e\\u533a","\\u5927\\u962a\\u5e9c\\u5927\\u962a\\u5e02":"\\u5927\\u962a\\u5e9c\\u5927\\u962a\\u5e02","\\u5175\\u5eab\\u770c\\u795e\\u6238\\u5e02":"\\u5175\\u5eab\\u770c\\u795e\\u6238\\u5e02","\\u611b\\u77e5\\u770c\\u540d\\u53e4\\u5c4b\\u5e02":"\\u611b\\u77e5\\u770c\\u540d\\u53e4\\u5c4b\\u5e02","\\u57fc\\u7389\\u770c\\u718a\\u8c37\\u5e02":"\\u57fc\\u7389\\u770c\\u718a\\u8c37\\u5e02","\\u5e83\\u5cf6\\u770c\\u5e83\\u5cf6\\u5e02":"\\u5e83\\u5cf6\\u770c\\u5e83\\u5cf6\\u5e02","\\u6c96\\u7e04\\u770c\\u90a3\\u8987\\u5e02":"\\u6c96\\u7e04\\u770c\\u90a3\\u8987\\u5e02","S\\u00e3o Lu\\u00eds":"Maranh\\u00e3o"}', 'random', 5, 10, 1, 400, 2, 'Kopīraito (©) 2014 - 2020 La kūra All raitsu Reserved', 'Cure e esqueça toda a sua raiva, sofrimento, ressentimento, ciúme e apenas apague-os. Não tem valor, não é um árbitro, é perdão.', 'あなたの怒り、苦しみ、恨み、嫉妬をすべて癒し、忘れて、ただそれを消してください。 それは価値がなく、審判でもありません、それは許しです。', '精神的 ・ トラウマ ・ 中毒 ・ 病気 ・ 魂の償い ・ 依存 ・ 浄化 ・ 開運 ・ お祓い', NULL, NULL, 900, 1, 500, 2, NULL, NULL, 5, 'random');
/*!40000 ALTER TABLE `basic_settings` ENABLE KEYS */;

-- Dumping structure for table lacura.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textpt` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.blogs: ~5 rows (approximately)
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
REPLACE INTO `blogs` (`id`, `title`, `image`, `text`, `created_at`, `updated_at`, `link`, `textpt`) VALUES
	(2, '中毒、依存の治療', '1562748159.jpg', '<p><img src="https://lacura.me/img/vicios.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" />すべての中毒と依存を引き起こす原因は、共通し中毒</p>', '2019-07-10 02:41:26', '2020-04-18 12:27:43', 'https://lacura.me/alcoholics-and-addictions', '<p><img src="https://lacura.me/img/vicios.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" />Muito comum que os v&iacute;cios e as depend&ecirc;ncias sejam a causa de todos dist&uacute;rbios</p>'),
	(3, '精神的なトラウマ', '1564985917.jpg', '<p><img src="https://lacura.me/img/traumas.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" />心理的外傷は、何か自分自身にとって大きな出来事が起こり心や感情がダメージを負います。</p>', '2019-08-05 00:18:37', '2020-04-18 12:28:05', 'https://lacura.me/mental-trauma', '<p><img src="https://lacura.me/img/traumas.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" />Acontece quando a mente e as emo&ccedil;&otilde;es ocorrem grandes eventos para si pr&oacute;prio podendo ocasionar danos mentais.</p>'),
	(4, '精神の浄化', '1564986205.jpg', '<p><img src="https://lacura.me/img/purificacao-espiritual.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" />魂と心が否定的な思想によって引き起こされた出来事を後悔しています。</p>', '2019-08-05 00:23:25', '2020-04-18 12:28:27', 'https://lacura.me/spiritual-purification', '<p><img src="https://lacura.me/img/purificacao-espiritual.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" />Arrependimento por purifica&ccedil;&atilde;o da alma devido &agrave; incidentes de pensamentos negativos.</p>'),
	(5, '仕事の影響（ケガ・病気）', '1564986214.jpg', '<p><img src="https://lacura.me/img/influencia-do-trabalho.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" />労働者が被った需要の高いレベルの仕事で病気を発症する理由は、食生活が貧しい</p>', '2019-08-05 00:23:34', '2020-04-18 12:28:45', 'https://lacura.me/influence-of-work', '<p><img src="https://lacura.me/img/influencia-do-trabalho.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" />A raz&atilde;o para desenvolver a doen&ccedil;a est&aacute; na demanda de trabalho que muitos trabalhadores sofrem, com os maus h&aacute;bitos alimentares e desgaste f&iacute;sico</p>'),
	(6, '精神的な病気', '1564986221.jpg', '<p><img src="https://lacura.me/img/alma.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" /> 精神的な病気を癒し、聖なる魂の助けを借りて起こる内面の変化の奇跡的な命です。</p>', '2019-08-05 00:23:41', '2020-04-18 12:29:01', 'https://lacura.me/purification-soul', '<p><img src="https://lacura.me/img/alma.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" /> Cura das doen&ccedil;as mentais &eacute; uma mudan&ccedil;a de vida do interior f&iacute;sico ao exterior f&iacute;sico com a ajuda do Esp&iacute;rito Santo &ldquo;uriel&rdquo;</p>');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

-- Dumping structure for table lacura.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `votes` int(11) NOT NULL DEFAULT '0',
  `spam` int(11) NOT NULL DEFAULT '0',
  `reply_id` int(11) NOT NULL DEFAULT '0',
  `page_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.comments: ~0 rows (approximately)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Dumping structure for table lacura.comment_spam
CREATE TABLE IF NOT EXISTS `comment_spam` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.comment_spam: ~0 rows (approximately)
/*!40000 ALTER TABLE `comment_spam` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment_spam` ENABLE KEYS */;

-- Dumping structure for table lacura.comment_user_vote
CREATE TABLE IF NOT EXISTS `comment_user_vote` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vote` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.comment_user_vote: ~0 rows (approximately)
/*!40000 ALTER TABLE `comment_user_vote` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment_user_vote` ENABLE KEYS */;

-- Dumping structure for table lacura.deposits
CREATE TABLE IF NOT EXISTS `deposits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `gateway_id` int(11) DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usd_amo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_amo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_wallet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `try` int(11) NOT NULL DEFAULT '0',
  `image` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.deposits: ~22 rows (approximately)
/*!40000 ALTER TABLE `deposits` DISABLE KEYS */;
REPLACE INTO `deposits` (`id`, `user_id`, `gateway_id`, `amount`, `charge`, `usd_amo`, `btc_amo`, `btc_wallet`, `trx`, `status`, `try`, `image`, `detail`, `created_at`, `updated_at`) VALUES
	(3, 11, 514, '299000', '32890', '331890', '0', '', 'ZPAAQTGyGTfX7K61', 1, 0, '1593428602.jpg', 'Desejo ter saúde equilibrada.\r\nSe possível eliminar espinhas (Bikini) das costas\r\nMais criatividade para os estudos\r\nMais sociabilidade\r\nMais comunicabilidade', '2020-06-29 13:53:17', '2020-06-29 14:34:45'),
	(10, 9, 514, '299000', '32890', '331890', '0', '', 'IZaQSHktowWBN5vC', 1, 0, '1593490305.jpg', '*Melhora na saúde fisica e mental.\r\n*Melhora na capacidade de raciocínio.\r\n*Ter mais tempo para convívio familiar.\r\n*Poder gerar mais sucesso aos meus clientes\r\n*Poder proporcionar mais bem-estar E conforto à minha família e pessoas queridas', '2020-06-30 16:11:00', '2020-06-30 17:34:49'),
	(11, 17, 514, '299000', '32890', '331890', '0', '', 'zho56TwAVJseUJua', 1, 0, '1593511143.jpg', '皮膚(赤ちゃんみたいな美肌)\r\n人生のパートナー(信頼できる相思相愛な恋人)\r\nお金(給与UP)\r\n健康(健康的なカラダと体重)\r\nお仕事は今も楽しいけど、給料UPやボーナスはほしい。\r\n安らげる場所\r\n色んな行ったことない国をもっと知りたい。旅行したい。', '2020-06-30 21:47:51', '2020-06-30 23:41:00'),
	(13, 16, 514, '299000', '32890', '331890', '0', '', 'jxNC0TxRHuc2551u', 1, 0, '1593608690.jpg', 'Melhorar Espiritualmente\r\nTer independencia financeira\r\nEncontrar com a minha familia na Bolivia\r\nMais inteligenre\r\nDescobrir meu dom \r\nFelicidades dos filhos\r\nTer tranquilidade na 3 idade\r\nQuero casa', '2020-07-02 01:00:46', '2020-07-02 01:07:03'),
	(14, 9, 514, '122121', '13433.31', '135554.31', '0', '', 'jU89lzqr5pOY56S7', 0, 0, NULL, NULL, '2021-01-11 03:28:41', '2021-01-11 03:28:41'),
	(15, 1, 501, '100', '1', '101', '0', '', 'TRrYZDZUjJo7p2Ja', 0, 0, NULL, NULL, '2021-03-15 05:21:54', '2021-03-15 05:21:54'),
	(16, 1, 101, '100', '10', '110', '0', '', 'idTydjPrDskJ6E6a', 0, 0, NULL, NULL, '2021-03-15 05:42:37', '2021-03-15 05:42:37'),
	(17, 1, 101, '100', '10', '110', '0', '', 'Fx4kXi3nQNUj69cR', 0, 0, NULL, NULL, '2021-03-16 04:11:11', '2021-03-16 04:11:11'),
	(18, 1, 501, '100', '1', '101', '0', '', 'tMiaIAO8kHAvA9wD', 0, 0, NULL, NULL, '2021-03-16 04:18:50', '2021-03-16 04:18:50'),
	(19, 2, 101, '100', '10', '110', '0', '', 'XjtZ9Beva6eltoBE', 0, 0, NULL, NULL, '2021-03-16 04:34:06', '2021-03-16 04:34:06'),
	(20, 2, 514, '100', '11', '111', '0', '', 'lcyIiWdo1NVaaEFd', 1, 0, '1615837054.jpg', 'test payment', '2021-03-16 04:36:36', '2021-03-16 04:39:36'),
	(21, 2, 514, '100', '11', '111', '0', '', 'AvzWTkYR1cc50ENY', 0, 0, NULL, NULL, '2021-03-16 04:40:29', '2021-03-16 04:40:29'),
	(22, 2, 514, '120', '13.2', '133.2', '0', '', 'bv484hSKGFyMQKuV', 2, 0, '1615837330.jpg', 'afdasdf', '2021-03-16 04:40:44', '2021-03-16 04:52:34'),
	(23, 1, 501, '200', '2', '202', '0', '', 'tkgBcidVLGZkyVNB', 0, 0, NULL, NULL, '2021-03-16 19:01:39', '2021-03-16 19:01:39'),
	(24, 1, 103, '100', '10', '1', '0', '', 'kAnKAdOSpK0Qlzjm', 0, 0, NULL, NULL, '2021-03-16 20:16:11', '2021-03-16 20:16:11'),
	(25, 1, 101, '200', '20', '220', '0', '', 'pkPzzWSnYsdDWt9r', 0, 0, NULL, NULL, '2021-03-16 22:30:07', '2021-03-16 22:30:07'),
	(26, 1, 501, '100', '1', '101', '0', '', 'jQIxjTogsDPbak3O', 0, 0, NULL, NULL, '2021-03-16 22:33:40', '2021-03-16 22:33:40'),
	(27, 1, 103, '100', '10', '1', '0', '', 'Y6AGT2t3f6uvyzRa', 0, 0, NULL, NULL, '2021-03-18 03:26:11', '2021-03-18 03:26:11'),
	(28, 1, 103, '100', '10', '1', '0', '', 'OVAROz54zZmhLHx5', 1, 0, NULL, NULL, '2021-03-18 17:59:59', '2021-03-18 19:09:33'),
	(29, 1, 103, '300', '30', '3', '0', '', 'pw6PVyS40Qj4YOd2', 1, 0, NULL, NULL, '2021-03-18 19:10:34', '2021-03-18 19:11:04'),
	(30, 1, 103, '150', '15', '1.5', '0', '', 'ErxFI0ac6Rq93lE7', 0, 0, NULL, NULL, '2021-03-18 19:13:34', '2021-03-18 19:13:34'),
	(31, 1, 103, '300', '30', '3', '0', '', 'HkOMJUjbPIHr0LC0', 1, 0, NULL, NULL, '2021-03-18 19:33:10', '2021-03-18 20:07:51'),
	(32, 1, 103, '100', '10', '1', '0', '', 'Y2d8tMxSIrsPG83c', 0, 0, NULL, NULL, '2021-03-27 03:49:59', '2021-03-27 03:49:59');
/*!40000 ALTER TABLE `deposits` ENABLE KEYS */;

-- Dumping structure for table lacura.email_languages
CREATE TABLE IF NOT EXISTS `email_languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.email_languages: ~50 rows (approximately)
/*!40000 ALTER TABLE `email_languages` DISABLE KEYS */;
REPLACE INTO `email_languages` (`id`, `code`, `name`, `lang`, `subject`, `message`, `created_at`, `updated_at`) VALUES
	(1, 'EVER', 'Email Verification', 'ja', '件名：確認コード (Verification Code)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">お客様のユーザーは {{user}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">お客様の確認コードは：{{code}}</span><br></div>', NULL, '2019-08-27 17:24:32'),
	(2, 'EVER', 'Email Verification', 'pt-br', 'Código de Verificação', '<div><div>Seu nome de usuário é: {{user}}</div><div><br></div><div>O seu código de verificação é: {{code}}</div></div>', NULL, '2019-08-22 15:48:39'),
	(3, 'FPASS', 'Forgot Password', 'ja', '件名：パスワードのリセット。 (Password Reset)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">パスワードをリセットするためにこのリンクをご利用下さい {{link}}</span><br></div>', NULL, '2019-08-27 17:25:45'),
	(4, 'FPASS', 'Forgot Password', 'pt-br', 'Redefinir senha', 'Use este link para redefinir a senha:&nbsp; &nbsp;{{link}}<br>', NULL, '2019-08-22 15:50:23'),
	(5, 'RPASS', 'Reset Password', 'ja', '件名：パスワード変更完了。 (Password Changed)', '<span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">パスワード変更完了しました。</span>', NULL, '2019-08-27 17:32:17'),
	(6, 'RPASS', 'Reset Password', 'pt-br', 'Senha Alterada', 'Senha alterada com sucesso', NULL, '2019-08-22 16:17:22'),
	(7, 'BADD', 'Balance Add', 'ja', '件名: お預け入れ完了(Balance Added)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">ようこそ！</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">{{detail}} {{amount}} お預け入れのご確認されました。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">現在残高は{{balance}}</span><br></div>', NULL, '2019-08-27 17:13:51'),
	(8, 'BADD', 'Balance Add', 'pt-br', 'Saldo adicionado', '<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal"><span style="font-size: 10.5pt; font-family: &quot;Segoe UI&quot;, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Bem vindo!&nbsp;</span><span style="font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-fareast-language:PT-BR"><o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10.5pt; font-family: &quot;Segoe UI&quot;, sans-serif;"><o:p>&nbsp;</o:p></span></p>\r\n\r\n<p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10.5pt; font-family: &quot;Segoe UI&quot;, sans-serif;">{{detail}} {{amount}} adicionado com sucesso ao seu saldo.&nbsp;<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10.5pt; font-family: &quot;Segoe UI&quot;, sans-serif;"><o:p>&nbsp;</o:p></span></p>\r\n\r\n<p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10.5pt; font-family: &quot;Segoe UI&quot;, sans-serif;">Seu saldo atual é {{balance}}<o:p></o:p></span></p>', NULL, '2019-08-22 07:40:08'),
	(9, 'BSUB', 'Balance Subsctract', 'ja', '件名: 管理者による差引残高 (Balance Subtract Via Admin)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">{{detail}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">{{amount}} 残高から差し引かれました。現在残高は {{balance}}</span><br></div>', NULL, '2019-08-27 17:15:54'),
	(10, 'BSUB', 'Balance Subsctract', 'pt-br', 'Saldo subtraído via Administrador', '<div>{{detail}}</div><div><br></div><div>{{amount}} subtraído do seu saldo. Seu saldo atual é {{balance}}</div>', NULL, '2019-08-22 07:45:14'),
	(11, 'SMAIL', 'Send Mail To User', 'ja', 'This is an autofill field, changing subject will have no effect', '{{message}}', NULL, '2019-08-17 13:45:46'),
	(12, 'SMAIL', 'Send Mail To User', 'pt-br', 'This is an autofill field, changing subject will have no effect', '{{message}}', NULL, '2019-08-17 13:45:54'),
	(13, 'DSUCCESS', 'Deposit Success', 'ja', '件名： 振込完了 (Deposit Successful)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">振込申請の手続き完了と残高追加されました。</span><br></div>', NULL, '2019-08-27 17:22:43'),
	(14, 'DSUCCESS', 'Deposit Success', 'pt-br', 'Depósito bem sucedido', 'Pedido de depósito aprovado e saldo adicionado', NULL, '2019-08-22 15:46:06'),
	(15, 'DREFUND', 'Deposit Refund', 'ja', '件名： 返金振込済み(Deposit Refunded)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">振込申請の手続き完了と残高追加されました。</span><br></div>', NULL, '2019-08-27 17:21:26'),
	(16, 'DREFUND', 'Deposit Refund', 'pt-br', 'Depósito Reembolsado', '<p class="MsoNormal">Pedido de depósito aprovado e saldo adicionado<o:p></o:p></p>', NULL, '2019-08-22 08:05:12'),
	(17, 'DAPPROVE', 'Deposit Approve', 'ja', '件名: 振込承認済み (Deposit Approved)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">お客様の振込は承認しました。</span><br></div>', NULL, '2019-08-27 17:21:02'),
	(18, 'DAPPROVE', 'Deposit Approve', 'pt-br', 'Depósito Aprovado', '<span style="font-size: 0.875rem;">Olá</span><p class="MsoNormal"><o:p></o:p></p>\r\n\r\n<p class="MsoNormal">Seu depósito foi aprovado<o:p></o:p></p>', NULL, '2019-08-22 08:03:19'),
	(19, 'SCONFIRM', 'Schedule Confirmation', 'ja', '件名: ご予約確認 (Schedule Confirmation)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">お客様のご予約完了しました。料金は{{charge}} 残高から発生されました。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">日付: {{date}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">時間: {{time}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">今回のご予約に関してはお客様と利用者は15分ごとに更新されます。プログラム変更されたい場合はパネルの「お客様詳細」に変更できます。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">* 管理者はキャンセルや変更する場合がございます。</span><br></div>', NULL, '2019-08-27 17:36:27'),
	(20, 'SCONFIRM', 'Schedule Confirmation', 'pt-br', 'Confirmação de Agendamento', '<div>Seu atendimento foi reservado com sucesso. O valor {{charge}} foi cobrado do seu saldo.</div><div>Data: {{date}}</div><div>Horário: {{time}}</div><div>Você receberá uma atualização para este atendimento a cada 15 minutos. Você pode alterar sua programação no painel "Sua programação".</div><div><br></div><div><i><b>* O Administrador poderá cancelar ou atualizar este atendimento.</b></i><br></div>', NULL, '2019-08-22 18:03:39'),
	(21, 'SREMINDER', 'Schedule Reminder', 'jp', '件名: 管理者によるご予約確認のおしらせ。 (Schedule Reminder by Admin)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">管理者によるご予約確認のお知らせいたします。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">日付: {{date}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">時間: {{time}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">メッセージ: {{message}}</span><br></div>', NULL, '2019-08-27 17:38:03'),
	(22, 'SREMINDER', 'Schedule Reminder', 'pt-br', 'Lembrete de Agendamento pelo Administrador', '<div>Lembrete de Agendamento pelo Administrador<br>                                    </div><div>Data: {{date}}</div>Horário: {{time}}<div>Mensagem: {{message}}</div><div><br></div>', NULL, '2019-08-22 18:29:39'),
	(23, 'SCANCEL', 'Schedule Cancel', 'ja', '件名： 管理者によるご予約時間のキャンセル (Schedule Cancelation by Admin)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">管理者によるご予約時間のキャンセル手続きされました。ご予約料金は {{charge}} 残高に返金されました。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">日付: {{date}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">時間: {{time}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">理由: {{message}}</span><br></div>', NULL, '2019-08-27 17:34:32'),
	(24, 'SCANCEL', 'Schedule Cancel', 'pt-br', 'Cancelamento de horário pelo Administrador', '<div>O seu agendamento foi cancelado pelo <b><i>Administrador</i></b>. O valor do agendamento<i><b>&nbsp;</b></i>{{charge}} foi devolvido ao seu saldo.</div><div>Data: {{date}}</div><div>Horário: {{time}}</div><div>Razão: {{message}}<br></div>', NULL, '2019-08-22 16:44:56'),
	(25, 'SCHANGE', 'Schedule Change', 'ja', '件名: 管理者によるご予約変更 (Schedule Changed by Admin)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">管理者によるご予約変更されました。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">日付: {{date}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">時間: {{time}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">理由: {{message}}</span><br></div>', NULL, '2019-08-27 17:35:37'),
	(26, 'SCHANGE', 'Schedule Change', 'pt-br', 'Agendamento alterado pelo Administrador', '<div>Seu agendamento foi alterado pelo Administrador. <br></div><div>Data: {{date}}</div><div>Horário: {{time}}</div><div>Razão: {{message}}<br></div>', NULL, '2019-08-22 17:26:51'),
	(27, 'SCONFIRMADMIN', 'Schedule Confirmation ADMIN', 'ja', '件名: ご予約確認 (Schedule Confirmation)', '<div><div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">{{user}}様のご予約 。料金は {{charge}} 残高から引き落としされました。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">日付: {{date}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">時間: {{time}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">今回のご予約に関してはお客様と利用者は15分ごとに更新されます。配信停止や変更の手続きは可能になります</span><br></div></div>', NULL, '2019-08-27 17:37:41'),
	(28, 'SCONFIRMADMIN', 'Schedule Confirmation ADMIN', 'pt-br', 'Confirmação de Agendamento', '<div>Agendamento de Atendimento do {{user}} . O valor {{charge}} foi descontado do seu saldo.</div><div>Data: {{date}}</div><div>Horário: {{time}}</div><div>Você e o usuário receberão atualizações para este atendimento a cada 15 minutos. Você tem todo o direito de alterar a programação ou cancelar.<br></div>', NULL, '2019-08-22 18:09:26'),
	(29, 'SCANCELADMIN', 'Schedule Cancel ADMIN', 'ja', '件名: 管理者によるご予約時間のキャンセル (Schedule Cancelation by Admin)', '<div><div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;{{user}} 様のご予約はキャンセルされました。お客様は{{charge}}返金されます。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">日付: {{date}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">時間: {{time}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">理由: {{message}}</span><br></div></div>', NULL, '2019-08-27 17:34:58'),
	(30, 'SCANCELADMIN', 'Schedule Cancel ADMIN', 'pt-br', 'Cancelamento de horário pelo Administrador', '<div>A reserva de atendimento do {{user}}&nbsp; foi cancelada. O usuário receberá&nbsp; {{charge}} de volta.</div><div>Data: {{date}}</div><div>Horário: {{time}}</div><div>Razão: {{message}}<br></div>', NULL, '2019-08-22 16:54:58'),
	(31, 'SCHANGEADMIN', 'Schedule Change ADMIN', 'ja', '件名: 管理者によるご予約変更   (Schedule Changed by Admin)', '<div><div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">{{user}} 様のご予約時間は変更しました。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">日付: {{date}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">時間: {{time}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">理由: {{message}}</span><br></div></div>', NULL, '2019-08-27 17:36:00'),
	(32, 'SCHANGEADMIN', 'Schedule Change ADMIN', 'pt-br', 'Agendamento modificado pelo Administrador', '<div>O agendamento de horário do {{user}} foi atualizado.</div><div>Data: {{date}}</div><div>Horário: {{time}}</div><div>Razão: {{message}}<br></div>', NULL, '2019-08-22 17:35:35'),
	(33, 'CMAIL', 'Contact Us Mail', 'ja', '件名: お問い合わせ先 (Contact Us Mail)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">{{message}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">お客様のメールアドレス: {{email}}</span><br></div>', NULL, '2019-08-27 17:18:55'),
	(34, 'CMAIL', 'Contact Us Mail', 'pt-br', 'Contate-nos', '<div>{{message}}</div><div><br></div><div>Meu e-mail : {{email}} <br></div>', NULL, '2019-08-22 07:58:11'),
	(35, 'PCHANGE', 'Password Change', 'ja', '件名：パスワード変更 (Password Changed)', '<span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">お客様のパスワード変更設定のリンクです。</span>&nbsp;{{link}}', NULL, '2019-08-27 17:28:40'),
	(36, 'PCHANGE', 'Password Change', 'pt-br', 'Senha Alterada', 'Seu link de redefinição de senha: {{link}}', NULL, '2019-08-22 16:14:09'),
	(37, 'PCHANGESUCCESS', 'Password Change Successfully', 'ja', '件名：パスワード変更完了。 (Password Changed)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">パスワード変更完了しました。</span><br></div>', NULL, '2019-08-27 17:29:09'),
	(38, 'PCHANGESUCCESS', 'Password Change Successfully', 'pt-br', 'Senha Alterada', '<div>                                    \r\n                                Senha alterada com sucesso</div>', NULL, '2019-08-22 16:16:40'),
	(39, 'WSUCCESS', 'Withdraw Success', 'ja', '件名: お引き出し正常にされました。 (Successfully Withdraw)', '<span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">ようこそ！</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">いつもお世話になっております!</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">正常に出金はされました。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">進行中しばらくお待ちください</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">出金金額 : {{amount}} .</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">現在の残高: {{balance}}</span><br>', NULL, '2019-08-27 17:38:38'),
	(40, 'WSUCCESS', 'Withdraw Success', 'pt-br', 'Saque feito com Sucesso', 'Bem vindo!&nbsp;<div><br></div><div>O seu pedido de saque foi feito com sucesso. Aguarde os dias de processamento.</div><div>Valor de saque : \r\n{{amount}} .&nbsp;</div><div>Seu balanço atual é {{balance}}<br>\r\n                                </div>', NULL, '2019-08-22 18:41:04'),
	(41, 'ICOMPETE', 'Invest Complete', 'ja', '件名：投資総額 (Invest Complete)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">おめでとうございます、お客様の投資手続きが完了しました。お客様の投資は{{amount}}. お客様が {{interest}} の利益を受け取ることができます。</span><br></div>', NULL, '2019-08-27 17:27:28'),
	(42, 'ICOMPETE', 'Invest Complete', 'pt-br', 'Investimento Completo', 'Parabéns, seu investimento feito com sucesso. Seu investimento {{amount}}. E você vai receber {{interest}} de juros.<br>', NULL, '2019-08-22 16:05:51'),
	(43, 'BTRANSFER', 'Balance Transfer', 'ja', '件名: 送金の確認 (Balance Transfer)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">送金を受け付けいたしました。お客様の口座 から{{amount}}に{{receiver}} 送金手数料は発生しました{{charge}}.</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">現在残高は {{balance}}</span><br></div>', NULL, '2019-08-27 17:16:53'),
	(44, 'BTRANSFER', 'Balance Transfer', 'pt-br', 'Transferência de saldo', '<div>                                    \r\n                                Saldo transferido com êxito. Você enviou {{amount}} para {{receiver}} e foi cobrado pela transferência \r\n{{charge}}.</div><div><br></div>Seu saldo atual é {{balance}}', NULL, '2019-08-22 07:48:36'),
	(45, 'BRECEIVE', 'Balance Receive', 'ja', '件名: 受取残高 (Balance Received)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">残高の受け取りを完了しました。お客様は{{amount}} 受け取りました {{sender}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">現在残高は {{balance}}</span><br></div>', NULL, '2019-08-27 17:15:06'),
	(46, 'BRECEIVE', 'Balance Receive', 'pt-br', 'Saldo Recebido', '<div>                                    \r\n                                Saldo recebido com sucesso. Você recebeu {{amount}} de {{sender}}</div><div><br></div><div>Seu saldo atual é {{balance}}<br></div>', NULL, '2019-08-22 07:42:54'),
	(47, 'GAUTHENABLE', 'Google Authentication Enable', 'ja', '件名： Google 2段階認証(Google 2FA)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">Google 2段階認証は有効にしました。</span><br></div>', NULL, '2019-08-27 17:26:35'),
	(48, 'GAUTHENABLE', 'Google Authentication Enable', 'pt-br', 'Autenticação Google 2FA', 'Autenticação de dois fatores do Google habilitada com sucesso', NULL, '2019-08-22 15:57:58'),
	(49, 'GAUTHDISABLE', 'Google Authentication Disable', 'ja', '件名： Google 2段階認証  (Google 2FA)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">Google 2段階認証は無効にしました。</span><br></div>', NULL, '2019-08-27 17:26:07'),
	(50, 'GAUTHDISABLE', 'Google Authentication Disable', 'pt-br', 'Autenticação Google 2FA', 'Autenticação do Google de dois fatores foi desativada com sucesso.', NULL, '2019-08-22 15:58:35');
/*!40000 ALTER TABLE `email_languages` ENABLE KEYS */;

-- Dumping structure for table lacura.epins
CREATE TABLE IF NOT EXISTS `epins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `pin` (`pin`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.epins: ~0 rows (approximately)
/*!40000 ALTER TABLE `epins` DISABLE KEYS */;
/*!40000 ALTER TABLE `epins` ENABLE KEYS */;

-- Dumping structure for table lacura.faqs
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.faqs: ~0 rows (approximately)
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
REPLACE INTO `faqs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Como encontrar um link de representante?', 'RESPOSSAAAAAAAAAAAAAAAAAAAAAAAA\r\nComo encontrar um link de representante?l\r\nvf\r\nf´lfldkvodfv\r\ndfvdfvdfvofdvkodf', '2020-07-03 10:58:42', '2020-07-03 11:01:52');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;

-- Dumping structure for table lacura.gateways
CREATE TABLE IF NOT EXISTS `gateways` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `main_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minamo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxamo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fixed_charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percent_charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'paytm Website',
  `val4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'paytm Industry Type',
  `val5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'paytm Channel ID',
  `val6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'paytm Transaction URL',
  `val7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'paytm Transaction Status URL',
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=515 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.gateways: ~21 rows (approximately)
/*!40000 ALTER TABLE `gateways` DISABLE KEYS */;
REPLACE INTO `gateways` (`id`, `main_name`, `name`, `minamo`, `maxamo`, `fixed_charge`, `percent_charge`, `rate`, `val1`, `val2`, `val3`, `val4`, `val5`, `val6`, `val7`, `status`, `created_at`, `updated_at`) VALUES
	(101, 'PayPal', 'PayPal', '50', '5000', '0', '10', '1', 'e741.520.6644@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-03-15 05:21:39'),
	(102, 'PerfectMoney', 'Perfect Money', '20', '20000', '2', '1', '84', 'U5376900', 'G079qn4Q7XATZBqyoCkBteGRg', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:48:12'),
	(103, 'Stripe', 'Credit Card', '0', '500000', '0', '10', '110', 'sk_test_51I9X4xGicXlRqqqCaovG06XGberTGg1EEGwkxyoUPy1BjPe0Q0e2WyI6sX2ZQJLdo26fqTdQC1fN5bzt5zMhNR4r00XYqBOYe2', 'pk_test_51I9X4xGicXlRqqqCO1u3U0HjcgFfooMW4RUh6CAZZD8EhzD346eIDY3rwtCRnC15HzF41xHf1BAccH1w0N54EhcV00rcv5zupR', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-03-16 20:15:42'),
	(104, 'Skrill', 'Skrill', '10', '50000', '3', '3', '84', 'merchant@skrill', 'TheSoftKing', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:48:30'),
	(105, 'PayTM', 'PayTM', '1', '100', '1', '1', '84', 'PoojaE46324372286132', 'JAKMX9PVoj208dMq', 'WEB_STAGINGb', 'Retail', 'WEB', 'https://pguat.paytm.com/oltp-web/processTransaction', 'https://pguat.paytm.com/paytmchecksum/paytmCallback.jsp', 0, NULL, '2019-08-22 04:48:39'),
	(106, 'Payeer', 'Payeer', '1', '100', '1', '1', '84', '627881897', 'Admin727096', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:48:44'),
	(107, 'PayStack', 'PayStack', '1', '100', '1', '1', '84', 'pk_test_c1775454cc81a5ad2d6a31d0b0471585d44c4dcb', 'sk_test_22327c329aa7ea76448cfe279aa1e5d583d306fa', NULL, NULL, NULL, NULL, '0.0028', 0, NULL, '2019-08-22 04:48:50'),
	(108, 'VoguePay', 'VoguePay', '1', '100', '1', '1', '84', 'demo', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:48:55'),
	(501, 'Blockchain.info', 'BitCoin', '1', '5000', '0', '1', '1', '2cd8c897-a48c-4343-b13a-541593031f86', 'xpub6CfPf3JTeNHf6QqXk9smRubcZjCarf5UooFZwmNpCRoHWpWEz7jGon1Y6kCjUaba7R5zs7PuNizLpXL79Mp1Wfo337zHBCoeWoY8sWk3T8K', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-03-15 05:21:26'),
	(502, 'block.io - BTC', 'BitCoin', '1', '99999', '1', '0.5', '84', '1658-8015-2e5e-9afb', '09876softk', NULL, NULL, NULL, NULL, NULL, 0, '2018-01-27 18:00:00', '2019-08-22 04:49:31'),
	(503, 'block.io - LTC', 'LiteCoin', '100', '10000', '0.4', '1', '84', 'cb91-a5bc-69d7-1c27', '09876softk', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:49:36'),
	(504, 'block.io - DOGE', 'DogeCoin', '1', '50000', '0.51', '2.52', '84', '2daf-d165-2135-5951', '09876softk', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:49:41'),
	(505, 'CoinPayment - BTC', 'BitCoin', '1', '5', '0', '0', '1', 'ded6743d3a4e97b43c1942164198bcbc3561df23cfcb82a2eca204f2bba3276d', 'd9f2C9b532cbd2F6076c24Bb659bbc45b1dC39B96FbFDd31354818E16aC837E0', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2020-06-22 14:07:40'),
	(506, 'CoinPayment - ETH', 'Etherium', '1', '50000', '0.51', '2.52', '84', '596f0097ed9d1ab8cfed05eb59c70e9f066513dfe4df64a8fc3917d309328315', '7472928395208f70E3cE30B9e10dc882cBDD3e9967b7942AaE492106d9C7bE44', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:50:45'),
	(507, 'CoinPayment - BCH', 'Bitcoin Cash', '1', '50000', '0.51', '2.52', '84', '596f0097ed9d1ab8cfed05eb59c70e9f066513dfe4df64a8fc3917d309328315', '7472928395208f70E3cE30B9e10dc882cBDD3e9967b7942AaE492106d9C7bE44', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:50:37'),
	(508, 'CoinPayment - DASH', 'DASH', '1', '50000', '0.51', '2.52', '84', '596f0097ed9d1ab8cfed05eb59c70e9f066513dfe4df64a8fc3917d309328315', '7472928395208f70E3cE30B9e10dc882cBDD3e9967b7942AaE492106d9C7bE44', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:50:29'),
	(509, 'CoinPayment - DOGE', 'DOGE', '1', '50000', '0.51', '2.52', '84', '596f0097ed9d1ab8cfed05eb59c70e9f066513dfe4df64a8fc3917d309328315', '7472928395208f70E3cE30B9e10dc882cBDD3e9967b7942AaE492106d9C7bE44', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:50:12'),
	(510, 'CoinPayment - LTC', 'LTC', '1', '50000', '0.51', '2.52', '84', '596f0097ed9d1ab8cfed05eb59c70e9f066513dfe4df64a8fc3917d309328315', '7472928395208f70E3cE30B9e10dc882cBDD3e9967b7942AaE492106d9C7bE44', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:50:20'),
	(512, 'CoinGate', 'Coingate', '6', '76', '76', '6', '767', '42424242424242424241', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-07-08 18:00:00', '2019-08-22 04:49:59'),
	(513, 'CoinPayment-ALL', 'Coin Payment', '10', '1000', '05', '5', '84', 'db1d9f12444e65c921604e289a281c56', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:49:50'),
	(514, NULL, '銀行振り込み', '10', '999000', NULL, '11', '1', 'Dados para Depósito', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2019-07-13 05:10:36', '2021-03-16 04:36:12');
/*!40000 ALTER TABLE `gateways` ENABLE KEYS */;

-- Dumping structure for table lacura.home_comments
CREATE TABLE IF NOT EXISTS `home_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `comment` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.home_comments: ~3 rows (approximately)
/*!40000 ALTER TABLE `home_comments` DISABLE KEYS */;
REPLACE INTO `home_comments` (`id`, `user_id`, `comment`, `status`, `created_at`, `updated_at`) VALUES
	(7, 18, 'エリソン先生は、説明が丁寧でよく話を聞いてくださいます。\r\n\r\n治療内容の説明が分かりやすく、痛みもないなど教えてくれて心の準備ができて安心もした。\r\n\r\nこれからは、よろしくお願いします。', 1, '2020-08-07 22:58:59', '2020-08-07 23:01:56'),
	(9, 18, 'Elisson tem um poder espiritual maravilhoso e muito amável e atencioso em seu atendimento.\r\nEle foi muito cuidadoso ao explicar sobre tudo e sobre o tratamento e os conselhos das quais eram minhas preocupações. \r\nNesse momento as coisas estão indo muito bem e agora eu estou muito feliz contudo.\r\nObrigado por seu tempo e apoio incessante incentivo todos fazer a seção.', 1, '2020-08-09 03:04:52', '2020-08-09 03:05:51'),
	(10, 4, 'Teste de comentário.', 0, '2020-12-08 15:34:44', '2020-12-08 15:34:44');
/*!40000 ALTER TABLE `home_comments` ENABLE KEYS */;

-- Dumping structure for table lacura.how_it_works
CREATE TABLE IF NOT EXISTS `how_it_works` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.how_it_works: ~3 rows (approximately)
/*!40000 ALTER TABLE `how_it_works` DISABLE KEYS */;
REPLACE INTO `how_it_works` (`id`, `icon`, `title`, `detail`, `created_at`, `updated_at`) VALUES
	(1, 'credit-card', 'Get Deposit', 'Lorem ipsum dolor sit amet consec tetur icing elit. Volup Atatibus fuga, laudan dolor ut iusto.', '2019-01-29 07:05:11', '2019-02-02 21:55:46'),
	(3, 'university', 'Utilize Money', 'Lorem ipsum dolor sit amet consec tetur icing elit. Volup Atatibus fuga, laudan dolor ut iusto.', '2019-01-29 07:06:03', '2019-02-02 21:55:52'),
	(4, 'money', 'Give Interest', 'Lorem ipsum dolor sit amet consec tetur icing elit. Volup Atatibus fuga, laudan dolor ut iusto.', '2019-01-29 07:06:15', '2019-02-02 21:55:59');
/*!40000 ALTER TABLE `how_it_works` ENABLE KEYS */;

-- Dumping structure for table lacura.inst_sliders
CREATE TABLE IF NOT EXISTS `inst_sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image_name` text COLLATE utf8mb4_unicode_ci,
  `alt_pt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_jp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'ja',
  `temp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_pt` text COLLATE utf8mb4_unicode_ci,
  `title_jp` text COLLATE utf8mb4_unicode_ci,
  `batch_no` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lacura.inst_sliders: ~28 rows (approximately)
/*!40000 ALTER TABLE `inst_sliders` DISABLE KEYS */;
REPLACE INTO `inst_sliders` (`id`, `image_name`, `alt_pt`, `alt_jp`, `lang`, `temp`, `title_pt`, `title_jp`, `batch_no`, `status`, `created_at`, `updated_at`) VALUES
	(23, '60426e09cedc21614966281.png', NULL, NULL, 'pt-br', NULL, NULL, NULL, 5, 1, '2021-03-06 02:44:42', '2021-03-06 02:44:53'),
	(24, '60426e09ee8021614966281.png', NULL, NULL, 'pt-br', NULL, NULL, NULL, 5, 1, '2021-03-06 02:44:42', '2021-03-06 02:44:53'),
	(25, '60426e0b80cfa1614966283.png', NULL, NULL, 'pt-br', NULL, NULL, NULL, 5, 1, '2021-03-06 02:44:44', '2021-03-06 02:44:53'),
	(26, '60426e0ba5e531614966283.png', NULL, NULL, 'pt-br', NULL, NULL, NULL, 5, 1, '2021-03-06 02:44:44', '2021-03-06 02:44:53'),
	(27, '60426e0cc94ba1614966284.png', NULL, NULL, 'pt-br', NULL, NULL, NULL, 5, 1, '2021-03-06 02:44:45', '2021-03-06 02:44:53'),
	(28, '60426e4ed24911614966350.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-06 02:45:51', '2021-03-06 02:46:00'),
	(29, '60426e4ec4b9e1614966350.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-06 02:45:52', '2021-03-06 02:46:00'),
	(30, '60426e51520601614966353.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-06 02:45:54', '2021-03-06 02:46:00'),
	(31, '60426e5152a041614966353.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-06 02:45:54', '2021-03-06 02:46:00'),
	(32, '60426e52cd95a1614966354.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-06 02:45:55', '2021-03-06 02:46:00'),
	(33, '6043e40406ca81 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:20:20', '2021-03-07 05:20:33'),
	(34, '6043e40406a822 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:20:20', '2021-03-07 05:20:33'),
	(35, '6043e4050d5913 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:20:21', '2021-03-07 05:20:33'),
	(36, '6043e4050e9574 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:20:21', '2021-03-07 05:20:33'),
	(37, '6043e4057b4705 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:20:21', '2021-03-07 05:20:33'),
	(38, '371 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:25:19', '2021-03-07 05:25:28'),
	(39, '372 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:25:19', '2021-03-07 05:25:28'),
	(40, '393 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:25:20', '2021-03-07 05:25:28'),
	(41, '394 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:25:20', '2021-03-07 05:25:28'),
	(42, '415 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:25:20', '2021-03-07 05:25:28'),
	(43, '421 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:30:32', '2021-03-07 05:30:38'),
	(44, '422 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:30:32', '2021-03-07 05:30:38'),
	(45, '443 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:30:32', '2021-03-07 05:30:38'),
	(46, '444 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:30:33', '2021-03-07 05:30:38'),
	(47, '465 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:30:33', '2021-03-07 05:30:38'),
	(48, '472 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:58:19', '2021-03-07 05:58:29'),
	(49, '471 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:58:19', '2021-03-07 05:58:29'),
	(50, '493 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:58:20', '2021-03-07 05:58:29'),
	(51, '494 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:58:20', '2021-03-07 05:58:29');
/*!40000 ALTER TABLE `inst_sliders` ENABLE KEYS */;

-- Dumping structure for table lacura.invests
CREATE TABLE IF NOT EXISTS `invests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` int(11) NOT NULL,
  `hours` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_rec_time` int(11) NOT NULL DEFAULT '0',
  `next_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_time` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `capital_status` tinyint(1) NOT NULL COMMENT '1 = YES & 0 = NO',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `withdraw_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.invests: ~19 rows (approximately)
/*!40000 ALTER TABLE `invests` DISABLE KEYS */;
REPLACE INTO `invests` (`id`, `user_id`, `plan_id`, `amount`, `interest`, `period`, `hours`, `time_name`, `return_rec_time`, `next_time`, `last_time`, `status`, `capital_status`, `created_at`, `updated_at`, `withdraw_amount`) VALUES
	(2, 11, 8, '299000', '5083', 180, '24', 'Daily', 112, '2020-12-03 04:00:01', '2020-12-02 04:00:01', 1, 0, '2020-06-29 14:38:29', '2020-12-02 04:00:01', '569296'),
	(7, 9, 8, '299000', '5083', 180, '24', 'Daily', 112, '2020-12-03 04:00:01', '2020-12-02 04:00:01', 1, 0, '2020-06-30 08:39:37', '2020-12-02 04:00:01', '213486'),
	(8, 17, 8, '299000', '5083', 180, '24', 'Daily', 111, '2020-12-03 04:00:01', '2020-12-02 04:00:01', 1, 0, '2020-07-01 00:41:15', '2020-12-02 04:00:01', '564213'),
	(9, 16, 8, '299000', '5083', 180, '24', 'Daily', 110, '2020-12-03 04:00:01', '2020-12-02 04:00:01', 1, 0, '2020-07-01 16:11:27', '2020-12-02 04:00:01', '559130'),
	(10, 4, 7, '299000', '4186', 180, '24', 'Daily', 0, '2020-11-25 20:08:50', NULL, 9, 0, '2020-11-24 20:08:50', '2020-11-24 20:08:50', '0'),
	(11, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-06 03:30:37', NULL, 9, 0, '2021-03-05 03:30:37', '2021-03-05 03:30:37', '0'),
	(12, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 21:22:10', NULL, 9, 0, '2021-03-12 21:22:10', '2021-03-12 21:22:10', '0'),
	(13, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 21:37:23', NULL, 9, 0, '2021-03-12 21:37:23', '2021-03-12 21:37:23', '0'),
	(14, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 21:38:13', NULL, 9, 0, '2021-03-12 21:38:13', '2021-03-12 21:38:13', '0'),
	(15, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 21:39:38', NULL, 9, 0, '2021-03-12 21:39:38', '2021-03-12 21:39:38', '0'),
	(16, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 21:47:22', NULL, 9, 0, '2021-03-12 21:47:22', '2021-03-12 21:47:22', '0'),
	(17, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 21:48:13', NULL, 9, 0, '2021-03-12 21:48:13', '2021-03-12 21:48:13', '0'),
	(18, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 21:48:54', NULL, 9, 0, '2021-03-12 21:48:54', '2021-03-12 21:48:54', '0'),
	(19, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 22:11:17', NULL, 9, 0, '2021-03-12 22:11:17', '2021-03-12 22:11:17', '0'),
	(20, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 22:13:10', NULL, 9, 0, '2021-03-12 22:13:10', '2021-03-12 22:13:10', '0'),
	(21, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 22:13:13', NULL, 9, 0, '2021-03-12 22:13:13', '2021-03-12 22:13:13', '0'),
	(22, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 22:13:55', NULL, 9, 0, '2021-03-12 22:13:55', '2021-03-12 22:13:55', '0'),
	(23, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-12 18:19:53', NULL, 1, 0, '2021-03-12 22:17:57', '2021-03-12 22:19:53', '0'),
	(24, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 23:03:49', NULL, 9, 0, '2021-03-12 23:03:49', '2021-03-12 23:03:49', '0'),
	(25, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-14 05:22:55', NULL, 9, 0, '2021-03-13 05:22:55', '2021-03-13 05:22:55', '0'),
	(26, 1, 8, '299000', '5083', 180, '24', 'Daily', 0, '2021-03-16 04:22:16', NULL, 9, 0, '2021-03-15 04:22:16', '2021-03-15 04:22:16', '0'),
	(27, 1, 6, '99000', '495', 365, '24', 'Daily', 0, '2021-03-17 03:47:42', NULL, 9, 0, '2021-03-16 03:47:42', '2021-03-16 03:47:42', '0'),
	(28, 1, 6, '99000', '495', 365, '24', 'Daily', 0, '2021-03-17 03:48:20', NULL, 9, 0, '2021-03-16 03:48:20', '2021-03-16 03:48:20', '0'),
	(29, 1, 6, '99000', '495', 365, '24', 'Daily', 0, '2021-03-17 03:49:37', NULL, 9, 0, '2021-03-16 03:49:37', '2021-03-16 03:49:37', '0');
/*!40000 ALTER TABLE `invests` ENABLE KEYS */;

-- Dumping structure for table lacura.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `jobs_queue_index` (`queue`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

-- Dumping structure for table lacura.languages
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.languages: ~2 rows (approximately)
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
REPLACE INTO `languages` (`id`, `icon`, `name`, `code`, `created_at`, `updated_at`) VALUES
	(1, '1560174798.png', '日本語', 'ja', '2019-06-10 16:53:18', '2019-06-10 16:53:18'),
	(2, '1560174834.png', 'Português', 'pt-br', '2019-06-10 16:53:54', '2019-06-10 16:53:54');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;

-- Dumping structure for table lacura.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.menus: ~2 rows (approximately)
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
REPLACE INTO `menus` (`id`, `name`, `title`, `text`, `created_at`, `updated_at`) VALUES
	(2, 'Termos', 'La Cura - Termos e Condições', '<p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;"></p><ol><li><font color="#000000" face="Open Sans, Arial, sans-serif">Não é permitido metal e ferros tais como: brincos, fivelas, correntes, anéis, pulseiras.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Pode ser a causa de alergias, queimaduras e/ou hematomas, como; coceiras, irritação de pele.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Não é permitido eletromagnéticos tais como: baterias, celulares ou força que contém energia.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Pode ser a causa de alergias, queimaduras internas no corpo, como; irritações ardentes na pele.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">O cancelamento da reserva que está confirmada só é aceitável alteração através da web site, caso não compareça o valor será cobrado.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Os horários reservados são para que não ocorram atrasos do próximo cliente.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">O tratamento são conforme o plano disponível no site e após início ao tratamento tem que ser seguido para que venha ter resultado satisfatórios.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Caso venha ter alterações ou prolongamento o tratamento pode se estender por mais tempo.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Cada consulta tem o custo conforme disponível no site e por qual quer motivo de insatisfação fica ciente e concorda com os termos.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Caso não tenha condições financeiras, indicaremos medidas que possa solucionar a situação pessoal.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">O agendamento precisa ser feito por representante e através de cadastro https://lacura.me/&nbsp;</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">O encarregado fica responsável da apresentação dos termos e condições das eventuais experiências.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Cliente afiliado no sistema tem os seguintes direitos, trabalha com a　La Cura, interagi no sistema da sua conta através do site.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Como trabalha na La Cura, indicação de clientes, orientar pessoas por sua ajuda.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Divulgação com ganhos porta a porta, com ganhos de amigos de amigos por porcentagem e bonificação.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Os tratamentos e informações do cliente são sigilosos e confidenciais.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">É proibido transmitir sobre as experiências das seções que pode ser a causa da diferença entre pessoas.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Cliente aceita e está ciente que comparecerá por livre espontânea vontade e aceita todas as mudanças de melhorias e/ou efeitos colaterais, mesmo que a doença venha causar o falecimento da vida na seção.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">O órgão pode estar comprometido em paralisia crônica, que durante a experiência espiritual a alma pode recusar o retorno ao corpo, por sentir muitas dores, sofrimento na existência da continuidade d vida.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">O atendimento de menores de idade, menos que 18 anos não é permitido sem o seu responsável maior.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">As fases de tratamentos são「3」elementos da vida, como; espirito, mente e matéria.</font></li></ol><p></p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;"><img src="https://i.imgur.com/u2BWCie.png" width="690"><font color="#000000" face="Open Sans, Arial, sans-serif"><br></font></p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;"><font color="#000000" face="Open Sans, Arial, sans-serif">Por ser verdadeiro e dou fé, assino e aceito os termos e condições do presente documento.<br></font></p>', '2018-10-11 05:48:40', '2020-04-26 13:28:01'),
	(5, 'Termos', 'La Cura・受診条件', '<div><font color="#777777" face="Open Sans">金属や鉄などのアクセサリーは使用禁止しています。</font></div><div><font color="#777777" face="Open Sans">イヤリング、バックル、ネックレス、指輪、ブレスレットのような物。</font></div><div><font color="#777777" face="Open Sans">アレルギー、火傷やあざの症状の原因になる可能性があります。</font></div><div><font color="#777777" face="Open Sans">かゆみ、皮膚の刺激感など。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">電磁気は禁止しています。</font></div><div><font color="#777777" face="Open Sans">バッテリー、携帯電話や電気エネルギーを含まれているような物。</font></div><div><font color="#777777" face="Open Sans">アレルギー、内部の火傷、皮膚の炎症など。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">予約のキャンセルはウェブサイトのみで変更の手続きは可能ですが、万一受診しない場合は金額が請求されます。</font></div><div><font color="#777777" face="Open Sans">次のお客様に遅れが出ないように予約制になっています。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">治療期間がプランごとの診察で行ないます、治療開始したら十分な効果が得られるために1ヵ月毎に一回に診察が必要となります。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">万一変更や延長などがあった場合は治療期間は長くなる事があります。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">一回の診察料はプランに記載しておりますそれと不満な理由があっても返金できませんのでご了承をお願い致します。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">貧困の問題がある場合は、個人的な状況を解決する方法を示してあげます。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">予約の手続きは紹介者と会員登録が必要となります https://lacura.me/</font></div><div><font color="#777777" face="Open Sans">利用規約の説明と最終的にの体験が紹介者からの説明を受けます。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">La Curaと働く事が出来ます、ウェブサイトを通じてお客様のアカウントシステムでやりとり出来ます。</font><br></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">La Curaで働く方法には、紹介営業、あなたの助けによって人を導くこと。</font></div><div><font color="#777777" face="Open Sans">営業訪問の利益を得て、知人によるの紹介の割合とボーナスごとの利益になります。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">治療法とお客様の個人情報保護しています。</font></div><div><font color="#777777" face="Open Sans">診察の体験を伝達することは禁じられています、人々の間の違いの原因になる可能性があります。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">お客様が意識して自発的に参加することを承諾し、改善または副作用のすべての変化を受け入れ、診察中に病気で人生の死を引き起こす可能性もありますのでお客様が同意します。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">臓器は慢性麻痺に関与している可能性があり、精神的な体験の間に魂が体に戻ることを拒否することがあり、人生の連続性の存在に苦しんで、ひどい痛みを感じることためです。</font></div><div><font color="#777777" face="Open Sans">精神的な体験の間に魂が体に戻ることを拒否することがあるためです。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">未成年の場合は、18歳未満の方は保護者と一緒ではないと許可されません。</font></div><div><font color="#777777" face="Open Sans">治療法の段階は人生の「3」三つの要素があります; 精神、思考と物質です。</font></div><div><img src="https://i.imgur.com/u2BWCie.png" alt="" align="none"><font color="#777777" face="Open Sans"><br></font></div><div><br></div><div>真実で本物であるために、私はこの利用規約の全ての内容を同意して署名します。<br></div>', '2019-09-03 14:24:04', '2020-04-26 13:21:20');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Dumping structure for table lacura.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.migrations: ~81 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(6, '2018_09_15_055044_create_admins_table', 1),
	(14, '2018_09_23_070452_create_accounts_table', 8),
	(15, '2018_10_06_111835_create_teams_table', 9),
	(16, '2018_10_06_111923_create_testimonials_table', 9),
	(17, '2018_10_06_131253_create_socials_table', 10),
	(18, '2018_10_09_124655_create_services_table', 11),
	(19, '2018_10_11_054818_create_blogs_table', 12),
	(20, '2014_10_12_000000_create_users_table', 13),
	(21, '2018_10_11_112743_create_menus_table', 14),
	(22, '2018_10_13_120207_create_links_table', 15),
	(23, '2018_10_14_124147_create_advertises_table', 16),
	(24, '2018_10_15_094201_create_transections_table', 17),
	(25, '2018_10_15_112248_create_withdraws_table', 18),
	(26, '2018_10_15_112459_create_withdraw_methods_table', 18),
	(27, '2018_10_20_101804_create_support_tickets_table', 19),
	(28, '2018_10_20_101909_create_ticket_comments_table', 19),
	(29, '2018_10_21_073244_create_ip_tracks_table', 20),
	(30, '2018_12_04_055504_create_faqs_table', 21),
	(31, '2018_12_05_094029_create_plans_table', 22),
	(32, '2018_12_05_122043_create_time_settings_table', 23),
	(33, '2018_12_11_055235_create_invests_table', 24),
	(34, '2018_12_19_102753_create_epins_table', 25),
	(35, '2018_12_19_133151_create_referrals_table', 26),
	(36, '2018_12_27_122808_create_subscribers_table', 27),
	(37, '2018_12_27_141219_create_jobs_table', 28),
	(38, '2019_01_05_114834_create_languages_table', 29),
	(39, '2019_01_29_124624_create_how_it_works_table', 30),
	(44, '2019_06_29_111155_add_withdraw_amount_to_invests_table', 31),
	(53, '2019_07_01_091505_create_albums_table', 32),
	(54, '2019_07_01_110658_create_album_items_table', 32),
	(55, '2019_07_03_085803_add_image_to_users_table', 33),
	(56, '2019_07_03_090503_add_public_to_albums_table', 33),
	(58, '2019_07_03_100606_add_gallery_to_basic_settings_table', 34),
	(59, '2019_07_03_122215_add_rating_count_to_album_items_table', 35),
	(64, '2019_07_04_055207_add_extra_to_plans_table', 36),
	(66, '2019_07_04_095306_add_users_to_basic_settings_table', 37),
	(67, '2019_07_04_115625_add_affiliate_rules_to_basic_settings_table', 38),
	(70, '2019_07_04_124735_create_referral_commissions_table', 39),
	(71, '2019_07_04_132921_create_user_logins_table', 40),
	(76, '2019_07_04_133209_add_login_time_to_users_table', 41),
	(77, '2019_07_04_133919_create_user_logins_table', 42),
	(78, '2019_07_06_053225_add_status_to_referral_commissions_table', 43),
	(81, '2019_07_06_093814_create_about_mes_table', 44),
	(83, '2019_07_07_063632_create_schedules_table', 45),
	(84, '2019_07_07_112243_add_status_to_schedules_table', 46),
	(85, '2019_07_07_133033_add_schedule_price_to_basic_settings_table', 47),
	(86, '2019_07_07_134328_add_schedule_title_to_basic_settings_table', 48),
	(87, '2019_07_09_115909_add_registration_logo_to_basic_settings_table', 49),
	(88, '2019_07_09_122220_create_sliders_table', 50),
	(91, '2019_07_10_052052_add_slider_speed_to_basic_settings_table', 51),
	(92, '2019_07_10_062803_add_nickname_to_users_table', 52),
	(93, '2019_07_10_082352_create_news_table', 53),
	(94, '2019_07_10_100253_add_news_image_to_basic_settings_table', 54),
	(103, '2019_07_17_065723_add_remark_charge_to_schedules_table', 55),
	(104, '2019_07_18_113125_create_email_languages_table', 55),
	(105, '2019_07_20_053829_add_lang_to_users_table', 55),
	(106, '2019_07_20_075144_add_lang_to_admins_table', 56),
	(107, '2019_07_20_075332_add_lang_to_basic_settings_table', 57),
	(108, '2019_07_20_092237_add_notified_at_to_schedules_table', 58),
	(109, '2019_07_22_072400_add_long_lat_to_user_logins_table', 59),
	(110, '2019_07_23_062443_add_schedule_email_to_basic_settings_table', 60),
	(111, '2019_08_04_101232_add_lang_to_sliders_table', 61),
	(112, '2019_08_04_104725_add_image_to_plans_table', 62),
	(114, '2019_08_04_113306_add_nominee_to_basic_settings_table', 63),
	(115, '2019_08_05_051011_add_link_to_blogs_table', 64),
	(116, '2019_08_05_071316_add_withdraw_verify_documents_to_users_table', 65),
	(117, '2019_09_22_073026_add_temp_to_albums_table', 66),
	(121, '2019_09_23_111020_add_temp_to_sliders_table', 67),
	(123, '2019_09_23_135122_add_invest_id_to_schedules_table', 68),
	(124, '2019_09_23_142529_add_seo_to_basic_settings_table', 69),
	(125, '2019_09_25_135559_add_textpt_to_blogs_table', 70),
	(126, '2019_09_26_055627_add_slider_textpt_to_basic_settings_table', 71),
	(128, '2019_09_26_091814_add_about_map_to_basic_settings_table', 73),
	(129, '2019_09_26_095006_add_show_about_to_albums_table', 74),
	(136, '2019_09_26_112345_create_social_marketings_table', 75),
	(137, '2019_09_26_112852_create_social_marketing_services_table', 75),
	(138, '2019_09_26_113638_create_user_social_marketing_services_table', 75),
	(140, '2019_09_28_052921_create_social_marketing_service_subscribers_table', 76),
	(145, '2019_10_07_125208_add_location_to_schedules_table', 77),
	(146, '2019_10_07_131200_add_schedule_cities_to_basic_settings_table', 77),
	(148, '2019_07_01_110658_create_basic_settings_table', 77),
	(149, '2019_09_26_070502_create_pages_table', 78),
	(151, '2021_02_27_232945_add_slider_settings_fields_to_basic_setting', 79),
	(153, '2021_03_04_212734_add_footer_settings_fields_to_basic_settings', 80),
	(155, '2021_03_05_040558_create_inst_sliders_table', 81),
	(158, '2021_03_06_224902_add_footer_slider_setting_to_basic_settings_table', 82),
	(159, '2021_03_09_050805_add_translation_keys_to_pages', 83),
	(160, '2021_03_23_224320_add_contact_data_to_users_table', 84),
	(161, '2021_03_25_041627_create_min_blog_categories_table', 85),
	(162, '2021_03_25_042751_add_category_id_to_min_blog_table', 85);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table lacura.miniblogs
CREATE TABLE IF NOT EXISTS `miniblogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `sub_title` varchar(200) NOT NULL,
  `Image` text NOT NULL,
  `description` text NOT NULL,
  `Status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.miniblogs: ~0 rows (approximately)
/*!40000 ALTER TABLE `miniblogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `miniblogs` ENABLE KEYS */;

-- Dumping structure for table lacura.mini_blogs
CREATE TABLE IF NOT EXISTS `mini_blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_ja` text NOT NULL,
  `title_pt` text NOT NULL,
  `image` text NOT NULL,
  `description_ja` text NOT NULL,
  `description_pt` text NOT NULL,
  `tags` varchar(200) DEFAULT NULL,
  `Status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.mini_blogs: ~2 rows (approximately)
/*!40000 ALTER TABLE `mini_blogs` DISABLE KEYS */;
REPLACE INTO `mini_blogs` (`id`, `title_ja`, `title_pt`, `image`, `description_ja`, `description_pt`, `tags`, `Status`, `created_at`, `updated_at`, `category_id`) VALUES
	(1, 'La Curaのコンセプト', 'O Conceito da La Cura.', '1596951866.jpg', '<p><span style="font-size:16px">本日は、ようこそ説明会に参加していただきまして、ありがとうございます。</span></p>\r\n\r\n<p><span style="font-size:16px">軽く自己紹介をさせて頂きます。</span></p>\r\n\r\n<p><span style="font-size:16px">La Curaの代表、26歳、2005年からは、あらゆる認識が高まり、精神的な進化が起こり始め、日常的に不思議な力が強くなって、天からの宿命を持つ事がわかったんです。</span></p>\r\n\r\n<p><span style="font-size:16px">2011年から、天命に従い、人様を助け共に歩んで参りました。</span></p>\r\n\r\n<p><span style="font-size:16px">今回は2021年の世界を取り巻く状況から、今後、如何に生きていくかという事をお伝えして参ります。</span></p>\r\n\r\n<p><span style="font-size:16px">天下には何事にも機会があり、目的のための時がある</span></p>\r\n\r\n<p><span style="font-size:16px">まず、私たち、人類は世界でも稀に見る激変の時代に生きています。</span></p>\r\n\r\n<p><span style="font-size:16px">幸い大きな戦争は今のところ、ないものの、皆様今現在、その最中であります新型ウィルスによってビフォー、アフターの大激変の最中です。</span></p>\r\n\r\n<p><span style="font-size:16px">一旦は、収束したかに見えたウィルスですが、既にパンデミックというような事態になっています。</span></p>\r\n\r\n<p><span style="font-size:16px">経済的にも、現在の経済の統計四半期ベースでなん割か落ち込んでいます。</span></p>\r\n\r\n<p><span style="font-size:16px">この本波もやがて目に見えて訪れて行く事でしょう。</span></p>\r\n\r\n<p><span style="font-size:16px">今後の私達は、医療崩壊や物資の不足、食糧危機という事も他人事でなく十分に起こり得るのだという認識で生活しなければなりません。</span></p>\r\n\r\n<p><span style="font-size:16px">その為には健全な心、肉体、魂という正常な状態を保っていかなければなりません。</span></p>\r\n\r\n<p><span style="font-size:16px">それから水や保存食といった物の備蓄も、買い占めるではなく少しずつ、蓄えていっておいた方がいいでしょう。</span></p>\r\n\r\n<p><span style="font-size:16px">備えあれば憂いなしとはいいますが、この教訓を守っていれば、例え困るにしても、その度合いは限られてくるでしょう。</span></p>\r\n\r\n<p><span style="font-size:16px">ここからは私たちの根源、ルーツの話になります。</span></p>\r\n\r\n<p><span style="font-size:16px">私たちは一体、どこからきて、どこにいくのでしょう。</span></p>\r\n\r\n<p><span style="font-size:16px">そういった事は、人として生まれたら、一度位は考えてみた事がある事でしょう。</span></p>\r\n\r\n<p><span style="font-size:16px">地球上には、キリスト教、イスラム教、ユダヤ教という三大宗教の聖地が、イスラエルのエルサレムにありますね。</span></p>\r\n\r\n<p><span style="font-size:16px">そして、仏教、ヒンズー教等、様々な宗教があります。</span></p>\r\n\r\n<p><span style="font-size:16px">それは確かに事実ですが、様々な宗教があっても、それ以上に私達が地球という</span></p>\r\n\r\n<p><span style="font-size:16px">一つ星に住んでいるという大きな事実があります。</span></p>\r\n\r\n<p><span style="font-size:16px">そして地球は太陽系の一部です。</span></p>\r\n\r\n<p><span style="font-size:16px">太陽系は銀河系の一部です。</span></p>\r\n\r\n<p><span style="font-size:16px">銀河系は、千億も数以上あります。</span></p>\r\n\r\n<p><span style="font-size:16px">現在の宇宙では、ビックバンという宇宙の始まりからずっと膨張し続けています。</span></p>\r\n\r\n<p><span style="font-size:16px">現在、色んな事が解明されてきて、様々な宗教の教義の違いから争うという</span></p>\r\n\r\n<p><span style="font-size:16px">宗教戦争の時代も終わりを告げてきています。</span></p>\r\n\r\n<p><span style="font-size:16px">宗教で争う時代が完全に終わったとしても、私達には種々の問題が山積しています。</span></p>\r\n\r\n<p><span style="font-size:16px">人種問題、人権問題、経済問題、精神問題、仕事の問題、ストレスの問題、健康問題、これらの問題の根本は生老病死苦です。</span></p>\r\n\r\n<p><span style="font-size:16px">人は生まれた以上、色んな変遷を経て最後に必ず、死を迎えます。</span></p>\r\n\r\n<p><span style="font-size:16px">つまり、人間の死亡率は100%です。</span></p>\r\n\r\n<p><span style="font-size:16px">あなたは、苦しんで生きて苦しんで死んで行きたいですか？　それは、やはり嫌ですよね。</span></p>\r\n\r\n<p><span style="font-size:16px">人として、人間として産まれた以上幸せに全うに人生を歩みたいものです。</span></p>\r\n\r\n<p><span style="font-size:16px">人という字を見てみてください。</span></p>\r\n\r\n<p><span style="font-size:16px">正面から見ると人です。</span></p>\r\n\r\n<p><span style="font-size:16px">支え合っているように見えますよね。</span></p>\r\n\r\n<p><span style="font-size:16px">人は、個体を持つ事によって他者との違いを明確にして、自分を見つめ直すという事ができるんです。</span></p>\r\n\r\n<p><span style="font-size:16px">同じ体験をしても、その人のフィルターによって見え方も感じ方も変わってくるんです。</span></p>\r\n\r\n<p><span style="font-size:16px">その中で共通項、最大公約数という事があります。</span></p>\r\n\r\n<p><span style="font-size:16px">そこに、人類共通の認識が産まれています。</span></p>\r\n\r\n<p><span style="font-size:16px">その人類共通の認識、基準の中で自分の人生との乖離を感じるんです。</span></p>\r\n\r\n<p><span style="font-size:16px">それが、幸せであれば、問題はありません。</span></p>\r\n\r\n<p><span style="font-size:16px">しかしながら、だいたいは、様々な不幸という問題を抱えて行きます。</span></p>\r\n\r\n<p><span style="font-size:16px">それが、自分だけの力ですぐに解決する問題ならいいです。</span></p>\r\n\r\n<p><span style="font-size:16px">そういう場合、大抵は自分だけで解決しないんです。</span></p>\r\n\r\n<p><span style="font-size:16px">その結果、悩みというストレスの中で疲弊して行きます。<br />\r\nそんな人生は好きですか？</span></p>\r\n\r\n<p><span style="font-size:16px">もし、そんなストレス嫌ですよね。</span></p>\r\n\r\n<p><span style="font-size:16px">ただ、自分一人では解決できない。</span></p>\r\n\r\n<p><span style="font-size:16px">そんな時、貴方の問題をサクッと解決してくれるサービスがあったらどうでしょう？</span></p>\r\n\r\n<p><span style="font-size:16px">時間という有限の資源で構成されている貴方の人生が、ストレスなく輝く事をお手伝いさせて頂く事が、できるのが、私の特別な力なのです。</span></p>\r\n\r\n<p><span style="font-size:16px">貴方が、今、どんな問題があっても差し支えありません。</span></p>\r\n\r\n<p><span style="font-size:16px">私の授かりし、特別な力により、貴方が産まれもった魂の封印を開放して、今生において貴方の魂が本来、持った特性と結びついて、この世に開放されて行きます。</span></p>\r\n\r\n<p><span style="font-size:16px">私が各、神々（光）とどういう繋がりがあるのかというのはウェブサイトのギャラリーのほうでご覧頂けます。https://lacura.me/about</span></p>\r\n\r\n<p><span style="font-size:16px">これは、貴方の力とは一切、関係ありません。</span></p>\r\n\r\n<p><span style="font-size:16px">私のお祓いを受けるだけで、全てが解決するんです。<br />\r\nこれって素晴らしくないですか？</span></p>\r\n\r\n<p><span style="font-size:16px">では、具体的に何を解決でするのかを紹介いたします。</span></p>\r\n\r\n<p><span style="font-size:16px">あらゆる中毒・依存の治療・精神的なトラウマ・精神的な病気・精神の浄化・仕事の影響（ケガ・病気）</span></p>\r\n\r\n<p><span style="font-size:16px">例えば、先生のお祓いはウィルスさえ、寄せ付けない程、強力なんです。</span></p>\r\n\r\n<p><span style="font-size:16px">こればかりは、体験して頂くのが一番なので、是非、一度、お祓いを受けて見られてはいかがでしょう！</span></p>\r\n\r\n<p><span style="font-size:16px">さて、私のお祓いがいかに素晴らしいかは、一度、受けて見られるのが一番なのですが、それでも素晴らしさの一旦はお伝えできたのでは、ないでしょうか。</span></p>\r\n\r\n<p><span style="font-size:16px">世界の問題で大きい物の一つに貧富の差がありますね。</span></p>\r\n\r\n<p><span style="font-size:16px">lacura.me としても、ここは何か取り組まなければ、ならない</span></p>\r\n\r\n<p><span style="font-size:16px">問題の一つでした。</span></p>\r\n\r\n<p><span style="font-size:16px">そこでlacura.meでは、世界初ともいえるギフトという</span></p>\r\n\r\n<p><span style="font-size:16px">システムをサイト上に公開しています。</span></p>\r\n\r\n<p><span style="font-size:16px">このシステムは lacura.meのお祓いを貴方のお仲間に紹介する事でギフトとして貴方の入金した金額のトータル一定額が毎日ギフトとして頂けるシステムなんです。</span></p>\r\n\r\n<p><span style="font-size:16px">誰も紹介できなかったとしても、貴方はきちんとお祓いは受けられます。</span></p>\r\n\r\n<p><span style="font-size:16px">このギフトはあくまでも最低三人を紹介した時の特典としてお考えください。</span></p>\r\n\r\n<p><span style="font-size:16px">では、こんにち、私たちの社会的な経済格差を無くして行く為、そして幸せを手に入れて頂くため、ラクラではギフトを提案します。</span></p>\r\n\r\n<p><span style="font-size:16px">貴方がギフトに参加して頂く事によってあらゆる悩みから解放されます。</span></p>\r\n\r\n<p><span style="font-size:16px">ここまでは、ラクラからのお祓いによって成し遂げられます。</span></p>\r\n\r\n<p><span style="font-size:16px">貴方がギフトに参加することによって</span></p>\r\n\r\n<p><span style="font-size:16px">例えば30万円の借金があったとしても問題はありません。</span></p>\r\n\r\n<p><span style="font-size:16px">なぜならば、ラクラ、ギフトに参加して3人の紹介者を出すことで1日当たり1.4% 180日間に及ぶギフトを受け取れるからです。</span></p>\r\n\r\n<p><span style="font-size:16px">貴方の出費について考えてみましょう！</span></p>\r\n\r\n<p><span style="font-size:16px">まず、世の中は人が作った物すべて、経済で回っています。</span></p>\r\n\r\n<p><span style="font-size:16px">つまり、価値の交換です。</span></p>\r\n\r\n<p><span style="font-size:16px">即ち、ご存知のようにお金がないと何も出来ないのです。</span></p>\r\n\r\n<p><span style="font-size:16px">貴方がもし車を購入するとします。<br />\r\n毎月のローン・毎年の車検代・毎年の保険代・毎日のガソリン代・車のメンテナンス代金<br />\r\n一体年間いくらかかるでしょう！どれだけのお金を支払っていますか？</span></p>\r\n\r\n<p><span style="font-size:16px">貴方がもし、子供さんを養育している<br />\r\nシングルマザー、つまり母子では一体どれだけの出費が発生するでしょうか？</span></p>\r\n\r\n<p><span style="font-size:16px">家賃・光熱費・通信費・保険代・子供教育費<br />\r\nそれらの物にどれたげ出費をしているでしょう？</span></p>\r\n\r\n<p><span style="font-size:16px">つまり、貴方は何もしなければ出費ばかりで貯金もなく豊かにならないという現実があるのです。</span></p>\r\n\r\n<p><span style="font-size:16px">もしも、貴方がラクラ、ギフトに参加すれば貴方のお金の苦しい問題も解決する事になります。</span></p>\r\n\r\n<p><span style="font-size:16px">賢明な貴方なら理解して頂いてくれた事でしょう。</span></p>\r\n\r\n<p><span style="font-size:16px">貴方とラクラ、ギフトでお会いする事を楽しみにしています。</span></p>\r\n\r\n<p><span style="font-size:16px">ここまで、駆け足で説明してきましたが、どうでしたでしょう。</span></p>\r\n\r\n<p><span style="font-size:16px">まずは、貴方の悩みはお祓いですべてなかった事にしましょう。</span></p>\r\n\r\n<p><span style="font-size:16px">お聞き頂き、ありがとうございました。</span></p>', '<p><span style="font-size:16px">O Conceito da La Cura.</span></p>\r\n\r\n<p><span style="font-size:16px">Obrigado por juntar-se a n&oacute;s hoje para esse momento.</span></p>\r\n\r\n<p><span style="font-size:16px">Eu sou dono da La Cura, aos 26 anos de idade, em 2005, todas as percep&ccedil;&otilde;es se intensificam cada vez mais, a evolu&ccedil;&atilde;o espiritual come&ccedil;ando a acontecer e surgi poder misterioso fortalecendo a cada dia, e percebi ent&atilde;o que sou conectado com as luzes al&eacute;m da nossa exist&ecirc;ncia. Desde antes e depois de 2011, eu venho obedecendo a ordenan&ccedil;as celestiais.</span></p>\r\n\r\n<p><span style="font-size:16px">Nesse analise, vamos ver a situa&ccedil;&atilde;o do mundo em 2021, estou aqui para lhes dizer como fazer o melhor das coisas.</span></p>\r\n\r\n<p><span style="font-size:16px">&nbsp;&ldquo;H&aacute; uma oportunidade para tudo sob o sol, e um tempo para um prop&oacute;sito.&rdquo;</span></p>\r\n\r\n<p><span style="font-size:16px">Em primeiro lugar, n&oacute;s humanos estamos vivendo em uma era de mudan&ccedil;as catacl&iacute;smicas que raramente &eacute; vista no mundo...</span></p>\r\n\r\n<p><span style="font-size:16px">Embora n&atilde;o haja uma grande guerra no momento, estamos no meio de um grande tumulto de antes e depois das mudan&ccedil;as causadas por um novo tipo de v&iacute;rus...</span></p>\r\n\r\n<p><span style="font-size:16px">Uma vez que o v&iacute;rus parecia estar contido, agora se tornou o que parece ser uma pandemia...</span></p>\r\n\r\n<p><span style="font-size:16px">Economicamente, a economia caiu uma pequena porcentagem em base estat&iacute;stica atual...</span></p>\r\n\r\n<p><span style="font-size:16px">Esta onda vir&aacute; em breve.</span></p>\r\n\r\n<p><span style="font-size:16px">No futuro, devemos viver com o entendimento de que o colapso dos cuidados m&eacute;dicos, a escassez de bens e as crises alimentares n&atilde;o s&atilde;o algo com que possamos nos preocupar, mas que est&atilde;o cada vez mais pr&oacute;ximo de acontecer.</span></p>\r\n\r\n<p><span style="font-size:16px">Para isso, &eacute; preciso manter uma mente, corpo e alma saud&aacute;veis...</span></p>\r\n\r\n<p><span style="font-size:16px">Tamb&eacute;m seria melhor estocar &aacute;gua e alimentos conservados, n&atilde;o os comprando tudo de uma vez, mas um pouco de cada vez...</span></p>\r\n\r\n<p><span style="font-size:16px">Se voc&ecirc; estiver preparado, estar&aacute; melhor, mas se voc&ecirc; seguir esta li&ccedil;&atilde;o ficara melhor.</span></p>\r\n\r\n<p><span style="font-size:16px">Mesmo se voc&ecirc; estiver em apuros, o grau de dificuldade ser&aacute; limitado...</span></p>\r\n\r\n<p><span style="font-size:16px">A partir daqui, eu gostaria de falar sobre as minhas diretrizes.</span></p>\r\n\r\n<p><span style="font-size:16px">De onde viemos e para onde estamos indo?</span></p>\r\n\r\n<p><span style="font-size:16px">Se voc&ecirc; nasceu, deve ter pensado em semelhantes coisas pelo menos uma vez em sua vida.</span></p>\r\n\r\n<p><span style="font-size:16px">Existem tr&ecirc;s religi&otilde;es principais na terra: o cristianismo, o islamismo e o juda&iacute;smo.</span></p>\r\n\r\n<p><span style="font-size:16px">Os locais santos das tr&ecirc;s principais religi&otilde;es est&atilde;o localizados em Jerusal&eacute;m, Israel.</span></p>\r\n\r\n<p><span style="font-size:16px">Existem muitas religi&otilde;es diferentes, incluindo budismo, hindu&iacute;smo, etc.</span></p>\r\n\r\n<p><span style="font-size:16px">Isto &eacute; verdade, mas tamb&eacute;m &eacute; verdade que, embora existam muitas religi&otilde;es diferentes, mas h&aacute; mais do que isso, porque n&oacute;s somos feitos da terra.</span></p>\r\n\r\n<p><span style="font-size:16px">&Eacute; um grande fato que vivemos em uma &uacute;nica estrela.</span></p>\r\n\r\n<p><span style="font-size:16px">E a Terra &eacute; uma parte do sistema solar.</span></p>\r\n\r\n<p><span style="font-size:16px">O sistema solar &eacute; uma parte de nossa gal&aacute;xia.</span></p>\r\n\r\n<p><span style="font-size:16px">Existem mais de 100 bilh&otilde;es de gal&aacute;xias na gal&aacute;xia.</span></p>\r\n\r\n<p><span style="font-size:16px">O universo atual vem se expandindo desde o in&iacute;cio do Big Bang.</span></p>\r\n\r\n<p><span style="font-size:16px">Atualmente, muitas coisas foram descobertas e muitas religi&otilde;es diferentes est&atilde;o tentando lutar umas contra as outras por doutrinas diferentes.</span></p>\r\n\r\n<p><span style="font-size:16px">A era da guerra religiosa est&aacute; chegando ao fim.</span></p>\r\n\r\n<p><span style="font-size:16px">Mesmo que a era da luta religiosa tenha terminado completamente, ainda temos muitos problemas a enfrentar.</span></p>\r\n\r\n<p><span style="font-size:16px">Quest&otilde;es raciais, de direitos humanos, econ&ocirc;micas, psicol&oacute;gicas, de trabalho, de estresse, de sa&uacute;de, e a raiz de todas estas quest&otilde;es &eacute; a vida, o envelhecimento, a doen&ccedil;a e a morte.</span></p>\r\n\r\n<p><span style="font-size:16px">Uma vez nascido, o ser humano e qualquer outra vida passa por v&aacute;rias transi&ccedil;&otilde;es e inevitavelmente morrer&aacute; no final de suas vidas.</span></p>\r\n\r\n<p><span style="font-size:16px">Em outras palavras, a taxa de mortalidade para os seres humanos e qualquer outra vida &eacute; de 100%.</span></p>\r\n\r\n<p><span style="font-size:16px">Voc&ecirc; quer morrer sofrendo?　Certamente, n&atilde;o.</span></p>\r\n\r\n<p><span style="font-size:16px">Desde que nascemos como seres humanos, queremos viver a vidas felizes e completamente livres.</span></p>\r\n\r\n<p><span style="font-size:16px">Olhe para a palavra dos caracteres japoneses &ldquo;pessoa&rdquo;人<br />\r\nSe voc&ecirc; olhar de frente, &eacute; uma pessoa人 parece estar se apoiando um no outro.</span></p>\r\n\r\n<p><span style="font-size:16px">A outra pessoa pode ser que tenha a resposta que voc&ecirc; tanto precise &eacute; uma formula de esclarecer as diferen&ccedil;as entre n&oacute;s e os outros, e nos permite olhar para n&oacute;s mesmos.&nbsp;</span></p>\r\n\r\n<p><span style="font-size:16px">&ldquo;As coisas existentes na terra e uma ess&ecirc;ncia que faz parte do seu c&eacute;rebro&rdquo;.</span></p>\r\n\r\n<p><span style="font-size:16px">Mesmo que voc&ecirc; tenha a mesma experi&ecirc;ncia, a maneira como voc&ecirc; a v&ecirc; e percebe ir&aacute; ter mudan&ccedil;as dependendo do seu filtro.</span></p>\r\n\r\n<p><span style="font-size:16px">Existe um denominador comum, &agrave;s vezes denominador m&aacute;ximo.&nbsp;</span></p>\r\n\r\n<p><span style="font-size:16px">&Eacute; aqui que nasce uma compreens&atilde;o comum da humanidade.</span></p>\r\n\r\n<p><span style="font-size:16px">Essa percep&ccedil;&atilde;o voc&ecirc; pode sentir a diverg&ecirc;ncia na sua vida comum e entre a humanidade.</span></p>\r\n\r\n<p><span style="font-size:16px">Se for felicidade, ent&atilde;o n&atilde;o h&aacute; problema.</span></p>\r\n\r\n<p><span style="font-size:16px">No entanto, geralmente v&ecirc;m com v&aacute;rios problemas de infort&uacute;nio.</span></p>\r\n\r\n<p><span style="font-size:16px">Se for um problema que pode ser resolvido rapidamente por voc&ecirc; mesmo, ent&atilde;o est&aacute; tudo resolvido e bem.</span></p>\r\n\r\n<p><span style="font-size:16px">Muitos casos, na maioria das vezes, n&atilde;o conseguem resolver o problema sozinho.</span></p>\r\n\r\n<p><span style="font-size:16px">Como resultado, ficamos exaustos sob o estresse da preocupa&ccedil;&atilde;o.</span></p>\r\n\r\n<p><span style="font-size:16px">Gosta dessa vida?</span></p>\r\n\r\n<p><span style="font-size:16px">Voc&ecirc; n&atilde;o quer ficar estressado dessa maneira.</span></p>\r\n\r\n<p><span style="font-size:16px">Mas voc&ecirc; n&atilde;o pode resolver este problema sozinho.</span></p>\r\n\r\n<p><span style="font-size:16px">Em tais momentos, voc&ecirc; gostaria de ter algu&eacute;m que possa resolver rapidamente seus problemas?</span></p>\r\n\r\n<p><span style="font-size:16px">Sua vida, que &eacute; composta de um recurso finito chamado tempo, e &eacute; com muito prazer ajudar voc&ecirc; a ter um melhor desempenho em sua vida, eu posso lhe ajudar.</span></p>\r\n\r\n<p><span style="font-size:16px">N&atilde;o importa que tipo de problemas voc&ecirc; tenha, isso n&atilde;o far&aacute; diferen&ccedil;a.</span></p>\r\n\r\n<p><span style="font-size:16px">Por poder divino, ser&aacute; libertada atrav&eacute;s do selo de sua alma inata, sincronizando voc&ecirc; a f&eacute; celestial.</span></p>\r\n\r\n<p><span style="font-size:16px">Voc&ecirc; pode saber mais sobre a mim no link abaixo, s&atilde;o fotografias absolutas e verdadeiras de luzes celestes que veem do universo.</span></p>\r\n\r\n<p><span style="font-size:16px">Veja na galeria do website https://lacura.me/about&nbsp;</span></p>\r\n\r\n<p><span style="font-size:16px">Isto n&atilde;o tem nada a ver com o poder que voc&ecirc; tem.</span></p>\r\n\r\n<p><span style="font-size:16px">Tudo o que voc&ecirc; precisa fazer &eacute; uma se&ccedil;&atilde;o de exorcismo e tudo ser&aacute; diferente e as coisas se resolvem.</span></p>\r\n\r\n<p><span style="font-size:16px">Isto n&atilde;o &eacute; fant&aacute;stico?</span></p>\r\n\r\n<p><span style="font-size:16px">Portanto, o que apresentarei a voc&ecirc; &eacute; exatamente uma solu&ccedil;&atilde;o espec&iacute;fica para um problema.</span></p>\r\n\r\n<p><span style="font-size:16px">Tratamento de v&iacute;cios e depend&ecirc;ncias, traumas mentais, doen&ccedil;as mentais, purifica&ccedil;&atilde;o mental e dores.</span></p>\r\n\r\n<p><span style="font-size:16px">Por exemplo, o exorcismo &eacute; t&atilde;o poderoso que voc&ecirc; poder&aacute; fica imune e n&atilde;o atrai nem mesmo um v&iacute;rus.</span></p>\r\n\r\n<p><span style="font-size:16px">Esta &eacute; a melhor coisa que voc&ecirc; pode experimentar, ent&atilde;o por que n&atilde;o fazer um exorcismo e ver do que se trata pelo menos uma vez! A melhor maneira de experimentar isto &eacute; experiment&aacute;-lo por si mesmo.</span></p>\r\n\r\n<p><span style="font-size:16px">Agora, &eacute; melhor voc&ecirc; fazer o exorcismo, para ver como &eacute; maravilhosa essa experi&ecirc;ncia incr&iacute;vel, e espero ter transmitido com transpar&ecirc;ncia uma parte de como &eacute; maravilhosa e valiosa uma se&ccedil;&atilde;o.</span></p>\r\n\r\n<p><span style="font-size:16px">Uma das quest&otilde;es mais importantes no mundo &eacute; a disparidade entre ricos e pobres.</span></p>\r\n\r\n<p><span style="font-size:16px">Eu, como lacura.me , tamb&eacute;m tenho que fazer algo a respeito disso.</span></p>\r\n\r\n<p><span style="font-size:16px">Faz parte de um dos problemas.</span></p>\r\n\r\n<p><span style="font-size:16px">&Eacute; um orgulho da lacura.me apresentar o plano chamado presente o sistema est&aacute; dispon&iacute;vel no site.</span></p>\r\n\r\n<p><span style="font-size:16px">Este sistema foi projetado para voc&ecirc; e amigos e colegas fazerem a se&ccedil;&atilde;o com incentivo e seguran&ccedil;a na lacura.me, voc&ecirc; receber&aacute; uma quantia fixa de seu dep&oacute;sito com uma porcentagem de retorno como presente di&aacute;rio. &Eacute; um sistema que lhe permite seguran&ccedil;a e estabilidade.</span></p>\r\n\r\n<p><span style="font-size:16px">Caso voc&ecirc; n&atilde;o consiga apresentar ningu&eacute;m, a sua se&ccedil;&atilde;o ser&aacute; devidamente feita.</span></p>\r\n\r\n<p><span style="font-size:16px">Este presente com retorno s&oacute; &eacute; considerado e permitido o saque das recompensas por indicar pelo menos um m&iacute;nimo de tr&ecirc;s pessoas.</span></p>\r\n\r\n<p><span style="font-size:16px">Atualmente hoje nesse momento agora, a fim de reduzir a disparidade econ&ocirc;mica em nossa sociedade, e para ajud&aacute;-lo a ter uma vida feliz, Eu Kushioyada Elisson Tadao da La Cura lhe oferece um presente que ser&aacute; a realiza&ccedil;&atilde;o e liberta&ccedil;&atilde;o.</span></p>\r\n\r\n<p><span style="font-size:16px">Ao participar desse presente com retorno, voc&ecirc; se libertar&aacute; de todas as suas preocupa&ccedil;&otilde;es.</span></p>\r\n\r\n<p><span style="font-size:16px">Isto &eacute; tudo ser&aacute; conseguido atrav&eacute;s das se&ccedil;&otilde;es da La Cura.</span></p>\r\n\r\n<p><span style="font-size:16px">Quando voc&ecirc; participar do presente</span></p>\r\n\r\n<p><span style="font-size:16px">Por exemplo, mesmo que voc&ecirc; tenha uma d&iacute;vida de 300.000 ienes, n&atilde;o h&aacute; problema.</span></p>\r\n\r\n<p><span style="font-size:16px">Porque voc&ecirc; pode e recebera 1,4% por dia durante 180 dias por participa&ccedil;&atilde;o desse maravilhoso presente, colocando tr&ecirc;s (3) referencias ativa para um (1) saque.</span></p>\r\n\r\n<p><span style="font-size:16px">Pense em suas despesas! Pense nos seus gastos!</span></p>\r\n\r\n<p><span style="font-size:16px">Primeiro de tudo e antes de tudo, o mundo funciona e depende da economia para tudo o que as pessoas fizeram ou fazem.</span></p>\r\n\r\n<p><span style="font-size:16px">Em outras palavras, &eacute; uma troca um interc&acirc;mbio de valor.</span></p>\r\n\r\n<p><span style="font-size:16px">Em outras palavras, como voc&ecirc; sabe voc&ecirc; n&atilde;o pode fazer nada sem dinheiro.</span></p>\r\n\r\n<p><span style="font-size:16px">Digamos ou suponha que voc&ecirc; est&aacute; comprando ou v&aacute; comprar um carro.</span></p>\r\n\r\n<p><span style="font-size:16px">Financiamento mensal, inspe&ccedil;&atilde;o anual do ve&iacute;culo, seguro anual, gasolina di&aacute;ria e manuten&ccedil;&atilde;o do carro.<br />\r\nQuanto vai custar por um ano? Quanto dinheiro voc&ecirc; est&aacute; pagando? Este dinheiro n&atilde;o retorna mais.</span></p>\r\n\r\n<p><span style="font-size:16px">Se voc&ecirc; est&aacute; educando uma crian&ccedil;a.<br />\r\nQuanto uma m&atilde;e solteira, ou m&atilde;e e filho, teriam que gastar?<br />\r\nAluguel de Casa, Gastos &aacute;gua luz g&aacute;s, telefone e internet, Seguros e Educa&ccedil;&atilde;o a Crian&ccedil;a. Quanto voc&ecirc; gasta com essas coisas?<br />\r\nEm outras palavras, a realidade &eacute; que se voc&ecirc; n&atilde;o fizer nada, voc&ecirc; s&oacute; estar&aacute; gastando vai gastar cada vez mais e n&atilde;o ter&aacute; economias e n&atilde;o ser&aacute; rico.</span></p>\r\n\r\n<p><span style="font-size:16px">Se voc&ecirc; participa do La Cura dessa doa&ccedil;&atilde;o, seus problemas de financeiras ser&atilde;o e podem ser resolvidos de uma vez por todas.</span></p>\r\n\r\n<p><span style="font-size:16px">Tenho certeza de que voc&ecirc;, sendo uma pessoa s&aacute;bia e em sua sabedoria, entender&aacute; o poder da minha palavra.</span></p>\r\n\r\n<p><span style="font-size:16px">Estou ansioso e espero encontr&aacute;-lo em uma das minhas se&ccedil;&otilde;es da La Cura.</span></p>\r\n\r\n<p><span style="font-size:16px">At&eacute; este momento, j&aacute; expliquei em termos, mas o que voc&ecirc; acha agora? Espero que e esteja aberto para minha proposta.</span></p>\r\n\r\n<p><span style="font-size:16px">Primeiro e antes de qualquer coisa, vamos purificar suas preocupa&ccedil;&otilde;es e fazer com que elas desapare&ccedil;am na se&ccedil;&atilde;o.</span></p>\r\n\r\n<p><span style="font-size:16px">Obrigada por esse momento! Obrigado por esse seu tempo!</span></p>', '仕事, 治療,奇跡,宗教,宇宙,ギフト', 1, '2020-08-08 11:58:10', '2020-08-11 12:10:29', 0),
	(2, '営業者募集中', 'Recrutamento & Emprego', '1596952285.jpg', '<p>営業者募集中&nbsp;勤務地 日本全国どこでもOK！<br />\r\n貴方の好きな時だけ時間を費やせます。在宅でどこでもいつでも、誰でもやる気さえあれば参加頂けます。<br />\r\n【　応募条件　】<br />\r\n年齢不問・経験不問<br />\r\n※ 主婦OK　<br />\r\n※ 定年された方も大丈夫です。<br />\r\n※ シルバーワークも歓迎です。<br />\r\n※ ビジネスとしても参加OK<br />\r\n※ アフィリエターさん歓迎<br />\r\n給料、完全歩合性<br />\r\nサービスの提案営業をしてもらいます。<br />\r\n話すのが好きな方明るい笑顔で対応できる方大歓迎接客がお好きな方、接客のご経験を活かせる仕事です。<br />\r\n参加ご希望の方、その他詳細はこちらから登録ください<br />\r\nお気軽にお問い合わせください<br />\r\nhttps://lacura.me/register/(貴方の紹介コード)<br />\r\n貴方は今まで知らなかったでしょうがここを見られて知った以上、是非、このチャンスを活かしてみませんか？</p>', '<p>Recrutamento de vendedores</p>\r\n\r\n<p>Local de trabalho: Qualquer pessoa pode participar a partir de casa, em qualquer lugar, a qualquer hora, desde que esteja motivada.Voc&ecirc; pode trabalhar no seu tempo sempre que voc&ecirc; quiser.</p>\r\n\r\n<p>【Requisitos e Condi&ccedil;&otilde;es】<br />\r\n※ N&atilde;o &eacute; necess&aacute;ria idade ou experi&ecirc;ncia.<br />\r\n※ Dona de casa OK<br />\r\n※ Aposentados, tudo bem tamb&eacute;m OK.<br />\r\n※ As pessoas idosas s&atilde;o bem-vindas OK.<br />\r\n※ Participa&ccedil;&atilde;o empresarial OK<br />\r\n※ Afiliados s&atilde;o bem-vindos! OK<br />\r\nSal&aacute;rio, comiss&atilde;o de vendas.<br />\r\nVoc&ecirc; ser&aacute; um representante de vendas propondo servi&ccedil;os.<br />\r\nVoc&ecirc; tem que gosta de falar, voc&ecirc; tem que ser alegre.<br />\r\nPessoas que podem responder com um sorriso s&atilde;o bem-vindas, e pessoas que amam o atendimento ao cliente.<br />\r\nEste &eacute; um trabalho onde voc&ecirc; pode usar treinar cada vez mais sua experi&ecirc;ncia de atendimento ao cliente.<br />\r\nSe voc&ecirc; gostaria de se juntar a n&oacute;s, para maiores informa&ccedil;&otilde;es, por favor, registre-se aqui.<br />\r\nhttps://lacura.me/register/(Seu link de refer&ecirc;ncia)<br />\r\nFique &agrave; vontade para entrar em contato conosco.<br />\r\nVoc&ecirc; provavelmente n&atilde;o sabia disso at&eacute; agora, mas agora que voc&ecirc; est&aacute; aqui, por que n&atilde;o aproveitar a oportunidade?</p>', '募集中, 仕事, Wワーク, ビジネス, 定年, アフィリエター, シルバーワーク, 主婦', 1, '2020-08-09 09:30:51', '2021-03-25 06:32:10', 3),
	(3, 'tia ja', 'tit pa', '1616617875.jpg', '<p>de ja</p>', '<p>de pa</p>', 'tag', 1, '2021-03-25 05:31:16', '2021-03-25 06:09:12', 2);
/*!40000 ALTER TABLE `mini_blogs` ENABLE KEYS */;

-- Dumping structure for table lacura.min_blog_categories
CREATE TABLE IF NOT EXISTS `min_blog_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_pt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cont` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lacura.min_blog_categories: ~2 rows (approximately)
/*!40000 ALTER TABLE `min_blog_categories` DISABLE KEYS */;
REPLACE INTO `min_blog_categories` (`id`, `title`, `title_pt`, `cont`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Standerd', 'Standerd', 0, 1, '2021-03-25 05:09:34', '2021-03-25 05:09:34'),
	(2, 'Standerd 2', 'standard 3', 0, 0, '2021-03-25 05:18:55', '2021-03-25 05:18:55'),
	(3, 'test 1  Japaneese', 'test 1 Portuguese', 0, 1, '2021-03-25 06:31:05', '2021-03-25 06:31:05');
/*!40000 ALTER TABLE `min_blog_categories` ENABLE KEYS */;

-- Dumping structure for table lacura.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.news: ~0 rows (approximately)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Dumping structure for table lacura.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idx` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'page identifier index',
  `ja` text COLLATE utf8mb4_unicode_ci,
  `pt` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `descriptions_pt` text COLLATE utf8mb4_unicode_ci,
  `title_pt` text COLLATE utf8mb4_unicode_ci,
  `keywords_pt` text COLLATE utf8mb4_unicode_ci,
  `header_text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `header_text_pt` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lacura.pages: ~7 rows (approximately)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
REPLACE INTO `pages` (`id`, `idx`, `ja`, `pt`, `title`, `keywords`, `description`, `descriptions_pt`, `title_pt`, `keywords_pt`, `header_text`, `created_at`, `updated_at`, `header_text_pt`) VALUES
	(1, 'alcoholics', '<h3>すべての中毒と依存を引き起こす原因は、共通し中毒、依存症になりやすい人は常に何かに頼っている人が多い傾向にあります。</h3>\r\n<p>環境: 人は幼年期の経験や教育されるなかで、中毒や依存原因となる物などが環境的に影響を受けやすい。</p>\r\n<p>強要: 社会生活の中での意に反したことを強いられ、いつのまにか中毒と依存が始まり、数多く痛みを和らげるため、感情を落ち着かせるため強要を受け入れてしまう。</p>\r\n<p>感情的苦痛: 不安、抑うつ、欲求不満などの精神状態から逃れるため中毒または依存に頼ってしまう。</p>\r\n<div class="col-xl-12 col-lg-12" style="padding-top: 30px;"></div>\r\n<div class="col-lg-4 col-xl-5" style="padding-top: 30px;"><img alt="" src="https://lacura.me/assets/images/os-problemas-dos-vicios-diagnostico-e-tratamentos1-300x200.jpg" /></div>\r\n<div class="col-lg-4 col-xl-5" style="padding-top: 30px;">\r\n	<h2><strong>中毒・依存</strong></h2>\r\n	<ul>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">憎しみ</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">嫉妬</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">羨望の的</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">恐怖</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">洋服</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">ゲーム</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">アルコール</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">薬物</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">タバコ</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">カフェイン</li>\r\n	</ul>\r\n</div>', '<h3>Pessoas com facilidade ao v&iacute;cio s&atilde;o as que sempre tender a depender</h3>\r\n<p>Ambiente: Nas experi&ecirc;ncia na inf&acirc;ncia, No envolvimento entre pessoas, Na educa&ccedil;&atilde;o infantil, fica mais propenso ao v&iacute;cio e ou depend&ecirc;ncia devida ao ambiente do dia a dia.</p>\r\n<p>Indu&ccedil;&atilde;o: For&ccedil;ando a vontade pr&oacute;pria para acompanhar a vida social, e ent&atilde;o o v&iacute;cio e depend&ecirc;ncia come&ccedil;a imperceptivelmente acontecer contra a vontade pr&oacute;pria e para aliviar acabam aceitando a repress&atilde;o para acalmar as emo&ccedil;&otilde;es.</p>\r\n<p>Estresse emocional: Ref&uacute;gio de condi&ccedil;&otilde;es psiqui&aacute;tricas, tais como ansiedade, depress&atilde;o, frustra&ccedil;&atilde;o e por algum constrangimento optou por v&iacute;cio ou depend&ecirc;ncia qu&iacute;mica.</p>\r\n<div class="col-xl-12 col-lg-12" style="padding-top: 30px;"></div>\r\n<div class="col-lg-4 col-xl-5" style="padding-top: 30px;"><img alt="" src="https://lacura.me/assets/images/os-problemas-dos-vicios-diagnostico-e-tratamentos1-300x200.jpg" /></div>\r\n<div class="col-lg-4 col-xl-5" style="padding-top: 30px;">\r\n	<h2>V&iacute;cios e Depend&ecirc;ncia Qu&iacute;mica</h2>\r\n	<ul>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">&Oacute;dio</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">Ci&uacute;mes</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">Inveja</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">Medo</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">Fobia</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">Jogos</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">&Aacute;lcool</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">Drogas</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">Tabaco</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">Cafe&iacute;na</li>\r\n	</ul>\r\n</div>', 'アルコール依存症と中毒', '憎しみ, 嫉妬, 羨望, 恐怖, 恐怖症, ゲーム, アルコール, 薬物, タバコ, カフェイン', '依存症になりやすい人がいますが、それは常に物質に依存する傾向が強いです。', 'Algumas pessoas são propensas ao vício, mas é sempre mais provável que sejam dependentes de substâncias.', 'alcoolismo e vícios', 'Ódio, ciúme, inveja, medo, fobia, jogos, álcool, drogas, cigarros, cafeína', '中毒と中毒の原因', '2019-09-26 01:12:08', '2020-01-23 14:59:41', 'Causes Of Addiction And Addiction'),
	(2, 'mental', '<p><img alt="" src="https://lacura.me/assets/storage/about/traumas-mentais.jpg" style="float:left; height:245px; margin-left:20px; margin-right:20px; width:400px" />心理的外傷は、何か自分自身にとって大きな出来事が起こり心や感情がダメージを負います。</p>\r\n\r\n<p>心、精神、肉体が痛みを経験したこと。 痛みを伴う経験により</p>\r\n\r\n<p>トラウマや恐怖によって引き起こす増悪、ストレスや、脳の変化によって行動や人の思考に影響を与え、トラウマとなった出来事、体験を避けるために別の方向へ目を背けること、無意識で行ってしまうのです。</p>\r\n\r\n<p>トラウマになってしまった体験がうつ病、また強迫的な行動がその他の恐怖症やパニック障害に繋がっています。</p>', '<p><img alt="" src="https://lacura.me/assets/storage/about/traumas-mentais.jpg" style="float:left; height:245px; margin-left:20px; margin-right:20px; width:400px" /></p>\r\n\r\n<p>Trauma psicol&oacute;gico acontece quando a mente e as emo&ccedil;&otilde;es ocorrem grandes eventos para si pr&oacute;prio podendo ocasionar danos irrevers&iacute;veis mental e emocional passando ao corpo f&iacute;sico por experi&ecirc;ncia dolorosa desencadeando diversos traumas.</p>\r\n\r\n<p>O stress influ&ecirc;ncia o comportamento e pensamento nas pessoas a ter mudan&ccedil;as no c&eacute;rebro ocasionando incidentes que se torna um trauma.</p>\r\n\r\n<p>Esses incidentes que gerou o trauma a fim de evitar a experi&ecirc;ncia o inconsciente fica campos dilatados deixando-a desvairadas.</p>\r\n\r\n<p>Esses incidentes envolvem a manifesta&ccedil;&atilde;o de sentimentos e comportamento compulsivo e causa a depress&atilde;o, p&acirc;nico e outras fobias e at&eacute; mesmo crimes.</p>', ' 精神的なトラウマ', '心理的なトラウマ、心、感情、不可逆的、精神的、感情的な損傷、身体、ストレス、うつ病、パニック', '心理的なトラウマは、心や感情の中で起こり、不可逆的な損傷を引き起こす可能性があります。', 'O trauma psicológico ocorre na mente e nas emoções e pode causar danos irreversíveis.', 'Trauma mental', 'Trauma psicológico, mente, emoção, irreversível, dano mental, emocional, corpo, estresse, depressão, pânico', NULL, '2019-09-26 01:54:58', '2020-01-31 02:03:51', NULL),
	(3, 'spiritual', '<h2><strong>身体</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>否定的な考えが引き金となり病気を引き起こします。それを取り除くため、プラス思考なるように考えを改める必要があります。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>心と思考</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>否定的な思考と否定的な心のクリーニング。 今までの負の心、マイナス的な要素を切削しプラス思考に置き換えます。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>精神</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>魂と心が否定的な思想によって引き起こされた出来事を後悔しています。自分自身や回りの心を傷つけた罪を魂から許しを求めます。人とコミュニケーションを取ることで自然にエネルギーを交わし合うもの他人の心を傷つければ、自分が傷つき、相手を癒すことは自分が癒されることなのです。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>心と感情</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>魂と心が否定的な思想によって引き起こされた出来事を後悔しています。自分自身や回りの心を傷つけた罪を魂から許しを求めます。人とコミュニケーションを取ることで自然にエネルギーを交わし合うもの他人の心を傷つければ、自分が傷つき、相手を癒すことは自分が癒されることなのです。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>争い</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>すべての争いは、ネガティブな考えが生まれます。ネガティブ的な要素を置き換え浄化させていきます。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>魂</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>魂のレベルから許す必要があり、間違いは時の流れと共に癒され消えて行きます。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>過去の生活の争い</strong></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>人生を通し体験や経験、良いことも悪いものも、すべて次の代へ引き継ぎ、また更にその子供たちへ知識、経験、出来事すべての行いを受け渡してしまうのです。ネガティブ的な部分を引き継いだのなら浄化する必要があります。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>パラレルエネルギー</strong></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>それぞれが別の次元で生きているので同じ人間でも魂は、会うこともなく理解もできません。魂が別の次元の魂を認めない事を伝えようとするとエネルギーが振動します。魂のエネルギーを浄化する必要があります。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>物事</strong></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>争いは、悪意によって引き起こされる。悪いエネルギーの振動を変更する必要があります。それを排除して、信仰心が復元されます。</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="https://lacura.me/img/spiritual-prayer-hands-sun-shine.jpg" style="float:left; height:333px; width:500px" /></p>', '<h2><strong>Corpo</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>Os pensamentos negativos s&atilde;o os gatilhos das doen&ccedil;as. A fim de se livrar dos pensamentos negativos h&aacute; necessidade de rever os pensamentos e mudar para ideias positivas.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Mente e Pensamentos</strong></h2>\r\n\r\n<p>Limpeza da mente e dos pensamentos subliminares negativos, &eacute; preciso substitu&iacute;-los com pensamentos positivos.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Espiritualmente</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>Arrependimento da alma e mente que s&atilde;o causados pelos pensamentos negativos. Pedindo perd&atilde;o do esp&iacute;rito dos pecados que causou a si pr&oacute;prio e aos demais sentimentos.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Mente e Emo&ccedil;&atilde;o</strong></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>Sofrendo com as criatividades e comportamento dos outros as diferen&ccedil;as devido &agrave; diferen&ccedil;a da imagina&ccedil;&atilde;o. H&aacute; necessidade de substituir os maus sentimentos por bons, e fazer as correntes se conectar novamente.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Disputa</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>Todas as guerras s&atilde;o generalizadas por pensamentos negativos, precisa ent&atilde;o purificar e substituir os elementos negativos.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Alma</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>H&aacute; necessidade de perdoar a partir da alma, e ap&oacute;s o decorrer do tempo a corre&ccedil;&atilde;o &eacute; feita e desaparece pouco a pouco.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Conflito de vidas passadas</strong></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>Experi&ecirc;ncias e atrav&eacute;s de experi&ecirc;ncia ao longo da vida. O que pode ser bom pode tamb&eacute;m ser ruim. Todos assumimos o controle para pr&oacute;xima gera&ccedil;&atilde;o e passamos de filhos a filhos o conhecimento e sabedoria das experi&ecirc;ncias e assim ent&atilde;o por um devido incidente receber&aacute; todos os eventos de vida passada o que pode ser parcialmente negativa h&aacute; necessidade purificar e fechar esses portais abertos.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Energia Paralela</strong></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>A mesma pessoa vivendo a vida em dimens&otilde;es diferentes, e sem poder se ver e sem poder se falar e sem poder ouvir nem mesmo se encontrar e nem mesmo entender. O esp&iacute;rito da outra dimens&atilde;o tenta transmitir ao outro esp&iacute;rito que n&atilde;o &eacute; permitido e ent&atilde;o ocorre vibra&ccedil;&otilde;es de energia causando danos a prote&ccedil;&atilde;o espiritual o que &eacute; necess&aacute;rio purificar a alma.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Conflitos</strong></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>Conflito &eacute; causada por um mal-intencionados h&aacute; necessidade de eliminar as vibra&ccedil;&otilde;es de energias ruins e mudar para boas restaurando a f&eacute; interior.</p>\r\n\r\n<p><img alt="" src="https://lacura.me/img/spiritual-prayer-hands-sun-shine.jpg" style="float:left; height:333px; width:500px" /></p>', 'Spiritual Purification', '霊的な浄化、身体、心と思考、精神、紛争、魂、紛争、過去の生活、パラレルワールドの連動糸、エクトプラズム', '精神的な浄化、身体、心と思考、精神、紛争、魂、過去の人生の紛争とパラレルエネルギーの連動糸 “エクトプラズム”', 'Purificação mental, corpo, mente e pensamento, espírito, conflito, alma, conflito de vidas passadas e energia paralela entrelaçando fio "ectoplasma"', '精神的な浄化', 'Purificação espiritual, corpo, mente e pensamento, espírito, conflito, alma, conflito, vida passada, mundo paralelo, fio interligado, ectoplasma', 'Spiritual Purification', '2019-09-26 02:09:56', '2021-03-09 06:51:00', '精神的な浄化'),
	(4, 'influence', '<p><span style="font-size:22px">労働者が被った需要の高いレベルの仕事で病気を発症する理由は、食生活が貧しい、作業時間の過度の負担など労働者たちは無理をして働き続けたため病気を引き起こしやすい状態になりました。</span></p>\r\n\r\n<div class="col-lg-4 col-xl-6" style="padding-top:30px">\r\n<ul>\r\n	<li>不眠症</li>\r\n	<li>生理痛</li>\r\n	<li>不安</li>\r\n	<li>糖尿病</li>\r\n	<li>胃炎</li>\r\n	<li>うつ病</li>\r\n	<li>頭痛</li>\r\n	<li>肩こり</li>\r\n	<li>むち打ち</li>\r\n	<li>腱鞘炎</li>\r\n	<li>肥満</li>\r\n</ul>\r\n</div>\r\n\r\n<div class="col-lg-4 col-xl-6" style="padding-top:30px"><img alt="601137_139162" src="https://lacura.me/assets/images/601137_139162.jpg" style="height:291px; width:437px" /></div>', '<p><span style="font-size:18px">A raz&atilde;o para desenvolver a doen&ccedil;a est&aacute; na demanda de carga hor&aacute;rios exageradas de trabalho que muitos trabalhadores sofrem, com os maus h&aacute;bitos alimentares e desgaste f&iacute;sico.</span></p>\r\n\r\n<div class="col-lg-4 col-xl-6" style="padding-top:30px">\r\n<ul>\r\n	<li>Ins&ocirc;nia</li>\r\n	<li>Dores menstruais</li>\r\n	<li>Ansiedade</li>\r\n	<li>Diabetes</li>\r\n	<li>Gastrite</li>\r\n	<li>Depress&atilde;o</li>\r\n	<li>Dor de cabe&ccedil;a</li>\r\n	<li>Torcicolo</li>\r\n	<li>Golpe do chicote</li>\r\n	<li>Inflama&ccedil;&atilde;o</li>\r\n	<li>Obesidade</li>\r\n</ul>\r\n</div>\r\n\r\n<div class="col-lg-4 col-xl-6" style="padding-top:30px"><img alt="601137_139162" src="https://lacura.me/assets/images/601137_139162.jpg" style="float:right; height:291px; width:437px" /></div>', '仕事の影響 ケガ・病気', '不眠症、 月経痛、 不安、 糖尿病、 胃炎、 うつ病、 頭痛、 トーティコリス、 むち打ち、炎症、肥満', '病気を発症原因は、長時間労働で多くの労働者が苦しみ、食習慣が悪く、健康被害が生じるあそれがあります。', 'A causa do aparecimento da doença é que muitos trabalhadores sofrem com longas horas de trabalho, têm hábitos alimentares inadequados e causam problemas de saúde.', 'A influência do trabalho', 'Insônia, dismenorréia, ansiedade, diabetes, gastrite, depressão, dor de cabeça, toticolis, whiplash, inflamação, obesidade', '仕事の影響 ケガ・病気', '2019-09-26 02:16:42', '2021-03-09 06:51:51', 'Traça / doença do trabalho'),
	(5, 'purification', '<h2><strong>暴食</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>過食症は精神的な病常に自己満足の多くを得る必要があります。この病気は心中に潜んでいます。自分の自由が奪われ食欲の奴隷です。食欲は常に限界を超えた状態でも食べ続けることになります。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>憤怒</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>複雑な病気で、恨み、怒りが少しずつゆっくり膨れて行き、この状態が続くことで回りの環境に大きく影響します。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>強欲</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>この病気は、自分自身が物欲の奴隷になってしまい、神様や回りの人たちも忘れ何も見えない状態になってしまうのです。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>色欲</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>この病気は、肉体の欲望の赴くままに常に性欲を求めている状態。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>嫉妬</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>人の物が欲しくなり、他人の物、人生にばかり関心を持ちすぎ執着して自分自身の現実を忘れてしまう病気です。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>怠惰</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>全てのことにおいて、やる気が出ない、関心がもてない、行動しない、心が貧欲な病気です。</p>\r\n\r\n<div class="col-lg-12 col-xl-12" style="padding-top:30px">&nbsp;</div>\r\n\r\n<p style="text-align:center"><img alt="" src="https://lacura.me/img/praying-sunny-nature.jpg" style="height:333px; margin:10px; width:500px" /></p>', '<h2><strong>Gula</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>Glutonaria &eacute; envolvida a uma doen&ccedil;a mental sempre est&aacute; querendo comida nunca est&aacute; satisfeita, essa doen&ccedil;a espreita o duplo suic&iacute;dio. Voc&ecirc; perde sua liberdade e se torna escravo do apetite.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>F&uacute;ria</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>Essa doen&ccedil;a &eacute; complexa, envolve vingan&ccedil;as, raiva e o estado da ira, &eacute; constante, &eacute; contagiosa devido &agrave; fendas da aura espiritual.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Cobi&ccedil;a</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>Essa doen&ccedil;a transforma escravo da pr&oacute;pria gan&acirc;ncia, n&atilde;o enxerga as pessoas ao redor e esquece de Deus.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Lux&uacute;ria</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>Essa doen&ccedil;a est&aacute; sempre em desejo da carne em busca insaci&aacute;vel de sexo.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Ci&uacute;mes</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>Querer as coisas dos outros, e outras coisas de outras pessoas. Muito obcecado e interesseiro pelas coisas da vida</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Pregui&ccedil;a</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>Em qualquer coisa que v&aacute; fazer estar&aacute; sem vontade, desanimado, sem interesses e sem a&ccedil;&otilde;es de agir.</p>\r\n\r\n<div class="col-lg-12 col-xl-12" style="padding-top:30px">&nbsp;</div>\r\n\r\n<p style="text-align:center"><img alt="" src="https://lacura.me/img/praying-sunny-nature.jpg" style="height:333px; margin:10px; width:500px" /></p>', 'Purification Soul', 'Purification Soul', 'Purification Soul', '浄化の魂', '浄化の魂', '浄化の魂', 'Purification Soul', '2019-09-26 02:58:09', '2021-03-09 06:53:11', '浄化の魂'),
	(6, 'about', '<h2><img src="https://lacura.me/assets/storage/about/5d6704fa295591567032570.jpg" style="float:left; padding-right:10px; width:120px" />後親田 エリソン タダオは1979年7月30日にブラジル パラナ州 グァイーラ 生まれ。沖縄人とイスラエル人の子孫で、幼い頃に農場で過ごし、自然と触れ合い、両親の畑仕事の手伝いもしていました。<br />\r\n14歳で、社会的理由でブラジルを離れ、1994年に日本に住む事になりました、2005年は認識を高め、精神的な進化が起こり始め、日常的に不思議な力が強くなって、天からの宿命を持つ事がわかった。</h2>\r\n\r\n<div class="col-lg-4 col-xl-6" style="padding-top:30px; text-align:center">\r\n<div style="margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px"><img src="https://lacura.me/assets/storage/about/img-2.jpg" style="height:667px; width:500px" /></div>\r\n</div>\r\n\r\n<div class="col-lg-4 col-xl-6" style="padding-top:30px; text-align:center">\r\n<div style="margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px"><img src="https://lacura.me/assets/storage/about/5d67073c0dcd21567033148.jpg" style="height:667px; width:500px" /></div>\r\n</div>\r\n\r\n<h2><br />\r\nいつも自然と触れ合い、山で宇宙の光と集合したり、彼は人生の一貫性の光について多くの経験をしました。</h2>\r\n\r\n<h2>スピリチュアルコーディング「暗号化されている言葉、存在しない言語」を通じて神の光と意思の伝達する事が出来て、重要な自然役割の四つの神 火神様、風神様、地神様、水神様らは、会うことができました。</h2>\r\n\r\n<h2>超能力者を認識して、魂の奇跡を通して、人々の生活と健康状態の改善活動をやり始めました。</h2>', '<h2 style="text-align:center"><img src="https://lacura.me/assets/storage/about/5d6704fa295591567032570.jpg" style="float:left; padding-right:10px; width:120px" />Elisson Tadao Kushioyada nasceu em 30 de Julho de 1979 na cidade de Gua&iacute;ra, estado do Paran&aacute;. Descendente de okinawa e israelense, passou a sua inf&acirc;ncia no s&iacute;tio em contato com a natureza e ajudando os pais no trabalho rural.<br />\r\nAos 14 anos deixou o Brasil por motivos sociais e mudou-se para o Jap&atilde;o em 1994, no ano de 2005&nbsp;aumentam as suas percep&ccedil;&otilde;es e a transforma&ccedil;&atilde;o mental come&ccedil;ou a acontecer no seu dia a dia ficando cada vez mais forte, descobrindo ent&atilde;o o Dom espiritual.</h2>\r\n\r\n<div class="col-lg-4 col-xl-6" style="padding-top:30px; text-align:center">\r\n<div style="margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px"><img src="https://lacura.me/assets/storage/about/img-2.jpg" style="height:667px; width:500px" /></div>\r\n</div>\r\n\r\n<div class="col-lg-4 col-xl-6" style="padding-top:30px; text-align:center">\r\n<div style="margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px"><img src="https://lacura.me/assets/storage/about/5d67073c0dcd21567033148.jpg" style="height:667px; width:500px" /></div>\r\n</div>\r\n\r\n<h2 style="text-align:center"><br />\r\nSempre em contato com a natureza, costumava ir &agrave;s montanhas para se reunir com as luzes celestes. Nesses encontros ele obteve muitas experi&ecirc;ncias com a Luz da consist&ecirc;ncia da vida, onde se comunicava com as luzes divinas atrav&eacute;s de codifica&ccedil;&atilde;o espiritual &ldquo;idioma inexistente&rdquo;. E conseguiu se encontrar com os 4 Deuses mais importantes da natureza, Deus do fogo, Deus do vento, Deus da terra e o Deus da &aacute;gua.</h2>\r\n\r\n<h2 style="text-align:center">Reconhecendo seu poder paranormal come&ccedil;ou a exercer, ajudando a melhorar as condi&ccedil;&otilde;es de vida e sa&uacute;de das pessoas, feita atrav&eacute;s do milagre da Alma.</h2>', 'cerca de', '後親田　エリソン　忠男　、超常的な力、改善、生活環境、魂の奇跡', '後親田　エリソン　忠男　についてご紹介します。魂の奇跡を通して人々の生活環境と健康を改善するのに役立つ彼の超常的な力が持っています。', 'Apresentando Gochida Ellison Tadao. Ele tem poderes paranormais que ajudam a melhorar o ambiente de vida e a saúde das pessoas por meio de milagres da alma.', '約', 'Gochida Ellison Tadao, poder paranormal, melhoria, ambiente de vida, milagre da alma', 'cerca de', '2019-09-26 03:01:07', '2021-03-09 06:54:41', '約');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- Dumping structure for table lacura.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.password_resets: ~7 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
REPLACE INTO `password_resets` (`email`, `token`, `status`, `created_at`) VALUES
	('monicammy@gmail.com', 'iy0AUnhjQUOEC0AkD2fNimehzFtJSw', 1, '2020-04-27 20:51:47'),
	('monicammy@gmail.com', 'dgzO39F4BQE4mnT4LE098fIAhfLGU8', 1, '2020-04-27 21:29:34'),
	('lacura.me@gmail.com', 'tRBeji4Ui6eVh8HwsS45qeYpKLATyA', 1, '2020-05-23 20:58:58'),
	('williansgiorno@gmail.com', 'vvgl8jmMG50J3M2R5s31FGGqi8T7OD', 0, '2020-06-18 13:27:29'),
	('williansgiorno@gmail.com', '88oFUpqiHxceDMQFBVbB7njXb4nESI', 0, '2020-06-18 13:28:38'),
	('e7415206644@yahoo.co.jp', '3VbaIMb93hfahGjJ1Wbx576BuoDZV8', 1, '2020-07-06 11:57:13'),
	('adilsonalpino@gmail.com', 'hdNdr837mKNK2X4ehgFs16QXT4lyHb', 1, '2020-10-06 08:08:49');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table lacura.plans
CREATE TABLE IF NOT EXISTS `plans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maximum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fixed_amount` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest_status` int(11) NOT NULL COMMENT '1 = ''%'' / 0 =''currency''',
  `times` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `capital_back_status` int(11) NOT NULL,
  `lifetime_status` int(11) NOT NULL,
  `repeat_time` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `extra` text COLLATE utf8mb4_unicode_ci,
  `show` tinyint(4) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.plans: ~3 rows (approximately)
/*!40000 ALTER TABLE `plans` DISABLE KEYS */;
REPLACE INTO `plans` (`id`, `name`, `minimum`, `maximum`, `fixed_amount`, `interest`, `interest_status`, `times`, `status`, `capital_back_status`, `lifetime_status`, `repeat_time`, `created_at`, `updated_at`, `extra`, `show`, `image`) VALUES
	(6, 'Charity', '99000', '99000', '99000', '0.5', 1, '24', 1, 0, 0, '365', '2018-12-06 01:58:48', '2021-03-14 23:34:07', '[{"key":"1 Se\\u00e7\\u00e3o","value":"0"},{"key":"1 Hora","value":"0"},{"key":"60 Minutos","value":"0"},{"key":"S\\u00edmbolo Espiritual","value":"0"},{"key":"Tratamento Espiritual","value":"0"}]', 0, '5e31013e2388a1580269886.jpg'),
	(7, 'Present', '299000', '299000', '299000', '1.4', 1, '24', 1, 0, 0, '180', '2018-12-06 01:59:22', '2020-10-06 17:00:54', '[{"key":"1 \\u30bb\\u30c3\\u30b7\\u30e7\\u30f3","value":"0"},{"key":"2 \\u6642\\u9593","value":"0"},{"key":"120\\u5206","value":"0"},{"key":"S\\u00edmbolo Espiritual","value":"0"},{"key":"Tratamento Espiritual","value":"0"}]', 0, '5e31014dac1521580269901.jpg'),
	(8, 'GIFT', '299000', '299000', '299000', '1.7', 1, '24', 1, 0, 0, '180', '2018-12-09 04:27:33', '2021-03-15 03:55:52', '[{"key":"5 Se\\u00e7\\u00f5es","value":"0"},{"key":"3 Horas","value":"0"},{"key":"180 Minutos","value":"0"},{"key":"S\\u00edmbolo Espiritual","value":"0"},{"key":"Tratamento Espiritual","value":"0"}]', 0, '5d66efa03abca1567027104.jpg');
/*!40000 ALTER TABLE `plans` ENABLE KEYS */;

-- Dumping structure for table lacura.referrals
CREATE TABLE IF NOT EXISTS `referrals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `level` int(11) NOT NULL,
  `percent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.referrals: ~6 rows (approximately)
/*!40000 ALTER TABLE `referrals` DISABLE KEYS */;
REPLACE INTO `referrals` (`id`, `level`, `percent`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, '10', 1, '2019-01-22 21:59:09', '2019-01-22 21:59:09'),
	(2, 2, '8', 1, '2019-01-22 21:59:09', '2019-01-22 21:59:09'),
	(3, 3, '6', 1, '2019-01-22 21:59:09', '2019-01-22 21:59:09'),
	(4, 4, '5', 1, '2019-01-22 21:59:09', '2019-01-22 21:59:09'),
	(5, 5, '1', 1, '2019-01-22 21:59:09', '2019-01-22 21:59:09'),
	(6, 6, '1', 1, '2019-01-22 21:59:09', '2019-01-22 21:59:09');
/*!40000 ALTER TABLE `referrals` ENABLE KEYS */;

-- Dumping structure for table lacura.referral_commissions
CREATE TABLE IF NOT EXISTS `referral_commissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `ref_id` int(10) unsigned NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 : on process, 0 : added to balance',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.referral_commissions: ~7 rows (approximately)
/*!40000 ALTER TABLE `referral_commissions` DISABLE KEYS */;
REPLACE INTO `referral_commissions` (`id`, `user_id`, `ref_id`, `amount`, `created_at`, `updated_at`, `status`) VALUES
	(2, 9, 11, '29900', '2020-06-29 14:38:28', '2020-06-29 14:38:28', 1),
	(3, 4, 9, '23920', '2020-06-29 14:38:29', '2020-06-29 14:38:29', 1),
	(8, 4, 9, '29900', '2020-06-30 08:39:37', '2020-06-30 08:39:37', 1),
	(9, 9, 17, '29900', '2020-07-01 00:41:14', '2020-07-01 00:41:14', 1),
	(10, 4, 9, '23920', '2020-07-01 00:41:15', '2020-07-01 00:41:15', 1),
	(11, 9, 16, '29900', '2020-07-01 16:11:26', '2020-07-01 16:11:26', 1),
	(12, 4, 9, '23920', '2020-07-01 16:11:27', '2020-07-01 16:11:27', 1);
/*!40000 ALTER TABLE `referral_commissions` ENABLE KEYS */;

-- Dumping structure for table lacura.schedules
CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `scheduler_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scheduler_id` bigint(20) unsigned NOT NULL,
  `date` date NOT NULL,
  `time` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remark` text COLLATE utf8mb4_unicode_ci,
  `charge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `notified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `invest_id` int(11) NOT NULL DEFAULT '0',
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_token` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `schedules_scheduler_type_scheduler_id_index` (`scheduler_type`,`scheduler_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.schedules: ~15 rows (approximately)
/*!40000 ALTER TABLE `schedules` DISABLE KEYS */;
REPLACE INTO `schedules` (`id`, `scheduler_type`, `scheduler_id`, `date`, `time`, `created_at`, `updated_at`, `status`, `remark`, `charge`, `notified_at`, `invest_id`, `location`, `admin_token`) VALUES
	(2, 'App\\User', 1, '2020-06-30', 10, '2020-06-29 14:38:29', '2021-03-12 23:17:13', 1, 'cancelando.', '0', '2020-07-01 02:45:06', 2, '群馬県太田市', '2e8b59d14b1b70a4437cf4365fef4188'),
	(7, 'App\\User', 1, '2020-07-01', 9, '2020-06-30 08:39:37', '2021-01-11 02:51:17', 0, 'Teste.', '0', '2020-07-02 01:20:05', 7, '群馬県太田市', 'ed34efd5c489806d668b41548899da10'),
	(8, 'App\\User', 1, '2020-07-01', 10, '2020-07-01 00:41:15', '2021-01-11 03:15:19', 0, 'lçkkljklj', '0', '2020-07-02 01:25:04', 8, '群馬県太田市', 'e1f22b4f22ce3155bff2bd96d0c52805'),
	(9, 'App\\User', 16, '2020-07-02', 9, '2020-07-01 16:11:27', '2021-01-11 02:21:43', 0, 'Testando o cancelamento.', '0', '2020-07-03 01:50:08', 9, '群馬県太田市', '869ae3ded5646431013e369769d2de79'),
	(10, 'App\\User', 4, '2020-12-18', 14, '2020-11-24 20:08:50', '2020-11-25 11:31:13', 0, 'N', '0', '2020-11-25 11:20:05', 10, '大阪府大阪市', '7890c68d5f0d110edceb7ac21abe36cf'),
	(11, 'App\\Admin', 1, '2021-01-05', 15, '2021-01-05 10:36:44', '2021-01-11 02:19:06', 0, 'Testando o cancelamento.', '0', '2021-01-04 22:36:44', 0, NULL, NULL),
	(12, 'App\\Admin', 1, '2021-01-06', 10, '2021-01-05 10:37:39', '2021-01-05 10:42:05', 0, 'Pq sim', '0', '2021-01-04 22:37:39', 0, NULL, NULL),
	(13, 'App\\Admin', 1, '2021-01-13', 10, '2021-01-11 02:58:56', '2021-01-11 02:59:18', 0, 'Testando novo e-mail.', '0', '2021-01-10 14:58:56', 0, NULL, NULL),
	(14, 'App\\Admin', 1, '2021-01-14', 9, '2021-01-11 03:04:59', '2021-01-11 03:05:10', 0, 'lijlkjlkj', '0', '2021-01-10 15:04:59', 0, NULL, NULL),
	(15, 'App\\Admin', 1, '2021-01-15', 9, '2021-01-11 03:13:50', '2021-01-11 03:14:00', 0, 'fasdfasd', '0', '2021-01-10 15:13:50', 0, NULL, NULL),
	(16, 'App\\Admin', 1, '2021-01-20', 10, '2021-01-11 03:20:57', '2021-03-12 01:18:03', 0, 'teste de cancel a mento', '0', '2021-01-10 15:20:57', 0, NULL, NULL),
	(17, 'App\\Admin', 1, '2021-03-12', 10, '2021-03-12 01:34:35', '2021-03-12 01:34:35', 1, 'session update', '0', '2021-03-11 21:34:35', 0, NULL, NULL),
	(18, 'App\\User', 1, '2021-03-20', 8, '2021-03-12 22:13:55', '2021-03-12 22:30:35', 0, 'no ava', '0', '2021-03-12 18:13:55', 22, '8', 'e36130ccc5e17cda2e749a11ddb3f708'),
	(19, 'App\\User', 1, '2021-03-21', 8, '2021-03-12 22:17:57', '2021-03-15 05:14:10', 0, 'cancel', '0', '2021-03-12 18:17:57', 23, '4', '42c4b9c44adfdd665acc0444fb0d57da'),
	(20, 'App\\User', 1, '2021-03-31', 18, '2021-03-12 23:03:49', '2021-03-12 23:04:44', 0, 'cacaca', '0', '2021-03-12 19:03:49', 24, '1', '7395816555eb2dc94bf61d4805c240ca'),
	(21, 'App\\User', 1, '2021-03-25', 16, '2021-03-16 03:49:43', '2021-03-16 03:49:43', 1, NULL, '0', '2021-03-15 23:49:43', 29, '2', '8c0136c9a81753da65e5d912ec7e1f8e');
/*!40000 ALTER TABLE `schedules` ENABLE KEYS */;

-- Dumping structure for table lacura.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.services: ~0 rows (approximately)
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping structure for table lacura.sliders
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ja',
  `temp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch_no` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=311 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.sliders: ~151 rows (approximately)
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
REPLACE INTO `sliders` (`id`, `image_name`, `title`, `created_at`, `updated_at`, `lang`, `temp`, `batch_no`) VALUES
	(142, '5f2a129d07b2b1596592797.jpg', NULL, '2020-08-05 13:59:57', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(143, '5f2a129d3500b1596592797.jpg', NULL, '2020-08-05 13:59:57', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(144, '5f2a129f464401596592799.jpg', NULL, '2020-08-05 13:59:59', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(145, '5f2a129f71f4e1596592799.jpg', NULL, '2020-08-05 13:59:59', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(146, '5f2a12a1890f11596592801.jpg', NULL, '2020-08-05 14:00:01', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(147, '5f2a12a1bb8c91596592801.jpg', NULL, '2020-08-05 14:00:01', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(148, '5f2a12a412e471596592804.jpg', NULL, '2020-08-05 14:00:04', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(149, '5f2a12a480b341596592804.jpg', NULL, '2020-08-05 14:00:04', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(150, '5f2a12a8b14bf1596592808.jpg', NULL, '2020-08-05 14:00:09', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(151, '5f2a12a8e2f4b1596592808.jpg', NULL, '2020-08-05 14:00:09', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(152, '5f2a12ad6e6111596592813.jpg', NULL, '2020-08-05 14:00:13', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(153, '5f2a12ad9809a1596592813.jpg', NULL, '2020-08-05 14:00:13', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(154, '5f2a12b0d9a731596592816.jpg', NULL, '2020-08-05 14:00:17', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(155, '5f2a12b2ce9241596592818.jpg', NULL, '2020-08-05 14:00:19', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(156, '5f2a12b4ed9891596592820.jpg', NULL, '2020-08-05 14:00:21', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(157, '5f2a12b6a38bb1596592822.jpg', NULL, '2020-08-05 14:00:22', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(158, '5f2a12b88f71d1596592824.jpg', NULL, '2020-08-05 14:00:25', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(159, '5f2a12b98566f1596592825.jpg', NULL, '2020-08-05 14:00:26', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(160, '5f2a12bce8ed41596592828.jpg', NULL, '2020-08-05 14:00:29', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(161, '5f2a12be999cc1596592830.jpg', NULL, '2020-08-05 14:00:30', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(162, '5f2a12c06fcf31596592832.jpg', NULL, '2020-08-05 14:00:32', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(163, '5f2a12c150e731596592833.jpg', NULL, '2020-08-05 14:00:33', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(164, '5f2a12c34feec1596592835.jpg', NULL, '2020-08-05 14:00:35', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(165, '5f2a12c3acd7b1596592835.jpg', NULL, '2020-08-05 14:00:35', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(166, '5f2a12c7c097c1596592839.jpg', NULL, '2020-08-05 14:00:39', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(167, '5f2a12c83a02e1596592840.jpg', NULL, '2020-08-05 14:00:40', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(168, '5f2a12cacfce41596592842.jpg', NULL, '2020-08-05 14:00:43', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(169, '5f2a12caf15ab1596592842.jpg', NULL, '2020-08-05 14:00:43', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(170, '5f2a12cd79d321596592845.jpg', NULL, '2020-08-05 14:00:45', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(171, '5f2a12cd7b2871596592845.jpg', NULL, '2020-08-05 14:00:45', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(172, '5f2a12cfbe9eb1596592847.jpg', NULL, '2020-08-05 14:00:47', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(173, '5f2a12d0710211596592848.jpg', NULL, '2020-08-05 14:00:48', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(174, '5f2a12d26a2661596592850.jpg', NULL, '2020-08-05 14:00:50', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(175, '5f2a12d35f2651596592851.jpg', NULL, '2020-08-05 14:00:51', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(176, '5f2a12d59c9ae1596592853.jpg', NULL, '2020-08-05 14:00:53', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(177, '5f2a12d5abcf71596592853.jpg', NULL, '2020-08-05 14:00:53', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(178, '5f2a12d814b0a1596592856.jpg', NULL, '2020-08-05 14:00:56', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(180, '5f2a12dac335b1596592858.jpg', NULL, '2020-08-05 14:00:59', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(181, '5f2a12dd0ebc51596592861.jpg', NULL, '2020-08-05 14:01:01', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(182, '5f2a12dd5bfe21596592861.jpg', NULL, '2020-08-05 14:01:01', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(183, '5f2a12df6fca51596592863.jpg', NULL, '2020-08-05 14:01:03', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(184, '5f2a12e0379bd1596592864.jpg', NULL, '2020-08-05 14:01:04', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(185, '5f2a12e1c3aea1596592865.jpg', NULL, '2020-08-05 14:01:05', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(186, '5f2a12e2a415d1596592866.jpg', NULL, '2020-08-05 14:01:07', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(187, '5f2a12e517ddd1596592869.jpg', NULL, '2020-08-05 14:01:09', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(188, '5f2a12e585d111596592869.jpg', NULL, '2020-08-05 14:01:09', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(189, '5f2a12e7ac2251596592871.jpg', NULL, '2020-08-05 14:01:11', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(190, '5f2a12e83da691596592872.jpg', NULL, '2020-08-05 14:01:12', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(191, '5f2a12eb36e181596592875.jpg', NULL, '2020-08-05 14:01:15', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(192, '5f2a12ed450fb1596592877.jpg', NULL, '2020-08-05 14:01:17', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(193, '5f2a12ee85ddc1596592878.jpg', NULL, '2020-08-05 14:01:18', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(194, '5f2a12efdae3e1596592879.jpg', NULL, '2020-08-05 14:01:20', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(195, '5f2a12f0c87c41596592880.jpg', NULL, '2020-08-05 14:01:21', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(196, '5f2a12f21dc861596592882.jpg', NULL, '2020-08-05 14:01:22', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(197, '5f2a12f3437751596592883.jpg', NULL, '2020-08-05 14:01:23', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(198, '5f2a12f4c52501596592884.png', NULL, '2020-08-05 14:01:25', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(199, '5f2a12f57940c1596592885.jpg', NULL, '2020-08-05 14:01:25', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(200, '5f2a12f75f33f1596592887.jpg', NULL, '2020-08-05 14:01:27', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(201, '5f2a12f814b381596592888.jpg', NULL, '2020-08-05 14:01:28', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(202, '5f2a12fad63921596592890.jpg', NULL, '2020-08-05 14:01:31', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(203, '5f2a12fd878ec1596592893.jpg', NULL, '2020-08-05 14:01:34', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(204, '5f2a12fe403fe1596592894.jpg', NULL, '2020-08-05 14:01:34', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(205, '5f2a13026ca371596592898.jpg', NULL, '2020-08-05 14:01:38', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(206, '5f2a13032f7dd1596592899.jpg', NULL, '2020-08-05 14:01:39', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(207, '5f2a1306d43ba1596592902.jpg', NULL, '2020-08-05 14:01:44', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(208, '5f2a130a905781596592906.jpg', NULL, '2020-08-05 14:01:46', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(209, '5f2a130d98e001596592909.jpg', NULL, '2020-08-05 14:01:49', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(210, '5f2a130dd69851596592909.jpg', NULL, '2020-08-05 14:01:50', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(211, '5f2a13106890a1596592912.jpg', NULL, '2020-08-05 14:01:52', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(212, '5f2a13106ec7e1596592912.jpg', NULL, '2020-08-05 14:01:52', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(213, '5f2a1312cbe6b1596592914.jpg', NULL, '2020-08-05 14:01:55', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(214, '5f2a1312dfedf1596592914.jpg', NULL, '2020-08-05 14:01:55', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(215, '5f2a13153ea6f1596592917.jpg', NULL, '2020-08-05 14:01:57', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(216, '5f2a136da6ea91596593005.jpg', NULL, '2020-08-05 14:03:26', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(217, '5f2a136dbf6671596593005.jpg', NULL, '2020-08-05 14:03:26', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(218, '5f2a1372dbede1596593010.jpg', NULL, '2020-08-05 14:03:31', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(219, '5f2a13731a26b1596593011.jpg', NULL, '2020-08-05 14:03:31', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(220, '5f2a137794e031596593015.jpg', NULL, '2020-08-05 14:03:36', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(221, '5f2a1378162881596593016.jpg', NULL, '2020-08-05 14:03:36', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(222, '5f2a137a497831596593018.jpg', NULL, '2020-08-05 14:03:38', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(223, '5f2a137b162971596593019.jpg', NULL, '2020-08-05 14:03:39', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(224, '5f2a137d9e8771596593021.jpg', NULL, '2020-08-05 14:03:42', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(225, '5f2a137e292131596593022.jpg', NULL, '2020-08-05 14:03:42', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(226, '5f2a1381344441596593025.jpg', NULL, '2020-08-05 14:03:45', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(227, '5f2a138333a6f1596593027.jpg', NULL, '2020-08-05 14:03:47', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(228, '5f2a138436aef1596593028.jpg', NULL, '2020-08-05 14:03:48', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(229, '5f2a1385e2daf1596593029.jpg', NULL, '2020-08-05 14:03:50', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(230, '5f2a1386a104f1596593030.jpg', NULL, '2020-08-05 14:03:51', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(231, '5f2a1388af7a81596593032.jpg', NULL, '2020-08-05 14:03:52', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(232, '5f2a13891d3941596593033.jpg', NULL, '2020-08-05 14:03:53', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(233, '5f2a138b131ff1596593035.jpg', NULL, '2020-08-05 14:03:55', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(234, '5f2a138bac4501596593035.jpg', NULL, '2020-08-05 14:03:55', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(235, '5f2a138d6b2251596593037.jpg', NULL, '2020-08-05 14:03:57', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(236, '5f2a138df30d31596593037.jpg', NULL, '2020-08-05 14:03:58', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(237, '5f2a138fd1d161596593039.jpg', NULL, '2020-08-05 14:04:00', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(238, '5f2a13904608a1596593040.jpg', NULL, '2020-08-05 14:04:00', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(239, '5f2a139292be91596593042.jpg', NULL, '2020-08-05 14:04:02', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(240, '5f2a1393a64f01596593043.jpg', NULL, '2020-08-05 14:04:04', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(241, '5f2a1395ec0401596593045.jpg', NULL, '2020-08-05 14:04:06', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(242, '5f2a139c59ceb1596593052.jpg', NULL, '2020-08-05 14:04:12', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(243, '5f2a139d2922c1596593053.jpg', NULL, '2020-08-05 14:04:14', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(244, '5f2a13a1eda441596593057.jpg', NULL, '2020-08-05 14:04:18', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(245, '5f2a13a3151661596593059.jpg', NULL, '2020-08-05 14:04:19', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(246, '5f2a13a71f1201596593063.jpg', NULL, '2020-08-05 14:04:23', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(247, '5f2a13a85ca471596593064.jpg', NULL, '2020-08-05 14:04:24', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(248, '5f2a13abed5771596593067.jpg', NULL, '2020-08-05 14:04:28', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(249, '5f2a13aca66cc1596593068.jpg', NULL, '2020-08-05 14:04:28', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(250, '5f2a13b00ca911596593072.jpg', NULL, '2020-08-05 14:04:32', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(251, '5f2a13b0a6aff1596593072.jpg', NULL, '2020-08-05 14:04:33', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(252, '5f2a13b480f7b1596593076.jpg', NULL, '2020-08-05 14:04:36', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(253, '5f2a13b5510881596593077.jpg', NULL, '2020-08-05 14:04:37', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(254, '5f2a13b96e9e51596593081.jpg', NULL, '2020-08-05 14:04:41', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(255, '5f2a13ba368fc1596593082.jpg', NULL, '2020-08-05 14:04:42', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(256, '5f2a13bd6503f1596593085.jpg', NULL, '2020-08-05 14:04:45', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(257, '5f2a13c0c52fe1596593088.jpg', NULL, '2020-08-05 14:04:49', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(258, '5f2a13c1984ea1596593089.jpg', NULL, '2020-08-05 14:04:50', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(259, '5f2a13c5950a91596593093.jpg', NULL, '2020-08-05 14:04:53', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(260, '5f2a13c627b191596593094.jpg', NULL, '2020-08-05 14:04:54', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(261, '5f2a13c871efa1596593096.jpg', NULL, '2020-08-05 14:04:56', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(262, '5f2a13c9207721596593097.jpg', NULL, '2020-08-05 14:04:57', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(263, '5f2a13cae84571596593098.jpg', NULL, '2020-08-05 14:04:59', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(264, '5f2a13cb927aa1596593099.jpg', NULL, '2020-08-05 14:04:59', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(265, '5f2a13cd4122c1596593101.jpg', NULL, '2020-08-05 14:05:01', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(266, '5f2a13cde1a721596593101.jpg', NULL, '2020-08-05 14:05:02', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(267, '5f2a13d0b47201596593104.jpg', NULL, '2020-08-05 14:05:05', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(268, '5f2a13d1f140f1596593105.jpg', NULL, '2020-08-05 14:05:06', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(269, '5f2a13d5acfc81596593109.jpg', NULL, '2020-08-05 14:05:10', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(270, '5f2a13d6bf2291596593110.jpg', NULL, '2020-08-05 14:05:11', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(271, '5f2a13db974201596593115.jpg', NULL, '2020-08-05 14:05:15', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(272, '5f2a13db9df0c1596593115.jpg', NULL, '2020-08-05 14:05:15', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(273, '5f2a13de5f5a91596593118.jpg', NULL, '2020-08-05 14:05:18', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(274, '5f2a13de6914c1596593118.jpg', NULL, '2020-08-05 14:05:18', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(275, '5f2a13e18640d1596593121.jpg', NULL, '2020-08-05 14:05:21', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(276, '5f2a13e1b66fb1596593121.jpg', NULL, '2020-08-05 14:05:21', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(277, '5f2a13e3dad8f1596593123.jpg', NULL, '2020-08-05 14:05:24', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(278, '5f2a13e41b7611596593124.jpg', NULL, '2020-08-05 14:05:24', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(279, '5f2a13e61c8501596593126.jpg', NULL, '2020-08-05 14:05:26', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(280, '5f2a13e67fe561596593126.jpg', NULL, '2020-08-05 14:05:26', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(281, '5f2a13e87cf511596593128.jpg', NULL, '2020-08-05 14:05:28', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(282, '5f2a13e90953c1596593129.jpg', NULL, '2020-08-05 14:05:29', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(283, '5f2a13eb09e4b1596593131.jpg', NULL, '2020-08-05 14:05:31', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(287, '5ff37709cd2bd1609791241.jpeg', NULL, '2021-01-05 08:14:01', '2021-01-05 08:14:09', 'pt-br', NULL, 3),
	(288, '5ff3770a33ab81609791242.PNG', NULL, '2021-01-05 08:14:02', '2021-01-05 08:14:09', 'pt-br', NULL, 3),
	(289, '5ff3770aa81521609791242.PNG', NULL, '2021-01-05 08:14:02', '2021-01-05 08:14:09', 'pt-br', NULL, 3),
	(290, '5ff3770b162561609791243.png', NULL, '2021-01-05 08:14:03', '2021-01-05 08:14:09', 'pt-br', NULL, 3),
	(291, '5ff37811583e51609791505.png', NULL, '2021-01-05 08:18:26', '2021-01-05 08:18:30', 'pt-br', NULL, 4),
	(292, '604126b4e75d71614882484.png', NULL, '2021-03-05 03:28:06', '2021-03-05 03:28:06', 'ja', '604126b0171ab', 0),
	(299, '604139afa92d21614887343.png', NULL, '2021-03-05 04:49:04', '2021-03-05 04:49:04', 'ja', '6041399d56093', 0),
	(300, '604139afa8ca91614887343.png', NULL, '2021-03-05 04:49:04', '2021-03-05 04:49:04', 'ja', '6041399d56093', 0),
	(301, '604139b06b95e1614887344.jpg', NULL, '2021-03-05 04:49:04', '2021-03-05 04:49:04', 'ja', '6041399d56093', 0),
	(302, '604139b075f811614887344.jpg', NULL, '2021-03-05 04:49:04', '2021-03-05 04:49:04', 'ja', '6041399d56093', 0),
	(303, '604139b0c04111614887344.PNG', NULL, '2021-03-05 04:49:06', '2021-03-05 04:49:06', 'ja', '6041399d56093', 0),
	(304, '604139cf84b191614887375.png', NULL, '2021-03-05 04:49:35', '2021-03-05 04:49:35', 'ja', '6041399d56093', 0),
	(305, '604139d54f3051614887381.PNG', NULL, '2021-03-05 04:49:43', '2021-03-05 04:49:43', 'ja', '6041399d56093', 0),
	(306, '604139e87db171614887400.PNG', NULL, '2021-03-05 04:50:02', '2021-03-05 04:50:02', 'ja', '604139e4515ab', 0),
	(308, '604239a2d3d9a1614952866.jpg', NULL, '2021-03-05 23:01:08', '2021-03-05 23:01:08', 'ja', '6042399d2e2a6', 0),
	(309, '604239a8bd46b1614952872.jpg', NULL, '2021-03-05 23:01:14', '2021-03-05 23:01:14', 'ja', '604239a447c33', 0),
	(310, '60423a68007851614953064.jpg', NULL, '2021-03-05 23:04:24', '2021-03-05 23:04:24', 'ja', '60423a630c6fb', 0);
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;

-- Dumping structure for table lacura.socials
CREATE TABLE IF NOT EXISTS `socials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.socials: ~0 rows (approximately)
/*!40000 ALTER TABLE `socials` DISABLE KEYS */;
/*!40000 ALTER TABLE `socials` ENABLE KEYS */;

-- Dumping structure for table lacura.social_marketings
CREATE TABLE IF NOT EXISTS `social_marketings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.social_marketings: ~0 rows (approximately)
/*!40000 ALTER TABLE `social_marketings` DISABLE KEYS */;
/*!40000 ALTER TABLE `social_marketings` ENABLE KEYS */;

-- Dumping structure for table lacura.social_marketing_services
CREATE TABLE IF NOT EXISTS `social_marketing_services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `package_id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.social_marketing_services: ~0 rows (approximately)
/*!40000 ALTER TABLE `social_marketing_services` DISABLE KEYS */;
/*!40000 ALTER TABLE `social_marketing_services` ENABLE KEYS */;

-- Dumping structure for table lacura.social_marketing_service_subscribers
CREATE TABLE IF NOT EXISTS `social_marketing_service_subscribers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `service_id` int(10) unsigned NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.social_marketing_service_subscribers: ~0 rows (approximately)
/*!40000 ALTER TABLE `social_marketing_service_subscribers` DISABLE KEYS */;
/*!40000 ALTER TABLE `social_marketing_service_subscribers` ENABLE KEYS */;

-- Dumping structure for table lacura.subscribers
CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.subscribers: ~0 rows (approximately)
/*!40000 ALTER TABLE `subscribers` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscribers` ENABLE KEYS */;

-- Dumping structure for table lacura.support_tickets
CREATE TABLE IF NOT EXISTS `support_tickets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ticket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.support_tickets: ~5 rows (approximately)
/*!40000 ALTER TABLE `support_tickets` DISABLE KEYS */;
REPLACE INTO `support_tickets` (`id`, `ticket`, `subject`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
	(1, '5B87BFFA', 'Minha Conta de usuário', 4, 9, '2020-07-11 04:35:29', '2020-11-17 15:16:12'),
	(2, 'C81A8712', 'Retirada', 9, 2, '2020-10-05 16:06:29', '2020-10-06 02:06:46'),
	(3, 'FEBAFFD0', 'Retirada', 9, 2, '2020-10-06 06:08:03', '2020-10-06 18:07:40'),
	(4, 'BCB1A429', 'Retirada', 9, 2, '2020-10-06 06:08:04', '2020-10-06 18:27:00'),
	(5, '8B596B7B', 'Dados para depósito / Japan Net Bank', 9, 2, '2020-10-06 06:22:53', '2020-10-06 18:19:00'),
	(6, '1AA51AE7', 'qq', 1, 9, '2021-03-04 05:29:47', '2021-03-19 05:25:19'),
	(7, 'C6CC0E00', 'q', 1, 9, '2021-03-19 06:09:00', '2021-03-20 03:41:32');
/*!40000 ALTER TABLE `support_tickets` ENABLE KEYS */;

-- Dumping structure for table lacura.teams
CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ln_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tw_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.teams: ~0 rows (approximately)
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;

-- Dumping structure for table lacura.testimonials
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.testimonials: ~0 rows (approximately)
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;

-- Dumping structure for table lacura.ticket_comments
CREATE TABLE IF NOT EXISTS `ticket_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ticket_id` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.ticket_comments: ~16 rows (approximately)
/*!40000 ALTER TABLE `ticket_comments` DISABLE KEYS */;
REPLACE INTO `ticket_comments` (`id`, `ticket_id`, `type`, `comment`, `created_at`, `updated_at`) VALUES
	(1, '5B87BFFA', 1, 'Oi\r\n\r\nComo faço para entrar em minha conta?', '2020-07-11 04:35:29', '2020-07-11 04:35:29'),
	(2, '5B87BFFA', 0, 'Ola, LC\r\n\r\nEntre com seus dados que cadastrou no sistema...\r\nSeu mail e senha', '2020-07-11 13:36:58', '2020-07-11 13:36:58'),
	(3, 'C81A8712', 1, 'Adicionar ¥350000 no saldo', '2020-10-05 16:06:29', '2020-10-05 16:06:29'),
	(4, 'C81A8712', 0, 'Prezado Marcos Seidi Togashi ,\r\n\r\nVocê pode fazer o saque, caso ainda encontre problemas nos informe!\r\n\r\n\r\nAtenciosamente,\r\nLa Cura', '2020-10-06 02:06:46', '2020-10-06 02:06:46'),
	(5, 'FEBAFFD0', 1, 'Como enviar cópia do documento e self?', '2020-10-06 06:08:03', '2020-10-06 06:08:03'),
	(6, 'BCB1A429', 1, 'Como enviar cópia do documento e self?', '2020-10-06 06:08:04', '2020-10-06 06:08:04'),
	(7, '8B596B7B', 1, 'ジャパンネット銀行\r\n店番号　003\r\n口口座番号　8357158\r\nMARCOSSEIDI TOGASHI', '2020-10-06 06:22:55', '2020-10-06 06:22:55'),
	(8, 'FEBAFFD0', 0, 'Prezado Marcos Seidi Togashi\r\n\r\nO envio de documentos deve ser feito junto com o processo de requerimento de retirada.\r\n\r\nEquipe de Suporte\r\n奇跡La Cura', '2020-10-06 18:07:40', '2020-10-06 18:07:40'),
	(9, '8B596B7B', 0, 'Prezado Marcos Seidi Togashi\r\n\r\n※	O procedimento de retirada segue um processo de regras para validar à retirada são: \r\n         Números de indicados.\r\n         Término do prazo de carência dos 180 dias.\r\n\r\nRecebemos os dados para o deposito, esta em andamento podendo levar de 3 a 10 dias uteis.\r\nA retirada não tem como ser suspendida após a solicitação.\r\nA cada retirada e/ou deposito é descontado 11% que é taxa da La Cura.\r\n\r\nEquipe de Suporte\r\n奇跡La Cura', '2020-10-06 18:19:00', '2020-10-06 18:19:00'),
	(10, 'BCB1A429', 0, 'Prezado Marcos Seidi Togashi\r\n\r\nRespondido no ticket anterior.\r\nPor favor, não multiplique o mesmo assunto abrindo vários tickets.\r\nO sistema segue uma programação rigorosa de segurança que pode comprometer o seu cadastro fazendo com que entre no SPAM .\r\n\r\nEquipe de Suporte\r\n奇跡La Cura', '2020-10-06 18:27:00', '2020-10-06 18:27:00'),
	(11, '1AA51AE7', 1, '<meta charset="UTF-8">\r\n    <meta name="viewport" content="width=device-width, initial-scale=1.0">\r\n    <meta http-equiv="X-UA-Compatible" content="ie=edge">', '2021-03-04 05:29:47', '2021-03-04 05:29:47'),
	(20, 'C6CC0E00', 0, 'afdasf', '2021-03-19 22:50:31', '2021-03-19 22:50:31'),
	(21, 'C6CC0E00', 0, 'sdfasdf', '2021-03-19 22:50:35', '2021-03-19 22:50:35'),
	(22, 'C6CC0E00', 0, 'sdfafasdf', '2021-03-19 22:50:40', '2021-03-19 22:50:40'),
	(23, 'C6CC0E00', 1, 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', '2021-03-19 23:14:26', '2021-03-19 23:14:26'),
	(24, 'C6CC0E00', 0, 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', '2021-03-19 23:20:36', '2021-03-19 23:20:36');
/*!40000 ALTER TABLE `ticket_comments` ENABLE KEYS */;

-- Dumping structure for table lacura.time_settings
CREATE TABLE IF NOT EXISTS `time_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.time_settings: ~5 rows (approximately)
/*!40000 ALTER TABLE `time_settings` DISABLE KEYS */;
REPLACE INTO `time_settings` (`id`, `name`, `time`, `created_at`, `updated_at`) VALUES
	(2, 'Hourly', '1', '2018-12-05 06:48:07', '2018-12-05 06:54:01'),
	(3, 'Weekly', '168', '2018-12-05 06:54:31', '2018-12-05 06:54:31'),
	(4, 'Daily', '24', '2018-12-05 06:54:43', '2019-01-31 05:34:26'),
	(5, 'Monthly', '720', '2018-12-05 06:54:59', '2018-12-05 06:54:59'),
	(6, 'Yearly', '8760', '2018-12-05 06:55:17', '2018-12-05 06:55:17');
/*!40000 ALTER TABLE `time_settings` ENABLE KEYS */;

-- Dumping structure for table lacura.transections
CREATE TABLE IF NOT EXISTS `transections` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `trxid` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=514 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.transections: ~462 rows (approximately)
/*!40000 ALTER TABLE `transections` DISABLE KEYS */;
REPLACE INTO `transections` (`id`, `trxid`, `user_id`, `amount`, `balance`, `des`, `charge`, `type`, `created_at`, `updated_at`) VALUES
	(7, 'AdKqXd0Zx0jFNprG', 11, '299000', '299000', 'Deposit Request Approved & Balance Added', '0', 0, '2020-06-29 14:34:45', '2020-06-29 14:34:45'),
	(8, 'TRX-8157', 11, '-299000', '299000', 'Invested On GIFT', '0', 0, '2020-06-29 14:38:28', '2020-06-29 14:38:28'),
	(9, 'BPaIFEx5mQMlYfhC', 9, '29900', '29900', '1 Referral Commission', '0', 11, '2020-06-29 14:38:28', '2020-06-29 14:38:28'),
	(10, '9iNszuXI9kR88Yde', 4, '23920', '23920', '2 Referral Commission', '0', 11, '2020-06-29 14:38:29', '2020-06-29 14:38:29'),
	(11, 'TRX-16965efa878f0f61a', 11, '5083', '5083', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-06-30 03:30:07', '2020-06-30 03:30:07'),
	(25, 'Xa3sieobdf36I7sG', 9, '299000', '299000', 'Deposit Request Approved & Balance Added', '0', 0, '2020-06-30 17:34:49', '2020-06-30 17:34:49'),
	(26, 'TRX-5426', 9, '-299000', '299000', 'Invested On GIFT', '0', 0, '2020-06-30 08:39:37', '2020-06-30 08:39:37'),
	(27, 'egoQFNHTqA9HbPZy', 4, '29900', '29900', '1 Referral Commission', '0', 11, '2020-06-30 08:39:37', '2020-06-30 08:39:37'),
	(28, 'F3J5ZfxBAcpufooL', 17, '299000', '299000', 'Deposit Request Approved & Balance Added', '0', 0, '2020-06-30 23:41:00', '2020-06-30 23:41:00'),
	(29, 'TRX-4064', 17, '-299000', '299000', 'Invested On GIFT', '0', 0, '2020-07-01 00:41:14', '2020-07-01 00:41:14'),
	(30, 'ctIuoA1cApzf6qMH', 9, '29900', '29900', '1 Referral Commission', '0', 11, '2020-07-01 00:41:14', '2020-07-01 00:41:14'),
	(31, 'QzJGqG9lQ2HZznTE', 4, '23920', '23920', '2 Referral Commission', '0', 11, '2020-07-01 00:41:15', '2020-07-01 00:41:15'),
	(32, 'TRX-83655efbb5e846107', 11, '5083', '10166', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-01 10:00:08', '2020-07-01 10:00:08'),
	(33, 'TRX-65955efc18576ebe2', 9, '5083', '5083', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-01 17:00:07', '2020-07-01 17:00:07'),
	(34, 'TRX-47805efc1857717b9', 17, '5083', '5083', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-01 17:00:07', '2020-07-01 17:00:07'),
	(35, 'LDKMzha5e1OZmonp', 16, '299000', '299000', 'Deposit Request Approved & Balance Added', '0', 0, '2020-07-02 01:07:03', '2020-07-02 01:07:03'),
	(36, 'TRX-4082', 16, '-299000', '299000', 'Invested On GIFT', '0', 0, '2020-07-01 16:11:26', '2020-07-01 16:11:26'),
	(37, 'br5YwT70rDeIzkW8', 9, '29900', '34983', '1 Referral Commission', '0', 11, '2020-07-01 16:11:26', '2020-07-01 16:11:26'),
	(38, 'eLiHDL8H3tBJXLoK', 4, '23920', '23920', '2 Referral Commission', '0', 11, '2020-07-01 16:11:27', '2020-07-01 16:11:27'),
	(39, 'TRX-76985efd077162b6a', 11, '5083', '15249', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-02 10:00:17', '2020-07-02 10:00:17'),
	(40, 'TRX-52235efd319c1f9c8', 16, '5083', '5083', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-02 13:00:12', '2020-07-02 13:00:12'),
	(41, 'TRX-80655efd69db44850', 9, '5083', '10166', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-02 17:00:11', '2020-07-02 17:00:11'),
	(42, 'TRX-94055efd69db46bd8', 17, '5083', '10166', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-02 17:00:11', '2020-07-02 17:00:11'),
	(43, 'TRX-14475efe66fad3aa4', 11, '5083', '20332', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-03 11:00:10', '2020-07-03 11:00:10'),
	(44, 'TRX-57655efe912a246cb', 16, '5083', '10166', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-03 14:00:10', '2020-07-03 14:00:10'),
	(45, 'TRX-66745efebb5bb9922', 9, '5083', '15249', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-03 17:00:11', '2020-07-03 17:00:11'),
	(46, 'TRX-94015efebb5bc9d19', 17, '5083', '15249', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-03 17:00:11', '2020-07-03 17:00:11'),
	(47, 'TRX-40655f01eaf779961', 11, '5083', '25415', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-06 03:00:07', '2020-07-06 03:00:07'),
	(48, 'TRX-69165f01eaf77d1e1', 9, '5083', '20332', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-06 03:00:07', '2020-07-06 03:00:07'),
	(49, 'TRX-29995f01eaf77f3a7', 17, '5083', '20332', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-06 03:00:07', '2020-07-06 03:00:07'),
	(50, 'TRX-49775f01eaf78152f', 16, '5083', '15249', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-06 03:00:07', '2020-07-06 03:00:07'),
	(51, 'TRX-28265f033c77cca25', 11, '5083', '30498', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-07 03:00:07', '2020-07-07 03:00:07'),
	(52, 'TRX-52905f033c77d23c7', 9, '5083', '25415', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-07 03:00:07', '2020-07-07 03:00:07'),
	(53, 'TRX-65235f033c77d5dd3', 17, '5083', '25415', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-07 03:00:07', '2020-07-07 03:00:07'),
	(54, 'TRX-59405f033c77d8806', 16, '5083', '20332', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-07 03:00:07', '2020-07-07 03:00:07'),
	(55, 'TRX-15055f048e0077a29', 11, '5083', '35581', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-08 03:00:16', '2020-07-08 03:00:16'),
	(56, 'TRX-19955f048e008a11b', 9, '5083', '30498', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-08 03:00:16', '2020-07-08 03:00:16'),
	(57, 'TRX-56475f048e0090be3', 17, '5083', '30498', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-08 03:00:16', '2020-07-08 03:00:16'),
	(58, 'TRX-29605f048e00951a7', 16, '5083', '25415', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-08 03:00:16', '2020-07-08 03:00:16'),
	(59, 'TRX-16275f05ed87a01fd', 11, '5083', '40664', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-09 04:00:07', '2020-07-09 04:00:07'),
	(60, 'TRX-91355f05ed87a4f0d', 9, '5083', '35581', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-09 04:00:07', '2020-07-09 04:00:07'),
	(61, 'TRX-46655f05ed87a8e17', 17, '5083', '35581', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-09 04:00:07', '2020-07-09 04:00:07'),
	(62, 'TRX-12875f05ed87ad66c', 16, '5083', '30498', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-09 04:00:07', '2020-07-09 04:00:07'),
	(63, 'TRX-76835f073f085a82e', 11, '5083', '45747', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-10 04:00:08', '2020-07-10 04:00:08'),
	(64, 'TRX-39535f073f0860a2d', 9, '5083', '40664', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-10 04:00:08', '2020-07-10 04:00:08'),
	(65, 'TRX-51435f073f086bd25', 17, '5083', '40664', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-10 04:00:08', '2020-07-10 04:00:08'),
	(66, 'TRX-37985f073f08720d2', 16, '5083', '35581', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-10 04:00:08', '2020-07-10 04:00:08'),
	(67, 'TRX-29325f0b257a0fcf5', 11, '5083', '50830', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-13 03:00:10', '2020-07-13 03:00:10'),
	(68, 'TRX-99495f0b257a16a67', 9, '5083', '45747', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-13 03:00:10', '2020-07-13 03:00:10'),
	(69, 'TRX-96005f0b257a1ecbb', 17, '5083', '45747', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-13 03:00:10', '2020-07-13 03:00:10'),
	(70, 'TRX-88405f0b257a244ae', 16, '5083', '40664', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-13 03:00:10', '2020-07-13 03:00:10'),
	(71, 'TRX-85985f0c76f9383d3', 11, '5083', '55913', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-14 03:00:09', '2020-07-14 03:00:09'),
	(72, 'TRX-94165f0c76f93d3e1', 9, '5083', '50830', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-14 03:00:09', '2020-07-14 03:00:09'),
	(73, 'TRX-90185f0c76f944e2d', 17, '5083', '50830', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-14 03:00:09', '2020-07-14 03:00:09'),
	(74, 'TRX-46735f0c76f947b04', 16, '5083', '45747', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-14 03:00:09', '2020-07-14 03:00:09'),
	(75, 'TRX-26895f0dc883e551a', 11, '5083', '60996', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-15 03:00:19', '2020-07-15 03:00:19'),
	(76, 'TRX-57915f0dc883ea42f', 9, '5083', '55913', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-15 03:00:19', '2020-07-15 03:00:19'),
	(77, 'TRX-99645f0dc883ecd73', 17, '5083', '55913', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-15 03:00:19', '2020-07-15 03:00:19'),
	(78, 'TRX-73095f0dc883f1533', 16, '5083', '50830', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-15 03:00:19', '2020-07-15 03:00:19'),
	(79, 'TRX-71985f0f281b2a2e2', 11, '5083', '66079', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-16 04:00:27', '2020-07-16 04:00:27'),
	(80, 'TRX-54015f0f281b2d14c', 9, '5083', '60996', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-16 04:00:27', '2020-07-16 04:00:27'),
	(81, 'TRX-59735f0f281b3028d', 17, '5083', '60996', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-16 04:00:27', '2020-07-16 04:00:27'),
	(82, 'TRX-99665f0f281b326e8', 16, '5083', '55913', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-16 04:00:27', '2020-07-16 04:00:27'),
	(83, 'TRX-61475f10879cbd0bd', 11, '5083', '71162', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-17 05:00:12', '2020-07-17 05:00:12'),
	(84, 'TRX-44855f10879cc3488', 9, '5083', '66079', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-17 05:00:12', '2020-07-17 05:00:12'),
	(85, 'TRX-83595f10879cce95d', 17, '5083', '66079', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-17 05:00:12', '2020-07-17 05:00:12'),
	(86, 'TRX-25685f10879cd5014', 16, '5083', '60996', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-17 05:00:12', '2020-07-17 05:00:12'),
	(87, 'TRX-59015f145ffd7b6cb', 11, '5083', '76245', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-20 03:00:13', '2020-07-20 03:00:13'),
	(88, 'TRX-71895f145ffd7f630', 9, '5083', '71162', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-20 03:00:13', '2020-07-20 03:00:13'),
	(89, 'TRX-65235f145ffd84397', 17, '5083', '71162', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-20 03:00:13', '2020-07-20 03:00:13'),
	(90, 'TRX-19855f145ffd89606', 16, '5083', '66079', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-20 03:00:13', '2020-07-20 03:00:13'),
	(91, 'TRX-66425f15bf87e1e1d', 11, '5083', '81328', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-21 04:00:07', '2020-07-21 04:00:07'),
	(92, 'TRX-25845f15bf87ece46', 9, '5083', '76245', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-21 04:00:07', '2020-07-21 04:00:07'),
	(93, 'TRX-83875f15bf87f0c44', 17, '5083', '76245', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-21 04:00:07', '2020-07-21 04:00:07'),
	(94, 'TRX-47165f15bf87f4033', 16, '5083', '71162', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-21 04:00:08', '2020-07-21 04:00:08'),
	(95, 'TRX-55635f17111496df6', 11, '5083', '86411', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-22 04:00:20', '2020-07-22 04:00:20'),
	(96, 'TRX-84295f171114a0144', 9, '5083', '81328', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-22 04:00:20', '2020-07-22 04:00:20'),
	(97, 'TRX-82765f171114a89d2', 17, '5083', '81328', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-22 04:00:20', '2020-07-22 04:00:20'),
	(98, 'TRX-88405f171114b1ca0', 16, '5083', '76245', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-22 04:00:20', '2020-07-22 04:00:20'),
	(99, 'TRX-21735f18709ac581b', 11, '5083', '91494', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-23 05:00:10', '2020-07-23 05:00:10'),
	(100, 'TRX-19955f18709ac880b', 9, '5083', '86411', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-23 05:00:10', '2020-07-23 05:00:10'),
	(101, 'TRX-73085f18709acad38', 17, '5083', '86411', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-23 05:00:10', '2020-07-23 05:00:10'),
	(102, 'TRX-41795f18709acd1ff', 16, '5083', '81328', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-23 05:00:10', '2020-07-23 05:00:10'),
	(103, 'TRX-11185f19c22c087c2', 11, '5083', '96577', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-24 05:00:28', '2020-07-24 05:00:28'),
	(104, 'TRX-76195f19c22c1f7ad', 9, '5083', '91494', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-24 05:00:28', '2020-07-24 05:00:28'),
	(105, 'TRX-22555f19c22c25edd', 17, '5083', '91494', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-24 05:00:28', '2020-07-24 05:00:28'),
	(106, 'TRX-32395f19c22c2dad4', 16, '5083', '86411', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-24 05:00:28', '2020-07-24 05:00:28'),
	(107, 'TRX-14985f1d9a8dc0458', 11, '5083', '101660', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-27 03:00:29', '2020-07-27 03:00:29'),
	(108, 'TRX-19955f1d9a8dc2db5', 9, '5083', '96577', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-27 03:00:29', '2020-07-27 03:00:29'),
	(109, 'TRX-13665f1d9a8dc5058', 17, '5083', '96577', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-27 03:00:29', '2020-07-27 03:00:29'),
	(110, 'TRX-70905f1d9a8dc80d8', 16, '5083', '91494', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-27 03:00:29', '2020-07-27 03:00:29'),
	(111, 'TRX-32795f1efa1c3320b', 11, '5083', '106743', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-28 04:00:28', '2020-07-28 04:00:28'),
	(112, 'TRX-66325f1efa1c3923a', 9, '5083', '101660', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-28 04:00:28', '2020-07-28 04:00:28'),
	(113, 'TRX-13865f1efa1c3d5e6', 17, '5083', '101660', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-28 04:00:28', '2020-07-28 04:00:28'),
	(114, 'TRX-34845f1efa1c407c2', 16, '5083', '96577', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-28 04:00:28', '2020-07-28 04:00:28'),
	(115, 'TRX-74935f204ba05c55f', 11, '5083', '111826', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-29 04:00:32', '2020-07-29 04:00:32'),
	(116, 'TRX-66585f204ba061ad8', 9, '5083', '106743', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-29 04:00:32', '2020-07-29 04:00:32'),
	(117, 'TRX-68185f204ba066021', 17, '5083', '106743', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-29 04:00:32', '2020-07-29 04:00:32'),
	(118, 'TRX-27855f204ba06a17a', 16, '5083', '101660', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-29 04:00:32', '2020-07-29 04:00:32'),
	(119, 'TRX-93205f21ab2e4924a', 11, '5083', '116909', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-30 05:00:30', '2020-07-30 05:00:30'),
	(120, 'TRX-59455f21ab2e4e44e', 9, '5083', '111826', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-30 05:00:30', '2020-07-30 05:00:30'),
	(121, 'TRX-15545f21ab2e5840e', 17, '5083', '111826', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-30 05:00:30', '2020-07-30 05:00:30'),
	(122, 'TRX-52835f21ab2e5e3cf', 16, '5083', '106743', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-30 05:00:30', '2020-07-30 05:00:30'),
	(123, 'TRX-90615f230ac078b5e', 11, '5083', '121992', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-31 06:00:32', '2020-07-31 06:00:32'),
	(124, 'TRX-36615f230ac082a2b', 9, '5083', '116909', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-31 06:00:32', '2020-07-31 06:00:32'),
	(125, 'TRX-76255f230ac087e60', 17, '5083', '116909', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-31 06:00:32', '2020-07-31 06:00:32'),
	(126, 'TRX-56525f230ac09575c', 16, '5083', '111826', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-31 06:00:32', '2020-07-31 06:00:32'),
	(127, 'TRX-67485f26d4f3c01e4', 11, '5083', '127075', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-03 03:00:03', '2020-08-03 03:00:03'),
	(128, 'TRX-90845f26d4f3c3dea', 9, '5083', '121992', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-03 03:00:03', '2020-08-03 03:00:03'),
	(129, 'TRX-19925f26d4f3c7424', 17, '5083', '121992', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-03 03:00:03', '2020-08-03 03:00:03'),
	(130, 'TRX-64915f26d4f3cbf9e', 16, '5083', '116909', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-03 03:00:03', '2020-08-03 03:00:03'),
	(131, 'TRX-21535f282677e4692', 11, '5083', '132158', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-04 03:00:07', '2020-08-04 03:00:07'),
	(132, 'TRX-33075f282677e9f98', 9, '5083', '127075', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-04 03:00:07', '2020-08-04 03:00:07'),
	(133, 'TRX-22105f282677ed921', 17, '5083', '127075', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-04 03:00:07', '2020-08-04 03:00:07'),
	(134, 'TRX-31175f282677f1008', 16, '5083', '121992', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-04 03:00:07', '2020-08-04 03:00:07'),
	(135, 'TRX-31165f2986045bd83', 11, '5083', '137241', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-05 04:00:04', '2020-08-05 04:00:04'),
	(136, 'TRX-36115f298604626e0', 9, '5083', '132158', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-05 04:00:04', '2020-08-05 04:00:04'),
	(137, 'TRX-36015f298604668e6', 17, '5083', '132158', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-05 04:00:04', '2020-08-05 04:00:04'),
	(138, 'TRX-96665f2986046c394', 16, '5083', '127075', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-05 04:00:04', '2020-08-05 04:00:04'),
	(139, 'TRX-59165f2ad787d49da', 11, '5083', '142324', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-06 04:00:07', '2020-08-06 04:00:07'),
	(140, 'TRX-71575f2ad787d96be', 9, '5083', '137241', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-06 04:00:07', '2020-08-06 04:00:07'),
	(141, 'TRX-58865f2ad787dca33', 17, '5083', '137241', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-06 04:00:07', '2020-08-06 04:00:07'),
	(142, 'TRX-68575f2ad787e052e', 16, '5083', '132158', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-06 04:00:07', '2020-08-06 04:00:07'),
	(143, 'TRX-46915f2c290eb5060', 11, '5083', '147407', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-07 04:00:14', '2020-08-07 04:00:14'),
	(144, 'TRX-82685f2c290ebabc6', 9, '5083', '142324', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-07 04:00:14', '2020-08-07 04:00:14'),
	(145, 'TRX-81435f2c290ec0a88', 17, '5083', '142324', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-07 04:00:14', '2020-08-07 04:00:14'),
	(146, 'TRX-33805f2c290ec7ee7', 16, '5083', '137241', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-07 04:00:14', '2020-08-07 04:00:14'),
	(147, 'TRX-85605f300f742484d', 11, '5083', '152490', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-10 03:00:04', '2020-08-10 03:00:04'),
	(148, 'TRX-59165f300f74299ee', 9, '5083', '147407', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-10 03:00:04', '2020-08-10 03:00:04'),
	(149, 'TRX-77395f300f742ca64', 17, '5083', '147407', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-10 03:00:04', '2020-08-10 03:00:04'),
	(150, 'TRX-76245f300f742f5bf', 16, '5083', '142324', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-10 03:00:04', '2020-08-10 03:00:04'),
	(151, 'TRX-62725f316f05f2a0f', 11, '5083', '157573', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-11 04:00:05', '2020-08-11 04:00:05'),
	(152, 'TRX-34085f316f06052e7', 9, '5083', '152490', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-11 04:00:06', '2020-08-11 04:00:06'),
	(153, 'TRX-50615f316f060a41e', 17, '5083', '152490', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-11 04:00:06', '2020-08-11 04:00:06'),
	(154, 'TRX-14875f316f060f398', 16, '5083', '147407', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-11 04:00:06', '2020-08-11 04:00:06'),
	(155, 'TRX-43635f32c086c5d2f', 11, '5083', '162656', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-12 04:00:06', '2020-08-12 04:00:06'),
	(156, 'TRX-24485f32c086c952b', 9, '5083', '157573', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-12 04:00:06', '2020-08-12 04:00:06'),
	(157, 'TRX-69685f32c086cc333', 17, '5083', '157573', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-12 04:00:06', '2020-08-12 04:00:06'),
	(158, 'TRX-85645f32c086ce99d', 16, '5083', '152490', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-12 04:00:06', '2020-08-12 04:00:06'),
	(159, 'TRX-21525f342016471e3', 11, '5083', '167739', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-13 05:00:06', '2020-08-13 05:00:06'),
	(160, 'TRX-20915f3420164b3b2', 9, '5083', '162656', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-13 05:00:06', '2020-08-13 05:00:06'),
	(161, 'TRX-49215f3420164ea70', 17, '5083', '162656', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-13 05:00:06', '2020-08-13 05:00:06'),
	(162, 'TRX-94135f34201652100', 16, '5083', '157573', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-13 05:00:06', '2020-08-13 05:00:06'),
	(163, 'TRX-21515f3571981539f', 11, '5083', '172822', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-14 05:00:08', '2020-08-14 05:00:08'),
	(164, 'TRX-46575f3571981925b', 9, '5083', '167739', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-14 05:00:08', '2020-08-14 05:00:08'),
	(165, 'TRX-92795f3571981b9b9', 17, '5083', '167739', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-14 05:00:08', '2020-08-14 05:00:08'),
	(166, 'TRX-72525f3571981dd1d', 16, '5083', '162656', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-14 05:00:08', '2020-08-14 05:00:08'),
	(167, 'TRX-35185f3949f5b53b6', 11, '5083', '177905', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-17 03:00:05', '2020-08-17 03:00:05'),
	(168, 'TRX-69745f3949f5ba2f0', 9, '5083', '172822', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-17 03:00:05', '2020-08-17 03:00:05'),
	(169, 'TRX-47365f3949f5be0f0', 17, '5083', '172822', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-17 03:00:05', '2020-08-17 03:00:05'),
	(170, 'TRX-96195f3949f5c3009', 16, '5083', '167739', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-17 03:00:05', '2020-08-17 03:00:05'),
	(171, 'TRX-23635f3a9b76e64cd', 11, '5083', '182988', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-18 03:00:06', '2020-08-18 03:00:06'),
	(172, 'TRX-82675f3a9b770081d', 9, '5083', '177905', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-18 03:00:07', '2020-08-18 03:00:07'),
	(173, 'TRX-37955f3a9b77045af', 17, '5083', '177905', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-18 03:00:07', '2020-08-18 03:00:07'),
	(174, 'TRX-51325f3a9b770d387', 16, '5083', '172822', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-18 03:00:07', '2020-08-18 03:00:07'),
	(175, 'TRX-13935f3bfb0569ecf', 11, '5083', '188071', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-19 04:00:05', '2020-08-19 04:00:05'),
	(176, 'TRX-25705f3bfb056ebbc', 9, '5083', '182988', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-19 04:00:05', '2020-08-19 04:00:05'),
	(177, 'TRX-47325f3bfb05767f0', 17, '5083', '182988', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-19 04:00:05', '2020-08-19 04:00:05'),
	(178, 'TRX-71005f3bfb057c139', 16, '5083', '177905', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-19 04:00:05', '2020-08-19 04:00:05'),
	(179, 'TRX-87845f3d4c8564b77', 11, '5083', '193154', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-20 04:00:05', '2020-08-20 04:00:05'),
	(180, 'TRX-54655f3d4c856b59b', 9, '5083', '188071', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-20 04:00:05', '2020-08-20 04:00:05'),
	(181, 'TRX-26125f3d4c857146e', 17, '5083', '188071', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-20 04:00:05', '2020-08-20 04:00:05'),
	(182, 'TRX-96275f3d4c8576623', 16, '5083', '182988', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-20 04:00:05', '2020-08-20 04:00:05'),
	(183, 'TRX-30555f3e9e057561c', 11, '5083', '198237', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-21 04:00:05', '2020-08-21 04:00:05'),
	(184, 'TRX-53935f3e9e057af31', 9, '5083', '193154', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-21 04:00:05', '2020-08-21 04:00:05'),
	(185, 'TRX-87825f3e9e057eff1', 17, '5083', '193154', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-21 04:00:05', '2020-08-21 04:00:05'),
	(186, 'TRX-14765f3e9e0582a18', 16, '5083', '188071', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-21 04:00:05', '2020-08-21 04:00:05'),
	(187, 'TRX-77565f428473f0a7a', 11, '5083', '203320', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-24 03:00:03', '2020-08-24 03:00:03'),
	(188, 'TRX-68175f42847403964', 9, '5083', '198237', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-24 03:00:04', '2020-08-24 03:00:04'),
	(189, 'TRX-34045f428474093bb', 17, '5083', '198237', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-24 03:00:04', '2020-08-24 03:00:04'),
	(190, 'TRX-69475f4284740faf3', 16, '5083', '193154', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-24 03:00:04', '2020-08-24 03:00:04'),
	(191, 'TRX-34915f43d64642c2a', 11, '5083', '208403', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-25 03:01:26', '2020-08-25 03:01:26'),
	(192, 'TRX-41565f43d6464816f', 9, '5083', '203320', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-25 03:01:26', '2020-08-25 03:01:26'),
	(193, 'TRX-15045f43d6464c3b7', 17, '5083', '203320', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-25 03:01:26', '2020-08-25 03:01:26'),
	(194, 'TRX-96525f43d646583d1', 16, '5083', '198237', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-25 03:01:26', '2020-08-25 03:01:26'),
	(195, 'TRX-37255f45358592fd3', 11, '5083', '213486', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-26 04:00:05', '2020-08-26 04:00:05'),
	(196, 'TRX-37395f453585980d4', 9, '5083', '208403', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-26 04:00:05', '2020-08-26 04:00:05'),
	(197, 'TRX-27445f4535859c1c6', 17, '5083', '208403', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-26 04:00:05', '2020-08-26 04:00:05'),
	(198, 'TRX-33225f4535859fb22', 16, '5083', '203320', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-26 04:00:05', '2020-08-26 04:00:05'),
	(199, 'TRX-40165f468706583d4', 11, '5083', '218569', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-27 04:00:06', '2020-08-27 04:00:06'),
	(200, 'TRX-23565f468707184fb', 9, '5083', '213486', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-27 04:00:07', '2020-08-27 04:00:07'),
	(201, 'TRX-75995f4687071dd06', 17, '5083', '213486', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-27 04:00:07', '2020-08-27 04:00:07'),
	(202, 'TRX-83225f468707215b2', 16, '5083', '208403', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-27 04:00:07', '2020-08-27 04:00:07'),
	(203, 'TRX-89155f47e693c4ea5', 11, '5083', '223652', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-28 05:00:03', '2020-08-28 05:00:03'),
	(204, 'TRX-41845f47e693c8a9a', 9, '5083', '218569', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-28 05:00:03', '2020-08-28 05:00:03'),
	(205, 'TRX-56905f47e693cbd67', 17, '5083', '218569', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-28 05:00:03', '2020-08-28 05:00:03'),
	(206, 'TRX-90755f47e693cf08b', 16, '5083', '213486', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-28 05:00:03', '2020-08-28 05:00:03'),
	(207, 'TRX-59995f4bbef4377e8', 11, '5083', '228735', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-31 03:00:04', '2020-08-31 03:00:04'),
	(208, 'TRX-48215f4bbef43ad77', 9, '5083', '223652', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-31 03:00:04', '2020-08-31 03:00:04'),
	(209, 'TRX-65235f4bbef43f557', 17, '5083', '223652', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-31 03:00:04', '2020-08-31 03:00:04'),
	(210, 'TRX-80815f4bbef44294a', 16, '5083', '218569', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-31 03:00:04', '2020-08-31 03:00:04'),
	(211, 'TRX-30875f4d10759790f', 11, '5083', '233818', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-01 03:00:05', '2020-09-01 03:00:05'),
	(212, 'TRX-19705f4d10759dd83', 9, '5083', '228735', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-01 03:00:05', '2020-09-01 03:00:05'),
	(213, 'TRX-46995f4d1075a28d5', 17, '5083', '228735', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-01 03:00:05', '2020-09-01 03:00:05'),
	(214, 'TRX-92675f4d1075a61c9', 16, '5083', '223652', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-01 03:00:05', '2020-09-01 03:00:05'),
	(215, 'TRX-41535f4e61f5e341f', 11, '5083', '238901', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-02 03:00:05', '2020-09-02 03:00:05'),
	(216, 'TRX-42475f4e61f5ea509', 9, '5083', '233818', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-02 03:00:05', '2020-09-02 03:00:05'),
	(217, 'TRX-72345f4e61f5ed04b', 17, '5083', '233818', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-02 03:00:05', '2020-09-02 03:00:05'),
	(218, 'TRX-17335f4e61f5f06dd', 16, '5083', '228735', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-02 03:00:05', '2020-09-02 03:00:05'),
	(219, 'TRX-15285f4fb375c374a', 11, '5083', '243984', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-03 03:00:05', '2020-09-03 03:00:05'),
	(220, 'TRX-28355f4fb375c8742', 9, '5083', '238901', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-03 03:00:05', '2020-09-03 03:00:05'),
	(221, 'TRX-21825f4fb375cba39', 17, '5083', '238901', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-03 03:00:05', '2020-09-03 03:00:05'),
	(222, 'TRX-69445f4fb375cf0d8', 16, '5083', '233818', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-03 03:00:05', '2020-09-03 03:00:05'),
	(223, 'TRX-71905f5104f577539', 11, '5083', '249067', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-04 03:00:05', '2020-09-04 03:00:05'),
	(224, 'TRX-32945f5104f57b88b', 9, '5083', '243984', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-04 03:00:05', '2020-09-04 03:00:05'),
	(225, 'TRX-37515f5104f57ed2e', 17, '5083', '243984', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-04 03:00:05', '2020-09-04 03:00:05'),
	(226, 'TRX-58815f5104f5823cd', 16, '5083', '238901', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-04 03:00:05', '2020-09-04 03:00:05'),
	(227, 'TRX-93735f54f9754a149', 11, '5083', '254150', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-07 03:00:05', '2020-09-07 03:00:05'),
	(228, 'TRX-72465f54f9754f660', 9, '5083', '249067', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-07 03:00:05', '2020-09-07 03:00:05'),
	(229, 'TRX-78825f54f97554e3b', 17, '5083', '249067', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-07 03:00:05', '2020-09-07 03:00:05'),
	(230, 'TRX-67015f54f9755819d', 16, '5083', '243984', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-07 03:00:05', '2020-09-07 03:00:05'),
	(231, 'TRX-11245f564affb1c25', 11, '5083', '259233', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-08 03:00:15', '2020-09-08 03:00:15'),
	(232, 'TRX-55715f564affb5b6b', 9, '5083', '254150', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-08 03:00:15', '2020-09-08 03:00:15'),
	(233, 'TRX-24985f564affbbf06', 17, '5083', '254150', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-08 03:00:15', '2020-09-08 03:00:15'),
	(234, 'TRX-23855f564affc0e1d', 16, '5083', '249067', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-08 03:00:15', '2020-09-08 03:00:15'),
	(235, 'TRX-44105f57aa844fdb7', 11, '5083', '264316', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-09 04:00:04', '2020-09-09 04:00:04'),
	(236, 'TRX-49825f57aa8454bf2', 9, '5083', '259233', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-09 04:00:04', '2020-09-09 04:00:04'),
	(237, 'TRX-15955f57aa8458c43', 17, '5083', '259233', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-09 04:00:04', '2020-09-09 04:00:04'),
	(238, 'TRX-54495f57aa845ce1d', 16, '5083', '254150', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-09 04:00:04', '2020-09-09 04:00:04'),
	(239, 'TRX-19985f58fc06590c9', 11, '5083', '269399', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-10 04:00:06', '2020-09-10 04:00:06'),
	(240, 'TRX-62645f58fc065dd9d', 9, '5083', '264316', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-10 04:00:06', '2020-09-10 04:00:06'),
	(241, 'TRX-77415f58fc06628ba', 17, '5083', '264316', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-10 04:00:06', '2020-09-10 04:00:06'),
	(242, 'TRX-78715f58fc06675ef', 16, '5083', '259233', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-10 04:00:06', '2020-09-10 04:00:06'),
	(243, 'TRX-23415f5a4d882da6b', 11, '5083', '274482', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-11 04:00:08', '2020-09-11 04:00:08'),
	(244, 'TRX-51235f5a4d8834bd7', 9, '5083', '269399', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-11 04:00:08', '2020-09-11 04:00:08'),
	(245, 'TRX-71595f5a4d88393a4', 17, '5083', '269399', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-11 04:00:08', '2020-09-11 04:00:08'),
	(246, 'TRX-65295f5a4d883edee', 16, '5083', '264316', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-11 04:00:08', '2020-09-11 04:00:08'),
	(247, 'TRX-91785f5e33f94999a', 11, '5083', '279565', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-14 03:00:09', '2020-09-14 03:00:09'),
	(248, 'TRX-61025f5e33f94bffb', 9, '5083', '274482', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-14 03:00:09', '2020-09-14 03:00:09'),
	(249, 'TRX-65675f5e33f94e204', 17, '5083', '274482', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-14 03:00:09', '2020-09-14 03:00:09'),
	(250, 'TRX-92625f5e33f952013', 16, '5083', '269399', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-14 03:00:09', '2020-09-14 03:00:09'),
	(251, 'TRX-86245f5f938748b20', 11, '5083', '284648', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-15 04:00:07', '2020-09-15 04:00:07'),
	(252, 'TRX-89735f5f93874f7b4', 9, '5083', '279565', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-15 04:00:07', '2020-09-15 04:00:07'),
	(253, 'TRX-42225f5f9387547c4', 17, '5083', '279565', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-15 04:00:07', '2020-09-15 04:00:07'),
	(254, 'TRX-68295f5f93875814e', 16, '5083', '274482', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-15 04:00:07', '2020-09-15 04:00:07'),
	(255, 'TRX-25185f60f316ba7e3', 11, '5083', '289731', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-16 05:00:06', '2020-09-16 05:00:06'),
	(256, 'TRX-35975f60f316bdee8', 9, '5083', '284648', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-16 05:00:06', '2020-09-16 05:00:06'),
	(257, 'TRX-90805f60f316c0fa9', 17, '5083', '284648', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-16 05:00:06', '2020-09-16 05:00:06'),
	(258, 'TRX-34845f60f316c3a89', 16, '5083', '279565', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-16 05:00:06', '2020-09-16 05:00:06'),
	(259, 'TRX-10645f6252a4b8d9f', 11, '5083', '294814', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-17 06:00:04', '2020-09-17 06:00:04'),
	(260, 'TRX-19505f6252a4bd575', 9, '5083', '289731', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-17 06:00:04', '2020-09-17 06:00:04'),
	(261, 'TRX-84765f6252a4c0ab3', 17, '5083', '289731', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-17 06:00:04', '2020-09-17 06:00:04'),
	(262, 'TRX-24015f6252a4c4688', 16, '5083', '284648', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-17 06:00:04', '2020-09-17 06:00:04'),
	(263, 'TRX-98605f63a425655a4', 11, '5083', '299897', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-18 06:00:05', '2020-09-18 06:00:05'),
	(264, 'TRX-32075f63a425e9a30', 9, '5083', '294814', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-18 06:00:05', '2020-09-18 06:00:05'),
	(265, 'TRX-54105f63a425ecc6e', 17, '5083', '294814', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-18 06:00:05', '2020-09-18 06:00:05'),
	(266, 'TRX-57595f63a425f11d9', 16, '5083', '289731', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-18 06:00:05', '2020-09-18 06:00:05'),
	(267, 'TRX-95855f676e74055ad', 11, '5083', '304980', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-21 03:00:04', '2020-09-21 03:00:04'),
	(268, 'TRX-37195f676e740bc88', 9, '5083', '299897', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-21 03:00:04', '2020-09-21 03:00:04'),
	(269, 'TRX-26925f676e740fea2', 17, '5083', '299897', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-21 03:00:04', '2020-09-21 03:00:04'),
	(270, 'TRX-36045f676e74129ef', 16, '5083', '294814', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-21 03:00:04', '2020-09-21 03:00:04'),
	(271, 'TRX-21885f68bff52de35', 11, '5083', '310063', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-22 03:00:05', '2020-09-22 03:00:05'),
	(272, 'TRX-70585f68bff531243', 9, '5083', '304980', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-22 03:00:05', '2020-09-22 03:00:05'),
	(273, 'TRX-81495f68bff53627f', 17, '5083', '304980', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-22 03:00:05', '2020-09-22 03:00:05'),
	(274, 'TRX-46975f68bff53b395', 16, '5083', '299897', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-22 03:00:05', '2020-09-22 03:00:05'),
	(275, 'TRX-50095f6a1176a5fd7', 11, '5083', '315146', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-23 03:00:06', '2020-09-23 03:00:06'),
	(276, 'TRX-47555f6a1176a96db', 9, '5083', '310063', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-23 03:00:06', '2020-09-23 03:00:06'),
	(277, 'TRX-93155f6a1176abcb4', 17, '5083', '310063', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-23 03:00:06', '2020-09-23 03:00:06'),
	(278, 'TRX-45405f6a1176ae161', 16, '5083', '304980', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-23 03:00:06', '2020-09-23 03:00:06'),
	(279, 'TRX-88955f6b7106743ff', 11, '5083', '320229', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-24 04:00:06', '2020-09-24 04:00:06'),
	(280, 'TRX-61205f6b71067d09d', 9, '5083', '315146', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-24 04:00:06', '2020-09-24 04:00:06'),
	(281, 'TRX-12865f6b7106808a2', 17, '5083', '315146', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-24 04:00:06', '2020-09-24 04:00:06'),
	(282, 'TRX-52835f6b710683d81', 16, '5083', '310063', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-24 04:00:06', '2020-09-24 04:00:06'),
	(283, 'TRX-24065f6cc2887cda9', 11, '5083', '325312', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-25 04:00:08', '2020-09-25 04:00:08'),
	(284, 'TRX-54695f6cc2888345a', 9, '5083', '320229', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-25 04:00:08', '2020-09-25 04:00:08'),
	(285, 'TRX-50635f6cc2888793a', 17, '5083', '320229', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-25 04:00:08', '2020-09-25 04:00:08'),
	(286, 'TRX-87745f6cc2888b992', 16, '5083', '315146', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-25 04:00:08', '2020-09-25 04:00:08'),
	(287, 'TRX-26085f70a8f7aefa8', 11, '5083', '330395', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-28 03:00:07', '2020-09-28 03:00:07'),
	(288, 'TRX-20735f70a8f7b5215', 9, '5083', '325312', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-28 03:00:07', '2020-09-28 03:00:07'),
	(289, 'TRX-46305f70a8f7b964c', 17, '5083', '325312', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-28 03:00:07', '2020-09-28 03:00:07'),
	(290, 'TRX-48015f70a8f7bf42d', 16, '5083', '320229', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-28 03:00:07', '2020-09-28 03:00:07'),
	(291, 'TRX-16125f720885b8cc2', 11, '5083', '335478', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-29 04:00:05', '2020-09-29 04:00:05'),
	(292, 'TRX-88765f720885bd244', 9, '5083', '330395', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-29 04:00:05', '2020-09-29 04:00:05'),
	(293, 'TRX-71725f720885c048a', 17, '5083', '330395', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-29 04:00:05', '2020-09-29 04:00:05'),
	(294, 'TRX-42825f720885c38ce', 16, '5083', '325312', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-29 04:00:05', '2020-09-29 04:00:05'),
	(295, 'TRX-95615f735a0770ee4', 11, '5083', '340561', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-30 04:00:07', '2020-09-30 04:00:07'),
	(296, 'TRX-83365f735a077555a', 9, '5083', '335478', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-30 04:00:07', '2020-09-30 04:00:07'),
	(297, 'TRX-69565f735a0779018', 17, '5083', '335478', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-30 04:00:07', '2020-09-30 04:00:07'),
	(298, 'TRX-31005f735a077efba', 16, '5083', '330395', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-30 04:00:07', '2020-09-30 04:00:07'),
	(299, 'TRX-60175f74b9946f4f2', 11, '5083', '345644', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-01 05:00:04', '2020-10-01 05:00:04'),
	(300, 'TRX-61505f74b994745fe', 9, '5083', '340561', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-01 05:00:04', '2020-10-01 05:00:04'),
	(301, 'TRX-55975f74b994787e3', 17, '5083', '340561', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-01 05:00:04', '2020-10-01 05:00:04'),
	(302, 'TRX-23035f74b9947e799', 16, '5083', '335478', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-01 05:00:04', '2020-10-01 05:00:04'),
	(303, 'TRX-88315f760b1ca12b6', 11, '5083', '350727', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-02 05:00:12', '2020-10-02 05:00:12'),
	(304, 'TRX-35385f760b1ca4742', 9, '5083', '345644', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-02 05:00:12', '2020-10-02 05:00:12'),
	(305, 'TRX-44385f760b1ca751b', 17, '5083', '345644', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-02 05:00:12', '2020-10-02 05:00:12'),
	(306, 'TRX-93205f760b1cab083', 16, '5083', '340561', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-02 05:00:12', '2020-10-02 05:00:12'),
	(307, 'TRX-54155f79e375a5a8e', 11, '5083', '355810', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-05 03:00:05', '2020-10-05 03:00:05'),
	(308, 'TRX-96505f79e375aa244', 9, '5083', '350727', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-05 03:00:05', '2020-10-05 03:00:05'),
	(309, 'TRX-42255f79e375acdca', 17, '5083', '350727', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-05 03:00:05', '2020-10-05 03:00:05'),
	(310, 'TRX-85935f79e375af0c2', 16, '5083', '345644', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-05 03:00:05', '2020-10-05 03:00:05'),
	(311, 'TRX-33335f7b34f6bb436', 11, '5083', '360893', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-06 03:00:06', '2020-10-06 03:00:06'),
	(312, 'TRX-52955f7b34f6cdb21', 9, '5083', '355810', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-06 03:00:06', '2020-10-06 03:00:06'),
	(313, 'TRX-94295f7b34f6d2b74', 17, '5083', '355810', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-06 03:00:06', '2020-10-06 03:00:06'),
	(314, 'TRX-51065f7b34f6d7782', 16, '5083', '350727', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-06 03:00:06', '2020-10-06 03:00:06'),
	(318, NULL, 9, '-355810', '0', 'Withdraw Via 銀行振り込み', '0', 0, '2020-10-06 07:32:22', '2020-10-06 07:32:22'),
	(319, 'TRX-33285f7bf9d776b19', 9, '5083', '5083', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-06 17:00:07', '2020-10-06 17:00:07'),
	(320, 'TRX-80075f7c8679b6dc0', 11, '5083', '365976', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-07 03:00:09', '2020-10-07 03:00:09'),
	(321, 'TRX-67435f7c8679bd786', 17, '5083', '360893', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-07 03:00:09', '2020-10-07 03:00:09'),
	(322, 'TRX-66525f7c8679c3011', 16, '5083', '355810', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-07 03:00:09', '2020-10-07 03:00:09'),
	(323, 'TRX-14245f7d59685cc9e', 9, '5083', '10166', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-07 18:00:08', '2020-10-07 18:00:08'),
	(324, 'TRX-59295f7dd7fa4ef66', 11, '5083', '371059', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-08 03:00:10', '2020-10-08 03:00:10'),
	(325, 'TRX-48595f7dd7fa549e6', 17, '5083', '365976', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-08 03:00:10', '2020-10-08 03:00:10'),
	(326, 'TRX-58595f7dd7fa591fd', 16, '5083', '360893', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-08 03:00:10', '2020-10-08 03:00:10'),
	(328, 'TRX-73645f7eab10dae8b', 9, '5083', '15249', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-08 18:00:48', '2020-10-08 18:00:48'),
	(329, 'TRX-66285f7f378820ac5', 11, '5083', '376142', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-09 04:00:08', '2020-10-09 04:00:08'),
	(330, 'TRX-53185f7f378825dfd', 17, '5083', '371059', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-09 04:00:08', '2020-10-09 04:00:08'),
	(331, 'TRX-26515f7f378830bfe', 16, '5083', '365976', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-09 04:00:08', '2020-10-09 04:00:08'),
	(332, 'TRX-73205f800a76145ce', 9, '5083', '20332', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-09 19:00:06', '2020-10-09 19:00:06'),
	(333, 'TRX-57425f831df921517', 11, '5083', '381225', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-12 03:00:09', '2020-10-12 03:00:09'),
	(334, 'TRX-88195f831df92a278', 9, '5083', '25415', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-12 03:00:09', '2020-10-12 03:00:09'),
	(335, 'TRX-36785f831df92e42a', 17, '5083', '376142', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-12 03:00:09', '2020-10-12 03:00:09'),
	(336, 'TRX-68095f831df9316ed', 16, '5083', '371059', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-12 03:00:09', '2020-10-12 03:00:09'),
	(337, 'TRX-16175f847d868725c', 11, '5083', '386308', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-13 04:00:06', '2020-10-13 04:00:06'),
	(338, 'TRX-64525f847d868b4ef', 9, '5083', '30498', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-13 04:00:06', '2020-10-13 04:00:06'),
	(339, 'TRX-78455f847d868d9b6', 17, '5083', '381225', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-13 04:00:06', '2020-10-13 04:00:06'),
	(340, 'TRX-68245f847d868fdb4', 16, '5083', '376142', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-13 04:00:06', '2020-10-13 04:00:06'),
	(341, 'TRX-83965f85dd156c861', 11, '5083', '391391', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-14 05:00:05', '2020-10-14 05:00:05'),
	(342, 'TRX-52425f85dd1572a6f', 9, '5083', '35581', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-14 05:00:05', '2020-10-14 05:00:05'),
	(343, 'TRX-54915f85dd1577e11', 17, '5083', '386308', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-14 05:00:05', '2020-10-14 05:00:05'),
	(344, 'TRX-53555f85dd157d41e', 16, '5083', '381225', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-14 05:00:05', '2020-10-14 05:00:05'),
	(345, 'TRX-39565f872e95819c2', 11, '5083', '396474', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-15 05:00:05', '2020-10-15 05:00:05'),
	(346, 'TRX-85375f872e95877fb', 9, '5083', '40664', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-15 05:00:05', '2020-10-15 05:00:05'),
	(347, 'TRX-51625f872e958ad88', 17, '5083', '391391', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-15 05:00:05', '2020-10-15 05:00:05'),
	(348, 'TRX-99665f872e958ea67', 16, '5083', '386308', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-15 05:00:05', '2020-10-15 05:00:05'),
	(349, 'TRX-25385f888e255c93a', 11, '5083', '401557', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-16 06:00:05', '2020-10-16 06:00:05'),
	(350, 'TRX-73515f888e2560081', 9, '5083', '45747', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-16 06:00:05', '2020-10-16 06:00:05'),
	(351, 'TRX-66885f888e2563cf0', 17, '5083', '396474', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-16 06:00:05', '2020-10-16 06:00:05'),
	(352, 'TRX-43725f888e25672ec', 16, '5083', '391391', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-16 06:00:05', '2020-10-16 06:00:05'),
	(353, 'TRX-59955f8c58749d144', 11, '5083', '406640', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-19 03:00:04', '2020-10-19 03:00:04'),
	(354, 'TRX-10175f8c5874a0fc7', 9, '5083', '50830', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-19 03:00:04', '2020-10-19 03:00:04'),
	(355, 'TRX-31445f8c5874a39d2', 17, '5083', '401557', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-19 03:00:04', '2020-10-19 03:00:04'),
	(356, 'TRX-17665f8c5874a644a', 16, '5083', '396474', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-19 03:00:04', '2020-10-19 03:00:04'),
	(357, 'TRX-53685f8da9f457106', 11, '5083', '411723', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-20 03:00:04', '2020-10-20 03:00:04'),
	(358, 'TRX-60605f8da9f45b99b', 9, '5083', '55913', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-20 03:00:04', '2020-10-20 03:00:04'),
	(359, 'TRX-54865f8da9f45ec59', 17, '5083', '406640', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-20 03:00:04', '2020-10-20 03:00:04'),
	(360, 'TRX-60835f8da9f463729', 16, '5083', '401557', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-20 03:00:04', '2020-10-20 03:00:04'),
	(361, 'TRX-65755f8efb7460533', 11, '5083', '416806', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-21 03:00:04', '2020-10-21 03:00:04'),
	(362, 'TRX-70905f8efb74640b3', 9, '5083', '60996', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-21 03:00:04', '2020-10-21 03:00:04'),
	(363, 'TRX-93145f8efb7466ff0', 17, '5083', '411723', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-21 03:00:04', '2020-10-21 03:00:04'),
	(364, 'TRX-48895f8efb746a9ee', 16, '5083', '406640', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-21 03:00:04', '2020-10-21 03:00:04'),
	(365, 'TRX-63095f904cf69b5a7', 11, '5083', '421889', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-22 03:00:06', '2020-10-22 03:00:06'),
	(366, 'TRX-11735f904cf6a079a', 9, '5083', '66079', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-22 03:00:06', '2020-10-22 03:00:06'),
	(367, 'TRX-72745f904cf6a7784', 17, '5083', '416806', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-22 03:00:06', '2020-10-22 03:00:06'),
	(368, 'TRX-18685f904cf6ab2f7', 16, '5083', '411723', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-22 03:00:06', '2020-10-22 03:00:06'),
	(369, 'TRX-18335f91ac847b98b', 11, '5083', '426972', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-23 04:00:04', '2020-10-23 04:00:04'),
	(370, 'TRX-40825f91ac8480e98', 9, '5083', '71162', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-23 04:00:04', '2020-10-23 04:00:04'),
	(371, 'TRX-62015f91ac84847d4', 17, '5083', '421889', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-23 04:00:04', '2020-10-23 04:00:04'),
	(372, 'TRX-43365f91ac8487dac', 16, '5083', '416806', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-23 04:00:04', '2020-10-23 04:00:04'),
	(373, 'TRX-76485f9592f4ef942', 11, '5083', '432055', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-26 03:00:04', '2020-10-26 03:00:04'),
	(374, 'TRX-34575f9592f4f3cff', 9, '5083', '76245', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-26 03:00:04', '2020-10-26 03:00:04'),
	(375, 'TRX-71275f9592f5028d5', 17, '5083', '426972', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-26 03:00:05', '2020-10-26 03:00:05'),
	(376, 'TRX-78775f9592f5066b2', 16, '5083', '421889', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-26 03:00:05', '2020-10-26 03:00:05'),
	(377, 'TRX-19585f96e474ecbe0', 11, '5083', '437138', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-27 03:00:04', '2020-10-27 03:00:04'),
	(378, 'TRX-12075f96e474f162b', 9, '5083', '81328', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-27 03:00:04', '2020-10-27 03:00:04'),
	(379, 'TRX-96545f96e474f418d', 17, '5083', '432055', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-27 03:00:05', '2020-10-27 03:00:05'),
	(380, 'TRX-16875f96e475028ea', 16, '5083', '426972', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-27 03:00:05', '2020-10-27 03:00:05'),
	(381, 'TRX-42355f9835f65e5c5', 11, '5083', '442221', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-28 03:00:06', '2020-10-28 03:00:06'),
	(382, 'TRX-62205f9835f66377b', 9, '5083', '86411', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-28 03:00:06', '2020-10-28 03:00:06'),
	(383, 'TRX-51605f9835f669631', 17, '5083', '437138', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-28 03:00:06', '2020-10-28 03:00:06'),
	(384, 'TRX-74195f9835f66e50b', 16, '5083', '432055', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-28 03:00:06', '2020-10-28 03:00:06'),
	(385, 'TRX-81785f9987756fbb0', 11, '5083', '447304', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-29 03:00:05', '2020-10-29 03:00:05'),
	(386, 'TRX-35435f9987774bef1', 9, '5083', '91494', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-29 03:00:07', '2020-10-29 03:00:07'),
	(387, 'TRX-52755f99877750f2f', 17, '5083', '442221', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-29 03:00:07', '2020-10-29 03:00:07'),
	(388, 'TRX-80895f99877756f9e', 16, '5083', '437138', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-29 03:00:07', '2020-10-29 03:00:07'),
	(389, 'TRX-27055f9ad8f61e151', 11, '5083', '452387', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-30 03:00:06', '2020-10-30 03:00:06'),
	(390, 'TRX-90065f9ad8f624f8c', 9, '5083', '96577', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-30 03:00:06', '2020-10-30 03:00:06'),
	(391, 'TRX-49945f9ad8f628e76', 17, '5083', '447304', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-30 03:00:06', '2020-10-30 03:00:06'),
	(392, 'TRX-56505f9ad8f62fa10', 16, '5083', '442221', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-30 03:00:06', '2020-10-30 03:00:06'),
	(393, 'TRX-73325f9ecd74b04d6', 11, '5083', '457470', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-02 03:00:04', '2020-11-02 03:00:04'),
	(394, 'TRX-33245f9ecd74b4e01', 9, '5083', '101660', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-02 03:00:04', '2020-11-02 03:00:04'),
	(395, 'TRX-26365f9ecd74b941d', 17, '5083', '452387', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-02 03:00:04', '2020-11-02 03:00:04'),
	(396, 'TRX-76715f9ecd74bee29', 16, '5083', '447304', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-02 03:00:04', '2020-11-02 03:00:04'),
	(397, 'TRX-71205fa01ef5b177c', 11, '5083', '462553', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-03 03:00:05', '2020-11-03 03:00:05'),
	(398, 'TRX-94155fa01ef5b64e2', 9, '5083', '106743', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-03 03:00:05', '2020-11-03 03:00:05'),
	(399, 'TRX-50005fa01ef5b9466', 17, '5083', '457470', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-03 03:00:05', '2020-11-03 03:00:05'),
	(400, 'TRX-41185fa01ef5bc3b5', 16, '5083', '452387', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-03 03:00:05', '2020-11-03 03:00:05'),
	(401, 'TRX-90745fa17075c9396', 11, '5083', '467636', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-04 03:00:05', '2020-11-04 03:00:05'),
	(402, 'TRX-16245fa17075d039b', 9, '5083', '111826', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-04 03:00:05', '2020-11-04 03:00:05'),
	(403, 'TRX-70995fa17075d81d1', 17, '5083', '462553', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-04 03:00:05', '2020-11-04 03:00:05'),
	(404, 'TRX-41425fa17075de41e', 16, '5083', '457470', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-04 03:00:05', '2020-11-04 03:00:05'),
	(405, 'TRX-40475fa2c1f5be579', 11, '5083', '472719', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-05 03:00:05', '2020-11-05 03:00:05'),
	(406, 'TRX-64875fa2c1f5c4e81', 9, '5083', '116909', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-05 03:00:05', '2020-11-05 03:00:05'),
	(407, 'TRX-40305fa2c1f5c9666', 17, '5083', '467636', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-05 03:00:05', '2020-11-05 03:00:05'),
	(408, 'TRX-63615fa2c1f5cdb0f', 16, '5083', '462553', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-05 03:00:05', '2020-11-05 03:00:05'),
	(409, 'TRX-57805fa421859bcbf', 11, '5083', '477802', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-06 04:00:05', '2020-11-06 04:00:05'),
	(410, 'TRX-86815fa42185a0832', 9, '5083', '121992', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-06 04:00:05', '2020-11-06 04:00:05'),
	(411, 'TRX-75905fa42185a4630', 17, '5083', '472719', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-06 04:00:05', '2020-11-06 04:00:05'),
	(412, 'TRX-48335fa42185a843c', 16, '5083', '467636', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-06 04:00:05', '2020-11-06 04:00:05'),
	(413, 'TRX-44605fa807f7cc080', 11, '5083', '482885', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-09 03:00:07', '2020-11-09 03:00:07'),
	(414, 'TRX-94825fa807f7d933d', 9, '5083', '127075', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-09 03:00:07', '2020-11-09 03:00:07'),
	(415, 'TRX-40375fa807f7dc5ee', 17, '5083', '477802', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-09 03:00:07', '2020-11-09 03:00:07'),
	(416, 'TRX-65055fa807f7df5aa', 16, '5083', '472719', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-09 03:00:07', '2020-11-09 03:00:07'),
	(417, 'TRX-34245fa96784e92a5', 11, '5083', '487968', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-10 04:00:04', '2020-11-10 04:00:04'),
	(418, 'TRX-88945fa96784ebe57', 9, '5083', '132158', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-10 04:00:04', '2020-11-10 04:00:04'),
	(419, 'TRX-49405fa96784eecbe', 17, '5083', '482885', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-10 04:00:04', '2020-11-10 04:00:04'),
	(420, 'TRX-71705fa96784f2669', 16, '5083', '477802', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-10 04:00:04', '2020-11-10 04:00:04'),
	(421, 'TRX-74725faab90794923', 11, '5083', '493051', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-11 04:00:07', '2020-11-11 04:00:07'),
	(422, 'TRX-54615faab9079afd7', 9, '5083', '137241', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-11 04:00:07', '2020-11-11 04:00:07'),
	(423, 'TRX-90815faab9079f2bd', 17, '5083', '487968', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-11 04:00:07', '2020-11-11 04:00:07'),
	(424, 'TRX-80145faab907a366b', 16, '5083', '482885', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-11 04:00:07', '2020-11-11 04:00:07'),
	(425, 'TRX-67985fac0a897e715', 11, '5083', '498134', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-12 04:00:09', '2020-11-12 04:00:09'),
	(426, 'TRX-72225fac0a8982253', 9, '5083', '142324', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-12 04:00:09', '2020-11-12 04:00:09'),
	(427, 'TRX-51795fac0a898485c', 17, '5083', '493051', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-12 04:00:09', '2020-11-12 04:00:09'),
	(428, 'TRX-73045fac0a8986f1e', 16, '5083', '487968', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-12 04:00:09', '2020-11-12 04:00:09'),
	(429, 'TRX-73135fad6a144ea24', 11, '5083', '503217', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-13 05:00:04', '2020-11-13 05:00:04'),
	(430, 'TRX-36455fad6a145441b', 9, '5083', '147407', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-13 05:00:04', '2020-11-13 05:00:04'),
	(431, 'TRX-43725fad6a1458f84', 17, '5083', '498134', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-13 05:00:04', '2020-11-13 05:00:04'),
	(432, 'TRX-91705fad6a145e4a1', 16, '5083', '493051', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-13 05:00:04', '2020-11-13 05:00:04'),
	(433, 'TRX-91305fb142740925e', 11, '5083', '508300', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-16 03:00:04', '2020-11-16 03:00:04'),
	(434, 'TRX-24305fb14274132ff', 9, '5083', '152490', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-16 03:00:04', '2020-11-16 03:00:04'),
	(435, 'TRX-92115fb1427418409', 17, '5083', '503217', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-16 03:00:04', '2020-11-16 03:00:04'),
	(436, 'TRX-62785fb142741ce92', 16, '5083', '498134', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-16 03:00:04', '2020-11-16 03:00:04'),
	(437, 'TRX-44235fb293f621615', 11, '5083', '513383', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-17 03:00:06', '2020-11-17 03:00:06'),
	(438, 'TRX-53765fb293f62a75e', 9, '5083', '157573', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-17 03:00:06', '2020-11-17 03:00:06'),
	(439, 'TRX-39605fb293f630d4b', 17, '5083', '508300', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-17 03:00:06', '2020-11-17 03:00:06'),
	(440, 'TRX-38915fb293f63a64d', 16, '5083', '503217', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-17 03:00:06', '2020-11-17 03:00:06'),
	(441, 'TRX-30155fb3f38786929', 11, '5083', '518466', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-18 04:00:07', '2020-11-18 04:00:07'),
	(442, 'TRX-66785fb3f3878ad70', 9, '5083', '162656', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-18 04:00:07', '2020-11-18 04:00:07'),
	(443, 'TRX-80355fb3f3878d475', 17, '5083', '513383', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-18 04:00:07', '2020-11-18 04:00:07'),
	(444, 'TRX-96575fb3f3878f7cd', 16, '5083', '508300', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-18 04:00:07', '2020-11-18 04:00:07'),
	(445, 'TRX-77765fb54507bd5ea', 11, '5083', '523549', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-19 04:00:07', '2020-11-19 04:00:07'),
	(446, 'TRX-74725fb54507c30ff', 9, '5083', '167739', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-19 04:00:07', '2020-11-19 04:00:07'),
	(447, 'TRX-34815fb54507c7422', 17, '5083', '518466', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-19 04:00:07', '2020-11-19 04:00:07'),
	(448, 'TRX-83575fb54507cac4a', 16, '5083', '513383', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-19 04:00:07', '2020-11-19 04:00:07'),
	(449, 'TRX-90725fb696894ec75', 11, '5083', '528632', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-20 04:00:09', '2020-11-20 04:00:09'),
	(450, 'TRX-86875fb6968955d94', 9, '5083', '172822', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-20 04:00:09', '2020-11-20 04:00:09'),
	(451, 'TRX-58235fb696895aaeb', 17, '5083', '523549', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-20 04:00:09', '2020-11-20 04:00:09'),
	(452, 'TRX-46945fb696895fb68', 16, '5083', '518466', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-20 04:00:09', '2020-11-20 04:00:09'),
	(453, 'TRX-32635fba7cf5d74ca', 11, '5083', '533715', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-23 03:00:05', '2020-11-23 03:00:05'),
	(454, 'TRX-78565fba7cf5db2e3', 9, '5083', '177905', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-23 03:00:05', '2020-11-23 03:00:05'),
	(455, 'TRX-80865fba7cf5dddc5', 17, '5083', '528632', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-23 03:00:05', '2020-11-23 03:00:05'),
	(456, 'TRX-41415fba7cf5e0562', 16, '5083', '523549', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-23 03:00:05', '2020-11-23 03:00:05'),
	(457, 'TRX-42645fbbce7661526', 11, '5083', '538798', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-24 03:00:06', '2020-11-24 03:00:06'),
	(458, 'TRX-97705fbbce7668ff9', 9, '5083', '182988', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-24 03:00:06', '2020-11-24 03:00:06'),
	(459, 'TRX-78065fbbce7673689', 17, '5083', '533715', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-24 03:00:06', '2020-11-24 03:00:06'),
	(460, 'TRX-36405fbbce7677a75', 16, '5083', '528632', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-24 03:00:06', '2020-11-24 03:00:06'),
	(461, 'TRX-53255fbd2e03e5ace', 11, '5083', '543881', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-25 04:00:03', '2020-11-25 04:00:03'),
	(462, 'TRX-81365fbd2e03e9db2', 9, '5083', '188071', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-25 04:00:03', '2020-11-25 04:00:03'),
	(463, 'TRX-27315fbd2e03ed1ea', 17, '5083', '538798', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-25 04:00:03', '2020-11-25 04:00:03'),
	(464, 'TRX-50425fbd2e03f01e7', 16, '5083', '533715', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-25 04:00:03', '2020-11-25 04:00:03'),
	(465, 'TRX-2455', 4, '-299000', '351000', 'Invested On Present', '0', 0, '2020-11-24 20:08:50', '2020-11-24 20:08:50'),
	(466, 'TRX-20455fbe7f88bd31c', 11, '5083', '548964', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-26 04:00:08', '2020-11-26 04:00:08'),
	(467, 'TRX-29205fbe7f88c2b73', 9, '5083', '193154', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-26 04:00:08', '2020-11-26 04:00:08'),
	(468, 'TRX-48645fbe7f88c56ce', 17, '5083', '543881', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-26 04:00:08', '2020-11-26 04:00:08'),
	(469, 'TRX-44085fbe7f88cc652', 16, '5083', '538798', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-26 04:00:08', '2020-11-26 04:00:08'),
	(470, 'TRX-67525fbfdf14ef69b', 11, '5083', '554047', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-27 05:00:04', '2020-11-27 05:00:04'),
	(471, 'TRX-69985fbfdf14f4076', 9, '5083', '198237', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-27 05:00:05', '2020-11-27 05:00:05'),
	(472, 'TRX-72595fbfdf1502c5b', 17, '5083', '548964', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-27 05:00:05', '2020-11-27 05:00:05'),
	(473, 'TRX-90955fbfdf1505514', 16, '5083', '543881', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-27 05:00:05', '2020-11-27 05:00:05'),
	(474, 'TRX-98585fc3b77654065', 11, '5083', '559130', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-30 03:00:06', '2020-11-30 03:00:06'),
	(475, 'TRX-78245fc3b776634f4', 9, '5083', '203320', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-30 03:00:06', '2020-11-30 03:00:06'),
	(476, 'TRX-30825fc3b77666fc8', 17, '5083', '554047', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-30 03:00:06', '2020-11-30 03:00:06'),
	(477, 'TRX-97175fc3b77669d69', 16, '5083', '548964', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-30 03:00:06', '2020-11-30 03:00:06'),
	(478, 'TRX-77685fc53326070f0', 11, '5083', '564213', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-12-01 03:00:06', '2020-12-01 03:00:06'),
	(479, 'TRX-87035fc5332608d42', 9, '5083', '208403', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-12-01 03:00:06', '2020-12-01 03:00:06'),
	(480, 'TRX-81775fc533260c18a', 17, '5083', '559130', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-12-01 03:00:06', '2020-12-01 03:00:06'),
	(481, 'TRX-87155fc533260dc23', 16, '5083', '554047', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-12-01 03:00:06', '2020-12-01 03:00:06'),
	(482, 'TRX-54485fc692b185b0b', 11, '5083', '569296', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-12-02 04:00:01', '2020-12-02 04:00:01'),
	(483, 'TRX-31495fc692b1876cd', 9, '5083', '213486', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-12-02 04:00:01', '2020-12-02 04:00:01'),
	(484, 'TRX-83475fc692b189f62', 17, '5083', '564213', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-12-02 04:00:01', '2020-12-02 04:00:01'),
	(485, 'TRX-17505fc692b18ba41', 16, '5083', '559130', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-12-02 04:00:01', '2020-12-02 04:00:01'),
	(486, 'TRX-2507', 1, '-299000', '0', 'Invested On Present', '0', 0, '2021-03-05 03:30:37', '2021-03-05 03:30:37'),
	(487, 'TRX-8734', 1, '-299000', '-299000', 'Invested On Present', '0', 0, '2021-03-12 21:22:09', '2021-03-12 21:22:09'),
	(488, 'TRX-4799', 1, '-299000', '-598000', 'Invested On Present', '0', 0, '2021-03-12 21:37:23', '2021-03-12 21:37:23'),
	(489, 'TRX-7404', 1, '-299000', '-897000', 'Invested On Present', '0', 0, '2021-03-12 21:38:13', '2021-03-12 21:38:13'),
	(490, 'TRX-6134', 1, '-299000', '-1196000', 'Invested On Present', '0', 0, '2021-03-12 21:39:38', '2021-03-12 21:39:38'),
	(491, 'TRX-8751', 1, '-299000', '-1495000', 'Invested On Present', '0', 0, '2021-03-12 21:47:22', '2021-03-12 21:47:22'),
	(492, 'TRX-6517', 1, '-299000', '-1794000', 'Invested On Present', '0', 0, '2021-03-12 21:48:13', '2021-03-12 21:48:13'),
	(493, 'TRX-8874', 1, '-299000', '-2093000', 'Invested On Present', '0', 0, '2021-03-12 21:48:54', '2021-03-12 21:48:54'),
	(494, 'TRX-5647', 1, '-299000', '411111111', 'Invested On Present', '0', 0, '2021-03-12 22:11:17', '2021-03-12 22:11:17'),
	(495, 'TRX-6443', 1, '-299000', '410812111', 'Invested On Present', '0', 0, '2021-03-12 22:13:10', '2021-03-12 22:13:10'),
	(496, 'TRX-5035', 1, '-299000', '410513111', 'Invested On Present', '0', 0, '2021-03-12 22:13:13', '2021-03-12 22:13:13'),
	(497, 'TRX-3002', 1, '-299000', '410214111', 'Invested On Present', '0', 0, '2021-03-12 22:13:55', '2021-03-12 22:13:55'),
	(498, 'TRX-8843', 1, '-299000', '0', 'Invested On Present', '0', 0, '2021-03-12 22:17:57', '2021-03-12 22:17:57'),
	(499, 'TRX-2820', 1, '-299000', '409915111', 'Invested On Present', '0', 0, '2021-03-12 23:03:49', '2021-03-12 23:03:49'),
	(500, 'TRX-4204', 1, '-299000', '409616111', 'Invested On Present', '0', 0, '2021-03-13 05:22:55', '2021-03-13 05:22:55'),
	(501, 'TRX-6834', 1, '-299000', '409317111', 'Invested On GIFT', '0', 0, '2021-03-15 04:22:16', '2021-03-15 04:22:16'),
	(502, 'TRX-3629', 1, '-99000', '409018111', 'Invested On Charity', '0', 0, '2021-03-16 03:47:42', '2021-03-16 03:47:42'),
	(503, 'TRX-5972', 1, '-99000', '408919111', 'Invested On Charity', '0', 0, '2021-03-16 03:48:20', '2021-03-16 03:48:20'),
	(504, 'TRX-3247', 1, '-99000', '408820111', 'Invested On Charity', '0', 0, '2021-03-16 03:49:37', '2021-03-16 03:49:37'),
	(505, 'SL9p91CyXWwIDRFN', 2, '100', '100', 'Deposit Request Approved & Balance Added', '0', 0, '2021-03-16 04:39:36', '2021-03-16 04:39:36'),
	(506, NULL, 2, '-100', '0', 'Balance Subtract Via Admin', '0', 0, '2021-03-16 05:02:59', '2021-03-16 05:02:59'),
	(507, NULL, 1, '100', '-298900', 'Balance Added Via Admin', '0', 0, '2021-03-16 05:06:11', '2021-03-16 05:06:11'),
	(508, NULL, 2, '100', '100', 'Balance Added Via Admin', '0', 0, '2021-03-16 05:19:36', '2021-03-16 05:19:36'),
	(509, 'wJMI6KWr6tc17NEF', 1, '100', '100', 'Deposit viaCredit Card', '0', 0, '2021-03-18 19:09:33', '2021-03-18 19:09:33'),
	(510, 'TS1wPgnOrVQ6v7wx', 1, '300', '400', 'Deposit viaCredit Card', '0', 0, '2021-03-18 19:11:04', '2021-03-18 19:11:04'),
	(511, 'Dzh5CGD5Lak5NdUf', 1, '300', '700', 'Deposit viaCredit Card', '0', 0, '2021-03-18 20:07:51', '2021-03-18 20:07:51'),
	(512, 'TRX-5798', 1, '-100', '589', 'Balance Transfer To asim rafiq', '11', 0, '2021-03-25 17:42:55', '2021-03-25 17:42:55'),
	(513, 'TRX-5991', 1, '-100', '589', 'Balance Transfer To asim rafiq', '11', 0, '2021-03-25 17:43:02', '2021-03-25 17:43:02');
/*!40000 ALTER TABLE `transections` ENABLE KEYS */;

-- Dumping structure for table lacura.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interest_balance` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `emailv` int(11) NOT NULL,
  `smsv` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `vsent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vercode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tauth` int(11) NOT NULL DEFAULT '0',
  `tfver` int(11) NOT NULL DEFAULT '1',
  `secretcode` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_time` datetime DEFAULT NULL,
  `nickname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'jp',
  `personal_document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfie_document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_used` bigint(20) unsigned DEFAULT '0',
  `dob` datetime DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE,
  UNIQUE KEY `users_username_unique` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `ref_id`, `name`, `email`, `mobile`, `country`, `username`, `password`, `balance`, `interest_balance`, `emailv`, `smsv`, `status`, `vsent`, `vercode`, `remember_token`, `provider`, `provider_id`, `tauth`, `tfver`, `secretcode`, `created_at`, `updated_at`, `image`, `login_time`, `nickname`, `lang`, `personal_document`, `selfie_document`, `credit_used`, `dob`, `address`) VALUES
	(1, 0, 'Asim', 'asimrafique11@yahoo.com', '030746409751', 'Pakistan', 'asimrafique11@yahoo.com', '$2y$10$fIqiVxBxLZy8e9wKhye/1exR9yloGAjlLodO3Eky.9n1GBnTqKWQi', '589', '0', 1, 1, 1, NULL, NULL, 'ATC0BOnXO1CEbOL1qFXXHTfZmwJj0IAuKmk7GtOf5kHJyhrOHek45SKJ9ak4', NULL, NULL, 0, 1, NULL, '2021-03-22 21:33:09', '2021-03-27 03:49:08', '605a0bb26fd671616513970.jpg', '2021-03-27 03:49:08', 'asim rafiq', 'ja', NULL, NULL, 0, '1994-12-25 00:00:00', NULL),
	(2, 1, 'asim rafiq', 'asimrafique11@yahoo.com11', '03055199051', 'Pakistan', '807456485', '$2y$10$R7KCQyntryCdLgWhl9uw5.b5zuduiqcgJoD7ROEnkyQAU0xBBHLaq', '200', '0', 1, 1, 1, '1615839160', '249216', NULL, NULL, NULL, 0, 1, NULL, '2021-03-16 04:32:14', '2021-03-25 17:43:07', '1615839539.png', '2021-03-22 21:34:04', 'asim rafiq', 'ja', NULL, NULL, 0, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table lacura.user_logins
CREATE TABLE IF NOT EXISTS `user_logins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.user_logins: ~24 rows (approximately)
/*!40000 ALTER TABLE `user_logins` DISABLE KEYS */;
REPLACE INTO `user_logins` (`id`, `user_id`, `user_ip`, `location`, `details`, `created_at`, `updated_at`, `long`, `lat`) VALUES
	(1, 1, '127.0.0.1', '', '', '2021-02-27 22:26:40', '2021-02-27 22:26:40', NULL, NULL),
	(2, 1, '127.0.0.1', '', '', '2021-02-28 03:53:34', '2021-02-28 03:53:34', NULL, NULL),
	(3, 1, '127.0.0.1', '', '', '2021-02-28 04:02:45', '2021-02-28 04:02:45', NULL, NULL),
	(4, 1, '127.0.0.1', '', '', '2021-02-28 05:50:52', '2021-02-28 05:50:52', NULL, NULL),
	(5, 1, '127.0.0.1', '', '', '2021-02-28 05:53:40', '2021-02-28 05:53:40', NULL, NULL),
	(6, 1, '127.0.0.1', '', '', '2021-02-28 05:56:58', '2021-02-28 05:56:58', NULL, NULL),
	(7, 1, '127.0.0.1', '', '', '2021-02-28 05:59:39', '2021-02-28 05:59:39', NULL, NULL),
	(8, 1, '127.0.0.1', '', '', '2021-02-28 06:10:04', '2021-02-28 06:10:04', NULL, NULL),
	(9, 1, '127.0.0.1', '', '', '2021-02-28 06:14:43', '2021-02-28 06:14:43', NULL, NULL),
	(10, 1, '127.0.0.1', '', '', '2021-02-28 06:18:34', '2021-02-28 06:18:34', NULL, NULL),
	(11, 1, '127.0.0.1', '', '', '2021-03-02 20:30:15', '2021-03-02 20:30:15', NULL, NULL),
	(12, 1, '127.0.0.1', '', '', '2021-03-03 04:13:16', '2021-03-03 04:13:16', NULL, NULL),
	(13, 1, '127.0.0.1', '', '', '2021-03-03 20:40:46', '2021-03-03 20:40:46', NULL, NULL),
	(14, 1, '127.0.0.1', '', '', '2021-03-05 03:19:24', '2021-03-05 03:19:24', NULL, NULL),
	(15, 1, '127.0.0.1', '', '', '2021-03-11 19:40:49', '2021-03-11 19:40:49', NULL, NULL),
	(16, 1, '127.0.0.1', '', '', '2021-03-11 22:50:49', '2021-03-11 22:50:49', NULL, NULL),
	(17, 1, '127.0.0.1', '', '', '2021-03-12 03:38:32', '2021-03-12 03:38:32', NULL, NULL),
	(18, 1, '127.0.0.1', '', '', '2021-03-12 06:35:39', '2021-03-12 06:35:39', NULL, NULL),
	(19, 1, '127.0.0.1', '', '', '2021-03-12 21:06:54', '2021-03-12 21:06:54', NULL, NULL),
	(20, 1, '127.0.0.1', '', '', '2021-03-13 05:19:42', '2021-03-13 05:19:42', NULL, NULL),
	(21, 1, '127.0.0.1', '', '', '2021-03-14 21:43:02', '2021-03-14 21:43:02', NULL, NULL),
	(22, 1, '127.0.0.1', '', '', '2021-03-14 23:31:05', '2021-03-14 23:31:05', NULL, NULL),
	(23, 1, '127.0.0.1', '', '', '2021-03-15 03:54:59', '2021-03-15 03:54:59', NULL, NULL),
	(24, 1, '127.0.0.1', '', '', '2021-03-15 23:12:50', '2021-03-15 23:12:50', NULL, NULL),
	(25, 1, '127.0.0.1', '', '', '2021-03-16 03:46:55', '2021-03-16 03:46:55', NULL, NULL),
	(26, 1, '127.0.0.1', '', '', '2021-03-16 18:59:27', '2021-03-16 18:59:27', NULL, NULL),
	(27, 1, '127.0.0.1', '', '', '2021-03-18 03:24:10', '2021-03-18 03:24:10', NULL, NULL),
	(28, 1, '127.0.0.1', '', '', '2021-03-18 15:53:44', '2021-03-18 15:53:44', NULL, NULL),
	(29, 1, '127.0.0.1', '', '', '2021-03-18 17:59:49', '2021-03-18 17:59:49', NULL, NULL),
	(30, 1, '127.0.0.1', '', '', '2021-03-18 21:51:39', '2021-03-18 21:51:39', NULL, NULL),
	(31, 1, '127.0.0.1', '', '', '2021-03-18 22:00:13', '2021-03-18 22:00:13', NULL, NULL),
	(32, 1, '127.0.0.1', '', '', '2021-03-19 04:39:40', '2021-03-19 04:39:40', NULL, NULL),
	(33, 1, '127.0.0.1', '', '', '2021-03-19 18:46:33', '2021-03-19 18:46:33', NULL, NULL),
	(34, 1, '127.0.0.1', '', '', '2021-03-20 02:35:04', '2021-03-20 02:35:04', NULL, NULL),
	(35, 1, '127.0.0.1', '', '', '2021-03-22 17:54:12', '2021-03-22 17:54:12', NULL, NULL),
	(36, 1, '127.0.0.1', '', '', '2021-03-23 01:14:42', '2021-03-23 01:14:42', NULL, NULL),
	(37, 1, '127.0.0.1', '', '', '2021-03-23 21:07:49', '2021-03-23 21:07:49', NULL, NULL),
	(38, 1, '127.0.0.1', '', '', '2021-03-24 22:49:28', '2021-03-24 22:49:28', NULL, NULL),
	(39, 1, '127.0.0.1', '', '', '2021-03-25 04:06:27', '2021-03-25 04:06:27', NULL, NULL),
	(40, 1, '127.0.0.1', '', '', '2021-03-25 17:32:41', '2021-03-25 17:32:41', NULL, NULL),
	(41, 1, '127.0.0.1', '', '', '2021-03-27 03:49:08', '2021-03-27 03:49:08', NULL, NULL);
/*!40000 ALTER TABLE `user_logins` ENABLE KEYS */;

-- Dumping structure for table lacura.withdraws
CREATE TABLE IF NOT EXISTS `withdraws` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `withdraw_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method_id` int(11) NOT NULL,
  `method_cur_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processing_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.withdraws: ~2 rows (approximately)
/*!40000 ALTER TABLE `withdraws` DISABLE KEYS */;
REPLACE INTO `withdraws` (`id`, `withdraw_id`, `user_id`, `amount`, `charge`, `method_id`, `method_cur_amount`, `processing_time`, `detail`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'WD-378567581', 9, '355810', '39139.1', 1, '316670.9', '3-10', 'ジャパンネット銀行 店番号　\r\n003 口口座番号　\r\n8357158 \r\nMARCOS SEIDI TOGASHI', 1, '2020-10-06 07:32:22', '2020-10-09 13:02:31'),
	(2, 'WD-280731806', 5, '100000', '11000', 1, '89000', '3-10', 'TESTE WILL', 1, '2020-10-08 02:08:07', '2021-03-16 05:21:25');
/*!40000 ALTER TABLE `withdraws` ENABLE KEYS */;

-- Dumping structure for table lacura.withdraw_methods
CREATE TABLE IF NOT EXISTS `withdraw_methods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_amo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_amo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chargefx` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chargepc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processing_day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.withdraw_methods: ~0 rows (approximately)
/*!40000 ALTER TABLE `withdraw_methods` DISABLE KEYS */;
REPLACE INTO `withdraw_methods` (`id`, `name`, `image`, `min_amo`, `max_amo`, `chargefx`, `chargepc`, `rate`, `processing_day`, `currency`, `status`, `created_at`, `updated_at`) VALUES
	(1, '銀行振り込み', '1566864185.jpg', '99000', '299000', '0', '11', '111', '3-10', 'JPY', 1, '2019-08-26 15:03:05', '2020-10-06 16:34:31');
/*!40000 ALTER TABLE `withdraw_methods` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
<<<<<<< HEAD
=======
-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for lacura
CREATE DATABASE IF NOT EXISTS `lacura` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `lacura`;

-- Dumping structure for table lacura.about_mes
CREATE TABLE IF NOT EXISTS `about_mes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filetype` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.about_mes: ~21 rows (approximately)
/*!40000 ALTER TABLE `about_mes` DISABLE KEYS */;
REPLACE INTO `about_mes` (`id`, `title`, `detail`, `filename`, `filetype`, `created_at`, `updated_at`) VALUES
	(39, NULL, 'Elisson Tadao Kushioyada nasceu em 30 de Julho de 1979 na cidade de Guaíra, estado do Paraná.', NULL, 0, '2019-08-28 13:48:23', '2019-08-28 13:48:23'),
	(40, NULL, 'Descendente de okinawa e israelense,', NULL, 0, '2019-08-28 13:48:39', '2019-08-28 13:48:39'),
	(41, NULL, 'passou a sua infância no sítio em contato com a natureza e ajudando os pais no trabalho rural.', NULL, 0, '2019-08-28 13:49:04', '2019-08-28 13:49:04'),
	(42, NULL, NULL, '5d6704fa295591567032570.jpg', 1, '2019-08-28 13:49:30', '2019-08-28 13:49:30'),
	(43, NULL, 'Aos 14 anos deixou o Brasil por motivos sociais e mudou-se para o Japão em 1994,', NULL, 0, '2019-08-28 13:55:48', '2019-08-28 13:55:48'),
	(44, NULL, 'no ano de 2006 aumentam as suas percepções e a transformação mental começou a acontecer no seu dia a dia  ficando cada vez mais forte,', NULL, 0, '2019-08-28 13:55:58', '2019-08-28 13:55:58'),
	(45, NULL, 'descobrindo então o Dom espiritual.', NULL, 0, '2019-08-28 13:56:06', '2019-08-28 13:56:06'),
	(46, NULL, NULL, '5d67073c0dcd21567033148.jpg', 1, '2019-08-28 13:59:08', '2019-08-28 13:59:08'),
	(47, NULL, 'Controlando a natureza e tudo que há vida,', NULL, 0, '2019-08-28 13:59:41', '2019-08-28 13:59:41'),
	(48, NULL, 'ordenando profecias e acontecimentos.', NULL, 0, '2019-08-28 14:00:20', '2019-08-28 14:00:20'),
	(49, NULL, 'Sempre em contato com a natureza,', NULL, 0, '2019-08-28 14:00:27', '2019-08-28 14:00:27'),
	(50, NULL, 'costumava ir às montanhas para se reunir com as luzes celestes.', NULL, 0, '2019-08-28 14:00:41', '2019-08-28 14:00:41'),
	(51, NULL, 'Nesses encontros ele obteve muitas experiências com a Luz da consistência da vida,', NULL, 0, '2019-08-28 14:00:51', '2019-08-28 14:00:51'),
	(52, NULL, 'onde se comunicava com as luzes divinas através de codificação espiritual “idioma inexistente”.', NULL, 0, '2019-08-28 14:00:59', '2019-08-28 14:00:59'),
	(53, NULL, 'E conseguiu se encontrar com os 4 Deuses mais importantes da natureza, Deus do fogo, Deus do vento, Deus da terra e o Deus da água.', NULL, 0, '2019-08-28 14:01:06', '2019-08-28 14:01:06'),
	(56, NULL, NULL, '5d67084e8ed831567033422.jpg', 1, '2019-08-28 14:03:42', '2019-08-28 14:03:42'),
	(57, NULL, 'Reconhecendo seu poder paranormal começou a exercer,', NULL, 0, '2019-08-28 14:03:55', '2019-08-28 14:03:55'),
	(58, NULL, 'ajudando a melhorar as condições de vida e saúde das pessoas, feita através do milagre da Alma.', NULL, 0, '2019-08-28 14:04:10', '2019-08-28 14:04:10'),
	(61, NULL, NULL, '5d6716426ea3f1567036994.jpg', 1, '2019-08-28 15:03:14', '2019-08-28 15:03:14'),
	(62, NULL, NULL, '5d671e9055ef31567039120.jpg', 1, '2019-08-28 15:38:40', '2019-08-28 15:38:40'),
	(63, NULL, NULL, '5d671ecc9454f1567039180.jpg', 1, '2019-08-28 15:39:40', '2019-08-28 15:39:40');
/*!40000 ALTER TABLE `about_mes` ENABLE KEYS */;

-- Dumping structure for table lacura.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `admins_email_unique` (`email`) USING BTREE,
  UNIQUE KEY `username` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.admins: ~2 rows (approximately)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
REPLACE INTO `admins` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `mobile`, `image`, `lang`) VALUES
	(1, 'La Cura', 'admin', 'asimrafique11@yahoo.com', '$2y$10$fIqiVxBxLZy8e9wKhye/1exR9yloGAjlLodO3Eky.9n1GBnTqKWQi', 'sGdPCIc5dJjbgMweGCSc5EIp7jiA0ai5WtJU2lV3kXzshYBUUBihzp6zIAir', NULL, '2021-01-05 10:39:26', '+5598985495156', 'admin_1609799966.jpg', 'en'),
	(2, 'admin', 'admin2', 'asimrafique11@yahoo.com1', '$2y$10$fIqiVxBxLZy8e9wKhye/1exR9yloGAjlLodO3Eky.9n1GBnTqKWQi', 'gRlN3uMIqB70s7HlhRChJbGZN1ZtCpOQjO3fHpkplgxQYc6IWjaFgtUwIpex', '2021-02-25 00:20:24', '2021-02-25 00:20:26', '1111', NULL, 'en');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table lacura.admin_features
CREATE TABLE IF NOT EXISTS `admin_features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.admin_features: 18 rows
/*!40000 ALTER TABLE `admin_features` DISABLE KEYS */;
REPLACE INTO `admin_features` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Dashboard', '2020-04-05 17:14:54', '2020-04-05 17:14:54'),
	(2, 'Affiliate', '2020-04-05 17:14:54', '2020-04-05 17:14:54'),
	(3, 'Schedules', '2020-04-05 17:17:57', '2020-04-05 17:17:57'),
	(4, 'Deposit Methods', '2020-04-05 17:17:57', '2020-04-05 17:17:57'),
	(5, 'Manage E PIN', '2020-04-05 17:19:55', '2020-04-05 17:19:55'),
	(6, 'Plan Management', '2020-04-05 17:19:55', '2020-04-05 17:19:55'),
	(7, 'News Blog', '2020-04-05 17:21:13', '2020-04-05 17:21:13'),
	(8, 'Mini Blog', '2020-04-05 17:21:13', '2020-04-05 17:21:13'),
	(9, 'Manage Terms', '2020-04-05 17:22:08', '2020-04-05 17:22:08'),
	(10, 'Manage Users', '2020-04-05 17:22:08', '2020-04-05 17:22:08'),
	(11, 'Manage Admins', '2020-04-05 17:23:33', '2020-04-05 17:23:33'),
	(12, 'Withdraw System', '2020-04-05 17:23:33', '2020-04-05 17:23:33'),
	(13, 'Manage Gallery', '2020-04-05 17:24:15', '2020-04-05 17:24:15'),
	(14, 'Support Tickets', '2020-04-05 17:24:15', '2020-04-05 17:24:15'),
	(15, 'Pages', '2020-04-05 17:24:56', '2020-04-05 17:24:56'),
	(16, 'Web Settings', '2020-04-05 17:24:56', '2020-04-05 17:24:56'),
	(17, 'Subscriber', '2020-04-05 17:25:29', '2020-04-05 17:25:29'),
	(18, 'Settings', '2020-04-05 17:25:29', '2020-04-05 17:25:29');
/*!40000 ALTER TABLE `admin_features` ENABLE KEYS */;

-- Dumping structure for table lacura.admin_password_resets
CREATE TABLE IF NOT EXISTS `admin_password_resets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `token` (`token`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.admin_password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin_password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_password_resets` ENABLE KEYS */;

-- Dumping structure for table lacura.admin_roles
CREATE TABLE IF NOT EXISTS `admin_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `admin_feature_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

-- Dumping data for table lacura.admin_roles: 3 rows
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
REPLACE INTO `admin_roles` (`id`, `admin_id`, `admin_feature_id`, `created_at`, `updated_at`) VALUES
	(16, 2, 13, '2021-03-16 01:26:41', '2021-03-16 01:26:41'),
	(15, 2, 8, '2021-03-16 01:26:41', '2021-03-16 01:26:41'),
	(14, 2, 1, '2021-03-16 01:26:41', '2021-03-16 01:26:41');
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;

-- Dumping structure for table lacura.albums
CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `comment` text COLLATE utf8mb4_unicode_ci,
  `uploader_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploader_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `public` tinyint(4) NOT NULL DEFAULT '1',
  `temp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_about` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0: dont show in about page, 1: show',
  `show_method` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'random',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `albums_uploader_type_uploader_id_index` (`uploader_type`,`uploader_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.albums: ~4 rows (approximately)
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;
REPLACE INTO `albums` (`id`, `title`, `rating`, `comment`, `uploader_type`, `uploader_id`, `created_at`, `updated_at`, `public`, `temp`, `show_about`, `show_method`) VALUES
	(94, 'Sobre Deus', '0', NULL, 'App\\Admin', 1, '2020-05-23 20:29:11', '2020-06-29 19:46:05', 1, NULL, 1, 'random'),
	(95, 'Sobre Deus', '0', NULL, 'App\\Admin', 1, '2020-06-22 13:44:00', '2020-06-22 13:44:35', 1, NULL, 1, 'random'),
	(97, 'Album de teste 2', '0', NULL, 'App\\Admin', 1, '2020-12-12 11:13:10', '2020-12-12 12:53:37', 1, NULL, 1, 'random'),
	(98, 'Novíssimo album', '0', NULL, 'App\\Admin', 1, '2020-12-12 12:51:54', '2021-03-03 21:54:58', 0, NULL, 1, 'random');
/*!40000 ALTER TABLE `albums` ENABLE KEYS */;

-- Dumping structure for table lacura.album_items
CREATE TABLE IF NOT EXISTS `album_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filetype` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1 : Photo, 2: Video',
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `comment` text COLLATE utf8mb4_unicode_ci,
  `uploader_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploader_id` bigint(20) unsigned NOT NULL,
  `album_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating_count` int(11) NOT NULL DEFAULT '0',
  `show_about` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `album_items_uploader_type_uploader_id_index` (`uploader_type`,`uploader_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1382 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.album_items: ~49 rows (approximately)
/*!40000 ALTER TABLE `album_items` DISABLE KEYS */;
REPLACE INTO `album_items` (`id`, `filetype`, `filename`, `rating`, `comment`, `uploader_type`, `uploader_id`, `album_id`, `created_at`, `updated_at`, `rating_count`, `show_about`) VALUES
	(1322, 1, '5eca06261024d1590298150.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:29:11', '2020-05-23 20:29:11', 0, 1),
	(1323, 1, '5eca062a0fe861590298154.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:29:15', '2020-05-23 20:29:15', 0, 1),
	(1326, 1, '5eca0675908861590298229.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:30:30', '2020-05-23 20:30:30', 0, 1),
	(1327, 1, '5eca06918b4fd1590298257.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:30:58', '2020-05-23 20:30:58', 0, 1),
	(1330, 1, '5eca06f7698d21590298359.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:32:40', '2020-05-23 20:32:40', 0, 1),
	(1331, 1, '5eca0710129d01590298384.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:33:04', '2020-05-23 20:33:04', 0, 1),
	(1332, 1, '5eca0740130981590298432.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:33:52', '2020-05-23 20:33:52', 0, 1),
	(1333, 1, '5eca075b3cc4b1590298459.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:34:20', '2020-05-23 20:34:20', 0, 1),
	(1334, 1, '5eca0786833ec1590298502.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:35:03', '2020-05-23 20:35:03', 0, 1),
	(1335, 1, '5eca07ace3a2e1590298540.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:35:41', '2020-05-23 20:35:41', 0, 1),
	(1336, 1, '5eca07e58d98f1590298597.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:36:38', '2020-05-23 20:36:38', 0, 1),
	(1337, 1, '5eca07f0a498b1590298608.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:36:49', '2020-05-23 20:36:49', 0, 1),
	(1338, 1, '5eca081b1673b1590298651.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:37:31', '2020-05-23 20:37:31', 0, 1),
	(1339, 1, '5eca081d6908d1590298653.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:37:34', '2020-05-23 20:37:34', 0, 1),
	(1340, 1, '5eca08293078c1590298665.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:37:46', '2020-05-23 20:37:46', 0, 1),
	(1341, 1, '5eca0847ebfd01590298695.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:38:16', '2020-05-23 20:38:16', 0, 1),
	(1342, 1, '5eca0849edbf71590298697.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:38:18', '2020-05-23 20:38:18', 0, 1),
	(1343, 1, '5eca0854470f71590298708.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:38:29', '2020-05-23 20:38:29', 0, 1),
	(1344, 1, '5eca0862b8dde1590298722.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:38:43', '2020-05-23 20:38:43', 0, 1),
	(1345, 1, '5eca087b212a41590298747.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:39:08', '2020-05-23 20:39:08', 0, 1),
	(1348, 1, '5eca08cd31d3b1590298829.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:40:30', '2020-05-23 20:40:30', 0, 1),
	(1349, 1, '5eca08d2a1d721590298834.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:40:35', '2020-05-23 20:40:35', 0, 1),
	(1350, 1, '5eca08e22914e1590298850.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:40:51', '2020-05-23 20:40:51', 0, 1),
	(1351, 1, '5eca08f8dd6771590298872.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:41:13', '2020-05-23 20:41:13', 0, 1),
	(1352, 1, '5eca09175a1771590298903.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:41:44', '2020-05-23 20:41:44', 0, 1),
	(1353, 1, '5eca091a81c281590298906.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:41:47', '2020-05-23 20:41:47', 0, 1),
	(1354, 1, '5eca091e94d4a1590298910.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:41:51', '2020-05-23 20:41:51', 0, 1),
	(1355, 1, '5eca09407eb1e1590298944.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:42:25', '2020-05-23 20:42:25', 0, 1),
	(1356, 1, '5eca095262e481590298962.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:42:43', '2020-05-23 20:42:43', 0, 1),
	(1357, 1, '5eca095b5fdc21590298971.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:42:52', '2020-05-23 20:42:52', 0, 1),
	(1358, 1, '5eca0964ac9101590298980.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:43:01', '2020-05-23 20:43:01', 0, 1),
	(1359, 1, '5eca097066aba1590298992.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:43:13', '2020-05-23 20:43:13', 0, 1),
	(1360, 1, '5eca097369add1590298995.JPG', '0', NULL, 'App\\Admin', 1, 94, '2020-05-23 20:43:16', '2020-05-23 20:43:16', 0, 1),
	(1365, 1, '5ef08b7414e801592822644.JPG', '0', NULL, 'App\\Admin', 1, 95, '2020-06-22 13:44:06', '2020-06-22 13:44:06', 0, 1),
	(1366, 1, '5ef08b76a5ffc1592822646.JPG', '0', NULL, 'App\\Admin', 1, 95, '2020-06-22 13:44:08', '2020-06-22 13:44:08', 0, 1),
	(1367, 1, '5ef08b78ebf551592822648.JPG', '0', NULL, 'App\\Admin', 1, 95, '2020-06-22 13:44:12', '2020-06-22 13:44:12', 0, 1),
	(1368, 1, '5ef08b7abee9a1592822650.JPG', '0', NULL, 'App\\Admin', 1, 95, '2020-06-22 13:44:13', '2020-06-22 13:44:13', 0, 1),
	(1372, 1, '5fd3fd06179e61607728390.jpg', '0', NULL, 'App\\Admin', 1, 97, '2020-12-12 11:13:10', '2020-12-12 11:13:10', 0, 1),
	(1373, 1, '5fd3fd06c6aae1607728390.jpg', '0', NULL, 'App\\Admin', 1, 97, '2020-12-12 11:13:11', '2020-12-12 11:13:11', 0, 1),
	(1374, 1, '5fd3fd07c09421607728391.jpg', '0', NULL, 'App\\Admin', 1, 97, '2020-12-12 11:13:12', '2020-12-12 11:13:12', 0, 1),
	(1375, 1, '5fd3fd08a32ec1607728392.jpg', '0', NULL, 'App\\Admin', 1, 97, '2020-12-12 11:13:14', '2020-12-12 11:13:14', 0, 1),
	(1376, 1, '5fd3fd0aa77ec1607728394.jpg', '0', NULL, 'App\\Admin', 1, 97, '2020-12-12 11:13:15', '2020-12-12 11:13:15', 0, 1),
	(1377, 1, '5fd41427799d91607734311.jpg', '0', NULL, 'App\\Admin', 1, 98, '2020-12-12 12:51:54', '2020-12-12 12:51:54', 0, 1),
	(1378, 1, '5fd4142b4385f1607734315.jpg', '0', NULL, 'App\\Admin', 1, 98, '2020-12-12 12:52:00', '2021-03-03 21:56:32', 0, 0),
	(1379, 1, '5fd414309e4f01607734320.jpg', '0', NULL, 'App\\Admin', 1, 98, '2020-12-12 12:52:02', '2021-03-03 21:56:32', 0, 0),
	(1380, 1, '5fd41432479951607734322.jpg', '0', NULL, 'App\\Admin', 1, 98, '2020-12-12 12:52:02', '2021-03-03 21:56:32', 0, 0),
	(1381, 1, '5fd41433016671607734323.jpg', '0', NULL, 'App\\Admin', 1, 98, '2020-12-12 12:52:06', '2021-03-03 21:56:32', 0, 0);
/*!40000 ALTER TABLE `album_items` ENABLE KEYS */;

-- Dumping structure for table lacura.basic_settings
CREATE TABLE IF NOT EXISTS `basic_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sitename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_two` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_sym` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_notification` tinyint(1) DEFAULT NULL,
  `sms_notification` tinyint(4) DEFAULT NULL,
  `emailver` int(11) DEFAULT '0',
  `smsver` int(11) DEFAULT '0',
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `esender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emessage` longtext COLLATE utf8mb4_unicode_ci,
  `smsapi` mediumtext COLLATE utf8mb4_unicode_ci,
  `banner_title` text COLLATE utf8mb4_unicode_ci,
  `banner_sub_title` text COLLATE utf8mb4_unicode_ci,
  `service_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_sub_title` text COLLATE utf8mb4_unicode_ci,
  `test_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_sub_title` text COLLATE utf8mb4_unicode_ci,
  `blog_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_sub_title` text COLLATE utf8mb4_unicode_ci,
  `footer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` text COLLATE utf8mb4_unicode_ci,
  `team_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_sub_title` text COLLATE utf8mb4_unicode_ci,
  `fb_client_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_client_secret` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_client_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_client_secret` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_login` int(11) NOT NULL DEFAULT '0',
  `faq_title` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq_sub_title` text COLLATE utf8mb4_unicode_ci,
  `static_title_1` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_number_1` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_icon_1` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_title_2` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_number_2` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_icon_2` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_title_3` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_number_3` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_icon_3` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_title` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_detail` longtext COLLATE utf8mb4_unicode_ci,
  `plan_title` text COLLATE utf8mb4_unicode_ci,
  `plan_subtitle` text COLLATE utf8mb4_unicode_ci,
  `deposit_wallet_name` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interest_wallet_name` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bal_trans_fixed_charge` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bal_trans_per_charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_active` int(11) NOT NULL DEFAULT '1',
  `video_url` text COLLATE utf8mb4_unicode_ci,
  `how_it_work_title` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_it_work_sub_title` text COLLATE utf8mb4_unicode_ci,
  `referral_title` text COLLATE utf8mb4_unicode_ci,
  `referral_sub_title` text COLLATE utf8mb4_unicode_ci,
  `transaction_title` text COLLATE utf8mb4_unicode_ci,
  `transaction_sub_title` text COLLATE utf8mb4_unicode_ci,
  `payment_title` text COLLATE utf8mb4_unicode_ci,
  `payment_sub_title` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gallery_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_show_method` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'random',
  `new_user_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_user_sub_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affiliate_withdraw_day` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affiliate_withdraw_person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affiliate_withdraw_deadline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `schedule_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_speed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_text` text COLLATE utf8mb4_unicode_ci,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `schedule_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nominee` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nominee_error` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_ja_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_pt_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ja_seo_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ja_seo_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptbr_seo_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptbr_seo_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_textpt` text COLLATE utf8mb4_unicode_ci,
  `about_map` text COLLATE utf8mb4_unicode_ci,
  `schedule_cities` text COLLATE utf8mb4_unicode_ci,
  `slider_show_method` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'random',
  `slider_number` int(10) DEFAULT '2',
  `space_between_slids` int(11) DEFAULT '10',
  `slider_loop` int(11) DEFAULT '1',
  `autoplay_delay` int(11) DEFAULT '400',
  `slidesPerView` int(11) DEFAULT '2',
  `footer_jp` text COLLATE utf8mb4_unicode_ci,
  `footer_message_p` text COLLATE utf8mb4_unicode_ci,
  `footer_message_jp` text COLLATE utf8mb4_unicode_ci,
  `footer_text_jp` text COLLATE utf8mb4_unicode_ci,
  `in_slider_text` text COLLATE utf8mb4_unicode_ci,
  `in_slider_textpt` text COLLATE utf8mb4_unicode_ci,
  `in_slider_speed` int(11) DEFAULT '800',
  `in_slider_loop` int(11) DEFAULT '1',
  `in_autoplay_delay` int(11) DEFAULT '500',
  `in_slidesPerView` int(11) DEFAULT '1',
  `footer_slider_enable` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mission_enable` int(11) DEFAULT '1',
  `in_slider_number` int(11) DEFAULT '5',
  `in_slider_show_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'random',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.basic_settings: ~0 rows (approximately)
/*!40000 ALTER TABLE `basic_settings` DISABLE KEYS */;
REPLACE INTO `basic_settings` (`id`, `sitename`, `color`, `color_two`, `currency`, `currency_sym`, `email_notification`, `sms_notification`, `emailver`, `smsver`, `phone`, `email`, `address`, `esender`, `emobile`, `emessage`, `smsapi`, `banner_title`, `banner_sub_title`, `service_title`, `service_sub_title`, `test_title`, `test_sub_title`, `blog_title`, `blog_sub_title`, `footer`, `footer_text`, `team_title`, `team_sub_title`, `fb_client_id`, `fb_client_secret`, `google_client_id`, `google_client_secret`, `social_login`, `faq_title`, `faq_sub_title`, `static_title_1`, `static_number_1`, `static_icon_1`, `static_title_2`, `static_number_2`, `static_icon_2`, `static_title_3`, `static_number_3`, `static_icon_3`, `about_title`, `about_detail`, `plan_title`, `plan_subtitle`, `deposit_wallet_name`, `interest_wallet_name`, `bal_trans_fixed_charge`, `bal_trans_per_charge`, `template_active`, `video_url`, `how_it_work_title`, `how_it_work_sub_title`, `referral_title`, `referral_sub_title`, `transaction_title`, `transaction_sub_title`, `payment_title`, `payment_sub_title`, `created_at`, `updated_at`, `gallery_title`, `gallery_detail`, `gallery_show_method`, `new_user_title`, `new_user_sub_title`, `affiliate_withdraw_day`, `affiliate_withdraw_person`, `affiliate_withdraw_deadline`, `schedule_price`, `schedule_title`, `registration_logo`, `slider_speed`, `slider_text`, `lang`, `schedule_email`, `nominee`, `nominee_error`, `news_ja_image`, `news_pt_image`, `ja_seo_desc`, `ja_seo_key`, `ptbr_seo_desc`, `ptbr_seo_key`, `slider_textpt`, `about_map`, `schedule_cities`, `slider_show_method`, `slider_number`, `space_between_slids`, `slider_loop`, `autoplay_delay`, `slidesPerView`, `footer_jp`, `footer_message_p`, `footer_message_jp`, `footer_text_jp`, `in_slider_text`, `in_slider_textpt`, `in_slider_speed`, `in_slider_loop`, `in_autoplay_delay`, `in_slidesPerView`, `footer_slider_enable`, `mission_enable`, `in_slider_number`, `in_slider_show_method`) VALUES
	(1, 'Lacura - Donate', '052157', '7eacff', 'JPY', '¥', 1, 0, 1, 0, '050-5534-1117', 'donate@lacura.me', 'Tokyo, Japan', 'donate@lacura.me', NULL, '<br><br>\r\n	<div class="contents" style="max-width: 600px; margin: 0 auto; border: 2px solid #000036;"><div class="header" style="background-color: #000036; padding: 15px; text-align: center;"><div class="logo" style="width: 240px;text-align: center; margin: 0 auto;"><img src="https://lacura.me/img/AAvRUHL.png" style="font-size: 0.875rem;"></div></div></div><div class="contents" style="max-width: 600px; margin: 0 auto; border: 2px solid #000036;">\r\n\r\n<div class="header" style="background-color: #000036; padding: 15px; text-align: center;">\r\n	<div class="logo" style="width: 260px;text-align: center; margin: 0 auto;">\r\n	</div>\r\n</div>\r\n\r\n<div class="mailtext" style="padding: 30px 15px; background-color: #f0f8ff; font-family: \'Open Sans\', sans-serif; font-size: 16px; line-height: 26px;">Hi {{name}},&nbsp;<br>\r\n{{message}}\r\n<br><br>\r\n<br>\r\n</div>\r\n\r\n<div class="footer" style="background-color: #000036; padding: 15px; text-align: center;">&nbsp;&nbsp;<b style="color: rgb(255, 255, 255); font-size: 0.875rem;">Copyright (©) 2014 - 2019 La Cura All Rights Reserved</b></div><div class="footer" style="background-color: #000036; padding: 15px; text-align: center; border-top: 1px solid rgba(255, 255, 255, 0.2);"><p style="color: #ddd;">La Cura is not partnered with any other \r\ncompany or person. We work as a team and do not have any reseller, \r\ndistributor or partner!</p>\r\n\r\n\r\n</div>\r\n\r\n	</div>\r\n<br><br>', 'https://api.infobip.com/api/v3/sendsms/plain?user=****&password=****&sender=Sender&SMSText={{message}}&GSM={{number}}&type=longSMS', 'Psychic Power, Supernatural Strength, Quantum Power!', 'The portal of the miracle and when these portals open up unexpected things happen and inexplicable in our lives', 'Our Treatments', 'Forget everything and learn to deal with hatred, suffering, resentment and envy, and mold a dreamed destiny as you choose. Not to anything more glorious than the judgment of a pardon.', 'What Users Say!', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections', 'GET LATEST BLOG', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections', 'Copyright (©) 2014 - 2020 La Cura Todos os direitos reservados', 'Mental ・ Trauma ・ Envenenamento ・ Doença ・ Expiação pela alma ・ Dependência ・ Purificação ・ Boa sorte ・ Purificação', 'Our Team Members', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections', '605201123219121', '1d44ed0b34c59e50da8834baffa75b96', '659666262615-dc94jkt5c8tohmhc5u96ib4al1fto22p.apps.googleusercontent.com', 'SHcEaLSfLh4Z4-MI49FRODuh', 0, 'Saiba todas as informações necessárias', 'Descrição do investimento com plano de tratamento até a participação', 'Users', '50K+', 'users', 'Deposit', '$106K+', 'money', 'Withdraw', '$38K+', 'download', 'About Us', 'Our scripts are developed by our in-house Developers. We always produce secure, reliable, efficient and scalable script. We are doing continuous improvements to make it more stable in long run. We are using the latest and advanced technology Where Security is our Primary concern. We always provide our best in customer support. Our Script supports the 16+ Automated online payment processors. We offer customization at very reasonable cost.', 'Choose a donation option', 'Below you know our donation options and help us.', 'Deposit Wallet', 'Interest Wallet', '0', '11', 1, 'https://www.youtube.com/watch?v=GT6-H4BRyqQ', 'How It\'s Work', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Referral Commission Section', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Transactions  Section', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Payment Section', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', NULL, '2021-03-16 04:09:55', 'ギャラリー', NULL, 'random', 'フォロワー', '', '1', '7', '180', '0', 'pkGet a Schedule', '15765076215df798e5cef3c.png', '1000', '<p data-speechify-sentence="">怒りや、苦しみ、恨み、妬みなどすべてを癒して忘れて、ただ消し去ることです。<br />\r\nそれは価値ある物でもなく、審判することもありません、許しなのです。</p>', 'ja', 'uketsuke@lacura.me', '3', 'You are not eligible for withdrawal, need more nominee', '15682919185d7a3c4ee6f57.jpg', '15682919265d7a3c56df451.jpg', '怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。', '精神的, トラウマ, 中毒, 病気, 魂の償い, 依存, 浄化, 開運, お祓い', 'Esqueça tudo e aprenda a lidar com o ódio, sofrimento, ressentimento e inveja, e molde um destino sonhado como você escolher.', 'Problemas Psicológicos, Traumas de Infância , Livramento de Vícios, Cura de Doenças, Purificação da alma, Perturbação Espiritual, Libertação e Proteção Espiritual, Motivação de Vida', '<p data-speechify-sentence="">Esque&ccedil;a tudo e aprenda a lidar com o &oacute;dio, sofrimento, ressentimento e inveja, e molde um destino sonhado como voc&ecirc; escolher.<br />\r\nN&atilde;o h&aacute; nada mais glorioso que o ju&iacute;zo de um perd&atilde;o.</p>', '{"app_key":"AIzaSyBqFuLx8S7A8eianoUhkYMeXpGPvsXp1NM","long":"-25.344","lat":"131.036"}', '{"\\u6771\\u4eac\\u90fd\\u4e2d\\u592e\\u533a":"\\u6771\\u4eac\\u90fd\\u4e2d\\u592e\\u533a","\\u5927\\u962a\\u5e9c\\u5927\\u962a\\u5e02":"\\u5927\\u962a\\u5e9c\\u5927\\u962a\\u5e02","\\u5175\\u5eab\\u770c\\u795e\\u6238\\u5e02":"\\u5175\\u5eab\\u770c\\u795e\\u6238\\u5e02","\\u611b\\u77e5\\u770c\\u540d\\u53e4\\u5c4b\\u5e02":"\\u611b\\u77e5\\u770c\\u540d\\u53e4\\u5c4b\\u5e02","\\u57fc\\u7389\\u770c\\u718a\\u8c37\\u5e02":"\\u57fc\\u7389\\u770c\\u718a\\u8c37\\u5e02","\\u5e83\\u5cf6\\u770c\\u5e83\\u5cf6\\u5e02":"\\u5e83\\u5cf6\\u770c\\u5e83\\u5cf6\\u5e02","\\u6c96\\u7e04\\u770c\\u90a3\\u8987\\u5e02":"\\u6c96\\u7e04\\u770c\\u90a3\\u8987\\u5e02","S\\u00e3o Lu\\u00eds":"Maranh\\u00e3o"}', 'random', 5, 10, 1, 400, 2, 'Kopīraito (©) 2014 - 2020 La kūra All raitsu Reserved', 'Cure e esqueça toda a sua raiva, sofrimento, ressentimento, ciúme e apenas apague-os. Não tem valor, não é um árbitro, é perdão.', 'あなたの怒り、苦しみ、恨み、嫉妬をすべて癒し、忘れて、ただそれを消してください。 それは価値がなく、審判でもありません、それは許しです。', '精神的 ・ トラウマ ・ 中毒 ・ 病気 ・ 魂の償い ・ 依存 ・ 浄化 ・ 開運 ・ お祓い', NULL, NULL, 900, 1, 500, 2, NULL, NULL, 5, 'random');
/*!40000 ALTER TABLE `basic_settings` ENABLE KEYS */;

-- Dumping structure for table lacura.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textpt` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.blogs: ~5 rows (approximately)
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
REPLACE INTO `blogs` (`id`, `title`, `image`, `text`, `created_at`, `updated_at`, `link`, `textpt`) VALUES
	(2, '中毒、依存の治療', '1562748159.jpg', '<p><img src="https://lacura.me/img/vicios.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" />すべての中毒と依存を引き起こす原因は、共通し中毒</p>', '2019-07-10 02:41:26', '2020-04-18 12:27:43', 'https://lacura.me/alcoholics-and-addictions', '<p><img src="https://lacura.me/img/vicios.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" />Muito comum que os v&iacute;cios e as depend&ecirc;ncias sejam a causa de todos dist&uacute;rbios</p>'),
	(3, '精神的なトラウマ', '1564985917.jpg', '<p><img src="https://lacura.me/img/traumas.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" />心理的外傷は、何か自分自身にとって大きな出来事が起こり心や感情がダメージを負います。</p>', '2019-08-05 00:18:37', '2020-04-18 12:28:05', 'https://lacura.me/mental-trauma', '<p><img src="https://lacura.me/img/traumas.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" />Acontece quando a mente e as emo&ccedil;&otilde;es ocorrem grandes eventos para si pr&oacute;prio podendo ocasionar danos mentais.</p>'),
	(4, '精神の浄化', '1564986205.jpg', '<p><img src="https://lacura.me/img/purificacao-espiritual.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" />魂と心が否定的な思想によって引き起こされた出来事を後悔しています。</p>', '2019-08-05 00:23:25', '2020-04-18 12:28:27', 'https://lacura.me/spiritual-purification', '<p><img src="https://lacura.me/img/purificacao-espiritual.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" />Arrependimento por purifica&ccedil;&atilde;o da alma devido &agrave; incidentes de pensamentos negativos.</p>'),
	(5, '仕事の影響（ケガ・病気）', '1564986214.jpg', '<p><img src="https://lacura.me/img/influencia-do-trabalho.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" />労働者が被った需要の高いレベルの仕事で病気を発症する理由は、食生活が貧しい</p>', '2019-08-05 00:23:34', '2020-04-18 12:28:45', 'https://lacura.me/influence-of-work', '<p><img src="https://lacura.me/img/influencia-do-trabalho.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" />A raz&atilde;o para desenvolver a doen&ccedil;a est&aacute; na demanda de trabalho que muitos trabalhadores sofrem, com os maus h&aacute;bitos alimentares e desgaste f&iacute;sico</p>'),
	(6, '精神的な病気', '1564986221.jpg', '<p><img src="https://lacura.me/img/alma.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" /> 精神的な病気を癒し、聖なる魂の助けを借りて起こる内面の変化の奇跡的な命です。</p>', '2019-08-05 00:23:41', '2020-04-18 12:29:01', 'https://lacura.me/purification-soul', '<p><img src="https://lacura.me/img/alma.jpg" style="float:left; padding-bottom:10px; padding-right:10px; width:80px" /> Cura das doen&ccedil;as mentais &eacute; uma mudan&ccedil;a de vida do interior f&iacute;sico ao exterior f&iacute;sico com a ajuda do Esp&iacute;rito Santo &ldquo;uriel&rdquo;</p>');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

-- Dumping structure for table lacura.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `votes` int(11) NOT NULL DEFAULT '0',
  `spam` int(11) NOT NULL DEFAULT '0',
  `reply_id` int(11) NOT NULL DEFAULT '0',
  `page_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.comments: ~0 rows (approximately)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Dumping structure for table lacura.comment_spam
CREATE TABLE IF NOT EXISTS `comment_spam` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.comment_spam: ~0 rows (approximately)
/*!40000 ALTER TABLE `comment_spam` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment_spam` ENABLE KEYS */;

-- Dumping structure for table lacura.comment_user_vote
CREATE TABLE IF NOT EXISTS `comment_user_vote` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vote` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.comment_user_vote: ~0 rows (approximately)
/*!40000 ALTER TABLE `comment_user_vote` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment_user_vote` ENABLE KEYS */;

-- Dumping structure for table lacura.deposits
CREATE TABLE IF NOT EXISTS `deposits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `gateway_id` int(11) DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usd_amo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_amo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_wallet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `try` int(11) NOT NULL DEFAULT '0',
  `image` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.deposits: ~22 rows (approximately)
/*!40000 ALTER TABLE `deposits` DISABLE KEYS */;
REPLACE INTO `deposits` (`id`, `user_id`, `gateway_id`, `amount`, `charge`, `usd_amo`, `btc_amo`, `btc_wallet`, `trx`, `status`, `try`, `image`, `detail`, `created_at`, `updated_at`) VALUES
	(3, 11, 514, '299000', '32890', '331890', '0', '', 'ZPAAQTGyGTfX7K61', 1, 0, '1593428602.jpg', 'Desejo ter saúde equilibrada.\r\nSe possível eliminar espinhas (Bikini) das costas\r\nMais criatividade para os estudos\r\nMais sociabilidade\r\nMais comunicabilidade', '2020-06-29 13:53:17', '2020-06-29 14:34:45'),
	(10, 9, 514, '299000', '32890', '331890', '0', '', 'IZaQSHktowWBN5vC', 1, 0, '1593490305.jpg', '*Melhora na saúde fisica e mental.\r\n*Melhora na capacidade de raciocínio.\r\n*Ter mais tempo para convívio familiar.\r\n*Poder gerar mais sucesso aos meus clientes\r\n*Poder proporcionar mais bem-estar E conforto à minha família e pessoas queridas', '2020-06-30 16:11:00', '2020-06-30 17:34:49'),
	(11, 17, 514, '299000', '32890', '331890', '0', '', 'zho56TwAVJseUJua', 1, 0, '1593511143.jpg', '皮膚(赤ちゃんみたいな美肌)\r\n人生のパートナー(信頼できる相思相愛な恋人)\r\nお金(給与UP)\r\n健康(健康的なカラダと体重)\r\nお仕事は今も楽しいけど、給料UPやボーナスはほしい。\r\n安らげる場所\r\n色んな行ったことない国をもっと知りたい。旅行したい。', '2020-06-30 21:47:51', '2020-06-30 23:41:00'),
	(13, 16, 514, '299000', '32890', '331890', '0', '', 'jxNC0TxRHuc2551u', 1, 0, '1593608690.jpg', 'Melhorar Espiritualmente\r\nTer independencia financeira\r\nEncontrar com a minha familia na Bolivia\r\nMais inteligenre\r\nDescobrir meu dom \r\nFelicidades dos filhos\r\nTer tranquilidade na 3 idade\r\nQuero casa', '2020-07-02 01:00:46', '2020-07-02 01:07:03'),
	(14, 9, 514, '122121', '13433.31', '135554.31', '0', '', 'jU89lzqr5pOY56S7', 0, 0, NULL, NULL, '2021-01-11 03:28:41', '2021-01-11 03:28:41'),
	(15, 1, 501, '100', '1', '101', '0', '', 'TRrYZDZUjJo7p2Ja', 0, 0, NULL, NULL, '2021-03-15 05:21:54', '2021-03-15 05:21:54'),
	(16, 1, 101, '100', '10', '110', '0', '', 'idTydjPrDskJ6E6a', 0, 0, NULL, NULL, '2021-03-15 05:42:37', '2021-03-15 05:42:37'),
	(17, 1, 101, '100', '10', '110', '0', '', 'Fx4kXi3nQNUj69cR', 0, 0, NULL, NULL, '2021-03-16 04:11:11', '2021-03-16 04:11:11'),
	(18, 1, 501, '100', '1', '101', '0', '', 'tMiaIAO8kHAvA9wD', 0, 0, NULL, NULL, '2021-03-16 04:18:50', '2021-03-16 04:18:50'),
	(19, 2, 101, '100', '10', '110', '0', '', 'XjtZ9Beva6eltoBE', 0, 0, NULL, NULL, '2021-03-16 04:34:06', '2021-03-16 04:34:06'),
	(20, 2, 514, '100', '11', '111', '0', '', 'lcyIiWdo1NVaaEFd', 1, 0, '1615837054.jpg', 'test payment', '2021-03-16 04:36:36', '2021-03-16 04:39:36'),
	(21, 2, 514, '100', '11', '111', '0', '', 'AvzWTkYR1cc50ENY', 0, 0, NULL, NULL, '2021-03-16 04:40:29', '2021-03-16 04:40:29'),
	(22, 2, 514, '120', '13.2', '133.2', '0', '', 'bv484hSKGFyMQKuV', 2, 0, '1615837330.jpg', 'afdasdf', '2021-03-16 04:40:44', '2021-03-16 04:52:34'),
	(23, 1, 501, '200', '2', '202', '0', '', 'tkgBcidVLGZkyVNB', 0, 0, NULL, NULL, '2021-03-16 19:01:39', '2021-03-16 19:01:39'),
	(24, 1, 103, '100', '10', '1', '0', '', 'kAnKAdOSpK0Qlzjm', 0, 0, NULL, NULL, '2021-03-16 20:16:11', '2021-03-16 20:16:11'),
	(25, 1, 101, '200', '20', '220', '0', '', 'pkPzzWSnYsdDWt9r', 0, 0, NULL, NULL, '2021-03-16 22:30:07', '2021-03-16 22:30:07'),
	(26, 1, 501, '100', '1', '101', '0', '', 'jQIxjTogsDPbak3O', 0, 0, NULL, NULL, '2021-03-16 22:33:40', '2021-03-16 22:33:40'),
	(27, 1, 103, '100', '10', '1', '0', '', 'Y6AGT2t3f6uvyzRa', 0, 0, NULL, NULL, '2021-03-18 03:26:11', '2021-03-18 03:26:11'),
	(28, 1, 103, '100', '10', '1', '0', '', 'OVAROz54zZmhLHx5', 1, 0, NULL, NULL, '2021-03-18 17:59:59', '2021-03-18 19:09:33'),
	(29, 1, 103, '300', '30', '3', '0', '', 'pw6PVyS40Qj4YOd2', 1, 0, NULL, NULL, '2021-03-18 19:10:34', '2021-03-18 19:11:04'),
	(30, 1, 103, '150', '15', '1.5', '0', '', 'ErxFI0ac6Rq93lE7', 0, 0, NULL, NULL, '2021-03-18 19:13:34', '2021-03-18 19:13:34'),
	(31, 1, 103, '300', '30', '3', '0', '', 'HkOMJUjbPIHr0LC0', 1, 0, NULL, NULL, '2021-03-18 19:33:10', '2021-03-18 20:07:51'),
	(32, 1, 103, '100', '10', '1', '0', '', 'Y2d8tMxSIrsPG83c', 0, 0, NULL, NULL, '2021-03-27 03:49:59', '2021-03-27 03:49:59');
/*!40000 ALTER TABLE `deposits` ENABLE KEYS */;

-- Dumping structure for table lacura.email_languages
CREATE TABLE IF NOT EXISTS `email_languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.email_languages: ~50 rows (approximately)
/*!40000 ALTER TABLE `email_languages` DISABLE KEYS */;
REPLACE INTO `email_languages` (`id`, `code`, `name`, `lang`, `subject`, `message`, `created_at`, `updated_at`) VALUES
	(1, 'EVER', 'Email Verification', 'ja', '件名：確認コード (Verification Code)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">お客様のユーザーは {{user}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">お客様の確認コードは：{{code}}</span><br></div>', NULL, '2019-08-27 17:24:32'),
	(2, 'EVER', 'Email Verification', 'pt-br', 'Código de Verificação', '<div><div>Seu nome de usuário é: {{user}}</div><div><br></div><div>O seu código de verificação é: {{code}}</div></div>', NULL, '2019-08-22 15:48:39'),
	(3, 'FPASS', 'Forgot Password', 'ja', '件名：パスワードのリセット。 (Password Reset)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">パスワードをリセットするためにこのリンクをご利用下さい {{link}}</span><br></div>', NULL, '2019-08-27 17:25:45'),
	(4, 'FPASS', 'Forgot Password', 'pt-br', 'Redefinir senha', 'Use este link para redefinir a senha:&nbsp; &nbsp;{{link}}<br>', NULL, '2019-08-22 15:50:23'),
	(5, 'RPASS', 'Reset Password', 'ja', '件名：パスワード変更完了。 (Password Changed)', '<span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">パスワード変更完了しました。</span>', NULL, '2019-08-27 17:32:17'),
	(6, 'RPASS', 'Reset Password', 'pt-br', 'Senha Alterada', 'Senha alterada com sucesso', NULL, '2019-08-22 16:17:22'),
	(7, 'BADD', 'Balance Add', 'ja', '件名: お預け入れ完了(Balance Added)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">ようこそ！</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">{{detail}} {{amount}} お預け入れのご確認されました。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">現在残高は{{balance}}</span><br></div>', NULL, '2019-08-27 17:13:51'),
	(8, 'BADD', 'Balance Add', 'pt-br', 'Saldo adicionado', '<p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal"><span style="font-size: 10.5pt; font-family: &quot;Segoe UI&quot;, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Bem vindo!&nbsp;</span><span style="font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-fareast-language:PT-BR"><o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10.5pt; font-family: &quot;Segoe UI&quot;, sans-serif;"><o:p>&nbsp;</o:p></span></p>\r\n\r\n<p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10.5pt; font-family: &quot;Segoe UI&quot;, sans-serif;">{{detail}} {{amount}} adicionado com sucesso ao seu saldo.&nbsp;<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10.5pt; font-family: &quot;Segoe UI&quot;, sans-serif;"><o:p>&nbsp;</o:p></span></p>\r\n\r\n<p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10.5pt; font-family: &quot;Segoe UI&quot;, sans-serif;">Seu saldo atual é {{balance}}<o:p></o:p></span></p>', NULL, '2019-08-22 07:40:08'),
	(9, 'BSUB', 'Balance Subsctract', 'ja', '件名: 管理者による差引残高 (Balance Subtract Via Admin)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">{{detail}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">{{amount}} 残高から差し引かれました。現在残高は {{balance}}</span><br></div>', NULL, '2019-08-27 17:15:54'),
	(10, 'BSUB', 'Balance Subsctract', 'pt-br', 'Saldo subtraído via Administrador', '<div>{{detail}}</div><div><br></div><div>{{amount}} subtraído do seu saldo. Seu saldo atual é {{balance}}</div>', NULL, '2019-08-22 07:45:14'),
	(11, 'SMAIL', 'Send Mail To User', 'ja', 'This is an autofill field, changing subject will have no effect', '{{message}}', NULL, '2019-08-17 13:45:46'),
	(12, 'SMAIL', 'Send Mail To User', 'pt-br', 'This is an autofill field, changing subject will have no effect', '{{message}}', NULL, '2019-08-17 13:45:54'),
	(13, 'DSUCCESS', 'Deposit Success', 'ja', '件名： 振込完了 (Deposit Successful)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">振込申請の手続き完了と残高追加されました。</span><br></div>', NULL, '2019-08-27 17:22:43'),
	(14, 'DSUCCESS', 'Deposit Success', 'pt-br', 'Depósito bem sucedido', 'Pedido de depósito aprovado e saldo adicionado', NULL, '2019-08-22 15:46:06'),
	(15, 'DREFUND', 'Deposit Refund', 'ja', '件名： 返金振込済み(Deposit Refunded)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">振込申請の手続き完了と残高追加されました。</span><br></div>', NULL, '2019-08-27 17:21:26'),
	(16, 'DREFUND', 'Deposit Refund', 'pt-br', 'Depósito Reembolsado', '<p class="MsoNormal">Pedido de depósito aprovado e saldo adicionado<o:p></o:p></p>', NULL, '2019-08-22 08:05:12'),
	(17, 'DAPPROVE', 'Deposit Approve', 'ja', '件名: 振込承認済み (Deposit Approved)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">お客様の振込は承認しました。</span><br></div>', NULL, '2019-08-27 17:21:02'),
	(18, 'DAPPROVE', 'Deposit Approve', 'pt-br', 'Depósito Aprovado', '<span style="font-size: 0.875rem;">Olá</span><p class="MsoNormal"><o:p></o:p></p>\r\n\r\n<p class="MsoNormal">Seu depósito foi aprovado<o:p></o:p></p>', NULL, '2019-08-22 08:03:19'),
	(19, 'SCONFIRM', 'Schedule Confirmation', 'ja', '件名: ご予約確認 (Schedule Confirmation)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">お客様のご予約完了しました。料金は{{charge}} 残高から発生されました。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">日付: {{date}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">時間: {{time}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">今回のご予約に関してはお客様と利用者は15分ごとに更新されます。プログラム変更されたい場合はパネルの「お客様詳細」に変更できます。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">* 管理者はキャンセルや変更する場合がございます。</span><br></div>', NULL, '2019-08-27 17:36:27'),
	(20, 'SCONFIRM', 'Schedule Confirmation', 'pt-br', 'Confirmação de Agendamento', '<div>Seu atendimento foi reservado com sucesso. O valor {{charge}} foi cobrado do seu saldo.</div><div>Data: {{date}}</div><div>Horário: {{time}}</div><div>Você receberá uma atualização para este atendimento a cada 15 minutos. Você pode alterar sua programação no painel "Sua programação".</div><div><br></div><div><i><b>* O Administrador poderá cancelar ou atualizar este atendimento.</b></i><br></div>', NULL, '2019-08-22 18:03:39'),
	(21, 'SREMINDER', 'Schedule Reminder', 'jp', '件名: 管理者によるご予約確認のおしらせ。 (Schedule Reminder by Admin)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">管理者によるご予約確認のお知らせいたします。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">日付: {{date}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">時間: {{time}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">メッセージ: {{message}}</span><br></div>', NULL, '2019-08-27 17:38:03'),
	(22, 'SREMINDER', 'Schedule Reminder', 'pt-br', 'Lembrete de Agendamento pelo Administrador', '<div>Lembrete de Agendamento pelo Administrador<br>                                    </div><div>Data: {{date}}</div>Horário: {{time}}<div>Mensagem: {{message}}</div><div><br></div>', NULL, '2019-08-22 18:29:39'),
	(23, 'SCANCEL', 'Schedule Cancel', 'ja', '件名： 管理者によるご予約時間のキャンセル (Schedule Cancelation by Admin)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">管理者によるご予約時間のキャンセル手続きされました。ご予約料金は {{charge}} 残高に返金されました。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">日付: {{date}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">時間: {{time}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">理由: {{message}}</span><br></div>', NULL, '2019-08-27 17:34:32'),
	(24, 'SCANCEL', 'Schedule Cancel', 'pt-br', 'Cancelamento de horário pelo Administrador', '<div>O seu agendamento foi cancelado pelo <b><i>Administrador</i></b>. O valor do agendamento<i><b>&nbsp;</b></i>{{charge}} foi devolvido ao seu saldo.</div><div>Data: {{date}}</div><div>Horário: {{time}}</div><div>Razão: {{message}}<br></div>', NULL, '2019-08-22 16:44:56'),
	(25, 'SCHANGE', 'Schedule Change', 'ja', '件名: 管理者によるご予約変更 (Schedule Changed by Admin)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">管理者によるご予約変更されました。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">日付: {{date}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">時間: {{time}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">理由: {{message}}</span><br></div>', NULL, '2019-08-27 17:35:37'),
	(26, 'SCHANGE', 'Schedule Change', 'pt-br', 'Agendamento alterado pelo Administrador', '<div>Seu agendamento foi alterado pelo Administrador. <br></div><div>Data: {{date}}</div><div>Horário: {{time}}</div><div>Razão: {{message}}<br></div>', NULL, '2019-08-22 17:26:51'),
	(27, 'SCONFIRMADMIN', 'Schedule Confirmation ADMIN', 'ja', '件名: ご予約確認 (Schedule Confirmation)', '<div><div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">{{user}}様のご予約 。料金は {{charge}} 残高から引き落としされました。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">日付: {{date}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">時間: {{time}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">今回のご予約に関してはお客様と利用者は15分ごとに更新されます。配信停止や変更の手続きは可能になります</span><br></div></div>', NULL, '2019-08-27 17:37:41'),
	(28, 'SCONFIRMADMIN', 'Schedule Confirmation ADMIN', 'pt-br', 'Confirmação de Agendamento', '<div>Agendamento de Atendimento do {{user}} . O valor {{charge}} foi descontado do seu saldo.</div><div>Data: {{date}}</div><div>Horário: {{time}}</div><div>Você e o usuário receberão atualizações para este atendimento a cada 15 minutos. Você tem todo o direito de alterar a programação ou cancelar.<br></div>', NULL, '2019-08-22 18:09:26'),
	(29, 'SCANCELADMIN', 'Schedule Cancel ADMIN', 'ja', '件名: 管理者によるご予約時間のキャンセル (Schedule Cancelation by Admin)', '<div><div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;{{user}} 様のご予約はキャンセルされました。お客様は{{charge}}返金されます。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">日付: {{date}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">時間: {{time}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">理由: {{message}}</span><br></div></div>', NULL, '2019-08-27 17:34:58'),
	(30, 'SCANCELADMIN', 'Schedule Cancel ADMIN', 'pt-br', 'Cancelamento de horário pelo Administrador', '<div>A reserva de atendimento do {{user}}&nbsp; foi cancelada. O usuário receberá&nbsp; {{charge}} de volta.</div><div>Data: {{date}}</div><div>Horário: {{time}}</div><div>Razão: {{message}}<br></div>', NULL, '2019-08-22 16:54:58'),
	(31, 'SCHANGEADMIN', 'Schedule Change ADMIN', 'ja', '件名: 管理者によるご予約変更   (Schedule Changed by Admin)', '<div><div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">{{user}} 様のご予約時間は変更しました。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">日付: {{date}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">時間: {{time}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">理由: {{message}}</span><br></div></div>', NULL, '2019-08-27 17:36:00'),
	(32, 'SCHANGEADMIN', 'Schedule Change ADMIN', 'pt-br', 'Agendamento modificado pelo Administrador', '<div>O agendamento de horário do {{user}} foi atualizado.</div><div>Data: {{date}}</div><div>Horário: {{time}}</div><div>Razão: {{message}}<br></div>', NULL, '2019-08-22 17:35:35'),
	(33, 'CMAIL', 'Contact Us Mail', 'ja', '件名: お問い合わせ先 (Contact Us Mail)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">{{message}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">お客様のメールアドレス: {{email}}</span><br></div>', NULL, '2019-08-27 17:18:55'),
	(34, 'CMAIL', 'Contact Us Mail', 'pt-br', 'Contate-nos', '<div>{{message}}</div><div><br></div><div>Meu e-mail : {{email}} <br></div>', NULL, '2019-08-22 07:58:11'),
	(35, 'PCHANGE', 'Password Change', 'ja', '件名：パスワード変更 (Password Changed)', '<span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">お客様のパスワード変更設定のリンクです。</span>&nbsp;{{link}}', NULL, '2019-08-27 17:28:40'),
	(36, 'PCHANGE', 'Password Change', 'pt-br', 'Senha Alterada', 'Seu link de redefinição de senha: {{link}}', NULL, '2019-08-22 16:14:09'),
	(37, 'PCHANGESUCCESS', 'Password Change Successfully', 'ja', '件名：パスワード変更完了。 (Password Changed)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">パスワード変更完了しました。</span><br></div>', NULL, '2019-08-27 17:29:09'),
	(38, 'PCHANGESUCCESS', 'Password Change Successfully', 'pt-br', 'Senha Alterada', '<div>                                    \r\n                                Senha alterada com sucesso</div>', NULL, '2019-08-22 16:16:40'),
	(39, 'WSUCCESS', 'Withdraw Success', 'ja', '件名: お引き出し正常にされました。 (Successfully Withdraw)', '<span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">ようこそ！</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">いつもお世話になっております!</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">正常に出金はされました。</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">進行中しばらくお待ちください</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">出金金額 : {{amount}} .</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">現在の残高: {{balance}}</span><br>', NULL, '2019-08-27 17:38:38'),
	(40, 'WSUCCESS', 'Withdraw Success', 'pt-br', 'Saque feito com Sucesso', 'Bem vindo!&nbsp;<div><br></div><div>O seu pedido de saque foi feito com sucesso. Aguarde os dias de processamento.</div><div>Valor de saque : \r\n{{amount}} .&nbsp;</div><div>Seu balanço atual é {{balance}}<br>\r\n                                </div>', NULL, '2019-08-22 18:41:04'),
	(41, 'ICOMPETE', 'Invest Complete', 'ja', '件名：投資総額 (Invest Complete)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">おめでとうございます、お客様の投資手続きが完了しました。お客様の投資は{{amount}}. お客様が {{interest}} の利益を受け取ることができます。</span><br></div>', NULL, '2019-08-27 17:27:28'),
	(42, 'ICOMPETE', 'Invest Complete', 'pt-br', 'Investimento Completo', 'Parabéns, seu investimento feito com sucesso. Seu investimento {{amount}}. E você vai receber {{interest}} de juros.<br>', NULL, '2019-08-22 16:05:51'),
	(43, 'BTRANSFER', 'Balance Transfer', 'ja', '件名: 送金の確認 (Balance Transfer)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">送金を受け付けいたしました。お客様の口座 から{{amount}}に{{receiver}} 送金手数料は発生しました{{charge}}.</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">現在残高は {{balance}}</span><br></div>', NULL, '2019-08-27 17:16:53'),
	(44, 'BTRANSFER', 'Balance Transfer', 'pt-br', 'Transferência de saldo', '<div>                                    \r\n                                Saldo transferido com êxito. Você enviou {{amount}} para {{receiver}} e foi cobrado pela transferência \r\n{{charge}}.</div><div><br></div>Seu saldo atual é {{balance}}', NULL, '2019-08-22 07:48:36'),
	(45, 'BRECEIVE', 'Balance Receive', 'ja', '件名: 受取残高 (Balance Received)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">残高の受け取りを完了しました。お客様は{{amount}} 受け取りました {{sender}}</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">&nbsp;</span><br style="-webkit-font-smoothing: antialiased; color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;"><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">現在残高は {{balance}}</span><br></div>', NULL, '2019-08-27 17:15:06'),
	(46, 'BRECEIVE', 'Balance Receive', 'pt-br', 'Saldo Recebido', '<div>                                    \r\n                                Saldo recebido com sucesso. Você recebeu {{amount}} de {{sender}}</div><div><br></div><div>Seu saldo atual é {{balance}}<br></div>', NULL, '2019-08-22 07:42:54'),
	(47, 'GAUTHENABLE', 'Google Authentication Enable', 'ja', '件名： Google 2段階認証(Google 2FA)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">Google 2段階認証は有効にしました。</span><br></div>', NULL, '2019-08-27 17:26:35'),
	(48, 'GAUTHENABLE', 'Google Authentication Enable', 'pt-br', 'Autenticação Google 2FA', 'Autenticação de dois fatores do Google habilitada com sucesso', NULL, '2019-08-22 15:57:58'),
	(49, 'GAUTHDISABLE', 'Google Authentication Disable', 'ja', '件名： Google 2段階認証  (Google 2FA)', '<div><span style="color: rgb(32, 31, 30); font-family: &quot;Segoe UI&quot;, &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14.6667px;">Google 2段階認証は無効にしました。</span><br></div>', NULL, '2019-08-27 17:26:07'),
	(50, 'GAUTHDISABLE', 'Google Authentication Disable', 'pt-br', 'Autenticação Google 2FA', 'Autenticação do Google de dois fatores foi desativada com sucesso.', NULL, '2019-08-22 15:58:35');
/*!40000 ALTER TABLE `email_languages` ENABLE KEYS */;

-- Dumping structure for table lacura.epins
CREATE TABLE IF NOT EXISTS `epins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `pin` (`pin`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.epins: ~0 rows (approximately)
/*!40000 ALTER TABLE `epins` DISABLE KEYS */;
/*!40000 ALTER TABLE `epins` ENABLE KEYS */;

-- Dumping structure for table lacura.faqs
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.faqs: ~0 rows (approximately)
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
REPLACE INTO `faqs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Como encontrar um link de representante?', 'RESPOSSAAAAAAAAAAAAAAAAAAAAAAAA\r\nComo encontrar um link de representante?l\r\nvf\r\nf´lfldkvodfv\r\ndfvdfvdfvofdvkodf', '2020-07-03 10:58:42', '2020-07-03 11:01:52');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;

-- Dumping structure for table lacura.gateways
CREATE TABLE IF NOT EXISTS `gateways` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `main_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minamo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxamo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fixed_charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percent_charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'paytm Website',
  `val4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'paytm Industry Type',
  `val5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'paytm Channel ID',
  `val6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'paytm Transaction URL',
  `val7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'paytm Transaction Status URL',
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=515 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.gateways: ~21 rows (approximately)
/*!40000 ALTER TABLE `gateways` DISABLE KEYS */;
REPLACE INTO `gateways` (`id`, `main_name`, `name`, `minamo`, `maxamo`, `fixed_charge`, `percent_charge`, `rate`, `val1`, `val2`, `val3`, `val4`, `val5`, `val6`, `val7`, `status`, `created_at`, `updated_at`) VALUES
	(101, 'PayPal', 'PayPal', '50', '5000', '0', '10', '1', 'e741.520.6644@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-03-15 05:21:39'),
	(102, 'PerfectMoney', 'Perfect Money', '20', '20000', '2', '1', '84', 'U5376900', 'G079qn4Q7XATZBqyoCkBteGRg', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:48:12'),
	(103, 'Stripe', 'Credit Card', '0', '500000', '0', '10', '110', 'sk_test_51I9X4xGicXlRqqqCaovG06XGberTGg1EEGwkxyoUPy1BjPe0Q0e2WyI6sX2ZQJLdo26fqTdQC1fN5bzt5zMhNR4r00XYqBOYe2', 'pk_test_51I9X4xGicXlRqqqCO1u3U0HjcgFfooMW4RUh6CAZZD8EhzD346eIDY3rwtCRnC15HzF41xHf1BAccH1w0N54EhcV00rcv5zupR', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-03-16 20:15:42'),
	(104, 'Skrill', 'Skrill', '10', '50000', '3', '3', '84', 'merchant@skrill', 'TheSoftKing', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:48:30'),
	(105, 'PayTM', 'PayTM', '1', '100', '1', '1', '84', 'PoojaE46324372286132', 'JAKMX9PVoj208dMq', 'WEB_STAGINGb', 'Retail', 'WEB', 'https://pguat.paytm.com/oltp-web/processTransaction', 'https://pguat.paytm.com/paytmchecksum/paytmCallback.jsp', 0, NULL, '2019-08-22 04:48:39'),
	(106, 'Payeer', 'Payeer', '1', '100', '1', '1', '84', '627881897', 'Admin727096', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:48:44'),
	(107, 'PayStack', 'PayStack', '1', '100', '1', '1', '84', 'pk_test_c1775454cc81a5ad2d6a31d0b0471585d44c4dcb', 'sk_test_22327c329aa7ea76448cfe279aa1e5d583d306fa', NULL, NULL, NULL, NULL, '0.0028', 0, NULL, '2019-08-22 04:48:50'),
	(108, 'VoguePay', 'VoguePay', '1', '100', '1', '1', '84', 'demo', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:48:55'),
	(501, 'Blockchain.info', 'BitCoin', '1', '5000', '0', '1', '1', '2cd8c897-a48c-4343-b13a-541593031f86', 'xpub6CfPf3JTeNHf6QqXk9smRubcZjCarf5UooFZwmNpCRoHWpWEz7jGon1Y6kCjUaba7R5zs7PuNizLpXL79Mp1Wfo337zHBCoeWoY8sWk3T8K', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-03-15 05:21:26'),
	(502, 'block.io - BTC', 'BitCoin', '1', '99999', '1', '0.5', '84', '1658-8015-2e5e-9afb', '09876softk', NULL, NULL, NULL, NULL, NULL, 0, '2018-01-27 18:00:00', '2019-08-22 04:49:31'),
	(503, 'block.io - LTC', 'LiteCoin', '100', '10000', '0.4', '1', '84', 'cb91-a5bc-69d7-1c27', '09876softk', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:49:36'),
	(504, 'block.io - DOGE', 'DogeCoin', '1', '50000', '0.51', '2.52', '84', '2daf-d165-2135-5951', '09876softk', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:49:41'),
	(505, 'CoinPayment - BTC', 'BitCoin', '1', '5', '0', '0', '1', 'ded6743d3a4e97b43c1942164198bcbc3561df23cfcb82a2eca204f2bba3276d', 'd9f2C9b532cbd2F6076c24Bb659bbc45b1dC39B96FbFDd31354818E16aC837E0', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2020-06-22 14:07:40'),
	(506, 'CoinPayment - ETH', 'Etherium', '1', '50000', '0.51', '2.52', '84', '596f0097ed9d1ab8cfed05eb59c70e9f066513dfe4df64a8fc3917d309328315', '7472928395208f70E3cE30B9e10dc882cBDD3e9967b7942AaE492106d9C7bE44', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:50:45'),
	(507, 'CoinPayment - BCH', 'Bitcoin Cash', '1', '50000', '0.51', '2.52', '84', '596f0097ed9d1ab8cfed05eb59c70e9f066513dfe4df64a8fc3917d309328315', '7472928395208f70E3cE30B9e10dc882cBDD3e9967b7942AaE492106d9C7bE44', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:50:37'),
	(508, 'CoinPayment - DASH', 'DASH', '1', '50000', '0.51', '2.52', '84', '596f0097ed9d1ab8cfed05eb59c70e9f066513dfe4df64a8fc3917d309328315', '7472928395208f70E3cE30B9e10dc882cBDD3e9967b7942AaE492106d9C7bE44', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:50:29'),
	(509, 'CoinPayment - DOGE', 'DOGE', '1', '50000', '0.51', '2.52', '84', '596f0097ed9d1ab8cfed05eb59c70e9f066513dfe4df64a8fc3917d309328315', '7472928395208f70E3cE30B9e10dc882cBDD3e9967b7942AaE492106d9C7bE44', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:50:12'),
	(510, 'CoinPayment - LTC', 'LTC', '1', '50000', '0.51', '2.52', '84', '596f0097ed9d1ab8cfed05eb59c70e9f066513dfe4df64a8fc3917d309328315', '7472928395208f70E3cE30B9e10dc882cBDD3e9967b7942AaE492106d9C7bE44', NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:50:20'),
	(512, 'CoinGate', 'Coingate', '6', '76', '76', '6', '767', '42424242424242424241', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-07-08 18:00:00', '2019-08-22 04:49:59'),
	(513, 'CoinPayment-ALL', 'Coin Payment', '10', '1000', '05', '5', '84', 'db1d9f12444e65c921604e289a281c56', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-08-22 04:49:50'),
	(514, NULL, '銀行振り込み', '10', '999000', NULL, '11', '1', 'Dados para Depósito', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2019-07-13 05:10:36', '2021-03-16 04:36:12');
/*!40000 ALTER TABLE `gateways` ENABLE KEYS */;

-- Dumping structure for table lacura.home_comments
CREATE TABLE IF NOT EXISTS `home_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `comment` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.home_comments: ~3 rows (approximately)
/*!40000 ALTER TABLE `home_comments` DISABLE KEYS */;
REPLACE INTO `home_comments` (`id`, `user_id`, `comment`, `status`, `created_at`, `updated_at`) VALUES
	(7, 18, 'エリソン先生は、説明が丁寧でよく話を聞いてくださいます。\r\n\r\n治療内容の説明が分かりやすく、痛みもないなど教えてくれて心の準備ができて安心もした。\r\n\r\nこれからは、よろしくお願いします。', 1, '2020-08-07 22:58:59', '2020-08-07 23:01:56'),
	(9, 18, 'Elisson tem um poder espiritual maravilhoso e muito amável e atencioso em seu atendimento.\r\nEle foi muito cuidadoso ao explicar sobre tudo e sobre o tratamento e os conselhos das quais eram minhas preocupações. \r\nNesse momento as coisas estão indo muito bem e agora eu estou muito feliz contudo.\r\nObrigado por seu tempo e apoio incessante incentivo todos fazer a seção.', 1, '2020-08-09 03:04:52', '2020-08-09 03:05:51'),
	(10, 4, 'Teste de comentário.', 0, '2020-12-08 15:34:44', '2020-12-08 15:34:44');
/*!40000 ALTER TABLE `home_comments` ENABLE KEYS */;

-- Dumping structure for table lacura.how_it_works
CREATE TABLE IF NOT EXISTS `how_it_works` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.how_it_works: ~3 rows (approximately)
/*!40000 ALTER TABLE `how_it_works` DISABLE KEYS */;
REPLACE INTO `how_it_works` (`id`, `icon`, `title`, `detail`, `created_at`, `updated_at`) VALUES
	(1, 'credit-card', 'Get Deposit', 'Lorem ipsum dolor sit amet consec tetur icing elit. Volup Atatibus fuga, laudan dolor ut iusto.', '2019-01-29 07:05:11', '2019-02-02 21:55:46'),
	(3, 'university', 'Utilize Money', 'Lorem ipsum dolor sit amet consec tetur icing elit. Volup Atatibus fuga, laudan dolor ut iusto.', '2019-01-29 07:06:03', '2019-02-02 21:55:52'),
	(4, 'money', 'Give Interest', 'Lorem ipsum dolor sit amet consec tetur icing elit. Volup Atatibus fuga, laudan dolor ut iusto.', '2019-01-29 07:06:15', '2019-02-02 21:55:59');
/*!40000 ALTER TABLE `how_it_works` ENABLE KEYS */;

-- Dumping structure for table lacura.inst_sliders
CREATE TABLE IF NOT EXISTS `inst_sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image_name` text COLLATE utf8mb4_unicode_ci,
  `alt_pt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_jp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'ja',
  `temp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_pt` text COLLATE utf8mb4_unicode_ci,
  `title_jp` text COLLATE utf8mb4_unicode_ci,
  `batch_no` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lacura.inst_sliders: ~28 rows (approximately)
/*!40000 ALTER TABLE `inst_sliders` DISABLE KEYS */;
REPLACE INTO `inst_sliders` (`id`, `image_name`, `alt_pt`, `alt_jp`, `lang`, `temp`, `title_pt`, `title_jp`, `batch_no`, `status`, `created_at`, `updated_at`) VALUES
	(23, '60426e09cedc21614966281.png', NULL, NULL, 'pt-br', NULL, NULL, NULL, 5, 1, '2021-03-06 02:44:42', '2021-03-06 02:44:53'),
	(24, '60426e09ee8021614966281.png', NULL, NULL, 'pt-br', NULL, NULL, NULL, 5, 1, '2021-03-06 02:44:42', '2021-03-06 02:44:53'),
	(25, '60426e0b80cfa1614966283.png', NULL, NULL, 'pt-br', NULL, NULL, NULL, 5, 1, '2021-03-06 02:44:44', '2021-03-06 02:44:53'),
	(26, '60426e0ba5e531614966283.png', NULL, NULL, 'pt-br', NULL, NULL, NULL, 5, 1, '2021-03-06 02:44:44', '2021-03-06 02:44:53'),
	(27, '60426e0cc94ba1614966284.png', NULL, NULL, 'pt-br', NULL, NULL, NULL, 5, 1, '2021-03-06 02:44:45', '2021-03-06 02:44:53'),
	(28, '60426e4ed24911614966350.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-06 02:45:51', '2021-03-06 02:46:00'),
	(29, '60426e4ec4b9e1614966350.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-06 02:45:52', '2021-03-06 02:46:00'),
	(30, '60426e51520601614966353.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-06 02:45:54', '2021-03-06 02:46:00'),
	(31, '60426e5152a041614966353.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-06 02:45:54', '2021-03-06 02:46:00'),
	(32, '60426e52cd95a1614966354.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-06 02:45:55', '2021-03-06 02:46:00'),
	(33, '6043e40406ca81 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:20:20', '2021-03-07 05:20:33'),
	(34, '6043e40406a822 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:20:20', '2021-03-07 05:20:33'),
	(35, '6043e4050d5913 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:20:21', '2021-03-07 05:20:33'),
	(36, '6043e4050e9574 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:20:21', '2021-03-07 05:20:33'),
	(37, '6043e4057b4705 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:20:21', '2021-03-07 05:20:33'),
	(38, '371 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:25:19', '2021-03-07 05:25:28'),
	(39, '372 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:25:19', '2021-03-07 05:25:28'),
	(40, '393 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:25:20', '2021-03-07 05:25:28'),
	(41, '394 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:25:20', '2021-03-07 05:25:28'),
	(42, '415 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:25:20', '2021-03-07 05:25:28'),
	(43, '421 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:30:32', '2021-03-07 05:30:38'),
	(44, '422 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:30:32', '2021-03-07 05:30:38'),
	(45, '443 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:30:32', '2021-03-07 05:30:38'),
	(46, '444 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:30:33', '2021-03-07 05:30:38'),
	(47, '465 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:30:33', '2021-03-07 05:30:38'),
	(48, '472 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:58:19', '2021-03-07 05:58:29'),
	(49, '471 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:58:19', '2021-03-07 05:58:29'),
	(50, '493 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:58:20', '2021-03-07 05:58:29'),
	(51, '494 貴方は自分の人生が縛られていると思っているですか.png', NULL, NULL, 'ja', NULL, NULL, NULL, 5, 1, '2021-03-07 05:58:20', '2021-03-07 05:58:29');
/*!40000 ALTER TABLE `inst_sliders` ENABLE KEYS */;

-- Dumping structure for table lacura.invests
CREATE TABLE IF NOT EXISTS `invests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` int(11) NOT NULL,
  `hours` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_rec_time` int(11) NOT NULL DEFAULT '0',
  `next_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_time` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `capital_status` tinyint(1) NOT NULL COMMENT '1 = YES & 0 = NO',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `withdraw_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.invests: ~19 rows (approximately)
/*!40000 ALTER TABLE `invests` DISABLE KEYS */;
REPLACE INTO `invests` (`id`, `user_id`, `plan_id`, `amount`, `interest`, `period`, `hours`, `time_name`, `return_rec_time`, `next_time`, `last_time`, `status`, `capital_status`, `created_at`, `updated_at`, `withdraw_amount`) VALUES
	(2, 11, 8, '299000', '5083', 180, '24', 'Daily', 112, '2020-12-03 04:00:01', '2020-12-02 04:00:01', 1, 0, '2020-06-29 14:38:29', '2020-12-02 04:00:01', '569296'),
	(7, 9, 8, '299000', '5083', 180, '24', 'Daily', 112, '2020-12-03 04:00:01', '2020-12-02 04:00:01', 1, 0, '2020-06-30 08:39:37', '2020-12-02 04:00:01', '213486'),
	(8, 17, 8, '299000', '5083', 180, '24', 'Daily', 111, '2020-12-03 04:00:01', '2020-12-02 04:00:01', 1, 0, '2020-07-01 00:41:15', '2020-12-02 04:00:01', '564213'),
	(9, 16, 8, '299000', '5083', 180, '24', 'Daily', 110, '2020-12-03 04:00:01', '2020-12-02 04:00:01', 1, 0, '2020-07-01 16:11:27', '2020-12-02 04:00:01', '559130'),
	(10, 4, 7, '299000', '4186', 180, '24', 'Daily', 0, '2020-11-25 20:08:50', NULL, 9, 0, '2020-11-24 20:08:50', '2020-11-24 20:08:50', '0'),
	(11, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-06 03:30:37', NULL, 9, 0, '2021-03-05 03:30:37', '2021-03-05 03:30:37', '0'),
	(12, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 21:22:10', NULL, 9, 0, '2021-03-12 21:22:10', '2021-03-12 21:22:10', '0'),
	(13, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 21:37:23', NULL, 9, 0, '2021-03-12 21:37:23', '2021-03-12 21:37:23', '0'),
	(14, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 21:38:13', NULL, 9, 0, '2021-03-12 21:38:13', '2021-03-12 21:38:13', '0'),
	(15, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 21:39:38', NULL, 9, 0, '2021-03-12 21:39:38', '2021-03-12 21:39:38', '0'),
	(16, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 21:47:22', NULL, 9, 0, '2021-03-12 21:47:22', '2021-03-12 21:47:22', '0'),
	(17, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 21:48:13', NULL, 9, 0, '2021-03-12 21:48:13', '2021-03-12 21:48:13', '0'),
	(18, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 21:48:54', NULL, 9, 0, '2021-03-12 21:48:54', '2021-03-12 21:48:54', '0'),
	(19, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 22:11:17', NULL, 9, 0, '2021-03-12 22:11:17', '2021-03-12 22:11:17', '0'),
	(20, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 22:13:10', NULL, 9, 0, '2021-03-12 22:13:10', '2021-03-12 22:13:10', '0'),
	(21, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 22:13:13', NULL, 9, 0, '2021-03-12 22:13:13', '2021-03-12 22:13:13', '0'),
	(22, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 22:13:55', NULL, 9, 0, '2021-03-12 22:13:55', '2021-03-12 22:13:55', '0'),
	(23, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-12 18:19:53', NULL, 1, 0, '2021-03-12 22:17:57', '2021-03-12 22:19:53', '0'),
	(24, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-13 23:03:49', NULL, 9, 0, '2021-03-12 23:03:49', '2021-03-12 23:03:49', '0'),
	(25, 1, 7, '299000', '4186', 180, '24', 'Daily', 0, '2021-03-14 05:22:55', NULL, 9, 0, '2021-03-13 05:22:55', '2021-03-13 05:22:55', '0'),
	(26, 1, 8, '299000', '5083', 180, '24', 'Daily', 0, '2021-03-16 04:22:16', NULL, 9, 0, '2021-03-15 04:22:16', '2021-03-15 04:22:16', '0'),
	(27, 1, 6, '99000', '495', 365, '24', 'Daily', 0, '2021-03-17 03:47:42', NULL, 9, 0, '2021-03-16 03:47:42', '2021-03-16 03:47:42', '0'),
	(28, 1, 6, '99000', '495', 365, '24', 'Daily', 0, '2021-03-17 03:48:20', NULL, 9, 0, '2021-03-16 03:48:20', '2021-03-16 03:48:20', '0'),
	(29, 1, 6, '99000', '495', 365, '24', 'Daily', 0, '2021-03-17 03:49:37', NULL, 9, 0, '2021-03-16 03:49:37', '2021-03-16 03:49:37', '0');
/*!40000 ALTER TABLE `invests` ENABLE KEYS */;

-- Dumping structure for table lacura.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `jobs_queue_index` (`queue`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

-- Dumping structure for table lacura.languages
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.languages: ~2 rows (approximately)
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
REPLACE INTO `languages` (`id`, `icon`, `name`, `code`, `created_at`, `updated_at`) VALUES
	(1, '1560174798.png', '日本語', 'ja', '2019-06-10 16:53:18', '2019-06-10 16:53:18'),
	(2, '1560174834.png', 'Português', 'pt-br', '2019-06-10 16:53:54', '2019-06-10 16:53:54');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;

-- Dumping structure for table lacura.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.menus: ~2 rows (approximately)
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
REPLACE INTO `menus` (`id`, `name`, `title`, `text`, `created_at`, `updated_at`) VALUES
	(2, 'Termos', 'La Cura - Termos e Condições', '<p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;"></p><ol><li><font color="#000000" face="Open Sans, Arial, sans-serif">Não é permitido metal e ferros tais como: brincos, fivelas, correntes, anéis, pulseiras.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Pode ser a causa de alergias, queimaduras e/ou hematomas, como; coceiras, irritação de pele.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Não é permitido eletromagnéticos tais como: baterias, celulares ou força que contém energia.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Pode ser a causa de alergias, queimaduras internas no corpo, como; irritações ardentes na pele.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">O cancelamento da reserva que está confirmada só é aceitável alteração através da web site, caso não compareça o valor será cobrado.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Os horários reservados são para que não ocorram atrasos do próximo cliente.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">O tratamento são conforme o plano disponível no site e após início ao tratamento tem que ser seguido para que venha ter resultado satisfatórios.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Caso venha ter alterações ou prolongamento o tratamento pode se estender por mais tempo.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Cada consulta tem o custo conforme disponível no site e por qual quer motivo de insatisfação fica ciente e concorda com os termos.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Caso não tenha condições financeiras, indicaremos medidas que possa solucionar a situação pessoal.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">O agendamento precisa ser feito por representante e através de cadastro https://lacura.me/&nbsp;</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">O encarregado fica responsável da apresentação dos termos e condições das eventuais experiências.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Cliente afiliado no sistema tem os seguintes direitos, trabalha com a　La Cura, interagi no sistema da sua conta através do site.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Como trabalha na La Cura, indicação de clientes, orientar pessoas por sua ajuda.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Divulgação com ganhos porta a porta, com ganhos de amigos de amigos por porcentagem e bonificação.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Os tratamentos e informações do cliente são sigilosos e confidenciais.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">É proibido transmitir sobre as experiências das seções que pode ser a causa da diferença entre pessoas.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">Cliente aceita e está ciente que comparecerá por livre espontânea vontade e aceita todas as mudanças de melhorias e/ou efeitos colaterais, mesmo que a doença venha causar o falecimento da vida na seção.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">O órgão pode estar comprometido em paralisia crônica, que durante a experiência espiritual a alma pode recusar o retorno ao corpo, por sentir muitas dores, sofrimento na existência da continuidade d vida.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">O atendimento de menores de idade, menos que 18 anos não é permitido sem o seu responsável maior.</font></li><li><font color="#000000" face="Open Sans, Arial, sans-serif">As fases de tratamentos são「3」elementos da vida, como; espirito, mente e matéria.</font></li></ol><p></p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;"><img src="https://i.imgur.com/u2BWCie.png" width="690"><font color="#000000" face="Open Sans, Arial, sans-serif"><br></font></p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;"><font color="#000000" face="Open Sans, Arial, sans-serif">Por ser verdadeiro e dou fé, assino e aceito os termos e condições do presente documento.<br></font></p>', '2018-10-11 05:48:40', '2020-04-26 13:28:01'),
	(5, 'Termos', 'La Cura・受診条件', '<div><font color="#777777" face="Open Sans">金属や鉄などのアクセサリーは使用禁止しています。</font></div><div><font color="#777777" face="Open Sans">イヤリング、バックル、ネックレス、指輪、ブレスレットのような物。</font></div><div><font color="#777777" face="Open Sans">アレルギー、火傷やあざの症状の原因になる可能性があります。</font></div><div><font color="#777777" face="Open Sans">かゆみ、皮膚の刺激感など。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">電磁気は禁止しています。</font></div><div><font color="#777777" face="Open Sans">バッテリー、携帯電話や電気エネルギーを含まれているような物。</font></div><div><font color="#777777" face="Open Sans">アレルギー、内部の火傷、皮膚の炎症など。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">予約のキャンセルはウェブサイトのみで変更の手続きは可能ですが、万一受診しない場合は金額が請求されます。</font></div><div><font color="#777777" face="Open Sans">次のお客様に遅れが出ないように予約制になっています。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">治療期間がプランごとの診察で行ないます、治療開始したら十分な効果が得られるために1ヵ月毎に一回に診察が必要となります。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">万一変更や延長などがあった場合は治療期間は長くなる事があります。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">一回の診察料はプランに記載しておりますそれと不満な理由があっても返金できませんのでご了承をお願い致します。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">貧困の問題がある場合は、個人的な状況を解決する方法を示してあげます。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">予約の手続きは紹介者と会員登録が必要となります https://lacura.me/</font></div><div><font color="#777777" face="Open Sans">利用規約の説明と最終的にの体験が紹介者からの説明を受けます。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">La Curaと働く事が出来ます、ウェブサイトを通じてお客様のアカウントシステムでやりとり出来ます。</font><br></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">La Curaで働く方法には、紹介営業、あなたの助けによって人を導くこと。</font></div><div><font color="#777777" face="Open Sans">営業訪問の利益を得て、知人によるの紹介の割合とボーナスごとの利益になります。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">治療法とお客様の個人情報保護しています。</font></div><div><font color="#777777" face="Open Sans">診察の体験を伝達することは禁じられています、人々の間の違いの原因になる可能性があります。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">お客様が意識して自発的に参加することを承諾し、改善または副作用のすべての変化を受け入れ、診察中に病気で人生の死を引き起こす可能性もありますのでお客様が同意します。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">臓器は慢性麻痺に関与している可能性があり、精神的な体験の間に魂が体に戻ることを拒否することがあり、人生の連続性の存在に苦しんで、ひどい痛みを感じることためです。</font></div><div><font color="#777777" face="Open Sans">精神的な体験の間に魂が体に戻ることを拒否することがあるためです。</font></div><div><font color="#777777" face="Open Sans"><br></font></div><div><font color="#777777" face="Open Sans">未成年の場合は、18歳未満の方は保護者と一緒ではないと許可されません。</font></div><div><font color="#777777" face="Open Sans">治療法の段階は人生の「3」三つの要素があります; 精神、思考と物質です。</font></div><div><img src="https://i.imgur.com/u2BWCie.png" alt="" align="none"><font color="#777777" face="Open Sans"><br></font></div><div><br></div><div>真実で本物であるために、私はこの利用規約の全ての内容を同意して署名します。<br></div>', '2019-09-03 14:24:04', '2020-04-26 13:21:20');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Dumping structure for table lacura.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.migrations: ~81 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(6, '2018_09_15_055044_create_admins_table', 1),
	(14, '2018_09_23_070452_create_accounts_table', 8),
	(15, '2018_10_06_111835_create_teams_table', 9),
	(16, '2018_10_06_111923_create_testimonials_table', 9),
	(17, '2018_10_06_131253_create_socials_table', 10),
	(18, '2018_10_09_124655_create_services_table', 11),
	(19, '2018_10_11_054818_create_blogs_table', 12),
	(20, '2014_10_12_000000_create_users_table', 13),
	(21, '2018_10_11_112743_create_menus_table', 14),
	(22, '2018_10_13_120207_create_links_table', 15),
	(23, '2018_10_14_124147_create_advertises_table', 16),
	(24, '2018_10_15_094201_create_transections_table', 17),
	(25, '2018_10_15_112248_create_withdraws_table', 18),
	(26, '2018_10_15_112459_create_withdraw_methods_table', 18),
	(27, '2018_10_20_101804_create_support_tickets_table', 19),
	(28, '2018_10_20_101909_create_ticket_comments_table', 19),
	(29, '2018_10_21_073244_create_ip_tracks_table', 20),
	(30, '2018_12_04_055504_create_faqs_table', 21),
	(31, '2018_12_05_094029_create_plans_table', 22),
	(32, '2018_12_05_122043_create_time_settings_table', 23),
	(33, '2018_12_11_055235_create_invests_table', 24),
	(34, '2018_12_19_102753_create_epins_table', 25),
	(35, '2018_12_19_133151_create_referrals_table', 26),
	(36, '2018_12_27_122808_create_subscribers_table', 27),
	(37, '2018_12_27_141219_create_jobs_table', 28),
	(38, '2019_01_05_114834_create_languages_table', 29),
	(39, '2019_01_29_124624_create_how_it_works_table', 30),
	(44, '2019_06_29_111155_add_withdraw_amount_to_invests_table', 31),
	(53, '2019_07_01_091505_create_albums_table', 32),
	(54, '2019_07_01_110658_create_album_items_table', 32),
	(55, '2019_07_03_085803_add_image_to_users_table', 33),
	(56, '2019_07_03_090503_add_public_to_albums_table', 33),
	(58, '2019_07_03_100606_add_gallery_to_basic_settings_table', 34),
	(59, '2019_07_03_122215_add_rating_count_to_album_items_table', 35),
	(64, '2019_07_04_055207_add_extra_to_plans_table', 36),
	(66, '2019_07_04_095306_add_users_to_basic_settings_table', 37),
	(67, '2019_07_04_115625_add_affiliate_rules_to_basic_settings_table', 38),
	(70, '2019_07_04_124735_create_referral_commissions_table', 39),
	(71, '2019_07_04_132921_create_user_logins_table', 40),
	(76, '2019_07_04_133209_add_login_time_to_users_table', 41),
	(77, '2019_07_04_133919_create_user_logins_table', 42),
	(78, '2019_07_06_053225_add_status_to_referral_commissions_table', 43),
	(81, '2019_07_06_093814_create_about_mes_table', 44),
	(83, '2019_07_07_063632_create_schedules_table', 45),
	(84, '2019_07_07_112243_add_status_to_schedules_table', 46),
	(85, '2019_07_07_133033_add_schedule_price_to_basic_settings_table', 47),
	(86, '2019_07_07_134328_add_schedule_title_to_basic_settings_table', 48),
	(87, '2019_07_09_115909_add_registration_logo_to_basic_settings_table', 49),
	(88, '2019_07_09_122220_create_sliders_table', 50),
	(91, '2019_07_10_052052_add_slider_speed_to_basic_settings_table', 51),
	(92, '2019_07_10_062803_add_nickname_to_users_table', 52),
	(93, '2019_07_10_082352_create_news_table', 53),
	(94, '2019_07_10_100253_add_news_image_to_basic_settings_table', 54),
	(103, '2019_07_17_065723_add_remark_charge_to_schedules_table', 55),
	(104, '2019_07_18_113125_create_email_languages_table', 55),
	(105, '2019_07_20_053829_add_lang_to_users_table', 55),
	(106, '2019_07_20_075144_add_lang_to_admins_table', 56),
	(107, '2019_07_20_075332_add_lang_to_basic_settings_table', 57),
	(108, '2019_07_20_092237_add_notified_at_to_schedules_table', 58),
	(109, '2019_07_22_072400_add_long_lat_to_user_logins_table', 59),
	(110, '2019_07_23_062443_add_schedule_email_to_basic_settings_table', 60),
	(111, '2019_08_04_101232_add_lang_to_sliders_table', 61),
	(112, '2019_08_04_104725_add_image_to_plans_table', 62),
	(114, '2019_08_04_113306_add_nominee_to_basic_settings_table', 63),
	(115, '2019_08_05_051011_add_link_to_blogs_table', 64),
	(116, '2019_08_05_071316_add_withdraw_verify_documents_to_users_table', 65),
	(117, '2019_09_22_073026_add_temp_to_albums_table', 66),
	(121, '2019_09_23_111020_add_temp_to_sliders_table', 67),
	(123, '2019_09_23_135122_add_invest_id_to_schedules_table', 68),
	(124, '2019_09_23_142529_add_seo_to_basic_settings_table', 69),
	(125, '2019_09_25_135559_add_textpt_to_blogs_table', 70),
	(126, '2019_09_26_055627_add_slider_textpt_to_basic_settings_table', 71),
	(128, '2019_09_26_091814_add_about_map_to_basic_settings_table', 73),
	(129, '2019_09_26_095006_add_show_about_to_albums_table', 74),
	(136, '2019_09_26_112345_create_social_marketings_table', 75),
	(137, '2019_09_26_112852_create_social_marketing_services_table', 75),
	(138, '2019_09_26_113638_create_user_social_marketing_services_table', 75),
	(140, '2019_09_28_052921_create_social_marketing_service_subscribers_table', 76),
	(145, '2019_10_07_125208_add_location_to_schedules_table', 77),
	(146, '2019_10_07_131200_add_schedule_cities_to_basic_settings_table', 77),
	(148, '2019_07_01_110658_create_basic_settings_table', 77),
	(149, '2019_09_26_070502_create_pages_table', 78),
	(151, '2021_02_27_232945_add_slider_settings_fields_to_basic_setting', 79),
	(153, '2021_03_04_212734_add_footer_settings_fields_to_basic_settings', 80),
	(155, '2021_03_05_040558_create_inst_sliders_table', 81),
	(158, '2021_03_06_224902_add_footer_slider_setting_to_basic_settings_table', 82),
	(159, '2021_03_09_050805_add_translation_keys_to_pages', 83),
	(160, '2021_03_23_224320_add_contact_data_to_users_table', 84),
	(161, '2021_03_25_041627_create_min_blog_categories_table', 85),
	(162, '2021_03_25_042751_add_category_id_to_min_blog_table', 85);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table lacura.miniblogs
CREATE TABLE IF NOT EXISTS `miniblogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `sub_title` varchar(200) NOT NULL,
  `Image` text NOT NULL,
  `description` text NOT NULL,
  `Status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.miniblogs: ~0 rows (approximately)
/*!40000 ALTER TABLE `miniblogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `miniblogs` ENABLE KEYS */;

-- Dumping structure for table lacura.mini_blogs
CREATE TABLE IF NOT EXISTS `mini_blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_ja` text NOT NULL,
  `title_pt` text NOT NULL,
  `image` text NOT NULL,
  `description_ja` text NOT NULL,
  `description_pt` text NOT NULL,
  `tags` varchar(200) DEFAULT NULL,
  `Status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.mini_blogs: ~2 rows (approximately)
/*!40000 ALTER TABLE `mini_blogs` DISABLE KEYS */;
REPLACE INTO `mini_blogs` (`id`, `title_ja`, `title_pt`, `image`, `description_ja`, `description_pt`, `tags`, `Status`, `created_at`, `updated_at`, `category_id`) VALUES
	(1, 'La Curaのコンセプト', 'O Conceito da La Cura.', '1596951866.jpg', '<p><span style="font-size:16px">本日は、ようこそ説明会に参加していただきまして、ありがとうございます。</span></p>\r\n\r\n<p><span style="font-size:16px">軽く自己紹介をさせて頂きます。</span></p>\r\n\r\n<p><span style="font-size:16px">La Curaの代表、26歳、2005年からは、あらゆる認識が高まり、精神的な進化が起こり始め、日常的に不思議な力が強くなって、天からの宿命を持つ事がわかったんです。</span></p>\r\n\r\n<p><span style="font-size:16px">2011年から、天命に従い、人様を助け共に歩んで参りました。</span></p>\r\n\r\n<p><span style="font-size:16px">今回は2021年の世界を取り巻く状況から、今後、如何に生きていくかという事をお伝えして参ります。</span></p>\r\n\r\n<p><span style="font-size:16px">天下には何事にも機会があり、目的のための時がある</span></p>\r\n\r\n<p><span style="font-size:16px">まず、私たち、人類は世界でも稀に見る激変の時代に生きています。</span></p>\r\n\r\n<p><span style="font-size:16px">幸い大きな戦争は今のところ、ないものの、皆様今現在、その最中であります新型ウィルスによってビフォー、アフターの大激変の最中です。</span></p>\r\n\r\n<p><span style="font-size:16px">一旦は、収束したかに見えたウィルスですが、既にパンデミックというような事態になっています。</span></p>\r\n\r\n<p><span style="font-size:16px">経済的にも、現在の経済の統計四半期ベースでなん割か落ち込んでいます。</span></p>\r\n\r\n<p><span style="font-size:16px">この本波もやがて目に見えて訪れて行く事でしょう。</span></p>\r\n\r\n<p><span style="font-size:16px">今後の私達は、医療崩壊や物資の不足、食糧危機という事も他人事でなく十分に起こり得るのだという認識で生活しなければなりません。</span></p>\r\n\r\n<p><span style="font-size:16px">その為には健全な心、肉体、魂という正常な状態を保っていかなければなりません。</span></p>\r\n\r\n<p><span style="font-size:16px">それから水や保存食といった物の備蓄も、買い占めるではなく少しずつ、蓄えていっておいた方がいいでしょう。</span></p>\r\n\r\n<p><span style="font-size:16px">備えあれば憂いなしとはいいますが、この教訓を守っていれば、例え困るにしても、その度合いは限られてくるでしょう。</span></p>\r\n\r\n<p><span style="font-size:16px">ここからは私たちの根源、ルーツの話になります。</span></p>\r\n\r\n<p><span style="font-size:16px">私たちは一体、どこからきて、どこにいくのでしょう。</span></p>\r\n\r\n<p><span style="font-size:16px">そういった事は、人として生まれたら、一度位は考えてみた事がある事でしょう。</span></p>\r\n\r\n<p><span style="font-size:16px">地球上には、キリスト教、イスラム教、ユダヤ教という三大宗教の聖地が、イスラエルのエルサレムにありますね。</span></p>\r\n\r\n<p><span style="font-size:16px">そして、仏教、ヒンズー教等、様々な宗教があります。</span></p>\r\n\r\n<p><span style="font-size:16px">それは確かに事実ですが、様々な宗教があっても、それ以上に私達が地球という</span></p>\r\n\r\n<p><span style="font-size:16px">一つ星に住んでいるという大きな事実があります。</span></p>\r\n\r\n<p><span style="font-size:16px">そして地球は太陽系の一部です。</span></p>\r\n\r\n<p><span style="font-size:16px">太陽系は銀河系の一部です。</span></p>\r\n\r\n<p><span style="font-size:16px">銀河系は、千億も数以上あります。</span></p>\r\n\r\n<p><span style="font-size:16px">現在の宇宙では、ビックバンという宇宙の始まりからずっと膨張し続けています。</span></p>\r\n\r\n<p><span style="font-size:16px">現在、色んな事が解明されてきて、様々な宗教の教義の違いから争うという</span></p>\r\n\r\n<p><span style="font-size:16px">宗教戦争の時代も終わりを告げてきています。</span></p>\r\n\r\n<p><span style="font-size:16px">宗教で争う時代が完全に終わったとしても、私達には種々の問題が山積しています。</span></p>\r\n\r\n<p><span style="font-size:16px">人種問題、人権問題、経済問題、精神問題、仕事の問題、ストレスの問題、健康問題、これらの問題の根本は生老病死苦です。</span></p>\r\n\r\n<p><span style="font-size:16px">人は生まれた以上、色んな変遷を経て最後に必ず、死を迎えます。</span></p>\r\n\r\n<p><span style="font-size:16px">つまり、人間の死亡率は100%です。</span></p>\r\n\r\n<p><span style="font-size:16px">あなたは、苦しんで生きて苦しんで死んで行きたいですか？　それは、やはり嫌ですよね。</span></p>\r\n\r\n<p><span style="font-size:16px">人として、人間として産まれた以上幸せに全うに人生を歩みたいものです。</span></p>\r\n\r\n<p><span style="font-size:16px">人という字を見てみてください。</span></p>\r\n\r\n<p><span style="font-size:16px">正面から見ると人です。</span></p>\r\n\r\n<p><span style="font-size:16px">支え合っているように見えますよね。</span></p>\r\n\r\n<p><span style="font-size:16px">人は、個体を持つ事によって他者との違いを明確にして、自分を見つめ直すという事ができるんです。</span></p>\r\n\r\n<p><span style="font-size:16px">同じ体験をしても、その人のフィルターによって見え方も感じ方も変わってくるんです。</span></p>\r\n\r\n<p><span style="font-size:16px">その中で共通項、最大公約数という事があります。</span></p>\r\n\r\n<p><span style="font-size:16px">そこに、人類共通の認識が産まれています。</span></p>\r\n\r\n<p><span style="font-size:16px">その人類共通の認識、基準の中で自分の人生との乖離を感じるんです。</span></p>\r\n\r\n<p><span style="font-size:16px">それが、幸せであれば、問題はありません。</span></p>\r\n\r\n<p><span style="font-size:16px">しかしながら、だいたいは、様々な不幸という問題を抱えて行きます。</span></p>\r\n\r\n<p><span style="font-size:16px">それが、自分だけの力ですぐに解決する問題ならいいです。</span></p>\r\n\r\n<p><span style="font-size:16px">そういう場合、大抵は自分だけで解決しないんです。</span></p>\r\n\r\n<p><span style="font-size:16px">その結果、悩みというストレスの中で疲弊して行きます。<br />\r\nそんな人生は好きですか？</span></p>\r\n\r\n<p><span style="font-size:16px">もし、そんなストレス嫌ですよね。</span></p>\r\n\r\n<p><span style="font-size:16px">ただ、自分一人では解決できない。</span></p>\r\n\r\n<p><span style="font-size:16px">そんな時、貴方の問題をサクッと解決してくれるサービスがあったらどうでしょう？</span></p>\r\n\r\n<p><span style="font-size:16px">時間という有限の資源で構成されている貴方の人生が、ストレスなく輝く事をお手伝いさせて頂く事が、できるのが、私の特別な力なのです。</span></p>\r\n\r\n<p><span style="font-size:16px">貴方が、今、どんな問題があっても差し支えありません。</span></p>\r\n\r\n<p><span style="font-size:16px">私の授かりし、特別な力により、貴方が産まれもった魂の封印を開放して、今生において貴方の魂が本来、持った特性と結びついて、この世に開放されて行きます。</span></p>\r\n\r\n<p><span style="font-size:16px">私が各、神々（光）とどういう繋がりがあるのかというのはウェブサイトのギャラリーのほうでご覧頂けます。https://lacura.me/about</span></p>\r\n\r\n<p><span style="font-size:16px">これは、貴方の力とは一切、関係ありません。</span></p>\r\n\r\n<p><span style="font-size:16px">私のお祓いを受けるだけで、全てが解決するんです。<br />\r\nこれって素晴らしくないですか？</span></p>\r\n\r\n<p><span style="font-size:16px">では、具体的に何を解決でするのかを紹介いたします。</span></p>\r\n\r\n<p><span style="font-size:16px">あらゆる中毒・依存の治療・精神的なトラウマ・精神的な病気・精神の浄化・仕事の影響（ケガ・病気）</span></p>\r\n\r\n<p><span style="font-size:16px">例えば、先生のお祓いはウィルスさえ、寄せ付けない程、強力なんです。</span></p>\r\n\r\n<p><span style="font-size:16px">こればかりは、体験して頂くのが一番なので、是非、一度、お祓いを受けて見られてはいかがでしょう！</span></p>\r\n\r\n<p><span style="font-size:16px">さて、私のお祓いがいかに素晴らしいかは、一度、受けて見られるのが一番なのですが、それでも素晴らしさの一旦はお伝えできたのでは、ないでしょうか。</span></p>\r\n\r\n<p><span style="font-size:16px">世界の問題で大きい物の一つに貧富の差がありますね。</span></p>\r\n\r\n<p><span style="font-size:16px">lacura.me としても、ここは何か取り組まなければ、ならない</span></p>\r\n\r\n<p><span style="font-size:16px">問題の一つでした。</span></p>\r\n\r\n<p><span style="font-size:16px">そこでlacura.meでは、世界初ともいえるギフトという</span></p>\r\n\r\n<p><span style="font-size:16px">システムをサイト上に公開しています。</span></p>\r\n\r\n<p><span style="font-size:16px">このシステムは lacura.meのお祓いを貴方のお仲間に紹介する事でギフトとして貴方の入金した金額のトータル一定額が毎日ギフトとして頂けるシステムなんです。</span></p>\r\n\r\n<p><span style="font-size:16px">誰も紹介できなかったとしても、貴方はきちんとお祓いは受けられます。</span></p>\r\n\r\n<p><span style="font-size:16px">このギフトはあくまでも最低三人を紹介した時の特典としてお考えください。</span></p>\r\n\r\n<p><span style="font-size:16px">では、こんにち、私たちの社会的な経済格差を無くして行く為、そして幸せを手に入れて頂くため、ラクラではギフトを提案します。</span></p>\r\n\r\n<p><span style="font-size:16px">貴方がギフトに参加して頂く事によってあらゆる悩みから解放されます。</span></p>\r\n\r\n<p><span style="font-size:16px">ここまでは、ラクラからのお祓いによって成し遂げられます。</span></p>\r\n\r\n<p><span style="font-size:16px">貴方がギフトに参加することによって</span></p>\r\n\r\n<p><span style="font-size:16px">例えば30万円の借金があったとしても問題はありません。</span></p>\r\n\r\n<p><span style="font-size:16px">なぜならば、ラクラ、ギフトに参加して3人の紹介者を出すことで1日当たり1.4% 180日間に及ぶギフトを受け取れるからです。</span></p>\r\n\r\n<p><span style="font-size:16px">貴方の出費について考えてみましょう！</span></p>\r\n\r\n<p><span style="font-size:16px">まず、世の中は人が作った物すべて、経済で回っています。</span></p>\r\n\r\n<p><span style="font-size:16px">つまり、価値の交換です。</span></p>\r\n\r\n<p><span style="font-size:16px">即ち、ご存知のようにお金がないと何も出来ないのです。</span></p>\r\n\r\n<p><span style="font-size:16px">貴方がもし車を購入するとします。<br />\r\n毎月のローン・毎年の車検代・毎年の保険代・毎日のガソリン代・車のメンテナンス代金<br />\r\n一体年間いくらかかるでしょう！どれだけのお金を支払っていますか？</span></p>\r\n\r\n<p><span style="font-size:16px">貴方がもし、子供さんを養育している<br />\r\nシングルマザー、つまり母子では一体どれだけの出費が発生するでしょうか？</span></p>\r\n\r\n<p><span style="font-size:16px">家賃・光熱費・通信費・保険代・子供教育費<br />\r\nそれらの物にどれたげ出費をしているでしょう？</span></p>\r\n\r\n<p><span style="font-size:16px">つまり、貴方は何もしなければ出費ばかりで貯金もなく豊かにならないという現実があるのです。</span></p>\r\n\r\n<p><span style="font-size:16px">もしも、貴方がラクラ、ギフトに参加すれば貴方のお金の苦しい問題も解決する事になります。</span></p>\r\n\r\n<p><span style="font-size:16px">賢明な貴方なら理解して頂いてくれた事でしょう。</span></p>\r\n\r\n<p><span style="font-size:16px">貴方とラクラ、ギフトでお会いする事を楽しみにしています。</span></p>\r\n\r\n<p><span style="font-size:16px">ここまで、駆け足で説明してきましたが、どうでしたでしょう。</span></p>\r\n\r\n<p><span style="font-size:16px">まずは、貴方の悩みはお祓いですべてなかった事にしましょう。</span></p>\r\n\r\n<p><span style="font-size:16px">お聞き頂き、ありがとうございました。</span></p>', '<p><span style="font-size:16px">O Conceito da La Cura.</span></p>\r\n\r\n<p><span style="font-size:16px">Obrigado por juntar-se a n&oacute;s hoje para esse momento.</span></p>\r\n\r\n<p><span style="font-size:16px">Eu sou dono da La Cura, aos 26 anos de idade, em 2005, todas as percep&ccedil;&otilde;es se intensificam cada vez mais, a evolu&ccedil;&atilde;o espiritual come&ccedil;ando a acontecer e surgi poder misterioso fortalecendo a cada dia, e percebi ent&atilde;o que sou conectado com as luzes al&eacute;m da nossa exist&ecirc;ncia. Desde antes e depois de 2011, eu venho obedecendo a ordenan&ccedil;as celestiais.</span></p>\r\n\r\n<p><span style="font-size:16px">Nesse analise, vamos ver a situa&ccedil;&atilde;o do mundo em 2021, estou aqui para lhes dizer como fazer o melhor das coisas.</span></p>\r\n\r\n<p><span style="font-size:16px">&nbsp;&ldquo;H&aacute; uma oportunidade para tudo sob o sol, e um tempo para um prop&oacute;sito.&rdquo;</span></p>\r\n\r\n<p><span style="font-size:16px">Em primeiro lugar, n&oacute;s humanos estamos vivendo em uma era de mudan&ccedil;as catacl&iacute;smicas que raramente &eacute; vista no mundo...</span></p>\r\n\r\n<p><span style="font-size:16px">Embora n&atilde;o haja uma grande guerra no momento, estamos no meio de um grande tumulto de antes e depois das mudan&ccedil;as causadas por um novo tipo de v&iacute;rus...</span></p>\r\n\r\n<p><span style="font-size:16px">Uma vez que o v&iacute;rus parecia estar contido, agora se tornou o que parece ser uma pandemia...</span></p>\r\n\r\n<p><span style="font-size:16px">Economicamente, a economia caiu uma pequena porcentagem em base estat&iacute;stica atual...</span></p>\r\n\r\n<p><span style="font-size:16px">Esta onda vir&aacute; em breve.</span></p>\r\n\r\n<p><span style="font-size:16px">No futuro, devemos viver com o entendimento de que o colapso dos cuidados m&eacute;dicos, a escassez de bens e as crises alimentares n&atilde;o s&atilde;o algo com que possamos nos preocupar, mas que est&atilde;o cada vez mais pr&oacute;ximo de acontecer.</span></p>\r\n\r\n<p><span style="font-size:16px">Para isso, &eacute; preciso manter uma mente, corpo e alma saud&aacute;veis...</span></p>\r\n\r\n<p><span style="font-size:16px">Tamb&eacute;m seria melhor estocar &aacute;gua e alimentos conservados, n&atilde;o os comprando tudo de uma vez, mas um pouco de cada vez...</span></p>\r\n\r\n<p><span style="font-size:16px">Se voc&ecirc; estiver preparado, estar&aacute; melhor, mas se voc&ecirc; seguir esta li&ccedil;&atilde;o ficara melhor.</span></p>\r\n\r\n<p><span style="font-size:16px">Mesmo se voc&ecirc; estiver em apuros, o grau de dificuldade ser&aacute; limitado...</span></p>\r\n\r\n<p><span style="font-size:16px">A partir daqui, eu gostaria de falar sobre as minhas diretrizes.</span></p>\r\n\r\n<p><span style="font-size:16px">De onde viemos e para onde estamos indo?</span></p>\r\n\r\n<p><span style="font-size:16px">Se voc&ecirc; nasceu, deve ter pensado em semelhantes coisas pelo menos uma vez em sua vida.</span></p>\r\n\r\n<p><span style="font-size:16px">Existem tr&ecirc;s religi&otilde;es principais na terra: o cristianismo, o islamismo e o juda&iacute;smo.</span></p>\r\n\r\n<p><span style="font-size:16px">Os locais santos das tr&ecirc;s principais religi&otilde;es est&atilde;o localizados em Jerusal&eacute;m, Israel.</span></p>\r\n\r\n<p><span style="font-size:16px">Existem muitas religi&otilde;es diferentes, incluindo budismo, hindu&iacute;smo, etc.</span></p>\r\n\r\n<p><span style="font-size:16px">Isto &eacute; verdade, mas tamb&eacute;m &eacute; verdade que, embora existam muitas religi&otilde;es diferentes, mas h&aacute; mais do que isso, porque n&oacute;s somos feitos da terra.</span></p>\r\n\r\n<p><span style="font-size:16px">&Eacute; um grande fato que vivemos em uma &uacute;nica estrela.</span></p>\r\n\r\n<p><span style="font-size:16px">E a Terra &eacute; uma parte do sistema solar.</span></p>\r\n\r\n<p><span style="font-size:16px">O sistema solar &eacute; uma parte de nossa gal&aacute;xia.</span></p>\r\n\r\n<p><span style="font-size:16px">Existem mais de 100 bilh&otilde;es de gal&aacute;xias na gal&aacute;xia.</span></p>\r\n\r\n<p><span style="font-size:16px">O universo atual vem se expandindo desde o in&iacute;cio do Big Bang.</span></p>\r\n\r\n<p><span style="font-size:16px">Atualmente, muitas coisas foram descobertas e muitas religi&otilde;es diferentes est&atilde;o tentando lutar umas contra as outras por doutrinas diferentes.</span></p>\r\n\r\n<p><span style="font-size:16px">A era da guerra religiosa est&aacute; chegando ao fim.</span></p>\r\n\r\n<p><span style="font-size:16px">Mesmo que a era da luta religiosa tenha terminado completamente, ainda temos muitos problemas a enfrentar.</span></p>\r\n\r\n<p><span style="font-size:16px">Quest&otilde;es raciais, de direitos humanos, econ&ocirc;micas, psicol&oacute;gicas, de trabalho, de estresse, de sa&uacute;de, e a raiz de todas estas quest&otilde;es &eacute; a vida, o envelhecimento, a doen&ccedil;a e a morte.</span></p>\r\n\r\n<p><span style="font-size:16px">Uma vez nascido, o ser humano e qualquer outra vida passa por v&aacute;rias transi&ccedil;&otilde;es e inevitavelmente morrer&aacute; no final de suas vidas.</span></p>\r\n\r\n<p><span style="font-size:16px">Em outras palavras, a taxa de mortalidade para os seres humanos e qualquer outra vida &eacute; de 100%.</span></p>\r\n\r\n<p><span style="font-size:16px">Voc&ecirc; quer morrer sofrendo?　Certamente, n&atilde;o.</span></p>\r\n\r\n<p><span style="font-size:16px">Desde que nascemos como seres humanos, queremos viver a vidas felizes e completamente livres.</span></p>\r\n\r\n<p><span style="font-size:16px">Olhe para a palavra dos caracteres japoneses &ldquo;pessoa&rdquo;人<br />\r\nSe voc&ecirc; olhar de frente, &eacute; uma pessoa人 parece estar se apoiando um no outro.</span></p>\r\n\r\n<p><span style="font-size:16px">A outra pessoa pode ser que tenha a resposta que voc&ecirc; tanto precise &eacute; uma formula de esclarecer as diferen&ccedil;as entre n&oacute;s e os outros, e nos permite olhar para n&oacute;s mesmos.&nbsp;</span></p>\r\n\r\n<p><span style="font-size:16px">&ldquo;As coisas existentes na terra e uma ess&ecirc;ncia que faz parte do seu c&eacute;rebro&rdquo;.</span></p>\r\n\r\n<p><span style="font-size:16px">Mesmo que voc&ecirc; tenha a mesma experi&ecirc;ncia, a maneira como voc&ecirc; a v&ecirc; e percebe ir&aacute; ter mudan&ccedil;as dependendo do seu filtro.</span></p>\r\n\r\n<p><span style="font-size:16px">Existe um denominador comum, &agrave;s vezes denominador m&aacute;ximo.&nbsp;</span></p>\r\n\r\n<p><span style="font-size:16px">&Eacute; aqui que nasce uma compreens&atilde;o comum da humanidade.</span></p>\r\n\r\n<p><span style="font-size:16px">Essa percep&ccedil;&atilde;o voc&ecirc; pode sentir a diverg&ecirc;ncia na sua vida comum e entre a humanidade.</span></p>\r\n\r\n<p><span style="font-size:16px">Se for felicidade, ent&atilde;o n&atilde;o h&aacute; problema.</span></p>\r\n\r\n<p><span style="font-size:16px">No entanto, geralmente v&ecirc;m com v&aacute;rios problemas de infort&uacute;nio.</span></p>\r\n\r\n<p><span style="font-size:16px">Se for um problema que pode ser resolvido rapidamente por voc&ecirc; mesmo, ent&atilde;o est&aacute; tudo resolvido e bem.</span></p>\r\n\r\n<p><span style="font-size:16px">Muitos casos, na maioria das vezes, n&atilde;o conseguem resolver o problema sozinho.</span></p>\r\n\r\n<p><span style="font-size:16px">Como resultado, ficamos exaustos sob o estresse da preocupa&ccedil;&atilde;o.</span></p>\r\n\r\n<p><span style="font-size:16px">Gosta dessa vida?</span></p>\r\n\r\n<p><span style="font-size:16px">Voc&ecirc; n&atilde;o quer ficar estressado dessa maneira.</span></p>\r\n\r\n<p><span style="font-size:16px">Mas voc&ecirc; n&atilde;o pode resolver este problema sozinho.</span></p>\r\n\r\n<p><span style="font-size:16px">Em tais momentos, voc&ecirc; gostaria de ter algu&eacute;m que possa resolver rapidamente seus problemas?</span></p>\r\n\r\n<p><span style="font-size:16px">Sua vida, que &eacute; composta de um recurso finito chamado tempo, e &eacute; com muito prazer ajudar voc&ecirc; a ter um melhor desempenho em sua vida, eu posso lhe ajudar.</span></p>\r\n\r\n<p><span style="font-size:16px">N&atilde;o importa que tipo de problemas voc&ecirc; tenha, isso n&atilde;o far&aacute; diferen&ccedil;a.</span></p>\r\n\r\n<p><span style="font-size:16px">Por poder divino, ser&aacute; libertada atrav&eacute;s do selo de sua alma inata, sincronizando voc&ecirc; a f&eacute; celestial.</span></p>\r\n\r\n<p><span style="font-size:16px">Voc&ecirc; pode saber mais sobre a mim no link abaixo, s&atilde;o fotografias absolutas e verdadeiras de luzes celestes que veem do universo.</span></p>\r\n\r\n<p><span style="font-size:16px">Veja na galeria do website https://lacura.me/about&nbsp;</span></p>\r\n\r\n<p><span style="font-size:16px">Isto n&atilde;o tem nada a ver com o poder que voc&ecirc; tem.</span></p>\r\n\r\n<p><span style="font-size:16px">Tudo o que voc&ecirc; precisa fazer &eacute; uma se&ccedil;&atilde;o de exorcismo e tudo ser&aacute; diferente e as coisas se resolvem.</span></p>\r\n\r\n<p><span style="font-size:16px">Isto n&atilde;o &eacute; fant&aacute;stico?</span></p>\r\n\r\n<p><span style="font-size:16px">Portanto, o que apresentarei a voc&ecirc; &eacute; exatamente uma solu&ccedil;&atilde;o espec&iacute;fica para um problema.</span></p>\r\n\r\n<p><span style="font-size:16px">Tratamento de v&iacute;cios e depend&ecirc;ncias, traumas mentais, doen&ccedil;as mentais, purifica&ccedil;&atilde;o mental e dores.</span></p>\r\n\r\n<p><span style="font-size:16px">Por exemplo, o exorcismo &eacute; t&atilde;o poderoso que voc&ecirc; poder&aacute; fica imune e n&atilde;o atrai nem mesmo um v&iacute;rus.</span></p>\r\n\r\n<p><span style="font-size:16px">Esta &eacute; a melhor coisa que voc&ecirc; pode experimentar, ent&atilde;o por que n&atilde;o fazer um exorcismo e ver do que se trata pelo menos uma vez! A melhor maneira de experimentar isto &eacute; experiment&aacute;-lo por si mesmo.</span></p>\r\n\r\n<p><span style="font-size:16px">Agora, &eacute; melhor voc&ecirc; fazer o exorcismo, para ver como &eacute; maravilhosa essa experi&ecirc;ncia incr&iacute;vel, e espero ter transmitido com transpar&ecirc;ncia uma parte de como &eacute; maravilhosa e valiosa uma se&ccedil;&atilde;o.</span></p>\r\n\r\n<p><span style="font-size:16px">Uma das quest&otilde;es mais importantes no mundo &eacute; a disparidade entre ricos e pobres.</span></p>\r\n\r\n<p><span style="font-size:16px">Eu, como lacura.me , tamb&eacute;m tenho que fazer algo a respeito disso.</span></p>\r\n\r\n<p><span style="font-size:16px">Faz parte de um dos problemas.</span></p>\r\n\r\n<p><span style="font-size:16px">&Eacute; um orgulho da lacura.me apresentar o plano chamado presente o sistema est&aacute; dispon&iacute;vel no site.</span></p>\r\n\r\n<p><span style="font-size:16px">Este sistema foi projetado para voc&ecirc; e amigos e colegas fazerem a se&ccedil;&atilde;o com incentivo e seguran&ccedil;a na lacura.me, voc&ecirc; receber&aacute; uma quantia fixa de seu dep&oacute;sito com uma porcentagem de retorno como presente di&aacute;rio. &Eacute; um sistema que lhe permite seguran&ccedil;a e estabilidade.</span></p>\r\n\r\n<p><span style="font-size:16px">Caso voc&ecirc; n&atilde;o consiga apresentar ningu&eacute;m, a sua se&ccedil;&atilde;o ser&aacute; devidamente feita.</span></p>\r\n\r\n<p><span style="font-size:16px">Este presente com retorno s&oacute; &eacute; considerado e permitido o saque das recompensas por indicar pelo menos um m&iacute;nimo de tr&ecirc;s pessoas.</span></p>\r\n\r\n<p><span style="font-size:16px">Atualmente hoje nesse momento agora, a fim de reduzir a disparidade econ&ocirc;mica em nossa sociedade, e para ajud&aacute;-lo a ter uma vida feliz, Eu Kushioyada Elisson Tadao da La Cura lhe oferece um presente que ser&aacute; a realiza&ccedil;&atilde;o e liberta&ccedil;&atilde;o.</span></p>\r\n\r\n<p><span style="font-size:16px">Ao participar desse presente com retorno, voc&ecirc; se libertar&aacute; de todas as suas preocupa&ccedil;&otilde;es.</span></p>\r\n\r\n<p><span style="font-size:16px">Isto &eacute; tudo ser&aacute; conseguido atrav&eacute;s das se&ccedil;&otilde;es da La Cura.</span></p>\r\n\r\n<p><span style="font-size:16px">Quando voc&ecirc; participar do presente</span></p>\r\n\r\n<p><span style="font-size:16px">Por exemplo, mesmo que voc&ecirc; tenha uma d&iacute;vida de 300.000 ienes, n&atilde;o h&aacute; problema.</span></p>\r\n\r\n<p><span style="font-size:16px">Porque voc&ecirc; pode e recebera 1,4% por dia durante 180 dias por participa&ccedil;&atilde;o desse maravilhoso presente, colocando tr&ecirc;s (3) referencias ativa para um (1) saque.</span></p>\r\n\r\n<p><span style="font-size:16px">Pense em suas despesas! Pense nos seus gastos!</span></p>\r\n\r\n<p><span style="font-size:16px">Primeiro de tudo e antes de tudo, o mundo funciona e depende da economia para tudo o que as pessoas fizeram ou fazem.</span></p>\r\n\r\n<p><span style="font-size:16px">Em outras palavras, &eacute; uma troca um interc&acirc;mbio de valor.</span></p>\r\n\r\n<p><span style="font-size:16px">Em outras palavras, como voc&ecirc; sabe voc&ecirc; n&atilde;o pode fazer nada sem dinheiro.</span></p>\r\n\r\n<p><span style="font-size:16px">Digamos ou suponha que voc&ecirc; est&aacute; comprando ou v&aacute; comprar um carro.</span></p>\r\n\r\n<p><span style="font-size:16px">Financiamento mensal, inspe&ccedil;&atilde;o anual do ve&iacute;culo, seguro anual, gasolina di&aacute;ria e manuten&ccedil;&atilde;o do carro.<br />\r\nQuanto vai custar por um ano? Quanto dinheiro voc&ecirc; est&aacute; pagando? Este dinheiro n&atilde;o retorna mais.</span></p>\r\n\r\n<p><span style="font-size:16px">Se voc&ecirc; est&aacute; educando uma crian&ccedil;a.<br />\r\nQuanto uma m&atilde;e solteira, ou m&atilde;e e filho, teriam que gastar?<br />\r\nAluguel de Casa, Gastos &aacute;gua luz g&aacute;s, telefone e internet, Seguros e Educa&ccedil;&atilde;o a Crian&ccedil;a. Quanto voc&ecirc; gasta com essas coisas?<br />\r\nEm outras palavras, a realidade &eacute; que se voc&ecirc; n&atilde;o fizer nada, voc&ecirc; s&oacute; estar&aacute; gastando vai gastar cada vez mais e n&atilde;o ter&aacute; economias e n&atilde;o ser&aacute; rico.</span></p>\r\n\r\n<p><span style="font-size:16px">Se voc&ecirc; participa do La Cura dessa doa&ccedil;&atilde;o, seus problemas de financeiras ser&atilde;o e podem ser resolvidos de uma vez por todas.</span></p>\r\n\r\n<p><span style="font-size:16px">Tenho certeza de que voc&ecirc;, sendo uma pessoa s&aacute;bia e em sua sabedoria, entender&aacute; o poder da minha palavra.</span></p>\r\n\r\n<p><span style="font-size:16px">Estou ansioso e espero encontr&aacute;-lo em uma das minhas se&ccedil;&otilde;es da La Cura.</span></p>\r\n\r\n<p><span style="font-size:16px">At&eacute; este momento, j&aacute; expliquei em termos, mas o que voc&ecirc; acha agora? Espero que e esteja aberto para minha proposta.</span></p>\r\n\r\n<p><span style="font-size:16px">Primeiro e antes de qualquer coisa, vamos purificar suas preocupa&ccedil;&otilde;es e fazer com que elas desapare&ccedil;am na se&ccedil;&atilde;o.</span></p>\r\n\r\n<p><span style="font-size:16px">Obrigada por esse momento! Obrigado por esse seu tempo!</span></p>', '仕事, 治療,奇跡,宗教,宇宙,ギフト', 1, '2020-08-08 11:58:10', '2020-08-11 12:10:29', 0),
	(2, '営業者募集中', 'Recrutamento & Emprego', '1596952285.jpg', '<p>営業者募集中&nbsp;勤務地 日本全国どこでもOK！<br />\r\n貴方の好きな時だけ時間を費やせます。在宅でどこでもいつでも、誰でもやる気さえあれば参加頂けます。<br />\r\n【　応募条件　】<br />\r\n年齢不問・経験不問<br />\r\n※ 主婦OK　<br />\r\n※ 定年された方も大丈夫です。<br />\r\n※ シルバーワークも歓迎です。<br />\r\n※ ビジネスとしても参加OK<br />\r\n※ アフィリエターさん歓迎<br />\r\n給料、完全歩合性<br />\r\nサービスの提案営業をしてもらいます。<br />\r\n話すのが好きな方明るい笑顔で対応できる方大歓迎接客がお好きな方、接客のご経験を活かせる仕事です。<br />\r\n参加ご希望の方、その他詳細はこちらから登録ください<br />\r\nお気軽にお問い合わせください<br />\r\nhttps://lacura.me/register/(貴方の紹介コード)<br />\r\n貴方は今まで知らなかったでしょうがここを見られて知った以上、是非、このチャンスを活かしてみませんか？</p>', '<p>Recrutamento de vendedores</p>\r\n\r\n<p>Local de trabalho: Qualquer pessoa pode participar a partir de casa, em qualquer lugar, a qualquer hora, desde que esteja motivada.Voc&ecirc; pode trabalhar no seu tempo sempre que voc&ecirc; quiser.</p>\r\n\r\n<p>【Requisitos e Condi&ccedil;&otilde;es】<br />\r\n※ N&atilde;o &eacute; necess&aacute;ria idade ou experi&ecirc;ncia.<br />\r\n※ Dona de casa OK<br />\r\n※ Aposentados, tudo bem tamb&eacute;m OK.<br />\r\n※ As pessoas idosas s&atilde;o bem-vindas OK.<br />\r\n※ Participa&ccedil;&atilde;o empresarial OK<br />\r\n※ Afiliados s&atilde;o bem-vindos! OK<br />\r\nSal&aacute;rio, comiss&atilde;o de vendas.<br />\r\nVoc&ecirc; ser&aacute; um representante de vendas propondo servi&ccedil;os.<br />\r\nVoc&ecirc; tem que gosta de falar, voc&ecirc; tem que ser alegre.<br />\r\nPessoas que podem responder com um sorriso s&atilde;o bem-vindas, e pessoas que amam o atendimento ao cliente.<br />\r\nEste &eacute; um trabalho onde voc&ecirc; pode usar treinar cada vez mais sua experi&ecirc;ncia de atendimento ao cliente.<br />\r\nSe voc&ecirc; gostaria de se juntar a n&oacute;s, para maiores informa&ccedil;&otilde;es, por favor, registre-se aqui.<br />\r\nhttps://lacura.me/register/(Seu link de refer&ecirc;ncia)<br />\r\nFique &agrave; vontade para entrar em contato conosco.<br />\r\nVoc&ecirc; provavelmente n&atilde;o sabia disso at&eacute; agora, mas agora que voc&ecirc; est&aacute; aqui, por que n&atilde;o aproveitar a oportunidade?</p>', '募集中, 仕事, Wワーク, ビジネス, 定年, アフィリエター, シルバーワーク, 主婦', 1, '2020-08-09 09:30:51', '2021-03-25 06:32:10', 3),
	(3, 'tia ja', 'tit pa', '1616617875.jpg', '<p>de ja</p>', '<p>de pa</p>', 'tag', 1, '2021-03-25 05:31:16', '2021-03-25 06:09:12', 2);
/*!40000 ALTER TABLE `mini_blogs` ENABLE KEYS */;

-- Dumping structure for table lacura.min_blog_categories
CREATE TABLE IF NOT EXISTS `min_blog_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_pt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cont` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lacura.min_blog_categories: ~2 rows (approximately)
/*!40000 ALTER TABLE `min_blog_categories` DISABLE KEYS */;
REPLACE INTO `min_blog_categories` (`id`, `title`, `title_pt`, `cont`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Standerd', 'Standerd', 0, 1, '2021-03-25 05:09:34', '2021-03-25 05:09:34'),
	(2, 'Standerd 2', 'standard 3', 0, 0, '2021-03-25 05:18:55', '2021-03-25 05:18:55'),
	(3, 'test 1  Japaneese', 'test 1 Portuguese', 0, 1, '2021-03-25 06:31:05', '2021-03-25 06:31:05');
/*!40000 ALTER TABLE `min_blog_categories` ENABLE KEYS */;

-- Dumping structure for table lacura.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.news: ~0 rows (approximately)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Dumping structure for table lacura.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idx` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'page identifier index',
  `ja` text COLLATE utf8mb4_unicode_ci,
  `pt` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `descriptions_pt` text COLLATE utf8mb4_unicode_ci,
  `title_pt` text COLLATE utf8mb4_unicode_ci,
  `keywords_pt` text COLLATE utf8mb4_unicode_ci,
  `header_text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `header_text_pt` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lacura.pages: ~7 rows (approximately)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
REPLACE INTO `pages` (`id`, `idx`, `ja`, `pt`, `title`, `keywords`, `description`, `descriptions_pt`, `title_pt`, `keywords_pt`, `header_text`, `created_at`, `updated_at`, `header_text_pt`) VALUES
	(1, 'alcoholics', '<h3>すべての中毒と依存を引き起こす原因は、共通し中毒、依存症になりやすい人は常に何かに頼っている人が多い傾向にあります。</h3>\r\n<p>環境: 人は幼年期の経験や教育されるなかで、中毒や依存原因となる物などが環境的に影響を受けやすい。</p>\r\n<p>強要: 社会生活の中での意に反したことを強いられ、いつのまにか中毒と依存が始まり、数多く痛みを和らげるため、感情を落ち着かせるため強要を受け入れてしまう。</p>\r\n<p>感情的苦痛: 不安、抑うつ、欲求不満などの精神状態から逃れるため中毒または依存に頼ってしまう。</p>\r\n<div class="col-xl-12 col-lg-12" style="padding-top: 30px;"></div>\r\n<div class="col-lg-4 col-xl-5" style="padding-top: 30px;"><img alt="" src="https://lacura.me/assets/images/os-problemas-dos-vicios-diagnostico-e-tratamentos1-300x200.jpg" /></div>\r\n<div class="col-lg-4 col-xl-5" style="padding-top: 30px;">\r\n	<h2><strong>中毒・依存</strong></h2>\r\n	<ul>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">憎しみ</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">嫉妬</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">羨望の的</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">恐怖</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">洋服</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">ゲーム</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">アルコール</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">薬物</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">タバコ</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">カフェイン</li>\r\n	</ul>\r\n</div>', '<h3>Pessoas com facilidade ao v&iacute;cio s&atilde;o as que sempre tender a depender</h3>\r\n<p>Ambiente: Nas experi&ecirc;ncia na inf&acirc;ncia, No envolvimento entre pessoas, Na educa&ccedil;&atilde;o infantil, fica mais propenso ao v&iacute;cio e ou depend&ecirc;ncia devida ao ambiente do dia a dia.</p>\r\n<p>Indu&ccedil;&atilde;o: For&ccedil;ando a vontade pr&oacute;pria para acompanhar a vida social, e ent&atilde;o o v&iacute;cio e depend&ecirc;ncia come&ccedil;a imperceptivelmente acontecer contra a vontade pr&oacute;pria e para aliviar acabam aceitando a repress&atilde;o para acalmar as emo&ccedil;&otilde;es.</p>\r\n<p>Estresse emocional: Ref&uacute;gio de condi&ccedil;&otilde;es psiqui&aacute;tricas, tais como ansiedade, depress&atilde;o, frustra&ccedil;&atilde;o e por algum constrangimento optou por v&iacute;cio ou depend&ecirc;ncia qu&iacute;mica.</p>\r\n<div class="col-xl-12 col-lg-12" style="padding-top: 30px;"></div>\r\n<div class="col-lg-4 col-xl-5" style="padding-top: 30px;"><img alt="" src="https://lacura.me/assets/images/os-problemas-dos-vicios-diagnostico-e-tratamentos1-300x200.jpg" /></div>\r\n<div class="col-lg-4 col-xl-5" style="padding-top: 30px;">\r\n	<h2>V&iacute;cios e Depend&ecirc;ncia Qu&iacute;mica</h2>\r\n	<ul>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">&Oacute;dio</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">Ci&uacute;mes</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">Inveja</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">Medo</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">Fobia</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">Jogos</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">&Aacute;lcool</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">Drogas</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">Tabaco</li>\r\n		<li style="font-size:18px; display: block; float: left; min-width: 33%;">Cafe&iacute;na</li>\r\n	</ul>\r\n</div>', 'アルコール依存症と中毒', '憎しみ, 嫉妬, 羨望, 恐怖, 恐怖症, ゲーム, アルコール, 薬物, タバコ, カフェイン', '依存症になりやすい人がいますが、それは常に物質に依存する傾向が強いです。', 'Algumas pessoas são propensas ao vício, mas é sempre mais provável que sejam dependentes de substâncias.', 'alcoolismo e vícios', 'Ódio, ciúme, inveja, medo, fobia, jogos, álcool, drogas, cigarros, cafeína', '中毒と中毒の原因', '2019-09-26 01:12:08', '2020-01-23 14:59:41', 'Causes Of Addiction And Addiction'),
	(2, 'mental', '<p><img alt="" src="https://lacura.me/assets/storage/about/traumas-mentais.jpg" style="float:left; height:245px; margin-left:20px; margin-right:20px; width:400px" />心理的外傷は、何か自分自身にとって大きな出来事が起こり心や感情がダメージを負います。</p>\r\n\r\n<p>心、精神、肉体が痛みを経験したこと。 痛みを伴う経験により</p>\r\n\r\n<p>トラウマや恐怖によって引き起こす増悪、ストレスや、脳の変化によって行動や人の思考に影響を与え、トラウマとなった出来事、体験を避けるために別の方向へ目を背けること、無意識で行ってしまうのです。</p>\r\n\r\n<p>トラウマになってしまった体験がうつ病、また強迫的な行動がその他の恐怖症やパニック障害に繋がっています。</p>', '<p><img alt="" src="https://lacura.me/assets/storage/about/traumas-mentais.jpg" style="float:left; height:245px; margin-left:20px; margin-right:20px; width:400px" /></p>\r\n\r\n<p>Trauma psicol&oacute;gico acontece quando a mente e as emo&ccedil;&otilde;es ocorrem grandes eventos para si pr&oacute;prio podendo ocasionar danos irrevers&iacute;veis mental e emocional passando ao corpo f&iacute;sico por experi&ecirc;ncia dolorosa desencadeando diversos traumas.</p>\r\n\r\n<p>O stress influ&ecirc;ncia o comportamento e pensamento nas pessoas a ter mudan&ccedil;as no c&eacute;rebro ocasionando incidentes que se torna um trauma.</p>\r\n\r\n<p>Esses incidentes que gerou o trauma a fim de evitar a experi&ecirc;ncia o inconsciente fica campos dilatados deixando-a desvairadas.</p>\r\n\r\n<p>Esses incidentes envolvem a manifesta&ccedil;&atilde;o de sentimentos e comportamento compulsivo e causa a depress&atilde;o, p&acirc;nico e outras fobias e at&eacute; mesmo crimes.</p>', ' 精神的なトラウマ', '心理的なトラウマ、心、感情、不可逆的、精神的、感情的な損傷、身体、ストレス、うつ病、パニック', '心理的なトラウマは、心や感情の中で起こり、不可逆的な損傷を引き起こす可能性があります。', 'O trauma psicológico ocorre na mente e nas emoções e pode causar danos irreversíveis.', 'Trauma mental', 'Trauma psicológico, mente, emoção, irreversível, dano mental, emocional, corpo, estresse, depressão, pânico', NULL, '2019-09-26 01:54:58', '2020-01-31 02:03:51', NULL),
	(3, 'spiritual', '<h2><strong>身体</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>否定的な考えが引き金となり病気を引き起こします。それを取り除くため、プラス思考なるように考えを改める必要があります。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>心と思考</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>否定的な思考と否定的な心のクリーニング。 今までの負の心、マイナス的な要素を切削しプラス思考に置き換えます。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>精神</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>魂と心が否定的な思想によって引き起こされた出来事を後悔しています。自分自身や回りの心を傷つけた罪を魂から許しを求めます。人とコミュニケーションを取ることで自然にエネルギーを交わし合うもの他人の心を傷つければ、自分が傷つき、相手を癒すことは自分が癒されることなのです。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>心と感情</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>魂と心が否定的な思想によって引き起こされた出来事を後悔しています。自分自身や回りの心を傷つけた罪を魂から許しを求めます。人とコミュニケーションを取ることで自然にエネルギーを交わし合うもの他人の心を傷つければ、自分が傷つき、相手を癒すことは自分が癒されることなのです。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>争い</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>すべての争いは、ネガティブな考えが生まれます。ネガティブ的な要素を置き換え浄化させていきます。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>魂</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>魂のレベルから許す必要があり、間違いは時の流れと共に癒され消えて行きます。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>過去の生活の争い</strong></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>人生を通し体験や経験、良いことも悪いものも、すべて次の代へ引き継ぎ、また更にその子供たちへ知識、経験、出来事すべての行いを受け渡してしまうのです。ネガティブ的な部分を引き継いだのなら浄化する必要があります。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>パラレルエネルギー</strong></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>それぞれが別の次元で生きているので同じ人間でも魂は、会うこともなく理解もできません。魂が別の次元の魂を認めない事を伝えようとするとエネルギーが振動します。魂のエネルギーを浄化する必要があります。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>物事</strong></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>争いは、悪意によって引き起こされる。悪いエネルギーの振動を変更する必要があります。それを排除して、信仰心が復元されます。</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="https://lacura.me/img/spiritual-prayer-hands-sun-shine.jpg" style="float:left; height:333px; width:500px" /></p>', '<h2><strong>Corpo</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>Os pensamentos negativos s&atilde;o os gatilhos das doen&ccedil;as. A fim de se livrar dos pensamentos negativos h&aacute; necessidade de rever os pensamentos e mudar para ideias positivas.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Mente e Pensamentos</strong></h2>\r\n\r\n<p>Limpeza da mente e dos pensamentos subliminares negativos, &eacute; preciso substitu&iacute;-los com pensamentos positivos.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Espiritualmente</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>Arrependimento da alma e mente que s&atilde;o causados pelos pensamentos negativos. Pedindo perd&atilde;o do esp&iacute;rito dos pecados que causou a si pr&oacute;prio e aos demais sentimentos.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Mente e Emo&ccedil;&atilde;o</strong></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>Sofrendo com as criatividades e comportamento dos outros as diferen&ccedil;as devido &agrave; diferen&ccedil;a da imagina&ccedil;&atilde;o. H&aacute; necessidade de substituir os maus sentimentos por bons, e fazer as correntes se conectar novamente.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Disputa</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>Todas as guerras s&atilde;o generalizadas por pensamentos negativos, precisa ent&atilde;o purificar e substituir os elementos negativos.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Alma</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>H&aacute; necessidade de perdoar a partir da alma, e ap&oacute;s o decorrer do tempo a corre&ccedil;&atilde;o &eacute; feita e desaparece pouco a pouco.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Conflito de vidas passadas</strong></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>Experi&ecirc;ncias e atrav&eacute;s de experi&ecirc;ncia ao longo da vida. O que pode ser bom pode tamb&eacute;m ser ruim. Todos assumimos o controle para pr&oacute;xima gera&ccedil;&atilde;o e passamos de filhos a filhos o conhecimento e sabedoria das experi&ecirc;ncias e assim ent&atilde;o por um devido incidente receber&aacute; todos os eventos de vida passada o que pode ser parcialmente negativa h&aacute; necessidade purificar e fechar esses portais abertos.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Energia Paralela</strong></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>A mesma pessoa vivendo a vida em dimens&otilde;es diferentes, e sem poder se ver e sem poder se falar e sem poder ouvir nem mesmo se encontrar e nem mesmo entender. O esp&iacute;rito da outra dimens&atilde;o tenta transmitir ao outro esp&iacute;rito que n&atilde;o &eacute; permitido e ent&atilde;o ocorre vibra&ccedil;&otilde;es de energia causando danos a prote&ccedil;&atilde;o espiritual o que &eacute; necess&aacute;rio purificar a alma.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Conflitos</strong></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>Conflito &eacute; causada por um mal-intencionados h&aacute; necessidade de eliminar as vibra&ccedil;&otilde;es de energias ruins e mudar para boas restaurando a f&eacute; interior.</p>\r\n\r\n<p><img alt="" src="https://lacura.me/img/spiritual-prayer-hands-sun-shine.jpg" style="float:left; height:333px; width:500px" /></p>', 'Spiritual Purification', '霊的な浄化、身体、心と思考、精神、紛争、魂、紛争、過去の生活、パラレルワールドの連動糸、エクトプラズム', '精神的な浄化、身体、心と思考、精神、紛争、魂、過去の人生の紛争とパラレルエネルギーの連動糸 “エクトプラズム”', 'Purificação mental, corpo, mente e pensamento, espírito, conflito, alma, conflito de vidas passadas e energia paralela entrelaçando fio "ectoplasma"', '精神的な浄化', 'Purificação espiritual, corpo, mente e pensamento, espírito, conflito, alma, conflito, vida passada, mundo paralelo, fio interligado, ectoplasma', 'Spiritual Purification', '2019-09-26 02:09:56', '2021-03-09 06:51:00', '精神的な浄化'),
	(4, 'influence', '<p><span style="font-size:22px">労働者が被った需要の高いレベルの仕事で病気を発症する理由は、食生活が貧しい、作業時間の過度の負担など労働者たちは無理をして働き続けたため病気を引き起こしやすい状態になりました。</span></p>\r\n\r\n<div class="col-lg-4 col-xl-6" style="padding-top:30px">\r\n<ul>\r\n	<li>不眠症</li>\r\n	<li>生理痛</li>\r\n	<li>不安</li>\r\n	<li>糖尿病</li>\r\n	<li>胃炎</li>\r\n	<li>うつ病</li>\r\n	<li>頭痛</li>\r\n	<li>肩こり</li>\r\n	<li>むち打ち</li>\r\n	<li>腱鞘炎</li>\r\n	<li>肥満</li>\r\n</ul>\r\n</div>\r\n\r\n<div class="col-lg-4 col-xl-6" style="padding-top:30px"><img alt="601137_139162" src="https://lacura.me/assets/images/601137_139162.jpg" style="height:291px; width:437px" /></div>', '<p><span style="font-size:18px">A raz&atilde;o para desenvolver a doen&ccedil;a est&aacute; na demanda de carga hor&aacute;rios exageradas de trabalho que muitos trabalhadores sofrem, com os maus h&aacute;bitos alimentares e desgaste f&iacute;sico.</span></p>\r\n\r\n<div class="col-lg-4 col-xl-6" style="padding-top:30px">\r\n<ul>\r\n	<li>Ins&ocirc;nia</li>\r\n	<li>Dores menstruais</li>\r\n	<li>Ansiedade</li>\r\n	<li>Diabetes</li>\r\n	<li>Gastrite</li>\r\n	<li>Depress&atilde;o</li>\r\n	<li>Dor de cabe&ccedil;a</li>\r\n	<li>Torcicolo</li>\r\n	<li>Golpe do chicote</li>\r\n	<li>Inflama&ccedil;&atilde;o</li>\r\n	<li>Obesidade</li>\r\n</ul>\r\n</div>\r\n\r\n<div class="col-lg-4 col-xl-6" style="padding-top:30px"><img alt="601137_139162" src="https://lacura.me/assets/images/601137_139162.jpg" style="float:right; height:291px; width:437px" /></div>', '仕事の影響 ケガ・病気', '不眠症、 月経痛、 不安、 糖尿病、 胃炎、 うつ病、 頭痛、 トーティコリス、 むち打ち、炎症、肥満', '病気を発症原因は、長時間労働で多くの労働者が苦しみ、食習慣が悪く、健康被害が生じるあそれがあります。', 'A causa do aparecimento da doença é que muitos trabalhadores sofrem com longas horas de trabalho, têm hábitos alimentares inadequados e causam problemas de saúde.', 'A influência do trabalho', 'Insônia, dismenorréia, ansiedade, diabetes, gastrite, depressão, dor de cabeça, toticolis, whiplash, inflamação, obesidade', '仕事の影響 ケガ・病気', '2019-09-26 02:16:42', '2021-03-09 06:51:51', 'Traça / doença do trabalho'),
	(5, 'purification', '<h2><strong>暴食</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>過食症は精神的な病常に自己満足の多くを得る必要があります。この病気は心中に潜んでいます。自分の自由が奪われ食欲の奴隷です。食欲は常に限界を超えた状態でも食べ続けることになります。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>憤怒</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>複雑な病気で、恨み、怒りが少しずつゆっくり膨れて行き、この状態が続くことで回りの環境に大きく影響します。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>強欲</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>この病気は、自分自身が物欲の奴隷になってしまい、神様や回りの人たちも忘れ何も見えない状態になってしまうのです。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>色欲</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>この病気は、肉体の欲望の赴くままに常に性欲を求めている状態。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>嫉妬</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>人の物が欲しくなり、他人の物、人生にばかり関心を持ちすぎ執着して自分自身の現実を忘れてしまう病気です。</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>怠惰</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>全てのことにおいて、やる気が出ない、関心がもてない、行動しない、心が貧欲な病気です。</p>\r\n\r\n<div class="col-lg-12 col-xl-12" style="padding-top:30px">&nbsp;</div>\r\n\r\n<p style="text-align:center"><img alt="" src="https://lacura.me/img/praying-sunny-nature.jpg" style="height:333px; margin:10px; width:500px" /></p>', '<h2><strong>Gula</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>Glutonaria &eacute; envolvida a uma doen&ccedil;a mental sempre est&aacute; querendo comida nunca est&aacute; satisfeita, essa doen&ccedil;a espreita o duplo suic&iacute;dio. Voc&ecirc; perde sua liberdade e se torna escravo do apetite.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>F&uacute;ria</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>Essa doen&ccedil;a &eacute; complexa, envolve vingan&ccedil;as, raiva e o estado da ira, &eacute; constante, &eacute; contagiosa devido &agrave; fendas da aura espiritual.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Cobi&ccedil;a</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>Essa doen&ccedil;a transforma escravo da pr&oacute;pria gan&acirc;ncia, n&atilde;o enxerga as pessoas ao redor e esquece de Deus.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Lux&uacute;ria</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>Essa doen&ccedil;a est&aacute; sempre em desejo da carne em busca insaci&aacute;vel de sexo.</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Ci&uacute;mes</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>Querer as coisas dos outros, e outras coisas de outras pessoas. Muito obcecado e interesseiro pelas coisas da vida</p>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<h2><strong>Pregui&ccedil;a</strong></h2>\r\n\r\n<div style="width:100%">&nbsp;</div>\r\n\r\n<p>Em qualquer coisa que v&aacute; fazer estar&aacute; sem vontade, desanimado, sem interesses e sem a&ccedil;&otilde;es de agir.</p>\r\n\r\n<div class="col-lg-12 col-xl-12" style="padding-top:30px">&nbsp;</div>\r\n\r\n<p style="text-align:center"><img alt="" src="https://lacura.me/img/praying-sunny-nature.jpg" style="height:333px; margin:10px; width:500px" /></p>', 'Purification Soul', 'Purification Soul', 'Purification Soul', '浄化の魂', '浄化の魂', '浄化の魂', 'Purification Soul', '2019-09-26 02:58:09', '2021-03-09 06:53:11', '浄化の魂'),
	(6, 'about', '<h2><img src="https://lacura.me/assets/storage/about/5d6704fa295591567032570.jpg" style="float:left; padding-right:10px; width:120px" />後親田 エリソン タダオは1979年7月30日にブラジル パラナ州 グァイーラ 生まれ。沖縄人とイスラエル人の子孫で、幼い頃に農場で過ごし、自然と触れ合い、両親の畑仕事の手伝いもしていました。<br />\r\n14歳で、社会的理由でブラジルを離れ、1994年に日本に住む事になりました、2005年は認識を高め、精神的な進化が起こり始め、日常的に不思議な力が強くなって、天からの宿命を持つ事がわかった。</h2>\r\n\r\n<div class="col-lg-4 col-xl-6" style="padding-top:30px; text-align:center">\r\n<div style="margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px"><img src="https://lacura.me/assets/storage/about/img-2.jpg" style="height:667px; width:500px" /></div>\r\n</div>\r\n\r\n<div class="col-lg-4 col-xl-6" style="padding-top:30px; text-align:center">\r\n<div style="margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px"><img src="https://lacura.me/assets/storage/about/5d67073c0dcd21567033148.jpg" style="height:667px; width:500px" /></div>\r\n</div>\r\n\r\n<h2><br />\r\nいつも自然と触れ合い、山で宇宙の光と集合したり、彼は人生の一貫性の光について多くの経験をしました。</h2>\r\n\r\n<h2>スピリチュアルコーディング「暗号化されている言葉、存在しない言語」を通じて神の光と意思の伝達する事が出来て、重要な自然役割の四つの神 火神様、風神様、地神様、水神様らは、会うことができました。</h2>\r\n\r\n<h2>超能力者を認識して、魂の奇跡を通して、人々の生活と健康状態の改善活動をやり始めました。</h2>', '<h2 style="text-align:center"><img src="https://lacura.me/assets/storage/about/5d6704fa295591567032570.jpg" style="float:left; padding-right:10px; width:120px" />Elisson Tadao Kushioyada nasceu em 30 de Julho de 1979 na cidade de Gua&iacute;ra, estado do Paran&aacute;. Descendente de okinawa e israelense, passou a sua inf&acirc;ncia no s&iacute;tio em contato com a natureza e ajudando os pais no trabalho rural.<br />\r\nAos 14 anos deixou o Brasil por motivos sociais e mudou-se para o Jap&atilde;o em 1994, no ano de 2005&nbsp;aumentam as suas percep&ccedil;&otilde;es e a transforma&ccedil;&atilde;o mental come&ccedil;ou a acontecer no seu dia a dia ficando cada vez mais forte, descobrindo ent&atilde;o o Dom espiritual.</h2>\r\n\r\n<div class="col-lg-4 col-xl-6" style="padding-top:30px; text-align:center">\r\n<div style="margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px"><img src="https://lacura.me/assets/storage/about/img-2.jpg" style="height:667px; width:500px" /></div>\r\n</div>\r\n\r\n<div class="col-lg-4 col-xl-6" style="padding-top:30px; text-align:center">\r\n<div style="margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px"><img src="https://lacura.me/assets/storage/about/5d67073c0dcd21567033148.jpg" style="height:667px; width:500px" /></div>\r\n</div>\r\n\r\n<h2 style="text-align:center"><br />\r\nSempre em contato com a natureza, costumava ir &agrave;s montanhas para se reunir com as luzes celestes. Nesses encontros ele obteve muitas experi&ecirc;ncias com a Luz da consist&ecirc;ncia da vida, onde se comunicava com as luzes divinas atrav&eacute;s de codifica&ccedil;&atilde;o espiritual &ldquo;idioma inexistente&rdquo;. E conseguiu se encontrar com os 4 Deuses mais importantes da natureza, Deus do fogo, Deus do vento, Deus da terra e o Deus da &aacute;gua.</h2>\r\n\r\n<h2 style="text-align:center">Reconhecendo seu poder paranormal come&ccedil;ou a exercer, ajudando a melhorar as condi&ccedil;&otilde;es de vida e sa&uacute;de das pessoas, feita atrav&eacute;s do milagre da Alma.</h2>', 'cerca de', '後親田　エリソン　忠男　、超常的な力、改善、生活環境、魂の奇跡', '後親田　エリソン　忠男　についてご紹介します。魂の奇跡を通して人々の生活環境と健康を改善するのに役立つ彼の超常的な力が持っています。', 'Apresentando Gochida Ellison Tadao. Ele tem poderes paranormais que ajudam a melhorar o ambiente de vida e a saúde das pessoas por meio de milagres da alma.', '約', 'Gochida Ellison Tadao, poder paranormal, melhoria, ambiente de vida, milagre da alma', 'cerca de', '2019-09-26 03:01:07', '2021-03-09 06:54:41', '約');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- Dumping structure for table lacura.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.password_resets: ~7 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
REPLACE INTO `password_resets` (`email`, `token`, `status`, `created_at`) VALUES
	('monicammy@gmail.com', 'iy0AUnhjQUOEC0AkD2fNimehzFtJSw', 1, '2020-04-27 20:51:47'),
	('monicammy@gmail.com', 'dgzO39F4BQE4mnT4LE098fIAhfLGU8', 1, '2020-04-27 21:29:34'),
	('lacura.me@gmail.com', 'tRBeji4Ui6eVh8HwsS45qeYpKLATyA', 1, '2020-05-23 20:58:58'),
	('williansgiorno@gmail.com', 'vvgl8jmMG50J3M2R5s31FGGqi8T7OD', 0, '2020-06-18 13:27:29'),
	('williansgiorno@gmail.com', '88oFUpqiHxceDMQFBVbB7njXb4nESI', 0, '2020-06-18 13:28:38'),
	('e7415206644@yahoo.co.jp', '3VbaIMb93hfahGjJ1Wbx576BuoDZV8', 1, '2020-07-06 11:57:13'),
	('adilsonalpino@gmail.com', 'hdNdr837mKNK2X4ehgFs16QXT4lyHb', 1, '2020-10-06 08:08:49');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table lacura.plans
CREATE TABLE IF NOT EXISTS `plans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maximum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fixed_amount` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest_status` int(11) NOT NULL COMMENT '1 = ''%'' / 0 =''currency''',
  `times` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `capital_back_status` int(11) NOT NULL,
  `lifetime_status` int(11) NOT NULL,
  `repeat_time` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `extra` text COLLATE utf8mb4_unicode_ci,
  `show` tinyint(4) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.plans: ~3 rows (approximately)
/*!40000 ALTER TABLE `plans` DISABLE KEYS */;
REPLACE INTO `plans` (`id`, `name`, `minimum`, `maximum`, `fixed_amount`, `interest`, `interest_status`, `times`, `status`, `capital_back_status`, `lifetime_status`, `repeat_time`, `created_at`, `updated_at`, `extra`, `show`, `image`) VALUES
	(6, 'Charity', '99000', '99000', '99000', '0.5', 1, '24', 1, 0, 0, '365', '2018-12-06 01:58:48', '2021-03-14 23:34:07', '[{"key":"1 Se\\u00e7\\u00e3o","value":"0"},{"key":"1 Hora","value":"0"},{"key":"60 Minutos","value":"0"},{"key":"S\\u00edmbolo Espiritual","value":"0"},{"key":"Tratamento Espiritual","value":"0"}]', 0, '5e31013e2388a1580269886.jpg'),
	(7, 'Present', '299000', '299000', '299000', '1.4', 1, '24', 1, 0, 0, '180', '2018-12-06 01:59:22', '2020-10-06 17:00:54', '[{"key":"1 \\u30bb\\u30c3\\u30b7\\u30e7\\u30f3","value":"0"},{"key":"2 \\u6642\\u9593","value":"0"},{"key":"120\\u5206","value":"0"},{"key":"S\\u00edmbolo Espiritual","value":"0"},{"key":"Tratamento Espiritual","value":"0"}]', 0, '5e31014dac1521580269901.jpg'),
	(8, 'GIFT', '299000', '299000', '299000', '1.7', 1, '24', 1, 0, 0, '180', '2018-12-09 04:27:33', '2021-03-15 03:55:52', '[{"key":"5 Se\\u00e7\\u00f5es","value":"0"},{"key":"3 Horas","value":"0"},{"key":"180 Minutos","value":"0"},{"key":"S\\u00edmbolo Espiritual","value":"0"},{"key":"Tratamento Espiritual","value":"0"}]', 0, '5d66efa03abca1567027104.jpg');
/*!40000 ALTER TABLE `plans` ENABLE KEYS */;

-- Dumping structure for table lacura.referrals
CREATE TABLE IF NOT EXISTS `referrals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `level` int(11) NOT NULL,
  `percent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.referrals: ~6 rows (approximately)
/*!40000 ALTER TABLE `referrals` DISABLE KEYS */;
REPLACE INTO `referrals` (`id`, `level`, `percent`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, '10', 1, '2019-01-22 21:59:09', '2019-01-22 21:59:09'),
	(2, 2, '8', 1, '2019-01-22 21:59:09', '2019-01-22 21:59:09'),
	(3, 3, '6', 1, '2019-01-22 21:59:09', '2019-01-22 21:59:09'),
	(4, 4, '5', 1, '2019-01-22 21:59:09', '2019-01-22 21:59:09'),
	(5, 5, '1', 1, '2019-01-22 21:59:09', '2019-01-22 21:59:09'),
	(6, 6, '1', 1, '2019-01-22 21:59:09', '2019-01-22 21:59:09');
/*!40000 ALTER TABLE `referrals` ENABLE KEYS */;

-- Dumping structure for table lacura.referral_commissions
CREATE TABLE IF NOT EXISTS `referral_commissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `ref_id` int(10) unsigned NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 : on process, 0 : added to balance',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.referral_commissions: ~7 rows (approximately)
/*!40000 ALTER TABLE `referral_commissions` DISABLE KEYS */;
REPLACE INTO `referral_commissions` (`id`, `user_id`, `ref_id`, `amount`, `created_at`, `updated_at`, `status`) VALUES
	(2, 9, 11, '29900', '2020-06-29 14:38:28', '2020-06-29 14:38:28', 1),
	(3, 4, 9, '23920', '2020-06-29 14:38:29', '2020-06-29 14:38:29', 1),
	(8, 4, 9, '29900', '2020-06-30 08:39:37', '2020-06-30 08:39:37', 1),
	(9, 9, 17, '29900', '2020-07-01 00:41:14', '2020-07-01 00:41:14', 1),
	(10, 4, 9, '23920', '2020-07-01 00:41:15', '2020-07-01 00:41:15', 1),
	(11, 9, 16, '29900', '2020-07-01 16:11:26', '2020-07-01 16:11:26', 1),
	(12, 4, 9, '23920', '2020-07-01 16:11:27', '2020-07-01 16:11:27', 1);
/*!40000 ALTER TABLE `referral_commissions` ENABLE KEYS */;

-- Dumping structure for table lacura.schedules
CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `scheduler_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scheduler_id` bigint(20) unsigned NOT NULL,
  `date` date NOT NULL,
  `time` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remark` text COLLATE utf8mb4_unicode_ci,
  `charge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `notified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `invest_id` int(11) NOT NULL DEFAULT '0',
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_token` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `schedules_scheduler_type_scheduler_id_index` (`scheduler_type`,`scheduler_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.schedules: ~15 rows (approximately)
/*!40000 ALTER TABLE `schedules` DISABLE KEYS */;
REPLACE INTO `schedules` (`id`, `scheduler_type`, `scheduler_id`, `date`, `time`, `created_at`, `updated_at`, `status`, `remark`, `charge`, `notified_at`, `invest_id`, `location`, `admin_token`) VALUES
	(2, 'App\\User', 1, '2020-06-30', 10, '2020-06-29 14:38:29', '2021-03-12 23:17:13', 1, 'cancelando.', '0', '2020-07-01 02:45:06', 2, '群馬県太田市', '2e8b59d14b1b70a4437cf4365fef4188'),
	(7, 'App\\User', 1, '2020-07-01', 9, '2020-06-30 08:39:37', '2021-01-11 02:51:17', 0, 'Teste.', '0', '2020-07-02 01:20:05', 7, '群馬県太田市', 'ed34efd5c489806d668b41548899da10'),
	(8, 'App\\User', 1, '2020-07-01', 10, '2020-07-01 00:41:15', '2021-01-11 03:15:19', 0, 'lçkkljklj', '0', '2020-07-02 01:25:04', 8, '群馬県太田市', 'e1f22b4f22ce3155bff2bd96d0c52805'),
	(9, 'App\\User', 16, '2020-07-02', 9, '2020-07-01 16:11:27', '2021-01-11 02:21:43', 0, 'Testando o cancelamento.', '0', '2020-07-03 01:50:08', 9, '群馬県太田市', '869ae3ded5646431013e369769d2de79'),
	(10, 'App\\User', 4, '2020-12-18', 14, '2020-11-24 20:08:50', '2020-11-25 11:31:13', 0, 'N', '0', '2020-11-25 11:20:05', 10, '大阪府大阪市', '7890c68d5f0d110edceb7ac21abe36cf'),
	(11, 'App\\Admin', 1, '2021-01-05', 15, '2021-01-05 10:36:44', '2021-01-11 02:19:06', 0, 'Testando o cancelamento.', '0', '2021-01-04 22:36:44', 0, NULL, NULL),
	(12, 'App\\Admin', 1, '2021-01-06', 10, '2021-01-05 10:37:39', '2021-01-05 10:42:05', 0, 'Pq sim', '0', '2021-01-04 22:37:39', 0, NULL, NULL),
	(13, 'App\\Admin', 1, '2021-01-13', 10, '2021-01-11 02:58:56', '2021-01-11 02:59:18', 0, 'Testando novo e-mail.', '0', '2021-01-10 14:58:56', 0, NULL, NULL),
	(14, 'App\\Admin', 1, '2021-01-14', 9, '2021-01-11 03:04:59', '2021-01-11 03:05:10', 0, 'lijlkjlkj', '0', '2021-01-10 15:04:59', 0, NULL, NULL),
	(15, 'App\\Admin', 1, '2021-01-15', 9, '2021-01-11 03:13:50', '2021-01-11 03:14:00', 0, 'fasdfasd', '0', '2021-01-10 15:13:50', 0, NULL, NULL),
	(16, 'App\\Admin', 1, '2021-01-20', 10, '2021-01-11 03:20:57', '2021-03-12 01:18:03', 0, 'teste de cancel a mento', '0', '2021-01-10 15:20:57', 0, NULL, NULL),
	(17, 'App\\Admin', 1, '2021-03-12', 10, '2021-03-12 01:34:35', '2021-03-12 01:34:35', 1, 'session update', '0', '2021-03-11 21:34:35', 0, NULL, NULL),
	(18, 'App\\User', 1, '2021-03-20', 8, '2021-03-12 22:13:55', '2021-03-12 22:30:35', 0, 'no ava', '0', '2021-03-12 18:13:55', 22, '8', 'e36130ccc5e17cda2e749a11ddb3f708'),
	(19, 'App\\User', 1, '2021-03-21', 8, '2021-03-12 22:17:57', '2021-03-15 05:14:10', 0, 'cancel', '0', '2021-03-12 18:17:57', 23, '4', '42c4b9c44adfdd665acc0444fb0d57da'),
	(20, 'App\\User', 1, '2021-03-31', 18, '2021-03-12 23:03:49', '2021-03-12 23:04:44', 0, 'cacaca', '0', '2021-03-12 19:03:49', 24, '1', '7395816555eb2dc94bf61d4805c240ca'),
	(21, 'App\\User', 1, '2021-03-25', 16, '2021-03-16 03:49:43', '2021-03-16 03:49:43', 1, NULL, '0', '2021-03-15 23:49:43', 29, '2', '8c0136c9a81753da65e5d912ec7e1f8e');
/*!40000 ALTER TABLE `schedules` ENABLE KEYS */;

-- Dumping structure for table lacura.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.services: ~0 rows (approximately)
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping structure for table lacura.sliders
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ja',
  `temp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch_no` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=311 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.sliders: ~151 rows (approximately)
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
REPLACE INTO `sliders` (`id`, `image_name`, `title`, `created_at`, `updated_at`, `lang`, `temp`, `batch_no`) VALUES
	(142, '5f2a129d07b2b1596592797.jpg', NULL, '2020-08-05 13:59:57', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(143, '5f2a129d3500b1596592797.jpg', NULL, '2020-08-05 13:59:57', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(144, '5f2a129f464401596592799.jpg', NULL, '2020-08-05 13:59:59', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(145, '5f2a129f71f4e1596592799.jpg', NULL, '2020-08-05 13:59:59', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(146, '5f2a12a1890f11596592801.jpg', NULL, '2020-08-05 14:00:01', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(147, '5f2a12a1bb8c91596592801.jpg', NULL, '2020-08-05 14:00:01', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(148, '5f2a12a412e471596592804.jpg', NULL, '2020-08-05 14:00:04', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(149, '5f2a12a480b341596592804.jpg', NULL, '2020-08-05 14:00:04', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(150, '5f2a12a8b14bf1596592808.jpg', NULL, '2020-08-05 14:00:09', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(151, '5f2a12a8e2f4b1596592808.jpg', NULL, '2020-08-05 14:00:09', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(152, '5f2a12ad6e6111596592813.jpg', NULL, '2020-08-05 14:00:13', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(153, '5f2a12ad9809a1596592813.jpg', NULL, '2020-08-05 14:00:13', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(154, '5f2a12b0d9a731596592816.jpg', NULL, '2020-08-05 14:00:17', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(155, '5f2a12b2ce9241596592818.jpg', NULL, '2020-08-05 14:00:19', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(156, '5f2a12b4ed9891596592820.jpg', NULL, '2020-08-05 14:00:21', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(157, '5f2a12b6a38bb1596592822.jpg', NULL, '2020-08-05 14:00:22', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(158, '5f2a12b88f71d1596592824.jpg', NULL, '2020-08-05 14:00:25', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(159, '5f2a12b98566f1596592825.jpg', NULL, '2020-08-05 14:00:26', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(160, '5f2a12bce8ed41596592828.jpg', NULL, '2020-08-05 14:00:29', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(161, '5f2a12be999cc1596592830.jpg', NULL, '2020-08-05 14:00:30', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(162, '5f2a12c06fcf31596592832.jpg', NULL, '2020-08-05 14:00:32', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(163, '5f2a12c150e731596592833.jpg', NULL, '2020-08-05 14:00:33', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(164, '5f2a12c34feec1596592835.jpg', NULL, '2020-08-05 14:00:35', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(165, '5f2a12c3acd7b1596592835.jpg', NULL, '2020-08-05 14:00:35', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(166, '5f2a12c7c097c1596592839.jpg', NULL, '2020-08-05 14:00:39', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(167, '5f2a12c83a02e1596592840.jpg', NULL, '2020-08-05 14:00:40', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(168, '5f2a12cacfce41596592842.jpg', NULL, '2020-08-05 14:00:43', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(169, '5f2a12caf15ab1596592842.jpg', NULL, '2020-08-05 14:00:43', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(170, '5f2a12cd79d321596592845.jpg', NULL, '2020-08-05 14:00:45', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(171, '5f2a12cd7b2871596592845.jpg', NULL, '2020-08-05 14:00:45', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(172, '5f2a12cfbe9eb1596592847.jpg', NULL, '2020-08-05 14:00:47', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(173, '5f2a12d0710211596592848.jpg', NULL, '2020-08-05 14:00:48', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(174, '5f2a12d26a2661596592850.jpg', NULL, '2020-08-05 14:00:50', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(175, '5f2a12d35f2651596592851.jpg', NULL, '2020-08-05 14:00:51', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(176, '5f2a12d59c9ae1596592853.jpg', NULL, '2020-08-05 14:00:53', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(177, '5f2a12d5abcf71596592853.jpg', NULL, '2020-08-05 14:00:53', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(178, '5f2a12d814b0a1596592856.jpg', NULL, '2020-08-05 14:00:56', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(180, '5f2a12dac335b1596592858.jpg', NULL, '2020-08-05 14:00:59', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(181, '5f2a12dd0ebc51596592861.jpg', NULL, '2020-08-05 14:01:01', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(182, '5f2a12dd5bfe21596592861.jpg', NULL, '2020-08-05 14:01:01', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(183, '5f2a12df6fca51596592863.jpg', NULL, '2020-08-05 14:01:03', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(184, '5f2a12e0379bd1596592864.jpg', NULL, '2020-08-05 14:01:04', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(185, '5f2a12e1c3aea1596592865.jpg', NULL, '2020-08-05 14:01:05', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(186, '5f2a12e2a415d1596592866.jpg', NULL, '2020-08-05 14:01:07', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(187, '5f2a12e517ddd1596592869.jpg', NULL, '2020-08-05 14:01:09', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(188, '5f2a12e585d111596592869.jpg', NULL, '2020-08-05 14:01:09', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(189, '5f2a12e7ac2251596592871.jpg', NULL, '2020-08-05 14:01:11', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(190, '5f2a12e83da691596592872.jpg', NULL, '2020-08-05 14:01:12', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(191, '5f2a12eb36e181596592875.jpg', NULL, '2020-08-05 14:01:15', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(192, '5f2a12ed450fb1596592877.jpg', NULL, '2020-08-05 14:01:17', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(193, '5f2a12ee85ddc1596592878.jpg', NULL, '2020-08-05 14:01:18', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(194, '5f2a12efdae3e1596592879.jpg', NULL, '2020-08-05 14:01:20', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(195, '5f2a12f0c87c41596592880.jpg', NULL, '2020-08-05 14:01:21', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(196, '5f2a12f21dc861596592882.jpg', NULL, '2020-08-05 14:01:22', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(197, '5f2a12f3437751596592883.jpg', NULL, '2020-08-05 14:01:23', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(198, '5f2a12f4c52501596592884.png', NULL, '2020-08-05 14:01:25', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(199, '5f2a12f57940c1596592885.jpg', NULL, '2020-08-05 14:01:25', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(200, '5f2a12f75f33f1596592887.jpg', NULL, '2020-08-05 14:01:27', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(201, '5f2a12f814b381596592888.jpg', NULL, '2020-08-05 14:01:28', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(202, '5f2a12fad63921596592890.jpg', NULL, '2020-08-05 14:01:31', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(203, '5f2a12fd878ec1596592893.jpg', NULL, '2020-08-05 14:01:34', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(204, '5f2a12fe403fe1596592894.jpg', NULL, '2020-08-05 14:01:34', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(205, '5f2a13026ca371596592898.jpg', NULL, '2020-08-05 14:01:38', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(206, '5f2a13032f7dd1596592899.jpg', NULL, '2020-08-05 14:01:39', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(207, '5f2a1306d43ba1596592902.jpg', NULL, '2020-08-05 14:01:44', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(208, '5f2a130a905781596592906.jpg', NULL, '2020-08-05 14:01:46', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(209, '5f2a130d98e001596592909.jpg', NULL, '2020-08-05 14:01:49', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(210, '5f2a130dd69851596592909.jpg', NULL, '2020-08-05 14:01:50', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(211, '5f2a13106890a1596592912.jpg', NULL, '2020-08-05 14:01:52', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(212, '5f2a13106ec7e1596592912.jpg', NULL, '2020-08-05 14:01:52', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(213, '5f2a1312cbe6b1596592914.jpg', NULL, '2020-08-05 14:01:55', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(214, '5f2a1312dfedf1596592914.jpg', NULL, '2020-08-05 14:01:55', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(215, '5f2a13153ea6f1596592917.jpg', NULL, '2020-08-05 14:01:57', '2020-08-05 14:02:04', 'ja', NULL, 1),
	(216, '5f2a136da6ea91596593005.jpg', NULL, '2020-08-05 14:03:26', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(217, '5f2a136dbf6671596593005.jpg', NULL, '2020-08-05 14:03:26', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(218, '5f2a1372dbede1596593010.jpg', NULL, '2020-08-05 14:03:31', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(219, '5f2a13731a26b1596593011.jpg', NULL, '2020-08-05 14:03:31', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(220, '5f2a137794e031596593015.jpg', NULL, '2020-08-05 14:03:36', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(221, '5f2a1378162881596593016.jpg', NULL, '2020-08-05 14:03:36', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(222, '5f2a137a497831596593018.jpg', NULL, '2020-08-05 14:03:38', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(223, '5f2a137b162971596593019.jpg', NULL, '2020-08-05 14:03:39', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(224, '5f2a137d9e8771596593021.jpg', NULL, '2020-08-05 14:03:42', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(225, '5f2a137e292131596593022.jpg', NULL, '2020-08-05 14:03:42', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(226, '5f2a1381344441596593025.jpg', NULL, '2020-08-05 14:03:45', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(227, '5f2a138333a6f1596593027.jpg', NULL, '2020-08-05 14:03:47', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(228, '5f2a138436aef1596593028.jpg', NULL, '2020-08-05 14:03:48', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(229, '5f2a1385e2daf1596593029.jpg', NULL, '2020-08-05 14:03:50', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(230, '5f2a1386a104f1596593030.jpg', NULL, '2020-08-05 14:03:51', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(231, '5f2a1388af7a81596593032.jpg', NULL, '2020-08-05 14:03:52', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(232, '5f2a13891d3941596593033.jpg', NULL, '2020-08-05 14:03:53', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(233, '5f2a138b131ff1596593035.jpg', NULL, '2020-08-05 14:03:55', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(234, '5f2a138bac4501596593035.jpg', NULL, '2020-08-05 14:03:55', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(235, '5f2a138d6b2251596593037.jpg', NULL, '2020-08-05 14:03:57', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(236, '5f2a138df30d31596593037.jpg', NULL, '2020-08-05 14:03:58', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(237, '5f2a138fd1d161596593039.jpg', NULL, '2020-08-05 14:04:00', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(238, '5f2a13904608a1596593040.jpg', NULL, '2020-08-05 14:04:00', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(239, '5f2a139292be91596593042.jpg', NULL, '2020-08-05 14:04:02', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(240, '5f2a1393a64f01596593043.jpg', NULL, '2020-08-05 14:04:04', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(241, '5f2a1395ec0401596593045.jpg', NULL, '2020-08-05 14:04:06', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(242, '5f2a139c59ceb1596593052.jpg', NULL, '2020-08-05 14:04:12', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(243, '5f2a139d2922c1596593053.jpg', NULL, '2020-08-05 14:04:14', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(244, '5f2a13a1eda441596593057.jpg', NULL, '2020-08-05 14:04:18', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(245, '5f2a13a3151661596593059.jpg', NULL, '2020-08-05 14:04:19', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(246, '5f2a13a71f1201596593063.jpg', NULL, '2020-08-05 14:04:23', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(247, '5f2a13a85ca471596593064.jpg', NULL, '2020-08-05 14:04:24', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(248, '5f2a13abed5771596593067.jpg', NULL, '2020-08-05 14:04:28', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(249, '5f2a13aca66cc1596593068.jpg', NULL, '2020-08-05 14:04:28', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(250, '5f2a13b00ca911596593072.jpg', NULL, '2020-08-05 14:04:32', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(251, '5f2a13b0a6aff1596593072.jpg', NULL, '2020-08-05 14:04:33', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(252, '5f2a13b480f7b1596593076.jpg', NULL, '2020-08-05 14:04:36', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(253, '5f2a13b5510881596593077.jpg', NULL, '2020-08-05 14:04:37', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(254, '5f2a13b96e9e51596593081.jpg', NULL, '2020-08-05 14:04:41', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(255, '5f2a13ba368fc1596593082.jpg', NULL, '2020-08-05 14:04:42', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(256, '5f2a13bd6503f1596593085.jpg', NULL, '2020-08-05 14:04:45', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(257, '5f2a13c0c52fe1596593088.jpg', NULL, '2020-08-05 14:04:49', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(258, '5f2a13c1984ea1596593089.jpg', NULL, '2020-08-05 14:04:50', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(259, '5f2a13c5950a91596593093.jpg', NULL, '2020-08-05 14:04:53', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(260, '5f2a13c627b191596593094.jpg', NULL, '2020-08-05 14:04:54', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(261, '5f2a13c871efa1596593096.jpg', NULL, '2020-08-05 14:04:56', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(262, '5f2a13c9207721596593097.jpg', NULL, '2020-08-05 14:04:57', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(263, '5f2a13cae84571596593098.jpg', NULL, '2020-08-05 14:04:59', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(264, '5f2a13cb927aa1596593099.jpg', NULL, '2020-08-05 14:04:59', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(265, '5f2a13cd4122c1596593101.jpg', NULL, '2020-08-05 14:05:01', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(266, '5f2a13cde1a721596593101.jpg', NULL, '2020-08-05 14:05:02', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(267, '5f2a13d0b47201596593104.jpg', NULL, '2020-08-05 14:05:05', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(268, '5f2a13d1f140f1596593105.jpg', NULL, '2020-08-05 14:05:06', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(269, '5f2a13d5acfc81596593109.jpg', NULL, '2020-08-05 14:05:10', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(270, '5f2a13d6bf2291596593110.jpg', NULL, '2020-08-05 14:05:11', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(271, '5f2a13db974201596593115.jpg', NULL, '2020-08-05 14:05:15', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(272, '5f2a13db9df0c1596593115.jpg', NULL, '2020-08-05 14:05:15', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(273, '5f2a13de5f5a91596593118.jpg', NULL, '2020-08-05 14:05:18', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(274, '5f2a13de6914c1596593118.jpg', NULL, '2020-08-05 14:05:18', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(275, '5f2a13e18640d1596593121.jpg', NULL, '2020-08-05 14:05:21', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(276, '5f2a13e1b66fb1596593121.jpg', NULL, '2020-08-05 14:05:21', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(277, '5f2a13e3dad8f1596593123.jpg', NULL, '2020-08-05 14:05:24', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(278, '5f2a13e41b7611596593124.jpg', NULL, '2020-08-05 14:05:24', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(279, '5f2a13e61c8501596593126.jpg', NULL, '2020-08-05 14:05:26', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(280, '5f2a13e67fe561596593126.jpg', NULL, '2020-08-05 14:05:26', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(281, '5f2a13e87cf511596593128.jpg', NULL, '2020-08-05 14:05:28', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(282, '5f2a13e90953c1596593129.jpg', NULL, '2020-08-05 14:05:29', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(283, '5f2a13eb09e4b1596593131.jpg', NULL, '2020-08-05 14:05:31', '2020-08-05 14:05:37', 'pt-br', NULL, 2),
	(287, '5ff37709cd2bd1609791241.jpeg', NULL, '2021-01-05 08:14:01', '2021-01-05 08:14:09', 'pt-br', NULL, 3),
	(288, '5ff3770a33ab81609791242.PNG', NULL, '2021-01-05 08:14:02', '2021-01-05 08:14:09', 'pt-br', NULL, 3),
	(289, '5ff3770aa81521609791242.PNG', NULL, '2021-01-05 08:14:02', '2021-01-05 08:14:09', 'pt-br', NULL, 3),
	(290, '5ff3770b162561609791243.png', NULL, '2021-01-05 08:14:03', '2021-01-05 08:14:09', 'pt-br', NULL, 3),
	(291, '5ff37811583e51609791505.png', NULL, '2021-01-05 08:18:26', '2021-01-05 08:18:30', 'pt-br', NULL, 4),
	(292, '604126b4e75d71614882484.png', NULL, '2021-03-05 03:28:06', '2021-03-05 03:28:06', 'ja', '604126b0171ab', 0),
	(299, '604139afa92d21614887343.png', NULL, '2021-03-05 04:49:04', '2021-03-05 04:49:04', 'ja', '6041399d56093', 0),
	(300, '604139afa8ca91614887343.png', NULL, '2021-03-05 04:49:04', '2021-03-05 04:49:04', 'ja', '6041399d56093', 0),
	(301, '604139b06b95e1614887344.jpg', NULL, '2021-03-05 04:49:04', '2021-03-05 04:49:04', 'ja', '6041399d56093', 0),
	(302, '604139b075f811614887344.jpg', NULL, '2021-03-05 04:49:04', '2021-03-05 04:49:04', 'ja', '6041399d56093', 0),
	(303, '604139b0c04111614887344.PNG', NULL, '2021-03-05 04:49:06', '2021-03-05 04:49:06', 'ja', '6041399d56093', 0),
	(304, '604139cf84b191614887375.png', NULL, '2021-03-05 04:49:35', '2021-03-05 04:49:35', 'ja', '6041399d56093', 0),
	(305, '604139d54f3051614887381.PNG', NULL, '2021-03-05 04:49:43', '2021-03-05 04:49:43', 'ja', '6041399d56093', 0),
	(306, '604139e87db171614887400.PNG', NULL, '2021-03-05 04:50:02', '2021-03-05 04:50:02', 'ja', '604139e4515ab', 0),
	(308, '604239a2d3d9a1614952866.jpg', NULL, '2021-03-05 23:01:08', '2021-03-05 23:01:08', 'ja', '6042399d2e2a6', 0),
	(309, '604239a8bd46b1614952872.jpg', NULL, '2021-03-05 23:01:14', '2021-03-05 23:01:14', 'ja', '604239a447c33', 0),
	(310, '60423a68007851614953064.jpg', NULL, '2021-03-05 23:04:24', '2021-03-05 23:04:24', 'ja', '60423a630c6fb', 0);
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;

-- Dumping structure for table lacura.socials
CREATE TABLE IF NOT EXISTS `socials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.socials: ~0 rows (approximately)
/*!40000 ALTER TABLE `socials` DISABLE KEYS */;
/*!40000 ALTER TABLE `socials` ENABLE KEYS */;

-- Dumping structure for table lacura.social_marketings
CREATE TABLE IF NOT EXISTS `social_marketings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.social_marketings: ~0 rows (approximately)
/*!40000 ALTER TABLE `social_marketings` DISABLE KEYS */;
/*!40000 ALTER TABLE `social_marketings` ENABLE KEYS */;

-- Dumping structure for table lacura.social_marketing_services
CREATE TABLE IF NOT EXISTS `social_marketing_services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `package_id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.social_marketing_services: ~0 rows (approximately)
/*!40000 ALTER TABLE `social_marketing_services` DISABLE KEYS */;
/*!40000 ALTER TABLE `social_marketing_services` ENABLE KEYS */;

-- Dumping structure for table lacura.social_marketing_service_subscribers
CREATE TABLE IF NOT EXISTS `social_marketing_service_subscribers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `service_id` int(10) unsigned NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.social_marketing_service_subscribers: ~0 rows (approximately)
/*!40000 ALTER TABLE `social_marketing_service_subscribers` DISABLE KEYS */;
/*!40000 ALTER TABLE `social_marketing_service_subscribers` ENABLE KEYS */;

-- Dumping structure for table lacura.subscribers
CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.subscribers: ~0 rows (approximately)
/*!40000 ALTER TABLE `subscribers` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscribers` ENABLE KEYS */;

-- Dumping structure for table lacura.support_tickets
CREATE TABLE IF NOT EXISTS `support_tickets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ticket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.support_tickets: ~5 rows (approximately)
/*!40000 ALTER TABLE `support_tickets` DISABLE KEYS */;
REPLACE INTO `support_tickets` (`id`, `ticket`, `subject`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
	(1, '5B87BFFA', 'Minha Conta de usuário', 4, 9, '2020-07-11 04:35:29', '2020-11-17 15:16:12'),
	(2, 'C81A8712', 'Retirada', 9, 2, '2020-10-05 16:06:29', '2020-10-06 02:06:46'),
	(3, 'FEBAFFD0', 'Retirada', 9, 2, '2020-10-06 06:08:03', '2020-10-06 18:07:40'),
	(4, 'BCB1A429', 'Retirada', 9, 2, '2020-10-06 06:08:04', '2020-10-06 18:27:00'),
	(5, '8B596B7B', 'Dados para depósito / Japan Net Bank', 9, 2, '2020-10-06 06:22:53', '2020-10-06 18:19:00'),
	(6, '1AA51AE7', 'qq', 1, 9, '2021-03-04 05:29:47', '2021-03-19 05:25:19'),
	(7, 'C6CC0E00', 'q', 1, 9, '2021-03-19 06:09:00', '2021-03-20 03:41:32');
/*!40000 ALTER TABLE `support_tickets` ENABLE KEYS */;

-- Dumping structure for table lacura.teams
CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ln_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tw_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.teams: ~0 rows (approximately)
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;

-- Dumping structure for table lacura.testimonials
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.testimonials: ~0 rows (approximately)
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;

-- Dumping structure for table lacura.ticket_comments
CREATE TABLE IF NOT EXISTS `ticket_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ticket_id` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.ticket_comments: ~16 rows (approximately)
/*!40000 ALTER TABLE `ticket_comments` DISABLE KEYS */;
REPLACE INTO `ticket_comments` (`id`, `ticket_id`, `type`, `comment`, `created_at`, `updated_at`) VALUES
	(1, '5B87BFFA', 1, 'Oi\r\n\r\nComo faço para entrar em minha conta?', '2020-07-11 04:35:29', '2020-07-11 04:35:29'),
	(2, '5B87BFFA', 0, 'Ola, LC\r\n\r\nEntre com seus dados que cadastrou no sistema...\r\nSeu mail e senha', '2020-07-11 13:36:58', '2020-07-11 13:36:58'),
	(3, 'C81A8712', 1, 'Adicionar ¥350000 no saldo', '2020-10-05 16:06:29', '2020-10-05 16:06:29'),
	(4, 'C81A8712', 0, 'Prezado Marcos Seidi Togashi ,\r\n\r\nVocê pode fazer o saque, caso ainda encontre problemas nos informe!\r\n\r\n\r\nAtenciosamente,\r\nLa Cura', '2020-10-06 02:06:46', '2020-10-06 02:06:46'),
	(5, 'FEBAFFD0', 1, 'Como enviar cópia do documento e self?', '2020-10-06 06:08:03', '2020-10-06 06:08:03'),
	(6, 'BCB1A429', 1, 'Como enviar cópia do documento e self?', '2020-10-06 06:08:04', '2020-10-06 06:08:04'),
	(7, '8B596B7B', 1, 'ジャパンネット銀行\r\n店番号　003\r\n口口座番号　8357158\r\nMARCOSSEIDI TOGASHI', '2020-10-06 06:22:55', '2020-10-06 06:22:55'),
	(8, 'FEBAFFD0', 0, 'Prezado Marcos Seidi Togashi\r\n\r\nO envio de documentos deve ser feito junto com o processo de requerimento de retirada.\r\n\r\nEquipe de Suporte\r\n奇跡La Cura', '2020-10-06 18:07:40', '2020-10-06 18:07:40'),
	(9, '8B596B7B', 0, 'Prezado Marcos Seidi Togashi\r\n\r\n※	O procedimento de retirada segue um processo de regras para validar à retirada são: \r\n         Números de indicados.\r\n         Término do prazo de carência dos 180 dias.\r\n\r\nRecebemos os dados para o deposito, esta em andamento podendo levar de 3 a 10 dias uteis.\r\nA retirada não tem como ser suspendida após a solicitação.\r\nA cada retirada e/ou deposito é descontado 11% que é taxa da La Cura.\r\n\r\nEquipe de Suporte\r\n奇跡La Cura', '2020-10-06 18:19:00', '2020-10-06 18:19:00'),
	(10, 'BCB1A429', 0, 'Prezado Marcos Seidi Togashi\r\n\r\nRespondido no ticket anterior.\r\nPor favor, não multiplique o mesmo assunto abrindo vários tickets.\r\nO sistema segue uma programação rigorosa de segurança que pode comprometer o seu cadastro fazendo com que entre no SPAM .\r\n\r\nEquipe de Suporte\r\n奇跡La Cura', '2020-10-06 18:27:00', '2020-10-06 18:27:00'),
	(11, '1AA51AE7', 1, '<meta charset="UTF-8">\r\n    <meta name="viewport" content="width=device-width, initial-scale=1.0">\r\n    <meta http-equiv="X-UA-Compatible" content="ie=edge">', '2021-03-04 05:29:47', '2021-03-04 05:29:47'),
	(20, 'C6CC0E00', 0, 'afdasf', '2021-03-19 22:50:31', '2021-03-19 22:50:31'),
	(21, 'C6CC0E00', 0, 'sdfasdf', '2021-03-19 22:50:35', '2021-03-19 22:50:35'),
	(22, 'C6CC0E00', 0, 'sdfafasdf', '2021-03-19 22:50:40', '2021-03-19 22:50:40'),
	(23, 'C6CC0E00', 1, 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', '2021-03-19 23:14:26', '2021-03-19 23:14:26'),
	(24, 'C6CC0E00', 0, 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', '2021-03-19 23:20:36', '2021-03-19 23:20:36');
/*!40000 ALTER TABLE `ticket_comments` ENABLE KEYS */;

-- Dumping structure for table lacura.time_settings
CREATE TABLE IF NOT EXISTS `time_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.time_settings: ~5 rows (approximately)
/*!40000 ALTER TABLE `time_settings` DISABLE KEYS */;
REPLACE INTO `time_settings` (`id`, `name`, `time`, `created_at`, `updated_at`) VALUES
	(2, 'Hourly', '1', '2018-12-05 06:48:07', '2018-12-05 06:54:01'),
	(3, 'Weekly', '168', '2018-12-05 06:54:31', '2018-12-05 06:54:31'),
	(4, 'Daily', '24', '2018-12-05 06:54:43', '2019-01-31 05:34:26'),
	(5, 'Monthly', '720', '2018-12-05 06:54:59', '2018-12-05 06:54:59'),
	(6, 'Yearly', '8760', '2018-12-05 06:55:17', '2018-12-05 06:55:17');
/*!40000 ALTER TABLE `time_settings` ENABLE KEYS */;

-- Dumping structure for table lacura.transections
CREATE TABLE IF NOT EXISTS `transections` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `trxid` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=514 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.transections: ~462 rows (approximately)
/*!40000 ALTER TABLE `transections` DISABLE KEYS */;
REPLACE INTO `transections` (`id`, `trxid`, `user_id`, `amount`, `balance`, `des`, `charge`, `type`, `created_at`, `updated_at`) VALUES
	(7, 'AdKqXd0Zx0jFNprG', 11, '299000', '299000', 'Deposit Request Approved & Balance Added', '0', 0, '2020-06-29 14:34:45', '2020-06-29 14:34:45'),
	(8, 'TRX-8157', 11, '-299000', '299000', 'Invested On GIFT', '0', 0, '2020-06-29 14:38:28', '2020-06-29 14:38:28'),
	(9, 'BPaIFEx5mQMlYfhC', 9, '29900', '29900', '1 Referral Commission', '0', 11, '2020-06-29 14:38:28', '2020-06-29 14:38:28'),
	(10, '9iNszuXI9kR88Yde', 4, '23920', '23920', '2 Referral Commission', '0', 11, '2020-06-29 14:38:29', '2020-06-29 14:38:29'),
	(11, 'TRX-16965efa878f0f61a', 11, '5083', '5083', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-06-30 03:30:07', '2020-06-30 03:30:07'),
	(25, 'Xa3sieobdf36I7sG', 9, '299000', '299000', 'Deposit Request Approved & Balance Added', '0', 0, '2020-06-30 17:34:49', '2020-06-30 17:34:49'),
	(26, 'TRX-5426', 9, '-299000', '299000', 'Invested On GIFT', '0', 0, '2020-06-30 08:39:37', '2020-06-30 08:39:37'),
	(27, 'egoQFNHTqA9HbPZy', 4, '29900', '29900', '1 Referral Commission', '0', 11, '2020-06-30 08:39:37', '2020-06-30 08:39:37'),
	(28, 'F3J5ZfxBAcpufooL', 17, '299000', '299000', 'Deposit Request Approved & Balance Added', '0', 0, '2020-06-30 23:41:00', '2020-06-30 23:41:00'),
	(29, 'TRX-4064', 17, '-299000', '299000', 'Invested On GIFT', '0', 0, '2020-07-01 00:41:14', '2020-07-01 00:41:14'),
	(30, 'ctIuoA1cApzf6qMH', 9, '29900', '29900', '1 Referral Commission', '0', 11, '2020-07-01 00:41:14', '2020-07-01 00:41:14'),
	(31, 'QzJGqG9lQ2HZznTE', 4, '23920', '23920', '2 Referral Commission', '0', 11, '2020-07-01 00:41:15', '2020-07-01 00:41:15'),
	(32, 'TRX-83655efbb5e846107', 11, '5083', '10166', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-01 10:00:08', '2020-07-01 10:00:08'),
	(33, 'TRX-65955efc18576ebe2', 9, '5083', '5083', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-01 17:00:07', '2020-07-01 17:00:07'),
	(34, 'TRX-47805efc1857717b9', 17, '5083', '5083', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-01 17:00:07', '2020-07-01 17:00:07'),
	(35, 'LDKMzha5e1OZmonp', 16, '299000', '299000', 'Deposit Request Approved & Balance Added', '0', 0, '2020-07-02 01:07:03', '2020-07-02 01:07:03'),
	(36, 'TRX-4082', 16, '-299000', '299000', 'Invested On GIFT', '0', 0, '2020-07-01 16:11:26', '2020-07-01 16:11:26'),
	(37, 'br5YwT70rDeIzkW8', 9, '29900', '34983', '1 Referral Commission', '0', 11, '2020-07-01 16:11:26', '2020-07-01 16:11:26'),
	(38, 'eLiHDL8H3tBJXLoK', 4, '23920', '23920', '2 Referral Commission', '0', 11, '2020-07-01 16:11:27', '2020-07-01 16:11:27'),
	(39, 'TRX-76985efd077162b6a', 11, '5083', '15249', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-02 10:00:17', '2020-07-02 10:00:17'),
	(40, 'TRX-52235efd319c1f9c8', 16, '5083', '5083', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-02 13:00:12', '2020-07-02 13:00:12'),
	(41, 'TRX-80655efd69db44850', 9, '5083', '10166', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-02 17:00:11', '2020-07-02 17:00:11'),
	(42, 'TRX-94055efd69db46bd8', 17, '5083', '10166', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-02 17:00:11', '2020-07-02 17:00:11'),
	(43, 'TRX-14475efe66fad3aa4', 11, '5083', '20332', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-03 11:00:10', '2020-07-03 11:00:10'),
	(44, 'TRX-57655efe912a246cb', 16, '5083', '10166', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-03 14:00:10', '2020-07-03 14:00:10'),
	(45, 'TRX-66745efebb5bb9922', 9, '5083', '15249', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-03 17:00:11', '2020-07-03 17:00:11'),
	(46, 'TRX-94015efebb5bc9d19', 17, '5083', '15249', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-03 17:00:11', '2020-07-03 17:00:11'),
	(47, 'TRX-40655f01eaf779961', 11, '5083', '25415', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-06 03:00:07', '2020-07-06 03:00:07'),
	(48, 'TRX-69165f01eaf77d1e1', 9, '5083', '20332', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-06 03:00:07', '2020-07-06 03:00:07'),
	(49, 'TRX-29995f01eaf77f3a7', 17, '5083', '20332', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-06 03:00:07', '2020-07-06 03:00:07'),
	(50, 'TRX-49775f01eaf78152f', 16, '5083', '15249', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-06 03:00:07', '2020-07-06 03:00:07'),
	(51, 'TRX-28265f033c77cca25', 11, '5083', '30498', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-07 03:00:07', '2020-07-07 03:00:07'),
	(52, 'TRX-52905f033c77d23c7', 9, '5083', '25415', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-07 03:00:07', '2020-07-07 03:00:07'),
	(53, 'TRX-65235f033c77d5dd3', 17, '5083', '25415', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-07 03:00:07', '2020-07-07 03:00:07'),
	(54, 'TRX-59405f033c77d8806', 16, '5083', '20332', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-07 03:00:07', '2020-07-07 03:00:07'),
	(55, 'TRX-15055f048e0077a29', 11, '5083', '35581', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-08 03:00:16', '2020-07-08 03:00:16'),
	(56, 'TRX-19955f048e008a11b', 9, '5083', '30498', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-08 03:00:16', '2020-07-08 03:00:16'),
	(57, 'TRX-56475f048e0090be3', 17, '5083', '30498', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-08 03:00:16', '2020-07-08 03:00:16'),
	(58, 'TRX-29605f048e00951a7', 16, '5083', '25415', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-08 03:00:16', '2020-07-08 03:00:16'),
	(59, 'TRX-16275f05ed87a01fd', 11, '5083', '40664', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-09 04:00:07', '2020-07-09 04:00:07'),
	(60, 'TRX-91355f05ed87a4f0d', 9, '5083', '35581', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-09 04:00:07', '2020-07-09 04:00:07'),
	(61, 'TRX-46655f05ed87a8e17', 17, '5083', '35581', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-09 04:00:07', '2020-07-09 04:00:07'),
	(62, 'TRX-12875f05ed87ad66c', 16, '5083', '30498', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-09 04:00:07', '2020-07-09 04:00:07'),
	(63, 'TRX-76835f073f085a82e', 11, '5083', '45747', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-10 04:00:08', '2020-07-10 04:00:08'),
	(64, 'TRX-39535f073f0860a2d', 9, '5083', '40664', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-10 04:00:08', '2020-07-10 04:00:08'),
	(65, 'TRX-51435f073f086bd25', 17, '5083', '40664', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-10 04:00:08', '2020-07-10 04:00:08'),
	(66, 'TRX-37985f073f08720d2', 16, '5083', '35581', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-10 04:00:08', '2020-07-10 04:00:08'),
	(67, 'TRX-29325f0b257a0fcf5', 11, '5083', '50830', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-13 03:00:10', '2020-07-13 03:00:10'),
	(68, 'TRX-99495f0b257a16a67', 9, '5083', '45747', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-13 03:00:10', '2020-07-13 03:00:10'),
	(69, 'TRX-96005f0b257a1ecbb', 17, '5083', '45747', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-13 03:00:10', '2020-07-13 03:00:10'),
	(70, 'TRX-88405f0b257a244ae', 16, '5083', '40664', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-13 03:00:10', '2020-07-13 03:00:10'),
	(71, 'TRX-85985f0c76f9383d3', 11, '5083', '55913', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-14 03:00:09', '2020-07-14 03:00:09'),
	(72, 'TRX-94165f0c76f93d3e1', 9, '5083', '50830', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-14 03:00:09', '2020-07-14 03:00:09'),
	(73, 'TRX-90185f0c76f944e2d', 17, '5083', '50830', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-14 03:00:09', '2020-07-14 03:00:09'),
	(74, 'TRX-46735f0c76f947b04', 16, '5083', '45747', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-14 03:00:09', '2020-07-14 03:00:09'),
	(75, 'TRX-26895f0dc883e551a', 11, '5083', '60996', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-15 03:00:19', '2020-07-15 03:00:19'),
	(76, 'TRX-57915f0dc883ea42f', 9, '5083', '55913', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-15 03:00:19', '2020-07-15 03:00:19'),
	(77, 'TRX-99645f0dc883ecd73', 17, '5083', '55913', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-15 03:00:19', '2020-07-15 03:00:19'),
	(78, 'TRX-73095f0dc883f1533', 16, '5083', '50830', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-15 03:00:19', '2020-07-15 03:00:19'),
	(79, 'TRX-71985f0f281b2a2e2', 11, '5083', '66079', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-16 04:00:27', '2020-07-16 04:00:27'),
	(80, 'TRX-54015f0f281b2d14c', 9, '5083', '60996', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-16 04:00:27', '2020-07-16 04:00:27'),
	(81, 'TRX-59735f0f281b3028d', 17, '5083', '60996', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-16 04:00:27', '2020-07-16 04:00:27'),
	(82, 'TRX-99665f0f281b326e8', 16, '5083', '55913', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-16 04:00:27', '2020-07-16 04:00:27'),
	(83, 'TRX-61475f10879cbd0bd', 11, '5083', '71162', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-17 05:00:12', '2020-07-17 05:00:12'),
	(84, 'TRX-44855f10879cc3488', 9, '5083', '66079', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-17 05:00:12', '2020-07-17 05:00:12'),
	(85, 'TRX-83595f10879cce95d', 17, '5083', '66079', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-17 05:00:12', '2020-07-17 05:00:12'),
	(86, 'TRX-25685f10879cd5014', 16, '5083', '60996', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-17 05:00:12', '2020-07-17 05:00:12'),
	(87, 'TRX-59015f145ffd7b6cb', 11, '5083', '76245', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-20 03:00:13', '2020-07-20 03:00:13'),
	(88, 'TRX-71895f145ffd7f630', 9, '5083', '71162', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-20 03:00:13', '2020-07-20 03:00:13'),
	(89, 'TRX-65235f145ffd84397', 17, '5083', '71162', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-20 03:00:13', '2020-07-20 03:00:13'),
	(90, 'TRX-19855f145ffd89606', 16, '5083', '66079', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-20 03:00:13', '2020-07-20 03:00:13'),
	(91, 'TRX-66425f15bf87e1e1d', 11, '5083', '81328', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-21 04:00:07', '2020-07-21 04:00:07'),
	(92, 'TRX-25845f15bf87ece46', 9, '5083', '76245', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-21 04:00:07', '2020-07-21 04:00:07'),
	(93, 'TRX-83875f15bf87f0c44', 17, '5083', '76245', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-21 04:00:07', '2020-07-21 04:00:07'),
	(94, 'TRX-47165f15bf87f4033', 16, '5083', '71162', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-21 04:00:08', '2020-07-21 04:00:08'),
	(95, 'TRX-55635f17111496df6', 11, '5083', '86411', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-22 04:00:20', '2020-07-22 04:00:20'),
	(96, 'TRX-84295f171114a0144', 9, '5083', '81328', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-22 04:00:20', '2020-07-22 04:00:20'),
	(97, 'TRX-82765f171114a89d2', 17, '5083', '81328', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-22 04:00:20', '2020-07-22 04:00:20'),
	(98, 'TRX-88405f171114b1ca0', 16, '5083', '76245', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-22 04:00:20', '2020-07-22 04:00:20'),
	(99, 'TRX-21735f18709ac581b', 11, '5083', '91494', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-23 05:00:10', '2020-07-23 05:00:10'),
	(100, 'TRX-19955f18709ac880b', 9, '5083', '86411', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-23 05:00:10', '2020-07-23 05:00:10'),
	(101, 'TRX-73085f18709acad38', 17, '5083', '86411', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-23 05:00:10', '2020-07-23 05:00:10'),
	(102, 'TRX-41795f18709acd1ff', 16, '5083', '81328', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-23 05:00:10', '2020-07-23 05:00:10'),
	(103, 'TRX-11185f19c22c087c2', 11, '5083', '96577', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-24 05:00:28', '2020-07-24 05:00:28'),
	(104, 'TRX-76195f19c22c1f7ad', 9, '5083', '91494', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-24 05:00:28', '2020-07-24 05:00:28'),
	(105, 'TRX-22555f19c22c25edd', 17, '5083', '91494', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-24 05:00:28', '2020-07-24 05:00:28'),
	(106, 'TRX-32395f19c22c2dad4', 16, '5083', '86411', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-24 05:00:28', '2020-07-24 05:00:28'),
	(107, 'TRX-14985f1d9a8dc0458', 11, '5083', '101660', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-27 03:00:29', '2020-07-27 03:00:29'),
	(108, 'TRX-19955f1d9a8dc2db5', 9, '5083', '96577', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-27 03:00:29', '2020-07-27 03:00:29'),
	(109, 'TRX-13665f1d9a8dc5058', 17, '5083', '96577', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-27 03:00:29', '2020-07-27 03:00:29'),
	(110, 'TRX-70905f1d9a8dc80d8', 16, '5083', '91494', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-27 03:00:29', '2020-07-27 03:00:29'),
	(111, 'TRX-32795f1efa1c3320b', 11, '5083', '106743', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-28 04:00:28', '2020-07-28 04:00:28'),
	(112, 'TRX-66325f1efa1c3923a', 9, '5083', '101660', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-28 04:00:28', '2020-07-28 04:00:28'),
	(113, 'TRX-13865f1efa1c3d5e6', 17, '5083', '101660', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-28 04:00:28', '2020-07-28 04:00:28'),
	(114, 'TRX-34845f1efa1c407c2', 16, '5083', '96577', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-28 04:00:28', '2020-07-28 04:00:28'),
	(115, 'TRX-74935f204ba05c55f', 11, '5083', '111826', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-29 04:00:32', '2020-07-29 04:00:32'),
	(116, 'TRX-66585f204ba061ad8', 9, '5083', '106743', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-29 04:00:32', '2020-07-29 04:00:32'),
	(117, 'TRX-68185f204ba066021', 17, '5083', '106743', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-29 04:00:32', '2020-07-29 04:00:32'),
	(118, 'TRX-27855f204ba06a17a', 16, '5083', '101660', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-29 04:00:32', '2020-07-29 04:00:32'),
	(119, 'TRX-93205f21ab2e4924a', 11, '5083', '116909', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-30 05:00:30', '2020-07-30 05:00:30'),
	(120, 'TRX-59455f21ab2e4e44e', 9, '5083', '111826', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-30 05:00:30', '2020-07-30 05:00:30'),
	(121, 'TRX-15545f21ab2e5840e', 17, '5083', '111826', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-30 05:00:30', '2020-07-30 05:00:30'),
	(122, 'TRX-52835f21ab2e5e3cf', 16, '5083', '106743', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-30 05:00:30', '2020-07-30 05:00:30'),
	(123, 'TRX-90615f230ac078b5e', 11, '5083', '121992', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-31 06:00:32', '2020-07-31 06:00:32'),
	(124, 'TRX-36615f230ac082a2b', 9, '5083', '116909', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-31 06:00:32', '2020-07-31 06:00:32'),
	(125, 'TRX-76255f230ac087e60', 17, '5083', '116909', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-31 06:00:32', '2020-07-31 06:00:32'),
	(126, 'TRX-56525f230ac09575c', 16, '5083', '111826', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-07-31 06:00:32', '2020-07-31 06:00:32'),
	(127, 'TRX-67485f26d4f3c01e4', 11, '5083', '127075', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-03 03:00:03', '2020-08-03 03:00:03'),
	(128, 'TRX-90845f26d4f3c3dea', 9, '5083', '121992', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-03 03:00:03', '2020-08-03 03:00:03'),
	(129, 'TRX-19925f26d4f3c7424', 17, '5083', '121992', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-03 03:00:03', '2020-08-03 03:00:03'),
	(130, 'TRX-64915f26d4f3cbf9e', 16, '5083', '116909', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-03 03:00:03', '2020-08-03 03:00:03'),
	(131, 'TRX-21535f282677e4692', 11, '5083', '132158', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-04 03:00:07', '2020-08-04 03:00:07'),
	(132, 'TRX-33075f282677e9f98', 9, '5083', '127075', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-04 03:00:07', '2020-08-04 03:00:07'),
	(133, 'TRX-22105f282677ed921', 17, '5083', '127075', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-04 03:00:07', '2020-08-04 03:00:07'),
	(134, 'TRX-31175f282677f1008', 16, '5083', '121992', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-04 03:00:07', '2020-08-04 03:00:07'),
	(135, 'TRX-31165f2986045bd83', 11, '5083', '137241', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-05 04:00:04', '2020-08-05 04:00:04'),
	(136, 'TRX-36115f298604626e0', 9, '5083', '132158', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-05 04:00:04', '2020-08-05 04:00:04'),
	(137, 'TRX-36015f298604668e6', 17, '5083', '132158', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-05 04:00:04', '2020-08-05 04:00:04'),
	(138, 'TRX-96665f2986046c394', 16, '5083', '127075', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-05 04:00:04', '2020-08-05 04:00:04'),
	(139, 'TRX-59165f2ad787d49da', 11, '5083', '142324', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-06 04:00:07', '2020-08-06 04:00:07'),
	(140, 'TRX-71575f2ad787d96be', 9, '5083', '137241', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-06 04:00:07', '2020-08-06 04:00:07'),
	(141, 'TRX-58865f2ad787dca33', 17, '5083', '137241', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-06 04:00:07', '2020-08-06 04:00:07'),
	(142, 'TRX-68575f2ad787e052e', 16, '5083', '132158', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-06 04:00:07', '2020-08-06 04:00:07'),
	(143, 'TRX-46915f2c290eb5060', 11, '5083', '147407', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-07 04:00:14', '2020-08-07 04:00:14'),
	(144, 'TRX-82685f2c290ebabc6', 9, '5083', '142324', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-07 04:00:14', '2020-08-07 04:00:14'),
	(145, 'TRX-81435f2c290ec0a88', 17, '5083', '142324', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-07 04:00:14', '2020-08-07 04:00:14'),
	(146, 'TRX-33805f2c290ec7ee7', 16, '5083', '137241', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-07 04:00:14', '2020-08-07 04:00:14'),
	(147, 'TRX-85605f300f742484d', 11, '5083', '152490', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-10 03:00:04', '2020-08-10 03:00:04'),
	(148, 'TRX-59165f300f74299ee', 9, '5083', '147407', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-10 03:00:04', '2020-08-10 03:00:04'),
	(149, 'TRX-77395f300f742ca64', 17, '5083', '147407', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-10 03:00:04', '2020-08-10 03:00:04'),
	(150, 'TRX-76245f300f742f5bf', 16, '5083', '142324', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-10 03:00:04', '2020-08-10 03:00:04'),
	(151, 'TRX-62725f316f05f2a0f', 11, '5083', '157573', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-11 04:00:05', '2020-08-11 04:00:05'),
	(152, 'TRX-34085f316f06052e7', 9, '5083', '152490', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-11 04:00:06', '2020-08-11 04:00:06'),
	(153, 'TRX-50615f316f060a41e', 17, '5083', '152490', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-11 04:00:06', '2020-08-11 04:00:06'),
	(154, 'TRX-14875f316f060f398', 16, '5083', '147407', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-11 04:00:06', '2020-08-11 04:00:06'),
	(155, 'TRX-43635f32c086c5d2f', 11, '5083', '162656', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-12 04:00:06', '2020-08-12 04:00:06'),
	(156, 'TRX-24485f32c086c952b', 9, '5083', '157573', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-12 04:00:06', '2020-08-12 04:00:06'),
	(157, 'TRX-69685f32c086cc333', 17, '5083', '157573', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-12 04:00:06', '2020-08-12 04:00:06'),
	(158, 'TRX-85645f32c086ce99d', 16, '5083', '152490', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-12 04:00:06', '2020-08-12 04:00:06'),
	(159, 'TRX-21525f342016471e3', 11, '5083', '167739', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-13 05:00:06', '2020-08-13 05:00:06'),
	(160, 'TRX-20915f3420164b3b2', 9, '5083', '162656', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-13 05:00:06', '2020-08-13 05:00:06'),
	(161, 'TRX-49215f3420164ea70', 17, '5083', '162656', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-13 05:00:06', '2020-08-13 05:00:06'),
	(162, 'TRX-94135f34201652100', 16, '5083', '157573', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-13 05:00:06', '2020-08-13 05:00:06'),
	(163, 'TRX-21515f3571981539f', 11, '5083', '172822', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-14 05:00:08', '2020-08-14 05:00:08'),
	(164, 'TRX-46575f3571981925b', 9, '5083', '167739', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-14 05:00:08', '2020-08-14 05:00:08'),
	(165, 'TRX-92795f3571981b9b9', 17, '5083', '167739', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-14 05:00:08', '2020-08-14 05:00:08'),
	(166, 'TRX-72525f3571981dd1d', 16, '5083', '162656', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-14 05:00:08', '2020-08-14 05:00:08'),
	(167, 'TRX-35185f3949f5b53b6', 11, '5083', '177905', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-17 03:00:05', '2020-08-17 03:00:05'),
	(168, 'TRX-69745f3949f5ba2f0', 9, '5083', '172822', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-17 03:00:05', '2020-08-17 03:00:05'),
	(169, 'TRX-47365f3949f5be0f0', 17, '5083', '172822', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-17 03:00:05', '2020-08-17 03:00:05'),
	(170, 'TRX-96195f3949f5c3009', 16, '5083', '167739', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-17 03:00:05', '2020-08-17 03:00:05'),
	(171, 'TRX-23635f3a9b76e64cd', 11, '5083', '182988', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-18 03:00:06', '2020-08-18 03:00:06'),
	(172, 'TRX-82675f3a9b770081d', 9, '5083', '177905', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-18 03:00:07', '2020-08-18 03:00:07'),
	(173, 'TRX-37955f3a9b77045af', 17, '5083', '177905', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-18 03:00:07', '2020-08-18 03:00:07'),
	(174, 'TRX-51325f3a9b770d387', 16, '5083', '172822', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-18 03:00:07', '2020-08-18 03:00:07'),
	(175, 'TRX-13935f3bfb0569ecf', 11, '5083', '188071', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-19 04:00:05', '2020-08-19 04:00:05'),
	(176, 'TRX-25705f3bfb056ebbc', 9, '5083', '182988', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-19 04:00:05', '2020-08-19 04:00:05'),
	(177, 'TRX-47325f3bfb05767f0', 17, '5083', '182988', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-19 04:00:05', '2020-08-19 04:00:05'),
	(178, 'TRX-71005f3bfb057c139', 16, '5083', '177905', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-19 04:00:05', '2020-08-19 04:00:05'),
	(179, 'TRX-87845f3d4c8564b77', 11, '5083', '193154', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-20 04:00:05', '2020-08-20 04:00:05'),
	(180, 'TRX-54655f3d4c856b59b', 9, '5083', '188071', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-20 04:00:05', '2020-08-20 04:00:05'),
	(181, 'TRX-26125f3d4c857146e', 17, '5083', '188071', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-20 04:00:05', '2020-08-20 04:00:05'),
	(182, 'TRX-96275f3d4c8576623', 16, '5083', '182988', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-20 04:00:05', '2020-08-20 04:00:05'),
	(183, 'TRX-30555f3e9e057561c', 11, '5083', '198237', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-21 04:00:05', '2020-08-21 04:00:05'),
	(184, 'TRX-53935f3e9e057af31', 9, '5083', '193154', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-21 04:00:05', '2020-08-21 04:00:05'),
	(185, 'TRX-87825f3e9e057eff1', 17, '5083', '193154', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-21 04:00:05', '2020-08-21 04:00:05'),
	(186, 'TRX-14765f3e9e0582a18', 16, '5083', '188071', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-21 04:00:05', '2020-08-21 04:00:05'),
	(187, 'TRX-77565f428473f0a7a', 11, '5083', '203320', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-24 03:00:03', '2020-08-24 03:00:03'),
	(188, 'TRX-68175f42847403964', 9, '5083', '198237', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-24 03:00:04', '2020-08-24 03:00:04'),
	(189, 'TRX-34045f428474093bb', 17, '5083', '198237', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-24 03:00:04', '2020-08-24 03:00:04'),
	(190, 'TRX-69475f4284740faf3', 16, '5083', '193154', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-24 03:00:04', '2020-08-24 03:00:04'),
	(191, 'TRX-34915f43d64642c2a', 11, '5083', '208403', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-25 03:01:26', '2020-08-25 03:01:26'),
	(192, 'TRX-41565f43d6464816f', 9, '5083', '203320', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-25 03:01:26', '2020-08-25 03:01:26'),
	(193, 'TRX-15045f43d6464c3b7', 17, '5083', '203320', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-25 03:01:26', '2020-08-25 03:01:26'),
	(194, 'TRX-96525f43d646583d1', 16, '5083', '198237', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-25 03:01:26', '2020-08-25 03:01:26'),
	(195, 'TRX-37255f45358592fd3', 11, '5083', '213486', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-26 04:00:05', '2020-08-26 04:00:05'),
	(196, 'TRX-37395f453585980d4', 9, '5083', '208403', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-26 04:00:05', '2020-08-26 04:00:05'),
	(197, 'TRX-27445f4535859c1c6', 17, '5083', '208403', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-26 04:00:05', '2020-08-26 04:00:05'),
	(198, 'TRX-33225f4535859fb22', 16, '5083', '203320', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-26 04:00:05', '2020-08-26 04:00:05'),
	(199, 'TRX-40165f468706583d4', 11, '5083', '218569', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-27 04:00:06', '2020-08-27 04:00:06'),
	(200, 'TRX-23565f468707184fb', 9, '5083', '213486', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-27 04:00:07', '2020-08-27 04:00:07'),
	(201, 'TRX-75995f4687071dd06', 17, '5083', '213486', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-27 04:00:07', '2020-08-27 04:00:07'),
	(202, 'TRX-83225f468707215b2', 16, '5083', '208403', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-27 04:00:07', '2020-08-27 04:00:07'),
	(203, 'TRX-89155f47e693c4ea5', 11, '5083', '223652', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-28 05:00:03', '2020-08-28 05:00:03'),
	(204, 'TRX-41845f47e693c8a9a', 9, '5083', '218569', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-28 05:00:03', '2020-08-28 05:00:03'),
	(205, 'TRX-56905f47e693cbd67', 17, '5083', '218569', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-28 05:00:03', '2020-08-28 05:00:03'),
	(206, 'TRX-90755f47e693cf08b', 16, '5083', '213486', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-28 05:00:03', '2020-08-28 05:00:03'),
	(207, 'TRX-59995f4bbef4377e8', 11, '5083', '228735', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-31 03:00:04', '2020-08-31 03:00:04'),
	(208, 'TRX-48215f4bbef43ad77', 9, '5083', '223652', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-31 03:00:04', '2020-08-31 03:00:04'),
	(209, 'TRX-65235f4bbef43f557', 17, '5083', '223652', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-31 03:00:04', '2020-08-31 03:00:04'),
	(210, 'TRX-80815f4bbef44294a', 16, '5083', '218569', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-08-31 03:00:04', '2020-08-31 03:00:04'),
	(211, 'TRX-30875f4d10759790f', 11, '5083', '233818', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-01 03:00:05', '2020-09-01 03:00:05'),
	(212, 'TRX-19705f4d10759dd83', 9, '5083', '228735', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-01 03:00:05', '2020-09-01 03:00:05'),
	(213, 'TRX-46995f4d1075a28d5', 17, '5083', '228735', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-01 03:00:05', '2020-09-01 03:00:05'),
	(214, 'TRX-92675f4d1075a61c9', 16, '5083', '223652', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-01 03:00:05', '2020-09-01 03:00:05'),
	(215, 'TRX-41535f4e61f5e341f', 11, '5083', '238901', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-02 03:00:05', '2020-09-02 03:00:05'),
	(216, 'TRX-42475f4e61f5ea509', 9, '5083', '233818', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-02 03:00:05', '2020-09-02 03:00:05'),
	(217, 'TRX-72345f4e61f5ed04b', 17, '5083', '233818', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-02 03:00:05', '2020-09-02 03:00:05'),
	(218, 'TRX-17335f4e61f5f06dd', 16, '5083', '228735', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-02 03:00:05', '2020-09-02 03:00:05'),
	(219, 'TRX-15285f4fb375c374a', 11, '5083', '243984', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-03 03:00:05', '2020-09-03 03:00:05'),
	(220, 'TRX-28355f4fb375c8742', 9, '5083', '238901', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-03 03:00:05', '2020-09-03 03:00:05'),
	(221, 'TRX-21825f4fb375cba39', 17, '5083', '238901', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-03 03:00:05', '2020-09-03 03:00:05'),
	(222, 'TRX-69445f4fb375cf0d8', 16, '5083', '233818', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-03 03:00:05', '2020-09-03 03:00:05'),
	(223, 'TRX-71905f5104f577539', 11, '5083', '249067', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-04 03:00:05', '2020-09-04 03:00:05'),
	(224, 'TRX-32945f5104f57b88b', 9, '5083', '243984', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-04 03:00:05', '2020-09-04 03:00:05'),
	(225, 'TRX-37515f5104f57ed2e', 17, '5083', '243984', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-04 03:00:05', '2020-09-04 03:00:05'),
	(226, 'TRX-58815f5104f5823cd', 16, '5083', '238901', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-04 03:00:05', '2020-09-04 03:00:05'),
	(227, 'TRX-93735f54f9754a149', 11, '5083', '254150', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-07 03:00:05', '2020-09-07 03:00:05'),
	(228, 'TRX-72465f54f9754f660', 9, '5083', '249067', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-07 03:00:05', '2020-09-07 03:00:05'),
	(229, 'TRX-78825f54f97554e3b', 17, '5083', '249067', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-07 03:00:05', '2020-09-07 03:00:05'),
	(230, 'TRX-67015f54f9755819d', 16, '5083', '243984', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-07 03:00:05', '2020-09-07 03:00:05'),
	(231, 'TRX-11245f564affb1c25', 11, '5083', '259233', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-08 03:00:15', '2020-09-08 03:00:15'),
	(232, 'TRX-55715f564affb5b6b', 9, '5083', '254150', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-08 03:00:15', '2020-09-08 03:00:15'),
	(233, 'TRX-24985f564affbbf06', 17, '5083', '254150', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-08 03:00:15', '2020-09-08 03:00:15'),
	(234, 'TRX-23855f564affc0e1d', 16, '5083', '249067', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-08 03:00:15', '2020-09-08 03:00:15'),
	(235, 'TRX-44105f57aa844fdb7', 11, '5083', '264316', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-09 04:00:04', '2020-09-09 04:00:04'),
	(236, 'TRX-49825f57aa8454bf2', 9, '5083', '259233', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-09 04:00:04', '2020-09-09 04:00:04'),
	(237, 'TRX-15955f57aa8458c43', 17, '5083', '259233', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-09 04:00:04', '2020-09-09 04:00:04'),
	(238, 'TRX-54495f57aa845ce1d', 16, '5083', '254150', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-09 04:00:04', '2020-09-09 04:00:04'),
	(239, 'TRX-19985f58fc06590c9', 11, '5083', '269399', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-10 04:00:06', '2020-09-10 04:00:06'),
	(240, 'TRX-62645f58fc065dd9d', 9, '5083', '264316', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-10 04:00:06', '2020-09-10 04:00:06'),
	(241, 'TRX-77415f58fc06628ba', 17, '5083', '264316', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-10 04:00:06', '2020-09-10 04:00:06'),
	(242, 'TRX-78715f58fc06675ef', 16, '5083', '259233', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-10 04:00:06', '2020-09-10 04:00:06'),
	(243, 'TRX-23415f5a4d882da6b', 11, '5083', '274482', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-11 04:00:08', '2020-09-11 04:00:08'),
	(244, 'TRX-51235f5a4d8834bd7', 9, '5083', '269399', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-11 04:00:08', '2020-09-11 04:00:08'),
	(245, 'TRX-71595f5a4d88393a4', 17, '5083', '269399', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-11 04:00:08', '2020-09-11 04:00:08'),
	(246, 'TRX-65295f5a4d883edee', 16, '5083', '264316', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-11 04:00:08', '2020-09-11 04:00:08'),
	(247, 'TRX-91785f5e33f94999a', 11, '5083', '279565', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-14 03:00:09', '2020-09-14 03:00:09'),
	(248, 'TRX-61025f5e33f94bffb', 9, '5083', '274482', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-14 03:00:09', '2020-09-14 03:00:09'),
	(249, 'TRX-65675f5e33f94e204', 17, '5083', '274482', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-14 03:00:09', '2020-09-14 03:00:09'),
	(250, 'TRX-92625f5e33f952013', 16, '5083', '269399', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-14 03:00:09', '2020-09-14 03:00:09'),
	(251, 'TRX-86245f5f938748b20', 11, '5083', '284648', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-15 04:00:07', '2020-09-15 04:00:07'),
	(252, 'TRX-89735f5f93874f7b4', 9, '5083', '279565', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-15 04:00:07', '2020-09-15 04:00:07'),
	(253, 'TRX-42225f5f9387547c4', 17, '5083', '279565', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-15 04:00:07', '2020-09-15 04:00:07'),
	(254, 'TRX-68295f5f93875814e', 16, '5083', '274482', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-15 04:00:07', '2020-09-15 04:00:07'),
	(255, 'TRX-25185f60f316ba7e3', 11, '5083', '289731', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-16 05:00:06', '2020-09-16 05:00:06'),
	(256, 'TRX-35975f60f316bdee8', 9, '5083', '284648', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-16 05:00:06', '2020-09-16 05:00:06'),
	(257, 'TRX-90805f60f316c0fa9', 17, '5083', '284648', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-16 05:00:06', '2020-09-16 05:00:06'),
	(258, 'TRX-34845f60f316c3a89', 16, '5083', '279565', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-16 05:00:06', '2020-09-16 05:00:06'),
	(259, 'TRX-10645f6252a4b8d9f', 11, '5083', '294814', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-17 06:00:04', '2020-09-17 06:00:04'),
	(260, 'TRX-19505f6252a4bd575', 9, '5083', '289731', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-17 06:00:04', '2020-09-17 06:00:04'),
	(261, 'TRX-84765f6252a4c0ab3', 17, '5083', '289731', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-17 06:00:04', '2020-09-17 06:00:04'),
	(262, 'TRX-24015f6252a4c4688', 16, '5083', '284648', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-17 06:00:04', '2020-09-17 06:00:04'),
	(263, 'TRX-98605f63a425655a4', 11, '5083', '299897', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-18 06:00:05', '2020-09-18 06:00:05'),
	(264, 'TRX-32075f63a425e9a30', 9, '5083', '294814', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-18 06:00:05', '2020-09-18 06:00:05'),
	(265, 'TRX-54105f63a425ecc6e', 17, '5083', '294814', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-18 06:00:05', '2020-09-18 06:00:05'),
	(266, 'TRX-57595f63a425f11d9', 16, '5083', '289731', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-18 06:00:05', '2020-09-18 06:00:05'),
	(267, 'TRX-95855f676e74055ad', 11, '5083', '304980', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-21 03:00:04', '2020-09-21 03:00:04'),
	(268, 'TRX-37195f676e740bc88', 9, '5083', '299897', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-21 03:00:04', '2020-09-21 03:00:04'),
	(269, 'TRX-26925f676e740fea2', 17, '5083', '299897', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-21 03:00:04', '2020-09-21 03:00:04'),
	(270, 'TRX-36045f676e74129ef', 16, '5083', '294814', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-21 03:00:04', '2020-09-21 03:00:04'),
	(271, 'TRX-21885f68bff52de35', 11, '5083', '310063', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-22 03:00:05', '2020-09-22 03:00:05'),
	(272, 'TRX-70585f68bff531243', 9, '5083', '304980', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-22 03:00:05', '2020-09-22 03:00:05'),
	(273, 'TRX-81495f68bff53627f', 17, '5083', '304980', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-22 03:00:05', '2020-09-22 03:00:05'),
	(274, 'TRX-46975f68bff53b395', 16, '5083', '299897', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-22 03:00:05', '2020-09-22 03:00:05'),
	(275, 'TRX-50095f6a1176a5fd7', 11, '5083', '315146', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-23 03:00:06', '2020-09-23 03:00:06'),
	(276, 'TRX-47555f6a1176a96db', 9, '5083', '310063', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-23 03:00:06', '2020-09-23 03:00:06'),
	(277, 'TRX-93155f6a1176abcb4', 17, '5083', '310063', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-23 03:00:06', '2020-09-23 03:00:06'),
	(278, 'TRX-45405f6a1176ae161', 16, '5083', '304980', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-23 03:00:06', '2020-09-23 03:00:06'),
	(279, 'TRX-88955f6b7106743ff', 11, '5083', '320229', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-24 04:00:06', '2020-09-24 04:00:06'),
	(280, 'TRX-61205f6b71067d09d', 9, '5083', '315146', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-24 04:00:06', '2020-09-24 04:00:06'),
	(281, 'TRX-12865f6b7106808a2', 17, '5083', '315146', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-24 04:00:06', '2020-09-24 04:00:06'),
	(282, 'TRX-52835f6b710683d81', 16, '5083', '310063', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-24 04:00:06', '2020-09-24 04:00:06'),
	(283, 'TRX-24065f6cc2887cda9', 11, '5083', '325312', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-25 04:00:08', '2020-09-25 04:00:08'),
	(284, 'TRX-54695f6cc2888345a', 9, '5083', '320229', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-25 04:00:08', '2020-09-25 04:00:08'),
	(285, 'TRX-50635f6cc2888793a', 17, '5083', '320229', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-25 04:00:08', '2020-09-25 04:00:08'),
	(286, 'TRX-87745f6cc2888b992', 16, '5083', '315146', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-25 04:00:08', '2020-09-25 04:00:08'),
	(287, 'TRX-26085f70a8f7aefa8', 11, '5083', '330395', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-28 03:00:07', '2020-09-28 03:00:07'),
	(288, 'TRX-20735f70a8f7b5215', 9, '5083', '325312', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-28 03:00:07', '2020-09-28 03:00:07'),
	(289, 'TRX-46305f70a8f7b964c', 17, '5083', '325312', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-28 03:00:07', '2020-09-28 03:00:07'),
	(290, 'TRX-48015f70a8f7bf42d', 16, '5083', '320229', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-28 03:00:07', '2020-09-28 03:00:07'),
	(291, 'TRX-16125f720885b8cc2', 11, '5083', '335478', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-29 04:00:05', '2020-09-29 04:00:05'),
	(292, 'TRX-88765f720885bd244', 9, '5083', '330395', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-29 04:00:05', '2020-09-29 04:00:05'),
	(293, 'TRX-71725f720885c048a', 17, '5083', '330395', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-29 04:00:05', '2020-09-29 04:00:05'),
	(294, 'TRX-42825f720885c38ce', 16, '5083', '325312', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-29 04:00:05', '2020-09-29 04:00:05'),
	(295, 'TRX-95615f735a0770ee4', 11, '5083', '340561', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-30 04:00:07', '2020-09-30 04:00:07'),
	(296, 'TRX-83365f735a077555a', 9, '5083', '335478', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-30 04:00:07', '2020-09-30 04:00:07'),
	(297, 'TRX-69565f735a0779018', 17, '5083', '335478', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-30 04:00:07', '2020-09-30 04:00:07'),
	(298, 'TRX-31005f735a077efba', 16, '5083', '330395', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-09-30 04:00:07', '2020-09-30 04:00:07'),
	(299, 'TRX-60175f74b9946f4f2', 11, '5083', '345644', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-01 05:00:04', '2020-10-01 05:00:04'),
	(300, 'TRX-61505f74b994745fe', 9, '5083', '340561', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-01 05:00:04', '2020-10-01 05:00:04'),
	(301, 'TRX-55975f74b994787e3', 17, '5083', '340561', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-01 05:00:04', '2020-10-01 05:00:04'),
	(302, 'TRX-23035f74b9947e799', 16, '5083', '335478', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-01 05:00:04', '2020-10-01 05:00:04'),
	(303, 'TRX-88315f760b1ca12b6', 11, '5083', '350727', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-02 05:00:12', '2020-10-02 05:00:12'),
	(304, 'TRX-35385f760b1ca4742', 9, '5083', '345644', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-02 05:00:12', '2020-10-02 05:00:12'),
	(305, 'TRX-44385f760b1ca751b', 17, '5083', '345644', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-02 05:00:12', '2020-10-02 05:00:12'),
	(306, 'TRX-93205f760b1cab083', 16, '5083', '340561', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-02 05:00:12', '2020-10-02 05:00:12'),
	(307, 'TRX-54155f79e375a5a8e', 11, '5083', '355810', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-05 03:00:05', '2020-10-05 03:00:05'),
	(308, 'TRX-96505f79e375aa244', 9, '5083', '350727', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-05 03:00:05', '2020-10-05 03:00:05'),
	(309, 'TRX-42255f79e375acdca', 17, '5083', '350727', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-05 03:00:05', '2020-10-05 03:00:05'),
	(310, 'TRX-85935f79e375af0c2', 16, '5083', '345644', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-05 03:00:05', '2020-10-05 03:00:05'),
	(311, 'TRX-33335f7b34f6bb436', 11, '5083', '360893', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-06 03:00:06', '2020-10-06 03:00:06'),
	(312, 'TRX-52955f7b34f6cdb21', 9, '5083', '355810', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-06 03:00:06', '2020-10-06 03:00:06'),
	(313, 'TRX-94295f7b34f6d2b74', 17, '5083', '355810', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-06 03:00:06', '2020-10-06 03:00:06'),
	(314, 'TRX-51065f7b34f6d7782', 16, '5083', '350727', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-06 03:00:06', '2020-10-06 03:00:06'),
	(318, NULL, 9, '-355810', '0', 'Withdraw Via 銀行振り込み', '0', 0, '2020-10-06 07:32:22', '2020-10-06 07:32:22'),
	(319, 'TRX-33285f7bf9d776b19', 9, '5083', '5083', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-06 17:00:07', '2020-10-06 17:00:07'),
	(320, 'TRX-80075f7c8679b6dc0', 11, '5083', '365976', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-07 03:00:09', '2020-10-07 03:00:09'),
	(321, 'TRX-67435f7c8679bd786', 17, '5083', '360893', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-07 03:00:09', '2020-10-07 03:00:09'),
	(322, 'TRX-66525f7c8679c3011', 16, '5083', '355810', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-07 03:00:09', '2020-10-07 03:00:09'),
	(323, 'TRX-14245f7d59685cc9e', 9, '5083', '10166', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-07 18:00:08', '2020-10-07 18:00:08'),
	(324, 'TRX-59295f7dd7fa4ef66', 11, '5083', '371059', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-08 03:00:10', '2020-10-08 03:00:10'),
	(325, 'TRX-48595f7dd7fa549e6', 17, '5083', '365976', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-08 03:00:10', '2020-10-08 03:00:10'),
	(326, 'TRX-58595f7dd7fa591fd', 16, '5083', '360893', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-08 03:00:10', '2020-10-08 03:00:10'),
	(328, 'TRX-73645f7eab10dae8b', 9, '5083', '15249', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-08 18:00:48', '2020-10-08 18:00:48'),
	(329, 'TRX-66285f7f378820ac5', 11, '5083', '376142', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-09 04:00:08', '2020-10-09 04:00:08'),
	(330, 'TRX-53185f7f378825dfd', 17, '5083', '371059', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-09 04:00:08', '2020-10-09 04:00:08'),
	(331, 'TRX-26515f7f378830bfe', 16, '5083', '365976', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-09 04:00:08', '2020-10-09 04:00:08'),
	(332, 'TRX-73205f800a76145ce', 9, '5083', '20332', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-09 19:00:06', '2020-10-09 19:00:06'),
	(333, 'TRX-57425f831df921517', 11, '5083', '381225', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-12 03:00:09', '2020-10-12 03:00:09'),
	(334, 'TRX-88195f831df92a278', 9, '5083', '25415', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-12 03:00:09', '2020-10-12 03:00:09'),
	(335, 'TRX-36785f831df92e42a', 17, '5083', '376142', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-12 03:00:09', '2020-10-12 03:00:09'),
	(336, 'TRX-68095f831df9316ed', 16, '5083', '371059', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-12 03:00:09', '2020-10-12 03:00:09'),
	(337, 'TRX-16175f847d868725c', 11, '5083', '386308', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-13 04:00:06', '2020-10-13 04:00:06'),
	(338, 'TRX-64525f847d868b4ef', 9, '5083', '30498', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-13 04:00:06', '2020-10-13 04:00:06'),
	(339, 'TRX-78455f847d868d9b6', 17, '5083', '381225', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-13 04:00:06', '2020-10-13 04:00:06'),
	(340, 'TRX-68245f847d868fdb4', 16, '5083', '376142', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-13 04:00:06', '2020-10-13 04:00:06'),
	(341, 'TRX-83965f85dd156c861', 11, '5083', '391391', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-14 05:00:05', '2020-10-14 05:00:05'),
	(342, 'TRX-52425f85dd1572a6f', 9, '5083', '35581', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-14 05:00:05', '2020-10-14 05:00:05'),
	(343, 'TRX-54915f85dd1577e11', 17, '5083', '386308', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-14 05:00:05', '2020-10-14 05:00:05'),
	(344, 'TRX-53555f85dd157d41e', 16, '5083', '381225', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-14 05:00:05', '2020-10-14 05:00:05'),
	(345, 'TRX-39565f872e95819c2', 11, '5083', '396474', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-15 05:00:05', '2020-10-15 05:00:05'),
	(346, 'TRX-85375f872e95877fb', 9, '5083', '40664', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-15 05:00:05', '2020-10-15 05:00:05'),
	(347, 'TRX-51625f872e958ad88', 17, '5083', '391391', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-15 05:00:05', '2020-10-15 05:00:05'),
	(348, 'TRX-99665f872e958ea67', 16, '5083', '386308', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-15 05:00:05', '2020-10-15 05:00:05'),
	(349, 'TRX-25385f888e255c93a', 11, '5083', '401557', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-16 06:00:05', '2020-10-16 06:00:05'),
	(350, 'TRX-73515f888e2560081', 9, '5083', '45747', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-16 06:00:05', '2020-10-16 06:00:05'),
	(351, 'TRX-66885f888e2563cf0', 17, '5083', '396474', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-16 06:00:05', '2020-10-16 06:00:05'),
	(352, 'TRX-43725f888e25672ec', 16, '5083', '391391', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-16 06:00:05', '2020-10-16 06:00:05'),
	(353, 'TRX-59955f8c58749d144', 11, '5083', '406640', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-19 03:00:04', '2020-10-19 03:00:04'),
	(354, 'TRX-10175f8c5874a0fc7', 9, '5083', '50830', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-19 03:00:04', '2020-10-19 03:00:04'),
	(355, 'TRX-31445f8c5874a39d2', 17, '5083', '401557', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-19 03:00:04', '2020-10-19 03:00:04'),
	(356, 'TRX-17665f8c5874a644a', 16, '5083', '396474', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-19 03:00:04', '2020-10-19 03:00:04'),
	(357, 'TRX-53685f8da9f457106', 11, '5083', '411723', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-20 03:00:04', '2020-10-20 03:00:04'),
	(358, 'TRX-60605f8da9f45b99b', 9, '5083', '55913', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-20 03:00:04', '2020-10-20 03:00:04'),
	(359, 'TRX-54865f8da9f45ec59', 17, '5083', '406640', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-20 03:00:04', '2020-10-20 03:00:04'),
	(360, 'TRX-60835f8da9f463729', 16, '5083', '401557', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-20 03:00:04', '2020-10-20 03:00:04'),
	(361, 'TRX-65755f8efb7460533', 11, '5083', '416806', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-21 03:00:04', '2020-10-21 03:00:04'),
	(362, 'TRX-70905f8efb74640b3', 9, '5083', '60996', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-21 03:00:04', '2020-10-21 03:00:04'),
	(363, 'TRX-93145f8efb7466ff0', 17, '5083', '411723', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-21 03:00:04', '2020-10-21 03:00:04'),
	(364, 'TRX-48895f8efb746a9ee', 16, '5083', '406640', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-21 03:00:04', '2020-10-21 03:00:04'),
	(365, 'TRX-63095f904cf69b5a7', 11, '5083', '421889', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-22 03:00:06', '2020-10-22 03:00:06'),
	(366, 'TRX-11735f904cf6a079a', 9, '5083', '66079', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-22 03:00:06', '2020-10-22 03:00:06'),
	(367, 'TRX-72745f904cf6a7784', 17, '5083', '416806', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-22 03:00:06', '2020-10-22 03:00:06'),
	(368, 'TRX-18685f904cf6ab2f7', 16, '5083', '411723', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-22 03:00:06', '2020-10-22 03:00:06'),
	(369, 'TRX-18335f91ac847b98b', 11, '5083', '426972', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-23 04:00:04', '2020-10-23 04:00:04'),
	(370, 'TRX-40825f91ac8480e98', 9, '5083', '71162', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-23 04:00:04', '2020-10-23 04:00:04'),
	(371, 'TRX-62015f91ac84847d4', 17, '5083', '421889', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-23 04:00:04', '2020-10-23 04:00:04'),
	(372, 'TRX-43365f91ac8487dac', 16, '5083', '416806', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-23 04:00:04', '2020-10-23 04:00:04'),
	(373, 'TRX-76485f9592f4ef942', 11, '5083', '432055', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-26 03:00:04', '2020-10-26 03:00:04'),
	(374, 'TRX-34575f9592f4f3cff', 9, '5083', '76245', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-26 03:00:04', '2020-10-26 03:00:04'),
	(375, 'TRX-71275f9592f5028d5', 17, '5083', '426972', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-26 03:00:05', '2020-10-26 03:00:05'),
	(376, 'TRX-78775f9592f5066b2', 16, '5083', '421889', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-26 03:00:05', '2020-10-26 03:00:05'),
	(377, 'TRX-19585f96e474ecbe0', 11, '5083', '437138', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-27 03:00:04', '2020-10-27 03:00:04'),
	(378, 'TRX-12075f96e474f162b', 9, '5083', '81328', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-27 03:00:04', '2020-10-27 03:00:04'),
	(379, 'TRX-96545f96e474f418d', 17, '5083', '432055', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-27 03:00:05', '2020-10-27 03:00:05'),
	(380, 'TRX-16875f96e475028ea', 16, '5083', '426972', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-27 03:00:05', '2020-10-27 03:00:05'),
	(381, 'TRX-42355f9835f65e5c5', 11, '5083', '442221', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-28 03:00:06', '2020-10-28 03:00:06'),
	(382, 'TRX-62205f9835f66377b', 9, '5083', '86411', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-28 03:00:06', '2020-10-28 03:00:06'),
	(383, 'TRX-51605f9835f669631', 17, '5083', '437138', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-28 03:00:06', '2020-10-28 03:00:06'),
	(384, 'TRX-74195f9835f66e50b', 16, '5083', '432055', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-28 03:00:06', '2020-10-28 03:00:06'),
	(385, 'TRX-81785f9987756fbb0', 11, '5083', '447304', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-29 03:00:05', '2020-10-29 03:00:05'),
	(386, 'TRX-35435f9987774bef1', 9, '5083', '91494', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-29 03:00:07', '2020-10-29 03:00:07'),
	(387, 'TRX-52755f99877750f2f', 17, '5083', '442221', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-29 03:00:07', '2020-10-29 03:00:07'),
	(388, 'TRX-80895f99877756f9e', 16, '5083', '437138', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-29 03:00:07', '2020-10-29 03:00:07'),
	(389, 'TRX-27055f9ad8f61e151', 11, '5083', '452387', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-30 03:00:06', '2020-10-30 03:00:06'),
	(390, 'TRX-90065f9ad8f624f8c', 9, '5083', '96577', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-30 03:00:06', '2020-10-30 03:00:06'),
	(391, 'TRX-49945f9ad8f628e76', 17, '5083', '447304', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-30 03:00:06', '2020-10-30 03:00:06'),
	(392, 'TRX-56505f9ad8f62fa10', 16, '5083', '442221', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-10-30 03:00:06', '2020-10-30 03:00:06'),
	(393, 'TRX-73325f9ecd74b04d6', 11, '5083', '457470', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-02 03:00:04', '2020-11-02 03:00:04'),
	(394, 'TRX-33245f9ecd74b4e01', 9, '5083', '101660', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-02 03:00:04', '2020-11-02 03:00:04'),
	(395, 'TRX-26365f9ecd74b941d', 17, '5083', '452387', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-02 03:00:04', '2020-11-02 03:00:04'),
	(396, 'TRX-76715f9ecd74bee29', 16, '5083', '447304', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-02 03:00:04', '2020-11-02 03:00:04'),
	(397, 'TRX-71205fa01ef5b177c', 11, '5083', '462553', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-03 03:00:05', '2020-11-03 03:00:05'),
	(398, 'TRX-94155fa01ef5b64e2', 9, '5083', '106743', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-03 03:00:05', '2020-11-03 03:00:05'),
	(399, 'TRX-50005fa01ef5b9466', 17, '5083', '457470', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-03 03:00:05', '2020-11-03 03:00:05'),
	(400, 'TRX-41185fa01ef5bc3b5', 16, '5083', '452387', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-03 03:00:05', '2020-11-03 03:00:05'),
	(401, 'TRX-90745fa17075c9396', 11, '5083', '467636', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-04 03:00:05', '2020-11-04 03:00:05'),
	(402, 'TRX-16245fa17075d039b', 9, '5083', '111826', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-04 03:00:05', '2020-11-04 03:00:05'),
	(403, 'TRX-70995fa17075d81d1', 17, '5083', '462553', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-04 03:00:05', '2020-11-04 03:00:05'),
	(404, 'TRX-41425fa17075de41e', 16, '5083', '457470', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-04 03:00:05', '2020-11-04 03:00:05'),
	(405, 'TRX-40475fa2c1f5be579', 11, '5083', '472719', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-05 03:00:05', '2020-11-05 03:00:05'),
	(406, 'TRX-64875fa2c1f5c4e81', 9, '5083', '116909', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-05 03:00:05', '2020-11-05 03:00:05'),
	(407, 'TRX-40305fa2c1f5c9666', 17, '5083', '467636', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-05 03:00:05', '2020-11-05 03:00:05'),
	(408, 'TRX-63615fa2c1f5cdb0f', 16, '5083', '462553', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-05 03:00:05', '2020-11-05 03:00:05'),
	(409, 'TRX-57805fa421859bcbf', 11, '5083', '477802', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-06 04:00:05', '2020-11-06 04:00:05'),
	(410, 'TRX-86815fa42185a0832', 9, '5083', '121992', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-06 04:00:05', '2020-11-06 04:00:05'),
	(411, 'TRX-75905fa42185a4630', 17, '5083', '472719', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-06 04:00:05', '2020-11-06 04:00:05'),
	(412, 'TRX-48335fa42185a843c', 16, '5083', '467636', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-06 04:00:05', '2020-11-06 04:00:05'),
	(413, 'TRX-44605fa807f7cc080', 11, '5083', '482885', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-09 03:00:07', '2020-11-09 03:00:07'),
	(414, 'TRX-94825fa807f7d933d', 9, '5083', '127075', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-09 03:00:07', '2020-11-09 03:00:07'),
	(415, 'TRX-40375fa807f7dc5ee', 17, '5083', '477802', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-09 03:00:07', '2020-11-09 03:00:07'),
	(416, 'TRX-65055fa807f7df5aa', 16, '5083', '472719', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-09 03:00:07', '2020-11-09 03:00:07'),
	(417, 'TRX-34245fa96784e92a5', 11, '5083', '487968', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-10 04:00:04', '2020-11-10 04:00:04'),
	(418, 'TRX-88945fa96784ebe57', 9, '5083', '132158', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-10 04:00:04', '2020-11-10 04:00:04'),
	(419, 'TRX-49405fa96784eecbe', 17, '5083', '482885', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-10 04:00:04', '2020-11-10 04:00:04'),
	(420, 'TRX-71705fa96784f2669', 16, '5083', '477802', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-10 04:00:04', '2020-11-10 04:00:04'),
	(421, 'TRX-74725faab90794923', 11, '5083', '493051', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-11 04:00:07', '2020-11-11 04:00:07'),
	(422, 'TRX-54615faab9079afd7', 9, '5083', '137241', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-11 04:00:07', '2020-11-11 04:00:07'),
	(423, 'TRX-90815faab9079f2bd', 17, '5083', '487968', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-11 04:00:07', '2020-11-11 04:00:07'),
	(424, 'TRX-80145faab907a366b', 16, '5083', '482885', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-11 04:00:07', '2020-11-11 04:00:07'),
	(425, 'TRX-67985fac0a897e715', 11, '5083', '498134', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-12 04:00:09', '2020-11-12 04:00:09'),
	(426, 'TRX-72225fac0a8982253', 9, '5083', '142324', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-12 04:00:09', '2020-11-12 04:00:09'),
	(427, 'TRX-51795fac0a898485c', 17, '5083', '493051', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-12 04:00:09', '2020-11-12 04:00:09'),
	(428, 'TRX-73045fac0a8986f1e', 16, '5083', '487968', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-12 04:00:09', '2020-11-12 04:00:09'),
	(429, 'TRX-73135fad6a144ea24', 11, '5083', '503217', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-13 05:00:04', '2020-11-13 05:00:04'),
	(430, 'TRX-36455fad6a145441b', 9, '5083', '147407', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-13 05:00:04', '2020-11-13 05:00:04'),
	(431, 'TRX-43725fad6a1458f84', 17, '5083', '498134', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-13 05:00:04', '2020-11-13 05:00:04'),
	(432, 'TRX-91705fad6a145e4a1', 16, '5083', '493051', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-13 05:00:04', '2020-11-13 05:00:04'),
	(433, 'TRX-91305fb142740925e', 11, '5083', '508300', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-16 03:00:04', '2020-11-16 03:00:04'),
	(434, 'TRX-24305fb14274132ff', 9, '5083', '152490', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-16 03:00:04', '2020-11-16 03:00:04'),
	(435, 'TRX-92115fb1427418409', 17, '5083', '503217', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-16 03:00:04', '2020-11-16 03:00:04'),
	(436, 'TRX-62785fb142741ce92', 16, '5083', '498134', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-16 03:00:04', '2020-11-16 03:00:04'),
	(437, 'TRX-44235fb293f621615', 11, '5083', '513383', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-17 03:00:06', '2020-11-17 03:00:06'),
	(438, 'TRX-53765fb293f62a75e', 9, '5083', '157573', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-17 03:00:06', '2020-11-17 03:00:06'),
	(439, 'TRX-39605fb293f630d4b', 17, '5083', '508300', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-17 03:00:06', '2020-11-17 03:00:06'),
	(440, 'TRX-38915fb293f63a64d', 16, '5083', '503217', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-17 03:00:06', '2020-11-17 03:00:06'),
	(441, 'TRX-30155fb3f38786929', 11, '5083', '518466', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-18 04:00:07', '2020-11-18 04:00:07'),
	(442, 'TRX-66785fb3f3878ad70', 9, '5083', '162656', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-18 04:00:07', '2020-11-18 04:00:07'),
	(443, 'TRX-80355fb3f3878d475', 17, '5083', '513383', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-18 04:00:07', '2020-11-18 04:00:07'),
	(444, 'TRX-96575fb3f3878f7cd', 16, '5083', '508300', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-18 04:00:07', '2020-11-18 04:00:07'),
	(445, 'TRX-77765fb54507bd5ea', 11, '5083', '523549', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-19 04:00:07', '2020-11-19 04:00:07'),
	(446, 'TRX-74725fb54507c30ff', 9, '5083', '167739', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-19 04:00:07', '2020-11-19 04:00:07'),
	(447, 'TRX-34815fb54507c7422', 17, '5083', '518466', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-19 04:00:07', '2020-11-19 04:00:07'),
	(448, 'TRX-83575fb54507cac4a', 16, '5083', '513383', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-19 04:00:07', '2020-11-19 04:00:07'),
	(449, 'TRX-90725fb696894ec75', 11, '5083', '528632', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-20 04:00:09', '2020-11-20 04:00:09'),
	(450, 'TRX-86875fb6968955d94', 9, '5083', '172822', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-20 04:00:09', '2020-11-20 04:00:09'),
	(451, 'TRX-58235fb696895aaeb', 17, '5083', '523549', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-20 04:00:09', '2020-11-20 04:00:09'),
	(452, 'TRX-46945fb696895fb68', 16, '5083', '518466', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-20 04:00:09', '2020-11-20 04:00:09'),
	(453, 'TRX-32635fba7cf5d74ca', 11, '5083', '533715', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-23 03:00:05', '2020-11-23 03:00:05'),
	(454, 'TRX-78565fba7cf5db2e3', 9, '5083', '177905', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-23 03:00:05', '2020-11-23 03:00:05'),
	(455, 'TRX-80865fba7cf5dddc5', 17, '5083', '528632', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-23 03:00:05', '2020-11-23 03:00:05'),
	(456, 'TRX-41415fba7cf5e0562', 16, '5083', '523549', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-23 03:00:05', '2020-11-23 03:00:05'),
	(457, 'TRX-42645fbbce7661526', 11, '5083', '538798', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-24 03:00:06', '2020-11-24 03:00:06'),
	(458, 'TRX-97705fbbce7668ff9', 9, '5083', '182988', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-24 03:00:06', '2020-11-24 03:00:06'),
	(459, 'TRX-78065fbbce7673689', 17, '5083', '533715', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-24 03:00:06', '2020-11-24 03:00:06'),
	(460, 'TRX-36405fbbce7677a75', 16, '5083', '528632', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-24 03:00:06', '2020-11-24 03:00:06'),
	(461, 'TRX-53255fbd2e03e5ace', 11, '5083', '543881', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-25 04:00:03', '2020-11-25 04:00:03'),
	(462, 'TRX-81365fbd2e03e9db2', 9, '5083', '188071', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-25 04:00:03', '2020-11-25 04:00:03'),
	(463, 'TRX-27315fbd2e03ed1ea', 17, '5083', '538798', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-25 04:00:03', '2020-11-25 04:00:03'),
	(464, 'TRX-50425fbd2e03f01e7', 16, '5083', '533715', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-25 04:00:03', '2020-11-25 04:00:03'),
	(465, 'TRX-2455', 4, '-299000', '351000', 'Invested On Present', '0', 0, '2020-11-24 20:08:50', '2020-11-24 20:08:50'),
	(466, 'TRX-20455fbe7f88bd31c', 11, '5083', '548964', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-26 04:00:08', '2020-11-26 04:00:08'),
	(467, 'TRX-29205fbe7f88c2b73', 9, '5083', '193154', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-26 04:00:08', '2020-11-26 04:00:08'),
	(468, 'TRX-48645fbe7f88c56ce', 17, '5083', '543881', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-26 04:00:08', '2020-11-26 04:00:08'),
	(469, 'TRX-44085fbe7f88cc652', 16, '5083', '538798', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-26 04:00:08', '2020-11-26 04:00:08'),
	(470, 'TRX-67525fbfdf14ef69b', 11, '5083', '554047', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-27 05:00:04', '2020-11-27 05:00:04'),
	(471, 'TRX-69985fbfdf14f4076', 9, '5083', '198237', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-27 05:00:05', '2020-11-27 05:00:05'),
	(472, 'TRX-72595fbfdf1502c5b', 17, '5083', '548964', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-27 05:00:05', '2020-11-27 05:00:05'),
	(473, 'TRX-90955fbfdf1505514', 16, '5083', '543881', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-27 05:00:05', '2020-11-27 05:00:05'),
	(474, 'TRX-98585fc3b77654065', 11, '5083', '559130', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-30 03:00:06', '2020-11-30 03:00:06'),
	(475, 'TRX-78245fc3b776634f4', 9, '5083', '203320', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-30 03:00:06', '2020-11-30 03:00:06'),
	(476, 'TRX-30825fc3b77666fc8', 17, '5083', '554047', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-30 03:00:06', '2020-11-30 03:00:06'),
	(477, 'TRX-97175fc3b77669d69', 16, '5083', '548964', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-11-30 03:00:06', '2020-11-30 03:00:06'),
	(478, 'TRX-77685fc53326070f0', 11, '5083', '564213', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-12-01 03:00:06', '2020-12-01 03:00:06'),
	(479, 'TRX-87035fc5332608d42', 9, '5083', '208403', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-12-01 03:00:06', '2020-12-01 03:00:06'),
	(480, 'TRX-81775fc533260c18a', 17, '5083', '559130', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-12-01 03:00:06', '2020-12-01 03:00:06'),
	(481, 'TRX-87155fc533260dc23', 16, '5083', '554047', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-12-01 03:00:06', '2020-12-01 03:00:06'),
	(482, 'TRX-54485fc692b185b0b', 11, '5083', '569296', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-12-02 04:00:01', '2020-12-02 04:00:01'),
	(483, 'TRX-31495fc692b1876cd', 9, '5083', '213486', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-12-02 04:00:01', '2020-12-02 04:00:01'),
	(484, 'TRX-83475fc692b189f62', 17, '5083', '564213', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-12-02 04:00:01', '2020-12-02 04:00:01'),
	(485, 'TRX-17505fc692b18ba41', 16, '5083', '559130', 'Interest Return 5083 JPY Added on Your Interest Wallet Wallet', '0', 0, '2020-12-02 04:00:01', '2020-12-02 04:00:01'),
	(486, 'TRX-2507', 1, '-299000', '0', 'Invested On Present', '0', 0, '2021-03-05 03:30:37', '2021-03-05 03:30:37'),
	(487, 'TRX-8734', 1, '-299000', '-299000', 'Invested On Present', '0', 0, '2021-03-12 21:22:09', '2021-03-12 21:22:09'),
	(488, 'TRX-4799', 1, '-299000', '-598000', 'Invested On Present', '0', 0, '2021-03-12 21:37:23', '2021-03-12 21:37:23'),
	(489, 'TRX-7404', 1, '-299000', '-897000', 'Invested On Present', '0', 0, '2021-03-12 21:38:13', '2021-03-12 21:38:13'),
	(490, 'TRX-6134', 1, '-299000', '-1196000', 'Invested On Present', '0', 0, '2021-03-12 21:39:38', '2021-03-12 21:39:38'),
	(491, 'TRX-8751', 1, '-299000', '-1495000', 'Invested On Present', '0', 0, '2021-03-12 21:47:22', '2021-03-12 21:47:22'),
	(492, 'TRX-6517', 1, '-299000', '-1794000', 'Invested On Present', '0', 0, '2021-03-12 21:48:13', '2021-03-12 21:48:13'),
	(493, 'TRX-8874', 1, '-299000', '-2093000', 'Invested On Present', '0', 0, '2021-03-12 21:48:54', '2021-03-12 21:48:54'),
	(494, 'TRX-5647', 1, '-299000', '411111111', 'Invested On Present', '0', 0, '2021-03-12 22:11:17', '2021-03-12 22:11:17'),
	(495, 'TRX-6443', 1, '-299000', '410812111', 'Invested On Present', '0', 0, '2021-03-12 22:13:10', '2021-03-12 22:13:10'),
	(496, 'TRX-5035', 1, '-299000', '410513111', 'Invested On Present', '0', 0, '2021-03-12 22:13:13', '2021-03-12 22:13:13'),
	(497, 'TRX-3002', 1, '-299000', '410214111', 'Invested On Present', '0', 0, '2021-03-12 22:13:55', '2021-03-12 22:13:55'),
	(498, 'TRX-8843', 1, '-299000', '0', 'Invested On Present', '0', 0, '2021-03-12 22:17:57', '2021-03-12 22:17:57'),
	(499, 'TRX-2820', 1, '-299000', '409915111', 'Invested On Present', '0', 0, '2021-03-12 23:03:49', '2021-03-12 23:03:49'),
	(500, 'TRX-4204', 1, '-299000', '409616111', 'Invested On Present', '0', 0, '2021-03-13 05:22:55', '2021-03-13 05:22:55'),
	(501, 'TRX-6834', 1, '-299000', '409317111', 'Invested On GIFT', '0', 0, '2021-03-15 04:22:16', '2021-03-15 04:22:16'),
	(502, 'TRX-3629', 1, '-99000', '409018111', 'Invested On Charity', '0', 0, '2021-03-16 03:47:42', '2021-03-16 03:47:42'),
	(503, 'TRX-5972', 1, '-99000', '408919111', 'Invested On Charity', '0', 0, '2021-03-16 03:48:20', '2021-03-16 03:48:20'),
	(504, 'TRX-3247', 1, '-99000', '408820111', 'Invested On Charity', '0', 0, '2021-03-16 03:49:37', '2021-03-16 03:49:37'),
	(505, 'SL9p91CyXWwIDRFN', 2, '100', '100', 'Deposit Request Approved & Balance Added', '0', 0, '2021-03-16 04:39:36', '2021-03-16 04:39:36'),
	(506, NULL, 2, '-100', '0', 'Balance Subtract Via Admin', '0', 0, '2021-03-16 05:02:59', '2021-03-16 05:02:59'),
	(507, NULL, 1, '100', '-298900', 'Balance Added Via Admin', '0', 0, '2021-03-16 05:06:11', '2021-03-16 05:06:11'),
	(508, NULL, 2, '100', '100', 'Balance Added Via Admin', '0', 0, '2021-03-16 05:19:36', '2021-03-16 05:19:36'),
	(509, 'wJMI6KWr6tc17NEF', 1, '100', '100', 'Deposit viaCredit Card', '0', 0, '2021-03-18 19:09:33', '2021-03-18 19:09:33'),
	(510, 'TS1wPgnOrVQ6v7wx', 1, '300', '400', 'Deposit viaCredit Card', '0', 0, '2021-03-18 19:11:04', '2021-03-18 19:11:04'),
	(511, 'Dzh5CGD5Lak5NdUf', 1, '300', '700', 'Deposit viaCredit Card', '0', 0, '2021-03-18 20:07:51', '2021-03-18 20:07:51'),
	(512, 'TRX-5798', 1, '-100', '589', 'Balance Transfer To asim rafiq', '11', 0, '2021-03-25 17:42:55', '2021-03-25 17:42:55'),
	(513, 'TRX-5991', 1, '-100', '589', 'Balance Transfer To asim rafiq', '11', 0, '2021-03-25 17:43:02', '2021-03-25 17:43:02');
/*!40000 ALTER TABLE `transections` ENABLE KEYS */;

-- Dumping structure for table lacura.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interest_balance` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `emailv` int(11) NOT NULL,
  `smsv` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `vsent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vercode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tauth` int(11) NOT NULL DEFAULT '0',
  `tfver` int(11) NOT NULL DEFAULT '1',
  `secretcode` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_time` datetime DEFAULT NULL,
  `nickname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'jp',
  `personal_document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfie_document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_used` bigint(20) unsigned DEFAULT '0',
  `dob` datetime DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE,
  UNIQUE KEY `users_username_unique` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `ref_id`, `name`, `email`, `mobile`, `country`, `username`, `password`, `balance`, `interest_balance`, `emailv`, `smsv`, `status`, `vsent`, `vercode`, `remember_token`, `provider`, `provider_id`, `tauth`, `tfver`, `secretcode`, `created_at`, `updated_at`, `image`, `login_time`, `nickname`, `lang`, `personal_document`, `selfie_document`, `credit_used`, `dob`, `address`) VALUES
	(1, 0, 'Asim', 'asimrafique11@yahoo.com', '030746409751', 'Pakistan', 'asimrafique11@yahoo.com', '$2y$10$fIqiVxBxLZy8e9wKhye/1exR9yloGAjlLodO3Eky.9n1GBnTqKWQi', '589', '0', 1, 1, 1, NULL, NULL, 'ATC0BOnXO1CEbOL1qFXXHTfZmwJj0IAuKmk7GtOf5kHJyhrOHek45SKJ9ak4', NULL, NULL, 0, 1, NULL, '2021-03-22 21:33:09', '2021-03-27 03:49:08', '605a0bb26fd671616513970.jpg', '2021-03-27 03:49:08', 'asim rafiq', 'ja', NULL, NULL, 0, '1994-12-25 00:00:00', NULL),
	(2, 1, 'asim rafiq', 'asimrafique11@yahoo.com11', '03055199051', 'Pakistan', '807456485', '$2y$10$R7KCQyntryCdLgWhl9uw5.b5zuduiqcgJoD7ROEnkyQAU0xBBHLaq', '200', '0', 1, 1, 1, '1615839160', '249216', NULL, NULL, NULL, 0, 1, NULL, '2021-03-16 04:32:14', '2021-03-25 17:43:07', '1615839539.png', '2021-03-22 21:34:04', 'asim rafiq', 'ja', NULL, NULL, 0, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table lacura.user_logins
CREATE TABLE IF NOT EXISTS `user_logins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.user_logins: ~24 rows (approximately)
/*!40000 ALTER TABLE `user_logins` DISABLE KEYS */;
REPLACE INTO `user_logins` (`id`, `user_id`, `user_ip`, `location`, `details`, `created_at`, `updated_at`, `long`, `lat`) VALUES
	(1, 1, '127.0.0.1', '', '', '2021-02-27 22:26:40', '2021-02-27 22:26:40', NULL, NULL),
	(2, 1, '127.0.0.1', '', '', '2021-02-28 03:53:34', '2021-02-28 03:53:34', NULL, NULL),
	(3, 1, '127.0.0.1', '', '', '2021-02-28 04:02:45', '2021-02-28 04:02:45', NULL, NULL),
	(4, 1, '127.0.0.1', '', '', '2021-02-28 05:50:52', '2021-02-28 05:50:52', NULL, NULL),
	(5, 1, '127.0.0.1', '', '', '2021-02-28 05:53:40', '2021-02-28 05:53:40', NULL, NULL),
	(6, 1, '127.0.0.1', '', '', '2021-02-28 05:56:58', '2021-02-28 05:56:58', NULL, NULL),
	(7, 1, '127.0.0.1', '', '', '2021-02-28 05:59:39', '2021-02-28 05:59:39', NULL, NULL),
	(8, 1, '127.0.0.1', '', '', '2021-02-28 06:10:04', '2021-02-28 06:10:04', NULL, NULL),
	(9, 1, '127.0.0.1', '', '', '2021-02-28 06:14:43', '2021-02-28 06:14:43', NULL, NULL),
	(10, 1, '127.0.0.1', '', '', '2021-02-28 06:18:34', '2021-02-28 06:18:34', NULL, NULL),
	(11, 1, '127.0.0.1', '', '', '2021-03-02 20:30:15', '2021-03-02 20:30:15', NULL, NULL),
	(12, 1, '127.0.0.1', '', '', '2021-03-03 04:13:16', '2021-03-03 04:13:16', NULL, NULL),
	(13, 1, '127.0.0.1', '', '', '2021-03-03 20:40:46', '2021-03-03 20:40:46', NULL, NULL),
	(14, 1, '127.0.0.1', '', '', '2021-03-05 03:19:24', '2021-03-05 03:19:24', NULL, NULL),
	(15, 1, '127.0.0.1', '', '', '2021-03-11 19:40:49', '2021-03-11 19:40:49', NULL, NULL),
	(16, 1, '127.0.0.1', '', '', '2021-03-11 22:50:49', '2021-03-11 22:50:49', NULL, NULL),
	(17, 1, '127.0.0.1', '', '', '2021-03-12 03:38:32', '2021-03-12 03:38:32', NULL, NULL),
	(18, 1, '127.0.0.1', '', '', '2021-03-12 06:35:39', '2021-03-12 06:35:39', NULL, NULL),
	(19, 1, '127.0.0.1', '', '', '2021-03-12 21:06:54', '2021-03-12 21:06:54', NULL, NULL),
	(20, 1, '127.0.0.1', '', '', '2021-03-13 05:19:42', '2021-03-13 05:19:42', NULL, NULL),
	(21, 1, '127.0.0.1', '', '', '2021-03-14 21:43:02', '2021-03-14 21:43:02', NULL, NULL),
	(22, 1, '127.0.0.1', '', '', '2021-03-14 23:31:05', '2021-03-14 23:31:05', NULL, NULL),
	(23, 1, '127.0.0.1', '', '', '2021-03-15 03:54:59', '2021-03-15 03:54:59', NULL, NULL),
	(24, 1, '127.0.0.1', '', '', '2021-03-15 23:12:50', '2021-03-15 23:12:50', NULL, NULL),
	(25, 1, '127.0.0.1', '', '', '2021-03-16 03:46:55', '2021-03-16 03:46:55', NULL, NULL),
	(26, 1, '127.0.0.1', '', '', '2021-03-16 18:59:27', '2021-03-16 18:59:27', NULL, NULL),
	(27, 1, '127.0.0.1', '', '', '2021-03-18 03:24:10', '2021-03-18 03:24:10', NULL, NULL),
	(28, 1, '127.0.0.1', '', '', '2021-03-18 15:53:44', '2021-03-18 15:53:44', NULL, NULL),
	(29, 1, '127.0.0.1', '', '', '2021-03-18 17:59:49', '2021-03-18 17:59:49', NULL, NULL),
	(30, 1, '127.0.0.1', '', '', '2021-03-18 21:51:39', '2021-03-18 21:51:39', NULL, NULL),
	(31, 1, '127.0.0.1', '', '', '2021-03-18 22:00:13', '2021-03-18 22:00:13', NULL, NULL),
	(32, 1, '127.0.0.1', '', '', '2021-03-19 04:39:40', '2021-03-19 04:39:40', NULL, NULL),
	(33, 1, '127.0.0.1', '', '', '2021-03-19 18:46:33', '2021-03-19 18:46:33', NULL, NULL),
	(34, 1, '127.0.0.1', '', '', '2021-03-20 02:35:04', '2021-03-20 02:35:04', NULL, NULL),
	(35, 1, '127.0.0.1', '', '', '2021-03-22 17:54:12', '2021-03-22 17:54:12', NULL, NULL),
	(36, 1, '127.0.0.1', '', '', '2021-03-23 01:14:42', '2021-03-23 01:14:42', NULL, NULL),
	(37, 1, '127.0.0.1', '', '', '2021-03-23 21:07:49', '2021-03-23 21:07:49', NULL, NULL),
	(38, 1, '127.0.0.1', '', '', '2021-03-24 22:49:28', '2021-03-24 22:49:28', NULL, NULL),
	(39, 1, '127.0.0.1', '', '', '2021-03-25 04:06:27', '2021-03-25 04:06:27', NULL, NULL),
	(40, 1, '127.0.0.1', '', '', '2021-03-25 17:32:41', '2021-03-25 17:32:41', NULL, NULL),
	(41, 1, '127.0.0.1', '', '', '2021-03-27 03:49:08', '2021-03-27 03:49:08', NULL, NULL);
/*!40000 ALTER TABLE `user_logins` ENABLE KEYS */;

-- Dumping structure for table lacura.withdraws
CREATE TABLE IF NOT EXISTS `withdraws` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `withdraw_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method_id` int(11) NOT NULL,
  `method_cur_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processing_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.withdraws: ~2 rows (approximately)
/*!40000 ALTER TABLE `withdraws` DISABLE KEYS */;
REPLACE INTO `withdraws` (`id`, `withdraw_id`, `user_id`, `amount`, `charge`, `method_id`, `method_cur_amount`, `processing_time`, `detail`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'WD-378567581', 9, '355810', '39139.1', 1, '316670.9', '3-10', 'ジャパンネット銀行 店番号　\r\n003 口口座番号　\r\n8357158 \r\nMARCOS SEIDI TOGASHI', 1, '2020-10-06 07:32:22', '2020-10-09 13:02:31'),
	(2, 'WD-280731806', 5, '100000', '11000', 1, '89000', '3-10', 'TESTE WILL', 1, '2020-10-08 02:08:07', '2021-03-16 05:21:25');
/*!40000 ALTER TABLE `withdraws` ENABLE KEYS */;

-- Dumping structure for table lacura.withdraw_methods
CREATE TABLE IF NOT EXISTS `withdraw_methods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_amo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_amo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chargefx` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chargepc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processing_day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table lacura.withdraw_methods: ~0 rows (approximately)
/*!40000 ALTER TABLE `withdraw_methods` DISABLE KEYS */;
REPLACE INTO `withdraw_methods` (`id`, `name`, `image`, `min_amo`, `max_amo`, `chargefx`, `chargepc`, `rate`, `processing_day`, `currency`, `status`, `created_at`, `updated_at`) VALUES
	(1, '銀行振り込み', '1566864185.jpg', '99000', '299000', '0', '11', '111', '3-10', 'JPY', 1, '2019-08-26 15:03:05', '2020-10-06 16:34:31');
/*!40000 ALTER TABLE `withdraw_methods` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
>>>>>>> e2f66675a01291b417783975ca5880fc271b0f9b
=======
>>>>>>> 1e90afbd0fb92f8dd6490fd6dae476ff16e32dd8
