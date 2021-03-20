CREATE DATABASE IF NOT EXISTS `framework7_api`;



CREATE TABLE IF NOT EXISTS `usuarios` (
    `id_usuario` INT NOT NULL AUTO_INCREMENT,
    `correo` VARCHAR (150) NOT NULL,
    `password` VARCHAR(250) NOT NULL,
    PRIMARY KEY (`id_usuario`)
)