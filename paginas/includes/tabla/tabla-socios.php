
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
		<a href="control-acceso/admin/employee.php" style="display: block; padding: 2%; text-align: end; color: green;">Renovar Socios</a>
			<tr class = "table-header">
				<!-- Imagenes -->
				<th class = "table-img"></th>
				<th class = "table-name">Nombre</th>
				<th class = "table-phone">Teléfono</th>
				<th class = "table-member">Tipo de Membresía</th>
				<th class = "table-member">Horario</th>
				<th class = "table-exp">Fin de Membresía</th>
				<!-- Botones de opciones -->
				
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
			$sql = "select id_socio, fotoSocio, nombreSocio, telefono, tipoMembresia, H.time_in, H.time_out, fechaFin from socios S inner join schedules H on H.id = S.id_horario;"; 
			
			$urlImagenBasica = "../img-uploaded/default.png";
			$resultado = mysqli_query($conexion, $sql);
	
			if (mysqli_num_rows($resultado) > 0) {
				while ($renglon = mysqli_fetch_assoc($resultado)) {
					$id = $renglon['id_socio'];
					$fotoSocio = $renglon['fotoSocio'];
					$nombreSocio = $renglon['nombreSocio'];
					$telefono = $renglon['telefono'];
					$tipoMembresia = $renglon['tipoMembresia'];
					$entrada = $renglon['time_in'];
					$salida = $renglon['time_out'];
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
						<td class = 'table-member'>$entrada - $salida</td>
						<td class = 'table-exp'>$fechaFin</td>
						
						";
						
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