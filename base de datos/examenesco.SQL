/*
Created: 16/05/2019
Modified: 16/05/2019
Model: MySQL 5.0
Database: MySQL 5.0
*/


-- Create tables section -------------------------------------------------

-- Table alumnos

CREATE TABLE `alumnos`
(
  `idmateria` Varchar(20) NOT NULL,
  `idgrupo` Varchar(20) NOT NULL,
  `matricula` Int NOT NULL,
  `nombre` Char(20),
  `calificacion` Char(20),
  `password` Char(20)
)
;

ALTER TABLE `alumnos` ADD PRIMARY KEY (`idmateria`,`idgrupo`,`matricula`)
;

-- Table profesor

CREATE TABLE `profesor`
(
  `idprofesor` Varchar(20) NOT NULL,
  `nombre` Varchar(50),
  `password` Varchar(20)
)
;

ALTER TABLE `profesor` ADD PRIMARY KEY (`idprofesor`)
;

-- Table materia

CREATE TABLE `materia`
(
  `idmateria` Varchar(20) NOT NULL,
  `nombre` Char(20)
)
;

ALTER TABLE `materia` ADD PRIMARY KEY (`idmateria`)
;

-- Table profesormateria

CREATE TABLE `profesormateria`
(
  `idprofesor` Varchar(20) NOT NULL,
  `idmateria` Varchar(20) NOT NULL,
  `idprofesormateria` Int NOT NULL
)
;

ALTER TABLE `profesormateria` ADD PRIMARY KEY (`idprofesor`,`idmateria`,`idprofesormateria`)
;

-- Table grupo

CREATE TABLE `grupo`
(
  `idmateria` Varchar(20) NOT NULL,
  `idgrupo` Varchar(20) NOT NULL
)
;

ALTER TABLE `grupo` ADD PRIMARY KEY (`idmateria`,`idgrupo`)
;

-- Table cargaprofesor

CREATE TABLE `cargaprofesor`
(
  `idprofesor` Varchar(20) NOT NULL,
  `idmateria` Varchar(20) NOT NULL,
  `idgrupo` Varchar(20) NOT NULL
)
;

ALTER TABLE `cargaprofesor` ADD PRIMARY KEY (`idprofesor`,`idmateria`,`idgrupo`)
;

-- Create foreign keys (relationships) section ------------------------------------------------- 


ALTER TABLE `alumnos` ADD CONSTRAINT `Relationship4` FOREIGN KEY (`idmateria`, `idgrupo`) REFERENCES `grupo` (`idmateria`, `idgrupo`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `grupo` ADD CONSTRAINT `Relationship3` FOREIGN KEY (`idmateria`) REFERENCES `materia` (`idmateria`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `profesormateria` ADD CONSTRAINT `Relationship2` FOREIGN KEY (`idmateria`) REFERENCES `materia` (`idmateria`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `profesormateria` ADD CONSTRAINT `Relationship1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `cargaprofesor` ADD CONSTRAINT `Relationship19` FOREIGN KEY (`idmateria`, `idgrupo`) REFERENCES `grupo` (`idmateria`, `idgrupo`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `cargaprofesor` ADD CONSTRAINT `Relationship18` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


