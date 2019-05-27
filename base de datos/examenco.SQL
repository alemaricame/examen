/*
Created: 08/05/2019
Modified: 08/05/2019
Model: MySQL 5.0
Database: MySQL 5.0
*/


-- Create tables section -------------------------------------------------

-- Table alumnos

CREATE TABLE `alumnos`
(
  `idmateria` Char(20) NOT NULL,
  `idgrupo` Char(20) NOT NULL,
  `matricula` Int NOT NULL,
  `nombre` Char(20),
  `calificacion` Char(20)
)
;

ALTER TABLE `alumnos` ADD PRIMARY KEY (`idmateria`,`idgrupo`,`matricula`)
;

-- Table profesor

CREATE TABLE `profesor`
(
  `idprofesor` Int NOT NULL AUTO_INCREMENT,
  `nombre` Char(50),
  PRIMARY KEY (`idprofesor`)
)
;

-- Table materia

CREATE TABLE `materia`
(
  `idmateria` Char(20) NOT NULL AUTO_INCREMENT,
  `nombre` Char(20),
  PRIMARY KEY (`idmateria`)
)
;

-- Table profesor-materia

CREATE TABLE `profesor-materia`
(
  `idprofesor` Int NOT NULL,
  `idmateria` Char(20) NOT NULL,
  `idprofesormateria` Int NOT NULL AUTO_INCREMENT
)
;

ALTER TABLE `profesor-materia` ADD PRIMARY KEY (`idprofesor`,`idmateria`,`idprofesormateria`)
;

-- Table grupo

CREATE TABLE `grupo`
(
  `idmateria` Char(20) NOT NULL,
  `idgrupo` Char(20) NOT NULL
)
;

ALTER TABLE `grupo` ADD PRIMARY KEY (`idmateria`,`idgrupo`)
;

-- Table examen

CREATE TABLE `examen`
(
  `idexamen` Int NOT NULL AUTO_INCREMENT,
  `idmateria` Char(20) NOT NULL,
  `nombre` Char(20),
  PRIMARY KEY (`idexamen`,`idmateria`)
)
;

-- Table preguntasyrespuestas

CREATE TABLE `preguntasyrespuestas`
(
  `idpregunta` Char(20) NOT NULL,
  `pregunta` Char(20),
  `opc1` Char(20),
  `opc2` Char(20),
  `opc3` Char(20),
  `respuesta` Char(20)
)
;

ALTER TABLE `preguntasyrespuestas` ADD PRIMARY KEY (`idpregunta`)
;

-- Table asignaexam

CREATE TABLE `asignaexam`
(
  `idexamen` Int NOT NULL,
  `idmateria` Char(20) NOT NULL,
  `idpregunta` Char(20) NOT NULL,
  `idasignaexamen` Int NOT NULL AUTO_INCREMENT
)
;

ALTER TABLE `asignaexam` ADD PRIMARY KEY (`idexamen`,`idmateria`,`idpregunta`,`idasignaexamen`)
;

-- Table Entity9

CREATE TABLE `Entity9`
(
)
;

-- Table Entity10

CREATE TABLE `Entity10`
(
  `idexamen` Int NOT NULL,
  `idmateria` Char(20) NOT NULL,
  `idmateria` Char(20) NOT NULL,
  `idgrupo` Char(20) NOT NULL,
  `matricula` Int NOT NULL
)
;

ALTER TABLE `Entity10` ADD PRIMARY KEY (`idexamen`,`idmateria`,`idmateria`,`idgrupo`,`matricula`)
;

-- Table resultados

CREATE TABLE `resultados`
(
  `idresultado` Int NOT NULL AUTO_INCREMENT,
  `idpregunta` Char(20) NOT NULL,
  `idmateria` Char(20) NOT NULL,
  `idgrupo` Char(20) NOT NULL,
  `matricula` Int NOT NULL,
  PRIMARY KEY (`idresultado`,`idpregunta`,`idmateria`,`idgrupo`,`matricula`)
)
;

-- Create foreign keys (relationships) section ------------------------------------------------- 


ALTER TABLE `profesor-materia` ADD CONSTRAINT `Relationship1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `profesor-materia` ADD CONSTRAINT `Relationship2` FOREIGN KEY (`idmateria`) REFERENCES `materia` (`idmateria`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `grupo` ADD CONSTRAINT `Relationship3` FOREIGN KEY (`idmateria`) REFERENCES `materia` (`idmateria`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `alumnos` ADD CONSTRAINT `Relationship4` FOREIGN KEY (`idmateria`, `idgrupo`) REFERENCES `grupo` (`idmateria`, `idgrupo`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `examen` ADD CONSTRAINT `Relationship5` FOREIGN KEY (`idmateria`) REFERENCES `materia` (`idmateria`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `asignaexam` ADD CONSTRAINT `Relationship6` FOREIGN KEY (`idexamen`, `idmateria`) REFERENCES `examen` (`idexamen`, `idmateria`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `asignaexam` ADD CONSTRAINT `Relationship7` FOREIGN KEY (`idpregunta`) REFERENCES `preguntasyrespuestas` (`idpregunta`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `Entity10` ADD CONSTRAINT `Relationship8` FOREIGN KEY (`idexamen`, `idmateria`) REFERENCES `examen` (`idexamen`, `idmateria`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `Entity10` ADD CONSTRAINT `Relationship9` FOREIGN KEY (`idmateria`, `idgrupo`, `matricula`) REFERENCES `alumnos` (`idmateria`, `idgrupo`, `matricula`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `resultados` ADD CONSTRAINT `Relationship15` FOREIGN KEY (`idpregunta`) REFERENCES `preguntasyrespuestas` (`idpregunta`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


ALTER TABLE `resultados` ADD CONSTRAINT `Relationship17` FOREIGN KEY (`idmateria`, `idgrupo`, `matricula`) REFERENCES `alumnos` (`idmateria`, `idgrupo`, `matricula`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


