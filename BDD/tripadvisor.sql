/* USE master;
GO
 */
CREATE DATABASE tripadvisor;


USE tripadvisor;


/* Tablas */

/* Tabla usuarios  */
CREATE TABLE usuario
(
    id_usuario int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario varchar(100) NOT NULL UNIQUE,
    contra varchar(256)
);


CREATE TABLE cliente
(
    id_cliente int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(100),
    apellido varchar(100),
    correo varchar(500) NOT NULL UNIQUE,
    telefono varchar(9)  UNIQUE,
    foto varchar(255),
    id_rol int(11),
    confirmacion BOOLEAN NOT NULL,
    token varchar(255) NOT NULL
);


/* Tabla rol usuarios  */
CREATE TABLE rol_usuario 
(
    id_rol int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    rol varchar(20) NOT NULL
);


/* Tabla   */
CREATE TABLE restaurante
(
    id_restaurante int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_cliente int(11) NOT NULL,
    nombre_restaurante varchar(50) NOT NULL,
    email varchar(500) NOT NULL UNIQUE,
    direccion varchar(100) NOT NULL,
    descripcion varchar(500) NOT NULL,
    id_tipo_restaurante int(11) NOT NULL,
    confirmar_restaurante BOOLEAN NOT NULL

);


CREATE TABLE telefonos_restaurantes
(
    id_telefono int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_restaurante int(11) NOT NULL,
    telefono varchar(11) NOT NULL,
    extension varchar(25) NOT NULL
);


CREATE TABLE tipo_restaurante
(
    id_tipo int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    tipo varchar(25) NOT NULL
);


CREATE TABLE foto_restaurante
(
    id_foto int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_restaurante int(11) NOT NULL,
    foto varchar(25) NOT NULL
);


CREATE TABLE comentarios
(
    id_comentario int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_cliente int(11) NOT NULL,
    id_restaurante int(11) NOT NULL,
    comentarios varchar(255) NOT NULL
);

CREATE TABLE puntuacion
(
    id_puntaje int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_cliente int(11) NOT NULL,
    id_restaurante int(11) NOT NULL,
    puntaje int(5) NOT NULL
);

CREATE TABLE horario_restaurante
(
    id_horario int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_restaurante int(11) NOT NULL,
    dias varchar(10) NOT NULL,
    hora time NOT NULL

);


CREATE TABLE redes_sociales_restaurante
(
    id_redes_sociales int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_restaurante int(11) NOT NULL,
    enlace varchar(100) NOT NULL,
    id_tipo_red_social int(11) NOT NULL
);

CREATE TABLE tipo_redes_sociales
(
    id_tipo int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_tipo varchar(25) NOT NULL,
    nombre_dominio varchar(50) NOT NULL
);


CREATE TABLE usuarios_google
(
    id_usuario_google int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email varchar(128) NOT NULL UNIQUE,
    nombre varchar(128) NOT NULL,
    foto varchar(255)
);


ALTER TABLE restaurante
ADD CONSTRAINT FK_id_cliente
FOREIGN KEY (id_cliente) REFERENCES cliente (id_cliente);

ALTER TABLE restaurante
ADD CONSTRAINT FK_tipo_restaurante
FOREIGN KEY (id_tipo_restaurante) REFERENCES tipo_restaurante (id_tipo);

ALTER TABLE telefonos_restaurantes
ADD CONSTRAINT FK_id_restaurante
FOREIGN KEY (id_restaurante) REFERENCES restaurante(id_restaurante);


ALTER TABLE cliente
ADD CONSTRAINT FK_id_role
FOREIGN KEY (id_rol) REFERENCES rol_usuario(id_rol);

ALTER TABLE foto_restaurante
ADD CONSTRAINT FK_id_restaurante_foto
FOREIGN KEY (id_restaurante) REFERENCES restaurante(id_restaurante);

ALTER TABLE comentarios
ADD CONSTRAINT FK_id_cliente_comentario
FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente);

ALTER TABLE comentarios
ADD CONSTRAINT FK_id_restaurante_comentario
FOREIGN KEY (id_restaurante) REFERENCES restaurante(id_restaurante);

ALTER TABLE puntuacion
ADD CONSTRAINT FK_id_cliente_puntuacion
FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente);

ALTER TABLE puntuacion
ADD CONSTRAINT FK_id_restaurante_puntuacion
FOREIGN KEY (id_restaurante) REFERENCES restaurante(id_restaurante);

ALTER TABLE horario_restaurante
ADD CONSTRAINT FK_id_restaurante_horario
FOREIGN KEY (id_restaurante) REFERENCES restaurante(id_restaurante);

ALTER TABLE redes_sociales_restaurante
ADD CONSTRAINT FK_id_restaurante_red_social
FOREIGN KEY (id_restaurante) REFERENCES restaurante(id_restaurante);

ALTER TABLE redes_sociales_restaurante
ADD CONSTRAINT FK_id_tipo_red_social
FOREIGN KEY (id_tipo_red_social) REFERENCES tipo_redes_sociales(id_tipo);