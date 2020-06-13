-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-06-2020 a las 16:37:49
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `covid2019umg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `covid`
--

DROP TABLE IF EXISTS `covid`;
CREATE TABLE IF NOT EXISTS `covid` (
  `idcovid` int(11) NOT NULL AUTO_INCREMENT,
  `PrimerNombre` varchar(45) NOT NULL,
  `SegundoNombre` varchar(45) DEFAULT NULL,
  `PrimerApellido` varchar(45) NOT NULL,
  `SegundoApellido` varchar(45) NOT NULL,
  `Dpi` varchar(15) DEFAULT NULL,
  `Sexo` varchar(45) NOT NULL,
  `Edad` int(45) NOT NULL,
  `Municipio` varchar(45) NOT NULL,
  `Departamento` varchar(45) NOT NULL,
  `Pais` varchar(45) NOT NULL,
  `Fecha` datetime(6) NOT NULL,
  `Tipopago` varchar(15) DEFAULT NULL,
  `Cantidad` int(10) NOT NULL,
  `Noboleta` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcovid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `covid`
--

INSERT INTO `covid` (`idcovid`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `Dpi`, `Sexo`, `Edad`, `Municipio`, `Departamento`, `Pais`, `Fecha`, `Tipopago`, `Cantidad`, `Noboleta`) VALUES
(1, 'Jennifer Mire', 'alex', 'yac', 'Mendez', '123456789123', 'masculino', 15, 'cans', 'Totonicapan', 'Guatemala', '2020-06-11 00:00:00.000000', 'deposito', 12345, 5),
(2, 'Antonio', 'alex', 'yac', 'Mendez', '123456789123', 'Femenino', 15, 'Estancia Cantel', 'Quetzaltenango', 'Guatemala', '2020-06-11 00:00:00.000000', 'deposito', 12345, 5000),
(3, 'Antonio', 'alex', 'yac', 'Mendez', '123456789123', 'Femenino', 15, 'Estancia Cantel', 'Momostenango', 'Guatemala', '2020-06-11 00:00:00.000000', 'deposito', 12345, 5000),
(4, 'Angelina', 'Miriam', 'Velasquez', 'Matul', '6578235491254', 'Femenino', 64, 'Coatepeque', 'Quetzaltenango', 'Guatemala', '2020-06-11 00:00:00.000000', 'deposito', 63520, 658741225);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(25) DEFAULT NULL,
  `Nit` int(11) NOT NULL,
  `Departamento` varchar(30) DEFAULT NULL,
  `Pais` varchar(25) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Tipopago` varchar(25) DEFAULT NULL,
  `Cantidad` int(20) DEFAULT NULL,
  `Noboleta` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `Nombre`, `Nit`, `Departamento`, `Pais`, `Fecha`, `Tipopago`, `Cantidad`, `Noboleta`) VALUES
(1, 'Seguridad Informatica', 77665465, 'Quetzaltenango', 'Guatemala', '2020-06-11', 'femenino', 500, 66655445),
(2, 'Seguridad Informatica', 77665465, 'Quetzaltenango', 'Guatemala', '2020-06-11', 'femenino', 500, 66655445);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
