CREATE DATABASE tienda_master;
USE tienda_master;

CREATE TABLE usuarios(
id 			int(255) auto_increment not null, 
nombre		varchar(100) not null,
apellidos   varchar(255),
email		varchar(255) not null,
password    varchar(300),
rol			varchar(20),
imagen		varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE = InnoDb;

INSERT INTO usuarios VALUES(NULL, 'Admin','Admin','admin@admin.com','password','admin',null);

CREATE TABLE categorias(
id 			int(255) auto_increment not null, 
nombre		varchar(100) not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
)ENGINE=InnoDb;

INSERT INTO categorias VALUES(null, 'Manga corta');
INSERT INTO categorias VALUES(null, 'Manga Larga');
INSERT INTO categorias VALUES(null, 'Sudadera');

CREATE TABLE productos(
id 			int(255) auto_increment not null, 
categoria_id int(255) not null,
nombre		varchar(100) not null,
descripcion text,
precio 		float(100,2) not null,
stock		int(255) not null,
oferta		varchar(2),
fecha 		date not null,
imagen 		vachar(255),
CONSTRAINT pk_categorias PRIMARY KEY(id),
CONSTRAINT fk_producto_categoria FOREIGN KEY(categoria_id) references categorias(id)
)ENGINE=InnoDb;


CREATE TABLE pedidos(
id 			int(255) auto_increment not null, 
usuario_id  int(255) not null,
provincia	varchar(100) not null,
localidad   varchar(100),
direccion 	varchar(255) not null,
coste		float(200,2) not null,
estado		varchar(20) not null,
fecha 		date, 
hora 		time,
CONSTRAINT pk_pedidos PRIMARY KEY(id),
CONSTRAINT fk_pedidos_usuario FOREIGN KEY(usuario_id) references usuarios(id)
)ENGINE=InnoDb;

CREATE TABLE lineas_pedidos(
id 		int(255) auto_increment not null,
pedido_id int(255) not null,
producto_id int(255) not null,
CONSTRAINT pk_lineas_pedidos PRIMARY KEY(id),
CONSTRAINT fk_linea_pedido FOREIGN KEY(pedido_id) references pedidos(id),
CONSTRAINT fk_linea_producto FOREIGN KEY(producto_id) references productos(id)
)ENGINE=InnoDb;