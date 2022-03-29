create database `crud`;

use `crud`;

CREATE TABLE `admin` (
  `id` int(9) NOT NULL auto_increment,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL,  
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `telefono` int NOT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  CONSTRAINT FK_admin_1
  FOREIGN KEY (login_id) REFERENCES admin(id)
  ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;
