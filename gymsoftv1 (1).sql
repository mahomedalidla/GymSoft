-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2021 a las 05:21:00
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

DROP DATABASE IF EXISTS gymSoftV1;
CREATE DATABASE IF NOT EXISTS gymSoftV1;
USE gymSoftV1; 

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gymsoftv1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'admin', '$2y$10$UrGSvHTWm8.ZK4BzPmo8iuqsK6XF5RfHay6ooC5D50y/nShon5wqe', 'Robert', 'BriseÃ±o', 'logo.png', '2019-12-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `socio_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `status` int(1) NOT NULL,
  `time_out` time NOT NULL,
  `num_hr` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `attendance`
--

INSERT INTO `attendance` (`id`, `socio_id`, `date`, `time_in`, `status`, `time_out`, `num_hr`) VALUES
(144, 37, '2021-04-06', '04:06:47', 1, '04:09:55', 0),
(145, 38, '2021-04-06', '04:06:54', 1, '04:09:25', 0),
(146, 101028, '2021-04-06', '04:08:35', 1, '04:08:47', 0),
(147, 101029, '2021-04-06', '04:22:05', 1, '00:00:00', 0),
(148, 101030, '2021-04-07', '01:04:52', 1, '01:14:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `position`
--

INSERT INTO `position` (`id`, `description`, `rate`) VALUES
(1, 'Programador', 1000000),
(4, 'Instructor', 200),
(6, 'Socio', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precioVenta` decimal(5,2) NOT NULL,
  `precioCompra` decimal(5,2) NOT NULL,
  `existencia` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `descripcion`, `precioVenta`, `precioCompra`, `existencia`) VALUES
(1, '1', 'Galletas chokis', '15.00', '10.00', '100.00'),
(2, '2', 'Mermelada de fresa', '80.00', '65.00', '100.00'),
(3, '3', 'Aceite', '20.00', '18.00', '100.00'),
(4, '4', 'Palomitas de maíz', '15.00', '12.00', '100.00'),
(5, '5', 'Doritos', '8.00', '5.00', '98.00'),
(6, '11', 'p1', '12.00', '120.00', '8.00'),
(7, '747574', 'agua 600 mil', '15.00', '10.00', '13.00'),
(8, '9023800124029', 'Resistol Kores', '15.00', '10.00', '8.00'),
(9, '7501125104688', 'Electrolit 625 mL', '20.00', '16.00', '12.00'),
(10, '7501147417643', 'Lapiz', '10.00', '8.00', '0.00'),
(11, '777778', 'pinol', '15.00', '10.00', '2.00'),
(13, '7501428703250', 'Limpia pizarrones', '15.00', '10.00', '0.00'),
(14, '101013', 'Membresía Estudiante', '200.00', '200.00', '499.00'),
(15, '101014', 'Membresía General', '300.00', '300.00', '499.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_vendidos`
--

CREATE TABLE `productos_vendidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  `cantidad` bigint(20) UNSIGNED NOT NULL,
  `id_venta` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos_vendidos`
--

INSERT INTO `productos_vendidos` (`id`, `id_producto`, `cantidad`, `id_venta`) VALUES
(17, 13, 20, 16),
(18, 14, 1, 17),
(19, 15, 1, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `schedules`
--

INSERT INTO `schedules` (`id`, `time_in`, `time_out`) VALUES
(2, '08:00:00', '17:00:00'),
(3, '09:00:00', '18:00:00'),
(4, '10:00:00', '19:00:00'),
(5, '11:15:00', '01:00:00'),
(6, '17:00:00', '08:00:00'),
(7, '17:45:00', '20:20:00'),
(11, '17:30:00', '18:30:00'),
(12, '23:15:00', '23:45:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE `socios` (
  `id_socio` int(11) NOT NULL,
  `nombreSocio` varchar(64) NOT NULL,
  `fotoSocio` varchar(1024) NOT NULL,
  `sexo` varchar(64) NOT NULL,
  `tipoMembresia` varchar(64) NOT NULL,
  `telefono` varchar(64) NOT NULL,
  `fechaNacimiento` varchar(64) NOT NULL,
  `fechaInicio` varchar(64) NOT NULL,
  `fechaFin` varchar(64) NOT NULL,
  `id_horario` int(11) NOT NULL,
  `position_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`id_socio`, `nombreSocio`, `fotoSocio`, `sexo`, `tipoMembresia`, `telefono`, `fechaNacimiento`, `fechaInicio`, `fechaFin`, `id_horario`, `position_id`) VALUES
(37, 'Bryan Mahomedalidla', '../img-uploaded/60239f12b12111.47850201.jpg', 'Masculino', 'Estudiante', '3113001707', '1998-02-07', '2021-02-10', '', 2, 1),
(38, 'Karla Ayon', '../img-uploaded/60558c84377561.17990510.png', 'Femenino', 'General', '3111044543', '1995-09-09', '2021-03-20', '2021-04-20', 12, 6),
(101028, 'Jose Lopez ', '', 'Masculino', 'General', '3113001415', '19974-12-09', '2021-04-06', '2021-05-06', 1, 6),
(101030, 'Santoyo', '', 'Masculino', 'General', '3111111111', '2002-02-02', '2021-04-07', '2021-05-07', 12, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombreUsuario` varchar(64) NOT NULL,
  `direccionUsuario` varchar(64) DEFAULT NULL,
  `contrasenaUsuario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombreUsuario`, `direccionUsuario`, `contrasenaUsuario`) VALUES
(1, 'bryan', 'direccion', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `total` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fecha`, `total`) VALUES
(16, '2021-04-07 09:01:18', '300.00'),
(17, '2021-04-07 09:29:06', '200.00'),
(18, '2021-04-07 09:30:18', '0.00'),
(19, '2021-04-07 09:30:36', '300.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`id_socio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT de la tabla `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `socios`
--
ALTER TABLE `socios`
  MODIFY `id_socio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101031;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD CONSTRAINT `productos_vendidos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_vendidos_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
