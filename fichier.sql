-- MariaDB dump 10.19  Distrib 10.6.11-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: finalProjet
-- ------------------------------------------------------
-- Server version	10.6.11-MariaDB-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `utilisateur_id` bigint(20) unsigned NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `datePublication` varchar(255) DEFAULT NULL,
  `dateLimite` varchar(255) DEFAULT NULL,
  `niveauAcademique` enum('INFOL1','INFOL2','INFOL3','ICTL1','ICTL2','ICTL3','M1','M2','ALL') NOT NULL DEFAULT 'ALL',
  `categorie` enum('Emploi de Temps','Notes','Communique','Liste de Selection','Liste Admin','Annonces','Avis de Recherche') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documents_utilisateur_id_foreign` (`utilisateur_id`),
  CONSTRAINT `documents_utilisateur_id_foreign` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` VALUES (13,3,'notes','nnote','2023-07-27 09:21:11','2023-09-14','ICTL3','Emploi de Temps','2023-07-27 08:21:11','2023-07-27 08:21:11'),(14,3,'Emploi de  temps','emploi de temps','2023-07-27 09:22:30','2023-07-11','ICTL3','Emploi de Temps','2023-07-27 08:22:30','2023-07-27 08:22:30'),(15,4,'Liste Admin','liste admin','2023-07-27 09:30:59','2023-09-16','ICTL3','Liste Admin','2023-07-27 08:30:59','2023-07-27 08:30:59'),(16,3,'Soutenance','demo de soutenance','2023-07-29 03:56:02','2023-10-13','ALL','Liste Admin','2023-07-29 02:56:02','2023-07-29 02:56:02'),(17,3,'Annnonces','frais de payement','2023-07-29 03:58:34','2023-11-22','ALL','Annonces','2023-07-29 02:58:34','2023-07-29 02:58:34'),(18,3,'Avis  de recherche','un telephone perdu A56','2023-07-29 04:01:04','2023-08-24','ALL','Annonces','2023-07-29 03:01:04','2023-07-29 03:01:04'),(19,4,'Commique','Match de Foot','2023-07-29 04:06:43','2023-09-14','ALL','Communique','2023-07-29 03:06:43','2023-07-29 03:06:43'),(20,3,'Liste de selection','INFO FONDAMENTALE','2023-07-29 04:27:21','2023-07-14','ALL','Liste de Selection','2023-07-29 03:27:21','2023-07-29 03:27:21'),(21,3,'Annnonces','annonce','2023-07-29 04:29:23','2023-07-19','INFOL1','Emploi de Temps','2023-07-29 03:29:23','2023-07-29 03:29:23'),(22,3,'Annnonces','cvbn','2023-07-29 04:32:09','2023-07-04','ALL','Annonces','2023-07-29 03:32:09','2023-07-29 03:32:09'),(23,3,'Annnonces','annonces','2023-07-29 04:34:15','2023-08-12','ALL','Annonces','2023-07-29 03:34:15','2023-07-29 03:34:15'),(24,3,'Commique','Communique','2023-07-29 04:35:44','2023-08-04','ALL','Communique','2023-07-29 03:35:44','2023-07-29 03:35:44'),(25,3,'Avis de recherche','a','2023-07-29 04:36:59','2023-07-12','ALL','Avis de Recherche','2023-07-29 03:36:59','2023-07-29 03:36:59'),(26,7,'NOTES ICT 302','notes de L\'ue','2023-07-29 05:03:50','2023-09-27','ICTL3','Notes','2023-07-29 04:03:50','2023-07-29 04:03:50');
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `documents_id` bigint(20) unsigned NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,7,'Notes de ICT300-image-1690266199306.jpg','2023-07-25 05:23:19','2023-07-25 05:23:19'),(2,9,'ICT 301-image-1690366723203.jpg','2023-07-26 09:18:43','2023-07-26 09:18:43'),(3,10,'Emploi de  Temps-image-1690366834491.jpg','2023-07-26 09:20:34','2023-07-26 09:20:34'),(4,10,'Emploi de  Temps-image-1690366834305.jpg','2023-07-26 09:20:34','2023-07-26 09:20:34'),(5,12,'Annnonces-image-1690369794140.jpg','2023-07-26 10:09:54','2023-07-26 10:09:54'),(6,12,'Annnonces-image-1690369794411.jpg','2023-07-26 10:09:54','2023-07-26 10:09:54'),(7,13,'notes-image-1690449671446.jpg','2023-07-27 08:21:11','2023-07-27 08:21:11'),(8,15,'Liste Admin-image-1690450259770.png','2023-07-27 08:30:59','2023-07-27 08:30:59'),(9,18,'Avis  de recherche-image-1690603264826.jpg','2023-07-29 03:01:04','2023-07-29 03:01:04'),(10,18,'Avis  de recherche-image-1690603264815.jpg','2023-07-29 03:01:04','2023-07-29 03:01:04'),(11,19,'Commique-image-1690603603736.jpg','2023-07-29 03:06:43','2023-07-29 03:06:43'),(12,19,'Commique-image-1690603603770.png','2023-07-29 03:06:43','2023-07-29 03:06:43'),(13,20,'Liste de selection-image-1690604841337.jpg','2023-07-29 03:27:21','2023-07-29 03:27:21'),(14,21,'Annnonces-image-1690604963932.jpg','2023-07-29 03:29:23','2023-07-29 03:29:23'),(15,23,'Annnonces-image-1690605255193.jpg','2023-07-29 03:34:15','2023-07-29 03:34:15'),(16,24,'Commique-image-1690605344812.jpg','2023-07-29 03:35:44','2023-07-29 03:35:44'),(17,25,'Avis de recherche-image-1690605420178.jpg','2023-07-29 03:37:00','2023-07-29 03:37:00');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (50,'2014_10_12_000000_create_users_table',1),(51,'2014_10_12_100000_create_password_resets_table',1),(52,'2019_08_19_000000_create_failed_jobs_table',1),(53,'2019_12_14_000001_create_personal_access_tokens_table',1),(54,'2023_05_02_120042_create_utilisateurs_table',1),(55,'2023_05_03_132412_create_documents_table',1),(56,'2023_05_03_132857_create_images_table',1),(57,'2023_06_01_110329_create_roles_table',1),(58,'2023_06_01_110903_create_permissions_table',1),(59,'2023_06_01_111253_create_utilisateurs_roles_table',1),(60,'2023_06_01_112850_create_utilisateurs_permissions_table',1),(61,'2023_06_01_134856_create_role_permissions_table',1),(62,'2023_07_24_020229_create_pdfs_table',1),(63,'2023_07_25_024644_create_students_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pdfs`
--

DROP TABLE IF EXISTS `pdfs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pdfs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `documents_id` bigint(20) unsigned NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pdfs`
--

LOCK TABLES `pdfs` WRITE;
/*!40000 ALTER TABLE `pdfs` DISABLE KEYS */;
INSERT INTO `pdfs` VALUES (1,4,'pdf/kOW25fU8599eoAsZyT9Nya12i55CkbBfVULKbaXX.pdf','2023-07-24 01:50:04','2023-07-24 01:50:04'),(2,5,'pdf/uXR0973GvC8ExfcYyQpY2H3mfjLwim3p9Lo22KFL.pdf','2023-07-24 13:20:48','2023-07-24 13:20:48'),(3,6,'pdf/AFfBzQjV01UxDSKPL59Kn9Dg34IZJJoijdHYpWON.pdf','2023-07-25 01:35:53','2023-07-25 01:35:53'),(4,8,'pdf/tGL7o0SukyKppUYiQPGaOpbXrchQS6yZWAVTTxT9.pdf','2023-07-26 08:49:26','2023-07-26 08:49:26'),(5,11,'pdf/cznP9VLFheJbam7GUfjiDfTC8skkrxg5Cn4wggWm.pdf','2023-07-26 10:08:00','2023-07-26 10:08:00'),(6,14,'pdf/OAoL4VQbMURGjfm5Mzs25FUQVdY25IC4CuwZzN3F.pdf','2023-07-27 08:22:30','2023-07-27 08:22:30'),(7,16,'pdf/ggsvOia3EQGwI6p8xzLqhKzvxYk05aWPy6doN8N5.pdf','2023-07-29 02:56:02','2023-07-29 02:56:02'),(8,17,'pdf/2mvxamsq78bVOA15foc0ema9ei7m7n7isyOzyu4o.pdf','2023-07-29 02:58:34','2023-07-29 02:58:34'),(9,22,'pdf/pMEXnzaG7ysq4mEyOZeqlqKs52D7Z8OpGI5Vt2el.pdf','2023-07-29 03:32:09','2023-07-29 03:32:09'),(10,26,'pdf/PvJxdFcjFvzG9poAeC6ovcWEx7PNLg19CfrF8S2a.pdf','2023-07-29 04:03:50','2023-07-29 04:03:50');
/*!40000 ALTER TABLE `pdfs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (7,'CREATE','create','2023-07-26 11:05:14','2023-07-26 11:05:14'),(8,'UPDATE','update','2023-07-26 11:05:14','2023-07-26 11:05:14'),(9,'DELETE','delete','2023-07-26 11:05:14','2023-07-26 11:05:14'),(10,'CREATE','create','2023-07-27 07:26:52','2023-07-27 07:26:52'),(11,'UPDATE','update','2023-07-27 07:26:52','2023-07-27 07:26:52'),(12,'DELETE','delete','2023-07-27 07:26:53','2023-07-27 07:26:53'),(13,'READ','read','2023-07-27 07:26:53','2023-07-27 07:26:53'),(18,'CREATE','create','2023-07-29 04:02:13','2023-07-29 04:02:13'),(19,'READ','read','2023-07-29 04:02:13','2023-07-29 04:02:13');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_permissions`
--

DROP TABLE IF EXISTS `role_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `role_permissions_role_id_permission_id_unique` (`role_id`,`permission_id`),
  KEY `role_permissions_permission_id_foreign` (`permission_id`),
  CONSTRAINT `role_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_permissions`
--

LOCK TABLES `role_permissions` WRITE;
/*!40000 ALTER TABLE `role_permissions` DISABLE KEYS */;
INSERT INTO `role_permissions` VALUES (7,7,3),(8,8,3),(9,9,3),(10,10,4),(11,11,4),(12,12,4),(13,13,4),(18,18,7),(19,19,7);
/*!40000 ALTER TABLE `role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (3,'secretaire_role','secretaire_role','2023-07-26 11:05:14','2023-07-26 11:05:14'),(4,'admin','admin','2023-07-27 07:26:52','2023-07-27 07:26:52'),(7,'delegueL3','deleguel3','2023-07-29 04:02:13','2023-07-29 04:02:13');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `niveauAcademique` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_matricule_unique` (`matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'franckGallagher','INNOCENTS','franckgallagher@gmail.com','20v2455','ICTL3','$2y$10$PiFH7XFKHreaTWayHcmXPOcr/nFcg5dOC72GX7obG2XGd3GeGTp2e','2023-07-25 02:23:47','2023-07-25 02:23:47'),(2,'Gallagher','Gallagher Gallagher','franck@gmail.com','12R2333','ICTL3','$2y$10$/x6p9qhjdgq/a9bBoNgIIeoA43ILPOs5BRZGdgZ7JsfC8kwEHSxZK','2023-07-26 08:46:38','2023-07-26 08:46:38');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateurs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateurs`
--

LOCK TABLES `utilisateurs` WRITE;
/*!40000 ALTER TABLE `utilisateurs` DISABLE KEYS */;
INSERT INTO `utilisateurs` VALUES (3,'admin','admin','admin@gmail.com','$2y$10$kn2suX.bXjD6pZbheZxkvOuTs12FJhkGs9cmwnOnh0dIpETv/RvhG','2023-07-27 07:31:59','2023-07-27 07:31:59'),(4,'Docteur','Messi','messi@gmail.com','$2y$10$1i97Crg7mIn.cBmPimiTheNtx98b54t3nTfuUY7iTbC1kZ8LL6vam','2023-07-27 08:29:07','2023-07-27 08:29:07'),(7,'Gallagher','Gallagher','gallagher@gmail.com','$2y$10$Xi/qPXLJnXpHm53tzcoX..1TL23Qdjj6zm.oOjqqkKU0qw7ADV4bq','2023-07-29 04:02:43','2023-07-29 04:02:43');
/*!40000 ALTER TABLE `utilisateurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateurs_permissions`
--

DROP TABLE IF EXISTS `utilisateurs_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateurs_permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `utilisateur_id` bigint(20) unsigned NOT NULL,
  `permission_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `utilisateurs_permissions_utilisateur_id_permission_id_unique` (`utilisateur_id`,`permission_id`),
  KEY `utilisateurs_permissions_permission_id_foreign` (`permission_id`),
  CONSTRAINT `utilisateurs_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `utilisateurs_permissions_utilisateur_id_foreign` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateurs_permissions`
--

LOCK TABLES `utilisateurs_permissions` WRITE;
/*!40000 ALTER TABLE `utilisateurs_permissions` DISABLE KEYS */;
INSERT INTO `utilisateurs_permissions` VALUES (8,3,10),(9,3,11),(10,3,12),(11,3,13),(12,4,7),(13,4,8),(18,7,18),(19,7,19);
/*!40000 ALTER TABLE `utilisateurs_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateurs_roles`
--

DROP TABLE IF EXISTS `utilisateurs_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateurs_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `utilisateur_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `utilisateurs_roles_utilisateur_id_role_id_unique` (`utilisateur_id`,`role_id`),
  KEY `utilisateurs_roles_role_id_foreign` (`role_id`),
  CONSTRAINT `utilisateurs_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `utilisateurs_roles_utilisateur_id_foreign` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateurs_roles`
--

LOCK TABLES `utilisateurs_roles` WRITE;
/*!40000 ALTER TABLE `utilisateurs_roles` DISABLE KEYS */;
INSERT INTO `utilisateurs_roles` VALUES (3,3,4),(4,4,3),(7,7,7);
/*!40000 ALTER TABLE `utilisateurs_roles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-29 11:28:32
