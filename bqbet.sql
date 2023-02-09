# Host: localhost:3399  (Version 5.5.5-10.4.22-MariaDB)
# Date: 2022-11-07 08:44:56
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "cadastros"
#

DROP TABLE IF EXISTS `cadastros`;
CREATE TABLE `cadastros` (
  `ra` varchar(45) NOT NULL,
  `bra` int(2) DEFAULT NULL,
  `ser` int(2) DEFAULT NULL,
  `impedimento` int(2) DEFAULT NULL,
  `cartao` int(2) DEFAULT NULL,
  `falta` int(2) DEFAULT NULL,
  PRIMARY KEY (`ra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "cadastros"
#

