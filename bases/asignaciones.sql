-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2020 a las 00:44:18
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asignaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integrantes`
--

CREATE TABLE `integrantes` (
  `id_int` int(8) NOT NULL,
  `nom_int` varchar(30) NOT NULL,
  `ape_int` varchar(30) NOT NULL,
  `edad_int` int(8) NOT NULL,
  `direc_int` varchar(50) NOT NULL,
  `fech_int` date NOT NULL,
  `nota_int` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `integrantes`
--

INSERT INTO `integrantes` (`id_int`, `nom_int`, `ape_int`, `edad_int`, `direc_int`, `fech_int`, `nota_int`) VALUES
(2, 'juan', 'mara', 14, 'jaja 434', '2020-06-12', 'se rie en clase');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibos`
--

CREATE TABLE `recibos` (
  `id_rec` int(8) NOT NULL,
  `fech_rec` date DEFAULT NULL,
  `nom_rec` varchar(50) DEFAULT NULL,
  `desc_rec` varchar(100) DEFAULT NULL,
  `liqui_rec` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recibos`
--

INSERT INTO `recibos` (`id_rec`, `fech_rec`, `nom_rec`, `desc_rec`, `liqui_rec`) VALUES
(2, '2020-07-20', 'juan,mara', 'levantar cajitas duras', '50.58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id_tar` int(8) NOT NULL,
  `fech_tar` date NOT NULL,
  `desc_tar` varchar(100) NOT NULL,
  `tiemp_tar` varchar(50) NOT NULL,
  `inte_tar` varchar(100) NOT NULL,
  `obser_tar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id_tar`, `fech_tar`, `desc_tar`, `tiemp_tar`, `inte_tar`, `obser_tar`) VALUES
(2, '2020-06-04', 'levantar cajita', '8hs', '2', 'sooos'),
(4, '2020-06-10', 'levantar cajitaasd', '8hs', '2', 'sasas'),
(5, '0000-00-00', '', '', '2', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `integrantes`
--
ALTER TABLE `integrantes`
  ADD PRIMARY KEY (`id_int`);

--
-- Indices de la tabla `recibos`
--
ALTER TABLE `recibos`
  ADD PRIMARY KEY (`id_rec`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id_tar`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `integrantes`
--
ALTER TABLE `integrantes`
  MODIFY `id_int` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `recibos`
--
ALTER TABLE `recibos`
  MODIFY `id_rec` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id_tar` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
