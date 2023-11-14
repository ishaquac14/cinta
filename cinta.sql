-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table cinta.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cinta.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table cinta.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cinta.migrations: ~6 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_11_07_161431_create_physicals_table', 1),
	(6, '2023_11_07_161431_create_sanswitch_table', 1);

-- Dumping structure for table cinta.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cinta.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table cinta.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cinta.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table cinta.physicals
CREATE TABLE IF NOT EXISTS `physicals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `host` varchar(255) NOT NULL,
  `storage` varchar(255) NOT NULL,
  `hdd1` varchar(255) NOT NULL,
  `hdd2` varchar(255) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cinta.physicals: ~9 rows (approximately)
INSERT INTO `physicals` (`id`, `host`, `storage`, `hdd1`, `hdd2`, `note`, `created_at`, `updated_at`) VALUES
	(1, 'H', 'S', 'HDD1', 'HDD2OK', 'hahaha', '2023-11-10 15:46:42', '2023-11-10 15:46:42'),
	(2, 'HNG', 'SNG', 'HDD1', 'HDD2OK', 'hahaha', '2023-11-10 15:51:13', '2023-11-10 15:51:13'),
	(3, 'HNG', 'SNG', 'HDD1', 'HDD2OK', '-', '2023-11-10 15:51:59', '2023-11-10 15:51:59'),
	(4, 'H', 'S', 'HDD1', 'HDD2OK', '-', '2023-11-13 05:44:40', '2023-11-13 05:44:40'),
	(5, 'HNG', 'SNG', 'HDD1', 'HDD2OK', '-', '2023-11-13 05:46:18', '2023-11-13 05:46:18'),
	(6, 'HNG', 'SNG', 'HDD1', 'HDD2OK', '-', '2023-11-13 05:48:56', '2023-11-13 05:48:56'),
	(7, 'H', 'S', 'HDD1', 'HDD2OK', '-', '2023-11-13 12:52:45', '2023-11-13 12:52:45'),
	(8, 'NG', 'NG', 'NG', 'NG', '-', '2023-11-13 12:55:37', '2023-11-13 12:55:37'),
	(9, 'OK', 'OK', 'NG', 'NG', '-', '2023-11-13 12:56:07', '2023-11-13 12:56:07'),
	(10, 'OK', 'OK', 'NG', 'NG', NULL, '2023-11-13 12:58:44', '2023-11-13 12:58:44');

-- Dumping structure for table cinta.sanswitchs
CREATE TABLE IF NOT EXISTS `sanswitchs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `asal_perusahaan` varchar(255) NOT NULL,
  `nama_pic` varchar(255) NOT NULL,
  `departemen` varchar(255) NOT NULL,
  `tujuan_lokasi` varchar(255) NOT NULL,
  `tujuan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cinta.sanswitchs: ~0 rows (approximately)

-- Dumping structure for table cinta.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cinta.users: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
