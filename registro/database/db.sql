
CREATE DATABASE sena_db;
USE sena_db;

CREATE TABLE aprendices(
    id int(10) auto_increment not null,
    tipoDocumento varchar(255) not null, 
    numeroDocumento int(255) not null,
    nombres varchar(255) not null,
    apellidos varchar(255) not null,
    fechaNacimiento date not null,
    genero varchar (255) not null,
    telefono int(255) not null,
    direccion varchar(255) not null,
   CONSTRAINT pk_aprendices PRIMARY KEY(id)
)ENGINE=INNODB;