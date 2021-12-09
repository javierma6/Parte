
drop database if exists parteconducta;
create database if not exists parteconducta;
USE parteconducta;
/* 
Tabla alumno, contiene el nombre y apellidos de su tutor legal, 
codigo postal, ciudad y calle en la que vive. 
*/
CREATE TABLE alumno(
id int primary key auto_increment,
nombrePadre varchar(20) not null,
apellidosPadre VARCHAR(40) NOT NULL,
cp int NOT NULL,
ciudad VARCHAR(50) NOT NULL,
calle varchar(50) not null
); 
/* 
Tabla parte, contiene el nombre del alumno,
el motivo por el cuál se realiza el parte de buena conducta,
la fecha de quedada con el tutor legal y el curso en el que se encuentra el alumno. 
*/
CREATE TABLE parte(
id int primary key auto_increment,
nombreAlumno varchar(20) not null,
motivo varchar(40) not null,
fechaQuedada date not null, 
curso VARCHAR(50) NOT NULL
); 

/* 
Tabla profesor, contiene su nombre y apellidos, firma y asignatura
*/

create table profesor(
id int primary key auto_increment,
nombre varchar(25) not null,
firmaProfesor varchar(25) not null,
asignatura varchar(25) not null
);
/* 
Insert de alumno en las tablas
*/
INSERT INTO alumno 
VALUES 
('Javier','Moreno arias','10310','635177194','Talayuela','La Hondonera'),
('Pablo','Paniagua ','10300','635177784','Navalmoral de la Mata','Avenida');
/* 
Insert de un parte en las tablas
*/
INSERT INTO parte
VALUES 
('Javier','2ºDAW','Buen comportamiento'),
('Pablo','2ºDAW','Ha hecho los deberes');
/* 
Insert de profesor en las tablas
*/
INSERT INTO profesor 
VALUES 
('Luis',' Arias','firma','Desarrolo web'),
('Camacho','Moreno','firma','Diseño web');
