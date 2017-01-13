-- Host: localhost    Database: ekologija
-- ------------------------------------------------------

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
-- Table structure for table `sadrzaj`
--

DROP TABLE IF EXISTS `sadrzaj`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sadrzaj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sadrzaj` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sadrzaj`
--

LOCK TABLES `sadrzaj` WRITE;
/*!40000 ALTER TABLE `sadrzaj` DISABLE KEYS */;
INSERT INTO `sadrzaj` VALUES (1,'<img style=\"margin: 5px 25px 15px 20px; float: left;\" src=\"http://www.fimek.edu.rs/images/studije/ekologija.jpg\" alt=\"Ekologija\" title=\"Ekologija\">\r\nStudijski program<strong> Ekologija</strong> koncipiran je u skladu sa Zakonom o visokom obrazovanju i Bolonjskom deklaracijom. Njegov prevashodni cilj je pruÅ¾anje sadrÅ¾ajnog i kvalitetnog obrazovanja, kao i formiranje i osposobljavanje mladih struÄnjaka za uspeÅ¡no delovanje i reÅ¡avanje problema u oblasti ekologije.</p>\r\n<p>Studijski program Ekologija studentima pruÅ¾a sva neophodna znanja potrebna za obavljanje najrazliÄitijih poslova koji zahtevaju znanje iz oblasti ekologije. Savladavanjem ovog studijskog programa studenti postaju osposobljeni za obavljanje poslova u oblasti ekologije i zaÅ¡tite Å¾ivotne sredine, odnosno postaju osposobljeni da daju odgovor na sva pitanja i sve probleme u ovoj oblasti. Nakon zavrÅ¡etka ovog studijskog programa studenti imaju moguÄ‡nost zapoÅ¡ljavanja kako u laboratorijama i agencijama koje se bave ekologijom i kontrolom kvaliteta Å¾ivotne sredine, tako i u inspekcijama, drÅ¾avnim agencijama, konsultantskim firmama iz oblasti ekologije i zaÅ¡tite Å¾ivotne sredine, nevladinom sektoru za zaÅ¡titu Å¾ivotne sredine i edukaciju stanovniÅ¡tva, industriji i sliÄno.</p>\r\n<p>Osnovne akademske studije traju 4 godine i nose 240 ESPB bodova. ZavrÅ¡etkom studijskog programa Ekologija student stiÄe zvanje <b>DIPLOMIRANI EKOLOG</b>.</p>\r\n<p>Po zavrÅ¡etku ovih studija student moÅ¾e nastaviti master studije u trajanju od jedne godine.</p>\r\n<p>Nastava se ostvaruje u malim grupama i mentorskom radu, kroz uspostavljanje neposrednog kontakta student-profesor. Naglasak se stavlja na isticanje individualnog, kreativnog razvoja studenta, timski rad, sticanje praktiÄnih znanja i koriÅ¡Ä‡enje savremene tehnologije. Kvalitetu nastavnog procesa doprinose i gostovanje struÄnjaka iz oblasti ekologije i zaÅ¡tite Å¾ivotne sredine.</p>');
/*!40000 ALTER TABLE `sadrzaj` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-13 14:35:06
