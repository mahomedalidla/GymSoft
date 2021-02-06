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

    $fechaActual = date('Y-m-d');

    /* Obteniendo fecha del sig mes */
    $fechaFin = new DateTime();
    $fechaFin->modify( 'next month' );
    echo $fechaFin->format( 'Y-m-d' );    

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