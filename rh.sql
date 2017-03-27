/*
SQLyog Ultimate v9.50 
MySQL - 5.6.17 : Database - rh
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rh` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `rh`;

/*Table structure for table `colaborador` */

DROP TABLE IF EXISTS `colaborador`;

CREATE TABLE `colaborador` (
  `colaborador_id` int(11) NOT NULL AUTO_INCREMENT,
  `cargoPretendido` varchar(200) NOT NULL,
  `pretencaoSalarial` varchar(100) DEFAULT NULL,
  `nome` varchar(255) NOT NULL,
  `dataNascimento` char(10) NOT NULL,
  `sexo` char(10) NOT NULL,
  `estadoCivil` varchar(20) NOT NULL,
  `filhos` char(10) NOT NULL,
  `naturalidade` char(10) NOT NULL,
  `dataCadastro` datetime NOT NULL,
  PRIMARY KEY (`colaborador_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

/*Data for the table `colaborador` */

insert  into `colaborador`(`colaborador_id`,`cargoPretendido`,`pretencaoSalarial`,`nome`,`dataNascimento`,`sexo`,`estadoCivil`,`filhos`,`naturalidade`,`dataCadastro`) values (23,'cargoPretendido3','prenetcaoSalarial1','IVONEI ROSA','1970-01-01','sexo3','estadoCivil1','filho4','353454543','2016-09-22 20:00:00'),(30,'cargoPretendido6','prenetcaoSalarial1','ANA MARIA','2016-01-07','sexo3','estadoCivil1','filho4','353454543','2016-09-22 20:00:00'),(31,'cargoPretendido3','prenetcaoSalarial1','ALISSE NASCENTE JARDIM','1970-01-01','sexo3','estadoCivil1','filho4','353454543','2016-09-22 20:00:00'),(32,'cargoPretendido6','prenetcaoSalarial7','PEDRO ADELAIR NASCENTE JARDIM','1984-08-06','sexo3','estadoCivil1','filho4','353454543','2016-09-22 20:00:00'),(36,'cargoPretendido3','prenetcaoSalarial6','34534534534345','1945-06-07','sexo3','estadoCivil1','filho4','3453453454','2016-10-06 00:00:00');

/*Table structure for table `contato` */

DROP TABLE IF EXISTS `contato`;

CREATE TABLE `contato` (
  `contato_id` int(11) NOT NULL AUTO_INCREMENT,
  `colaborador_id` int(11) NOT NULL,
  `telefoneResidencial` char(15) DEFAULT NULL,
  `celular` char(15) DEFAULT NULL,
  `telefoneContato` char(15) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`contato_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

/*Data for the table `contato` */

insert  into `contato`(`contato_id`,`colaborador_id`,`telefoneResidencial`,`celular`,`telefoneContato`,`email`) values (23,23,'(34) 5345-3454','(34) 5345-3453','(34) 5334-5435','5345345@bol.com'),(30,30,'(34) 5345-3454','(34) 5345-3453','(34) 5334-5435','5345345@bol.com'),(31,31,'(34) 5345-3454','(34) 5345-3453','(34) 5334-5435','5345345@bol.com'),(32,32,'(34) 5345-3454','(34) 5345-3453','(34) 5334-5435','5345345@bol.com'),(36,36,'(22) 2222-2222','(22) 2222-2222','(34) 5334-5435','5345345@bol.com');

/*Table structure for table `documentacao` */

DROP TABLE IF EXISTS `documentacao`;

CREATE TABLE `documentacao` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `colaborador_id` int(11) NOT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `rg` varchar(100) DEFAULT NULL,
  `numeroHabilitacao` varchar(100) DEFAULT NULL,
  `categoria` char(1) NOT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

/*Data for the table `documentacao` */

insert  into `documentacao`(`doc_id`,`colaborador_id`,`cpf`,`rg`,`numeroHabilitacao`,`categoria`) values (23,23,'666.666.666-66','99999999999999','3232323','A'),(30,30,'821.444.777-77','22222222222222','333443242434','C'),(31,31,'111.111.111-11','87878787778787','87878787878787','C'),(32,32,'888.888.888-88','99999999999999','777777777777777777777','A'),(36,36,'345.345.345-34','3453453453454','','D');

/*Table structure for table `endereco` */

DROP TABLE IF EXISTS `endereco`;

CREATE TABLE `endereco` (
  `endereco_id` int(11) NOT NULL AUTO_INCREMENT,
  `colaborador_id` int(11) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `complemento` varchar(200) DEFAULT NULL,
  `cidade` varchar(200) DEFAULT NULL,
  `uf` char(2) DEFAULT NULL,
  `numeroApartamento` char(10) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`endereco_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

/*Data for the table `endereco` */

insert  into `endereco`(`endereco_id`,`colaborador_id`,`endereco`,`bairro`,`complemento`,`cidade`,`uf`,`numeroApartamento`,`cep`) values (23,23,'345345345345345345343453453','35345345345','','534534534','45','356565','53453-454'),(30,30,'345345345345345345343453453','35345345345','','534534534','45','356565','53453-454'),(31,31,'345345345345345345343453453','35345345345','','534534534','45','356565','53453-454'),(32,32,'345345345345345345343453453','35345345345','','534534534','45','356565','53453-454'),(36,36,'moab caldas','CAVALHADA','','534534534','45','356565','53453-454');

/*Table structure for table `experienciaproficional` */

DROP TABLE IF EXISTS `experienciaproficional`;

CREATE TABLE `experienciaproficional` (
  `experienciaProficional_id` int(11) NOT NULL AUTO_INCREMENT,
  `colaborador_id` int(11) NOT NULL,
  `empresa` varchar(200) DEFAULT NULL,
  `cargo` varchar(200) DEFAULT NULL,
  `atividade` varchar(200) DEFAULT NULL,
  `dataAdimissao` date DEFAULT NULL,
  `dataDemissao` date DEFAULT NULL,
  `Motivo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`experienciaProficional_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

/*Data for the table `experienciaproficional` */

insert  into `experienciaproficional`(`experienciaProficional_id`,`colaborador_id`,`empresa`,`cargo`,`atividade`,`dataAdimissao`,`dataDemissao`,`Motivo`) values (28,23,'34534534543       ','34534534543       ','4534543534','1945-07-14','2016-09-08','motivo3'),(35,30,'1111111111111111111111111          ','34534534543            ','45345435342332423434343 45345435342332423434343 45345435342332423434343 45345435342332423434343 45345435342332423434343 45345435342332423434343453454353423324234343434534543534233242343434345345435342','2016-10-31','2016-11-30','motivo1'),(36,31,'34534534543   ','34534534543   ','4534543534','1945-07-14','2016-09-08','motivo3'),(37,32,'34534534543        ','34534534543        ','4534543534','2015-01-01','1970-01-01','motivo3'),(41,32,'vOLPATO        ','PROGRAMADOR        ','PROGRMAR SITES','1970-01-01','2016-03-30','motivo2'),(42,36,'45453453534       ','34534534       ','34534534534534','1970-01-01','1970-01-01','motivo4');

/*Table structure for table `fatura` */

DROP TABLE IF EXISTS `fatura`;

CREATE TABLE `fatura` (
  `idFatura` int(11) NOT NULL AUTO_INCREMENT,
  `idFornecedor` int(11) NOT NULL,
  `codigoBarra` text NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `razaoSocial` varchar(200) NOT NULL,
  `recorrente` char(5) NOT NULL DEFAULT 'false',
  `aprovar` char(5) NOT NULL DEFAULT 'false',
  `inativar` char(5) NOT NULL DEFAULT 'false',
  `dataVencimento` date NOT NULL,
  `dataLancamento` date NOT NULL,
  PRIMARY KEY (`idFatura`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;

/*Data for the table `fatura` */

insert  into `fatura`(`idFatura`,`idFornecedor`,`codigoBarra`,`valor`,`razaoSocial`,`recorrente`,`aprovar`,`inativar`,`dataVencimento`,`dataLancamento`) values (1,10,'34545345','0.00','345345','true','true','true','2016-10-07','2016-10-20'),(2,2,' 	001155454-525885555.558-00022','0.00','43534543345','true','true','false','2016-10-07','2016-10-20'),(3,6,'342343','0.00','234234234','false','true','false','2016-10-01','2016-10-20'),(74,28,'0001.55555.55555.8888.8888/0001','270.00','345345','false','true','true','2016-10-12','2016-10-28'),(73,31,'0001.55555.55555.8888.8888/0001','270.00','COLOMBO','true','true','false','2016-09-28','2016-10-28'),(72,28,'546546','120.00','5465','false','false','false','2016-09-28','2016-10-26'),(71,28,'546546','0.00','5465','false','true','false','2016-09-28','2016-10-26'),(70,29,'546546','0.00','24234','false','true','true','2016-09-27','2016-10-26'),(69,29,'546546','0.00','24234','false','true','false','2016-09-27','2016-10-26'),(68,29,'546546','0.00','24234','false','true','false','2016-09-27','2016-10-26'),(67,29,'546546','0.00','24234','false','true','false','2016-09-27','2016-10-26'),(66,29,'546546','5465464.64','24234','true','true','false','2016-09-29','2016-10-26'),(65,29,'34545345','300.00','345345','false','true','false','2016-09-27','2016-10-26'),(64,29,'34545345','300.00','345345','false','true','false','2016-09-27','2016-10-26'),(63,29,'34534545345','4.44','34332432','false','true','false','2016-10-12','2016-10-26'),(62,29,'34534545345','4.44','34332432','false','true','false','2016-10-12','2016-10-26'),(61,29,'34534545345','4.44','345345','false','true','false','2016-10-12','2016-10-26'),(60,29,'34534545345','4.44','34332432','false','true','false','2016-10-12','2016-10-26'),(59,29,'34534545345','4.44','34332432','false','true','false','2016-10-12','2016-10-26'),(58,29,'34534545345','4.44','34332432','false','true','false','2016-10-12','2016-10-26'),(57,29,'34534545345','4.44','COLOMBO','false','true','false','2016-10-12','2016-10-26'),(56,29,'34534545345','4.44','COLOMBO','false','true','false','2016-10-12','2016-10-26'),(55,29,'34534545345','4.44','COLOMBO','false','true','false','2016-10-12','2016-10-26'),(54,29,'34534545345','4.44','COLOMBO','false','true','false','2016-10-12','2016-10-26'),(53,29,'34534545345','4.44','COLOMBO','false','true','false','2016-10-12','2016-10-26'),(52,28,'0001.55555.55555.8888.8888/0001','300.00','45453454','false','true','false','2016-09-28','2016-10-26'),(51,30,'0001.55555.55555.8888.8888/0001','4.44','34332432','false','true','false','2016-10-05','2016-10-26'),(50,30,'0001.55555.55555.8888.8888/0001','4.44','34332432','false','true','false','2016-10-05','2016-10-26'),(49,30,'0001.55555.55555.8888.8888/0001','4.44','34332432','false','true','false','2016-10-05','2016-10-26'),(48,30,'0001.55555.55555.8888.8888/0001','4.44','34332432','false','true','false','2016-10-05','2016-10-26'),(47,30,'0001.55555.55555.8888.8888/0001','4.44','34332432','false','true','false','2016-10-05','2016-10-26'),(46,29,'0001.55555.55555.8888.8888/0001','300.00','COLOMBO','true','true','false','2016-09-29','2016-10-26'),(45,29,'0001.55555.55555.8888.8888/0001','300.00','COLOMBO','true','true','false','2016-09-29','2016-10-26'),(44,29,'0001.55555.55555.8888.8888/0001','4.44','COLOMBO','true','true','false','2016-10-05','2016-10-26');

/*Table structure for table `fatura_anexo` */

DROP TABLE IF EXISTS `fatura_anexo`;

CREATE TABLE `fatura_anexo` (
  `idAnexo` int(11) NOT NULL AUTO_INCREMENT,
  `idFatura` int(11) NOT NULL,
  `anexo` text NOT NULL,
  PRIMARY KEY (`idAnexo`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `fatura_anexo` */

insert  into `fatura_anexo`(`idAnexo`,`idFatura`,`anexo`) values (3,74,'./anexos/Fernando_collor.jpg');

/*Table structure for table `fatura_comentario` */

DROP TABLE IF EXISTS `fatura_comentario`;

CREATE TABLE `fatura_comentario` (
  `idComentario` int(11) NOT NULL AUTO_INCREMENT,
  `idFatura` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `dataPostagem` date DEFAULT NULL,
  PRIMARY KEY (`idComentario`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `fatura_comentario` */

insert  into `fatura_comentario`(`idComentario`,`idFatura`,`comentario`,`dataPostagem`) values (1,70,'pedro jardim da rosa\r\n','2016-10-27'),(2,70,'luiz de azevedo\r\n','2016-10-27'),(3,70,'luiz de azevedo\r\newrewerer','2016-10-27'),(4,72,'rrtret','2016-10-27'),(5,72,'rrtretretret','2016-10-27'),(6,72,'er','2016-10-27'),(7,72,'ssss','2016-10-28'),(8,72,'ssssssssss','2016-10-28'),(9,73,'',NULL),(10,74,'',NULL),(11,74,'ewtrwt','2016-11-03'),(12,74,'ewtrwtrtrtrt','2016-11-03');

/*Table structure for table `fatura_fornecedor` */

DROP TABLE IF EXISTS `fatura_fornecedor`;

CREATE TABLE `fatura_fornecedor` (
  `idFornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  PRIMARY KEY (`idFornecedor`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

/*Data for the table `fatura_fornecedor` */

insert  into `fatura_fornecedor`(`idFornecedor`,`nome`) values (1,'fornecedor ricardo'),(2,'ana maria da rosa'),(3,'rtytryryrtyrt'),(4,'Fornecedor002'),(5,'ewrwerew'),(6,'Fornecedor0045'),(7,'5656565465465465'),(8,'retrtreee'),(9,'Fornecedor003'),(10,'www'),(11,'luis'),(12,'536565464'),(13,'5tyttrty'),(14,'~çlçllp'),(15,'8484'),(17,'asaaas'),(18,'rique  da rosa'),(19,'23234423423'),(20,'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'),(21,'PPPPPPPPPPP'),(22,'5676576576675'),(23,'RIACHUELO'),(24,'ZZZZZZZZZZZZZZ'),(25,'xxxxxxxxxxxxxx'),(26,'ZZZZZZZ'),(27,'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAA2'),(28,'mmmmmmmmmmmmmmmmm'),(29,'CASA DAS BOMBAS'),(30,'TRASFERENCIA'),(31,'wtrtret'),(32,'gfhfhg'),(33,'erer'),(34,'sssssssssssss');

/*Table structure for table `formacao` */

DROP TABLE IF EXISTS `formacao`;

CREATE TABLE `formacao` (
  `formacao_id` int(11) NOT NULL AUTO_INCREMENT,
  `colaborador_id` int(11) NOT NULL,
  `formacao` varchar(255) DEFAULT NULL,
  `curso` varchar(200) DEFAULT NULL,
  `instituicao` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`formacao_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

/*Data for the table `formacao` */

insert  into `formacao`(`formacao_id`,`colaborador_id`,`formacao`,`curso`,`instituicao`) values (41,32,'formacao6','programador php','etacursos'),(28,23,'formacao2','3453453454','345345345345345'),(35,30,'formacao2','3453453454','345345345345345'),(36,31,'formacao2','3453453454','345345345345345'),(37,32,'formacao1','javaScript','sao cursos'),(42,36,'formacao3','3453453454354','3453453453454');

/*Table structure for table `selectcampos` */

DROP TABLE IF EXISTS `selectcampos`;

CREATE TABLE `selectcampos` (
  `selectCampos_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipoSelect` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  PRIMARY KEY (`selectCampos_id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

/*Data for the table `selectcampos` */

insert  into `selectcampos`(`selectCampos_id`,`tipoSelect`,`descricao`) values (1,'cargoPretendido','cargoPretendido1'),(2,'cargoPretendido','cargoPretendido2'),(3,'cargoPretendido','cargoPretendido3'),(4,'cargoPretendido','cargoPretendido4'),(5,'cargoPretendido','cargoPretendido5'),(6,'cargoPretendido','cargoPretendido6'),(7,'cargoPretendido','cargoPretendido7'),(8,'estadoCivil','estadoCivil1'),(9,'estadoCivil','estadoCivil2'),(10,'estadoCivil','estadoCivil3'),(11,'estadoCivil','estadoCivil4'),(12,'estadoCivil','estadoCivil5'),(13,'estadoCivil','estadoCivil6'),(14,'estadoCivil','estadoCivil7'),(15,'formacao','formacao1'),(16,'formacao','formacao2'),(17,'formacao','formacao3'),(18,'formacao','formacao4'),(19,'formacao','formacao5'),(20,'formacao','formacao6'),(21,'formacao','formacao7'),(22,'prenetcaoSalarial','prenetcaoSalarial1'),(23,'prenetcaoSalarial','prenetcaoSalarial2'),(24,'prenetcaoSalarial','prenetcaoSalarial3'),(25,'prenetcaoSalarial','prenetcaoSalarial4'),(26,'prenetcaoSalarial','prenetcaoSalarial5'),(27,'prenetcaoSalarial','prenetcaoSalarial6'),(28,'prenetcaoSalarial','prenetcaoSalarial7'),(29,'sexo','sexo1'),(30,'sexo','sexo2'),(31,'sexo','sexo3'),(32,'sexo','sexo4'),(33,'sexo','sexo5'),(34,'sexo','sexo6'),(35,'sexo','sexo7'),(36,'filhos','filhos1'),(37,'filhos','filhos2'),(38,'filhos','filhos3'),(39,'filhos','filhos4'),(40,'filhos','filhos5'),(41,'filhos','filhos6'),(42,'filhos','filhos7'),(43,'categoria','categoria1'),(44,'categoria','categoria2'),(45,'categoria','categoria3'),(46,'categoria','categoria4'),(47,'categoria','categoria5'),(48,'categoria','categoria6'),(49,'categoria','categoria7'),(50,'motivo','motivo1'),(51,'motivo','motivo2'),(52,'motivo','motivo3'),(53,'motivo','motivo4'),(54,'motivo','motivo5'),(55,'motivo','motivo6'),(56,'motivo','motivo7');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
