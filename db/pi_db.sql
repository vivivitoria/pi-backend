CREATE DATABASE IF NOT EXISTS pi;


CREATE TABLE IF NOT EXISTS usuario (
 user_id     int (10) NOT NULL AUTO_INCREMENT ,
 user_nome   varchar(255) NOT NULL ,
 user_email  varchar(255) NOT NULL ,
 user_senha  varchar(255) NOT NULL ,
 PRIMARY KEY ( `user_id`)
);

-- ************************************** `livro`
CREATE TABLE IF NOT EXISTS `livro` (
 `livro_id`       int(10) NOT NULL AUTO_INCREMENT ,
 `user_id`     int(10) NOT NULL ,
 `livro_nome`     varchar(255) NOT NULL ,
 `livro_genero`   varchar(255) NOT NULL ,
 `livro_ano` int(4) ,
 `livro_autor`    varchar(255) NOT NULL ,
PRIMARY KEY (`livro_id`, `user_id`),
KEY `FK_60` (`user_id`),
CONSTRAINT `FK_58` FOREIGN KEY `FK_60` (`user_id`) REFERENCES `usuario` (`user_id`)
);















