CREATE DATABASE  IF NOT EXISTS `midawn` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `midawn`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: midawn
-- ------------------------------------------------------
-- Server version	5.6.11

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
-- Table structure for table `md_news`
--

DROP TABLE IF EXISTS `md_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `md_news` (
  `newsID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `content` text,
  `createTime` timestamp NULL DEFAULT NULL,
  `updateTime` timestamp NULL DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`newsID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `md_news`
--

LOCK TABLES `md_news` WRITE;
/*!40000 ALTER TABLE `md_news` DISABLE KEYS */;
INSERT INTO `md_news` VALUES (5,'Midawn Rises','Bri\'an C','Nam nec tristique eros. Maecenas dapibus lacus libero, eu consectetur eros mattis in. Fusce congue vel enim quis molestie. Etiam sollicitudin aliquet vulputate. Maecenas felis eros, mattis at interdum vitae, molestie a risus. Suspendisse potenti. Phasellus eu malesuada massa.<br />\r\n<br />\r\nDonec elit quam, scelerisque a sodales sed, aliquet quis mi. Fusce non pulvinar turpis, eu tempus diam. Nulla a velit turpis. Phasellus tempus, massa a pellentesque sagittis, velit odio tincidunt nulla, ac placerat tellus tellus eu mauris. Aliquam sed quam eu lectus pretium luctus vel quis eros. Quisque eget cursus mi. Donec est leo, dictum at pretium id, volutpat eget tortor. Suspendisse at ligula sit amet sapien fringilla porttitor vitae sed velit. Mauris fermentum feugiat nunc, vitae ultrices dui semper vel. In purus tellus, iaculis vel condimentum eu, convallis eu nisi.<br />\r\n<br />\r\nAenean nisl neque, suscipit a suscipit ac, consectetur vitae neque. Phasellus eget enim id sem luctus ornare. Vivamus in tortor dapibus, malesuada massa eget, semper turpis. Suspendisse blandit turpis tristique imperdiet pretium. Quisque gravida neque eget nunc tristique convallis. Fusce bibendum velit fringilla tortor tincidunt ullamcorper. Suspendisse gravida eu velit in adipiscing. Phasellus massa magna, vestibulum sed erat et, ullamcorper mattis ipsum. Suspendisse molestie adipiscing massa, eu tincidunt augue eleifend sit amet. Donec ultricies nec ligula in ullamcorper. Aliquam elementum nisi felis, eu bibendum arcu laoreet eget. Integer mattis ornare justo in varius.<br />\r\n<br />\r\nCurabitur ultrices eleifend laoreet. Nunc feugiat vehicula velit, scelerisque iaculis elit lacinia id. Sed eget elit tempor, volutpat purus id, placerat diam. Nulla sit amet tincidunt dui. Vestibulum sit amet turpis a risus tristique fermentum. Cras eu lectus et tellus gravida congue non sed ligula. Nunc eget ultricies nibh. Phasellus nec felis aliquam, posuere quam sed, mollis dui. Cras in nisi et augue aliquam pulvinar vel venenatis neque. Donec ut justo iaculis, fermentum neque eu, aliquam nisl. In aliquet nulla eu nisi semper, interdum facilisis lorem ultricies. Suspendisse eu mattis sapien. Curabitur odio ante, auctor sit amet vehicula ac, pretium volutpat ipsum. Maecenas feugiat elit nec dolor viverra, vel scelerisque lorem cursus. Praesent dapibus velit lorem, ut fermentum metus egestas nec.<br />\r\n<br />\r\nProin ac sagittis massa, ut ultrices nisl. Donec lectus sapien, luctus vel sagittis id, dignissim id orci. Quisque pellentesque aliquet auctor. Donec massa mi, tincidunt sed viverra sit amet, aliquet non arcu. Sed a gravida massa. Suspendisse elementum lacus quis vehicula eleifend. Phasellus nec nunc nisl. Nam dictum ultrices eros vel dignissim. Duis luctus, tortor sit amet tempus ullamcorper, enim nunc lacinia odio, sit amet fermentum augue metus eu erat. Sed adipiscing malesuada eleifend. Integer id tincidunt orci, in aliquam ante. Aliquam eget pulvinar mauris, ac luctus justo.','2014-01-04 22:52:29','2014-01-04 22:52:29','Company'),(6,'Test 2','inwolf','Integer scelerisque, urna a luctus facilisis, nunc dolor dapibus diam, id condimentum lorem diam sed justo. Vestibulum mattis dignissim nunc quis posuere. Sed placerat, lacus et viverra placerat, leo tellus venenatis ligula, non vestibulum neque velit sed risus. Integer egestas rhoncus purus ac facilisis. Fusce vitae pellentesque erat. Vivamus laoreet dui vel tellus vestibulum, a mollis risus dapibus. Donec accumsan dictum volutpat. Nam suscipit auctor mauris, eget vestibulum dui congue non. Donec congue enim et porttitor bibendum. Suspendisse consectetur ultricies mollis. Aenean hendrerit ornare ligula, quis tincidunt libero convallis scelerisque. Sed cursus hendrerit purus.<br />\r\n<br />\r\nUt accumsan justo quis odio dictum, sit amet fermentum ligula ullamcorper. Integer et turpis pulvinar, hendrerit justo quis, tincidunt augue. Quisque sed arcu eget risus adipiscing viverra. Nam tempus aliquam convallis. Integer iaculis et augue vitae euismod. Phasellus vitae ligula sit amet libero vulputate facilisis. Praesent fermentum vestibulum odio at molestie. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis at nisi blandit, sagittis augue in, consectetur mauris. Sed vitae turpis lacus. Aenean sagittis auctor molestie. Integer sit amet malesuada sem. Aliquam id lectus et ante fermentum convallis a pulvinar erat.<br />\r\n<br />\r\nVestibulum sed sem fringilla dui faucibus convallis. Nulla dictum lobortis augue eu sodales. Nullam ligula sem, blandit pharetra convallis sed, ullamcorper eget enim. Integer ornare ligula eu egestas convallis. Etiam cursus venenatis nulla, sit amet dictum enim lacinia ac. Integer vel congue quam, nec rhoncus ante. Maecenas non augue diam. Etiam in metus posuere, posuere odio sit amet, mattis libero. Ut euismod ultrices turpis vitae vehicula. Sed nisi metus, egestas nec ligula ac, porttitor tempus quam. Nullam gravida, sapien ut dapibus sollicitudin, diam nulla interdum quam, non porttitor leo sapien sit amet mi. Cras porta lectus felis, quis malesuada massa auctor eget. Fusce in nisi ac neque volutpat rhoncus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla ornare, nisi sit amet porta consequat, nulla sem malesuada dolor, vel sodales arcu felis at ipsum. Donec tempus, felis a mattis rhoncus, enim nunc ultrices elit, et laoreet lectus nunc vel felis.','2014-01-04 22:56:29','2014-01-04 22:56:29','Other'),(7,'Test 3 News OO\'XX','inwolf','Proin condimentum, felis id iaculis ornare, orci sem tempor mauris, ac mattis felis ante id nunc. Pellentesque placerat velit a malesuada volutpat. Sed rhoncus dictum posuere. In hac habitasse platea dictumst. Integer metus arcu, fermentum quis rhoncus non, vehicula a risus. Nam cursus, augue et dapibus aliquet, magna massa scelerisque orci, vel tristique felis nunc et augue. Donec ultricies pulvinar neque et lobortis. Nunc adipiscing dui porttitor accumsan euismod.<br />\r\n<br />\r\nMauris quam felis, pulvinar eget hendrerit a, ultricies vitae nisl. Suspendisse ultricies, nisi vel dignissim porta, tellus tellus fringilla velit, sollicitudin aliquet leo nisl vitae tellus. Maecenas tempus nibh ut ipsum ornare ullamcorper. Fusce nec lorem in lacus pretium elementum nec ac risus. Pellentesque at enim id metus volutpat cursus non feugiat purus. Praesent dapibus nulla sed nibh aliquet, at pellentesque erat consequat. Suspendisse fermentum luctus velit, eget suscipit eros. Mauris nec sollicitudin sapien, ut pulvinar leo. Aliquam eu eros id lectus gravida sollicitudin. Maecenas sed odio arcu.','2014-01-04 23:23:33','2014-01-04 23:23:33','Company');
/*!40000 ALTER TABLE `md_news` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-01-04 18:24:33
