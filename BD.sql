create database libreta;
use libreta;
-- un alias único que lo dará el mismo usuario, 
-- el nombre del contacto, el apellido del contacto, 
-- su dirección de domicilio, su número de celular, 
-- su correo electrónico, su fecha de nacimiento y la foto del contacto.
-- Cada uno con su respectivo tipo.

create table usuario(
	alias varchar(25),
    nombre varchar(25), 
    apellido varchar(25),
    direccion varchar(200), 
    celular varchar(10),
	correo varchar(25),
    nacimiento date, 
    rutaImagen varchar(50)
);

-- Inserting data into the usuario table
INSERT INTO usuario
VALUES 
('hermano', 'anyel', 'Diaz', 'Av quevedo', '1234567890', 'anyel.doe@example.com', '1990-01-15', 'anyel.jpg'),
('hermano', 'zoro', 'Roro', 'santo Domingo', '9876543210', 'zoro.smith@example.com', '1985-05-20', 'zoro.jpg'),
('primo', 'sanji', 'Vismo', 'Quito', '9876543210', 'sanji.smith@example.com', '1985-05-20', 'sanji.jpg');