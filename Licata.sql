--
DROP DATABASE IF EXISTS `mailing`;
--

CREATE DATABASE IF NOT EXISTS `mailing`;
--
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "-03:00";
--
DROP TABLE IF EXISTS mailing.`usuario`;
DROP TABLE IF EXISTS mailing.`aplicacion`;
DROP TABLE IF EXISTS mailing.`victima`;
DROP TABLE IF EXISTS mailing.`token`;



/*  TABLA DE USUARIOS   */

CREATE TABLE IF NOT EXISTS mailing.`usuario` (
  `usu_usuario`        varchar(50)  NOT NULL,
  `usu_password`       varchar(50) NOT NULL,
  `usu_email`          varchar(50) NOT NULL,
  `usu_ucreacion`      varchar(50)  NOT NULL,
  `usu_fhcreacion`     date         NOT NULL,
  `usu_umodif`         varchar(50)  NOT NULL,
  `usu_fhmodif`        timestamp    NOT NULL,
  PRIMARY KEY (`usu_usuario`)
);
CREATE FULLTEXT INDEX idx_usuario ON mailing.`usuario`(`usu_usuario`);

INSERT INTO mailing.`usuario` 
(`usu_usuario`,`usu_password`,`usu_email`,`usu_ucreacion`,`usu_fhcreacion`,`usu_umodif`,`usu_fhmodif`)
VALUES 
('dcastellini',MD5('1042'),'dcastellini89@gmail.com',user(),SYSDATE(),user(),SYSDATE());

CREATE TABLE IF NOT EXISTS mailing.`victima` (
  `vic_email`          varchar(50)   NOT NULL,
  `vic_nombre`         varchar(50)      NULL,
  `vic_apellido`       varchar(50)      NULL,
  `vic_apodo`          varchar(50)      NULL,
  `vic_localizacion`   varchar(50)      NULL,
  `vic_ucreacion`      varchar(50)   NOT NULL,
  `vic_fhcreacion`     date          NOT NULL,
  `vic_umodif`         varchar(50)   NOT NULL,
  `vic_fhmodif`        timestamp     NOT NULL,
  PRIMARY KEY (`vic_email`)
);

CREATE FULLTEXT INDEX idx_email ON mailing.`victima`(`vic_email`);


CREATE TABLE IF NOT EXISTS mailing.`aplicacion` (
  `app_id`                int(15)       NOT NULL AUTO_INCREMENT,
  `app_aplicacion`        varchar(50)  NOT NULL,
  `app_email`             varchar(50)  NOT NULL,
  `app_html`              varchar(3200) NOT NULL,
  `app_ucreacion`         varchar(50)   NOT NULL,
  `app_fhcreacion`        date          NOT NULL,
  `app_umodif`            varchar(50)   NOT NULL,
  `app_fhmodif`           timestamp     NOT NULL,
  PRIMARY KEY (`app_id`),
  UNIQUE(`app_id`)
);

CREATE INDEX idx_app_id ON mailing.`aplicacion`(`app_id`);

CREATE TABLE IF NOT EXISTS mailing.`historial` (
  `his_id`                int(15)       NOT NULL AUTO_INCREMENT,
  `his_usuario`           varchar(50)  NOT NULL,
  `his_email`             varchar(50) NOT NULL,
  `his_aplicacion`        varchar(200)  NOT NULL,
  `his_mensaje`           varchar(3200)  NOT NULL,
  `his_ucreacion`         varchar(50)   NOT NULL,
  `his_fhcreacion`        date          NOT NULL,
  `his_umodif`            varchar(50)   NOT NULL,
  `his_fhmodif`           timestamp     NOT NULL,
  PRIMARY KEY (`his_id`)
);

CREATE INDEX his_id_idx ON mailing.`historial`(`his_id`);

CREATE TABLE IF NOT EXISTS mailing.`token` (
  `tok_id`                varchar(500)  NOT NULL,
  `tok_app_id`            int(15)       NOT NULL,
  `tok_usu_usuario`       varchar(50)   NOT NULL,
  `tok_vic_email`         varchar(50)   NOT NULL,
  `tok_ucreacion`         varchar(50)   NOT NULL,
  `tok_fhcreacion`        date          NOT NULL,
  `tok_umodif`            varchar(50)   NOT NULL,
  `tok_fhmodif`           timestamp     NOT NULL,
  PRIMARY KEY (`tok_id`),
  CONSTRAINT `tok_app_id_fk` FOREIGN KEY (`tok_app_id`)  REFERENCES `aplicacion`  (`app_id`),
  CONSTRAINT `tok_usu_usuario_fk` FOREIGN KEY (`tok_usu_usuario`)  REFERENCES `usuario`  (`usu_usuario`),
  CONSTRAINT `tok_vic_email_fk` FOREIGN KEY (`tok_vic_email`)  REFERENCES `victima`  (`vic_email`)
);

CREATE INDEX tok_id_idx ON mailing.`token`(`tok_id`);