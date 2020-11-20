-- creación de la base de datos
create database ohana;
use ohana;
-- creación de la tabla de registros
create table usuarios(
    -- creación de las columnas
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR (255) NOT NULL,
    password VARCHAR (255) NOT NULL
)Engine InnoDB default charset=latin1;