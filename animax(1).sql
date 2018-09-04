-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-09-2018 a las 15:51:22
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
-- Estructura de tabla para la tabla `capitulo`
--

DROP TABLE IF EXISTS `capitulo`;
CREATE TABLE IF NOT EXISTS `capitulo` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `id_temporada` int(15) NOT NULL,
  `numero` int(10) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `duracion` time(5) NOT NULL,
  `fecha_estreno` date NOT NULL,
  `fecha_c` date NOT NULL,
  `fecha_m` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `capitulo`
--

INSERT INTO `capitulo` (`id`, `id_temporada`, `numero`, `nombre`, `duracion`, `fecha_estreno`, `fecha_c`, `fecha_m`) VALUES
(6, 8, 44, 'Eveniet magna sint eum mi', '00:00:42.00000', '1989-07-03', '2018-09-01', '2018-09-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulo_video`
--

DROP TABLE IF EXISTS `capitulo_video`;
CREATE TABLE IF NOT EXISTS `capitulo_video` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `id_capitulo` int(15) NOT NULL,
  `url_video` varchar(400) NOT NULL,
  `tipo` varchar(2) NOT NULL,
  `provedor` varchar(400) NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `fecha_c`, `fecha_m`) VALUES
(2, 'Anime', '2018-08-26', '2018-08-27'),
(16, 'Ova', '2018-08-27', '2018-08-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

DROP TABLE IF EXISTS `generos`;
CREATE TABLE IF NOT EXISTS `generos` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `fecha_c` date NOT NULL,
  `fecha_m` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `nombre`, `fecha_c`, `fecha_m`) VALUES
(1, 'Porno ', '2018-08-27', '2018-08-28'),
(3, 'Comedia', '2018-08-29', '2018-08-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serie`
--

DROP TABLE IF EXISTS `serie`;
CREATE TABLE IF NOT EXISTS `serie` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `dias` varchar(15) NOT NULL,
  `duracion` varchar(15) NOT NULL,
  `imagen` varchar(400) NOT NULL,
  `categoria` varchar(15) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `tipo` int(2) NOT NULL,
  `estreno` date NOT NULL,
  `fecha_c` date NOT NULL,
  `fecha_m` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `serie`
--

INSERT INTO `serie` (`id`, `nombre`, `descripcion`, `dias`, `duracion`, `imagen`, `categoria`, `estado`, `tipo`, `estreno`, `fecha_c`, `fecha_m`) VALUES
(3, 'Naturo', 'DDD', 'Viernes', '2omin', 'file/img/img2018_09_01_13.jpg', 'Anime', 'Por estrenar', 0, '2018-08-08', '2018-09-01', '2018-09-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `series_destacadas`
--

DROP TABLE IF EXISTS `series_destacadas`;
CREATE TABLE IF NOT EXISTS `series_destacadas` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `id_serie` int(15) NOT NULL,
  `fecha_c` date NOT NULL,
  `fecha_m` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serie_genero`
--

DROP TABLE IF EXISTS `serie_genero`;
CREATE TABLE IF NOT EXISTS `serie_genero` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `id_serie` int(15) NOT NULL,
  `id_genero` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `serie_genero`
--

INSERT INTO `serie_genero` (`id`, `id_serie`, `id_genero`) VALUES
(1, 1, 1),
(2, 2, 3),
(3, 3, 3);

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `temporada`
--

INSERT INTO `temporada` (`id`, `id_serie`, `numero`, `fecha_estreno`, `fecha_c`, `fecha_m`) VALUES
(9, 3, 1, '2018-09-13', '2018-09-01', '2018-09-01'),
(8, 3, 2, '2018-08-10', '2018-09-01', '2018-09-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `mail` varchar(200) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `nacimiento` date NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `tipo` int(4) NOT NULL,
  `fecha_c` date NOT NULL,
  `fecha_m` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `mail`, `nickname`, `pass`, `nombre`, `apellido`, `nacimiento`, `sexo`, `foto`, `tipo`, `fecha_c`, `fecha_m`) VALUES
(1, 'sofiasinger19@gmail.com', '', '12345', 'sofia', 'singer', '1997-08-19', 'f', '', 0, '2018-08-18', '2018-08-26'),
(3, 'edwin.jme@gmail.com', 'eJme1992', '2664265', 'Edwin', 'Mogollon', '1992-07-10', 'M', '', 0, '2018-08-01', '2018-09-04'),
(4, 'wilber@gmail.com', '', '12345', 'wilber', 'mendoza', '2018-09-21', 'M', '', 1, '2018-09-01', '2018-09-01'),
(5, 'mitet@mailinator.com', '', 'Pa$$w0rd!', 'Deleniti consequuntur ducimus ', 'Alias illo officiis illum fugi', '1990-03-04', 'M', '', 0, '2018-09-01', '2018-09-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
