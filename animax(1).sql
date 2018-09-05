-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-09-2018 a las 00:57:50
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
(3, 'Naturo', 'DDD', 'Viernes', '2omin', 'file/img/img2018_09_04_10.jpg', 'Anime', 'Por estrenar', 0, '2018-08-08', '2018-09-01', '2018-09-04');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `series_destacadas`
--

INSERT INTO `series_destacadas` (`id`, `id_serie`, `fecha_c`, `fecha_m`) VALUES
(3, 3, '2018-09-04', '2018-09-04');

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
-- Estructura de tabla para la tabla `st_datos`
--

DROP TABLE IF EXISTS `st_datos`;
CREATE TABLE IF NOT EXISTS `st_datos` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `logo2` varchar(200) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_menu`
--

DROP TABLE IF EXISTS `st_menu`;
CREATE TABLE IF NOT EXISTS `st_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menus` varchar(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `url` varchar(200) NOT NULL,
  `posicion` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_menus`
--

DROP TABLE IF EXISTS `st_menus`;
CREATE TABLE IF NOT EXISTS `st_menus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `st_menus`
--

INSERT INTO `st_menus` (`id`, `nombre`) VALUES
(1, 'navbar'),
(2, 'footer_1'),
(3, 'footer_2');

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
(3, 'edwin.jme@gmail.com', 'JHOO', '2664265', 'Edwin Jose', 'Mogollon E.', '1992-07-10', 'M', 'file/img/img2018_09_05_49.jpg', 0, '2018-08-01', '2018-09-05'),
(4, 'wilber@gmail.com', '', '12345', 'wilber', 'mendoza', '2018-09-21', 'M', '', 1, '2018-09-01', '2018-09-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
