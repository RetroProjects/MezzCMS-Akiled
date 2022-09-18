# Host: localhost  (Version 5.5.5-10.1.25-MariaDB)
# Date: 2022-09-18 15:01:58
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "cms_fansites"
#

CREATE TABLE `cms_fansites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `link` varchar(255) DEFAULT NULL,
  `ceo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "cms_fansites"
#

INSERT INTO `cms_fansites` VALUES (1,'Habbid','Habbid','https://google.com','Kaio');

#
# Structure for table "cms_infosindex"
#

CREATE TABLE `cms_infosindex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `information` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "cms_infosindex"
#

INSERT INTO `cms_infosindex` VALUES (1,'Nuevo Servidor 2022','Hotel nuevo y listo para recibir nuevos usuarios.','https://habboassets.com/assets/images/web-promos/10y%C4%B1l.png'),(2,'Servidor RolePlay','Servidor con varias funciones innovadoras.','https://habboassets.com/assets/images/web-promos/Voleybol-Ma%C3%A7%C4%B1-Haber-Afi%C5%9Fi.png'),(3,'Tienda Exclusiva','Â¡LoterÃ­Â­a, Badges, VIP y mÃ¡s en nuestra tienda!','https://habboassets.com/assets/images/web-promos/hero_academia_two.png'),(4,'Vacantes en el Equipo','Â¡Haz una prueba para unirte a nuestro equipo!','https://habboassets.com/assets/images/web-promos/lpromo_Jonas.png');
