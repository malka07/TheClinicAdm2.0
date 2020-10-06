-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql205.byetcluster.com
<<<<<<< HEAD
-- Tiempo de generación: 05-10-2020 a las 22:40:07
=======
<<<<<<< HEAD
-- Tiempo de generación: 05-10-2020 a las 18:17:00
=======
-- Tiempo de generación: 05-10-2020 a las 22:33:04
>>>>>>> 709cd8c1f57f91ac1d76faee5df4ff05e228caea
>>>>>>> c7d1112cd30233d57e38efbd3b7d6f75aa756d85
-- Versión del servidor: 5.6.48-88.0
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `b31_26518949_theclinicadm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis`
--

CREATE TABLE `analisis` (
  `id_analisis` int(8) NOT NULL,
  `fecha_analisis` date DEFAULT NULL,
  `clinico_analisis` varchar(50) DEFAULT NULL,
  `paciente_analisis` varchar(50) DEFAULT NULL,
  `resultados_analisis` varchar(200) DEFAULT NULL,
  `obser_analisis` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clinicos`
--

CREATE TABLE `clinicos` (
  `id_clinico` int(8) NOT NULL,
  `nombre_clinico` varchar(30) DEFAULT NULL,
  `apellido_clinico` varchar(30) DEFAULT NULL,
  `edad_clinico` int(8) DEFAULT NULL,
  `dni_clinico` int(8) DEFAULT NULL,
  `domicilio_clinico` varchar(15) DEFAULT NULL,
  `telefono_clinico` int(15) DEFAULT NULL,
  `fech_nac_clinico` date DEFAULT NULL,
  `email_clinico` varchar(30) DEFAULT NULL,
  `esp_clinico` int(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clinicos`
--

INSERT INTO `clinicos` (`id_clinico`, `nombre_clinico`, `apellido_clinico`, `edad_clinico`, `dni_clinico`, `domicilio_clinico`, `telefono_clinico`, `fech_nac_clinico`, `email_clinico`, `esp_clinico`) VALUES
(1, 'denise', 'Mark', 23, NULL, 'juan de los p', 4321, '2018-11-29', 'qweffe@hotmail.com', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `id_esp_clinicos` int(8) NOT NULL,
  `nombre_especialidad` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato`
--

CREATE TABLE `formato` (
  `id_formato` int(8) NOT NULL,
  `nombre_formato` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formato`
--

INSERT INTO `formato` (`id_formato`, `nombre_formato`) VALUES
(1, 'inyectable'),
(2, 'en polvo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historiales`
--

CREATE TABLE `historiales` (
  `id_historial` int(8) NOT NULL,
  `fecha_historial` date DEFAULT NULL,
  `clinico_historial` varchar(50) DEFAULT NULL,
  `paciente_historial` varchar(50) DEFAULT NULL,
  `observacion_historial` varchar(200) DEFAULT NULL,
  `diagnostico_historial` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historiales`
--

INSERT INTO `historiales` (`id_historial`, `fecha_historial`, `clinico_historial`, `paciente_historial`, `observacion_historial`, `diagnostico_historial`) VALUES
(1, '2020-08-24', 'denise,Mark', 'juan,de', 'esta chapitangagaga', 'al borda como jorgito'),
(3, '2020-07-16', 'denise,Mark', 'juan,de', 'esta chapitasss', 'hemorroides');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` int(8) NOT NULL,
  `tiempo_horario` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id_horario`, `tiempo_horario`) VALUES
(1, '00:00'),
(2, '00:30'),
(3, '01:00'),
(4, '01:30'),
(5, '02:00'),
(6, '02:30'),
(7, '03:00'),
(8, '08:30'),
(9, '04:00'),
(10, '04:30'),
(11, '05:00'),
(12, '05:30'),
(13, '06:00'),
(14, '06:30'),
(15, '07:00'),
(16, '07:30'),
(17, '08:00'),
(18, '08:30'),
(19, '09:00'),
(20, '09:30'),
(21, '10:00'),
(22, '10:30'),
(23, '11:00'),
(24, '11:30'),
(25, '12:00'),
(26, '12:30'),
(27, '13:00'),
(28, '13:30'),
(29, '14:00'),
(30, '14:30'),
(31, '15:00'),
(32, '15:30'),
(33, '16:00'),
(34, '16:30'),
(35, '17:00'),
(36, '17:30'),
(37, '18:00'),
(38, '18:30'),
(39, '19:00'),
(40, '19:30'),
(41, '20:00'),
(42, '20:00'),
(43, '21:00'),
(44, '21:30'),
(45, '22:00'),
(46, '22:30'),
(47, '23:00'),
(48, '23:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos`
--

CREATE TABLE `insumos` (
  `id_insumo` int(8) NOT NULL,
  `fecha_insumo` date DEFAULT NULL,
  `descripcion_insumo` varchar(30) DEFAULT NULL,
  `precio_insumo` decimal(12,5) DEFAULT NULL,
  `cantidad_insumo` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `insumos`
--

INSERT INTO `insumos` (`id_insumo`, `fecha_insumo`, `descripcion_insumo`, `precio_insumo`, `cantidad_insumo`) VALUES
(1, '2020-09-14', 'guantes latex talle L (x10)', '300.00000', 5),
(3, '2020-09-08', 'papel higienico (x12)', '1500.00000', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `id_medicamento` int(8) NOT NULL,
  `nombre_medicamento` varchar(50) DEFAULT NULL,
  `farmaco_medicamento` varchar(50) DEFAULT NULL,
  `contenido_medicamento` varchar(30) DEFAULT NULL,
  `formato_medicamento` varchar(50) DEFAULT NULL,
  `cantidad_medicamento` int(8) DEFAULT NULL,
  `vencimiento_medicamento` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`id_medicamento`, `nombre_medicamento`, `farmaco_medicamento`, `contenido_medicamento`, `formato_medicamento`, `cantidad_medicamento`, `vencimiento_medicamento`) VALUES
(1, 'seretide discus', 'SALMETEROL ', '50g', 'inyectable', 3, '2019-01-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_paciente` int(8) NOT NULL,
  `nombre_paciente` varchar(30) DEFAULT NULL,
  `apellido_paciente` varchar(30) DEFAULT NULL,
  `dni_paciente` int(10) DEFAULT NULL,
  `domicilio_paciente` varchar(50) DEFAULT NULL,
  `telefono_paciente` varchar(15) DEFAULT NULL,
  `edad_paciente` int(8) DEFAULT NULL,
  `provincia_paciente` varchar(30) DEFAULT NULL,
  `barrio_paciente` varchar(30) DEFAULT NULL,
  `fech_nac_paciente` date DEFAULT NULL,
  `historia_paciente` int(8) DEFAULT NULL,
  `obra_soc_paciente` varchar(15) DEFAULT NULL,
  `medico_paciente` varchar(50) DEFAULT NULL,
  `email_paciente` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `nombre_paciente`, `apellido_paciente`, `dni_paciente`, `domicilio_paciente`, `telefono_paciente`, `edad_paciente`, `provincia_paciente`, `barrio_paciente`, `fech_nac_paciente`, `historia_paciente`, `obra_soc_paciente`, `medico_paciente`, `email_paciente`) VALUES
(3, 'juan', 'de los palotes', 33444134, 'jose de los palotes 4321', '4369876', 24, 'GBA', 'san vicente', '2019-05-14', 1, 'osde', 'denise,Mark', 'easafe@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id_pago` int(8) NOT NULL,
  `fecha_pago` date DEFAULT NULL,
  `descripcion_pago` varchar(50) DEFAULT NULL,
  `cantidad_pago` int(8) DEFAULT NULL,
  `liqui_pago` decimal(12,5) DEFAULT NULL,
  `dni_pago` int(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id_pago`, `fecha_pago`, `descripcion_pago`, `cantidad_pago`, `liqui_pago`, `dni_pago`) VALUES
(1, '2020-09-07', 'pago papel (x12)', 4, '500.00000', NULL),
(2, '2020-09-18', 'pago papel (x10)', 4, '1500.00000', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(8) NOT NULL,
  `nombre_permiso` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permiso`, `nombre_permiso`) VALUES
(1, 'admin'),
(2, 'clínico'),
(3, 'paciente'),
(4, 'recepcionista'),
(5, 'administrativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibos`
--

CREATE TABLE `recibos` (
  `id_recibo` int(8) NOT NULL,
  `fecha_recibo` date DEFAULT NULL,
  `descripcion_recibo` varchar(50) DEFAULT NULL,
  `clinico_recibo` varchar(50) DEFAULT NULL,
  `liqui_recibo` decimal(13,5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recibos`
--

INSERT INTO `recibos` (`id_recibo`, `fecha_recibo`, `descripcion_recibo`, `clinico_recibo`, `liqui_recibo`) VALUES
(3, '2020-05-13', 'pago al profe', 'denise,Mark', '50.16340'),
(4, '2020-09-22', 'pasazo a jorgito', 'denise,Mark', '800.00000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `id_turno` int(8) NOT NULL,
  `fecha_turno` date DEFAULT NULL,
  `horario_turno` varchar(15) NOT NULL,
  `paciente_turno` varchar(50) DEFAULT NULL,
  `clinico_turno` varchar(50) DEFAULT NULL,
  `comentarios_turno` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`id_turno`, `fecha_turno`, `horario_turno`, `paciente_turno`, `clinico_turno`, `comentarios_turno`) VALUES
(1, '2020-09-07', '17:30', 'juan,de', 'denise,Mark', 'tiene problemitas :B'),
(2, '2020-09-17', '18:00', 'juan,de', 'denise,Mark', 'viene drogado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(8) NOT NULL,
  `nombre_usuario` varchar(30) DEFAULT NULL,
  `apellido_usuario` varchar(30) DEFAULT NULL,
  `edad_usuario` int(8) DEFAULT NULL,
  `dni_usuario` varchar(30) DEFAULT NULL,
  `email_usuario` varchar(50) DEFAULT NULL,
  `contraseña_usuario` varchar(50) DEFAULT NULL,
  `domicilio_usuario` varchar(50) DEFAULT NULL,
  `fecha_nac_usuario` date DEFAULT NULL,
  `notas_usuario` varchar(100) DEFAULT NULL,
  `permiso_usuario` int(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `apellido_usuario`, `edad_usuario`, `dni_usuario`, `email_usuario`, `contraseña_usuario`, `domicilio_usuario`, `fecha_nac_usuario`, `notas_usuario`, `permiso_usuario`) VALUES
(1, 'Leonardo', 'Mark', 23, '33123456', 'ldmaques007@gmail.com', 'garfio1234', 'sarasa 5520 dpy', '2019-03-12', 'hackeador pro brou', 1),
(3, 'denise', 'czyz', 40, '22987354', NULL, 'sasa', 'al ado de fas motos', '2019-10-09', 'se enoja si le sacas el hibernacion ', 1),
(4, 'carl', 'marx', 42, '22987346', 'sasa@marx.com', 'sasa', 'al ado de fas motos', '2015-06-10', 'se enoja si le sacas el invernacion ', 3),
(5, 'Noemi', 'Rearte', 20, '123455765', 'Ncsas@hotmail.com', 'sasa', 'Juan de los palotes 1234', '2020-06-02', '', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`id_analisis`);

--
-- Indices de la tabla `clinicos`
--
ALTER TABLE `clinicos`
  ADD PRIMARY KEY (`id_clinico`);

--
-- Indices de la tabla `formato`
--
ALTER TABLE `formato`
  ADD PRIMARY KEY (`id_formato`);

--
-- Indices de la tabla `historiales`
--
ALTER TABLE `historiales`
  ADD PRIMARY KEY (`id_historial`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `insumos`
--
ALTER TABLE `insumos`
  ADD PRIMARY KEY (`id_insumo`);

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`id_medicamento`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `recibos`
--
ALTER TABLE `recibos`
  ADD PRIMARY KEY (`id_recibo`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id_turno`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `analisis`
--
ALTER TABLE `analisis`
  MODIFY `id_analisis` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clinicos`
--
ALTER TABLE `clinicos`
  MODIFY `id_clinico` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `formato`
--
ALTER TABLE `formato`
  MODIFY `id_formato` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `historiales`
--
ALTER TABLE `historiales`
  MODIFY `id_historial` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id_horario` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `insumos`
--
ALTER TABLE `insumos`
  MODIFY `id_insumo` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `id_medicamento` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_paciente` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id_pago` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `recibos`
--
ALTER TABLE `recibos`
  MODIFY `id_recibo` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id_turno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
