-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2018 a las 19:26:28
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdclublectura`
--

-- 
create database `bdclublectura`
;
--------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--
CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `fNacimiento` date DEFAULT NULL,
  `comentario` varchar(300) DEFAULT NULL,
  `puntuacion` int(11) DEFAULT NULL,
  `idGrupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `nombre`, `fNacimiento`, `comentario`, `puntuacion`, `idGrupo`) VALUES
(2, 'Agus Blazquez', '0000-00-00', 'mmmm', NULL, 1),
(3, 'Agus Blazquez', '0000-00-00', 'mmmm', NULL, 1),
(4, 'Agus Blazquez', '0000-00-00', 'mmmm', NULL, 1),
(5, 'Agus Blazquez', '0000-00-00', 'mmmm', NULL, 1),
(6, 'Agus Blazquez', '0000-00-00', 'mmmm', NULL, 1),
(7, 'Agus Blazquez', '0000-00-00', 'mmmm', 3, 1),
(8, 'Agus Blazquez', '0000-00-00', 'mmmm', 3, 1),
(9, 'Agus Blazquez', '2011-02-19', 'mmmm', 3, 1),
(10, 'Agus Blazquez', '2011-02-19', 'mmmm', 3, 1),
(11, 'Agus Blazquez', '2011-02-19', 'mmmm', 3, 1),
(12, 'Agus Blazquez', '2011-02-19', 'mmmm', 3, 1),
(13, 'Agus Blazquez', '2011-02-19', 'mmmm', 3, 1);



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegio`
--


CREATE TABLE `colegio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `nif` varchar(10) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `web` varchar(30) DEFAULT NULL,
  `telefono` varchar(15) NOT NULL,
  `licencia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `colegio`
--

INSERT INTO `colegio` (`id`, `nombre`, `nif`, `direccion`, `email`, `web`, `telefono`, `licencia`) VALUES
(1, 'escuela fluvia', 'x666666666', 'calle fluvia 60', 'fluvia@email.cat', 'www.fluvia.cat', '', ''),
(2, 'escuela fluvia', 'x666666666', 'calle fluvia 60', 'fluvia@email.cat', 'www.fluvia.cat', '', ''),
(3, 'escuela Icaria', 'x666666666', 'calle fluvia 60', 'fluvia@email.cat', 'www.fluvia.cat', '', '');



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--


CREATE TABLE `grupo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `edad` int(11) NOT NULL,
  `aula` varchar(10) NOT NULL,
  `idColegio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idGrupo` (`idGrupo`);

--
-- Indices de la tabla `colegio`
--
ALTER TABLE `colegio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idColegio` (`idColegio`) USING BTREE,
  ADD KEY `idColegio_2` (`idColegio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `colegio`
--
ALTER TABLE `colegio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
