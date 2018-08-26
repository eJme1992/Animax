-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-08-2018 a las 17:34:01
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `animax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `tipo` int(4) NOT NULL,
  `fecha_c` date NOT NULL,
  `fecha_m` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `correo`, `nombre`, `foto`, `tipo`, `fecha_c`, `fecha_m`) VALUES
(1, 'user', '12345', 'edwin.jme@gmail.com', 'Edwin Mogollon', '', 1, '2018-08-24', '2018-08-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulo`
--

DROP TABLE IF EXISTS `capitulo`;
CREATE TABLE IF NOT EXISTS `capitulo` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `id_temporada` int(15) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `duracion` time(5) NOT NULL,
  `fecha_c` date NOT NULL,
  `fecha_m` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `fecha_c` date DEFAULT NULL,
  `fecha_m` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `fecha_c`, `fecha_m`) VALUES
(1, 'Anime', '2018-08-01', '2018-08-01'),
(2, 'Ova', '2018-08-26', '2018-08-26'),
(3, 'perro', '2018-08-26', '2018-08-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serie`
--

DROP TABLE IF EXISTS `serie`;
CREATE TABLE IF NOT EXISTS `serie` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `imagen` varchar(400) NOT NULL,
  `categoria` int(15) NOT NULL,
  `estado` int(2) NOT NULL,
  `tipo` int(2) NOT NULL,
  `fecha_c` date NOT NULL,
  `fecha_m` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporada`
--

DROP TABLE IF EXISTS `temporada`;
CREATE TABLE IF NOT EXISTS `temporada` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `id_serie` int(15) NOT NULL,
  `numero` int(15) NOT NULL,
  `fecha_estreno` date NOT NULL,
  `fecha_c` date NOT NULL,
  `fecha_m` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `mail` varchar(200) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidonombre` varchar(30) NOT NULL,
  `nacimiento` date NOT NULL,
  `nacionalidad` varchar(20) NOT NULL,
  `fecha_c` date NOT NULL,
  `fecha_m` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video_serie`
--

DROP TABLE IF EXISTS `video_serie`;
CREATE TABLE IF NOT EXISTS `video_serie` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `id_capitulo` int(15) NOT NULL,
  `url` varchar(400) NOT NULL,
  `tipo` int(2) NOT NULL COMMENT 'Descarga/Online ',
  `estado` int(2) NOT NULL COMMENT 'Activo/Inactivo',
  `fecha_c` date NOT NULL,
  `fecha_m` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
