-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 30-04-2020 a las 22:55:25
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebaphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actormovies`
--

DROP TABLE IF EXISTS `actormovies`;
CREATE TABLE IF NOT EXISTS `actormovies` (
  `idactormovies` int(11) NOT NULL,
  `idactorts` int(11) DEFAULT NULL,
  `idmovies` int(11) DEFAULT NULL,
  PRIMARY KEY (`idactormovies`),
  KEY `idactors_idx` (`idactorts`),
  KEY `idmovies_idx` (`idmovies`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actors`
--

DROP TABLE IF EXISTS `actors`;
CREATE TABLE IF NOT EXISTS `actors` (
  `idactors` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `identificacion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idactors`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `actors`
--

INSERT INTO `actors` (`idactors`, `nombre`, `identificacion`, `telefono`, `correo`) VALUES
(4, 'mariana', 'as', 'asasas', 'asasas'),
(5, 'asasasas', '1024482240', '3852608838', 'astaroth1988bayona3@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `idmovies` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `fechalanzamiento` date DEFAULT NULL,
  PRIMARY KEY (`idmovies`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `movies`
--

INSERT INTO `movies` (`idmovies`, `nombre`, `fechalanzamiento`) VALUES
(2, 'avengers', '2019-04-10'),
(3, 'grantorino', '2020-04-01');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actormovies`
--
ALTER TABLE `actormovies`
  ADD CONSTRAINT `idactors` FOREIGN KEY (`idactorts`) REFERENCES `actors` (`idactors`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idmovies` FOREIGN KEY (`idmovies`) REFERENCES `movies` (`idmovies`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
