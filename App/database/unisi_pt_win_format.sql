-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: localhost    Database: unisi_pt
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cft`
--

DROP TABLE IF EXISTS `cft`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cft` (
  `id_cft` char(16) NOT NULL,
  `pj_cft` char(8) DEFAULT NULL,
  `jenis_kegiatan` varchar(255) NOT NULL,
  `open_regis_date` date NOT NULL,
  `due_regis_date` date NOT NULL,
  PRIMARY KEY (`id_cft`),
  KEY `pj_cft` (`pj_cft`),
  CONSTRAINT `cft_ibfk_1` FOREIGN KEY (`pj_cft`) REFERENCES `mahasiswa` (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cft`
--

LOCK TABLES `cft` WRITE;
/*!40000 ALTER TABLE `cft` DISABLE KEYS */;
/*!40000 ALTER TABLE `cft` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instansi`
--

DROP TABLE IF EXISTS `instansi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `instansi` (
  `id_instansi` char(16) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id_instansi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instansi`
--

LOCK TABLES `instansi` WRITE;
/*!40000 ALTER TABLE `instansi` DISABLE KEYS */;
/*!40000 ALTER TABLE `instansi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kualifikasi_cft`
--

DROP TABLE IF EXISTS `kualifikasi_cft`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kualifikasi_cft` (
  `id_kualifikasi` char(32) NOT NULL,
  `id_cft` char(16) DEFAULT NULL,
  `nama_kualifikasi` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kualifikasi`),
  KEY `id_cft` (`id_cft`),
  CONSTRAINT `kualifikasi_cft_ibfk_1` FOREIGN KEY (`id_cft`) REFERENCES `cft` (`id_cft`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kualifikasi_cft`
--

LOCK TABLES `kualifikasi_cft` WRITE;
/*!40000 ALTER TABLE `kualifikasi_cft` DISABLE KEYS */;
/*!40000 ALTER TABLE `kualifikasi_cft` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kualifikasi_pt`
--

DROP TABLE IF EXISTS `kualifikasi_pt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kualifikasi_pt` (
  `id_kualifikasi` char(16) NOT NULL,
  `id_pt` char(16) DEFAULT NULL,
  `nama_kualifikasi` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kualifikasi`),
  KEY `id_pt` (`id_pt`),
  CONSTRAINT `kualifikasi_pt_ibfk_1` FOREIGN KEY (`id_pt`) REFERENCES `pt` (`id_pt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kualifikasi_pt`
--

LOCK TABLES `kualifikasi_pt` WRITE;
/*!40000 ALTER TABLE `kualifikasi_pt` DISABLE KEYS */;
/*!40000 ALTER TABLE `kualifikasi_pt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mahasiswa`
--

DROP TABLE IF EXISTS `mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mahasiswa` (
  `nim` char(8) NOT NULL,
  `nama_mahasiswa` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `jurusan` varchar(255) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `url_foto` varchar(255) DEFAULT NULL,
  `url_cv` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mahasiswa`
--

LOCK TABLES `mahasiswa` WRITE;
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pt`
--

DROP TABLE IF EXISTS `pt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pt` (
  `id_pt` char(16) NOT NULL,
  `id_penyelenggara` char(16) DEFAULT NULL,
  `nama_pt` varchar(255) NOT NULL,
  `is_paid` tinyint(1) NOT NULL,
  `jenis_pt` varchar(64) NOT NULL,
  `open_regis_date` date NOT NULL,
  `due_regis_date` date NOT NULL,
  `start_pt_date` date NOT NULL,
  `durasi_pt` int NOT NULL,
  `url_poster` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pt`),
  KEY `id_penyelenggara` (`id_penyelenggara`),
  CONSTRAINT `pt_ibfk_1` FOREIGN KEY (`id_penyelenggara`) REFERENCES `instansi` (`id_instansi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pt`
--

LOCK TABLES `pt` WRITE;
/*!40000 ALTER TABLE `pt` DISABLE KEYS */;
/*!40000 ALTER TABLE `pt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registrasi_cft`
--

DROP TABLE IF EXISTS `registrasi_cft`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registrasi_cft` (
  `id_regis_cft` char(16) NOT NULL,
  `nim` char(8) DEFAULT NULL,
  `id_cft` char(16) DEFAULT NULL,
  `tanggal_daftar` date NOT NULL,
  `status_cft` varchar(16) NOT NULL,
  PRIMARY KEY (`id_regis_cft`),
  KEY `nim` (`nim`),
  KEY `id_cft` (`id_cft`),
  CONSTRAINT `registrasi_cft_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`),
  CONSTRAINT `registrasi_cft_ibfk_2` FOREIGN KEY (`id_cft`) REFERENCES `cft` (`id_cft`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registrasi_cft`
--

LOCK TABLES `registrasi_cft` WRITE;
/*!40000 ALTER TABLE `registrasi_cft` DISABLE KEYS */;
/*!40000 ALTER TABLE `registrasi_cft` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registrasi_pt`
--

DROP TABLE IF EXISTS `registrasi_pt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registrasi_pt` (
  `id_regis_pt` char(16) NOT NULL,
  `nim` char(8) DEFAULT NULL,
  `id_pt` char(16) DEFAULT NULL,
  `tanggal_daftar` date NOT NULL,
  `status_pt` varchar(16) NOT NULL,
  PRIMARY KEY (`id_regis_pt`),
  KEY `nim` (`nim`),
  KEY `id_pt` (`id_pt`),
  CONSTRAINT `registrasi_pt_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`),
  CONSTRAINT `registrasi_pt_ibfk_2` FOREIGN KEY (`id_pt`) REFERENCES `pt` (`id_pt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registrasi_pt`
--

LOCK TABLES `registrasi_pt` WRITE;
/*!40000 ALTER TABLE `registrasi_pt` DISABLE KEYS */;
/*!40000 ALTER TABLE `registrasi_pt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `target_jurusan`
--

DROP TABLE IF EXISTS `target_jurusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `target_jurusan` (
  `id_tj` char(3) NOT NULL,
  `id_pt` char(16) DEFAULT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tj`),
  KEY `id_pt` (`id_pt`),
  CONSTRAINT `target_jurusan_ibfk_1` FOREIGN KEY (`id_pt`) REFERENCES `pt` (`id_pt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `target_jurusan`
--

LOCK TABLES `target_jurusan` WRITE;
/*!40000 ALTER TABLE `target_jurusan` DISABLE KEYS */;
/*!40000 ALTER TABLE `target_jurusan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-08 17:28:55
