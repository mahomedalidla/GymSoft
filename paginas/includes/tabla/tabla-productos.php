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
				<th class = "table-phone">Descripcion</th>
				<th class = "table-member">Precio</th>
				<th class = "table-member">Proveedor</th>
				<!-- Botones de opciones -->
				<th class = "table-buttons"></th> 
			</tr>
		</thead>
		<tbody>

		<!-- LLenado de tabla dinamico con bd -->
		<?php
		
		// Haciendo coneccion a bd
		$conexion = conectar();

			$sql = "select nombreProducto,imagen, descripcion, nombreProveedor, precioUnidad from producto inner join proveedores on producto.id_producto = proveedores.id_proveedor;";
	
			$resultado = mysqli_query($conexion, $sql);
	
			if (mysqli_num_rows($resultado) > 0) {
				
				while ($renglon = mysqli_fetch_assoc($resultado)) {
					$fotoProducto = $renglon['imagen'];
					$nombreProducto = $renglon['nombreProducto'];
					$descripcion = $renglon['descripcion'];
					$precioUnidad = $renglon['precioUnidad'];
					$proveedor = $renglon['nombreProveedor'];
					
	
					echo 
					"	<tbody>
						<tr>
						<td class = 'table-img'>
						<img src='$fotoProducto'>
						</td>
						<td class = 'table-name'>$nombreProducto</td>
						<td class = 'table-phone'>$descripcion</td>
						<td class = 'table-member'>$precioUnidad</td>
						<td class = 'table-exp'>$proveedor</td>
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

		mysqli_close($conexion);
		?>
		</tbody>
	</table>
</body>
</html>