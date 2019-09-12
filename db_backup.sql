-- MySQL dump 10.13  Distrib 5.5.62, for Linux (x86_64)
--
-- Host: localhost    Database: c9
-- ------------------------------------------------------
-- Server version	5.5.62

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'admin','admin@test.jp',NULL,'$2y$10$Oh.iDEPa1O17BIzhx8fsl.pGnCO1jzibOKMkpzKhjYo6ktxMPlLFy',NULL,'2019-08-24 00:21:44','2019-08-24 00:21:44');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,2,'test2','test224','2019-08-21 08:54:35','2019-09-02 13:13:56'),(3,3,'test5','test','2019-08-21 08:55:05','2019-08-21 08:55:05'),(4,4,'test','test4','2019-08-21 08:55:29','2019-08-21 08:55:29'),(5,4,'test','test7','2019-08-21 08:55:37','2019-08-21 08:55:37'),(6,4,'test','test','2019-08-21 08:56:03','2019-08-21 08:56:03'),(8,1,'test','testtesttest1','2019-08-21 08:56:24','2019-08-21 08:56:24'),(9,2,'testtest','aaaaaaaaaaaaaaaaaaaaa\r\n\r\naaaaa','2019-09-02 13:16:42','2019-09-07 01:09:36'),(10,2,'test2','testttttttt','2019-09-02 13:37:01','2019-09-02 13:37:01'),(11,2,'日常','test1ddd','2019-09-07 00:54:10','2019-09-07 01:04:06');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (18,'2014_10_12_000000_create_users_table',1),(19,'2014_10_12_100000_create_password_resets_table',1),(20,'2019_07_28_124759_create_admins_table',1),(21,'2019_07_28_124833_create_n-user_table',1),(22,'2019_07_28_124838_create_articles_table',1),(23,'2019_07_31_133843_create_samples_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `n-users`
--

DROP TABLE IF EXISTS `n-users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `n-users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user-id` int(11) NOT NULL,
  `category` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `n-users`
--

LOCK TABLES `n-users` WRITE;
/*!40000 ALTER TABLE `n-users` DISABLE KEYS */;
/*!40000 ALTER TABLE `n-users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
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
-- Table structure for table `samples`
--

DROP TABLE IF EXISTS `samples`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `samples` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `samplearticle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `samples`
--

LOCK TABLES `samples` WRITE;
/*!40000 ALTER TABLE `samples` DISABLE KEYS */;
INSERT INTO `samples` VALUES (1,'日常','帰宅後は絵本を読んだり積木で遊んだりして過ごしました。風呂上がりに眠くなると、大声で泣いていました。','2019-08-17 04:15:59','2019-09-05 12:56:15'),(2,'日常','おもちゃを掴んだり投げたりする力が強くなってきました。ここ数日バナナを食べていますが、すぐに手で掴みむさぼるように口に入れています。','2019-08-17 04:19:41','2019-09-05 12:56:01'),(3,'日常','最近鳴き声がより力強くなり、自己主張しています。お気に入りの絵本を本棚から出してきて読んでとせがみます。','2019-08-17 04:19:56','2019-09-05 12:56:21'),(4,'日常','洗濯物をたたむときはいつも近くに寄ってきて、たたんだ洗濯物を崩そうとします。ふかふかの布団の上に下ろすと、笑顔になって遊びだします。','2019-08-17 04:20:04','2019-09-05 12:56:28'),(5,'不機嫌','機嫌が良くないことが多く、よく抱っこをせがんできました。夜中に目が覚めてしまい、1時間ほど眠らずに遊んでいました。','2019-08-17 04:21:24','2019-09-05 12:57:34'),(6,'不機嫌','咳・痰が出ており、ご飯の時にむせていました。寝付けないのか、寝相が悪くいろいろな姿勢で寝ていました。','2019-08-17 04:22:13','2019-09-05 12:57:46'),(7,'不機嫌','夕方のご飯は半分くらい残しました。食欲がなかったのか、食感・味が気に入らなかったのかはわかりませんが、食事後も普段よりぐずることが多かったです。','2019-08-17 04:22:58','2019-09-05 12:57:52'),(8,'体調不良','降園後、小児科に行ったところ、のどが赤く風邪と診断されました。ホクナリンテープを貼っていますのでよろしくお願いします。','2019-08-17 04:27:04','2019-09-05 12:58:03'),(9,'体調不良','昨日は夕方に●℃の熱が出ましたが、就寝時には平熱に戻りました。元気よく遊んでいますが、時々体がかゆそうな仕草を見せます。','2019-08-17 04:30:37','2019-09-05 12:58:07'),(10,'体調不良','一昨日は元気でしたが、昨日は朝●℃、夕方●℃の熱が出ました。機嫌は良く、ぐったりしている様子もないですが、解熱剤を入れて朝まで様子を見ています。','2019-09-04 13:44:50','2019-09-05 12:58:12');
/*!40000 ALTER TABLE `samples` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admintest','admintest@admintest.jp','$2y$10$UXwmZ1st1ubuyzHRj9Vh.OxHtv2LhraD.WLAXRjnnOf0rnYnYd7a6','uXz7idrpee6SlXTjjHlQzwNMr3NvQenDvrWTIoouSvrzWfjPkAo42Dm773zS','2019-08-19 13:07:00','2019-09-04 14:36:47'),(2,'test','test@test.jp','$2y$10$sdoXYhJkc7C47tmtTLw8r.3AHPx8X6S1XatWuPGQfmxrfj99egxuS','8qLaLE49rCtO6dCO7i64se7vAk29qAAZc8bltvNRe8i1zEfiYjR1SOr6YQ86','2019-08-21 09:20:06','2019-08-21 09:20:06'),(3,'admin','admin@test.jp','$2y$10$wmXdUdu5/gXdlHZPPIA40uYcu0xTPAlWVW.yrttQSvcN0PnjRIs1C','2CQnP1iyvvVYzMedAV1Y6OGdqquUAafWbD6qtIFYi1vpjSQleURVwT6I5lTb','2019-08-22 12:15:24','2019-08-22 12:15:24');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-08 10:50:21
