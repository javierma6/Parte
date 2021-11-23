
create database if not exists parteconducta;
USE parteconducta;

CREATE TABLE alumno(
nombre varchar(20) PRIMARY KEY,
apellidos VARCHAR(40) NOT NULL,
cp int(20) NOT NULL,
telefono VARCHAR(11) NOT NULL,
ciudad VARCHAR(50) NOT NULL
); 

CREATE TABLE parte(
nombreAlumno varchar(20) PRIMARY KEY,
curso VARCHAR(50) NOT NULL,
motivo varchar(300) NOT NULL
); 


CREATE TABLE contacto (
fechaQuedada date not null,
horaQuedada int(5) not null,
profesor varchar(50) not null
); 

INSERT INTO alumno 
VALUES 
('Javier','Moreno arias','10310','635177194','Talayuela');
INSERT INTO parte 
VALUES 
('Javier','2ºDAW','Mal comportamiento');
INSERT INTO contacto 
VALUES 
('24-12-2021','12','Luis');
