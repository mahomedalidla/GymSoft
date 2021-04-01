/* DROP DATABASE IF EXISTS gymSoftV1;
CREATE DATABASE IF NOT EXISTS gymSoftV1;
USE gymSoftV1; */
USE unaux_28193841_gymSoftV1;
CREATE TABLE productos(
	id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	codigo VARCHAR(255) NOT NULL,
	descripcion VARCHAR(255) NOT NULL,
	precioVenta DECIMAL(5, 2) NOT NULL,
	precioCompra DECIMAL(5, 2) NOT NULL,
	existencia DECIMAL(5, 2) NOT NULL,
	PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8;

CREATE TABLE ventas(
	id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	fecha DATETIME NOT NULL,
	total DECIMAL(7,2),
	PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8;

CREATE TABLE productos_vendidos(
	id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	id_producto BIGINT UNSIGNED NOT NULL,
	cantidad BIGINT UNSIGNED NOT NULL,
	id_venta BIGINT UNSIGNED NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(id_producto) REFERENCES productos(id) ON DELETE CASCADE,
	FOREIGN KEY(id_venta) REFERENCES ventas(id) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8;

INSERT INTO productos(id, codigo, descripcion, precioVenta, precioCompra, existencia) 
VALUES
(1, '1', 'Galletas chokis', 15, 10, 100),
(2, '2', 'Mermelada de fresa', 80, 65, 100),
(3, '3', 'Aceite', 20, 18, 100),
(4, '4', 'Palomitas de maíz', 15, 12, 100),
(5, '5', 'Doritos', 8, 5, 100);


/* Addition */


CREATE TABLE `socios` (
  `id_socio` int(11) NOT NULL,
  `nombreSocio` varchar(64) NOT NULL,
  `fotoSocio` varchar(1024) NOT NULL,
  `sexo` varchar(64) NOT NULL,
  `tipoMembresia` varchar(64) NOT NULL,
  `telefono` varchar(64) NOT NULL,
  `fechaNacimiento` varchar(64) NOT NULL,
  `fechaInicio` varchar(64) NOT NULL,
  `fechaFin` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`id_socio`, `nombreSocio`, `fotoSocio`, `sexo`, `tipoMembresia`, `telefono`, `fechaNacimiento`, `fechaInicio`, `fechaFin`) VALUES
(37, 'Bryan Mahomedalid', '../img-uploaded/60239f12b12111.47850201.jpg', 'Masculino', 'Estudiante', '3113001707', '1998-02-07', '2021-02-10', '');

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
  MODIFY `id_socio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
# Correcto
