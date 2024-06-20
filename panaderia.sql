drop database panaderia;

CREATE DATABASE panaderia;

-- Usar la base de datos
USE panaderia;

-- Tabla para los libros
CREATE TABLE pan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    cantidad INT DEFAULT 0,
    descripcion varchar(255)

);

-- Tabla para los usuarios
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(255),
    telefono VARCHAR(20)
);

-- Tabla para los préstamos
CREATE TABLE pedidos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    id_pan INT,
    cantidad int,
    fecha_pedido DATE,
    tipo VARCHAR (240),
    FOREIGN KEY (id_pan) REFERENCES pan(id),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id)
);

INSERT INTO pedidos (cantidad, tipo)
VALUES (0, 'andaluza');

INSERT INTO pedidos (cantidad, tipo)
VALUES (0, 'integral');

INSERT INTO pedidos (cantidad, tipo)
VALUES (0, 'chato');