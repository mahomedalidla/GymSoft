<!DOCTYPE html>
<html>
<head>
	<title>Ay no sé</title>
	<link href="tabla-socios.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<table>
		<thead>
			<tr class = "table-header">
				<!-- Imagenes -->
				<th class = "table-name">Empresa</th>
				<th class = "table-phone">Contacto</th>
				<th class = "table-member">Direccion</th>
				<th class = "table-exp">Telefono</th>
				<th class = "table-exp">correo</th>
				<!-- Botones de opciones -->
				<th class = "table-buttons"></th> 
			</tr>
		</thead>
		<tbody>

		<!-- LLenado de tabla dinamico con bd -->
		<?php
		
		// Haciendo coneccion a bd
		$conexion = conectar();
			ver_socios($conexion);
        mysqli_close($conexion);


		function ver_socios($conexion) {
			$sql = "select * from proveedores";
	
			$resultado = mysqli_query($conexion, $sql);
	
			if (mysqli_num_rows($resultado) > 0) {
				
				while ($renglon = mysqli_fetch_assoc($resultado)) {
					$empresa = $renglon['nombreProveedor'];
					$contacto = $renglon['contacto'];
					$direccion = $renglon['direccion'];
					$telefono = $renglon['telefono'];
					$correo = $renglon['correo'];
					
	
					echo 
					"	<tbody>
						<tr>
						<td class = 'table-img'>$empresa</td>
						<td class = 'table-name'>$contacto</td>
						<td class = 'table-phone'>$direccion</td>
						<td class = 'table-member'>$telefono</td>
						<td class = 'table-exp'>$correo</td>
							<td class = 'table-buttons'>
								<a href='' class = 'edit-button'>Editar</a>
								<a href='' class = 'delete-button'>Eliminar</a>
							</td>";
				}
				
			} 
			else {
				echo 
					"	<tbody>
						<tr>
						<td class = 'table-img'>
						<img src=''>
						</td>
						<td class = 'table-name'>No hay datos</td>
						<td class = 'table-phone'>No hay datos</td>
						<td class = 'table-member'>No hay datos</td>
						<td class = 'table-exp'>No hay datos</td>
							<td class = 'table-buttons'>
								<a href='' class = 'edit-button'>Editar</a>
								<a href='' class = 'delete-button'>Eliminar</a>
							</td>";
			}
		}
		?>
		</tbody>
	</table>
</body>
</html>