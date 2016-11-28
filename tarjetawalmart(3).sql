-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-11-2016 a las 20:29:45
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tarjetawalmart`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario1`
--

CREATE TABLE IF NOT EXISTS `formulario1` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `tipo_dni` varchar(255) NOT NULL,
  `dni` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fecha_nacimiento` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `situacion_laboral` varchar(255) NOT NULL,
  `antlaboral` varchar(255) NOT NULL,
  `ingreso_mensuales` varchar(255) NOT NULL,
  `perfil_crediticio` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL,
  `telefono_fijo` varchar(255) NOT NULL,
  `provincia` varchar(255) NOT NULL,
  `sucursal` varchar(255) NOT NULL,
  `recibir_promo_ofertas` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `formulario1`
--

INSERT INTO `formulario1` (`id`, `tipo_dni`, `dni`, `nombre`, `apellido`, `fecha_nacimiento`, `sexo`, `situacion_laboral`, `antlaboral`, `ingreso_mensuales`, `perfil_crediticio`, `email`, `celular`, `telefono_fijo`, `provincia`, `sucursal`, `recibir_promo_ofertas`) VALUES
(1, 'DNI', '4353543', 'sdfsdf', 'sadsadss adsad', '1997-3-2', 'M', 'Empleado publico', 'Mas de 1 ano', '0-5000', 'No tengo préstamos ni tarjetas de crédito', 'dsad@sadsd.com', '1112121321', '23423423', 'Catamarca', ' ', 'Si'),
(2, 'DNI', '234234', 'sdsa', 'dsadsad', '1988-4-14', 'M', 'Empleado publico', 'Mas de 1 ano', '10000-20000', 'Tengo préstamo y/o tarjeta con atraso mayor a 60 días', 'asdsa@sads.com', '11123213', '2132132131', 'Buenos Aires', 'Bahia Blanca', 'Si'),
(3, 'DNI', '4234234', 'sadsad', 'sadsadsad', '1987-7-10', 'M', 'Empleado publico', 'Mas de 1 ano', '5000-10000', 'Tengo préstamo y/o tarjeta y estoy al día', 'sadsa@sfsdc.com', '1121321321', '132132132', 'Buenos Aires', 'Bahia Blanca', 'Si'),
(4, 'DNI', '23423423', 'vsdfsdfsdf', 'sadfsadda', '1996-3-3', 'M', 'Jubilado', '', '10000-20000', 'No tengo préstamos ni tarjetas de crédito', 'sdfsdf@sdsad.com', '111213213', '2132132132', 'Chaco', ' ', 'Si'),
(5, 'DNI', '4234234', 'sdfsdf', 'sdfsdfsdfsf', '1998-3-2', 'M', 'Empleado privado', 'Mas de 1 ano', '5000-10000', 'Tengo préstamo y/o tarjeta y estoy al día', 'sdfsdfsdf@sasads.com', '232342423423', '2242242423', 'Chaco', ' ', 'Si'),
(6, 'DNI', '23423423', 'sadfsdfd', 'aadasdada', '1999-1-1', 'M', 'Empleado publico', 'Mas de 1 ano', '5000-10000', 'No tengo préstamos ni tarjetas de crédito', 'sadsadsa@sadsad.com', '212121213', '12122121', 'Chubut', 'Comodoro Rivadavia', 'Si'),
(7, 'DNI', '22342342', 'adsadsa', 'dsadsadsad', '1996-2-2', 'F', 'Fuerzas Armadas / Fuerzas de Seguridad', 'Menos de 1 ano', '5000-10000', 'Tengo préstamo y/o tarjeta con atraso mayor a 60 días', 'sadsada@sdsafsd.com', '1111111112121', '1212121212', 'Buenos Aires', 'Punta Alta', 'Si'),
(8, 'DNI', '3213213', 'asdsad', 'asdasdad', '1997-2-3', 'M', 'Fuerzas Armadas / Fuerzas de Seguridad', 'Mas de 1 ano', '5000-10000', 'No tengo préstamos ni tarjetas de crédito', 'sdaasd@sesdf.com', '111211212', '1212121', 'Buenos Aires', 'Bahia Blanca', 'Si');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
