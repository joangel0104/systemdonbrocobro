-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2020 a las 02:20:21
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

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
  `beca_id` tinyint(4) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `seccion` varchar(10) DEFAULT NULL,
  `grado` varchar(10) DEFAULT NULL,
  `codigo` varchar(10) DEFAULT NULL,
  `observacion` mediumtext NOT NULL,
  `credito_comida` int(10) NOT NULL,
  `estatus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `beca_id`, `celular`, `seccion`, `grado`, `codigo`, `observacion`, `credito_comida`, `estatus`) VALUES
(6, 'JOSE ANTONIO CARRO FLORES ', 2, '5528828828', 'a', '1', '402', 'tiene un adeudo pasado dela fecha 10-01-2020', 5, 'Activo'),
(7, 'GABRIEL JOANGEL CORDERO SANCHEZ ', 1, '5511993273', 'a', '2', '587', 'sin adeude', 5, 'Activo'),
(8, 'ANA GABRIEL REQUENA OVALLES ', 1, '5562726262', 'a', '4', '303', 'sin adeudo ', 5, 'Activo'),
(9, 'CARLOS EDUARDO ESCOBAR LIMONCHE', 1, '5522525252', 'b', '4', '690', 'sin adeudo', 5, 'Activo'),
(10, 'PEDRO JOSE PEREZ ', 1, '5539838839', 'b', '1', '749', 'sin adeudo', 5, 'Activo'),
(11, 'TEREZA MARIA CORTEZ MIJARES', 1, '5556566343', 'a', '1', '375', 'sin adeudo', 5, 'Activo'),
(12, 'JUAN JOSE LANDAETA CORONA', 1, '5524452322', 'a', '5', '159', 'sin adeudos', 5, 'Activo'),
(13, 'ANGELICA MARIA MARTINEZ ARIAS ', 1, '5538865222', 'a', '3', '071', 'sin adeudo', 5, 'Activo'),
(14, 'JUANA ANDREINA PEREZ ', 1, '5533343433', 'b', '4', '694', 'sin adeudo', 5, 'Activo'),
(15, 'RAFAEL HERNADEZ', 1, '6534563632', 'a', '3', '381', 'aduskdbhdu', 5, 'Activo'),
(16, 'AMERICA MARIA LOPEZ DORANTE', 1, '5533322111', 'b', '1', '091', 'sin andeudo', 5, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE `asistencias` (
  `id` bigint(20) NOT NULL,
  `alumno_id` int(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asistencias`
--

INSERT INTO `asistencias` (`id`, `alumno_id`, `fecha`) VALUES
(0, 9, '2020-03-16'),
(0, 10, '2020-03-16'),
(0, 11, '2020-03-16'),
(0, 12, '2020-03-16'),
(0, 13, '2020-03-16'),
(0, 11, '2020-03-17'),
(0, 11, '2020-03-18'),
(0, 11, '2020-03-19'),
(0, 11, '2020-03-20'),
(0, 11, '2020-03-23'),
(0, 11, '2020-03-24'),
(0, 11, '2020-03-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `becas`
--

CREATE TABLE `becas` (
  `id` tinyint(3) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio_comida` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `becas`
--

INSERT INTO `becas` (`id`, `nombre`, `precio_comida`) VALUES
(1, 'Regular', 24),
(2, 'Becado al 50%', 15),
(3, 'Bacado al 100%', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `billetera`
--

INSERT INTO `billetera` (`id`, `alumno_id`, `numero_comida`, `credito_comida`, `fecha`) VALUES
(27, 9, 6, 5, '2020-03-16'),
(28, 11, 0, 3, '2020-03-16'),
(29, 10, 8, 5, '2020-03-16'),
(30, 13, 4, 5, '2020-03-16'),
(31, 12, 11, 5, '2020-03-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago`
--

CREATE TABLE `forma_pago` (
  `id` int(10) NOT NULL,
  `pago_id` int(10) NOT NULL,
  `tipo_pago_id` int(10) NOT NULL,
  `monto` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(10) NOT NULL,
  `alumno_id` int(10) NOT NULL,
  `precio_beca` double NOT NULL,
  `tipo_pago_id` int(10) NOT NULL,
  `monto` double DEFAULT NULL,
  `credito_generado` int(10) DEFAULT NULL,
  `credito_total` int(10) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `alumno_id`, `precio_beca`, `tipo_pago_id`, `monto`, `credito_generado`, `credito_total`, `fecha`) VALUES
(81, 9, 24, 1, 168, 7, 12, '2020-03-16'),
(82, 11, 24, 1, 96, 4, 9, '2020-03-16'),
(83, 10, 24, 1, 216, 9, 14, '2020-03-16'),
(84, 13, 24, 1, 120, 5, 10, '2020-03-16'),
(85, 12, 24, 1, 288, 12, 17, '2020-03-16'),
(86, 11, 24, 1, 48, 2, 4, '2020-03-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_r_precio`
--

CREATE TABLE `tabla_r_precio` (
  `id_precio_actual` int(10) NOT NULL,
  `precio_actual` varchar(10) DEFAULT NULL,
  `credito_actual` varchar(10) DEFAULT NULL,
  `fecha_cambio` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_pago`
--

INSERT INTO `tipo_pago` (`id`, `nombre`, `fecha`) VALUES
(1, 'Efectivo', '2020-02-09'),
(2, 'Deposito', '2020-02-09'),
(3, 'Pago Diario', '2020-02-09'),
(4, 'Vale', '2020-02-09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `becas`
--
ALTER TABLE `becas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `billetera`
--
ALTER TABLE `billetera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `becas`
--
ALTER TABLE `becas`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `billetera`
--
ALTER TABLE `billetera`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `tabla_r_precio`
--
ALTER TABLE `tabla_r_precio`
  MODIFY `id_precio_actual` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
