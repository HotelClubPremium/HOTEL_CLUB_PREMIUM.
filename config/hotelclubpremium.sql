-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-05-2013 a las 05:16:02
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `hotelclubpremium`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturacion`
--

CREATE TABLE IF NOT EXISTS `facturacion` (
  `numero_checkout` int(11) NOT NULL,
  `codigo_cliente` int(11) NOT NULL,
  `numero_servicio` int(11) NOT NULL,
  `facturacion_total` double NOT NULL,
  PRIMARY KEY (`numero_checkout`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `facturacion`
--

INSERT INTO `facturacion` (`numero_checkout`, `codigo_cliente`, `numero_servicio`, `facturacion_total`) VALUES
(10, 120, 120, 100000),
(123, 12, 6, 325000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE IF NOT EXISTS `habitacion` (
  `num_habitacion` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL,
  `disponibilidad` tinyint(4) NOT NULL,
  PRIMARY KEY (`num_habitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`num_habitacion`, `tipo`, `precio`, `disponibilidad`) VALUES
(12, 'penhouse', 500000, 1),
(13, 'penhouse', 500000, 1),
(112, 'sencillo', 234000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE IF NOT EXISTS `reservas` (
  `num_reserva` int(11) NOT NULL,
  `cod_usuario` varchar(15) NOT NULL,
  `num_habitacion` int(11) NOT NULL,
  `dias_reserva` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_reserva` date NOT NULL,
  `total_pagar` bigint(20) NOT NULL,
  PRIMARY KEY (`num_reserva`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas_servicios`
--

CREATE TABLE IF NOT EXISTS `reservas_servicios` (
  `numero_reserva` int(11) NOT NULL,
  `numero_servicio` varchar(30) NOT NULL,
  `numero_targeta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `cod_servicio` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `precio` int(11) NOT NULL,
  `horario_disponible` varchar(10) NOT NULL,
  PRIMARY KEY (`cod_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta_registro`
--

CREATE TABLE IF NOT EXISTS `tarjeta_registro` (
  `num_checkIn` int(11) NOT NULL,
  `codigo_cliente` int(11) NOT NULL,
  `numero_servicio` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `fecha_servicio` date NOT NULL,
  PRIMARY KEY (`num_checkIn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarjeta_registro`
--

INSERT INTO `tarjeta_registro` (`num_checkIn`, `codigo_cliente`, `numero_servicio`, `total`, `fecha_servicio`) VALUES
(3, 3, 4, 650000, '2013-05-22'),
(4, 4, 4, 400000, '2013-05-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_usuario` varchar(15) NOT NULL,
  `nom_usuario` varchar(30) NOT NULL,
  `ape_usuario` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sex_usuario` char(1) NOT NULL,
  `correo_electronico` varchar(40) NOT NULL,
  `clave` varchar(45) NOT NULL,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nom_usuario`, `ape_usuario`, `fecha_nacimiento`, `sex_usuario`, `correo_electronico`, `clave`) VALUES
('1', 'jeiner', 'mellado', '2013-04-29', 'm', 'jeiner@hotmail.com', '1'),
('13', 'jjjjjjjj', 'jjjjjj', '2013-05-14', 'M', 'jeiner@hotmail.com', '13'),
('2', 'carlos', 'aaaaaa', '2013-04-29', 'm', 'carlos@hotmail.com', '2'),
('25', 'lau', 'lau', '2013-05-14', 'F', 'lau@hotmail.com', '25'),
('3', 'miguel', 'nnnnn', '2013-04-29', 'm', 'miguel@hotmail.com', '3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
