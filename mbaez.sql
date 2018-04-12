CREATE USER examen2;

CREATE DATABASE nombre_db WITH OWNER examen2;

GRANT ALL PRIVILEGES ON DATABASE segundoexamenbd TO examen2;

CREATE TABLE autores(
	id_autor integer NOT NULL   DEFAULT NEXTVAL(('"autores_id_autor_seq"'::text)::regclass),
	nombre varchar(50) NOT NULL,
	apaterno varchar(50) NOT NULL,
	amaterno varchar(50) NOT NULL,
	nacionalidad varchar(50) NOT NULL,
	id_libro integer NULL);

CREATE TABLE libros(
	id_libro integer NOT NULL   DEFAULT NEXTVAL(('"libros_id_libro_seq"'::text)::regclass),
	titulo varchar(110) NOT NULL,
	id_autor integer NOT NULL,
	anio_publicacion char(4) NULL);

CREATE TABLE usuarios(
	id_usuario integer NOT NULL   DEFAULT NEXTVAL(('"usuarios_id_usuario_seq"'::text)::regclass),
	nombre varchar(50) NOT NULL,
	apaterno varchar(50) NOT NULL,
	amaterno varchar(50) NOT NULL,
	usuario varchar(50) NOT NULL,
	contrasenia varchar(50) NOT NULL);

ALTER TABLE autores ADD CONSTRAINT PK_autores PRIMARY KEY (id_autor);

ALTER TABLE libros ADD CONSTRAINT PK_libros PRIMARY KEY (id_libro);

ALTER TABLE usuarios ADD CONSTRAINT PK_usuarios PRIMARY KEY (id_usuario);

ALTER TABLE autores ADD CONSTRAINT FK_autores_libros FOREIGN KEY (id_libro);

ALTER TABLE libros ADD CONSTRAINT FK_libros_autores FOREIGN KEY (id_autor) REFERENCES autores (id_autor);

CREATE SEQUENCE autores_id_autor_seq INCREMENT 1 START 1;

CREATE SEQUENCE libros_id_libro_seq INCREMENT 1 START 1;

CREATE SEQUENCE usuarios_id_usuario_seq INCREMENT 1 START 1;
