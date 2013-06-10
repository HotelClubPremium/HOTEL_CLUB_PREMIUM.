-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-06-2013 a las 03:58:29
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
-- Estructura de tabla para la tabla `checkin`
--

CREATE TABLE IF NOT EXISTS `checkin` (
  `num_checkin` int(11) NOT NULL AUTO_INCREMENT,
  `cod_usuario` varchar(15) NOT NULL,
  `fecha_llegada` date NOT NULL,
  `fecha_reserva` date NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_salida` date NOT NULL,
  PRIMARY KEY (`num_checkin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `checkin`
--

INSERT INTO `checkin` (`num_checkin`, `cod_usuario`, `fecha_llegada`, `fecha_reserva`, `fecha_inicio`, `fecha_salida`) VALUES
(1, '1', '2013-06-18', '2013-06-09', '2013-06-17', '2013-06-19'),
(2, '34', '1995-11-13', '1995-11-29', '1995-11-28', '1995-11-20');

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
  `num_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `cod_usuario` varchar(15) NOT NULL,
  `num_habitacion` int(11) NOT NULL,
  `dias_reserva` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_reserva` date NOT NULL,
  `total_pagar` bigint(20) NOT NULL,
  `fecha_salida` date NOT NULL,
  PRIMARY KEY (`num_reserva`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`num_reserva`, `cod_usuario`, `num_habitacion`, `dias_reserva`, `fecha_inicio`, `fecha_reserva`, `total_pagar`, `fecha_salida`) VALUES
(1, '1', 112, 0, '2013-06-09', '2013-06-09', 0, '2013-06-12'),
(2, '34', 114, 0, '2013-06-18', '2013-06-09', 0, '2013-06-20');

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
  `correo_electronico` varchar(200) NOT NULL,
  `clave` varchar(45) NOT NULL,
  PRIMARY KEY (`cod_usuario`),
  UNIQUE KEY `correo_electronico_UNIQUE` (`correo_electronico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nom_usuario`, `ape_usuario`, `fecha_nacimiento`, `sex_usuario`, `correo_electronico`, `clave`) VALUES
('1', 'jeiner', 'mellado', '1995-11-30', 'M', 'je_in_er@homail.com', '356a192b7913b04c54574d18c28d46e6395428ab'),
('2', 'carlos', 'pitre', '2013-05-23', 'M', 'carlos54@hotmail.com', 'da4b9237bacccdf19c0760cab7aec4a8359010b0'),
('3', 'miguel', 'palomino', '2013-05-20', 'M', 'migule@hotmail.com', '77de68daecd823babbb58edb1c8e14d7106e83bb'),
('34', '', '', '0000-00-00', '', '', 'f1f836cb4ea6efb2a0b1b99f41ad8b103eff4b59'),
('717', 'cristiano', 'ronaldo', '2015-06-13', 'M', 'leon_fmv@hotmail.com', 'e1c1bfebab6bf67d6a890159995b9edf156ac725'),
('79', 'lllll', 'llllll', '2013-05-20', 'M', 'lllll@hotmail.com', 'b74f5ee9461495ba5ca4c72a7108a23904c27a05');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
