-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.28-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para torogoz
CREATE DATABASE IF NOT EXISTS `torogoz` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `torogoz`;

-- Volcando estructura para tabla torogoz.carrito
CREATE TABLE IF NOT EXISTS `carrito` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PAQUETE` int(11) NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_PAQUETE` (`ID_PAQUETE`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`ID_PAQUETE`) REFERENCES `paquetes` (`ID`),
  CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla torogoz.carrito: ~0 rows (aproximadamente)

-- Volcando estructura para tabla torogoz.estados
CREATE TABLE IF NOT EXISTS `estados` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(600) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla torogoz.estados: ~2 rows (aproximadamente)
INSERT INTO `estados` (`ID`, `NOMBRE`) VALUES
	(1, 'Activo'),
	(2, 'inactivo');

-- Volcando estructura para tabla torogoz.factura
CREATE TABLE IF NOT EXISTS `factura` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_PAQUETE` int(11) NOT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  KEY `ID_PAQUETE` (`ID_PAQUETE`),
  KEY `ID_ESTADO` (`ID_ESTADO`),
  CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID`),
  CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`ID_PAQUETE`) REFERENCES `paquetes` (`ID`),
  CONSTRAINT `factura_ibfk_3` FOREIGN KEY (`ID_ESTADO`) REFERENCES `estados` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla torogoz.factura: ~0 rows (aproximadamente)

-- Volcando estructura para tabla torogoz.imagenes
CREATE TABLE IF NOT EXISTS `imagenes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(900) NOT NULL,
  `ID_PAQUETE` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_PAQUETE` (`ID_PAQUETE`),
  CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`ID_PAQUETE`) REFERENCES `paquetes` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla torogoz.imagenes: ~17 rows (aproximadamente)
INSERT INTO `imagenes` (`ID`, `NOMBRE`, `ID_PAQUETE`) VALUES
	(38, 'img/presentacion.jpg', 13),
	(39, 'img/alegria2.jpg', 13),
	(40, 'img/alegria1.jpg', 13),
	(41, 'img/Alegria.jpeg', 13),
	(42, 'img/3.jpg', 13),
	(43, 'img/laguna1.jpg', 15),
	(44, 'img/laguna2.jpg', 15),
	(45, 'img/laguna3.jpg', 15),
	(46, 'img/laguna4.jpg', 15),
	(47, 'img/mirador.jpg', 16),
	(48, 'img/imagen.jpg', 16),
	(49, 'img/mirador-de-cristal.jpg', 16),
	(50, 'img/miradorparadise2.jpg', 17),
	(51, 'img/miradorparadise2.jpg', 17),
	(52, 'img/paradise4.jpg', 17),
	(53, 'img/para3.jpg', 17);

-- Volcando estructura para tabla torogoz.pago
CREATE TABLE IF NOT EXISTS `pago` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(600) NOT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_ESTADO` (`ID_ESTADO`),
  CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`ID_ESTADO`) REFERENCES `estados` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla torogoz.pago: ~0 rows (aproximadamente)

-- Volcando estructura para tabla torogoz.paquetes
CREATE TABLE IF NOT EXISTS `paquetes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(600) NOT NULL,
  `DESCRIPCION` varchar(1500) NOT NULL,
  `IMAGEN` varchar(700) NOT NULL,
  `DIRECCION_MAPA` varchar(1000) NOT NULL,
  `VIDEO` varchar(600) NOT NULL,
  `PRECIO` decimal(4,2) NOT NULL,
  `ID_ESTADOS` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_ESTADOS` (`ID_ESTADOS`),
  CONSTRAINT `paquetes_ibfk_1` FOREIGN KEY (`ID_ESTADOS`) REFERENCES `estados` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla torogoz.paquetes: ~4 rows (aproximadamente)
INSERT INTO `paquetes` (`ID`, `NOMBRE`, `DESCRIPCION`, `IMAGEN`, `DIRECCION_MAPA`, `VIDEO`, `PRECIO`, `ID_ESTADOS`) VALUES
	(13, 'Alegria', 'Es un rincón mágico, que alberga uno de los mejores cafés del país que podrás degustar en establecimientos con encantos únicos en su infraestructura y decoración.\r\n\r\nSiendo una ciudad pintoresca, con clima templado y muchas bellezas naturales, Alegría se convierte en una estación contemplativa que no debes perderte. El trayecto hacia este municipio es una antesala de su riqueza natural que esconde con sus imponentes países de carretera, que te robarán más de un suspiro.\r\n\r\nAlegría es cuna de grandes personajes de la historia de El Salvador, entre ellos el maestro y escritor salvadoreño Alberto Masferrer (1868-1932), uno de los personajes emblemáticos de la cultura nacional, ya que también se desempeñó como maestro, filósofo, periodista, ensayista, poeta y político. Otro personaje notable que se vincula con el pueblo es Manuel Enrique Araujo, presidente de El Salvador de 1911 a 1913, quien fue bautizado en la iglesia del entonces Tecapa, el 22 de octubre de 1865.\r\n\r\nEl fervor religioso caracteriza a esta ciudad, que cuenta con la iglesia colonial San Pedro Apóstol. Y si decides ir en Semana Santa la experiencia será aún mejor, porque las principales calles se inundan con alfombras hechas de aserrín y flores que adornan el paso de Jesús en su Santo Entierro.', 'img/presentacion.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7758.899139131156!2d-88.4880495!3d13.5079795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f7b4a8fefe47f85%3A0xf2aedcb5e92ebca5!2zQWxlZ3LDrWE!5e0!3m2!1ses-419!2ssv!4v1691076701717!5m2!1ses-419!2ssv" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', 'video/video alegria.mp4', 25.00, 1),
	(15, 'Laguna de alegria', 'Disfruta de un ambiente apacible y fresco, cubierta por una asombrosa neblina casi todo el año y un panorama que te impresionará.\r\n\r\nEsta laguna conocida como “La Esmeralda de América”, de aguas verdosas debido a su alto contenido de azufre y un clima agradable de montaña, es una opción turística en el oriente de El Salvador para los amantes de la naturaleza y de la aventura.\r\n\r\nPuedes darte un paseo caminando alrededor de esta laguna y apreciar los encantos que rodena sus aguas, además, muchas personas prefieren darse un chapuzón y cubrirse de azufre por considerarse medicinal.\r\n', 'img/laguna1.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7759.388762755955!2d-88.50276159492658!3d13.492920281826844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f7b4a6200782b19%3A0xc210f8638a5d68b8!2sLaguna%20de%20Alegria!5e0!3m2!1ses-419!2ssv!4v1691078256267!5m2!1ses-419!2ssv" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', 'video/Laguna 2.webm', 12.00, 1),
	(16, 'Mirador de Cristal', 'El Mirador de Cristal es una atracción turística ubicada en el municipio de Alegría, en el departamento de Usulután. Este mirador se encuentra en la cima de una montaña y ofrece impresionantes vistas panorámicas de los alrededores, incluyendo la laguna de Alegría y el volcán de San Miguel.\r\nLa principal característica distintiva de este mirador es una plataforma de observación construida con piso de vidrio. Esto permite a los visitantes tener la sensación de caminar sobre el vacío mientras disfrutan de la vista desde lo alto. Es una experiencia emocionante para aquellos que no temen a las alturas.\r\nAdemás del mirador, Alegría es conocida por su entorno natural y su clima fresco. El área circundante ofrece oportunidades para explorar senderos naturales, visitar cascadas y disfrutar de la belleza escénica de la región.\r\n', 'img/mirador-de-cristal.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.457824372652!2d-88.48628089054682!3d13.507471986804582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f7b4ba9dbd5b007%3A0xe3028adc507300d8!2sMirador%20de%20cristal!5e0!3m2!1ses-419!2ssv!4v1691078449083!5m2!1ses-419!2ssv" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', 'video/Mirador de Cristal.webm', 15.00, 1),
	(17, 'Mirador paradise', 'Como su nombre indica, Mirador Paradise ofrece asombrosas vistas panorámicas del valle y el entorno del bosque tropical.\r\nAdemás de las increíbles vistas, hay mucho que hacer en Mirador Paradise, desde caminar por las pintorescas laderas, visitar el vivero de orquídeas y otras plantas tropicales y comprender la forma en que se cuidan en El Salvador, degustar la deliciosa cocina tradicional, montar a caballo o incluso disfrutar de un tradicional baño de Temescal.\r\nMirador Paradise es un bienvenido respiro del bullicio de la ciudad, y si tienes la suerte de ver el atardecer a tiempo, te espera un regalo impresionante.', 'img/miradorparadise1.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.9903887772075!2d-88.53934319054761!3d13.47468978683419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f7b4b7eb21e0239%3A0x8d6f7e123c1347e9!2sMirador%20Paradise%20San%20Lorenzo!5e0!3m2!1ses-419!2ssv!4v1691079538418!5m2!1ses-419!2ssv" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', 'video/y2mate.com - La Mano gigante de El Salvador vista desde dron Mirador Paradise San Lorenzo en Berlin Usulutan_360p.mp4', 12.00, 1);

-- Volcando estructura para tabla torogoz.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla torogoz.roles: ~2 rows (aproximadamente)
INSERT INTO `roles` (`ID`, `NOMBRE`) VALUES
	(1, 'Cliente'),
	(2, 'Administrador');

-- Volcando estructura para tabla torogoz.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(300) NOT NULL,
  `PASSWORD` varchar(250) NOT NULL,
  `CORREO` varchar(500) NOT NULL,
  `TELEFONO` varchar(8) NOT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  `ID_ROLES` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_ESTADO` (`ID_ESTADO`),
  KEY `fk_usuarios_roles` (`ID_ROLES`),
  CONSTRAINT `fk_usuarios_roles` FOREIGN KEY (`ID_ROLES`) REFERENCES `roles` (`ID`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`ID_ESTADO`) REFERENCES `estados` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla torogoz.usuario: ~0 rows (aproximadamente)
INSERT INTO `usuario` (`ID`, `USERNAME`, `PASSWORD`, `CORREO`, `TELEFONO`, `ID_ESTADO`, `ID_ROLES`) VALUES
	(3, 'Callmeneos', 'Samara56', 'Carlosgeek503@gmail.com', '71680706', 1, 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
