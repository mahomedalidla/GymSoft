-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2021 a las 01:08:23
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

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

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de las tablas volcadas
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
