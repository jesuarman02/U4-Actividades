DROP DATABASE IF EXISTS plasticos;

CREATE DATABASE IF NOT EXISTS plasticos;

USE plasticos;

CREATE TABLE IF NOT EXISTS empleados (
	Matricula INT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(100) NOT NULL,
    Apellido_Paterno VARCHAR(100) NOT NULL,
    apellido_Materno VARCHAR(100) NOT NULL,
    Telefono VARCHAR(100) NOT NULL,
    Correo VARCHAR(100) NOT NULL,
    Ocupacion VARCHAR(100) NOT NULL,
    PRIMARY KEY (Matricula)
);
CREATE TABLE IF NOT EXISTS departamentos (
    id_departamento INT PRIMARY KEY,
    nombre_departamento VARCHAR(255)
)