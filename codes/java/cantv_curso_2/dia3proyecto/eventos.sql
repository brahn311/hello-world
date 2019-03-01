-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-10-2018 a las 15:43:27
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `eventos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `falla`
--

CREATE TABLE IF NOT EXISTS `falla` (
  `cod_falla` int(4) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`cod_falla`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `falla`
--

INSERT INTO `falla` (`cod_falla`, `descripcion`) VALUES
(1, 'Falla moden'),
(2, 'Caida energia'),
(3, 'Central apagada'),
(4, 'Antena sin potencia'),
(5, 'Softswiche desconfigurado'),
(6, 'Fibra optica degradada'),
(7, 'alta congestion en red'),
(8, 'par de cobre interrumpido'),
(9, 'Introduccion magnética'),
(10, 'Punto de Venta congestionado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocurrencia`
--

CREATE TABLE IF NOT EXISTS `ocurrencia` (
  `cod_evento` int(4) NOT NULL AUTO_INCREMENT,
  `cod_falla` int(4) DEFAULT NULL,
  `fecha_ocu` date NOT NULL,
  `fecha_rep` date NOT NULL,
  `cod_trabajador` int(4) DEFAULT NULL,
  `estatus` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`cod_evento`),
  KEY `cod_falla` (`cod_falla`),
  KEY `cod_trabajador` (`cod_trabajador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE IF NOT EXISTS `trabajador` (
  `cod_trabajador` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`cod_trabajador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`cod_trabajador`, `nombre`, `apellido`) VALUES
(1, 'Abrahan', 'Lincoln'),
(2, 'Franckin', 'Planchart'),
(3, 'Carlos', 'Vives'),
(4, 'Grace', 'Peña'),
(5, 'Marcos', 'Salcedo'),
(6, 'Edwar', 'Becerra'),
(7, 'Maria', 'Castro'),
(8, 'Luis', 'Gomez'),
(9, 'Milagros', 'Suarez'),
(10, 'Miguel', 'Valencia'),
(11, 'Marta', 'Sanchez'),
(12, 'Mario', 'Bros');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ocurrencia`
--
ALTER TABLE `ocurrencia`
  ADD CONSTRAINT `ocurrencia_ibfk_1` FOREIGN KEY (`cod_falla`) REFERENCES `falla` (`cod_falla`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ocurrencia_ibfk_2` FOREIGN KEY (`cod_trabajador`) REFERENCES `trabajador` (`cod_trabajador`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
