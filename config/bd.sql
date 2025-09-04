CREATE DATABASE IF NOT EXISTS tienda_web
CHARACTER SET latin1
COLLATE latin1_spanish_ci;

use tienda_web;

CREATE USER admin_tienda IDENTIFIED BY 'C1234¡';

GRANT ALL PRIVILEGES ON tienda_web.* TO admin_tienda;

CREATE TABLE usuarios (
    id  INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario VARCHAR(25) NOT NULL,
    email VARCHAR(80) NOT NULL UNIQUE,
    contrasena VARCHAR(25) NOT NULL
)