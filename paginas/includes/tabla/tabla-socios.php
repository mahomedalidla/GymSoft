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
				<th class = "table-img"></th>
				<th class = "table-name">Nombre</th>
				<th class = "table-phone">Teléfono</th>
				<th class = "table-member">Tipo de Membresía</th>
				<th class = "table-exp">Fin de Membresía</th>
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
			$sql = "select * from socios";
	
			$resultado = mysqli_query($conexion, $sql);
	
			if (mysqli_num_rows($resultado) > 0) {
				
				while ($renglon = mysqli_fetch_assoc($resultado)) {
					$fotoSocio = $renglon['fotoSocio'];
					$nombreSocio = $renglon['nombreSocio'];
					$telefono = $renglon['telefono'];
					$tipoMembresia = $renglon['tipoMembresia'];
					$fechaFin = $renglon['fechaFin'];
					
	
					echo 
					"	<tbody>
						<tr>
						<td class = 'table-img'>
						<img src='$fotoSocio'>
						</td>
						<td class = 'table-name'>$nombreSocio</td>
						<td class = 'table-phone'>$telefono</td>
						<td class = 'table-member'>$tipoMembresia</td>
						<td class = 'table-exp'>07-02-2021</td>
							<td class = 'table-buttons' action='delete.php' method='post'>
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