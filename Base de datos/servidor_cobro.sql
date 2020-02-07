-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2020 a las 03:30:32
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servidor.cobro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `curp` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `seccion` varchar(10) DEFAULT NULL,
  `grado` varchar(10) DEFAULT NULL,
  `codigo` varchar(10) DEFAULT NULL,
  `credito` double DEFAULT NULL,
  `estatus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `curp`, `celular`, `seccion`, `grado`, `codigo`, `credito`, `estatus`) VALUES
(99, 'angel leon', '363263HDD636353222', '584124614009', 'b', '9no', '0102', 55.5, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `billetera`
--

CREATE TABLE `billetera` (
  `id` int(10) NOT NULL,
  `alumno_id` int(10) NOT NULL,
  `numero_comida` int(10) NOT NULL,
  `credito_comida` int(10) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `billetera`
--

INSERT INTO `billetera` (`id`, `alumno_id`, `numero_comida`, `credito_comida`, `fecha`) VALUES
(1, 97, 35, 5, '2020-02-06'),
(3, 98, 1, 5, '2020-02-06'),
(4, 0, 0, 5, '2020-02-06'),
(5, 0, 0, 5, '2020-02-06'),
(6, 0, 0, 5, '2020-02-06'),
(7, 0, 0, 5, '2020-02-07'),
(8, 0, 0, 5, '2020-02-07'),
(9, 0, 0, 5, '2020-02-07'),
(10, 0, 0, 5, '2020-02-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(10) NOT NULL,
  `alumno_id` int(10) NOT NULL,
  `relacion_precio_id` int(10) NOT NULL,
  `tipo_pago_id` int(10) NOT NULL,
  `monto` double DEFAULT NULL,
  `credito_generado` double DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_precio`
--

CREATE TABLE `relacion_precio` (
  `id` int(10) NOT NULL,
  `monto` double DEFAULT NULL,
  `credito` double DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_alumno`
--

CREATE TABLE `tabla_alumno` (
  `id_alumno` int(10) NOT NULL,
  `nombre_alumno` varchar(50) DEFAULT NULL,
  `curp_alumno` varchar(50) DEFAULT NULL,
  `celular_alumno` varchar(50) DEFAULT NULL,
  `estatus_alumno` varchar(50) DEFAULT NULL,
  `seccion_alumno` varchar(10) DEFAULT NULL,
  `grado_alumno` varchar(10) DEFAULT NULL,
  `codigo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla_alumno`
--

INSERT INTO `tabla_alumno` (`id_alumno`, `nombre_alumno`, `curp_alumno`, `celular_alumno`, `estatus_alumno`, `seccion_alumno`, `grado_alumno`, `codigo`) VALUES
(95, 'GABRIEL JOANGEL CORDERO SANCHEZ ', '43435NHDFHJRHJEHR4', '4262490527', '1', '4', 'a', '0263'),
(97, 'MARIA SANCHEZ ', '363263HDD636353227', '5525187363', '1', '4', 'a', '290'),
(98, 'GABRELE', '363263HDD636353222', '3423423424', '1', '4', 'a', '076');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_control_abono`
--

CREATE TABLE `tabla_control_abono` (
  `id_abono` int(10) NOT NULL,
  `id_control_pago` int(10) DEFAULT NULL,
  `monto_abono` varchar(20) DEFAULT NULL,
  `fecha_actual` varchar(10) DEFAULT NULL,
  `fecha_limite` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_control_pago`
--

CREATE TABLE `tabla_control_pago` (
  `id_control_pago` int(10) NOT NULL,
  `id_alumno` int(10) DEFAULT NULL,
  `id_tipo_pago` int(10) DEFAULT NULL,
  `monto_pago` varchar(50) DEFAULT NULL,
  `credito_pago` varchar(50) DEFAULT NULL,
  `cantidad_comida_dia` varchar(20) DEFAULT NULL,
  `fecha_pago` varchar(20) DEFAULT NULL,
  `id_precio_comiga` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla_control_pago`
--

INSERT INTO `tabla_control_pago` (`id_control_pago`, `id_alumno`, `id_tipo_pago`, `monto_pago`, `credito_pago`, `cantidad_comida_dia`, `fecha_pago`, `id_precio_comiga`) VALUES
(1, 0, 0, '0', '120', '5', '2020-02-05', NULL),
(2, 97, 0, '6.86', '', '', '2020-02-06', NULL),
(3, 97, 0, '6.86', '', '', '2020-02-06', NULL),
(4, 97, 0, '6.86', '', '', '2020-02-06', NULL),
(5, 97, 0, '6.86', '', '', '2020-02-06', NULL),
(6, 97, 0, '6.86', '', '', '2020-02-06', NULL),
(7, 97, 0, '6.86', '', '', '2020-02-06', NULL),
(8, 97, 2, '17.14', '240', '10', '2020-02-06', NULL),
(9, 97, 2, '17.14', '240', '10', '2020-02-07', NULL),
(10, 290, 2, '120', '240', '10', '2020-02-07', NULL),
(11, 97, 2, '48', '168', '7', '2020-02-07', NULL),
(12, 97, 3, '288', '408', '17', '2020-02-07', NULL),
(13, 0, 3, '264', '384', '16', '2020-02-07', NULL),
(14, 97, 2, '2400', '2520', '105', '2020-02-07', NULL),
(15, 97, 2, '288', '408', '17', '2020-02-07', NULL),
(16, 97, 1, '288', '408', '17', '2020-02-07', NULL),
(17, 97, 2, '72', '192', '8', '2020-02-07', NULL),
(18, 0, 1, '72', '192', '8', '2020-02-07', NULL),
(19, 97, 1, '72', '192', '8', '2020-02-07', NULL),
(20, 97, 1, '240', '432', '18', '2020-02-07', NULL),
(21, 97, 1, '240', '672', '28', '2020-02-07', NULL),
(22, 97, 1, '72', '96', '4', '2020-02-07', NULL),
(23, 97, 1, '72', '168', '7', '2020-02-07', NULL),
(24, 97, 1, '72', '240', '10', '2020-02-07', NULL),
(25, 97, 1, '48', '288', '12', '2020-02-07', NULL),
(26, 97, 1, '24', '312', '13', '2020-02-07', NULL),
(27, 0, 1, '48', '168', '7', '2020-02-07', NULL),
(28, 97, 1, '48', '360', '15', '2020-02-07', NULL),
(29, 97, 2, '48', '408', '17', '2020-02-07', NULL),
(30, 97, 1, '48', '456', '19', '2020-02-07', NULL),
(31, 97, 2, '48', '504', '21', '2020-02-07', NULL),
(32, 97, 2, '48', '552', '23', '2020-02-07', NULL),
(33, 97, 2, '48', '600', '25', '2020-02-07', NULL),
(34, 97, 2, '48', '648', '27', '2020-02-07', NULL),
(35, 97, 1, '48', '696', '29', '2020-02-07', NULL),
(36, 97, 2, '24', '720', '30', '2020-02-07', NULL),
(37, 97, 1, '48', '768', '32', '2020-02-07', NULL),
(38, 97, 2, '48', '816', '34', '2020-02-07', NULL),
(39, 97, 2, '72', '888', '37', '2020-02-07', NULL),
(40, 97, 2, '24', '912', '38', '2020-02-07', NULL),
(41, 97, 2, '48', '960', '40', '2020-02-07', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_r_precio`
--

CREATE TABLE `tabla_r_precio` (
  `id_precio_actual` int(10) NOT NULL,
  `precio_actual` varchar(10) DEFAULT NULL,
  `credito_actual` varchar(10) DEFAULT NULL,
  `fecha_cambio` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla_r_precio`
--

INSERT INTO `tabla_r_precio` (`id_precio_actual`, `precio_actual`, `credito_actual`, `fecha_cambio`) VALUES
(23, '24', '1', '2020-01-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pago`
--

CREATE TABLE `tipo_pago` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `billetera`
--
ALTER TABLE `billetera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `relacion_precio`
--
ALTER TABLE `relacion_precio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tabla_alumno`
--
ALTER TABLE `tabla_alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `tabla_control_abono`
--
ALTER TABLE `tabla_control_abono`
  ADD PRIMARY KEY (`id_abono`);

--
-- Indices de la tabla `tabla_control_pago`
--
ALTER TABLE `tabla_control_pago`
  ADD PRIMARY KEY (`id_control_pago`);

--
-- Indices de la tabla `tabla_r_precio`
--
ALTER TABLE `tabla_r_precio`
  ADD PRIMARY KEY (`id_precio_actual`);

--
-- Indices de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT de la tabla `billetera`
--
ALTER TABLE `billetera`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `relacion_precio`
--
ALTER TABLE `relacion_precio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tabla_alumno`
--
ALTER TABLE `tabla_alumno`
  MODIFY `id_alumno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT de la tabla `tabla_control_pago`
--
ALTER TABLE `tabla_control_pago`
  MODIFY `id_control_pago` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `tabla_r_precio`
--
ALTER TABLE `tabla_r_precio`
  MODIFY `id_precio_actual` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
