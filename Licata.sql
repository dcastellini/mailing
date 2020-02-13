--
DROP DATABASE IF EXISTS `mailing`;
--

CREATE DATABASE IF NOT EXISTS `mailing`;
--
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "-03:00";
--
DROP TABLE IF EXISTS mailing.`usuario`;



/*  TABLA DE USUARIOS   */

CREATE TABLE IF NOT EXISTS mailing.`usuario` (
  `usuario`           varchar(50)  NOT NULL,
  `password`          varchar(200) NOT NULL,
  `email`             varchar(200) NOT NULL,
  `usu_creacion`      varchar(50)  NOT NULL,
  `fhcreacion`        date         NOT NULL,
  `usu_modif`         varchar(50)  NOT NULL,
  `fhmodif`           timestamp    NOT NULL,
  PRIMARY KEY (`usuario`)
);
CREATE FULLTEXT INDEX idx_usuario ON mailing.`usuario`(`usuario`);

INSERT INTO mailing.`usuario` 
(`usuario`,`password`,`email`,`usu_creacion`,`fhcreacion`,`usu_modif`,`fhmodif`)
VALUES 
('dcastellini',MD5('1042'),'dcastellini89@gmail.com',user(),SYSDATE(),user(),SYSDATE());

