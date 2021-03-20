
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM socios;");
$socios = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

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
			$urlImagenBasica = "../img-uploaded/default.png";
			$resultado = mysqli_query($conexion, $sql);
	
			if (mysqli_num_rows($resultado) > 0) {
				while ($renglon = mysqli_fetch_assoc($resultado)) {
					$id = $renglon['id_socio'];
					$fotoSocio = $renglon['fotoSocio'];
					$nombreSocio = $renglon['nombreSocio'];
					$telefono = $renglon['telefono'];
					$tipoMembresia = $renglon['tipoMembresia'];
					$fechaFin = $renglon['fechaFin'];

					
				  
					if($fotoSocio == null) {
						$fotoSocio = $urlImagenBasica;
					 }
					
					echo 
					"	<tbody>
						<tr>
						<td class = 'table-img'>
						<img src='$fotoSocio'>
						</td>
						<td class = 'table-name'>$nombreSocio</td>
						<td class = 'table-phone'>$telefono</td>
						<td class = 'table-member'>$tipoMembresia</td>
						<td class = 'table-exp'>$fechaFin</td>
							<td class = 'table-buttons' action='delete.php' method='post'>

							
							<a class='btn btn-warning' href='eliminarSocio.php?id='.$id.'>acac<i class='fa fa-edit'></i></a>
								<a href=''<?php echo 'eliminarSocio.php?id=' . $id?>'' class = 'delete-button'>Eldiminar</a>

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
								
							</td>";
			}
		}
		?>
		</tbody>
	</table>
</body>
</html>