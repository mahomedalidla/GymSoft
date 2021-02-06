<!-- idsocio 	nombreSocio 	fotoSocio 	sexo 	membresiaMembresia 	telefono 	fechaNacimiento -->

<?php

    include('includes/utileria.php');

    if (empty($_POST)) {
        redireccionar('Prohibido', 'index.php');
        return;
    }

    $nombre = validar ($_POST['nombre']);
    $sexo = validar ($_POST['sexo']);
    $membresia = validar ($_POST['membresia']);
    $telefono = validar ($_POST['telefono']);
    $fechaN =validar ($_POST['fechaN']);

    if ($nombre == '' || $sexo == '' || $membresia == '' || $telefono == '') {
        redireccionar('Error en la conexion', 'registro.php');
        return;
    }


    $conexion = conectar();

    if (!$conexion) {
        redireccionar('Error en la conexion', 'registro.php');
        return;
    }

    $imagen = subir_imagen($_FILES['imagen']);

    /* Obteniendo fecha actual con funcion date */
    $fechaActual = date('Y-m-d');

    /* Obteniendo fecha del sig mes */
    $fechaFin = new DateTime();
    $fechaFin->modify( 'next month' );
    echo $fechaFin->format( 'Y-m-d' );

    /* Comparacion de fechas, aun no funciona, falta convertir fechas a strtotime */
    $fecha_actual = strtotime(date("d-m-Y H:i:00",time()));
    $fecha_entrada = strtotime("19-11-2022 21:00:00");

    if($fecha_actual > $fecha_entrada)
	{
	    echo "La fecha actual es mayor a la comparada.";
	}else
		{
		    echo "La fecha comparada es igual o menor";
		}
    /* /fin comparacion de fechas */

    $sql = "insert into socios(nombreSocio, fotoSocio, sexo, tipoMembresia, telefono, fechaNacimiento, fechaInicio) 
    values ('$nombre', '$imagen', '$sexo', '$membresia', '$telefono', '$fechaN', '$fechaActual')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        redireccionar('Datos guardados', 'registroSocio.php');
    }
    else {
        redireccionar('Error: ' . mysqli_error($conexion), 'registro.php');
    }

    mysqli_close($conexion);
?>