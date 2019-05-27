-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2019 a las 17:17:27
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examenesco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `idmateria` varchar(20) NOT NULL,
  `idgrupo` varchar(20) NOT NULL,
  `matricula` int(11) NOT NULL,
  `nombre` char(20) DEFAULT NULL,
  `calificacion` char(20) DEFAULT NULL,
  `password` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargaprofesor`
--

CREATE TABLE `cargaprofesor` (
  `idprofesor` varchar(20) NOT NULL,
  `idmateria` varchar(20) NOT NULL,
  `idgrupo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargaprofesor`
--

INSERT INTO `cargaprofesor` (`idprofesor`, `idmateria`, `idgrupo`) VALUES
('A01', 'MAA', '1234'),
('f01', 'MHEA', '2201'),
('f01', 'MHEA', '2202');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `idmateria` varchar(20) NOT NULL,
  `idgrupo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`idmateria`, `idgrupo`) VALUES
('MAA', '1234'),
('MHEA', '2201'),
('MHEA', '2202');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `idmateria` varchar(20) NOT NULL,
  `nombre` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`idmateria`, `nombre`) VALUES
('BB', 'materia3'),
('CC', 'materia4'),
('DD', 'D01'),
('MAA', 'materia2'),
('MHEA', 'materia1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `idprofesor` varchar(20) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`idprofesor`, `nombre`, `password`) VALUES
('A01', 'Alejandra Sanchez Acosta', '1234'),
('f01', 'Francisco Javier Sanchez Acosta', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesormateria`
--

CREATE TABLE `profesormateria` (
  `idprofesor` varchar(20) NOT NULL,
  `idmateria` varchar(20) NOT NULL,
  `idprofesormateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesormateria`
--

INSERT INTO `profesormateria` (`idprofesor`, `idmateria`, `idprofesormateria`) VALUES
('A01', 'MAA', 2),
('f01', 'DD', 3),
('f01', 'MHEA', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`idmateria`,`idgrupo`,`matricula`);

--
-- Indices de la tabla `cargaprofesor`
--
ALTER TABLE `cargaprofesor`
  ADD PRIMARY KEY (`idprofesor`,`idmateria`,`idgrupo`),
  ADD KEY `Relationship19` (`idmateria`,`idgrupo`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`idmateria`,`idgrupo`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`idmateria`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`idprofesor`);

--
-- Indices de la tabla `profesormateria`
--
ALTER TABLE `profesormateria`
  ADD PRIMARY KEY (`idprofesor`,`idmateria`,`idprofesormateria`),
  ADD KEY `Relationship2` (`idmateria`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `Relationship4` FOREIGN KEY (`idmateria`,`idgrupo`) REFERENCES `grupo` (`idmateria`, `idgrupo`);

--
-- Filtros para la tabla `cargaprofesor`
--
ALTER TABLE `cargaprofesor`
  ADD CONSTRAINT `Relationship18` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`),
  ADD CONSTRAINT `Relationship19` FOREIGN KEY (`idmateria`,`idgrupo`) REFERENCES `grupo` (`idmateria`, `idgrupo`);

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `Relationship3` FOREIGN KEY (`idmateria`) REFERENCES `materia` (`idmateria`);

--
-- Filtros para la tabla `profesormateria`
--
ALTER TABLE `profesormateria`
  ADD CONSTRAINT `Relationship1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`),
  ADD CONSTRAINT `Relationship2` FOREIGN KEY (`idmateria`) REFERENCES `materia` (`idmateria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
