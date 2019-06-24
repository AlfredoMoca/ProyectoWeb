-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2017 a las 21:46:58
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesos`
--

CREATE TABLE IF NOT EXISTS `accesos` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `id_usuario` text NOT NULL,
  `privilegio` text NOT NULL,
  `tipo` text NOT NULL,
  `login` text NOT NULL,
  `clave` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `accesos`
--

INSERT INTO `accesos` (`id`, `nombre`, `id_usuario`, `privilegio`, `tipo`, `login`, `clave`) VALUES
(2, 'alfredo', '', '2', '', 'equisde', 'muchalucha'),
(3, 'sergio', '', '1', '', 'aquu', '123456'),
(4, 'hackerman', '', '3', '', 'akatzuna', 'chevere1'),
(5, 'jaime', '', '2', '', 'taz', 'chevere1'),
(6, '', '', '3', '', 'chevere', 'chevere');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `grado` text NOT NULL,
  `mail` text NOT NULL,
  `domicilio` text NOT NULL,
  `tel` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `grado`, `mail`, `domicilio`, `tel`) VALUES
(2, 'alfredo', '6-B', 'chido@hotmail.com', '3232 vaqui', '3309884456'),
(3, 'kim', '6-B', 'kimce@', 'prpea 10', '33224433554'),
(4, 'jaime', '6-B', 'taz', 'p', '12312341'),
(6, 'paolo', '6-B', 'paki', 'r|', '1234312'),
(7, 'cesar', '6-B', 'cexar', '1p', '123431234'),
(8, 'tellez', '6-B', 'tallaz', 'laurel', '4234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_materia`
--

CREATE TABLE IF NOT EXISTS `alumno_materia` (
  `id` int(11) NOT NULL,
  `id_materia_periodo` text NOT NULL,
  `id_alumno` text NOT NULL,
  `nombre_alumno` text NOT NULL,
  `nombre_materia` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno_materia`
--

INSERT INTO `alumno_materia` (`id`, `id_materia_periodo`, `id_alumno`, `nombre_alumno`, `nombre_materia`) VALUES
(34, '1', '2', 'alfredo', 'edu'),
(38, '2', '3', 'kim', 'java'),
(41, '3', '2', 'alfredo', 'edu'),
(43, '3', '3', 'kim', 'edu'),
(45, '1', '4', 'jaime', 'edu'),
(49, '2', '5', 'tellez', 'java'),
(50, '2', '4', 'jaime', ''),
(55, '1', '7', 'cesar', ''),
(56, '4', '2', 'alfredo', ''),
(57, '4', '7', 'cesar', ''),
(58, '4', '4', 'jaime', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `nrc` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `nrc`) VALUES
(2, 'java', 'kap'),
(3, 'edu', 'kap'),
(4, 'mate', 'kappa1234'),
(5, 'ingles', 'kappa13579'),
(6, 'ingles', 'kappa13579');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_periodos`
--

CREATE TABLE IF NOT EXISTS `materia_periodos` (
  `id` int(11) NOT NULL,
  `nombre_profesor` text NOT NULL,
  `nombre_materia` text NOT NULL,
  `id_profesor` text NOT NULL,
  `id_materia` text NOT NULL,
  `horario` text NOT NULL,
  `aula` text NOT NULL,
  `periodo` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materia_periodos`
--

INSERT INTO `materia_periodos` (`id`, `nombre_profesor`, `nombre_materia`, `id_profesor`, `id_materia`, `horario`, `aula`, `periodo`) VALUES
(1, 'nacho', 'edu', '1', '3', '11:00 hasta 12:30', 'D-05', '2016B'),
(2, 'sergio', 'java', '2', '2', '15:13 hasta 16:13', 'B-07', '2016B'),
(3, 'sergio', 'edu', '2', '3', '32:21 hasta 32:34', 'B-37', '2017A'),
(4, 'adan', 'ingles', '3', '5', '09:00 hasta :', 'D-25', '2016B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE IF NOT EXISTS `profesores` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `materia` text NOT NULL,
  `mail` text NOT NULL,
  `domicilio` text NOT NULL,
  `tel` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `nombre`, `materia`, `mail`, `domicilio`, `tel`) VALUES
(1, 'nacho', 'programacion', 'nacho@hotmail.com', 'ahua', '3334554433'),
(2, 'sergio', 'web', 'ser@hotmail.com', 'cta', '33995566'),
(3, 'adan', 'php', 'adan@noreply', 'prepa10', '141324');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE IF NOT EXISTS `tareas` (
  `id` int(11) NOT NULL,
  `id_materia_periodo` text NOT NULL,
  `id_alumno` text NOT NULL,
  `tarea` text NOT NULL,
  `fecha` text NOT NULL,
  `archivo` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `id_materia_periodo`, `id_alumno`, `tarea`, `fecha`, `archivo`) VALUES
(2, '1', '2', 'tarea 2', '2016-04-20', 'CPanel administrador.pdf'),
(3, '1', '2', 'tarea 1', '2016-04-20', 'buscarcom.php'),
(4, '3', '2', 'tarea 1', '2016-04-20', 'solicitud chevere.doc'),
(5, '3', '2', 'tarea 2 nacho', '2016-04-06', 'ReservaciÃ³n de espacios CUCEA.pptx'),
(6, '1', '4', 'tarea 1', '2016-04-20', '6b_tpi_tv_jamc_act3PP.pptx'),
(7, '2', '5', 'tarea 1', '2016-04-12', '6b_tpi_tv_jamc_act3word.docx');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesos`
--
ALTER TABLE `accesos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alumno_materia`
--
ALTER TABLE `alumno_materia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materia_periodos`
--
ALTER TABLE `materia_periodos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesos`
--
ALTER TABLE `accesos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `alumno_materia`
--
ALTER TABLE `alumno_materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `materia_periodos`
--
ALTER TABLE `materia_periodos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
