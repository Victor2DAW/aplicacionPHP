CREATE DATABASE IF NOT EXISTS inmobiliaria;
USE inmobiliaria;

-- Tabla para propiedades
CREATE TABLE IF NOT EXISTS propiedades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    ubicacion VARCHAR(255) NOT NULL,
    agente_id INT,
    FOREIGN KEY (agente_id) REFERENCES agentes(id)
);

-- Tabla para agentes inmobiliarios
CREATE TABLE IF NOT EXISTS agentes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefono VARCHAR(20)
);

